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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title' , 128);
            $table->text('description');
            $table->string('thumb' , 2048)->nullable();
            $table->unsignedDecimal('price' , 5 , 2);
            $table->string('series' , 128)->nullable();
            $table->date('sale_date')->nullable();
            $table->string('type' , 128);
            $table->text('artists')->nullable();
            $table->text('writers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
