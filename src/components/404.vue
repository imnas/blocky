<template>
  <div class="container404">
    <div class="actual404">
      <img src="../assets/img/404.png" alt="404">
      <h2>404</h2>
      <p>What a mess! The page you are looking for doesn't exist or is missing.</p>
      <div class="gBLs">
        <router-link to="/">Go back</router-link> or <router-link to="/">go home</router-link>!
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: '404page',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.actual404 h2 {
    font-weight: bold;
    color: #6d658e;
    font-size: 100px;
}
.actual404 p {
    color: #2d1c3c;
    font-weight: 600;
    font-size: 18px;
}
.gBLs a {
    font-weight: 600;
    color: #6d658e;
    text-decoration: underline;
}
.gBLs {
    font-size: 18px;
    color: #121a22;
    font-weight: 600;
}
.container404 {
      height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}





</style>
