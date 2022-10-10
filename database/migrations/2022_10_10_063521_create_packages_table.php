<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('packages', static function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('title', 150);
            $table->string('destination', 150);
            $table->text('description');
            $table->string('image', 255);
            $table->double('price');
            $table->string('time', 50);
            $table->integer('people_count');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
