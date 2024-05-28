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
        Schema::create('psychologists', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->notNullable;
            $table->string('last_name', 50)->notNullable;
            $table->string('second_last_name', 50)->notNullable;
            $table->integer('license')->notNullable;
            $table->enum('Document_type',['CC','TI','Pasaporte']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psychologists');
    }
};