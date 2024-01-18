<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main>

        <div class="vstack gap-9">
            <section class="page-entry">

                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 text-center mt-5 mb-0 pt-0">
                    <h1 class="mb-5">Properties for {{param ? param : (a1propertyType ? a1propertyType : 'sale')}}</h1>

                    <div class="listing-tools mb-5 mb-lg-6 mt-0">
                        <div class="listing-tools-filters">
                            <div class="listing-tools-filters__filters">
                                <div @click="toggleFilters()" @click.self="closeModal()" type="button"
                                    id="home_-search-bar-filters-btn" style="padding:11px;" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false"
                                    class="dropdown listing-tools-sort__select btn-rounded btn-filters sort-by-filter">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.90693 3.9999C9.93791 3.99996 9.96894 4.00001 10 4.00001C10.0311 4.00001 10.0621 3.99996 10.0931 3.9999C10.4618 3.99929 10.8242 3.99869 11.147 4.08519C12.0098 4.31636 12.6836 4.99023 12.9148 5.85296C13.0013 6.1758 13.0007 6.53821 13.0001 6.90693C13.0001 6.93792 13 6.96895 13 7.00001H21C21.5523 7.00001 22 7.44772 22 8.00001C22 8.55229 21.5523 9.00001 21 9.00001H13C13 9.03107 13.0001 9.0621 13.0001 9.09309C13.0007 9.46181 13.0013 9.82422 12.9148 10.1471C12.6836 11.0098 12.0098 11.6837 11.147 11.9148C10.8242 12.0013 10.4618 12.0007 10.0931 12.0001C10.0621 12.0001 10.0311 12 10 12C9.96894 12 9.93791 12.0001 9.90692 12.0001C9.5382 12.0007 9.17579 12.0013 8.85295 11.9148C7.99022 11.6837 7.31635 11.0098 7.08519 10.1471C6.99868 9.82421 6.99928 9.46181 6.9999 9.09308C6.99995 9.0621 7 9.03106 7 9.00001H5C4.44772 9.00001 4 8.55229 4 8.00001C4 7.44772 4.44772 7.00001 5 7.00001H7C7 6.96895 6.99995 6.93792 6.9999 6.90693C6.99928 6.53821 6.99868 6.1758 7.08519 5.85296C7.31635 4.99023 7.99022 4.31636 8.85295 4.08519C9.17579 3.99869 9.5382 3.99929 9.90693 3.9999ZM9.49861 6.00536C9.39195 6.01022 9.36685 6.01805 9.37059 6.01704C9.19804 6.06328 9.06327 6.19805 9.01704 6.3706C9.0162 6.37411 9.00963 6.40483 9.00535 6.49861C9.00024 6.61064 9 6.75845 9 7.00001V9.00001C9 9.24156 9.00024 9.38937 9.00535 9.5014C9.01021 9.60806 9.01804 9.63315 9.01704 9.62942C9.06327 9.80196 9.19804 9.93674 9.37059 9.98297C9.36685 9.98197 9.39195 9.98979 9.49861 9.99466C9.61063 9.99977 9.75844 10 10 10C10.2416 10 10.3894 9.99977 10.5014 9.99466C10.608 9.98979 10.6331 9.98197 10.6294 9.98297C10.802 9.93674 10.9367 9.80196 10.983 9.62942C10.982 9.63315 10.9898 9.60806 10.9946 9.5014C10.9998 9.38937 11 9.24156 11 9.00001V7.00001C11 6.75845 10.9998 6.61064 10.9946 6.49861C10.9898 6.39196 10.982 6.36686 10.983 6.3706M9.49861 6.00536C9.61063 6.00025 9.75844 6.00001 10 6.00001L9.49861 6.00536ZM10 6.00001C10.2416 6.00001 10.3894 6.00025 10.5014 6.00536L10 6.00001ZM10.5014 6.00536C10.5952 6.00963 10.6259 6.0162 10.6294 6.01704L10.5014 6.00536ZM10.6298 6.01713C10.6298 6.01713 10.6296 6.0171 10.6294 6.01704L10.6298 6.01713ZM15.9069 11.9999C15.9379 12 15.9689 12 16 12C16.0311 12 16.0621 12 16.0931 11.9999C16.4618 11.9993 16.8242 11.9987 17.147 12.0852C18.0098 12.3164 18.6836 12.9902 18.9148 13.853C19.0013 14.1758 19.0007 14.5382 19.0001 14.9069C19.0001 14.9379 19 14.9689 19 15H21C21.5523 15 22 15.4477 22 16C22 16.5523 21.5523 17 21 17H19C19 17.0311 19.0001 17.0621 19.0001 17.0931C19.0007 17.4618 19.0013 17.8242 18.9148 18.1471C18.6836 19.0098 18.0098 19.6837 17.147 19.9148C16.8242 20.0013 16.4618 20.0007 16.0931 20.0001C16.0621 20.0001 16.0311 20 16 20C15.9689 20 15.9379 20.0001 15.9069 20.0001C15.5382 20.0007 15.1758 20.0013 14.853 19.9148C13.9902 19.6837 13.3164 19.0098 13.0852 18.1471C12.9987 17.8242 12.9993 17.4618 12.9999 17.0931C12.9999 17.0621 13 17.0311 13 17H5C4.44772 17 4 16.5523 4 16C4 15.4477 4.44772 15 5 15H13C13 14.969 12.9999 14.9379 12.9999 14.9069C12.9993 14.5382 12.9987 14.1758 13.0852 13.853C13.3164 12.9902 13.9902 12.3164 14.853 12.0852C15.1758 11.9987 15.5382 11.9993 15.9069 11.9999ZM15.4986 14.0054C15.392 14.0102 15.3669 14.018 15.3706 14.017C15.198 14.0633 15.0633 14.1981 15.017 14.3706C15.018 14.3669 15.0102 14.392 15.0054 14.4986C15.0002 14.6106 15 14.7585 15 15V17C15 17.2416 15.0002 17.3894 15.0054 17.5014C15.0102 17.6081 15.018 17.6332 15.017 17.6294C15.0633 17.802 15.198 17.9367 15.3706 17.983C15.3669 17.982 15.392 17.9898 15.4986 17.9947C15.6106 17.9998 15.7584 18 16 18C16.2416 18 16.3894 17.9998 16.5014 17.9947C16.608 17.9898 16.6331 17.982 16.6294 17.983C16.802 17.9367 16.9367 17.802 16.983 17.6294C16.982 17.6332 16.9898 17.6081 16.9946 17.5014C16.9998 17.3894 17 17.2416 17 17V15C17 14.7585 16.9998 14.6106 16.9946 14.4986C16.9898 14.392 16.982 14.3669 16.983 14.3706C16.9367 14.1981 16.802 14.0633 16.6294 14.017C16.6331 14.018 16.608 14.0102 16.5014 14.0054C16.3894 14.0002 16.2416 14 16 14C15.7584 14 15.6106 14.0002 15.4986 14.0054Z"
                                            fill="#0F1729" />
                                    </svg>
                                    <span id="home_-search-bar-filters-btn" class="filter-btn-text"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                        aria-expanded="false">Filters&nbsp;</span>

                                </div>



                            </div>
                        </div>
                        <!-- Filter icon -->
                        <div style="margin-left:-5px;" v-if="isMobile">
                            <svg class="filter-icon filter-mbl mr-2" data-bs-toggle="modal"
                                data-bs-target="#properties-search" width="30px" height="30px" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.90693 3.9999C9.93791 3.99996 9.96894 4.00001 10 4.00001C10.0311 4.00001 10.0621 3.99996 10.0931 3.9999C10.4618 3.99929 10.8242 3.99869 11.147 4.08519C12.0098 4.31636 12.6836 4.99023 12.9148 5.85296C13.0013 6.1758 13.0007 6.53821 13.0001 6.90693C13.0001 6.93792 13 6.96895 13 7.00001H21C21.5523 7.00001 22 7.44772 22 8.00001C22 8.55229 21.5523 9.00001 21 9.00001H13C13 9.03107 13.0001 9.0621 13.0001 9.09309C13.0007 9.46181 13.0013 9.82422 12.9148 10.1471C12.6836 11.0098 12.0098 11.6837 11.147 11.9148C10.8242 12.0013 10.4618 12.0007 10.0931 12.0001C10.0621 12.0001 10.0311 12 10 12C9.96894 12 9.93791 12.0001 9.90692 12.0001C9.5382 12.0007 9.17579 12.0013 8.85295 11.9148C7.99022 11.6837 7.31635 11.0098 7.08519 10.1471C6.99868 9.82421 6.99928 9.46181 6.9999 9.09308C6.99995 9.0621 7 9.03106 7 9.00001H5C4.44772 9.00001 4 8.55229 4 8.00001C4 7.44772 4.44772 7.00001 5 7.00001H7C7 6.96895 6.99995 6.93792 6.9999 6.90693C6.99928 6.53821 6.99868 6.1758 7.08519 5.85296C7.31635 4.99023 7.99022 4.31636 8.85295 4.08519C9.17579 3.99869 9.5382 3.99929 9.90693 3.9999ZM9.49861 6.00536C9.39195 6.01022 9.36685 6.01805 9.37059 6.01704C9.19804 6.06328 9.06327 6.19805 9.01704 6.3706C9.0162 6.37411 9.00963 6.40483 9.00535 6.49861C9.00024 6.61064 9 6.75845 9 7.00001V9.00001C9 9.24156 9.00024 9.38937 9.00535 9.5014C9.01021 9.60806 9.01804 9.63315 9.01704 9.62942C9.06327 9.80196 9.19804 9.93674 9.37059 9.98297C9.36685 9.98197 9.39195 9.98979 9.49861 9.99466C9.61063 9.99977 9.75844 10 10 10C10.2416 10 10.3894 9.99977 10.5014 9.99466C10.608 9.98979 10.6331 9.98197 10.6294 9.98297C10.802 9.93674 10.9367 9.80196 10.983 9.62942C10.982 9.63315 10.9898 9.60806 10.9946 9.5014C10.9998 9.38937 11 9.24156 11 9.00001V7.00001C11 6.75845 10.9998 6.61064 10.9946 6.49861C10.9898 6.39196 10.982 6.36686 10.983 6.3706M9.49861 6.00536C9.61063 6.00025 9.75844 6.00001 10 6.00001L9.49861 6.00536ZM10 6.00001C10.2416 6.00001 10.3894 6.00025 10.5014 6.00536L10 6.00001ZM10.5014 6.00536C10.5952 6.00963 10.6259 6.0162 10.6294 6.01704L10.5014 6.00536ZM10.6298 6.01713C10.6298 6.01713 10.6296 6.0171 10.6294 6.01704L10.6298 6.01713ZM15.9069 11.9999C15.9379 12 15.9689 12 16 12C16.0311 12 16.0621 12 16.0931 11.9999C16.4618 11.9993 16.8242 11.9987 17.147 12.0852C18.0098 12.3164 18.6836 12.9902 18.9148 13.853C19.0013 14.1758 19.0007 14.5382 19.0001 14.9069C19.0001 14.9379 19 14.9689 19 15H21C21.5523 15 22 15.4477 22 16C22 16.5523 21.5523 17 21 17H19C19 17.0311 19.0001 17.0621 19.0001 17.0931C19.0007 17.4618 19.0013 17.8242 18.9148 18.1471C18.6836 19.0098 18.0098 19.6837 17.147 19.9148C16.8242 20.0013 16.4618 20.0007 16.0931 20.0001C16.0621 20.0001 16.0311 20 16 20C15.9689 20 15.9379 20.0001 15.9069 20.0001C15.5382 20.0007 15.1758 20.0013 14.853 19.9148C13.9902 19.6837 13.3164 19.0098 13.0852 18.1471C12.9987 17.8242 12.9993 17.4618 12.9999 17.0931C12.9999 17.0621 13 17.0311 13 17H5C4.44772 17 4 16.5523 4 16C4 15.4477 4.44772 15 5 15H13C13 14.969 12.9999 14.9379 12.9999 14.9069C12.9993 14.5382 12.9987 14.1758 13.0852 13.853C13.3164 12.9902 13.9902 12.3164 14.853 12.0852C15.1758 11.9987 15.5382 11.9993 15.9069 11.9999ZM15.4986 14.0054C15.392 14.0102 15.3669 14.018 15.3706 14.017C15.198 14.0633 15.0633 14.1981 15.017 14.3706C15.018 14.3669 15.0102 14.392 15.0054 14.4986C15.0002 14.6106 15 14.7585 15 15V17C15 17.2416 15.0002 17.3894 15.0054 17.5014C15.0102 17.6081 15.018 17.6332 15.017 17.6294C15.0633 17.802 15.198 17.9367 15.3706 17.983C15.3669 17.982 15.392 17.9898 15.4986 17.9947C15.6106 17.9998 15.7584 18 16 18C16.2416 18 16.3894 17.9998 16.5014 17.9947C16.608 17.9898 16.6331 17.982 16.6294 17.983C16.802 17.9367 16.9367 17.802 16.983 17.6294C16.982 17.6332 16.9898 17.6081 16.9946 17.5014C16.9998 17.3894 17 17.2416 17 17V15C17 14.7585 16.9998 14.6106 16.9946 14.4986C16.9898 14.392 16.982 14.3669 16.983 14.3706C16.9367 14.1981 16.802 14.0633 16.6294 14.017C16.6331 14.018 16.608 14.0102 16.5014 14.0054C16.3894 14.0002 16.2416 14 16 14C15.7584 14 15.6106 14.0002 15.4986 14.0054Z"
                                    fill="#0F1729" />
                            </svg>
                            <span>Filters</span>
                        </div>
                        <div class="search-bar text-center" data-theme="light">

                            <fieldset
                                class="properties-search__location search-form__group search-bar__locations search-form-locations ts-load-container"
                                style="opacity: 1;">


                                <div class="ts-wrapper search-form-locations-options single">
                                    <div class="ts-control">

                                        <input type="select-one" autocomplete="off" size="1" tabindex="0" role="combobox"
                                            aria-haspopup="listbox" aria-expanded="true"
                                            aria-controls="home_select-search-options-ts-dropdown"
                                            id="home_select-search-options-ts-control"
                                            aria-labelledby="home_select-search-options-ts-label" placeholder="Search ..."
                                            aria-activedescendant="modal_select-search-options-opt-4">
                                    </div>

                                </div>
                            </fieldset>

                            <HomeFilterDropdown :showFilters="showFilters"></HomeFilterDropdown>
                            <button type class="btn btn-color-black btn-icon search-bar__submit-btn">
                                <svg width="25px" height="25px" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.5 8.5H4C4 8.77614 4.22386 9 4.5 9V8.5ZM8.5 8.5V9C8.77614 9 9 8.77614 9 8.5H8.5ZM8.5 6H9C9 5.86739 8.94732 5.74021 8.85355 5.64645L8.5 6ZM6.5 4L6.85355 3.64645C6.65829 3.45118 6.34171 3.45118 6.14645 3.64645L6.5 4ZM4.5 6L4.14645 5.64645C4.05268 5.74021 4 5.86739 4 6H4.5ZM14.8536 14.1464L10.8536 10.1464L10.1464 10.8536L14.1464 14.8536L14.8536 14.1464ZM6.5 12C3.46243 12 1 9.53757 1 6.5H0C0 10.0899 2.91015 13 6.5 13V12ZM12 6.5C12 9.53757 9.53757 12 6.5 12V13C10.0899 13 13 10.0899 13 6.5H12ZM6.5 1C9.53757 1 12 3.46243 12 6.5H13C13 2.91015 10.0899 0 6.5 0V1ZM6.5 0C2.91015 0 0 2.91015 0 6.5H1C1 3.46243 3.46243 1 6.5 1V0ZM4.5 9H8.5V8H4.5V9ZM9 8.5V6H8V8.5H9ZM8.85355 5.64645L6.85355 3.64645L6.14645 4.35355L8.14645 6.35355L8.85355 5.64645ZM6.14645 3.64645L4.14645 5.64645L4.85355 6.35355L6.85355 4.35355L6.14645 3.64645ZM4 6V8.5H5V6H4Z"
                                        fill="#fff" stroke-width="1" />
                                </svg>
                            </button>
                        </div>
                        <div class="listing-tools-actions">

                            <!-- Only for desktop -->
                            <div  v-if="!isMobile"
                                class="listing-tools-sor btn-rounded btn-filters sort-by-filter listing-tools-sort__select sort-by-right">
                                <!-- <label for="sort">Sort by :</label> -->
                                <svg @click="openDropdown" width="20px" height="20px" viewBox="0 0 24 24" fill="black"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17 3.25C17.4142 3.25 17.75 3.58579 17.75 4V17.75L19.4 15.55C19.6485 15.2186 20.1186 15.1515 20.45 15.4C20.7814 15.6485 20.8485 16.1186 20.6 16.45L17.6 20.45C17.4063 20.7083 17.0691 20.8136 16.7628 20.7115C16.4566 20.6094 16.25 20.3228 16.25 20V4C16.25 3.58579 16.5858 3.25 17 3.25Z"
                                        fill="black" />
                                    <path
                                        d="M3.25 16C3.25 15.5858 3.58579 15.25 4 15.25H13C13.4142 15.25 13.75 15.5858 13.75 16C13.75 16.4142 13.4142 16.75 13 16.75H4C3.58579 16.75 3.25 16.4142 3.25 16Z"
                                        fill="black" />
                                    <path
                                        d="M5.25 11C5.25 10.5858 5.58579 10.25 6 10.25H13C13.4142 10.25 13.75 10.5858 13.75 11C13.75 11.4142 13.4142 11.75 13 11.75H6C5.58579 11.75 5.25 11.4142 5.25 11Z"
                                        fill="black" />
                                    <path
                                        d="M7.25 6C7.25 5.58579 7.58579 5.25 8 5.25H13C13.4142 5.25 13.75 5.58579 13.75 6C13.75 6.41421 13.4142 6.75 13 6.75H8C7.58579 6.75 7.25 6.41421 7.25 6Z"
                                        fill="black" />
                                </svg>

                                <select class="" id="" name="" @click="getSortBySelected">
                                    <option  value="" selected>
                                        Sort by
                                    </option>

                                    <option value="lowest">
                                        Price (low)</option>
                                    <option value="highest">
                                        Price (high)</option>
                                    <option value="latest">
                                        Latest</option>
                                    <option value="oldest">
                                        Oldest</option>
                                </select>

                            </div>
                            <div v-if="isMobile" style="margin-right:0px;"
                                class="listing-tools-sor btn-rounded  listing-tools-sort__select sort-by-right mbl-sort">
                                <!-- <label for="sort">Sort by :</label> -->
                                <svg style="margin-right:10px;" @click="openDropdown" width="30px" height="30px" viewBox="0 0 24 24" fill="black"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17 3.25C17.4142 3.25 17.75 3.58579 17.75 4V17.75L19.4 15.55C19.6485 15.2186 20.1186 15.1515 20.45 15.4C20.7814 15.6485 20.8485 16.1186 20.6 16.45L17.6 20.45C17.4063 20.7083 17.0691 20.8136 16.7628 20.7115C16.4566 20.6094 16.25 20.3228 16.25 20V4C16.25 3.58579 16.5858 3.25 17 3.25Z"
                                        fill="black" />
                                    <path
                                        d="M3.25 16C3.25 15.5858 3.58579 15.25 4 15.25H13C13.4142 15.25 13.75 15.5858 13.75 16C13.75 16.4142 13.4142 16.75 13 16.75H4C3.58579 16.75 3.25 16.4142 3.25 16Z"
                                        fill="black" />
                                    <path
                                        d="M5.25 11C5.25 10.5858 5.58579 10.25 6 10.25H13C13.4142 10.25 13.75 10.5858 13.75 11C13.75 11.4142 13.4142 11.75 13 11.75H6C5.58579 11.75 5.25 11.4142 5.25 11Z"
                                        fill="black" />
                                    <path
                                        d="M7.25 6C7.25 5.58579 7.58579 5.25 8 5.25H13C13.4142 5.25 13.75 5.58579 13.75 6C13.75 6.41421 13.4142 6.75 13 6.75H8C7.58579 6.75 7.25 6.41421 7.25 6Z"
                                        fill="black" />
                                </svg>

                                <select class="text-center mt-2" id="" name=""
                                    style="padding:5px;position:relative;bottom:10px !important;" @click="getSortBySelected">
                                    <option style="color:#000;!important;" value="sort_by" selected>
                                        Sort by
                                    </option>
                                    <option value="lowest">
                                        Price (low)</option>
                                    <option value="highest">
                                        Price (high)</option>
                                    <option value="latest">
                                        Latest</option>
                                    <option value="oldest">
                                        Oldest</option>
                                </select>

                            </div>

                        </div>
                    </div>


                    <div class="vstack gap-9">

                        <div class="loader-grid" v-if="loading">
                            <code-loader :speed="2" v-for="index in 9" :key="index"></code-loader>
                        </div>
                        <div v-if="!properties || properties.length === 0">
                            <!-- Display a message or handle the case when properties array is empty -->
                            No properties found.
                        </div>
                        <ul class="property-card-grid" v-else>
                            <li class="property-card-grid__item" v-for="(item, index) in properties" >
                                <article class="property-card">
                                    <div class="property-card__body">
                                        <div class="property-card__info" @click="goToPropertyDetail(item.slug)">

                                            <h3 class="property-card__title mb-3 mx-0">
                                                <a href="#" class="property-card__link">{{ item.metaTitle }} </a>
                                            </h3>

                                            <div class="title_section">
                                                <div class="col-lg-6">

                                                    <span><svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px"
                                                            viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                                            <path fill="#231F20"
                                                                d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24
                                                   C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24
                                                   C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z" />
                                                        </svg>
                                                        {{ item.developmentName }} {{ item.developmentName != '' ? '|' : '' }} {{ item.areaName
                                                        }}</span>
                                                </div>

                                                <div class="col-lg-6" style="text-align:right">
                                                    <svg fill="#000000" width="20px" height="20px" viewBox="0 0 16 16"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.75 2.5H1.25A1.25 1.25 0 0 0 0 3.75v8.5a1.25 1.25 0 0 0 1.25 1.25h13.5A1.25 1.25 0 0 0 16 12.25v-8.5a1.25 1.25 0 0 0-1.25-1.25zM1.25 3.75h2a1.86 1.86 0 0 1-2 1.75zm0 8.5V10.5a1.86 1.86 0 0 1 2 1.75zm13.5 0H12.8a1.86 1.86 0 0 1 1.95-1.75zm0-3a3.1 3.1 0 0 0-3.2 3h-7.1a3.1 3.1 0 0 0-3.2-3v-2.5a3.1 3.1 0 0 0 3.2-3h7.1a3.1 3.1 0 0 0 3.2 3zm0-3.75a1.86 1.86 0 0 1-1.95-1.75h1.95z" />
                                                        <path
                                                            d="M8 5a3.1 3.1 0 0 0-3.2 3A3.1 3.1 0 0 0 8 11a3.1 3.1 0 0 0 3.2-3A3.1 3.1 0 0 0 8 5zm0 4.75A1.86 1.86 0 0 1 6.05 8 1.86 1.86 0 0 1 8 6.25 1.86 1.86 0 0 1 10 8a1.86 1.86 0 0 1-2 1.75z" />
                                                    </svg>&nbsp;
                                                    <span> AED {{ item.propertyPrice }} </span>

                                                </div>

                                            </div>
                                            <div class="property-listing-card mt-2">

                                                <div>
                                                    <svg v-if="item.bedrooms != '0' ? item.bedrooms : (item.propertyType == 'Land Residential' ? '' : 'Studio')"
                                                        fill="#000000" width="20px" height="20px" viewBox="0 0 24 24" id="bedroom"
                                                        data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
                                                        <path id="secondary"
                                                            d="M4,12H20a1,1,0,0,1,1,1v3a0,0,0,0,1,0,0H3a0,0,0,0,1,0,0V13A1,1,0,0,1,4,12Z"
                                                            style="fill: rgb(103, 103, 103); stroke-width: 2;"></path>
                                                        <path id="primary"
                                                            d="M19,7a1,1,0,0,0-1-1H6A1,1,0,0,0,5,7v5H19Zm1,11V16M4,18V16m17,0H3V13a1,1,0,0,1,1-1H20a1,1,0,0,1,1,1Z"
                                                            style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                                        </path>
                                                    </svg>
                                                    {{ item.bedrooms != '0' ? item.bedrooms : (item.propertyType == 'Land Residential' ? '' :
                                                        'Studio') }} {{ item.bedrooms == '0' ? '' : 'Beds' }}
                                                </div>
                                                <div
                                                    v-if="item.bedrooms != '0' ? item.bedrooms : (item.propertyType == 'Land Residential' ? '' : 'Studio')">
                                                    <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1"
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
                                                    {{ item.bathrooms }} Baths
                                                </div>
                                                <div>
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11 2C6.94493 2.0073 4.8215 2.10686 3.46447 3.46389C2 4.92835 2 7.28538 2 11.9994C2 16.7135 2 19.0705 3.46447 20.535C4.92893 21.9994 7.28596 21.9994 12 21.9994C16.714 21.9994 19.0711 21.9994 20.5355 20.535C21.8926 19.1779 21.9921 17.0545 21.9994 12.9994"
                                                            stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                                        <path d="M13 11L22 2M22 2H16.6562M22 2V7.34375M21 3L12 12M12 12H16M12 12V8"
                                                            stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    {{ item.unitBuiltUpArea }} {{ item.unit == 'Sq.Ft.' ? 'Sq. Ft.' : 'Sq. Mt.' }}
                                                </div>



                                            </div>

                                        </div>

                                    </div>
                                    <div class="property-card__media">
                                        <div class="property-card-carousel">
                                            <!-- slider inside the property-card -->

                                            <swiper :autoplay='{
                                                "delay": 2000,
                                                "disableOnInteraction": false
                                            }' :speed="2000" :pagination='{
                        "clickable": true
                    }' :navigation="true" class="property-card-carousel__cell">
                                                <swiper-slide class="ratio ratio-4x3" v-for="(item, index) in item.galleryImages.slice(0, 10)">

                                                    <img :src="backendUrl + item"
                                                        :srcset="`${backendUrl + item} 320w,
                                                                                                                                                                                                                                                                                                                                                                         ${backendUrl + item} 440w,
                                                                                                                                                                                                                                                                                                                                                                         ${backendUrl + item} 560w`"
                                                        sizes="(min-width: 85em) 384px, (min-width: 78em) calc((100vw - 9rem) / 3), (min-width: 40em) calc((100vw - 6rem) / 2), calc(100vw - 4rem)"
                                                        alt="Custom Villa with Designer Interiors in The Lakes., picture 1"
                                                        class="property-card-carousel__image" loading="lazy" width="560" height="420">

                                                </swiper-slide>

                                            </swiper>


                                        </div>
                                        <span class="property-card__flag">{{ item.propertyType }}</span>
                                        <span class="property-card-right__flag" v-if="item.propertyCategory != 'Rent'">{{ item.completionStatus != 'completed_property' &&
                                            item.propertyCategory == 'Sale' ? 'Off-plan' : 'Ready' }}</span>

                                    </div>
                                </article>
                            </li>

                        </ul>
                        <div class="mb-10">
                            <a class="btn btn-block btn-transparent btn-load-more" @click="loadMoreProperties(propertiesData.currentPage)">Load
                                more</a>
                            <br>
                            <div class="mt-3 count-text">

                                <span  v-if="!properties || properties.length === 0">0 of {{ propertiesData.total }}</span>

                                <span v-else>{{ propertiesData.currentPage * propertiesData.perPage }} of {{ propertiesData.total }}</span>
                            </div>
                        </div>

                        <!-- <Properties :queryParams="queryString"></Properties> -->
                    </div>
                </div>
            </section>

        </div>
        <div class="modal fade nav-tray-modal" id="properties-search" tabindex="-1" aria-labelledby="search-modal-title"
            aria-hidden="true" data-nav="search" data-title="Search properties"
            style="width:80%;margin-left:10%;top:15%;height:70%;">
            <div class="modal-dialog search-modal-dialog modal-dialog-centered modal-sm">
                <form method="get" action class="modal-content search-form search-form--modal filters-root">

                    <button type="button" class="btn-close" style="right:-265px !important;position:relative;"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body search-form__body dropdown" style="margin-top:-20px;">
                        <div class="search-bar" aria-labelledby="home_-search-bar-filters-btn" data-filters-panel
                            ref="dropdownPanel">
                            <ul class="button-list mb-0" role="tablist">
                                <li class="button-list-item nav-item" role="presentation">
                                    <button class="custom-button nav-link active" id="villas-new-tab" data-tab-has-flickity
                                        data-bs-toggle="tab" data-bs-target="#villas-new-tab-pane" type="button" role="tab"
                                        aria-controls="villas-new-tab-pane" aria-selected="true" @click="toggleCategory('sale')">Buy
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="custom-button nav-link " id="villas-reductions-tab" data-tab-has-flickity
                                        data-bs-toggle="tab" data-bs-target="#villas-new-tab-pane" type="button" role="tab"
                                        aria-controls="villas-reductions-tab-pane" aria-selected="true" @click="toggleCategory('rent')">Rent</button>
                                </li>
                            </ul>
                            <fieldset class="search-form__group mt-3">
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
                                <fieldset class="search-form__group mt-3">
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
                            <fieldset class="search-form__group mt-3">
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

                        </div>
                        <div class="modal-footer search-form__footer btn-centered ">
                            <div class="btn-centered">
                                <button data-bs-dismiss="modal" @click="toListings()" type="button" class="btn btn-ghost mt-6 btn-block  btn-learn-more">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <FooterRequestCallbackModal></FooterRequestCallbackModal>
    </main>
    <Footer></Footer>
</template>

<script>
import Nav from '../../components/Nav.vue';
import Header from '../../components/Header.vue';
import SearchFilterDropdown from '../../components/SearchFilterModal.vue';
import FooterRequestCallbackModal from '../../components/FooterRequestCallbackModal.vue';
import Blogs from '../Blog/Blogs.vue';
import Properties from './Properties.vue';
import Footer from '../../components/Footer.vue';
import HomeFilterDropdown from '../../components/HomeFilterDropdown.vue';
import { mapState, mapActions } from 'vuex';
import { CodeLoader } from 'vue-content-loader';
import { Swiper, SwiperSlide } from 'swiper/vue';
import SwiperCore, {
    Autoplay, Pagination, Navigation, EffectFade
} from 'swiper/core';
SwiperCore.use([Autoplay, Pagination, Navigation, EffectFade]);

export default {
    name: "PropertyListings",
    components: {
        Nav,
        Header,
        SearchFilterDropdown,
        FooterRequestCallbackModal,
        Blogs,
        Properties,
        Footer,
        HomeFilterDropdown,
        CodeLoader, Swiper,
        SwiperSlide
    },
    watch: {
  $route(to, from) {
    console.log('Route changed, query:', this.$route.query);
    this.updateProperties();
  },
},
    data() {
        return {
            showFilters: false,
            isMobile: false,
            isDropdownOpen: false,
            selectedOption: "",
            queryString:"",
            category:"",
            propertyTypes:[],
            minBedrooms:"",
            maxBedrooms:"",
            maxPrice:"",
            backendUrl: 'https://a1properties.ae/backend/',
            // backendUrl: 'http://192.168.2.46:8001/',
            selectedPropertyTypes: [],
            selectedMinBedrooms: '',
            selectedMaxBedrooms: '',
            selectedMaxPrice: '',
            propertyCategory:'sale',
            a1propertyType:'',
            sortBySelected:""
        }
    },
    props: {
        type: String,
        param:String
    },
    created() {
        this.checkScreenWidth()
        this.updateProperties();
    },
    mounted() {

        this.updateProperties()
        window.addEventListener("resize", this.checkScreenWidth);

    },
    beforeDestroy() {
    },
    destroyed() {
        window.removeEventListener("resize", this.checkScreenWidth);
    },
    computed: {
        ...mapState('properties', ['properties','propertiesData', 'loading']),
    },

    methods: {
        getSortBySelected(event) {
      const selectedValue = event.target.value;

      this.queryString = this.$route.query.params;
     if(selectedValue){
          this.getProperties({
            page: 1,
            params: this.queryString ? this.queryString : this.param,
            sortby: selectedValue

          });
      }
    },
        updateProperties(){
            const params = this.$route.query.params;
          if (params) {
            const parsedParams = Object.fromEntries(new URLSearchParams(params));

            const categoryValue = parsedParams.category;

            this.a1propertyType = categoryValue;
        }
      this.queryString = this.$route.query.params;
      const parsedParams = new URLSearchParams(this.queryString);
      this.category = this.param ? this.param : parsedParams.get('category');
      this.propertyTypes = parsedParams.get('propertyTypes');
      this.minBedrooms = parsedParams.get('minBedrooms');
      this.maxBedrooms = parsedParams.get('maxBedrooms');
      this.maxPrice = parsedParams.get('maxPrice');
      // Fetch properties with the updated parameters
      console.log("SORTBY",this.sortBySelected)
      this.getProperties({
        page: 1,
        params: this.queryString ? this.queryString : this.param,

      });
    },
        toggleCategory(type){
            this.propertyCategory = type;
        },
        ...mapActions('properties', ['getProperties', 'getPropertyBySlug']),
        toggleFilters() {
            this.showFilters = !this.showFilters;
        },
        closeModal() {
            this.showFilters = false;
        },
        checkScreenWidth() {
            this.isMobile = window.innerWidth <= 600;
        },
        handleSelectChange() {
            // Hide the placeholder option when another option is selected
            const placeholderOption = this.$el.querySelector('option[value=""]');
            if (placeholderOption && placeholderOption.selected) {
                placeholderOption.style.display = 'none !important;';
            }
        },
        toListings() {
            const params = this.$route.query.params;
          if (params) {
            const parsedParams = Object.fromEntries(new URLSearchParams(params));

            const categoryValue = parsedParams.category;

            this.a1propertyType = categoryValue;
        }
            const queryParams = {
                category: this.propertyCategory,
                propertyTypes: this.selectedPropertyTypes,
                minBedrooms: this.selectedMinBedrooms,
                maxBedrooms: this.selectedMaxBedrooms,
                maxPrice: this.selectedMaxPrice,
            };
            const queryData = Object.entries(queryParams)
                .filter(([key, value]) => value !== undefined && value !== null && value !== '')
                .map(([key, value]) => `${key}=${encodeURIComponent(value)}`)
                .join('&');
                this.getProperties({
                page: 1,
                params: queryData
                });

        },

        goToPropertyDetail(slug) {
            this.$router.push(`/property/${slug}`);
        },
        loadMoreProperties(page) {
            this.getProperties({
            page: page+1,
            params: this.queryString
            });
        },

    },
}
</script>

<style scoped="scss">
.listing-cta-card {
    max-width: 350px;
    /* Set the maximum width of the card */
    margin: 0 auto;
    /* Center the card horizontally */
}

.post-card__image {
    max-width: 300px;
}

.agent-profile-left {
    border-right: 1px solid transparent;
    /* Set the border width */
    border-image: linear-gradient(to top, #c67057, transparent) 0.9;
    /* Set the border color and height */
}

.sort-by-filter {
    cursor: pointer;
    border: 1px solid #000;
}

.btn-filters {
    padding: 10px;

}

select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    text-indent: 1px;
    text-overflow: '';
    border-radius: 4px;
    font-size: 14px;
    padding-left: 5px;
    outline: none;
    border: none;
    margin: 0px;
    background-color: transparent;
    padding: 2px;
}

option {
    padding: 2px;
}

select:focus {
    border: none;
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

.agent-description {
    bottom: 0px;
}

.agent-profile-section {
    grid-template-rows: 1fr auto;
    /* The first row takes the remaining space, and the second row contains the bottom div */
}

.agent-description {
    margin-top: auto;
    /* Push the div to the bottom */

}

.agent-description p,
h3 {
    text-align: left;
    margin-left: 40px;
}

.contact-btns {
    margin-left: 100px;
    margin-right: 100px;
}

.listing-cta-card__btn,
.contact-btns svg,
.property-card-scroller-grid-item {
    cursor: pointer;
}

.mbl-sort {
    margin-top: 15px;
}

@media only screen and (max-width: 600px) {

    .ts-control {
        border: none;
        border-bottom: 1px solid #000;
        width: 100%;
        margin-left: 10px;
        margin-bottom: 10px;
    }
}

.button-list {
    list-style-type: none;
    padding: 0;
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

.custom-button.active {
    color: #000;
    border-bottom: 1px solid #c67057;
}

select.text-center {
    color: #000 !important;
}

.carousel {
    max-height: 400px;
}

.property-card__flag {
    z-index: 1;
}

.property-card-right__flag {
    z-index: 1;
}

.carousel-image {
    /* You can adjust the max height as needed */
    width: auto;
    margin: 0 auto;
}

.property-listing-card {
    display: flex;
    justify-content: space-between;
}

.property-card-grid__item {
    background-color: #fff;
    padding: 10px;
    color: white;
    border-radius: 10px;

}

.title_section {
    display: flex;
    justify-content: space-between;

}

.property-price-section {
    align-content: right;
}

@media (min-width:1200px) {
    .gallery-images {
        height: 250px;
    }
}

@media (min-width:1080px) {
    .gallery-images {
        height: 250px;
    }
}


@media (min-width:780px) {
    .gallery-images {
        height: 280px;
    }
}

@media (min-width:650px) {
    .gallery-images {
        height: 280px;
    }
}

@media (min-width:560px) {
    .gallery-images {
        height: 250px;
    }
}

.btn-load-more {
    border: 2px solid #000;
}

.btn-load-more:hover {
    bottom: 0;
    right: 0;
    border-image-source: linear-gradient(to bottom right, #c67067, transparent 35%, transparent 35%, transparent 65%, #c67067);
    border-image-slice: 1;
    border-image-width: 1;
    border-image-outset: 0;
    border-image-repeat: stretch;
}
</style>
