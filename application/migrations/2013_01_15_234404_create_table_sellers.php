<?php

class Create_Table_Sellers {    

	public function up()
    {
		Schema::create('sellers', function($table) {
			$table->increments('id');
			$table->string('first_name',40);
			$table->string('last_name',40);
			$table->string('email',60);
			$table->string('phone',20);
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('sellers');

    }

}