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
        Schema::create('articles', function (Blueprint $table) {
            $table->increments("id");
            $table->string("code_internal")->unique();
            $table->string("description", 100);
            $table->decimal("price", 10 , 2);
            $table->decimal("cost", 10 , 2);
            $table->string("state",30);
            $table->date("date_record");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
