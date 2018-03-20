<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="stylesheet" type="text/css" href="themes/swtshop_buy/css/swtshop_common.css" />
<link type="text/css" rel="stylesheet" href="themes/swtshop_buy/css/passport.css" />
<script type="text/javascript" src="themes/swtshop_buy/js/jquery_email.js"></script>
<script type="text/javascript" src="themes/swtshop_buy/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="themes/swtshop_buy/js/validate/jquery.validate.js"></script>
<script type="text/javascript" src="themes/swtshop_buy/js/validate/messages_zh.js"></script>
<script type="text/javascript" src="themes/swtshop_buy/js/placeholder.js" ></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?> 
 
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,register.js')); ?>
</head><body onclick="ecshop68_onclick();">
<script>
function erweima1(obj, sType) { var oDiv = document.getElementById(obj); if (sType == 'show') {oDiv.style.display = 'block';} if (sType == 'hide') {oDiv.style.display = 'none';} }
</script>
<div class="logo-r">
  <div class="logo-info-r"> <a href="./" class="logo"></a> <span class="findpw">欢迎注册</span></div>
</div>
<div class="blank"></div>
<div class="blank"></div>
<div class="w990"> 
  <?php if ($this->_var['shop_reg_closed'] == 1): ?>
  <div class="stop-regist">
  	<div class="notice-noresult clearfix">
        <div class="noresult-con">
            <i class="noresult-icon"></i>
            <p class="noresult-text"><?php echo $this->_var['lang']['shop_register_closed']; ?></p>
            <a class="main-btn" href="javascript:window.history.back(-1);">点击返回上一步</a>
        </div>
    </div>
  </div>
  <?php else: ?> 
  <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
  <div id="regist">
    <div class="register-con">
      <!-- <div class="box-pic-reg"></div> -->
      <div class="uc-box-reg">
        <form action="register.php" method="post" id="formRegister" name="formRegister">
          <input type="hidden" id="register_type" name="register_type" value="${register_type}" />
          <ul class="register-tab">
            <li id="li-register-type-mobile" class="tab-item fl" register_type="mobile">手机注册<span class="bg-ff"></span></li>
            <li id="li-register-type-email" class="tab-item cur fl" register_type="email">邮箱注册<span class="bg-ff"></span></li>
            <li class="have-account fr">我已注册！<a href="user.php?act=login">马上登录></a></li>
          </ul>
        </form>
        <form action="register.php" method="post" id="formUser" name="formUser" >
          <div class="form">
            <input type="hidden" name="register_type" value="<?php echo $this->_var['register_type']; ?>" />
            <?php if ($this->_var['register_type'] == 'email'): ?>
            <div class="item">
              <label class="linel"><nobr style="color:#C70034;">*&nbsp;</nobr><span class="dt">邮箱账号：</span></label><input name="email" type="text" id="email" placeholder="<?php echo $this->_var['lang']['label_email']; ?>" onblur="checkEmail(this)" class="text email" />
              <i class="i-email"></i>
              <div> <span class="label" id="email_notice"></span> </div>
            </div>
            <?php else: ?>

            <div class="item">
              <label class="linel"><nobr style="color:#C70034;">*&nbsp;</nobr><span class="dt">手机号码：</span></label><input name="mobile_phone" type="text" id="mobile_phone" placeholder="<?php echo $this->_var['lang']['other_mobile_phone']; ?>" onblur="checkMobilePhone(this)"  class="text" />
              <i class="i-phone"></i>
              <div> <span class="label" id="mobile_phone_notice"></span> </div>
            </div>
            <?php endif; ?>
            <div id="o-password">
              <div class="item">
                <label class="linel"><nobr style="color:#C70034;">*&nbsp;</nobr><span class="dt">设置密码：</span></label><input name="password" type="password" id="password" placeholder="<?php echo $this->_var['lang']['label_password']; ?>" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" class="text" />
                <i class="i-pass"></i>
                <div id="pwd_notice" style="display: none;"> <span class="label" id="password_notice"></span> </div>
                <div id="pwd_intensity">
                  <br/>
                  <br/>
                  <br/>
                   <span class="label">
                    <!-- <table width="295" height="25px" border="0" cellspacing="0" cellpadding="0" style="padding: 0px 0px 10px;">
                      <tr align="center">
                        <td width="33%" id="pwd_lower"><?php echo $this->_var['lang']['pwd_lower']; ?></td>
                        <td width="33%" id="pwd_middle"><?php echo $this->_var['lang']['pwd_middle']; ?></td>
                        <td width="33%" id="pwd_high"><?php echo $this->_var['lang']['pwd_high']; ?></td>
                      </tr>
                    </table> -->
                    <p class="safeline"><span>安全程度：</span><span class="sz">低</span><span class="sz">中</span><span class="sz">高</span></p>
                    </span> 
                </div>
              </div>
              <div class="item">
                <label class="linel"><nobr style="color:#C70034;">*&nbsp;</nobr><span class="dt">确认密码：</span></label><input type="password" id="conform_password" name="confirm_password" class="text" placeholder="<?php echo $this->_var['lang']['label_confirm_password']; ?>" onblur="check_conform_password(this.value);" autocomplete="off" />
                <i class="i-pass"></i>
                <div> <span class="label" id="conform_password_notice"></span> </div>
              </div>

              <div class="item">
                <label class="linel"><nobr style="color:#C70034;">*&nbsp;</nobr><span class="dt">推荐人账号
                :</span></label><input type="text" id="introduce" onblur="checkUsers(this)" name="introduces" class="text" placeholder="(选填)推荐人账号/Email/手机号" value="<?php echo $this->_var['introusername']; ?>" /><input type="hidden" id="hid" name="introduce" value="">
                <i class="i-phone"></i>
                <div> <span class="label" id="conform_introduce_notice"></span> </div>
              </div>
            </div>
            
            <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?> 
            <?php if ($this->_var['field']['id'] == 6): ?>
            <div class="item">
              <select name='sel_question' style="width: 247px; height: 36px; line-height: 36px;">
                <option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
                <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'])); ?>		
              </select>
            </div>
            <div class="item" style="margin-top: 30px; *margin-top: 15px;">
              <input name="passwd_answer" type="text" class="text" placeholder="<?php echo $this->_var['lang']['passwd_answer']; ?>" />
              <i class="i-pass"></i>
              <div> <span class="label" <?php if ($this->_var['field']['is_need']): ?>id="passwd_quesetion"<?php endif; ?>></span> </div>
            </div>
            <?php elseif ($this->_var['field']['reg_field_name'] != '验证手机'): ?>
            <div class="item">
              <input name="extend_field<?php echo $this->_var['field']['id']; ?>" id="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" class="text" placeholder="<?php echo $this->_var['field']['reg_field_name']; ?>" />
              <i class="<?php if ($this->_var['field']['id'] == 1): ?>i-msn<?php elseif ($this->_var['field']['id'] == 2): ?>i-qq<?php elseif ($this->_var['field']['id'] == 3): ?>i-bgphone<?php elseif ($this->_var['field']['id'] == 4): ?>i-jtphone<?php elseif ($this->_var['field']['id'] == 5): ?>i-phone<?php else: ?>i-phone<?php endif; ?>"></i>
              <div> <span class="label" <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>></span> </div>
            </div>
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            
            <?php if ($this->_var['enabled_captcha']): ?>
            <div class="item">
              <label class="linel"><nobr style="color:#C70034;">*&nbsp;</nobr><span class="dt">验证码：</span></label><input type="text" id="captcha" size="8" name="captcha" class="text text-te" placeholder="<?php echo $this->_var['lang']['comment_captcha']; ?>" style="ime-mode: disabled;margin-left: 12px;" autocomplete="off" MaxLength="6" />
              <label class="img" style="margin-left: 5px"> <img id="captcha_img" src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle; cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /> </label>
              <i class="i-captcha"></i>
              <div > <span class="label" id="captcha_notice"></span> </div>
            </div>
            <?php endif; ?> 
            
            <?php if ($this->_var['register_type'] == 'email'): ?> 
            
            <div class="item" >
              <label class="linel"><nobr style="color:#C70034;">*&nbsp;</nobr><span class="dt">邮箱验证码：</span></label><input id="email_code" class="text text-te fl" type="text" placeholder="邮箱验证码" name="email_code" maxlength="6">
              <i class="i-email" style="left:86px;"></i>
              <input id="zemail" class="zemail" type="button" value="获取邮箱验证码 ">
              <div> <span id="extend_field5i" class="label"></span> </div>
            </div>
            <?php elseif ($this->_var['register_type'] == 'mobile'): ?> 
            
            <div class="item">
              <label class="linel"><nobr style="color:#C70034;">*&nbsp;</nobr><span class="dt">手机验证码：</span></label><input id="mobile_code" class="text text-te fl" type="text" placeholder="手机验证码" name="mobile_code">
              <i class="i-phone" style="left:86px;"></i>
              <input id="zphone" class="zphone" type="button" value="获取手机验证码 " >
              <div> <span id="extend_field5i" class="label"></span> </div>
            </div>
            <?php endif; ?>
            <div class="safety">
            	<input name="agreement" type="checkbox" value="1" checked="checked" class="checkbox" />
            	<label for="remember" class="mar-b"><?php echo $this->_var['lang']['agreement']; ?></label>
          	</div>
            <div class="item">
              <input name="act" type="hidden" value="register">
              <input type="hidden" name="back_act" value="user.php" />
              <input type="submit" id="btn_submit" name="Submit" class="btn-img btn-regist" value="同意协议并注册" />
            </div>
          </div>
        </form>
        <!--[if !ie]>form end<![endif]--> 
         
      </div>
    </div>
  </div>
  <?php endif; ?> 
  
  <div class="blank"></div>
</div>
<div class="site-footer">
    <div class="footer-related">
  		<?php echo $this->fetch('library/page_footer.lbi'); ?>
  </div>
</div>
<script type="text/javascript">
	var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
	<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
	
	$().ready(function(){
		//设置高度
		$(".register-con").height($(".uc-box-reg").height());
		
		$("#formUser").submit(function(){
			return register('<?php echo $this->_var['register_type']; ?>');
		});
				
		$("#zemail").click(function(){
			$("#email").blur();
			$("#password").blur();
			$("#conform_password").blur();
			if ($("#captcha").size() > 0 && $("#captcha").val().length == 0) {
				$("#captcha_notice").html(msg_captcha_blank);
				$("#captcha_notice").css({color: '#E31939'});
				return;
			}
			sendEmailCode($("#email"), $("#email_code"), $(this));
		});
		
		$("#zphone").click(function(){
			$("#mobile_phone").blur();
			$("#password").blur();
			$("#conform_password").blur();
			if ($("#captcha").size() > 0 && $("#captcha").val().length == 0) {
				$("#captcha_notice").html(msg_captcha_blank);
				$("#captcha_notice").css({color: '#E31939'});
				return;
			}
			sendMobileCode($("#mobile_phone"), $("#mobile_code"), $(this));
		});
		
		
		$(".register-tab").find(".cur").removeClass("cur");
		$("#li-register-type-<?php echo $this->_var['register_type']; ?>").addClass("cur");
		$(".tab-item").click(function(){
			var register_type = $(this).attr("register_type");
			$("#register_type").val(register_type);
			$("#formRegister").submit();
		});
	});
</script> 
<script type="text/javascript">
  function checkUserExist(obj){
  var register_user = obj;
  //alert(register_user);
  /*$.ajax({
    url:'register.php?act=check_users_exist',
    type:'POST', //GET
    async:true,    //或false,是否异步
    data:{
        register_user:register_user
    },
    timeout:5000,    //超时时间
    dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
    success:function(data){
         console.log('成功')
    },
    error:function(xhr,textStatus){
        console.log('错误')
        console.log(xhr)
        console.log(textStatus)
    },
    complete:function(){
        console.log('结束')
    }
})
*/





}
</script>
</body>
</html>