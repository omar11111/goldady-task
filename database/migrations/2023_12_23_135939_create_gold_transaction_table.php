<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGoldTransctionTable extends Migration {

	public function up()
	{
		Schema::create('gold_transaction', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->integer('gold_id')->unsigned();
			$table->integer('transaction_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('gold_transaction');
	}
}
