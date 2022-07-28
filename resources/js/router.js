import Vue from "vue";
import Router from "vue-router"

import login from './pages/login'
import board from './pages/board'

Vue.use(Router)

const routes = [
  {path:'/', component: login},
  {path:'/board', component: board},
]

export default new Router({
  mode: 'history',
  routes
})