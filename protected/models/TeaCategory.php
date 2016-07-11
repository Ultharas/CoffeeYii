<?php

    class TeaCategory extends CActiveRecord
    {
        public function tableName()
        {
            return 'tea_category_tbl';
        }

        public function attributeLabels()
        {
            return array(
                'id' => 'id',
                'name' => 'name',
            );
        }

        public function relations()
        {
            return array(
                'tea' => array(self::HAS_MANY, 'Tea', 'tea_category_id'),
            );
        }

        public static function model($className = __CLASS__)
        {
            return parent::model($className);
        }
    }
?>