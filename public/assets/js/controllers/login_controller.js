LoginController = function () {

    let loginFormHandler = new FormHandler();

    loginFormHandler.init({
        formId: 'loginForm',
        async: true,
        method: 'post',
        url: '/login',
    })

    return {

        logIn: function () {
            loginFormHandler.sendRequest();
        }

    };


}();
