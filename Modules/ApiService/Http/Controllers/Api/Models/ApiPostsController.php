<?php

namespace Modules\ApiService\Http\Controllers\Api\Models;

use Illuminate\Http\Request;
use Modules\Post\Entities\Post;
use App\Http\Controllers\Controller;

class ApiPostsController extends Controller
{
    protected $pagination = 1;

    public function __construct()
    {
        $this->middleware('ajax.request');
    }

    public function index(Request $request)
    {
        $model = new Post;
        $relations = $model->getRelations();

        if(count($relations) > 0) {

            \array_push($relations, 'category.translations');

            if( true != config('voyager.multilingual.enabled') ) {
                $relations = \array_diff($relations, ['translations', 'category.translations']);
            }

            $query = $model::with($relations);
        } else {
            $query = $model::select('*');
        }

        if(is_null($query)) {
            return $this->sendError('No posts result.');
        }

        $dataTypeContent = $query->orderBy($model->getKeyName(), 'DESC')->paginate($this->pagination);

        return response()->json($dataTypeContent, 200);
    }
}
