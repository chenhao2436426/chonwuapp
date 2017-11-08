<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>家长课堂</title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo JS_PATH;?>js/tab.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/list_jzkt.css"/>

</head>
<body>
<!--导航-->
<?php include template("content","header"); ?>
<!--banner-->
<div class="bannerdingwei">
    <img src="<?php echo IMG_PATH;?>img/list_jzkt/parent_banner.png" alt="" class="list_jzktbanner"/>
    <div class="bannerzhuti">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=90bd1dfbea84bf114c1e72fed4cc996c&action=lists&catid=36&moreinfo=1&num=8&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'36','moreinfo'=>'1','order'=>'id ASC','limit'=>'8',));}?>
        <div class="neirong">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <p><?php echo date('Y年m月d日',$r[inputtime]);?></p>
            <p><?php echo $r['title'];?></p>
            <p><?php echo $r['content'];?></p>
            <?php $n++;}unset($n); ?>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <img src="<?php echo IMG_PATH;?>img/list_jzkt/parent_teacher.png" alt="" class="teacher"/>
        <img src="<?php echo IMG_PATH;?>img/list_jzkt/parent_child.png" alt="" class="child"/>
    </div>
</div>
<!--主体-->
<div class="jzkt center">
        <h6>往期活动<br><span>PAST ACTIVITIES</span></h6>
    <div class="zhuti">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d70e38b3fd3be7d92abfc865ef3ef902&action=lists&catid=37&moreinfo=1&num=4&order=id+ASC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'37','moreinfo'=>'1','order'=>'id ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'37','moreinfo'=>'1','order'=>'id ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <ul>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li>
                <div class="left"><img src="<?php echo IMG_PATH;?>img/list_jzkt/flower.png"></div>
                <div class="right">
                    <h2><?php echo $r['title'];?></h2>
                    <h3><span>&#xe606;</span><?php echo date('Y年m月d日',$r[inputtime]);?></h3>
                    <p><?php echo $r['content'];?></p>
                </div>
                <a href="" class="ckxq">查看详情></a>
            </li>
            <?php $n++;}unset($n); ?>
        </ul>
        <div class="fanye">
            <?php echo $pages;?>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>


<!--以下是页脚-->
<?php include template("content","footer"); ?>
</body>
</html>