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
        Schema::create('favoris', static function (Blueprint $table) {
            $table->id('id_favoris');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('posts_id');
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('posts_id')->references('id_post')->on('posts')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favoris');
    }
};