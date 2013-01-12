<?php

class Subbis {    

	public function up()
    {
		Schema::create('subbis', function($table) {
			$table->increments('id');
			$table->string('first_name',60);
			$table->string('last_name',60);
			$table->string('address1',60);
			$table->string('address2',60);
			$table->string('zipcode',10);
			$table->string('city',60);
			$table->string('phone',20);
			$table->string('email',60);
			$table->date('dob');
			$table->string('status',20);
			$table->string('situation',60);
			$table->string('salutation',20);
			$table->text('history');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('subbis');

    }

}