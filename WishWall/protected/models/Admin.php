<?php

class Admin extends CActiveRecord {
	
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
		return "{{admin}}";  // 省略掉表前缀
	}
	
	
	
}