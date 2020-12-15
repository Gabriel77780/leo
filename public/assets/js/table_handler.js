class TableHandler {

    constructor() {

        let tableHandler = this;

        tableHandler.init = function (configObject) {

            if (configObject) {

                for (let k in configObject) {

                    if (tableHandler.config.hasOwnProperty(k)) {

                        tableHandler.config[k] = configObject[k];

                    }
                }
            }
        };

        tableHandler.getData = function () {

            fetch(tableHandler.config.url, {

                headers: tableHandler.config.headers,
                method: tableHandler.config.method,

            }).then(response => response)
                .then(function (res) {

                    if (res.ok) {

                        res.json().then((jsonRes) => {

                            if (jsonRes.success) {

                                tableHandler.handleTableContent(jsonRes.data);

                            } else {
                                AppCore.defaultErrorAlertBox('Fallo', 'Fallo');
                            }
                        }
                        );

                    }

                })
                .catch(function (error) {
                    AppCore.defaultErrorAlertBox('Error', 'Error');
                    console.log('There was a problem with fetch request' + error.message);
                });;

        };

        tableHandler.handleTableContent = function (data) {

            $('#' + tableHandler.config.formId).find('tbody').empty();

            for (let i = 0; i < data.length; i++) {

                let rec = data[i];
                let cols = tableHandler.config.rowHandler(rec);
                let row = '<tr>';

                if (cols.length > 0)
                    row += '<td>' + cols.join('</td><td>') + '</td>';
                row += '</tr>';
                $('#' + tableHandler.config.formId).find('tbody').append(row);

            }

        }

        tableHandler.config = {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                "Content-Type": "application/json",
                "Accept": "application/json, text/javascript, */*; q=0.01",
            },
            formId: '',
            url: '',
            method: '',
            rowHandler: function (record) { return [record.identification, record.name1 + ' ' + record.last_name1 + ' ' + record.last_name2]; }
        };

    }
}
