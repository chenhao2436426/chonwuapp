<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>家园共育</title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo JS_PATH;?>js/tab.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>js/shipu.js"></script>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/list_jygy.css"/>
</head>
<body>
<!--导航-->
<?php include template("content","header"); ?>
<!--banner-->
<img src="<?php echo IMG_PATH;?>img/list_jygy/inoculation_banner.png" alt="" class="banner"/>

<!--主体-->
<main>
    <!--每周食谱-->
    <div class="mzsp">
        <div class="center">
            <img src="<?php echo IMG_PATH;?>img/list_jygy/txt.png" alt="" class="mzspicon">
        </div>
        <div class="box center">
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=65bd0f2d80a92831366c26cd8cf48e81&action=lists&catid=38&moreinfo=1&num=4&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'38','moreinfo'=>'1','order'=>'id ASC','limit'=>'4',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <?php if($n==1) { ?>
                <li class="curr">
                    <div class="content">
                        <p><?php echo $r['title'];?></p>
                        <div class="recipeNav">
                            <a>星期一</a>
                            <a>星期二</a>
                            <a>星期三</a>
                            <a>星期四</a>
                            <a>星期五</a>
                        </div>
                        <?php echo $r['content'];?>
                    </div>
                </li>
                <?php } ?>
                <?php if($n!=1) { ?>
                <li>
                    <div class="content">
                        <p><?php echo $r['title'];?></p>
                        <div class="recipeNav">
                            <a>星期一</a>
                            <a>星期二</a>
                            <a>星期三</a>
                            <a>星期四</a>
                            <a>星期五</a>
                        </div>
                        <?php echo $r['content'];?>
                    </div>
                </li>
                <?php } ?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <div class="pageN"></div>
            <div class="leftBtn">&#xe6d4;</div>
            <div class="rightBtn">&#xe6d7;</div>
        </div>
    </div>

    <!--儿童保健-->
    <div class="tubiao center">
        <div class="top">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e0e3c99abec8d5a3ffa3430d91f76a14&action=category&catid=%24CATEGORYS%5B%24top_parentid%5D%5Bcatid%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$CATEGORYS[$top_parentid][catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <a index="<?php echo $r['url'];?>" <?php if($n=="1") { ?> class="cur" <?php } ?>><img src="<?php echo $r['image'];?>" alt=""><p><?php echo $r['catname'];?></p></a>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            <!--<a href="#"><img src="<?php echo IMG_PATH;?>img/list_jygy/icon2.jpg" alt=""><p>安全知识</p></a>-->
                <!--<a href="#"><img src="<?php echo IMG_PATH;?>img/list_jygy/icon3.jpg" alt=""><p>教育计划</p></a>-->
        </div>
        <div class="zhuti">
            <img src="<?php echo IMG_PATH;?>img/list_jygy/inoculation_mainborder.png" alt="" class="huangtiao">
            <ul>
                <!--<li>-->
                    <!--<img src="<?php echo IMG_PATH;?>img/list_jygy/inoculation_child.png" alt="">-->
                    <!--<div class="tubiaotxt">-->
                        <!--<h5>雾霾天气注意孩子健康</h5>-->
                        <!--<p>近日，全国各地又出现了雾霾天，加上天气转凉，非常容易造成孩子患上呼吸道常见疾病。为保证幼儿身体健康，请家长们与我们一起做好以下防护工作：一、注意环境变化　1、雾霾……</p>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<img src="<?php echo IMG_PATH;?>img/list_jygy/inoculation_child.png" alt="">-->
                    <!--<div class="tubiaotxt">-->
                        <!--<h5>雾霾天气注意孩子健康</h5>-->
                        <!--<p>近日，全国各地又出现了雾霾天，加上天气转凉，非常容易造成孩子患上呼吸道常见疾病。为保证幼儿身体健康，请家长们与我们一起做好以下防护工作：一、注意环境变化　1、雾霾……</p>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<img src="<?php echo IMG_PATH;?>img/list_jygy/inoculation_child.png" alt="">-->
                    <!--<div class="tubiaotxt">-->
                        <!--<h5>雾霾天气注意孩子健康</h5>-->
                        <!--<p>近日，全国各地又出现了雾霾天，加上天气转凉，非常容易造成孩子患上呼吸道常见疾病。为保证幼儿身体健康，请家长们与我们一起做好以下防护工作：一、注意环境变化　1、雾霾……</p>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<img src="<?php echo IMG_PATH;?>img/list_jygy/inoculation_child.png" alt="">-->
                    <!--<div class="tubiaotxt">-->
                        <!--<h5>雾霾天气注意孩子健康</h5>-->
                        <!--<p>近日，全国各地又出现了雾霾天，加上天气转凉，非常容易造成孩子患上呼吸道常见疾病。为保证幼儿身体健康，请家长们与我们一起做好以下防护工作：一、注意环境变化　1、雾霾……</p>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<img src="<?php echo IMG_PATH;?>img/list_jygy/inoculation_child.png" alt="">-->
                    <!--<div class="tubiaotxt">-->
                        <!--<h5>雾霾天气注意孩子健康</h5>-->
                        <!--<p>近日，全国各地又出现了雾霾天，加上天气转凉，非常容易造成孩子患上呼吸道常见疾病。为保证幼儿身体健康，请家长们与我们一起做好以下防护工作：一、注意环境变化　1、雾霾……</p>-->
                    <!--</div>-->
                <!--</li>-->
            </ul>
        </div>
    </div>
</main>

<!--以下是页脚-->
<?php include template("content","footer"); ?>


<script>
    $(document).ready(function(){
        $(".tubiao .zhuti ul").load("index.php?m=content&c=index&a=lists&catid=39");
        $(".tubiao .top a").click(function(){
            var url=$(this).attr("index");
//            alert(url);
            $(this).addClass("cur").siblings().removeClass("cur");
            $(".tubiao .zhuti ul").load(url);
        });
    });
</script>
</body>
</html>