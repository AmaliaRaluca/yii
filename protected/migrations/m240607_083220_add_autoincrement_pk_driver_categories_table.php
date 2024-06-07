<?php

class m240607_083220_add_autoincrement_pk_driver_categories_table extends CDbMigration
{
	public function up()
	{
		$this->execute('
		SET FOREIGN_KEY_CHECKS = 0;
		ALTER TABLE driver_categories CHANGE id id INT(11) NOT NULL AUTO_INCREMENT;
		SET FOREIGN_KEY_CHECKS = 1;
		');
	}

	public function down()
	{
		echo "m240607_083220_add_autoincrement_pk_driver_categories_table does not support migration down.\n";
	    $this->execute('
		SET FOREIGN_KEY_CHECKS = 0;
		ALTER TABLE driver_categories CHANGE id id INT(11) NOT NULL;
		SET FOREIGN_KEY_CHECKS = 1;
		');
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