<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_cat extends Model
{
    // use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'content', 'status', 'parent_id',
    ];
}
