<?php
function LoadMorePosts(){
  $offset = $_POST['offset'];
  $wp_query = new WP_Query(array(
    'post_type'   => 'post',
    'offset'     => $offset,
  ));

  while($wp_query->have_posts()){
    $wp_query->the_post();
    get_template_part('template_parts/post');
  }
  exit;
}

add_action('wp_ajax_LoadMorePosts', 'LoadMorePosts');
add_action('wp_ajax_nopriv_LoadMorePosts', 'LoadMorePosts');