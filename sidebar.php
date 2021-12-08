<nav class="c-grid--sidebar p-grid--sidebar">
  <div class="c-shadow p-sidebar--shadow"></div>
  <div class="l-sidebar p-sidebar">
    <span class="p-sidebar__esc"></span>
    <h2 class="c-text p-sidebar__heading--main">Menu</h2>

    <?php wp_nav_menu( array(
    'menu'            => 'Side-Menu',
	  'menu_class'      => 'p-sidebar__menu',
    'menu_id' => ' ',
	  // 'container'       => 'nav',
	  // 'container_class' => 'c-grid--sidebar p-grid--sidebar',
	  'depth'           => '2',
	  'theme_location'  => 'side-nav',
	 ) ); ?>



    <!-- <h3 class="c-text p-sidebar__heading--secondary">バーガー</h3>
    <ul class="p-sidebar__menu">
      <li class="c-text p-sidebar__menu__item">ハンバーガー</li>
      <li class="c-text p-sidebar__menu__item">チーズバーガー</li>
      <li class="c-text p-sidebar__menu__item">テリヤキバーガー</li>
      <li class="c-text p-sidebar__menu__item">アボカドバーガー</li>
      <li class="c-text p-sidebar__menu__item">フィッシュバーガー</li>
      <li class="c-text p-sidebar__menu__item">ベーコンバーガー</li>
      <li class="c-text p-sidebar__menu__item">チキンバーガー</li>
    </ul>
    <h3 class="c-tex p-sidebar__heading--secondary">サイド</h3>
    <ul class="p-sidebar__menu">
      <li class="c-text p-sidebar__menu__item">ポテト</li>
      <li class="c-text p-sidebar__menu__item">サラダ</li>
      <li class="c-text p-sidebar__menu__item">ナゲット</li>
      <li class="c-text p-sidebar__menu__item">コーン</li>
    </ul>
    <h3 class="c-tex p-sidebar__heading--secondary">ドリンク</h3>
    <ul class="p-sidebar__menu">
      <li class="c-text p-sidebar__menu__item">コーラ</li>
      <li class="c-text p-sidebar__menu__item">ファンタ</li>
      <li class="c-text p-sidebar__menu__item">オレンジ</li>
      <li class="c-text p-sidebar__menu__item">アップル</li>
      <li class="c-text p-sidebar__menu__item">紅茶（Ice ＆Hot）</li>
      <li class="c-text p-sidebar__menu__item">コーヒー（Ice ＆Hot）</li>
    </ul> -->
  </div>
</nav>