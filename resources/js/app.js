import './bootstrap'

import Vue from 'vue'

Vue.component('mainapp', require('./mainapp.vue').default)

new Vue({
  el:'#app'
})