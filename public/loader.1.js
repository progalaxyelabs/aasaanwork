(function loadModulesAndComponents() {
    window.addEventListener('DOMContentLoaded', function () {
        loadComponents();
        loadModule();
    });

    function loadComponents() {

    }

    function loadModule() {
        let element = document.getElementById('page-module');
        if (!element) {
            return;
        }
        let moduleName = element.getAttribute('data-page-module');
        if (!moduleName) {
            return;
        }

        if (!window[moduleName]) {
            return;
        }
        window[moduleName].init()
    }

})();


