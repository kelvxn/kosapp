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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('type_room_id');
            $table->foreign('type_room_id')->references('id')->on('type_rooms');
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->string('name');
            $table->string('size');
            $table->string('locations');
            $table->bigInteger('price');
            $table->enum("electricity", [0,1]);
            $table->enum("water", [0,1]);
            $table->enum("wifi", [0,1]);
            $table->enum("ac", [0,1]);
            $table->enum("kitchen", [0,1]);
            $table->enum("laundry", [0,1]);
            $table->string('descs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
