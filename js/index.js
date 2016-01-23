//requirejs固定配置：
requirejs.config({
	shim:{
		'jquery.lightbox':['jquery']
	}
}); 


require(['jquery','jquery.lightbox','jquery.movetop'],function($){

// $(function($){
	//导航栏
	var $nav = $('#nav'),
	$navIcon = $('#nav .nav-icon'),
	$navMenuBox = $('#nav .nav-menu-box'),
	$navClose = $('#nav .nav-close');
	// $Scroll = $('#nav a');
	$navIcon.on('click', function(){
		$navMenuBox.animate({top:0});
	});
	$navClose.on('click', function(){
		$navMenuBox.animate({top:-192});
	});
	// $Scroll.hover(function(){
	// 	console.log(111);
	// 	$(this).css({
	// 		color: "red"
	// 	});
	// },function(){
	// 	$(this).css({
	// 		color: "white"
	// 	})
	// });




	//Portfolio
	$('#portfolio .portfolio-list').hover(function(){
		$(this).children('.mask').stop().animate({
			opacity:0.84
		});
		$(this).children('img').stop().animate({
			width:307,
			height:194,
			marginLeft:-10,
			marginTop:-7
		},300);
	},function(){
		$(this).children('.mask').stop().animate({
			opacity:0
		});
		$(this).children('img').stop().animate({
			width:287,
			height:180,
			marginLeft:0,
			marginTop:0
		},300);
	}).lightbox();
	$('#movetop').movetop();
});
// require(['jquery','jquery.movetop'],function($){
// 	//回到顶部
// 	$('#movetop').movetop();
// })
