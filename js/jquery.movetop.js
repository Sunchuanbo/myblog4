;(function($){
	$.fn.extend({
		movetop:function(){
			var elem = this;
				$(window).scroll(function(){
					if($(window).scrollTop() > $(window).height()){
						elem.fadeIn(1000);
					}else{
						elem.fadeOut(1000);
					};
				});
				elem.on('click',function(){
					$('body,html').animate({
						scrollTop:0
					},1000);
				});

	// 	var elem = this;
		// 		$(window).scroll(function(){
		// 			if($(window).scrollTop()>$(window).height()){
		// 				elem.fadeIn(1000);
		// 			}else{
		// 				elem.fadeOut(1000);
		// 			}
		// 		});
		// 	elem.on('click',function(){
		// 		$('body,html').animate({
		// 			scrollTop:0
		// 		},1000)
		// 	})
		 }
	});
})(jQuery);