<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('publisher', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('logos');
            $table->timestamps();
        });

        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->dateTime('publish_date');
            $table->string('isbn');
            $table->string('cover_img');
            $table->text('sinopsis');
            $table->integer('pages');
            $table->float('price');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('publisher_id');
            $table->foreign('publisher_id')->references('id')->on('publisher');
            $table->timestamps();
        });

        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('instances');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('books');
    }
};
