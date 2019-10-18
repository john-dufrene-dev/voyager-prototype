<?php

namespace Modules\ApiService\Http\Controllers\Api;

use Illuminate\Http\Request;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use TCG\Voyager\Http\Controllers\ContentTypes\Text;

class ApiController extends \TCG\Voyager\Http\Controllers\Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

	use BreadRelationshipParser;
    //*********************************************
    //               ____
    //              |  _ \
    //              | |_) |
    //              |  _ <
    //              | |_) |
    //              |____/
    //
    //      API Browse our Data Type (B)READ
    //
    //*********************************************

    public function browseBread(Request $request, $slug)
    {
        $dataType = Datatype::where('slug', '=', $slug)->first();

        if(is_null($dataType)) {
            return $this->sendError('Bread not found.');
        }

        $model = app($dataType->model_name);

        if(count($model->getRelations()) > 0) {
            $query = $model::with($model->getRelations());
        } else {
            $query = $model::select('*');
        }

        $dataTypeContent = call_user_func([$query->orderBy($model->getKeyName(), 'DESC'), 'paginate']);

        return $this->sendResponse($dataTypeContent, 'Bread retrieved successfully.');
    }


    //*********************************************
    //                _____
    //               |  __ \
    //               | |__) |
    //               |  _  /
    //               | | \ \
    //               |_|  \_\
    //
    //  API Read an item of our Data Type B(R)EAD
    //
    //*********************************************

    public function readBread(Request $request, $slug, $id)
    {
        $slug = $this->getSlug($request);

        $dataType = Datatype::where('slug', '=', $slug)->first();

        if(is_null($dataType)) {
            return $this->sendError('Bread not found.');
        } 

        $model = app($dataType->model_name);

        if(count($model->getRelations()) > 0) {
            $query = $model::with($model->getRelations());
        } else {
            $query = $model::select('*');
        }

        $dataTypeContent = call_user_func([$query, 'find'], $id);

        if(!$dataTypeContent) {
            return $this->sendError($slug . ' with id ' . $id . ' not found.');
        } 

        return $this->sendResponse($dataTypeContent, 'Bread retrieved successfully.');
    }

    public function getSlug(Request $request)
    {
        if (isset($this->slug)) {
            $slug = $this->slug;
        } else {
            $slug = $request->segment(2);
        }

        return $slug;
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message)
    {
    	$response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
    	$response = [
            'success' => false,
            'message' => $error,
        ];

        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }

}
