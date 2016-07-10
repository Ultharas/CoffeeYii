<?php

    class TeaCategory extends CActiveRecord
    {
        public function tableName()
        {
            return 'tea_category_tbl';
        }

        public function relations()
        {
            return array(
                'tea' => Array(self::HAS_MANY, 'Tea', 'tea_category_id')
            );
        }

        public function attributeLabels()
        {
            return array(
                'id' => 'id',
                'name' => 'name',
            );
        }

        public static function model($className = __CLASS__)
        {
            return parent::model($className);
        }
    }
?>