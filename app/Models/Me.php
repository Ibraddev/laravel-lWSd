<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Me extends Model
{
    use HasFactory;
    protected $table = 'me';
    protected $fillable = [
        'birthday',
        'phone',
        'address',
        'email',
        'city',
        'freelance',
        'img_url'
    ];
}
