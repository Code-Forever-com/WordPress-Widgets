<div class="container">
         <?php
            global $post;
            
			$posts = get_posts( array(
				'numberposts' =>6, 
				'orderby' => 'rand', 
				'order' => 'ASC',

			));
                if ( $posts ){

            ?>
            <div class="related-post-title">
        <span>
            <strong>YOU MIGHT ALSO LIKE...</strong>
        </span>
        <hr class="related-post-hr" align="left">
    </div>
    <div class="related-post-container">
            
            <?php
	           foreach ( $posts as $post ) : 
		setup_postdata( $post );
                
            ?>
        <div class="related-post-box">
            <a href="<?php the_permalink(); ?>" id="box-container-<?php get_the_ID(); ?>">
                <?php the_post_thumbnail(); ?>
                <span class="box-title"><?php the_title(); ?></span>
            </a>
        </div>
        <?php
            
                endforeach;
				wp_reset_postdata();
        ?>
    </div>
    <?php
            }else{
        ?>
        <div class="alert alert-warning">
                Yazı Bulunamadı.
        </div>
            <?php } ?>
</div>