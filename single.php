<?php get_header(); ?>

<section>

	<div class="container">
		<div class="row">
			<div id="<?php the_ID(); ?>" <?php post_class('col-sm-8 maincontent'); ?>>
				<?php if(have_posts()): ?>
					<?php while(have_posts()): ?>
						<?php the_post(); ?>

							<div class="post_tumbnail"><?php the_post_thumbnail(); ?></div>

							<div class="post_title post_title_single"><?php the_title(); ?></div>

							<div class="post_data"><?php echo get_the_date(); ?></div>

							<div class="post_content"><?php the_content(); ?></div>
								

					<?php endwhile; ?>

					<div class="pag">
						<div class="previous_pag"><?php previous_post_link(); ?></div>
						<div class="next_pag"><?php next_post_link(); ?></div>
						<div style="clear:both"></div>
					</div>

					<div class="comments_area">
						<?php
						if(comments_open()) {
							comments_template();
						}
						?>
					</div>

				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>

</section>

<?php get_footer(); ?>