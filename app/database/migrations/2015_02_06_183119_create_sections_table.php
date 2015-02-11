<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sections', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('title');
			$table->string('slug_url');

			$table->string('banner');
			$table->string('banner_url');
			$table->text('body');
			$table->string('meta_description')->nullable;

			$table->boolean('published')->default(true);

			$table->timestamps();
			$table->timestamp('published_at');
			$table->string('authored_by');

			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sections');
	}

}
