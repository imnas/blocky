<template>
  <div class="ucContainer">
    <div class="actualUc">
        <div class="actualUcTop">
            <div></div>
            <router-link to="/"><img src="../assets/img/logo.svg" alt="logo"></router-link>
            <div> </div>
        </div>
        <div class="ucBody">
            <h4>Our site is currently</h4>
            <img src="../assets/img/underConstruction.png" alt="underConstruction">
            <h4>come back later.</h4>
        </div>
        <div class="ucFoot">
            <div class="ucFootLeft">
                <router-link to="/">Go Home</router-link>
            </div>
            <div class="ucMid">
                <h4>Want to know when this page releases?</h4>
                <div class="ucMidInputContainer">
                    <input placeholder="Enter email address..."/>
                    <a>Submit</a>
                </div>
            </div>
            <div class="ucFootRight">
                <router-link to="/">Learn More</router-link>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'UnderConstruction',
  data () {
    return {

    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.ucContainer {
    height:100%;
    background-color:#131e24;
}
.actualUc {
    display: flex;
    flex-direction: column;
    height: 100%;
}
.actualUcTop img {
    width: 250px;
}
.actualUcTop {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    min-height: 160px;
}
.ucBody {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
        height: 100%;
}
.ucBody img {
    max-width: 550px;
    width: 100%;
    margin-top: 20px;
    margin-bottom: 20px;
}
.ucBody h4 {
    font-size: 24px;
    font-weight: 600;
}
.ucFoot {
    display: flex;
    flex-direction: row;
    background-image: url(../assets/img/blueWave.png);
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: bottom center;
    width:100%;
        height: 100%;
    max-height: 350px;
        min-height: 350px;
}
.ucMid h4 {
    font-size: 24px;
    font-weight: 600;
    margin-bottom:50px;
}
.ucMidInputContainer input {
    height: 55px;
    padding-left: 25px;
    padding-right: 25px;
    border-radius: 4px 0px 0px 4px;
    font-size: 17px;
    color:#000;
}
.ucMidInputContainer {
    display: flex;
    flex-direction: row;
    align-items: center;
}
.ucMidInputContainer a {
    display: flex;
    align-items: center;
    height: 55px;
    background: black;
    justify-content: center;
    padding-left: 25px;
    padding-right: 25px;
    border-radius: 0px 4px 4px 0px;
    color: #fff;
    font-weight: bold;
}
.ucFootLeft a, .ucFootRight a {
    display: flex;
    align-items: center;
    justify-content: center;
    padding-left: 25px;
    padding-right: 25px;
    height: 55px;
    border-radius: 4px;
    background: #fff;
    color: black;
    font-weight: bold;
    font-size: 18px;
}
.ucMid {
    text-align: center;
    justify-content: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    width:100%
}
.ucFootRight {
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
    width:100%;
    padding:25px;
}
.ucFootLeft {
    display: flex;
    justify-content: flex-start;
    align-items: flex-end;
    width:100%;
    padding:25px;
}
</style>
