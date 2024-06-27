<?php

namespace App\Models;

use App\Models\Community;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroupMessage extends Model
{
    use HasFactory;
    protected $fillable = [
        'from_user_id', 
        'community_id', 
        'message'
    ];

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }
    
    public function toCommunity()
    {
        return $this->belongsTo(Community::class, 'community_id');
    }

    
}
