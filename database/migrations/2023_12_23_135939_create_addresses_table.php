<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	public function up()
	{
		Schema::create('addresses', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('country');
			$table->string('City');
			$table->string('landmark');
		});
	}

	public function down()
	{
		Schema::drop('addresses');
	}
}
