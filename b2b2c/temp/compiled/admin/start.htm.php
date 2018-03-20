<!-- $Id: start.htm 17216 2011-01-19 06:03:12Z liubo $ -->
<?php echo $this->fetch('pageheader_bd.htm'); ?>
<!-- directory install start -->
<ul id="lilist" style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
  <?php $_from = $this->_var['warning_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'warning');if (count($_from)):
    foreach ($_from AS $this->_var['warning']):
?>
  <li class="Start315"><?php echo $this->_var['warning']; ?></li>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
<ul style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
 <!-- <script type="text/javascript" src="http://bbs.ecshop.com/notice.php?v=1&n=8&f=ul"></script>-->
</ul>
<!-- directory install end -->
<!-- start personal message -->
<?php if ($this->_var['admin_msg']): ?>
<div class="list-div" style="border: 1px solid #CC0000">
  <table cellspacing='1' cellpadding='3'>
    <tr>
      <th><?php echo $this->_var['lang']['pm_title']; ?></th>
      <th><?php echo $this->_var['lang']['pm_username']; ?></th>
      <th><?php echo $this->_var['lang']['pm_time']; ?></th>
    </tr>
    <?php $_from = $this->_var['admin_msg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'msg');if (count($_from)):
    foreach ($_from AS $this->_var['msg']):
?>
      <tr align="center">
        <td align="left"><a href="message.php?act=view&id=<?php echo $this->_var['msg']['message_id']; ?>"><?php echo sub_str($this->_var['msg']['title'],60); ?></a></td>
        <td><?php echo $this->_var['msg']['user_name']; ?></td>
        <td><?php echo $this->_var['msg']['send_date']; ?></td>
      </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>
  </div>
<br />
<?php endif; ?>
<!-- end personal message -->
<!-- star 升级 -->

<div class="list-div">
	<div class="important">
    	<ul class="import">
        	<li class="import_1">
            	<div class="module">
            		<i></i>
                	<div class="detail">
                		<strong><?php if ($this->_var['today']['formatted_money']): ?><?php echo $this->_var['today']['formatted_money']; ?><?php else: ?>0<?php endif; ?></strong>
                		<span>今日销售总额</span>
                	</div>
                </div>
            </li>
            <li class="import_2">
            	<div class="module">
            		<i></i>
                	<div class="detail">
                		<strong><?php echo $this->_var['today']['order']; ?></strong>
                		<span>今日订单数</span>
                	</div>
                </div>
            </li>
            <li class="import_3">
            	<div class="module">
            		<i></i>
                	<div class="detail">
                		<strong><?php echo $this->_var['today']['user']; ?></strong>
                		<span>今日注册会员</span>
                	</div>
                </div>
            </li>
            <li class="import_4">
            	<div class="module">
            		<i></i>
                	<div class="detail">
                		<strong><?php echo $this->_var['today']['shop']; ?></strong>
                		<span>今日入驻店铺数</span>
                	</div>
                </div>
            </li>
            <li class="import_5">
            	<div class="module">
            		<i></i>
                	<div class="detail">
                		<strong><a href="supplier.php?act=list" title="待审核店铺" style="color:#FA841E; text-decoration:none"><?php echo $this->_var['task']['shop']; ?></a>&nbsp;/&nbsp;<?php echo $this->_var['today']['shop_total']; ?></strong>
                		<span>待审核/店铺总数</span>
                	</div>
                </div>
            </li>
        </ul>
    </div>
</div>
<br />


<style>
.mymenu{padding-bottom:30px; margin-top:-10px;  overflow:hidden;}
.menubox{background-color:#fff; margin-top:10px;    border: 1px solid #B0E0CB; text-align:center;}
.menubox span.pic{display: block; margin:25px auto 10px auto; width:70px; height:70px; position:relative; z-index:0;}
.menubox span.pic em{position:absolute; right:-15px; top:-10px; background:#fff; padding:5px 5px;border-radius:50%; display:block; overflow:hidden;}
.menubox span.pic em i{background:#fff; overflow:hidden; border:solid 2px #1AA667;border-radius:50%; color:#1AA667; padding:0px 5px; font-weight:900; font-size:14px; font-style:normal;}

.menubox span.pic1{background:url(pic/d1.png) center no-repeat;}
.menubox span.pic2{background:url(pic/d2.png) center no-repeat;}
.menubox span.pic3{background:url(pic/d3.png) center no-repeat;}
.menubox span.pic4{background:url(pic/d4.png) center no-repeat;}
.menubox span.pic5{background:url(pic/d5.png) center no-repeat;}
.menubox span.pic6{background:url(pic/d6.png) center no-repeat;}
.menubox span.pic7{background:url(pic/d7.png) center no-repeat;}
.menubox span.pic8{background:url(pic/d8.png) center no-repeat;}
.menubox span.pic9{background:url(pic/d9.png) center no-repeat;}
.menubox strong{font-size:32px; font-weight:400; color:#1AA667;}
.menubox p{color:#B0E0CB; font-size:14px; height:45px; line-height:45px; margin:0; padding:0 10px;}
.menubox ul{width:100%; overflow:hidden; height:90px; line-height:45px; padding:0; margin:0;}
.menubox ul a{float:left; display:block;border-top: 1px solid #B0E0CB;border-left: 1px solid #B0E0CB; margin-left:-1px; font-size:16px;color:#1AA667; font-size:13px; position:relative; z-index:0;}
.menubox ul a:hover{background:#1AA667; color:#FFF; text-decoration:none;}
.menubox ul a.a50{width:50%;}
.menubox ul a.a20{width:20%;}
.menubox ul a.a25{width:25%;}
.menubox ul a span{position:absolute; top:0;right:0; display:block; height:15px; line-height:15px; padding:0 5px; padding-left:10px; color:#fff; font-size:10px; background-color:#f60;border-radius:0 0 0 15px;}
.menubox:hover{box-shadow: 0 0 15px #B0E0CB;border-color:#1AA667;}
</style>

 
<div class="mymenu">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div class="menubox"><span class="pic pic1"><em><i><?php echo $this->_var['task']['total']; ?></i></em></span><strong>待处理</strong><p>新增会员/会员管理/预存款提现</p>
<ul>
<a href="supplier_rebate.php?act=list&is_pay_ok=0" class="a25"><span><?php echo $this->_var['task']['commission']; ?></span>待处理佣金</a>
<a href="user_account.php?act=list&process_type=0&is_paid=0" class="a25"><?php echo $this->_var['task']['deposit']; ?>会员充值</a>
<a href="user_account.php?act=list&process_type=1&is_paid=0" class="a25"><span><?php echo $this->_var['task']['withdraw']; ?></span>会员提现</a>
<a href="user_msg.php?act=list_all&is_replied=unreplied" class="a25"><span><?php echo $this->_var['task']['message']; ?></span>会员留言</a>
<a href="goods.php?act=list&supp=1&supplier_status=0" class="a25"><span><?php echo $this->_var['task']['goods']; ?></span>待审核商品</a>
<a href="comment_manage.php?act=list&is_replied=unreplied" class="a25"><span><?php echo $this->_var['task']['comment']; ?></span>商品评论</a>
<a href="shaidan.php?act=list" class="a25"><span><?php if ($this->_var['task']['shared']): ?><?php echo $this->_var['task']['shared']; ?><?php else: ?>0<?php endif; ?></span>用户晒单</a>
<a href="goods_tags.php?act=list" class="a25"><span><?php if ($this->_var['task']['tag']): ?><?php echo $this->_var['task']['tag']; ?><?php else: ?>0<?php endif; ?></span>标签审核</a></ul>
	</div></td>
	<td width="20"></td>
    <td><div class="menubox"><span class="pic pic3"><em><i><?php if ($this->_var['goods']['total']): ?><?php echo $this->_var['goods']['total']; ?><?php else: ?>0<?php endif; ?></i></em></span><strong>商品</strong><p>新增商品/品牌管理/商品类型查</p>
	<ul><a href="goods.php?act=list" class="a25"><span><?php echo $this->_var['goods']['self']; ?></span>自营商品</a>
<a href="goods.php?act=list&supp=1" class="a25"><span><?php echo $this->_var['goods']['supplier']; ?></span>入驻商商品</a>
<a href="goods.php?act=list&stock_warning=1" class="a25"><span><?php echo $this->_var['goods']['warn']; ?></span><?php echo $this->_var['lang']['warn_goods']; ?></a>
<a href="goods.php?act=list&amp;intro_type=is_new" class="a25"><span><?php echo $this->_var['goods']['new']; ?></span><?php echo $this->_var['lang']['new_goods']; ?></a>
<a href="goods.php?act=list&amp;intro_type=is_best" class="a25"><?php echo $this->_var['goods']['best']; ?><?php echo $this->_var['lang']['recommed_goods']; ?></a>
<a href="goods.php?act=list&amp;intro_type=is_hot" class="a25"><span><?php echo $this->_var['goods']['hot']; ?></span><?php echo $this->_var['lang']['hot_goods']; ?></a>
<a href="goods.php?act=list&amp;intro_type=is_promote" class="a25"><span><?php echo $this->_var['goods']['promote']; ?></span><?php echo $this->_var['lang']['sales_count']; ?></a>
<a href="goods.php?act=list&is_on_sale=0" class="a25"><span><?php echo $this->_var['goods']['deleted']; ?></span>已下架商品</a></ul>
	</div></td>
	<td width="20"></td>
    <td><div class="menubox"><span class="pic pic2"><em><i><?php if ($this->_var['order']['total']): ?><?php echo $this->_var['order']['total']; ?><?php else: ?>0<?php endif; ?></i></em></span><strong>订单</strong><p>看查询订单/订单售后处理</p>
<ul>
<a href="order.php?act=list&composite_status=<?php echo $this->_var['status']['await_ship']; ?>" class="a25"><span><?php echo $this->_var['order']['await_ship']; ?></span><?php echo $this->_var['lang']['await_ship']; ?></a>
<a href="order.php?act=list&composite_status=<?php echo $this->_var['status']['await_pay']; ?>" class="a25"><?php echo $this->_var['order']['await_pay']; ?><?php echo $this->_var['lang']['await_pay']; ?></a>
<a href="order.php?act=list&composite_status=<?php echo $this->_var['status']['unconfirmed']; ?>" class="a25"><span><?php echo $this->_var['order']['unconfirmed']; ?></span>待确认订单</a>
<a href="order.php?act=list&composite_status=<?php echo $this->_var['status']['shipped_part']; ?>" class="a25"><span><?php echo $this->_var['order']['shipped_part']; ?></span><?php echo $this->_var['lang']['shipped_part']; ?></a>
<a href="user_account.php?act=list&process_type=1&is_paid=0" class="a25"><span><?php echo $this->_var['order']['new_repay']; ?></span><?php echo $this->_var['lang']['new_reimburse']; ?></a>
<a href="order.php?act=back_list&status_back=0" class="a25"><span><?php echo $this->_var['order']['returns']; ?></span>退货申请</a>
<a href="goods_booking.php?act=list_all" class="a25"><span><?php echo $this->_var['order']['booking_goods']; ?></span><?php echo $this->_var['lang']['new_booking']; ?></a>
<a href="order.php?act=list&composite_status=<?php echo $this->_var['status']['finished']; ?>" class="a25"><span><?php echo $this->_var['order']['finished']; ?></span><?php echo $this->_var['lang']['finished']; ?></a></ul>
	</div></td> 
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
  </tr>

  
  
   <tr>
    <td><div class="menubox"><span class="pic pic4"></span><strong>商家</strong><p>各种促销活动/专题管理</p>
	<ul><a href="supplier.php?act=list" class="a25">入驻商申请</a><a href="supplier.php?act=list&status=1" class="a25">所有入驻商</a><a href="supplier_rebate.php?act=list&is_pay_ok=0" class="a25">本期待结</a><a href="supplier_rebate.php?act=list&is_pay_ok=1" class="a25">往期待结</a>
	 <a href="supplier_street_category.php?act=list" class="a25">店铺街分类</a> 
	 <a href="supplier_street.php?act=list" class="a25">店铺街列表</a> 
	 <a href="supplier_rank.php?act=list" class="a25">入驻商等级</a> 
	 <a href="supplier_tag.php?act=list" class="a25">店铺标签</a> 
	</ul>
	</div></td>
	<td width="20"></td>
    <td><div class="menubox"><span class="pic pic5"></em></span><strong>会员</strong><p>会员管理/会员等级/</p>
	<ul> 
<a href="users.php?act=list" class="a25">会员列表</a>
<a href="users.php?act=add" class="a25">添加会员</a>
<a href="users_export.php" class="a25">会员导出</a>
<a href="user_rank.php?act=list" class="a25">会员等级</a> 
<a href="user_msg.php?act=list_all" class="a25">会员留言</a>
<a href="postman.php?act=list" class="a25">快递员</a>
<a href="user_account.php?act=list" class="a25">充值提现</a>
<a href="user_account_manage.php?act=list" class="a25">资金管理</a>
</ul> 
	</div></td>
	<td width="20"></td>
    <td><div class="menubox"><span class="pic pic6"></span><strong>设置</strong><p>商店设置/注册设置/配送与支付等</p>
	<ul> 
<a href="shop_config.php?act=list_edit" class="a25">商店设置</a>
<a href="reg_fields.php?act=list" class="a25">会员注册项</a>
<a href="payment.php?act=list" class="a25">支付方式</a>
<a href="shipping.php?act=list" class="a25">配送方式</a>
<a href="shop_config.php?act=mail_settings" class="a25">邮件服务器</a>
<a href="area_manage.php?act=list" class="a25">地区列表</a>
<a href="flashplay.php?act=list" class="a25">首页主广告</a>
<a href="navigator.php?act=list" class="a25">自定义导航</a>
</ul> 
	</div></td> 
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div class="menubox"><span class="pic pic7"></span><strong>促销</strong><p>各种促销活动/专题管理</p>
	<ul>
<a href="bonus.php?act=list" class="a25">红包类型</a>
<a href="topic.php?act=list" class="a25">专题管理</a>
<a href="auction.php?act=list" class="a25">拍卖活动</a>
<a href="favourable.php?act=list" class="a25">优惠活动</a>
<a href="package.php?act=list" class="a25">超值礼包</a>
<a href="exchange_goods.php?act=list" class="a25">积分商城商品</a>
<a href="takegoods.php?act=order_list" class="a25">提货券提货</a>
<a href="valuecard.php?act=list" class="a25">储值卡管理</a>
	
 </ul>
	</div></td>
	<td width="20"></td>
    <td><div class="menubox"><span class="pic pic8"></em></span><strong>统计</strong><p>浏览统计/客户统计/订单统计/销售统计</p>
	
<ul>
<a href="flow_stats.php?act=view" class="a25">流量分析</a>
<a href="keyword.php?act=list" class="a25">客户搜索记录</a>
<a href="guest_stats.php?act=list" class="a25">客户统计</a>
<a href="order_stats.php?act=list" class="a25">订单统计</a>
<a href="sale_general.php?act=list" class="a25">销售概况</a>
<a href="users_order.php?act=order_num" class="a25">会员排行</a>
<a href="sale_list.php?act=list" class="a25">销售明细</a>
<a href="sale_order.php?act=goods_num" class="a25">销售排行</a>
</ul>
	
	
	
	
	</div></td>
	<td width="20"></td>
    <td valign="top"><div class="menubox"><span class="pic pic9"></span><strong>其它</strong>
      <p>文章管理/广告管理/模板管理</p>
	<ul><a href="article.php?act=add" class="a25">添加文章</a><a href="article.php?act=list" class="a25">文章列表</a><a href="articlecat.php?act=list" class="a25">文章分类</a><a href="vote.php?act=list" class="a25">在线调查</a>
 <a href="ads.php?act=list" class="a25">广告列表</a></li>
<a href="ad_position.php?act=list" class="a25">广告位置</a></li>
<a href="template.php?act=list" class="a25">模板选择</a>
<a href="template.php?act=setup" class="a25">设置模板</a>
 
	
	
	</ul>
	</div></td> 
  </tr>
    
  
</table>  
</div>


 
 
<script src='js/echarts-all.js'></script>
<script>
var froms_chart = echarts.init(document.getElementById('froms_chart_div'));
    froms_chart.setOption(<?php echo $this->_var['froms_option']; ?>);
    var order_chart = echarts.init(document.getElementById('order_chart_div'));
    order_chart.setOption(<?php echo $this->_var['orders_option']; ?>);
    var sales_chart = echarts.init(document.getElementById('sales_chart_div'));
    sales_chart.setOption(<?php echo $this->_var['sales_option']; ?>);
</script>
<!-- end 升级 -->

<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js')); ?>
<script type="Text/Javascript" language="JavaScript">
<!--
onload = function()
{
  /* 检查订单 */
  startCheckOrder();
}
  Ajax.call('index.php?is_ajax=1&act=main_api','', start_api, 'GET', 'JSON');
  //Ajax.call('cloud.php?is_ajax=1&act=cloud_remind','', cloud_api, 'GET', 'JSON');
   function start_api(result)
    {
		document.getElementById("php_ver").innerHTML = result.php_ver;
		document.getElementById("mysql_ver").innerHTML = result.mysql_ver; 
		document.getElementById("charset").innerHTML = result.charset;
		/*
      apilist = document.getElementById("lilist").innerHTML;
      document.getElementById("lilist").innerHTML =apilist;
      if(document.getElementById("Marquee") != null)
      {
        var Mar = document.getElementById("Marquee");
        lis = Mar.getElementsByTagName('div');
        //alert(lis.length); //显示li元素的个数
        if(lis.length>1)
        {
          api_styel();
        }      
      }*/
    }
 
      function api_styel()
      {
        if(document.getElementById("Marquee") != null)
        {
            var Mar = document.getElementById("Marquee");
            if (Browser.isIE)
            {
              Mar.style.height = "52px";
            }
            else
            {
              Mar.style.height = "36px";
            }
            
            var child_div=Mar.getElementsByTagName("div");

        var picH = 16;//移动高度
        var scrollstep=2;//移动步幅,越大越快
        var scrolltime=30;//移动频度(毫秒)越大越慢
        var stoptime=4000;//间断时间(毫秒)
        var tmpH = 0;
        
        function start()
        {
          if(tmpH < picH)
          {
            tmpH += scrollstep;
            if(tmpH > picH )tmpH = picH ;
            Mar.scrollTop = tmpH;
            setTimeout(start,scrolltime);
          }
          else
          {
            tmpH = 0;
            Mar.appendChild(child_div[0]);
            Mar.scrollTop = 0;
            setTimeout(start,stoptime);
          }
        }
        setTimeout(start,stoptime);
        }
      }
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
