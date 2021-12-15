<nav class="c-grid--sidebar p-grid--sidebar">
  <div class="c-shadow p-sidebar--shadow"></div>
  <div class="l-sidebar p-sidebar">
    <span class="p-sidebar__esc"></span>
    <h2 class="c-text p-sidebar__heading--main">Menu</h2>

    <?php wp_nav_menu( array(
      'menu'            => 'Side-Menu',
      'menu_class'      => 'p-sidebar__menu',
      'menu_id' => ' ',
      'container'       => 'false',
      'depth'           => '0',
      'theme_location'  => 'side-nav',
    ) ); ?>

  </div>
</nav>