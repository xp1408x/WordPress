<?php
/**
 * Wordpress function Page
 */

// child style enqueue
add_action( "wp_enqueue_scripts", "llamar_estilos");
function llamar_estilos(){
  wp_enqueue_style("parent-style", get_template_directory_uri(). "/style.css");
}
function get_template_directory_child(){
  $directory_template = get_template_directory_uri();
  $directory_child = str_replace('shopline', '', $directory_template).'rayhgel';
  return $directory_child;
}

