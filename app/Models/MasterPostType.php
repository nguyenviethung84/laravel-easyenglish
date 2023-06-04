<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MasterPostType
 *
 * @property $id
 * @property $Code
 * @property $Name
 * @property $Description
 * @property $Status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MasterPostType extends Model
{
    
    static $rules = [
		'Code' => 'required',
		'Status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Code','Name','Description','Status'];



}
