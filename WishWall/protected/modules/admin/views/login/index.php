<html>
<head>
<title>网站后台</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #1D3647;
}
input {height: 28px;}
.yzm img {vertical-align: middle;}
.errorMessage {display: inline-block;}
-->
</style>

<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/skin.css" rel="stylesheet" type="text/css">
<body>
<table width="100%" height="166" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="42" valign="top"><table width="100%" height="42" border="0" cellpadding="0" cellspacing="0" class="login_top_bg">
      <tr>
        <td width="1%" height="21">&nbsp;</td>
        <td height="42">&nbsp;</td>
        <td width="17%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" height="532" border="0" cellpadding="0" cellspacing="0" class="login_bg">
      <tr>
        <td width="49%" align="right"><table width="91%" height="532" border="0" cellpadding="0" cellspacing="0" class="login_bg2">
            <tr>
              <td height="138" valign="top"><table width="89%" height="427" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="149">&nbsp;</td>
                </tr>
                <tr>
                  <td height="80" align="right" valign="top"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/logo.png" width="279" height="68"></td>
                </tr>
                <tr>
                  <td height="198" align="right" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr align=right>
                      <td width="35%">&nbsp;</td>
                      <td height="25" colspan="2" class="left_txt"><p>1- 地区商家信息网门户站建立的首选方案...</p></td>
                    </tr>
                    <tr align=right>
                      <td>&nbsp;</td>
                      <td height="25" colspan="2" class="left_txt"><p>2- 一站通式的整合方式，方便用户使用...</p></td>
                    </tr>
                    <tr align=right>
                      <td>&nbsp;</td>
                      <td height="25" colspan="2" class="left_txt"><p>3- 强大的后台系统，管理内容易如反掌...</p></td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
            </tr>
            
        </table></td>
        <td width="1%" >&nbsp;</td>
        <td width="50%" valign="bottom"><table width="100%" height="59" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="4%">&nbsp;</td>
              <td width="96%" height="38"><span class="login_txt_bt">登陆信息网后台管理</span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="21"><table cellSpacing="0" cellPadding="0" width="100%" border="0" id="table211" height="328">
                  <tr>
                    <td height="164" colspan="2" align="middle">
                    
                    <?php $form = $this->beginWidget('CActiveForm'); ?>
                        <table cellSpacing="0" cellPadding="0" width="100%" border="0" height="143" id="table212">
                          <tr>
                            <td height="38" colspan="2" class="top_hui_text"> 管理员：
                            	<?php echo $form->textField($loginModel,'username', array('class'=> 'editbox4', 'size'=> '20'));?>
                            	<font color=red>&nbsp;
                            		<?php echo $form->error($loginModel, 'username');?>
                            	</font>
                            </td>
                          </tr>
                          <tr>
                            <td height="35" colspan="2" class="top_hui_text">密&nbsp;码：
                            	<?php echo $form->passwordField($loginModel, 'password', array('size'=>'20','class'=>'editbox4'))?>
	                        	<font color=red>&nbsp;
                            		<?php echo $form->error($loginModel, 'password');?>
	                        	</font>
                            </td>
                          </tr>
                          <tr class='yzm'>
                            <td height="35" colspan="2" class="top_hui_text">验证码：
                            
                            	<?php echo $form->textField($loginModel,'captcha', array('class'=>'wenbenkuang','maxLength'=> '4', 'size'=> '10'));?>
                            	
                            	<?php $form->Widget('CCaptcha',array('showRefreshButton'=> false, 'clickableImage' => true, 
                            			'imageOptions'=> array('style'=> 'cursor: pointer', 'title'=> '看不清楚？点击切换')))?>
                            			
                            	<font color=red>&nbsp;
                            		<?php echo $form->error($loginModel, 'captcha');?></font>
                          	 </td>
                          </tr>
                          <tr>
                            <td height="35" ><input name="Submit" type="submit" class="button" id="Submit" value="登 陆"> </td>
                          </tr>
                        </table>
                        <br>
                        <?php $this->endWidget();?>
                    </td>
                  </tr>
                  <tr>
                    <td width="433" height="164" align="right" valign="bottom"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/login-wel.gif" width="242" height="138"></td>
                    <td width="57" align="right" valign="bottom">&nbsp;</td>
                  </tr>
              </table></td>
            </tr>
          </table>
          </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="20"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="login-buttom-bg">
      <tr>
        <td align="center"><span class="login-buttom-txt"></span></td>
      </tr>
    </table></td>
  </tr>
</table>