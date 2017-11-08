<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>家园共育</title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo JS_PATH;?>js/tab.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/show_news.css"/>
    <script type="text/javascript" src="<?php echo JS_PATH;?>js/shipu.js"></script>
</head>
<body>
<!--导航-->
<?php include template("content","header"); ?>
<!--banner-->
<img src="<?php echo IMG_PATH;?>img/news/news_banner.png" alt="" class="show-newsbanner"/>

<!--主体-->
<main style="background: #f5f5f5; padding-bottom: 105px;">

    <div class="weizhi">
        <p class="center">您的位置：<?php echo catpos($catid);?><span>正文</span></p>
    </div>
    <div class="show-news-main center ">
        <div class="name">
            <h2><?php echo $title;?></h2>
            <span>浏览次数： <i id="hits">57</i>次&nbsp;&nbsp;&nbsp;&nbsp;发布时间：<?php echo $inputtime;?></span>
        </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=15b233765838ae30a99268a0276b71aa&sql=SELECT+%2A+FROM+v9_news_data+WHERE+id%3D%24id&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_news_data WHERE id=$id LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="img">
            <?php $n=1; if(is_array(string2array($r[thumbImg]))) foreach(string2array($r[thumbImg]) AS $pic_k => $v) { ?>
            <img src="<?php echo $v['url'];?>" alt="">
            <?php $n++;}unset($n); ?>
        </div>
        <p><?php echo $content;?></p>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <strong>上一篇：</strong><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a><br />
        <strong>下一篇：</strong><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
    </div>
</main>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>


<?php include template("content","footer"); ?>
</body>
</html>
