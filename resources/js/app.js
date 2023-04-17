require('./bootstrap');
import Vue from 'vue';
import router from './routes';
import Navigation from './components/Navigation.vue';
import Footer from './components/Footer.vue';

const { default: axios } = require('axios');

Vue.component('navigation', Navigation);
Vue.component('footer-component', Footer);

const app = new Vue({
    router,
    data: {
      bouteilles:[]
    },
    created() {
      this.fetchBouteilles();
    },
    methods: {
      fetchBouteilles () {
          axios.get('/bouteilles')
          .then(response => {
              this.messages = response.data
          })
      }
    },
    render: h => h('div', { class: 'flex flex-col min-h-screen' }, [
        h('navigation'),
        h('main', { class: 'flex-1' }, [ h('router-view') ]),
        h('footer-component')
      ])
}).$mount('#app');
