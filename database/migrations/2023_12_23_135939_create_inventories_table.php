<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventoriesTable extends Migration {

	public function up()
	{
		Schema::create('inventories', function(Blueprint $table) {
			$table->id();
			$table->integer('quantity');
			$table->integer('inventory_type');
			$table->integer('gold_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('inventories');
	}
}
