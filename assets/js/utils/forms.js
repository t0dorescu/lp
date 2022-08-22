
function toggleElements( targetParent, firstSelector, secondSelector, showFirstSelector)  {
    targetParent.querySelector(firstSelector).classList[ showFirstSelector ? 'remove' : 'add' ]('d-none')
    targetParent.querySelector(secondSelector).classList[ showFirstSelector ? 'add' : 'remove' ]('d-none')
}

function queryInputs(form, selectors = []) {
    return selectors.map( selector => {
        const input = form.querySelector(selector)
        const inputValue = input.value || ''
        
        return [ input, inputValue.trim()]
    })
}

function resetFormInputs(form) {
    ;[...form.querySelectorAll('.invalid-feedback')].forEach(element => element.classList.add('d-none'))
    ;[...form.querySelectorAll('.form-control')].forEach(element => element.classList.remove('is-invalid', 'is-valid'))
}

function eventInputs(form) {
    ;[...form.querySelectorAll('input,textarea')].forEach(element => {
        element.addEventListener('focus', () => {
            resetFormInputs(element.parentElement)
        })
    })
}

function diableInputs(form) {
    ;[...form.querySelectorAll('input,textarea')].forEach(element => {
        element.setAttribute('disabled', 'disabled')
    })
}

function disableButton(buttonSelector) {
    document.querySelector(buttonSelector).setAttribute('disabled','disabled')
}

function enableButton(buttonSelector) {
    document.querySelector(buttonSelector).removeAttribute('disabled')
}

function invalidInput(status, input, num = null, inputParent) {
    status.isValid = false
    input.classList.add('is-invalid')
    if ( num !== null ) {
        input.parentElement.querySelectorAll('.invalid-feedback')[num].classList.remove('d-none')
    }
}

function validInput(input) {
    input.classList.add('is-valid')
}


function welcomeMessage(form, data) {
    if ( data.first_name ) {
      form.querySelector('.js_name_congrats').innerText = data.first_name
    }

    if (data.gravatar_url) {
      const gravatarImg = form.querySelector('.js_gravatar_img')

      gravatarImg.classList.remove('d-none')
      gravatarImg.setAttribute('src', data.gravatar_url)
    }
  }