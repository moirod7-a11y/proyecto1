<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factory_article extends Model
{
    protected $fillable=[
        "article_id",
        "current_stock",
        "negotiation_cost",
        "date_estimated"
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function factories()
    {
        return $this->hasMany(Factory::class);
    }
}
