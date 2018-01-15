<?php

/*
  Append custom CSS class to all menu items (<li> elements) in a WordPress nav menu.
*/

function custom_nav_class($classes, $item){
  $classes[] = "custom-class";
  return $classes;
}
add_filter('nav_menu_css_class' , 'custom_nav_class' , 10 , 2);

?>
