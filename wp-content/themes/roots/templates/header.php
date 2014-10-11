<header class="banner" role="banner">

  <div itemscope="" itemtype="http://schema.org/Organization">
      <a class="brand" itemprop="url" href="<?php echo esc_url(home_url('/')); ?>">
        <i class="maki-skiing" id="logo"></i><br>
        <b id="title-name"><?php bloginfo('name'); ?></b>
      </a>
  </div>

  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
  </button>

  <hr>

  <?php if(is_front_page()): ?>
    <?php echo get_template_part('templates/content','filters'); ?>
    <hr>
  <?php endif ?>

  <nav class="nav-main collapse" role="navigation">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
      endif;
    ?>

    <hr>
    <ul class="social">
      <li><a href="#"><i class="entypo-facebook-circled"></i></a></li>
      <li><a href="#"><i class="entypo-twitter-circled"></i></a></li>
      <li><a href="#"><i class="entypo-pinterest-circled"></i></a></li>
    </ul>
  </nav>

</header>
