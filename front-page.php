<?php get_header();?>

<?php get_template_part('includes/mainvisual');?>

<?php 
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>

<main class="c-grid--contents">

  <?php get_template_part('includes/content');?>

</main>

<?php endwhile;
    else :
      ?><p>表示する記事がありません</p><?php
    endif;
    ?>

<?php get_sidebar();?>

<?php get_template_part('includes/access');?>

<?php get_footer();?>


<?php get_template_part('includes/footer');?>