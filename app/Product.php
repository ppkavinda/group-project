<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Searchable;

    protected $guarded = [];

    public function clothes()
    {
        return $this->hasMany(Cloth::class);
    }
    
    public function masks()
    {
        return $this->hasMany(Mask::class);
    }

    public function soaps()
    {
        return $this->hasMany(Soap::class);
    }

    public function spices()
    {
        return $this->hasMany(Spice::class);
    }

    public function shoes()
    {
        return $this->hasMany(Shoe::class);
    }

    public function getSizesAttribute()
    {
        switch ($this->category_id) {
            case 1:
                return $this->clothes[0];
            case 2:
                return $this->masks[0];
            case 3:
                return $this->soaps[0];
            case 4:
                return $this->shoes[0];
            case 5:
                return $this->shoes[0];
        }
    }
    
    public function searchableAs()
    {
        return 'products_index';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // not used
    // public function cart () {
    //     return $this->belongsToMany(User::class, 'carts', 'product_id', 'user_id')->withPivot('quantity')->withTimestamps();
    // }
    public function reviews()
    {
        return $this->hasMany(\App\Review::class);
    }
    
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product', 'product_id', 'order_id');
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
