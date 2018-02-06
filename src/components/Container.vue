<template>
    <div>
  <v-app id="inspire">
      <navbar/>
    <v-content>
      <v-container fluid fill-height>

<div> 
        <MainBody></MainBody>
        <Footer></Footer>
</div>

      </v-container>
    </v-content>
  </v-app>
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
    data: () => ({
      drawer: null,
          items: [
      { title: 'Click Me' },
      { title: 'Click Me' },
      { title: 'Click Me' },
      { title: 'Click Me 2' }
    ]
    }),
    props: {
      source: String
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
input, select, textarea {
    background:#fff;
}
*:focus {
    outline:0pt !important;
}
.container.fill-height {
    padding:unset !important;
}
.container-fluid {
    width: 100%;
}
.application.theme--light {
    background: unset;
    color: unset;
}
.application a {
    color:#fff !important;
}
.flexNavi {
    display: flex;
    flex-direction: row;
    width: 100%;
    justify-content: space-between;
    align-items: center;
}
.flexNavi {
    height: 100%;
    /* margin-left: 50px !important;
    margin-right: 50px !important; */
}
.toolbar__content {
    height: 110px !important;
    background: #0d141a;
    box-shadow: none !important;
}
.toolbar {
    box-shadow: none !important;
}
.navItmContainer {
    height: 100%;
}
.menu {
    display: flex !important;
    align-items: center;
    justify-content: center;
}
.application .theme--light.list, .theme--light .list {
    background: #21313f !important;
    margin-bottom: 0px;
}
.menu__activator {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.menu__activator button {
    background: transparent !important;
    box-shadow: none !important;
    padding: unset;
    font-weight: bold;
    text-transform: capitalize;
    height: 100%;
    margin: unset !important;
    border:unset !important;
    border-radius:unset !important;
}
.menu__activator button:hover {
    background:#3498db !important;
}
.btn.theme--dark.dark i {
    margin-left: 10px;
}
.list__tile__title a {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    font-weight: bold;
    margin-top: 15px;
    font-size: 12px;
}
.application .theme--light.navigation-drawer, .theme--light .navigation-drawer {
    background: #15191c;
}
</style>
