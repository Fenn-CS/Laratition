require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter)

let routes = [
    { path: '/', component: require('./components/Home.vue').default },
    { path: '/competitions/new', component: require('./components/CreateCompetition.vue').default },
    { path: '/competitions/review/:id', component: require('./components/ReviewSubmission.vue').default },
    { path: '/competitions', component: require('./components/ViewCompetitions.vue').default },
    { path: '/submissions', component: require('./components/Submissions.vue').default },

]

const router = new VueRouter({
    routes 
})

const app = new Vue({
    el: '#app',
    router
});