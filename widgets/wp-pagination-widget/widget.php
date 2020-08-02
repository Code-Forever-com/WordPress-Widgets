         
<?php
    the_posts_pagination(
        array(
            'prev_text'          => '',
            'next_text'          => '',
            'before_page_number' => '<span class="page-number">',
            'after_page_number' => '</span>',
        )
    );
?>
<script>
    <?php
        echo "let cur_page_url = '";
        bloginfo("url");
        echo "';";
    ?>
    var url = location.href;
    url = url.split("/");
    let page_number;
    if( location.href.slice(0,-1) == cur_page_url ){
    page_number = 1;
    }else{
    page_number = url[url.length - 2];
    }
    let pages = document.querySelectorAll(".page-number");
    for(var i = 0;i<pages.length;i++){
        if(pages[i].innerText == page_number){
            pages[i].className += " current-page";
        }
    }
</script>