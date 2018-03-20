(function($){
    var defaults = {
        interval : 3000
    }
    $.fn.sLeft = function(options){
        var options = $.extend(defaults,options);
        return this.each(function(){
            var o = options,
                $this = $(this),
                list = $('ul',$this),
                li  = $('ul li',$this),
                sliderNum = $('.slider-num',$this),
                sliderIcon = $('.slider-num li',$this),
                prev = $('.prev',$this),
                next = $('.next',$this),
                index = 1,
                len = li.length ,
                sLeft = li.eq(0).outerWidth(),
                speed = 300,
                timer;
            
            li.first().clone().appendTo(list);
            li.last().clone().prependTo(list);
            list.css({left:-sLeft,width:sLeft * (len + 2)});
            sliderNum.css({marginLeft:-sliderNum.outerWidth()/2});
            
            function animate (offset) {
                var left = parseInt(list.css('left')) + offset;
                if (offset>0) {
                    offset = '+=' + offset;
                }
                else {
                    offset = '-=' + Math.abs(offset);
                }
                list.animate({'left': offset}, speed, function () {
                    if(left > -200){
                        list.css('left', -sLeft * len);
                    }
                    if(left < (-sLeft * len)) {
                        list.css('left', -sLeft);
                    }
                });
            }
            
            function showButton() {
                sliderIcon.eq(index-1).addClass('hover').siblings().removeClass('hover');
            }

            function play() {
                timer = setTimeout(function () {
                    next.trigger('click');
                    play();
                }, o.interval);
            }
            function stop() {
                clearTimeout(timer);
            }

            sliderIcon.each(function () {
                 $(this).bind('mousemove', function () {
                     if (list.is(':animated') || $(this).attr('class')=='hover') {
                         return;
                     }
                     var myIndex = $(this).index() + 1;
                     var offset = -sLeft * (myIndex - index);

                     animate(offset);
                     index = myIndex;
                     showButton();
                 })
            });
            $this.hover(stop, play);
            if(len > 1){
                sliderNum.show();
                $this.hover(function(){
                    $this.find('.drop-layer').removeClass('drop-layer');
                },function(){ 
                    $this.find('.slider-btn').addClass('drop-layer');
                });
                next.bind('click', function () {
                    if (list.is(':animated')) {
                        return;
                    }
                    if (index == len) {
                        index = 1;
                    }
                    else {
                        index += 1;
                    }
                    animate(-sLeft);
                    showButton();
                    return false;
                });
                
                prev.bind('click', function () {
                    if (list.is(':animated')) {
                        return;
                    }
                    if (index == 1) {
                        index = len;
                    }
                    else {
                        index -= 1;
                    }
                    animate(sLeft);
                    showButton();
                });
                play();
            }
        })
    }
})(jQuery)
