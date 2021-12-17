<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<!-- 言語設定を自動的に出力する -->

<head>
  <meta charset="utf-8" />
  <meta name="description" content="RaiseTechハンバーガーサイトの模写になります。" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="//fonts.googleapis.com" />
  <link rel="preconnect" href="//fonts.gstatic.com" crossorigin />
  <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap" rel="stylesheet" />
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <link rel="icon" type="img.ico" href="../img/favicon.ico" />
  <link href="//use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
  <script src="../javascript/jquery-3.6.0.min.js"></script>
  <script src="../javascript/js-slide.js"></script>
  <?php wp_head();?>
</head>

<body>
  <div class="c-grid">
    <header class="c-grid--header">
      <div class="p-grid-header p-header">
        <div class="c-text p-header__btn js-slidebar">Menu</div>
        <h1 class="c-text p-header__heading"><a href="<?php echo esc_url( home_url('/'));?>">
            <?php bloginfo('name');?></a></h1>
        <?php get_search_form();?>
      </div>
    </header>