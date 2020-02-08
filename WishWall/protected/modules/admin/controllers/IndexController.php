<?php

/**
 * 后台首页控制器
 */

class IndexController extends Controller{
	
	/**
	 * 欢迎页
	 */
	public function actionIndex(){
		$this->render('index');
	}
	
	/**
	 * 后台公共顶部
	 */
	public function actionIndextop(){
		$this->render('top');
	}
	
	/**
	 * 后台公共左侧菜单
	 */
	public function actionIndexleft(){
		$this->render('left');
	}
	
	/**
	 * 后台公共右侧
	 */
	public function actionIndexright(){
		$this->render('right');
	}
	
	/**
	 * 登录退出
	 */
	public function actionLoginout(){
		Yii::app()->session->clear();
		Yii::app()->session->destroy();

		$this->redirect(array('login/index'));
	}
	
}