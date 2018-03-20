<div class="site-footer">
<div class="border" style="border-top:1px #e5e5e5 solid;border-bottom:1px #e5e5e5 solid;">
  <div class="footer-map">
     <ul class="fn-clear">
      <li class="map"><i class="footer-icon z-icon" style="width:55px;"></i><strong class="tit">正品低价</strong><br><span class="desc">正品行货 品质保障</span></li>
      <li class="line"></li>
      <li class="map"><i class="footer-icon q-icon"></i><strong class="tit">品类齐全</strong><br><span class="desc">品类齐全 选择丰富</span></li>
      <li class="line"></li>
      <li class="map"><i class="footer-icon k-icon"></i><strong class="tit">快速配送</strong><br><span class="desc">多仓直发 极速配送</span></li>
      <li class="line"></li>
      <li class="map"><i class="footer-icon t-icon"></i><strong class="tit">售后无忧</strong><br><span class="desc">7天无理由退货</span></li>
     </ul>
  </div>
</div>
    <div class="footer-related">
        <div class="footer-article w1210"> 
          <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
          <dl class="col-article <?php if (($this->_foreach['no']['iteration'] <= 1)): ?>col-article-first<?php endif; ?>">
            <dt><?php echo $this->_var['help_cat']['cat_name']; ?></dt>
            <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item_0_46062200_1521526080');if (count($_from)):
    foreach ($_from AS $this->_var['item_0_46062200_1521526080']):
?>
            <dd><a rel="nofollow" href="help.php?id=<?php echo $this->_var['item_0_46062200_1521526080']['article_id']; ?>" target="_blank"><?php echo $this->_var['item_0_46062200_1521526080']['short_title']; ?></a></dd>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </dl>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <dl class="col-article">
                <dt>服务支持</dt>
                <dd>售前咨询 400-078-5268</dd>
                <dd>售后咨询 400-078-5268</dd>
                <dd>客服 QQ 800007396</dd>
                <dd>工作时间 9：00-17：30</dd>
           </dl>
        </div>
    	<div class="footer-info clearfix" >
        <div class="info-text">
        <?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?> 
        <p>友情链接：
            <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
            <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a><span class="sep">|</span>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['link']):
        $this->_foreach['name']['iteration']++;
?>
            <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a><?php if (! ($this->_foreach['name']['iteration'] == $this->_foreach['name']['total'])): ?><span class="sep">|</span><?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </p>
        <?php endif; ?>
        <p class="nav_bottom">
            <?php if ($this->_var['navigator_list']['bottom']): ?>
            <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_46075600_1521526080');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_46075600_1521526080']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
            <a href="<?php echo $this->_var['nav_0_46075600_1521526080']['url']; ?>"  <?php if ($this->_var['nav_0_46075600_1521526080']['opennew'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $this->_var['nav_0_46075600_1521526080']['name']; ?></a><em <?php if (($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>style="display:none"<?php endif; ?>>|</em>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endif; ?>
            <?php if ($this->_var['icp_number']): ?>
            <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a>
            <?php endif; ?>
        </p>
        <p>
            <a href="javascript:;"><?php echo $this->_var['copyright']; ?></a> <a href="javascript:;"><?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?></a>
            <a href="javascript:;"><?php if ($this->_var['service_phone']): ?>
            Tel: <?php echo $this->_var['service_phone']; ?>
            <?php endif; ?></a>
            <a href="javascript:;"><?php if ($this->_var['service_email']): ?>
            E-mail: <?php echo $this->_var['service_email']; ?>
            <?php endif; ?></a>
        </p>
        <p>
          <?php if ($this->_var['stats_code']): ?>
          <?php echo $this->_var['stats_code']; ?>
          <?php endif; ?>
          <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
          <?php if ($this->_var['im']): ?>
          <a href="http://wpa.qq.com/msgrd?V=1&amp;uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
          <?php if ($this->_var['im']): ?>
          <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
          <?php if ($this->_var['im']): ?>
          <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/swtshop_buy/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
          <?php if ($this->_var['im']): ?>
          <img src="themes/swtshop_buy/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
          <?php if ($this->_var['im']): ?>
          <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </p>
      </div>      
    </div>    
  </div>
</div>

<img src="api/cron.php?t=<?php gmtime(); ?>" alt="" style="width:0px;height:0px;" />


<script type="text/javascript">
Ajax.call('api/okgoods.php', '', '', 'GET', 'JSON');
$("img").lazyload({
    effect       : "fadeIn",
	 skip_invisible : true,
	 failure_limit : 20
});
</script>

<script type="text/javascript" src="themes/swtshop_buy/js/base.js" ></script>