<section class="about-content">
    <div class="about-content-details text-center">
        <h2>The 30-year history of Habitat for Humanity Philippines is much like the story of the Filipino — it is a story of resilience.</h2>
        <p>The 30-year history of Habitat for Humanity Philippines<br>is much like the story of the Filipino — it is a story of resilience.</p>
        <div> <a href="/our-advocacy" class="btn btn-default">LEARN MORE</a></div>
    </div>
</section>
<section class="grid_content">
		<?php 
				query_posts('cat='.get_category_by_slug('advocacy-personality')->cat_ID.'&showposts=5&orderby=menu_order&order=ASC');
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
	<div class="row no-gutters d-flex">
			<div class="col-12 col-md-6 order-<?=($ctr%2==0?2:1)?>">
          <div class="content_image" style="background: url(<?=$image?>);background-size: cover;background-position: 0 -7px;background-repeat: no-repeat;"></div>
      </div>
      <div class="col-12 col-md-6 d-flex align-items-center order-<?=($ctr%2==0?2:1)?> order-md-<?=($ctr%2==0?1:2)?>">
          <div class="p-5 w-100">
              <div class="content_text">
                  <h2><?=get_the_title()?></h2>
                  <p><?=get_the_content()?></p>
                  <div class="m-43 text-right">
                      <a href="/get-in-touch" class="link-button">Donate Now  <span class="arrow"></span></a>
                  </div>
              </div>
          </div>
      </div>
	</div>

		@endwhile
		
</section>
<section class="find_more_container">
    <div class="find_cont">
        <p>Every Filipino deserves to have a decent home. <br>And every one of us can help make it happen.</p>
        <div class="text-center"> <button class="btn btn-default">FIND OUT MORE</button></div>

    </div>
</section>