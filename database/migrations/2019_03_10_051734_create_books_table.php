<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned();
            $table->integer('author_id')->unsigned();
            $table->integer('menu_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->string('isbn')->nullable();
            $table->string('publisher')->nullable();
            $table->integer('publication_date')->nullable();
            $table->integer('page')->nullable();
            $table->string('edition')->nullable();
            $table->string('language')->nullable();
            $table->text('description');
            $table->integer('price')->nullable();
            $table->integer('quantity')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
