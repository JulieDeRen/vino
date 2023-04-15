import Vue from 'vue'
import VueRouter from 'vue-router'
import Accueil from './views/Acceuil.vue'
import Connecter from './views/Connecter.vue'
import Inscrir from './views/Inscrir.vue'


Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'accueil',
    component: Accueil
  },
  {
    path: '/connecter',
    name: 'connecter',
    component: Connecter
  },
  {
    path: '/inscrir',
    name: 'inscrir',
    component: Inscrir
  }
]

const router = new VueRouter({
  mode: 'history',
  routes
})

export default router