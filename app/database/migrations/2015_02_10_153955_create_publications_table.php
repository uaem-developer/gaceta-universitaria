<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publications', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('title');
			$table->string('number');
			$table->string('slug_url');
			$table->string('meta_description')->nullable;
			$table->text('body');

			$table->string('image_front');
			$table->string('pdf_file');

			$table->boolean('published')->default(true);
			$table->boolean('promoted_front')->default(false);

			$table->string('authored_by');
			$table->timestamps();
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
		Schema::drop('publications');
	}

}
