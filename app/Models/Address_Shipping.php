<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address_Shipping extends Model
{
    protected $fillable=[
        "customer_id",
        'order_line_id',
        "number",
        "street",
        "neighborhood",
        "city",
        "reference_location",
        "state_address",
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function order_line()
    {
        return $this->belongsTo(Order_line::class);
    }
}
