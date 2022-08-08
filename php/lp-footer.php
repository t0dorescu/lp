
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
              <a href="https://www.linkedin.com/in/tudortodorescu/" class="linkedin" target="_blank"><i class="bi bi-linkedin" style="font-size: 1.75rem; color: #999;"></i></a>
              <a href="https://www.youtube.com/c/tudortodorescu" class="youtube" target="_blank"><i class="bi bi-youtube" style="font-size: 1.75rem; color: #999;"></i></a>
              <a href="https://www.github.com/tudortodorescu" class="github" target="_blank"><i class="bi bi-github" style="font-size: 1.75rem; color: #999;"></i></a>
              <a href="https://www.facebook.com/tudor.t0dorescu" class="facebook" target="_blank"><i class="bi bi-facebook" style="font-size: 1.75rem; color: #999;"></i></a>
              <a href="https://www.instagram.com/tudortodorescu" class="instagram" target="_blank"><i class="bi bi-instagram" style="font-size: 1.75rem; color: #999;"></i></a>
              <a href="https://www.twitter.com/todorescu_tudor" class="twitter" target="_blank"><i class="bi bi-twitter" style="font-size: 1.75rem; color: #999;"></i></a>
            </div>
          </div>
        </div>
        <div class="col-12 footer-links" style="text-align: center;">
          <i class="bi bi-chevron-right"></i> <a href="<?= root().'terms-of-service' ?>" target="_blank">Terms of service</a><br>
          <i class="bi bi-chevron-right"></i> <a href="<?= root().'privacy-policy' ?>" target="_blank">Privacy policy</a><br>
          <i class="bi bi-chevron-right"></i> <a href="<?= root().'cookie-policy' ?>" target="_blank">Cookie policy</a>
          <br><br>
          <h3>Company</h3>
          <p>
            ICE STATION ZEBRA SRL<br>
            CIF: 46266079<br>
            REG: J1/685/08.06.2022<br>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modals -->
  <?php include php_root()."php/templates/forms/login-modal.php"; ?>
  <?php include php_root()."php/templates/forms/register-modal.php"; ?>
  <?php include php_root()."php/templates/forms/forgot-password-modal.php"; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>
<?php endif ?>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js<?= v_lp() ?>"></script>
<script src="assets/vendor/aos/aos.js<?= v_lp() ?>"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js<?= v_lp() ?>"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js<?= v_lp() ?>"></script>
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<?php if (!$isDev) : ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122326504-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-122326504-1');
  </script>
<?php endif ?>

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
