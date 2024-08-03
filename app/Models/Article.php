<?php

namespace App\Models;

use App\ArticleStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'article_categories', 'ArticleID', 'CategoryID');
    }

    protected $casts = [
        'Status' => ArticleStatus::class,
    ];



}
