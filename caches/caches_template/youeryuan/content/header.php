<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<!--导航-->
<div class="nav">
	<img src="<?php echo IMG_PATH;?>img/index/top.png" alt="" class="toptu"/>
	<div class="headertitle clear">
		<div class="logo1"></div>
		<div class="logo2"></div>

	</div>
	<div class="zhuti centers">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=172d3e742399e5ace943301e16f256b0&action=category&catid=0&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
		<ul class="clears">
			<li <?php if(empty($catid)) { ?>class="cur"<?php } ?>><a href="<?php echo siteurl($siteid);?>">首页<span>home</span></a></li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li <?php if($r['catid']==$catid || $CATEGORYS[$CAT[parentid]][catid]==$r['catid']) { ?> class="cur" <?php } ?>><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?><span><?php echo $r['catname_en'];?></span></a></li>
			<?php $n++;}unset($n); ?>
		</ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<div class="logo">
			<img src="<?php echo IMG_PATH;?>img/index/logo.png" alt=""/>
		</div>

	</div>
</div>