<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part("templates/header"); ?>
  <div class="l-wrap">
    <div class="c-heading01">
      <h1 class="c-heading01__en"></h1>
      <p class="c-heading01__ja"></p>
    </div>

    <main class="l-main">
      <section class="p-works">
        <div class="p-works__grid">
          <div class="p-works__menu">
            <ul class="p-works__categories c-categories">
              <li class="p-works__category c-category">
                <a href=""></a>
              </li>
              <li class="p-works__category c-category">
                <a href=""></a>
              </li>
              <li class="p-works__category c-category">
                <a href=""></a>
              </li>
              <li class="p-works__category c-category">
                <a href=""></a>
              </li>
            </ul>
          </div>
          <div class="p-works__content">
            <ul class="p-works__list">
              <?php
              $args = array(
                'post_type' => 'works',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'DESC'
              );
              $my_blogs = new WP_Query($args);
              if ($my_blogs->have_posts()) :
                while ($my_blogs->have_posts()) :
                  $my_blogs->the_post();
              ?>
                  <li class="p-works__item">
                    <div class="p-works__image">
                    </div>
                    <div class="p-works__item-content">
                      <ul class="p-works__item-categories">

                        <li class="p-works__item-category">
                          <a href=""></a>
                        </li>
                        <li class="p-works__item-category">
                          <a href=""></a>
                        </li>
                      </ul>
                      <p class="p-works__item-date"></p>
                      <p class="p-works__item-title"><?php the_title(); ?></p>
                      <span class="p-works__arrow"></span>
                    </div>
                    <a href=""></a>
                  </li>
              <?php endwhile;
              endif; ?>
            </ul>
            <div class="p-works__pagination">
              <div class="p-works__pagination-list">
                
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

  <?php get_template_directory_uri("templates/index-contact") ?>
  <?php get_footer(); ?>
</body>

</html>