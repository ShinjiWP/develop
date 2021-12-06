<form class=" p-search">
  <input type="search" name="search" class="c-input p-search__input" />
  <input type="submit" value="検索" class=" c-btn p-search__btn"></input>
</form>

<form class="p-search-form" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
  <input class="p-search-form__keyword" placeholder="キーワード" name="s" id="s">
  <input class="p-search-form__submit" id="searchsubmit" type="submit" value="検索">
</form>