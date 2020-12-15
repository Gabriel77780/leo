AppointmentController = function () {

    let appointmentFormHandler = new FormHandler();

    appointmentFormHandler.init({
        formId: 'appointmentForm',
        async: true,
        method: 'post',
        url: '/appointment/save',
    })

    let patientsTableHandler = new TableHandler();

    patientsTableHandler.init({
        formId: 'patients-table-container',
        method: 'get',
        url: '/patient/all',
        rowHandler: function (record) {
            return [
                record.identification,
                record.name1 + ' ' + record.last_name1,
                '<div class="text-center"><a href="javascript:;" onclick="AppointmentController.openNewAppointmentForm('
                + record.id
                + ')"><i class="fas fa-arrow-right"></i></a></div>'
            ];
        },
    });

    return {

        save: function () {
            appointmentFormHandler.sendRequest();
        },
        getAllPatients: function () {
            patientsTableHandler.getData();
        },
        openNewAppointmentForm: function (id) {
            $("#patients-table-container").hide();
            $("#appointment-container").show();
            $("#appointmentForm").find('#patientId').val(id);
        }

    };

}();

var Controls = function () {
    return {
        requestData: function () {
            $.ajax({
                type: 'get',
                url: '/dentist/all',
                cache: false,
                dataType: "json"
            })
                .fail(AppCore.defaultHandlerForErrorOnAccess)
                .done(
                    function (result) {
                        var $selectGroups = $('#appointment-container').find("#dentistId");
                        for (var i = 0; i < result.length; i++) {
                            $selectGroups.append('<option value="' + result[i].id + '">'
                                + result[i].name1 + ' ' + result[i].last_name1
                                + '</option>');
                        }
                    });
        }
    };
}();

AppointmentController.getAllPatients();
$("#appointment-container").hide();
Controls.requestData();
