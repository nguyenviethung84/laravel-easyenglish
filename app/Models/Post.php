<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @property $id
 * @property $author_id
 * @property $category_id
 * @property $title
 * @property $seo_title
 * @property $excerpt
 * @property $body
 * @property $image
 * @property $slug
 * @property $meta_description
 * @property $meta_keywords
 * @property $status
 * @property $featured
 * @property $created_at
 * @property $updated_at
 * @property $post_type
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Post extends Model
{
    
    static $rules = [
		'title' => 'required',
		'body' => 'required',
		'slug' => 'required',
		// 'status' => 'required',
		// 'post_type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['author_id','category_id','title','seo_title','excerpt','body','image','slug','meta_description','meta_keywords','status','featured','post_type'];



}
