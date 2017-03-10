<?php defined('IN_SANLVE') or exit('No permission resources.'); ?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>sl-extends.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript">
function Trim(str){ //删除左右两端的空格
return str.replace(/(^\s*)|(\s*$)/g, "");
}
function checkSearch()
{
	var keyboard = Trim($("#q").val());
	 
	if (keyboard=='')
	{
		alert("搜索关键词不能为空...");
		return false;
	}
	return true;
}
</script>
</head>
<body>
<div class="head">
    <div class="wh1200">
        <div class="fl"><a href="/"><img src="./statics/images/sl/logo-min.png" width="200" height="45" alt="三略建筑" /></a></div>
        <div class="ml105 search fl">
            <form action="<?php echo APP_PATH;?>index.php" method="get" onsubmit="return checkSearch();">
                <!-- <div class="select_box">
                    <div class="select_showbox">全部</div>
                    <ul class="select_option">
                        <li class="selected">全部</li>
                        <li>设计师</li>
                        <li>建材</li>
                        <li>楼盘</li>
                        <li>装修百科</li>
                    </ul>
                </div> -->
                <select name="classid" id="classid">
                    <option value="0">全部</option>
                    <option value="1">住宅</option>
                    <option value="2">公寓</option>
                    <option value="3">办公</option>
                    <option value="4">软装</option>
                </select>
                <input class="inp_srh"  name="q" id="q" value="" placeholder="请输入搜索关键字">
                <input class="btn_srh" name="submit" type="submit" value="">
                <input type="hidden" name="m" value="search"/>
                <input type="hidden" name="c" value="index"/>
                <input type="hidden" name="a" value="init"/>
                <input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
                <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
            </form>
            <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.select.js"></script>
        </div>
        <div class="fl call">025-59927781</div>
        <div class="clear"></div>
    </div>
    <div class="wh1200">
        <div class="nav">
            <ul>
                <li class="fenlei">所有分类</li>
                <li class="underline"><span>&nbsp;&nbsp;</span></li>
                <!-- 
                <li><a href="/Meth-index/">首页</a></li>
                <li class="underline"><span>&nbsp;&nbsp;</span></li>
                <li>
                    <a href="./index.php?m=content&c=index&a=lists&catid=2&page=1">公司介绍</a>
                    <dl class="sub_nav">
                        <dd><a href="./index.php?m=content&c=index&a=lists&catid=2&page=1">公司简介</a></dd>
                        <dd><a href="#">招聘信息</a></dd>
                        <dd><a href="#">公司地址</a></dd>
                    </dl>
                </li>
                <li class="underline"><span>&nbsp;&nbsp;</span></li>
                <li>
                    <a href="/Words-index/">定制住宅</a>
                    <dl class="sub_nav">
                        <dd><a href="#">风格</a></dd>
                        <dd><a href="#">案例</a></dd>
                        <dd><a href="#">定制流程</a></dd>
                        <dd><a href="#">预付定金</a></dd>
                    </dl>
                </li>
                <li class="underline"><span>&nbsp;&nbsp;</span></li>
                <li><a href="/Unit-index/">定制公寓</a>
                    <dl class="sub_nav">
                        <dd><a href="#">风格</a></dd>
                        <dd><a href="#">案例</a></dd>
                        <dd><a href="#">定制流程</a></dd>
                        <dd><a href="#">预付定金</a></dd>
                    </dl>
                </li>
                <li class="underline"><span>&nbsp;&nbsp;</span></li>
                <li><a href="/Designer-index/">定制办公</a>
                    <dl class="sub_nav">
                        <dd><a href="#">风格</a></dd>
                        <dd><a href="#">案例</a></dd>
                        <dd><a href="#">定制流程</a></dd>
                        <dd><a href="#">预付定金</a></dd>
                    </dl>
                </li>
                <li class="underline"><span>&nbsp;&nbsp;</span></li>
                <li><a href="/Meth-index/">定制软装</a></li>
                <li class="underline"><span>&nbsp;&nbsp;</span></li>
                <li><a href="/Ask-index/">建材商城</a></li>
                <li class="underline"><span>&nbsp;&nbsp;</span></li>
                <li><a href="/Ask-index/">品牌屋</a></li>
                <li class="underline"><span>&nbsp;&nbsp;</span></li>
                <li><a href="/Shop-index/">专家库</a></li>
                <li class="underline"><span>&nbsp;&nbsp;</span></li>
                 -->
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d4b9fcce1375cacb7ce5e1c6ac8f3432&action=category&catid=0&num=20&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                <li><a <?php if(empty($catid)) { ?>class="cur" <?php } ?> href="<?php echo siteurl($siteid);?>">首页</a></li>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><!--  一级栏目循环开始  -->
                <li><a <?php if($r['catid'] == $catid || $CATEGORYS[$CAT[parentid]][catid]==$r['catid']) { ?>class="cur" <?php } ?> href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                    <?php if($r[arrchildid]) { ?> <!--是否有子栏目-->
                    <dl class="sub_nav">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d8d642270b91d440e3f49dac043edf3d&action=category&catid=%24r%5Bcatid%5D&num=20&siteid=%24siteid&order=listorder+ASC&return=data2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data2 = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                        <?php $n=1;if(is_array($data2)) foreach($data2 AS $v) { ?><!--子栏目循环开始-->
                        <dd><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></dd>
                        <?php $n++;}unset($n); ?><!--子栏目循环结束-->
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </dl>
                    <?php } ?>
                </li>
                <?php $n++;}unset($n); ?><!--  一级栏目循环结束-->
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- 
<div id="header">
<div class="header_t">
	<div>
		<a href="./">
			<img src="./statics/images/sl/logo-min.png" width="170">
		</a>
	</div>
	<div class="header_m">
		<div class="hottel">
			<span><strong>服务热线 025-59927781</strong></span>
		</div>
	</div>
	<div class="title">
		<map>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
				<ul>
				<?php if($catid=="") { ?>
				<li><a href="<?php echo siteurl($siteid);?>" style="background:#333; color:#fff;"><strong>三略建筑</strong></a></li>
				<?php } else { ?>
				<li><a href="<?php echo siteurl($siteid);?>"><strong>三略建筑</strong></a></li>
				<?php } ?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<?php if($catid==$r[catid]) { ?>
					<li><a href="<?php echo $r['url'];?>" style="background:#333; color:#fff;"><strong><?php echo $r['catname'];?></strong></a></li>
				<?php } else { ?>
					<li><a href="<?php echo $r['url'];?>"><strong><?php echo $r['catname'];?></strong></a></li>
				
				<?php } ?>
				<?php $n++;}unset($n); ?>
				</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</map>
  </div>
</div>
</div>
 -->
