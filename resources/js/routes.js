import Home from './pages/Home.vue';
import HomeLocal from './pages/HomeLocal.vue';

export const routes = [{
        path: '/',
        component: HomeLocal,
    },
    {
        path: '/home',
        component: Home,
        meta: {
            requiresAuth: true
        }
    }
];
