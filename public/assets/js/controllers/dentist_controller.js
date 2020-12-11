let DentistController = function () {

    let dentistFormHandler = new FormHandler();

    dentistFormHandler.init({
        formId: 'dentistForm',
        async: true,
        method: 'post',
        url: '/dentist/save',
    })

    return {

        save: function () {
            dentistFormHandler.sendRequest();
        }

    };


}();
