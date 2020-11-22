let AppCore = function () {

    let spaContent = '#spa-content';

    return {

        defaultErrorAlertBox: function (title, text) {
            Swal.fire({
                title: title,
                text: text,
                icon: 'error',
                confirmButtonText: 'Ok'
            })
        },
        defaultAccessErrorAlertBox: function () {
            Swal.fire({
                title: 'Error',
                text: 'No se pudo acceder al recurso solicitado.',
                icon: 'error',
                confirmButtonText: 'Ok'
            })
        },
        loadContent: function (url) {
            $(spaContent).load(url);
        },
        buildMenu: function () {
            $.ajax({
                type: 'get',
                url: '/permissions'
            })
                .done(data => AppCore.buildMenuOptions(data))
                .fail(() => AppCore.defaultAccessErrorAlertBox());
        },
        buildMenuOption: function (permission) {

            $('#sidebar-unordered-list').html(
                '<li class="nav-item">'
                + '<a class="nav-link active" onclick="AppCore.loadContent(' + "'" + permission.path + "'" + ')">'
                + '<i style="margin-right: 4px;" class="' + permission.icon_class + '"></i>' + permission.description + ''
                + '<span class="sr-only">'
                + '</span>'
                + '</a>'
                + '</li>');
        },
        buildMenuOptions: function (permissions) {

            permissions.forEach(permission =>
                AppCore.buildMenuOption(permission));

        },
    };

}();
