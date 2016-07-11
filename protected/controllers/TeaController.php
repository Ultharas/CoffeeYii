<?php

    class TeaController extends Controller
    {

        public function actionIndex()
        {
            $this->render('index', array(
                'tea_categories' => TeaCategory::model()->with('tea')->findall(),
            ));
        }

    }
?>