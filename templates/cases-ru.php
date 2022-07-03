<section class="our-blog__cases cases">
  <h2 class="subsection-title cases__title">Проекты</h2>
  <div class="cases__wrapper">
    
    <div id='primary-slider' class="swiper-container cases__slider-container cases__cursor-box">
      <ul class="swiper-wrapper cases__list ">
        <li class="swiper-slide cases__item card-case">
          <div class="card-case__img-box">
            <?php
              $img_url = esc_url( get_template_directory_uri(). '/images/cases/healthcare-full.png' ) ;
              $img_size = getimagesize($img_url)[3];
            ?>
            <img data-src="<?= $img_url; ?>" alt="" <?= $img_size; ?> class="card-case__img card-case__img-healthcare-tablet swiper-lazy no-lazyload">
          </div>
          <div class="card-case__info">
            <div class="card-case__name">Lytic Health</div>
            <h3 class="card-case__title">МЕДИЦИНСКОЕ ПРИЛОЖЕНИЕ</h3>
            <p class="card-case__text">Веб и мобильное приложения для докторов 
              и пациентов, которые автоматизируют процесс 
              постановки первичного диагноза и позволяют 
              безотлагательно назначить время 
              для консультации с лечащим врачом.</p>
            <a class="card-case__link rising-btn rising-btn--theme3" href="/ru/blog/дизайн-медицинского-стартапа/">
              <span class="rising-btn__inner">
                <span class="rising-btn__wrapper">
                  <span class="rising-btn__text">смотреть кейс</span>
                </span>
              </span>
            </a>
          </div>
        </li>
        <li class="swiper-slide cases__item card-case">
          <div class="card-case__img-box">
            <?php
              $img_url = esc_url( get_template_directory_uri(). '/images/cases/eye-buy-full.png' ) ;
              $img_size = getimagesize($img_url)[3];
            ?>
            <img data-src="<?= $img_url; ?>" <?= $img_size; ?> alt="" class="card-case__img card-case__img-eyebuy-mobile2 swiper-lazy no-lazyload">
          </div>
          <div class="card-case__info">
            <div class="card-case__name">Eye Buy</div>
            <h3 class="card-case__title">LIVE-STREAM-SHOPPING APP</h3>
            <p class="card-case__text">Приложение, которое позволяет пользователям
              наблюдать за эфиром и сразу же заказывать то,
              что они видят.</p>
            <a class="card-case__link rising-btn rising-btn--theme3" href="/ru/blog/razrabotka-live-stream-shopping-prilozhenia/">
              <span class="rising-btn__inner">
                <span class="rising-btn__wrapper">
                  <span class="rising-btn__text">смотреть кейс</span>
                </span>
              </span>
            </a>
          </div>
        </li>
        <li class="swiper-slide cases__item card-case">
          <div class="card-case__img-box">
            <?php
              $img_url = esc_url( get_template_directory_uri(). '/images/cases/petbuddy-full.png' ) ;
              $img_size = getimagesize($img_url)[3];
            ?>
            <img data-src="<?= $img_url; ?>" <?= $img_size; ?> alt="" class="card-case__img card-case__img-petbuddy-mobile1 swiper-lazy no-lazyload">
          </div>
          <div class="card-case__info">
            <div class="card-case__name">PetBuddy</div>
            <h3 class="card-case__title">СЕРВИС ДЛЯ ВЛАДЕЛЬЦЕВ ЖИВОТНЫХ</h3>
            <p class="card-case__text">Petbuddy помогает владельцам животных 
              создавать заметки, мониторить состояние
              здоровья, следить за количеством 
              употребляемой пищи.</p>
            <a class="card-case__link rising-btn rising-btn--theme3" href="/ru/blog/servis-dlya-vladelcev-zhivotnyh/">
              <span class="rising-btn__inner">
                <span class="rising-btn__wrapper">
                  <span class="rising-btn__text">смотреть кейс</span>
                </span>
              </span>
            </a>
          </div>
        </li>
        <li class="swiper-slide cases__item card-case">
          <div class="card-case__img-box">
            <?php
              $img_url = esc_url( get_template_directory_uri(). '/images/cases/pad-full.png' ) ;
              $img_size = getimagesize($img_url)[3];
            ?>
            <img data-src="<?= $img_url; ?>" <?= $img_size; ?> alt="" class="card-case__img swiper-lazy no-lazyload">
          </div>
          <div class="card-case__info">
            <div class="card-case__name">PAD</div>
            <h3 class="card-case__title">СЕРВИС АРЕНДЫ ЖИЛЬЯ</h3>
            <p class="card-case__text">Мобильное приложение PAD оптимизирует процесс
              поиска комнаты или соседа — в зависимости
              от того, что нужно пользователю.</p>
            <a class="card-case__link rising-btn rising-btn--theme3" href="/ru/blog/razrabotka-servisa-dlya-nedvizhimosti/">
              <span class="rising-btn__inner">
                <span class="rising-btn__wrapper">
                  <span class="rising-btn__text">смотреть кейс</span>
                </span>
              </span>
            </a>
          </div>
        </li>
        <li class="swiper-slide cases__item card-case">
          <div class="card-case__img-box">
            <?php
              $img_url = esc_url( get_template_directory_uri(). '/images/cases/notab-full.png' ) ;
              $img_size = getimagesize($img_url)[3];
            ?>
            <img data-src="<?= $img_url; ?>" <?= $img_size; ?> alt="" class="card-case__img swiper-lazy no-lazyload">
          </div>
          <div class="card-case__info">
            <div class="card-case__name">No Tab</div>
            <h3 class="card-case__title">НЕЗАВИСИМАЯ ЭКОСИСТЕМА ПРИЛОЖЕНИЙ ДЛЯ НОЧНЫХ КЛУБОВ</h3>
            <p class="card-case__text">Система приложений, которая сводит
              к минимуму личное общение между гостями
              и сотрудниками заведения.</p>
            <a class="card-case__link rising-btn rising-btn--theme3" href="/ru/blog/kak-my-za-polgoda-razrabotali-4-prilozheniya-i-odnu-adminku-dlya-nochnogo-kluba/">
              <span class="rising-btn__inner">
                <span class="rising-btn__wrapper">
                  <span class="rising-btn__text">смотреть кейс</span>
                </span>
              </span>
            </a>
          </div>
        </li>
      </ul>
      
    </div>
    <div id="secondary-slider" class="swiper-container cases__nav">

      <ul class="swiper-wrapper cases__nav-list">
        <li class="swiper-slide cases__nav-item">
        Медицинское Приложение
        </li>
        <li class="swiper-slide cases__nav-item">
        Live-Stream-Shopping App
        </li>
        <li class="swiper-slide cases__nav-item">
        Сервис Для Владельцев Животных
        </li>
        <li class="swiper-slide cases__nav-item">
        Сервис аренды жилья
        </li>
        <li class="swiper-slide cases__nav-item">
        Независимая экосистема приложений для ночных клубов
        </li>
      </ul>
      <div class="cases__nav-arrow cases__nav-prev swiper-button-prev"></div>
      <div class="cases__nav-arrow cases__nav-next swiper-button-next"></div>
    </div>
  </div>
</section>