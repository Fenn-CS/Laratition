'use strict'
const view = use('View');

class PublicController {

    welcome () {
        return view.render('welcome')
    }

    competitions () {
      return view.render('competitions')
    }

    submissions () {
      return view.render('submissions')
    }

    leaderboard() {
      return view.render('leaderboard')
    }

    community() {
      return view.render('community')
    }
}

module.exports = PublicController
