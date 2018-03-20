
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

<?php if ($this->_var['helps']): ?>
<div class="footer-article w1210"> 
  <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
  <dl class="col-article <?php if (($this->_foreach['no']['iteration'] <= 1)): ?>col-article-first<?php endif; ?>">
    <dt><?php echo $this->_var['help_cat']['cat_name']; ?></dt>
    <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
    <dd><a rel="nofollow" href="help.php?id=<?php echo $this->_var['item']['article_id']; ?>" target="_blank"><?php echo $this->_var['item']['short_title']; ?></a></dd>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </dl>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  <li class="app-item">
    <p>飞牛网客户端</p>
    <img width="90" height="90" src="themes/swtshop_buy/images/201605271514341464333274_kk-0.png" alt="" title="">
  </li>
  <li class="wechat-item">
    <p>飞牛网微信</p>
    <img width="90" height="90" src="themes/swtshop_buy/images/201606010957381464746258_kk-0.jpg" alt="" title="">
  </li>
</div>
<?php endif; ?>