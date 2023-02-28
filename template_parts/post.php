<article>

	<a href="<?php the_permalink(); ?>">
		<div class="post_item">
			<div class="post_comment_area">
				<?php comments_number('0', '1', '%'); ?>
			</div>
			<div class="post_info">
				<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail('medium', array('class'=>'post_thumb')); ?>
				<?php endif; ?>

				<div class="post_data"><?php echo get_the_date(); ?></div>

				<div class="post_title"><?php the_title(); ?></div>

				<div class="post_excerpt"><?php the_excerpt(); ?></div>

			</div>
		</div>
	</a>
</article>