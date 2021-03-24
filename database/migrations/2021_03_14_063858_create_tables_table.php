<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idStatus',false,true);
            $table->string('addTable');
            $table->timestamps();
            //tao khoa ngoai .
            //$table->foreign('idStatus')->references('id')->on('status');

        });
        //them khoa ngoai
        // Schema::table('tables', function (Blueprint $table) {

        //     $table->foreign('idStatus')->references('id')->on('status');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
