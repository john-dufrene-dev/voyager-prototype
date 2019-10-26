<?php

namespace Modules\ApiService\Http\Controllers\Api\Models;

use Illuminate\Http\Request;
use Modules\Post\Entities\Post;
use App\Http\Controllers\Controller;

class ApiPostsController extends Controller
{
    protected $pagination = 5;

    public function __construct()
    {
        $this->middleware('ajax.request');
    }

    public function index(Request $request)
    {
        $model = new Post;
        $relations = $model->getRelations();
        $datas = [];

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
            return response()->json('No posts results', 404);
        }

        $dataTypeContent = $query->orderBy($model->getKeyName(), 'DESC')->paginate($this->pagination);

        $datas['model'] = $dataTypeContent;

        return response()->json($datas, 200);
    }

    public function show(Request $request, $slug)
    {
        $model = new Post;
        $relations = $model->getRelations();
        $datas = [];

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
            return response()->json('No post results', 404);
        }

        $dataTypeContent = $query->where('slug', $slug)
            ->orderBy($model->getKeyName(), 'DESC')->first();

        if(is_null($dataTypeContent)) {
            return response()->json('No post results', 404);
        }

        $datas['model'] = $dataTypeContent;

        return response()->json($datas, 200);
    }
}
