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
            $table->string('title', 100)->unique();
            $table->string('series', 100);
            $table->string('type', 20);
            $table->string('rated', 20);
            $table->text('description');
            $table->string('thumb')->unique()->nullable();
            $table->float('price', 5, 2);
            $table->string('sale_date', 100)->nullable();
            $table->tinyInteger('page_count');
            $table->string('writers');
            $table->string('artists');
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
