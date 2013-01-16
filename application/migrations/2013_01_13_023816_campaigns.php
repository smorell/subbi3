<?php

class Campaigns {    

	public function up()
    {
		Schema::create('campaigns', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('campaigns');

    }

}