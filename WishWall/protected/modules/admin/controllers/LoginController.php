<?php

/**
 * 后台登录控制器
 */

class LoginController extends Controller{
	
	
	/**
	 * 验证码
	 * actions 
	 * 含义：在当前控制器里面，以方法的形式访问自定义类
	 * 访问：index.php?r=模块/控制器/方法
	 */
	public function actions(){
		return array(
			'captcha' => array(
				'class' => 'CCaptchaAction',	
				'width' => 80,
				'height' => 25,
				'minLength'	=> 4,
				'maxLength'	=> 4,
			)	
		);
	}
	
	
	/**
	 * 登录页面
	 */
	public function actionIndex(){
		$loginModel = new LoginForm();
		// Var_dump(Yii::app()->db);die;
		// echo md5('admin');die;
		
		/* 
		 $userinfo = Admin::model()->find('username=:username', array(':username'=>'admin'));
		 echo $userinfo->username;die;
		 p($userinfo->username);die;
		 */
		
		// 开始验证
		if(!empty($_POST['LoginForm']))
		{
			$loginModel->attributes = $_POST['LoginForm'];
			if($loginModel->validate() && $loginModel->login()){
				// echo 'success';die;
				// 登录时间保存session
				Yii::app()->session['logintime'] = time();
				
				// 登录次数+1
				$sql = "update {{admin}} set numb=numb+1 where username = '".$_POST['LoginForm']['username']."'";
				Yii::app()->db->createCommand($sql)->execute();
				
				// 跳转到后台欢迎页面
				$this->redirect(array('index/index'));
			}
		}
		
		$this->render('index', array('loginModel'=>$loginModel));
	}
	
}