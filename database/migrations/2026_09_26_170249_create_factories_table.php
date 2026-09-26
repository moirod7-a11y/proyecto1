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
        Schema::create('factories', function (Blueprint $table) {
            $table->increments("id");
            $table->string("company_name", 50);
            $table->string("identification_card")->unique();
            $table->integer("telephone")->unique();
            $table->string("email")->unique();
            $table->string("address", 30);
            $table->string("state_supplier", 30);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factories');
    }
};
