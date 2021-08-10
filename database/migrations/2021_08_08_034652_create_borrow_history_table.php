<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrow_history', function (Blueprint $table) {
            $table->bigIncrements('kode_borrow_history');
            $table->unsignedBigInteger('kode_user');
            $table->foreign('kode_user')->references('id')->on ('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedBigInteger('kode_buku');
            $table->foreign('kode_buku')->references('kode_buku')->on ('books')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('borrow_history');
    }
}
