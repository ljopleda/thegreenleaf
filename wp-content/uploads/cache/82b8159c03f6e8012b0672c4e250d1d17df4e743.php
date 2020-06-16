	<div class="row no-gutters d-flex">

<?php 
			$image = '';
			if (has_post_thumbnail( get_the_ID() ) ){
				$image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); 
			}
			$url = get_the_permalink();
			$buttonText = 'READ MORE';
			if(!strcasecmp(get_the_title(), 'BUILD WITH US')){
				$url = '/get-in-touch/';
				$buttonText = 'START BUILDING';
			}
		?>
	<div class="col-12 col-md-6 order-<?=($ctr%2==0?2:1)?>">
		<div class="content_image" style="background: url(<?=$image?>);background-size: cover;background-position: center top;background-repeat: no-repeat;"></div>
	</div>
	<div class="col-12 col-md-6 d-flex align-items-center order-<?=($ctr%2==0?2:1)?> order-md-<?=($ctr%2==0?1:2)?>">
		<div class="p-5 w-100">
			<div class="content_text">
				<h2><?=get_the_title()?></h2>
				<p><?=get_the_excerpt()?></p>
				<div class="m-43 text-right">
					<a href="<?=$url?>" class="link-button"><?=$buttonText?>  <span class="arrow"></span></a>
				</div>
			</div>
		</div>
	</div>
	</div>
