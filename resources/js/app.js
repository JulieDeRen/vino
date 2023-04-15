require('./bootstrap');
import Vue from 'vue';
import router from './routes';
import '../css/editApp.css'
import Navigation from './components/Navigation.vue';
import Footer from './components/Footer.vue';

Vue.component('navigation', Navigation);
Vue.component('footer-component', Footer);

const app = new Vue({
    router,
    render: h => h('div', { class: 'flex flex-col min-h-screen' }, [
        h('navigation'),
        h('main', { class: 'flex-1' }, [ h('router-view') ]),
        h('footer-component')
      ])
}).$mount('#app');
