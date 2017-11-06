<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientdocumentsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientdocuments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ine')->default('ine.png');;
			$table->string('curp')->default('curp.jpg');;
			$table->string('proof_of_addres')->default('cfe.jpg');;
			$table->integer('client_id')->unsigned();
			$table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
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
		Schema::drop('clientdocuments');
	}

}
