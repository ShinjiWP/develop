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
      <h3 class="c-text p-mainvisual--text u-margin--text">まだまだ</h3>
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
    <?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
    <figure class="p-card">
      <!-- <img class="c-image p-card__image--sp"
        src="<?php echo get_theme_file_uri();?>/image/png/card-visual-archive-sp.png" alt="バーガー" />
      <img class="c-image p-card__image--tab"
        src="<?php echo get_theme_file_uri();?>/image/png/card-visual-archive-tab.png" alt="バーガー" />
      <img class="c-image p-card__image--pc"
        src="<?php echo get_theme_file_uri();?>/image/png/card-visual-archive-pc.png" alt="バーガー" /> -->
      <?php the_post_thumbnail('thumbnail') ;?>

      <div class="c-background p-card__caption">
        <figcaption class="p-card__box">
          <dd class="c-title p-card__box__ttl">
            <?php the_title();?>
          </dd>
          <!-- <dl class="c-title p-card__box__subtitle">小見出しが入ります</dl> -->
          <dt class="c-text p-card__box__text">
            <?php the_content();?>
          </dt>
        </figcaption>
        <div class="p-card--btn">
          <button class="c-btn p-card__btn">詳しく見る</button>
        </div>
      </div>
    </figure>
    <?php endwhile;
    else :
        ?>
    <p>表示する記事がありません</p><?php
    endif;
?>
  </div>
</main>

<?php get_sidebar();?>

<div class="c-grid--pager">
  <?php wp_pagenavi(); ?>
  <!-- <ul class="p-pager">
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
  </ul> -->
</div>
<?php get_footer();?>