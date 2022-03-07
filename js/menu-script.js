$(document).ready(function() {
	// $('.header-burger').click(function(event) {
	// 	$('.header-burger,.header-menu').toggleClass('active');
	// 	$('body').toggleClass('lock');
	// });

	$('.header-burger').click(function () {
		$('.nav2').addClass('mobile_menu_active');
	})
	$('.close_mob_menu').click(function () {
		$('.nav2').removeClass('mobile_menu_active');
	})
});