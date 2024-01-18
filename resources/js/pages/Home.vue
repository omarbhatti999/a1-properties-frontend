<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <main>
        <div data-theme="dark" class="pb-0">
            <section class="splash-unit" style="z-index:2">
                <div class="video-background">
                    <div v-if="!isMobile" class="desktop">
                        <video ref="myVideoDesktop" preload="auto" :src="videoUrl"  muted="" loop="" autoplay=""
                            playsinline="" type="video/mp4"></video>
                    </div>
                    <!-- ifMobile -->
                    <div v-else class="mobile">
                        <video ref="myVideoMobile" preload="auto" :src="videoUrlMbl" muted="" loop="" autoplay=""
                            playsinline="" type="video/mp4"></video>
                    </div>
                    <div class="video-overlay"></div>
                    <div class="vstack gap-0">
                        <!-- Mobile -->
                        <button class="masthead-search-btn masthead-search-btn--home">
                            <input class="masthead-search-btn__text" placeholder="Search ...">
                            <svg class="filter-icon filter-mbl mr-2" data-bs-toggle="modal"
                                data-bs-target="#properties-search" width="30px" height="30px" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.90693 3.9999C9.93791 3.99996 9.96894 4.00001 10 4.00001C10.0311 4.00001 10.0621 3.99996 10.0931 3.9999C10.4618 3.99929 10.8242 3.99869 11.147 4.08519C12.0098 4.31636 12.6836 4.99023 12.9148 5.85296C13.0013 6.1758 13.0007 6.53821 13.0001 6.90693C13.0001 6.93792 13 6.96895 13 7.00001H21C21.5523 7.00001 22 7.44772 22 8.00001C22 8.55229 21.5523 9.00001 21 9.00001H13C13 9.03107 13.0001 9.0621 13.0001 9.09309C13.0007 9.46181 13.0013 9.82422 12.9148 10.1471C12.6836 11.0098 12.0098 11.6837 11.147 11.9148C10.8242 12.0013 10.4618 12.0007 10.0931 12.0001C10.0621 12.0001 10.0311 12 10 12C9.96894 12 9.93791 12.0001 9.90692 12.0001C9.5382 12.0007 9.17579 12.0013 8.85295 11.9148C7.99022 11.6837 7.31635 11.0098 7.08519 10.1471C6.99868 9.82421 6.99928 9.46181 6.9999 9.09308C6.99995 9.0621 7 9.03106 7 9.00001H5C4.44772 9.00001 4 8.55229 4 8.00001C4 7.44772 4.44772 7.00001 5 7.00001H7C7 6.96895 6.99995 6.93792 6.9999 6.90693C6.99928 6.53821 6.99868 6.1758 7.08519 5.85296C7.31635 4.99023 7.99022 4.31636 8.85295 4.08519C9.17579 3.99869 9.5382 3.99929 9.90693 3.9999ZM9.49861 6.00536C9.39195 6.01022 9.36685 6.01805 9.37059 6.01704C9.19804 6.06328 9.06327 6.19805 9.01704 6.3706C9.0162 6.37411 9.00963 6.40483 9.00535 6.49861C9.00024 6.61064 9 6.75845 9 7.00001V9.00001C9 9.24156 9.00024 9.38937 9.00535 9.5014C9.01021 9.60806 9.01804 9.63315 9.01704 9.62942C9.06327 9.80196 9.19804 9.93674 9.37059 9.98297C9.36685 9.98197 9.39195 9.98979 9.49861 9.99466C9.61063 9.99977 9.75844 10 10 10C10.2416 10 10.3894 9.99977 10.5014 9.99466C10.608 9.98979 10.6331 9.98197 10.6294 9.98297C10.802 9.93674 10.9367 9.80196 10.983 9.62942C10.982 9.63315 10.9898 9.60806 10.9946 9.5014C10.9998 9.38937 11 9.24156 11 9.00001V7.00001C11 6.75845 10.9998 6.61064 10.9946 6.49861C10.9898 6.39196 10.982 6.36686 10.983 6.3706M9.49861 6.00536C9.61063 6.00025 9.75844 6.00001 10 6.00001L9.49861 6.00536ZM10 6.00001C10.2416 6.00001 10.3894 6.00025 10.5014 6.00536L10 6.00001ZM10.5014 6.00536C10.5952 6.00963 10.6259 6.0162 10.6294 6.01704L10.5014 6.00536ZM10.6298 6.01713C10.6298 6.01713 10.6296 6.0171 10.6294 6.01704L10.6298 6.01713ZM15.9069 11.9999C15.9379 12 15.9689 12 16 12C16.0311 12 16.0621 12 16.0931 11.9999C16.4618 11.9993 16.8242 11.9987 17.147 12.0852C18.0098 12.3164 18.6836 12.9902 18.9148 13.853C19.0013 14.1758 19.0007 14.5382 19.0001 14.9069C19.0001 14.9379 19 14.9689 19 15H21C21.5523 15 22 15.4477 22 16C22 16.5523 21.5523 17 21 17H19C19 17.0311 19.0001 17.0621 19.0001 17.0931C19.0007 17.4618 19.0013 17.8242 18.9148 18.1471C18.6836 19.0098 18.0098 19.6837 17.147 19.9148C16.8242 20.0013 16.4618 20.0007 16.0931 20.0001C16.0621 20.0001 16.0311 20 16 20C15.9689 20 15.9379 20.0001 15.9069 20.0001C15.5382 20.0007 15.1758 20.0013 14.853 19.9148C13.9902 19.6837 13.3164 19.0098 13.0852 18.1471C12.9987 17.8242 12.9993 17.4618 12.9999 17.0931C12.9999 17.0621 13 17.0311 13 17H5C4.44772 17 4 16.5523 4 16C4 15.4477 4.44772 15 5 15H13C13 14.969 12.9999 14.9379 12.9999 14.9069C12.9993 14.5382 12.9987 14.1758 13.0852 13.853C13.3164 12.9902 13.9902 12.3164 14.853 12.0852C15.1758 11.9987 15.5382 11.9993 15.9069 11.9999ZM15.4986 14.0054C15.392 14.0102 15.3669 14.018 15.3706 14.017C15.198 14.0633 15.0633 14.1981 15.017 14.3706C15.018 14.3669 15.0102 14.392 15.0054 14.4986C15.0002 14.6106 15 14.7585 15 15V17C15 17.2416 15.0002 17.3894 15.0054 17.5014C15.0102 17.6081 15.018 17.6332 15.017 17.6294C15.0633 17.802 15.198 17.9367 15.3706 17.983C15.3669 17.982 15.392 17.9898 15.4986 17.9947C15.6106 17.9998 15.7584 18 16 18C16.2416 18 16.3894 17.9998 16.5014 17.9947C16.608 17.9898 16.6331 17.982 16.6294 17.983C16.802 17.9367 16.9367 17.802 16.983 17.6294C16.982 17.6332 16.9898 17.6081 16.9946 17.5014C16.9998 17.3894 17 17.2416 17 17V15C17 14.7585 16.9998 14.6106 16.9946 14.4986C16.9898 14.392 16.982 14.3669 16.983 14.3706C16.9367 14.1981 16.802 14.0633 16.6294 14.017C16.6331 14.018 16.608 14.0102 16.5014 14.0054C16.3894 14.0002 16.2416 14 16 14C15.7584 14 15.6106 14.0002 15.4986 14.0054Z"
                                    fill="#0F1729" />
                            </svg>
                            <span class="masthead-search-btn__icon" @click="toListings()">
                                <svg width="15px" height="15px" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.5 8.5H4C4 8.77614 4.22386 9 4.5 9V8.5ZM8.5 8.5V9C8.77614 9 9 8.77614 9 8.5H8.5ZM8.5 6H9C9 5.86739 8.94732 5.74021 8.85355 5.64645L8.5 6ZM6.5 4L6.85355 3.64645C6.65829 3.45118 6.34171 3.45118 6.14645 3.64645L6.5 4ZM4.5 6L4.14645 5.64645C4.05268 5.74021 4 5.86739 4 6H4.5ZM14.8536 14.1464L10.8536 10.1464L10.1464 10.8536L14.1464 14.8536L14.8536 14.1464ZM6.5 12C3.46243 12 1 9.53757 1 6.5H0C0 10.0899 2.91015 13 6.5 13V12ZM12 6.5C12 9.53757 9.53757 12 6.5 12V13C10.0899 13 13 10.0899 13 6.5H12ZM6.5 1C9.53757 1 12 3.46243 12 6.5H13C13 2.91015 10.0899 0 6.5 0V1ZM6.5 0C2.91015 0 0 2.91015 0 6.5H1C1 3.46243 3.46243 1 6.5 1V0ZM4.5 9H8.5V8H4.5V9ZM9 8.5V6H8V8.5H9ZM8.85355 5.64645L6.85355 3.64645L6.14645 4.35355L8.14645 6.35355L8.85355 5.64645ZM6.14645 3.64645L4.14645 5.64645L4.85355 6.35355L6.85355 4.35355L6.14645 3.64645ZM4 6V8.5H5V6H4Z"
                                        fill="#fff" stroke-width="1" />
                                </svg>
                            </span>
                        </button>

                    </div>
                    <header class="site-header site-header--home" :class="{ 'site-header--fixed': firstSectionPassed }"
                        data-site-header data-theme="dark">
                        <div class="wrapper">
                            <div class="masthead">
                                <a class="masthead-logo__link" style="position:absolute" aria-label="Homepage">
                                    <img rel="preload" as="image" loading="eager" class="main-logo"
                                        :src="backendUrl + 'storage/a1/logo/c/a1-logo-white.webp'">
                                </a>
                                <div class="masthead-search">
                                    <button class="masthead-search-btn" data-bs-toggle="modal"
                                        data-bs-target="#properties-search">
                                        <span class="masthead-search-btn__text">Search ...</span>
                                        <span class="masthead-search-btn__icon">
                                            <svg aria-hidden="true" class="masthead-search-btn__svg"
                                                xmlns="http://www.w3.org/2000/svg" viewbox="0 0 40 40" xml:space="preserve">
                                                <path fill="none" d="M0 0h40v40H0z"></path>
                                                <path
                                                    d="M18 27c-5 0-9-4-9-9s4-9 9-9 9 4 9 9-4 9-9 9zm0-16c-3.9 0-7 3.1-7 7s3.1 7 7 7 7-3.1 7-7-3.1-7-7-7z">
                                                </path>
                                                <path d="m23.328 24.742 1.414-1.414 7 7-1.413 1.415z"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div
                                    class="dropdown masthead-navs d-lg-flex gap-3 justify-content-end align-items-center gap-2">
                                    <Suspense>
                                        <Nav></Nav>
                                    </Suspense>
                                </div>
                            </div>
                        </div>
                        <!-- //mobile menu -->
                        <nav :class="{ 'nav-tray': true, 'scrolled': isScrolled }">
                            <ul class="nav-tray-list">
                                <li class="nav-tray-list__item">
                                    <a href class="nav-tray-item" id="nav-tray-home-link">
                                        <img loading="eager" rel="preload" width="" height="" class="mobile-logo"
                                            :src="backendUrl + 'storage/a1/logo/c/a1-logo-white.webp'">
                                    </a>
                                </li>

                                <li class="nav-tray-list__item">
                                    <Nav></Nav>
                                </li>
                            </ul>
                        </nav>
                    </header>
                    <form method="get" action class="search-form search-form--home filters-root search-filter-mt">
                        <!-- top filter navs -->
                        <div class="search-form__body">
                            <div class="properties-search__operation">
                                <fieldset class="search-form__group search-form__group--class-opts ">
                                    <ul class="search-form-class-opts">
                                        <li class="search-form-class-opts__item">
                                            <input type="radio" class="btn-check" id="home_operation-buy" name="operation"
                                                value="sale" checked v-model="selectedPropertyCategory">
                                            <label class="btn btn-text btn-radio-underline fs-3"
                                                for="home_operation-buy">Buy</label>
                                        </li>
                                        <li class="search-form-class-opts__item">
                                            <input type="radio" class="btn-check" id="home_operation-rent" name="operation"
                                                value="rent" v-model="selectedPropertyCategory">
                                            <label class="btn btn-text btn-radio-underline fs-3"
                                                for="home_operation-rent">Rent</label>
                                        </li>
                                        <li class="search-form-class-opts__item">
                                            <input type="radio" class="btn-check" id="home_operation-offplan"
                                                name="operation" value="project" data-id="projects"
                                                v-model="selectedPropertyCategory">
                                            <label class="btn btn-text btn-radio-underline fs-3"
                                                for="home_operation-offplan" @click="toProjects()">Projects</label>

                                        </li>
                                    </ul>
                                </fieldset>
                            </div>
                            <div class="search-bar" data-theme="light">
                                <fieldset
                                    class="properties-search__location search-form__group search-bar__locations search-form-locations ts-load-container"
                                    style="opacity: 1;">
                                    <div class="ts-wrapper search-form-locations-options single">
                                        <div class="ts-control">
                                            <input type="select-one" autocomplete="off" size="1" tabindex="0"
                                                role="combobox" aria-haspopup="listbox" aria-expanded="true"
                                                aria-controls="home_select-search-options-ts-dropdown"
                                                id="home_select-search-options-ts-control"
                                                aria-labelledby="home_select-search-options-ts-label"
                                                placeholder="Search ..."
                                                aria-activedescendant="modal_select-search-options-opt-4">
                                        </div>
                                    </div>
                                </fieldset>
                                <svg class="filter-icon" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                    aria-expanded="false" data-filters-control data-count="0" width="20px" height="20px"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.90693 3.9999C9.93791 3.99996 9.96894 4.00001 10 4.00001C10.0311 4.00001 10.0621 3.99996 10.0931 3.9999C10.4618 3.99929 10.8242 3.99869 11.147 4.08519C12.0098 4.31636 12.6836 4.99023 12.9148 5.85296C13.0013 6.1758 13.0007 6.53821 13.0001 6.90693C13.0001 6.93792 13 6.96895 13 7.00001H21C21.5523 7.00001 22 7.44772 22 8.00001C22 8.55229 21.5523 9.00001 21 9.00001H13C13 9.03107 13.0001 9.0621 13.0001 9.09309C13.0007 9.46181 13.0013 9.82422 12.9148 10.1471C12.6836 11.0098 12.0098 11.6837 11.147 11.9148C10.8242 12.0013 10.4618 12.0007 10.0931 12.0001C10.0621 12.0001 10.0311 12 10 12C9.96894 12 9.93791 12.0001 9.90692 12.0001C9.5382 12.0007 9.17579 12.0013 8.85295 11.9148C7.99022 11.6837 7.31635 11.0098 7.08519 10.1471C6.99868 9.82421 6.99928 9.46181 6.9999 9.09308C6.99995 9.0621 7 9.03106 7 9.00001H5C4.44772 9.00001 4 8.55229 4 8.00001C4 7.44772 4.44772 7.00001 5 7.00001H7C7 6.96895 6.99995 6.93792 6.9999 6.90693C6.99928 6.53821 6.99868 6.1758 7.08519 5.85296C7.31635 4.99023 7.99022 4.31636 8.85295 4.08519C9.17579 3.99869 9.5382 3.99929 9.90693 3.9999ZM9.49861 6.00536C9.39195 6.01022 9.36685 6.01805 9.37059 6.01704C9.19804 6.06328 9.06327 6.19805 9.01704 6.3706C9.0162 6.37411 9.00963 6.40483 9.00535 6.49861C9.00024 6.61064 9 6.75845 9 7.00001V9.00001C9 9.24156 9.00024 9.38937 9.00535 9.5014C9.01021 9.60806 9.01804 9.63315 9.01704 9.62942C9.06327 9.80196 9.19804 9.93674 9.37059 9.98297C9.36685 9.98197 9.39195 9.98979 9.49861 9.99466C9.61063 9.99977 9.75844 10 10 10C10.2416 10 10.3894 9.99977 10.5014 9.99466C10.608 9.98979 10.6331 9.98197 10.6294 9.98297C10.802 9.93674 10.9367 9.80196 10.983 9.62942C10.982 9.63315 10.9898 9.60806 10.9946 9.5014C10.9998 9.38937 11 9.24156 11 9.00001V7.00001C11 6.75845 10.9998 6.61064 10.9946 6.49861C10.9898 6.39196 10.982 6.36686 10.983 6.3706M9.49861 6.00536C9.61063 6.00025 9.75844 6.00001 10 6.00001L9.49861 6.00536ZM10 6.00001C10.2416 6.00001 10.3894 6.00025 10.5014 6.00536L10 6.00001ZM10.5014 6.00536C10.5952 6.00963 10.6259 6.0162 10.6294 6.01704L10.5014 6.00536ZM10.6298 6.01713C10.6298 6.01713 10.6296 6.0171 10.6294 6.01704L10.6298 6.01713ZM15.9069 11.9999C15.9379 12 15.9689 12 16 12C16.0311 12 16.0621 12 16.0931 11.9999C16.4618 11.9993 16.8242 11.9987 17.147 12.0852C18.0098 12.3164 18.6836 12.9902 18.9148 13.853C19.0013 14.1758 19.0007 14.5382 19.0001 14.9069C19.0001 14.9379 19 14.9689 19 15H21C21.5523 15 22 15.4477 22 16C22 16.5523 21.5523 17 21 17H19C19 17.0311 19.0001 17.0621 19.0001 17.0931C19.0007 17.4618 19.0013 17.8242 18.9148 18.1471C18.6836 19.0098 18.0098 19.6837 17.147 19.9148C16.8242 20.0013 16.4618 20.0007 16.0931 20.0001C16.0621 20.0001 16.0311 20 16 20C15.9689 20 15.9379 20.0001 15.9069 20.0001C15.5382 20.0007 15.1758 20.0013 14.853 19.9148C13.9902 19.6837 13.3164 19.0098 13.0852 18.1471C12.9987 17.8242 12.9993 17.4618 12.9999 17.0931C12.9999 17.0621 13 17.0311 13 17H5C4.44772 17 4 16.5523 4 16C4 15.4477 4.44772 15 5 15H13C13 14.969 12.9999 14.9379 12.9999 14.9069C12.9993 14.5382 12.9987 14.1758 13.0852 13.853C13.3164 12.9902 13.9902 12.3164 14.853 12.0852C15.1758 11.9987 15.5382 11.9993 15.9069 11.9999ZM15.4986 14.0054C15.392 14.0102 15.3669 14.018 15.3706 14.017C15.198 14.0633 15.0633 14.1981 15.017 14.3706C15.018 14.3669 15.0102 14.392 15.0054 14.4986C15.0002 14.6106 15 14.7585 15 15V17C15 17.2416 15.0002 17.3894 15.0054 17.5014C15.0102 17.6081 15.018 17.6332 15.017 17.6294C15.0633 17.802 15.198 17.9367 15.3706 17.983C15.3669 17.982 15.392 17.9898 15.4986 17.9947C15.6106 17.9998 15.7584 18 16 18C16.2416 18 16.3894 17.9998 16.5014 17.9947C16.608 17.9898 16.6331 17.982 16.6294 17.983C16.802 17.9367 16.9367 17.802 16.983 17.6294C16.982 17.6332 16.9898 17.6081 16.9946 17.5014C16.9998 17.3894 17 17.2416 17 17V15C17 14.7585 16.9998 14.6106 16.9946 14.4986C16.9898 14.392 16.982 14.3669 16.983 14.3706C16.9367 14.1981 16.802 14.0633 16.6294 14.017C16.6331 14.018 16.608 14.0102 16.5014 14.0054C16.3894 14.0002 16.2416 14 16 14C15.7584 14 15.6106 14.0002 15.4986 14.0054Z"
                                        fill="#0F1729" />
                                </svg>
                                <button class="btn btn-lg btn-ghost mt-5 search-bar__filters-mb-btn d-lg-none" type="button"
                                    hidden>Show
                                    filters</button>
                                <HomeFilterDropdown :propertyCategory="selectedPropertyCategory"></HomeFilterDropdown>
                                <button type class="btn btn-color-black btn-icon search-bar__submit-btn"
                                    @click="toListings()">
                                    <svg width="25px" height="25px" viewBox="0 0 15 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.5 8.5H4C4 8.77614 4.22386 9 4.5 9V8.5ZM8.5 8.5V9C8.77614 9 9 8.77614 9 8.5H8.5ZM8.5 6H9C9 5.86739 8.94732 5.74021 8.85355 5.64645L8.5 6ZM6.5 4L6.85355 3.64645C6.65829 3.45118 6.34171 3.45118 6.14645 3.64645L6.5 4ZM4.5 6L4.14645 5.64645C4.05268 5.74021 4 5.86739 4 6H4.5ZM14.8536 14.1464L10.8536 10.1464L10.1464 10.8536L14.1464 14.8536L14.8536 14.1464ZM6.5 12C3.46243 12 1 9.53757 1 6.5H0C0 10.0899 2.91015 13 6.5 13V12ZM12 6.5C12 9.53757 9.53757 12 6.5 12V13C10.0899 13 13 10.0899 13 6.5H12ZM6.5 1C9.53757 1 12 3.46243 12 6.5H13C13 2.91015 10.0899 0 6.5 0V1ZM6.5 0C2.91015 0 0 2.91015 0 6.5H1C1 3.46243 3.46243 1 6.5 1V0ZM4.5 9H8.5V8H4.5V9ZM9 8.5V6H8V8.5H9ZM8.85355 5.64645L6.85355 3.64645L6.14645 4.35355L8.14645 6.35355L8.85355 5.64645ZM6.14645 3.64645L4.14645 5.64645L4.85355 6.35355L6.85355 4.35355L6.14645 3.64645ZM4 6V8.5H5V6H4Z"
                                            fill="#fff" stroke-width="1" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Text on Video  -->
                    <div class="splash-unit-info">
                        <div class="text-center" ref="scrollReference2">
                            <h1 class="main-text">BUY A PROPERTY FROM AED 750,000 <br>
                                & OBTAIN AN INVESTOR VISA </h1>
                        </div>
                        <a data-bs-toggle="modal" data-bs-target="#learnMoreModal"
                            class="btn btn-block btn-transparent btn-learn-more a-btn creative anima">
                            <span class="a-btn-line "></span>
                            Learn
                            more</a>
                        <div v-if="showAlert" class="alert" role="alert">
                            Thanks for signing up! we will contact you shortly.
                        </div>
                        <div class="mt-5 col-lg-12">
                            <div class="left-icons col-lg-6">
                                <a href="https://www.facebook.com/a1propertiesuae/" target="_blank" class="">
                                    <!-- facebook -->
                                    <svg fill="#fff" width="30px" height="30px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z" />
                                    </svg>
                                </a>
                                <!-- Instagram -->
                                <a href="https://www.instagram.com/a1propertiesuae/" target="_blank" class="">
                                    <svg fill="#fff" width="30px" height="30px" viewBox="0 0 48 48"
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
                                <a href="https://www.youtube.com/@a1propertiesuae" target="_blank" class="">
                                    <!-- Youtube -->
                                    <svg fill="#fff" height="20px" width="20px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="-271 311.2 256 179.8" xml:space="preserve">
                                        <path d="M-59.1,311.2h-167.8c0,0-44.1,0-44.1,44.1v91.5c0,0,0,44.1,44.1,44.1h167.8c0,0,44.1,0,44.1-44.1v-91.5
	C-15,355.3-15,311.2-59.1,311.2z M-177.1,450.3v-98.5l83.8,49.3L-177.1,450.3z" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/company/a1propertiesuae" target="_blank" class="">
                                    <!-- Linkedin -->
                                    <svg fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="23px" height="23px"
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
                                <a href="https://www.tiktok.com/@a1propertiesuae" target="_blank" class="">

                                    <!-- TIktok -->
                                    <svg fill="#fff" width="25px" height="25px" viewBox="0 0 32 32" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fa1propertiesuae"
                                    target="_blank" class="" style="margin-left:-4px">
                                    <!-- Twitter X -->
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                        viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#fff"
                                            stroke-width="2" stroke="none">
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
                            </div>

                            <div class="center-svg down-arrow" :class="{ hide: shouldHide }">
                                <svg fill="#fff" width="30px" height="30px" viewBox="0 0 32 32" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.256 8.606c0-0.269 0.106-0.544 0.313-0.75 0.412-0.412 1.087-0.412 1.5 0l14.119 14.119 13.913-13.912c0.413-0.412 1.087-0.412 1.5 0s0.413 1.088 0 1.5l-14.663 14.669c-0.413 0.413-1.088 0.413-1.5 0l-14.869-14.869c-0.213-0.213-0.313-0.481-0.313-0.756z">
                                    </path>
                                </svg>


                            </div>

                        </div>
                    </div>
                </div>

            </section>
            <!-- section after video -->
            <div class="">
                <div class="vstack">
                    <div class="page-entry" style="row-gap: 1rem;">
                        <!-- Featured PROPERTEIS -->
                        <div v-if="!isMobile"
                            class="g-col-3 g-start-1 g-col-lg-4 g-col-sm-4 mt-5 g-start-lg-6 g-start-sm-6 pt-5 border-top"
                            :style="borderStylesFirst">
                        </div>
                        <div v-else class="g-start-2 g-col-sm-2 mt-5 pt-5 border-top mx-auto border-top "
                            :style="borderStylesFirstMbl">
                        </div>
                        <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2">
                            <h3 class="heading-sections">COMMUNITIES</h3>
                            <Suspense v-if="fullyLoaded">
                                <FeaturedCommunities></FeaturedCommunities>
                            </Suspense>
                            <div class="line-left-parent left-line" :style="{ backgroundColor: leftLineColor }"></div>
                            <div class="line-right-parent right-line" :style="{ backgroundColor: rightLineColor }"></div>
                        </div>
                        <div v-if="!isMobile"
                            class="g-col-3 g-start-1 g-col-lg-4 g-col-sm-4 mt-2 g-start-lg-6 g-start-sm-6 pt-5 border-top"
                            :style="borderStyles">
                        </div>
                        <div v-else class="g-start-2 g-col-sm-2 mt-5 pt-5 border-top mx-auto border-top "
                            :style="borderStylesMbl">
                        </div>
                        <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2">
                            <h3 class="heading-sections">PROPERTIES</h3>
                            <Suspense v-if="fullyLoaded">
                                <FeaturedProperties></FeaturedProperties>
                            </Suspense>
                        </div>
                        <div v-if="!isMobile" class="g-col-3 g-start-1 g-col-lg-4 mt-2 g-start-lg-6 pt-5 border-top"
                            :style="borderStyles2">
                        </div>
                        <div v-else class="g-start-2 g-col-sm-2 mt-5 pt-5 border-top mx-auto border-top "
                            :style="borderStylesTwoMbl">
                        </div>
                        <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2">
                            <h3 class="heading-sections">PROJECTS</h3>
                            <Suspense v-if="fullyLoaded">
                                <FeaturedDevelopments></FeaturedDevelopments>
                            </Suspense>
                        </div>
                        <div v-if="!isMobile" class="g-col-3 g-start-1 g-col-lg-4 mt-2 g-start-lg-6 pt-5 border-top"
                            :style="borderStyles3">
                        </div>
                        <div v-else class="g-start-2 g-col-sm-2 mt-5 pt-5 border-top mx-auto border-top "
                            :style="borderStylesThreeMbl">
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="">
            <div class="vstack">
                <div class="page-entry" style="row-gap: 1rem;">
                    <!-- Featured PROPERTEIS -->
                    <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 mt-5">
                        <h3 class="heading-sections">INTERACTIVE MAP</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-entry" style="row-gap: 1rem;">
            <Suspense v-if="mainContentLoaded">
                <InteractiveMap></InteractiveMap>
            </Suspense>
        </div>
        <div class="page-entry" style="row-gap: 1rem;">
            <div v-if="!isMobile" class="g-col-3 g-start-1 g-col-lg-4 mt-6 g-start-lg-6 pt-5 border-top"
                :style="borderStyles4">
            </div>
            <div v-else class="g-start-2 g-col-sm-2 mt-5 pt-5 border-top mx-auto border-top " :style="borderStylesFourMbl">
            </div>
        </div>
        <div class="" style="row-gap: 1rem;" id="blogSection">

            <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 mb-5">
                <Suspense v-if="fullyLoaded">
                    <Blogs></Blogs>
                </Suspense>
                <div class="page-entry" style="row-gap: 1rem;">
                    <div v-if="!isMobile" class="g-col-3 g-start-1 g-col-lg-4 mt-2 g-start-lg-6 pt-5 border-top"
                        :style="borderStyles5">
                    </div>
                    <div v-else class="g-start-2 g-col-sm-2 mt-5 pt-5 border-top mx-auto border-top "
                        :style="borderStylesFiveMbl">
                    </div>
                </div>
            </div>

        </div>
        <div id="footerTargetSection"></div>

        <!-- ##### Modals HERE #### -->
        <!-- Learn More Modal -->
        <div class="modal fade learn-more-modal-outside" id="learnMoreModal" tabindex="-1"
            aria-labelledby="listing-body-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-learn-more">
                <div class="modal-content learn-more-modal-content">
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
                                        style="color:#7D7D7D;font-weight:800;">LOOK NO FURTHER<span
                                            style="font-weight: 800;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">!</span>
                                    </span><br>
                                    <span style="color:#c67058;">
                                        LET AI & EXPERTS<br>
                                        DO THE WORK
                                    </span>
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
                                        <input id="emailInput" name="email" type="email" class="form-control"
                                            v-model="email" placeholder="E-mail address" value autocomplete="email" required
                                            @input="clearError('email')">
                                        <label class="form-label" for="emailInput">Email</label>
                                        <div class="error-message" v-if="validationErrors.email">Email is required.</div>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input id="" name="searchingFor" v-model="searchingFor" type="text"
                                            class="form-control" placeholder="" required>
                                        <label for="" class="form-label">Searching for<span
                                                style="font-family:'Arial Narrow', Arial, sans-serif;font-size:14px;">?</span></label>
                                    </div>
                                    <!-- Add similar validation logic for other fields if needed -->

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
        <!-- Mobile Fiter Dropdown -->
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
                                        aria-controls="villas-new-tab-pane" aria-selected="true"
                                        @click="toggleCategory('slae')">Buy
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="custom-button nav-link " id="villas-reductions-tab" data-tab-has-flickity
                                        data-bs-toggle="tab" data-bs-target="#villas-new-tab-pane" type="button" role="tab"
                                        aria-controls="villas-reductions-tab-pane" aria-selected="true"
                                        @click="toggleCategory('rent')">Rent</button>
                                </li>
                            </ul>
                            <fieldset class="search-form__group mt-3">
                                <legend class="search-form__legend">Property Type</legend>
                                <ul class="search-form-checks-cols">
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="home_villa" name="type[]"
                                                value="apartment" v-model="selectedPropertyTypes">
                                            <label class="form-check-label" for="home_villa">Apartments</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="home_apartment"
                                                name="type[]" value="townhouse" v-model="selectedPropertyTypes">
                                            <label class="form-check-label" for="home_apartment">Townhouses</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="home_penthouse"
                                                name="type[]" value="villa" v-model="selectedPropertyTypes">
                                            <label class="form-check-label" for="home_penthouse">Villas</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="home_loft-duplex"
                                                name="type[]" value="penthouse" v-model="selectedPropertyTypes">
                                            <label class="form-check-label" for="home_loft-duplex">Penthouses</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="home_loft-duplex"
                                                name="type[]" value="office" v-model="selectedPropertyTypes">
                                            <label class="form-check-label" for="home_loft-duplex">Offices</label>
                                        </div>
                                    </li>
                                    <li class="search-form-checks-cols__item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="home_townhouses"
                                                name="type[]" value="plot" v-model="selectedPropertyTypes">
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
                                            <select class="form-select" id="home_max-price" name="price[max]"
                                                aria-label="Select maximum price" v-model="selectedMaxPrice">
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
                    </div>
                    <div class="modal-footer search-form__footer btn-centered">
                        <div class="btn-centered">
                            <button data-bs-dismiss="modal" @click="toListings()"
                                class="btn btn-ghost mt-3 mb-3 btn-block btn-design" style="border:1px solid #c67057;">
                                Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- REQUEST CALLBACK MODAL -->
        <FooterRequestCallbackModal></FooterRequestCallbackModal>
    </main>
    <div ref="triggerSection"></div>
    <Footer></Footer>
</template>

<script>
import { defineAsyncComponent, ref, onMounted } from 'vue';

const Nav = defineAsyncComponent(() => import('../components/Nav.vue'));
const Footer = defineAsyncComponent(() => import('../components/Footer.vue'));
const SearchFilterDropdown = defineAsyncComponent(() => import('../components/SearchFilterModal.vue'));
const FooterRequestCallbackModal = defineAsyncComponent(() => import('../components/FooterRequestCallbackModal.vue'));
const Blogs = defineAsyncComponent(() => import('./Blog/Blogs.vue'));
const HomeFilterDropdown = defineAsyncComponent(() => import('../components/HomeFilterDropdown.vue'));
const InteractiveMap = defineAsyncComponent(() => import('../components/InteractiveMap.vue'));
const FeaturedProperties = defineAsyncComponent(() => import('../components/FeaturedProperties.vue'));
const FeaturedDevelopments = defineAsyncComponent(() => import('../components/FeaturedDevelopments.vue'));
const FeaturedCommunities = defineAsyncComponent(() => import('../components/FeaturedCommunities.vue'));

export default {
    name: 'Home',
    components: {
        Nav,
        Footer,
        SearchFilterDropdown,
        FooterRequestCallbackModal,
        Blogs,
        FeaturedProperties,
        FeaturedDevelopments,
        HomeFilterDropdown,
        FeaturedCommunities,
        InteractiveMap
    },
    setup() {
        const mainContentLoaded = ref(false);
        const interactiveMapLoaded = ref(false);
        const featuredPropertiesLoaded = ref(false);

        const loadMainContent = async () => {
            await new Promise(resolve => setTimeout(resolve, 1));
            mainContentLoaded.value = true;
        };

        const loadFeaturedProperties = async () => {
            await new Promise(resolve => setTimeout(resolve, 1));
            featuredPropertiesLoaded.value = true;
        };
        onMounted(async () => {
            // Load main content
            await loadMainContent();
            await loadFeaturedProperties();
        });

        return {
            mainContentLoaded,
            featuredPropertiesLoaded,
            interactiveMapLoaded,
        };
    },
    data() {
        return {
            firstSectionPassed: "",
            fullyLoadedMap: "",
            fullyLoaded: false,
            videoUrl: localStorage.getItem('videoUrl') || '',
            videoUrlMbl: localStorage.getItem('videoUrlMbl') || '',
            selectedPropertyCategory: "sale",
            villas: "villas",
            apartments: "apartments",
            developments: "developments",
            isScrolled: false,
            shouldHide: false,
            leftLineColor: '#fff',
            rightLineColor: '#fff',
            scrollPosition: 10,
            scrollPositionFirst: 10,
            scrollPositionFirstMbl: 10,
            scrollPositionTwoMbl: 10,
            scrollPositionThreeMbl: 10,
            scrollPositionFourMbl: 10,
            scrollPositionFiveMbl: 10,
            scrollPositionMbl: 10,
            initialOffset: 100,
            scrollPositionTwo: 0,
            scrollPositionThree: 0,
            scrollPositionFour: 0,
            scrollPositionFive: 0,
            initialOffsetTwo: 50,
            triggerScrollPosition: 0,
            scrollReached: false,
            otherPurposeVariable: false,
            isMobile: false,
            backendUrl: 'https://a1properties.ae/backend/',
            // backendUrl: 'http://192.168.2.46:8001/',
            selectedPropertyTypes: [],
            selectedMinBedrooms: '',
            selectedMaxBedrooms: '',
            selectedMaxPrice: '',
            propertyCategory: 'sale',
            //formValues
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
            clientIp: "",


        };
    },

    mounted() {


        this.initialOffset = (window.innerWidth - 4 * 20) / 2;
        this.initialOffsetTwo = (window.innerWidth - 2 * 20) / 2;

        window.addEventListener('scroll', this.handleScroll);
        window.addEventListener("resize", this.checkScreenWidth);


    },
    beforeUnmount() {
        window.removeEventListener('scroll', this.handleScroll);
    },
    created() {
        this.checkScreenWidth()
        if (!localStorage.getItem('videoLoaded')) {
            this.loadVideo();
        }
        this.fullyLoaded = true;
        if (this.$refs.myVideoDesktop) {

            this.$refs.myVideoDesktop.setAttribute('autoplay', 'true');
        }
        if (this.$refs.myVideoMobile) {

            this.$refs.myVideoMobile.setAttribute('autoplay', 'true');
        }
    },
    destroyed() {
        window.removeEventListener("resize", this.checkScreenWidth);
    },
    computed: {
        hasErrors() {
            return Object.keys(this.validationErrors).length > 0;
        },
        borderStyles() {
            const borderWidth = Math.max(0, this.scrollPosition - this.initialOffset);
            const breakpoints = [1920, 1450, 1000, 600];
            const maxBorderWidths = [382, 286, 265, 14];
            let clampedBorderWidth = 0;
            for (let i = 0; i < breakpoints.length; i++) {
                if (window.innerWidth >= breakpoints[i]) {
                    clampedBorderWidth = Math.min(borderWidth, maxBorderWidths[i]);
                    break;
                }
            }
            const actualWidth = clampedBorderWidth;
            return {
                width: `calc(100% + ${4 * actualWidth}px)`,
                marginLeft: `-${2 * actualWidth}px`,
                marginRight: `-${2 * actualWidth}px`,
            };
        },
        borderStylesFirst() {
            const borderWidth = Math.max(0, this.scrollPositionFirst - this.initialOffset);
            const breakpoints = [1920, 1450, 1000, 600];
            const maxBorderWidths = [382, 286, 265, 14];
            let clampedBorderWidth = 0;
            for (let i = 0; i < breakpoints.length; i++) {
                if (window.innerWidth >= breakpoints[i]) {
                    clampedBorderWidth = Math.min(borderWidth, maxBorderWidths[i]);
                    break;
                }
            }
            const actualWidth = clampedBorderWidth;
            return {
                width: `calc(100% + ${4 * actualWidth}px)`,
                marginLeft: `-${2 * actualWidth}px`,
                marginRight: `-${2 * actualWidth}px`,
            };
        },
        borderStyles2() {
            const borderWidth = Math.max(0, this.scrollPositionTwo - this.initialOffset);
            const breakpoints = [1920, 1450, 1000, 600];
            const maxBorderWidths = [382, 286, 265, 14];
            let clampedBorderWidth = 0;
            for (let i = 0; i < breakpoints.length; i++) {
                if (window.innerWidth >= breakpoints[i]) {
                    clampedBorderWidth = Math.min(borderWidth, maxBorderWidths[i]);
                    break;
                }
            }
            const actualWidth = clampedBorderWidth;
            return {
                width: `calc(100% + ${4 * actualWidth}px)`,
                marginLeft: `-${2 * actualWidth}px`,
                marginRight: `-${2 * actualWidth}px`,
            };
        },
        borderStyles3() {
            const borderWidth = Math.max(0, this.scrollPositionThree - this.initialOffset);
            const breakpoints = [1920, 1450, 1000, 600];
            const maxBorderWidths = [382, 286, 265, 14];
            let clampedBorderWidth = 0;
            for (let i = 0; i < breakpoints.length; i++) {
                if (window.innerWidth >= breakpoints[i]) {
                    clampedBorderWidth = Math.min(borderWidth, maxBorderWidths[i]);
                    break;
                }
            }
            const actualWidth = clampedBorderWidth;
            return {
                width: `calc(100% + ${4 * actualWidth}px)`,
                marginLeft: `-${2 * actualWidth}px`,
                marginRight: `-${2 * actualWidth}px`,
            };
        },
        borderStyles4() {
            const borderWidth = Math.max(0, this.scrollPositionFour - this.initialOffset);
            const breakpoints = [1920, 1450, 1000, 600];
            const maxBorderWidths = [382, 286, 265, 14];
            let clampedBorderWidth = 0;
            for (let i = 0; i < breakpoints.length; i++) {
                if (window.innerWidth >= breakpoints[i]) {
                    clampedBorderWidth = Math.min(borderWidth, maxBorderWidths[i]);
                    break;
                }
            }
            const actualWidth = clampedBorderWidth;
            return {
                width: `calc(100% + ${4 * actualWidth}px)`,
                marginLeft: `-${2 * actualWidth}px`,
                marginRight: `-${2 * actualWidth}px`,
            };
        },
        borderStyles5() {
            const borderWidth = Math.max(0, this.scrollPositionFive - this.initialOffset);
            const breakpoints = [1920, 1450, 1000, 600];
            const maxBorderWidths = [382, 286, 265, 14];
            let clampedBorderWidth = 0;
            for (let i = 0; i < breakpoints.length; i++) {
                if (window.innerWidth >= breakpoints[i]) {
                    clampedBorderWidth = Math.min(borderWidth, maxBorderWidths[i]);
                    break;
                }
            }
            const actualWidth = clampedBorderWidth;
            return {
                width: `calc(100% + ${4 * actualWidth}px)`,
                marginLeft: `-${2 * actualWidth}px`,
                marginRight: `-${2 * actualWidth}px`,
            };
        },
        // ON MOBILES THESE CODES FOR
        borderStylesFirstMbl() {
            const borderWidth = Math.max(0, this.scrollPositionFirstMbl - this.initialOffset);
            const actualWidth = Math.min(borderWidth, 24);
            const marginLeft = `-${4 * actualWidth}px`;
            const marginRight = `-${4 * actualWidth}px`;
            return {
                width: `calc(50% + ${8 * actualWidth}px)`,
                marginLeft,
                marginRight,
            };
        },
        borderStylesMbl() {
            const borderWidth = Math.max(0, this.scrollPositionMbl - this.initialOffset);
            const actualWidth = Math.min(borderWidth, 24);
            const marginLeft = `-${4 * actualWidth}px`;
            const marginRight = `-${4 * actualWidth}px`;
            return {
                width: `calc(50% + ${8 * actualWidth}px)`,
                marginLeft,
                marginRight,
            };
        },
        borderStylesTwoMbl() {
            const borderWidth = Math.max(0, this.scrollPositionTwoMbl - this.initialOffset);
            const actualWidth = Math.min(borderWidth, 24);
            const marginLeft = `-${4 * actualWidth}px`;
            const marginRight = `-${4 * actualWidth}px`;
            return {
                width: `calc(50% + ${8 * actualWidth}px)`,
                marginLeft,
                marginRight,
            };
        },
        borderStylesThreeMbl() {
            const borderWidth = Math.max(0, this.scrollPositionThreeMbl - this.initialOffset);
            const actualWidth = Math.min(borderWidth, 24);
            const marginLeft = `-${4 * actualWidth}px`;
            const marginRight = `-${4 * actualWidth}px`;
            return {
                width: `calc(50% + ${8 * actualWidth}px)`,
                marginLeft,
                marginRight,
            };
        },
        borderStylesFourMbl() {
            const borderWidth = Math.max(0, this.scrollPositionFourMbl - this.initialOffset);
            const actualWidth = Math.min(borderWidth, 24);
            const marginLeft = `-${4 * actualWidth}px`;
            const marginRight = `-${4 * actualWidth}px`;
            return {
                width: `calc(50% + ${8 * actualWidth}px)`,
                marginLeft,
                marginRight,
            };
        },
        borderStylesFiveMbl() {
            const borderWidth = Math.max(0, this.scrollPositionFiveMbl - this.initialOffset);
            const actualWidth = Math.min(borderWidth, 24);
            const marginLeft = `-${4 * actualWidth}px`;
            const marginRight = `-${4 * actualWidth}px`;
            return {
                width: `calc(50% + ${8 * actualWidth}px)`,
                marginLeft,
                marginRight,
            };
        },

    },
    methods: {
        loadVideo() {
            this.videoUrl = localStorage.getItem('videoUrl') || '';
            this.videoUrlMbl = localStorage.getItem('videoUrlMbl') || '';
            localStorage.setItem('videoLoaded', 'true');
        },
        handleScroll() {
            this.isScrolled = window.scrollY > 0;
            const element = this.$refs.downArrow;
            if (window.scrollY > 20) {
                this.shouldHide = true;
            } else {
                this.shouldHide = false;
            }
            if (window.scrollY > 800) {
                this.firstSectionPassed = true;
            } else {
                this.firstSectionPassed = false;
            }
            const triggerSectionPosition = this.$refs.triggerSection.getBoundingClientRect().top;
            if (triggerSectionPosition < window.innerHeight / 2) {
                this.leftLineColor = '#c67057';
                this.rightLineColor = '#c67057';
            } else {
                this.leftLineColor = '#c67057';
                this.rightLineColor = '#c67057';
            }
            // Update the scroll position
            this.scrollPosition = window.scrollY;
            this.scrollPositionFirst = window.scrollY + 500;
            if (window.scrollY > 2050) {
                this.scrollPositionTwo = (window.scrollY + 300) - 1650;
            }
            if (window.scrollY > 2900) {
                this.scrollPositionThree = window.scrollY - 2650;
            }
            if (window.scrollY > 3600) {
                this.scrollPositionFour = window.scrollY - 3350;
            }
            if (window.scrollY > 4500) {
                this.scrollPositionFive = window.scrollY - 4150;
            }
            // For Mobiles
            this.scrollPositionFirstMbl = window.scrollY - 400;

            this.scrollPositionMbl = window.scrollY - 900;
            this.scrollPositionTwoMbl = window.scrollY - 1400;
            this.scrollPositionThreeMbl = window.scrollY - 1900;
            this.scrollPositionFourMbl = window.scrollY - 2700;
            this.scrollPositionFiveMbl = window.scrollY - 3300;
        },

        homePage() {
            this.$router.push(`/team`);
        },
        toProjects() {
            this.$router.push(`/projects`);
        },
        toggleCategory(type) {
            this.propertyCategory = type;
        },
        toListings() {
            const queryParams = {
                category: this.propertyCategory,
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
                const dropdownPanel = this.$refs.dropdownPanel;
                if (dropdownPanel.classList.contains('show')) {
                    dropdownPanel.classList.remove('show');
                }
            });
        },
        checkScreenWidth() {
            this.isMobile = window.innerWidth <= 600;
        },
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
            return Object.keys(this.validationErrors).length === 0;
        },
        clearError(fieldName) {
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
                        formLocation: '',
                        pageUrl: window.location.href,
                    }, {
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    });

                    if (response.status === 200) {
                        this.showAlert = true;
                        this.$refs.Close.click();
                        setTimeout(() => {
                            this.showAlert = false;
                        }, 5000);
                        this.requestSent = true;
                        this.clearForm();
                    }
                }
            } catch (error) {
            } finally {
                this.isSubmitting = false;
            }
        },
        handleTelInput(phone, phoneObject) {
            if (phoneObject?.formatted) {
                this.countryData = phoneObject.country;
            }
        },
    },
}
</script>

<style scoped="scss">
@preload url('https://a1properties.ae/backend/storage/a1/dubai-bg.webp');
@preload url('https://a1properties.ae/backend/storage/a1/home-video.mp4');
@preload url('https://a1properties.ae/backend/storage/a1/home-video-mobile.mp4');

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

.align-section-center {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.expert-text {
    text-align: justify;
}

.btn-find-agent {
    color: #000;
    border: solid #959595
}

.btn-find-agent:hover {
    background-color: #000;
    color: #fff;

}

.btn-sell-property {
    background-color: #fff;
    color: #000;
    border: solid #959595
}

.btn-sell-property:hover {
    background-color: #000;
    color: #fff;
    border: solid #959595
}

.btns-experts {
    margin: 0 auto;
    width: 50%;
}

.exlcusive-text {
    line-height: 30px;
}

.main-text {
    font-weight: bold;
    text-shadow: 2px 2px 0px #000000
}

.new-devs {
    color: #fff;
    font-weight: bold;
    font-size: 16px;
    text-shadow: 1px 1px 0px #000000
}

.search-filter-mt {
    margin-top: 8%;

}

.video-background {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    padding-bottom: 56.25%;
    overflow: hidden;
    -webkit-box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.75);
    box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.75);
}

.video-background video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5) !important;
    -webkit-box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.9) !important;
    -moz-box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.9) !important;
    box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.9) !important;
}

.video-background::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 50px;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0));
}

.video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 50%;
    background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0));
}

.main-logo {
    width: 250px;
}

.masthead-logo__link {
    cursor: pointer;
}

.btn-transparent {
    border: 2px solid #fff;
    color: #fff;
    filter: drop-shadow(3px 5px 2px rgb(0 0 0 / 0.4));

}

@media (min-width:100px) {
    .video-background {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 56.25%;
        overflow: hidden;
        -webkit-box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.75);
        box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.75);
    }

    .video-background video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5) !important;
        -webkit-box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.9) !important;
        -moz-box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.9) !important;
        box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.9) !important;
    }

    .video-background::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 50px;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0));
    }
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

.filter-container {
    display: flex;
    justify-content: center;
    flex-wrap: nowrap;
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



@media only screen and (max-width: 600px) {
    .a-btn {
        padding-left: 20px !important;
        padding-right: 20px !important;
        font-size: 14px !important;
        line-height: 12px !important;
    }

    .masthead-search-btn {
        height: 35px !important;
    }

    .video-background {
        position: relative;
        width: 100%;
        height: 100%;
        padding-bottom: 56.25%;
        overflow: hidden;
        -webkit-box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.75);
        box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.75);
    }

    .video-background video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5) !important;
        -webkit-box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.9) !important;
        -moz-box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.9) !important;
        box-shadow: inset 0px 0px 103px 0px rgba(0, 0, 0, 0.9) !important;
    }

    .video-background::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 50px;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0));
    }

    .main-text {
        font-size: 14px;
        text-shadow: 1px 1px 0px #000000
    }

    .nav-tray {
        background: transparent;
        position: fixed;
        top: -1px;
        width: 100%;
        transition: background-color 0.3s;
        z-index: 1000;
    }

    .scrolled {
        background-color: #000;
    }

    .nav-tray-item {
        color: #fff;
    }

    .masthead-search-btn {
        margin-top: 14em;
        max-width: 20em;
    }

    .mobile-logo {
        width: 180px;
    }

    .masthead-search-btn {
        padding-right: 0px;
    }

    .masthead-search-btn__icon {
        padding: 12px;
        margin-left: 10px;
    }

    .splash-unit-info__btn {
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .filter-mbl {}

    .masthead-search-btn__text {
        border: none;
        padding-left: 10px;
        padding-right: 10px;
        width: 100%;
        font-size: 14px !important;

    }

    .masthead-search-btn__text:focus {
        border: none;
        padding-left: 10px;
        padding-right: 15px;
        outline: none;
        font-size: 14px !important;
    }

    .masthead-search-btn {
        gap: 0px;
    }

    .btn:active {
        color: #fff;
    }

    .btn-check:active+.btn,
    .btn-check:checked+.btn,
    .btn.active,
    .btn.show,
    .btn:active {
        color: #fff;
    }

}

.down-arrow {
    position: fixed;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    animation: moveArrow 1s infinite alternate;
    transition: opacity 0.5s;
    cursor: pointer;
}

.hide {
    opacity: 0;
    transition: opacity 0.5s;
}

.left-icons {
    margin-top: 80px;
    text-align: left !important;
}

.left-icons svg {
    filter: drop-shadow(3px 5px 2px rgb(0 0 0 / 0.4));
    width: 10%;
    margin: 0px;
    margin-right: 10px;

}

.left-icons a:hover {
    background-color: #c67057;
    border-radius: 10%;
    padding: 40px;
}

@keyframes moveArrow {
    0% {
        transform: translate(-50%, 0);
    }

    100% {
        transform: translate(-50%, 10px);
    }

}

@media only screen and (max-width: 600px) {
    .btn-centered {
        display: flex;
        justify-content: center;
        flex-wrap: nowrap;
        text-align: center;
    }

    .btn-close-filter {
        position: absolute;
        right: -50px;
        top: 0px;
        color: white;
        cursor: pointer;
    }

    .left-icons {
        margin-top: 65px;
        text-align: center !important;
        margin: 15px;

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

    .line-left-parent {
        position: fixed;
        height: 20%;
        width: 0.1px;
        background-color: #c67057;
        z-index: 1;
        -webkit-animation: lineAnimation 6s infinite alternate;
        animation: lineAnimation 6s infinite alternate;
        transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
    }

    .line-right-parent {
        position: fixed;
        height: 10%;
        width: 0.1px;
        background-color: #fff;
        z-index: 1;
        animation: lineAnimationRight 6s infinite alternate;
    }

    .left-line {
        left: 3.5% !important;
        top: 0;
    }

    .right-line {
        right: 3.5% !important;
        top: 0;
    }

    .heading-sections {
        text-align: center;
    }

    @keyframes lineAnimation {
        0% {
            height: 60%;
        }

        100% {
            height: 80%;
        }
    }

    @keyframes lineAnimationRight {
        0% {
            height: 20%;
        }

        100% {
            height: 50%;
        }
    }

    @-webkit-keyframes lineAnimation {
        0% {
            -webkit-transform: scaleX(1);
        }

        100% {
            -webkit-transform: scaleX(-1);
        }
    }

}

.rak-logo {
    text-align: right;
    margin-top: -80px;

}

.line-left-parent {
    position: fixed;
    height: 20%;
    width: 0.1px;
    background-color: #c67057;
    z-index: 1;
    animation: lineAnimation 6s infinite alternate;
}

.line-right-parent {
    position: fixed;
    height: 10%;
    width: 0.1px;
    background-color: #fff;
    z-index: 1;
    animation: lineAnimationRight 6s infinite alternate;
}

.left-line {
    left: 2%;
    top: 0;
}

.right-line {
    right: 2%;
    top: 0;
}

@keyframes lineAnimation {
    0% {
        height: 60%;
    }

    100% {
        height: 90%;
    }
}

@keyframes lineAnimationRight {
    0% {
        height: 40%;
    }

    100% {
        height: 60%;
    }
}

.border-container {
    transition: all 0.3s ease;
    border-top: 2px solid #c67057;
    padding: 10px;
}

.filter-icon {
    cursor: pointer;
}

.a-btn {
    font-size: 16px;
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
    color: #fff;
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
        border-top-color: #fff;
        border-right-color: #fff;
        border-bottom-color: #fff;
        border-left-color: #fff;
    }

    100% {
        width: 0;
        height: 0;
        border-top-color: transparent;
        border-right-color: transparent;
    }
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
}
</style>
