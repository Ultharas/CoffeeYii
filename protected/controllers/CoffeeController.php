<?php

    class CoffeeController extends Controller
    {

        public function actionIndex()
        {
            $this->render('index', array(
                'coffee_list' => Coffee::model()->findall(),
            ));
        }

    }
?>