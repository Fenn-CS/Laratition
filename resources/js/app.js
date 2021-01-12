require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter)

let routes = [
    { path: '/', component: require('./components/Home.vue').default },
    { path: '/create-competition', component: require('./components/CreateCompetition.vue').default },
    { path: '/view-competition', component: require('./components/ViewCompetitions.vue').default },

]

const router = new VueRouter({
    routes // short for `routes: routes`
})


const app = new Vue({
    el: '#app',
    router
});