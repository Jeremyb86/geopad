			<!-- footer -->
			<footer>
				<div class="footer_left">
					© 2020 Geopad - <a href="#">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a> | <a href="#">Contact</a>
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
	</body>
</html>
