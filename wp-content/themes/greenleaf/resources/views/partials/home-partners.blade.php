	<section class="partners_container">
		<div class="partner_cont">
			<h2>Our Partners</h2>
			<p>Various individuals and groups have helped pave the way to strengthen communities, build safer and decent homes, and transform the lives of families living in them.</p>
			<ul class="p-0">
				<?php 
					query_posts('cat='.get_category_by_slug('partners')->cat_ID.'&showposts=5&orderby=menu_order&order=ASC');
					$ctr = 0;
				?>
				
				@while (have_posts()) 
					@php the_post(); $ctr++; @endphp
					<?php 
						$image = '';
						if (has_post_thumbnail( get_the_ID() ) ){
							$image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); 
						}
					?>
					<li>
						<img src="<?=$image?>" alt="<?=get_the_title()?>" class="img-fluid">
					</li>
				@endwhile
			</ul>
  		<div class="text-center"> <button class="btn btn-black">VIEW MORE</button></div>

		</div>
	</section> 