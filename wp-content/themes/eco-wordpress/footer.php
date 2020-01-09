			<!-- footer -->
			<div id="scrollUp">
				<a href="#top"><img src="/Geopad/wp-content/uploads/2020/01/overlay.png"/></a>
			</div>
			<footer>
				<div class="footer_left">
					© 2020 Geopad - <a href="#">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a> | <a href="#">Contact</a>
				</div>
				<div class="footer_right">
					<a href="#">
						<div class="footer_img" style="background-image:url(/Geopad/wp-content/uploads/2020/01/icon_facebook.png)"></div>
					</a>
					<a href="#">
						<div class="footer_img" style="background-image:url(/Geopad/wp-content/uploads/2020/01/icon_twitter.png)"></div>
					</a>
					<a href="#">
						<div class="footer_img" style="background-image:url(/Geopad/wp-content/uploads/2020/01/icon_linked_in.png)"></div>
					</a>
				</div>
			</footer>
			<!-- /footer -->
		<!-- /wrapper -->
		<script type="text/javascript">
			document.getElementById('toggleSidebar').addEventListener('click', function(e){
				var nav_wrapper = document.getElementById('nav-wrapper');
				if(nav_wrapper.className == '') nav_wrapper.className = 'open';
				else nav_wrapper.className = '';
			});
		</script>
		<?php wp_footer(); ?>
		<script src="<?php echo get_template_directory_uri() ?>/js/viewer.js/viewer.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136040519-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-136040519-1');
		</script>
		<!-- Script bouton remonter page -->
		<script>
			jQuery(function(){
			$(function () {
			$(window).scroll(function () {
			if ($(this).scrollTop() > 300 ) { 
			$('#scrollUp').css('right','80px');
			} else { 
			$('#scrollUp').removeAttr( 'style' );
			}
			
			});
			});
			});
		</script>
			</div>
<div class="modal-wrapper">
  <div class="modal">
    <div class="head"> <a class="btn-close trigger" href="#"> <i class="fa fa-times" aria-hidden="true"></i> </a> </div>
    <div class="content">
		<form method="post" action="/geopad/wp-login/" id="loginform" name="loginform">
		<p>
		<input type="text" tabindex="10" size="20" value="" id="user_login" placeholder="Identifiant" class="form-control-login" name="log">
		</p>
		<p>
		<input type="password" tabindex="20" size="20" value="" id="user_pass" placeholder="Mot de passe" class="form-control-login" name="pwd">
		</p>
		<p>
		<input type="submit" tabindex="100" value="Connexion" id="wp-submit" class="btnLogin" name="wp-submit">
		<input type="hidden" value="http://example.com/" name="redirect_to">
		</p>
		<p>
		<a href="/wp-login.php?action=lostpassword">Mot de passe oublié</a>
		</p>
		</form>
    </div>
  </div>
</div> 
<script>
$( document ).ready(function() {
  $('.trigger').on('click', function() {
     $('.modal-wrapper').toggleClass('open');
    $('.page-wrapper').toggleClass('blur-it');
     return false;
  });
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</body>
</html>
