<?php
/**
 * 许愿墙控制器
 */
class IndexController extends Controller{
	
	/**
	 * 许愿墙列表
	 */
	public function actionIndex(){
		/**
		 * render - 渲染视图
		 * renderPartial - 局部渲染
		 */
		
		$list = Wish::model()->findAll();
		
		// echo Yii::app()->request->baseUrl;die; /yii/wish
		$this->render('index',array('list'=>$list));
	}
	
	/**
	 * 许愿
	 */
	public function actionSend(){
		$wishModel = new Wish();
		
		if(!empty($_POST['Wish'])){
			$wishModel->attributes = $_POST['Wish'];
			$wishModel->add_time = time();
			$wishModel->upd_time = time();
			if($wishModel->save()){
				$this->redirect(array('index/index'));
			}
			
		}
				
		$this->render('send', array('wishModel'=>$wishModel));
	}
	
}