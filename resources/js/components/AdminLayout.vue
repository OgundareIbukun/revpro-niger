<template>
    <div>

        <!--<Sidebar></Sidebar>-->

        <!-- Left Menu -->
        <aside class="sidebar">
            <nav class="sidebar-nav">
                <ul class="metismenu"  >
                    <li class="title">
                        MAIN NAVIGATION
                    </li>
                    <li id="dashboard-menu"  >
                        <router-link to="/" exact>
                            <i class="fa fa-dashboard"> </i>
                            <span class="nav-label"> Dashboard</span>
                        </router-link>
                    </li>

                    <!--<li id="dir-revenue-menu"-->
                    <!--v-if="this.$roles.user_role== this.$roles.dir_revenue "-->
                    <!--&gt;-->
                    <!--<router-link to="/dashboard/dir-revenue" exact>-->
                    <!--<i class="fa fa-dashboard"> </i>-->
                    <!--<span class="nav-label">Dashboard</span>-->
                    <!--</router-link>-->
                    <!--</li>-->
                    <!--<li id="chairman-menu"-->
                    <!--v-if="this.$roles.user_role == this.$roles.chairman"-->
                    <!--&gt;-->
                    <!--<router-link to="/dashboard/chairman" exact>-->
                    <!--<i class="fa fa-dashboard"> </i>-->
                    <!--<span class="nav-label">Dashboard</span>-->
                    <!--</router-link>-->
                    <!--</li>-->
                    <!--<li id="commissioner-menu"-->
                    <!--v-if="this.$roles.user_role == this.$roles.commissioner  "-->
                    <!--&gt;-->
                    <!--<router-link to="/dashboard/commissioner" exact>-->
                    <!--<i class="fa fa-dashboard"> </i>-->
                    <!--<span class="nav-label">Dashboard</span>-->
                    <!--</router-link>-->
                    <!--</li>-->
                    <li  id="invoicelisting-menu"
                         v-if="$auth.isPaymentReport()  "
                    >
                        <a href="javascript:void(0)" class="menu-toggle">
                            <i class="fa fa-wpforms"> </i>
                            <span class="nav-label">Payment Reports</span>
                        </a>
                        <ul>
                            <li id="ncil-submenu" >
                                <router-link to="/noncash-invoices" exact>
                                    <span class="nav-label">Non-Cash Collection</span>
                                </router-link>
                            </li>
                            <li id="cil-submenu">
                                <router-link to="/cash-invoices" exact>
                                    <span class="nav-label">Cash Collection</span>
                                </router-link>
                            </li>

                        </ul>
                    </li>


                    <li  id="agent-menu"
                         v-if="$auth.isAgent()"
                    >
                        <a href="javascript:void(0)" class="menu-toggle">
                            <i class="fa fa-user-plus"> </i>
                            <span class="nav-label">Agents</span>
                        </a>
                        <ul>
                            <li  id="agt-dashboard-submenu" >
                                <router-link to="/dashboard/agent" exact>
                                    <span class="nav-label">Dashboard</span>
                                </router-link>
                            </li>
                            <li >
                                <router-link to="/agents" exact>

                                    <span class="nav-label">Manage</span>
                                </router-link>
                            </li>
                            <li >
                                <router-link to="/agent/training" exact>

                                    <span class="nav-label">Training</span>
                                </router-link>
                            </li>

                        </ul>
                    </li>

                    <li  id="revenue-point-menu"
                         v-if="$auth.isRevPoint() "
                    >
                        <a href="javascript:void(0)" class="menu-toggle">
                            <i class="fa fa-tasks"> </i>
                            <span class="nav-label">Revenue Points</span>
                        </a>
                        <ul>
                            <li id="rvp-dashboard-submenu">
                                <router-link to="/dashboard/revenuepoint" exact>
                                    <span class="nav-label">Dashboard</span>
                                </router-link>
                            </li>
                            <li >
                                <router-link to="/revenuepoint" exact>

                                    <span class="nav-label">Manage</span>
                                </router-link>
                            </li>

                        </ul>
                    </li>

                    <li id="service-menu"
                        v-if="$auth.isService()"
                    >
                        <router-link to="/services" exact>
                            <i class="fa fa-credit-card"> </i>
                            <span class="nav-label"> Services </span>
                        </router-link>
                    </li>

                    <li id="lga-menu"
                        v-if="$auth.isLga() "
                    >
                        <router-link to="/lga" exact>
                            <i class="fa fa-bank"> </i>
                            <span class="nav-label">LGAs</span>
                        </router-link>
                    </li>

                    <li id="user-menu"
                        v-if="$auth.isUser()"
                    >
                        <router-link to="/user" exact>
                            <i class="fa fa-user"> </i>
                            <span class="nav-label">Users</span>
                        </router-link>
                    </li>

                    <li id="settlement-menu"
                        v-if="$auth.isSettlement()"
                    >
                        <router-link to="/settlement" exact>
                            <i class=" fa fa-list-alt"> </i>
                            <span class="nav-label">Settlement Details</span>
                        </router-link>
                    </li>

                    <li id="remittance-menu"
                        v-if="$auth.isRemittance()"
                    >
                        <router-link to="/remittance" exact>
                            <i class=" fa fa-credit-card-alt"> </i>
                            <span class="nav-label">Remittances</span>
                        </router-link>
                    </li>


                    <li id="lga-menu5"
                        v-if="$auth.isPermission()"
                    >
                        <router-link to="/permission" exact>
                            <i class="fa fa-cog"> </i>
                            <span class="nav-label">View Permission</span>
                        </router-link>
                    </li>

                </ul>
            </nav>
        </aside>
        <!-- #END# Left Menu -->
    <!--</div>-->

        <section class="content dashboard">

            <router-view></router-view>

        </section>

        <FlashMessage position="right bottom"></FlashMessage>



    </div>
</template>

<script>
   // import Sidebar from './Sidebar';
    //import dashboard from './Dashboard';

    export default {
        name: "adminLayout",
        components:{
            //dashboard
           // Sidebar,

        },

    }
</script>

<style scoped>

</style>