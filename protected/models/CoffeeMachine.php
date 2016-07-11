<?php

    class CoffeeMachine extends CActiveRecord
    {
        public function tableName()
        {
            return 'coffee_machine_tbl';
        }

        public function attributeLabels()
        {
            return array(
              'type' => 'type',
              'name' => 'name',
              'url_name' => 'url_name',
              'power' => 'power',
              'water_tank_volume' => 'water_tank_volume',
              'ability_connections_for_water_supply' => 'ability_connections_for_water_supply',
              'sizes' => 'sizes',
              'weight' => 'weight',
              'includes' => 'includes',
              'pic' => 'pic',
              'price' => 'price',
            );
        }

        public static function model($className = __CLASS__)
        {
            return parent::model($className);
        }
    }
?>