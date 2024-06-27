<?php

namespace App\Models;

use App\Models\Community;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function Community()
    {
        return $this->belongsToMany(Community::class, 'community_categories');
    }

}
