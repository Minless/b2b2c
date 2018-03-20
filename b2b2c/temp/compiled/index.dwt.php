<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
<link rel="stylesheet" type="text/css" href="themes/swtshop_buy/css/index.css" />
<script type="text/javascript" src="themes/swtshop_buy/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="themes/swtshop_buy/js/jump.js"></script>
<script type="text/javascript" src="themes/swtshop_buy/js/tab.js"></script>
<script type="text/javascript" src="themes/swtshop_buy/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript">
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body>


<div id="o-header-2013">
	<div tp-area="1001" class="m-top-banner J_top_banner" id="top-banner" style="background-color:#400f01">
	     <div class="u-b-b ma">
	         
			 <?php 
				 $GLOBALS['smarty']->assign('gettop',get_top());
			 ?>
	          <a target="_blank" class="p-s J_banner_box01" href="<?php echo $this->_var['gettop']['ad_link']; ?>" alt="" data-src=""><img class="J_new_lazy" src="data/afficheimg/<?php echo $this->_var['gettop']['ad_code']; ?>" width="1190" alt="" title="" usemap="#Map" ref="imageMaps"></a>
	           

	         
	          <a href="javascript:void(0)" class="c oh J_btn_closeadv" title="" alt="" onclick="document.getElementById(&quot;o-header-2013&quot;).removeChild(document.getElementById(&quot;top-banner&quot;));"></a>
	         
	    </div>
	</div>
</div>


	<?php echo $this->fetch('library/page_header_index.lbi'); ?>
    <div class="banner">
		<?php echo $this->fetch('library/index_ad.lbi'); ?>
        <div class="right-sidebar">

 			<div class="md-at" tp-childarea="myoper" tp-area-a-len="3">
			  <ul class="J_three_link">
			    <li>
			    	<?php if ($_SESSION['user_id'] > 0): ?>
			    	<a data-tcbicon="1" href="user.php?u=<?php echo $_SESSION['user_id']; ?>&act=auction_list" alt="" target="_blank" tp-area-a="">
				        <img class="J_new_lazy" data-original="" height="50" width="50" alt="" src="themes/swtshop_buy/images/201612261042371482720157_kk-0.png" style="display: inline-block;">
				        <span>我的竞拍</span>
			        </a>
			    	<?php else: ?>
			      	<a data-tcbicon="1" href="user.php" alt="" target="_blank" tp-area-a="">
				        <img class="J_new_lazy" data-original="" height="50" width="50" alt="" src="themes/swtshop_buy/images/201612261042371482720157_kk-0.png" style="display: inline-block;">
				        <span>我的竞拍</span>
			        </a>
			        <?php endif; ?>
			    </li>
			    <li>
			    	<?php if ($_SESSION['user_id'] > 0): ?>
			    	<a data-tcbicon="1" href="user.php?u=<?php echo $_SESSION['user_id']; ?>&act=order_list" alt="" target="_blank" tp-area-a="">
			        	<img class="J_new_lazy" data-original="" height="50" width="50" alt="" src="themes/swtshop_buy/images/20150926170913_kk-0.png" style="display: inline-block;">
			        	<span>曾经购买</span>
			        </a>
			    	<?php else: ?>
			      	<a data-tcbicon="1" href="user.php" alt="" target="_blank" tp-area-a="">
			        	<img class="J_new_lazy" data-original="" height="50" width="50" alt="" src="themes/swtshop_buy/images/20150926170913_kk-0.png" style="display: inline-block;">
			        	<span>曾经购买</span>
			        </a>
			        <?php endif; ?>
			    </li>
			    <li>
			    	<?php if ($_SESSION['user_id'] > 0): ?>
			    	<a data-tcbicon="1" href="user.php?u=<?php echo $_SESSION['user_id']; ?>&act=collection_list" alt="" target="_blank" tp-area-a="">
				        <img class="J_new_lazy" data-original="" height="50" width="50" alt="" src="themes/swtshop_buy/images/20150926170918_kk-0.png" style="display: inline-block;">
				        <span>我的收藏</span>
			        </a>
			    	<?php else: ?>
			      	<a data-tcbicon="1" href="user.php" alt="" target="_blank" tp-area-a="">
				        <img class="J_new_lazy" data-original="" height="50" width="50" alt="" src="themes/swtshop_buy/images/20150926170918_kk-0.png" style="display: inline-block;">
				        <span>我的收藏</span>
			        </a>
			        <?php endif; ?>
			    </li>
			  </ul>
			</div>

			<div class="inart">
				<div class="hd"><ul><li>公告</li><li>资讯</li><li>行业</li><li>帮助</li></ul></div>
				<div class="bd">
					<ul> 
<?php $this->assign('articles',$this->_var['articles_19']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_19']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>
</ul>
					<ul> 
</ul>
					<ul> 
</ul>
					<ul> 
</ul>

				</div>
			</div>
			<script type="text/javascript">jQuery(".inart").slide();</script>

			<?php echo $this->fetch('library/recommend_right_promotion.lbi'); ?>	
            
        </div>
    </div>

 
	<div class="m-fn-spc ma mt30 J_n_m pr J_loaded" tp-area="2371" data-floor="2371" id="floor2371">
	  <h3>特色频道</h3>
	  <div class="u-spc-m fixed">
	    <div class="m-l fl oh">
	    <?php 
				 $GLOBALS['smarty']->assign('teleft',get_teleft('特色频道-左图'));
		 ?>
	      <a class="item" href="<?php echo $this->_var['teleft']['ad_link']; ?>" alt="" title="" target="_blank">
	        <img src="data/afficheimg/<?php echo $this->_var['teleft']['ad_code']; ?>" height="429" width="189" alt="" title=""></a>
	    </div>
	    <div class="m-c fl oh">
	      <div class="m-c-slide slide fl" id="specFloor" tp-childarea="smllb" tp-area-a-len="6">
	   			<div id="wrapper">
				    <div id="banner">
				      <ul class="imgList">
				      	<?php 
				      			$GLOBALS['smarty']->assign('tesmall',get_tesmall('首页-特色频道-小轮播图'));

				      	 ?>

				      	<?php $_from = $this->_var['tesmall']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tesmall');$this->_foreach['small'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['small']['total'] > 0):
    foreach ($_from AS $this->_var['tesmall']):
        $this->_foreach['small']['iteration']++;
?>
						<?php if ($this->_foreach['small']['iteration'] < 5): ?>
				        <li><a href="<?php echo $this->_var['tesmall']['ad_link']; ?>"><img src="data/afficheimg/<?php echo $this->_var['tesmall']['ad_code']; ?>" width="399px" height="239px" alt="puss in boots1"></a></li>
						<?php endif; ?>
				  		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

				      </ul>
				      <img src="themes/swtshop_buy/images/prev1.png" width="20px" height="40px" id="prev" class="hove">
				      <img src="themes/swtshop_buy/images/next1.png" width="20px" height="40px" id="next" class="hove">			  
				      <ul class="indexList">
				        <li class="indexOn"></li>
				        <li></li>
				        <li></li>
				        <li></li>
				      </ul>
				    </div>
				 </div>
	      </div>
			
			<?php 
					$GLOBALS['smarty']->assign('smabottom',get_smabottom('首页-特色频道-小轮播图-下图'));
			 ?>

		<?php $_from = $this->_var['smabottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'smabottom');if (count($_from)):
    foreach ($_from AS $this->_var['smabottom']):
?>
	      <a href="<?php echo $this->_var['smabottom']['ad_link']; ?>" class="item b" alt="" title="" target="_blank">
	        <img src="data/afficheimg/<?php echo $this->_var['smabottom']['ad_code']; ?>" height="189" width="199" alt="" title="">
	      </a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	    </div>

	    <div class="m-r fl oh">
	    
		<?php 
				$GLOBALS['smarty']->assign('rightsamll',get_rightsamll('首页-特色频道-右'));
		 ?>
		<?php $_from = $this->_var['rightsamll']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rightsamll');$this->_foreach['ribot'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ribot']['total'] > 0):
    foreach ($_from AS $this->_var['rightsamll']):
        $this->_foreach['ribot']['iteration']++;
?>

	      <a href="<?php echo $this->_var['rightsamll']['ad_link']; ?>" class="item t" alt="" title="" target="_blank">
	        <img src="data/afficheimg/<?php echo $this->_var['rightsamll']['ad_code']; ?>" alt="" title="">
	      </a>

	  	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>



		<?php 
				//$GLOBALS['smarty']->assign('rightbott',get_rightbott('首页-特色-右下'));
		 ?>
		<?php $_from = $this->_var['rightbott']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rightbott');if (count($_from)):
    foreach ($_from AS $this->_var['rightbott']):
?>
		
	     <!--  <a href="<?php echo $this->_var['rightbott']['ad_link']; ?>" class="item b" alt="" title="" target="_blank">
	        <img src="<?php echo $this->_var['rightbott']['ad_link']; ?>" alt="" title="">
	      </a> -->
	     
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

	      <div class="item b more" tp-childarea="more">
	        <h4>
	          <i class="l mr10"></i>更多栏目
	          <i class="r ml10"></i></h4>
	        <ul class="link">
	        	<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cats'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cats']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cats']['iteration']++;
?>
	        	<?php if ($this->_foreach['cats']['iteration'] < 9): ?>
		          <li>
		            <a href="<?php echo $this->_var['cat']['url']; ?>" target="_blank" alt="" title=""><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
		          </li>
		         <?php endif; ?>
	          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	        </ul>
	      </div>
	    </div>
	  </div>
	</div>
<script type="text/javascript">

$(document).ready(function(){
	  $("#banner").hover(function(){
		$(".hove").css("display","block");
		},function(){
		$(".hove").css("display","none");
	  });
	});
  

  var curIndex = 0, //当前index
      imgLen = $(".imgList li").length; //图片总数
     // 定时器自动变换2.5秒每次
  var autoChange = setInterval(function(){ 
    if(curIndex < imgLen-1){ 
      curIndex ++; 
    }else{ 
      curIndex = 0;
    }
    //调用变换处理函数
    changeTo(curIndex); 
  },2500);
   //左箭头滑入滑出事件处理
  $("#prev").hover(function(){ 
    //滑入清除定时器
    clearInterval(autoChange);
  },function(){ 
    //滑出则重置定时器
    autoChangeAgain();
  });
  //左箭头点击处理
  $("#prev").click(function(){ 
    //根据curIndex进行上一个图片处理
    curIndex = (curIndex > 0) ? (--curIndex) : (imgLen - 1);
    changeTo(curIndex);
  });
  //右箭头滑入滑出事件处理
  $("#next").hover(function(){ 
    //滑入清除定时器
    clearInterval(autoChange);
  },function(){ 
    //滑出则重置定时器
    autoChangeAgain();
  });
  //右箭头点击处理
  $("#next").click(function(){ 
    curIndex = (curIndex < imgLen - 1) ? (++curIndex) : 0;
    changeTo(curIndex);
  });
  //对右下角按钮index进行事件绑定处理等
  $(".indexList").find("li").each(function(item){ 
    $(this).hover(function(){ 
      clearInterval(autoChange);
      changeTo(item);
      curIndex = item;
    },function(){ 
      autoChangeAgain();
    });
  });
  //清除定时器时候的重置定时器--封装
  function autoChangeAgain(){ 
      autoChange = setInterval(function(){ 
      if(curIndex < imgLen-1){ 
        curIndex ++;
      }else{ 
        curIndex = 0;
      }
    //调用变换处理函数
      changeTo(curIndex); 
    },2500);
    }
  function changeTo(num){ 
    var goLeft = num * 400;
    $(".imgList").animate({left: "-" + goLeft + "px"},500);
    $(".infoList").find("li").removeClass("infoOn").eq(num).addClass("infoOn");
    $(".indexList").find("li").removeClass("indexOn").eq(num).addClass("indexOn");
  }
  </script>



 

    <div class="w1210 floor-list" style="margin-top: 30px;">
			<div class="floor"></div>
			
<?php $this->assign('cat_goods',$this->_var['cat_goods_5']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_5']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_4']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_4']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_6']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_6']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_2']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_2']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_3']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_3']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_7']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_7']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_8']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_8']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

	</div>

	
		<div class="m-fn-hot clearfix mt30 ma J_n_m J_loaded" tp-area="2373" data-floor="2373" id="floor2373">
			<div class="u-fn-dt fl">
				<div class="u-t fixed">
					<h3>
						天天抢
					</h3>
					<img src="themes/swtshop_buy/images/20150925175310_kk-0.jpg" alt="">
				</div>
				<div class="u-c">
					<div class="l fl oh">
						<dl>
							<dt>
								<a href="<?php echo $this->_var['daygoods']['url']; ?>" target="_blank" title="<?php echo $this->_var['daygoods']['thumb']; ?>">
									<img src="<?php echo $this->_var['daygoods']['thumb']; ?>"
									alt="">
								</a>
							</dt>
							<dd class="n oh">
								<a href="<?php echo $this->_var['daygoods']['url']; ?>" target="_blank" title="<?php echo $this->_var['daygoods']['name']; ?>">
									<?php echo $this->_var['daygoods']['name']; ?>
								</a>
							</dd>
							<dd class="p">
								<span>
									
								</span>
								<span class="">
									<?php echo $this->_var['daygoods']['shop_price']; ?>
								</span>
							</dd>
						</dl>
					</div>
					<ul class="r fl">
					<?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bestgoods');$this->_foreach['begoods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['begoods']['total'] > 0):
    foreach ($_from AS $this->_var['bestgoods']):
        $this->_foreach['begoods']['iteration']++;
?>
						<?php if ($this->_foreach['begoods']['iteration'] < 7): ?>
						<li>
							<dl>
								<dt>
									<a href="<?php echo $this->_var['bestgoods']['url']; ?>" target="_blank">
										<img src="<?php echo $this->_var['bestgoods']['thumb']; ?>"
										alt="" title="<?php echo $this->_var['bestgoods']['name']; ?>">
									</a>
								</dt>
								<dd class="n oh">
									<a href="<?php echo $this->_var['bestgoods']['url']; ?>" target="_blank" title="">
										<?php echo $this->_var['bestgoods']['name']; ?>
									</a>
								</dd>
								<dd class="p">
									<span>
										
									</span>
									<span class="">
										<?php echo $this->_var['bestgoods']['shop_price']; ?>
									</span>
								</dd>
							</dl>
						</li>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
				</div>
			</div>
			<div class="u-fn-share fl" tp-childarea="hotpl" tp-area-a-len="6">
				<div class="u-t">
					<h3>
						热门晒单
					</h3>
				</div>
				<div class="u-c">
					<div class="u-s-lst slide fixed oh" id="box" style="position: relative;width: 298px;height: 279px;overflow: hidden;">
						<ul class="s-lst fixed slider-main" id="ul1">
							<?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');if (count($_from)):
    foreach ($_from AS $this->_var['comment']):
?>
							<li>
								<a href="goods.php?<?php echo $this->_var['comment']['goods_id']; ?>" alt="" title="" target="_blank" tp-area-a="">
									<img src="<?php echo $this->_var['comment']['goods_thumb']; ?>" height="80" width="77" class="goodsimg" style="background:#ffffff">
									<?php if ($this->_var['comment']['headimg']): ?>
									<img src="<?php echo $this->_var['comment']['headimg']; ?>" alt="" data-original="data/headimg/201602/people.jpg" class="headimg" height="32" width="32" />
									<?php else: ?>
									<img src="data/headimg/201602/people.jpg " alt="" data-original="data/headimg/201602/people.jpg" class="headimg" height="32" width="32" />
									<?php endif; ?>
									<p class="name"><?php echo $this->_var['comment']['user_name']; ?></p>
									<p class="comment"><?php echo $this->_var['comment']['content']; ?></p>
								</a>
							</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
						<ul id="ul2"></ul>
					</div>
				</div>
			</div>
		</div>
	

    <script type="text/javascript" src="themes/swtshop_buy/js/indexPrivate.min.js"></script>
    <?php echo $this->fetch('library/right_sidebar.lbi'); ?>
    <?php echo $this->fetch('library/page_footer_index.lbi'); ?>
    <?php echo $this->fetch('library/arrive_notice.lbi'); ?>
    <?php echo $this->fetch('library/left_sidebar.lbi'); ?>
</body>
<script type="text/javascript" src="themes/swtshop_buy/js/home_index.js"></script>
<script type="text/javascript">

//window.onload = roll;
function roll() {
    var ul1 = document.getElementById("ul1");
    var ul2 = document.getElementById("ul2");
    var box = document.getElementById("box");
    ul2.innerHTML = ul1.innerHTML;
    box.scrollTop = 0;
    var timer = setInterval(rollStart, 50);
    box.onmouseover = function() {
        clearInterval(timer)
    }
    box.onmouseout = function() {
        timer = setInterval(rollStart, 50);
    }

}
function rollStart() {
    if (box.scrollTop >= ul1.scrollHeight) { //scrollTop属性既是scroll最上端和box的距离
        box.scrollTop = 0;
    } else {
        box.scrollTop++;
    }
}


	$(".brand-con").hover(function(){
		var num = $(this).find("li").length;
		if(num > 10){
			$(this).find(".brand-btn").fadeTo('fast',0.4);	
		}
	},
	function(){
		$(this).find(".brand-btn").fadeTo('fast',0);	
	})

</script>
</html>