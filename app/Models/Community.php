<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Community extends Model
{
    use HasFactory;
    protected $table = 'community';

    protected $fillable = [
        'name',
        'img',
        'tagline',
        'category',
        'description',
        'guide',
        'members_id',
    ];

}
