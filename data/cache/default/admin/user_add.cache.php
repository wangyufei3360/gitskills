<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/user_add.html', '168e5f5367169a0f40879e30b052812d', 1435071503);?>

<? include($template->getfile('default/admin/header.html')); ?>
<div class="right fr">
	<div class="now">
		<div class="fl now1"></div>
		<div class="fl now2">修改会员信息</div>
		<div class="fl now3"></div>
		<div class="clear"></div>
	</div>
	<form method="post" action="<?=$action?>">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wenzhang">
	<tr>
		<td width="70">会 员 ID：</td>
		<td><?=$info['user_id']?></td>
	</tr>
	<tr>
		<td>用 户 名：</td>
		<td><?=$info['user_name']?></td>
	</tr>
	<tr>
		<td>密　　码：</td>
		<td><input type="password" name="user_pw" class="inputtext inputtext_200" /> 留空默认为不修改</td>
	</tr>
	<tr>
		<td>收货地址：</td>
		<td><input type="text" name="info[user_address]" value="<?=$info['user_address']?>" class="inputtext inputtext_400" /></td>
	</tr>
	<tr>
		<td>收货姓名：</td>
		<td><input type="text" name="info[user_tname]" value="<?=$info['user_tname']?>" class="inputtext inputtext_200" /></td>
	</tr>
	<tr>
		<td>手机号码：</td>
		<td><input type="text" name="info[user_phone]" value="<?=$info['user_phone']?>" class="inputtext inputtext_200" /></td>
	</tr>
	<tr>
		<td>常用邮箱：</td>
		<td><input type="text" name="info[user_email]" value="<?=$info['user_email']?>" class="inputtext inputtext_200" /></td>
	</tr>
	<tr>
		<td>注册时间：</td>
		<td><?=$info['user_atime']?></td>
	</tr>
	<tr>
		<td>上次登录：</td>
		<td><?=$info['user_ltime']?></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" value="提 交" class="tjbtn" /></td>
	</tr>
	</table>
	</form>
</div>
<? include($template->getfile('default/admin/footer.html')); ?>
