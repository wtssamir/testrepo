<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @since      1.0
 *
 * @package    Kam
 * @subpackage Kam/includes
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    Kam
 * @subpackage Kam/admin
 * @author     Excion
 */
class Kam_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0
	 * @access   private
	 * @var      string    $name    The ID of this plugin.
	 */
	private $name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0
	 * @var      string    $name       The name of this plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $name, $version ) {
		$this->name = $name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the Dashboard.
	 *
	 * @since    1.0
	 */
	public function enqueue_styles() {
		wp_enqueue_style( $this->name, plugin_dir_url( __FILE__ ) . 'css/kam-admin.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the dashboard.
	 *
	 * @since    1.0
	 */
	public function enqueue_scripts() {
		wp_enqueue_script( $this->name, plugin_dir_url( __FILE__ ) . 'js/kam-admin.js', array( 'jquery' ), $this->version, FALSE );
	}

	/**
	 * Register the custom post type named as Activities
	 *
	 * @since    1.0
	 * @return   void
	 */
	public function register_activities_post_type() {
		$args = array(
			'label' => __( 'Activities', 'kam-plugin' ),
			'description' => __( 'Activities', 'kam-plugin' ),
			'labels' => array(
				'name'	=> _x( 'Activities', 'Events where parents take their kids to attend activities', 'kam-plugin' ),
				'singular_name' => _x( 'Activity', 'Event where parents take their kids to attend an activity', 'kam-plugin' ),
				'menu_name' => __( 'Activities', 'kam-plugin' ),
				'parent_item_colon' => __( 'Parent Item:', 'kam-plugin' ),
				'all_items' => __( 'All Activities', 'kam-plugin' ),
				'view_item' => __( 'View Activity', 'kam-plugin' ),
				'add_new_item' => __( 'Add New Activity', 'kam-plugin' ),
				'add_new' => __( 'Add New Activity', 'kam-plugin' ),
				'edit_item' => __( 'Edit an Activity', 'kam-plugin' ),
				'update_item' => __( 'Update an Activity', 'kam-plugin' ),
				'search_items' => __( 'Search an Activity', 'kam-plugin' ),
				'not_found' => __( 'Activity Not Found', 'kam-plugin' ),
				'not_found_in_trash' => __( 'Activity Not Found in Trash', 'kam-plugin' ),
			),
			'supports' => array(
				'title',
				'editor',
				'author',
				//'thumbnail',
				//'excerpt',
				'trackbacks',
				'custom-fields',
				'comments',
				'revisions',
				//'page-attributes',
				//'post-formats'
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'activities' ),
			'capability_type' => array( 'activity', 'activities', 'post' ),
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => 5,
			'map_meta_cap' => true

		);

		register_post_type( 'activities', $args );
	}

}
