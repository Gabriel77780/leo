PatientController = function () {

    let patientFormHandler = new FormHandler();

    patientFormHandler.init({
        formId: 'patientForm',
        async: true,
        method: 'post',
        url: '/patient/save',
    });

    return {

        save: function () {
            patientFormHandler.sendRequest();
        }
    };


}();
