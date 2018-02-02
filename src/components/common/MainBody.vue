<template>
    <div class="homeWrap">
    <div class="homeHeader">
        <!-- Ticker Design -->
        <div class="tickerWrap">
            <div class="vAllContainer"><a href="#" v-on:click="toggleAdvancedF">View All</a></div>
                <div class="hideAdvanced" v-bind:class="{ tickerAllContainer: toggleAdvanced }">
                    <div class="tickerInside">
                        <i class="glyphicon glyphicon-remove closeAdvanced" v-on:click="toggleAdvancedF"/>
                        <div class="tickerTop">
                            <div class="tickerLeft">
                                <h4>Trending Currencies</h4>
                            </div>
                            <div class="tickerRightAdv">
                                <div class="inputContainerTickerSearch">
                                    <input placeholder="Search Currencies..."/>
                                </div>
                            </div>
                        </div>
                        <div class="tickerBody">
                            <div class="tickerAdvBody">
                                <div class="tickerAdvBodyItem">
                                    <div class="tickerItem">
                                        <div class="tickerLeft">
                                            <img src="https://shapeshift.io/images/coins/ripple.png" alt="Bitcoin">
                                        </div>
                                        <div class="tickerRight">
                                            <p>Ripple [ XRP ]</p>
                                            <h1 v-html="ripple_price"></h1>
                                        </div>
                                    </div>
                                </div>                                <div class="tickerAdvBodyItem">
                                    <div class="tickerItem">
                                        <div class="tickerLeft">
                                            <img src="https://coinpress.io/cointable/assets/images/coins/ADA.png" alt="Bitcoin">
                                        </div>
                                        <div class="tickerRight">
                                            <p>Cardano [ ADA ]</p>
                                            <h1 v-html="cardano_price"></h1>
                                        </div>
                                    </div>
                                </div>                                <div class="tickerAdvBodyItem">
                                    <div class="tickerItem">
                                        <div class="tickerLeft">
                                            <img src="https://shapeshift.io/images/coins/litecoin.png" alt="Bitcoin">
                                        </div>
                                        <div class="tickerRight">
                                            <p>Litecoin [ LTC ]</p>
                                            <h1 v-html="litecoin_price"></h1>
                                        </div>
                                    </div>
                                </div>                                <div class="tickerAdvBodyItem">
                                    <div class="tickerItem">
                                        <div class="tickerLeft">
                                            <img src="https://shapeshift.io/images/coins/stellar.png" alt="Bitcoin">
                                        </div>
                                        <div class="tickerRight">
                                            <p>Stellar [ XLM ]</p>
                                            <h1 v-html="stellar_price"></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <div class="coinPricesContainer">
                <div class="flexItemContainerPrice">
                    <div class="ticketMain">
                        <div class="flexItemCoinPrice">
                            <div class="tickerItem">
                                <div class="tickerLeft">
                                    <img src="../../assets/img/etherLogo.png" alt="Ethereum">
                                </div>
                                <div class="tickerRight">
                                    <p>Ethereum [ ETH ]</p>
                                    <h1 v-html="ethereum_price"></h1>
                                </div>
                            </div>
                        </div>

                        <div class="flexItemCoinPrice">
                            <div class="tickerItem">
                                <div class="tickerLeft">
                                    <img src="../../assets/img/bitcoinLogo.png" alt="Bitcoin Cash">
                                </div>
                                <div class="tickerRight">
                                    <p>Bitcoin Cash [ BCH ]</p>
                                    <h1 v-html="bitcoin_cash_price"></h1>
                                </div>
                            </div>
                        </div>

                        <div class="flexItemCoinPrice">
                            <div class="tickerItem">
                                <div class="tickerLeft">
                                    <img src="../../assets/img/bitcoinCashLogo.png" alt="Bitcoin">
                                </div>
                                <div class="tickerRight">
                                    <p>Bitcoin [ BTC ]</p>
                                    <h1 v-html="bitcoin_price"></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Livestream Section -->
        <div class="livestreamWrap">

                <div class="liveMain">
                    <div class="liveLeft">
                        <h1>Live Now</h1>
                    </div>
                    <div class="liveRight">
                        <h1>View Livestream</h1>
                        <span>
                        <img src="../../assets/img/play_white.png" alt="Play Livestream">
                    </span>
                    </div>
                </div>

        </div>
    </div>
        <div class="xx">
            <div class="flexRowCustom">
                <div class="bodyLeft">
                    <div class="homeLeft">
                        <div class="anonMain">
                            <div class="anonLeft">
                                <p>Event Announcement:</p>
                                <h1>Febuarary 12th</h1>
                                <p>at 1800 [6PM]</p>
                            </div>
                            <div class="anonRight">
                                <p>Location:</p>
                                <h1>Blocky.my Office</h1>
                                <p>Kuala Lumpur, Malaysia</p>
                            </div>
                        </div>
                            <div class="sidebar1">
                                <h1>Subscribe to our Newsletter.</h1>
                                <form class="form-wrapper cf">
                                    <input type="text" placeholder="Search here..." required>
                                    <button type="submit"><img src="../../assets/img/newsletterSend.png" alt="Submit Email"></button>
                                </form>
                            </div>
                        <div class="newsWrap">
                            <h1>Latest News and Stories</h1>
                            <div class="newsMain">
                                <div class="newsItem">
                                    <div class="customRow">
                                        <div class="col-md-4">
                                            <div class="newsImage">
                                                <img src="../../assets/img/news3.jpg">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="newsContainer">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="newsLeft">
                                                            <h1>Stair Lifts Feel The Freedom Of Your Home.</h1>
                                                            <span>John Church</span>
                                                            <p>Goldman Sachs analysts have claimed bitcoin is in a bubble bigger than the dot-com era and the famous Dutch tulip mania</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="newsRight">
                                                            <p class="categoryType"><span>|</span> Tech</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="datePosted">
                                                    <p>Jan. 23rd, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="newsItem">
                                    <div class="customRow">
                                        <div class="col-md-4">
                                            <div class="newsImage">
                                                <img src="../../assets/img/news3.jpg">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="newsContainer">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="newsLeft">
                                                            <h1>Stair Lifts Feel The Freedom Of Your Home.</h1>
                                                            <span>John Church</span>
                                                            <p>Goldman Sachs analysts have claimed bitcoin is in a bubble bigger than the dot-com era and the famous Dutch tulip mania</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="newsRight">
                                                            <p class="categoryType"><span>|</span> Tech</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="datePosted">
                                                    <p>Jan. 23rd, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="newsItem">
                                    <div class="customRow">
                                        <div class="col-md-4">
                                            <div class="newsImage">
                                                <img src="../../assets/img/news3.jpg">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="newsContainer">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="newsLeft">
                                                            <h1>Stair Lifts Feel The Freedom Of Your Home.</h1>
                                                            <span>John Church</span>
                                                            <p>Goldman Sachs analysts have claimed bitcoin is in a bubble bigger than the dot-com era and the famous Dutch tulip mania</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="newsRight">
                                                            <p class="categoryType"><span>|</span> Tech</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="datePosted">
                                                    <p>Jan. 23rd, 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="bodySideBarRight">
                    <div class="homeRight">
                        <div class="sidebarWrap">
                            <div class="sidebar2">
                                <div class="voteTop">
                                    <div>
                                        <h1>Tell us your opinion.</h1>
                                        <p>Will Bitcoin's price drop even more?</p>
                                    </div>
                                    <div class="radioContainer">
                                        <div class="control-group">
                                            <label class="control control--radio" v-bind:class="{ active: radioIsActiveYes }" v-on:click="selectYes">Yes</label>
                                            <label class="control control--radio" v-bind:class="{ active: radioIsActiveNo }" v-on:click="selectNo">No</label>
                                        </div>
                                    </div>
                                    <!-- <a href="#">Cast Vote <img src="../../assets/img/arrowRight.png"></a> -->
                                </div>
                                <div class="voteBottom">
                                    <div class="voteItem">
                                        <div>
                                            <h1>Yes</h1>
                                            <p>20%, 1,002</p>
                                        </div>
                                        <div class="voteBar">
                                            <div v-bind:class="{ barFiller: barLoaded }"></div>
                                        </div>
                                    </div>
                                    <div class="voteItem">
                                        <div>
                                            <h1>No</h1>
                                            <p>80%, 2,405</p>
                                        </div>
                                        <div class="voteBar">
                                            <div v-bind:class="{ barFiller: barLoaded }"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar3">
                                <h1>Connect With Us</h1>
                                <div class="socialWrap">
                                    <a href="https://twitter.com/blocky_my" target="_blank">
                                    <div class="socialItem">
                                        <div class="crow">
                                            <div class="socialContainer">
                                                <div class="socialLeft">
                                                    <div class="socialTop">
                                                        <img src="../../assets/img/twitterS.png" alt="Twitter">
                                                        <a href="https://twitter.com/blocky_my" target="_blank">Blocky_my</a>
                                                    </div>
                                                    <div class="socialBottom">
                                                        <h5>Followers:</h5>
                                                        <p v-html="twitterFollowers"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                    <a href="https://www.instagram.com/blocky.my/" target="_blank">
                                    <div class="socialItem">
                                        <div class="crow">
                                            <div class="socialContainer">
                                                <div class="socialLeft">
                                                    <div class="socialTop">
                                                        <img src="../../assets/img/instagramS.png" alt="Instagram">
                                                        <a href="https://www.instagram.com/blocky.my/" target="_blank">Blocky.my</a>
                                                    </div>
                                                    <div class="socialBottom">
                                                        <h5>Followers:</h5>
                                                        <p v-html="instagramFollowers"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>

                                    <a href="https://www.facebook.com/Blockymy-397902483995283/" target="_blank">
                                    <div class="socialItem">
                                        <div class="crow">
                                            <div class="socialContainer">
                                                <div class="socialLeft">
                                                    <div class="socialTop">
                                                        <img src="../../assets/img/facebookS.png" alt="Facebook">
                                                        <a href="https://www.facebook.com/Blockymy-397902483995283/" target="_blank">Blocky.my</a>
                                                    </div>
                                                    <div class="socialBottom">
                                                        <h5>Followers:</h5>
                                                        <p v-html="facebookFollowers"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import likes from 'likes'
import fx from 'money'
window.fx = fx
var currencies = [
  'bitcoin',
  'bitcoin-cash',
  'ethereum',
  'ripple',
  'litecoin',
  'stellar',
  'cardano'
];
export default {
  methods: {
    async getExc() {
      try {
          var http = await fetch('https://api.fixer.io/latest?base=USD&symbols=MYR');
          var body = await http.json()
          this.myrRate = body.rates.MYR
          console.log(myr)
      } catch(e) {
        console.error(e)
      }
    },
    async getPrices(currency) {

      try {

        var http = await fetch('http://cors-proxy.htmldriven.com/?url=https://graphs2.coinmarketcap.com/currencies/' + currency + '/');
        var body = await http.json()
        var prices = JSON.parse(body.body);
        var latest_price = prices.price_usd[prices.price_usd.length-1][1];
        var name = currency.replace('-', '_');

        this[name + '_price'] = (latest_price * this.myrRate).toFixed(2) + ' MYR';

      } catch(e) {
        console.error(e)
      }

    },
    getInstagram() {
        likes.instagram('blocky.my', (err, count) => {
            if (err) {
                console.error(err)
            }
            this.instagramFollowers = count;
        })
    },
    getTwitter() {
        likes.twitter('blocky_my', (err, count) => {
            if (err) {
                console.error(err)
            }
            this.twitterFollowers = count;
        })
    },
    getFacebook() {
        likes.facebook('Blockymy-397902483995283', (err, count) => {
            if (err) {
                console.error(err)
            }
            this.facebookFollowers = count;
        })
    },
    barFillOnLoad() {
            setTimeout(() => {
            this.barLoaded = true;
            }, 500);
    },
    selectYes() {
            this.radioIsActiveYes = true;
            this.radioIsActiveNo = false;

    },
    selectNo() {
            this.radioIsActiveNo = true;
            this.radioIsActiveYes = false;
    },
    toggleAdvancedF() {
            this.toggleAdvanced = ! this.toggleAdvanced;
    },
  },
 beforeMount(){
    this.getInstagram();
    this.getTwitter();
    this.getFacebook();
    this.getExc();


    for(let i=0; i<currencies.length; i++) {
      var cur = currencies[i];
      this.getPrices(cur);
    }

 },
  mounted(){
    this.barFillOnLoad();
 },
  name: 'MainBody',
  data () {

    var def = {
        instagramFollowers : '<div class="loader customSizeLoad"></div>',
        facebookFollowers : '<div class="loader customSizeLoad"></div>',
        twitterFollowers : '<div class="loader customSizeLoad"></div>',
        barLoaded: false,
        radioIsActiveNo: false,
        radioIsActiveYes: false,
        toggleAdvanced: false
    };

    for(let i=0; i<currencies.length; i++) {
      def[currencies[i].replace('-', '_') + '_price'] = '<div class="loader customSizeLoad"></div>';
    }

    return def;
  }
}

</script>

<style>

</style>
