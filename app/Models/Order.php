<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
 protected $fillable=[
        "customer_id",
        "id_address_shipping",
        "date_create",
        "subtotal",
        "iva",
        "total_general",
        "additional_notes",
        "state_order"
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function address_shippings()
    {
        return $this->hasMany(Address_shipping::class);
    }
}
