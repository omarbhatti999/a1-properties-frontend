<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main>
        <div class="pb-9 vstack mt-5">
            <div class="page-entry" style="row-gap: 1rem;">
                <div class="row">

                </div>
                <div class="g-col-3 g-start-1 g-col-lg-12 text-center mt-5 pt-0">
                    <h1 class="">Contact Us</h1>
                    <h4 class="mt-0">Welcome to A1 Properties, your premier destination for real estate excellence in Dubai.
                        If you have any inquiries, require assistance, or are eager to embark on a journey into the dynamic
                        world of Dubai real estate, our team is here to assist you.
                    </h4>
                    <h4 class="h3 text-center mt-5 heading-learn-more">
                        <span style="color:#7D7D7D;font-weight:800;">Please fill your contact details</span><br>

                    </h4>
                    <div class="col-sm-6" style="margin:auto;">
                        <div class="vstack gap-2">
                            <div class="form-floating mb-2 mt-2">
                                <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                                <label for="name" class="form-label">Name</label>
                            </div>
                            <div class="row mt-2 mb-2">
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


                            <div class="form-floating mb-2">
                                <input id="email" name="email" type="email" class="form-control"
                                    placeholder="E-mail address" required>
                                <label for="email" class="form-label">Message</label>
                            </div>

                            <!-- Add other form inputs here -->
                            <div class="mb-4 mt-5 btn-submit-learn-more">
                                <button type="submit" id="signin-trigger"
                                    class="btn btn-color-black btn-block">Send</button>
                            </div>
                        </div>
                    </div>


                    <h2 class="mb-0">Reach us on:</h2>
                    <h4 class="mt-4 mb-0">
                        <span class="address"><b>Mobile: </b>+971 58 248 9970</span>
                    </h4>
                    <h4 class="mb-0 mt-3">

                        <span class="address"><b>Landline: </b> +971 4 351 5583</span>
                    </h4>
                    <h4 class="mb-0 mt-3">

                        <span class="address"><b>Email: </b>promo@a1properties.ae</span>
                    </h4>
                    <h4 class="mb-5 mt-3">
                        <span class="address"><b>Address: </b>Office 1702, Fairmont Hotel, Dubai, UAE</span>
                    </h4>
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.3048427165963!2d55.28155247538272!3d25.226655477691985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f42ed85069e5f%3A0x9cb481539735cbb!2sA1%20Properties%20%7C%20Dubai%20Real%20Estate!5e0!3m2!1sen!2sae!4v1701351485900!5m2!1sen!2sae"
                            width="800" height="450" style="border:2px solid #999;padding:10px;    box-shadow: inset 0px 0px 5px 5px rgba(76, 76, 76, 0.5);
                        " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>



                </div>


            </div>
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

        }
    },
    methods: {

    }
}
</script>


<style scoped>
/* Add any additional styles for centering or other customizations */

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
</style>
