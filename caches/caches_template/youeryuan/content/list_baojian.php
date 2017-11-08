<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e59045adec4b8881acf74cd451caf233&action=lists&catid=%24catid&moreinfo=1&num=20&order=id+ASC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'moreinfo'=>'1','order'=>'id ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','order'=>'id ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

<li>
    <img src="<?php echo IMG_PATH;?>img/list_jygy/inoculation_child.png" alt="">
    <div class="tubiaotxt">
        <h5><?php echo $r['title'];?></h5>
        <p><?php echo $r['content'];?></p>
    </div>
</li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>