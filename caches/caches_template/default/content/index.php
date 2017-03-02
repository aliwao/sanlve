<?php defined('IN_SANLVE') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>extends.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
</head>
<body>
<!--main-->
<div id="header">
	<div class="main-search">
		<img class="logo" src="./statics/images/sl/logo.png" />
		<div class="search searchdiv">
			<div class="bd-text-center-100">
				<form action="./index.php" method="get" target="_blank">
					<input type="hidden" name="m" value="search" />
					<input type="hidden" name="c" value="index" />
					<input type="hidden" name="a" value="init" />
					<input type="hidden" name="typeid" value="" id="typeid" />
					<input type="hidden" name="siteid" value="1" id="siteid" />
					<input type="text" class="text" placeholder="定制您的需要..." name="q" id="q" /><input type="submit" value="搜 索" class="button sl-search-btn" />
				</form>
			</div>
			<div style="clear:both;"></div>
			<div class="index-hotnumber">
				<p>服务热线：&nbsp;&nbsp; 025-59927781</p>
			</div>
		</div>
	</div>
</div>
<?php $param = pc_base::load_sys_class('param');
$userid = param::get_cookie('_userid');
?>
<div id="slidetoolbarContainer" class="slidetoolbarContainer">
	<div class="slidetoolbar">
		<div class="floatleft_l"></div>
		<dl class="applist">
			<dt class="sppitemwrap">
				<a class="appitem" href="./">首页</a>
			</dt>
			<?php $j=1;?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<dd class="sppitemwrap">
						<a class="appitem" href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
						<dl>
							<dd><a href="#">测试一<?php echo $j;?></a></li>
							<dd><a href="#">测试二<?php echo $j;?></a></li>
						</dl>
					</dd>
					<?php $j++; ?>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<dt class="sppitemwrap nav-bl">
				<a class="appitem" id="hideLeftMenu" href="javascript:void(0);" title="向左收起" onclick="hideIndexLeftMenu();">向左收起</a>
			</dt>
		</dl>
	</div>
	<a href="javascript:void(0);" id="showLeftMenu" class="slidetoolbar-closebtn slideclosebtn-open" title="展开" onclick="showIndexLeftMenu();"></a>
</div>
<div class="rsidebar_list">
	<ul class="list_right">
		<li class="first-child"><span>联系客服</span>
			<div class="kefulay" id="kefulay">
				<p class="zx-btn">
					<a href="http://wpa.b.qq.com" target="_blank">QQ在线咨询</a>
				</p>
				<p class="line"></p>
				<p class="hotline"><strong>咨询热线:</strong></p>
				<p class="hotlinenumber">025-59927781</p>
			</div>
		</li>
		<li><span>家装预约</span></li>
		<li><span>一键报价</span></li>
		<li id="back-to-top" class="backtop last-child" style="display:none;"></li>
	</ul>
</div>

<script type="text/javascript">
function support(id, commentid) {
	$.getJSON('<?php echo APP_PATH;?>index_comment_index_support.shtml?format=jsonp&commentid='+commentid+'&id='+id+'&callback=?', function(data){
		if(data.status == 1) {
			$('#support_'+id).html(parseInt($('#support_'+id).html())+1);
		} else {
			alert(data.msg);
		}
	});
}

function reply(id,commentid) {
	var str = '<form action="<?php echo APP_PATH;?>index_comment_index_post.shtml?commentid='+commentid+'&id='+id+'" method="post"><textarea rows="10" style="width:100%" name="content"></textarea><?php if($setting[code]) { ?><label>验证码：<input type="text" name="code"  class="input-text" onfocus="var offset = $(this).offset();$(\'#yzm\').css({\'left\': +offset.left-8, \'top\': +offset.top-$(\'#yzm\').height()});$(\'#yzm\').show();$(\'#yzmText\').data(\'hide\', 1)" onblur=\'$("#yzmText").data("hide", 0);setTimeout("hide_code()", 3000)\' /></label><?php } ?>  <div class="btn"><input type="submit" value="发表评论" /></div>&nbsp;&nbsp;&nbsp;&nbsp;<?php if($userid) { ?><?php echo get_nickname();?> <a href="<?php echo APP_PATH;?>index_member_index_logout.shtml?forward=<?php echo urlencode(get_url());?>">退出</a><?php } else { ?><a href="<?php echo APP_PATH;?>index_member_index_login.shtml?forward=<?php echo urlencode(get_url());?>" class="blue">登录</a> | <a href="<?php echo APP_PATH;?>index.php_member_index_register.shtml" class="blue">注册</a>  <?php if(!$setting[guest]) { ?><span style="color:red">需要登陆才可发布评论</span><?php } ?><?php } ?></form>';
	$('#reply_'+id).html(str).toggle();
}

function hide_code() {
	if ($('#yzmText').data('hide')==0) {
		$('#yzm').hide();
	}
}

function hideIndexLeftMenu() {
	$("#slidetoolbarContainer > .slidetoolbar").hide();
	$("#showLeftMenu").show();
}

function showIndexLeftMenu() {
	$("#showLeftMenu").hide();
	$("#slidetoolbarContainer > .slidetoolbar").show();
}

$(function(){  
    //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失  
    $(function () {  
        $(window).scroll(function(){  
            if ($(window).scrollTop()>100){  
                $("#back-to-top").fadeIn(1500);  
            }
            else  
            {
                $("#back-to-top").fadeOut(1500);  
            }
        });  

        //当点击跳转链接后，回到页面顶部位置  
        $("#back-to-top").click(function(){
            if ($('html').scrollTop()) {  
                $('html').animate({ scrollTop: 0 }, 1000);
                return false;  
            }  
            $('body').animate({ scrollTop: 0 }, 1000);
            return false;
        });
    });
});  

   $(document).ready(function () {
       var menu_num = $('dl.applist').children('dd').length + 1;
       $(".floatleft_l").height(menu_num*35);

       var btntop = $("#hideLeftMenu").offset().top;
       $("#showLeftMenu").css("top", btntop);
   });
   
</script>

<div id="footer" style="position:fixed;bottom:0px;z-index:99;">
  <div id="footer_i">
    <div class="footer_l">
    </div>
    <div class="footer_m">
      <p>南京三略建筑科技有限公司</p>
      <p></p>
      <p>Nanjing Sanlue Building Technology Co.,Ltd | CopyRight 2016-2017 All Rights Reserved.</p>
      <p>苏ICP备17000359号-1</p>
    </div>
    <div class="footer_r">
    </div>
  </div>
</div>
