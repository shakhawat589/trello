import './bootstrap'

import Vue from 'vue'
import router from './router'

Vue.component('mainapp', require('./mainapp.vue').default)

new Vue({
  el:'#app',
  router
})