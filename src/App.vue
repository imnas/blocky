<template>
  <div id="app">
          <RouteContainer/>

  </div>
</template>

<script>
import RouteContainer from '@/components/RouteContainer'
export default {
  components: {
    RouteContainer
  },
  name: 'App',
    data: () => ({
      drawer: null
    }),
    props: {
      source: String
    }
}
</script>

<style>
@import '../src/assets/css/main.css';
@import '../src/assets/css/responsive.css';
</style>
