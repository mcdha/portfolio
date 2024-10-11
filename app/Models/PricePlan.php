<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricePlan extends Model
{
    use HasFactory;

    protected $table = 'price_plans';

    protected $fillable = [
        'title',
        'price_cost',
        'price_list',
    ];

    protected $casts = [
        'price_list' => 'array',
    ];
}
