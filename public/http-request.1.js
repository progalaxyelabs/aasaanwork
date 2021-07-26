var httpRequest = function (url, data, headers) {
    return new Promise((resolve, reject) => {
        let req = new XMLHttpRequest();
        req.addEventListener('load', (e) => {
            if (req.status !== 200) {
                console.error(req.responseText)
                resolve({})
                return
            }

            let response
            try {
                response = JSON.parse(req.response)
            } catch (ex) {
                console.error(ex)
                response = {}
            }
            resolve(response)
        })
        req.addEventListener('error', (e) => {
            console.error(e.description)
            resolve({})
        })
        req.open('POST', url)
        for (const key in headers) { req.setRequestHeader(key, headers[key]) }
        req.setRequestHeader('Content-Type', 'application/json');
        req.send(JSON.stringify(data))
    })
}

let Opener = {
    EMAIL: 'email',
    PASSWORD: 'password',
    BUTTON: 'button',
    CHECKBOX: 'checkbox',
    NAME: 'name',
    LONGTEXT: 'text',
    DATE: 'date',
    GOTOSCREEN: 'link',
    OPTION: 'option',
    NUMBER: 'number'
};

