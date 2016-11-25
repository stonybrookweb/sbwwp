<?php
/**
 * Template Name: Home Full width
 * Description: Displays blog posts with pagination and featured image.
 * @package Stony_Brook_Web
 */

get_header(); ?>

	<div class="container">


			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

        
         <?php  
	// Get Projects to display on home page
	$args = array(
			'posts_per_page'   => -1, // This shows all posts
			'offset'           => 0, 
			'category'         => '',
			'orderby'          => 'rand', //TODO: Decide how to order posts
			'order'            => 'rand',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'project',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true
			);
	// Gather projects into an arry
	$myposts = get_posts( $args );
	
	// Set up emptry array to add projects for html output
	
	$myprojects = array();
	
	// Loop through array
	
//	echo "<pre>";
//	echo print_r($myposts);
// echo "</pre>";
	
	$output .= '<div class="row">'; // TODO: wrap this in an if statement for every 3rd
	foreach ( $myposts as $post):
		setup_postdata( $post );
		
		$mytitle = ($post -> post_title);
		$mydescription = $post -> post_excerpt;
	
		$output .= '<article>';
		$output .= '<div class="col-md-4 col-xs-12">';
		
		$attr = array(
			'class' => 'img-responsive featured-work-image'
		);
		$output .= get_the_post_thumbnail( $post -> ID, 'full', $attr);
		
		$output .= '<div class="featured-work-text-area">';
		$output .= '<h3 class="text-center">' . $mytitle . '</h3>';
		$output .= '<p class="featured-work-description">' . $mydescription . '</p>';
		$output .= '</div>'; 
 		
		$output .= '</div>';
		$output .= '</article>';

	endforeach;
	
	$output .= '</div>'; // TODO: wrap this in an if statement for every 3rd
	echo $output;
?>

        
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
