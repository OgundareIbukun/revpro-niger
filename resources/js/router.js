import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from './components/dashboard/Dashboard.vue';
import {Roles} from './roles';
import Auth from './auth';
let  auth  =  new Auth(window.permission);


Vue.use(VueRouter)

const routes = [{

       /*
         *@commissioner and @lga chairman  redirect to their dashboards, otherwise general dashboard
        */

        path: '/',
        name: 'dashboard',
    meta:{layout:"default"},
        component: Dashboard,
    // beforeEnter: (to, from, next) => {
    //
    //        if (Roles.user_role == Roles.hod )
    //         next( '/cash-invoices');
    //         else if (Roles.user_role == Roles.dir_revenue )
    //         next( '/dashboard/dir-revenue');
    //         else if (Roles.user_role == Roles.chairman )
    //         next( '/dashboard/chairman');
    //      else if (Roles.user_role == Roles.commissioner)
    //         next( '/dashboard/commissioner');
    //      else
    //          next()
    //
    //     }

    },

        // #invoice listing: Non-cash & cash
        /*
            Redirect chairman and commissioner to access_denied Page, otherwise allow them
         */
    {
        path: '/noncash-invoices',
        name: 'Non Cash Invoice Listing',
        meta:{layout:"default"},
        component: () =>
            import ('./components/invoiceListing/noncash-invoices.vue'),
        beforeEnter: (to, from, next) => {
            if (!auth.isPaymentReport() )
                next( '/access_denied');
            else
                next()
        }

    },
    {
        path: '/cash-invoices',
        name: 'Cash Invoice Listing',
        meta:{layout:"default"},
        component: () =>
            import ('./components/invoiceListing/cash-invoices.vue'),
        beforeEnter: (to, from, next) => {
            if (!auth.isPaymentReport() )
                next( '/access_denied');
            else
                next()
        }
    },

      /*  Agent section
       *   All users allowed except commissioner and chairman
       *    @route /agents: only superAdmin allowed
       * */

    {
        path: '/agents',
        name: 'agents',
        meta:{layout:"default"},
        component: () =>
            import ('./components/agent/Agents.vue'),
        beforeEnter: (to, from, next) => {
            if (auth.isAgent() )
                next();
            else
                next( '/access_denied')
        }
    },
    {
        path: '/dashboard/agent',
        name: 'Agent_dashboard',
        meta:{layout:"default"},
        component: () =>
            import ('./components/agent/Agent-dashboard.vue'),
        beforeEnter: (to, from, next) => {
            if (!auth.isAgent())
                next( '/access_denied');
            else
                next()
        }
    },


    /*  RevenuePoints section; Dashboard & Listing
     *   All users allowed except commissioner and chairman
     * */

    {
        path: '/dashboard/revenuepoint',
        name: 'RevPoint_dashboard',
        meta:{layout:"default"},
        component: () =>
            import ('./components/revPoint/Revpoints-dashboard.vue'),
        beforeEnter: (to, from, next) => {
            if (!auth.isRevPoint() )
                next( '/access_denied');
            else
                next()
        }
    },
    {
        path: '/revenuepoint',
        name: 'revenuepoint',
        meta:{layout:"default"},
        component: () =>
            import ('./components/revPoint/Revenuepoints.vue'),
        beforeEnter: (to, from, next) => {
            if (auth.isRevPoint() )
                next();
            else
                next( '/access_denied')
        }
    },

    /*  Service section;
    *   Only Super_Admin user allowed.
     * */

    {
        path: '/services',
        name: 'services',
        meta:{layout:"default"},
        component: () =>
            import ('./components/service/Services.vue'),
        beforeEnter: (to, from, next) => {
            if (auth.isService() )
                next();
            else
                next( '/access_denied');
        }
    },

    /*   User section;
     *   Only Super_Admin user allowed.
     * */

    {
        path: '/user',
        name: 'user',
        meta:{layout:"default"},
        component: () =>
            import ('./components/user/User.vue'),
        beforeEnter: (to, from, next) => {
            if (auth.isUser() )
                next();
            else
                next( '/access_denied');
        }
    },


    /*  Service section;
     *   Only Super_Admin  and audit user allowed.
     * */

    {
        path: '/settlement',
        name: 'Settlement Report',
        meta:{layout:"default"},
        component: () =>
            import ('./components/settlement/Settlement.vue'),
        beforeEnter: (to, from, next) => {
            if (auth.isSettlement() )
                next();
            else
                next( '/access_denied');
        }
    },

    /*  Remittance section;
     *   Only Super_Admin and audit user allowed.
     * */

    {
        path: '/remittance',
        name: 'Remittance',
        meta:{layout:"default"},
        component: () =>
            import ('./components/remittance/Remittance.vue'),

        beforeEnter: (to, from, next) => {
            if (auth.isRemittance() )
                next();
            else
                next( '/access_denied');
        }
    },
    {
        path: '/remittance/cashreceipt/:txn_ref',
        name: 'Remittance Details',
        meta:{layout:"default"},
        component: () =>
            import ('./components/remittance/CashReceiptListing.vue'),
        beforeEnter: (to, from, next) => {
            if (auth.isRemittance() )
                next();
            else
                next( '/access_denied');
        }
    },

{
    path: '/lga',
        name: 'Lga',
    meta:{layout:"default"},
    component: () =>
    import ('./components/lga/index.vue'),
        beforeEnter: (to, from, next) => {
    if (auth.isLga() )
        next();
    else
        next( '/access_denied');
   }
},


    /*  Dashboards section;

     * */

        {
        path: '/dashboard/dir-revenue',
        name: 'Director-Revenue',
            meta:{layout:"default"},
        component: () =>
            import ('./components/dashboard/Dir-revenue.vue'),
            beforeEnter: (to, from, next) => {
                if (Roles.user_role == Roles.dir_revenue )
                    next();
                else
                    next( '/access_denied');
            }
    },


    {
        path: '/dashboard/chairman',
        name: 'Chairman',
        meta:{layout:"default"},
        component: () =>
            import ('./components/dashboard/Chairman.vue'),
        beforeEnter: (to, from, next) => {
            if (Roles.user_role == Roles.chairman )
                next();
            else
                next( '/access_denied');
        }
    },


    {
        path: '/dashboard/commissioner',
        name: 'Commissioner',
        meta:{layout:"default"},
        component: () =>
            import ('./components/dashboard/Commissioner.vue'),
        beforeEnter: (to, from, next) => {
            if (Roles.user_role == Roles.commissioner )
                next();

            else
                next( '/access_denied');
        }
    },

    /*  Change Password section;
     *   all users allowed.
     * */

    {
        path: '/changepassword',
        name: 'Change Password',
        meta:{layout:"default"},
        component: () =>
            import ('./components/setting/ChangePassword.vue')
    },


    /*  Access Deny section;
     *   all users allowed.
     * */

    {
        path: '/access_denied',
        name: 'Access Deny',
        component: () =>
            import ('./components/setting/AccessDeny.vue')
    },

    {
        path: '*',
        name: 'PageNotFound',
        meta:{layout:"default"},
        component: () =>
            import ('./components/setting/pageNotFound.vue')
    },

    {
        path: '/forgotpassword',
        name: 'resetPassword',
        meta:{layout:"no-sidebar"},
        component:  () =>
            import ('./components/main/forgotpassword.vue')
    },

    // #Training module
    /*
     Only superadmin should allow here, otherwise deny
     */
    {
        path: '/agent/training',
        name: 'Training',
        meta:{ layout:"default" },
        component: () =>
            import ('./components/training/Training.vue'),
        beforeEnter: (to, from, next) => {
            if (!auth.isAgent() )
                next( '/access_denied');
            else
                next()
        }

    },
{
    path: '/invoice/:ref',
        name: 'Invoice',
    meta: {layout: "no-sidebar"},
        component: () => import ('./components/invoiceListing/invoice.vue'),
    beforeEnter: (to, from, next) => {
        if (!auth.isPaymentReport() )
            next( '/access_denied');
        else
            next()
    }


},


{
    path: '/permission',
        name: 'Permission',
    meta:{ layout:"default" },
    component: () =>
    import ('./components/setting/permission.vue'),
        beforeEnter: (to, from, next) => {
    if ( !auth.isPermission())
        next( '/access_denied');
    else
        next()
}

},


    // {
    //     path: '/verifyOTP',
    //     name: 'verifyotp',
    //     meta:{layout:"no-sidebar"},
    //     component:  () =>
    //         import ('./components/main/verifyotp.vue')
    // },





];

const router = new VueRouter({
    routes: routes
});

export default router;