<template>
    <div>
  <v-app id="inspire">
    <v-navigation-drawer
      fixed
      v-model="drawer"
      app
      temporary
    >
      <v-list dense>
        <v-list-tile>
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Home</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-tile>
          <v-list-tile-action>
            <v-icon>contact_mail</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Contact</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
    <v-toolbar color="primary" dark app>
        <div class="flexNavi">    
            <div>
            <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
            <v-toolbar-title>Application</v-toolbar-title>
            </div>
            <div>
                xx
            </div>
        </div>
    </v-toolbar>
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
      drawer: null
    }),
    props: {
      source: String
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
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
.toolbar__content {
    height: 110px !important;
    background: #0d141a;
    box-shadow: none !important;
}
.toolbar {
    box-shadow: none !important;
}








</style>
