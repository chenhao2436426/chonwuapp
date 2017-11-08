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
            <li >
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e0e3c99abec8d5a3ffa3430d91f76a14&action=category&catid=%24CATEGORYS%5B%24top_parentid%5D%5Bcatid%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$CATEGORYS[$top_parentid][catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <a href="<?php echo $r['url'];?>" <?php if($catid==$r[catid] || $r[catid]==$CATEGORYS[$parentid][catid]) { ?> class="cur" <?php } ?>><?php echo $r['catname'];?></a>
                <?php $n++;}unset($n); ?>
                </pc>
            </li>
        </ul>
    </div>
    <!--行业新闻-->
    <div class="right">
        <div class="newstop">
            <h2><?php echo $catname;?><span class="yingwen"><?php echo $catname_en;?></span></h2>
            <img src="<?php echo IMG_PATH;?>img/list_xwhd/news_border.png" alt="">
        </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d565f367c97263cc33972b7a26374c5e&action=lists&catid=%24catid&num=3&order=id+ASC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 3;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
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