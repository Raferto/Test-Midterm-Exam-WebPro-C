<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    //mass assignment untuk cara 2, kalo guarded sisanya boleh
    protected $fillable = ['item_name','item_category'];
}
