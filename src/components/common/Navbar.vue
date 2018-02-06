<template>
<div>
    <v-navigation-drawer
      fixed
      v-model="drawer"
      app
      temporary
    >
      <div>
<ul class="movileNavList">
    <div class="navLeft">
        <router-link to="/UnderConstruction" class="navLogo"><img src="../../assets/img/logo.svg"/>
            <div class="navBarLogoText">
                <h1>BLOCKCHAIN MEDIA NETWORK SDN BHD</h1>
                <h1>Empowering the community</h1>
            </div>
        </router-link>
    </div>
    <li><a href="#/UnderConstruction" class="">Home</a></li> 

    <li><a href="#/UnderConstruction" class="">Blocky Uni <i class="glyphicon glyphicon-chevron-down"></i></a></li> 
    <div class="mobileSubMenu">
        <router-link to="/404">APA ITU BLOCKCHAIN?</router-link>
        <router-link to="/404">APA ITU MATA WANG KRIPTO?</router-link>
        <router-link to="/404">APA ITU BITCOIN?</router-link>
        <router-link to="/404">APA ITU ETHEREUM?</router-link>
        <router-link to="/404">APA ITU ALT-COINS?</router-link>
    </div>
    <li><a href="#/UnderConstruction" class="">News <i class="glyphicon glyphicon-chevron-down"></i></a></li> 
    <div class="mobileSubMenu">
        <router-link to="/404">APA ITU BLOCKCHAIN?</router-link>
        <router-link to="/404">APA ITU MATA WANG KRIPTO?</router-link>
        <router-link to="/404">APA ITU BITCOIN?</router-link>
        <router-link to="/404">APA ITU ETHEREUM?</router-link>
        <router-link to="/404">APA ITU ALT-COINS?</router-link>
    </div>
    <li><a href="#/UnderConstruction" class="">Contact</a></li> 
    <li><a href="#/UnderConstruction" class="">Events</a></li>
</ul>
      </div>
    </v-navigation-drawer>
    <v-toolbar color="primary" dark app>
        <div class="flexNavi">    
            <div class="navLeft">
                <router-link to="/UnderConstruction" class="navLogo"><img src="../../assets/img/logo.svg"/>
                    <div class="navBarLogoText">
                        <h1>BLOCKCHAIN MEDIA NETWORK SDN BHD</h1>
                        <h1>Empowering the community</h1>
                    </div>
                </router-link>
            </div>
            <div class="navItmContainer">
                <ul class="navItms">
                    <li><router-link to="/UnderConstruction">Home</router-link></li>
                    <v-menu offset-y>
                        <v-btn color="dark" dark slot="activator">Blocky Uni <i class="glyphicon glyphicon-chevron-down"></i></v-btn>
                        <v-list>
                        <v-list-tile>
                            <v-list-tile-title><router-link to="/404">APA ITU BLOCKCHAIN?</router-link></v-list-tile-title>
                            <v-list-tile-title><router-link to="/404">APA ITU MATA WANG KRIPTO?</router-link></v-list-tile-title>
                            <v-list-tile-title><router-link to="/404">APA ITU BITCOIN?</router-link></v-list-tile-title>
                            <v-list-tile-title><router-link to="/404">APA ITU ETHEREUM?</router-link></v-list-tile-title>
                            <v-list-tile-title><router-link to="/404">APA ITU ALT-COINS?</router-link></v-list-tile-title>
                        </v-list-tile>
                        </v-list>
                    </v-menu>
                    <v-menu offset-y>
                        <v-btn color="dark" dark slot="activator">News <i class="glyphicon glyphicon-chevron-down"></i></v-btn>
                        <v-list>
                        <v-list-tile>
                            <v-list-tile-title><router-link to="/404">APA ITU BLOCKCHAIN?</router-link></v-list-tile-title>
                            <v-list-tile-title><router-link to="/404">APA ITU MATA WANG KRIPTO?</router-link></v-list-tile-title>
                            <v-list-tile-title><router-link to="/404">APA ITU BITCOIN?</router-link></v-list-tile-title>
                            <v-list-tile-title><router-link to="/404">APA ITU ETHEREUM?</router-link></v-list-tile-title>
                            <v-list-tile-title><router-link to="/404">APA ITU ALT-COINS?</router-link></v-list-tile-title>
                        </v-list-tile>
                        </v-list>
                    </v-menu>
                    <li><router-link to="/UnderConstruction">Contact</router-link></li>
                    <li><router-link to="/UnderConstruction">Events</router-link></li>
                </ul>
            </div>
            <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
        </div>
    </v-toolbar>
</div>
</template>

<script>
// import ClickOutside from 'vue-click-outside'
import vClickOutside from 'v-click-outside'

export default {
  methods: {
      onClickOutside (event) {
              this.showDropdownNews = false
      },
    toggleUni () {
      this.showDropdownNews = true
    },
 
    hideUni () {
      this.showDropdownNews = false
    },
    toggleNews (e) {
        console.log('hi')
        console.log(e)
      this.showDropdownNews = true
        e.stopPropogation()
        e.preventDefault()
    },
 
    hideNews () {
      this.showDropdownNews = false
    }
  },
  name: 'Navbar',
  data () {
    return {
        drawer: null,
        showMenu: false,
        showDropdownNews: false,
        showDropdownUni: false
    }
  },
    directives: {
      clickOutside: vClickOutside.directive
    },
    props: {
      source: String
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
.sideBar {
    position: fixed;
    top: 0;
    bottom: 0;
    width: 256px;
    height: 100vh;
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
    z-index: 0;
    /* display: none; */
    background-color: #162029;
    color: white;
    z-index: 100;
    left: 0;
    overflow: auto;
}
.list__tile {
    display: flex;
    flex-direction: column;
    height: 100%;
}
.list__tile__title {
    height: 50px;
}

.mobileSubMenu a:not(:first-child) {
    margin-top: 5px;
}
.mobileSubMenu a {
    font-weight: bold;
    font-size: 11px;
}
.mobileSubMenu {
    display: flex;
    flex-direction: column;
    width: 100%;
    padding-left: 45px;
    margin-top: 25px;
    padding-bottom: 25px;
    border-bottom: 1px solid #191e22;
}
.movileNavList .navLeft {
    margin-top: 25px;
    margin-left: 25px;
    margin-bottom: 50px;
}
</style>
