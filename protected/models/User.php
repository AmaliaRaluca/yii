<?php


class User extends CActiveRecord
{
    public function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return array(
            array('first_name', 'length', 'max' => 255),
            array('last_name', 'length', 'max' => 255),
            array('city_id, category_id', 'numerical', 'integerOnly'=>true),
            // date format: yyyy-mm-dd hh:mm:ss
            // array('created_at', 'datetime') 
        );

    }

    public function attributeLabels()
    {
        return array(
          'id' => 'ID',
          'first_name' => 'First Name',
          'last_name' => 'Last Name',
          'city_id' => 'City Name',
          'category_id' => 'Category',
          'created_at' => 'Date'
        );

    }

    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'category' => array(self::BELONGS_TO, 'DriverCategory', 'category_id'),
            'city' => array(self::BELONGS_TO, 'City', 'city_id'),
        );
    }


    	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
        $criteria->compare('id',$this->id);
        $criteria->compare('first_name',$this->first_name,true);
        $criteria->compare('last_name',$this->last_name,true);
        $criteria->compare('city_id',$this->city_id);
        $criteria->compare('category_id',$this->category_id);
        $criteria->compare('created_at',$this->created_at,true);

        return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

}