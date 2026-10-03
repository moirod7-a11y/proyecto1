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
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20);
            $table->string('email')->unique();
            $table->integer('telephone')->unique();
            $table->decimal("balance", 10, 2);
            $table->decimal("credit_limit", 10, 2);
            $table->string("discount", 5);
            $table->date("date_record");
            $table->string("state_customer", 30);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
