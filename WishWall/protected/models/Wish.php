<?php

class Wish extends CActiveRecord {
	
	/**
	 * 创建一个模型对象的静态方法
	 */
	public static function model($className = __CLASS__){
		return parent::model($className);
	}
	
	/**
	 * 返回当前数据库的名字
	 */
	public function tableName(){
		return "{{wish}}";  // 省略掉表前缀
	}
	
	/**
	 * 验证规则
	 */
	public function rules(){
		return array(
			array('nickname','required','message'=>'昵称必填')	,
			array('content','required','message'=>'许愿内容必填'),
			array('sort','required','message'=>'必填'),	
		);
	}	
	
}