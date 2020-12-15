AllAppointmentController = function () {

    let appointmentsTableHandler = new TableHandler();

    appointmentsTableHandler.init({
        formId: 'appointments-table-container',
        method: 'get',
        url: '/appointment/all',
        rowHandler: function (record) {
            return [
                record.patient,
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

AllAppointmentController.getAllAppointments();
