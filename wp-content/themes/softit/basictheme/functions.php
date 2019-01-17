<?php 






add_action('after_setup_theme', 'basictheme_functions');

function basictheme_functions(){

	add_theme_support('post-thumbnails');

	add_theme_support('title-tag');
	add_theme_support('custom-background', array(
		'default-image' => get_template_directory_uri().'/images/background.png'
	));
	add_theme_support('custom-header', array(
		'default-image' => get_template_directory_uri().'/images/anoceanofsky.jpg'
	));


	load_theme_textdomain('basictheme', get_template_directory().'/languages');

 load_theme_textdomain('basichekme', get_thmeplate_directory().'/languages');

  register_nav_menu('main-menu', __('Main Menu', 'basictheme'));
  
  register_nav_menu();






		register_post_type('basic-testimonials', array(
			'labels' => array(
				'name' => 'Testimonials',
				'add_new_item' => 'Add New Testimonial',
				'view_item' => 'View Testimonial'
			),
			'public' => true,
			'menu_icon' => 'dashicons-edit',
			'menu_position' => 4,
			'supports' => array('title', 'thumbnail', 'revisions')
		));

	


}




add_action('wp_enqueue_scripts', 'basic_theme_styles');

add_action('admin_enqueue_scripts', 'admin_theme_styles');

function admin_theme_styles(){
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');

}

function basic_theme_styles(){


	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');


}




require_once('custom-navwalker.php');


if(file_exists(dirname(__FILE__).'/metabox/init.php')){
	require_once(dirname(__FILE__).'/metabox/init.php');
}
if(file_exists(dirname(__FILE__).'/metabox/custom.php')){
	require_once(dirname(__FILE__).'/metabox/custom.php');
}

if(file_exists(dirname(__FILE__).'/opt/ReduxCore/framework.php')){
	require_once(dirname(__FILE__).'/opt/ReduxCore/framework.php');
}
if(file_exists(dirname(__FILE__).'/opt/sample/config.php')){
	require_once(dirname(__FILE__).'/opt/sample/config.php');
}






// sidebar registration 


add_action('widgets_init', 'all_widgets');

function all_widgets(){
	register_sidebar(array(
		'name' => 'Right Sidebar',
		'description' => 'Keep your Right Sidebar Widgets Here',
		'id' => 'right-sidebar'
	));

	register_sidebar(array(
		'name' => 'Left Sidebar',
		'description' => 'Keep your left Sidebar Widgets Here',
		'id' => 'left-sidebar',
		'before_widget' => '<div class="sujan">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
	));
}




// shortcodes registration 





add_shortcode('testimonials', 'testimonials_shortcode');

function testimonials_shortcode(){



	ob_start();




	$testimonial = new WP_Query(array(
		'post_type' => 'basic-testimonials'
	));

	while($testimonial->have_posts()) : $testimonial->the_post(); ?>

		<h2><?php the_title(); ?></h2>

	<?php endwhile; 




	$var = ob_get_clean();

	return $var;



}




// visual composer custom widgets 

vc_map(array(
	'name' => 'amader testimonials',
	'base' => 'testimonials',
	'icon' => 'https://cdn4.iconfinder.com/data/icons/REALVISTA/web_design/png/32/testimonials.png',
	'category' => 'social',
	'params' => array(
		array(
			'param_name' => 'title',
			'type' => 'textfield',
			'heading' => 'Title',
			'value' => 'This is our Title'
		),
		array(
			'param_name' => 'subtitle',
			'type' => 'textfield',
			'heading' => 'Content',
			'value' => 'Lorem Ipsum'
		)
	)
));




vc_remove_element('vc_message');


