<?php

/**
 * 公共方法库
 */


/**
 * 格式化打印数据
 * @param  array $arr
 * @return array
 */
function p($arr)
{
	echo '<pre>';
	print_r($arr);
}

/**
 * 添加管理员日志
 * @param string $desc 操作描述
 */

function add_admin_log($desc){
	$sql = "insert into {{admin_log}} values (null,'".Yii::app()->user->name."','".$desc."',".time().",'')";
	Yii::app()->db->createCommand($sql)->execute();
}


/**
 * 替换表情
 */
function replace_face($content){
	
	$img = '<img src='.Yii::app()->request->baseUrl.'/assets/index/Images/phiz/';
	$content = str_replace('[抓狂]', $img.'zhuakuang.gif />',$content);
	$content = str_replace('[抱抱]', $img.'baobao.gif />',$content);
	$content = str_replace('[害羞]', $img.'haixiu.gif />',$content);
	$content = str_replace('[酷]', $img.'ku.gif />',$content);
	$content = str_replace( '[嘻嘻]', $img.'xixi.gif />',$content);
	$content = str_replace( '[太开心]', $img.'touxiao.gif />',$content);
	$content = str_replace( '[偷笑]', $img.'touxiao.gif />',$content);
	$content = str_replace( '[钱]', $img.'qian.gif />',$content);
	$content = str_replace( '[花心]', $img.'huaxin.gif />',$content);
	$content = str_replace( '[挤眼]', $img.'jiyan.gif />',$content);
	return $content;	
}