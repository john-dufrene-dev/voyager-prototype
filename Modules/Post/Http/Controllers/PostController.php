<?php

namespace Modules\Post\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Modules\Post\Entities\Post;
use Illuminate\Routing\Controller;
use Modules\Post\Entities\Category;
use Nwidart\Modules\Facades\Module;

class PostController extends Controller
{
    protected $pagination = 6;

    public function __construct()
    {
        if(Module::find('Post')->isDisabled())
            abort(404, 'Not Found');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $posts = $this->getPosts();
        $total = $this->totalPosts();
        $categories = Category::all('id','name','slug');

        if ($request->ajax()) {
            return view('post::themes.' . Module::find('Post')->get('theme') . '.includes.posts', compact(
                'posts', 
                'categories',
                'total'
            ));
        }

    	return view('post::themes.' . Module::find('Post')->get('theme') . '.index', compact(
            'posts',
            'categories', 
            'total'
        ));
    }

    public function category($slug, Request $request)
    {
        $category = Category::whereTranslation('slug', $slug)->firstOrFail();
        
        $total = $this->totalPostsCategory($slug);
        $posts = $this->getPostsByCategory($slug);
        $categories = Category::all('id','name','slug');

        if ($request->ajax()) {
            return view('post::themes.' . Module::find('Post')->get('theme') . '.includes.posts', compact(
                'posts',
                'category',
                'categories',
                'total'
            ));
        }

        return view('post::themes.' . Module::find('Post')->get('theme') . '.index', compact(
            'posts', 
            'category', 
            'categories',
            'total'
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category, $slug)
    {

        return view('post::themes.' . Module::find('Post')->get('theme') . '.show', [
            'post' => $this->getPost($slug),
        ]);
    }

    ////// SQL REQUEST //////

    public function totalPosts()
    {
        // Get featured post
        $posts = Post::where([
            ['status', '=', 'PUBLISHED'],
        ])->whereDate('published_date', '<=', Carbon::now())->count();
        
        return $posts;
    }

    public function totalPostsCategory($slug)
    {
        $category = Category::whereTranslation('slug', '=', $slug)->firstOrFail();

        $posts = Post::where([
            ['status', '=', 'PUBLISHED'],
        ])->whereDate('published_date', '<=', Carbon::now())
            ->where('category_id', '=', $category->id)->count();
    
        return $posts;
    }


    public function getPosts()
    {
        // Get featured post
        $posts = Post::where([
            ['status', '=', 'PUBLISHED'],
        ])->whereDate('published_date', '<=', Carbon::now())
            ->orderBy('created_at', 'DESC')
            ->paginate($this->pagination);
        
        return $posts;
    }

    public function getPostsByCategory($slug)
    {
        $category = Category::whereTranslation('slug', '=', $slug)->firstOrFail();

        $posts = Post::where([
            ['status', '=', 'PUBLISHED'],
        ])->whereDate('published_date', '<=', Carbon::now())
            ->where('category_id', '=', $category->id)
            ->orderBy('created_at', 'DESC')
            ->paginate($this->pagination);
    
        return $posts;
    }

    public function getPost($slug)
    {
        // The post
        $post = Post::where([
                ['slug', '=', $slug],
                ['status', '=', 'PUBLISHED'],
            ])->whereDate('published_date', '<=', Carbon::now())
            ->firstOrFail();

        return $post;
    }

    public function getRelatedPosts($slug)
    {
        // The post
        $post = $this->getPost($slug);
        // Related posts (based on tags)
        $relatedPosts = [];
        if (!empty(trim($post->tags))) {
            $tags = explode(',', $post->tags);
            $relatedPosts = Post::where([
                    ['id', '!=', $post->id],
                ])->where(function ($query) use ($tags) {
                    foreach ($tags as $tag) {
                        $query->orWhere('tags', 'LIKE', '%'.trim($tag).'%');
                    }
                })->limit(4)
                ->orderBy('created_at', 'desc')
                ->get();
        }

        return $relatedPosts;
    }
}
