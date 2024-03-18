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

            //for now all nullable
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('thumb')->nullable();
            $table->decimal('price')->nullable();
            $table->string('series')->nullable();
            $table->date('sale_date')->nullable();
            $table->string('type')->nullable();

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
