<template>
    <div class="customNavContainer">
    <nav class="customNav">
        <div class="navLeft">
            <router-link to="/UnderConstruction" class="navLogo"><img src="../../assets/img/logo.svg"/>
                <div class="navBarLogoText">
                    <h1>BLOCKCHAIN MEDIA NETWORK SDN BHD</h1>
                    <h1>Empowering the community</h1>
                </div>
            </router-link>
        </div>
        <div class="navRight">
        <ul class="navItms">
            <li><router-link to="/UnderConstruction">Home</router-link></li>
            <li>
                <router-link to="/UnderConstruction">Blocky Uni</router-link>
                <div class="dropDownContainerNav">
                    <div>
                        <a>APA ITU BLOCKCHAIN?</a>
                        <a>APA ITU MATA WANG KRIPTO?</a>
                        <a>APA ITU BITCOIN?</a>
                        <a>APA ITU ETHEREUM?</a>
                        <a>APA ITU ALT-COINS?</a>
                    </div>
                </div>
            </li>
            <li><router-link to="/UnderConstruction">News</router-link></li>
            <li><router-link to="/UnderConstruction">Contact</router-link></li>
            <li><router-link to="/UnderConstruction">Events</router-link></li>
        </ul>
        <div class="mobileNavContainer" v-on-clickaway="away">
            <a @click="showMenu = true"><i class="glyphicon glyphicon-menu-hamburger"></i></a>
            <div class="sideBar" v-show="showMenu">
                <div class="closeMenuContainer">
                    <router-link to="/UnderConstruction" class="navLogoMobile"><img src="../../assets/img/logo.svg"/></router-link>
                    <a @click="showMenu = false"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
                <ul class="movileNavList">
                    <li><router-link to="/UnderConstruction">Home</router-link></li>
                    <li>
                        <router-link to="/UnderConstruction">Blocky Uni</router-link>
                    </li>
                    <li><router-link to="/UnderConstruction">News</router-link></li>
                    <li><router-link to="/UnderConstruction">Contact</router-link></li>
                    <li><router-link to="/UnderConstruction">Events</router-link></li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    </div>
</template>

<script>
import { mixin as clickaway } from 'vue-clickaway';


export default {
  mixins: [ clickaway ],
  methods: {
    away: function() {
    
      this.showMenu = false,
      console.log('clicked away');
    },
  },
  name: 'Navbar',
  data () {
    return {
        showMenu: false,
    }
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

</style>
