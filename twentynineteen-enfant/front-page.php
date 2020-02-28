
<?php
/**
 * The template for displaying front page
 *
 * @package Astral
 * @since 0.1
 */
get_header();
if ( get_option( 'show_on_front' ) == 'page' ) {
	$astral_frontpage_show = get_theme_mod( 'astral_frontpage_show' );
	if ( $astral_frontpage_show ) {
		get_template_part( 'content', 'frontpage' );
	} else {
		get_template_part( 'index' );
	}
} else {
	get_template_part( 'index' );
}
////////////////////NOUVELLE
echo "<h2>" . category_description(get_category_by_slug('nouvelle')) . "</h2>";




$args = array(
    "category_name" => "nouvelle",
    "posts_per_page" => 3
);
$query1 = new WP_Query( $args );
// The Loop
while ( $query1->have_posts() ) {
    $query1->the_post();
    echo "<h2>" . get_the_title(). "</h2>";
    echo "<p>" . get_the_excerpt() . "</p>";
}
/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset with 
 * wp_reset_query(). We just need to set the post data back up with
 * wp_reset_postdata().
 */
wp_reset_postdata();

 
 /*The 2nd Query (without global var) */
 echo "<h2>" . category_description(get_category_by_slug('evenement')) . "</h2>";
 $args2 = array(
    "category_name" => "evenement",
    "posts_per_page" => 10
 );
$query2 = new WP_Query( $args2 );
 
// The 2nd Loop
while ( $query2->have_posts() ) {
    $query2->the_post();
    echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
    //echo "<p>" .  ."</p>";
}
 
// Restore original Post Data
wp_reset_postdata();

get_footer();
// The Query

?>
 