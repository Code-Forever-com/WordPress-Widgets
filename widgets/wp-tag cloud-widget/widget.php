<hr>
<div class="text-center">
    Tag Cloud 
</div>
<hr>
<?php 
    $tags = get_tags();
?>
<div class="wg-container">
    <?php 
        foreach ($tags as $tag) {
    ?>
    <a class="wg-cloud-item" href="<?php bloginfo('url') ?>/tag/<?php echo $tag->slug; ?>" data-count="<?php echo $tag->count; ?>"><?php echo $tag->name; ?>(<?php echo $tag->count; ?>)</a>
 <?php 
        }
 ?>
</div>