<?php

/**
 * This is the model class for table "coffee_tbl".
 *
 * The followings are the available columns in table 'coffee_tbl':
 * @property string $id
 * @property string $name
 * @property string $img
 * @property string $description
 * @property integer $packing
 * @property string $wrapping
 * @property string $storage
 * @property string $roast
 * @property string $blend
 */
class Coffee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'coffee_tbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('packing', 'numerical', 'integerOnly'=>true),
			array('name, img, description, wrapping, storage, roast, blend', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, img, description, packing, wrapping, storage, roast, blend', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'img' => 'Img',
			'description' => 'Description',
			'packing' => 'Packing',
			'wrapping' => 'Wrapping',
			'storage' => 'Storage',
			'roast' => 'Roast',
			'blend' => 'Blend',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('packing',$this->packing);
		$criteria->compare('wrapping',$this->wrapping,true);
		$criteria->compare('storage',$this->storage,true);
		$criteria->compare('roast',$this->roast,true);
		$criteria->compare('blend',$this->blend,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'pagination'=>array(
            'pageSize'=>2,
            'pageVar' => 'page',
              ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Coffee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
