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
        <article class="p-article">
          <div class="p-article__head">
            <div class="p-article__info"></div>
            <h1 class="p-article__title">
              Lorem, ipsum dolor sit amet consectetur adipisicing.
            </h1>
          </div>
          <div class="p-article__thumbnail">
            <img src="" alt="">
          </div>
          <div class="p-article__content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae expedita mollitia, laboriosam maiores, omnis alias iure perferendis distinctio suscipit aliquid itaque eos quaerat non voluptatem cumque iste cupiditate. Ut, dolores.
            </p>
            <h2>Lorem ipsum dolor sit.</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi libero deleniti facilis exercitationem dolor minima delectus totam. Deleniti perspiciatis maiores pariatur libero iure dolores, consectetur optio temporibus! Atque, eligendi dicta.
            </p>
            <h3>Lorem ipsum dolor sit amet.</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae expedita mollitia, laboriosam maiores, omnis alias iure perferendis distinctio suscipit aliquid itaque eos quaerat non voluptatem cumque iste cupiditate. Ut, dolores.
            </p>
          </div>
          <div class="p-article__buttons c-buttons">
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