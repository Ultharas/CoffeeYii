<?php

class CoffeeController extends Controller
{
    public function actionIndex()
    {

        $model = new Coffee('search');
       
        $model->unsetAttributes();
      
        if(isset($_GET['Coffee'])) $model->attributes = $_GET['Coffee'];
      
        $this->render('index', array(
            'model'=>$model, 'dataProvider'=>$model->search()
        )); 
    }

}

?>