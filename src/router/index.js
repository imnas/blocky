import Vue from 'vue'
import Router from 'vue-router'
import RouteContainer from '@/components/RouteContainer'
import Container from '@/components/Container'
import vue404 from '@/components/404'
import UnderConstruction from '@/components/UnderConstruction'

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
    },
    {
      path: '/UnderConstruction',
      name: 'UnderConstruction',
      component: UnderConstruction
    }
  ]
})
