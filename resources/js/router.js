import { createWebHistory, createRouter } from 'vue-router';

const home = () => import('./pages/home.vue');
const sellProperty = () => import('./pages/SellProperty.vue');
import PropertyListings from './pages/Property/PropertyListings.vue';
const AgentListings = () => import('./pages/Property/AgentListings.vue');
import propertyDetail from './pages/Property/propertyDetail.vue';
const AreaList = () => import('./pages/AreaList.vue');
const DevelopersList = () => import('./pages/DevelopersList.vue');
const DeveloperDetail = () => import('./pages/DeveloperDetail.vue');
const DevelopmentsList = () => import('./pages/DevelopmentsList.vue');
const DevelopmentDetail = () => import('./pages/DevelopmentDetail.vue');
const AreaDetail = () => import('./pages/AreaDetail.vue');
const BlogsListings = () => import('./pages/Blog/BlogsListings.vue');
import BlogDetail from './pages/Blog/BlogDetail.vue';
const PrivacyPolicy = () => import('./pages/PrivacyPolicy.vue');
const About = () => import('./pages/About.vue');
const Team = () => import('./pages/Team.vue');
const ManagementTeam = () => import('./pages/ManagementTeam.vue');
const Contact = () => import('./pages/Contact.vue');
const InteractiveMapPage = () => import('./pages/InteractiveMapPage.vue');
import store from './store';


const routes = [
    {
        path: '/',
        name: 'Home',
        component: home,
    },
    {
        path: '/list-property',
        name: 'SellProperty',
        component: sellProperty
    },
    {
        path: '/properties/:param?/:type?',
        name: 'PropertyListings',
        component: PropertyListings,
        props: true,
        meta: {
            $store: store,
        },
        beforeEnter: (to, from, next) => {
            const storeInstance = to.meta.$store;
            const loading = storeInstance.state.properties.loading;
            if (!loading) {
                next();
            }
        },
    },
    {
        path: '/investment-advisors/:param?',
        name: 'AgentListings',
        component: AgentListings,
        props: true,
    },
    {
        path: "/property/:slug",
        name: 'propertyDetail',
        component: propertyDetail
    },
    {
        path: '/communities',
        name: 'Communities',
        component: AreaList
    },
    {
        path: '/developers',
        name: 'Developers',
        component: DevelopersList
    },
    {
        path: '/developer/:slug',
        name: 'developerDetail',
        component: DeveloperDetail,
        props: route => ({ slug: route.params.slug, item: route.query }),

    },
    {
        path: '/projects',
        name: 'Projects',
        component: DevelopmentsList,
        props: true,

    },
    {
        path: '/project/:slug',
        name: 'developmentDetail',
        component: DevelopmentDetail,

    },
    {
        path: '/community/:slug',
        name: 'CommunityDetail',
        component: AreaDetail
    },
    {
        path: '/team',
        name: 'Team',
        component: Team
    },
    {
        path: '/blogs',
        name: 'BlogsListings',
        component: BlogsListings
    },
    {
        path: '/blog-detail/:slug',
        name: 'BlogDetail',
        component: BlogDetail
    },
    {
        path: '/privacy-policy',
        name: 'privacyPolicy',
        component: PrivacyPolicy
    },
    {
        path: '/about-us',
        name: 'About',
        component: About
    },
    {
        path: '/management-team',
        name: 'ManagementTeam',
        component: ManagementTeam
    },
    {
        path: '/contact-us',
        name: 'Contact',
        component: Contact
    },
    {
        path: '/map',
        name: 'InteractiveMapPage',
        component: InteractiveMapPage
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'NotFound',
        redirect: { name: 'Home' },
    },
];


const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to, from, savedPosition) {
        return { left: 0, top: 0 };
    },
});
router.beforeEach((to, from, next) => {
    window.scrollTo(0, 0);
    next();
});

export default router;
