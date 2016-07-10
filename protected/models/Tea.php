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
                'tea_category_id' => 'tea_category_id',
                'name' => 'name',
                'price' => 'price',
                'description' => 'description',
            );
        }

        public static function model($className = __CLASS__)
        {
            return parent::model($className);
        }
    }
?>