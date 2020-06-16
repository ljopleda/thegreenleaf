
<section class="grid_content">
		<?php 
				query_posts('cat='.get_category_by_slug('story')->cat_ID.'&showposts=5&orderby=menu_order&order=ASC');
				$ctr = 0;
			?>
			
		@while (have_posts()) 
			@php the_post(); $ctr++; @endphp
		  @include('partials.content-home-post-items')
		@endwhile
		
</section>