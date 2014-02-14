<?php
/*
Plugin Name: Add Custom Post Types
*/

add_action('init', 'post_type_project');
function post_type_project() 
{
  $labels = array(
    'name' => _x('Project', 'post type general name'),
    'singular_name' => _x('Project', 'post type singular name'),
    'add_new' => _x('Add New', 'project'),
    'add_new_item' => __('Add New Project'),
    'edit_item' => __('Edit Project'),
    'new_item' => __('New Project'),
    'view_item' => __('View Project'),
    'search_items' => __('Search Projects'),
    'not_found' =>  __('No projects found'),
    'not_found_in_trash' => __('No projects found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Projects'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','thumbnail','excerpt','custom-fields'),
    'taxonomies' => array('category', 'post_tag')
  ); 
  register_post_type('project',$args);
}


add_action('init', 'post_type_code');
function post_type_code() 
{
  $labels = array(
    'name' => _x('Code', 'post type general name'),
    'singular_name' => _x('Code', 'post type singular name'),
    'add_new' => _x('Add New', 'code'),
    'add_new_item' => __('Add New Code'),
    'edit_item' => __('Edit Code'),
    'new_item' => __('New Code'),
    'view_item' => __('View Code'),
    'search_items' => __('Search Code'),
    'not_found' =>  __('No codes found'),
    'not_found_in_trash' => __('No codes found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Code'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','author','thumbnail','excerpt','comments'),
    'taxonomies' => array('category', 'post_tag')
  ); 
  register_post_type('code',$args);
}

add_action('init', 'post_type_thought');
function post_type_thought() 
{
  $labels = array(
    'name' => _x('Thought', 'post type general name'),
    'singular_name' => _x('Thought', 'post type singular name'),
    'add_new' => _x('Add New', 'thought'),
    'add_new_item' => __('Add New Thought'),
    'edit_item' => __('Edit Thought'),
    'new_item' => __('New Thought'),
    'view_item' => __('View Thought'),
    'search_items' => __('Search Thought'),
    'not_found' =>  __('No thoughts found'),
    'not_found_in_trash' => __('No thoughts found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Thought'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','author','thumbnail','excerpt','comments'),
    'taxonomies' => array('category', 'post_tag')
  ); 
  register_post_type('thought',$args);
}

?>
<?php
function press_this_ptype($link) {
	$post_type = 'bookmark';
	$link = str_replace('post-new.php', "post-new.php?post_type=$post_type", $link);
	$link = str_replace('?u=', '&u=', $link);
	return $link;
}
add_filter('shortcut_link', 'press_this_ptype', 11);

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if(is_category() || is_tag()) {
    $post_type = get_query_var('post_type');
	if($post_type)
	    $post_type = $post_type;
	else
	    $post_type = array('post','bookmark','thoughts'); // replace cpt to your custom post type
    $query->set('post_type',$post_type);
	return $query;
    }
}
?>