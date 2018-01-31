<template>
    <div class="routerContainer">
        <router-view></router-view>
    </div>
</template>

<script>
export default {
  name: 'RouteContainer',
  data () {
    return {

    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
.routerContainer {
    height:100%;
}
</style>
