<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MBS
 */

get_header();
?>

  <main class="inner">
    <section class="contacts_header_section">
      <div class="content">
        <div class="contacts flexbox">
          <div class="contacts__description">
            <p class="license"><strong>Строительная лицензия:</strong> АСК СРО ВСК №0003077. Лицензия МЧС №78-Б/00418</p>

            <h1>Мы находимся здесь</h1>

            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
          </div>

          <div class="contacts__map">
            <div class="iframe">
              <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5a98acc02852658a1063adb0e10cadfcc4fa6bf1547ae3f5f1ee859909e9f076&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
            </div>

            <div class="description">
              <h2>Как до нас добраться?</h2>

              <form action="http://maps.google.com/maps" method="get" target="_blank">
                <div class="form_input hidden">
                  <label for="to">Куда</label>

                  <div class="form_input__input">
                    <input type="hidden" name="daddr" id="to" placeholder="Ремонтерра" value="Суворовский проспект, 2">
                  </div>
                </div>

                <div class="form_input">
                  <label for="from">Откуда</label>

                  <div class="form_input__input">
                    <input type="text" name="saddr" id="from" placeholder="Ваш адрес">
                  </div>
                </div>

                <button><span class="button_hover"></span>Проложить маршрут</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="waves">
        <svg width="100%" height="95%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path
              id="feel-the-wave" d=""/></svg>
        <svg width="100%" height="95%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path
              id="feel-the-wave-two" d=""/></svg>
      </div>

      <div class="clip">
        <img src="/wp-content/themes/remonterra/resources/images/contacts/wave.svg" alt="Clip">
      </div>
    </section>

    <section class="contacts_main_section">
      <div class="form content">
        <h2>Связаться с нами:</h2>

        <p class="email"><a href="mailto:info@remonterra24.ru">info@remonterra24.ru</a></p>

        <form action="/send_second.php" id="contact_form" name="contact_form" class="contact_form flexbox"
              method="post">
          <input type="hidden" name="token" id="token">
          <input type="hidden" name="action" id="action">

          <div class="form_select">
            <label for="area">Ваш вопрос</label>

            <div class="form_select__select">
              <select name="area" id="area" required>
                <option value="Ремонт квартир">Ремонт квартир</option>
                <option value="Дизайн интерьера">Дизайн интерьера</option>
                <option value="Строительство загородной недвижимости">Строительство загородной недвижимости</option>
                <option value="Ремонт загородной недвижимости">Ремонт загородной недвижимости</option>
                <option value="Ремонт офисов">Ремонт офисов</option>
                <option value="Инженерные проекты">Инженерные проекты</option>
                <option value="Продажа строительных материалов">Продажа строительных материалов</option>
                <option value="Другое">Другое</option>
              </select>
            </div>
          </div>

          <div class="form_input">
            <div class="form_input__input">
              <input type="text" name="name" placeholder="Ваше имя" required>
            </div>
          </div>

          <div class="form_input">
            <div class="form_input__input">
              <input type="tel" name="phone" placeholder="Ваш номер телефона" required>

              <input type="hidden" name="email" value="respond@remonterra24.ru">
            </div>
          </div>

          <div class="form_textarea">
            <div class="form_textarea__textarea">
              <textarea type="text" name="message" placeholder="Введите сообщение" required></textarea>
            </div>
          </div>

          <div class="form_button">
            <input type="submit" name="submit" class="submit" value="Заказать звонок">
            <span class="button_hover"></span>
          </div>
        </form>

        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; // End of the loop. ?>
      </div>
    </section>
  </main>

<?php
get_footer();
