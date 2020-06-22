<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValidasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validasi', function (Blueprint $table) {
            $table->increments('id_validasi');
            $table->unsignedInteger('id_pendaftaran')->index('validasi_id_pendaftaran')->nullable();
            $table->unsignedInteger('id_mitra')->index('validasi_id_mitra')->nullable();
            $table->timestamps();
        });
        Schema::table('validasi', function(Blueprint $table)
        {
            $table->foreign('id_pendaftaran', 'validasi_ibfk_1')->references('id_pendaftaran')->on('pendaftaran')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_mitra', 'validasi_ibfk_2')->references('id_mitra')->on('mitra')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('validasi', function(Blueprint $table)
        {
            $table->dropForeign('validasi_ibfk_1');
            $table->dropForeign('validasi_ibfk_2');
        });
        Schema::drop('validasi');
    }
}
