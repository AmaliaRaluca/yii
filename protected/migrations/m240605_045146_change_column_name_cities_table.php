<?php

class m240605_045146_change_column_name_cities_table extends CDbMigration
{

	/* 
	Change the column name in cities table to city_name
	Not sure if the alterColumn method could be use if the data type remains the same --- to verify
	*/

	public function up()
	{
		$this->execute('ALTER TABLE cities CHANGE name city_name VARCHAR(255)');
	}


	public function down()
	{
		echo "m240605_045146_change_column_name_cities_table does not support migration down.\n";

		$this->execute('ALTER TABLE cities CHANGE city_name name VARCHAR(255)');
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