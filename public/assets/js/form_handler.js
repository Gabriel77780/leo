class FormHandler {
    constructor() {

        this.init = function (configObject) {

            if (configObject) {
                for (let k in configObject) {
                    if (this.config.hasOwnProperty(k)) {
                        this.config[k] = configObject[k];
                    }
                }
            }
        };

        this.sendRequest = function (event) {

            if (this.checkFormValidity(event)) {

                fetch(this.config.url, {

                    headers: this.config.headers,
                    method: this.config.method,
                    body: JSON.stringify(this.serializeForm()),

                }).then(response => response)
                    .then(function (res) {

                        if (res.ok) {
                            if (res.redirected) {
                                window.location.href = res.url;
                            } else {
                                res.json().then(function (jsonRes) {
                                    if (jsonRes.success) {
                                        AppCore.defaultSuccessAlertBox('Exito', 'Exito');
                                    } else {
                                        AppCore.defaultErrorAlertBox('Fallo', 'Fallo');
                                    }
                                }
                                );
                            }
                        }

                    })
                    .catch(function (error) {
                        AppCore.defaultErrorAlertBox('Error', 'Error');
                        console.log('There was a problem with fetch request' + error.message);
                    });;
            }
        };

        this.checkFormValidity = function (event) {

            let form = this.getFormObject();

            if (form.checkValidity() === false) {

                form.classList.add('was-validated');

                return false;

            } else {

                return true;

            }

        }

        this.getFormObject = function () {
            return document.getElementById(this.config.formId);
        }

        this.serializeForm = function () {

            var obj = {};
            var formData = new FormData(this.getFormObject());
            for (var key of formData.keys()) {
                obj[key] = formData.get(key);
            }
            return obj;

        }

        this.config = {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                "Content-Type": "application/json",
                "Accept": "application/json, text/javascript, */*; q=0.01",
            },
            formId: '',
            url: '',
            method: '',
            async: false,
        };

    }
}
