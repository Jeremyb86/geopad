			<!-- footer -->
			<footer class="footer" role="contentinfo">

			</footer>
			<div class="after-footer">
				<p>© 2008 - 2019 Le Gâvre Portails - <a href="https://legavreportails.com/?page_id=361">Mentions légales</a></p>
			</div>
			<!-- /footer -->

		</div>
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
