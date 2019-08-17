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
        if(Module::find('Post')->disabled())
            abort(404, 'Not Found');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $posts = $this->getPosts();
        $categories = Category::all();

    	return view('post::themes.' . Module::find('Post')->theme . '.index', compact('posts', 'categories', 'seo'));
    }

    public function category($slug){
        
        $category = Category::where('slug', '=', $slug)->firstOrFail();
        $posts = $this->getPostsByCategory($slug);
        $categories = Category::all();

        return view('post::themes.' . Module::find('Post')->theme . '.index', compact('posts', 'category', 'categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category, $slug)
    {
        return view('post::themes.' . Module::find('Post')->theme . '.show', [
            'post' => $this->getPost($slug),
            'relatedPosts' => $this->getRelatedPosts($slug),
        ]);
    }

    ////// SQL REQUEST //////

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
        $category = Category::where('slug', '=', $slug)->firstOrFail();

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
        $relatedPosts = array();
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
