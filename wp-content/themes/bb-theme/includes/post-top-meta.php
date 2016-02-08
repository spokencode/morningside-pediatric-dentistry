<?php

// Wrapper
if($show_author || $show_date || $comments) {
	
	echo '<div class="fl-post-meta fl-post-meta-top">';
	
	do_action( 'fl_post_top_meta_open' );
}

// Author
if ( $show_author ) {
	echo '<span class="fl-post-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">';
	printf( _x( 'By %s', 'Post meta info: author.', 'fl-automator' ), '<a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" itemprop="url"><span itemprop="name">' . get_the_author_meta( 'display_name', get_the_author_meta( 'ID' ) ) . '</span></a>' );
	echo '</span>';
}

// Date
if($show_date) {

	if($show_author) {
		echo '<span class="fl-sep"> | </span>';
	}

	echo '<span class="fl-post-date" itemprop="datePublished" datetime="' . get_the_time('Y-m-d') . '">' . get_the_date() . '</span>';
}

// Comments
if($comments) {

	if($show_author || $show_date) {
		echo '<span class="fl-sep"> | </span>';
	}

	echo '<span class="fl-comments-popup-link">';
	comments_popup_link('0 <i class="fa fa-comment"></i>', '1 <i class="fa fa-comment"></i>', '% <i class="fa fa-comment"></i>');
	echo '</span>';
}

// Close Wrapper
if($show_author || $show_date || $comments) {
	
	do_action( 'fl_post_top_meta_close' );
	
	echo '</div>';
}

// Scheme Image Meta
if(has_post_thumbnail()) {
	echo '<meta itemprop="image" content="' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '">';
}

// Scheme Comment Meta
$comment_count = wp_count_comments($post->ID);

echo '<meta itemprop="interactionCount" content="UserComments:' . $comment_count->approved . '">';