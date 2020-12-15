DentistAllAppointmentController = function () {

    let appointmentsTableHandler = new TableHandler();

    appointmentsTableHandler.init({
        formId: 'appointments-table-container',
        method: 'get',
        url: '/dentist/appointments/all',
        rowHandler: function (record) {
            return [
                record.dentist,
                record.date,
                record.time
            ];
        },
    });

    return {

        getAllAppointments: function () {
            appointmentsTableHandler.getData();
        },

    };

}();

DentistAllAppointmentController.getAllAppointments();
