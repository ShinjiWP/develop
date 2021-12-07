<?php
//テーマサポート
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support( 'html5', array( 'search-form' ) );

//タイトル出力
function  develop_title($title){
  if (is_front_page() && is_home()){
    $title=get_bloginfo('name','display');
  }elseif(is_singular()){
    $title=single_post_title('',false);
  }
  return $title;
}add_filter('pre_get_document_title','develop_title');



function add_files(){
  wp_enqueue_style('style',get_theme_file_uri().'/style.css',array());
  wp_enqueue_style('main-style',get_theme_file_uri().'/css/style.css',array());
  wp_enqueue_script('main-script',get_theme_file_uri().'/javascript/js-slide.js',array('jquery'),'1.0.0',true);
} add_action ('wp_enqueue_scripts','add_files');