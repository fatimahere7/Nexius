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
        Schema::create('peoples', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('about');
            $table->timestamps();
        });
        // Schema::create('contacts', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('email');
        //     $table->string('phone');
        //     $table->string('city');
        //     $table->timestamps();
        //     $table->foreign('people_id')->reference('id')->on('peoples');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peoples');
    }
};
