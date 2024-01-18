<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main>
        <div class="page-entry pt-6 pb-5 mbl-top-sec" v-if="development">
            <div class="g-col-1 g-start-2 g-col-lg-8 g-start-lg-4 text-center">
                <h1 class="mb-2">{{ development.developmentName ?? '' }} at {{ development.areaName ?? '' }}</h1>
                <p></p>
            </div>
            <div class="g-col-3 g-start-1 g-col-lg-14 pb-0" style="margin-top:-20px;">
                <swiper :autoplay='{
                    "delay": 2000,
                    "disableOnInteraction": false
                }' :speed="2000" class="swiper-slider" :effect="'coverflow'" :grabCursor="true" :centeredSlides="false"
                    :slidesPerView="'auto'" :coverflowEffect="{
                        rotate: 50,
                        stretch: 0,
                        depth: 100,
                        modifier: 1,
                        slideShadows: true,
                        scale: 0.8
                    }">
                    <swiper-slide v-for="(item, index) in development.multipleImages ?? ''" :key="n">
                        <img :src="backendUrl + item" :alt="development.slug" class="listing-photos-grid__image"
                            loading="lazy"> </swiper-slide>


                </swiper>


            </div>

            <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 gallery-after" v-if="development">
                <div class="row section-after-gallery d-flex pb-5">
                    <!-- <div class="col-sm-12" > -->
                    <div class="col-sm-6 logo-sec" v-if="development.developer">
                        <img class="developer-logo" :src="development.developer.featuredImage">
                    </div>
                    <div class="col-sm-6 pt-5 register-btn">
                        <button class="btn btn-ghost btn-block btn-design" data-bs-toggle="modal"
                            data-bs-target="#learnMoreModal" data-alt-label="RegisterInterest"
                            @click="toggleActionButton('REGISTER')">
                            Register your interest
                        </button>
                        <!-- </div> -->
                    </div>
                </div>

            </div>
            <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2">

                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 border-top pt-5">
                    <div class="aminities_list row">

                        <div class="amenity-item col-md-2 col-sm-6 col-xm-6 mb-5">
                            <div class="amenity-icon">
                                <svg width="40px" height="40px" viewBox="0 -0.5 21 21" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-419.000000, -720.000000)"
                                            fill="#000000">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M379.79996,578 L376.649968,578 L376.649968,574 L370.349983,574 L370.349983,578 L367.19999,578 L367.19999,568.813 L373.489475,562.823 L379.79996,568.832 L379.79996,578 Z M381.899955,568.004 L381.899955,568 L381.899955,568 L373.502075,560 L363,569.992 L364.481546,571.406 L365.099995,570.813 L365.099995,580 L372.449978,580 L372.449978,576 L374.549973,576 L374.549973,580 L381.899955,580 L381.899955,579.997 L381.899955,570.832 L382.514204,571.416 L384.001,570.002 L381.899955,568.004 Z"
                                                    id="home-[#1391]">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="amenity-text">
                                <span class="amenity-heading">Property type:</span><br>
                                <div v-for="type in development.developmentType">
                                    <span>{{ type }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="amenity-item col-md-2 col-sm-6 col-xm-6">
                            <div class="amenity-icon">
                                <svg fill="#000000" width="40px" height="40px" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.75 2.5H1.25A1.25 1.25 0 0 0 0 3.75v8.5a1.25 1.25 0 0 0 1.25 1.25h13.5A1.25 1.25 0 0 0 16 12.25v-8.5a1.25 1.25 0 0 0-1.25-1.25zM1.25 3.75h2a1.86 1.86 0 0 1-2 1.75zm0 8.5V10.5a1.86 1.86 0 0 1 2 1.75zm13.5 0H12.8a1.86 1.86 0 0 1 1.95-1.75zm0-3a3.1 3.1 0 0 0-3.2 3h-7.1a3.1 3.1 0 0 0-3.2-3v-2.5a3.1 3.1 0 0 0 3.2-3h7.1a3.1 3.1 0 0 0 3.2 3zm0-3.75a1.86 1.86 0 0 1-1.95-1.75h1.95z" />
                                    <path
                                        d="M8 5a3.1 3.1 0 0 0-3.2 3A3.1 3.1 0 0 0 8 11a3.1 3.1 0 0 0 3.2-3A3.1 3.1 0 0 0 8 5zm0 4.75A1.86 1.86 0 0 1 6.05 8 1.86 1.86 0 0 1 8 6.25 1.86 1.86 0 0 1 10 8a1.86 1.86 0 0 1-2 1.75z" />
                                </svg>
                            </div>
                            <div class="amenity-text">
                                <span class="amenity-heading">Starting price:</span><br>
                                <span>AED {{ development.startingPrice }}</span>
                            </div>
                        </div>
                        <div class="amenity-item col-md-2 col-sm-6 col-xm-6">
                            <div class="amenity-icon">
                                <svg fill="#000000" width="40px" height="40px" viewBox="0 0 24 24" id="bedroom"
                                    data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
                                    <path id="secondary"
                                        d="M4,12H20a1,1,0,0,1,1,1v3a0,0,0,0,1,0,0H3a0,0,0,0,1,0,0V13A1,1,0,0,1,4,12Z"
                                        style="fill: rgb(255, 255, 255); stroke-width: 2;"></path>
                                    <path id="primary"
                                        d="M19,7a1,1,0,0,0-1-1H6A1,1,0,0,0,5,7v5H19Zm1,11V16M4,18V16m17,0H3V13a1,1,0,0,1,1-1H20a1,1,0,0,1,1,1Z"
                                        style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </path>
                                </svg>
                            </div>
                            <div class="amenity-text">
                                <span class="amenity-heading"> Unit type:</span>
                                <br>
                                <span>{{ development.bedroomMin }} to {{ development.bedroomMax }}</span>
                                <span>&nbsp;Bedrooms</span>
                            </div>
                        </div>

                        <div class="amenity-item col-md-2 col-sm-6 col-xm-6">
                            <div class="amenity-icon">
                                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 2C6.94493 2.0073 4.8215 2.10686 3.46447 3.46389C2 4.92835 2 7.28538 2 11.9994C2 16.7135 2 19.0705 3.46447 20.535C4.92893 21.9994 7.28596 21.9994 12 21.9994C16.714 21.9994 19.0711 21.9994 20.5355 20.535C21.8926 19.1779 21.9921 17.0545 21.9994 12.9994"
                                        stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M13 11L22 2M22 2H16.6562M22 2V7.34375M21 3L12 12M12 12H16M12 12V8"
                                        stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="amenity-text">
                                <span class="amenity-heading">Built-up area:</span>
                                <br>
                                <span>{{ development.buildUpAreaMin }}</span> to
                                <span>{{ development.buildUpAreaMax }}</span>
                                <span>&nbsp;{{ development.unit == 'Sq. Feet' ? 'Sq. Ft.' : 'Sq. Mt.' }}</span>
                            </div>
                        </div>

                        <div class="amenity-item col-md-2 col-sm-6 col-xm-6 last-items">
                            <div class="amenity-icon">
                                <svg fill="#000000" width="40px" height="40px" viewBox="0 0 32 32" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.434 11.975l8.602-8.549-0.028 4.846c-0.009 0.404 0.311 0.755 0.716 0.746l0.513-0.001c0.404-0.009 0.739-0.25 0.748-0.654l0.021-7.219c0-0.007-0.027-0.012-0.027-0.019l0.040-0.366c0.004-0.203-0.044-0.384-0.174-0.513-0.13-0.131-0.311-0.21-0.512-0.204l-0.366 0.009c-0.007 0-0.012 0.003-0.020 0.004l-7.172-0.032c-0.404 0.009-0.738 0.343-0.747 0.748l-0.001 0.513c0.061 0.476 0.436 0.755 0.84 0.746l4.726 0.013-8.572 8.52c-0.39 0.39-0.39 1.024 0 1.415s1.023 0.39 1.414 0zM10.597 20.025l-8.602 8.523 0.027-4.82c0.010-0.404-0.312-0.756-0.716-0.747l-0.544 0.001c-0.405 0.010-0.739 0.25-0.748 0.654l-0.021 7.219c0 0.007 0.028 0.011 0.028 0.019l-0.040 0.365c-0.005 0.203 0.043 0.385 0.174 0.514 0.129 0.131 0.311 0.21 0.512 0.205l0.366-0.009c0.007 0 0.012-0.003 0.020-0.003l7.203 0.032c0.404-0.010 0.738-0.344 0.748-0.748l0.001-0.514c-0.062-0.476-0.436-0.755-0.84-0.746l-4.726-0.012 8.571-8.518c0.39-0.39 0.39-1.023 0-1.414s-1.023-0.391-1.413-0zM32.007 30.855l-0.021-7.219c-0.009-0.404-0.343-0.645-0.747-0.654l-0.513-0.001c-0.404-0.009-0.725 0.343-0.716 0.747l0.028 4.846-8.602-8.549c-0.39-0.39-1.023-0.39-1.414 0s-0.39 1.023 0 1.414l8.571 8.518-4.726 0.012c-0.404-0.009-0.779 0.27-0.84 0.746l0.001 0.514c0.009 0.404 0.344 0.739 0.747 0.748l7.172-0.032c0.008 0 0.013 0.003 0.020 0.003l0.366 0.009c0.201 0.005 0.384-0.074 0.512-0.205 0.131-0.129 0.178-0.311 0.174-0.514l-0.040-0.365c0-0.008 0.027-0.012 0.027-0.019zM3.439 2.041l4.727-0.012c0.404 0.009 0.778-0.27 0.84-0.746l-0.001-0.513c-0.010-0.405-0.344-0.739-0.748-0.748l-7.204 0.031c-0.008-0.001-0.013-0.004-0.020-0.004l-0.366-0.009c-0.201-0.005-0.383 0.074-0.512 0.204-0.132 0.13-0.179 0.31-0.174 0.514l0.040 0.366c0 0.007-0.028 0.012-0.028 0.020l0.021 7.219c0.009 0.404 0.343 0.645 0.748 0.654l0.545 0.001c0.404 0.009 0.724-0.342 0.715-0.746l-0.028-4.819 8.602 8.523c0.39 0.39 1.024 0.39 1.414 0s0.39-1.024 0-1.415z">
                                    </path>
                                </svg>
                            </div>
                            <div class="amenity-text">
                                <span class="amenity-heading">Plot size:</span>
                                <br>
                                <span>{{ development.buildUpAreaMin }}</span>
                                <!-- <span>&nbsp;{{ development.unit }}</span> -->
                            </div>
                        </div>

                        <div class="amenity-item col-md-2 col-sm-6 col-xm-6 last-items">
                            <div class="amenity-icon">
                                <svg fill="#000000" width="40px" height="40px" viewBox="0 0 1024 1024"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M429.811 577.1l-80.485-86.309c-21.425-22.976-57.42-24.233-80.396-2.807s-24.233 57.42-2.807 80.396l81.839 87.762-.158.152 43.493 45.038c19.643 20.341 52.056 20.907 72.397 1.264l35.686-34.462 8.195-7.642-.133-.143 251.802-243.163c22.607-21.832 23.236-57.857 1.405-80.464s-57.857-23.236-80.464-1.405L429.812 577.1zM512 1024C229.23 1024 0 794.77 0 512S229.23 0 512 0s512 229.23 512 512-229.23 512-512 512z" />
                                </svg>

                            </div>
                            <div class="amenity-text">
                                <span class="amenity-heading">Status: </span>
                                <br>
                                <span>Off-plan</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2">

                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 border-bottom pb-5 about-section">

                    <h2 class="mb-0 listing-body__heading">About</h2>

                    <div class="pt-2 mb-3" :style="contentStyle" v-html="development.longDescription">

                    </div>



                    <a class="btn-readmore mb-0 pb-0" @click="toggleContent()">{{ isTruncated ? 'Read more'
                        :
                        'Show less' }}</a>
                    <div class="btn-centered">
                        <button class="btn btn-ghost mt-7 mb-3 btn-block btn-design" data-bs-toggle="modal"
                            data-bs-target="#learnMoreModal" data-alt-label="RegisterInterest"
                            @click="toggleActionButton('REQUEST')">
                            Request details
                        </button>
                    </div>
                </div>

                <!-- Gallery Section -->
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 border-bottom pb-5 mt-5">
                    <h2 class="mb-0 listing-body__heading mb-3">Gallery</h2>

                    <div class="floor-plan-section mt-5 pb-3">
                        <div class="listing-photos-grid floor-plan-grid">
                            <button class="listing-photos-grid__item  floor-plan-images" data-bs-toggle="modal"
                                data-bs-target="#listing-photos-gallery">
                                <img :src="backendUrl + development.multipleImages[0]" :alt="development.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="280" height="210">
                            </button>
                            <button class="listing-photos-grid__item floor-plan-images" data-bs-toggle="modal"
                                data-bs-target="#listing-photos-gallery">
                                <img :src="backendUrl + development.multipleImages[1]" :alt="development.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="280" height="210">
                            </button>
                            <button class="listing-photos-grid__item floor-plan-images" data-bs-toggle="modal"
                                data-bs-target="#listing-photos-gallery">
                                <img :src="backendUrl + development.multipleImages[2]" :alt="development.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="280" height="210">
                            </button>
                            <button class="listing-photos-grid__item  floor-plan-images" data-bs-toggle="modal"
                                data-bs-target="#listing-photos-gallery">
                                <img :src="backendUrl + development.multipleImages[3]" :alt="development.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="280" height="210">
                            </button>
                            <button class="listing-photos-grid__item floor-plan-images" data-bs-toggle="modal"
                                data-bs-target="#listing-photos-gallery">
                                <img :src="backendUrl + development.multipleImages[4]" :alt="development.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="280" height="210">
                            </button>
                            <button class="listing-photos-grid__item floor-plan-images" data-bs-toggle="modal"
                                data-bs-target="#listing-photos-gallery">
                                <img :src="backendUrl + development.multipleImages[5]" :alt="development.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="280" height="210">
                            </button>
                            <button class="listing-photos-grid__item  floor-plan-images" data-bs-toggle="modal"
                                data-bs-target="#listing-photos-gallery">
                                <img :src="backendUrl + development.multipleImages[6]" :alt="development.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="280" height="210">
                            </button>
                            <button class="listing-photos-grid__item floor-plan-images" data-bs-toggle="modal"
                                data-bs-target="#listing-photos-gallery">
                                <img :src="backendUrl + development.multipleImages[7]" :alt="development.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="280" height="210">
                            </button>
                            <button class="listing-photos-grid__item last-item floor-plan-images" data-bs-toggle="modal"
                                data-bs-target="#listing-photos-gallery">
                                <img :src="backendUrl + development.multipleImages[8]" :alt="development.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="280" height="210">
                                <div class="overlay">
                                    <span class="plus-sign">+ {{ development.multipleImages.length - 8 }}</span>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="btn-centered pb-0 mb-0 btn-video">
                        <button class="btn btn-ghost mt-3 mb-6 btn-block btn-design">
                            Project Video
                        </button>
                    </div>

                </div>

                <!-- Payment Plan Section -->
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 border-bottom pb-5 mt-5">
                    <h2>Payment Plan</h2>
                    <ul class="finance-steps payment-plan-section">
                        <li class="finance-steps__item">
                            <div class="finance-step amenity-item">
                                <div class="amenity-icon">
                                    <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.5 8C8.84315 8 7.5 9.34315 7.5 11C7.5 12.6569 8.84315 14 10.5 14C12.1569 14 13.5 12.6569 13.5 11C13.5 9.34315 12.1569 8 10.5 8ZM9 11C9 10.1716 9.67157 9.5 10.5 9.5C11.3284 9.5 12 10.1716 12 11C12 11.8284 11.3284 12.5 10.5 12.5C9.67157 12.5 9 11.8284 9 11Z"
                                            fill="#212121" />
                                        <path
                                            d="M2 7.25C2 6.00736 3.00736 5 4.25 5H16.75C17.9926 5 19 6.00736 19 7.25V14.75C19 15.9926 17.9926 17 16.75 17H4.25C3.00736 17 2 15.9926 2 14.75V7.25ZM4.25 6.5C3.83579 6.5 3.5 6.83579 3.5 7.25V8H4.25C4.66421 8 5 7.66421 5 7.25V6.5H4.25ZM3.5 12.5H4.25C5.49264 12.5 6.5 13.5074 6.5 14.75V15.5H14.5V14.75C14.5 13.5074 15.5074 12.5 16.75 12.5H17.5V9.5H16.75C15.5074 9.5 14.5 8.49264 14.5 7.25V6.5H6.5V7.25C6.5 8.49264 5.49264 9.5 4.25 9.5H3.5V12.5ZM17.5 8V7.25C17.5 6.83579 17.1642 6.5 16.75 6.5H16V7.25C16 7.66421 16.3358 8 16.75 8H17.5ZM17.5 14H16.75C16.3358 14 16 14.3358 16 14.75V15.5H16.75C17.1642 15.5 17.5 15.1642 17.5 14.75V14ZM3.5 14.75C3.5 15.1642 3.83579 15.5 4.25 15.5H5V14.75C5 14.3358 4.66421 14 4.25 14H3.5V14.75Z"
                                            fill="#212121" />
                                        <path
                                            d="M4.40137 18.5C4.92008 19.3967 5.8896 20 7.00002 20H17.25C19.8734 20 22 17.8734 22 15.25V10C22 8.8896 21.3967 7.92008 20.5 7.40137V15.25C20.5 17.0449 19.0449 18.5 17.25 18.5H4.40137Z"
                                            fill="#212121" />
                                    </svg>
                                </div>
                                <span>Down Payment</span>
                                <span class="finance-step__num">{{ development.downPayment }}%</span>
                            </div>
                        </li>
                        <li>
                            <div class="arrow-between">
                                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                        stroke="#c67057" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10.74 15.53L14.26 12L10.74 8.46997" stroke="#c67057" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </li>
                        <li class="finance-steps__item">
                            <div class="finance-step amenity-item">
                                <div class="amenity-icon">
                                    <svg fill="#000000" height="50px" width="50px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512.005 512.005" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M256,384.003v76.8h76.8v-76.8H256z M307.2,435.203h-25.6v-25.6h25.6V435.203z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M358.4,384.003v76.8h76.8v-76.8H358.4z M409.6,435.203H384v-25.6h25.6V435.203z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M499.2,486.403h-12.8v-204.8h-25.6v-25.6h-25.6v25.6h-25.6v51.2H384v-51.2v-51.2h-25.6v51.2h-25.6v-76.8h-25.6v76.8v51.2
    h-25.6v-51.2H256v-51.2h-25.6v51.2h-25.6v204.8h-51.2v-281.6h25.6c14.14,0,25.6-11.46,25.6-25.6v-25.6h230.4v76.8h25.6v-76.8h25.6
    c11.87,0,22.187-8.166,24.917-19.721c2.731-11.554-2.85-23.467-13.466-28.774l-51.2-25.6c-3.558-1.775-7.475-2.705-11.452-2.705
    H156.399l-31.104-62.652c-4.403-8.806-13.363-14.148-22.886-14.148c-1.954,0-3.925,0.222-5.888,0.691
    C84.966,3.416,76.8,13.733,76.8,25.603v51.2H25.6c-14.14,0-25.6,11.46-25.6,25.6v25.6c0,14.14,11.46,25.6,25.6,25.6h51.2v25.6
    v307.2h-64c-7.074,0-12.8,5.726-12.8,12.8c0,7.074,5.726,12.8,12.8,12.8h486.4c7.074,0,12.8-5.726,12.8-12.8
    C512,492.129,506.274,486.403,499.2,486.403z M76.8,128.003H25.6v-25.6h51.2V128.003z M435.2,102.403l51.2,25.6H204.8
    c0-6.793-2.697-13.303-7.501-18.099l-7.492-7.501H435.2z M102.4,25.603l25.6,51.2h-25.6V25.603z M102.4,102.403h51.2l25.6,25.6
    v51.2h-76.8V102.403z M128,486.403h-25.6v-281.6H128V486.403z M460.8,486.403H230.4v-179.2H256v51.2h76.8v-51.2h25.6v51.2h76.8
    v-51.2h25.6V486.403z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <span>Under Construction</span>
                                <span class="finance-step__num">{{ development.underConstruction }}%</span>
                            </div>
                        </li>
                        <li>
                            <div class="arrow-between">
                                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                        stroke="#c67057" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10.74 15.53L14.26 12L10.74 8.46997" stroke="#c67057" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </li>
                        <li class="finance-steps__item">
                            <div class="finance-step amenity-item">
                                <div class="amenity-icon">

                                    <svg fill="#000000" height="50px" width="50px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512.001 512.001" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M507.111,255.326l-50.763-50.763V94.609c0-9.22-7.475-16.696-16.696-16.696H372.87c-9.22,0-16.696,7.475-16.696,16.696
			v9.78L267.805,16.02c-6.519-6.519-17.091-6.519-23.611,0C238.116,22.099,13.778,246.436,4.89,255.325
			c-6.52,6.519-6.52,17.091,0,23.611c6.519,6.519,17.091,6.519,23.611,0l27.152-27.15v232.389c0,9.22,7.475,16.696,16.696,16.696
			h367.304c9.22,0,16.696-7.475,16.696-16.696V251.785l27.152,27.152c6.52,6.52,17.091,6.52,23.611,0
			C513.631,272.418,513.631,261.846,507.111,255.326z M422.957,467.479H89.044V218.394L256.001,51.437
			c8.681,8.681,158.347,158.347,166.957,166.957V467.479z M422.957,171.172l-33.391-33.391v-26.476h33.391V171.172z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <circle cx="205.914" cy="261.566" r="16.696" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M373.545,355.5l-16.696-16.697c-3.131-3.131-7.377-4.89-11.805-4.89h-22.261v-22.261c0-4.429-1.759-8.675-4.891-11.805
			l-29.065-29.066c0.377-3.129,0.564-6.185,0.564-9.215c0-46.03-37.448-83.478-83.478-83.478s-83.478,37.448-83.478,83.478
			s37.448,83.478,83.478,83.478c3.031,0,6.088-0.186,9.216-0.564l84.717,84.717c3.131,3.131,7.378,4.89,11.806,4.89h50.087
			c9.22,0,16.696-7.475,16.696-16.696v-50.087C378.435,362.876,376.676,358.63,373.545,355.5z M345.044,400.696h-26.476
			l-85.956-85.956c-4.063-4.061-9.926-5.749-15.527-4.471c-4.067,0.93-7.721,1.383-11.172,1.383
			c-27.618,0-50.087-22.469-50.087-50.087c0-27.618,22.469-50.087,50.087-50.087c27.618,0,50.087,22.469,50.087,50.087
			c0,3.45-0.452,7.106-1.382,11.173c-1.28,5.6,0.408,11.464,4.471,15.526l30.303,30.304v32.041c0,9.22,7.475,16.696,16.696,16.696
			h32.041l6.915,6.915V400.696z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <span>On Handover</span>
                                <span class="finance-step__num">{{ development.onHandover }}%</span>
                            </div>
                        </li>
                        <li>
                            <div class="arrow-between">
                                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                        stroke="#c67057" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10.74 15.53L14.26 12L10.74 8.46997" stroke="#c67057" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </li>
                        <li class="finance-steps__item">
                            <div class="finance-step amenity-item">
                                <div class="amenity-icon">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px"
                                        viewBox="0 0 158.000000 160.000000" preserveAspectRatio="xMidYMid meet">

                                        <g transform="translate(0.000000,160.000000) scale(0.100000,-0.100000)"
                                            fill="#000000" stroke="none">
                                            <path d="M305 1586 c-118 -38 -211 -119 -265 -230 -30 -60 -35 -81 -38 -161
-7 -150 31 -248 132 -343 94 -89 213 -131 340 -119 314 29 491 369 339 649
-38 71 -139 161 -210 189 -71 28 -234 36 -298 15z m277 -78 c79 -36 141 -98
182 -178 57 -114 55 -224 -5 -341 -48 -95 -174 -181 -284 -194 -151 -19 -315
76 -383 223 -22 48 -26 71 -27 147 0 80 3 97 31 155 47 99 118 161 233 206 58
22 184 13 253 -18z" />
                                            <path d="M341 1495 c-66 -19 -105 -42 -153 -92 -64 -67 -83 -115 -86 -225 -3
-87 -1 -103 22 -153 34 -74 110 -148 181 -174 82 -31 193 -29 265 5 68 31 134
93 168 159 37 72 43 197 12 277 -59 157 -244 249 -409 203z m208 -78 c93 -44
161 -151 161 -255 0 -65 -45 -158 -100 -205 -136 -116 -339 -75 -419 84 -119
238 119 487 358 376z" />
                                            <path d="M403 1370 c-3 -12 -19 -28 -35 -36 -54 -28 -70 -111 -30 -156 8 -9
37 -25 66 -34 57 -18 96 -40 96 -54 0 -19 -33 -40 -65 -40 -32 0 -75 30 -75
52 0 14 -50 9 -56 -6 -8 -22 24 -75 57 -95 17 -10 37 -28 45 -40 20 -28 42
-27 54 4 5 14 17 25 26 25 8 0 29 13 45 29 22 23 29 39 29 69 0 54 -23 79 -99
105 -78 27 -96 50 -62 78 32 26 44 24 86 -12 20 -18 41 -29 50 -25 24 9 18 52
-11 77 -15 13 -39 36 -55 52 -32 32 -59 35 -66 7z" />
                                            <path d="M1017 1329 c-83 -70 -107 -97 -105 -113 4 -25 212 -179 236 -174 9 2
20 18 24 36 10 36 31 41 99 21 53 -17 95 -55 127 -118 15 -30 32 -56 38 -58
18 -6 42 24 54 65 27 98 -3 207 -74 269 -57 51 -81 61 -208 88 -21 4 -29 13
-34 40 -10 55 -36 46 -157 -56z m103 -28 c0 -5 26 -13 58 -17 79 -9 156 -40
195 -77 34 -32 76 -122 63 -134 -3 -4 -21 7 -39 24 -47 45 -88 62 -178 76 -78
11 -82 11 -99 -10 l-17 -22 -52 36 c-28 20 -51 39 -51 44 0 4 21 26 48 48 45
39 72 51 72 32z" />
                                            <path d="M969 797 c-182 -127 -295 -214 -317 -242 -47 -60 -7 -141 71 -147
l42 -3 5 -166 c8 -249 -8 -238 341 -239 l265 0 30 31 29 30 5 172 5 172 47 5
c65 8 88 31 88 90 0 58 1 57 -244 234 -233 169 -220 166 -367 63z m263 -69
c295 -213 302 -219 275 -246 -19 -18 -16 -20 -221 127 -93 67 -173 121 -179
121 -5 0 -89 -57 -186 -127 -97 -70 -185 -127 -196 -127 -15 -1 -20 5 -20 23
0 20 26 44 140 128 159 117 255 183 266 183 4 0 58 -37 121 -82z m23 -178
l125 -91 0 -180 c0 -213 -2 -219 -95 -219 l-55 0 0 152 c0 142 -1 153 -22 175
-19 20 -31 23 -98 23 -121 0 -120 1 -120 -191 l0 -159 -57 0 c-93 0 -93 1 -93
216 l0 182 38 30 c94 74 227 162 238 158 7 -3 70 -46 139 -96z m-87 -347 l3
-143 -61 0 -60 0 0 138 c0 76 3 142 7 146 4 4 30 6 58 4 l50 -3 3 -142z" />
                                            <path d="M140 528 c-23 -50 -26 -135 -6 -190 33 -92 141 -171 252 -184 49 -6
51 -8 60 -43 5 -20 16 -37 25 -39 9 -2 67 38 128 89 86 71 111 97 109 113 -2
13 -42 50 -107 99 -106 78 -151 96 -151 58 0 -54 -24 -62 -101 -36 -62 21 -95
51 -127 115 -35 71 -56 75 -82 18z m93 -143 c49 -42 119 -65 200 -65 44 0 63
4 72 17 11 15 17 13 64 -21 28 -21 51 -41 51 -45 0 -4 -22 -27 -50 -50 -46
-39 -51 -41 -72 -28 -13 8 -48 17 -79 20 -99 9 -190 70 -223 149 -29 68 -22
73 37 23z" />
                                        </g>
                                    </svg>


                                </div>

                                <span>Post Handover</span>
                                <span class="finance-step__num">{{ development.postHandover }}%</span>
                            </div>
                        </li>
                    </ul>
                    <!-- data-bs-target="#enquiry-form" -->
                    <div class="btn-centered">
                        <button class="btn btn-ghost mt-7 mb-3 btn-block btn-design" data-bs-toggle="modal"
                            data-bs-target="#learnMoreModal" data-alt-label="Requested"
                            @click="toggleActionButton('REQUEST')">
                            Request payment plan
                        </button>
                    </div>
                </div>
                <!-- Floor Plan Section -->
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 border-bottom pb-5 mt-5">
                    <h2 class="mb-0 listing-body__heading mb-3">Floor Plans</h2>

                    <div class="floor-plan-section mt-5">
                        <div class="listing-photos-grid floor-plan-grid">
                            <button class="listing-photos-grid__item listing-photos-grid__item--lead floor-plan-images"
                                data-bs-toggle="modal" data-bs-target="#listing-photos">
                                <img :src="development.multipleImages" :alt="development.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="280" height="210">
                            </button>
                            <button class="listing-photos-grid__item floor-plan-images" data-bs-toggle="modal"
                                data-bs-target="#listing-photos">
                                <img :src="development.multipleImages" :alt="development.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="280" height="210">
                            </button>
                            <button class="listing-photos-grid__item floor-plan-images" data-bs-toggle="modal"
                                data-bs-target="#listing-photos">
                                <img :src="development.multipleImages" :alt="development.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="280" height="210">
                            </button>
                        </div>
                    </div>

                </div>
                <!-- Amenities Section -->
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 border-bottom pb-5 mt-5">
                    <h2>Features & Amenities</h2>
                    <div class="justify-content-center">

                        <div class="row justify-content-center amenities-section">


                            <div class="col-sm-3 amenity">

                                <svg style="width:50px;height:50px" viewBox="0 0 60.601004 60.601004"
                                    xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                    xmlns:svg="http://www.w3.org/2000/svg" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <defs />

                                    <path
                                        d="m 40.389252,16.706128 c 1.56375,0 2.83125,-1.26875 2.83125,-2.8325 0,-1.56375 -1.2675,-2.83125 -2.83125,-2.83125 -1.565,0 -2.8325,1.2675 -2.8325,2.83125 0,1.56375 1.2675,2.8325 2.8325,2.8325"
                                        style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" />
                                    <path
                                        d="m 51.460503,30.867379 -4.47875,0 0.44875,-8.560001 c 0.155,-2.19125 -1.39875,-4.17 -3.608751,-4.4975 -1.12,-0.165 -2.2675,-0.25375 -3.4325,-0.25375 -1.82125,0 -3.59125,0.21125 -5.29125,0.6075 -0.18375,0.0425 -0.33375,0.17 -0.41125,0.3375 l -5.322501,11.401251 2.95,0 2.807501,-4.855 0.41125,5.82 -26.4287524,0 0,1.93 26.5637524,0 1.16125,16.478751 3.07625,0 0,-16.146251 0.965,0 0,16.146251 3.0775,0 1.15625,-16.478751 6.356251,0 0,-1.93"
                                        style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" />
                                    <path
                                        d="m 20.143001,16.706128 c 1.565,0 2.83375,-1.26875 2.83375,-2.8325 0,-1.56375 -1.26875,-2.83125 -2.83375,-2.83125 -1.5625,0 -2.83125,1.2675 -2.83125,2.83125 0,1.56375 1.26875,2.8325 2.83125,2.8325"
                                        style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" />
                                    <path
                                        d="m 16.416751,22.022378 0.90875,3.935 c -0.8475,1.21375 -1.55625,2.533751 -2.105,3.932501 l 9.847501,0.0012 c -0.54875,-1.4 -1.2575,-2.720001 -2.10625,-3.935001 l 0.90875,-3.93375 1.5525,2.69 c 0.2775,0.48 0.79625,0.805 1.39125,0.805 0.64625,0 1.2,-0.3825 1.4575,-0.93 l 2.26625,-4.86375 -2.41,0 -1.08625,2.04375 -1.71,-3.085 c -0.0825,-0.14875 -0.2175,-0.2675 -0.38125,-0.3225 -1.50625,-0.52 -3.123751,-0.80375 -4.807501,-0.80375 -1.2275,0 -2.42,0.1525 -3.56125,0.43625 -1.5675,0.39 -2.68,1.665 -2.945,3.16 l -1.54875,8.750001 2.2275,0 2.10125,-7.880001"
                                        style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" />
                                </svg>

                                <span>
                                    Concierge
                                </span>

                            </div>



                            <div class="col-sm-3 amenity">

                                <svg fill="#000000" height="30px" width="30px" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M495.304,478.609h-26.447l-49.827-50.087l49.827-50.087h26.447c9.217,0,16.696-7.473,16.696-16.696
                                       c0-9.223-7.479-16.696-16.696-16.696c-112.903,0-177.887,0-200.348,0c-9.223,0-16.696,7.473-16.696,16.696
                                       c0,9.223,7.473,16.696,16.696,16.696h27.143l49.826,50.087l-49.826,50.087h-88.36V366.328
                                       c-17.441-1.971-34.346-6.987-50.087-14.926c-15.741,7.939-32.646,12.955-50.087,14.926v112.281H16.696
                                       C7.473,478.609,0,486.082,0,495.304C0,504.527,7.473,512,16.696,512c416.033,0,58.615,0,478.609,0
                                       c9.217,0,16.696-7.473,16.696-16.696C512,486.082,504.521,478.609,495.304,478.609z M369.205,378.435h52.546l-26.272,26.411
                                       L369.205,378.435z M369.205,478.609l26.273-26.411l26.272,26.411H369.205z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M300.413,111.842C297.771,49.723,246.413,0,183.652,0C121.008,0,69.739,49.544,66.923,111.503
                                       C25.835,130.954,0,173.635,0,217.043c0,94.06,106.369,150.004,183.652,95.511c77.335,54.53,183.652-1.503,183.652-95.511
                                       C367.304,171.848,340.886,131.016,300.413,111.842z" />
                                        </g>
                                    </g>
                                </svg>

                                <span class="">
                                    Park
                                </span>

                            </div>



                            <div class="col-sm-3 amenity">

                                <svg width="40px" height="40px" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve">

                                    <path class="st0" d="M29,28.5c-1-0.8-2.7-0.8-3.7,0l0,0c-1,0.8-2.7,0.8-3.7,0l0,0c-1-0.8-2.7-0.8-3.7,0l0,0c-1,0.8-2.7,0.8-3.7,0
	l0,0c-1-0.8-2.7-0.8-3.7,0l0,0c-1,0.8-2.7,0.8-3.7,0l0,0c-1-0.8-2.7-0.8-3.7,0" />
                                    <path class="st0" d="M29,23.5c-1-0.8-2.7-0.8-3.7,0l0,0c-1,0.8-2.7,0.8-3.7,0l0,0c-1-0.8-2.7-0.8-3.7,0l0,0c-1,0.8-2.7,0.8-3.7,0
	l0,0c-1-0.8-2.7-0.8-3.7,0l0,0c-1,0.8-2.7,0.8-3.7,0l0,0c-1-0.8-2.7-0.8-3.7,0" />
                                    <path class="st0" d="M11,23V6.5C11,4.6,12.6,3,14.5,3h0C16.4,3,18,4.6,18,6.5V8" />
                                    <path class="st0" d="M22,23V6.5C22,4.6,23.6,3,25.5,3h0C27.4,3,29,4.6,29,6.5V8" />
                                    <line class="st0" x1="14" y1="12" x2="22" y2="12" />
                                    <line class="st0" x1="14" y1="16" x2="22" y2="16" />
                                    <line class="st0" x1="14" y1="20" x2="22" y2="20" />
                                </svg>

                                <span>
                                    Swimming Pool
                                </span>

                            </div>



                            <div class="col-sm-3 amenity">

                                <svg height="40px" width="40px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">

                                    <g>
                                        <path class="st0" d="M468.419,113.18c-7.646-11.517-16.52-22.553-26.337-33.024c-0.975-1.046-1.936-2.014-2.91-2.902
		c-49.937-51.392-116.629-77.25-183.164-77.25c-24.418,0-48.82,3.462-72.498,10.47c-20.468,5.962-40.45,14.663-59.22,26.023
		c-15.544,9.259-30.364,20.46-44.131,33.424C26.904,120.189,0,188.171,0,256.082c0,46.153,12.413,92.471,37.539,133.314
		c6.451,10.714,13.861,21.027,22.152,30.852c3.225,3.95,6.687,7.812,10.226,11.596c50.346,53.248,118.25,80.152,186.168,80.152
		c37.445,0,74.984-8.213,109.707-24.725c23.678-11.202,46.003-26.266,66.047-45.193c12.177-11.516,22.97-23.844,32.221-36.973
		c31.906-44.304,48.017-96.742,47.938-149.188C512.078,206.217,497.573,156.359,468.419,113.18z M84.612,369.487
		c-1.321,1.187-2.816,2.131-4.216,3.194c-0.032-0.039-0.063-0.079-0.079-0.118c-23.521-35.202-35.132-75.801-35.211-116.48
		c0.079-50.511,17.968-100.856,53.729-140.645c1.605-1.833,3.43-3.509,5.113-5.27c-0.44,2.864-0.959,5.687-1.258,8.606
		c-0.708,6.286-1.023,12.642-1.023,19.164c0,16.26,2.203,33.228,6.907,50.738c6.372,23.174,10.29,50.267,10.211,76.667
		c0.079,16.488-1.494,32.661-4.704,47.434c-4.798,22.223-13.514,40.843-25.85,53.335C87.051,367.283,85.871,368.463,84.612,369.487z
		 M286.042,464.711c-9.896,1.455-19.965,2.179-29.956,2.179c-56.072,0-111.814-22.074-153.381-66.055
		c-0.488-0.566-0.96-1.046-1.448-1.613c-0.141-0.15-0.251-0.307-0.393-0.457c1.416-1.078,2.848-2.131,4.17-3.28
		c5.742-4.79,10.761-10.211,15.245-16.103c11.784-15.316,19.556-33.535,24.512-53.02c4.94-19.47,6.986-40.214,6.986-61.02
		c0-29.618-4.248-59.227-11.312-85.383c-4.012-14.687-5.806-28.666-5.806-42.023c0-19.557,3.76-37.941,10.274-55.215
		c0.944-2.628,2.061-5.192,3.162-7.764c33.197-19.879,70.484-29.846,107.913-29.846c56.057,0,111.72,22.074,153.287,66.055
		c4.861,5.153,9.345,10.462,13.546,15.93c-0.74,1.25-1.306,2.548-2.124,3.775c-0.251,0.315-0.472,0.708-0.708,1.023
		c-9.817,14.372-25.692,27.8-50.66,38.562c-42.652,18.297-74.307,47.757-94.965,81.134c-20.657,33.386-30.632,70.688-30.632,105.561
		c0,32.284,8.48,62.838,26.384,86.319c4.406,5.822,9.44,11.155,15.088,15.868c1.888,1.612,3.965,3.036,5.995,4.5
		C289.487,464.12,287.772,464.475,286.042,464.711z M400.83,409.291c-17.92,16.921-38.043,29.892-59.297,39.285
		c-3.352-0.346-6.576-0.857-9.582-1.651c-4.782-1.094-9.188-2.746-13.278-4.783c-13.106-6.522-23.317-17.44-30.616-32.127
		c-7.316-14.686-11.312-32.984-11.312-52.863c0-28.587,8.323-60.163,25.676-88.199c17.448-28.044,43.675-52.627,79.956-68.179
		c24.118-10.289,42.809-23.796,56.324-39.277c1.258-1.424,2.407-2.872,3.571-4.319c0.362,0.7,0.818,1.368,1.18,2.076
		c15.701,30.208,23.442,63.397,23.442,96.664C466.893,311.982,444.819,367.724,400.83,409.291z" />
                                    </g>
                                </svg>

                                <span>
                                    Tennis
                                </span>

                            </div>



                            <div class="col-sm-3 amenity mt-5">

                                <svg width="40px" height="40px" viewBox="0 0 20 20" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">


                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-380.000000, -4719.000000)"
                                            fill="#000000">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M340.5,4573.624 C339.744,4572.569 339.239,4570.978 339.069,4569.978 L341.931,4569.978 C341.761,4570.978 341.256,4572.569 340.5,4573.624 L340.5,4573.624 Z M335,4576.931 L335,4569.978 L337.05,4569.978 C337.242,4571.978 337.988,4573.681 339.119,4575.13 C337.973,4576.087 336.555,4576.735 335,4576.931 L335,4576.931 Z M335,4561.069 C336.555,4561.265 337.973,4561.891 339.119,4562.848 C337.988,4564.297 337.242,4565.978 337.05,4567.978 L335,4567.978 L335,4561.069 Z M341.931,4567.978 L339.069,4567.978 C339.239,4566.978 339.744,4565.387 340.5,4564.332 C341.256,4565.387 341.761,4566.978 341.931,4567.978 L341.931,4567.978 Z M333,4567.978 L330.95,4567.978 C330.758,4565.978 330.012,4564.297 328.881,4562.848 C330.027,4561.891 331.445,4561.265 333,4561.069 L333,4567.978 Z M333,4576.931 C331.445,4576.735 330.027,4576.087 328.881,4575.13 C330.012,4573.681 330.758,4571.978 330.95,4569.978 L333,4569.978 L333,4576.931 Z M326.069,4569.978 L328.931,4569.978 C328.761,4570.978 328.256,4572.569 327.5,4573.624 C326.744,4572.569 326.239,4570.978 326.069,4569.978 L326.069,4569.978 Z M327.5,4564.332 C328.256,4565.387 328.761,4566.978 328.931,4567.978 L326.069,4567.978 C326.239,4566.978 326.744,4565.387 327.5,4564.332 L327.5,4564.332 Z M341.881,4562.859 C341.469,4562.331 341.008,4561.845 340.5,4561.41 C338.751,4559.911 336.484,4559 334,4559 C331.516,4559 329.249,4559.911 327.5,4561.41 C326.992,4561.845 326.531,4562.331 326.119,4562.859 C324.796,4564.555 324,4566.682 324,4569 C324,4571.318 324.796,4573.445 326.119,4575.141 C326.531,4575.669 326.992,4576.155 327.5,4576.59 C329.249,4578.089 331.516,4579 334,4579 C336.484,4579 338.751,4578.089 340.5,4576.59 C341.008,4576.155 341.469,4575.669 341.881,4575.141 C343.204,4573.445 344,4571.318 344,4569 C344,4566.682 343.204,4564.555 341.881,4562.859 L341.881,4562.859 Z"
                                                    id="basketball-[#790]">

                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                                <span>
                                    Basketball
                                </span>

                            </div>



                            <div class="col-sm-3 amenity mt-5">

                                <svg width="40px" height="40px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">

                                    <g>
                                        <path class="st0" d="M259.122,277.312c6.042-4.619,14.559-9.533,24.351-13.986c17.626-8.093,39.243-15.003,58.458-19.751
		c9.607-2.374,18.642-4.231,26.236-5.46c7.556-1.247,13.819-1.828,17.145-1.81h0.092l6.818,0.166l4.601-5.034
		c16.018-17.515,31.667-27.104,43.104-32.37c5.709-2.633,10.365-4.176,13.45-5.034c1.552-0.425,2.697-0.684,3.399-0.822
		c0.333-0.074,0.573-0.112,0.684-0.139l21.266-2.984l-10.217-18.956c-16.37-30.319-44.138-62.356-82.55-87.178
		C347.566,59.16,298.365,41.802,240.185,41.82c-6.633,0-13.414,0.314-20.287,0.776l-2.494-16.037l-18.514,2.9l2.513,16
		c-60.49,14.984-106.198,45.848-138.235,81.682c-16.758,18.725-29.838,38.78-39.612,58.688
		c-9.756,19.908-16.204,39.676-19.622,57.986L0,264.989l21.1-3.64c0.074-0.009,2.623-0.397,7.132-0.397
		c11.178,0.018,34.217,2.291,62.392,18.392l5.82,3.316l6.338-2.106c2.253-0.748,5.782-1.654,10.106-2.494
		c13.063-2.568,33.331-4.629,55.058-4.61c21.931-0.027,45.561,2.106,65.183,7.289l27.935,178.485H38.947v26.216H510.91v-26.216
		H287.594L259.122,277.312z M369.7,109.137c27.177,17.506,48.351,39.335,62.798,60.48c-1.625,0.674-3.325,1.405-5.118,2.227
		c-11.011,5.062-24.609,13.118-38.762,25.654c-2.735-4.305-5.894-9.062-9.479-14.19c-14.393-20.545-35.363-46.753-61.617-71.03
		c-15.427-14.245-32.683-27.824-51.528-39.16C306.79,77.256,341.45,90.929,369.7,109.137z M92.73,244.619
		c-0.167,0.628-0.296,1.229-0.444,1.839c-21.858-10.3-40.961-14.005-54.54-15.086c3.104-10.42,7.316-21.339,12.711-32.351
		c12.915-26.318,32.554-53.145,59.769-75.695c17.126-14.189,37.247-26.717,60.71-36.462c-6.78,7.889-13.08,16.12-18.919,24.554
		c-22.337,32.378-37.893,67.547-48.018,96.203C98.92,221.958,95.224,234.66,92.73,244.619z M167.944,243.483
		c-15.723,0-30.595,0.961-43.344,2.475c-4.766,0.574-9.238,1.22-13.377,1.94c1.331-5.192,2.975-11.16,5.026-17.755
		c7.095-22.929,18.661-53.173,35.4-82.771c14.116-25.008,31.963-49.451,53.635-68.869l26.79,171.205
		C211.16,245.164,188.84,243.51,167.944,243.483z M250.587,246.9L223.354,72.933c20.933,8.065,40.702,19.972,58.679,33.83
		c29.358,22.596,53.986,50.198,71.649,73.422c7.686,10.115,14.06,19.4,18.938,27.039c-0.37,0.046-0.74,0.083-1.128,0.13
		c-8.998,1.136-19.824,3.131-31.649,5.903c-17.718,4.148-37.542,10.004-55.982,17.33c-9.219,3.668-18.069,7.705-26.198,12.158
		C255.224,244.093,252.878,245.487,250.587,246.9z" />
                                        <rect x="343.446" y="380.822" class="st0" width="49.404" height="18.725" />
                                        <rect x="462.596" y="380.822" class="st0" width="49.404" height="18.725" />
                                        <rect x="401.57" y="309.395" class="st0" width="49.405" height="18.725" />
                                        <polygon class="st0"
                                            points="143.686,380.924 143.316,399.658 192.721,400.638 193.09,381.912 	" />
                                        <polygon class="st0"
                                            points="84.102,308.305 83.732,327.03 133.118,328.01 133.506,309.284 	" />
                                    </g>
                                </svg>

                                <span>
                                    Beach
                                </span>

                            </div>



                            <div class="col-sm-3 amenity mt-5">

                                <svg fill="#000000" width="40px" height="40px" viewBox="0 0 14 14" role="img"
                                    focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M 3.9196429,1.429652 C 3.2736743,1.4701031 2.7130206,2.0681336 2.7142857,2.7153662 2.7145317,3.3884082 3.3269577,4.0006106 4,4.0006106 c 0.6730423,0 1.2854683,-0.6122024 1.2857143,-1.2852444 C 5.2870857,2.0145272 4.6191126,1.3858481 3.9196429,1.429652 Z m 6.8571431,2.5714285 c -0.645969,0.040451 -1.2066226,0.6384817 -1.2053574,1.2857143 2.46e-4,0.673042 0.6126724,1.2852443 1.2857144,1.2852443 0.673042,0 1.285468,-0.6122023 1.285714,-1.2852443 0.0014,-0.700839 -0.666602,-1.329518 -1.366071,-1.2857143 z M 3.5714286,4.429652 c -1.2608486,0 -1.5992872,1.6057771 -1.6875,2.4642857 L 1,6.5725091 1,7.429652 6.1160714,9.2510801 5.2857143,12.572509 l 3.4285714,0 L 7.9107143,9.8939381 13,11.715366 13,10.858223 12.196429,10.56358 c 0.140624,-0.7382809 0.589285,-3.5624995 -0.910715,-3.5624995 -1.4043957,0 -1.6416074,1.9238576 -1.6874997,2.6517856 L 4.5089286,7.8314377 C 4.6728674,6.8618214 4.9548571,4.429652 3.5714286,4.429652 Z" />
                                </svg>

                                <span>
                                    Play Area
                                </span>

                            </div>


                        </div>
                    </div>

                </div>
                <!-- Location Section -->
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 border-bottom pb-5 mt-5">
                    <h2>Location</h2>
                    <div class="row">

                        <div class="col-lg-8" v-if="development.area">
                            <span>{{ development.developmentName }} is located in</span>
                            <h3 class="mt-0">{{ development.areaName }} </h3>
                            <p>{{ development.area.long_description }}</p>
                            <!-- <a href="#" class="btn btn-ghost">Learn more</a> -->
                        </div>
                        <div class="col-lg-4" v-if="development.area">
                            <p v-html="development.area.map_iframe"></p>
                        </div>
                    </div>

                </div>
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 pt-5">
                    <h2 class="text-center">Projects in {{ development.areaName }}
                    </h2>
                    <FilteredDevelopmentsSwiper :projects="development.projects"></FilteredDevelopmentsSwiper>
                </div>

                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 mb-5 mt-5">
                    <div class="vstack gap-5 text-center">
                        <h2 class="m-0">Properties in {{ development.areaName }}</h2>
                        <FilteredProperties :listings="development.listings"></FilteredProperties>

                    </div>
                    <!-- <div class="border-top mt-3">

                </div> -->
                </div>
            </div>
        </div>
        <div class="modal fade" id="development-map" tabindex="-1" aria-labelledby="listing-map-modal-title"
            aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-map">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="location-map"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FLOOR PLANS SECTION -->
        <div v-if="development" class="modal fade " id="listing-photos" tabindex="-1"
            aria-labelledby="listing-photos-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-xl ">
                <div class="">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>

                </div>
                <div class="modal-content">

                    <div class="modal-body">

                        <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button v-for="(image, key) in development.multipleImages" :key="key" type="button"
                                    data-bs-target="#carouselExampleCaptions2" :data-bs-slide-to="key"
                                    :class="{ 'active': key === 0 }" aria-label="Slide 1"></button>
                            </div>
                            <div class="carousel-inner">
                                <div v-for="(image, key) in development.multipleImages" :key="key" class="carousel-item"
                                    :class="{ 'active': key === 0 }">
                                    <img :src="backendUrl + image" class="image-cropped" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- GALLER MODAL SECTION -->
        <div v-if="development" class="modal fade " id="listing-photos-gallery" tabindex="-1"
            aria-labelledby="listing-photos-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-xl ">
                <div class="">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>

                </div>
                <div class="modal-content">

                    <div class="modal-body">

                        <div id="carouselExampleCaptions3" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button v-for="(image, key) in development.multipleImages" :key="key" type="button"
                                    data-bs-target="#carouselExampleCaptions3" :data-bs-slide-to="key"
                                    :class="{ 'active': key === 0 }" aria-label="Slide 1"></button>
                            </div>
                            <div class="carousel-inner">
                                <div v-for="(image, key) in development.multipleImages" :key="key" class="carousel-item"
                                    :class="{ 'active': key === 0 }">
                                    <img :src="backendUrl + image" class="image-cropped" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions3"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions3"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <RegisterOrRequestForm :formType="formType"></RegisterOrRequestForm>
    </main>
    <FooterRequestCallbackModal></FooterRequestCallbackModal>
    <Footer></Footer>
</template>
<script>
import Header from '../components/Header.vue';
import SearchFilterModal from '../components/SearchFilterModal.vue';
import RegisterOrRequestForm from '../components/RegisterOrRequestForm.vue';
import FilteredDevelopmentsSwiper from '../components/FilteredDevelopmentsSwiper.vue';
import FilteredProperties from '../components/FilteredProperties.vue';
import Footer from '../components/Footer.vue';
import { mapState, mapActions } from 'vuex';
import { Swiper, SwiperSlide } from 'swiper/vue';
import FooterRequestCallbackModal from '../components/FooterRequestCallbackModal.vue';

// Import Swiper styles
import 'swiper/swiper.scss';

import "swiper/components/effect-coverflow/effect-coverflow.min.css"
import "swiper/components/pagination/pagination.min.css"


// import Swiper core and required modules
import SwiperCore, {
    Autoplay,
    EffectCoverflow, Pagination
} from 'swiper/core';

// install Swiper modules
SwiperCore.use([Autoplay, EffectCoverflow, Pagination]);

export default {
    name: "DevelopmentDetail",
    components: {
        Header, SearchFilterModal, Footer, RegisterOrRequestForm, FilteredDevelopmentsSwiper,
        Swiper,
        SwiperSlide,
        FilteredProperties,
        FooterRequestCallbackModal
    },
    props: {
        areaName: {
            type: String,
            default: '',
        },
    },
    setup() {
        const onSwiper = (swiper) => {
        };
        const onSlideChange = () => {
        };
        return {
            onSwiper,
            onSlideChange,
            modules: [EffectCoverflow],
        };
    },
    data() {
        return {

            maxLines: 3,
            isTruncated: true,
            formType: 'REQUEST',
            filter: true,
            backendUrl: 'https://a1properties.ae/backend/'

            // backendUrl: 'http://192.168.2.46:8001/',

        }
    },
    computed: {
        ...mapState("developments", ["development"]),
        contentStyle() {
            if (this.isTruncated) {
                return {
                    overflow: 'hidden',
                    display: '-webkit-box',
                    '-webkit-line-clamp': this.maxLines,
                    '-webkit-box-orient': 'vertical',
                    'max-height': `${this.maxLines * 24}px`, // Adjust the line height accordingly
                };
            } else {
                return {
                    overflow: 'auto', // Adjust the overflow style as needed
                };
            }
        }

    },
    methods: {
        ...mapActions("developments", ["getDevelopmentBySlug"]),
        toggleContent() {
            this.isTruncated = !this.isTruncated;
        },
        toggleActionButton(type) {

            this.formType = type;
        }
    },
    created() {
        const slug = this.$route.params.slug;

        // Fetch data and return a promise
        this.getDevelopmentBySlug(slug).then(() => {
            // After data is fetched, you can perform any additional actions here
            console.log('Data fetched in child component');
        });

    },
    // beforeRouteEnter(to, from, next) {
    //     const slug = this.$route.params.slug;

    //     // Create a callback function to be executed once the component is created
    //     const callback = (component) => {
    //         // Call the fetchData method on the component instance
    //         component.getDevelopmentBySlug(slug);
    //     };

    //     // Pass the callback to the next function
    //     next(callback);
    // },

}
</script>
<style scoped="scss">
.image-cropped {
    width: 100%;
    object-fit: cover;
    object-position: center;
    height: 70vh;
}

.aminities_list {
    display: flex;
    justify-content: space-between;
}
.amenity svg{
    margin-right:10px;
    width:30px;
    height: 30px;
}
.amenity-item {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.amenity-text {
    margin-top: 5px;
    font-weight: 500;
    text-align: center;
}

.btn-centered {
    display: flex;
    justify-content: center;
    flex-wrap: nowrap;
    text-align: center;
}

.btn-close {
    position: absolute;
    right: -20px;
    top: -30px;
    color: white;
    cursor: pointer;
}

.modal-body {
    padding: 5px;
}

.modal-dialog {
    width: 150vh;
    height: 80vh;
}

.finance-steps {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 0px;
    list-style: none;
    padding: 0;
    width: 90%;
    margin: auto;
}

.arrow-between svg {
    width: 20px;
    /* Adjust the width as needed */
    height: 20px;
    /* Adjust the height as needed */
}

.finance-steps__item {
    flex: 1;
    margin: 0 50px;
    /* Adjust the margin value as needed */
}

.btn-design:hover {
    bottom: 0;
    right: 0;
    border-image-source: linear-gradient(to bottom right, #c67067, transparent 35%, transparent 35%, transparent 65%, #c67067);
    border-image-slice: 1;
    border-image-width: 1;
    border-image-outset: 0;
    border-image-repeat: stretch;
}

.register-btn {
    text-align: right;
    padding-left: 0px !important;

}

@media only screen and (max-width: 600px) {
    .section-after-gallery {
        display: flex;
        position: relative;
        width: 50%;
        margin: auto;

    }

    .logo-sec {
        position: relative;
        width: 70%;
        margin: auto;
    }

    .register-btn {
        padding-top: 0px !important;
    }

    .register-btn .btn {
        font-size: 13px;
    }

    .mbl-top-sec {
        margin-top: -10px;
    }


    .modal-dialog {
        margin-top: 40%;
        width: 95%;
        height: 100px !important;
    }

    .image-cropped {
        width: 100%;
        object-fit: cover;
        object-position: center;
        height: 50vh;
    }

    .btn-close {
        position: absolute;
        right: -15px;
        top: -30px;
        font-size: 20px;
        color: #fff;
        font-weight: 800;
        cursor: pointer;
    }

    .swiper-slide {
        height: 350px !important;
        width: 300px !important;
        background-position: center !important;
        background-size: cover !important;
    }

    .swiper-container {
        height: 400px !important;
    }

    .finance-steps {
        align-items: center;
        position: relative;
        margin: auto;
        width: 100%;
        align-items: center;

    }

    .finance-steps__item {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin: auto;
        width: 100%;
        text-align: center;
    }

    .arrow-between {
        position: relative;
        right: 0px;
        /* Adjust the height as needed */
    }

    .amenity-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 30%;
        margin: 5px;
    }

    .finance-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 20%;
        margin: 0px;
    }

    .finance-step svg {
        width: 30px;
        height: 30px;
    }

    .finance-step span {
        font-size: 13px;
    }

    .arrow-between svg {
        width: 12px;
        height: 12px;
    }

    .amenity-icon svg {
        width: 30px;
        height: 30px;
    }

    .amenity-text {
        font-size: 13px;
    }

    .gallery-after {
        margin-top: -70px;
    }

    .amenities-section .amenity {
        position: relative;
        width: 50%;
    }

    .amenity span {
        font-size: 13px !important;
    }
    .amenity{
        margin-top:30px;
    }
}

.swiper {
    width: 100%;
    padding-top: 50px;
    padding-bottom: 50px;
}

.swiper-slide {
    background-position: center;
    background-size: cover;
    width: 550px;
    height: 500px;
    font-size: 24px;
    font-weight: 700;
    display: flex;
    justify-content: center;
    align-items: center;
    object-fit: cover;
    box-shadow: 0px 10px 8px 0px rgba(0, 0, 0, 0.6);

}

.swiper-container {
    height: 550px;
}

.btn-video {
    margin-bottom: -30px !important;
}

.about-section {
    margin-top: -30px;
}

.btn-readmore {
    cursor: pointer;
}

.floor-plan-section {
    /* Adjust the overall size of the section if needed */
    max-width: 800px;
    margin: auto;
}

.floor-plan-grid {
    /* Adjust the spacing between images if needed */
    gap: 10px;
}

.floor-plan-images {
    /* Set a maximum width for each image container */
    max-width: 580px;

    /* Add other styles as needed */
}

.floor-plan-images {
    /* Ensure images do not exceed the container size */
    max-width: 100%;
    height: auto;
    /* Add other styles as needed */
}

.finance-step__num {
    font-size: 25px;
}

.amenities-section img {
    height: 100px;
    width: 100px;

}

.amenities-section span {
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    height: 100%;
    /* Ensure the span takes the full height of its container */
}

.amenities-section div {
    display: flex;
    justify-content: center;
    flex-wrap: nowrap;
    text-align: center;
}

.amenity-heading {
    font-weight: 700;
}

.maplibregl-ctrl-attrib.maplibregl-compact-show {
    display: none !important;
}

.overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, 0.5);
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.listing-photos-grid__item .overlay {
    opacity: 1;
}

.plus-sign {
    font-size: 2rem;
    color: #fff;
}

.developer-logo {
    width: 150px;
    height: 100%;
}

.right-side {
    text-align: right;

}

.section-after-gallery {
    margin-bottom: -50px;
}</style>
