<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'name', 'original_url', 'short_url', 'click_count'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function incrementAccessCount()
    {
        $this->increment('click_count');
    }
}
