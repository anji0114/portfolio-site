<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_directory_uri("templates/header"); ?>
  <div class="l-wrap">
    <main class="l-main">
      <div class="l-container">
        <article class="p-project">
          <div class="l-inner p-project__inner">
            <div class="p-project__head">
              <div class="p-project__heading">
                <h2 class="p-project__title"></h2>
                <p class="p-project__date"></p>
              </div>
              <ul class="p-project__categories">
                <li class="p-project__category">
                  <a href="">Webpack</a>
                </li>
                <li class="p-project__category">
                  <a href="">React</a>
                </li>
              </ul>
              <p class="p-project__description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel molestias atque sed beatae earum repellendus magnam corrupti nisi quas, maxime eaque magni veritatis voluptas quos quod hic minima architecto voluptatibus.
              </p>
            </div>
            <div class="p-project__detail">
              <dl class="project__detail-list">
                <dt class="project__detail-title">サイト種類</dt>
                <dd class="p-project__detail-text">サービスサイト</dd>
              </dl>
              <dl class="project__detail-list">
                <dt class="project__detail-title">サイト種類</dt>
                <dd class="p-project__detail-text">サービスサイト</dd>
              </dl>
              <dl class="project__detail-list">
                <dt class="project__detail-title">サイト種類</dt>
                <dd class="p-project__detail-text">サービスサイト</dd>
              </dl>
              <dl class="project__detail-list">
                <dt class="project__detail-title">サイト種類</dt>
                <dd class="p-project__detail-text">サービスサイト</dd>
              </dl>
              <dl class="project__detail-list">
                <dt class="project__detail-title">サイト種類</dt>
                <dd class="p-project__detail-text">サービスサイト</dd>
              </dl>
            </div>
            <div class="p-project__screen">
              <div class="p-project__screen-pc"></div>
              <div class="p-project__screen-"></div>
            </div>
          </div>
          <div class="p-project__images">
            <div class="p-project__image"></div>
            <div class="p-project__image"></div>
          </div>
          <div class="p-project__sp-images">
            <div class="p-project__sp-image"></div>
            <div class="p-project__sp-image"></div>
            <div class="p-project__sp-image"></div>
          </div>
          <div class="p-project__buttons c-buttons">
            <a href="" class="c-button"></a>
          </div>
        </article>
      </div>
    </main>
  </div>

  <?php get_template_directory_uri("templates/index-contact") ?>
  <?php get_footer(); ?>
</body>

</html>