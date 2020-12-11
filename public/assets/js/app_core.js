let AppCore = function () {

    let mainContent = '#main-content';

    let _retrievePermissions = function () {
        $.ajax({
            async: true,
            type: 'get',
            url: '/permissions'
        })
            .done(data => _buildMenu(data))
            .fail(() => console.log('Error loading the menu.'));
    }

    let _buildMenu = function (permissions) {

        permissions.forEach(permission => _buildMenuOptions(permission));

        _hideLoadingPage();

    }

    let _buildMenuOptions = function (permission) {

        let menuOptions = '';

        menuOptions += _buildMenuOption(permission);

        $('#sidebar-unordered-list').append(menuOptions);
    }

    let _buildMenuOption = function (permission) {
        return '<li class="nav-item">'
            + '<a class="nav-link" onclick="AppCore.loadContent(' + "'" + permission.path + "'" + '); AppCore.setMenuOptionActive(this)">'
            + '<i style="margin-right: 4px;" class="' + permission.icon_class + '"></i>' + permission.description + ''
            + '<span class="sr-only">'
            + '</span>'
            + '</a>'
            + '</li>';
    }

    let _loadContent = function (url) {
        $(mainContent).load(url);
        _sidebarToggler('hide');
    }

    let _sidebarToggler = function (action) {
        $('.collapse').collapse(action);
    }

    _hideLoadingPage = function () {

        document.getElementById('loading-page').style.display = 'none';
        document.getElementById('main-page').style.display = 'block';

    }

    return {

        init: function () {
            _retrievePermissions();
        },
        defaultSuccessAlertBox: function (text) {
            Swal.fire({
                icon: 'success',
                text: text,
                showConfirmButton: false,
                timer: 2000
            })
        },
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
            _loadContent(url);
        },
        setMenuOptionActive: function (element) {

            let currentActiveElement = document.getElementsByClassName("active");

            currentActiveElement[0].className
                = currentActiveElement[0].className.replace(" active", "");

            element.className += " active";

        }
    };

}();
