
function isValidEmail(email = '') {
    return !!String(email)
        .toLowerCase()
        .match(
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        )
}

function isValidPassword(password = '') {
    return !!String(password)
        .toLowerCase()
        .match(
            /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/
        )
}

///////

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

function invalidInput(status, input, num = null) {
    status.isValid = false
    input.classList.add('is-invalid')
    if ( num !== null ) {
        input.parentElement.querySelectorAll('.invalid-feedback')[num].classList.remove('d-none')
    }
}

function validInput(input) {
    input.classList.add('is-valid')
}
