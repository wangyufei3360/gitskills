<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/parent/list.html', '036ad79287f6d2e1842759feeacde5fe', 1354524272);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>合作伙伴</title>
<meta name="keywords" content="<?=$seo['keywords']?>" />
<meta name="description" content="<?=$seo['description']?>" />
<link type="text/css" rel="stylesheet" href="<?=PATH_URL?>templates/default/index/css/index.css"  />
<script src="<?=PATH_URL?>templates/default/index/js/jquery.min.js" type="text/javascript"></script>
<script src="<?=PATH_URL?>templates/default/index/js/tab.js" type="text/javascript"></script>
<!--[if lte IE 6]>
<script src="<?=PATH_URL?>templates/default/index/js/png.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
    </script>
<![endif]-->
</head>
<? include($template->getfile('default/index/header.html')); ?>
<!--列表mian-->

<div id="list_main"   >



<!--列表left-->
<div id="list_left">
	<div class="list_left_t1"><a href="#">PARENT 合作伙伴</a></div>
	<div class="list_left_menu">
		<div id="wrapper-250">
		  <ul class="accordion"><? if(is_array($fenlei)) { foreach($fenlei as $v) { ?>				<li> <a href="/index.php?mod=parent&amp;id=<?=$v['id']?>"><font color="#462B1F"><?=$v['name']?></font></a>    </li>
				<? } } ?>  </ul>
		</div>
	</div>
	<div class="list_left_t2"><img src="<?=PATH_URL?>templates/default/index/images/left_t2.jpg" /></div>
	<div class="list_left_t3"><img src="<?=PATH_URL?>templates/default/index/images/left_t3.jpg" /></div>
	<div class="list_left_t4"><img src="<?=PATH_URL?>templates/default/index/images/left_t4.jpg" /></div>
</div>
<!--列表left结束-->



<!--列表right-->
<div id="list_right">
	<div class="list_right_t1">	<img src="<?=PATH_URL?>templates/default/index/images/parent.jpg" border="0"/></div>
	<div class="list_right_t2"><a href="/" >首页</a>&nbsp;>&nbsp;<a href="/index.php?mod=parent">合作伙伴</a></div>
	<div class="list_right_t3">合作伙伴</div>
	
	<div class="list_right_t4">

 <p><img alt="图片1.png" width="0" height="0" src="<?=PATH_URL?>templates/default/index/images/31d380a4d4aef1af057c4abf010c8449.png" /></p>
<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
    <tbody>
        <tr>
            <td align="center"><a target="_blank" href="<?=PATH_URL?>templates/default/index/images/91842360bd34f65cf804e24d66ced258.png"><img border="0" width="700" height="517" alt="" src="<?=PATH_URL?>templates/default/index/images/91842360bd34f65cf804e24d66ced258.png" /></a></td>
        </tr>
    </tbody>
</table>
	</div>
	
	
</div>
<!--列表right-->

</div>

<!--列表main结束-->
<? include($template->getfile('default/index/footer.html')); ?>
