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

  <main>
    <section id="calculator">
      <div class="head">
        <div class="content">
          <div class="info">
            <div class="info__header">
              <p class="license"><strong>Строительная лицензия:</strong> АСК СРО ВСК №0003077. Лицензия МЧС №78-Б/00418</p>

              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>

            <div class="info__description">
              <?php the_excerpt() ?>
            </div>

            <div class="info__breadcrumbs">
              <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="content">
        <div id="wrapper">
          <div id="step-wrapper">
            <div class="step step-1">
              <div class="step-inner">
                <h2>1. Где делаем ремонт?</h2>

                <div class="item-type">
                  <div class="title">
                    <a href="#">В новостройке</a>
                    <div class="hide-desc">
                      Ремонт квартиры в новостройке предполагает качественное и точное планирование всех этапов отделочных работ и проведения коммуникаций.
                    </div>
                  </div>

                  <div class="check">
                    <input id="check1" type="checkbox" class="step_1" value="«В новостройке»" name="new_building">
                    <label for="check1" class="un-check"></label>
                  </div>
                </div>

                <div class="item-type">
                  <div class="title">
                    <a href="#">Во вторичном жилье</a>
                    <div class="hide-desc">
                      Качественный ремонт квартиры в готовых, полностью построенных домах, на которые права собственности
                      уже оформлены и зарегистрированы в единой базе Росреестра.
                    </div>
                  </div>


                  <div class="check">
                    <input id="check2" type="checkbox" class="step_1" value="«Во вторичном жилье»" name="resellers">
                    <label for="check2" class="un-check"></label>
                  </div>
                </div>

                <a class="next-step scroll" href="#step2">Вперед</a>

                <div class="overlay">
                  <div class="result_step">
                    <p>Выбрано <span id="result_step__1"></span></p>
                  </div>
                </div>

                <div id="step2"></div>
              </div>
            </div>

            <div class="step step-2">
              <div class="step-inner">
                <div class="step-inner__new" id="inner_new">
                  <h2>2. Выберите количество комнат:</h2>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Студия</a>

                      <div class="hide-desc">

                      </div>
                    </div>

                    <div class="check">
                      <input id="check3" class="step_2" value="«Студия»" type="checkbox">
                      <label for="check3" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">1-комнатная квартира</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                      <input id="check4" class="step_2" value="«1-комнатная квартира»" type="checkbox">
                      <label for="check4" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">2-комнатная квартира</a>

                      <div class="hide-desc">

                      </div>
                    </div>

                    <div class="check">
                      <input id="check5" class="step_2" value="«2-комнатная квартира»" type="checkbox">
                      <label for="check5" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">3-комнатная кватира</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                      <input id="check6" class="step_2" value="«3-комнатная квартира»" type="checkbox">
                      <label for="check6" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">4-комнатная кватира</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                      <input id="check7" class="step_2" value="«4-комнатная квартира»" type="checkbox">
                      <label for="check7" class="un-check"></label>
                    </div>
                  </div>

                  <a class="next-step" href="#step3">Вперед</a>

                  <div class="overlay">
                    <div class="result_step">
                      <p>Выбрано <span id="result_step__2"></span></p>
                    </div>
                  </div>

                  <div id="step3"></div>
                </div>

                <div class="step-inner__old" id="inner_old">
                  <h2>2. Уточните, где хотите сделать ремонт:</h2>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Квартира целиком</a>

                      <div class="hide-desc">

                      </div>
                    </div>

                    <div class="check">
                      <input id="check8" class="step_2" value="«Квартира целеком»" type="checkbox">
                      <label for="check8" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Отдельно по помещениям</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                      <input id="check9" class="step_2" value="«Отдельно по помещениям»" type="checkbox">
                      <label for="check9" class="un-check"></label>
                    </div>
                  </div>

                  <a class="next-step scroll" href="#step3">Вперед</a>

                  <div class="overlay">
                    <div class="result_step">
                      <p>Выбрано <span id="result_step__2"></span></p>
                    </div>
                  </div>

                  <div id="step3"></div>
                </div>
              </div>
            </div>

            <div class="step step-3">
              <div class="step-inner">
                <div class="step-inner__building step-inner__3" id="building">
                  <h2>3. Сколько м<sup>2</sup> площади?:</h2>

                  <div class="item-type hidden">
                    <div class="title">
                    </div>
                    <div class="check">
                      <input id="check9" class="step_3" type="checkbox" checked>
                      <label for="check9" class="un-check"></label>
                    </div>
                  </div>

                  <div id="num_new_building">
                    <span>Метраж:</span>
                    <input type="text" class="step_3_metr" id="new_building" maxlength="3">
                  </div>

                  <a class="next-step scroll" href="#step4">Вперед</a>

                  <div class="overlay">
                    <div class="result_step">
                      <p>Указано <span id="result_step__3_metr"></span> м<sup>2</sup></p>
                    </div>
                  </div>

                  <div id="step4"></div>
                </div>

                <div class="step-inner__reseller_full old_remont step-inner__3" id="full">
                  <h2>3.1. Выберите количество комнат:</h2>

                  <div class="rooms">
                    <div class="item-type">
                      <div class="title">
                        <a href="#">Студия</a>

                        <div class="hide-desc">

                        </div>
                      </div>

                      <div class="check">
                      <span class="price hidden">
                        <span class="cost">0</span>
                      </span>

                        <input id="check14" class="step_3" value="«Студия»" type="checkbox">
                        <label for="check14" class="un-check"></label>
                      </div>
                    </div>

                    <div class="item-type">
                      <div class="title">
                        <a href="#">1-комнатная квартира</a>

                        <div class="hide-desc">

                        </div>
                      </div>
                      <div class="check">
                      <span class="price hidden">
                        <span class="cost">0</span>
                      </span>

                        <input id="check15" class="step_3" value="«1-комнатная квартира»" type="checkbox">
                        <label for="check15" class="un-check"></label>
                      </div>
                    </div>

                    <div class="item-type">
                      <div class="title">
                        <a href="#">2-комнатная квартира</a>

                        <div class="hide-desc">

                        </div>
                      </div>

                      <div class="check">
                      <span class="price hidden">
                        <span class="cost">0</span>
                      </span>

                        <input id="check16" class="step_3" value="«2-комнатная квартира»" type="checkbox">
                        <label for="check16" class="un-check"></label>
                      </div>
                    </div>

                    <div class="item-type">
                      <div class="title">
                        <a href="#">3-комнатная кватира</a>

                        <div class="hide-desc">

                        </div>
                      </div>
                      <div class="check">
                      <span class="price hidden">
                        <span class="cost">0</span>
                      </span>

                        <input id="check17" class="step_3" value="«3-комнатная квартира»" type="checkbox">
                        <label for="check17" class="un-check"></label>
                      </div>
                    </div>

                    <div class="item-type">
                      <div class="title">
                        <a href="#">4-комнатная кватира</a>

                        <div class="hide-desc">

                        </div>
                      </div>
                      <div class="check">
                      <span class="price hidden">
                        <span class="cost">0</span>
                      </span>

                        <input id="check18" class="step_3" value="«4-комнатная квартира»" type="checkbox">
                        <label for="check18" class="un-check"></label>
                      </div>
                    </div>
                  </div>

                  <h2>3.2. Сколько м<sup>2</sup> площади?:</h2>

                  <div id="num_new_building">
                    <span>Метраж:</span>
                    <input type="text" class="step_3_metr" id="new_building" maxlength="3">
                  </div>

                  <h2>3.3. Демонтаж:</h2>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Демонтаж обоев</a>

                      <div class="hide-desc">

                      </div>
                    </div>

                    <div class="check">
                    <span class="price">
                      <span class="cost">70</span> руб./м<sup>2</sup>
                    </span>

                      <input id="check22" class="step_3_demounting" value="«Демонтаж»" type="checkbox">
                      <label for="check22" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Демонтаж потолка</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                    <span class="price">
                      <span class="cost">130</span> руб./м<sup>2</sup>
                    </span>

                      <input id="check23" class="step_3_demounting" value="«Демонтаж»" type="checkbox">
                      <label for="check23" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Демонтаж пола</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                    <span class="price">
                      <span class="cost">190</span> руб./м<sup>2</sup>
                    </span>

                      <input id="check24" class="step_3_demounting" value="«Демонтаж»" type="checkbox">
                      <label for="check24" class="un-check"></label>
                    </div>
                  </div>

                  <a class="next-step scroll" href="#step4">Вперед</a>

                  <div class="overlay">
                    <div class="result_step">
                      <p>Выбрано <span id="result_step__3"></span> и указано <span id="result_step__3_metr"></span>
                        м<sup>2</sup></p>
                    </div>
                  </div>

                  <div id="step4"></div>
                </div>

                <div class="step-inner__reseller_parts old_remont step-inner__3" id="parts">

                  <h2>3.1. Где хотите сделать ремонт?</h2>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Комната</a>

                      <div class="hide-desc">

                      </div>
                    </div>

                    <div class="check">
                    <span class="price">
                      <span class="cost">13500</span> руб.
                    </span>

                      <input id="check28" class="step_3" value="Комната" type="checkbox">
                      <label for="check28" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Кухня</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                    <span class="price">
                      <span class="cost">7700</span> руб.
                    </span>

                      <input id="check29" class="step_3" value="Кухня" type="checkbox">
                      <label for="check29" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Ванная</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                    <span class="price">
                      <span class="cost">13600</span> руб.
                    </span>

                      <input id="check30" class="step_3" value="Ванная" type="checkbox">
                      <label for="check30" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Санузел</a>

                      <div class="hide-desc">

                      </div>
                    </div>

                    <div class="check">
                    <span class="price">
                      <span class="cost">9950</span> руб.
                    </span>

                      <input id="check31" class="step_3" value="Санузел" type="checkbox">
                      <label for="check31" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Совмещённый санузел</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                    <span class="price">
                      <span class="cost">15200</span> руб.
                    </span>

                      <input id="check32" class="step_3" value="Совмещённый санузел" type="checkbox">
                      <label for="check32" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Коридор</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                    <span class="price">
                      <span class="cost">3500</span> руб.
                    </span>

                      <input id="check33" class="step_3" value="Коридор" type="checkbox">
                      <label for="check33" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Балкон</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                    <span class="price">
                      <span class="cost">7990</span> руб.
                    </span>

                      <input id="check34" class="step_3" value="Балкон" type="checkbox">
                      <label for="check34" class="un-check"></label>
                    </div>
                  </div>

                  <h2>3.2 Сколько м<sup>2</sup> площади?:</h2>

                  <div id="num_new_building">
                    <span>Метраж:</span>
                    <input type="text" class="step_3_metr" id="new_building" maxlength="3">
                  </div>

                  <h2>3.3. Демонтаж:</h2>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Демонтаж обоев</a>

                      <div class="hide-desc">

                      </div>
                    </div>

                    <div class="check">
                    <span class="price">
                      <span class="cost">55</span> руб./м<sup>2</sup>
                    </span>

                      <input id="check25" class="step_3_demounting" value="«Демонтаж»" type="checkbox">
                      <label for="check25" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Демонтаж потолка</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                    <span class="price">
                      <span class="cost">160</span> руб./м<sup>2</sup>
                    </span>

                      <input id="check26" class="step_3_demounting" value="«Демонтаж»" type="checkbox">
                      <label for="check26" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Демонтаж пола</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                    <span class="price">
                      <span class="cost">210</span> руб./м<sup>2</sup>
                    </span>

                      <input id="check27" class="step_3_demounting" value="«Демонтаж»" type="checkbox">
                      <label for="check27" class="un-check"></label>
                    </div>
                  </div>

                  <a class="next-step scroll" href="#step4">Вперед</a>

                  <div class="overlay">
                    <div class="result_step">
                      <p>Выбрана <span id="result_step__3"></span> <span id="result_step__3_metr"></span>
                        м<sup>2</sup></p>
                    </div>
                  </div>

                  <div id="step4"></div>
                </div>
              </div>
            </div>

            <div class="step step-4">
              <div class="step-inner">
                <h2>4. Какой ремонт вы хотите сделать?</h2>

                <div class="step-inner__type_new" id="inner__type_new">
                  <div class="item-type">
                    <div class="title">
                      <a href="#">Косметический (эконом)</a>

                      <div class="hide-desc">

                      </div>
                    </div>

                    <div class="check">
                    <span class="price">
                      <span class="cost">3100</span> руб./м<sup>2</sup>
                    </span>

                      <input id="check11" class="step_4" value="«Косметический ремонт»" type="checkbox">
                      <label for="check11" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Оптимальный</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                    <span class="price">
                      <span class="cost">5300</span> руб./м<sup>2</sup>
                    </span>

                      <input id="check12" class="step_4" value="«Стандартный ремонт»" type="checkbox">
                      <label for="check12" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Дизайнерский</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                    <span class="price">
                      <span class="cost">8200</span> руб./м<sup>2</sup>
                    </span>

                      <input id="check13" class="step_4" value="«Евроремонт»" type="checkbox">
                      <label for="check13" class="un-check"></label>
                    </div>
                  </div>
                </div>

                <div class="step-inner__type_old" id="inner__type_old">
                  <div class="item-type">
                    <div class="title">
                      <a href="#">Косметический (Эконом)</a>

                      <div class="hide-desc">

                      </div>
                    </div>

                    <div class="check">
                    <span class="price">
                      <span class="cost">3100</span> руб./м<sup>2</sup>
                    </span>

                      <input id="check19" class="step_4" value="«Косметический ремонт»" type="checkbox">
                      <label for="check19" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Оптимальный</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                    <span class="price">
                      <span class="cost">5300</span> руб./м<sup>2</sup>
                    </span>

                      <input id="check20" class="step_4" value="«Стандартный ремонт»" type="checkbox">
                      <label for="check20" class="un-check"></label>
                    </div>
                  </div>

                  <div class="item-type">
                    <div class="title">
                      <a href="#">Дизайнерский</a>

                      <div class="hide-desc">

                      </div>
                    </div>
                    <div class="check">
                    <span class="price">
                      <span class="cost">8200</span> руб./м<sup>2</sup>
                    </span>

                      <input id="check21" class="step_4" value="«Евроремонт»" type="checkbox">
                      <label for="check21" class="un-check"></label>
                    </div>
                  </div>
                </div>

                <a href="#progress-bar" href="#done" class="done next-step scroll">Готово</a>

                <div class="overlay">
                  <div class="result_step">
                    <p>Выбрано <span id="result_step__4"></span></p>
                  </div>
                </div>

                <div id="done"></div>
              </div>
            </div>

            <div id="progress">
              <div id="progress-bar">
                <div id="progress-inner">0%</div>
              </div>
              <div id="progress-step">
                <p>шаг <span>1</span> из <span>4</span></p>
                <a href="#" id="button-payment">Расчитать</a>
              </div>
            </div>
          </div>

          <div id="result">
            <div class="wrap">
              <h2>Расчет стоимости ремонта:</h2>
              <div id="in-total" class="total">
                <div class="total__result">

                </div>

                <div class="total__description">
                  <p><small>* — стоимость ремонта приблизительная, для более корректной сметы необходим выезд нашего
                      специалиста</small></p>
                </div>
                <div id="form"></div>
              </div>
              <a href="#" id="button-order">Оформить заявку</a>
            </div>
          </div>

          <div id="form-wrap" class="total">
            <h4>Для уточнения деталей по объекту с Вами свяжется наш менеджер:</h4>

            <form action="/send_calculator.php" method="post" id="feedback" class="total__feedback_form order_form">
              <input type="hidden" name="token" id="token_calculator">
              <input type="hidden" name="action" id="action_calculator">

              <div class="flexbox">
                <input type="text" name="name" required placeholder="Ваше имя *">
                <input type="tel" name="phone" required placeholder="Ваш номер телефона *">
                <input type="hidden" name="email" value="respond@remonterra24.ru">
                <input type="submit" name="submit" class="submit" value="Отправить">
              </div>
            </form>
          </div>
        </div>

        <div id="overlay"></div>
      </div>

      <div class="waves">
        <div class="waves__wave">
          <img src="/resources/images/svg/wave_border.svg" alt="Wave Border">
        </div>

        <svg width="100%" height="95%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path
            id="feel-the-wave" d=""/></svg>
        <svg width="100%" height="95%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path
            id="feel-the-wave-two" d=""/></svg>
      </div>
    </section>
  </main>

<?php
get_footer();
