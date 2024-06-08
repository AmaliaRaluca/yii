<?php


class User extends CActiveRecord
{
    
    public $city_search;
    public $category_search;
    public $km;

    public function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return array(
            array('first_name', 'length', 'max' => 255),
            array('last_name', 'length', 'max' => 255),
            array('first_name, last_name', 'required'),
            array('city_id, category_id', 'numerical', 'integerOnly'=>true),
            array('created_at', 'length', 'max' => 50),
            array('id, first_name, last_name, city_search, category_search, created_at', 'safe', 'on'=>'search'),

        );

    }

    public function attributeLabels()
    {
        return array(
          'id' => 'ID',
          'first_name' => 'First Name',
          'last_name' => 'Last Name',
          'full_name' => 'Full Name',
          'city_id' => 'City Name',
          'category_id' => 'Driver Category',
          'city_search' => 'City name',
          'category_search' => 'Driver category',
          'distance_from_bucharest' => 'Distance',
          'created_at' => 'Created at timestamp'
        );

    }

    public function getFullName(){

        return $this->first_name . ' ' . $this->last_name;

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

		$criteria=new CDbCriteria;
        $criteria->with = array('city', 'category');
        
        $criteria->compare('id',$this->id);
        $criteria->compare('first_name',$this->first_name,true);
        $criteria->compare('last_name',$this->last_name,true);
        $criteria->compare('city.city_name',$this->city_search, true);
        $criteria->compare('category.category_type',$this->category_search, true);

        if (isset($_GET['User']['km'])) {
            $criteria->condition='city.distance_from_bucharest < '. $_GET['User']['km'];
        }

        $criteria->compare('created_at',$this->created_at,true);

        return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=> array(
                'attributes'=>array(
                    'city_search'=>array(
                        'asc'=>'city.city_name',
                        'desc'=>'city.city_name DESC',
                    ),
                    'category_search'=>array(
                        'asc'=>'category.category_type',
                        'desc'=>'category.category_type DESC',
                    ),
                    '*',
                ),
                'defaultOrder'=>'created_at ASC',
            ),
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