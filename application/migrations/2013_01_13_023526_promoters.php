<?php

class Promoters {    

	public function up()
    {
		Schema::create('promoters', function($table) {
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email');
			$table->string('phone');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('promoters');

    }

}