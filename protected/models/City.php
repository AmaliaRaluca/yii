<?php
/*


 */

class City  extends CActiveRecord
{

    public function tableName()
    {
        return 'cities';
    }

    public function rules()
    {
        return array(
			 array('city_name', 'length', 'max' => 255),
            array('city_name', 'unique'),
			array('city_name', 'required'),
			array('distance_from_bucharest', 'length','max' => 10),
			array('distance_from_bucharest', 'numerical', 'integerOnly' => true)
        );
    }
    
    public function attributeLabels()
    {
        return array(
          'id' => 'ID',
          'city_name' => 'City Name',
          'distance_from_bucharest' => 'Distance from Bucharest'
        );
    }


	public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'users' => array(self::HAS_MANY, 'User', 'city_id'),
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
		$criteria->compare('city_name',$this->city_name,true);
		$criteria->compare('distance_from_bucharest',$this->distance_from_bucharest);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return City the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

}