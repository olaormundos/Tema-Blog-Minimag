
<footer>
	<div class="footer_widgets">
		<div class="row">
			<?php
			if(is_active_sidebar('olm_footersidebar')) {
				dynamic_sidebar('olm_footersidebar');
			}
			?>
		</div>
	</div>
	<div class="mainfooter">
		<div class="mainfooter_left">
			Todos os direitos reservados. - 
			<?php if(get_theme_mod( 'olm_privacy_url' )): ?>
				<a href="<?php the_permalink( get_theme_mod( 'olm_privacy_url' )); ?>">Política de Privacidade</a>
			<?php endif; ?>	
		</div>
		<div class="mainfooter_right">
			Criado por XYZ
		</div>
		<div class="mainfooter_scroll">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-up.png" />
		</div>
	</div>
</footer>
<script type="text/javascript">
	var ajaxUrl ="<?php echo admin_url('admin-ajax.php'); ?>";
</script>
<?php wp_footer(); ?>
</body>
</html>