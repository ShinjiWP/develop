<?php
//テーマサポート
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support( 'html5', array( 'search-form' ) );

//メニュー位置管理（テーマの位置）
register_nav_menu( 'header-nav', ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav', ' フッターナビゲーション ' );
register_nav_menu( 'side-nav', 'サイドナビゲーション');

//タブのタイトル出力
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



// class custom_walker_side_menu extends Walker_Nav_Menu {
 
//     function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
 
//         $classes = empty( $item->classes ) ? array() : (array) $item->classes;
//         $classes[] = 'menu-item-' . $item->ID;
//         $id = 'menu-item-' . $item->ID;
//         $css_classes = '';
//         foreach ($classes as $class){
//             $css_classes .= $class.' ';
//         }
 
//         if($depth == 0){ //第一階層のときにh4タグを付ける
//             $output .= '<li id="'.$id.'" class="'.$css_classes.'"><h3><a href="'.$item->url.'">'.$item->title.'</a></h3>';
//         }else{ //第一階層以外は通常通り
//             $output .= '<li id="'.$id.'" class="'.$css_classes.'"><a href="'.$item->url.'">'.$item->title.'</a>';
//         }
 
//     }
 
// }