/* 代码整理：大头网 www.datouwang.com */
jQuery.fn.extend({
	
	slideFocus: function(){
		var This = $(this);//$(this)	当前 HTML 元素
		var sWidth = $(This).width(),
			len    =$(This).find('ul li').length,
			index  = 0,
			Timer;
        btn = "<div class='preNext pre'></div><div class='preNext next'></div>";
		$(This).append(btn);
      
		$(This).find('.next').click(function(){
			index++;
			if(index == len){index = 0;}
			Tony(index);
		});

		$(This).find('.pre').click(function(){
			index--;
			if(index == -1){index = len - 1;}
			Tony(index);
		});
		 function moveTo(dir){
                if(dir == 'Right')
				{
                 index++;
			     if(index == len){index = 0;}
			      Tony(index);
                }else if(dir == 'Left')
				{
                   index--;
			       if(index == -1){index = len - 1;}
			      Tony(index);
                }
        };
        function swipeDirection(x1, x2, y1, y2){
            return x1 - x2 > 0 ? 'Left' : 'Right';
        };

		// start setInterval		
		$(This).find('ul').css("width",sWidth * (len));
		$(This).hover(function(){
			clearInterval(Timer);
			show($(This).find('.preNext'));
		},function(){
			hide($(This).find('.preNext'));
			Timer=setInterval(function(){
				Tony(index);
				index++;
				if(len == index){index = 0;}
			}, 3000)
		}).trigger("mouseleave");

		function Tony(index){
			var new_width = -index * sWidth;
			$(This).find('ul').stop(true,false).animate({'left' : new_width},300);
		};

		function show(obj){ $(obj).stop(true,false).fadeIn();}
		function hide(obj){ $(obj).stop(true,false).fadeOut();}
	}
});