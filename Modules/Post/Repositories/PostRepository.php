<?php

namespace Modules\Post\Repositories;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Modules\Post\Entities\Post;
use Modules\Post\Entities\Category;
use Nwidart\Modules\Facades\Module;

class PostRepository
{
    public function getPosts($pagination = 5)
    {
        $posts = Post::with($this->get_relations())
            ->whereDate('published_date', '<=', Carbon::now())
            ->orderBy('created_at', 'DESC')
            ->paginate($pagination);
        
        return $posts;
    }

    public function getPostsByCategory($slug, $pagination = 5)
    {
        $category = ( true == verify_trans() ) 
        ? Category::whereTranslation('slug', '=', $slug)->firstOrFail()
        : Category::where('slug', '=', $slug)->firstOrFail();

        $posts = Post::with($this->get_relations())
            ->where('category_id', '=', $category->id)
            ->whereDate('published_date', '<=', Carbon::now())
            ->orderBy('created_at', 'DESC')
            ->paginate($pagination);
    
        return $posts;
    }

    public function getPost($slug)
    {
        $post = Post::with($this->get_relations())
            ->where([
                ['slug', '=', $slug],
                ['status', '=', 'PUBLISHED']
            ])->whereDate('published_date', '<=', Carbon::now())
            ->firstOrFail();

        return $post;
    }

    public function getRelatedPosts($slug)
    {
        $post = $this->getPost($slug);

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

    public function get_relations()
    {
        $relations  = ( true != verify_trans() ) 
            ? ['category'] 
            : ['category', 'translations'] ;

        return $relations;
    }
}