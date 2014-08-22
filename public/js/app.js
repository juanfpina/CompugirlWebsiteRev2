var main = function() {

	function toggleMenu() {
		if ($(".sampleClass").css("float") == "none" ) {
			
			if(menu == 0) {
				$('.navigation').animate({
					left: "0%"
				}, 500);
				$('.row').animate({
					left: "33%"
				}, 500);
				menu = 1;
			} else {
				$('.navigation').animate({
					left: "-33%"
				}, 500);
				$('.row').animate({
					left: "0%"
				}, 500);
				menu = 0;
			}
		} else {
			
			if(menu == 0) {
				$('.navigation').animate({
					left: "0%"
				}, 500);
				$('.row').animate({
					left: "50%"
				}, 500);
				menu = 1;
			} else {
				$('.navigation').animate({
					left: "-50%"
				}, 500);
				$('.row').animate({
					left: "0%"
				}, 500);
				menu = 0;
			}
		}
	};

	<!-- Nav Menu open and closing -->
	var menu = 0;
	$('.showmenu').click(function(e) {
		e.preventDefault();
		toggleMenu();
	});

	$('.hidemenu').click(function(e) {
		e.preventDefault();
		toggleMenu();	
	});

	<!-- navigation load content -->
	$('.navigation ul li').click(function(e) {
		e.preventDefault();
		$('.navigation ul li').removeClass('active');
		$(this).addClass('active');
		$('.content').text('');
		$($(this).children().attr('href')).clone(true).appendTo($('.content'));
		$('.content').children($($(this).children().attr('href'))).removeClass('hidden');
		toggleMenu();
	});

	<!-- End Nav-->

	<!-- Gamelist nav -->
	$('.gamelist ul li').click(function(e) {
		e.preventDefault();
		$('.gamelist ul li').removeClass('active');
		$(this).addClass('active');

	});

	<!-- End gamelist -->

	$('#home').clone().appendTo($('.content')).removeClass('hidden');
};

$(document).ready(main);