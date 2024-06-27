<?php

namespace App\Models;

use App\Models\Community;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommunityCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'community_id',
        'category_id',
    ];

    public function community()
    {
        return $this->belongsTo(Community::class, 'community_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
