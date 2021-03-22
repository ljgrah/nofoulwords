<?php
/*
Plugin Name: No Foul Words
Plugin URI:  https://madeuppage123456.com
Description: Foul words are replaced with positivity
Version:     1.0
Author:      Lynn Graham
Author URI:  https://madeuppage123456.com
License URI: https://madeuppage123456.com
*/


function nofoulwords_content_replace( $content ) {
	$search  = array( 'fuck', 'shit', 'dumbass', 'idiot' );
	$replace = array( 'fox', 'tea', 'pretty horse', 'lovely dog' );
	return str_replace( $search, $replace, $content );
}
add_filter( 'the_content', 'nofoulwords_content_replace' );
add_filter( 'the_title', 'nofoulwords_content_replace' );
add_filter( 'comment_text', 'nofoulwords_content_replace' );

function nofoulwords_content_footer_note( $content ) {
	$content .= '<footer class="nofoulwords-content-footer">Thank you for not swearing!</footer>';
	return $content;
}
add_filter( 'the_content', 'nofoulwords_content_footer_note' );


?>