<?php

    class Tea extends CActiveRecord
    {
        public function tableName()
        {
            return 'tea_tbl';
        }

        public function attributeLabels()
        {
            return array(
                'id' => 'id',
                'name' => 'name',
                'price' => 'price',
                'description' => 'description',
                'tea_category_id' => 'tea_category_id',
            );
        }

        public function relations()
        {
            return array(
                'tea_category' => array(self::BELONGS_TO, 'TeaCategory', 'tea_category_id'),
            );
        }        

        public static function model($className = __CLASS__)
        {
            return parent::model($className);
        }
    }
?>