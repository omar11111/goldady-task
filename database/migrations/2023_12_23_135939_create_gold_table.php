<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoldTable extends Migration {

	public function up()
	{
		Schema::create('gold', function(Blueprint $table) {
			$table->id();
			$table->string('type');
			$table->enum('inventory_type', array('internal', 'external'));
			$table->string('weight');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('gold');
	}
}
