<?php

class UserController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
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
	public function accessRules() 
	{ 
		return array( 
			array('allow', 'actions'=>array('create','captcha'), 'users'=>array('*'), ), 
			array('allow', 'actions'=>array('update','view'), 'users'=>array('@'), ), 
			array('allow', 'actions'=>array('admin','index','delete'), 'expression'=>'$user->getLevel()<=1', ), 
			array('deny', 'users'=>array('*'), ), 
		); 
	}
}