<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kota', function (Blueprint $table) {
            $table->increments('id_kota');
            $table->unsignedInteger('id_provinsi')->index('kota_id_provinsi')->nullable();
            $table->string('kota');
            $table->timestamps();
        });
        Schema::table('kota', function(Blueprint $table)
        {
            $table->foreign('id_provinsi', 'kota_ibfk_1')->references('id_provinsi')->on('provinsi')->onUpdate('CASCADE')->onDelete('CASCADE');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kota', function(Blueprint $table)
        {
            $table->dropForeign('kota_ibfk_1');
        });
        Schema::drop('kota');
    }
}
