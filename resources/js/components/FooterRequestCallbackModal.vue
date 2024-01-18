<template>
    <div class="modal fade learn-more-modal-outside" id="requestCallback" tabindex="-1"
        aria-labelledby="listing-body-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-learn-more">
            <div class="modal-content request-callback-content">

                <button type="button" style="position:absolute; right:0px;top:0px;" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close" ref="Close"></button>
                    <span v-if="!requestSent" class="please-wait">
                        Please wait ...
                    </span>
                <div class="modal-body listing-body-modal ">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="signin-account-tab-pane" role="tabpanel"
                            aria-labelledby="signin-account-tab" tabindex="0">

                            <h4 class="h3 text-center mt-0 heading-learn-more"><span
                                    style="color:#7D7D7D;font-weight:800;">REQUEST A CALL BACK<span
                                        style="font-weight: 800;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">!</span>
                                </span><br>

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
    name: 'FooterRequestCallbackModal',
    components: {
    },
    props: {
        formType: String
    },
    data() {
        return {
            //formValues
            countryData: {},
            dialCode: "",
            name: "",
            phone: "",
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
                        formLocation: '(Call Back Request)',
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
.request-callback-content {
    padding: 20px;
    margin: 10px;
    border-radius: 0px;
    background-image: url('https://a1properties.ae/backend/storage/a1/dubai-bg.webp');
    background-size: cover;
    background-position: left 0px top 7px !important;
    background-repeat: no-repeat;
    box-shadow: 0px 8px 8px 8px rgba(0, 0, 0, 1);
}
.please-wait {
    position: absolute;
    font-weight: 600;
    font-size: 19px;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    color:#c67057;
    background: rgba(182, 182, 182, 0.8);
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    pointer-events: none;
}
.form-floating > .form-control:not(:placeholder-shown) ~ label::after{
    background-color: transparent !important;
}
.please-wait {
    position: absolute;
    font-weight: 600;
    font-size: 19px;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    color:#c67057;
    background: rgba(182, 182, 182, 0.8);
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    pointer-events: none;
}
.form-floating > .form-control:not(:placeholder-shown) ~ label::after{
    background-color: transparent !important;
}

.has-error input {
    border-color: red !important;
}

.error-message {
    color: red;
    font-size: 12px;
    margin-top: 5px;
}

</style>
