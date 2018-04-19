<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User as User;

class Article extends Model
{
    //
    protected $fillable = [
        'user_id', 
        'type_id', 
        'title', 
        'summery', 
        'images', 
        'content', 
        'category_id',
        'tags',
        'is_reprint',
        'reprint_url',
        'reprint_summmery',
        'is_public',
        'views',
        'likes'
    ];

    protected $hidden = [
        
    ];

    public function user() {
        return $this->belongsTo('\App\Models\User');
    }

    public function category() {
        return $this->belongsTo('\App\Models\ArticleCategory');
    }

    public function type() {
        return $this->belongsTo('\App\Models\ArticleType');
    }

    
}
