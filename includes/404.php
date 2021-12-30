<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<header class="p-error">
  <h1 class="page-title"><?php echo esc_html( '検索ワードが空欄です。'); ?></h1>
  <p>
    検索ワードを入力し再度検索ボタンを押してください。
  </p>
</header><!-- .page-header -->


<?php get_sidebar();?>
<?php
get_footer();