<template>
    <button class="" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Main navigation menu"
        style="background-color:none !important;">
        <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Menu / Menu_Alt_05">
                <path id="Vector" d="M5 17H13M5 12H19M11 7H19" :stroke="strokeColor" stroke-width="1" stroke-linecap="round"
                    stroke-linejoin="round" />
            </g>
        </svg>
    </button>
    <nav class="dropdown-menu dropdown-menu-end menu-groups-dropdown" data-theme="light">
        <div class="menu-groups">
            <div class="menu-groups__col menu-groups__col--main">
                <ul class="menu-group" id="menu-groups-accordion-wide">
                    <li>
                        <a class="" href="#" @click="goToPath('/')">Home</a>
                    </li>
                    <li>
                        <a class="" href="#" @click="goToPage('PropertyListings', { param: 'sale' })">Buy</a>
                    </li>
                    <li>
                        <a class="" href="#" @click="goToPage('PropertyListings', { param: 'rent' })">Rent</a>
                    </li>
                    <li>
                        <a class="" @click="goToPath('/list-property')">List</a>
                    </li>
                    <li>
                        <router-link to="/projects">Projects</router-link>
                    </li>
                    <li>
                        <router-link to="/communities">Communities</router-link>
                    </li>
                    <li>
                    <router-link to="/developers">Developers</router-link>
                    </li>
                    <!-- <li>
                        <a class="" href="#" @click="goToPage('Services')">Services</a>
                    </li> -->
                    <li>
                        <router-link to="/blogs">Blog</router-link>
                    </li>
                    <li>
                        <router-link to="/about-us">About</router-link>
                    </li>
                    <li>
                        <router-link to="/team">The Team</router-link>
                    </li>
                    <li>
                        <router-link to="/contact-us">Contact Us</router-link>
                    </li>
                    <li class="rak-place">
                        <img src="https://a1properties.ae/backend/storage/a1/rak-logo-home-black.png">
                        <a class="" href="https://rak.a1properties.ae/" target="_blank">A1 RAK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
import * as constants from '../constants.js';

export default {
    name: 'Nav',
    components: {
        constants
    },
    data() {
        return {
            homeRoute: '#000',
        };
    },
    mounted() {

    },
    computed: {
        strokeColor() {
            return this.$route.path === '/' ? '#fff' : this.homeRoute;
        },
        isHomePage() {
            // Check if the current route is the homepage
            return this.$route.path === '/';
        },
    },
    beforeUnmount() {
    },
    created() {
    },
    methods: {
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
        goToPath(path){
            console.log(path)
            this.$router.push(path)
        },


        handleClick() { }
    },
}
</script>

<style scoped="scss">
a {
    font-weight: 600;
}

.menu-group {
    display: flex;
    flex-direction: column;
    align-items: center;
    list-style: none;
    padding: 0;
    margin: 0;
}

.menu-group li {
    margin: 3px;
    /* Optional margin between list items */
    text-align: center;

}

.menu-group li a:hover {
    cursor: pointer;
}

.menu-group>li a,
.menu-group__btn {
    margin: 0px;

}

.menu-group>li a:hover,
.menu-group__btn:hover {
    background-color: transparent;
    border-bottom: 1px solid #c67057;
    box-sizing: border-box;
    /* Include border in height and width */

}

.menu-group__btn a:hover {
    background-color: transparent;
    border-bottom: 1px solid #c67057;
    box-sizing: border-box;
    /* Include border in height and width */

}

.rak-link:hover {
    color: #c67058;
}

@media only screen and (max-width: 600px) {

    .rak-link {
        font-weight: 300;
        font-size: 12px;
        margin-right: 15px;
    }

    .rak-place img {
        width: 25px;
        height: 25px;
        margin-right: 13px;
    }
    .rak-place {

        padding-right: 20px !important;


    }
}

.rak-place {
    display: flex;
    align-items: center;
    border: 1px solid #27367A;
    border-radius: 20px;
    padding-left: 20px;
    padding-right: 5px;
    padding-top: 3px;
    padding-bottom: 3px;
    margin-left: 20px !important;
    margin-right: 20px !important;
    color: #27367A;
    transition: background 0.6s ease;
    /* Add transition for a smooth effect */

}

.rak-place:hover {
    background: linear-gradient(to bottom, #ffffff, #ffffff, #27367A);
    /* Adjust the colors as needed */
}

.rak-place img {
    width: 25px;
    height: 25px;
}

.rak-place a {
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
}

.rak-place a:hover {
    border-bottom: transparent !important;
}
</style>
