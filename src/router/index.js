import Vue from 'vue'
import Router from 'vue-router'
import RouteContainer from '@/components/RouteContainer'
import Container from '@/components/Container'
import vue404 from '@/components/404'

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
      component: vue404
    }
  ]
})
