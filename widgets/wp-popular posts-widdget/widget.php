<div class="popular-posts-container">
    <hr class="popular-posts-hr">
    <span class="popular-posts-title">Popular Posts</span>
    <hr class="popular-posts-hr">
    <div class="popular-posts-box">
        <ul class="popular-posts-list">
            <?php 
                global $post;

                $args = array(
                    'orderby' => 'comment_count',
                    'order' => 'DESC',
                    'posts_per_page' => 5
                );
                $posts = get_posts($args);
                if( $posts ){
                    foreach ($posts as $post):
                        setup_postdata( $post );
            ?>
                    <a href="<?php the_permalink(); ?>">
                        <li class="popular-posts-list-item">
                        <?php the_post_thumbnail(); ?>
                            <div class="list-item-text">
                                <span class="list-item-title"><?php the_title(); ?></span>
                                <span class="list-item-date"><?php echo get_post_date(); ?></span>
                            </div>
                        </li>
                    </a>
            <?php
                    endforeach;
                }else{
            ?>
                <li class="alert alert-warning">Yazı Yok!</li>
            <?php
                }
            ?>
        </ul>
    </div>
    <hr class="popular-posts-hr">
</div>