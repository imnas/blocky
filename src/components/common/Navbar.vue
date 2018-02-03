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
                <a @click="toggleUni">Blocky Uni</a>
                <div v-click-outside="hideUni" class="dropDownContainerNav" v-show="showDropdownUni">
                    <div>
                        <a>APA ITU BLOCKCHAINxxx?</a>
                        <a>APA ITU MATA WANG KRIPTO?</a>
                        <a>APA ITU BITCOIN?</a>
                        <a>APA ITU ETHEREUM?</a>
                        <a>APA ITU ALT-COINS?</a>
                    </div>
                </div>
            </li>
            <li>
                <a v-click-outside="onClickOutside" @click="toggleNews">News</a>
                <div class="dropDownContainerNav" v-show="showDropdownNews">
                    <div>
                        <a>APA ITU BLOCKCHAIN?</a>
                        <a>APA ITU MATA WANG KRIPTO?</a>
                        <a>APA ITU BITCOIN?</a>
                        <a>APA ITU ETHEREUM?</a>
                        <a>APA ITU ALT-COINS?</a>
                    </div>
                </div>
            </li>
            <li><router-link to="/UnderConstruction">Contact</router-link></li>
            <li><router-link to="/UnderConstruction">Events</router-link></li>
        </ul>
        <div class="mobileNavContainer" >
            <a><i class="glyphicon glyphicon-menu-hamburger"></i></a>
            <div class="sideBar" >
                <div class="closeMenuContainer">
                    <router-link to="/UnderConstruction" class="navLogoMobile"><img src="../../assets/img/logo.svg"/></router-link>
                    <a><i class="glyphicon glyphicon-remove"></i></a>
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
        showMenu: false,
        showDropdownNews: false,
        showDropdownUni: false
    }
  },
    directives: {
      clickOutside: vClickOutside.directive
    },
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
