<?php
/**
 * 后台许愿墙控制器管理
 */
class WishController extends Controller{
	
	/**
	 * 许愿墙列表
	 */
	public function actionIndex(){
		/* $wishModel = Wish::model();
		$list = $wishModel->findAll(); */
		
		//设置查询条件
		$criteria = new CDbCriteria();
		$criteria->order = 'id desc';
		
		//统计数据
		$count = Wish::model()->count($criteria);
		//echo $count;die;
		$pager = new CPagination($count);
		$pager->pageSize = 2;
		$pager->applyLimit($criteria);
		
		$list = Wish::model()->findAll($criteria);
		
		$this->render('index', array('list'=> $list,'pager'=> $pager));
	}
	
	/**
	 * 添加愿望
	 */
	public function actionAdd(){
		$wishModel = new Wish();
		if(!empty($_POST['Wish'])){
			$wishModel->attributes = $_POST['Wish'];
			$wishModel->add_time = time();
			$wishModel->upd_time = time();
			if($wishModel->save()){
				

				add_admin_log('添加许愿');
				
				
				// echo 'add success';die;
				// 添加成功跳转列表页
				$this->redirect(array('index'));
			}
		}
		
		
		
		$this->render('add', array('wishModel'=> $wishModel));
	}
	
	/**
	 * 修改愿望
	 */
	public function actionEdit($id){
		$wishModel = Wish::model();
		$wishInfo = $wishModel->findByPk($id);
		
		if(!empty($_POST['Wish']))
		{
			$wishInfo->attributes = $_POST['Wish'];
			$wishInfo->upd_time = time();
			if($wishInfo->save()){
				add_admin_log('编辑许愿');
				$this->redirect(array('index'));
			}
		}
		
		$this->render('edit', array('wishModel'=>$wishInfo));
	}
	
	/**
	 * 删除愿望
	 */
	public function actionDel($id){
		if(!empty($id)){
			//删除
			Wish::model()->deleteByPk($id);
				add_admin_log('删除许愿');
			$this->redirect(array('index'));
		}else{
			// 非法操作
			$this->redirect(array('index'));
		}
	}
	
	
}
