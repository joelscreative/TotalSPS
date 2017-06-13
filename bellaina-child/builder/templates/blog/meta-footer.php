<?php
/**
 * Template part for displaying post meta in Blog module
 */
if ( ! $this->is_meta_visible() ) {
	return;
}
?>
<div class="tm_pb_post_meta"><?php

	if ( 'on' === $this->_var( 'show_comments' ) ) {
		echo '<span class="small"><i class="material-icons">chat_bubble_outline</i>';
		printf(
			esc_html(
				_nx( '1 Comment', '%s Comments', get_comments_number(), 'number of comments', 'bellaina' )
			),
			number_format_i18n( get_comments_number() )
		);
		echo '</span>';
	}
?></div>