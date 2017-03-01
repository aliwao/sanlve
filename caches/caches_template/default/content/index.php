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
	<div style="text-align:center;margin-top:80px;">
		<img src="./statics/images/sl/logo.png" style="width:250px;height:120px;" />
		<div class="search" style="width:100%;text-align:center;">
			<div class="bd" style="width:100%;text-align:center;">
				<form action="./index.php" method="get" target="_blank">
					<input type="hidden" name="m" value="search" />
					<input type="hidden" name="c" value="index" />
					<input type="hidden" name="a" value="init" />
					<input type="hidden" name="typeid" value="" id="typeid" />
					<input type="hidden" name="siteid" value="1" id="siteid" />
					<input type="text" class="text" placeholder="定制您的需要..." name="q" id="q" style="width:480px;height:28px;" /><input type="submit" value="搜 索" class="button" style="cursor: pointer;margin-left:0px;height:36px;width:5em;background-color: #38f;font-size: 16px;color: white;box-shadow: none;font-weight: normal;" />
				</form>
			</div>
			<div style="height: 85px;"><span style="float: none;margin: 0 auto;"><strong style="font-size:22px;">服务热线： 025-59927781</strong></span></div>
		</div>
	</div>
</div>
<div id="slidetoolbarContainer" class="slidetoolbarContainer">
	<div class="slidetoolbar">
		<div class="floatleft_l"></div>
		<dl class="applist">
			<dt class="sppitemwrap">
				<a class="appitem" href="./">首页</a>
			</dt>
			<dd class="sppitemwrap">
				<a class="appitem" href="./">精装定制</a>
				<dl>
					<dd><a href="#">最新更新11</a></li>
					<dd><a href="#">下载排行11</a></li>
				</dl>
			</dd>
			<dd class="sppitemwrap">
				<a class="appitem" href="./">找三略</a>
				<dl>
					<dd><a href="#">最新更新22</a></li>
					<dd><a href="#">下载排行22</a></li>
				</dl>
			</dd>
			<dt class="sppitemwrap nav-bl">
				<a class="appitem" href="./" title="向左收起">向左收起</a>
			</dt>
		</dl>
	</div>
</div>
<?php $param = pc_base::load_sys_class('param');
$userid = param::get_cookie('_userid');
?>
<div style="position:fixed;top:90px;left:0px; z-index:999;" id="yyf">
  <div id="floatleft">
    <div>
      <div class="floatleft_l"> </div>
      <dl>
        <dt><a href="./">精装定制找三略</a></dt>
        <?php $j=1;?>
    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	        	<dd class="jz_banner_a<?php echo $j;?>"><a href="<?php echo $r['url'];?>">看<?php echo $r['catname'];?><br></dd>
	    		<?php $j++; ?>
			<?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <dt><a href="javascript:;;" id="fh">返回顶部</a></dt>
      </dl>
    </div>
    <a href="javascript:;;" class="guanbi" id="fc">关闭</a> </div>
</div>

<?php $dis_announce=0;?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"announce\" data=\"op=announce&tag_md5=b79fc9110a09c6680d3768c9c06f8518&action=lists&siteid=%24siteid&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$announce_tag = pc_base::load_app_class("announce_tag", "announce");if (method_exists($announce_tag, 'lists')) {$data = $announce_tag->lists(array('siteid'=>$siteid,'limit'=>'5',));}?>
   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
   		<?php $dis_announce=1;?>
   <?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

<?php if($dis_announce==1 ) { ?>
<div style="position:fixed;top:90px;right:0px; z-index:999;" id="ggf">
	<div style="display:block; width:200px">
	     <div style="display:block;">
	     <dl>
	     <dt><span style="display:block; height:24px; font-size:16px; align:center; padding-top:5px;background:#333333;color:#ffffff;text-align:center;">公司公告</span></dt>
	        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"announce\" data=\"op=announce&tag_md5=b79fc9110a09c6680d3768c9c06f8518&action=lists&siteid=%24siteid&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$announce_tag = pc_base::load_app_class("announce_tag", "announce");if (method_exists($announce_tag, 'lists')) {$data = $announce_tag->lists(array('siteid'=>$siteid,'limit'=>'5',));}?>
	           <?php $k=1;?>
	           <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	             <dt><a href="<?php echo APP_PATH;?>index_announce_index_show.shtml?aid=<?php echo $r['aid'];?>"><span class="jz_banner_a<?php echo $k;?>" style="display:block; height:24px; font-size:16px; align:center; padding-top:5px;color:#ffffff;"> <?php echo $r['title'];?></span></a></dt>
	           <?php $k++; ?>
	           <?php $n++;}unset($n); ?>
	        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	     </dl>
	    </div>
	</div>
	
    <a href="javascript:;;" class="guanbi" id="ggc" style="text-align:center;">关闭</a> </div>
</div>
<?php } ?>
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

   $(document).ready(function () {
       var menu_num = $('dl.applist').children('dd').length + 1;
       $(".floatleft_l").height(menu_num*35);
   });
   
</script>

<div id="footer" style="position:absolute;bottom:0px;z-index:999;">
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
<script type="text/javascript">
if ($(window).width() > 980) {$('#yyf').show();}
$('#fc').bind("click",function(){ $('#yyf').hide();});
$("#fh").bind("click",function(){$('body,html').animate({scrollTop:0},1000); return false; })

if ($(window).width() > 980) {$('#ggf').show();}
$('#ggc').bind("click",function(){ $('#ggf').hide();});

</script>