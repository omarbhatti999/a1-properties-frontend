<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main>
        <div class="pb-5 vstack">
            <div class="page-entry" style="row-gap: 1rem;">
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 text-center mt-5 pt-0">
                    <h1 class="">Interactive Map</h1>
                    <h4 class="mt-0">Explore our diverse range of properties across Dubai and the UAE through our user-friendly interactive map, offering an immersive experience to discover your dream home in your desired location with just a click.</h4>
                </div>
            </div>
        </div>

        <nav
            class="mt g-col-12 g-start-1 g-col-lg-12 g-start-lg-2 featured-tab-groups-head border-color-grey-7 pt-2 filter-container">

            <ul class="button-list nav nav-tabs nav-tabs--featured-tab-groups" role="tablist">
                <li class="button-list-item nav-item" role="presentation">
                    <button class="custom-button nav-link active" :class="'sale' ?? 'active'" id="villas-new-tab"
                        data-tab-has-flickity data-bs-toggle="tab" data-bs-target="#villas-new-tab-pane" type="button"
                        role="tab" aria-controls="villas-new-tab-pane" aria-selected="true">Buy
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="custom-button nav-link " id="villas-reductions-tab" data-tab-has-flickity
                        data-bs-toggle="tab" data-bs-target="#villas-new-tab-pane" type="button" role="tab"
                        aria-controls="villas-reductions-tab-pane" aria-selected="true">Rent</button>
                </li>
            </ul>

        </nav>
        <div class="g-col-3 g-start-1 g-col-lg-14 mt-5 mx-0" data-theme="light">
            <div class="map-container map-container--home">
                <div id="neighborhoods-map"
                    style="z-index: 1;width: 100%; height: 100%; position: absolute; overflow: hidden;">
                    <div class="map-wrap">
                        <div ref="map" class="map"></div>
                    </div>
                </div>
            </div>

            <div hidden></div>
        </div>
        <div class="mt-5">
            <div class="text-center mb-5">
                <a class="btn btn-block btn-transparent btn-load-more" data-bs-toggle="modal"
                data-bs-target="#learnMoreModal" data-alt-label="RegisterInterest"
                >Learn More
                    </a>
            </div>
        </div>
        <RegisterOrRequestForm ></RegisterOrRequestForm>

    </main>
    <Footer></Footer>
</template>
<script>
import { defineAsyncComponent } from 'vue';

import mapboxgl from 'mapbox-gl';
import 'mapbox-gl/dist/mapbox-gl.css';
import _ from 'lodash';
const Header = defineAsyncComponent(() => import('../components/Header.vue'));
const Footer = defineAsyncComponent(() => import('../components/Footer.vue'));
import RegisterOrRequestForm from '../components/RegisterOrRequestForm.vue';

export default {
    name: 'InteractiveMapPage',
    components: {
        Header, Footer,RegisterOrRequestForm
    },
    data() {
        return {
            map: null,
            currentPopup: null,
            isFullscreen: false,
        };
    },
    mounted() {
        this.debouncedUpdateMap = _.debounce(this.updateMap, 100);
        this.loadMapboxLibrary();
    },
    methods: {
        async loadMapboxLibrary() {
            try {
                await import('mapbox-gl');
            } catch (error) {
                return;
            }

            this.initializeMap();
        },
        initializeMap() {
            const mapboxAccessToken = 'pk.eyJ1Ijoib21hcmJoYXR0aTk5OSIsImEiOiJjbHFld2ZnY2UwcGdlMml0a2hkeWxsYmY2In0.llY3DFLKsqhnv_oFDVmb5Q';
            mapboxgl.accessToken = mapboxAccessToken;

            this.map = new mapboxgl.Map({
                container: this.$refs.map,
                style: 'mapbox://styles/mapbox/dark-v11',
                center: [55.2194, 25.0418],
                zoom: 9,
            });

            this.map.on('load', () => {
                this.setupMapLayers();
                this.setupMapEvents();
            });
        },
        setupMapLayers() {
            // Add map layers (clusters, unclustered points) here
            this.map.addSource('earthquakes', {
                type: 'geojson',
                data: '/map.geojson',
                cluster: true,
                clusterMaxZoom: 14,
                clusterRadius: 50,
            });

            this.map.addLayer({
                id: 'clusters',
                type: 'circle',
                source: 'earthquakes',
                filter: ['has', 'point_count'],
                paint: {
                    'circle-color': [
                        'step',
                        ['get', 'point_count'],
                        '#fff',
                        100,
                        '#f1f075',
                        750,
                        '#f28cb1',
                    ],
                    'circle-radius': [
                        'step',
                        ['get', 'point_count'],
                        12,
                        100,
                        30,
                        750,
                        40,
                    ],
                    'circle-stroke-width': 3,
                    'circle-stroke-color': '#c67057',
                },
            });

            this.map.addLayer({
                id: 'cluster-count',
                type: 'symbol',
                source: 'earthquakes',
                filter: ['has', 'point_count'],
                layout: {
                    'text-field': ['get', 'point_count_abbreviated'],
                    'text-font': ['DIN Offc Pro Medium', 'Arial Unicode MS Bold'],
                    'text-size': 12,
                },
            });

            this.map.addLayer({
                id: 'unclustered-point',
                type: 'circle',
                source: 'earthquakes',
                filter: ['!', ['has', 'point_count']],
                paint: {
                    'circle-color': '#c67057',
                    'circle-radius': 6,
                    'circle-stroke-width': 2,
                    'circle-stroke-color': '#c67057',
                },
            });
        },
        setupMapEvents() {
            // Set up map events (click, mouseenter, mouseleave) here
            this.map.on('click', 'clusters', (e) => {
                const features = this.map.queryRenderedFeatures(e.point, {
                    layers: ['clusters'],
                });

                const clusterId = features[0].properties.cluster_id;

                this.map.getSource('earthquakes').getClusterExpansionZoom(
                    clusterId,
                    (err, zoom) => {
                        if (err) return;

                        this.map.easeTo({
                            center: features[0].geometry.coordinates,
                            zoom: zoom,
                        });
                    }
                );
                const clusterFeatures = this.map.querySourceFeatures('earthquakes', {
                    filter: ['==', 'cluster_id', clusterId],
                });
            });

            this.map.on('click', 'unclustered-point', (e) => {
                const coordinates = e.features[0].geometry.coordinates.slice();
                const property = e.features[0].properties;
                const beds = property.beds == 0 ? 'Studio' : property.beds + ' Beds';

                const popupHTML = `
        <div role="dialog" tabindex="-1" class="gm-style-iw gm-style-iw-c" style="padding-right: 0px; padding-bottom: 0px; max-height: 219px; min-width: 0px;"><div class="gm-style-iw-d" style="overflow: scroll; max-height: 201px;"><div>
		  		<div class="iw-card map-view-cards-list__item">

		  			<article class="info-card location-card popup-card">
<div class="info-card__media ratio ratio-4x3 iw-card__media">
<img src="https://a1properties.ae/backend/storage/listings/gallery/ad494a5a14b2bb955798e240102d91c7ce8.webp">
</div>
<div class="info-card__body iw-card__body mt-0">
<div class="hstack mbl-hstack">
<h5 class="info-card__title" style="font-size:12px;">
<a href="" class="">`+ property.title + `</a>
</h5>
</div>
<div class="title_section mt-1 mbl-popup-detail">
                                                <div class="col-lg-6">
                                                    <svg fill="#000000" width="15px" height="15px" viewBox="0 0 16 16"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.75 2.5H1.25A1.25 1.25 0 0 0 0 3.75v8.5a1.25 1.25 0 0 0 1.25 1.25h13.5A1.25 1.25 0 0 0 16 12.25v-8.5a1.25 1.25 0 0 0-1.25-1.25zM1.25 3.75h2a1.86 1.86 0 0 1-2 1.75zm0 8.5V10.5a1.86 1.86 0 0 1 2 1.75zm13.5 0H12.8a1.86 1.86 0 0 1 1.95-1.75zm0-3a3.1 3.1 0 0 0-3.2 3h-7.1a3.1 3.1 0 0 0-3.2-3v-2.5a3.1 3.1 0 0 0 3.2-3h7.1a3.1 3.1 0 0 0 3.2 3zm0-3.75a1.86 1.86 0 0 1-1.95-1.75h1.95z" />
                                                        <path
                                                            d="M8 5a3.1 3.1 0 0 0-3.2 3A3.1 3.1 0 0 0 8 11a3.1 3.1 0 0 0 3.2-3A3.1 3.1 0 0 0 8 5zm0 4.75A1.86 1.86 0 0 1 6.05 8 1.86 1.86 0 0 1 8 6.25 1.86 1.86 0 0 1 10 8a1.86 1.86 0 0 1-2 1.75z" />
                                                    </svg>&nbsp;
                                                    <span style="font-size:12px;font-weight:500;"> AED `+ this.formatPrice(property.price) + ` </span>

                                                </div>

                                                <div class="col-lg-6" style="text-align:right">
                                                    <span>
                                                        <svg
                                                        fill="#000000" width="15px" height="15px" viewBox="0 0 24 24" id="bedroom"
                                                        data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
                                                        <path id="secondary"
                                                            d="M4,12H20a1,1,0,0,1,1,1v3a0,0,0,0,1,0,0H3a0,0,0,0,1,0,0V13A1,1,0,0,1,4,12Z"
                                                            style="fill: rgb(103, 103, 103); stroke-width: 2;"></path>
                                                        <path id="primary"
                                                            d="M19,7a1,1,0,0,0-1-1H6A1,1,0,0,0,5,7v5H19Zm1,11V16M4,18V16m17,0H3V13a1,1,0,0,1,1-1H20a1,1,0,0,1,1,1Z"
                                                            style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                                        </path>
                                                    </svg>
                                                    <span style="font-size:12px;font-weight:500;"> `+ beds + ` </span>


                                                </div>

                                            </div>
<a class="mt-2 btn btn-ghost btn-block btn-design mx-0 p-0" href="/property/apartment-for-sale-marina-shores-dubai-marina-dubai-a1-s-8084">View</a>
</div>
</article>
		  		</div>
		  		</div></div></div>
        `;

                const popup = new mapboxgl.Popup({
                    className: 'custom-popup',
                })
                    .setLngLat(coordinates)
                    .setHTML(popupHTML)
                    .addTo(this.map);
            });

            // Other map event handlers can be added here
        },
        updateMap() {
            // Code to update the map
            console.log('Updating the map');
        },
        formatPrice(price) {
            const million = 1000000;
            const numericPrice = parseFloat(price.replace(/,/g, ''));
            return numericPrice >= million
                ? (numericPrice / million).toFixed(1) + 'M'
                : price.toString();
        },
        toProperty() {
            console.log('clicked');
            this.$router.push('/property/apartment-for-sale-marina-shores-dubai-marina-dubai-a1-s-8084');
        },
    },
};
</script>

<style scoped>
.map-wrap {
    position: relative;
    width: 100%;
    height: calc(100vh - 77px);
}

.map {
    position: absolute;
    width: 100%;
    height: 100%;
}

.watermark {
    position: absolute;
    left: 10px;
    bottom: 10px;
    z-index: 999;
}

.map-container--home {
    border-top: 0.5px solid #c67057;
    border-bottom: 0.5px solid #c67057;
}


@media only screen and (max-width: 600px) {

    .map-container--home {

        min-height: 40vh !important;
    }

    .filter-container {
        display: flex;
        justify-content: center;
        flex-wrap: nowrap;
        /* Ensure buttons stay on the same row */
    }

    .button-list {
        list-style-type: none;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .button-list-item {
        flex: 0;
    }

    .custom-button {
        width: auto !important;
        font-size: 13px;
    }

    .featured-tab-groups-head {
        display: flex;
        flex-direction: row;
        gap: .5rem
    }

    .horizontal-line {
        border-right: 1px solid #c67058;
    }
}

.button-list {
    list-style-type: none;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    padding: 0;
}

.button-list-item {
    flex: 1;
}

.custom-button {
    width: 150px !important;
    color: #000;
    font-weight: 600;
    display: block;
    width: 100%;
    padding: 5px 10px;
    text-align: center;
    border: none;
    transition: background-color 0.3s;
    margin-right: 2px;

}

.custom-button:hover {
    color: #000;
}

.custom-button.active {
    color: #000;
    border-bottom: 1px solid #c67057;
}

.filter-container {
    display: flex;
    justify-content: center;
    flex-wrap: nowrap;
    /* Ensure buttons stay on the same row */
}

.fullscreen-control {
    position: absolute;
    top: 10px;
    right: 40px;
    z-index: 999;
}

.fullscreen-control button {
    background: none;
    border: none;
    cursor: pointer;
}
</style>
