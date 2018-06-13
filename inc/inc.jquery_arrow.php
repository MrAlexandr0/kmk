		<a href="#" class="back-to-top" style="display: inline;">
		<i class="fa fa-arrow-circle-up"></i>
		</a>
		<?php /* ajax jquery*/?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

		<script>
			jQuery(document).ready(function() {
    		var offset = 250;
    		var duration = 300;
    		jQuery(window).scroll(function() {
        
        	if (jQuery(this).scrollTop() > offset) {
            	jQuery('.back-to-top').fadeIn(duration);
        	} else {
            	jQuery('.back-to-top').fadeOut(duration);
        	}
    		});

    		jQuery('.back-to-top').click(function(event) {
        		event.preventDefault();
        		jQuery('html, body').animate({scrollTop: 0}, duration);
        		return false;
    		})
		});
</script>