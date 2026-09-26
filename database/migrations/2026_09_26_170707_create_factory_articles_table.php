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
        Schema::create('factory_articles', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("current_stock")->unsigned();
            $table->integer("negotiation_cost")->unsigned();
            $table->date("date_estimated");

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
        Schema::dropIfExists('factory_articles');
    }
};