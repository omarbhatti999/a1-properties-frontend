<template>
    <div :class="{ 'show': showFilters, 'left-align': showFilters }"
        class="search-bar__filters dropdown-menu new-dropdown-filter" aria-labelledby="home_-search-bar-filters-btn"
        data-filters-panel ref="dropdownPanel">
        <ul class="button-list mb-0" role="tablist" v-if="showFilters">
            <li class="button-list-item nav-item" role="presentation">
                <button class="custom-button nav-link active" id="villas-new-tab" data-tab-has-flickity data-bs-toggle="tab"
                    data-bs-target="#villas-new-tab-pane" type="button" role="tab" aria-controls="villas-new-tab-pane"
                    aria-selected="true" @click="propertyCategory('sale')">Buy
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="custom-button nav-link " id="villas-reductions-tab" data-tab-has-flickity
                    data-bs-toggle="tab" data-bs-target="#villas-new-tab-pane" type="button" role="tab"
                    aria-controls="villas-reductions-tab-pane" aria-selected="true" @click="propertyCategory('rent')">Rent</button>
            </li>
        </ul>
        <fieldset class="search-form__group" :class="showFilters ?? 'mt-5'">
            <legend class="search-form__legend">Property Type</legend>
            <ul class="search-form-checks-cols">
                <li class="search-form-checks-cols__item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="home_villa" name="type[]" value="apartment"
                            v-model="selectedPropertyTypes">
                        <label class="form-check-label" for="home_villa">Apartments</label>
                    </div>
                </li>
                <li class="search-form-checks-cols__item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="home_apartment" name="type[]" value="townhouse"
                            v-model="selectedPropertyTypes">
                        <label class="form-check-label" for="home_apartment">Townhouses</label>
                    </div>
                </li>
                <li class="search-form-checks-cols__item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="home_penthouse" name="type[]" value="villa"
                            v-model="selectedPropertyTypes">
                        <label class="form-check-label" for="home_penthouse">Villas</label>
                    </div>
                </li>
                <li class="search-form-checks-cols__item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="home_loft-duplex" name="type[]"
                            value="penthouse" v-model="selectedPropertyTypes">
                        <label class="form-check-label" for="home_loft-duplex">Penthouses</label>
                    </div>
                </li>
                <li class="search-form-checks-cols__item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="home_loft-duplex" name="type[]" value="office"
                            v-model="selectedPropertyTypes">
                        <label class="form-check-label" for="home_loft-duplex">Offices</label>
                    </div>
                </li>
                <li class="search-form-checks-cols__item">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="home_townhouses" name="type[]" value="plot"
                            v-model="selectedPropertyTypes">
                        <label class="form-check-label" for="home_townhouses">Plots</label>
                    </div>
                </li>
            </ul>
            <fieldset class="search-form__group ">
                <legend class="search-form__legend">Bedrooms</legend>
                <div class="search-form-selects-group">
                    <div class="search-form-selects-group__select">
                        <div class="form-floating">
                            <select class="form-select" id="home_min-size" name="size[min]"
                                aria-label="Select minimum bedroom" v-model="selectedMinBedrooms">
                                <option value="">
                                    Select
                                </option>
                                <option value="studio">
                                    Studio
                                </option>
                                <option value="1">
                                    1 Bedroom
                                </option>
                                <option value="2">
                                    2 Bedrooms
                                </option>
                                <option value="3">
                                    3 Bedrooms
                                </option>
                                <option value="4">
                                    4 Bedrooms
                                </option>
                                <option value="5">
                                    5 Bedrooms
                                </option>
                                <option value="6">
                                    6 Bedrooms
                                </option>
                                <option value="7">
                                    7 Bedrooms
                                </option>
                                <option value="8">
                                    8 Bedrooms
                                </option>
                                <option value="9">
                                    9 Bedrooms
                                </option>
                                <option value="10">
                                    10 Bedrooms
                                </option>
                            </select>
                            <label for="home_min-size">Min.
                            </label>
                        </div>
                    </div>
                    <div class="search-form-selects-group__separator" tabindex="-1">-
                    </div>
                    <div class="search-form-selects-group__select">
                        <div class="form-floating">
                            <select class="form-select" id="home_min-size" name="size[max]"
                                aria-label="Select maximum bedroom" v-model="selectedMaxBedrooms">
                                <option value="">
                                    Select
                                </option>
                                <option value="studio">
                                    Studio
                                </option>
                                <option value="1">
                                    1 Bedroom
                                </option>
                                <option value="2">
                                    2 Bedrooms
                                </option>
                                <option value="3">
                                    3 Bedrooms
                                </option>
                                <option value="4">
                                    4 Bedrooms
                                </option>
                                <option value="5">
                                    5 Bedrooms
                                </option>
                                <option value="6">
                                    6 Bedrooms
                                </option>
                                <option value="7">
                                    7 Bedrooms
                                </option>
                                <option value="8">
                                    8 Bedrooms
                                </option>
                                <option value="9">
                                    9 Bedrooms
                                </option>
                                <option value="10">
                                    10 Bedrooms
                                </option>
                            </select>
                            <label for="home_min-size">Max.
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
        </fieldset>
        <fieldset class="search-form__group ">
            <legend class="search-form__legend">Price</legend>
            <div class="search-form-selects-group">

                <div class="search-form-selects-group__select">
                    <div class="form-floating">
                        <select class="form-select" id="home_max-price" name="price[max]" aria-label="Select maximum price"
                            v-model="selectedMaxPrice">
                            <option value="">Select</option>
                            <option value="500000">
                                500,000
                                AED
                            </option>
                            <option value="100000">
                                1,000,000
                                AED
                            </option>
                            <option value="200000">
                                2,000,000
                                AED
                            </option>
                            <option value="300000">
                                3,000,000
                                AED
                            </option>
                            <option value="400000">
                                4,000,000
                                AED
                            </option>
                            <option value="500000">
                                5,000,000
                                AED
                            </option>
                            <option value="600000">
                                6,000,000
                                AED
                            </option>
                            <option value="700000">
                                7,000,000
                                AED
                            </option>
                            <option value="800000">
                                8,000,000
                                AED
                            </option>
                            <option value="900000">
                                9,000,000
                                AED
                            </option>
                            <option value="10000000">
                                10,000,000
                                AED
                            </option>
                            <option value="15000000">
                                15,000,000
                                AED
                            </option>
                            <option value="20000000">
                                20,000,000
                                AED
                            </option>
                            <option value="25000000">
                                25,000,000
                                AED
                            </option>
                            <option value="30000000">
                                30,000,000
                                AED
                            </option>
                            <option value="35000000">
                                35,000,000
                                AED
                            </option>
                            <option value="40000000">
                                40,000,000
                                AED
                            </option>
                            <option value="45000000">
                                45,000,000
                                AED
                            </option>
                            <option value="50000000">
                                50,000,000
                                AED
                            </option>
                            <option value="60000000">
                                60,000,000
                                AED
                            </option>
                            <option value="70000000">
                                70,000,000
                                AED
                            </option>
                            <option value="80000000">
                                80,000,000
                                AED
                            </option>
                            <option value="90000000">
                                90,000,000
                                AED
                            </option>
                            <option value="100000000">
                                100,000,000
                                AED
                            </option>
                            <option value="125000000">
                                125,000,000
                                AED
                            </option>
                            <option value="150000000">
                                150,000,000
                                AED
                            </option>
                            <option value="175000000">
                                175,000,000
                                AED
                            </option>
                            <option value="200000000">
                                200,000,000
                                AED
                            </option>
                            <option value="225000000">
                                225,000,000
                                AED
                            </option>
                            <option value="250000000">
                                250,000,000
                                AED
                            </option>
                            <option value="275000000">
                                275,000,000
                                AED
                            </option>
                            <option value="300000000">
                                300,000,000
                                AED
                            </option>
                            <option value="325000000">
                                325,000,000
                                AED
                            </option>
                            <option value="350000000">
                                350,000,000
                                AED
                            </option>
                            <option value="375000000">
                                375,000,000
                                AED
                            </option>
                            <option value="400000000">
                                400,000,000
                                AED
                            </option>
                            <option value="425000000">
                                425,000,000
                                AED
                            </option>
                            <option value="450000000">
                                450,000,000
                                AED
                            </option>
                            <option value="475000000">
                                475,000,000
                                AED
                            </option>
                            <option value="500000000">
                                500,000,000
                                AED
                            </option>
                        </select>
                        <label for="home_max-price">Max.
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="modal-footer search-form__footer btn-centered">
            <div class="btn-centered">
                <button data-bs-dismiss="modal" @click="toListings()" type="button" class="btn btn-ghost mt-6 btn-block  btn-learn-more">
                    Search
                </button>
            </div>
        </div>


    </div>
</template>

<script>
export default {
    name: 'HomeFilterDropdown',
    components: {
    },
    data() {
        return {
            selectedPropertyTypes: [],
            selectedMinBedrooms: '',
            selectedMaxBedrooms: '',
            selectedMaxPrice: '',
            propertyCategoryType:'sale',
        }
    },
    props: {
        showFilters: {
            type: Boolean,
            default: false,
        },
        propertyCategory: {
            type: String,
            default: 'sale', // Set a default value if needed
        },
    },
    methods: {
        propertyCategory(type){
            this.propertyCategoryType = type;
        },
        toListings() {
            const queryParams = {
                category: this.propertyCategory == 'rent' ? this.propertyCategory : this.propertyCategoryType,
                propertyTypes: this.selectedPropertyTypes,
                minBedrooms: this.selectedMinBedrooms,
                maxBedrooms: this.selectedMaxBedrooms,
                maxPrice: this.selectedMaxPrice,
            };
            const queryString = Object.entries(queryParams)
                .filter(([key, value]) => value !== undefined && value !== null && value !== '')
                .map(([key, value]) => `${key}=${encodeURIComponent(value)}`)
                .join('&');
            this.$router.push({ path: '/properties', query: { params: queryString } });
            this.$nextTick(() => {
            // Use $nextTick to ensure the modal has fully opened before attempting to close it
            const dropdownPanel = this.$refs.dropdownPanel;

// Check if the dropdown is open before attempting to close it
if (dropdownPanel.classList.contains('show')) {
    // Close the Bootstrap dropdown
    dropdownPanel.classList.remove('show');
}
        });
        }

    }
}
</script>

<style scoped="scss">
.new-dropdown-filter {
    width: 70%;
    left: 15% !important;

}

.show {
    display: block;
}

.left-align {
    border-top-left-radius: 5%;
    width: 100%;
    top: 50%;
    left: -100% !important;
}

.button-list {
    list-style-type: none;
    padding: 0;
    display: flex;
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

.btn-centered {
    display: flex;
    justify-content: center;
    flex-wrap: nowrap;
    text-align: center;
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

.btn-block {
    border: 1px solid #c67057 !important;
}
</style>
