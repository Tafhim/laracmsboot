<?php

class Create_Pages_Table {    

	public function up()
    {
		Schema::create('pages', function($table) {
			$table->increments('id');
			$table->integer('page_id');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('pages');

    }

}