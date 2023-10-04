<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanphams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->float('giatien');
            $table->float('giamgia');
            $table->unsignedBigInteger('id_loaisp');
            $table->foreign('id_loaisp')->references('id')->on('loaisps') ->onUpdate('cascade')->onDelete('cascade');
            $table->longtext('mota');
            $table->string('image');
            $table->string('donvi');
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
        Schema::dropIfExists('sanphams');
    }
};
