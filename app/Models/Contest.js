'use strict'

/** @type {typeof import('@adonisjs/lucid/src/Lucid/Model')} */
const Model = use('Model')

class Contest extends Model {
    submissions() {
        return this.hasMany('App/Models/Submission');
    }
}

module.exports = Contest
