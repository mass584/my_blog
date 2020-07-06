<header class="container">
  <h1>
    <a href="<?php echo home_url('/'); ?>">
      &#x1F425;<?php bloginfo('name'); ?>&#x1F425;
    </a>
  </h1>
  <div class="header-info"><?php bloginfo('description') ?></div>
  <?php wp_nav_menu(); ?>
</header>
