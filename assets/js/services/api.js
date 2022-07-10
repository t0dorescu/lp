
const Api = {
    async get( method, data ) {
        let url = `${API_URL}?method=${ method }`

        for ( const name in data ) {
            const value = data[ name ]
            url += `&params[${ name }]=${ value }`
        }

        const request = await fetch( url )
        const json = await request.json()

        return json
    },
    async post( method, data ) {
        const searchParams = new URLSearchParams();
        searchParams.append( 'method', method )

        for ( const name in data ) {
            const value = data[ name ]
            searchParams.set( name, value )
        }

        const request = await fetch( API_URL, {
            method: 'post',
            body: searchParams,
        })

        const json = await request.json()
        
        return json
    }
}
