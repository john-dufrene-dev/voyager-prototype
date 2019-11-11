<?php

namespace Modules\Post\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Modules\Post\Entities\Post;
use Illuminate\Routing\Controller;
use Modules\Post\Entities\Category;
use Nwidart\Modules\Facades\Module;
use Artesaos\SEOTools\Facades\SEOMeta;
use Modules\Post\Repositories\PostRepository;

class PostController extends Controller
{
    protected $pagination = 5;
    protected $postRepository;

    public function __construct()
    {
        if(Module::find('Post')->isDisabled())
            abort(404, 'Not Found');

        $this->postRepository = new PostRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        SEOMeta::setTitle( __('seo.articles.meta_title') );
        SEOMeta::setDescription( __('seo.articles.meta_description') );
        SEOMeta::setKeywords( __('seo.articles.meta_keywords') );
        SEOMeta::setRobots('index,follow');

        $posts = $this->postRepository->getPosts($this->pagination);
        $categories = (true == verify_trans() )
            ? Category::with(['translations'])->get('id','name','slug')
            : Category::all('id','name','slug');

        if ($request->ajax()) {
            return view('post::themes.' . Module::find('Post')->get('theme') . '.includes.posts', compact(
                'posts',
                'categories'
            ));
        }

    	return view('post::themes.' . Module::find('Post')->get('theme') . '.index', compact(
            'posts',
            'categories'
        ));
    }

    public function category($slug, Request $request)
    {
        $posts = $this->postRepository->getPostsByCategory($slug, $this->pagination);

        $categories = (true == verify_trans() ) 
            ? Category::with(['translations'])->get('id','name','slug') 
            : Category::all('id','name','slug');

        SEOMeta::setTitle( $title = (true == verify_trans() )
        ? __('seo.articles.meta_title') .  ' - ' .$posts[0]->category->translate()->name 
        : __('seo.articles.meta_title') .  ' - ' . $posts[0]->category->name);
        SEOMeta::setDescription( $description = (true == verify_trans() ) 
            ? $posts[0]->category->translate()->name 
            : $posts[0]->category->name );
        SEOMeta::setKeywords( $keywords = (true == verify_trans() )
            ? $posts[0]->category->translate()->name 
            : $posts[0]->category->name );
        SEOMeta::setRobots('index,follow');

        if ($request->ajax()) {
            return view('post::themes.' . Module::find('Post')->get('theme') . '.includes.category', compact(
                'posts',
                'categories'
            ));
        }

        return view('post::themes.' . Module::find('Post')->get('theme') . '.category', compact(
            'posts', 
            'categories'
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($category, $slug)
    {
        $post = $this->postRepository->getPost($slug);

        SEOMeta::setTitle( $title = (true == verify_trans() ) 
        ? $post->category->translate()->name . ' - ' . $post->translate()->title 
        : $post->category->name . ' - ' .$post->title );
        SEOMeta::setDescription( $description = (true == verify_trans() ) 
            ? $post->translate()->meta_description 
            : $post->meta_description );
        SEOMeta::setKeywords( $keywords = (true == verify_trans() )
            ? $post->translate()->meta_keywords 
            : $post->meta_keywords );
        SEOMeta::setRobots('index,follow');

        return view('post::themes.' . Module::find('Post')->get('theme') . '.show', [
            'post' => $post
        ]);
    }
}
