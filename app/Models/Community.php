<?php

namespace App\Models;

use App\Models\Members;
use App\Models\Category;
use App\Models\GroupMessage;
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

    public function user()
    {
        return $this->belongsTo(User::class, 'members_id');
    }

    public function members()
    {
        return $this->hasMany(Members::class, 'community_id');
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'community_categories');
    }

    public function groupMessages()
    {
        return $this->hasMany(GroupMessage::class, 'community_id')->latest();
    }

    public function latestGroupMessage()
    {
        // Return the query builder for the relationship, scoped to only get the latest record
        return $this->groupMessages()->latest()->limit(1);
    }

}
