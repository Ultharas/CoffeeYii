<?php

    class TeaController extends Controller
    {
        
        // public $tea_category_list = 0;
        public $tea_category = 0;

        public function actionIndex()
        {
            $this->tea_category = TeaCategory::model()->with('tea')->findall();
            $this->render('index');
        }

    }
?>