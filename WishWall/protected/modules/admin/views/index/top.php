<html>
<head>
<title>网站后台</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="60">
<link href="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/skin.css" rel="stylesheet" type="text/css">
<base target="main">
</head>
<body leftmargin="0" topmargin="0">
<table width="100%" height="64" border="0" cellpadding="0" cellspacing="0" class="admin_topbg">
  <tr>
    <td width="61%" height="64"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/logo.gif" width="262" height="64"></td>
    <td width="39%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="74%" align=right height="38" class="admin_txt">admin&nbsp;&nbsp;&nbsp;</td>
        <td width="22%">
        <a href="<?php echo $this->createUrl('index/loginout');?>" target="_top" >
        	<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/admin/images/out.gif" width="46" height="20" border="0"></a></td>
        <td width="4%">&nbsp;</td>
      </tr>
      <tr>
        <td height="19" colspan="3">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
