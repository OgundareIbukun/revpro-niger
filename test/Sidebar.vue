<template>
    <!-- Left Menu -->
    <aside class="sidebar fixed-sidebar" >
        <nav class="sidebar-nav">
            <ul class="metismenu"  >
                <li class="title">
                    MAIN NAVIGATION
                </li>
                <li  v-if="this.$roles.user_role <= this.$roles.admin" id="dashboard-menu" >
                    <router-link to="/" exact>
                        <i class="material-icons">dashboard</i>
                        <span class="nav-label"> Dashboard</span>
                    </router-link>
                </li>
                <li  id="driver-menu" v-if="this.$roles.user_role <= this.$roles.admin  " >
                    <a href="javascript:void(0)" class="menu-toggle">
                        <i class="material-icons">supervised_user_circle</i>
                        <span class="nav-label">Drivers</span>
                    </a>
                    <ul>
                        <li id="driver-dsb-submenu" >
                            <router-link to="/dashboard/drivers" exact>
                                <span class="nav-label">Dashboard</span>
                            </router-link>
                        </li>
                        <li id="driver-ps-submenu" >
                            <router-link to="/payslips" exact>
                                <span class="nav-label">Pay Slip</span>
                            </router-link>
                        </li>
                        <li id="driver-mgt-submenu">
                            <router-link to="/drivers" exact>

                                <span class="nav-label">Manage</span>
                            </router-link>
                        </li>

                    </ul>
                </li>

                <li  id="fleet-menu" v-if="this.$roles.user_role <= this.$roles.maintenance" >
                    <a href="javascript:void(0)" class="menu-toggle">
                        <i class="material-icons">local_shipping</i>
                        <span class="nav-label">Fleets</span>
                    </a>
                    <ul>
                        <li v-if="this.$roles.user_role >= this.$roles.super_admin && this.$roles.user_role <= this.$roles.admin"  id="fleet-dsb-submenu" >
                            <router-link to="/fleets/dashboard" exact>
                                <span class="nav-label">Dashboard</span>
                            </router-link>
                        </li>
                        <li v-if="this.$roles.user_role <= this.$roles.admin"  id="fleet-mgt-submenu">
                            <router-link to="/fleets" exact>

                                <span class="nav-label">Manage</span>
                            </router-link>
                        </li>
                        <li  v-if="this.$roles.user_role <= this.$roles.super_admin || this.$roles.user_role == this.$roles.maintenance"    id="fleet-mt-submenu">
                            <router-link to="/fleets/maintenances" exact>
                                <span class="nav-label">Maintenance</span>
                            </router-link>
                        </li>

                    </ul>
                </li>


                <li  id="trip-menu" v-if="this.$roles.user_role <= this.$roles.super_admin" >
                    <a href="javascript:void(0)" class="menu-toggle">
                        <i class="material-icons">sync_alt</i>
                        <span class="nav-label">Trips</span>
                    </a>
                    <ul>
                        <li id="route-submenu">
                            <router-link to="/routes" exact>

                                <span class="nav-label">Routes</span>
                            </router-link>
                        </li>
                        <li id="trip-mgt-submenu">
                            <router-link to="/trips" exact>

                                <span class="nav-label">Manage</span>
                            </router-link>
                        </li>

                    </ul>
                </li>


                <li  id="client-menu" v-if="this.$roles.user_role <= this.$roles.super_admin" >
                    <a href="javascript:void(0)" class="menu-toggle">
                        <i class="material-icons">supervisor_account</i>
                        <span class="nav-label">Clients</span>
                    </a>
                    <ul>
                        <li id="client-dsb-submenu" >
                            <router-link to="/dashboard/clients" exact>
                                <span class="nav-label">Dashboard</span>
                            </router-link>
                        </li>
                        <li id="client-mgt-submenu">
                            <router-link to="/clients" exact>

                                <span class="nav-label">Manage</span>
                            </router-link>
                        </li>

                    </ul>
                </li>
                <li v-if="this.$roles.user_role <= this.$roles.admin ||  this.$roles.user_role <= this.$roles.fleet_owner " id="fleetowner-menu" >
                    <a href="javascript:void(0)" class="menu-toggle">
                        <i class="material-icons">groups</i>
                        <span class="nav-label">Fleet Owners</span>
                    </a>
                    <ul>
                        <li id="fleetowner-dsb-submenu" >
                            <router-link to="/dashboard/fleetowners" exact>
                                <span class="nav-label">Dashboard</span>
                            </router-link>
                        </li>
                        <li    id="fleetowner-mgt-submenu">
                            <router-link to="/fleetowners" exact>

                                <span class="nav-label">Manage</span>
                            </router-link>
                        </li>

                    </ul>
                </li>

                <li  id="report-menu" v-if="this.$roles.user_role <= this.$roles.admin || this.$roles.user_role <= this.$roles.fleet_owner" >
                    <a href="javascript:void(0)" class="menu-toggle">
                        <i class="material-icons">list_alt</i>
                        <span class="nav-label">Reports</span>
                    </a>
                    <ul>

                        <!--<li id="validateInv-submenu" >-->
                            <!--<router-link to="/invoice/validation" exact>-->
                                <!--<span class="nav-label">Invoice Validation</span>-->
                            <!--</router-link>-->
                        <!--</li>-->
                        <!--<li id="invoice-submenu" >-->
                            <!--<router-link to="/invoice" exact>-->
                                <!--<span class="nav-label">Invoice Listing</span>-->
                            <!--</router-link>-->
                        <!--</li>-->
                        <li id="reFleet-submenu">
                            <router-link to="/report/fleet" exact>

                                <span class="nav-label">Fleet Report</span>
                            </router-link>
                        </li>
                        <li id="reFleets-submenu">
                            <router-link to="/report/fleets" exact>

                                <span class="nav-label">Multiple (Fleet) Reports</span>
                            </router-link>
                        </li>

                        <li id="reOwner-submenu">
                            <router-link to="/report/fleetowners" exact>

                                <span class="nav-label">Owner Report</span>
                            </router-link>
                        </li>

                    </ul>
                </li>
                <li id="user-menu" v-if="this.$roles.user_role == this.$roles.super_admin"  >
                    <router-link to="/users" exact>
                        <i class="material-icons">person</i>
                        <span class="nav-label"> Users </span>
                    </router-link>
                </li>

            </ul>
        </nav>
    </aside>
    <!-- #END# Left Menu -->
    </div>
</template>

<script>
   // import {Roles} from 'roles'
    export default {
        name: "Sidebar",


        data(){
            return {


//                user_auths:[],
//                user_auth:{
//                    'id':'',
//                    'name':'',
//                    'role_id':''
//                }

            }

        },
        created: function(){
            //this.getAuth();

            //  this.getDashboard();
            if( [1,2,3].includes(this.$roleId) )
                this.dashboardMenu = 1;              //[1,2,3].includes($this.$roleId);




        },
        methods:{
//            getAuth: async function(){
//                try{
//                    await axios.get('/user/details')
//                        .then( response => {
//                            //console.log(response.data.data);
//                            this.user_auth.id = response.data.data['id'];
//                            this.user_auth.name = response.data.data['name'];
//                            this.user_auth.role_id = response.data.data['role_id'];
//
////                            if(this.user_auth.role_id == 5 ){
////                                $('#home-menu').hide();
////                                window.location.href='/home#/dashboard/chairman';
////                            }else if(this.user_auth.role_id == 6 )
////                            {
////                                $('#home-menu').hide();
////                                window.location.href='/home#/dashboard/commissioner';
////
////                            }
//
//
//
//                            if(this.user_auth.role_id <= 2 ){  // chairman
//                                $('#dashboard-menu').removeClass('hide');
//
//                            }
//                            if(this.user_auth.role_id == 2  ){     // super admin
//                                $('#dashboard-menu').removeClass('hide');
//                                $('#driver-menu').removeClass('hide')
//                                $('#fleet-menu').removeClass('hide');
//                                $('#client-menu').removeClass('hide');
//                                $('#fleetowner-menu').removeClass('hide');
//                                $('#trip-menu').removeClass('hide');
//                                $('#report-menu').removeClass('hide');
//                                $('#user-menu').removeClass('hide');
//
//
//                            }
//                            else if(this.user_auth.role_id == 3 ){     // admins
//                                $('#dashboard-menu').removeClass('hide');
//                                $('#driver-menu').removeClass('hide');
//                                $('#fleet-menu').removeClass('hide');
//                                $('#trip-menu').removeClass('hide');
//                                $('#trip-create-submenu').addClass('hide');
//                                $('#report-menu').removeClass('hide');
//
//                            }
//                            else if(this.user_auth.role_id == 4 ){    // maintenance officer
//                                $('#driver-menu').removeClass('hide');
//                                $('#fleet-menu').removeClass('hide');
//                                $('#fleet-mgt-submenu').addClass('hide');
//                                $('#report-menu').remoteClass('hide');
//                                $('#validateInv-submenu').addClass('hide');
//                                $('#invoice-submenu').addClass('hide');
//
//                            }
//                            else if(this.user_auth.role_id == 5 ){     // fleet owner
//                                $('#fleet-menu').removeClass('hide');
//                                $('#fleetowner-menu').removeClass('hide');
//
//
//                            }
//
//
//                            //  console.log( this.user_auth.name );
//                        })
//                        .catch( (error) => { console.log(error) });
//                }catch (e) {
//                    console.log(e);
//                }
//            }


        },
        mounted() {




        },

    }

</script>


<style scoped>

</style>