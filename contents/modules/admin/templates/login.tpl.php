<?php defined('IN_ADMIN') or exit('No permission resources.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php echo L('contents_logon')?></title>
<link href="./statics/css/main_login.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<--
	 div{overflow:hidden; *display:inline-block;}div{*display:block;}
	.login_box{background:url(<?php echo IMG_PATH?>sl/login_bg.jpg) no-repeat; width:450px; height:210px; overflow:hidden; position:absolute; left:50%; top:50%; margin-left:-301px; margin-top:-208px;}
	.login_iptbox{bottom:90px;_bottom:72px;color:#FFFFFF;font-size:12px;height:30px;position:absolute;width:450px; overflow:visible;}
	.login_iptbox .ipt{height:24px; width:110px; margin-right:22px; color:#fff; background:url(<?php echo IMG_PATH?>admin_img/ipt_bg.jpg) repeat-x; *line-height:24px; border:none; color:#000; overflow:hidden;}
	.login_iptbox label{ *position:relative; *top:-6px;margin-left:10px}
	.login_tj_btn{ background:url(<?php echo IMG_PATH?>admin_img/login_dl_btn.jpg) no-repeat 0px 0px; width:52px; height:24px; border:none; cursor:pointer; padding:0px; float:right;}
-->
</style>
<script type="text/javascript">
(function(){
	if(!window.J){ window.J = {};}
	
	/**
	 * 得到obj
	 */
	function $(){
		var elements = [];
		for(var i=0; i<arguments.length; i++){
			var element = arguments[i];
			if(typeof element == 'string'){element = document.getElementById(element);}
			if(arguments.length == 1){
				return element;
			}
			elements.push(element);
		}
		return elements;		
	}
	window.J.$ = $;
	
	/**
	 * 失去焦点
	 * @param {Object} obj
	 */
	function onBlurText(obj){
		$(obj).onfocus = function(){
			if(this.value==this.defaultValue)this.value='';
		}
		$(obj).onblur = function(){
			if(this.value.length<1)this.value=this.defaultValue;
		}
	}
	window.J.onBlurText = onBlurText;
	
	function objNull(obj){
		if ($(obj).value.length < 1) {
			alert('aa');
			return false;
		}
	}
	window.J.objNull = objNull;
	
	
})();

	window.onload = function(){
		J.onBlurText('uname');
		J.onBlurText('pwd');
	}
</script>
<script language="JavaScript">
<!--
	if(top!=self)
	if(self!=top) top.location=self.location;
//-->
</script>
</head>

<body onload="javascript:document.myform.username.focus();">
<!--
<div id="login_bg" class="login_box">
	<div class="login_iptbox">
   	 <form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform">
   	 	<label><?php echo L('username')?>：</label>
   	 	<input name="username" type="text" class="ipt" value="" />
   	 	<label><?php echo L('password')?>：</label>
   	 	<input name="password" type="password" class="ipt" value="" /><label>
   	 	<input name="dosubmit" value="" type="submit" class="login_tj_btn" />
     </form>
    </div>
</div>
-->
<div id="main">
  <div id="wrapper">
      <form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform">
      <div id="sys_name">南京三略建筑科技有限公司<br/>企业网站内容管理系统</div>
      <ul id="cont">
        <li>
          <label class="lb" for="uname">用户名</label>
          <input name="username" id="uname" type="text" class="ip" value="请输入用户名" maxlength="18" />
        </li>
        <li>
          <label class="lb" for="pwd">密码</label>
          <input name="password" id="pwd" type="password" class="ip" value="haoqing" maxlength="10" />
        </li>
        <li><span>
          <input  type="image" src="./statics/images/sl/ente.png" title="登录系统"/>
          </span></li>
      </ul>
      <p id="copy">南京三略建筑科技有限公司<br/>
      Nanjing Sanlue Building Technology Co.,Ltd | CopyRight 2016-2017 All Rights Reserved.</p>
      <p>苏ICP备17000359号-1</p>
    </form>
  </div>
</div>
</body>
</html>