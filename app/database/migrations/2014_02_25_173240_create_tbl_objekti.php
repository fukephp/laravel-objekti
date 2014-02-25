<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblObjekti extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Kreiraj tabelu: tbl_objekti
		Schema::create('tbl_objekti', function($table){ 
			$table->increments('id');
			$table->string('name');
			$table->string('opis');
			$table->string('adresa');
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
		// Obriši tabelu: tbl_objekti
		Schema::drop('tbl_objekti');
	}

}
