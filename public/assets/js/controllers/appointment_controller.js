let AppointmentController = function () {

    let appointmentFormHandler = new FormHandler();

    appointmentFormHandler.init({
        formId: 'appointmentForm',
        async: true,
        method: 'post',
        url: '/appointment/save',
    })

    return {

        save: function () {
            appointmentFormHandler.sendRequest();
        }

    };


}();
