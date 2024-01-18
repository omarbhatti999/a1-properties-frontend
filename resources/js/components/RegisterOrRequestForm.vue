<template>
    <div class="modal fade learn-more-modal-outside" id="learnMoreModal" tabindex="-1"
        aria-labelledby="listing-body-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-learn-more">
            <div class="modal-content learn-more-modal-content"
                :class="{ 'request-form-modal-content': formType == 'REQUEST' || formType == 'REGISTER' }">
                <!-- <div class="modal-header">
                     <h5 class="modal-title" id="listing-body-modal-title">TIRED OF SEARCHING?<br>
                        LET AI & EXPERTS
                        DO THE WORK</h5>
                    </div> -->
                <button type="button" style="position:absolute; right:0px;top:0px;" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close" ref="Close"></button>
                <span v-if="!requestSent" class="please-wait">
                    Please wait ...
                </span>
                <div class="modal-body listing-body-modal ">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="signin-account-tab-pane" role="tabpanel"
                            aria-labelledby="signin-account-tab" tabindex="0">


                            <h4 class="h3 text-center mt-0 heading-learn-more" v-if="formType == 'REGISTER'"><span
                                    style="color:#7D7D7D;font-weight:800;">REGISTER YOUR INTEREST</span><br>
                                Please fill your contact information
                            </h4>
                            <h4 class="h3 text-center mt-0 heading-learn-more" v-else-if="formType == 'REQUEST'"><span
                                    style="color:#7D7D7D;font-weight:800;">REQUEST DETAILS</span><br>
                                Please fill your contact information</h4>
                            <h4 class="h3 text-center mt-0 heading-learn-more" v-else><span
                                    style="color:#7D7D7D;font-weight:800;">TIRED OF SEARCHING?</span>
                                <br>
                                <span style="color:#c67057">LET AI & EXPERTS<br>
                                    DO THE WORK</span>
                            </h4>
                            <div class="vstack gap-2">
                                <div class="form-floating mb-2" :class="{ 'has-error': validationErrors.name }">
                                    <input id="nameInput" name="name" type="text" class="form-control" v-model="name"
                                        placeholder="" required @input="clearError('name')">
                                    <label class="form-label" for="nameInput">Name</label>
                                    <div class="error-message" v-if="validationErrors.name">Name is required.</div>
                                </div>
                                <div class="form-floating mb-2" :class="{ 'has-error': validationErrors.phone }">
                                    <vue-tel-input class="form-control pleft-0" type="number" v-model="phone"
                                        v-bind="bindProps" @on-input="handleTelInput"
                                        @input="clearError('phone')"></vue-tel-input>
                                    <div class="error-message" v-if="validationErrors.phone">Phone is required.</div>
                                </div>
                                <div class="form-floating mb-2" :class="{ 'has-error': validationErrors.email }">
                                    <input id="emailInput" name="email" type="email" class="form-control" v-model="email"
                                        placeholder="E-mail address" value autocomplete="email" required
                                        @input="clearError('email')">
                                    <label class="form-label" for="emailInput">Email</label>
                                    <div class="error-message" v-if="validationErrors.email">Email is required.</div>
                                </div>
                                <div class="form-floating mb-2" v-if="formType != 'REQUEST' && formType != 'REGISTER'">
                                    <input id="" name="searchingFor" v-model="searchingFor" type="text" class="form-control"
                                        placeholder="" required>
                                    <label for="" class="form-label">Searching for<span
                                            style="font-family:'Arial Narrow', Arial, sans-serif;font-size:14px;">?</span></label>
                                </div>
                                <div class="mb-4 mt-5 align-center btn-submit-learn-more">
                                    <button type="submit" id="signin-trigger" class="btn btn-color-black btn-block"
                                        @click="sendRequest">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'RegisterOrRequestForm',
    components: {
    },
    props: {
        formType: String,
        slug:String,
    },
    data() {
        return {
            countryData: {},
            dialCode: "",
            name: "",
            phone: "",
            email: "",
            searchingFor: "",
            bindProps: {
                defaultCountry: 'AE',
                placeholder: 'Enter your phone number',
                showDialCodeInList: true,
                showDialCodeInSelection: true,
                showDialCode: true,
                countryCode: true,

            },
            dataArray: [],
            showAlert: false,
            validationErrors: {},
            isSubmitting: false,
            requestSent: true,

        }
    },
    computed: {
        hasErrors() {
            return Object.keys(this.validationErrors).length > 0;
        },
    },
    methods: {
        //Form Code
        validateForm() {
            this.validationErrors = {};

            if (!this.name) {
                this.validationErrors.name = true;
            }

            if (!this.phone) {
                this.validationErrors.phone = true;
            }
            if (!this.email) {
                this.validationErrors.email = true;
            }

            // Add similar validation logic for other fields if needed

            return Object.keys(this.validationErrors).length === 0;
        },
        clearError(fieldName) {
            // Clear the error for the specified field when the user starts typing
            this.validationErrors[fieldName] = false;
        },
        clearForm() {
            this.name = '';
            this.phone = '';
            this.email = '';
            this.searchingFor = '';
        },
        //form request
        async sendRequest() {
            try {
                this.validationErrors = {};

                if (this.validateForm()) {
                    this.requestSent = false;
                    const response = await axios.post('/api/lead-request', {
                        countryData: this.countryData,
                        mobileNo: this.phone,
                        name: this.name,
                        email: this.email,
                        searchingFor: this.searchingFor,
                        formLocation: "",
                        pageUrl: window.location.href
                    }, {
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    });

                    if (response.status === 200) {
                        this.showAlert = true;
                        this.$refs.Close.click();
                        // Hide the alert after a certain time (e.g., 5 seconds)
                        setTimeout(() => {
                            this.showAlert = false;

                            // Close the modal when the submission is successful
                            // Adjust the following line based on your modal library
                            // Example: $('#yourModal').modal('hide');
                            // Make sure to replace 'yourModal' with your actual modal ID or class
                        }, 5000);
                        this.requestSent = true;
                        this.clearForm();
                    }
                }
            } catch (error) {
                // Handle errors if needed
            } finally {
                this.isSubmitting = false;
            }
        },

        handleTelInput(phone, phoneObject) {
            if (phoneObject?.formatted) {
                this.countryData = phoneObject.country;
            }
        },
    }
}
</script>

<style scoped="scss">
.new-dropdown-filter {
    width: 70%;
    left: 15% !important;

}

.request-form-modal-content {
    background-position: left 0px top 80px !important;
}

.has-error input {
    border-color: red !important;
}

.error-message {
    color: red;
    font-size: 12px;
    margin-top: 5px;
}

.please-wait {
    position: absolute;
    font-weight: 600;
    font-size: 19px;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    color: #c67057;
    background: rgba(182, 182, 182, 0.8);
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    pointer-events: none;
}

.form-floating>.form-control:not(:placeholder-shown)~label::after {
    background-color: transparent !important;
}</style>
