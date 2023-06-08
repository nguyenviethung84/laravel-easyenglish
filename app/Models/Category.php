<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property $id
 * @property $parent_id
 * @property $order
 * @property $name
 * @property $slug
 * @property $created_at
 * @property $updated_at
 *
 * @property Category[] $categories
 * @property Category $category
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Category extends Model
{
    
    static $rules = [
		'order' => 'required',
		'name' => 'required',
		'slug' => 'required',
    ];

    static $postType = ['EASY', 'DIFFICULT'];
    static $status = ['PUBLISHED', 'DRAFT', 'PENDING'];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['parent_id','order','name','slug'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'parent_id');
    }
    

}
