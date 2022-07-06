/**
* PHP Email Form Validation - v3.2
* URL: https://bootstrapmade.com/php-email-form/
* Author: BootstrapMade.com
*/
function sendTestEmail() {
  document.querySelector('.php-email-form input[name="name"]').value = "Tudor Todorescu"
  document.querySelector('.php-email-form input[name="email"]').value = "todorescu.consulting@gmail.com"
  document.querySelector('.php-email-form input[name="subject"]').value = "I have a question regarding ..."
  document.querySelector('.php-email-form textarea[name="message"]').value = "Here is the content and blabla"
  document.querySelector('.php-email-form button.js_send_message').click()
}

(function () {
  "use strict"; 

  let forms = document.querySelectorAll('.php-email-form');

  forms.forEach( function(e) {
    e.addEventListener('submit', function(event) {
      event.preventDefault();

      let thisForm = this;

      let action = thisForm.getAttribute('action');
      let recaptcha = thisForm.getAttribute('data-recaptcha-site-key');
      
      if( ! action ) {
        displayError(thisForm, 'The form action property is not set!')
        return;
      }
      thisForm.querySelector('.loading').classList.add('d-block');
      thisForm.querySelector('.error-message').classList.remove('d-block');
      thisForm.querySelector('.sent-message').classList.remove('d-block');
      thisForm.querySelector('.js_send_message').setAttribute('disabled','disabled');

      let formData = new FormData( thisForm );

      if ( recaptcha ) {
        if(typeof grecaptcha !== "undefined" ) {
          grecaptcha.ready(function() {
            try {
              grecaptcha.execute(recaptcha, {action: 'php_email_form_submit'})
              .then(token => {
                formData.set('recaptcha-response', token);
                php_email_form_submit(thisForm, action, formData);
              })
            } catch(error) {
              displayError(thisForm, error)
            }
          });
        } else {
          displayError(thisForm, 'The reCaptcha javascript API url is not loaded!')
        }
      } else {
        php_email_form_submit(thisForm, action, formData);
      }
    });
  });

  function php_email_form_submit(thisForm, action, formData) {
    fetch(action, {
      method: 'POST',
      body: formData,
      headers: {'X-Requested-With': 'XMLHttpRequest'}
    })
    .then(res => res.json())
    .then(data => {
      thisForm.querySelector('.loading').classList.remove('d-block');
      thisForm.querySelector('.js_send_message').classList.add('d-none');

      if (data.valid === true) {
        thisForm.querySelector('.sent-message').classList.add('d-block');
        thisForm.reset(); 

        ;[...document.querySelectorAll('.php-email-form input,.php-email-form textarea')].forEach( element => element.classList.add('d-none'))
        document.querySelector('.php-email-form .gy-4').classList.remove('gy-4')
      } else {
        throw new Error(data ? data : 'Form submission failed and no error message returned from: ' + action); 
      }
    })
    .catch((error) => {
      displayError(thisForm, error);
    });
  }

  function displayError(thisForm, error) {
    thisForm.querySelector('.loading').classList.remove('d-block');
    thisForm.querySelector('.error-message').innerHTML = error;
    thisForm.querySelector('.error-message').classList.add('d-block');
    thisForm.querySelector('.js_send_message').removeAttribute('disabled');

  }

})();
