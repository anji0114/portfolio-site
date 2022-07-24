<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part("templates/header"); ?>
  <div class="l-wrapper">
    <div class="l-home-top">
      <div class="p-home-visual">
        <div class="l-container">
          <div class="p-home-visual__content">
            <h2 class="p-home-visual__title">
              Welcome to<br />
              PortFolio Site
            </h2>
            <p class="p-home-visual__text">
              UI/UXデザイン、運用・改善、人材支援で、<br />
              お客様のビジネスを成功へと導く<br />
              デジタルクリエイティブの専門集団です。
            </p>
          </div>
        </div><!-- /.l-container -->
      </div><!-- /.p-home-visual -->

      <section class="p-index-about">
        <div class="l-container">
          <div class="p-index-about__content">
            <div class="c-heading01">
              <h2 class="c-heading01__en">ABOUT</h2>
            </div>
            <h3 class="p-index-about__subtitle"></h3>
            <div class="p-index-about__texts">
              <p class="p-index-about__text"></p>
              <p class="p-index-about__text"></p>
              <p class="p-index-about__text"></p>
            </div>
            <div class="c-buttons c-buttons--left p-index-about__buttons">
              <a href="" class="c-buttons"></a>
            </div>
          </div><!-- /.p-index-about__content -->
        </div><!-- /.l-container -->
      </section><!-- /.p-index-about -->

      <div class="l-home-top__image">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mv.svg" alt="">
      </div><!-- /.l-home-top__image -->
    </div>

    <main class="l-main">
      <section class="p-index-works">
        <div class="l-container">
          <div class="c-heading01">
            <p class="c-heading01__en">WORKS</p>
            <h2 class="c-heading01__ja">制作実績</h2>
          </div>
          <div class="p-works__grid p-index-works__gird">
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
            </div>
          </div>
          <div class="c-buttons p-index-works__buttons">
            <a href="" class="c-button"></a>
          </div>
        </div>
      </section>

      <!-- p-index-blogs -->
      <section class="p-index-blogs">
        <div class="l-container">
          <div class="p-index-blogs__grid">
            <div class="p-index-blogs__heading">
              <div class="c-heading01">
                <p class="c-heading01__en">BLOG</p>
                <h2 class="c-heading01__ja">ブログ</h2>
              </div>
              <ul class="p-index-blogs__categories c-categories">
                <li class="p-index-blogs__category c-category">
                  <a href=""></a>
                </li>
                <li class="p-index-blogs__category c-category">
                  <a href=""></a>
                </li>
                <li class="p-index-blogs__category c-category">
                  <a href=""></a>
                </li>
                <li class="p-index-blogs__category c-category">
                  <a href=""></a>
                </li>
              </ul>
            </div>
            <div class="p-index-blogs__content">
              <ul class="p-index-blogs__list">
                <?php
                $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 5,
                  'orderby' => 'date',
                  'order' => 'DESC'
                );
                $my_blogs = new WP_Query($args);
                if ($my_blogs->have_posts()) :
                  while ($my_blogs->have_posts()) :
                    $my_blogs->the_post();
                ?>
                    <li class="p-index-blogs__item">
                      <div class="p-index-blogs__info">
                        <p class="p-index-blogs__date">
                          <?php the_time("Y.m.d"); ?>
                        </p>
                        <a href="" class="p-index-blogs__item-category">

                        </a>
                      </div>
                      <h3 class="p-index-blogs__title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h3>
                    </li>
                <?php endwhile;
                endif; ?>
              </ul><!-- /.p-index-blogs__list -->
              <div class="p-index-blogs__buttons c-buttons">
                <a href="" class="c-button"></a>
              </div>
            </div><!-- /.p-index-blogs__content -->
          </div>
        </div>
      </section>
    </main>
  </div>

  <?php get_template_directory_uri("templates/index-contact") ?>
  <?php get_footer(); ?>
</body>

</html>