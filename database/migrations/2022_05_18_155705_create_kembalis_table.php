<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKembalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kembalis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pinjam_id');
            $table->foreign('pinjam_id')->references('id')->on('borrows')->onDelete('restrict');
            $table->date('tgl_kembali');
            $table->integer('denda');
            $table->enum('status', ['Proses', 'Kembali']);
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
        Schema::dropIfExists('kembalis');
    }
}
