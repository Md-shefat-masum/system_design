import './bootstrap';
import { createApp } from 'vue';
import Dashbord from './views/App.vue';
import { createRouter, createWebHashHistory } from 'vue-router';
import { createPinia } from 'pinia'

import SuperAdminLayout from "./views/pages/superadmin/Layout.vue";
import SuperAdminDashboard from "./views/pages/superadmin/Dashboard.vue";
import SuperAdminReportAll from "./views/pages/superadmin/management/reports/All.vue";
import SuperAdminUserAll from "./views/pages/superadmin/management/users/All.vue";

import admin_routes from "./views/pages/admin/routes"

const routes = [

    admin_routes,

    {
        path: '/super-admin',
        component: SuperAdminLayout,
        children: [
            {
                path: '',
                component: SuperAdminDashboard
            },
            {
                path: 'report',
                name: 'report',
                component: SuperAdminReportAll
            },
            {
                path: 'user',
                name: "user",
                component: SuperAdminUserAll
            },
        ]
    },

];


const router = createRouter({
    history: createWebHashHistory(),
    routes, // short for `routes: routes`
})

const pinia = createPinia()
const app = createApp({});

app.component('dahsboard', Dashbord);
app.use(pinia)
app.use(router);
app.mount('#app')

