<?php

    class CoffeeController extends Controller
    {
        
        public $coffee_list = 0;

        public function actionIndex()
        {
            $this->coffee_list = Coffee::model()->findall();
            $this->render('index');
        }

    }
?>