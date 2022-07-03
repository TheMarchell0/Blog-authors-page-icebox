<?php

/* LOAD MORE */

function my_load_more_scripts() {
 
	global $wp_query; 
	// register our main script but do not enqueue it yet
	wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/js/load-more.js', array('jquery') );
 
	// now the most interesting part
	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script( 'my_loadmore', ' loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'my_loadmore' );
}
 
add_action( 'wp_enqueue_scripts', 'my_load_more_scripts' );


function loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
 
	// it is always better to use WP_Query but not here
	query_posts( $args );
 
	if( have_posts() ) :
 
		// run the loop
		while( have_posts() ): the_post();
 
    ?>
    <li class="posts__item">
      <a class="posts__item-link" href="<?php the_permalink(); ?>">
        <div class="posts__img-wrapper">
          <?php the_post_thumbnail('post-thumbnail', array('class'=>'posts__img')); ?>
        </div>
        <div class="posts__wrapper">
          <time class="posts__item-text" datetime="<?php the_time('Y-m-d') ?>">
            <?php the_time('F j, Y'); ?>
          </time>
          <h3 class="posts__item-title posts__item-title--mvp">
            <?php the_title(); ?>
          </h3>
          <p class="posts__item-more-text">
            <?php _e('Read more', 'blog') ?>
          </p>
        </div>
      </a>
    </li>
  <?php
 
 
		endwhile;
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
 
 
 
add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler'); // wp_ajax_nopriv_{action}
