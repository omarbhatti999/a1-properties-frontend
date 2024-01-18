<template>
    <footer class="page-entry pb-5 pt-6 pb-lg-6" data-theme="dark">
        <!-- <aside class="g-col-1 g-start-2 g-col-lg-6 g-start-lg-5 newsletter-promo vstack gap-6 mb-4">

        </aside> -->
        <div class="g-col-1 g-start-2 g-col-lg-12 g-start-lg-2 site-footer">
            <ul class="site-footer-link-groups li-items-ul">
                <li class="site-footer-link-groups__item has-collapse li-items">
                    <h4 class="site-footer-link-groups__btn-heading" id="footer-group-company-heading">
                        <button class="site-footer-link-groups__btn-heading__btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#footer-group-company" aria-expanded="false"
                            aria-controls="footer-group-company">
                            A1 Properties
                        </button>
                    </h4>
                    <h4 class="site-footer-link-groups__heading">A1 Properties</h4>
                    <ul class="site-footer-link-group site-footer-link-group--cols collapse" id="footer-group-company"
                        aria-labelledby="footer-group-company-heading">
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link
                                    to="/about-us">About</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a class="site-footer-link-group__link"><router-link to="/team">The Team</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a class="site-footer-link-group__link"><router-link to="/blogs">The Blog</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link to="/">Services</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link
                                    to="/projects">Projects</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link
                                    to="/communities">Communities</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"
                                @click="goToPage('PropertyListings', { param: 'sale' })">Properties for Sale</a>
                        </li>

                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"
                                @click="goToPage('PropertyListings', { param: 'rent' })">Properties for Rent</a>
                        </li>

                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link to="/list-property">List your
                                    property</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link to="/">Careers</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="http://rak.a1properties.ae/" target="_blank" class="site-footer-link-group__link">A1
                                RAK</a>
                        </li>
                    </ul>
                </li>

                <li class="site-footer-link-groups__item has-collapse li-items">
                    <h4 class="site-footer-link-groups__btn-heading" id="footer-group-neighborhood-guides-heading">
                        <button class="site-footer-link-groups__btn-heading__btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#footer-group-neighborhood-guides" aria-expanded="false"
                            aria-controls="footer-group-neighborhood-guides">
                            Services
                        </button>
                    </h4>
                    <h4 class="site-footer-link-groups__heading">Services</h4>
                    <ul class="site-footer-link-group site-footer-link-group--cols collapse"
                        id="footer-group-neighborhood-guides" aria-labelledby="footer-group-neighborhood-guides-heading">
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link">Buying, Selling & Leasing</a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link">Mortgage Advisory</a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link">Property Management</a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link">Wealth Management</a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link">Investor Visa</a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link">Conveyancing</a>
                        </li>

                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link">Snagging</a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link">Holiday Homes</a>
                        </li>

                    </ul>
                </li>

                <li class="site-footer-link-groups__item has-collapse li-items">
                    <h4 class="site-footer-link-groups__btn-heading" id="footer-group-browse-homes-in-heading">
                        <button class="site-footer-link-groups__btn-heading__btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#footer-group-browse-homes-in" aria-expanded="false"
                            aria-controls="footer-group-browse-homes-in">
                            Communities
                        </button>
                    </h4>
                    <h4 class="site-footer-link-groups__heading">Communites
                    </h4>
                    <ul class="site-footer-link-group site-footer-link-group--cols collapse"
                        id="footer-group-browse-homes-in" aria-labelledby="footer-group-browse-homes-in-heading">
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link to="/community/palm-jumeirah">Palm
                                    Jumeirah </router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link to="/community/dubai-marina">Dubai
                                    Marina</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link
                                    to="/community/downtown-dubai">Downtown
                                    Dubai</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link
                                    to="/community/business-bay">Business Bay</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link
                                    to="/community/difc">DIFC</router-link>
                            </a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link to="/community/dubai-hills">Dubai
                                    Hills Estate</router-link>
                            </a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link to="/community/damac-hills">Damac
                                    Hills</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link
                                    to="/community/arabian-ranches">Arabian Ranches</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link
                                    to="/community/emirates-hills">Emirates Hills</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"><router-link
                                    to="/community/creek-harbour">Creek Harbour</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a class="site-footer-link-group__link"><router-link to="/communities">Explore
                                    All</router-link></a>
                        </li>
                    </ul>
                </li>

                <li class="site-footer-link-groups__item has-collapse li-items">
                    <h4 class="site-footer-link-groups__btn-heading" id="footer-group-explore-heading">
                        <button class="site-footer-link-groups__btn-heading__btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#footer-group-explore" aria-expanded="false"
                            aria-controls="footer-group-explore">
                            Explore
                        </button>
                    </h4>
                    <h4 class="site-footer-link-groups__heading">Explore</h4>
                    <ul class="site-footer-link-group site-footer-link-group--cols collapse" id="footer-group-explore"
                        aria-labelledby="footer-group-explore-heading">
                        <li class="site-footer-link-group__item">
                            <a class="site-footer-link-group__link"><router-link to="/projects">Off-plan
                                    Projects</router-link></a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" @click="apartmentsForSale()" class="site-footer-link-group__link">Apartments for
                                sale</a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" @click="townhousesForSale()" class="site-footer-link-group__link">Townhouses for
                                sale</a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a @click="villasForSale()" class="site-footer-link-group__link">Villas for sale</a>
                        </li>

                        <li class="site-footer-link-group__item">
                            <a class="site-footer-link-group__link">
                                Apartments for rent</a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a class="site-footer-link-group__link">
                                Townhouses for rent</a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link">Villas for rent</a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link">Penthouses</a>
                        </li>

                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link">Mansions</a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link">Offices</a>
                        </li>
                        <li class="site-footer-link-group__item">
                            <a href="#" class="site-footer-link-group__link"
                                @click="goToPage('PropertyListings', { param: 'sale' })">Explore
                                All</a>
                        </li>
                    </ul>
                </li>


                <li class="site-footer-link-groups__item li-items-logo-section">


                    <ul class="site-footer-link-group">
                        <li class="site-footer-link-group__item a1-logo-item" @click="home()">
                            <a href="#" class=""><img height="" width="" class="a1-logo-icon"
                                    :src="backendUrl + 'storage/a1/a1-logo-icon-white.png'"></a>
                        </li>
                    </ul>
                    <ul class="social-links mt-3">
                        <li class="social-links__item">
                            <a target="_blank" href="https://www.facebook.com/a1propertiesuae/" class="m-0">
                                <!-- facebook -->
                                <svg fill="#fff" width="20px" height="20px" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z" />
                                </svg>
                            </a>
                        </li>
                        <li class="social-links__item">
                            <a href="https://instagram.com/a1propertiesuae" target="_blank" class="m-0">
                                <svg fill="#fff" width="20px" height="20px" viewBox="0 0 48 48"
                                    xmlns="http://www.w3.org/2000/svg">

                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="invisible_box" data-name="invisible box">
                                            <rect width="48" height="48" fill="none" />
                                            <rect width="48" height="48" fill="none" />
                                        </g>
                                        <g id="icons_Q2" data-name="icons Q2">
                                            <path
                                                d="M24,7.6h8.1a10.8,10.8,0,0,1,3.7.7,6.7,6.7,0,0,1,3.8,3.8,10.8,10.8,0,0,1,.7,3.7c.1,2.1.1,2.8.1,8.1s0,6-.1,8.1a10.8,10.8,0,0,1-.7,3.7,6.7,6.7,0,0,1-3.8,3.8,10.8,10.8,0,0,1-3.7.7H15.9a10.8,10.8,0,0,1-3.7-.7,6.7,6.7,0,0,1-3.8-3.8,10.8,10.8,0,0,1-.7-3.7c-.1-2.1-.1-2.8-.1-8.1s0-6,.1-8.1a10.8,10.8,0,0,1,.7-3.7,6.7,6.7,0,0,1,3.8-3.8,10.8,10.8,0,0,1,3.7-.7H24M24,4H15.8a17.9,17.9,0,0,0-4.9.9A10,10,0,0,0,7.4,7.4a8.5,8.5,0,0,0-2.3,3.5,14.5,14.5,0,0,0-1,4.9C4,17.9,4,18.6,4,24s0,6.1.1,8.2a14.5,14.5,0,0,0,1,4.9,8.5,8.5,0,0,0,2.3,3.5,8.5,8.5,0,0,0,3.5,2.3,14.5,14.5,0,0,0,4.9,1H32.2a14.5,14.5,0,0,0,4.9-1,8.5,8.5,0,0,0,3.5-2.3A10,10,0,0,0,43,37.1a17.9,17.9,0,0,0,.9-4.9c.1-2.1.1-2.8.1-8.2s0-6.1-.1-8.2a17.9,17.9,0,0,0-.9-4.9,10,10,0,0,0-2.4-3.5A10,10,0,0,0,37.1,5a17.9,17.9,0,0,0-4.9-.9H24" />
                                            <path
                                                d="M24,13.7A10.3,10.3,0,1,0,34.3,24,10.3,10.3,0,0,0,24,13.7m0,17A6.7,6.7,0,1,1,30.7,24,6.7,6.7,0,0,1,24,30.7" />
                                            <path d="M37.1,13.3a2.4,2.4,0,1,1-2.4-2.4,2.4,2.4,0,0,1,2.4,2.4" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="social-links__item">
                            <a href="https://www.youtube.com/@a1propertiesuae" target="_blank" class="m-0">
                                <!-- Youtube -->
                                <svg fill="#fff" width="20px" height="20px" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="-271 311.2 256 179.8" xml:space="preserve">
                                    <path d="M-59.1,311.2h-167.8c0,0-44.1,0-44.1,44.1v91.5c0,0,0,44.1,44.1,44.1h167.8c0,0,44.1,0,44.1-44.1v-91.5
C-15,355.3-15,311.2-59.1,311.2z M-177.1,450.3v-98.5l83.8,49.3L-177.1,450.3z" />
                                </svg>
                            </a>
                        </li>
                        <li class="social-links__item">
                            <!-- Youtube -->
                            <a href="https://linkedin.com/company/a1propertiesuae" target="_blank" class="m-0">
                                <!-- Linkedin -->
                                <svg fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                    viewBox="0 0 512 512" xml:space="preserve">

                                    <g id="7935ec95c421cee6d86eb22ecd125aef">

                                        <path style="display: inline; fill-rule: evenodd; clip-rule: evenodd;" d="M116.504,500.219V170.654H6.975v329.564H116.504
		L116.504,500.219z M61.751,125.674c38.183,0,61.968-25.328,61.968-56.953c-0.722-32.328-23.785-56.941-61.252-56.941
		C24.994,11.781,0.5,36.394,0.5,68.722c0,31.625,23.772,56.953,60.53,56.953H61.751L61.751,125.674z M177.124,500.219
		c0,0,1.437-298.643,0-329.564H286.67v47.794h-0.727c14.404-22.49,40.354-55.533,99.44-55.533
		c72.085,0,126.116,47.103,126.116,148.333v188.971H401.971V323.912c0-44.301-15.848-74.531-55.497-74.531
		c-30.254,0-48.284,20.38-56.202,40.08c-2.897,7.012-3.602,16.861-3.602,26.711v184.047H177.124L177.124,500.219z">

                                        </path>

                                    </g>

                                </svg>
                            </a>
                        </li>
                        <li class="social-links__item">
                            <a href="https://tiktok.com/@a1propertiesuae" target="_blank" class="m-0">

                                <!-- TIktok -->
                                <svg fill="#fff" width="20px" height="20px" viewBox="0 0 32 32" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="social-links__item">
                            <a href="https://x.com/a1propertiesuae" target="_blank" class="m-0 x-icon">
                                <!-- Twitter X -->
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                    viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#fff"
                                        stroke="none">
                                        <path d="M75 5093 c10 -16 448 -653 973 -1418 525 -765 955 -1395 955 -1400 0
                               -6 -431 -512 -959 -1126 -527 -613 -965 -1123 -973 -1132 -13 -16 1 -17 206
                               -17 l220 0 849 987 c467 542 854 988 859 989 6 2 316 -442 689 -986 l679 -990
                               744 0 c705 0 743 1 734 18 -5 9 -460 672 -1010 1472 -550 800 -1001 1457
                               -1001 1460 0 4 418 492 929 1085 l928 1080 -215 3 c-177 2 -218 0 -231 -12 -9
                               -8 -374 -431 -811 -939 -437 -509 -798 -923 -802 -921 -4 3 -296 425 -649 939
                               l-642 935 -745 0 -744 0 17 -27z m2815 -2529 c855 -1224 1557 -2229 1558
                               -2235 3 -6 -118 -8 -334 -7 l-338 3 -1558 2228 c-857 1226 -1558 2231 -1558
                               2233 0 2 152 4 338 4 l337 -1 1555 -2225z" />
                                    </g>
                                </svg>
                            </a>
                        </li>

                    </ul>
                    <ul class="site-footer-link-group request-callback-btn mt-5">
                        <li class="site-footer-link-group__item">
                            <a href="#" class="btn btn-block btn-transparent btn-learn-more" data-bs-toggle="modal"
                                data-bs-target="#requestCallback">Request a call back</a>
                        </li>
                        <li class="site-footer-link-group__item location-sec"
                            style="display: flex; align-items: center; justify-content: center; margin-left: 10px;">
                            <span style=""><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                        stroke="#c67057" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                        stroke="#c67057" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>
                            <a href="https://maps.app.goo.gl/kKv5ddic2zUY9SUk9" target="_blank"
                                style="text-decoration: none; margin-right: 15px;" class="mt-4">
                                <span class="">Office 1702, Fairmont Hotel, Dubai, UAE</span>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
            <!-- bottom footer -->
            <div class="footer-container-last">
                <span class="copy-right-text">
                    <a class="site-footer-sub-links__link">© A1 Properties</a>
                </span>
                <span class="copy-right-text">
                    <a class="site-footer-sub-links__link" @click="privacyPolicy()">Privacy policy</a>
                </span>

            </div>

        </div>

    </footer>
</template>
<script>

export default {
    name: 'Footer',
    components: {

    },
    data() {
        return {
            backendUrl: 'https://a1properties.ae/backend/'
            // backendUrl: 'http://192.168.1.46:8000/'

        }
    },
    methods: {
        privacyPolicy() {
            this.$router.push('/privacy-policy')
        },
        home() {
            this.$router.push('/')

        },
        toCommunityPage(slug) {
            this.$router.push(`/community/${slug}`)

        },
        toPage(page) {
            this.$router.push(`${page}`)
        },
        goToPage(page, props = null) {
            if (props && typeof props === 'object') {
                this.$router.push({
                    name: page, // Use the name of the route
                    params: { param: props.param || '' },
                });
            } else {
                this.$router.push({ name: page });
            }
        },
        offplanProjects() {
            this.$router.push('/projects')
        },
        apartmentsForSale() {
            this.$router.push('/properties?params=category=sale%26propertyTypes=apartment')
        },
        townhousesForSale() {
            this.$router.push('/properties?params=category=sale%26propertyTypes=townhouse')
        },
        villasForSale() {
            this.$router.push('/properties?params=category=sale%26propertyTypes=villa')
        },
        apartmentsForRent() {
            this.$router.push('/properties?params=category=rent%26propertyTypes=apartment')
        },
        townhousesForRent() {
            this.$router.push('/properties?params=category=rent%26propertyTypes=townhouse')
        },
    }
}
</script>
<style scoped="scss">
.active-link {
    color: #fff !important;
}

.a1-logo-item {
    text-align: center;

}

.a1-logo-item a img {
    border-bottom: 1px solid #c67057;
}

.social-links li {
    width: 10%;
    margin: 2px;
}

.x-icon svg {
    width: 15px;
    height: 15px;
}

.request-callback-btn {
    text-align: center;
}

.social-links {
    text-align: center;
}

.li-items-logo-section {
    margin-top: 70px;
}

a {
    cursor: pointer;
}

@media only screen and (max-width: 600px) {
    .location-sec {
        align-items: center !important;
    }

    .location-sec svg {
        margin-top: 20px !important;
        margin-right: 5px;
    }

    .site-footer-link-group {
        text-align: center;
    }

    .social-links {
        margin: auto;
        width: 60%;
    }

    .page-entry {
        padding-bottom: 0px;
    }

    .site-footer-sub-links li {
        text-align: center;

    }

    .li-items-logo-section {
        margin-top: 0px;
        padding-top: 0px;
        margin-bottom: 20px;
        order: -2;
    }

    .site-footer-link-groups__btn-heading__btn {
        width: 30%;
        margin: auto;
    }
}

.copy-right-text {
    font-size: 13px;
    font-weight: 500;
}

.btn-learn-more:hover {
    bottom: 0;
    right: 0;
    border-image-source: linear-gradient(to bottom right, #c67067, transparent 35%, transparent 35%, transparent 65%, #c67067);
    border-image-slice: 1;
    border-image-width: 1;
    border-image-outset: 0;
    border-image-repeat: stretch;
}

.btn-learn-more {
    color: #fff;
    border: 1px solid #fff;
}

.footer-container-last {
    padding-top: 10px;
    border-top: 0.5px solid #c67067 !important;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    width: 75%;
    margin: auto;
}</style>
