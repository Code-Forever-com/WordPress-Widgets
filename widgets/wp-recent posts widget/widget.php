<div class="recent-posts-container">
    <hr class="recent-posts-hr">
    <span class="recent-posts-title">Recent Posts</span>
    <hr class="recent-posts-hr">
    <div class="recent-posts-box">
    <?php 
        global $post;
        $posts = get_posts( array( 
            'posts_per_page' =>5,
            'sort_order' => 'asc'
        )); 
    ?>
        <ul class="recent-posts-list">
    <?php
        if ( $posts ) {
            foreach ( $posts as $post ) : 
                setup_postdata( $post );
    ?>
            <a href="<?php the_permalink(); ?>">
                <li class="recent-posts-list-item">
                    <?php the_post_thumbnail(); ?>
                    <div class="list-item-text">
                        <span class="list-item-title"><?php the_title(); ?></span>
                        <span class="list-item-date"><?php echo get_the_date(); ?></span>
                    </div>
                </li>
            </a>
    <?php
        endforeach;
        wp_reset_postdata();
        }else{
    ?>
            <li class="alert alert-warning">
                Yazı Bulunamadı.
            </li>
    <?php 
        }
    ?>
        </ul>
    </div>
    <hr class="recent-posts-hr">
</div>