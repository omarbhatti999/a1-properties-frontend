<template>
    <div class="modal fade nav-tray-modal" id="properties-search" tabindex="-1" aria-labelledby="search-modal-title"
        aria-hidden="true" data-nav="search" data-title="Search properties">
        <div class="modal-dialog modal-fullscreen search-modal-dialog">
            <form method="get" action="" class="modal-content search-form search-form--modal filters-root"
                data-gtm-form-interact-id="0">
                <div class="modal-header">
                    <h5 class="modal-title properties-search__title" id="search-modal-title">Search properties</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body search-form__body dropdown">
                    <div class="properties-search__operation">
                        <fieldset class="search-form__group search-form__group--class-opts ">
                            <ul class="search-form-class-opts">
                                <li class="search-form-class-opts__item">
                                    <input type="radio" class="btn-check" id="modal_operation-buy" name="operation"
                                        value="sale" checked="">
                                    <label class="btn btn-text btn-radio-underline fs-3"
                                        for="modal_operation-buy">Buy</label>
                                </li>
                                <li class="search-form-class-opts__item">
                                    <input type="radio" class="btn-check" id="modal_operation-rent" name="operation"
                                        value="rent" data-gtm-form-interact-field-id="0">
                                    <label class="btn btn-text btn-radio-underline fs-3"
                                        for="modal_operation-rent">Rent</label>
                                </li>
                                <li class="search-form-class-opts__item">
                                    <input type="radio" class="btn-check" id="modal_operation-offplan" name="operation"
                                        value="sale" data-id="offplan" data-gtm-form-interact-field-id="1">
                                    <label class="btn btn-text btn-radio-underline fs-3"
                                        for="modal_operation-offplan">Projects</label>
                                    <input type="checkbox" id="modal_availability_off-plan" name="availability"
                                        value="offplan" hidden="">
                                </li>
                            </ul>
                        </fieldset>
                    </div>
                    <div class="search-bar" data-theme="light">
                        <fieldset
                            class="properties-search__location search-form__group search-bar__locations search-form-locations ts-load-container"
                            style="opacity: 1;">
                            <label class="form-label search-form-locations__label"
                                for="modal_select-search-options-ts-control"
                                id="modal_select-search-options-ts-label">Location</label>
                            <select id="modal_select-search-options" name="location" placeholder="Area, development..."
                                class="search-form-locations-options tomselected ts-hidden-accessible" tabindex="-1">
                                <option value=""></option>
                            </select>
                            <div class="ts-wrapper search-form-locations-options single">
                                <div class="ts-control"><input type="select-one" autocomplete="off" size="1" tabindex="0"
                                        role="combobox" aria-haspopup="listbox" aria-expanded="false"
                                        aria-controls="modal_select-search-options-ts-dropdown"
                                        id="modal_select-search-options-ts-control"
                                        aria-labelledby="modal_select-search-options-ts-label"
                                        placeholder="Area, development..."
                                        aria-activedescendant="modal_select-search-options-opt-4"></div>
                                <div class="ts-dropdown single" style="display: none; visibility: visible;">
                                    <div role="listbox" tabindex="-1" class="ts-dropdown-content"
                                        id="modal_select-search-options-ts-dropdown"
                                        aria-labelledby="modal_select-search-options-ts-label">
                                        <div class="optgroup" data-group="area">
                                            <div class="optgroup-header optgroup-header--location">Location</div>
                                            <div class="locations-dropdown-item option active" data-selectable=""
                                                data-value="a44" role="option" id="modal_select-search-options-opt-4"
                                                aria-selected="true">
                                                <span class="locations-dropdown-item__label">Palm Jumeirah</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a373"
                                                role="option" id="modal_select-search-options-opt-5">
                                                <span class="locations-dropdown-item__label">Al Zorah</span>
                                                <span class="locations-dropdown-item__area">Ajman</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a41"
                                                role="option" id="modal_select-search-options-opt-6">
                                                <span class="locations-dropdown-item__label">Downtown Dubai</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a377"
                                                role="option" id="modal_select-search-options-opt-7">
                                                <span class="locations-dropdown-item__label">Uptown Dubai</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a94"
                                                role="option" id="modal_select-search-options-opt-10">
                                                <span class="locations-dropdown-item__label">Jumeirah</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a348"
                                                role="option" id="modal_select-search-options-opt-12">
                                                <span class="locations-dropdown-item__label">Al Wasl</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a109"
                                                role="option" id="modal_select-search-options-opt-16">
                                                <span class="locations-dropdown-item__label">Business Bay</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a372"
                                                role="option" id="modal_select-search-options-opt-18">
                                                <span class="locations-dropdown-item__label">Zabeel First</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a25"
                                                role="option" id="modal_select-search-options-opt-21">
                                                <span class="locations-dropdown-item__label">Emirates Hills</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a342"
                                                role="option" id="modal_select-search-options-opt-23">
                                                <span class="locations-dropdown-item__label">Dubai Hills</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a93"
                                                role="option" id="modal_select-search-options-opt-26">
                                                <span class="locations-dropdown-item__label">Al Barari</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a22"
                                                role="option" id="modal_select-search-options-opt-27">
                                                <span class="locations-dropdown-item__label">Dubai Marina</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a133"
                                                role="option" id="modal_select-search-options-opt-28">
                                                <span class="locations-dropdown-item__label">Mohammed Bin Rashid
                                                    City</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a67"
                                                role="option" id="modal_select-search-options-opt-30">
                                                <span class="locations-dropdown-item__label">Jumeirah Beach
                                                    Residence</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a36"
                                                role="option" id="modal_select-search-options-opt-36">
                                                <span class="locations-dropdown-item__label">Jumeirah Islands</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a341"
                                                role="option" id="modal_select-search-options-opt-39">
                                                <span class="locations-dropdown-item__label">Za'abeel</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="a68"
                                                role="option" id="modal_select-search-options-opt-41">
                                                <span class="locations-dropdown-item__label">The Lakes</span>
                                                <span class="locations-dropdown-item__area">Dubai</span>
                                            </div>
                                        </div>
                                        <div class="optgroup" data-group="development">
                                            <div class="optgroup-header optgroup-header--development">Development</div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1480" role="option" id="modal_select-search-options-opt-8">
                                                <span class="locations-dropdown-item__label">So/ Uptown
                                                    Residences</span>
                                                <span class="locations-dropdown-item__area">Uptown Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d407"
                                                role="option" id="modal_select-search-options-opt-9">
                                                <span class="locations-dropdown-item__label">Royal Villas</span>
                                                <span class="locations-dropdown-item__area">Palm Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1461" role="option" id="modal_select-search-options-opt-11">
                                                <span class="locations-dropdown-item__label">Seaside Hills</span>
                                                <span class="locations-dropdown-item__area">Al Zorah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1468" role="option" id="modal_select-search-options-opt-13">
                                                <span class="locations-dropdown-item__label">Canal Front
                                                    Residences</span>
                                                <span class="locations-dropdown-item__area">Al Wasl</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1469" role="option" id="modal_select-search-options-opt-14">
                                                <span class="locations-dropdown-item__label">Seaside Hills
                                                    Residences</span>
                                                <span class="locations-dropdown-item__area">Al Zorah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d92"
                                                role="option" id="modal_select-search-options-opt-15">
                                                <span class="locations-dropdown-item__label">Signature Villas</span>
                                                <span class="locations-dropdown-item__area">Palm Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1454" role="option" id="modal_select-search-options-opt-17">
                                                <span class="locations-dropdown-item__label">One Za'abeel</span>
                                                <span class="locations-dropdown-item__area">Zabeel First</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1464" role="option" id="modal_select-search-options-opt-19">
                                                <span class="locations-dropdown-item__label">Orla</span>
                                                <span class="locations-dropdown-item__area">Palm Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d342"
                                                role="option" id="modal_select-search-options-opt-20">
                                                <span class="locations-dropdown-item__label">The Crescent</span>
                                                <span class="locations-dropdown-item__area">Palm Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1479" role="option" id="modal_select-search-options-opt-22">
                                                <span class="locations-dropdown-item__label">Baccarat Residences</span>
                                                <span class="locations-dropdown-item__area">Downtown Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1485" role="option" id="modal_select-search-options-opt-24">
                                                <span class="locations-dropdown-item__label">Four Seasons Private
                                                    Residences</span>
                                                <span class="locations-dropdown-item__area">Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1044" role="option" id="modal_select-search-options-opt-25">
                                                <span class="locations-dropdown-item__label">Atlantis The Royal
                                                    Residences</span>
                                                <span class="locations-dropdown-item__area">Palm Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d482"
                                                role="option" id="modal_select-search-options-opt-29">
                                                <span class="locations-dropdown-item__label">One Palm</span>
                                                <span class="locations-dropdown-item__area">Palm Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d469"
                                                role="option" id="modal_select-search-options-opt-31">
                                                <span class="locations-dropdown-item__label">District One</span>
                                                <span class="locations-dropdown-item__area">Mohammed Bin Rashid
                                                    City</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1367" role="option" id="modal_select-search-options-opt-32">
                                                <span class="locations-dropdown-item__label">Dorchester
                                                    Collection</span>
                                                <span class="locations-dropdown-item__area">Business Bay</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1457" role="option" id="modal_select-search-options-opt-33">
                                                <span class="locations-dropdown-item__label">Raffles The Palm</span>
                                                <span class="locations-dropdown-item__area">Palm Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d769"
                                                role="option" id="modal_select-search-options-opt-34">
                                                <span class="locations-dropdown-item__label">1 Jbr</span>
                                                <span class="locations-dropdown-item__area">Jumeirah Beach
                                                    Residence</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d104"
                                                role="option" id="modal_select-search-options-opt-35">
                                                <span class="locations-dropdown-item__label">W Sector</span>
                                                <span class="locations-dropdown-item__area">Emirates Hills</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d979"
                                                role="option" id="modal_select-search-options-opt-37">
                                                <span class="locations-dropdown-item__label">Volante</span>
                                                <span class="locations-dropdown-item__area">Business Bay</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d325"
                                                role="option" id="modal_select-search-options-opt-38">
                                                <span class="locations-dropdown-item__label">Garden Homes</span>
                                                <span class="locations-dropdown-item__area">Palm Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d94"
                                                role="option" id="modal_select-search-options-opt-40">
                                                <span class="locations-dropdown-item__label">Canal Cove Villas</span>
                                                <span class="locations-dropdown-item__area">Palm Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d67"
                                                role="option" id="modal_select-search-options-opt-42">
                                                <span class="locations-dropdown-item__label">Hattan</span>
                                                <span class="locations-dropdown-item__area">The Lakes</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d666"
                                                role="option" id="modal_select-search-options-opt-43">
                                                <span class="locations-dropdown-item__label">Frond G</span>
                                                <span class="locations-dropdown-item__area">Palm Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d427"
                                                role="option" id="modal_select-search-options-opt-44">
                                                <span class="locations-dropdown-item__label">The Address Residence
                                                    Fountain Views</span>
                                                <span class="locations-dropdown-item__area">Downtown Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d415"
                                                role="option" id="modal_select-search-options-opt-45">
                                                <span class="locations-dropdown-item__label">The Address Residence The
                                                    Blvd</span>
                                                <span class="locations-dropdown-item__area">Downtown Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d182"
                                                role="option" id="modal_select-search-options-opt-46">
                                                <span class="locations-dropdown-item__label">Five Palm Jumeirah
                                                    (Viceroy)</span>
                                                <span class="locations-dropdown-item__area">Palm Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d874"
                                                role="option" id="modal_select-search-options-opt-47">
                                                <span class="locations-dropdown-item__label">Il Primo</span>
                                                <span class="locations-dropdown-item__area">Downtown Dubai</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d162"
                                                role="option" id="modal_select-search-options-opt-48">
                                                <span class="locations-dropdown-item__label">The Fairmont
                                                    Residences</span>
                                                <span class="locations-dropdown-item__area">Palm Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1072" role="option" id="modal_select-search-options-opt-49">
                                                <span class="locations-dropdown-item__label">La Mer</span>
                                                <span class="locations-dropdown-item__area">Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable="" data-value="d136"
                                                role="option" id="modal_select-search-options-opt-50">
                                                <span class="locations-dropdown-item__label">Emirates Crown</span>
                                                <span class="locations-dropdown-item__area">Dubai Marina</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1150" role="option" id="modal_select-search-options-opt-51">
                                                <span class="locations-dropdown-item__label">District One Villas</span>
                                                <span class="locations-dropdown-item__area">Mohammed Bin Rashid
                                                    City</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1449" role="option" id="modal_select-search-options-opt-52">
                                                <span class="locations-dropdown-item__label">Six Senses
                                                    Residences</span>
                                                <span class="locations-dropdown-item__area">Palm Jumeirah</span>
                                            </div>
                                            <div class="locations-dropdown-item option" data-selectable=""
                                                data-value="d1466" role="option" id="modal_select-search-options-opt-53">
                                                <span class="locations-dropdown-item__label">One&amp;Only
                                                    Penthouses</span>
                                                <span class="locations-dropdown-item__area">Za'abeel</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <button class="btn btn-link search-bar__filters-btn show" type="button"
                            id="modal_-search-bar-filters-btn" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="true" data-filters-control="" data-count="2">
                            Filters
                        </button>
                        <button class="btn btn-lg btn-ghost mt-5 search-bar__filters-mb-btn d-lg-none" type="button"
                            hidden="">Show filters</button>
                        <div class="search-bar__filters dropdown-menu" aria-labelledby="modal_-search-bar-filters-btn"
                            data-filters-panel=""
                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(431px, 64.5px, 0px);"
                            data-popper-placement="bottom-start">
                            <fieldset class="search-form__group ">
                                <legend class="search-form__legend">Type</legend>
                                <ul class="search-form-checks-cols">
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="modal_villa" name="type[]"
                                                value="villas">
                                            <label class="form-check-label" for="modal_villa">Villa</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="modal_apartment"
                                                name="type[]" value="apartments">
                                            <label class="form-check-label" for="modal_apartment">Apartment</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="modal_penthouse"
                                                name="type[]" value="penthouses">
                                            <label class="form-check-label" for="modal_penthouse">Penthouse</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="modal_loft-duplex"
                                                name="type[]" value="lofts-and-duplexes">
                                            <label class="form-check-label" for="modal_loft-duplex">Loft &amp;
                                                Duplex</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="modal_townhouses"
                                                name="type[]" value="townhouses">
                                            <label class="form-check-label" for="modal_townhouses">Townhouse</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="modal_plot" name="type[]"
                                                value="plots">
                                            <label class="form-check-label" for="modal_plot">Plot</label>
                                        </div>
                                    </li>
                                </ul>
                            </fieldset>
                            <fieldset class="search-form__group ">
                                <legend class="search-form__legend">Price</legend>
                                <div class="search-form-selects-group">
                                    <div class="search-form-selects-group__select">
                                        <div class="form-floating">
                                            <select class="form-select" id="modal_min-price" name="price[min]"
                                                aria-label="Select minimum price">
                                                <option value="default">Any</option>







































                                                <option value="1000000">1,000,000</option>
                                                <option value="2000000">2,000,000</option>
                                                <option value="3000000">3,000,000</option>
                                                <option value="4000000">4,000,000</option>
                                                <option value="5000000">5,000,000</option>
                                                <option value="6000000">6,000,000</option>
                                                <option value="7000000">7,000,000</option>
                                                <option value="8000000">8,000,000</option>
                                                <option value="9000000">9,000,000</option>
                                                <option value="10000000">10,000,000</option>
                                                <option value="15000000">15,000,000</option>
                                                <option value="20000000">20,000,000</option>
                                                <option value="25000000">25,000,000</option>
                                                <option value="30000000">30,000,000</option>
                                                <option value="35000000">35,000,000</option>
                                                <option value="40000000">40,000,000</option>
                                                <option value="45000000">45,000,000</option>
                                                <option value="50000000">50,000,000</option>
                                                <option value="60000000">60,000,000</option>
                                                <option value="70000000">70,000,000</option>
                                                <option value="80000000">80,000,000</option>
                                                <option value="90000000">90,000,000</option>
                                                <option value="100000000">100,000,000</option>
                                                <option value="125000000">125,000,000</option>
                                                <option value="150000000">150,000,000</option>
                                                <option value="175000000">175,000,000</option>
                                                <option value="200000000">200,000,000</option>
                                                <option value="225000000">225,000,000</option>
                                                <option value="250000000">250,000,000</option>
                                                <option value="275000000">275,000,000</option>
                                                <option value="300000000">300,000,000</option>
                                                <option value="325000000">325,000,000</option>
                                                <option value="350000000">350,000,000</option>
                                                <option value="375000000">375,000,000</option>
                                                <option value="400000000">400,000,000</option>
                                                <option value="425000000">425,000,000</option>
                                                <option value="450000000">450,000,000</option>
                                                <option value="475000000">475,000,000</option>
                                                <option value="500000000">500,000,000</option>
                                            </select>
                                            <label for="modal_min-price">Min. price</label>
                                        </div>
                                    </div>
                                    <div class="search-form-selects-group__separator" tabindex="-1">-</div>
                                    <div class="search-form-selects-group__select">
                                        <div class="form-floating">
                                            <select class="form-select" id="modal_max-price" name="price[max]"
                                                aria-label="Select maximum price">
                                                <option value="default">Any</option>







































                                                <option value="1000000">1,000,000</option>
                                                <option value="2000000">2,000,000</option>
                                                <option value="3000000">3,000,000</option>
                                                <option value="4000000">4,000,000</option>
                                                <option value="5000000">5,000,000</option>
                                                <option value="6000000">6,000,000</option>
                                                <option value="7000000">7,000,000</option>
                                                <option value="8000000">8,000,000</option>
                                                <option value="9000000">9,000,000</option>
                                                <option value="10000000">10,000,000</option>
                                                <option value="15000000">15,000,000</option>
                                                <option value="20000000">20,000,000</option>
                                                <option value="25000000">25,000,000</option>
                                                <option value="30000000">30,000,000</option>
                                                <option value="35000000">35,000,000</option>
                                                <option value="40000000">40,000,000</option>
                                                <option value="45000000">45,000,000</option>
                                                <option value="50000000">50,000,000</option>
                                                <option value="60000000">60,000,000</option>
                                                <option value="70000000">70,000,000</option>
                                                <option value="80000000">80,000,000</option>
                                                <option value="90000000">90,000,000</option>
                                                <option value="100000000">100,000,000</option>
                                                <option value="125000000">125,000,000</option>
                                                <option value="150000000">150,000,000</option>
                                                <option value="175000000">175,000,000</option>
                                                <option value="200000000">200,000,000</option>
                                                <option value="225000000">225,000,000</option>
                                                <option value="250000000">250,000,000</option>
                                                <option value="275000000">275,000,000</option>
                                                <option value="300000000">300,000,000</option>
                                                <option value="325000000">325,000,000</option>
                                                <option value="350000000">350,000,000</option>
                                                <option value="375000000">375,000,000</option>
                                                <option value="400000000">400,000,000</option>
                                                <option value="425000000">425,000,000</option>
                                                <option value="450000000">450,000,000</option>
                                                <option value="475000000">475,000,000</option>
                                                <option value="500000000">500,000,000</option>
                                            </select>
                                            <label for="modal_max-price">Max. price</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="search-form__group ">
                                <legend class="search-form__legend">Bedrooms</legend>
                                <ol class="search-form-radios search-form-radios--wrap">
                                    <li class="search-form-radios__item">
                                        <input type="radio" class="btn-check" name="bedrooms[]" id="modal_bedrooms-any"
                                            value="default" checked="">
                                        <label class="btn btn-radio btn-outline-color-black"
                                            for="modal_bedrooms-any">Any</label>
                                    </li>
                                    <li class="search-form-radios__item">
                                        <input type="radio" class="btn-check" name="bedrooms[]" id="modal_bedrooms-1"
                                            value="1">
                                        <label class="btn btn-radio btn-outline-color-black"
                                            for="modal_bedrooms-1">1+</label>
                                    </li>
                                    <li class="search-form-radios__item">
                                        <input type="radio" class="btn-check" name="bedrooms[]" id="modal_bedrooms-2"
                                            value="2">
                                        <label class="btn btn-radio btn-outline-color-black"
                                            for="modal_bedrooms-2">2+</label>
                                    </li>
                                    <li class="search-form-radios__item">
                                        <input type="radio" class="btn-check" name="bedrooms[]" id="modal_bedrooms-3"
                                            value="3">
                                        <label class="btn btn-radio btn-outline-color-black"
                                            for="modal_bedrooms-3">3+</label>
                                    </li>
                                    <li class="search-form-radios__item">
                                        <input type="radio" class="btn-check" name="bedrooms[]" id="modal_bedrooms-4"
                                            value="4">
                                        <label class="btn btn-radio btn-outline-color-black"
                                            for="modal_bedrooms-4">4+</label>
                                    </li>
                                    <li class="search-form-radios__item">
                                        <input type="radio" class="btn-check" name="bedrooms[]" id="modal_bedrooms-5"
                                            value="5">
                                        <label class="btn btn-radio btn-outline-color-black"
                                            for="modal_bedrooms-5">5+</label>
                                    </li>
                                    <li class="search-form-radios__item">
                                        <input type="radio" class="btn-check" name="bedrooms[]" id="modal_bedrooms-6"
                                            value="6">
                                        <label class="btn btn-radio btn-outline-color-black"
                                            for="modal_bedrooms-6">6+</label>
                                    </li>
                                    <li class="search-form-radios__item">
                                        <input type="radio" class="btn-check" name="bedrooms[]" id="modal_bedrooms-7"
                                            value="7">
                                        <label class="btn btn-radio btn-outline-color-black"
                                            for="modal_bedrooms-7">7+</label>
                                    </li>
                                </ol>
                            </fieldset>
                            <fieldset class="search-form__group ">
                                <legend class="search-form__legend">Size</legend>
                                <div class="search-form-selects-group">
                                    <div class="search-form-selects-group__select">
                                        <div class="form-floating">
                                            <select class="form-select" id="modal_min-size" name="size[min]"
                                                aria-label="Select minimum size">
                                                <option value="default">Any</option>
                                                <option value="1000">
                                                    1,000 sq. ft.
                                                </option>
                                                <option value="2000">
                                                    2,000 sq. ft.
                                                </option>
                                                <option value="3000">
                                                    3,000 sq. ft.
                                                </option>
                                                <option value="4000">
                                                    4,000 sq. ft.
                                                </option>
                                                <option value="5000">
                                                    5,000 sq. ft.
                                                </option>
                                                <option value="6000">
                                                    6,000 sq. ft.
                                                </option>
                                                <option value="7000">
                                                    7,000 sq. ft.
                                                </option>
                                                <option value="8000">
                                                    8,000 sq. ft.
                                                </option>
                                                <option value="9000">
                                                    9,000 sq. ft.
                                                </option>
                                                <option value="10000">
                                                    10,000 sq. ft.
                                                </option>
                                            </select>
                                            <label for="modal_min-size">Min. size</label>
                                        </div>
                                    </div>
                                    <div class="search-form-selects-group__separator" tabindex="-1">-</div>
                                    <div class="search-form-selects-group__select">
                                        <div class="form-floating">
                                            <select class="form-select" id="modal_max-size" name="size[max]"
                                                aria-label="Select maximum size">
                                                <option value="default">Any</option>
                                                <option value="1000">
                                                    1,000 sq. ft.
                                                </option>
                                                <option value="2000">
                                                    2,000 sq. ft.
                                                </option>
                                                <option value="3000">
                                                    3,000 sq. ft.
                                                </option>
                                                <option value="4000">
                                                    4,000 sq. ft.
                                                </option>
                                                <option value="5000">
                                                    5,000 sq. ft.
                                                </option>
                                                <option value="6000">
                                                    6,000 sq. ft.
                                                </option>
                                                <option value="7000">
                                                    7,000 sq. ft.
                                                </option>
                                                <option value="8000">
                                                    8,000 sq. ft.
                                                </option>
                                                <option value="9000">
                                                    9,000 sq. ft.
                                                </option>
                                                <option value="10000">
                                                    10,000 sq. ft.
                                                </option>
                                            </select>
                                            <label for="modal_max-size">Max. size</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="search-form__group ">
                                <legend class="search-form__legend">Features</legend>
                                <ul class="search-form-checks-cols">
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" name="amenity[]"
                                                id="modal_amenity_1">
                                            <label class="form-check-label" for="modal_amenity_1">Balcony</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="5" name="amenity[]"
                                                id="modal_amenity_5">
                                            <label class="form-check-label" for="modal_amenity_5">Built-in
                                                wardrobes</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="8" name="amenity[]"
                                                id="modal_amenity_8">
                                            <label class="form-check-label" for="modal_amenity_8">Concierge
                                                service</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="10" name="amenity[]"
                                                id="modal_amenity_10">
                                            <label class="form-check-label" for="modal_amenity_10">Covered
                                                parking</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="15" name="amenity[]"
                                                id="modal_amenity_15">
                                            <label class="form-check-label" for="modal_amenity_15">Equipped
                                                kitchen</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="19" name="amenity[]"
                                                id="modal_amenity_19">
                                            <label class="form-check-label" for="modal_amenity_19">Gym</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="25" name="amenity[]"
                                                id="modal_amenity_25">
                                            <label class="form-check-label" for="modal_amenity_25">Maid service</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="26" name="amenity[]"
                                                id="modal_amenity_26">
                                            <label class="form-check-label" for="modal_amenity_26">Maid's room</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="28" name="amenity[]"
                                                id="modal_amenity_28">
                                            <label class="form-check-label" for="modal_amenity_28">Pool</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="33" name="amenity[]"
                                                id="modal_amenity_33">
                                            <label class="form-check-label" for="modal_amenity_33">Private
                                                garden</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="34" name="amenity[]"
                                                id="modal_amenity_34">
                                            <label class="form-check-label" for="modal_amenity_34">Private gym</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="35" name="amenity[]"
                                                id="modal_amenity_35">
                                            <label class="form-check-label" for="modal_amenity_35">Private
                                                jacuzzi</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="36" name="amenity[]"
                                                id="modal_amenity_36">
                                            <label class="form-check-label" for="modal_amenity_36">Private pool</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="43" name="amenity[]"
                                                id="modal_amenity_43">
                                            <label class="form-check-label" for="modal_amenity_43">Security</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="46" name="amenity[]"
                                                id="modal_amenity_46">
                                            <label class="form-check-label" for="modal_amenity_46">Spa</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="50" name="amenity[]"
                                                id="modal_amenity_50">
                                            <label class="form-check-label" for="modal_amenity_50">Study room</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="55" name="amenity[]"
                                                id="modal_amenity_55">
                                            <label class="form-check-label" for="modal_amenity_55">Walk-in
                                                closet</label>
                                        </div>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                        <button type="submit"
                            class="btn btn-color-black btn-icon search-bar__submit-btn search-form__submit">
                            <svg aria-hidden="true" class="btn-icon__icon" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 40 40" xml:space="preserve">
                                <path fill="none" d="M0 0h40v40H0z"></path>
                                <path
                                    d="M18 27c-5 0-9-4-9-9s4-9 9-9 9 4 9 9-4 9-9 9zm0-16c-3.9 0-7 3.1-7 7s3.1 7 7 7 7-3.1 7-7-3.1-7-7-7z">
                                </path>
                                <path d="m23.328 24.742 1.414-1.414 7 7-1.413 1.415z"></path>
                            </svg> <span class="search-form__submit__label">134 results</span>
                        </button>
                    </div>
                </div>
                <div class="modal-footer search-form__footer">
                    <button type="button" id="search-form__clear-filters"
                        class="btn btn-link search-form-clear-filters">Clear selection</button>
                    <button type="submit" class="btn btn-color-black search-form__submit">
                        <span class="search-form__submit__label">134 results</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SearchFilterModal',
    components: {
    }
}
</script>

<style scoped="scss">

</style>
