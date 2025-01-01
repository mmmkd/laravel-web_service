<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('title'); // Column for book title
            $table->string('author'); // Column for book author
            $table->string('genre')->nullable(); // Column for genre, can be NULL
            $table->integer('published_year')->nullable(); // Column for published year, can be NULL
            $table->timestamps(); // Adds created_at and updated_at TIMESTAMP columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books'); // Deletes the books table
    }
}
