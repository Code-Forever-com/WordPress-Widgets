<div class="comment-container">
    <div class="comment-header">
        Yazı İle İlgili Yorumlar
    </div>
    <ul class="comment-list">
	<?php
        $comments = get_comments(array('post_id' => $postid,'order'=>'ASC'));
        foreach ( $comments as $comment ) :
	?>
        <li class="comment-list-box">
            <div class="comment-info">
                <?php 
                    $author_email = get_comment_author_email($comment->comment_ID); 
                    $avatar_uri = get_avatar_url($author_email);
                ?>
                <img src="<?php echo $avatar_uri; ?>" alt="user">
                <span class="user"><?php echo $comment->comment_author; ?></span>
                <span class="datetime"> <?php echo $comment->comment_date; ?></span>
            </div>
            <div class="comment">
                <?php echo $comment->comment_content; ?>
            </div>
            <!--
            <div class="options">
                <a href="">Cevapla</a>
            </div>
            -->
        </li>
        <?php endforeach; ?>
    </ul>
</div>