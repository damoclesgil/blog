import Vue from 'vue'
import App from './components/App.vue'
import VueResource from 'vue-resource';
import VueRouter from 'vue-router';
// tem que vir entre chaves, porque não é default
import { routes } from './routes';
import './directives/Transform';
import VeeValidate from 'vee-validate';
import msg from './pt_BR';

require('./bootstrap');

const router = new VueRouter({
  routes,
  mode: 'history'
});

window.Vue = require('vue');
Vue.use(VueResource);
Vue.use(VueRouter);
Vue.use(VeeValidate, {
  locale: 'pt_BR',
  dictionary: {
    pt_BR: {
      messages: msg
    }
  }
});

// http usará sempre o endereço abaixo
Vue.http.options.root = 'http://localhost:3000';

Vue.config.devtools = true;
Vue.config.performance = true;

// Vue.component('artigo', require('./components/Artigo.vue'));
// const router = new VueRouter({routes});

new Vue({
	el: '#app',
	router,
	render: h => h(App)
});
