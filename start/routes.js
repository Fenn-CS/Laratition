'use strict'

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| Http routes are entry points to your web application. You can create
| routes for different URL's and bind Controller actions to them.
|
| A complete guide on routing is available here.
| http://adonisjs.com/docs/4.1/routing
|
*/

/** @type {typeof import('@adonisjs/framework/src/Route/Manager')} */
const Route = use('Route')

// Route.on('/').render('welcome')

Route.get('/', 'PublicController.welcome')
Route.get('login', 'Auth/AuthController.loginPage')
Route.get('register', 'Auth/AuthController.registerPage')
Route.get('competitions', 'PublicController.competitions')
Route.get('submissions', 'PublicController.submissions')
Route.get('leaderboard', 'PublicController.leaderboard')
Route.get('community', 'PublicController.community')

Route
  .post('login', 'Auth/AuthController.login')
  .middleware('guest').as('user.login')

Route
  .post('register', 'Auth/AuthController.register')
  .middleware('guest')

Route
  .get('users/:id', 'Auth/AuthController.show')
  .middleware('auth')