
<section class="grid_content">
		<?php 
				query_posts('cat='.get_category_by_slug('story')->cat_ID.'&showposts=5&orderby=menu_order&order=ASC');
				$ctr = 0;
			?>
			
		<?php while(have_posts()): ?> 
			<?php the_post(); $ctr++; ?>
		  <?php echo $__env->make('partials.content-home-post-items', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php endwhile; ?>
		
</section>