<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetInTouch extends Model
{
    use HasFactory;

    protected $table = 'get_in_touch';

    protected $fillable = [
        'name',
        'occupation',
        'email',
        'message',
        'image',
        'is_testimonial',
    ];
}
