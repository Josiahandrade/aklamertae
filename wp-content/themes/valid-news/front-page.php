<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Valid News
 */

get_header();

// Call home.php if Homepage setting is set to latest posts.
if ( fact_news_is_latest_posts() ) {

	require get_home_template();

} elseif ( fact_news_is_frontpage() ) {

	$sorted_sections = array( 'breaking-news', 'banner', 'recent-posts', 'below-banner-primary-seconday-widgets-area', 'above-footer-widgets-area');

	foreach ( $sorted_sections as $sorted_section ) {
		if ( in_array( $sorted_section, array( 'breaking-news', 'banner', 'recent-posts' ) ) ) {
			require get_theme_file_path() . '/inc/frontpage-sections/' . $sorted_section . '.php';
		} else {
			require get_template_directory() . '/inc/frontpage-sections/' . $sorted_section . '.php';
		}
	}
}

get_footer();
