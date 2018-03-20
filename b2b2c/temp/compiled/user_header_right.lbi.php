
<div class="u-g-cart fr fixed" id="hd-my-cart" tp-childarea="car">
    <p class="c-n fl">我的购物车</p>
    <a href="flow.php">
    	<p class="c-num fl">(<span class="count cart_quantity" id="count_quantity"></span>)
        <i class="i-c oh"></i>
    </p>	
    </a>
    
    
</div>
<div class="u-nav-ad fr">
    <a target="_blank" href="" alt="" title="" class="J_minigif" data-src="" tp-area-a="www.0.1000.10"><img class="J_new_lazy" data-original="" height="60" width="144" alt="" tltle="" src="themes/swtshop_buy/images/201612261606041482739564_kk-0.gif" style="display: inline;"></a>
</div>
<script>

// 同步刷新搜索框右边购物车数据
function startRequest()
    {

        var obj = document.getElementById("cartnum").innerText;
  
         document.getElementById("count_quantity").innerHTML= obj;

    }
     setInterval("startRequest()",1000);
  
</script>