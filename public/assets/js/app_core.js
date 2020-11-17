let AppCore = function () {

    let spaContent = '#spa-content';
    let sidebarList = '#sidebar-list';

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
        loadSpaContent: function (url) {
            $(spaContent).load(url);
        },
        getSidebarMenu: function () {
            $.ajax({
                type: 'get',
                url: '/permissions'
            })
                .done(data => AppCore.buildSidebarMenu(data))
                .fail(AppCore.defaultAccessErrorAlertBox());
        },
        buildSidebarMenu: function (permissions) {

            $(sidebarList).html(
                '<li class="nav-item">'
                + '<a class="nav-link active" onclick="AppCore.loadSpaContent(' + permissions.path + ')">'
                + '<i class="fas ' + permissions.iconClass + '"></i>' + permissions.description + ''
                + '<span class="sr-only">'
                + '</span>'
                + '</a>'
                + '</li>');
        }

    };

}();
