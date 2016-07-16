<?php

class TeaController extends Controller
{

    public function actionIndex()
    {

        $model = new TeaCategory('search');
       
        $model->unsetAttributes();
      
        if(isset($_GET['Tea'])) $model->attributes = $_GET['Tea'];
      
        $this->render('index', array(
            'model'=>$model, 'dataProvider'=>$model->with('tea')->search()
        )); 
    }	

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}