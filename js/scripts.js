$(document).ready(function() {
    $('.lazy').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
		responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 6,
                infinite: true,
                dots: true
            }
        },
		 {
            breakpoint: 1199,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
        },
		{
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
                slidesToScroll:4
            }
        },
		{
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
		
		{
            breakpoint: 650,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
		 {
			
            breakpoint: 450,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
			
        }]
    });
	
});

	
