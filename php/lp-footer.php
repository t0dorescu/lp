
<?php if (!$ignore['footer']) : ?>
  <footer id="footer" class="footer" style="border: 0;">
    <?php if (!$session['is_logged_in']) : ?>
      <?php include php_root()."php/templates/forms/newsletter-signup.php"; ?>
    <?php endif ?>
    <div class="footer-top" style="margin-bottom: 0; padding-bottom: 0; border: 0; padding: 30px 0 50px 0;">
      <div class="container">
        <div class="row gy-4">
          <div class="col-12 footer-info">
            <div class="social-links mt-3" style="text-align: center;">
              <a href="https://www.tiktok.com/@t0dorescu" class="tiktok" target="_blank"><i class="bi bi-tiktok" style="font-size: 1.75rem; color: #999;"></i></a>
              <a href="https://www.linkedin.com/in/tudortodorescu/" class="linkedin" target="_blank"><i class="bi bi-linkedin" style="font-size: 1.75rem; color: #999;"></i></a>
              <a href="https://www.youtube.com/c/tudortodorescu" class="youtube" target="_blank"><i class="bi bi-youtube" style="font-size: 1.75rem; color: #999;"></i></a>
              <a href="https://www.facebook.com/tudor.t0dorescu" class="facebook" target="_blank"><i class="bi bi-facebook" style="font-size: 1.75rem; color: #999;"></i></a>
              <a href="https://www.github.com/tudortodorescu" class="github" target="_blank"><i class="bi bi-github" style="font-size: 1.75rem; color: #999;"></i></a>
              <br><br>
              <a href="https://www.instagram.com/tudortodorescu" class="instagram" target="_blank"><i class="bi bi-instagram" style="font-size: 1.75rem; color: #999;"></i></a>
              <a href="https://www.twitter.com/todorescu_tudor" class="twitter" target="_blank"><i class="bi bi-twitter" style="font-size: 1.75rem; color: #999;"></i></a>
              <a href="https://www.udemy.com/user/tudor-todorescu/" class="udemy" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144 64" width="30" height="30" style="margin-top: -10px;"><path d="M141.58 40.23a3.83 3.83 0 0 0-1.693-.796c-3.655 3.643-8.115 7.48-12.075 10.06-1.827 1.214-4.126 1.82-5.647 1.82-3.503 0-5.025-3.34-5.482-8.65-.61-7.13-1.02-15.672-1.02-28.873 0-13.54-3.073-22.743-11.258-23.465-.346-.03-.696-.052-1.06-.052-5.025 0-7.462 2.58-10.66 9.104-2.74 5.613-7.004 13.806-14.92 29.282C70.913 42.014 63.3 53.85 56.75 62.042c-1.824 2.27-3.265 3.83-4.62 4.72-.905.596-1.774.894-2.688.894-2.585 0-4.47-2.18-5.1-7.26-.15-1.207-.23-2.577-.23-4.12 0-10.47 3.96-27.462 10.8-52.498 5.025-18.206 2.894-30.646-8.07-30.646h-.123l-.007.002c-2.483.03-4.54.928-6.524 2.49-1.952 1.537-3.906 4.857-5.73 9.322C32.413-10.03 19.91 15.047.014 27.966c-.234 4.912 2.546 9.82 8.18 10.353 5.13.486 8.77-1.676 13.46-4.825a1296.183 1296.183 0 0 0-1.858 8.416l-.652 2.986a83.792 83.792 0 0 0-1.417 8.52C14.92 78.494 26.543 90.87 40.155 90.87c2.275 0 4.53-.27 6.767-.84C61.92 86.226 76.36 69.023 93.448 29.42c-.26 4.308-.286 8.33-.1 12.065 1.125 22.697 10.103 29.507 22.787 29.507 9.593 0 18.576-5.006 23.144-11.227 3.35-4.4 4.72-9.256 4.72-13.05 0-2.944-.934-5.295-2.42-6.488" fill="#999" fill-rule="evenodd" /></svg>
              </a>
              <a href="https://www.upwork.com/fl/tudor" class="upwork" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2500 2500" width="27" height="27" style="margin-top: -10px;"><path d="m2315.4 0h-2130.7c-102 0-184.7 80.2-184.7 179.1v2141.7c0 99 82.7 179.2 184.7 179.2h2130.7c102 0 184.6-80.3 184.6-179.2v-2141.7c0-98.9-82.6-179.1-184.6-179.1z" fill="#999"/><path d="m1834.6 1453.7c-98.4 0-190.5-41.7-274.3-109.6l20.4-95.8.9-3.5c18.2-102 75.8-273.3 253-273.3 132.9 0 241 108.3 241 241.3-.4 132.6-108.5 240.9-241 240.9zm0-726.7c-226.4 0-401.9 147.3-473.2 389.5-109-163.7-191.4-360.2-239.7-525.7h-243.6v634.8c0 125.1-101.9 227.1-226.9 227.1s-226.8-102-226.8-227.1v-634.8h-243.7v634.8c-.9 260 210.5 473.4 470.1 473.4s471-213.4 471-473.4v-106.5c47.4 98.9 105.4 198.7 175.9 287.5l-149.3 702.7h249.5l108.1-509.7c94.8 60.8 203.8 98.9 328.8 98.9 267.2 0 484.7-219.2 484.7-486.7-.2-267-217.7-484.8-484.9-484.8z" fill="#111" fill-rule="evenodd" /></svg>  
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 footer-links" style="text-align: center;">
          <p>
            ICE STATION ZEBRA SRL<br>
            CIF: 46266079<br>
            REG: J1/685/08.06.2022<br>
          </p>
          <br><br>
          <i class="bi bi-chevron-right"></i> <a href="<?= root().'terms-of-service' ?>" target="_blank">Terms of service</a><br>
          <i class="bi bi-chevron-right"></i> <a href="<?= root().'privacy-policy' ?>" target="_blank">Privacy policy</a><br>
          <i class="bi bi-chevron-right"></i> <a href="<?= root().'cookie-policy' ?>" target="_blank">Cookie policy</a>
          
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>
<?php endif ?>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js<?= v_lp() ?>"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js<?= v_lp() ?>"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js<?= v_lp() ?>"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js<?= v_lp() ?>"></script>
<script src="assets/vendor/php-email-form/php-email-form.js<?= v_lp() ?>"></script>
<script src="assets/vendor/crypto-js/crypto-js.min.js<?= v_lp() ?>"></script>

<!-- JS files -->
<script>
  const API_URL = "<?= root().'api/' ?>"
</script>
<script src="assets/js/main.js<?= v_lp() ?>"></script>
<script src="assets/js/utils/utils.js<?= v_lp() ?>"></script>
<script src="assets/js/utils/validators.js<?= v_lp() ?>"></script>
<script src="assets/js/utils/forms.js<?= v_lp() ?>"></script>
<script src="assets/js/services/api.js<?= v_lp() ?>"></script>

<!-- Cookie consent -->
<script src="assets/vendor/cookieconsent/cookieconsent.js<?= v_lp() ?>"></script>
<script>
    initCookieConsent().run({
        languages: {
        'en': {
            consent_modal: {
              title: 'Cookie policy',
              description: 'This website uses cookies to understand how you interact with it. <a href="<?= root()."cookie-policy" ?>" target="_blank">Read more</a>',
              primary_btn: {
                  text: 'Accept all',
                  role: 'accept_all'
              },
              secondary_btn: {
                  text: 'Settings',
                  role: 'settings'
              }
            },
            settings_modal: {
              title: 'Cookie preferences',
              save_settings_btn: 'Save settings',
              accept_all_btn: 'Accept all',
              blocks: [
                {
                    title: 'Essential cookies',
                    description: 'These cookies are strictly necessary to enable core functionality such as security, network management, your cookie preferences and accessibility'
                }, {
                    title: 'Performance and Functionality Cookies',
                    description: 'Performance and Functionality Cookies help us remember that an user had logged in previously',
                }, {
                    title: 'Marketing cookies',
                    description: 'Marketing Cookies enable us to identify future prospects and personalize sales and marketing interactions.',
                }, {
                    title: 'Analytics and Customization Cookies',
                    description: 'These cookies collect information that is used to help us understand how your platform is being used or how effective our marketing campaigns are',
                }, {
                    title: 'Social Media Cookies',
                    description: 'These cookies are used when users log in with Facebook, Twitter or Google+',
                }, {
                    title: 'Third Party Cookies',
                    description: 'Third party service providers control many of the performance and functionality, advertising, marketing and analytics cookies',
                }
              ]
            }
        }
        }
    })
</script>
