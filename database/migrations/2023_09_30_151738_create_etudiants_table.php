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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
			$table->string('nom');
			$table->bigInteger('matricule');
			$table->integer('promotion');
			$table->string('faculte');
			$table->string('telephone')->nullable();
            $table->string("password")->nullable();
            $table->integer("role_id")->default(2);
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
        Schema::dropIfExists('etudiants');
    }
};
