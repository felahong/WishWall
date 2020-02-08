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
-->
</style>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/mail_leftbg.gif"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">欢迎界面</div></td>
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
        <td width="2%">&nbsp;</td>
        <td width="51%" class="left_txt">
        用&nbsp;&nbsp;户&nbsp;&nbsp;名：<?php echo Yii::app()->user->name;?><br>
        登录时间：<?php echo date('Y', Yii::app()->session['logintime']); ?><br>
        登录名次：<?php echo Yii::app()->session['loginnumb'];?>
        </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="40" colspan="4"><table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
          <tr>
            <td></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td background="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/mail_leftbg.gif"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/buttom_left2.gif" width="17" height="17" /></td>
    <td background="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/buttom_bgs.gif"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/mail_rightbg.gif"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</body>
