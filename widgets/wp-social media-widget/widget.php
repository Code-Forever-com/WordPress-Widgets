<style>
    .button::after{
    display: none;
}
.social-media-container{
    text-align: center;
    justify-content: center;
}
.button{
    color: white;
    margin: 0.2rem;
    font-size: 20px;
    padding: 8px 12px;
    border-radius: 10%;
}
.button:hover{
    color: white;
}
.btn-facebook{
    background-color: #3b5998;
    padding: 8px 15.5px;
}
.btn-facebook:hover{
    background-color: #2d4579;
}
.btn-twitter{
    background-color: #55acee;
}
.btn-twitter:hover{
    background-color: #448ac0;
}
.btn-linkedin{
    background-color: #0976b4;
    padding: 8px 12.5px;
}
.btn-linkedin:hover{
    background-color: #0b5c8b;
}
.btn-pinterest{
    background-color: #cc2127;
    padding: 8px 14px;
}
.btn-pinterest:hover{
    background-color: #991b1f;
}
.btn-tumblr{
    background-color: #35465c;
    padding: 8px 15.5px;
}
.btn-tumblr:hover{
    background-color: #202b38;
}
.btn-reddit{
    background-color: #ff4500;
    padding: 8px 11px;
}
.btn-reddit:hover{
    background-color: #ce3a04;
}
</style>
<div class="social-media-container my-2">
    <a target="_blank" class="button btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php
    the_permalink();
    echo "&amp;title=";
    the_title();
    ?>"><i class="fa fa-facebook"></i></a>
    <a target="_blank" class="button btn-twitter" href="http://twitter.com/share?url=<?php
    the_permalink();
    echo "&amp;text=";
    the_title();
    ?>"><i class="fa fa-twitter"></i></a>
    <a target="_blank" class="button btn-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php
    the_permalink();
    echo "&amp;title=";
    the_title();
    ?>"><i class="fa fa-linkedin"></i></a>
    <a target="_blank" class="button btn-pinterest" href="https://pinterest.com/pin/create/button/?url=<?php
    the_permalink();
    echo "&amp;description=";
    the_title();
    ?>"><i class="fa fa-pinterest-p"></i></a>
    <a target="_blank" class="button btn-tumblr" href="https://tumblr.com/share/link?url=<?php
    the_permalink();
    echo "&amp;name=";
    the_title();
    ?>"><i class="fa fa-tumblr"></i></a>
    <a target="_blank" class="button btn-reddit" href="https://www.reddit.com/submit?url=<?php
    the_permalink();
    ?>"><i class="fa fa-reddit-alien"></i></a>
</div>