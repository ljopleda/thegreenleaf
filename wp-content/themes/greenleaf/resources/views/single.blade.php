@extends('layouts.app')

@section('content')
<?php 
$category = get_category_by_slug('post')->cat_ID;

$same_category = new WP_Query(array(
    'cat'            => $category,
    'post__not_in'   => array($post->ID),
    'orderby'        => 'rand',
    'posts_per_page' => 5
));

		$image = '';
		if (has_post_thumbnail( get_the_ID() ) ){
			$image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); 
		}
	?>
	<div class="main_container post-page pt-5">
	    <div class="overlay"></div>

	    <section class="">
	        <div class="row no-gutters">
	            <div class="col-12 col-md-6 order-5">
	                <div class="content_image" style="background: url(<?=$image?>);background-size: cover;background-position: center top;background-repeat: no-repeat;"></div>
	            </div>
	            <div class="col-12 col-md-6 d-flex align-items-center order-6">
	                <div class="p-5 w-100">
	                    <div class="content_text">
	                        <h2><?=get_the_title()?></h2>
	                        <p><?=(!empty($post->post_content)?$post->post_content:'')?></p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <section class="related_story">
	        <div class="container-fluid pt-5 pb-5">
	            <hr>
	            <h3>Other Stories</h3>
	            <div class="row mt-3">
	            	<?php while ( $same_category->have_posts() ) : $same_category->the_post(); ?>
								    <?php
								    	$image = '';
											if (has_post_thumbnail( get_the_ID() ) ){
												$image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); 
											}
								    ?>
								    <div class="col-6 col-md-4 col-lg-3">
	                    <div class="other_stories_container">
	                        <a href="<?php the_permalink(); ?>">
	                            <div class="img_container">
	                                <div class="related_image" style="background: url(<?=$image?>);background-size: cover;background-position: center top;background-repeat: no-repeat;"></div>
	                            </div>
	                            <h5><?php the_title(); ?></h5>
	                            <p><?php the_excerpt(); ?></p>
	                        </a>
	                    </div>
	                </div>
								<?php endwhile; ?>
	            </div>
	        </div>

	    </section>
	</div>
@endsection
