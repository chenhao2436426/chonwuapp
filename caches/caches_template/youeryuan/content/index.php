<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>克莱博特蒙特梭利幼儿园</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">

    <script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/index.css"/>
    <script src="<?php echo JS_PATH;?>js/mui.min.js"></script>
    <script src="<?php echo JS_PATH;?>js/resize.js"></script>

</head>
<body>

<?php include template("content","header"); ?>

<!--banner-->
<div class="banner" id="banner">

    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1c47627b910509414b85662be50cc&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
    <ul class="clear" id="ul" style="left: -100%;">
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        <li><img src="<?php echo thumb($v[thumb],1920,550);?>" alt=""/></li>
        <?php $n++;}unset($n); ?>
    </ul>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <div class="pagNav" id="pagNav"></div>
    <div class="left" id="left">&#xe69b;</div>
    <div class="right" id="right">&#xe69a;</div>

</div>

<!--主体-->
<main>
    <!--家园环境-->
    <div class="jyhj center">
        <div class="txt">
            <h4>&#xe648;</h4>
            <h3>家园环境</h3>
            <h5>Home environment</h5>
        </div>
        <!--<ul class="zhuti">-->
            <!--<li>-->
                <!--<img src="<?php echo IMG_PATH;?>img/index/index_game1.png" alt="">-->
                <!--<a href="#">游戏活动区</a>-->
            <!--</li>-->
            <!--<li>-->
                <!--<img src="<?php echo IMG_PATH;?>img/index/index_game2.png" alt="">-->
                <!--<a href="#">游戏活动区</a>-->
            <!--</li>-->
            <!--<li>-->
                <!--<img src="<?php echo IMG_PATH;?>img/index/index_game3.png" alt="">-->
                <!--<a href="#">游戏活动区</a>-->
            <!--</li>-->
            <!--<li>-->
                <!--<img src="<?php echo IMG_PATH;?>img/index/index_game4.png" alt="">-->
                <!--<a href="#">游戏活动区</a>-->
            <!--</li>-->
            <!--<li>-->
                <!--<img src="<?php echo IMG_PATH;?>img/index/index_game5.png" alt="">-->
                <!--<a href="#">游戏活动区</a>-->
            <!--</li>-->
            <!--<li>-->
                <!--<img src="<?php echo IMG_PATH;?>img/index/index_game6.png" alt="">-->
                <!--<a href="#">游戏活动区</a>-->
            <!--</li>-->
        <!--</ul>-->
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f09307d4f3d7f79e1ab8a287c2ed68db&action=lists&catid=14&moreinfo=1&num=6&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','moreinfo'=>'1','order'=>'id ASC','limit'=>'6',));}?>
        <ul class="zhuti">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li>
                <img src="<?php echo thumb($r[thumb],380,240);?>" alt=""/>
                <a href=""><?php echo $r['title'];?></a>
            </li>
            <?php $n++;}unset($n); ?>
        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <!--特色课程-->
    <div class="tskc center">
        <div class="center">
            <div class="txt">
                <h4>&#xe648;</h4>
                <h3>特色课程</h3>
                <h5>Specialty courses</h5>
            </div>
            <p class="jieshao">克莱博特蒙特梭利幼儿园倡导“全面发展、全心培养、全程服务”的理念，为学前儿童提供高品质、有特色、有选择的教育资源。</p>
            <!--<ul>-->
                <!--<li>-->
                    <!--<img src="<?php echo IMG_PATH;?>img/index/index_girl.png" alt="" class="tu">-->
                    <!--<div class="zhuti">-->
                        <!--<div class="donghua donghua1">-->
                            <!--<div class="icon"><img src="<?php echo IMG_PATH;?>img/index/icon1.png" alt=""></div>-->
                            <!--<a href="#">蒙氏教学<br><span>Montessori teaching</span></a>-->
                            <!--<p>蒙台梭利（Montessori）教学法是由意大利教育家玛莉亚·蒙特梭利博士倾其毕生经历所创造的。其教学法的精髓在于培养幼儿自觉主动的学习和探索精神。在蒙氏教室里，有丰富多彩的教具，它们都是根据儿童成长发展敏感期所创立的适宜儿童成长的“玩具”。</p>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<img src="<?php echo IMG_PATH;?>img/index/index_girl.png" alt="" class="tu">-->
                    <!--<div class="zhuti">-->
                        <!--<div class="donghua donghua2">-->
                            <!--<div class="icon"><img src="<?php echo IMG_PATH;?>img/index/icon2.png" alt=""></div>-->
                            <!--<a href="#">蒙氏教学<br><span>Montessori teaching</span></a>-->
                            <!--<p>蒙台梭利（Montessori）教学法是由意大利教育家玛莉亚·蒙特梭利博士倾其毕生经历所创造的。其教学法的精髓在于培养幼儿自觉主动的学习和探索精神。在蒙氏教室里，有丰富多彩的教具，它们都是根据儿童成长发展敏感期所创立的适宜儿童成长的“玩具”。</p>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<img src="<?php echo IMG_PATH;?>img/index/index_girl.png" alt="" class="tu">-->
                    <!--<div class="zhuti">-->
                        <!--<div class="donghua donghua3">-->
                            <!--<div class="icon"><img src="<?php echo IMG_PATH;?>img/index/icon3.png" alt=""></div>-->
                            <!--<a href="#">蒙氏教学<br><span>Montessori teaching</span></a>-->
                            <!--<p>蒙台梭利（Montessori）教学法是由意大利教育家玛莉亚·蒙特梭利博士倾其毕生经历所创造的。其教学法的精髓在于培养幼儿自觉主动的学习和探索精神。在蒙氏教室里，有丰富多彩的教具，它们都是根据儿童成长发展敏感期所创立的适宜儿童成长的“玩具”。</p>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<img src="<?php echo IMG_PATH;?>img/index/index_girl.png" alt="" class="tu">-->
                    <!--<div class="zhuti">-->
                        <!--<div class="donghua donghua4">-->
                            <!--<div class="icon"><img src="<?php echo IMG_PATH;?>img/index/icon4.png" alt=""></div>-->
                            <!--<a href="#">蒙氏教学<br><span>Montessori teaching</span></a>-->
                            <!--<p>蒙台梭利（Montessori）教学法是由意大利教育家玛莉亚·蒙特梭利博士倾其毕生经历所创造的。其教学法的精髓在于培养幼儿自觉主动的学习和探索精神。在蒙氏教室里，有丰富多彩的教具，它们都是根据儿童成长发展敏感期所创立的适宜儿童成长的“玩具”。</p>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</li>-->
            <!--</ul>-->

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a596168f4b98d15afe89b8ce8876eb97&action=lists&catid=15&moreinfo=1&num=4&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','moreinfo'=>'1','order'=>'id ASC','limit'=>'4',));}?>
            <ul>
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
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <a href="#" class="ljgd">了解更多课程&gt;</a>
        </div>

    </div>

    <p class="tskcbanner">用艺术的力量优化孩子成长</p>

    <!--最新活动-->
    <div class="zxhd center">
        <div class="txt">
            <h4>&#xe648;</h4>
            <h3>最新活动</h3>
            <h5>The latest activity</h5>
        </div>
        <div class="san">
            <a  class="cur">最新活动</a>
            <a >行业新闻</a>
            <a >通知公告</a>
        </div>
        <div class="sanzhuti">
            <ul class="clears">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9446259febadffc448d201b09ca79d48&action=lists&catid=17&moreinfo=1&num=6&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','moreinfo'=>'1','order'=>'id ASC','limit'=>'6',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <img src="<?php echo thumb($r[thumb],312,200);?>" alt="">
                    <a href="#">
                        <h5><?php echo $r['title'];?><br><span><?php echo date('Y-m-d', $r['inputtime']);?></span></h5>
                        <p><?php echo $r['content'];?></p>
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul >
            <ul  class="clears" style="display: none;">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4c8d2ee158026d236a4deab7048e3b39&action=lists&catid=18&moreinfo=1&num=6&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'18','moreinfo'=>'1','order'=>'id ASC','limit'=>'6',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <img src="<?php echo thumb($r[thumb],312,200);?>" alt="">
                    <a href="#">
                        <h5><?php echo $r['title'];?><br><span><?php echo date('Y-m-d', $r['inputtime']);?></span></h5>
                        <p><?php echo $r['content'];?></p>
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul  class="clears" style="display: none;">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=15f9f04475f1d8482aea73853f1eb8d0&action=lists&catid=19&moreinfo=1&num=6&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','moreinfo'=>'1','order'=>'id ASC','limit'=>'6',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <img src="<?php echo thumb($r[thumb],312,200);?>" alt="">
                    <a href="#">
                        <h5><?php echo $r['title'];?><br><span><?php echo date('Y-m-d', $r['inputtime']);?></span></h5>
                        <p><?php echo $r['content'];?></p>
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>

    </div>


    <!--毕业了-->
    <div class="biye">
        <img src="<?php echo IMG_PATH;?>img/index/index_we.png" alt="" class="txt">
        <div class="main">
            <img src="<?php echo IMG_PATH;?>img/index/index_caihong.png" alt="" class="zuo">
            <div class="you">
                <img src="<?php echo IMG_PATH;?>img/index/index_we1.png" alt="">
                <img src="<?php echo IMG_PATH;?>img/index/index_we2.png" alt="">
                <img src="<?php echo IMG_PATH;?>img/index/index_we3.png" alt="">
                <a href="#" class="ljgd"><img src="<?php echo IMG_PATH;?>img/index/index_more.png" alt=""></a>
            </div>
        </div>
    </div>
</main>



<?php include template("content","footer"); ?>


<!--选项卡-->
<script>
    $(document).ready(function(){
        $(".san a").click(function(){
            $(this).addClass("cur").siblings().removeClass("cur");
            var index=$(this).index();
            $(" .sanzhuti").children().eq(index).css("display","block").siblings().css("display","none");
        });
    });
</script>

<script type="text/javascript" src="<?php echo JS_PATH;?>js/lunbo.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>js/smalllunbo.js"></script>
</body>
</html>