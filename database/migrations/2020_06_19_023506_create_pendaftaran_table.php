<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->increments('id_pendaftaran');
            $table->string('nm_pendaftaran');
            $table->string('nm_produk');
            $table->unsignedInteger('id_kategori')->index('pendaftaran_id_kategori')->nullable();
            $table->unsignedInteger('id_label')->index('pendaftaran_id_label')->nullable();
            $table->string('nominal');
            $table->date('tenggat_waktu');
            $table->unsignedInteger('id_kota')->index('pendaftaran_id_kota')->nullable();
            $table->string('gambar');
            $table->string('status')->default('MENUNGGU');
            $table->timestamps();
        });
        Schema::table('pendaftaran', function(Blueprint $table)
        {
            $table->foreign('id_kategori', 'pendaftaran_ibfk_1')->references('id_kategori')->on('kategori')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_label', 'pendaftaran_ibfk_2')->references('id_label')->on('label')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_kota', 'pendaftaran_ibfk_3')->references('id_kota')->on('kota')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendaftaran', function(Blueprint $table)
        {
            $table->dropForeign('pendaftaran_ibfk_1');
            $table->dropForeign('pendaftaran_ibfk_2');
            $table->dropForeign('pendaftaran_ibfk_3');
        });
        Schema::drop('pendaftaran');
    }
}

