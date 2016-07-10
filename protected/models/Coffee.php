<?php

    class Coffee extends CActiveRecord
    {
        public function tableName()
        {
            return 'coffee_tbl';
        }

        public function attributeLabels()
        {
            return array(
                'id' => 'id',
                'name' => 'name',
                'img_name' => 'img_name',
                'packing' => 'packing',
                'wrapping' => 'wrapping',
                'storage' => 'storage',
                'blend' => 'blend',
                'description' => 'description',
            );
        }

        public static function model($className = __CLASS__)
        {
            return parent::model($className);
        }
    }
?>