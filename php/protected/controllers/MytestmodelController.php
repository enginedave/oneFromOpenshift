<?php

class MytestmodelController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','mytest'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		//echo '<br /><br /><br /><br /><br /><br />the id is :'.$id.'<br />';
		/*
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
		*/
		
		
		
		// Remove resetScope here to see the default scope in action
		//$model=Mytestmodel::model()->resetScope()->findOne(array('_id'=>new MongoId($id)));
		$model=Mytestmodel::model()->findOne(array('_id'=>new MongoId($id)));
		//var_dump($model);
		//if($model) $model->saveCounters(array('views'=>1)); // We viewed this article
		$this->render('view',array(
			'model'=>$model,
		));
		
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Mytestmodel;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Mytestmodel']))
		{
			echo '<br /><br /><br /><br /><br /><br />The Basic model just created';
			var_dump($model);
			echo '<br /><br /><br /><br /><br /><br />The post array';
			var_dump($_POST['Mytestmodel']);
			$model->attributes=$_POST['Mytestmodel'];
			echo '<br /><br /><br /><br /><br /><br />After the attributes have been assigned';
			var_dump($model);
			if($model->save()){
				//$this->redirect(array('view','id'=>$model->_id));
				echo '<br /><br /><br /><br /><br /><br />After the save to the DB';
				var_dump($model);
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionMytest()
	{
		$model=new Mytestmodel;
		
		$model->date = '7-9-2013';
		$model->desc = 'the description';
		$model->amount = '23.67';
		$model->ano = 'this is the variable that is not included in any rule';
		
		var_dump($model);//shows all 4 variables assigned 
		$model->save();
		var_dump($model);//shows all 4 variables assigned
		
		$model2=new Mytestmodel;
		
		//create an example of a post array coming from a web form
		$examplePostArray = array(
			'date'=>'8-9-2013',
			'desc'=>'another description',
			'amount'=>'34.89',
			'ano'=>'this is the variable that is not included in any rule'
		);
		var_dump($examplePostArray);//shows the 4 variables
		
		//I am expecting the following line to assign all 4 attributes
		//to $model2 but only the first 3 get assigned?
		$model2->attributes=$examplePostArray;
		
		var_dump($model2);//the variable ano does not get assigned! 
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		//$model=$this->loadModel($id);
		$model=Mytestmodel::model()->findOne(array('_id'=>new MongoId($id)));
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Mytestmodel']))
		{
			$model->attributes=$_POST['Mytestmodel'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		/*
		$test = new Mytestmodel();
		$test->id = "99";
		$test->date = 'the date';
		$test->desc = 'the description';
		$test->amount = '£567.89';
		$test->save();
		echo 'This is the controller';
		var_dump($test);
		echo'<br /><br />'.$test->date;
		*/
		
		
		//$dataProvider=new CActiveDataProvider('Mytestmodel');
		$dataProvider=new EMongoDataProvider('Mytestmodel');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Mytestmodel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Mytestmodel']))
			$model->attributes=$_GET['Mytestmodel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Transactions::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='transactions-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
