<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    //mass assignment untuk cara 2, kalo guarded sisanya boleh
    protected $fillable = [
        'category_id',
        'shop_id',
        'condition_id',
        'item_name',
        'item_stock',
        'item_description',
        'price'
    ];
}
