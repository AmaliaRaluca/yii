<?php
/*


 */

class DriverCategory extends CActiveRecord
{
    public function tableName()
    {
        return 'driver_categories';
    }

    public function rules()
    {
        return array(
			array('category_type', 'required')
        );
    }

    public function attributeLabels()
    {
        return array(
          'id' => 'ID',
          'category_type' => 'Category',
        );
    }


	public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'users' => array(self::HAS_MANY, 'User', 'category_id'),
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
		$criteria->compare('category_type',$this->category_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return DriverCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

}