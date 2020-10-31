<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    protected $table = 'shop_badges';
    protected $fillable = [
        'badge_name',
        'description',
        'price'
    ];
}
