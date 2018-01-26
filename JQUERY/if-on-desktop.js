<script>
	if ( jQuery(window).width() > 1280) {
	    jQuery('[data-remodal-id=beforeyougo]').remodal();
		document.addEventListener('DOMContentLoaded', function(){
		    var _ouibounce = ouibounce(false, {
		        //aggressive: true,
		        sitewide: true,
		        timer: 0,
		        delay:700,
		        cookieName: 'beforeyougo',
		        cookieExpire: 10,
		        callback: function() {
		            jQuery ('.email-capture-trigger').click();
		            console.log('ouibounce fired');
		        }
		    });
		});
	}
</script>