<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlertRulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alert_rules', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('device_id')->default('')->index('device_id');
			$table->text('rule', 65535);
			$table->enum('severity', array('ok','warning','critical'));
			$table->string('extra');
			$table->boolean('disabled');
			$table->string('name')->unique('name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alert_rules');
	}

}
