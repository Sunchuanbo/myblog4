;(function($){
	$.fn.extend({
		lightbox:function(){
			this.on('click',function(){
				//jquery编写
				// $img = $('<img class="lightbox-img"/>');
				// $img.on('load',function(){
				// 	this.style.left = ($(window).width() - this.width) / 2 + 'px';
				// 	this.style.top = ($(window).height() - this.height) / 2 + 'px';
				// });
				// $img.attr('src', $(this).data('src'));
				// $('body').append($img);

				$div = $('<div class="lightbox-bg"></div>');
				$img = $('<img class="lightbox-img"/>');
				$por  = $(this);
				console.log($por)
				$s = $('#portfolio .lightbox-close')
				$span = $('<img class="lightbox-close"/>')
				$div.appendTo(document.body).fadeIn(500, function(){	
					$img.on('load',function(){
						this.style.left = ($(window).width() - this.width) / 2 + 'px';
						this.style.top = ($(window).height() - this.height) / 2 + 'px';
					});
					$img.attr('src', $por.data('src'));
					$img.appendTo(document.body).fadeIn(500, function(){
					});
				});
				$div.appendTo(document.body).fadeIn(500,function(){
					$span.on('load',function(){
						this.style.left = ($(window).width() - this.width) / 2 - 150 + 'px';
						this.style.top = ($(window).height() - this.height) / 2 - 90 + 'px';
					});
					$span.attr('src', $s.data('src'));
					$span.appendTo(document.body).fadeIn(500, function(){
					});
				})
				$div.on('click',function(){
					$div.fadeOut('slow', function(){
					});
					$img.fadeOut('slow', function(){
					});
					$span.fadeOut('slow', function(){
					});
				});
				$span.on('click',function(){
					$div.fadeOut('slow', function(){
					});
					$img.fadeOut('slow', function(){
					});
					$span.fadeOut('slow', function(){
					});
				})
			});







				//原生编写
				// var oImg = new Image();//document.creatElement('img');
				// oImg.className = 'lightbox-img';
				// oImg.onload =function(){
				// 	this.style.left = ($(window).width() - this.width) / 2 + 'px';
				// 	this.style.top = ($(window).height() - this.height) / 2 + 'px';
				// };
				// oImg.src = this.getAttribute('data-src');

				// document.body.appendChild(oImg);
			// });
		}
	});
})(jQuery);