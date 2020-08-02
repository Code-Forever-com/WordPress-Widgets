<span class="sidebar-title mt-3">Gallery</span>
<hr>
<div class="gallery-container">
    <?php 
        $images_url = cf_get_images_url(9);
        foreach($images_url as $image_url):
    ?>
    <div class="box">
        <a href="<?php bloginfo("url"); echo  "/". $image_url["name"]; ?>"><img class="img-fluid rounded" src="<?php echo $image_url["url"]; ?>"></a>
    </div>
    <?php
    endforeach;
    ?>
</div>
<script>
    let el = document.createElement("div");
    el.className = "box-cover";
    el.innerText = "<?php echo cf_get_images_count(); ?>";
        const g_con = document.querySelector(".gallery-container");
    g_con.lastElementChild.firstElementChild.appendChild(el);
</script>