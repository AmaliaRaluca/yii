<?php

class m240604_080557_users_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('users', array(
            'id' => 'pk',
            'first_name' => 'string', 
			'last_name' => 'string', 
			'city_id' => 'int',
			'category_id' => 'int',
			'created_at' => 'datetime',
        ));

		$this->addForeignKey('FK_city_to_user','users', 'city_id', 'cities', 'id', 'NO ACTION', 'NO ACTION');
		$this->addForeignKey('FK_category_to_user', 'users', 'category_id', 'driver_categories', 'id', 'NO ACTION', 'NO ACTION');


		// insert hard coded values in users table
		$this->insert('users',array(
			'id'=>'1',
			'first_name' => 'Doe',
			'last_name' => 'Jane',
			'city_id' =>'1',
			'category_id' => '2',
	 	));

		 $this->insert('users',array(
			'id'=>'2',
			'first_name' => 'Doe',
			'last_name' => 'John',
			'city_id' =>'2',
			'category_id' => '1',
	 	));
	}

	public function down()
	{
		echo "m240604_080557_users_table does not support migration down.\n";
		
		$this->dropTable('users');
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