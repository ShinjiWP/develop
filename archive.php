<?php
/*
Template Name: archive
*/
?>
<?php get_header();?>
<?php get_template_part('includes/mainvisual');?>

<main class="c-grid--archive p-archive">
  <article class="p-archive--intro">
    <div class="c-intro p-archive">
      <h2 class="c-text p-archive__heading"><?php echo esc_html( single_term_title()); ?>の詳細ですー</h2>
      <!-- <p class="c-text p-archive__description"> -->
      <?php echo category_description(); ?>
      <!-- </p> -->
    </div>
  </article>
  <div class="p-archive--card">
    <?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
    <figure class="p-card">
      <div class="c-image p-card__image">
        <?php the_post_thumbnail('thumbnail') ;?>
      </div>
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
          <button class="c-btn p-card__btn"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
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
</div>
<?php get_footer();?>
<?php get_template_part('includes/footer');?>