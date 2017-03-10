<?php defined('IN_SANLVE') or exit('No permission resources.'); ?><?php include template("content","header_page"); ?>
<div class="container">
    <div class="wh1200">
        <div class="pagenav"><a href="<?php echo siteurl($siteid);?>">首页</a> &gt; <?php echo catpos($catid);?><span> 列表</span></div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=936375e77957c364712961d644082fa1&action=lists&catid=%24catid&num=12&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <div class="list-head">
            <span class="fr">共<b class="bluetext"><?php echo $content_total;?></b>个作品</span>
            <ul>
                <li><a href="#" class="cur">默认排序</a></li>
            </ul>
        </div>
        <div class="piclist-con">
            <ul>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <table width="100%" border="0"><tbody>
                        <tr>
                            <td colspan="3" class="pic">
                                <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
                                    <img src="<?php echo thumb($r[thumb],300,224);?>" width="378" height="250" />
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <?php $hists_db = pc_base::load_model('hits_model'); $_r = $hists_db->get_one(array('hitsid'=>'c-'.$modelid.'-'.$r[id])); $views = $_r[views]; ?>
                            <td colspan="2" class="picname"><strong><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],60);?></a></strong></td>
                            <td colspan="1" class="pichits graytext">浏览 <?php echo $views;?></td>
                        </tr>
                    </tbody></table>
                </li>
                <li class="w30"></li>
                <?php $n++;}unset($n); ?>
            </ul>
        </div>
        <div id="pages" class="text-c"><?php echo $pages;?></div>
        <div id="pages" class="text-c">
            <a class="a1">20条</a> 
            <a href="index.php?m=content&amp;c=index&amp;a=lists&amp;catid=17" class="a1">上一页</a> 
            <a href="index.php?m=content&amp;c=index&amp;a=lists&amp;catid=17">1</a> <span>2</span> 
            <a href="index.php?m=content&amp;c=index&amp;a=lists&amp;catid=17&amp;page=2" class="a1">下一页</a>
        </div>
        <div class="page">
            <div>
                <a class="first" href="/Words-index-p-1/">首页</a> 
                <a class="prev" href="/Words-index-p-5/">&lt;</a> 
                <a class="num" href="/Words-index-p-2/">2</a>
                <a class="num" href="/Words-index-p-3/">3</a>
                <a class="num" href="/Words-index-p-4/">4</a>
                <a class="num" href="/Words-index-p-5/">5</a><span class="current">6</span>
                <a class="num" href="/Words-index-p-7/">7</a>
                <a class="num" href="/Words-index-p-8/">8</a>
                <a class="num" href="/Words-index-p-9/">9</a>
                <a class="num" href="/Words-index-p-10/">10</a>
                <a class="num" href="/Words-index-p-11/">11</a> 
                <a class="next" href="/Words-index-p-7/">&gt;</a> 
                <a class="end" href="/Words-index-p-54/">尾页</a>
             </div>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>

<?php include template("content","footer"); ?>