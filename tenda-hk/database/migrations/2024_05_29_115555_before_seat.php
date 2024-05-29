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
        Schema::create('before_seat', function (Blueprint $table) {
            $table->foreign('user_id')
            ->references('id') 
            ->on('users');            
            $table->int('name', 255)->nullable();
            $table->int('img', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('before_seat');
    }
};
