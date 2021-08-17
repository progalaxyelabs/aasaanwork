window.addEventListener('DOMContentLoaded', (e) => {
    let pageModuleElements = document.querySelectorAll('.screen-js-module');
    if (!pageModuleElements) {
        return;
    }

    for (let i = 0; i < pageModuleElements.length; i++) {
        let element = pageModuleElements[i];
        let moduleName = element.getAttribute('data-module');

        if (!moduleName) {
            continue;
        }

        if (!window[moduleName]) {
            continue;
        }

        let module = window[moduleName]();
        module.init();
    }
});

var HomeCreateForm = function () {
    let isInitialized = false;
    let config = [];
    let formId;
    let form;
    let init = function () {
        if (isInitialized) {
            return;
        }
        form = document.getElementById('frame');
        formId = document.getElementById('form-id').value;

        fetchFormConfig()
            .then(() => {
                for (c of config) {
                    controlBuilder.build(c)
                }
            })


        bindUiActions();

        isInitialized = true;
    };

    let bindUiActions = function () {
        //console.log('HomeCreateForm module initialized');

    };

    var fetchFormConfig = function () {
        config = []
        return httpRequest('/form/config', { biz_form_id: formId })
            .then((res) => { config = res.config ? res.config : [] })
    }

    var controlBuilder = (function () {
        let build = function (c) {
            console.log(c)
            switch (c.controlType) {
                case Opener.NAME:
                    return form.appendChild(new SimpleTextFormControl(c).get())
                case Opener.OPTION:
                    return form.appendChild(new OptionsFormControl(c).get())
                case Opener.NUMBER:
                    return form.appendChild(new NumberFormControl(c).get())
                case Opener.GOTOSCREEN:
                    return form.appendChild(new GotoScreenFormControl(c).get())
                case Opener.BUTTON:
                    return form.appendChild(new ButtonFormControl(c).get())
                case Opener.EMAIL:
                    return form.appendChild(new EmailFormControl(c).get())
                case Opener.DATE:
                    return form.appendChild(new DateFormControl(c).get())
                case Opener.PASSWORD:
                    return form.appendChild(new PasswordFormControl(c).get())
                case Opener.CHECKBOX:
                    return form.appendChild(new TickboxFormControl(c).get())
                case Opener.LONGTEXT:
                    return form.appendChild(new ParagraphFormControl(c).get())
            }
        }

        return { build: build }
    })()



    return {
        init: init
    };
};



var ThirdScreen = function () {
    let isInitialized = false;


    let init = function () {
        if (isInitialized) {
            return;
        }

        bindUiActions();
        isInitialized = true;
        //console.log('ThirsScreen module initialized');
    };

    let bindUiActions = function () {

        // scripts for third screen

    };

    return {
        init: init
    };
};