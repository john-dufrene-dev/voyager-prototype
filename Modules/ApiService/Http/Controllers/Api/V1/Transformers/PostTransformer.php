<?php

namespace Modules\ApiService\Http\Controllers\Api\V1\Transformers;

use Modules\Post\Entities\Post;
use TCG\Voyager\Facades\Voyager;
use League\Fractal\TransformerAbstract;

class PostTransformer extends TransformerAbstract
{
    protected $translations = [];

    public function transform(Post $post) : array
    {
        if(request('short')) {

            $datas = [
                'model' => [
                    'entity' => 'Post',
                    'is_translatable' => $is_translatable = (true == config('voyager.multilingual.enabled')) 
                    ? true 
                    : false,
                ],
                'id' => $post->id,
                'title' => $post->title,
                'seo_title' => $post->seo_title,
                'meta_description' => $post->meta_description,
                'meta_keywords' => $post->meta_keywords,
                'slug' => $post->slug,
            ];
    
            if( true == $is_translatable ) {
                $datas['translations'] = [
                    'title' => $post->translate()->title,
                    'seo_title' => $post->translate()->seo_title,
                    'meta_description' => $post->translate()->meta_description,
                    'meta_keywords' => $post->translate()->meta_keywords,
                    'slug' => $post->translate()->slug,
                ];
            }
    
            return $datas;
        }
        
        $datas = [
            'model' => [
                'entity' => 'Post',
                'is_translatable' => $is_translatable = (true == config('voyager.multilingual.enabled')) 
                ? true 
                : false,
            ],
            'id' => $post->id,
            'title' => $post->title,
            'short_description' => $post->excerpt,
            'description' => $post->body,
            'seo_title' => $post->seo_title,
            'meta_description' => $post->meta_description,
            'meta_keywords' => $post->meta_keywords,
            'status' => $post->status,
            'published_date' => $post->published_date,
            'created_at' => $post->created_at,
            'updated_at' => $post->updated_at,
            'slug' => $post->slug,
            'image' => $post->image,
            'image_medium' => $post->img(),
            'image_small' => $post->img('small'),
            'image_cropped' => $post->img('cropped'),
            'link_to' => $post->link(),
            'link_to_category' => $post->linkToCategory(),
            'category' => [
                'id' => $post->category->id,
                'name' => $post->category->name,
                'slug' => $post->category->slug,
                'updated_att' => $post->category->updated_at,
            ],
        ];

        if( true == $is_translatable ) {
            $datas['translations'] = [
                'title' => $post->translate()->title,
                'short_description' => $post->translate()->excerpt,
                'description' => $post->translate()->body,
                'seo_title' => $post->translate()->seo_title,
                'meta_description' => $post->translate()->meta_description,
                'meta_keywords' => $post->translate()->meta_keywords,
                'published_date' => $post->translate()->published_date,
                'created_at' => $post->translate()->created_at,
                'updated_at' => $post->translate()->updated_at,
                'slug' => $post->translate()->slug,
                'category' => [
                    'name' => $post->category->translate()->name,
                    'slug' => $post->category->translate()->slug,
                ]
            ];
        }

        return $datas;
    }
}