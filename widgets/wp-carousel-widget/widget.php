<div class="container-fluid" id="cf">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<?php
			$active = "active";
			if(have_posts()):
				while(have_posts()):
					the_post();
					echo "<div class='carousel-item " . $active . "'>";
			?>
			<img height="auto" width="100%" src="<?php echo get_the_post_thumbnail_url(); ?>">
				<div class="carousel-caption"><?php the_title(); ?></div>
		</div>
			<?php
				$active = "";
				wp_reset_postdata();
				endwhile;		
				endif;      
			?>
	</div>
		
	<span class="text-right mr-4 d-none d-md-block">
		<a class="rounded-circle text-white arrow-left" href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="rounded-circle text-white arrow-right" href="#carouselExampleIndicators" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>   
	</span>
</div>