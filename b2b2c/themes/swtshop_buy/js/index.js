/*
 * 移动端浏览器访问  我买网PC端首页 http://www.womai.com时
 * 跳转到M站首页 http://m.womai.com/
 * */

/*
 * Slider 1.0
 * Date:2015-7-19
 * 幻灯片效果
 * */
(function($){	
	var defaults = {	
		speed:3000
	}
	$.fn.slider = function(options){
		var options = $.extend(defaults,options);
		return this.each(function(){
			var o = options,
			    $this = $(this),
			    $btn = $('.slider-btn',$this),
			    $btna = $('.slider-btn a',$this),
			    $ul = $('.adv ul',$this),
			    $li = $('.adv ul li',$this),
			    $lia = $('.adv ul li a',$this),
			    $lNum = $li.length,
			    $lw = $li.outerWidth(),
			    $dl = $('ol',$this),
			    $dd = $('ol li',$this),
			    $len = $li.length,
			    $dW = $dd.outerWidth(true),
			    curr = 0;
			// $ul.css({width:'100%'});
			$dl.css({width:$len*$dW,marginLeft:-($lNum*$dW)/2});
			
			if($lNum > 1){
				star();
			}
			
			function star(){
				//设置定时器
				var t = setInterval(moveAuto,o.speed);
				// 鼠标移动上事件
				$btn.add($lia).hover(function(){
					clearInterval(t);
					$btn.removeClass('drop-layer');
				},function(){
					t = setInterval(moveAuto,o.speed);
					$btn.addClass('drop-layer');
				})
				//下面小圆球鼠标移上去事件	
				$dd.hover(function(){
					clearInterval(t);
					var hNum = $(this).index();
					$dd.removeClass('hover');
					$dd.eq(hNum).addClass('hover');
					$li.eq(hNum).show().siblings($li).hide();
					curr = hNum;
				},function(){
					t = setInterval(moveAuto,o.speed);
				});
				//点击左右按钮进行轮播切换
				$btna.bind('click',function(){
					if($(this).index() == 0) {
						curr--;
					}else{
						curr++;
					}
					move();
				})
				var move = function(){
					if(curr >= $lNum) curr = 0;
					if(curr < 0 ) curr = $lNum - 1;
					$li.eq(curr).show().siblings($li).hide();
					$dd.removeClass('hover');
					$dd.eq(curr).addClass('hover');
				}
				function moveAuto(){
					curr++;
					move();  
				}
			}
		});
	}
})(jQuery)
/*$(".guess,.no-gap").rotate();*/

$(function(){
	$(".banner").slider();
	$('.adv').sLeft();
	


	$(".white-content span").click(function(){
		$(".black-overlay").hide();
		$(".white-content").hide();
	})
	/*新客广告鼠标滑动时弹出框出现*/
	
	/*图片背景透明
	$('.transparency_wrap img').hover(function(){
		$(this).addClass('filterImg');
	},function(){
		$(this).removeClass('filterImg');
	})
	
	/*楼层图片交互效果
	$('.floor .con img').hover(function(){
		$(this).addClass('filterImg');
	},function(){
		$(this).removeClass('filterImg');
	})
	*/
})


