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
        $table->increments('id')->unsigned();
		$table->integer('idStatus',10)->unsigned();
		$table->string('addTable');
		$table->timestamp('created_at')->nullable()->default('NULL');
		$table->timestamp('updated_at')->nullable()->default('NULL');
		$table->primary('id');
		$table->foreign('idStatus')->references('id')->on('statuses');

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
