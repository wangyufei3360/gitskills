<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/message/message_show.html', 'dfd248097716af3b10452c1164cce6fe', 1435588076);?>

<? include($template->getfile('default/admin/header.html')); ?>
<div class="right fr">
	<div class="now">
		<div class="fl now1"></div>
		<div class="fl now2">查看留言</div>
		<div class="fl now3"></div>
		<div class="clear"></div>
	</div>
	<form method="post" action="<?=$action?>">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wenzhang">
	<tr>
		<td width="70">留言 ID：</td>
		<td><?=$info['msg_id']?></td>
	</tr>
	<tr>
		<td>姓名：</td>
		<td><?=$info['user_tname']?></td>
	</tr>
	<tr>
		<td>邮箱：</td>
		<td><?=$info['user_email']?></td>
	</tr>
	<tr>
		<td>电话：</td>
		<td><?=$info['user_phone']?></td>
	</tr>
	<tr>
		<td>地址：</td>
		<td><?=$info['user_address']?></td>
	</tr>
	<tr>
		<td>留言时间：</td>
		<td><?=$info['msg_atime']?></td>
	</tr>
	<tr>
		<td>留言内容：</td>
		<td><?=$info['msg_content']?></td>
	</tr>
	</table>
	</form>
</div>
<? include($template->getfile('default/admin/footer.html')); ?>
