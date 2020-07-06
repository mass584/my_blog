<?php get_header(); ?>
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
  <?php $category = get_category( $cat ); ?>
  <main class="container">
    <section id="posts">
      <nav class="breadcrumb">
        <ul>
          <li><a href="/">ホーム</a></li>
          <li><?php single_cat_title(); ?></li>
        <ul>
      </nav>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
      <article>
        <div class="post-header">
          <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <div class="post-meta">
            <?php echo get_the_date(); ?>（更新:<?php echo get_the_modified_date(); ?>）
          </div>
        </div>
        <div class="post-image">
          <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(array(960, 640)); ?>
          <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width="960" height="640">
          <?php endif; ?>
        </div>
        <div class="post-body">
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" class="button">記事を読む</a>
        </div>
      </article>
      <?php endwhile; else: ?>
      <p>記事はありません！</p>
      <?php endif; ?>
      <nav class="bottom-navigation">
        <a href="<?php previous_posts_link(); ?>" class="button">&lt; 前へ</a>
        <a href="<?php next_posts_link(); ?>" class="button">次へ &gt;</a>
      </nav>
    </section>
    <aside>
      <?php get_sidebar(); ?>
    </aside>
  </main>
  <?php get_footer(); ?>
</body>
</html>