import Vue from 'vue'
import Router from 'vue-router'
import Container from '@/components/Container'
import page404 from '@/components/404'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Container',
      component: Container
    },
    {
      path: '*',
      name: '404',
      component: page404
    }
  ]
})
