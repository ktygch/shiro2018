jQuery(function($){
//slide
    $(function(){

        $('#loopSlide ul').simplyScroll({
            autoMode: 'loop',
            speed: 1,
            frameRate: 24,
            horizontal: true,
            pauseOnHover: false,
            pauseOnTouch: false
        });
        
		$('#loopSlide2 ul').simplyScroll({
			autoMode: 'loop',
			speed: 1,
			frameRate: 24,
			direction: 'backwards',
			horizontal: true,
			pauseOnHover:	false,
			pauseOnTouch: false
		});

    });
});
