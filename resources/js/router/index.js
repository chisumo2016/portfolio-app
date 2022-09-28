import { createRouter,createWebHistory} from "vue-router";

/** Admin Dashboard*/
import homeAdminIndex  from  '../components/admin/home/index.vue';
import adminAboutIndex from  '../components/admin/about/index.vue';
import adminServiceIndex from  '../components/admin/service/index.vue';
import adminSkillIndex from  '../components/admin/skill/index.vue';

/** Import Pages*/
import homePageIndex  from  '../components/pages/home/index.vue';
import login  from   '../components/auth/login.vue';

/** Import Not Found*/
import notFound from "../components/notFound.vue";

const  routes = [
    /** admin*/
    {
        path: '/admin/home',
        name:'adminHome',
        component: homeAdminIndex,
        meta:{
            requiresAuth :true
        }
    },
    {
        path: '/admin/about',
        name: 'adminAbout',
        component: adminAboutIndex,
        meta:{
            requiresAuth :true
        }
    },

    {
        path: '/admin/services',
        name: 'adminService',
        component: adminServiceIndex,
        meta:{
            requiresAuth :true
        }
    },

    {
        path: '/admin/skills',
        name: 'adminSkill',
        component: adminSkillIndex,
        meta:{
            requiresAuth :true
        }
    },


    /** pages*/
    {
        path: '/',
        name:'Home',
        component: homePageIndex,
        meta:{
            requiresAuth :false
        }
    },


    /** login*/
    {
        path: '/login',
        name:'Login',
        component: login,
        meta:{
            requiresAuth :false
        }
    },
    /** notFound */
    {
        path: '/:pathMatch(.*)*',
        name:'notFound',
        component: notFound,
        meta:{
            requiresAuth :false
        }
    }

]

const  router = createRouter({
    history : createWebHistory(),
    routes,
})

router.beforeEach((to,from) =>{
  if (to.meta.requiresAuth && !localStorage.getItem('token')){
      return { name: 'Login'}
  }
  if (to.meta.requiresAuth == false && localStorage.getItem('token')){
      return { name: 'adminHome'}
  }
})

export  default router;
