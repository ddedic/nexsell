<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlansTable extends Migration {

	public function up()
	{
		Schema::create('plans', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->text('description')->nullable();
			$table->mediumInteger('gateway_id')->unsigned()->index();
			$table->enum('strict', array('0', '1'));
			$table->float('price_adjustment', 8,5)->default('25');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('plans');
	}
}