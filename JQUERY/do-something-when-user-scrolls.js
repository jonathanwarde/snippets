<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cornerslider.js"></script>
	<div id="corner-slider">      
	  <p>Subscribe and become part of the UK's fastest growing group of PMO's</p>
	  <?php echo do_shortcode('[contact-form-7 id="4741" title="Subscribe"]'); ?>
	</div>

<script>
(function($){
$(document).ready(function () {

    $("#corner-slider").cornerSlider({
        showAtScrollingHeight : 1300,
		directionEffect       : "right",
        speedEffect           : 300,
		right                 : 20,
		bottom                : 20,
        cookieMinutesToExpiry : 15,
		//onClose               : function() {
		    //alert("Not to be seen again in the near future.");
		//},
    });
});
}(jQuery));
</script>