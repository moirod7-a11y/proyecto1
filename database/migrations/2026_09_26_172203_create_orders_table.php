<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments("id");
            $table->timestamp("date_create");
            $table->decimal("subtotal", 10, 2);
            $table->decimal("iva", 10, 2);
            $table->decimal("total_general", 10, 2);
            $table->string("additional_notes", 30);
            $table->string("state_order", 20);

            $table->integer("customer_id")->unsigned();
            $table->foreign("customer_id")->references("id")->on("customers")->onDelete("cascade")->onUpdate("cascade");

            $table->integer("address_shipping_id")->unsigned();
            $table->foreign("address_shipping_id")->references("id")->on("address_shippings")->onDelete("cascade")->onUpdate("cascade");

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};