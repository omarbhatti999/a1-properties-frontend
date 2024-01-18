<template>
    <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2">

        <!-- <h3 class="text-center">Navigate the map to explore luxury living and exclusive communities.</h3>
        <p class="text-center">Uncover refined living and discover prestigious communities with effortless navigation.<br>Explore premium properties and sought-after neighborhoods at your fingertips.</p> -->

        <!-- <hr> -->
        <div class="row map-container mt-5">
            <div class="col-sm-6">
                <div id="neighborhoods-map">
                    <div class="map-wrap text-center">
                        <h3>Discover UAE's real estate landscape with our interactive map !</h3>
                        <p class="p-1">Our interactive map is your ultimate guide to navigating the city's thriving property
                            market. Interactive
                            map provides detailed insights into these exclusive communities and projects helping you find
                            the
                            perfect residence that suits your lifestyle.</p>
                        <p class="p-1">Explore in-depth details about these exclusive communities and projects through our
                            interactive map, aiding you in discovering the ideal residence that complements your lifestyle..
                        </p>

                        <img class="img-w-map" :src="backendUrl + 'storage/a1/dubai-sky-line.svg'">
                        <br>
                        <div class="align-center mt-5 ">
                            <div class="btn-group mx-2 btns-actions">
                                <button @click="toMapPage()" class="btn btn-transparent btn-load-more">
                                    &nbsp;&nbsp;&nbsp;Explore the map&nbsp;&nbsp;&nbsp;
                                </button>

                                <!-- <button data-bs-toggle="modal" data-bs-target="#learnMoreModal" class="btn btn-transparent btn-load-more">
                                    Register your interest
                                </button> -->
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-sm-6 hidden-map-mbl">
                <div id="neighborhoods-map">
                    <div class="map-wrap mt-5">
                        <img class="map-image" alt="buy-property-in-dubai-map"
                            src="https://a1properties.ae/backend/storage/a1/map.webp">
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
export default {
    name: 'InteractiveMap',
    components: {

    },
    data() {
        return {
            backendUrl: 'https://a1properties.ae/backend/'
            // backendUrl: 'http://192.168.2.46:8000/'

        }
    },
    methods: {
        async toMapPage() {
           await this.$router.push('/map')
        }
    },
}
</script>
<style scoped>
.btn{
    border-radius:0%;
}
.map-container {
    height: 490px;
}

.map-container img {
    height: 450px;
}

.map-container--home {
    border-top: 0.5px solid #c67057;
    border-bottom: 0.5px solid #c67057;
}

.map-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 1%;
    box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.4);
    filter: drop-shadow(5px rgba(0, 0, 0, 0.9));
}

.map-wrap {
    height: 100%;
}

.img-w-map {
    height: 170px !important;
}

@media only screen and (max-width: 600px) {
    .btns-actions button{
        font-size: 12px;
        margin-top: 20px;
    }
    .hidden-map-mbl {
        margin: 0px !important;
        display: none !important;
    }

    .map-container {
        height: 520px !important;
    }

    .img-w-map {
        margin-bottom: -20px;
        height: 120px !important;
    }

    .top-text {
        margin-bottom: 0px !important;
    }
}
</style>
