<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     protected $fillable=[
        "code_internal",
        "description",
        "price",
        "cost",
        "state",
        "date_record"
    ];

    public function order_lines()
    {
        return $this->hasMany(Order_line::class);
    }

    public function factory_articles()
    {
        return $this->hasMany(Factory_article::class);
    }
}
