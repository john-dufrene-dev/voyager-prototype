<?php

namespace Modules\ApiService\Http\Controllers\Api\V1;

use Dingo\Api\Http\Response;
use Dingo\Api\Routing\Helpers;
use Modules\Post\Entities\Post;
use Illuminate\Routing\Controller;
use Dingo\Api\Contract\Http\Request;
use Modules\ApiService\Http\Controllers\Api\V1\Transformers\PostTransformer;

class PostController extends Controller
{
    use Helpers;

    protected $pagination = 5;
    protected $is_translatable;
    protected $relations = [];

    public function __construct()
    {
        $this->middleware(['ajax.request', 'localization']);

        $this->is_translatable = (true == verify_trans() ) ? true : false;
        $this->relations  = ( true == $this->is_translatable ) 
            ? ['category'] 
            : ['category', 'translations'] ;
    }

    public function index(Request $request, Post $model)
    {   
        $posts = Post::with($this->relations)->orderBy('published_date', 'DESC')->paginate($this->pagination);

		return $this->response->paginator($posts, new PostTransformer);
    }

    public function show($slug)
	{
        $post = Post::with($this->relations)->where('slug', '=', $slug)->firstOrFail();

		return $this->response->item($post, new PostTransformer);
	}
}