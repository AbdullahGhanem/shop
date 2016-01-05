<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
    	'title',
    	'body', 
    	'slug'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function($page){
            $page->slug = str_slug($page->title);
            $latestSlug = static::whereRaw("slug RLike '^{$page->slug}(-[0-9]*)?$'")
                            ->latest('id')
                            ->pluck('slug');
            if($latestSlug) {
                $pieces = explode('-', $latestSlug);
                $number = intval(end($pieces));
                $page->slug .= '-' . ($number + 1);
            }
        });
    }
}
