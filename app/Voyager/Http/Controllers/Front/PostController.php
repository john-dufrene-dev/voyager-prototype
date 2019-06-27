<?php

namespace App\Voyager\Http\Controllers\Front;

use App\Voyager\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'edit', 'store', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('themes.'.config('prototype.theme').'.modules.posts.index', [
            'posts' => $this->getPosts(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('themes.'.config('prototype.theme').'.modules.posts.show', [
            'post' => $this->getPost($slug),
            'relatedPosts' => $this->getRelatedPosts($slug),
        ]);
    }

    public function getPosts()
    {
        // Get featured post
        $posts = Post::where([
            ['status', '=', 'PUBLISHED'],
        ])->whereDate('published_date', '<=', Carbon::now())
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        
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
