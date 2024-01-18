<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main>
        <div class="loader-grid mx-10 mt-10" v-if="loading">
            <code-loader :speed="1" v-for="index in 9" :key="index"></code-loader>
        </div>
        <article v-else>
            <div class="page-entry pt- pb-5" style="row-gap: .75rem;">
                <div class="g-col-1 g-start-2 listing-masthead-narrow-outer mb-5">
                    <div class="listing-masthead-narrow">
                        <div class="text-center">
                            <h1 class="listing-masthead-narrow__heading">{{ property.metaTitle }}</h1>
                        </div>


                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb-list">
                                <li class="breadcrumb-list-item"><a href="#">{{ property.propertyCategory }}</a></li>
                                <li class="breadcrumb-list-item"><a href="#">Dubai
                                    </a></li>
                                <li class="breadcrumb-list-item"><a href="#">{{ property.areaName }}</a></li>
                                <li class="breadcrumb-list-item"><a href="#">{{ property.developmentName }}</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 listing-masthead-wide mt-5">
                    <h1 class="listing-masthead-wide__heading">{{ property.metaTitle }}</h1>
                    <div class="listing-masthead-wide__tools">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb-list">
                                <li class="breadcrumb-list-item"><a href="#">{{ property.propertyCategory }}</a></li>
                                <li class="breadcrumb-list-item"><a href="#">{{ property.emirate }}
                                    </a></li>
                                <li class="breadcrumb-list-item"><a href="#">{{ property.areaName }}</a></li>

                                <li class="breadcrumb-list-item"><a href="#">{{ property.developmentName }}</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="g-col-3 g-start-1 g-col-lg-14 pb-0">
                    <swiper class="swiper-slider" :autoplay='{
                        "delay": 2000,
                        "disableOnInteraction": false
                    }' :speed="2000" :effect="'coverflow'" :grabCursor="true" :centeredSlides="false"
                        :slidesPerView="'auto'" :coverflowEffect="{
                            rotate: 50,
                            stretch: 0,
                            depth: 100,
                            modifier: 1,
                            slideShadows: true,
                            scale: 0.8
                        }">
                        <swiper-slide v-for="(item, index) in property.galleryImages" :key="index">
                            <img :src="backendUrl + item" class="listing-photos-grid__image" loading="lazy"> </swiper-slide>


                    </swiper>
                    <div class="btn-centered">
                        <button class="btn btn-ghost mb-3 btn-block btn-design" data-bs-toggle="modal"
                            data-bs-target="#learnMoreModal" data-alt-label="RegisterInterest"
                            @click="toggleActionButton('REGISTER')">
                            Register your interest
                        </button>
                    </div>

                </div>


            </div>
            <div class="page-entry pb-6">

                <div class="g-col-1 g-start-2 g-col-lg-8 g-start-lg-2">
                    <div class="g-col-1 g-start-2 g-col-lg-12 g-start-lg-2" style="border-top:0.7px solid #c67057;">
                        <div class="aminities_list row pt-5">

                            <div class="amenity-item col-lg-1 col-md-3 col-sm-6 col-6">
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
                                    <span>{{ property.propertyType }}</span>
                                    <!-- <span>Bathrooms</span> -->
                                </div>
                            </div>
                            <div class="amenity-item col-lg-1 col-md-3 col-sm-6 col-6">
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
                                    <span>AED {{ property.propertyPrice }}</span>
                                    <!-- <span>Bathrooms</span> -->
                                </div>
                            </div>
                            <div class="amenity-item col-lg-1 col-md-3 col-sm-6 col-6">
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
                                    <span>{{ property.bedrooms  == 0 ? 'Studio' : property.bedrooms}}</span>
                                    <span>{{ property.bedrooms  == 0 ? '' : ' Beds'}}</span>
                                </div>
                            </div>

                            <div class="amenity-item col-lg-1 col-md-3 col-sm-6 col-6">
                                <div class="amenity-icon">
                                    <svg fill="#000000" height="40px" width="40px" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 211.667 211.667" xml:space="preserve">
                                        <path d="M211.667,98.551c0,2.209-1.791,4-4,4H201v26.448c0,13.403-7.085,25.178-17.702,31.792l7.999,14.878
    c1.046,1.946,0.317,4.371-1.629,5.418c-0.603,0.323-1.251,0.478-1.891,0.478c-1.425,0-2.804-0.764-3.526-2.106l-8.164-15.186
    c-3.918,1.395-8.131,2.161-12.522,2.161H48.102c-3.755,0-7.38-0.562-10.802-1.595l-7.86,14.62c-0.722,1.343-2.102,2.106-3.526,2.106
    c-0.64,0-1.288-0.154-1.891-0.478c-1.946-1.047-2.675-3.472-1.629-5.418l7.512-13.972c-11.465-6.406-19.239-18.659-19.239-32.699
    v-26.448H4c-2.209,0-4-1.791-4-4s1.791-4,4-4h10.667H197h10.667C209.876,94.551,211.667,96.342,211.667,98.551z M4,60.814h43.083
    c3.584,0,6.5,2.916,6.5,6.5v8.5c0,2.209,1.791,4,4,4s4-1.791,4-4v-8.5c0-7.995-6.505-14.5-14.5-14.5H4c-2.209,0-4,1.791-4,4
    S1.791,60.814,4,60.814z M9.25,48.602h6.833c2.209,0,4-1.791,4-4v-10.5c0-2.209-1.791-4-4-4H9.25c-5.101,0-9.25,4.149-9.25,9.25
    S4.149,48.602,9.25,48.602z" />
                                    </svg>
                                </div>
                                <div class="amenity-text">
                                    <span>{{ property.bathrooms }}</span>
                                    <span> Baths</span>
                                </div>
                            </div>
                            <div class="amenity-item col-lg-1 col-md-3 col-sm-6 col-6">
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
                                    <span>BUA </span>

                                    <span>{{ property.unitBuiltUpArea }} </span>
                                    <span>&nbsp;{{ property.unit }}</span>
                                </div>
                            </div>
                            <div class="amenity-item col-lg-1 col-md-3 col-sm-6 col-6">
                                <div class="amenity-icon">
                                    <svg fill="#000000" width="40px" height="40px" viewBox="0 0 32 32" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.434 11.975l8.602-8.549-0.028 4.846c-0.009 0.404 0.311 0.755 0.716 0.746l0.513-0.001c0.404-0.009 0.739-0.25 0.748-0.654l0.021-7.219c0-0.007-0.027-0.012-0.027-0.019l0.040-0.366c0.004-0.203-0.044-0.384-0.174-0.513-0.13-0.131-0.311-0.21-0.512-0.204l-0.366 0.009c-0.007 0-0.012 0.003-0.020 0.004l-7.172-0.032c-0.404 0.009-0.738 0.343-0.747 0.748l-0.001 0.513c0.061 0.476 0.436 0.755 0.84 0.746l4.726 0.013-8.572 8.52c-0.39 0.39-0.39 1.024 0 1.415s1.023 0.39 1.414 0zM10.597 20.025l-8.602 8.523 0.027-4.82c0.010-0.404-0.312-0.756-0.716-0.747l-0.544 0.001c-0.405 0.010-0.739 0.25-0.748 0.654l-0.021 7.219c0 0.007 0.028 0.011 0.028 0.019l-0.040 0.365c-0.005 0.203 0.043 0.385 0.174 0.514 0.129 0.131 0.311 0.21 0.512 0.205l0.366-0.009c0.007 0 0.012-0.003 0.020-0.003l7.203 0.032c0.404-0.010 0.738-0.344 0.748-0.748l0.001-0.514c-0.062-0.476-0.436-0.755-0.84-0.746l-4.726-0.012 8.571-8.518c0.39-0.39 0.39-1.023 0-1.414s-1.023-0.391-1.413-0zM32.007 30.855l-0.021-7.219c-0.009-0.404-0.343-0.645-0.747-0.654l-0.513-0.001c-0.404-0.009-0.725 0.343-0.716 0.747l0.028 4.846-8.602-8.549c-0.39-0.39-1.023-0.39-1.414 0s-0.39 1.023 0 1.414l8.571 8.518-4.726 0.012c-0.404-0.009-0.779 0.27-0.84 0.746l0.001 0.514c0.009 0.404 0.344 0.739 0.747 0.748l7.172-0.032c0.008 0 0.013 0.003 0.020 0.003l0.366 0.009c0.201 0.005 0.384-0.074 0.512-0.205 0.131-0.129 0.178-0.311 0.174-0.514l-0.040-0.365c0-0.008 0.027-0.012 0.027-0.019zM3.439 2.041l4.727-0.012c0.404 0.009 0.778-0.27 0.84-0.746l-0.001-0.513c-0.010-0.405-0.344-0.739-0.748-0.748l-7.204 0.031c-0.008-0.001-0.013-0.004-0.020-0.004l-0.366-0.009c-0.201-0.005-0.383 0.074-0.512 0.204-0.132 0.13-0.179 0.31-0.174 0.514l0.040 0.366c0 0.007-0.028 0.012-0.028 0.020l0.021 7.219c0.009 0.404 0.343 0.645 0.748 0.654l0.545 0.001c0.404 0.009 0.724-0.342 0.715-0.746l-0.028-4.819 8.602 8.523c0.39 0.39 1.024 0.39 1.414 0s0.39-1.024 0-1.415z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="amenity-text">
                                    <span>Plot </span>

                                    <span>{{ property.plotArea }}</span>
                                    <span>&nbsp;{{ property.unit }}</span>
                                </div>
                            </div>
                            <div class="amenity-item col-lg-1 col-md-3 col-sm-6 col-6 last-item">
                                <div class="amenity-icon"
                                    v-if="property.completionStatus != 'completed_property' && property.propertyCategory == 'Sale'">
                                    <svg fill="#000000" height="40px" width="40px" version="1.1" id="Layer_1"
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
                                <div class="amenity-icon" v-else>
                                    <svg fill="#000000" width="40px" height="40px" viewBox="0 0 1024 1024"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M429.811 577.1l-80.485-86.309c-21.425-22.976-57.42-24.233-80.396-2.807s-24.233 57.42-2.807 80.396l81.839 87.762-.158.152 43.493 45.038c19.643 20.341 52.056 20.907 72.397 1.264l35.686-34.462 8.195-7.642-.133-.143 251.802-243.163c22.607-21.832 23.236-57.857 1.405-80.464s-57.857-23.236-80.464-1.405L429.812 577.1zM512 1024C229.23 1024 0 794.77 0 512S229.23 0 512 0s512 229.23 512 512-229.23 512-512 512z" />
                                    </svg>

                                </div>
                                <div class="amenity-text">
                                    <span> {{ property.completionStatus != 'completed_property' && property.propertyCategory ==
                                        'Sale' ? 'Off-plan' : 'Ready' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="vstack gap-5 mt-7">

                        <div class="listing-intro g-col-lg-12 property-about-section">

                            <h3 class="mb-0 listing-body__heading">About</h3>
                            <div>Reference No: {{ property.propertyReferenceNo }}</div>
                            <div class="mt-0" :style="contentStyle" v-html="property.webRemarks">

                            </div>
                            <div class="btn-centered pb-0 mb-0 btn-video">
                                <a class="btn-readmore mb-0 pb-0" @click="toggleContent()">{{ isTruncated ? 'Read more'
                                    :
                                    'Show less' }}</a>
                            </div>
                        </div>

                        <div class="border-top pt-5 mb-0 pb-0 mt-0 gallery-section">
                            <h3 class="mb-0 listing-body__heading mb-3">Gallery</h3>

                            <div class="listing-photos-grid">
                                <button class="listing-photos-grid__item listing-photos-grid__item--lead"
                                    data-bs-toggle="modal" data-bs-target="#listing-photos">
                                    <img :src="backendUrl + property.galleryImages[0]" :alt="property.slug"
                                        class="listing-photos-grid__image" loading="lazy" width="560" height="420">
                                </button>
                                <button class="listing-photos-grid__item" data-bs-toggle="modal"
                                    data-bs-target="#listing-photos">
                                    <img :src="backendUrl + property.galleryImages[1]" :alt="property.slug"
                                        class="listing-photos-grid__image" loading="lazy" width="560" height="420">
                                </button>
                                <button class="listing-photos-grid__item" data-bs-toggle="modal"
                                    data-bs-target="#listing-photos">
                                    <img :src="backendUrl + property.galleryImages[2]" :alt="property.slug"
                                        class="listing-photos-grid__image" loading="lazy" width="560" height="420">
                                </button>
                            </div>
                            <div class="btn-centered pb-3 mb-0 btn-video">
                                <button class="btn btn-ghost mt-3 btn-block btn-design">
                                    Property Video
                                </button>
                            </div>

                        </div>
                        <div class="border-top border-bottom pb-5 pt-5 features-section">
                            <h3 class="listing-body__heading">Features</h3>
                            <ul class="listing-features">
                                <li class="listing-features__item" v-for="item in property.aminitiesList">{{ item }}</li>
                            </ul>
                        </div>
                        <div class="border-bottom pb-5">
                            <!-- <div class="listing-location">
                                <div class="listing-location__body"> -->
                            <h3 class="mb-0 listing-body__heading mb-3">Location</h3>
                            <div class="row">

                                <div class="col-lg-8">
                                    <span>{{ property.propertyName }} is located in</span>
                                    <h3 class="mt-0">{{ property.areaName }} </h3>
                                    <p v-if="property.areaData" :style="contentStyleArea"
                                        v-html="property.areaData.longDescription"> </p>
                                </div>
                                <div class="col-lg-4" v-if="property.areaData">
                                    <p v-html="property.areaData.mapIframe"></p>
                                </div>
                            </div>
                            <!-- </div>

                            </div> -->
                        </div>
                        <div class="border-bottom pb-5 mt-3 mbl-section-agent">
                            <div class="g-col-1 g-start-2 g-col-lg-4 g-start-lg-10 ">
                                <div class="listing-cta-card" v-if="property.agentData">
                                    <div class="agent_image_card">
                                        <img :src="property.agentData.profilePicture" :alt="property.agentData.slug"
                                            class="listing-agent-card__media">
                                    </div>
                                    <ul class="separator-list separator-list--dots mb-0"></ul>
                                    <span class="listing-cta-card__price h2">
                                        <span class="">
                                            <span data-poa="">{{ property.agentData.name }}</span>
                                        </span>
                                    </span>
                                    <div class="listing-cta-card__summary mt-0 text-center">
                                        <p class="post-card__leader display-7">{{ property.agentData.designation }}</p>
                                        <div class="centered-container mt-0">
                                            <ul class="separator-list separator-list--dots">
                                                <span v-for="(language, index) in property.agentData.agentLanguages"
                                                    :key="index">
                                                    <span>{{ language }}</span>
                                                    <span
                                                        v-if="index < property.agentData.agentLanguages.length - 1">•</span>
                                                </span>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row contact-btns mb-0">
                                        <div class="col-lg-4 col-sm-3" data-toggle="tooltip" data-placement="top"
                                            title="Call to Agent">

                                            <a href="tel:+971582489970">
                                                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z"
                                                        stroke="#292D32" stroke-width="1.8" stroke-miterlimit="10" />
                                                </svg>
                                            </a>

                                        </div>
                                        <div class="col-lg-4 col-sm-3" data-placement="top" title="Whatsapp to Agent">
                                            <a target="_blank"
                                                href="https://api.whatsapp.com/send/?phone=971582489970&text&type=phone_number&app_absent=0">

                                                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"
                                                        fill="#000000" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-sm-3" data-placement="top" title="Email to Agent">
                                            <a href="mailto:promo@a1properties.ae">

                                                <svg height="40px" width="40px" version="1.1" id="_x32_"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                                    xml:space="preserve">

                                                    <g>
                                                        <path class="st0" d="M510.678,112.275c-2.308-11.626-7.463-22.265-14.662-31.054c-1.518-1.915-3.104-3.63-4.823-5.345
                                               c-12.755-12.818-30.657-20.814-50.214-20.814H71.021c-19.557,0-37.395,7.996-50.21,20.814c-1.715,1.715-3.301,3.43-4.823,5.345
                                               C8.785,90.009,3.63,100.649,1.386,112.275C0.464,116.762,0,121.399,0,126.087V385.92c0,9.968,2.114,19.55,5.884,28.203
                                               c3.497,8.26,8.653,15.734,14.926,22.001c1.59,1.586,3.169,3.044,4.892,4.494c12.286,10.175,28.145,16.32,45.319,16.32h369.958
                                               c17.18,0,33.108-6.145,45.323-16.384c1.718-1.386,3.305-2.844,4.891-4.43c6.27-6.267,11.425-13.741,14.994-22.001v-0.064
                                               c3.769-8.653,5.812-18.171,5.812-28.138V126.087C512,121.399,511.543,116.762,510.678,112.275z M46.509,101.571
                                               c6.345-6.338,14.866-10.175,24.512-10.175h369.958c9.646,0,18.242,3.837,24.512,10.175c1.122,1.129,2.179,2.387,3.112,3.637
                                               L274.696,274.203c-5.348,4.687-11.954,7.002-18.696,7.002c-6.674,0-13.276-2.315-18.695-7.002L43.472,105.136
                                               C44.33,103.886,45.387,102.7,46.509,101.571z M36.334,385.92V142.735L176.658,265.15L36.405,387.435
                                               C36.334,386.971,36.334,386.449,36.334,385.92z M440.979,420.597H71.021c-6.281,0-12.158-1.651-17.174-4.552l147.978-128.959
                                               l13.815,12.018c11.561,10.046,26.028,15.134,40.36,15.134c14.406,0,28.872-5.088,40.432-15.134l13.808-12.018l147.92,128.959
                                               C453.137,418.946,447.26,420.597,440.979,420.597z M475.666,385.92c0,0.529,0,1.051-0.068,1.515L335.346,265.221L475.666,142.8
                                               V385.92z" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>

                                    <button class="listing-cta-card__btn btn btn-lg btn-color-black mt-2"
                                        data-bs-toggle="modal" data-bs-target="#learnMoreModal" data-alt-label="Requested"
                                        @click="toggleActionButton('REGISTER')"
                                        style="transition: none 0s ease 0s !important;">Register
                                        Your Interest</button>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                <!-- Agent Listing Card -->
                <div class="g-col-1 g-start-2 g-col-lg-4 g-start-lg-10 listing-body__cta js-sticky" data-cta="sticky">
                    <div class="listing-cta-card" v-if="property.agentData">
                        <div class="agent_image_card">
                            <img :src="property.agentData.profilePicture" :alt="property.agentData.slug"
                                class="listing-agent-card__media">
                        </div>
                        <ul class="separator-list separator-list--dots mb-0"></ul>
                        <span class="listing-cta-card__price h2">
                            <span class="">
                                <span data-poa="">{{ property.agentData.name }}</span>
                            </span>
                        </span>
                        <div class="listing-cta-card__summary mt-0 text-center">
                            <p class="post-card__leader display-7">{{ property.agentData.designation }}</p>
                            <div class="centered-container mt-0">
                                <ul class="separator-list separator-list--dots">
                                    <span v-for="(language, index) in property.agentData.agentLanguages" :key="index">
                                        <span>{{ language }}</span>
                                        <span v-if="index < property.agentData.agentLanguages.length - 1">•</span>
                                    </span>
                                </ul>
                            </div>
                        </div>
                        <div class="row contact-btns mb-0">
                            <div class="col-lg-4" data-toggle="tooltip" data-placement="top" title="Call to Agent">
                                <a href="tel:+971582489970">
                                    <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z"
                                            stroke="#292D32" stroke-width="1.8" stroke-miterlimit="10" />
                                    </svg>
                                </a>
                            </div>
                            <div class="col-lg-4" data-placement="top" title="Whatsapp to Agent">
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send/?phone=971582489970&text&type=phone_number&app_absent=0"><svg
                                        width="40px" height="40px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"
                                            fill="#000000" />
                                    </svg></a>

                            </div>
                            <div class="col-lg-4" data-placement="top" title="Email to Agent">
                                <a href="mailto:promo@a1properties.ae"><svg height="40px" width="40px" version="1.1"
                                        id="_x32_" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                        xml:space="preserve">

                                        <g>
                                            <path class="st0" d="M510.678,112.275c-2.308-11.626-7.463-22.265-14.662-31.054c-1.518-1.915-3.104-3.63-4.823-5.345
                                   c-12.755-12.818-30.657-20.814-50.214-20.814H71.021c-19.557,0-37.395,7.996-50.21,20.814c-1.715,1.715-3.301,3.43-4.823,5.345
                                   C8.785,90.009,3.63,100.649,1.386,112.275C0.464,116.762,0,121.399,0,126.087V385.92c0,9.968,2.114,19.55,5.884,28.203
                                   c3.497,8.26,8.653,15.734,14.926,22.001c1.59,1.586,3.169,3.044,4.892,4.494c12.286,10.175,28.145,16.32,45.319,16.32h369.958
                                   c17.18,0,33.108-6.145,45.323-16.384c1.718-1.386,3.305-2.844,4.891-4.43c6.27-6.267,11.425-13.741,14.994-22.001v-0.064
                                   c3.769-8.653,5.812-18.171,5.812-28.138V126.087C512,121.399,511.543,116.762,510.678,112.275z M46.509,101.571
                                   c6.345-6.338,14.866-10.175,24.512-10.175h369.958c9.646,0,18.242,3.837,24.512,10.175c1.122,1.129,2.179,2.387,3.112,3.637
                                   L274.696,274.203c-5.348,4.687-11.954,7.002-18.696,7.002c-6.674,0-13.276-2.315-18.695-7.002L43.472,105.136
                                   C44.33,103.886,45.387,102.7,46.509,101.571z M36.334,385.92V142.735L176.658,265.15L36.405,387.435
                                   C36.334,386.971,36.334,386.449,36.334,385.92z M440.979,420.597H71.021c-6.281,0-12.158-1.651-17.174-4.552l147.978-128.959
                                   l13.815,12.018c11.561,10.046,26.028,15.134,40.36,15.134c14.406,0,28.872-5.088,40.432-15.134l13.808-12.018l147.92,128.959
                                   C453.137,418.946,447.26,420.597,440.979,420.597z M475.666,385.92c0,0.529,0,1.051-0.068,1.515L335.346,265.221L475.666,142.8
                                   V385.92z" />
                                        </g>
                                    </svg></a>
                            </div>
                        </div>

                        <button class="listing-cta-card__btn btn btn-lg btn-color-black mt-2" data-bs-toggle="modal"
                            data-bs-target="#learnMoreModal" data-alt-label="Requested"
                            @click="toggleActionButton('REGISTER')" style="transition: none 0s ease 0s !important;">Register
                            Your Interest</button>

                    </div>
                </div>

            </div>


            <div class="listing-upper-nav-outer listing-upper-nav-outer--hidden" data-nav="listing-bar">
                <div class="page-entry">
                    <div class="g-col-1 g-start-2 g-col-lg-8 g-start-lg-2">
                        <div class="listing-upper-nav">
                            <a href="#" aria-label="Previous" class="listing-banner-tools-icon">
                                <svg aria-hidden="true" class="listing-banner-tools-icon__svg"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" xml:space="preserve">
                                    <path fill="none" d="M0 0h40v40H0z"></path>
                                    <path d="M22.3 27.7 14.6 20l7.7-7.7 1.4 1.4-6.3 6.3 6.3 6.3z"></path>
                                </svg>
                            </a>
                            <div class="listing-upper-nav__infos">
                                <span>{{ property.metaTitle }}</span>
                                <span>Reference: {{ property.propertyReferenceNo }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </article>
        <div class="page-entry pb-6">
            <div class="g-col-1 g-start-2 g-col-lg-12 g-start-lg-2">


                <div class="vstack gap-5 mt-0">
                    <div id="related" class="">
                        <aside class="page-entry" style="row-gap: 0;">
                            <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2">
                                <h3 class="mb-0 listing-body__heading mb-3">More Listings in {{ property.areaName }}</h3>
                            </div>
                            <FilteredProperties :listings="property.areaListings"></FilteredProperties>
                        </aside>
                    </div>
                    <div id="related" class="">
                        <aside class="page-entry" style="row-gap: 0;">
                            <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2">
                                <h3 class="mb-0 listing-body__heading mb-3">More Listings by {{ property.agentData ?
                                    property.agentData.name : '' }}</h3>
                            </div>
                            <FilteredProperties :listings="property.agentListings"></FilteredProperties>
                        </aside>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade " id="listing-photos" tabindex="-1" aria-labelledby="listing-photos-modal-title"
            aria-hidden="true">
            <div class="modal-dialog modal-xl ">
                <div class="">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>

                </div>
                <div class="modal-content">

                    <div class="modal-body">

                        <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button v-for="(image, key) in property.galleryImages" :key="key" type="button"
                                    data-bs-target="#carouselExampleCaptions2" :data-bs-slide-to="key"
                                    :class="{ 'active': key === 0 }" aria-label="Slide 1"></button>
                            </div>
                            <div class="carousel-inner">
                                <div v-for="(image, key) in property.galleryImages" :key="key" class="carousel-item"
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
        <RegisterOrRequestForm :formType="formType" :slug="property.slug"></RegisterOrRequestForm>
    </main>
    <FooterRequestCallbackModal></FooterRequestCallbackModal>

    <Footer></Footer>
</template>
<script>
import Nav from '../../components/Nav.vue';
import Header from '../../components/Header.vue';
import SearchFilterModal from '../../components/SearchFilterModal.vue';
import Footer from '../../components/Footer.vue';
import FilteredProperties from '../../components/FilteredProperties.vue';
import RegisterOrRequestForm from '../../components/RegisterOrRequestForm.vue';
import FooterRequestCallbackModal from '../../components/FooterRequestCallbackModal.vue';

import { mapState, mapActions } from 'vuex';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { CodeLoader } from 'vue-content-loader';

// Import Swiper styles
import 'swiper/swiper.scss';

import "swiper/components/effect-coverflow/effect-coverflow.min.css"
import "swiper/components/pagination/pagination.min.css"

import { watch } from 'vue';

// import Swiper core and required modules
import SwiperCore, {
    Autoplay,
    EffectCoverflow, Pagination
} from 'swiper/core';

// install Swiper modules
SwiperCore.use([Autoplay, EffectCoverflow, Pagination]);

export default {
    name: "PropertyDetail",
    components: {
        Nav, Header, SearchFilterModal, Footer, Swiper,
        SwiperSlide,
        FilteredProperties, CodeLoader, RegisterOrRequestForm, FooterRequestCallbackModal
    },
    data() {
        return {
            maxLines: 3,
            maxLinesArea: 7,
            isTruncated: true,
            formType: 'REQUEST',
            backendUrl: 'https://a1properties.ae/backend/'

            // backendUrl: 'http://192.168.2.46:8001/',
        }
    },
    props: {
        filterData: {
            type: String,
            default: '',
        },
        filtersEmail: {
            type: String,
            default: ''
        },
        filtersArea: {
            type: String,
            default: ''
        }
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
    computed: {
        ...mapState("properties", ["property", "loading", "filter"]),
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
        },
        contentStyleArea() {
            return {
                overflow: 'hidden',
                display: '-webkit-box',
                '-webkit-line-clamp': this.maxLinesArea,
                '-webkit-box-orient': 'vertical',
                'max-height': `${this.maxLinesArea * 24}px`, // Adjust the line height accordingly
            };

        },
        dynamicAgentEmail() {
            return this.property ? this.property.agentEmail : "";
        },

    },
    methods: {
        ...mapActions("properties", ["getPropertyBySlug"]),
        toggleContent() {
            this.isTruncated = !this.isTruncated;
        },
        toggleActionButton(type) {

            this.formType = type;
        },
        async fetchData() {
            const slug = this.$route.params.slug;
            try {
                // Assuming getPropertyBySlug is an asynchronous function
                await this.getPropertyBySlug(slug);
                // eventBus.$emit('data-sent', data);

            } catch (error) {
                console.error('Error fetching data:', error);
            }
        },
    },
    // In your Vue component

    async created() {
        const slug = this.$route.params.slug;
        try {
            const responseData = await this.fetchData();
        } catch (error) {
            console.error('Error in created hook:', error);
        }

        // Watch for changes in the slug parameter
        this.$watch(
            () => this.$route.params.slug,
            async (newSlug, oldSlug) => {
                // Fetch data when the slug parameter changes
                if (newSlug !== oldSlug) {
                    try {
                        await this.fetchData();
                    } catch (error) {
                        console.error('Error in watch:', error);
                    }
                }
            }
        );
    },

}
</script>

<style scoped="scss">
.price-card-items {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.btns-on-image {
    display: flex;
    justify-content: flex-end;
}

.into-section {
    display: flex;
    justify-content: flex-end;
}

.section2 {
    float: right;
}

.aminities_list {
    display: flex;
    justify-content: space-between;
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

.image-container {
    width: 100%;
    height: 650px;
    /* Set your desired height here */
    overflow: hidden;
}

.image-cropped {
    width: 100%;
    object-fit: cover;
    object-position: center;
    height: 80vh;
}

.agent_image_card {
    height: 200px;
    width: 200px;
}

.agent_image_card img {
    height: 200px;
    width: 200px;
}

.agent-res {
    font-weight: 400;
}

.contact-btns {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.contact-btns svg {
    cursor: pointer;
}

.listing-cta-card {
    align-items: center;
}

.center-text {
    align-items: center;
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

.btn-centered {
    display: flex;
    justify-content: center;
    flex-wrap: nowrap;
    text-align: center;
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

.property-about-section {
    margin-top: -20px;
}

.listing-cta-card {
    margin-top: -20px;

}

.features-section {
    margin-top: -20px;
}

.btn-readmore {
    cursor: pointer;
}

.centered-container {
    display: flex;
    justify-content: center;
}

.separator-list {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
    flex-wrap: nowrap;
    /* Ensure items stay on one line */
}

.separator-list span {
    display: flex;
    align-items: center;
    margin-right: 5px;
    /* Adjust as needed for spacing between language and dot */
}

.js-sticky {
    top: 180px !important;
}

.mbl-section-agent {
    display: none;
}

@media only screen and (max-width: 600px) {


    .mbl-section-agent {
        display: block;
    }

    .contact-btns {
        margin-left: -60px;
    }

    .contact-btns .col-lg-4 {
        flex: 0 0 auto;
        max-width: 10%;
    }

    .amenity-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 40%;
        margin: 5px;
    }

    .last-item {
        margin-top: 15px;
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
}
</style>
