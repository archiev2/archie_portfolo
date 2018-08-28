<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-progressbar/0.9.0/bootstrap-progressbar.js"></script>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCB99MPtjf5xz738qKTwodGmuKxXHy0cA&callback=initMap"></script>
<?php
	// js("arcma_script.js");
	// js("nprogress.js");
?>
<script>
	function initMap() {
	var uluru = {lat: 10.788335, lng: 122.975938};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 16,
		center: uluru,
		scrollwheel: false,
	});
	var marker = new google.maps.Marker({
		position: uluru,
		map: map
		});
	}

</script>
  
  
<script type="text/javascript">
	$(document).ready(function(){
		scrollPosition();
		$(window).on( 'scroll', function(){
			scrollPosition();
		});

		$("#top_menu a").on('click', function(event) {
			if (this.hash !== "") {
				event.preventDefault();

				// Store hash
				var hash = this.hash;

				// selected
				$("#top_menu .active").removeClass("active");
				$(this).parent().addClass("active");
				
				$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 700, function(){
					window.location.hash = hash;
				});
			}
		});

	});
	function scrollPosition(){
		var screen_position =  $(document).scrollTop();
		$('#top_menu a').each(function () {
			var sector = $(this);
			var sector_id = $(sector.attr("href"));
			var section_offset = sector_id.offset();

			if (section_offset === undefined || section_offset === null) {

			}else{
				if(section_offset.top <= screen_position && section_offset.top + sector_id.height() + 120 > screen_position) {
					$('#top_menu .active').removeClass("active");
					sector.parent().addClass("active");
					
				}
			}
		});
		
		// for navbar

		var home_height = $('#Home').height();
		if( screen_position > (home_height + 10) ){
			$("#navbar_container").addClass("navbar_fix");
			$("#arc_navbar").addClass("navbar_static");
		}else{
			$("#navbar_container").removeClass("navbar_fix");
			$("#arc_navbar").removeClass("navbar_static");
		}
		
	}
</script>
<script>
	/* $(function() {
		$('#progressbar').progressbar();
		$pVal = $('.ui-progressbar-value').addClass('ui-corner-right');
		var pGress = setInterval(function() {
			var pCnt = $pVal.width();

			var rDom = Math.floor(Math.random() * (100 - 50 + 1) + 50);
			var step = rDom >= 100 ? 100 : rDom;
			doAnim(step);
		}, 1000);
		var doAnim = function(wD) {
			$pVal.stop(true).animate({
				width : wD + '%'
			}, 1000, 'easeOutBounce');
			if (wD >= 100)
				clearInterval(pGress)
		}
	});
	 */

</script>
<style>

</style>



  