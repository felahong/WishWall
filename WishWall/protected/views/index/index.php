
	<div id='main'>
		<?php foreach ($list as $k=>$v) {?>
		<dl class='paper a<?php echo mt_rand(1, 5);?>'>
			<dt>
				<span class='username'><?php echo $v->nickname;?></span>
				<span class='num'>No.<?php echo $v->id;?></span>
			</dt>
			<dd class='content'><?php 

				echo replace_face($v->content);
		
			?></dd>
			<dd class='bottom'>
				<span class='time'><?php echo date('Y', $v->add_time);?></span>
				<a href="" class='close'></a>
			</dd>
		</dl>
		<?php }?>
	</div>

	<div id='send-form'>
		<p class='title'><span>许下你的愿望</span><a href="" id='close'></a></p>
		<form action="" name='wish'>
			<p>
				<label for="username">昵称：</label>
				<input type="text" name='username' id='username'/>
			</p>
			<p>
				<label for="content">愿望：(您还可以输入&nbsp;<span id='font-num'>50</span>&nbsp;个字)</label>
				<textarea name="content" id='content'></textarea>
				<div id='phiz'>
					<img src="./Images/phiz/zhuakuang.gif" alt="抓狂" />
					<img src="./Images/phiz/baobao.gif" alt="抱抱" />
					<img src="./Images/phiz/haixiu.gif" alt="害羞" />
					<img src="./Images/phiz/ku.gif" alt="酷" />
					<img src="./Images/phiz/xixi.gif" alt="嘻嘻" />
					<img src="./Images/phiz/taikaixin.gif" alt="太开心" />
					<img src="./Images/phiz/touxiao.gif" alt="偷笑" />
					<img src="./Images/phiz/qian.gif" alt="钱" />
					<img src="./Images/phiz/huaxin.gif" alt="花心" />
					<img src="./Images/phiz/jiyan.gif" alt="挤眼" />
				</div>
			</p>
			<span id='send-btn'></span>
		</form>
	</div>