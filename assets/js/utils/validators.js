
function isValidName(name = '') {
    return !!String(name)
        .trim()
        .match(
            /^[a-z\sA-Z\-\']+$/
        )
}

function isValidEmail(email = '') {
    return !!String(email)
        .toLowerCase()
        .trim()
        .match(
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        )
}

function isValidPassword(password = '') {
    return !!String(password)
        .toLowerCase()
        .trim()
        .match(
            /^(?=.*[0-9])(?=.*[!@#$%^&*\.\,])[a-zA-Z0-9!@#$%^&*\.\,]{8,}$/
        )
}
