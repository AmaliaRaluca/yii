<?php

class m240608_183222_change_column_type_users_table extends CDbMigration
{
	public function up()
	{
		$this->alterColumn('users', 'created_at', 'timestamp');
	}

	public function down()
	{
		echo "m240608_183222_change_column_type_users_table does not support migration down.\n";
		
		$this->alterColumn('users', 'created_at', 'date');
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