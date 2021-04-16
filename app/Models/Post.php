<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use HasTags;
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function pair()
    {
        return $this->belongsTo(Pair::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
