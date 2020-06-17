<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra', function (Blueprint $table) {
            $table->increments('id_mitra');
            $table->string('nm_mitra');
            $table->string('nm_pjmitra');
            $table->string('no_rek');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('no_hp');
            $table->string('logo_mitra');
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
        Schema::dropIfExists('mitra');
    }
}
