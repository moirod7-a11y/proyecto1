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
        Schema::create('orders_line', function (Blueprint $table) {
               $table->increments("id");
            $table->integer("quantity")->unsigned();
            $table->decimal("price", 10, 2);
            $table->decimal("subtotal_line", 10, 2);

            $table->integer("article_id")->unsigned();
            $table->foreign("article_id")->references("id")->on("articles")->onDelete("cascade")->onUpdate("cascade");

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_line');
    }
};
