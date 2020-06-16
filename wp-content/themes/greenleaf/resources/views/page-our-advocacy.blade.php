@extends('layouts.app')

@section('content')
	<div class="main_container advocacy">
		<div class="overlay"></div>
  	<section class="advocacy-content">
        <div class="advocacy-content-details text-center">
            <h2><?=get_the_title()?></h2>
            <p><?=(!empty($post->post_content)?$post->post_content:'')?></p>
        </div>
    </section>
    <section class="list-advo pt-3 pb-5">
        <div class="container">
            <div class="row">
            	<?php 
									query_posts('cat='.get_category_by_slug('advocacy')->cat_ID.'&showposts=5&orderby=menu_order&order=ASC');
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
								<div class="col-12 col-md-6 mb-5">
                    <img src="<?=$image?>" width="50px" style="display: block;margin-bottom: 30px;">
                    <h3><?=get_the_title()?></h3>
                    <p><?=get_the_content()?></p>
                </div>

							@endwhile
            </div>
        </div>
    </section>
    <section class="advo_more_container">
	      <div class="advo_cont">
	          <h2>WANT TO KNOW MORE?</h2>
	          <p>Every Filipino deserves to have a decent home. <br>And every one of us can help make it happen.</p>
	          <div class="text-center"> <button class="btn btn-default">GET IN TOUCH</button></div>
	      </div>
	  </section>
	</div>
@endsection
