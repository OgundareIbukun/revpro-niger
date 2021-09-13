import Vue from 'vue';
import {Roles} from './roles';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'Dashboard',
        component: () =>
            import ('./components/Dashboard.vue')
    },
    {
        path: '/changepassword',
        name: 'Change Password',
        component: () =>
            import ('./components/ChangePassword.vue')
    },
    {
        path: '/drivers',
        name: 'Drivers',
        component: () =>
            import ('./components/Driver.vue')
    },

    {
        path: '/fleetowners',
        name: 'Fleet Owners',
        component: () =>
            import ('./components/FleetOwner.vue')
    },
    {
        path: '/fleets',
        name: 'Fleets',
        component: () =>
            import ('./components/Fleet.vue')
    },

    {
        path: '/routes',
        name: 'Routes',
        component: () =>
            import ('./components/Route.vue')
    },
    {
        path: '/clients',
        name: 'Clients',
        component: () =>
            import ('./components/Client.vue')
    },
    {
        path: '/fleets/maintenances',
        name: 'Maintenance Cost',
        component: () =>
            import ('./components/Maintenance.vue')
    },
    {
        path: '/trips',
        name: 'Trip ',
        component: () =>
            import ('./components/Trip.vue')
    },
    {
        path: '/payslips',
        name: 'Pay Slip ',
        component: () =>
            import ('./components/Payslip.vue')
    },
    {
        path: '/users',
        name: 'Users',
        component: () =>
            import ('./components/User.vue'),
        beforeEnter: (to, from, next) => {
            if (Roles.user_role != Roles.super_admin )
                next({ path: '/access_deny' });
          else next()
        }

    },
    {
        path: '/report',
        name: 'Report',

        children:[

            {
                path: 'fleet',
                name:'fleetReport',
                component: () =>
                import ('./components/FleetReport.vue'),
                meta: Roles
                // beforeEnter: (to, from, next) => {
                //     if (Roles.user_role != Roles.super_admin )
                //         next({ path: '/access_deny' });
                //     else next()
                // }

            },

            {
                path: 'fleets',
                name:'fleetReports',
                component: () =>
                    import ('./components/FleetReports.vue'),
                meta: Roles
                // beforeEnter: (to, from, next) => {
                //     if (Roles.user_role != Roles.super_admin || Roles.user_role != Roles.fleet_owner )
                //         next({ path: '/access_deny' });
                //     else next()
                // }

            },

            {
                path: 'fleetowners',
                name: 'FleetOwner Report',
                component: () =>
                    import ('./components/OwnerReport.vue'),
                meta: Roles
            }

        ],





    },

    {
        path: '/access_deny',
        name: 'AccessDenied',
        component: () =>
            import ('./components/AccessDeny.vue')
    },
    // {
    //     path: '/report/fleets',
    //     name: 'Fleet Reports',
    //     component: () =>
    //         import ('./components/FleetReports.vue')
    // },








];

const router = new VueRouter({
    routes: routes
});

export default router;

router.beforeEach((to, from, next ) => {
    if ( to.path == '/report/fleet' &&  ( to.meta.Roles.user_role !== to.meta.Roles.super_admin || to.meta.Roles.user_role != to.meta.Roles.fleet_owner) )
        next('/access_deny');

    else if ( to.path == '/report/fleets' && (to.meta.Roles.user_role != to.meta.Roles.super_admin) )
        next('/access_deny');

    else if ( to.path == '/report/fleetowners' && (to.meta.Roles.user_role != to.meta.Roles.super_admin ) )
        next('/access_deny');

     next();
})