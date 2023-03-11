<?php get_header(); ?>

<section>

	<div class="container">
		<div class="row">
			<div class="col-sm-8 maincontent">
				<?php if(have_posts()): ?>
					<div class="postscontents">
						<?php while(have_posts()): ?>
							<?php the_post(); ?>
							<?php get_template_part('template_parts/post'); ?>
						<?php endwhile; ?>
					</div>
					<div style="clear:both"></div>
					<div class="pag">
						<div class="loadmoreButton">
							Carregar mais
						</div>
						<!--<?php
							/*global $wp_query;
							echo paginate_links(array(
								'current'            => max(1, get_query_var('paged')),
								'total'              => $wp_query->max_num_pages,
								'prev_text'          => 'Anterior',
								'next_text'          => 'Próxima',
								'before_page_number' => '[',
								'after_page_number'  => ']',
							));*/
						?>-->
						<div style="clear:both"></div>
					</div>

				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>

</section>

<?php get_footer(); ?>