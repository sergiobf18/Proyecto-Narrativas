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
            $table->string('Name', 50)->Notnullable();
            $table->string('Last_name', 50)->notNullable();
            $table->string('Lecond_last_name', 50)->notNullable();
            $table->integer('License')->notNullable();
            $table->enum('Document_type',['CC','TI','Pasaporte'])->notNullable();
            $table->string('Document_number', 50)->notNullable();
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
