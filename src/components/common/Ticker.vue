<template>
    <div class="homeHeader">
        <!-- Ticker Design -->
        <div class="tickerWrap">
            <div class="vAllContainer"><a href="#">View All</a></div>
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
                                    <h1>$975.00 MYR</h1>
                                </div>
                            </div>
                        </div>

                        <div class="flexItemCoinPrice">
                            <div class="tickerItem">
                                <div class="tickerLeft">
                                    <img src="../../assets/img/bitcoinCashLogo.png" alt="Bitcoin Cash">
                                </div>
                                <div class="tickerRight">
                                    <p>Bitcoin Cash [ BCH ]</p>
                                    <h1>$975.00 MYR</h1>
                                </div>
                            </div>
                        </div>

                        <div class="flexItemCoinPrice">
                            <div class="tickerItem">
                                <div class="tickerLeft">
                                    <img src="../../assets/img/bitcoinLogo.png" alt="Bitcoin">
                                </div>
                                <div class="tickerRight">
                                    <p>Bitcoin [ BTC ]</p>
                                    <h1>$975.00 MYR</h1>
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
</template>

<script>
export default {
  name: 'Ticker',
  data () {
    return {

    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

</style>
