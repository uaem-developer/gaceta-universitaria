<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('section_id')->unsigned();

			$table->string('title');
			$table->tinyInteger('order_num')->unsigned()->default(200);
			$table->string('slug_url');
			$table->string('meta_description')->nullable;
			$table->text('body');

			$table->string('gaceta_number');
			$table->string('image');
			$table->string('image2');
			$table->string('image3');
			$table->string('image4');
			$table->string('image5');
			$table->string('attach_file');

			$table->string('published')->default('on');
			$table->string('promoted_front');
			$table->string('promoted_section');
			$table->string('frontpage');

			$table->string('authored_by');
			$table->string('photographer');
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
		Schema::drop('posts');
	}

}
