<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri() ?>">
  <?php wp_head(); ?>
</head>
<body>
  <?php get_header(); ?>
  <main class="container">
    <section id="posts">
      <nav class="breadcrumb">
        <ul>
          <li><a href="/">&#x1F3E0; ホーム</a></li>
          <li><?php the_title(); ?></li>
        <ul>
      </nav>
      <?php while (have_posts()) : the_post(); ?>	
      <article>
        <div class="post-header">
          <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
        </div>
        <div class="post-body">
          <p><?php the_content(); ?></p>
        </div>
      </article>
      <?php endwhile ?>
    </section>
    <aside>
      <?php get_sidebar(); ?>
    </aside>
  </main>
  <?php get_footer(); ?>
</body>
</html>
