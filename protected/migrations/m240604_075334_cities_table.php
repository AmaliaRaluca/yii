<?php

class m240604_075334_cities_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('cities', array(
            'id' => 'pk',
            'name' => 'string NOT NULL', 
			'distance_from_bucharest' => 'decimal',
        ));

		// insert hard coded values in cities table
		$this->insert('cities',array(
			'id'=>'1',
			'name' => 'Constanta',
			'distance_from_bucharest' =>'223.0',
	 	));

		 $this->insert('cities',array(
			'id'=>'2',
			'name' => 'Iasi',
			'distance_from_bucharest' =>'388.5',
	 	));

		 $this->insert('cities',array(
			'id'=>'3',
			'name' => 'Cluj',
			'distance_from_bucharest' =>'452.5',
	 	));
	}

	public function down()
	{
		echo "m240604_075334_cities_table does not support migration down.\n";
		$this->dropTable('cities');
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