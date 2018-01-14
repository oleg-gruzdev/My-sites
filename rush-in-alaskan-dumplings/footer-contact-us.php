<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rush_in_Alaskan_Dumplings
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer transparent-bgc">
	<div class="container clearfix">
		<div class="col-left pseudoelement"><span class="copyright">© 2017 Rush in Alaskan Dumplings LLC</span></div>
			<div class="col-right pseudoelement">
				<a href="#" class="social-link fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#" class="social-link in"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div>
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
</div>
<?php wp_footer(); ?>
<script type="text/javascript">

function initMap() {
  map = new google.maps.Map(document.getElementById('googleMap'), {
    center: {lat: 47.044856758395746, lng: -122.90014467202127},
    zoom: 17,
    disableDefaultUI: true,
    scrollwheel: true
    /*styles: styles*/
  });
  var marker = new google.maps.Marker({
    position: {lat: 47.044856758395746, lng: -122.90014467202127},
    map: map,
    /*title: 'Hello World!'*/
  });


var infowindow = new google.maps.InfoWindow({
    content: '<div id="siteNotice">'+'205 4th Avenue East'+'</div>',

  });
infowindow.open(map, marker);

}



    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj7LuzNOzM_S9k3fkNs30ELaphzKOKkHI&callback=initMap">
    </script>
</body>
</html>
