<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookATable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

Schema::create('booking', function (Blueprint $book_a_table) {

  $book_a_table->string('name');
  $book_a_table->string('email')->unique();
  $book_a_table->integer('phone');
  $book_a_table->timestamps();
  $book_a_table->integer('nbp');
  $book_a_table->string('Message');
});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
