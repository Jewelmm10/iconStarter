<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to media_center_comment() which is
 * located in the functions.php file.
 */


/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

if( have_comments() ):
?>

<div class="section-header">
    <h3 class="section-title">
        <span>
            <?php
			printf( 
				_n( 
					'1 Comment', 'Comments (%1$s)', 
					get_comments_number(), 'mugdho' ),
					number_format_i18n( get_comments_number() )
				);
		?>
        </span>
    </h3>
</div>
<div class="comments bordered padding-30 rounded">
    <ul class="comments">
        <?php wp_list_comments( [
			'avatar_size' => 70,
			'callback'	  => 'iconstarter_comment',
		] ); ?>
    </ul>
</div>

<?php endif;

// If comments are closed and there are comments, let's leave a little note, shall we?
if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'ecommerce-plus' ); ?></p>
<?php
endif;




/**
 * Custom callback for outputting comments
 *
 */
function iconstarter_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;

    if (!empty($comment->comment_author_email)) {
        $auth_email = $comment->comment_author_email;
    } else {
        $auth_email = '';
    }
    $date_unix = @strtotime("{$comment->comment_date_gmt} GMT");

	?>
<li class="icon_comment" id="comment-<?php comment_ID() ?>">
    <article>
        <footer>
            <?php echo get_avatar($auth_email, 50) ?>
            <cite><?php comment_author_link() ?></cite>
            <a class="comment-link" href="#comment-<?php comment_ID() ?>">
                <time pubdate="<?php echo esc_attr( $date_unix ) ?>">
                    <?php comment_date() ?>
                    <?php echo esc_html__('At', 'iconstarter'); ?>
                    <?php comment_time() ?></time>
            </a>
            <?php edit_comment_link( esc_html__('Edit', 'iconstarter')) ?>
        </footer>

        <div class="comment-content tagdiv-type">
            <?php if ($comment->comment_approved == '0') { ?>
            <em><?php echo esc_html__('Your comment is awaiting moderation', 'iconstarter'); ?></em>
            <?php }
                    comment_text(); ?>
        </div>

        <div class="comment-meta" id="comment-<?php comment_ID() ?>">
            <?php comment_reply_link(array_merge( $args, array(
                        'depth' => $depth,
                        'max_depth' => $args['max_depth'],
                        'reply_text' => esc_html__('Reply', 'iconstarter'),
                        'login_text' =>  esc_html__('Log in to leave a comment', 'iconstarter')
                    )))
                    ?>
        </div>
    </article>
    <?php
}
?>

    <?php
// Declare Variables
$comment_send     = 'Post Comment';
$comment_reply    = 'Leave a Reply';
$comment_reply_to = 'Reply';

$comment_author = 'Name*';
$comment_email  = 'Email*';
$comment_body   = 'Comment:';

$comment_before = 'Your email address will not be published. Required fields are marked *';
$comment_cancel = 'Cancel Reply';

// Array for fields
$fields = array(
    // Author field
    'author' => '<div class="comment-form-input-wrap">
                    <input type="text" id="author" name="author" required 
                    placeholder="' . esc_attr($comment_author) . '" />
                 </div>',
    // Email Field
    'email' => '<div class="comment-form-input-wrap">
                    <input type="email" id="email" name="email" required 
                    placeholder="' . esc_attr($comment_email) . '" />
                </div>',
    'cookies' => '',
);

// Arguments for comment form
$args = array(
    'fields'                => $fields,
    'comment_field'         => '<div class="comment-form-input-wrap">
                                    <textarea id="comment" name="comment" 
                                    rows="5"
                                    placeholder="' . esc_attr($comment_body) .'"></textarea>
                                </div>',
    'class_form'            => 'row g-4',
    'title_reply'           => '<h3>' . esc_html($comment_reply) . '</h3>',
    'comment_notes_before'  => '<p></p>',
    'class_submit'          => 'comment-submit',
    'submit_button'         => '<button name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />
								<span class="get__text">%4$s</span></button>',
    'label_submit'          => __( $comment_send ),
    'title_reply'           => __( $comment_reply ),
    'title_reply_to'        => __( $comment_reply_to ),
    'cancel_reply_link'     => __( $comment_cancel ),
    
);

?>

    <div class="replay__box">
        <?php comment_form($args); ?>
    </div>