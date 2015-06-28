<? if (!class_exists('template')) die('Access Denied');$template->getInstance()->check('default/index/header.html', '18130ce7c35aef23f4da92f902119926', 1435509279);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>壹海里</title>
	<meta name="keywords" content="<?=$seo['keywords']?>" />
	<meta name="description" content="<?=$seo['description']?>" />
	<link rel="stylesheet" type="text/css" href="<?=PATH_URL?>templates/default/index/css/base.css" />
	<link rel="stylesheet" type="text/css" href="<?=PATH_URL?>templates/default/index/css/style.css" />
	<script src="<?=PATH_URL?>templates/default/index/js/jquery.min.js" type="text/javascript"></script>

	<script type="text/javascript">
		//初始化
	    var def = <?=$dev?>;
	    function mover(object) {
	        //主菜单
	        var mm = document.getElementById("m_" + object);
	        mm.className = "m_li_a";
	        //初始主菜单隐藏效果
	        if (def != 0) {
	            var mdef = document.getElementById("m_" + def);
	            mdef.className = "m_li";
	        }
	        //子菜单
	        var ss = document.getElementById("s_" + object);
	        ss.style.display = "block";
	        //初始子菜单隐藏效果
	        if (def != 0) {
	            var sdef = document.getElementById("s_" + def);
	            sdef.style.display = "none";
	        }
	    }

	    function mout(object) {
	        //主菜单
	        var mm = document.getElementById("m_" + object);
	        mm.className = "m_li";
	        //初始主菜单
	        if (def != 0) {
	            var mdef = document.getElementById("m_" + def);
	            mdef.className = "m_li_a";
	        }
	        //子菜单
	        var ss = document.getElementById("s_" + object);
	        ss.style.display = "none";
	        //初始子菜单
	        if (def != 0) {
	            var sdef = document.getElementById("s_" + def);
	            sdef.style.display = "block";
	        }
	    }
	</script>
</head>
<body>
<div class="g-doc">
	<!-- 头部 -->
	<div class="g-hd">
		<div class="g-in">
			<div class="logo">
				<a href="/"><img src="<?=PATH_URL?>templates/default/index/images/logo.png"></a>
			</div>
		</div>
	</div>

	<!-- 导航 -->
	<div class="g-bd">
		<div class="g-in">
			<div class="nav-box">
				<div class="nav">
					<ul class="f-cb">
		                <li <? if($_g_mod=="about") { ?>class="m_li_a"<? } else { ?>class="m_li"<? } ?> id="m_1" <? if($_g_mod!="about") { ?>onmouseout="mout(1);" onmouseover="mover(1);"<? } ?>>
		                	<a href="/index.php?mod=about&amp;id=1">关于我们</a>
		                </li>
		                <li <? if($_g_mod!="product") { ?>onmouseout="mout(2);" onmouseover="mover(2);"<? } ?> <? if($_g_mod=="product") { ?>class="m_li_a"<? } else { ?>class="m_li"<? } ?> id="m_2">
		                	<a href="/index.php?mod=product&amp;act=list&amp;type=4">产品展示</a>
		                </li>
		                <li <? if($_g_mod!="baike") { ?>onmouseout="mout(3);" onmouseover="mover(3);"<? } ?> <? if($_g_mod=="baike") { ?>class="m_li_a"<? } else { ?>class="m_li"<? } ?> id="m_3">
		                	<a href="/index.php?mod=baike&amp;act=list&amp;type=2">壹海里百科</a>
		                </li>
		                <li <? if($_g_mod!="news") { ?>onmouseout="mout(4);" onmouseover="mover(4);"<? } ?> <? if($_g_mod=="news") { ?>class="m_li_a"<? } else { ?>class="m_li"<? } ?> id="m_4">
		                	<a href="/index.php?mod=news&amp;act=list&amp;type=10">壹海里资讯</a>
		                </li>
		                <li <? if($_g_mod!="taobao") { ?>onmouseout="mout(5);" onmouseover="mover(5);"<? } ?> class="m_li" id="m_5">
		                	<a href="#">淘宝商城</a>
		                </li>
		                <li <? if($_g_mod!="contact") { ?>onmouseout="mout(6);" onmouseover="mover(6);"<? } ?> <? if($_g_mod=="contact") { ?>class="m_li_a"<? } else { ?>class="m_li"<? } ?> id="m_6">
		                	<a href="/index.php?mod=contact&amp;id=1">联系我们</a>
		                </li>
		            </ul>
				</div>
				<div class="subnav">
					<ul>
		                <li <? if($_g_mod!="about") { ?>onmouseout="mout(1);" onmouseover="mover(1);"<? } ?> id="s_1" <? if($_g_mod=="about") { ?>style="display: block;"<? } ?>>
		                	<a <? if($_g_id=="1") { ?>class="s_li_a"<? } ?> href="/index.php?mod=about&amp;id=1"><span>公司简介</span></a>
		                	<a <? if($_g_id==2) { ?>class="s_li_a"<? } ?> href="/index.php?mod=about&amp;id=2"><span>企业资质</span></a>
		                	<a <? if($_g_id==4) { ?>class="s_li_a"<? } ?> href="/index.php?mod=about&amp;id=4"><span>品牌故事</span></a>
		                	<a <? if($_g_id==5) { ?>class="s_li_a"<? } ?> href="/index.php?mod=about&amp;id=5"><span>企业荣誉</span></a>
		                	<a <? if($_g_id==8) { ?>class="s_li_a"<? } ?> href="/index.php?mod=about&amp;id=8"><span>高管简介</span></a>
		                </li>
		                <li <? if($_g_mod!="product") { ?>onmouseout="mout(2);" onmouseover="mover(2);"<? } ?> class="s_li" id="s_2" <? if($_g_mod=="product") { ?>style="display: block;"<? } ?>>
		                	<a <? if($_g_type=="4") { ?>class="s_li_a"<? } ?> href="/index.php?mod=product&amp;act=list&amp;type=4"><span>淡干海参</span></a>
		                	<a <? if($_g_type=="5") { ?>class="s_li_a"<? } ?> href="/index.php?mod=product&amp;act=list&amp;type=5"><span>净干海参</span></a>
		                	<a <? if($_g_type=="6") { ?>class="s_li_a"<? } ?> href="/index.php?mod=product&amp;act=list&amp;type=6"><span>即食海参</span></a>
		                </li>
		                <li <? if($_g_mod!="baike") { ?>onmouseout="mout(3);" onmouseover="mover(3);"<? } ?> class="s_li" id="s_3" <? if($_g_mod=="baike") { ?>style="display: block;"<? } ?>>
		                	<a <? if($_g_type=="2") { ?>class="s_li_a"<? } ?> href="/index.php?mod=baike&amp;act=list&amp;type=2"><span>海参百科</span></a>
		                	<a <? if($_g_type=="3") { ?>class="s_li_a"<? } ?> href="/index.php?mod=baike&amp;act=list&amp;type=3"><span>海参泡发方法</span></a>
		                	<a <? if($_g_type=="8") { ?>class="s_li_a"<? } ?> href="/index.php?mod=baike&amp;act=list&amp;type=8"><span>海参做法</span></a>
		                </li>
		                <li <? if($_g_mod!="news") { ?>onmouseout="mout(4);" onmouseover="mover(4);"<? } ?> class="s_li" id="s_4" style="display:none">
		                	
		                </li>
		                <li <? if($_g_mod!="taobao") { ?>onmouseout="mout(5);" onmouseover="mover(5);"<? } ?> class="s_li" id="s_5" <? if($_g_mod=="news") { ?>style="display: block;"<? } ?>>
		                </li>
		                <li <? if($_g_mod!="contact") { ?>onmouseout="mout(6);" onmouseover="mover(6);"<? } ?> class="s_li" id="s_6" <? if($_g_mod=="contact") { ?>style="display: block;"<? } ?>>
		                	<a <? if($_g_id=="1") { ?>class="s_li_a"<? } ?> href="/index.php?mod=contact&amp;id=1"><span>联系我们</span></a>
		                	<a <? if($_g_id=="2") { ?>class="s_li_a"<? } ?> href="/index.php?mod=contact&amp;id=2"><span>人才招聘</span></a>
		                	<a <? if($_g_id=="0") { ?>class="s_li_a"<? } ?> href="/index.php?mod=contact&amp;id=0"><span>在线留言</span></a>
		                	<a href="#"><span>会员通道</span></a>
		                	<a href="#"><span>OA通道</span></a>
		                </li>
		            </ul>
				</div>
			</div>
		</div>
	</div>