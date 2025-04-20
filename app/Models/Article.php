<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ArticleCategory;

class Article extends Model
{
    use Hasfactory;

    protected $fillable = [
        'title',
        'slug',
        'preview_text',
        'detail_text',
        'preview_image',
        'detail_image',
        'tags',
        'category_id',
        'published_at',
        'active'
    ];

    protected $casts = [
        'tags' => 'json', 
        'published_at' => 'datetime', 
        'active' => 'boolean'
    ];

    public function category() {
        return $this->belongsTo(ArticleCategory::class);
    } 

    public function getFormattedPublishedAtAttribute() {
        return Carbon::parse($this->published_at)->translatedFormat('j F Y');
    }
}
