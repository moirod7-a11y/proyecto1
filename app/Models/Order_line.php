<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_line extends Model
{
     protected $fillable=[
        "article_id",
        "quantity",
        "price",
        "subtotal_line"
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function address_shippings()
    {
        return $this->hasMany(Address_shipping::class);
    }
}
