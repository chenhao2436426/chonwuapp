<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>园所介绍</title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo JS_PATH;?>js/tab.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/list_ysjs.css"/>
</head>
<body>
<?php include template("content","header"); ?>
<!--banner-->
<img src="<?php echo IMG_PATH;?>img/list_ysjs/garten_banner.png" alt="" class="banner"/>

<!--主体-->
<main>
    <!--园所简介-->
    <div class="ysjj center">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5a6591fbd9a53fbf26034624b631ec1f&sql=SELECT+%2A+FROM+v9_page+where+catid%3D20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=20 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
        <h3>园所简介<br><span>school profile</span></h3>
        <div class="ysjjzhuti">
            <div class="left">
                <img src="<?php echo $val['img'];?>" alt="">
            </div>
            <div class="right">
                <h5><?php echo $val['title'];?><br><span><?php echo $val['title_en'];?></span></h5>
                <p><?php echo $val['content'];?></p>
                <a href="" class="ckxq">查看详情&gt;&gt;</a>

            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <!--电话-->
    <div class="tel">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a5c6dd96cbeb6f3b71a48a70b9ba6e4f&sql=SELECT+%2A+FROM+v9_page+where+catid%3D28\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=28 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
        <h4>&#xe6a3;</h4>
        <h5><?php echo $val['title'];?></h5>
        <span><?php echo $val['content'];?></span>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <!--入园须知-->
    <div class="ryxz">
        <div class="center">
            <div class="kuai"></div>
            <div class="kuang">
                <h4>Admission notice</h4>
                <div class="txt">
                    <p>宝宝第一次上幼儿园，家长们都有这样那样的担心和焦虑，为了能够让宝宝更好的适应幼儿园的环境，家长要了解以下相关事项。</p>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=89e52e44fafa179167c2ff08d49b03e1&sql=SELECT+%2A+FROM+v9_page+where+catid%3D29\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=29 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                    <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                    <?php echo $val['content'];?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
                <div class="ryxzzuo">
                    <img src="<?php echo IMG_PATH;?>img/list_ysjs/garten_notice.png" alt="">
                    <h5>入园须知</h5>
                </div>
                <img src="<?php echo IMG_PATH;?>img/list_ysjs/gartrn_child.png" alt="" class="ryxzshang">
            </div>
        </div>
    </div>
    <!--家园环境-->

    <div class="jyhj center">
        <h3>家园环境<br><span>Home environment</span></h3>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0e6f03fd4570a41777e0c20944bfa6d6&action=lists&catid=30&moreinfo=1&num=8&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'30','moreinfo'=>'1','order'=>'id ASC','limit'=>'8',));}?>
        <ul>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li>
                <img src="<?php echo thumb($r[thumb],380,240);?>" alt="">
                <div class="donghua"><a href=""><span>&#xe671;</span><br><?php echo $r['title'];?></a></div>
            </li>
            <?php $n++;}unset($n); ?>
        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <!--预约参观-->
    <div class="yycg">
        <h3>预约参观<br><span>Model room visits</span></h3>
        <form class="center"  method="post" action="?m=formguide&c=index&a=show&formid=12&siteid=1" name="myform" id="myform">
            <div class="zhuti clear">
                <ul class="left">
                    <li>家长姓名：<input type="text" name="info[name]" id="name"></li>
                    <li>联系电话：<input type="text"  name="info[tel]" id="tel" ></li>
                    <li>宝宝年龄：<input type="text"  name="info[age]" id="age"></li>
                    <li>宝宝性别：<input type="text"  name="info[sex]" id="sex" ></li>
                </ul>
                <div class="right">
                    <div class="rightT">
                        <div class="xuanxiang cur">留言</div>
                        <div class="xuanxiang">预约</div>
                    </div>
                    <div class="rightB">
                        <div class="box cur">
                            <input type="text" class="txt1" placeholder="主题：" name="info[zhuti]" id="zhuti"/>
                            <textarea class="txt2" placeholder="内容："  name='info[neirong]' id='neirong'>1</textarea>
                        </div>
                    </div>
                    <p><span>*</span> 对外开放时间：<span>上午9：00——12：00，下午2：00——5：00</span></p>
                </div>
                <div class="clears"></div>
                <input class="tijiao" value="提交" type="submit" name="dosubmit" id="dosubmit">
            </div>
        </form>
    </div>
</main>

<!--以下是页脚-->
<?php include template("content","footer"); ?>

</body>
</html>