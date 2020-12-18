'use strict'
const view = use('View');
class AuthController {

    loginPage() {
        return view.render('auth.login');
    }

    registerPage() {
        return view.render('auth.register');
    }
}

module.exports = AuthController
