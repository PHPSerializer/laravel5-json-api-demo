<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalesReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales_reports', function(Blueprint $table)
		{
            $table->integer('id', true)->primary();
			$table->string('group_by', 50);
			$table->string('display', 50)->nullable();
			$table->string('title', 50)->nullable();
			$table->text('filter_row_source')->nullable();
			$table->boolean('default')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sales_reports');
	}

}
