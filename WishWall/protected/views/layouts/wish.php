<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>风浪红许愿墙</title>
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/assets/index/Css/index.css" />
	<script type="text/javascript" src='<?php echo Yii::app()->request->baseUrl;?>/assets/index/Js/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src='<?php echo Yii::app()->request->baseUrl;?>/assets/index/Js/index.js'></script>
</head>
<body>
	<div id='top'>
		<a href="<?php echo $this->createUrl('index/send');?>" id='send'></a>
	</div>
<?php echo $content ?>


<!--[if IE 6]>
    <script type="text/javascript" src="./Js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#send,#close,.close','background');
    </script>
<![endif]-->
</body>
</html>