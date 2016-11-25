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

				// the_content();
		
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
	
	//echo "<pre>";
	//echo print_r($myposts);
 	//echo "</pre>";
	
	$output .= '<div class="row">'; // TODO: wrap this in an if statement for every 3rd
	foreach ( $myposts as $post):
		setup_postdata( $post );
		
		$myurl = get_permalink($post -> ID);
		$mytitle = ($post -> post_title);
		$mydescription = $post -> post_excerpt;
	
		$output .= '<article>';
		$output .= '<div class="col-md-4 col-xs-12">';
		
		$output .= '<a href="' . $myurl . '">';
		$attr = array(
			'class' => 'img-responsive featured-work-image'
		);
		$output .= get_the_post_thumbnail( $post -> ID, 'full', $attr);
		$output .= '</a>';
		
		$output .= '<div class="featured-work-text-area">';
		$output .= '<h3 class="text-center"><a href="' . $myurl . '">' . $mytitle . '</a>' . '</h3>';
		$output .= '<p class="featured-work-description">' . $mydescription . '</p>';
		$output .= '</div>'; 
 		
		$output .= '</div>';
		$output .= '</article>';

	endforeach;
	?>
	<div class="row">
        <div class="col-xs-12">
            <h2 class="featured-work-title">Featured Work</h2>
        </div>
    </div>
      
	<?php 
	$output .= '</div>'; // TODO: wrap this in an if statement for every 3rd
	echo $output;
?>

        
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
