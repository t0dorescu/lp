
function isDev() {
    return [
        'localhost',
        '127.0.0.1',
        'dev.todorescu.com'
    ].includes(window.location.host) 
}

async function fetchGravatar(email) {
    const emailMd5 = CryptoJS.MD5(email).toString()
    const response = await (await fetch(`https://en.gravatar.com/${emailMd5}.json`)).json()
    
    if (response?.entry?.length) {
        return response.entry?.[0].photos?.[0].value
    }        

    return ''
}
