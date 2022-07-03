
  <footer id="footer" class="footer js-flexible-height js-flexible-height--theme2">
    <div class="container">
      <div class="footer__inner">
        <div class="footer__wrapper">
          <h2 class="footer__title">
            <?php _e('Let’s talk business', 'blog') ?>
          </h2>
    
          <iframe id="hidden_iframe" name="hidden_iframe" style="display:none;"></iframe>
          <form class="footer__form js-footer-form" target="hidden_iframe">
            <input class="footer__form-field js-field-name" type="text" name="entry.1228031061"
              aria-label="Name input field" placeholder="<?php _e('Name', 'blog') ?>" required autocomplete="on">
            <input class="footer__form-field" type="email" name="entry.1893682035"
              aria-label="Email input field" placeholder="test@purrweb.com" required autocomplete="on">
            <input class="footer__form-field" type="tel" name="entry.1413156463"
              aria-label="Phone input field" placeholder="" id="footer-phone-input" required autocomplete="on" minlength="4" maxlength="20">
            <textarea class="footer__form-field footer__form-field--area" name="entry.772928921"
              aria-label="Descriptions input field" placeholder="<?php _e('Project details', 'blog') ?>"></textarea>
              <input class="footer__form-hidden" type="hidden" name="entry.481086178" value="Purrweb123!">
              <input type="hidden" id="footer__form-token" name="token">
              <input class="footer__form-type footer__page-link" type="hidden" name="entry.281637821" value="footer-form-blog">
              <p class="footer__form-captcha-wrapper">
              This site is protected by reCAPTCHA and the Google
                <a class="footer__form-captcha-link" rel="nofollow" href="https://policies.google.com/privacy">Privacy Policy</a> and
                <a class="footer__form-captcha-link" rel="nofollow" href="https://policies.google.com/terms">Terms of Service</a> apply.
              </p>
            <button  id="order-form-btn" class="footer__form-btn rising-btn rising-btn--theme2" onclick="ym(52342033, 'reachGoal', 'CLK_SUCCESS'); return true;">
              <span class="rising-btn__inner">
                <span class="rising-btn__wrapper">
                  <span id="gtm-footer-submit" class="rising-btn__text">
                    <?php _e('Send', 'blog') ?>
                  </span>
                </span>
              </span>
            </button>
          </form>
    
          <section class="footer__contacts contacts">
            <h2 class="contacts__title">
              <?php _e('Contacts', 'blog') ?>
            </h2>
            <ul class="contacts__list">
              <li class="footer__contact-item">
                <a class="contacts__item-link" href="mailto:hi@purrweb.com" rel="noreferrer noopener" target="_blank" onclick="ym(52342033, 'reachGoal', 'CLK_EMAIL'); return true;">
                  <div class="contacts__item-img">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewbox="0 0 24 24">
                      <g fill="#fff" clip-path="url(#f-mail)">
                        <path d="M21.857 21.428c.54 0 1.007-.178 1.404-.53l-6.8-6.8-.47.339c-.509.375-.922.667-1.239.877-.317.21-.739.424-1.265.643-.527.219-1.018.328-1.474.328h-.026c-.456 0-.947-.11-1.474-.328-.527-.219-.949-.433-1.265-.643-.317-.21-.73-.502-1.24-.877-.141-.104-.298-.218-.469-.34l-6.8 6.801c.397.352.865.53 1.404.53h19.714zM1.353 9.817A7.1 7.1 0 0 1 0 8.652v10.345l5.993-5.993a462.282 462.282 0 0 0-4.64-3.187zM22.66 9.817a394.887 394.887 0 0 0-4.65 3.19l5.99 5.99V8.652c-.384.429-.83.817-1.34 1.165z"/>
                        <path d="M21.857 2.57H2.143c-.688 0-1.216.233-1.587.697C.186 3.731 0 4.312 0 5.008c0 .563.246 1.172.737 1.828.49.657 1.013 1.172 1.567 1.547.303.215 1.219.85 2.745 1.909a868.264 868.264 0 0 1 3.51 2.444 36.93 36.93 0 0 1 .569.409c.29.21.53.379.723.509.191.13.424.274.696.435.273.16.53.281.77.361.242.08.465.12.67.12h.027c.205 0 .428-.04.67-.12.24-.08.497-.2.77-.361.272-.161.504-.306.696-.435.192-.13.433-.3.723-.51a97.64 97.64 0 0 1 .57-.408c.29-.203.745-.518 1.355-.942l4.913-3.41a6.37 6.37 0 0 0 1.633-1.648c.437-.643.656-1.317.656-2.022 0-.59-.212-1.094-.636-1.514a2.071 2.071 0 0 0-1.507-.63z"/>
                      </g>
                      <defs>
                        <clippath id="f-mail">
                          <path fill="#fff" d="M0 0h24v24H0z"/>
                        </clippath>
                      </defs>
                    </svg>
                  </div>
                  hi@purrweb.com
                </a>              
              </li>

              <?php if (pll_current_language() == 'en'): ?>
                <li class="footer__contact-item">
                    <a 
                    class="contacts__item-link" 
                    href="tel:+14844608069" 
                    rel="noreferrer noopener" 
                    target="_blank"
                    onclick=" ym(52342033,'reachGoal','CLK_PHONE_CALL'); return true;"
                    >
                      <div class="contacts__item-img">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M23.571 20.051C23.0821 21.4104 21.1417 22.5378 19.594 22.8671C18.5351 23.089 17.152 23.2661 12.4961 21.3655C6.54061 18.9361 2.70541 12.9774 2.4065 12.5908C2.12025 12.2042 0 9.43554 0 6.57215C0 3.70875 1.47683 2.31447 2.07212 1.71585C2.56102 1.22448 3.3691 1 4.14424 1C4.39503 1 4.62048 1.01247 4.82313 1.02245C5.41842 1.04739 5.71733 1.08231 6.10997 2.00768C6.59887 3.1675 7.78946 6.03089 7.93131 6.32522C8.0757 6.61954 8.22009 7.01862 8.01744 7.40522C7.82745 7.8043 7.66027 7.98139 7.36135 8.32061C7.06244 8.65983 6.77873 8.91923 6.47981 9.28339C6.20623 9.60016 5.89719 9.93938 6.2417 10.5255C6.58621 11.0992 7.77679 13.0123 9.52973 14.5487C11.7918 16.5317 13.6258 17.1652 14.2819 17.4346C14.7708 17.6341 15.3535 17.5867 15.7106 17.2126C16.1641 16.7312 16.7239 15.9331 17.2939 15.1474C17.6992 14.5837 18.2109 14.5138 18.7479 14.7134C19.2951 14.9004 22.1904 16.3097 22.7857 16.6015C23.381 16.8958 23.7737 17.0355 23.9181 17.2824C24.0599 17.5294 24.0599 18.6892 23.571 20.051Z" fill="white"/>
                          </svg>                    
                      </div>
                      +14844608069
                    </a>
                  </li>
                <?php endif; ?>
                <?php if (pll_current_language() == 'ru'): ?>
                <li class="footer__contact-item">
                    <a 
                    class="contacts__item-link" 
                    href="tel:+74951289462" 
                    rel="noreferrer noopener" 
                    target="_blank"
                    onclick=" ym(52342033,'reachGoal','CLK_PHONE_CALL'); return true;"
                    >
                      <div class="contacts__item-img">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M23.571 20.051C23.0821 21.4104 21.1417 22.5378 19.594 22.8671C18.5351 23.089 17.152 23.2661 12.4961 21.3655C6.54061 18.9361 2.70541 12.9774 2.4065 12.5908C2.12025 12.2042 0 9.43554 0 6.57215C0 3.70875 1.47683 2.31447 2.07212 1.71585C2.56102 1.22448 3.3691 1 4.14424 1C4.39503 1 4.62048 1.01247 4.82313 1.02245C5.41842 1.04739 5.71733 1.08231 6.10997 2.00768C6.59887 3.1675 7.78946 6.03089 7.93131 6.32522C8.0757 6.61954 8.22009 7.01862 8.01744 7.40522C7.82745 7.8043 7.66027 7.98139 7.36135 8.32061C7.06244 8.65983 6.77873 8.91923 6.47981 9.28339C6.20623 9.60016 5.89719 9.93938 6.2417 10.5255C6.58621 11.0992 7.77679 13.0123 9.52973 14.5487C11.7918 16.5317 13.6258 17.1652 14.2819 17.4346C14.7708 17.6341 15.3535 17.5867 15.7106 17.2126C16.1641 16.7312 16.7239 15.9331 17.2939 15.1474C17.6992 14.5837 18.2109 14.5138 18.7479 14.7134C19.2951 14.9004 22.1904 16.3097 22.7857 16.6015C23.381 16.8958 23.7737 17.0355 23.9181 17.2824C24.0599 17.5294 24.0599 18.6892 23.571 20.051Z" fill="white"/>
                          </svg>                    
                      </div>
                      +74951289462
                    </a>
                  </li>
                <?php endif; ?>

            <li class="footer__contact-item">
              <a class="contacts__item-link" 
                href="https://www.messenger.com/t/purrweb.agency" 
                rel="noreferrer noopener" 
                target="_blank" 
                onclick="ym(52342033, 'reachGoal', 'CLK_SKYPE'); return true;"
              >
                <div class="contacts__item-img">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" fill="none" viewBox="0 0 24 26">
                    <g clip-path="url(#facebook-messenger)">
                      <path fill="#fff" fill-rule="evenodd" d="M4.42 25.077V20.77C1.723 18.717 0 15.59 0 12.09 0 5.905 5.373.892 12 .892c6.628 0 12 5.013 12 11.196 0 6.184-5.372 11.197-12 11.197-1.236 0-2.43-.175-3.552-.498l-4.028 2.29zm-.173-9.202l6.472-6.852 3.106 3.175 5.824-3.175-6.435 6.852-3.077-3.232-5.89 3.232z" clip-rule="evenodd"/>
                    </g>
                    <defs>
                      <clipPath id="facebook-messenger">
                        <path fill="#fff" d="M0 0h24v24.214H0z" transform="translate(0 .893)"/>
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                Facebook Messenger
              </a>
            </li>
              
              <li class="footer__contact-item">
                <a class="contacts__item-link" href="<?php _e('https://t.me/purrweb_agency', 'blog')?>" rel="noreferrer noopener" data-no-router="true" target="_blank" onclick="ym(52342033, 'reachGoal', 'CLK_TELEGRAM'); return true;">
                  <div class="contacts__item-img">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="21" fill="none" viewBox="0 0 24 21">
                      <path fill="#fff" d="M.424 10.02l5.53 2.064 2.14 6.883a.651.651 0 0 0 1.034.312l3.083-2.513a.92.92 0 0 1 1.121-.032l5.56 4.037a.652.652 0 0 0 1.021-.394L23.986.786a.652.652 0 0 0-.873-.741L.417 8.8a.652.652 0 0 0 .007 1.22zm7.326.965l10.807-6.657c.195-.119.394.144.228.298l-8.92 8.292a1.849 1.849 0 0 0-.573 1.106l-.304 2.252c-.04.3-.462.33-.545.04l-1.169-4.107a1.088 1.088 0 0 1 .476-1.224z"/>
                    </svg>
                  </div>
                  Telegram
                </a>
              </li>
    
              <li class="footer__contact-item">
                <a class="contacts__item-link" href="<?php _e('https://api.whatsapp.com/send/?phone=14844608069&text=Hi+Purrweb%2C+I+want+you+to+help+me+with&app_absent=0', 'blog') ?>" rel="noreferrer noopener" target="_blank" onclick="ym(52342033, 'reachGoal', 'CLK_WHATSAPP'); return true;">
                  <div class="contacts__item-img">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewbox="0 0 24 24">
                      <path fill="#fff" d="M12.003 0h-.006C5.38 0 0 5.382 0 12c0 2.625.846 5.058 2.284 7.034L.79 23.49l4.613-1.474A11.896 11.896 0 0 0 12.003 24C18.619 24 24 18.616 24 12c0-6.617-5.38-12-11.997-12zm6.982 16.945c-.289.818-1.438 1.496-2.354 1.694-.628.134-1.447.24-4.204-.903-3.526-1.461-5.797-5.045-5.974-5.277-.17-.232-1.425-1.897-1.425-3.62 0-1.722.875-2.56 1.227-2.92.29-.295.768-.43 1.227-.43.148 0 .282.007.402.013.352.015.53.036.762.593.29.697.994 2.419 1.079 2.596.085.177.17.417.05.65-.112.24-.211.346-.388.55-.177.204-.345.36-.522.579-.162.19-.345.394-.141.747.204.345.909 1.495 1.947 2.42 1.34 1.192 2.426 1.573 2.814 1.735.29.12.635.091.846-.133.269-.29.6-.77.938-1.243.24-.338.543-.38.86-.26.324.112 2.039.96 2.391 1.135.353.177.585.261.671.41.084.148.084.845-.206 1.664z"/>
                    </svg>
                  </div>
                  WhatsApp
                </a>
              </li>
              
              <li class="footer__contact-item">
                <a class="contacts__item-link" href="skype:nikonenkosergey?chat" rel="noreferrer noopener" target="_blank" onclick="ym(52342033, 'reachGoal', 'CLK_SKYPE'); return true;">
                  <div class="contacts__item-img">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewbox="0 0 24 24">
                      <path fill="#fff" d="M22.998 13.737c.09-.566.136-1.146.136-1.738C23.134 5.85 18.15.865 12 .865c-.59 0-1.171.048-1.737.137a6.729 6.729 0 0 0-9.26 9.26A11.338 11.338 0 0 0 .866 12c0 6.15 4.985 11.133 11.133 11.133.59 0 1.172-.045 1.738-.135a6.729 6.729 0 0 0 9.26-9.261zm-5.712 3.327c-.471.678-1.163 1.208-2.067 1.589-.906.382-1.977.572-3.214.572-1.482 0-2.709-.26-3.677-.783a4.766 4.766 0 0 1-1.675-1.506c-.43-.628-.648-1.242-.648-1.842 0-.353.135-.661.397-.912.266-.252.607-.379 1.01-.379.33 0 .615.1.846.297.229.197.421.483.579.861.188.438.393.804.61 1.097.217.288.522.529.917.718.39.189.91.283 1.56.283.89 0 1.609-.192 2.159-.572.553-.383.819-.85.819-1.412 0-.45-.144-.806-.438-1.085-.296-.281-.679-.496-1.154-.646a20.774 20.774 0 0 0-1.92-.48c-1.076-.236-1.977-.51-2.707-.824-.73-.315-1.313-.746-1.744-1.291-.432-.55-.647-1.234-.647-2.044 0-.772.227-1.463.682-2.064.456-.602 1.114-1.064 1.973-1.385.856-.321 1.863-.482 3.017-.482.923 0 1.721.107 2.397.32.674.213 1.236.496 1.685.85.447.354.775.727.983 1.118.208.393.313.776.313 1.15 0 .348-.135.664-.398.94a1.314 1.314 0 0 1-.992.417c-.354 0-.631-.081-.824-.254-.187-.167-.384-.433-.597-.804-.27-.518-.592-.921-.967-1.21-.365-.283-.967-.43-1.805-.428-.776 0-1.396.158-1.864.468-.472.315-.697.68-.698 1.108 0 .268.078.495.233.688.158.195.377.364.659.507.282.145.568.257.856.337.292.083.776.202 1.448.36.843.182 1.608.385 2.295.607.686.222 1.272.49 1.755.81a3.42 3.42 0 0 1 1.14 1.215c.275.492.411 1.092.411 1.798a3.906 3.906 0 0 1-.708 2.293z"/>
                    </svg>
                  </div>
                  Skype
                </a>
              </li>
              <!-- <li class="footer__contact-item footer__contact-item--pl">
                <a class="contacts__item-link" href="<?php /* echo pll_current_language() == 'en' ? '/design-concepts/' : '/ru/dizajn-koncepty/' */?>" >
                  
                  <?php /* echo pll_current_language() == 'en' ? 'Our designs concepts' : 'Наш дизайн и концепты' */?>
                </a>
              </li> -->
              <!-- <li class="footer__contact-item">
                <a class="contacts__item-link" href="#" rel="noreferrer noopener" target="_blank" onclick="ym(52342033, 'reachGoal', 'CLK_SKYPE'); return true;">
                  <div class="contacts__item-img">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewbox="0 0 24 24">
                      <path fill="#fff" fill-rule="evenodd" d="M0 5.103A5.109 5.109 0 0 1 5.115 0h13.77A5.109 5.109 0 0 1 24 5.103v13.794A5.109 5.109 0 0 1 18.885 24H5.115A5.109 5.109 0 0 1 0 18.897V5.103zm10.286 6.869a2.835 2.835 0 0 1-2.839 2.832 2.835 2.835 0 0 1-2.838-2.832A2.835 2.835 0 0 1 7.447 9.14a2.835 2.835 0 0 1 2.839 2.832zm6.38 2.832a2.835 2.835 0 0 0 2.837-2.832 2.835 2.835 0 0 0-2.838-2.832 2.835 2.835 0 0 0-2.838 2.832 2.835 2.835 0 0 0 2.838 2.832z" clip-rule="evenodd"/>
                    </svg>
                  </div>
                  Botim
                </a>
              </li> -->
    
              <!-- <li class="footer__contact-item">
                <a class="contacts__item-link" href="weixin://dl/chat?{+79620392994}" rel="noreferrer noopener" target="_blank" onclick="ym(52342033, 'reachGoal', 'CLK_SKYPE'); return true;">
                  <div class="contacts__item-img">
                    <svg width="24" height="20" viewbox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.59151 5.86784C4.92635 5.86784 4.38726 5.34495 4.38726 4.70141C4.38726 4.05726 4.92635 3.53617 5.59151 3.53617C6.25667 3.53617 6.79697 4.05726 6.79697 4.70141C6.79697 5.34495 6.25667 5.86784 5.59151 5.86784ZM11.5601 3.53617C12.2252 3.53617 12.7637 4.05726 12.7637 4.70141C12.7637 5.34495 12.2252 5.86784 11.5601 5.86784C10.8943 5.86784 10.3564 5.34495 10.3564 4.70141C10.3564 4.05726 10.8943 3.53617 11.5601 3.53617ZM16.6909 6.06749C16.8121 6.06749 16.9322 6.06869 17.0516 6.07529C16.4201 2.63363 12.8656 0 8.57565 0C3.83908 0 0 3.21114 0 7.17209C0 9.49475 1.31952 11.5593 3.36603 12.8698C3.39244 12.8866 3.44467 12.9196 3.44467 12.9196L2.61622 15.5148L5.7163 13.936C5.7163 13.936 5.81355 13.9636 5.86218 13.978C6.71404 14.2151 7.62774 14.3436 8.57565 14.3436C8.76896 14.3436 8.96106 14.3358 9.15196 14.3262C8.97607 13.7805 8.87942 13.2072 8.87942 12.6152C8.87942 8.99828 12.3781 6.06749 16.6909 6.06749Z" fill="white"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2166 10.5706C13.2166 10.0279 13.6729 9.58665 14.2342 9.58665C14.7967 9.58665 15.2523 10.0279 15.2523 10.5706C15.2523 11.1157 14.7967 11.5575 14.2342 11.5575C13.6729 11.5575 13.2166 11.1157 13.2166 10.5706ZM18.2592 10.5706C18.2592 10.0279 18.7142 9.58665 19.2761 9.58665C19.8386 9.58665 20.2937 10.0279 20.2937 10.5706C20.2937 11.1157 19.8386 11.5575 19.2761 11.5575C18.7142 11.5575 18.2592 11.1157 18.2592 10.5706ZM9.51025 12.6581C9.51025 16.0049 12.755 18.7178 16.7568 18.7178C17.557 18.7178 18.329 18.6085 19.0482 18.4074C19.0896 18.3966 19.1719 18.372 19.1719 18.372L21.7899 19.7071L21.0899 17.5135C21.0899 17.5135 21.1344 17.4859 21.1566 17.4721C22.8849 16.3651 24.0003 14.6212 24.0003 12.6581C24.0003 9.31248 20.7568 6.59961 16.7568 6.59961C12.755 6.59961 9.51025 9.31248 9.51025 12.6581Z" fill="white"/>
                    </svg>
                  </div>
                  Wechat
                </a>
              </li> -->
    
              <!-- <li class="footer__contact-item">
                <a class="contacts__item-link" href="viber://chat?number=+79620392994" rel="noreferrer noopener" target="_blank" onclick="ym(52342033, 'reachGoal', 'CLK_SKYPE'); return true;">
                  <div class="contacts__item-img">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" fill="none" viewbox="0 0 24 20">
                      <path fill="#fff" fill-rule="evenodd" d="M5.592 5.868c-.666 0-1.205-.523-1.205-1.167s.54-1.165 1.205-1.165 1.205.521 1.205 1.165-.54 1.167-1.205 1.167zm5.968-2.332c.665 0 1.204.521 1.204 1.165s-.539 1.167-1.204 1.167c-.666 0-1.204-.523-1.204-1.167s.538-1.165 1.204-1.165zm5.13 2.531c.122 0 .242.002.362.008C16.42 2.634 12.866 0 8.576 0 3.839 0 0 3.211 0 7.172c0 2.323 1.32 4.387 3.366 5.698l.079.05-.829 2.595 3.1-1.579.146.042a10.128 10.128 0 0 0 3.29.348 5.562 5.562 0 0 1-.273-1.71c0-3.618 3.5-6.549 7.812-6.549z" clip-rule="evenodd"/>
                      <path fill="#fff" fill-rule="evenodd" d="M13.217 10.57c0-.542.456-.983 1.017-.983.563 0 1.018.44 1.018.984 0 .545-.455.986-1.018.986-.561 0-1.017-.441-1.017-.986zm5.042 0c0-.542.455-.983 1.017-.983.563 0 1.018.44 1.018.984 0 .545-.455.986-1.018.986-.562 0-1.017-.441-1.017-.986zM9.51 12.659c0 3.347 3.245 6.06 7.247 6.06.8 0 1.572-.11 2.291-.31.042-.011.124-.036.124-.036l2.618 1.335-.7-2.194.067-.04C22.885 16.364 24 14.62 24 12.657 24 9.312 20.757 6.6 16.757 6.6c-4.002 0-7.247 2.712-7.247 6.058z" clip-rule="evenodd"/>
                    </svg>
                  </div>
                  Viber
                </a>
              </li> -->
            </ul>
    
            <!-- <p class="contacts__text">
              ('Follow', 'blog') 
            </p> -->
            <!-- <ul class="contacts__social social">
              <li class="social__item">
                <a class="social__item-link" href="https://medium.com/@purrweb" rel="noreferrer noopener" target="_blank" onclick="ym(52342033, 'reachGoal', 'CLK_MEDIUM_INTRO'); return true;">
                  <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgdmlld0JveD0iMCAwIDEwMCAxMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMCA1MEMwIDIyLjM4NTggMjIuMzg1OCAwIDUwIDBDNzcuNjE0MiAwIDEwMCAyMi4zODU4IDEwMCA1MEMxMDAgNzcuNjE0MiA3Ny42MTQyIDEwMCA1MCAxMDBDMjIuMzg1OCAxMDAgMCA3Ny42MTQyIDAgNTBaTTQxLjk1OTMgMzYuNTM1M0wyNS45NTEgMjguNjI1OUMyNS44MTQgMjguNTU4MiAyNS42ODM0IDI4LjUyNjIgMjUuNTY1NSAyOC41MjYyQzI1LjM5NzQgMjguNTI2MiAyNS4yNTUzIDI4LjU5MTUgMjUuMTU1MyAyOC43MTA3QzI1LjA1NzQgMjguODI3MyAyNSAyOC45OTU4IDI1IDI5LjIwNjZWNjMuMTYxOEMyNSA2My43Mzk3IDI1LjQyOCA2NC40MjM5IDI1Ljk1MSA2NC42ODIzTDQwLjc0NDYgNzEuOTkxNUM0MC45NTAxIDcyLjA5MzEgNDEuMTQ1OSA3Mi4xNDEyIDQxLjMyMjggNzIuMTQxMkM0MS44MjEzIDcyLjE0MTIgNDIuMTcwOSA3MS43NjAxIDQyLjE3MDkgNzEuMTIwNFYzNi44NzM4QzQyLjE3MDkgMzYuNzMwNSA0Mi4wODkgMzYuNTk5NCA0MS45NTkzIDM2LjUzNTNaTTc1LjA4NDcgNzEuOTgwM0w2MC43MDk1IDY0Ljg3NzlMNzYuNTExMSAzOS41MDQ0VjcxLjEwOTFDNzYuNTExMSA3MS45NzU5IDc1Ljg2OTIgNzIuMzY3OSA3NS4wODQ3IDcxLjk4MDNaTTQzLjY4OCAzOS4wNzcxVjU2LjQ3ODdMNTkuMzQxNCA2NC4yMTI3TDQzLjY4OCAzOS4wNzcxWk01OS44MTcgMjguMzkwOUw3Ni4xMzQ0IDM2LjQ1MzFDNzYuMzM3NyAzNi41NTM1IDc2LjQxIDM2LjgwNDMgNzYuMjkwOSAzNi45OTU3TDYwLjIzMjUgNjIuNzgxN0w0OS4wMDU0IDQ0Ljc1MzRMNTkuMDYyOCAyOC42MDMzQzU5LjE2OTggMjguNDMxOCA1OS4zNjczIDI4LjMzMzMgNTkuNTY1OCAyOC4zMzMzQzU5LjU2ODUgMjguMzMzMyA1OS41NzExIDI4LjMzMzcgNTkuNTczOCAyOC4zMzQyQzU5LjU3NjQgMjguMzM0NiA1OS41Nzg5IDI4LjMzNSA1OS41ODE2IDI4LjMzNTFDNTkuNjYyMiAyOC4zMzcyIDU5Ljc0MjkgMjguMzU0MiA1OS44MTcgMjguMzkwOVoiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo=" alt="Medium">
                  <span class="visually-hidden">Medium</span>
                </a>
              </li>
              <li class="social__item">
                <a class="social__item-link" href="https://www.facebook.com/purrweb.agency" rel="noreferrer noopener" target="_blank" onclick="ym(52342033, 'reachGoal', 'CLK_FACEBOOK_INTRO'); return true;">
                  <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgdmlld0JveD0iMCAwIDEwMCAxMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNTAgMEMyMi4zODU4IDAgMCAyMi4zODU4IDAgNTBDMCA3Ny42MTQyIDIyLjM4NTggMTAwIDUwIDEwMEM3Ny42MTQyIDEwMCAxMDAgNzcuNjE0MiAxMDAgNTBDMTAwIDIyLjM4NTggNzcuNjE0MiAwIDUwIDBaTTU1LjIxMTcgNTIuMTk2M1Y3OS4zOTg5SDQzLjk1NjZWNTIuMTk3M0gzOC4zMzM1VjQyLjgyMzJINDMuOTU2NlYzNy4xOTQ5QzQzLjk1NjYgMjkuNTQ3NSA0Ny4xMzE3IDI1IDU2LjE1MjYgMjVINjMuNjYyOFYzNC4zNzUySDU4Ljk2ODRDNTUuNDU2OCAzNC4zNzUyIDU1LjIyNDUgMzUuNjg1MyA1NS4yMjQ1IDM4LjEzMDJMNTUuMjExNyA0Mi44MjIxSDYzLjcxNkw2Mi43MjA5IDUyLjE5NjNINTUuMjExN1oiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo=" alt="Facebook">
                  <span class="visually-hidden">Facebook</span>
                </a>
              </li>
              <li class="social__item">
                <a class="social__item-link" href="https://www.instagram.com/purrweb/" rel="noreferrer noopener" target="_blank" onclick="ym(52342033, 'reachGoal', 'CLK_INSTAGRAM_INTRO'); return true;">
                  <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgdmlld0JveD0iMCAwIDEwMCAxMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNTAgMEMyMi4zODU4IDAgMCAyMi4zODU4IDAgNTBDMCA3Ny42MTQyIDIyLjM4NTggMTAwIDUwIDEwMEM3Ny42MTQyIDEwMCAxMDAgNzcuNjE0MiAxMDAgNTBDMTAwIDIyLjM4NTggNzcuNjE0MiAwIDUwIDBaTTM5LjAwNyAyMy40OTQ0QzQxLjg1MDkgMjMuMzY1IDQyLjc2IDIzLjMzMzMgNDkuOTk4NSAyMy4zMzMzQzU3LjIzOTIgMjMuMzMzMyA1OC4xNDUgMjMuMzY1IDYwLjk4ODkgMjMuNDk0NEM2My44Mjc4IDIzLjYyNDQgNjUuNzY2NyAyNC4wNzM5IDY3LjQ2NjcgMjQuNzMzM0M2OS4yMjIzIDI1LjQxMzkgNzAuNzA1NyAyNi4zMjUgNzIuMTg5IDI3LjgwODRDNzMuNjcyNCAyOS4yOTA2IDc0LjU4MzUgMzAuNzc4NCA3NS4yNjY4IDMyLjUzMjNDNzUuOTIyNCAzNC4yMjc5IDc2LjM3MjQgMzYuMTY1NyA3Ni41MDU3IDM5LjAwNDZDNzYuNjMzNSA0MS44NDkxIDc2LjY2NjggNDIuNzU4IDc2LjY2NjggNTAuMDAwM0M3Ni42NjY4IDU3LjI0MjYgNzYuNjMzNSA1OC4xNDkzIDc2LjUwNTcgNjAuOTkzN0M3Ni4zNzI0IDYzLjgzMTUgNzUuOTIyNCA2NS43Njk5IDc1LjI2NjggNjcuNDY2Qzc0LjU4MzUgNjkuMjE5NCA3My42NzI0IDcwLjcwNzIgNzIuMTg5IDcyLjE4OTRDNzAuNzA3MyA3My42NzI3IDY5LjIyMTcgNzQuNTg2MSA2Ny40Njg0IDc1LjI2NzJDNjUuNzcxNyA3NS45MjY3IDYzLjgzMTcgNzYuMzc2MSA2MC45OTI4IDc2LjUwNjFDNTguMTQ4MyA3Ni42MzU2IDU3LjI0MjIgNzYuNjY3MiA0OS45OTkzIDc2LjY2NzJDNDIuNzU3NiA3Ni42NjcyIDQxLjg0OTIgNzYuNjM1NiAzOS4wMDQ4IDc2LjUwNjFDMzYuMTY2NCA3Ni4zNzYxIDM0LjIyODEgNzUuOTI2NyAzMi41MzE0IDc1LjI2NzJDMzAuNzc4NiA3NC41ODYxIDI5LjI5MDggNzMuNjcyNyAyNy44MDkxIDcyLjE4OTRDMjYuMzI2MyA3MC43MDcyIDI1LjQxNTIgNjkuMjE5NCAyNC43MzM1IDY3LjQ2NTVDMjQuMDc0NiA2NS43Njk5IDIzLjYyNTIgNjMuODMyMSAyMy40OTQ2IDYwLjk5MzJDMjMuMzY1NyA1OC4xNDg3IDIzLjMzMzUgNTcuMjQyNiAyMy4zMzM1IDUwLjAwMDNDMjMuMzMzNSA0Mi43NTggMjMuMzY2OCA0MS44NDg1IDIzLjQ5NDEgMzkuMDA0MUMyMy42MjE4IDM2LjE2NjIgMjQuMDcxOCAzNC4yMjc5IDI0LjczMyAzMi41MzE4QzI1LjQxNjMgMzAuNzc4NCAyNi4zMjc0IDI5LjI5MDYgMjcuODEwOCAyNy44MDg0QzI5LjI5MyAyNi4zMjU2IDMwLjc4MDggMjUuNDE0NSAzMi41MzQ3IDI0LjczMzNDMzQuMjMwMyAyNC4wNzM5IDM2LjE2ODEgMjMuNjI0NCAzOS4wMDcgMjMuNDk0NFpNNDkuOTk4NSAyMy4zMzMzQzQ5Ljk5OTkgMjMuMzMzMyA1MC4wMDEzIDIzLjMzMzMgNTAuMDAyNyAyMy4zMzMzSDQ5Ljk5NDNDNDkuOTk1NyAyMy4zMzMzIDQ5Ljk5NzEgMjMuMzMzMyA0OS45OTg1IDIzLjMzMzNaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTQ3LjYxMDIgMjguMTM5QzQ4LjA3NDcgMjguMTM4MyA0OC41NzQ0IDI4LjEzODUgNDkuMTEzNyAyOC4xMzg3TDUwLjAwMjUgMjguMTM5QzU3LjEyMjUgMjguMTM5IDU3Ljk2NjQgMjguMTY0NSA2MC43NzgxIDI4LjI5MjNDNjMuMzc4MiAyOC40MTEyIDY0Ljc4OTMgMjguODQ1NyA2NS43MjkzIDI5LjIxMDdDNjYuOTczNyAyOS42OTQgNjcuODYxIDMwLjI3MTggNjguNzkzOCAzMS4yMDUxQzY5LjcyNzEgMzIuMTM4NSA3MC4zMDQ5IDMzLjAyNzQgNzAuNzg5MyAzNC4yNzE4QzcxLjE1NDMgMzUuMjEwNyA3MS41ODkzIDM2LjYyMTkgNzEuNzA3NyAzOS4yMjE5QzcxLjgzNTUgNDIuMDMzIDcxLjg2MzIgNDIuODc3NSA3MS44NjMyIDQ5Ljk5NDJDNzEuODYzMiA1Ny4xMTEgNzEuODM1NSA1Ny45NTU0IDcxLjcwNzcgNjAuNzY2NkM3MS41ODg4IDYzLjM2NjYgNzEuMTU0MyA2NC43Nzc3IDcwLjc4OTMgNjUuNzE2NkM3MC4zMDYgNjYuOTYxMSA2OS43MjcxIDY3Ljg0NzIgNjguNzkzOCA2OC43OEM2Ny44NjA0IDY5LjcxMzMgNjYuOTc0MyA3MC4yOTExIDY1LjcyOTMgNzAuNzc0NEM2NC43OTA0IDcxLjE0MTEgNjMuMzc4MiA3MS41NzQ0IDYwLjc3ODEgNzEuNjkzM0M1Ny45NjcgNzEuODIxMSA1Ny4xMjI1IDcxLjg0ODkgNTAuMDAyNSA3MS44NDg5QzQyLjg4MTggNzEuODQ4OSA0Mi4wMzc5IDcxLjgyMTEgMzkuMjI2OCA3MS42OTMzQzM2LjYyNjggNzEuNTczMyAzNS4yMTU2IDcxLjEzODkgMzQuMjc1MSA3MC43NzM5QzMzLjAzMDYgNzAuMjkwNSAzMi4xNDE3IDY5LjcxMjggMzEuMjA4NCA2OC43Nzk0QzMwLjI3NSA2Ny44NDYxIDI5LjY5NzIgNjYuOTU5NCAyOS4yMTI4IDY1LjcxNDRDMjguODQ3OCA2NC43NzU1IDI4LjQxMjggNjMuMzY0NCAyOC4yOTQ0IDYwLjc2NDNDMjguMTY2NyA1Ny45NTMyIDI4LjE0MTEgNTcuMTA4NyAyOC4xNDExIDQ5Ljk4NzZDMjguMTQxMSA0Mi44NjY0IDI4LjE2NjcgNDIuMDI2NCAyOC4yOTQ0IDM5LjIxNTJDMjguNDEzMyAzNi42MTUyIDI4Ljg0NzggMzUuMjA0MSAyOS4yMTI4IDM0LjI2NDFDMjkuNjk2MSAzMy4wMTk2IDMwLjI3NSAzMi4xMzA3IDMxLjIwODQgMzEuMTk3NEMzMi4xNDE3IDMwLjI2NCAzMy4wMzA2IDI5LjY4NjIgMzQuMjc1MSAyOS4yMDE4QzM1LjIxNTEgMjguODM1MSAzNi42MjY4IDI4LjQwMTggMzkuMjI2OCAyOC4yODIzQzQxLjY4NjggMjguMTcxMiA0Mi42NDAyIDI4LjEzNzkgNDcuNjEwMiAyOC4xMzIzVjI4LjEzOVpNNjQuMjM2NyAzMi41NjdDNjIuNDcgMzIuNTY3IDYxLjAzNjYgMzMuOTk4NyA2MS4wMzY2IDM1Ljc2NkM2MS4wMzY2IDM3LjUzMjYgNjIuNDcgMzguOTY2IDY0LjIzNjcgMzguOTY2QzY2LjAwMzMgMzguOTY2IDY3LjQzNjcgMzcuNTMyNiA2Ny40MzY3IDM1Ljc2NkM2Ny40MzY3IDMzLjk5OTMgNjYuMDAzMyAzMi41NjU5IDY0LjIzNjcgMzIuNTY1OVYzMi41NjdaTTM2LjMwODYgNDkuOTk5OUMzNi4zMDg2IDQyLjQzNzEgNDIuNDQwMyAzNi4zMDUzIDUwLjAwMzIgMzYuMzA1M0g1MC4wMDI2QzU3LjU2NTUgMzYuMzA1MyA2My42OTU1IDQyLjQzNzEgNjMuNjk1NSA0OS45OTk5QzYzLjY5NTUgNTcuNTYyOCA1Ny41NjYgNjMuNjkxNyA1MC4wMDMyIDYzLjY5MTdDNDIuNDQwMyA2My42OTE3IDM2LjMwODYgNTcuNTYyOCAzNi4zMDg2IDQ5Ljk5OTlaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTUwLjAwMjMgNDEuMTExNkM1NC45MTEyIDQxLjExMTYgNTguODkxMiA0NS4wOTExIDU4Ljg5MTIgNTAuMDAwNkM1OC44OTEyIDU0LjkwOTUgNTQuOTExMiA1OC44ODk1IDUwLjAwMjMgNTguODg5NUM0NS4wOTI4IDU4Ljg4OTUgNDEuMTEzMyA1NC45MDk1IDQxLjExMzMgNTAuMDAwNkM0MS4xMTMzIDQ1LjA5MTEgNDUuMDkyOCA0MS4xMTE2IDUwLjAwMjMgNDEuMTExNlY0MS4xMTE2WiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+Cg==" alt="Instagram">
                  <span class="visually-hidden">Instagram</span>      
                </a>
              </li>
              <li class="social__item">
                <a class="social__item-link" href="https://dribbble.com/PURRWEB" rel="noreferrer noopener" target="_blank" onclick="ym(52342033, 'reachGoal', 'CLK_DRIBBBLE_INTRO'); return true;">
                  <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgdmlld0JveD0iMCAwIDEwMCAxMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik01MS4zNTEgNDkuOTEwNEM1MS41MzAyIDQ5Ljg1NDIgNTEuNzA4MyA0OS44IDUxLjg4NzUgNDkuNzQ2OUM1MS40NTYyIDQ4Ljc4MDIgNTAuOTc4MSA0Ny43ODIzIDUwLjQzNDQgNDYuNzEwNEM0MC42NDI3IDQ5LjYwMjEgMzEuMjY4NyA0OS42Mzk2IDI5LjU5MjcgNDkuNjEwNEMyOS41ODg1IDQ5LjczOTYgMjkuNTg0NCA0OS44Njk4IDI5LjU4NDQgNTBDMjkuNTg0NCA1NC45MjUgMzEuMzUzMSA1OS42NTczIDM0LjU3NCA2My4zNjk4QzM1LjY0OSA2MS42Mzg1IDQxLjMzMzMgNTMuMTUxIDUxLjM1MSA0OS45MTA0Wk02My4zMDczIDM0LjUyNUM1OS42MDUyIDMxLjMzODUgNTQuODg5NiAyOS41ODY1IDUwIDI5LjU4NjVDNDguNTIxOSAyOS41ODY1IDQ3LjAzNTQgMjkuNzQ5IDQ1LjU3NSAzMC4wNzE5QzQ2LjY0MTcgMzEuNTEwNCA0OS45MDk0IDM2LjA0NjkgNTIuOTc3MSA0MS42NDY5QzU5LjY1MzEgMzkuMDg5NiA2Mi42NzI5IDM1LjM4NTQgNjMuMzA3MyAzNC41MjVaTTM3LjYyMjkgNjYuMjE1NkM0MS4yMTU2IDY4Ljk2NDYgNDUuNDkxNyA3MC40MTY3IDUwIDcwLjQxNjdDNTIuNjkxNyA3MC40MTY3IDU1LjMwODMgNjkuOSA1Ny43ODAyIDY4Ljg4MDJDNTcuNDM1NCA2Ni44OTc5IDU2LjI0NDggNjAuODU5NCA1My41MDIxIDUzLjY2NjdDNDIuNDUyMSA1Ny41NzE5IDM4LjI4NTQgNjQuOTIxOSAzNy42MjI5IDY2LjIxNTZaTTQ4LjQ2MjUgNDMuMDQ2OUM0NS4yOTY5IDM3LjQ2MzUgNDIuMDAxIDMyLjg2NDYgNDEuMDk2OSAzMS42MjgxQzM1LjUzNzUgMzQuMzI4MSAzMS40NDkgMzkuNDc1IDMwLjA4OTYgNDUuNDgwMkgzMC4xNzRDMzIuMjkwNiA0NS40ODAyIDM5LjgwNTIgNDUuMzAzMSA0OC40NjI1IDQzLjA0NjlaTTU3Ljg4MTIgNTIuNTkwNkM2MC4zMDIxIDU5LjMxNjcgNjEuNDE4NyA2NC45MTU2IDYxLjczODUgNjYuNzAzMUM2Ni4xNzI5IDYzLjU4MDIgNjkuMjA5NCA1OC43ODQ0IDcwLjExODggNTMuNDYxNUM2OS4yMTQ2IDUzLjE5MDYgNjUuOTQ1OCA1Mi4zMDgzIDYxLjgzMjMgNTIuMzA4M0M2MC40ODIzIDUyLjMwODMgNTkuMTU1MiA1Mi40MDMxIDU3Ljg4MTIgNTIuNTkwNlpNNTAgMEMyMi4zODQ0IDAgMCAyMi4zODU0IDAgNTBDMCA3Ny42MTU2IDIyLjM4NDQgMTAwIDUwIDEwMEM3Ny42MTU2IDEwMCAxMDAgNzcuNjE1NiAxMDAgNTBDMTAwIDIyLjM4NTQgNzcuNjE1NiAwIDUwIDBaTTUwIDc0LjQ3MDhDMzYuNTA2MiA3NC40NzA4IDI1LjUyOTIgNjMuNDkzNyAyNS41MjkyIDUwQzI1LjUyOTIgMzYuNTA2MiAzNi41MDYyIDI1LjUyOTIgNTAgMjUuNTI5MkM2My40OTM3IDI1LjUyOTIgNzQuNDcwOCAzNi41MDYyIDc0LjQ3MDggNTBDNzQuNDcwOCA2My40OTM3IDYzLjQ5MzcgNzQuNDcwOCA1MCA3NC40NzA4Wk01NC44MDMxIDQ1LjE4NTRDNTUuMjU0MiA0Ni4xMTU2IDU1LjY3NzEgNDcuMDQyNyA1Ni4wNjI1IDQ3Ljk0NjlDNTYuMTg4NSA0OC4yNDE3IDU2LjMxMjUgNDguNTM4NSA1Ni40MzMzIDQ4LjgzNDRDNTcuODc4MSA0OC42NjE1IDU5LjQyMjkgNDguNTc0IDYxLjAyNzEgNDguNTc0QzY1LjQ2OTggNDguNTc0IDY5LjE3MDggNDkuMjI3MSA3MC40MDMxIDQ5LjQ3MTlDNzAuMjg4NSA0NS4wNDM3IDY4LjcyNCA0MC43NDE3IDY1Ljk3MjkgMzcuMjkwNkM2NS4xMzU0IDM4LjM1OTQgNjEuNzA2MiA0Mi4zMDQyIDU0LjgwMzEgNDUuMTg1NFoiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo=" alt="Dribble">
                  <span class="visually-hidden">Dribble</span>      
                </a>
              </li>
              <li class="social__item">
                <a class="social__item-link" href="https://www.behance.net/PURRWEB" rel="noreferrer noopener" target="_blank" onclick="ym(52342033, 'reachGoal', 'CLK_BEHANCE_INTRO'); return true;">
                  <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgdmlld0JveD0iMCAwIDEwMCAxMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik00Mi4wODA1IDQxLjY2MThDNDIuMDgwNSAzNy44MzUyIDM5LjQ3NjQgMzcuODM1MiAzOS40NzY0IDM3LjgzNTJIMzguMDk2OEgyOC43NjM4SDI4Ljc1OThWNDYuMDQ4NEgzOC44MTE3QzQwLjU0OTggNDYuMDQ4NCA0Mi4wODA1IDQ1LjQ5NDUgNDIuMDgwNSA0MS42NjE4WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTY2LjkwODIgNDYuMDQ4MUM2MS4yMjY2IDQ2LjA0ODEgNjAuNDMzMSA1MS43MTU1IDYwLjQzMzEgNTEuNzE1NUg3Mi41MjEyQzcyLjUyMTIgNTEuNzE5NiA3Mi41OTU4IDQ2LjA0ODEgNjYuOTA4MiA0Ni4wNDgxWiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTM5LjQ3NjcgNTEuNzIwNUgyOC43NjYxVjYxLjU2MUgzOC4yNTQxQzM4LjQxNTMgNjEuNTYxIDM4LjY1MjkgNjEuNTY5IDM4LjkzNjkgNjEuNTYxQzQwLjQ2MTUgNjEuNTIyNyA0My4zNTk3IDYxLjA4NzcgNDMuMzU5NyA1Ni43Nzk3QzQzLjM1OTcgNTEuNjcyMSAzOS40NzY3IDUxLjcyMDUgMzkuNDc2NyA1MS43MjA1WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTUwIDBDMjIuNDMwMSAwIDAgMjIuNDMwMSAwIDUwQzAgNzcuNTY3OSAyMi40MzAxIDEwMCA1MCAxMDBDNzcuNTY3OSAxMDAgMTAwIDc3LjU2NzkgMTAwIDUwQzEwMCAyMi40MzAxIDc3LjU3MTkgMCA1MCAwWk01OC44NDc2IDMzLjQ2MjlINzQuMDMxM1YzNy45OTY1SDU4Ljg0NzZWMzMuNDYyOVpNNTEuMTcwMSA1Ny4yMzY0QzUxLjE3MDEgNjguNDY4NSAzOS40NzY4IDY4LjEwMiAzOS40NzY4IDY4LjEwMkgyOC43NjYySDI4LjQ1MkgyMC4zMjc1VjMxLjI5NThIMjguNDUySDI4Ljc2NjJIMzkuNDc2OEM0NS4yOTkzIDMxLjI5NTggNDkuODkzMyAzNC41MTIyIDQ5Ljg5MzMgNDEuMDk4QzQ5Ljg5MzMgNDcuNjgxOSA0NC4yNzgyIDQ4LjEwMDggNDQuMjc4MiA0OC4xMDA4QzUxLjY3OTcgNDguMDk4OCA1MS4xNzAxIDU3LjIzNjQgNTEuMTcwMSA1Ny4yMzY0Wk03OS41Nzc5IDU2LjYzMjJINjAuNTAzMUM2MC41MDMxIDYzLjQ3MTggNjYuOTgyMiA2My4wNDA4IDY2Ljk4MjIgNjMuMDQwOEM3My4wOTY4IDYzLjA0MDggNzIuODgzMyA1OS4wODEyIDcyLjg4MzMgNTkuMDgxMkg3OS4zNjY0Qzc5LjM2NjQgNjkuNTkwMyA2Ni43NzA3IDY4Ljg2NzMgNjYuNzcwNyA2OC44NjczQzUxLjY1OTYgNjguODY3MyA1Mi42MzAzIDU0Ljc5OTQgNTIuNjMwMyA1NC43OTk0QzUyLjYzMDMgNTQuNzk5NCA1Mi42MTYyIDQwLjY1NyA2Ni43NzA3IDQwLjY1N0M4MS42NjY0IDQwLjY1NyA3OS41NzM4IDU2LjYzMjIgNzkuNTc3OSA1Ni42MzIyWiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+Cg==" alt="Behance">
                  <span class="visually-hidden">Behance</span>      
                </a>
              </li>
              <li class="social__item">
                <a class="social__item-link" href="https://www.linkedin.com/company/purrweb" rel="noreferrer noopener" target="_blank" onclick="ym(52342033, 'reachGoal', 'CLC_LINKEDIN_INTRO'); return true;">
                  <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgdmlld0JveD0iMCAwIDEwMCAxMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNTAgMEMyMi4zODU4IDAgMCAyMi4zODU4IDAgNTBDMCA3Ny42MTQyIDIyLjM4NTggMTAwIDUwIDEwMEM3Ny42MTQyIDEwMCAxMDAgNzcuNjE0MiAxMDAgNTBDMTAwIDIyLjM4NTggNzcuNjE0MiAwIDUwIDBaTTI4LjEyOTkgMzMuOTcyNUMyOC4xMjk5IDM2LjY3OTUgMzAuMTY0OSAzOC44NDU1IDMzLjMxMTMgMzguODQ1NUMzNy42OSAzOC44NDU1IDM4LjcxMyAzNS41OTY4IDM4LjY3NzIgMzMuOTcyNUMzOC42MTYxIDMxLjIwNDQgMzYuNjQyMiAyOS4wOTgzIDMzLjQzNDcgMjkuMDk4M0MzMC4yMjcxIDI5LjA5ODMgMjguMTI5OSAzMS4yMDQ0IDI4LjEyOTkgMzMuOTcyNVpNMjguNjgzOSA3MC45MDdIMzguMDYwNFY0Mi42OTc1SDI4LjY4MzlWNzAuOTA3Wk03MS44NzAxIDcwLjkwN0g2Mi40OTQ4VjU1LjgxNTZDNjIuNDk0OCA1Mi4wMjI5IDYxLjEzNzIgNDkuNDM2MyA1Ny43NDQ1IDQ5LjQzNjNDNTUuMTU0NCA0OS40MzYzIDUzLjYxMTcgNTEuMTgxMSA1Mi45MzM4IDUyLjg2NTRDNTIuNjg1OSA1My40NjgxIDUyLjYyNTQgNTQuMzEwNSA1Mi42MjU0IDU1LjE1MzVWNzAuOTA3SDQzLjI0OTVDNDMuMjQ5NSA3MC45MDcgNDMuMzcyMiA0NS4zNDQgNDMuMjQ5NSA0Mi42OTc1SDUyLjYyNTRWNDYuNjkxN0M1My44NzE0IDQ0Ljc2OTUgNTYuMTAwOCA0Mi4wMzU0IDYxLjA3NTUgNDIuMDM1NEM2Ny4yNDQ0IDQyLjAzNTQgNzEuODcwMSA0Ni4wNjcyIDcxLjg3MDEgNTQuNzMxN1Y3MC45MDdaIiBmaWxsPSJ3aGl0ZSIvPgo8L3N2Zz4K" alt="Linkedin">
                  <span class="visually-hidden">Linkedin</span>    
                </a>
              </li>
            </ul> -->
            <?php if (pll_current_language() == 'en'): ?>
              <address class="contacts__address">US 340 S LEMON AVE #9923<br>WALNUT, CA91789</address>
            <?php endif; ?>
            <?php if (pll_current_language() == 'ru'): ?>
            <address class="contacts__address">
              
              <?php _e('Dmitriyeva, 1/8, Omsk, Russia, 644123', 'blog') ?>
              
            </address>
            <?php endif; ?>
            <small class="contacts__copyright">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 8.7 8.7">
                <path d="M4.3,8.7c2.4,0,4.3-1.9,4.3-4.3S6.7,0,4.3,0S0,1.9,0,4.3S1.9,8.7,4.3,8.7z M4.3,8.4c-2.2,0-4-1.8-4-4s1.8-4,4-4s4,1.8,4,4S6.6,8.4,4.3,8.4z M4.4,6.6c0.9,0,1.6-0.4,2-1.1L5.8,5.2C5.6,5.8,5,6.1,4.4,6.1c-1,0-1.7-0.8-1.7-1.7s0.7-1.7,1.7-1.7c0.6,0,1.2,0.3,1.5,0.8l0.5-0.3C6,2.5,5.2,2,4.4,2C3,2,2.1,3,2.1,4.3S3,6.6,4.4,6.6z"/>
              </svg>
              <?php echo date("Y");?> <?php _e('Purrweb. All rights reserved', 'blog') ?>
            </small>
          </section>
        </div>
      </div>
    </div>
  </footer>



  <button class="btn-up js-btn-up">
    <svg width="22" height="42" viewbox="0 0 22 42" xmlns="http://www.w3.org/2000/svg">
      <path d="M21 29L11 41M11 41L1 29M11 41V0"/>
    </svg>
    <span class="visually-hidden">Go to the top of the page</span>
  </button>

  <div class="popup-form js-form-popup">
    <div class="popup-form__inner">
      <p class="popup-form__text">
        <?php _e('Thanks for your inquiry. We’ll get back to you in less than 24 hours!', 'blog') ?>
      </p>
      <button class="popup-form__btn js-form-popup-btn">
        <?php _e('Hooray!', 'blog') ?>
      </button>
    </div>
  </div>

<!-- recaptcha -->
<script type="text/javascript">
    var firedRec = false;
    window.addEventListener('scroll', () => {
      if (firedRec === false) {
        firedRec = true;
          (function (d, w) {
            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = "https://www.google.com/recaptcha/api.js?render=6LdBWnwaAAAAADC4FEa3p5JPq12UcmBuQPHl-0Iz";
                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else { f(); }
        })(document, window);
      }
    });
  </script>
<!-- /recaptcha -->

    <!-- Google Tag Manager -->
    <script defer>
  if (window.innerWidth >= 1024) {
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W4BS3VM');

  } else if (window.innerWidth < 1024) {
    var firedTG = false;

    window.addEventListener('scroll', () => {
      if (firedTG === false) {
        firedTG = true;

        setTimeout(() => {
          (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
              'gtm.start': new Date().getTime(),
              event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
              j = d.createElement(s),
              dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
              'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
          })(window, document, 'script', 'dataLayer', 'GTM-W4BS3VM');
        }, 0)
      }
    });
  }
</script>
<!-- End Google Tag Manager -->
<!-- Facebook Pixel Code -->
<script defer type="text/javascript">
    if (window.innerWidth >= 1024) {
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1007915676013932');
    fbq('track', 'PageView');
  
  } else if (window.innerWidth < 1024) {
    var firedFb = false;
  
    window.addEventListener('scroll', () => {
      if (firedFb === false) {
        firedFb = true;
        !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1007915676013932');
    fbq('track', 'PageView');
      }
    });
  }
  </script>
  <noscript>
    <img 
      height="1" 
      width="1" 
      alt=""
      style="display:none" 
      src="https://www.facebook.com/tr?id=1007915676013932&ev=PageView&noscript=1" />
  </noscript>
  <!-- End Facebook Pixel Code -->

  <?php wp_footer(); ?>
    </div>
</body>
</html>