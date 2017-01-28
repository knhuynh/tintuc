
$( document ).ready(function() {
	$('.icon-search').click(function() {
		if($('.search').hasClass('hidden')) {
			$('.search').removeClass('hidden');
		} else {
			$('.search').addClass('hidden');
		}
	});
	
	$('.icon-menu').click(function() {
		if($('.menu').hasClass('hidden')) {
			$('.menu').removeClass('hidden');
		} else {
			$('.menu').addClass('hidden');
		}
	});

	$('.show-description').click(function() {
		if($('.description').hasClass('hidden')) {
			$('.description').removeClass('hidden');
			$('.arrow').removeClass('fa-chevron-down');
			$('.arrow').addClass('fa-chevron-up');
		} else {
			$('.description').addClass('hidden');
			$('.arrow').removeClass('fa-chevron-up');
			$('.arrow').addClass('fa-chevron-down');
		}
	});

	$('.hot-news').click(function() {
		if(!$('.hot-news').hasClass('active')) {
			$('.hot-news').addClass('active');
			$('.new-news').removeClass('active');
		}
	});
	$('.new-news').click(function() {
		if(!$('.new-news').hasClass('active')) {
			$('.new-news').addClass('active');
			$('.hot-news').removeClass('active');
		}
	});

	$('.arrow-category-dt').click(function() {
		if($('.sub-category-dt').hasClass('hidden')) {
			$('.sub-category-dt').removeClass('hidden');
			$('.arrow-category-dt').removeClass('fa-chevron-down');
			$('.arrow-category-dt').addClass('fa-chevron-up');
		} else {
			$('.sub-category-dt').addClass('hidden');
			$('.arrow-category-dt').removeClass('fa-chevron-up');
			$('.arrow-category-dt').addClass('fa-chevron-down');
		}
	});

	$('.arrow-category1').click(function() {
		if($('.sub-category1').hasClass('hidden')) {
			$('.sub-category1').removeClass('hidden');
			$('.arrow-category1').removeClass('fa-chevron-down');
			$('.arrow-category1').addClass('fa-chevron-up');
		} else {
			$('.sub-category1').addClass('hidden');
			$('.arrow-category1').removeClass('fa-chevron-up');
			$('.arrow-category1').addClass('fa-chevron-down');
		}
	});

	$('.arrow-category2').click(function() {
		if($('.sub-category2').hasClass('hidden')) {
			$('.sub-category2').removeClass('hidden');
			$('.arrow-category2').removeClass('fa-chevron-down');
			$('.arrow-category2').addClass('fa-chevron-up');
		} else {
			$('.sub-category2').addClass('hidden');
			$('.arrow-category2').removeClass('fa-chevron-up');
			$('.arrow-category2').addClass('fa-chevron-down');
		}
	});

	$('.arrow-category3').click(function() {
		if($('.sub-category3').hasClass('hidden')) {
			$('.sub-category3').removeClass('hidden');
			$('.arrow-category3').removeClass('fa-chevron-down');
			$('.arrow-category3').addClass('fa-chevron-up');
		} else {
			$('.sub-category3').addClass('hidden');
			$('.arrow-category3').removeClass('fa-chevron-up');
			$('.arrow-category3').addClass('fa-chevron-down');
		}
	});

	$('.read-more').click(function() {
		window.location.href = "http://tintuc.com/m-category.php";
	});

	$('.read-more-sub').click(function() {
		window.location.href = "http://tintuc.com/m-sub-category.php";
	});
});