<html>
<head>
	<title>网站后台</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<frameset rows="64,*"  frameborder="NO" border="0" framespacing="0">
	<frame src="<?php echo $this->createUrl('index/indextop');?>" noresize="noresize" frameborder="NO" name="topFrame" scrolling="no" marginwidth="0" marginheight="0" target="main" />
	<frameset cols="200,*"  rows="100%,*" id="frame">
		<frame src="<?php echo $this->createUrl('index/indexleft');?>" name="leftFrame" noresize="noresize" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" target="main" />
		<frame src="<?php echo $this->createUrl('index/indexright');?>" name="main" marginwidth="0" marginheight="0" frameborder="0" scrolling="auto" target="_self" />
  	</frameset>
	<noframes><body></body></noframes>
</frameset>
</html>
