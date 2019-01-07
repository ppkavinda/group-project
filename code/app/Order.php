<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // protected $fillable = ['user_id', 'status', ''];
    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'order_id', 'product_id')->withPivot(['amount', 'price']);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
