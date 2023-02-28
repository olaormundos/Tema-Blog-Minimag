<?php get_header(); ?>

<section>

	<div class="container">
		<div class="row">
			<div class="col-sm-8 maincontent">

				<h1>Pesquisou por: <?php echo get_search_query(); ?></h1>

				<?php if(have_posts()): ?>
					<?php while(have_posts()): ?>
						<?php the_post(); ?>

						<?php get_template_part('template_parts/post'); ?>

					<?php endwhile; ?>

					<div class="pag">
						<div class="previous_pag"><?php previous_posts_link('Página Anterior'); ?></div>
						<div class="next_pag"><?php next_posts_link('Próxima Página'); ?></div>
						<div style="clear:both"></div>
					</div>

				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>

</section>

<?php get_footer(); ?>