<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('etudiantUnilus', function (Blueprint $table) {
            $table->id();
			$table->string('nom');
			$table->bigInteger('matricule');
			$table->string('promotion');
			$table->string('faculte');
			$table->string('genre');
			$table->dateTime('date_subsciption');
			$table->boolean('status');
            $table->string("password");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiantUnilus');
    }
};
