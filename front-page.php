<?php get_header();?>
<?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
<figure class="c-grid--mainvisual">
  <div class="p-grid--mainvisual">
    <div class="p-mainvisual--image">
      <img class="c-image p-mainvisual--image--sp"
        src="<?php echo get_theme_file_uri();?>/image/png/top-image-front-sp.png" alt="ダミーサイト" />
      <img class="c-image p-mainvisual--image--tab"
        src="<?php echo get_theme_file_uri();?>/image/png/top-image-front-tab.png" alt="ダミーサイト" />
      <img class="c-image p-mainvisual--image--pc"
        src="<?php echo get_theme_file_uri();?>/image/png/top-image-front-pc.png" alt="ダミーサイト" />
    </div>
    <div class="p-mainvisual--inner">
      <h2 class="c-title p-mainvisual--ttl">ダミーサイト</h2>
    </div>
  </div>
</figure>
<main class="c-grid--contents">
  <article class="p-grid--article u-space--content">
    <img class="c-image p-content__image" src="<?php echo get_theme_file_uri();?>/image/png/main-visual-1_sp.png"
      alt="" />
    <h2 class="c-text p-content__heading">Take Out</h2>
    <div class="p-content__box">
      <dl class="c-white-box p-content__inner">
        <dt class="c-text p-content__inner__ttl">Take OUT</dt>
        <dd class="c-text p-content__inner__text">
          当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています
        </dd>
      </dl>
      <dl class="c-white-box p-content__inner">
        <dt class="c-text p-content__inner__ttl">Take OUT</dt>
        <dd class="c-text p-content__inner__text">
          当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています
        </dd>
      </dl>
    </div>
  </article>
  <article class="p-grid--article">
    <img class="c-image p-content__image" src="<?php echo get_theme_file_uri();?>/image/png/main-visual-2_sp.png"
      alt="" />
    <h2 class="c-text p-content__heading">Eat In</h2>
    <div class="p-content__box">
      <dl class="c-white-box p-content__inner">
        <dt class="c-text p-content__inner__ttl">Take OUT</dt>
        <dd class="c-text p-content__inner__text">
          当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています
        </dd>
      </dl>
      <dl class="c-white-box p-content__inner">
        <dt class="c-text p-content__inner__ttl">Take OUT</dt>
        <dd class="c-text p-content__inner__text">
          当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています
        </dd>
      </dl>
    </div>
  </article>
</main>
<?php endwhile;
    else :
        ?><p>表示する記事がありません</p><?php
    endif;
?>
<?php get_sidebar();?>

<?php get_template_part('includes/access');?>

<?php get_footer();?>