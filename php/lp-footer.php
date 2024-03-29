
<?php if (!$hidefooter) : ?>
  <footer id="footer" class="footer">
    <?php if (!$hidewaitinglist) : ?>
      <?php include php_root() . "php/templates/forms/newsletter-signup.php"; ?>
    <?php endif ?>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-12 footer-info">

            <?php if (!$hidesocials) : ?>
              <div class="social-links mt-3 text-center" style="padding-bottom: 20px;">
                <a href="https://www.facebook.com/tudor.t0dorescu" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.github.com/tudortodorescu" class="github" target="_blank"><i class="bi bi-github"></i></a>
                <a href="https://www.linkedin.com/in/tudortodorescu/" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.youtube.com/c/tudortodorescu" class="youtube" target="_blank"><i class="bi bi-youtube"></i></a>
              </div>
            <?php endif ?>

            <?php if ($showterms) : ?>
              <ul class="terms">
                <li><a href="<?= root() . 'terms-of-service' ?>" target="_blank">Terms of service</a></li>
                <li><a href="<?= root() . 'privacy-policy' ?>" target="_blank">Privacy policy</a></li>
                <li><a href="<?= root() . 'cookie-policy' ?>" target="_blank">Cookie policy</a></li>
              </ul>
            <?php endif ?>

          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>
<?php endif ?>

<!-- Vendor JS Files -->
<script src="<?= root() . 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' . v_lp() ?>"></script>
<script src="<?= root() . 'assets/vendor/php-email-form/php-email-form.js' . v_lp() ?>"></script>
<script src="<?= root() . 'assets/vendor/crypto-js/crypto-js.min.js' . v_lp() ?>"></script>

<!-- JS files -->
<script>
  const API_URL = "<?= root() . 'api/' ?>"
</script>
<script src="<?= root() . 'assets/js/main.js' . v_lp() ?>"></script>
<script src="<?= root() . 'assets/js/utils/utils.js' . v_lp() ?>"></script>
<script src="<?= root() . 'assets/js/utils/validators.js' . v_lp() ?>"></script>
<script src="<?= root() . 'assets/js/utils/forms.js' . v_lp() ?>"></script>
<script src="<?= root() . 'assets/js/services/api.js' . v_lp() ?>"></script>

<?php if (!$hidecookieconset) : ?>
  <!-- Cookie consent -->
  <script src="<?= root() . 'assets/vendor/cookieconsent/cookieconsent.js' . v_lp() ?>"></script>
  <script>
    initCookieConsent().run({
      languages: {
        'en': {
          consent_modal: {
            title: 'Cookie policy',
            description: 'This website uses cookies to understand how you interact with it. <a href="<?= root() . "cookie-policy" ?>" target="_blank">Read more</a>',
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
            blocks: [{
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
            }]
          }
        }
      }
    })
  </script>
<?php endif ?>

</body>
</html>