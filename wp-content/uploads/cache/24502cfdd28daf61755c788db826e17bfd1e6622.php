
    	<div class="overlay"></div>
    	<section class="banner_container">
          <div class="image_banner" style="background: url(/wp-content/themes/greenleaf/resources/assets/images/globe_header.svg);background-size: contain;background-position: center;background-repeat: no-repeat;"></div>   
      </section>
    	<section class="slider_container">
    		<div class="container text-center p-3">
    			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				  	<?php 
							query_posts('cat='.get_category_by_slug('home-slider')->cat_ID.'&showposts=3&orderby=menu_order&order=ASC');
							$sliderCtr = 0;
						?>
				  	<?php while(have_posts()): ?> 
							<?php the_post(); $sliderCtr++; ?>
						  <div class="carousel-item <?=($sliderCtr==1?'active':'')?>">
								<div class="carousel-item active">
						      <h2><?=get_the_title()?></h2>
					    		<p><?=get_the_content()?></p>
					    		<div> <a href="/our-advocacy" class="btn btn-default">LEARN MORE</a></div>
						    </div>
					    </div>
						<?php endwhile; ?>
				  </div>
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				</div>
    		</div>
    	</section>
    	<!-- 
    	<section class="partners_container">
    		<div class="partner_cont">
    			<h2>Our Partners</h2>
    			<p>Various individuals and groups have helped pave the way to strengthen communities, build safer and decent homes, and transform the lives of families living in them.</p>
    			<ul>
    				<li><img src="resources/images/am.svg"></li>
    				<li><img src="resources/images/google.svg"></li>
    				<li><img src="resources/images/paypal.svg"></li>
    				<li><img src="resources/images/amazon.svg"></li>
    				<li><img src="resources/images/ebay.svg"></li>
    			</ul>
	    		<div class="text-center"> <button class="btn btn-black">VIEW MORE</button></div>

    		</div>
    	</section> -->
