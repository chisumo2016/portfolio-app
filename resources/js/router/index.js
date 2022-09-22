import { createRouter,createWebHistory} from "vue-router";

/** Admin Dashboard*/
import homeAdminIndex  from  '../components/admin/home/index.vue';

/** Import Pages*/
import homePageIndex  from  '../components/pages/home/index.vue';

/** Import Not Found*/
import notFound from "../components/notFound.vue";

const  routes = [
    /** admin*/
    {
        path: '/admin/home',
        component: homeAdminIndex
    },
    /** pages*/
    {
        path: '/',
        component: homePageIndex
    },
    /** notFound */
    {
        path: '/:pathMatch(.*)*',
        component: notFound
    }

]

const  router = createRouter({
    history : createWebHistory(),
    routes,
})

export  default router;
