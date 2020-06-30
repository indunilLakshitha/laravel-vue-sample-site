import Vue from 'vue'
import App from './App.vue'
import Router from "./routes.js";
import vueResource from 'vue-resource';

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate);
Vue.use(vueResource);

new Vue({
  el: '#app',
  render: h => h(App),
  router:Router
})
