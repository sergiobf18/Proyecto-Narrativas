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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 50)->notNullable();
            $table->string('Nast_name', 50)->notNullable();
            $table->string('Second_last_name', 50)->notNullable();
            $table->enum('Document_type',['CC','TI','Pasaporte'])->NotNullable();
            $table->string('Document_number', 50)->notNullable();
            $table->date('Date_of_birth')->notNullable();
            $table->string('Gender', 50)->nullable();
            $table->string('Personal_status', 50)->nullable();
            $table->string('Education', 50)->nullable();
            $table->string('Occupation', 50)->nullable();
            $table->unsignedBigInteger('idEmail')->nullable();
            $table->foreign('idEmail')->references('id')->on('emails');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
