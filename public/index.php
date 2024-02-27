<?php
require_once __DIR__ . '/helpers.php';
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8"/>
  <meta content="width=device-width, initial-scale=1.0"
        name="viewport"/>
  <title>Simitex</title>
    <?= vite('main.js') ?>
</head>
<body class="page">

<header class="header">
  <div class="container header__container">
    <a class="header__logo">
      <img
        alt="Simitex logo"
        height="28"
        src="img/logo-simitex.svg"
        width="155"
      >
    </a>
    <nav class="header__nav main-nav">
      <ul class="main-nav__list">
        <li class="main-nav__item">
          <a class="main-nav__link"
             href="#">Каталог</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link"
             href="#">Производители</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link"
             href="#">Для кого мы работаем</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link"
             href="#">Сертификаты</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link"
             href="#">О нас</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link"
             href="#">FAQ</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link"
             href="#">Контакты</a>
        </li>
      </ul>
    </nav>

    <a class="header__nav-phone-link"
       href="tel:+78123135845">+7 (812) 313-58-45</a>

    <button class="button header__nav-toggle"
            id="header-nav-toggle"
            title="Открыть меню"
            type="button"
    >
      <span class="visually-hidden">Открыть меню</span>
    </button>
  </div>
</header>

<main class="main">
  <section class="promo">
    <div class="container promo__container">
      <div class="promo__column">
        <h1 class="title promo__title"><span>Оптовые поставки</span>
          <span>электронных компонентов</span> <span>из&nbsp;Китая день&nbsp;в&nbsp;день</span></h1>
        <p class="promo__text">Комплексные поставки электронных компонентов и оборудования. Подберем аналоги популярных брендов из Европы в условиях санкций.</p>
        <ul class="promo__list">
          <li class="promo__list-item">Отсрочка платежей для постоянных клиентов</li>
          <li class="promo__list-item">Бесплатная доставка по Москве и СПБ в течение 2х часов</li>
          <li class="promo__list-item">Квалифицированный персональный менеджер</li>
        </ul>
      </div>
      <div class="promo__column">
        <div class="promo__form-container">
          <h2 class="title callback-form__title">Закажите обратный&nbsp;звонок</h2>
          <form action="process-callback-form.php"
                class="callback-form"
                method="post"
                id="callback-form">

            <div class="callback-form__field">
              <label class="callback-form__label"
                     for="name">Ваше имя*</label>
              <input class="callback-form__input"
                     id="name"
                     name="name"
                     placeholder="Петров Петр"
                     required
                     type="text"
              >
            </div>

            <div class="callback-form__field">
              <label class="callback-form__label"
                     for="phone">Ваш номер*</label>
              <input class="callback-form__input"
                     id="phone"
                     name="phone"
                     placeholder="+7 ( _ _ _ ) _ _ _-_ _-_ _"
                     required
                     type="tel"
              >
              <p class="callback-form__error">Вы уже отправили заказ. Повторная отправка невозможна.</p>
            </div>
            <input name="hidden-field"
                   type="hidden"
                   value="test">
            <button class="button callback-form__submit">Заказать звонок</button>
            <p class="callback-form__text">Мы гарантируем конфиденциальность данных</p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="benefits">
    <div class="container benefits__container">
      <h2 class="title benefits__title">Почему с нами выгодно</h2>
      <p class="benefits__text"> С 1996 года мы занимаемся оптовыми поставками электронных компонентов от ведущих
                                 производителей из Европы и Азии для Российских потребителей.</p>
      <ul class="benefits__list">
        <li class="benefits__item">
          <article class="benefits__card benefit-card">

            <img alt="Иконка Качественная продукция"
                 class="benefit-card__icon-image"
                 height="163"
                 src="img/benefits.png"
                 width="157">

            <div class="benefit-card__content">
              <h3 class="title benefit-card__title">Качественная продукция</h3>
              <p class="benefit-card__text">Все наши товары сертифицированы и имеют сопроводительную документацию.</p>
            </div>
          </article>
        </li>

        <li class="benefits__item">
          <article class="benefits__card benefit-card">
            <img alt="Иконка Индивидуальный подход"
                 class="benefit-card__icon-image"
                 height="163"
                 src="img/personal-approach.png"
                 width="157">
            <div class="benefit-card__content">
              <h3 class="title benefit-card__title">Индивидуальный подход</h3>
              <p class="benefit-card__text">Возможность изготовления компонентов специально для вас на
                                            заводах-изготовителя.</p>
            </div>
          </article>
        </li>

        <li class="benefits__item">
          <article class="benefits__card benefit-card">
            <img alt="Иконка Бесплатная доставка"
                 class="benefit-card__icon-image"
                 height="163"
                 src="img/free-delivery.png"
                 width="157">
            <div class="benefit-card__content">
              <h3 class="title benefit-card__title">Бесплатная доставка</h3>
              <p class="benefit-card__text">При наличии товара на складе и заказе от 10 000 рублей, доставим бесплатно
                                            по Москве и СПБ в течение 2х часов.</p>
            </div>
          </article>
        </li>

        <li class="benefits__item">
          <article class="benefits__card benefit-card">
            <img alt="Иконка Подбираем аналоги"
                 class="benefit-card__icon-image"
                 height="163"
                 src="img/free-delivery.png"
                 width="157">
            <div class="benefit-card__content">
              <h3 class="title benefit-card__title">Подбираем аналоги</h3>
              <p class="benefit-card__text">Поможем подобрать аналоги популярных европейских брендов в условиях
                                            санкций.</p>
            </div>
          </article>
        </li>

        <li class="benefits__item">
          <article class="benefits__card benefit-card">
            <img alt="Иконка Резервный запас компонентов"
                 class="benefit-card__icon-image"
                 height="163"
                 src="img/free-delivery.png"
                 width="157">
            <div class="benefit-card__content">
              <h3 class="title benefit-card__title">Резервный запас компонентов</h3>
              <p class="benefit-card__text">Хранение товара на наших складах для постоянных клиентов.</p>
            </div>
          </article>
        </li>

        <li class="benefits__item">
          <article class="benefits__card benefit-card">
            <img alt="Иконка Гибкая система оплаты"
                 class="benefit-card__icon-image"
                 height="163"
                 src="img/free-delivery.png"
                 width="157">
            <div class="benefit-card__content">
              <h3 class="title benefit-card__title">Гибкая система оплаты</h3>
              <p class="benefit-card__text">Отсрочка платежей для постоянных клиентов.</p>
            </div>
          </article>
        </li>
      </ul>
    </div>
  </section>

  <section class="manufactures">
    <div class="container manufactures__container">
      <h2 class="title manufactures__title">Наши производители</h2>

      <div class="manufactures__slider">
        <div class="manufactures-slider swiper">
          <ul class="manufactures-slider__list swiper-wrapper ">
            <li class="manufactures-slider__item swiper-slide">
              <a class="manufactures-slider__lin"
                 href="#">
                <img
                  alt="Логотип производителя"
                  class="manufactures-slider__image"
                  height="94"
                  src="img/manufactures-logos/aier.jpg"
                  width="150"
                >
              </a>
            </li>
            <li class="manufactures-slider__item swiper-slide">
              <a class="manufactures-slider__link"
                 href="#">
                <img
                  alt="Логотип производителя"
                  class="manufactures-slider__image"
                  height="47"
                  src="img/manufactures-logos/foryard.jpg"
                  width="186"
                >
              </a>
            </li>
            <li class="manufactures-slider__item swiper-slide">
              <a class="manufactures-slider__link"
                 href="#">
                <img
                  alt="Логотип производителя"
                  class="manufactures-slider__image"
                  height="106"
                  src="img/manufactures-logos/fujicon.jpg"
                  width="106"
                >
              </a>
            </li>
            <li class="manufactures-slider__item swiper-slide">
              <a class="manufactures-slider__link"
                 href="#">
                <img
                  alt="Логотип производителя"
                  class="manufactures-slider__image"
                  height="116"
                  src="img/manufactures-logos/js-artificial-grass.jpg"
                  width="171"
                >
              </a>
            </li>
            <li class="manufactures-slider__item swiper-slide">
              <a class="manufactures-slider__link"
                 href="#">
                <img
                  alt="Логотип производителя"
                  class="manufactures-slider__image"
                  height="40"
                  src="img/manufactures-logos/marquis.jpg"
                  width="183"
                >
              </a>
            </li>
            <li class="manufactures-slider__item swiper-slide">
              <a class="manufactures-slider__link"
                 href="#">
                <img
                  alt="Логотип производителя"
                  class="manufactures-slider__image"
                  height="94"
                  src="img/manufactures-logos/aier.jpg"
                  width="150"
                >
              </a>
            </li>
          </ul>
          <div class="manufactures-slider__pagination"></div>
        </div>
        <div class="manufactures-slider__control manufactures-slider__control--prev"></div>
        <div class="manufactures-slider__control manufactures-slider__control--next"></div>
      </div>

      <p class="manufactures__text">
        Откройте для себя непревзойденное качество и инновации благодаря нашему сотрудничеству с ведущими производителями электронных компонентов в Китае. Мы гордимся тем, что закупаем продукцию напрямую у признанных производителей, известных своими передовыми технологиями и строгим контролем качества. Наши партнерства гарантируют, что у вас есть доступ к огромному выбору компонентов, от стандартных микроконтроллеров до специализированных датчиков, отвечающих разнообразным потребностям электронных проектов.</p>
    </div>
  </section>

  <section class="workflow">
    <div class="container workflow__container">
      <h2 class="title workflow__title">Схема работы</h2>
      <p class="workflow__text">Lorem ipsum dolor sit amet consectetur. Augue velit in enim sagittis imperdiet sit mauris. Vitae sit in fusce massa amet.</p>
      <ol class="workflow__steps steps">
        <li class="steps__item">
          <div class="steps__wrapper">
            <div class="steps__content">
              <h3 class="title steps__title">Вы оставляете заявку</h3>
              <p class="steps__text"> Отправить запрос вы можете любым удобным для вас способом: например, через форму на сайте. Также вы можете связаться с нами напрямую</p>
            </div>
          </div>
        </li>

        <li class="steps__item">
          <div class="steps__wrapper">
            <div class="steps__content">
              <h3 class="title steps__title">Мы проверяем наличие позиций</h3>
              <p class="steps__text">Проверяем наличие на складе, а также актуальность производства (возможна замена, если необходимо.) Если требуется замена - подбираем аналоги и привозим на заказ.</p>
            </div>
          </div>
        </li>

        <li class="steps__item">
          <div class="steps__wrapper">
            <div class="steps__content">
              <h3 class="title steps__title">Формируем коммерческое предложение</h3>
              <p class="steps__text"> На данном этапе мы с вами согласуем ценовое предложение, обговариваем сроки поставки и условия оплаты.</p>
            </div>
          </div>
        </li>

        <li class="steps__item">
          <div class="steps__wrapper">
            <div class="steps__content">
              <h3 class="title steps__title">Проводим оплату</h3>
              <p class="steps__text">Далее, после получения авансового платежа, мы размещаем заказ.</p></div>
          </div>
        </li>

        <li class="steps__item">
          <div class="steps__wrapper">
            <div class="steps__content">
              <h3 class="title steps__title">Мы выполняем заказ</h3>
              <p class="steps__text"> Товар поступает на склад в Москву или Санкт-Петербург, где мы сверяем правильность поставки и начинаем сборку.</p>
            </div>
          </div>
        </li>

        <li class="steps__item">
          <div class="steps__wrapper">
            <div class="steps__content">
              <h3 class="title steps__title">Вы получаете товар</h3>
              <p class="steps__text"> Поставляем вам товар в надлежащей упаковке в сопровождении оригиналов всех необходимых документов либо вы забираете его самовывозом.</p>
            </div>
          </div>
        </li>

      </ol>
      <button class="button workflow__button">Оставить заявку</button>
    </div>
  </section>

  <section class="answers">
    <div class="container answers__container">
      <h2 class="title answers__title">Ответы на самые популярные вопросы в сфере
      </h2>
      <dl class="answers__list answers-list">
        <dt aria-expanded="false"
            class="answers-list__title">Как долго занимает доставка электронных компонентов из Китая в Россию?
        </dt>
        <dd aria-hidden="true"
            class="answers-list__definition">
          <p class="answers-list__text">Время доставки электронных компонентов из Китая в Россию может варьироваться в зависимости от нескольких факторов. В общем случае это зависит от выбранного метода доставки и всех таможенных процессов. Стандартные методы доставки могут занять несколько недель, в то время как ускоренные варианты могут значительно сократить время доставки.</p>
          <p class="answers-list__text">Важно учитывать возможные задержки из-за таможенного оформления, местных праздников или непредвиденных обстоятельств. Для получения более точной оценки стоит связаться с конкретным поставщиком доставки и рассмотреть варианты, соответствующие вашей срочности и бюджету.</p>
        </dd>

        <dt aria-expanded="false"
            class="answers-list__title">Какова стоимость доставки электронных компонентов в Россию?
        </dt>
        <dd aria-hidden="true"
            class="answers-list__definition">
          <p class="answers-list__text">Стоимость доставки электронных компонентов из Китая в Россию зависит от веса, размеров упаковки и выбранного метода доставки. В целом стандартные варианты доставки более доступны с точки зрения бюджета, но могут занять больше времени. Ускоренные или экспресс-доставки быстрее, но обычно дороже. </p>
          <p class="answers-list__text">Кроме того, некоторые поставщики или перевозчики могут предоставлять скидки на объемные отправки или частые поставки. Рекомендуется сравнить стоимость доставки различных поставщиков и выбрать вариант, соответствующий вашим бюджетным ограничениям и требованиям по времени.</p>
        </dd>

        <dt aria-expanded="false"
            class="answers-list__title">Есть ли какие-либо таможенные пошлины или налоги при получении электронных компонентов в России?
        </dt>
        <dd aria-hidden="true"
            class="answers-list__definition">
          <p class="answers-list__text">Да, при импорте электронных компонентов в Россию из Китая вы можете подлежать уплате таможенных пошлин и налогов. Эти сборы взимаются таможенными властями России и обычно зависят от декларированной стоимости товаров. Важно знать конкретные правила и ставки таможенных пошлин, применимых к электронным компонентам.</p>
          <p class="answers-list__text">Рекомендуется проконсультироваться с местными таможенными властями или использовать онлайн-ресурсы для определения применимых пошлин и налогов. Для избежания неожиданных расходов рекомендуется учесть эти сборы при составлении бюджета и тесно сотрудничать с вашим поставщиком доставки, чтобы обеспечить точную документацию и соответствие требованиям таможни.</p>
        </dd>

        <dt aria-expanded="false"
            class="answers-list__title">Могу ли я отслеживать отправку электронных компонентов в режиме реального времени?
        </dt>
        <dd aria-hidden="true"
            class="answers-list__definition">
          <p class="answers-list__text"> Да, большинство надежных перевозчиков предоставляют услуги отслеживания, которые позволяют вам мониторить вашу отправку электронных компонентов в режиме реального времени. Как только ваш заказ отправлен, вы получите номер отслеживания, который можно использовать для проверки текущего статуса и местоположения вашей посылки.</p>
          <p class="answers-list__text">Эта информация обычно доступна на сайте перевозчика или в специальном портале отслеживания. Отслеживание в реальном времени предоставляет ценную информацию о ходе доставки, включая ожидаемые даты поставки и возможные задержки. Рекомендуется регулярно проверять информацию отслеживания для своевременных обновлений и решения любых проблем, которые могут возникнуть в пути.</p>
        </dd>

        <dt aria-expanded="false"
            class="answers-list__title">Какие меры предпринимаются для обеспечения безопасной доставки электронных компонентов?
        </dt>
        <dd aria-hidden="true"
            class="answers-list__definition">
          <p class="answers-list__text"> Перевозчики принимают различные меры для обеспечения безопасной и надежной доставки электронных компонентов. К ним могут относиться надежная упаковка, безопасные процедуры обработки и опции страхования. Надежные поставщики и перевозчики придают большое значение защите хрупких или чувствительных предметов во время транспортировки. Кроме того, правильная таможенная документация играет важную роль в облегчении процессов клиринга и предотвращении нежелательных задержек.</p>
          <p class="answers-list__text">Рекомендуется общаться с вашим поставщиком относительно их практик упаковки и уточнить вопросы о страховании для электронных компонентов с высокой стоимостью. Выбор доверенного и опытного перевозчика может значительно способствовать безопасной и надежной доставке ваших товаров.</p>
        </dd>

      </dl>
    </div>
  </section>
</main>
<footer class="footer">
  <div class="container footer__container">
    <a class="footer__logo">
      <img
        alt="Simitex logo"
        height="28"
        src="img/logo-simitex.svg"
        width="155"
      >
    </a>
    <nav class="footer__nav main-nav">
      <ul class="main-nav__list">
        <li class="main-nav__item">
          <a class="main-nav__link"
             href="#">Каталог</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link"
             href="#">Производители</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link"
             href="#">Для кого мы работаем</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link"
             href="#">Сертификаты</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link"
             href="#">О нас</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link"
             href="#">Контакты</a>
        </li>
      </ul>
    </nav>

    <button class="button footer__button">Оставить заявку</button>
  </div>
</footer>
</body>
</html>
