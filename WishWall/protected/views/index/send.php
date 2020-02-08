
	<div id='send-form'>
		<p class='title'><span>许下你的愿望</span>
		<a href="<?php echo $this->createUrl('index/index');?>" ></a></p>
		<?php $form = $this->beginWidget('CActiveForm')?>
			<p>
				<label for="username">昵称：</label>
				<?php echo $form->textField($wishModel, 'nickname', array('id'=>'username'))?>
			</p>
			<p>
				<label for="content">愿望：(您还可以输入&nbsp;<span id='font-num'>50</span>&nbsp;个字)</label>
				<?php echo $form->textArea($wishModel, 'content',array('id'=>'content'));?>
				<div id='phiz'>
					<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/Images/phiz/zhuakuang.gif" alt="抓狂" />
					<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/Images/phiz/baobao.gif" alt="抱抱" />
					<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/Images/phiz/haixiu.gif" alt="害羞" />
					<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/Images/phiz/ku.gif" alt="酷" />
					<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/Images/phiz/xixi.gif" alt="嘻嘻" />
					<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/Images/phiz/taikaixin.gif" alt="太开心" />
					<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/Images/phiz/touxiao.gif" alt="偷笑" />
					<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/Images/phiz/qian.gif" alt="钱" />
					<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/Images/phiz/huaxin.gif" alt="花心" />
					<img src="<?php echo Yii::app()->request->baseUrl;?>/assets/index/Images/phiz/jiyan.gif" alt="挤眼" />
				</div>
			</p>
			<span id='send-btn'></span>
		<?php $this->endWidget();?>
	</div>
		
	<script>
	$(function () {
		$('#send-btn').click(function(){
				$('#yw0').submit();
		});
		
		$( '<div id="windowBG"></div>' ).css( {
			width : $(document).width(),
 			height : $(document).height(),
 			position : 'absolute',
 			top : 0,
 			left : 0,
 			zIndex : 998,
 			opacity : 0.3,
 			filter : 'Alpha(Opacity = 30)',
 			backgroundColor : '#000000'
		} ).appendTo( 'body' );

		var obj = $( '#send-form' );
		obj.css( {
			left : ( $( window ).width() - obj.width() ) / 2,
			top : $( document ).scrollTop() + ( $( window ).height() - obj.height() ) / 2
		} ).fadeIn();
	});
	</script>