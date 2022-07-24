<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part("templates/header"); ?>
  <div class="l-wrap">
    <main class="l-main">
      <section class="p-blogs">
        <div class="l-container">
          <div class="p-blogs__grid">
            <div class="p-blogs__heading">
              <div class="c-heading01">
                <p class="c-heading01__en">BLOG</p>
                <h2 class="c-heading01__ja">ブログ</h2>
              </div>
              <ul class="p-blogs__categories c-categories">
                <li class="p-blogs__category c-category">
                  <a href=""></a>
                </li>
                <li class="p-blogs__category c-category">
                  <a href=""></a>
                </li>
                <li class="p-blogs__category c-category">
                  <a href=""></a>
                </li>
                <li class="p-blogs__category c-category">
                  <a href=""></a>
                </li>
              </ul>
            </div>
            <div class="p-blogs__articles-wrap">
              <div class="p-blogs__articles">
                <?php if (have_posts()) :
                  while (have_posts()) : the_post(); ?>
                    <article class="p-blogs__article">
                      <div class="p-blogs__image">
                        <a href="">
                          <img src="" alt="">
                        </a>
                      </div>
                      <div class="p-blogs__content">
                        <div class="p-blogs__info">
                          <span class="p-blogs__date"></span>
                          <a href="" class="p-blogs__article-category"></a>
                        </div>
                        <h2 class="p-blogs__title">
                          <a href=""></a>
                        </h2>
                      </div>
                    </article>
                <?php endwhile;
                endif; ?>
              </div>
              <div class="c-pagination">
                
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