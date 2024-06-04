<?php

class m240604_073207_driver_categories_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('driver_categories', array(
            'id' => 'pk',
            'category_type' => 'string NOT NULL', //  A, B, C, D, etc.
        ));

		// insert hard coded values in driver_categories table
		$this->insert('driver_categories',array(
			'id'=>'1',
			'category_type' =>'A',
	 	));

		$this->insert('driver_categories',array(
			'id'=>'2',
			'category_type' =>'B',
	 	));
		$this->insert('driver_categories',array(
			'id'=>'3',
			'category_type' =>'C',
	 	));
	}

	public function down()
	{
		echo "m240604_073207_driver_categories_table does not support migration down.\n";

		$this->dropTable('driver_categories');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}