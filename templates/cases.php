<section class="our-blog__cases cases">
  <h2 class="subsection-title cases__title">Cases</h2>
  <div class="cases__wrapper">
    
    <div id='primary-slider' class="swiper-container cases__slider-container cases__cursor-box">
      <ul class="swiper-wrapper cases__list">
        <li class="swiper-slide cases__item card-case">
          <div class="card-case__img-box card-case__img-box--healthcare">
            <div class="card-case__img-box-devices">
              <?php
                $img_url = esc_url( get_template_directory_uri(). '/images/cases/healthcare-full.png' ) ;
                $img_size = getimagesize($img_url)[3];
              ?>
              <img data-src="<?= $img_url; ?>" alt="" <?= $img_size; ?> class="card-case__img card-case__img-healthcare-tablet swiper-lazy no-lazyload">
            </div>
          </div>
          <div class="card-case__info">
            <div class="card-case__name">Lytic Health</div>
            <h3 class="card-case__title">Healthcare System</h3>
            <p class="card-case__text">Web and mobile apps for patients and doctors
              to automatically determine preliminary diagnosis
              and schedule the appointments.</p>
            <a class="card-case__link rising-btn rising-btn--theme3" href="/blog/healthcare-app-design-that-brought-400k/">
              <span class="rising-btn__inner">
                <span class="rising-btn__wrapper">
                  <span class="rising-btn__text">View case</span>
                </span>
              </span>
            </a>
          </div>
        </li>
        <li class="swiper-slide cases__item card-case">
          <div class="card-case__img-box card-case__img-box--eyebuy">
            <?php
              $img_url = esc_url( get_template_directory_uri(). '/images/cases/eye-buy-full.png' ) ;
              $img_size = getimagesize($img_url)[3];
            ?>
            <img data-src="<?= $img_url; ?>" <?= $img_size; ?> alt="" class="card-case__img card-case__img-eyebuy-mobile2 swiper-lazy no-lazyload">
          </div>
          <div class="card-case__info">
            <div class="card-case__name">Eye Buy</div>
            <h3 class="card-case__title">LIVE-STREAM-SHOPPING APP</h3>
            <p class="card-case__text">App that allows businesses to sell goods through
            online streaming and attract popular stars, bloggers,
            or influencers to the streams.</p>
            <a class="card-case__link rising-btn rising-btn--theme3" href="/blog/live-stream-shopping-app-development/">
              <span class="rising-btn__inner">
                <span class="rising-btn__wrapper">
                  <span class="rising-btn__text">View case</span>
                </span>
              </span>
            </a>
          </div>
        </li>
        <li class="swiper-slide cases__item card-case">
          <div class="card-case__img-box card-case__img-box--petbuddy">
            <?php
              $img_url = esc_url( get_template_directory_uri(). '/images/cases/petbuddy-full.png' ) ;
              $img_size = getimagesize($img_url)[3];
            ?>
            <img data-src="<?= $img_url; ?>" <?= $img_size; ?> alt="" class="card-case__img card-case__img-petbuddy-mobile1 swiper-lazy no-lazyload">
          </div>
          <div class="card-case__info">
            <div class="card-case__name">PetBuddy</div>
            <h3 class="card-case__title">Pet App Development</h3>
            <p class="card-case__text">Petbuddy is an app that lets users make pet’s 
              records, calculate the amount of food, search
              for a vet nearby. If you need MVP development
              services, get in touch!</p>
            <a class="card-case__link rising-btn rising-btn--theme3" href="/blog/app-development-for-petowners/">
              <span class="rising-btn__inner">
                <span class="rising-btn__wrapper">
                  <span class="rising-btn__text">View case</span>
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
            <h3 class="card-case__title">Real Estate App</h3>
            <p class="card-case__text">Mobile app that allows users — whether
              they need a flatmate or a room — to find
              what they want. It matches tenants 
              and landlords based on the geolocation
              and personal preferences.</p>
            <a class="card-case__link rising-btn rising-btn--theme3" href="/blog/real-estate-app-development/">
              <span class="rising-btn__inner">
                <span class="rising-btn__wrapper">
                  <span class="rising-btn__text">View case</span>
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
            <h3 class="card-case__title">INDEPENDENT ECOSYSTEM FOR NIGHTCLUBS</h3>
            <p class="card-case__text">System of apps that minimizes personal contact,
              helps to manage money flows and eliminates 
              queues at a bar counter.</p>
            <a class="card-case__link rising-btn rising-btn--theme3" href="/blog/4-apps-and-cms-for-night-clubs-in-six-months-purrwebs-case/">
              <span class="rising-btn__inner">
                <span class="rising-btn__wrapper">
                  <span class="rising-btn__text">View case</span>
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
        Healthcare System
        </li>
        <li class="swiper-slide cases__nav-item">
        Live-Stream-Shopping App
        </li>
        <li class="swiper-slide cases__nav-item">
        Pet App Development
        </li>
        <li class="swiper-slide cases__nav-item">
        Real Estate App
        </li>
        <li class="swiper-slide cases__nav-item">
        Independent Ecosystem For Nightclubs
        </li>
      </ul>
      <div class="cases__nav-arrow cases__nav-prev swiper-button-prev"></div>
      <div class="cases__nav-arrow cases__nav-next swiper-button-next"></div>
    </div>
  </div>
</section>