<script type="text/javascript" src="themes/swtshop_buy/js/arrive_notice.js" ></script>
<div class="tell-me-form" style="display:none;" id="tell-me-table">
	<div class="pop-header"><span>到货通知</span><a href="javascript:closeDiv1()" title="关闭" class="tell-me-close"></a></div>
    <div class="tell-me-content">
    	<table cellpadding="0" cellspacing="0" width="100%" border="0">
              <tr>
                <td colspan="2" align="left">
                    <div class="blank10"></div>
                    <div class="notice-note">
                        <p class="main-color" id="rgoods_name"></p>
                        当商品进行补货时，我们将以短信、邮件的形式通知您，最多发送一次，不会对您造成干扰。
                    </div>
                </td>
              </tr>
              <tr>
                <td width="30%" align="right"><font class="main-color">*</font>数量：</td>
                <td align="left">
                    <input type="text" value="1" id="book-number"class="inputBg" />
                    <div class="tell-me-notice">
                        <i class="notice-icon"></i><span class="notice-text num-notice"></span>
                    </div>
                </td>
              </tr>
              <tr>
                <td align="right"><font class="main-color">*</font>手机号码：</td>
                <td align="left">
                    <input type="text" value="" id="phone-num"class="inputBg" />
                    <div class="tell-me-notice">
                        <i class="notice-icon"></i><span class="notice-text phone-notice"></span>
                    </div>
                </td>
              </tr>
              <tr>
                <td align="right"><font class="main-color">*</font>电子邮箱：</td>
                <td align="left">
                    <input type="text" value="" id="arrival-email"class="inputBg" />
                    <div class="tell-me-notice">
                        <i class="notice-icon"></i><span class="notice-text email-notice"></span>
                    </div>
                </td>
              </tr>
              <tr>
                <td colspan="2" align="center" style="padding:20px 0 30px;">
                    <input type="button" value="马上提交" onclick="tell_me1(<?php echo $this->_var['goods']['goods_id']; ?>)" class="sure-btn"/>
                </td>
              </tr>
            </table>
    </div>
</div>

