<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>新闻活动</title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo JS_PATH;?>js/tab.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/list_xwhd.css"/>
</head>
<body>
<!--导航-->
<?php include template("content","header"); ?>
<!--banner-->
<img src="<?php echo IMG_PATH;?>img/list_xwhd/news_banner.png" alt="" class="list_xwhdbanner"/>

<!--主体-->
<main class="xwhdzhuti center clear">
    <!--新闻活动-->
    <div class="left">
        <ul class="lefttop">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cd609b7b9ac4fadeb42b5e7f97a5f535&action=category&catid=%24catid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>" <?php if($n==1) { ?> class="cur"<?php } ?>><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            </pc>
        </ul>

    </div>
    <!--行业新闻-->
    <div class="right">
        <div class="newstop">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cd609b7b9ac4fadeb42b5e7f97a5f535&action=category&catid=%24catid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <?php if($n==1) { ?>
            <h2><?php echo $v['catname'];?><span class="yingwen"><?php echo $v['catname_en'];?></span></h2>
            <?php } ?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <img src="<?php echo IMG_PATH;?>img/list_xwhd/news_border.png" alt="">
        </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3b4eb932d7dbcfaf9f12e967fc249b51&action=lists&catid=%24catid&num=3&moreinfo=1&order=id+ASC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 3;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'moreinfo'=>'1','order'=>'id ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','order'=>'id ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <ul>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li>
                <div class="shijian">
                    <?php echo date('Y_m',$r['inputtime']);?>
                    <span><?php echo date('d',$r['inputtime']);?></span>
                </div>
                <div class="xvxian"></div>
                <div class="newtxt">
                    <a href="<?php echo $r['url'];?>"><h2><?php echo $r['title'];?></h2></a>
                    <p><?php echo $r['description'];?>...</p>
                </div>
            </li>
        <?php $n++;}unset($n); ?>
        </ul>
        <div class="page">
            <?php echo $pages;?>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</main>


<!--以下是页脚-->
<?php include template("content","footer"); ?>

</body>
</html>