<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/admin/page_add.html', '32059c769b4f4d16e55bf81a2f862980', 1354521241);?>

<? include($template->getfile('default/admin/header.html')); ?>
<div class="right fr">
	<div class="now">
		<div class="fl now1"></div>
		<div class="fl now2"><? if($_g_act=='edit') { ?>修改业务体系<? } else { ?>增加业务体系<? } ?></div>
		<div class="fl now3"></div>
		<div class="clear"></div>
	</div>
	<form method="post" action="<?=$action?>" enctype="multipart/form-data">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wenzhang">
	<tr>
		<td width="70">名称：</td>
		<td><input type="text" name="info[name]" value="<?=$info['name']?>" class="inputtext inputtext_500" /></td>
	</tr>
	<tr>
		<td>缩略图：</td>
		<td><input type="file" name="logo" size="11" /></td>
	</tr>
	<tr>
		<td></td>
		<td><img src="<?=$info['logo']?>" width="170" height="200" style="border:1px solid #ddd" /></td>
	</tr>
	
	<tr>
		<td colspan="2"><textarea name="info[text]" id="editortext" style="width:100%;height:600px"><?=$info['text']?></textarea></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" value="提 交" class="tjbtn" /></td>
	</tr>
	</table>
	</form>
</div>
<script src="<?=PATH_URL?>include/editor/kindeditor.js" type="text/javascript"></script>
<script src="<?=PATH_URL?>include/editor/lang/zh_CN.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
var editor;
KindEditor.ready(function(K) {
	editor = K.create('#editortext', {
		allowFlashUpload :false
	});
});
</script>
<? include($template->getfile('default/admin/footer.html')); ?>
