<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main>
        <div class="pt-6 pb-9 vstack gap-5" data-theme="white">
            <section class="page-entry">
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 text-center">
                    <h1>List Your Property With Us</h1>
                    <h4 class="mt-0">Allow us to give you the highest ROI on your property,
                        No matter where you are
                        your property is in safe hands.</h4>
                </div>
            </section>
            <section class="page-entry">
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 text-center">
                    <img class="img-list-property" :src="backendUrl + 'storage/a1/buy-and-invest-in-property.webp'">
                </div>
            </section>
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-md-4 col-lg-4 col-sm-4">
                    <h4 class="h3 text-center mt-0 heading-learn-more">
                        <span style="color:#7D7D7D;font-weight:800;">PLEASE FILL YOUR <br>PROPERTY DETAILS BELOW</span><br>

                    </h4>


                    <div class="vstack gap-2 mx-5">
                        <div class="row">
                            <div class="form-floating mt-2">
                                <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                                <label for="name" class="form-label">Name</label>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="form-floating mb-2 col-sm-6">
                                <input id="phone" name="phone" type="number" class="form-control" placeholder="Phone"
                                    required>
                                <label for="phone" class="form-label">Phone</label>
                            </div>
                            <div class="form-floating mb-2 col-sm-6">
                                <input id="email" name="email" type="email" class="form-control"
                                    placeholder="E-mail address" required>
                                <label for="email" class="form-label">Email</label>
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <label>Looking to:&nbsp; </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Sell</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Rent</label>
                            </div>

                        </div>
                        <div class="form-floating mb-2">
                            <input id="email" name="email" type="email" class="form-control" placeholder="E-mail address"
                                required>
                            <label for="email" class="form-label">Location</label>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <div class="form-floating">

                                    <select class="form-select" id="home_min-size" name="size[min]"
                                        aria-label="Select type">
                                        <option value="">
                                            Apartment
                                        </option>
                                        <option value="studio">
                                            Townhouses
                                        </option>
                                        <option value="1">
                                            Villas
                                        </option>
                                        <option value="1">
                                            Penthouses
                                        </option>
                                        <option value="1">
                                            Offices
                                        </option>
                                        <option value="1">
                                            Plots
                                        </option>
                                    </select>
                                    <label for="home_min-size">Property Type</label>
                                </div>
                            </div>
                            <div class="mb-2 col-sm-6">
                                <div class="form-floating">

                                    <select class="form-select" id="home_min-size" name="size[min]"
                                        aria-label="Select bedroom">
                                        <option value="studio">
                                            Studio
                                        </option>
                                        <option value="1">
                                            1 Bedroom
                                        </option>
                                        <option value="1">
                                            2 Bedrooms
                                        </option>
                                        <option value="1">
                                            3 Bedrooms
                                        </option>
                                    </select>
                                    <label for="home_min-size">
                                        Bedroom</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-floating mb-2 col-sm-4">
                                <input id="phone" name="phone" type="number" class="form-control" placeholder="Phone"
                                    required>
                                <label for="phone" class="form-label">Size (Sq. ft.)</label>
                            </div>
                            <div class="form-floating mb-2 col-sm-4">
                                <input id="email" name="email" type="number" class="form-control" placeholder="Unit No."
                                    required>
                                <label for="email" class="form-label">Unit No.</label>
                            </div>
                            <div class="form-floating mb-2 col-sm-4">
                                <input id="email" name="email" type="number" class="form-control"
                                    placeholder="E-mail address" required>
                                <label for="email" class="form-label">Price</label>
                            </div>
                        </div>
                        <div class="form-floating mb-2 col-sm-12">
                            <input id="email" name="email" type="file" class="form-control" placeholder="E-mail address"
                                required>
                            <label for="email" class="form-label">Upload Multiple Images</label>
                        </div>
                        <!-- Add other form inputs here -->
                        <div class="mb-4 mt-5 btn-submit-learn-more">
                            <button type="submit" id="signin-trigger" class="btn btn-color-black btn-block">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <Footer></Footer>
</template>

<script>
import { defineAsyncComponent } from 'vue';
const Header = defineAsyncComponent(() => import('../components/Header.vue'));
const Footer = defineAsyncComponent(() => import('../components/Footer.vue'));
export default {
    components: {
        Header, Footer
    },
    data() {
        return {
            backendUrl: 'https://a1properties.ae/backend/'
            // backendUrl: 'http://192.168.2.46:8001/',
        }
    },
    methods: {

    }
}
</script>


<style scoped>
/* Add any additional styles for centering or other customizations */
.row {
    display: flex;
    justify-content: center;
}

.align-items-center {
    align-items: center !important;
}

.text-center {
    text-align: center !important;
}

.btn-submit-learn-more {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.img-list-property {
    height: 250px;
}
</style>
