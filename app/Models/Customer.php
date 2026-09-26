<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $fillable=[
        "name",
        "email",
        "telephone",
        "balance",
        "credit_limit",
        "discount",
        "date_record",
        "state_customer"
    ];

    public function address_shippings()
    {
        return $this->hasMany(Address_shipping::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
