<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>教育特色</title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo JS_PATH;?>js/tab.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/list_jyts.css"/>
</head>
<body>
<!--导航-->
<?php include template("content","header"); ?>
<!--banner-->
<img src="<?php echo IMG_PATH;?>img/list_jyts/banner.jpg" alt="" class="banner"/>

<!--主体-->
<main>
<!--教学理念-->
    <div class="jxln center">
        <div class="txt">
            <h4>&#xe648;</h4>
            <h3>教学理念</h3>
            <h5>teaching idea</h5>
        </div>
        <div class="zhuti">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c65efa1026e32bfd54109f47be31ed96&sql=SELECT+%2A+FROM+v9_page+where+catid%3D25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=25 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="left">
                <img src="<?php echo $r['img'];?>" alt="">
            </div>
            <p class="right">
                <?php echo $r['content'];?>
            </p>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>

<!--教学理念-->
    <div class="jxln2">
        <div class="center">
            <div class="txt">
                <h4>&#xe648;</h4>
                <h3>教学课程</h3>
                <h5>teaching idea</h5>
            </div>
            <div class="san">
                    <a  class="cur">基础课</a>
                <a >兴趣课</a>
            </div>
            <div class="jxln2neirong">

                <ul class="jxln2zhuti">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=26ecc27cd5c719c8697f2f921a3384de&action=lists&catid=31&moreinfo=1&num=8&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'31','moreinfo'=>'1','order'=>'id ASC','limit'=>'8',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <?php $n=1; if(is_array(string2array($r[thumbImg]))) foreach(string2array($r[thumbImg]) AS $pic_k => $v) { ?>
                    <li>
                        <img src="<?php echo thumb($v[url],257,362);?>" alt="<?php echo $v['alt'];?>" class="tu"/>
                        <div class="zhuti">
                            <div class="donghua donghua1">
                                <div class="icon"><img src="<?php echo thumb($r[thumb],81,81);?>" alt=""/></div>
                                <a href="#"><?php echo $r['title'];?><br><span><?php echo $v['alt'];?></span></a>
                                <p><?php echo $r['content'];?></p>
                            </div>
                        </div>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>

                <ul class="jxln2zhuti" style="display: none;">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=51867a98e98a21853bf080cf27a814ea&action=lists&catid=32&moreinfo=1&num=8&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'32','moreinfo'=>'1','order'=>'id ASC','limit'=>'8',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <?php $n=1; if(is_array(string2array($r[thumbImg]))) foreach(string2array($r[thumbImg]) AS $pic_k => $v) { ?>
                    <li>
                        <img src="<?php echo thumb($v[url],257,362);?>" alt="<?php echo $v['alt'];?>" class="tu"/>
                        <div class="zhuti">
                            <div class="donghua donghua1">
                                <div class="icon"><img src="<?php echo thumb($r[thumb],81,81);?>" alt=""/></div>
                                <a href="#"><?php echo $r['title'];?><br><span><?php echo $v['alt'];?></span></a>
                                <p><?php echo $r['content'];?></p>
                            </div>
                        </div>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>


        </div>
    </div>

</main>

<!--以下是页脚-->
<?php include template("content","footer"); ?>


<!--选项卡-->
<script>
    $(document).ready(function(){
        $(".san a").click(function(){
            $(this).addClass("cur").siblings().removeClass("cur");
            var index=$(this).index();
            $(" .jxln2neirong").children().eq(index).css("display","block").siblings().css("display","none");
        });
    });
</script>
</body>
</html>