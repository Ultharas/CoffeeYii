<?php

/**
 * This is the model class for table "coffee_machine_tbl".
 *
 * The followings are the available columns in table 'coffee_machine_tbl':
 * @property string $id
 * @property string $type
 * @property string $name
 * @property integer $power
 * @property string $water_tank_volume
 * @property string $ability_connections_for_water_supply
 * @property integer $width
 * @property integer $height
 * @property integer $depth
 * @property integer $weight
 * @property string $img
 * @property integer $price
 * @property string $includes
 */
class CoffeeMachine extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'coffee_machine_tbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('power, width, height, depth, weight, price', 'numerical', 'integerOnly'=>true),
			array('type, name, ability_connections_for_water_supply, img, includes', 'length', 'max'=>255),
			array('water_tank_volume', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, type, name, power, water_tank_volume, ability_connections_for_water_supply, width, height, depth, weight, img, price, includes', 'safe', 'on'=>'search'),
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
			'type' => 'Type',
			'name' => 'Name',
			'power' => 'Power',
			'water_tank_volume' => 'Water Tank Volume',
			'ability_connections_for_water_supply' => 'Ability Connections For Water Supply',
			'width' => 'Width',
			'height' => 'Height',
			'depth' => 'Depth',
			'weight' => 'Weight',
			'img' => 'Img',
			'price' => 'Price',
			'includes' => 'Includes',
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
		$criteria->compare('type',$this->type,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('power',$this->power);
		$criteria->compare('water_tank_volume',$this->water_tank_volume,true);
		$criteria->compare('ability_connections_for_water_supply',$this->ability_connections_for_water_supply,true);
		$criteria->compare('width',$this->width);
		$criteria->compare('height',$this->height);
		$criteria->compare('depth',$this->depth);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('includes',$this->includes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function scopes(){
        
        return array(
			'cafe'=>array(
	            'condition'=>'type="cafe"',
	            // 'order'=>'added DESC',
	            // 'limit'=>7,
	            ),            

			'office'=>array(
			    'condition'=>'type="office"',
			    // 'order'=>'added DESC',
			    // 'limit'=>7,
			    ),            
			);
     
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CoffeeMachine the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
