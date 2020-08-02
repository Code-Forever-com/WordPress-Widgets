<?php if ( have_posts() ) : ?>
		
        <header class="page-header">
            <h1 class="page-title">
                "<?php echo get_search_query(); ?>" İle İlgili Sonuçlar
            </h1>
        </header><!-- .page-header -->
        
        <div class="search-results">
<ul class="search-results-list">
        <?php
        /* Start the Loop */
        while ( have_posts() ) :
            the_post();
?>
        
        <li class="search-results-list-item">
<div class="card">
    <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php the_excerpt(); ?></p>
        <a class="btn btn-info" href="<?php the_permalink(); ?>">Oku</a>
    </div>
</div>
</li>
        
<?php
        endwhile;

        the_posts_navigation();

    else :

        

    endif;
    ?>