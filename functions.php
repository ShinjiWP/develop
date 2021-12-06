<?php
//テーマサポート
add_theme_support('menus');
add_theme_support('title-tag');

//タイトル出力
function  develop_title($title){
  if (is_front_page() && is_home()){
    $title=get_bloginfo('name','display');
  }elseif(is_singular()){
    $title=single_post_title('',false);
  }
  return $title;
}add_filter('pre_get_document_title','develop_title');



function add_stylesheet(){
  wp_enqueue_style('style',get_template_directory_uri().'/style.css',array());
  wp_enqueue_style('style',get_template_directory_uri().'/css/style.css',array());
} add_action ('wp_enqueue_style','add_stylesheet');