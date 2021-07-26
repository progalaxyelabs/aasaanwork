var Dashboard = (function () {
    let isInitialized = false;

    let init = function () {
        if (isInitialized) {
            return
        }

        // fetchConfig()
        //     .then((config) => {
        //         buildScreensList(config)
        //     })
        //     .then((status) => {
        //         bindUiActions()
        //     })

        bindUiActions()
        isInitialized = true
    }

    // let fetchConfig = function () {
    //     config = []
    //     return httpRequest('/dashboard/get_screens', {})
    //         .then((res) => { config = res.config ? res.config : [] })
    // }

    let bindUiActions = function () {

    }

    // let buildScreensList = function (screens) {

    // }

    return { init: init }
})()