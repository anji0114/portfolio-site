<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part("templates/header"); ?>
  <div class="l-wrapper">
    <div class="l-container">

      <div class="c-heading01">
        <h1 class="c-heading01__en"></h1>
        <p class="c-heading01__ja"></p>
      </div>

      <main class="l-main">
        <section class="p-contact">
          <div class="l-inner p-contact__inner">
            <p class="p-contact__description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione accusantium sit quaerat aut modi. Esse dolores atque, maxime non nostrum laboriosam saepe neque iusto, ipsa ad deserunt expedita corrupti ducimus!
            </p>
            <div class="p-contact__content">
              <form action="" class="p-contact__form">
                <div class="p-contact__form-area">

                  <dl class="p-contact__list">
                    <dt class="p-contact__title">お名前</dt>
                    <dd class="p-contact__input">
                      <input type="text">
                    </dd>
                  </dl>
                  <dl class="p-contact__list">
                    <dt class="p-contact__title">お名前</dt>
                    <dd class="p-contact__input">
                      <input type="text">
                    </dd>
                  </dl>
                  <dl class="p-contact__list">
                    <dt class="p-contact__title">お名前</dt>
                    <dd class="p-contact__input">
                      <input type="text">
                    </dd>
                  </dl>
                  <dl class="p-contact__list">
                    <dt class="p-contact__title">お名前</dt>
                    <dd class="p-contact__input">
                      <input type="text">
                    </dd>
                  </dl>
                  <dl class="p-contact__list">
                    <dt class="p-contact__title">お名前</dt>
                    <dd class="p-contact__input">
                      <input type="text">
                    </dd>
                  </dl>
                </div>
                <div class="p-contact__submit">
                  <input type="submit" value="送信する">
                </div>
              </form>
            </div>
          </div>
        </section>
    </div>
    </main>
  </div>

  <div class="p-breadcrumb">
    <div class="l-container">

    </div>
  </div>
  <?php get_template_directory_uri("templates/index-contact"); ?>
  </div>
  <?php get_footer(); ?>

</body>

</html>