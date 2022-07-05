
const loginModal = document.querySelector('#loginModal')
const registerModal = document.querySelector('#registerModal')
const forgotPasswordModal = document.querySelector('#forgotPasswordModal')

function openLoginModal() {
    new bootstrap.Modal(loginModal).show()
}
function openForgotPasswordModal() {
    new bootstrap.Modal(forgotPasswordModal).show()
    loginModal.querySelector('.btn-close').click()
}
function openRegisterModal() {
    new bootstrap.Modal(registerModal).show()
}
function initiateCheckout(plan) {
    console.log('plan', plan)
    openRegisterModal()
}
function signin() {

}
function register() {

}
