<html>
<title>网站后台</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/skin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EEF2FB;
}


/**
 * 翻页样式
 */
.page_blue{
 margin: 3px;
 padding: 3px;
 text-align: center;
 font: 12px verdana, arial, helvetica, sans-serif;
}
ul.bluePager,ul.yiiPager
{
 font-size:11px;
 border:0;
 margin:0;
 padding:0;
 line-height:100%;
 display:inline;
 text-aligin:center;
}
 
ul.bluePager li,ul.yiiPager li
{
 display:inline;
}
 
ul.bluePager a:link,ul.yiiPager a:link,
ul.bluePager a:visited,ul.yiiPager a:visited,
ul.bluePager .total_page label,ul.yiiPager .total_page label,
ul.bluePager .total_row label,ul.yiiPager .total_row label
{
 border: #ddd 1px solid;
 color: #888888;
 padding:2px 5px;
 text-decoration:none;
}
 
ul.bluePager .page a,ul.yiiPager .page a
{
 font-weight:normal;
}
 
ul.bluePager a:hover,ul.yiiPager a:hover
{
 color:#FFF !important; border:#156a9a 1px solid; background-color:#2b78a3
}
 
ul.bluePager .selected a,ul.yiiPager bluePager .selected a
{
 color:#3aa1d0 !important;
 border: 1px solid #3aa1d0;
}
 
ul.bluePager .selected a:hover,ul.yiiPager .selected a:hover
{
 color:#FFF !important;
}
 
ul.bluePager .hidden a,ul.yiiPager .hidden a
{
 border:solid 1px #DEDEDE;
 color:#888888;
}
 
ul.bluePager .hidden,ul.yiiPager .hidden
{
 display:none;
}
ul.yiiPager .selected a {
	color: #fff !important;
}

-->
</style>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/mail_leftbg.gif"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">许愿列表</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/mail_rightbg.gif"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" valign="top">&nbsp;</td>
        <td>&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
			<td height="40" colspan="4">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" class='list'>
					<tr>
					  <td height="30" align="center" class="left_txt2">WID</td>
					  <td height="30" align="center" class="left_txt2">排序</td>
					  <td height="30" align="center" class="left_txt2">昵称</td>
					  <td height="30" align="center" class="left_txt2">内容</td>
					  <td height="30" align="center" class="left_txt2">添加时间</td>
					  <td height="30" align="center" class="left_txt2">操作</td>
					</tr>
					<?php foreach ($list as $k=>$v){?>
					<tr>
					  <td height="30" align="center" class="left_txt2"><?php echo $v->id;?></td>
					  <td height="30" align="center" class="left_txt2"><?php echo $v->sort;?></td>
					  <td height="30" align="center" class="left_txt2"><?php echo $v->nickname;?></td>
					  <td height="30" align="center" class="left_txt2"><?php echo $v->content;?></td>
					  <td height="30" align="center" class="left_txt2"><?php echo date('Y', $v->add_time);?></td>
					  <td height="30" align="center" class="left_txt2">
					  	<a href="<?php echo $this->createUrl('wish/edit', array('id'=>$v->id));?>">[编辑]</a>&nbsp;&nbsp;
					  	<a href="<?php echo $this->createUrl('wish/del', array('id'=>$v->id));?>">[删除]</a>
					  </td>
					</tr>
					<?php }?>
					<tr>
						<td clospan='5'>
							<?php 
								$this->widget('CLinkPager',array('header'=>'', 'firstPageLabel' => '首页', 'lastPageLabel' => '末页', 'prevPageLabel' => '上一页', 'nextPageLabel' => '下一页', 'pages' => $pager, 'maxButtonCount'=>8, ));
							?>
						</td>
					</tr>
            	</table>
        	</td>
      </tr>
      <tr>
		<td height="40" colspan="4">
        	<table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC"><tr><td></td></tr></table>
        </td>
      </tr>
    </table></td>
    <td background="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/mail_leftbg.gif"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/buttom_left2.gif" width="17" height="17" /></td>
    <td background="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/buttom_bgs.gif"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/mail_rightbg.gif"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
  <script src='<?php echo Yii::app()->request->baseUrl;?>/assets/admin/js/jquery.min.js'></script>
	<script>
	$(function(){
		$('.list tr:odd td').css('background','rgb(247, 248, 249)');
		$('.list tr:even td').css('background','#f2f2f2');
	});
	</script>
</table>
</body>
