(function loadModulesAndComponents() {
    window.addEventListener('DOMContentLoaded', function () {
        loadComponents();
        loadModule();
    });

    function loadComponents() {

    }

    function loadModule() {
        let element = document.querySelector('.module');
        if (!element) {
            return;
        }
        let moduleName = element.getAttribute('data-module');
        if (!moduleName) {
            return;
        }

        if (!window['AasaanWorkModules'][moduleName]) {
            return;
        }
        let module;
        try {
            module = new (window['AasaanWorkModules'][moduleName])(element);
        } catch (ex) {
            console.log(`error while loading module ${moduleName}`, ex);
        }
    }

})();


