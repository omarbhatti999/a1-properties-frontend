<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main>
        <div class="pb-9 vstack" data-theme="white">
            <div class="g-col-1 g-start-2 g-col-lg-8 g-start-lg-4 text-center">
                <h1 class="mb-2 mt-5">About A1</h1>
                <p>Adding value to living since 2007</p>
            </div>
            <section class="page-entry mt-5 mb-8">
                <div class="g-col-3 g-col-lg-12 g-start-lg-2">
                    <img class="about-img" :src="backendUrl + 'storage/a1/about/a1-about-image.webp'">
                </div>
            </section>
            <div class="text-center mb-8">
                <router-link to="/team"><a class="btn btn-block btn-transparent btn-learn-more a-btn creative anima">
                        <span class="a-btn-line "></span>
                        Meet the team</a></router-link>
            </div>
            <video autoplay muted loop playsinline preload="auto">
                <source :src="backendUrl + 'storage/a1/about-video.mp4'" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <section class="page-entry">
                <div class="g-col-3 g-col-lg-12 g-start-lg-2">
                </div>
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 text-center mb-7">
                    <h1 class="text-center">About A1 Properties</h1>

                    <h4 class="mt-0 para-spacing">
                        A1 Properties, a trusted Dubai real estate company since 2007, is recognized for over a decade of
                        experience. Based in Fairmont Dubai on Shaikh Zayed Road, it's a go-to for investors, landlords,
                        tenants, and developers.

                        In 2020, A1 Properties earned the Best Quality Brokerage Company award from Property Finder. The
                        company serves as a one-stop-shop for business solutions, managing international investment
                        portfolios, facilitating property sales, valuing unique properties, and overseeing home rentals.

                        A1 Properties has expanded services to include site selection, land acquisition, development,
                        build-to-suit, construction, and buying or selling investment properties. The team of 50+
                        specialists promises high-quality service with integrity, complemented by an in-house marketing team
                        and an efficient Admin division.

                        The company, committed to clients, combines market expertise for a smoother, more valuable realty
                        experience.
                    </h4>
                </div>

            </section>
            <section class="page-entry">
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 text-center">
                    <div class="row">
                        <div class="col-sm-5 ">
                            <div class>
                                <svg fill="#000000" height="80px" width="80px" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g>
                                            <g>
                                                <path d="M505.616,238.008c-1.079-1.279-26.946-31.695-70.603-62.481C394.538,146.983,330.624,112.958,256,112.958
				c-74.624,0-138.538,34.025-179.013,62.569c-43.657,30.788-69.523,61.202-70.603,62.482c-8.511,10.09-8.511,25.894,0,35.983
				c1.079,1.279,26.946,31.695,70.603,62.481c40.476,28.544,104.389,62.569,179.013,62.569c74.624,0,138.538-34.025,179.013-62.569
				c43.657-30.788,69.523-61.202,70.602-62.481C514.128,263.903,514.128,248.099,505.616,238.008z M492.965,263.313
				c-0.253,0.299-25.831,30.322-67.865,59.893c-38.44,27.044-98.982,59.282-169.101,59.282c-70.12,0-130.661-32.238-169.101-59.282
				c-42.034-29.571-67.611-59.593-67.863-59.891c-3.288-3.896-3.287-10.733-0.002-14.628c0.254-0.299,25.831-30.322,67.865-59.893
				c38.439-27.044,98.982-59.282,169.101-59.282c70.12,0,130.661,32.238,169.101,59.282c42.034,29.571,67.611,59.593,67.862,59.89
				C496.251,252.582,496.251,259.419,492.965,263.313z" />
                                                <path d="M255.997,143.974c-61.771,0-112.025,50.254-112.025,112.026s50.253,112.026,112.025,112.026
				c61.771,0,112.025-50.254,112.025-112.026S317.767,143.974,255.997,143.974z M255.997,351.471
				c-52.642,0-95.47-42.828-95.47-95.471s42.827-95.471,95.47-95.471c25.691,0,49.04,10.203,66.219,26.767
				c-4.909-3.416-10.867-5.424-17.287-5.424c-9.304,0-17.639,4.212-23.21,10.825c-8.13-3.297-16.889-5.024-25.723-5.024
				c-37.676,0-68.327,30.651-68.327,68.327s30.652,68.327,68.327,68.327s68.327-30.651,68.327-68.327
				c0-6.331-0.871-12.535-2.563-18.537c8.144-5.45,13.518-14.728,13.518-25.241c0-5.205-1.318-10.106-3.637-14.392
				c12.423,16.117,19.823,36.294,19.823,58.169C351.466,308.642,308.639,351.471,255.997,351.471z M304.93,242.573
				c0.357,0,0.71-0.015,1.063-0.026c1.171,4.359,1.777,8.861,1.777,13.454c0,28.547-23.225,51.773-51.773,51.773
				c-28.547,0-51.773-23.225-51.773-51.773s23.225-51.773,51.773-51.773c6.486,0,12.919,1.222,18.909,3.567
				c-0.212,1.446-0.327,2.924-0.327,4.429C274.579,228.957,288.194,242.573,304.93,242.573z M304.93,226.018
				c-7.608,0-13.796-6.188-13.796-13.796c0-7.607,6.188-13.796,13.796-13.796s13.796,6.188,13.796,13.796
				C318.725,219.83,312.536,226.018,304.93,226.018z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h2 class="mt-0">VISION</h2>
                            <h4 class="mt-2">A1's Vision is to be a world-class leading real estate provider. We are your
                                trusted
                                strategic partner in creating wealth and valuable sustainable investments. We demonstrate a
                                high standard in every aspect of our business and we offer cutting-edge ethical solutions
                                and expert advice.</h4>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-5 ">
                            <div class="mb-3">
                                <svg fill="#000000" height="70px" width="70px" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M508.016,112.284c-1.225-2.957-4.109-4.884-7.309-4.884h-99.489V7.911c0-3.2-1.927-6.084-4.884-7.309
			c-2.953-1.224-6.358-0.549-8.621,1.715l-56.681,56.681c-0.002,0.002-0.004,0.003-0.005,0.005
			c-0.002,0.002-0.003,0.004-0.005,0.005l-53.692,53.692c-1.484,1.483-2.317,3.496-2.317,5.594v9.299
			c-23.085-9.073-47.444-13.678-72.588-13.678c-109.752,0-199.042,89.29-199.042,199.042S92.671,512,202.424,512
			s199.042-89.29,199.042-199.042c0-27.707-5.541-54.339-16.467-79.352h5.324c2.098,0,4.11-0.833,5.594-2.317l53.699-53.699
			c0.001-0.001,0.002-0.002,0.002-0.002l56.684-56.684C508.563,118.642,509.241,115.24,508.016,112.284z M344.534,67.871
			l40.862-40.862v85.025l-40.862,40.862V67.871z M290.834,139.573v-18.002h0l37.879-37.879v85.025L300.86,196.57l-9.372,9.372
			c-0.218-0.182-0.436-0.365-0.655-0.545V139.573z M275.013,213.156v9.263h-0.001l-19.977,19.977
			c-15.168-11.334-33.581-17.512-52.61-17.512c-48.564,0-88.074,39.51-88.074,88.074s39.51,88.074,88.074,88.074
			s88.074-39.51,88.074-88.074c0-22.307-8.542-43.737-23.668-59.982l19.37-19.37h10.739c18.701,22.24,28.966,50.278,28.966,79.352
			c0,68.088-55.394,123.48-123.48,123.48c-68.088,0-123.48-55.394-123.48-123.48s55.394-123.48,123.48-123.48
			C228.797,189.477,253.806,197.664,275.013,213.156z M199.777,308.841c1.544,1.544,3.569,2.317,5.593,2.317
			s4.049-0.772,5.593-2.317l17.787-17.787c5.107,6.107,7.953,13.791,7.953,21.903c0,18.902-15.379,34.28-34.28,34.28
			c-18.903,0-34.28-15.379-34.28-34.28s15.378-34.28,34.28-34.28c4.736,0,9.306,0.955,13.539,2.79l-16.187,16.187
			C196.688,300.743,196.688,305.753,199.777,308.841z M227.693,269.737c-7.637-4.465-16.389-6.881-25.269-6.881
			c-27.627,0-50.102,22.475-50.102,50.102c0,27.626,22.475,50.102,50.102,50.102c27.626,0,50.102-22.476,50.102-50.102
			c0-12.359-4.496-24.039-12.55-33.128l15.658-15.658c12.175,13.28,19.042,30.683,19.042,48.786
			c0,39.84-32.412,72.252-72.252,72.252c-39.84,0-72.252-32.412-72.252-72.252c0-39.84,32.412-72.252,72.252-72.252
			c14.83,0,29.203,4.588,41.275,13.026L227.693,269.737z M385.644,312.957c0,101.029-82.192,183.222-183.221,183.222
			S19.203,413.986,19.203,312.958s82.192-183.221,183.221-183.221c25.257,0,49.65,5.029,72.588,14.956v49.425
			c-21.805-13.415-46.608-20.463-72.588-20.463c-76.812,0-139.302,62.491-139.302,139.302s62.491,139.302,139.302,139.302
			c76.812,0,139.302-62.491,139.302-139.302c0-28.512-8.747-56.137-24.884-79.352h50.752
			C379.569,258.434,385.644,285.103,385.644,312.957z M387.047,217.784H372.5h-68.455c-0.326-0.348-0.659-0.69-0.988-1.035
			l8.992-8.992l27.852-27.852h85.025L387.047,217.784z M440.747,164.085h-85.025l40.862-40.862h85.025L440.747,164.085z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h2 class="mt-0">MISSION</h2>
                            <h4 class="mt-2">A1’s Mission is to build trustworthy partnerships, drive excellence, and
                                provide premium services to all our stakeholders.

                            </h4>
                        </div>
                    </div>
                </div>
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 text-center">
                    <div class="row">
                        <h1 class="text-center">Our Values</h1>
                        <h4>At A1 Properties, we thrive on being inspirational and knowledgeable. We believe in
                            accountability, integrity, leadership, professionalism, credibility, diversity, dedication to
                            excellence, and finesse.</h4>
                    </div>
                </div>
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 align-center mb-7">
                    <!-- Replace "your_video.mp4" with your actual video file or URL -->
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/ypu71CLqhg4" frameborder="0"
                        allowfullscreen></iframe>

                </div>
            </section>

            <section></section>
        </div>
    </main>
    <Footer></Footer>
</template>

<script>
import Nav from '../components/Nav.vue';
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
import SearchFilterDropdown from '../components/SearchFilterModal.vue';

export default {
    components: {
        Nav, Header, Footer, SearchFilterDropdown
    },
    data() {
        return {
            backendUrl: 'https://a1properties.ae/backend/'

            // backendUrl: 'http://192.168.2.46:8000/',
        }
    },
    methods: {

    }
}
</script>


<style scoped>
.about-img {
    position: relative;
    border-radius: 5%;
    box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.5);
}
.g-col-3 {
    display: flex;
    flex-direction: column;
    /* Arrange children in a column */
}


.text-center {
    text-align: center;
    /* Center the text in the container */
}

.para-spacing {
    line-height: 30px;
}

.align-center {
    align-items: center;
}

.align-items-center {
    align-items: center !important;
}

.text-center {
    text-align: center !important;
}

/* Rainbow effect on button */

.a-btn {
    font-size: 14px;
    line-height: 18px;
    letter-spacing: 2px;
    font-weight: 500;
    display: inline-block;
    text-decoration: none;
    position: relative;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 15px 46px;
    background-color: transparent;
    border: none;
    color: #000;
    -webkit-transition: color 0.3s ease-in, background-color 0.3s ease-in;
    -o-transition: color 0.3s ease-in, background-color 0.3s ease-in;
    transition: color 0.3s ease-in, background-color 0.3s ease-in;
}

.a-btn:after,
.a-btn:before {
    content: "";
    display: block;
    position: absolute;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.a-btn:after {
    top: 0;
    left: 0;
}

.a-btn:before {
    bottom: 0;
    right: 0;
}


.a-btn.creative:after,
.a-btn.creative:before {
    border: 2px solid transparent;
    width: 0;
    height: 0;

}



.a-btn.creative.anima:after,
.a-btn.creative.anima:before {
    width: 100%;
    height: 100%;
    animation: borderExpand 3s infinite;
    /* Adjust the duration as needed */
}

@keyframes borderExpand {
    0% {
        width: 0;
        height: 0;
        border-top-color: transparent;
        border-right-color: transparent;
    }

    50% {
        width: 100%;
        height: 100%;
        border-top-color: #c67057;
        border-right-color: #c67057;
        border-bottom-color: #c67057;
        border-left-color: #c67057;
    }

    100% {
        width: 0;
        height: 0;
        border-bottom-color: transparent;
        border-left-color: transparent;
    }
}

.a-btn.creative.anima:before {
    width: 100%;
    height: 100%;
    animation: borderShrink 5s infinite;
    /* Adjust the duration as needed */
}

@keyframes borderShrink {
    0% {
        width: 0;
        height: 0;
        border-bottom-color: transparent;
        border-left-color: transparent;
    }

    50% {
        width: 100%;
        height: 100%;
        border-top-color: #000;
        border-right-color: #000;
        border-bottom-color: #000;
        border-left-color: #000;
    }

    100% {
        width: 0;
        height: 0;
        border-top-color: transparent;
        border-right-color: transparent;
    }
}
</style>
