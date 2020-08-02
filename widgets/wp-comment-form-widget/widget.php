<?php
//comment form begin
//Declare Vars
$comment_send = 'Send';
$comment_reply = 'Leave a Message';
$comment_reply_to = 'Reply';
 
$comment_author = 'Name';
$comment_email = 'E-Mail';
$comment_body = 'Comment';
$comment_url = 'Website';
$comment_cookies_1 = ' By commenting you accept the';
$comment_cookies_2 = ' Privacy Policy';
 
$comment_before = 'Registration isn\'t required.';
 
$comment_cancel = 'Cancel Reply';
 
//Array
$comments_args = array(
    //Define Fields
    'fields' => array(
        //Author field
        'author' => '<p class="comment-form-author form-inline"><label for="author" class="mr-2">Name:</label><input class="form-control" id="author" name="author" aria-required="true" placeholder="' . $comment_author .'"></input></p>',
        //Email Field
        'email' => '<p class="comment-form-email form-inline"><label for="email" class="mr-2">Email</label><br /><input class="form-control" id="email" name="email" placeholder="' . $comment_email .'"></input></p>',
        //URL Field
        'url' => '<p class="comment-form-url form-inline"><label for="url" class="mr-2">Website</label><input class="form-control" id="url" name="url" placeholder="' . $comment_url .'"></input></p>',
        //Cookies
        'cookies' => '<input type="checkbox" required>' . $comment_cookies_1 . '<a href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a>',
    ),
    // Change the title of send button
    'label_submit' => __( $comment_send ),
    // Change the title of the reply section
    'title_reply' => __( $comment_reply ),
    // Change the title of the reply section
    'title_reply_to' => __( $comment_reply_to ),
    //Cancel Reply Text
    'cancel_reply_link' => __( $comment_cancel ),
    // Redefine your own textarea (the comment body).
    'comment_field' => '<p class="comment-form-comment"><br /><textarea class="form-control" id="comment" name="comment" aria-required="true" placeholder="' . $comment_body .'"></textarea></p>',
    //Message Before Comment
    'comment_notes_before' => __( $comment_before),
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
    //Submit Button ID
    'id_submit' => __( 'comment-submit' ),
	'class_submit' => 'btn btn-info'
);
comment_form( $comments_args );
//comment form end
?>