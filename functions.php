<?php
//Removes ul class form wp_nav_menu
function remove_ul($menu){
  return preg_replace(array(
    '#^<ul[^>]*>#',
    '#</ul>$#'
  ),'',$menu);
}
add_filter('wp_nav_menu', 'remove_ul');

?>
