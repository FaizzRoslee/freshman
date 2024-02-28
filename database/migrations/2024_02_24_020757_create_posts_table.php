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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')
            ->foreign('user_id')
            ->references('id')
            ->on('users');

            // VARCHAR equivalent column with a length.
            $table->string('slug', 255)
            ->unique(); // Index

            $table->string('title', 255);

            // TEXT equivalent column.
            $table->text('description');
            $table->text('post');
            $table->text('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
