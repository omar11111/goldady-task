<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('inventories', function(Blueprint $table) {
			$table->foreign('gold_id')->references('id')->on('gold')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('transactions', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('gold_transction', function(Blueprint $table) {
			$table->foreign('gold_id')->references('id')->on('gold')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('gold_transction', function(Blueprint $table) {
			$table->foreign('transaction_id')->references('id')->on('transactions')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('inventories', function(Blueprint $table) {
			$table->dropForeign('inventories_gold_id_foreign');
		});
		Schema::table('transactions', function(Blueprint $table) {
			$table->dropForeign('transactions_user_id_foreign');
		});
		Schema::table('gold_transction', function(Blueprint $table) {
			$table->dropForeign('gold_transction_gold_id_foreign');
		});
		Schema::table('gold_transction', function(Blueprint $table) {
			$table->dropForeign('gold_transction_transaction_id_foreign');
		});
	}
}
