<?php
/*
Template Name: archive
*/
?>
<?php get_header();?>

<figure class="c-grid--mainvisual">
  <div class="p-grid--mainvisual">
    <div class="p-mainvisual--image">
      <img class="c-image p-mainvisual--image--sp"
        src="<?php echo get_theme_file_uri();?>/image/png/top-image-archive-sp.png" alt="ダミーサイト" />
      <img class="c-image p-mainvisual--image--tab"
        src="<?php echo get_theme_file_uri();?>/image/png/top-image-archive-tab.png" alt="ダミーサイト" />
      <img class="c-image p-mainvisual--image--pc"
        src="<?php echo get_theme_file_uri();?>/image/png/top-image-archive-pc.png" alt="ダミーサイト" />
    </div>
    <div class="p-mainvisual--inner p-archive--inner">
      <h2 class="c-text p-mainvisual--ttl">Menu:</h2>
      <h3 class="c-text p-mainvisual--text u-margin--text">チーズバーガー</h3>
    </div>
  </div>
</figure>
<main class="c-grid--archive p-archive">
  <article class="p-archive--intro">
    <div class="c-intro p-archive">
      <h2 class="c-text p-archive__heading">小見出しが入ります</h2>
      <p class="c-text p-archive__description">
        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      </p>
    </div>
  </article>
  <div class="p-archive--card">
    <?php get_template_part('includes/content');?>

  </div>
</main>

<?php get_sidebar();?>

<div class="c-grid--pager">
  <ul class="p-pager">
    <li class="p-pager--page">
      <ahref=""> page 1/10</ahref=>
    </li>
    <li><a class="p-pager--previous" href="">前へ</a></li>
    <li><a class="c-page p-pager--number" href="">1</a></li>
    <li><a class="c-page p-pager--number" href="">2</a></li>
    <li><a class="c-page p-pager--number" href="">3</a></li>
    <li><a class="c-page p-pager--number" href="">4</a></li>
    <li><a class="c-page p-pager--number" href="">5</a></li>
    <li><a class="c-page p-pager--number" href="">6</a></li>
    <li><a class="c-page p-pager--number" href="">7</a></li>
    <li><a class="c-page p-pager--number" href="">8</a></li>
    <li><a class="c-page p-pager--number" href="">9</a></li>
    <li><a class="p-pager--next" href="">次へ</a></li>
  </ul>
</div>
<?php get_footer();?>