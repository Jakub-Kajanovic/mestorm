<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content','slug', 'image','featured_text'];

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function translations(){
        return $this->hasMany(BlogTranslation::class);
    }

    public function getTranslation($lang){
        return $this->translations->where('language_code', $lang)->first();
    }
}
