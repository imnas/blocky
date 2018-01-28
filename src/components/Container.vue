<template>
    <div>
        <Navbar></Navbar>
        <Ticker></Ticker>
        <MainBody></MainBody>
        <Footer></Footer>
    </div>
</template>

<script>
import Navbar from './common/Navbar.vue'
import Ticker from './common/Ticker.vue'
import Footer from './common/Footer.vue'
import MainBody from './common/MainBody.vue'
export default {
  components: {
      Navbar,
      Ticker,
      MainBody,
      Footer
  },
  name: 'Container',
  data () {
    return {

    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

</style>
