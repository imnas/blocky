<template>
    <div class="customNavContainer">
    <nav class="customNav">
        <div class="navLeft">
            <a class="navLogo" href="/"><img src="../../assets/img/logo.svg"/><h1>Empowering the community</h1></a>
        </div>
        <div class="navRight">
        <ul class="navItms">
            <li><a href="#">Home</a></li>
            <li><a href="#">Blocky Uni</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Events</a></li>
        </ul>
        <div class="mobileNavContainer" v-on-clickaway="away">
            <a @click="showMenu = true"><i class="glyphicon glyphicon-menu-hamburger"></i></a>
            <div class="sideBar" v-show="showMenu">
                <div class="closeMenuContainer">
                    <a class="navLogoMobile" href="/"><img src="../../assets/img/logo.svg"/></a>
                    <a @click="showMenu = false"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
                <ul class="movileNavList">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blocky Uni</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Events</a></li>
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
