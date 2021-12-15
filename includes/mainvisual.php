<?php if ( is_front_page() && is_home() ) {
  get_template_part('includes/mainvisual-front');
  // フロントペーシを使ったホームページ
} elseif ( is_page() ) {
  get_template_part('includes/mainvisual-page');
  // 固定ペーシを使ったホームページ
} elseif ( is_single() ) {
  get_template_part('includes/mainvisual-single');
   // ブログページ
} elseif ( is_archive()) {
  get_template_part('includes/mainvisual-archive');
    // アーカイブページ
};?>