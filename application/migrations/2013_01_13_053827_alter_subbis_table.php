<?php

class Alter_Subbis_Table {    

	public function up()
    {
		Schema::table('subbis', function($table) {
			$table->boolean('migra');

			$table->string('school',60);
			$table->string('profession',100);
			$table->string('driver',20);
			$table->integer('rate');

			$table->text('notes_job');
			$table->text('notes_general');

			$table->date('hist_1_from');
			$table->date('hist_1_to');
			$table->text('hist_1_notes');

			$table->date('hist_2_from');
			$table->date('hist_2_to');
			$table->text('hist_2_notes');

			$table->date('hist_3_from');
			$table->date('hist_3_to');
			$table->text('hist_3_notes');

			$table->date('hist_4_from');
			$table->date('hist_4_to');
			$table->text('hist_4_notes');

			$table->date('hist_5_from');
			$table->date('hist_5_to');
			$table->text('hist_5_notes');

			$table->string('scource',60);  // where did he come from?

			$table->integer('promoter_id');
			$table->integer('campaign_id');

			$table->boolean('coaching');

	});

    }    

	public function down()
    {
		 Schema::table('subbis', function($table)
            {
                $table->drop_column('migra');

               	$table->drop_column('school');
				$table->drop_column('profession');
				$table->drop_column('driver');
				$table->drop_column('rate');

				$table->drop_column('notes_job');
				$table->drop_column('notes_general');

				$table->drop_column('hist_1_from');
				$table->drop_column('hist_1_to');
				$table->drop_column('hist_1_notes');

				$table->drop_column('hist_2_from');
				$table->drop_column('hist_2_to');
				$table->drop_column('hist_2_notes');

				$table->drop_column('hist_3_from');
				$table->drop_column('hist_3_to');
				$table->drop_column('hist_3_notes');

				$table->drop_column('hist_4_from');
				$table->drop_column('hist_4_to');
				$table->drop_column('hist_4_notes');

				$table->drop_column('hist_5_from');
				$table->drop_column('hist_5_to');
				$table->drop_column('hist_5_notes');

				$table->drop_column('scource');  

				$table->drop_column('promoter_id');
				$table->drop_column('campaign_id');

				$table->drop_column('coaching');
            });

    }

}