<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionsTable extends Migration {

	public function up()
	{
		Schema::create('transactions', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->string('quantity');
		});
	}

	public function down()
	{
		Schema::drop('transactions');
	}
}
