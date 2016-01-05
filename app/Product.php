<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
    use SearchableTrait, Translatable;

    /**
     * Translatable attributes.
     *
     * @var array
     */
    public $translatedAttributes = ['title', 'description'];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'title' => 10,
            'description' => 10,
            'price' => 2,
        ]
    ];

    /**
     * fillable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'price', 
        'new', 
        'sale',
    	'amount', 
        'img',
    	'slug',
        'informations',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'informations' => 'json',
    ];

    /**
    * A Product has many answers.
    *
    * @var elquent collection
    */
    public function reviews() 
    {
        return $this->hasMany('App\Review');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }

    public function getCategoryListAttribute()
    {
    	return $this->categories->lists('id');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function($product){
            $product->slug = str_slug($product->title);
            $latestSlug = static::whereRaw("slug RLike '^{$product->slug}(-[0-9]*)?$'")
                            ->latest('id')
                            ->pluck('slug');
            if($latestSlug) {
                $pieces = explode('-', $latestSlug);
                $number = intval(end($pieces));
                $product->slug .= '-' . ($number + 1);
            }
        });
    }
}
