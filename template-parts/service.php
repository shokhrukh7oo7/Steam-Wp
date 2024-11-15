<?php
/*
    Template name: Услуги
*/
get_header();
?>

    <!-- MAIN START -->
    <main>
      <section>
        <div class="container">
          <div class="servise-top-information-wrapper">
            <div class="service-top-information-header">
              Проводим диагностику и обслужииваем любую неисправность сауны
            </div>

            <div class="row">
              <div class="col-12 col-xl-4">
                <div class="service-top-left-wrapper">
                  <div class="service-info">
                    <h2 class="service-info-header">Ремонт от 1 дня</h2>
                    <p class="service-info-description">
                      Устраняем любые неисправности. Обычно ремонт занимает 1-3
                      дня. Если проблема сложная — предупредим заранее.
                    </p>
                  </div>
                  <div class="service-info">
                    <h2 class="service-info-header">
                      Ремонтируем только то, что сломано
                    </h2>
                    <p class="service-info-description">
                      Не навязываем услуги. Диагностируем и заранее
                      согласовываем стоимость ремонта.
                    </p>
                  </div>
                  <div class="service-info">
                    <h2 class="service-info-header">Оригинальные запчасти</h2>
                    <p class="service-info-description">
                      Благодаря прямым связям с производителями, у нас всегда
                      есть необходимые оригинальные комплектующие для вашей
                      сауны.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-4">
                <div class="video-container">
                  <video
                    src="/assets/images/services/saun.mp4"
                    alt="A cozy wooden sauna with warm lighting and a stone heater."
                    controls
                  ></video>
                  <div class="play-button" onclick="togglePlay()"></div>
                  <!-- <video controls>
                    <source src="/assets/images/services/saun.mp4" type="video/mp4" />
                    <source src="video.webm" type="video/webm" />
                    Ваш браузер не поддерживает тег видео.
                  </video>-->
                </div>
              </div>
              <div class="col-12 col-xl-4">
                <div class="service-top-right-wrapper">
                  <div class="service-info">
                    <h2 class="service-info-header">Гарантия</h2>
                    <p class="service-info-description">14 дней на ремонт</p>
                  </div>
                  <div class="service-info">
                    <h2 class="service-info-header">Бесплатное обслуживание</h2>
                    <p class="service-info-description">
                      В течение 1 года после покупки.
                    </p>
                  </div>
                  <div class="service-info">
                    <h2 class="service-info-header">Расширенная гарантия</h2>
                    <p class="service-info-description">До 36 месяцев</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="service-top-info-btn">
              <button
                class="btn service-leave-request-btn"
                id="service-leave-request-btn"
              >
                Оставить заявку
              </button>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <div class="service-bottom-information-wrapper">
            <div class="row">
              <div class="col-12 col-xl-6 my-3">
                <div class="service-bottom-info-wrapper">
                  <h1 class="top-header">
                    Увелиим срок службы вашей сауны в 2 раза
                  </h1>

                  <p class="top-header-description">
                    благодаря профессиональному обслуживанию от специалистов с
                    опытом 7+ лет.
                  </p>

                  <p class="top-header-description">
                    Перед жксплуатацией или продажей каждый впадалец может
                    заказать у нас дополнительную услугу - настройка и
                    обслуживание сауны. В зависимости от модели сауны
                    обслуживание может отличаться.
                  </p>

                  <p class="bottom-header">
                    Что входит в обслуживание:
                  </p>
                  <ul>
                    <li>
                        <img src="/assets/images/services/CheckCircle.png" alt="image">
                        Проверка и очистка нагревательных элементов
                    </li>
                    <li>
                        <img src="/assets/images/services/CheckCircle.png" alt="image">
                        Настройка температурного контроля
                    </li>
                    <li>
                        <img src="/assets/images/services/CheckCircle.png" alt="image">
                        Проверка и ремонт вентиляционной системы
                    </li>
                    <li>
                        <img src="/assets/images/services/CheckCircle.png" alt="image">
                        Проверка и подтяжка всех соединений
                    </li>
                    <li>
                        <img src="/assets/images/services/CheckCircle.png" alt="image">
                        И еще более 20 видов работ
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-xl-6 my-3">
                <div class="service-bottom-info-image-wrapper">
                  <img
                    src="/assets/images/services/service-banner.png"
                    alt="image"
                  />
                  <div class="service-image-info">
                    <img src="/assets/images/services/instrumental.png" alt="image"/>
                    <div class="service-image-title">
                      <p class="top-title">В среднем</p>
                      <h5 class="middle-title">150 доработок</h5>
                      <p class="bottom-title">
                        специалисты выполняют за 1 месяц
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- MAIN END -->

<?php
get_footer();
?>