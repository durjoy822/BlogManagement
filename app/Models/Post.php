<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

public function Category(): BelongsTo
{
    return $this->belongsTo(BlogCategory::class);
}
public function comment(){
    return $this->hasMany(Comment::class)->whereNull('parent_id');
}
}
