<template>

    <div>
        <div class="page-heading">
            <h1><small>{{roleName}} </small><br>PAYMENT REPORTS</h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
                        <i class="fa fa-dashboard"> </i>
                        <span class="nav-label">Revops</span>
                    </router-link>
                </li>
                <li class="active">Payment Reports</li>
                <li class="active">Cash Invoices</li>
                <li class="active">Overview</li>
            </ol>
        </div>

        <div class="page-body">

            <div class="row clearfix">

                <div id="" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                    <!--<v-overlay :value="overlay">-->
                    <!--<v-progress-circular indeterminate size="64"></v-progress-circular>-->
                    <!--</v-overlay>-->

                    <div id="metrics" class="card waitme info-box infobox-type-5 hover-expand-effect blue-mix">

                        <v-overlay
                                :absolute="absolute"
                                :value="card_1"
                        > <v-progress-circular indeterminate size="60"></v-progress-circular>
                        </v-overlay>

                        <div class="content"  >
                            <!--<div class="text-head">ANALYSIS</div>-->
                            <i class="number fa fa-tag"></i>
                            <div class="text"><b>CASH RECEIPT</b></div>

                            <div class="number" > ₦{{ this.$shared.suffixNotation(metrics.cash_receipt) }}
                                 </div>


                        </div>
                    </div>



                </div>

                <div id="metrics2" class=" col-lg-3 col-md-3 col-sm-6 col-xs-12">

                    <div class="card info-box infobox-type-5 hover-expand-effect orange-mix">
                        <!--<div class="icon">-->
                        <!--<i class="material-icons">payment</i>-->
                        <!--</div>-->
                        <v-overlay
                                :absolute="absolute"
                                :value="card_2"
                        > <v-progress-circular indeterminate size="60"></v-progress-circular>
                        </v-overlay>
                        <div class="content">
                            <i class="number fa fa-tags"></i>
                            <div class="text"><b>TOTAL REMITTANCE</b></div>

                            <div class="number" > ₦{{  this.$shared.suffixNotation(metrics.total_remittance) }}
                                <span class="text"> Remitted</span>
                            </div>

                            <div v-if="$roles.user_role == $roles.admin || $roles.user_role == $roles.super_admin"   class="number" > ₦{{ this.$shared.suffixNotation((metrics.unremitted_cash)) }}
                                <span class="text"> Unremitted</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="metrics3" class=" col-lg-3 col-md-3 col-sm-6 col-xs-12">

                    <div class="waitme card info-box infobox-type-5 hover-expand-effect aqua-mix">
                        <v-overlay
                                :absolute="absolute"
                                :value="card_3"
                        > <v-progress-circular indeterminate size="60"></v-progress-circular>
                        </v-overlay>
                        <div class="content">
                            <i class="number fa fa-tags"></i>
                            <!--<div class="text-head">ANALYSIS</div>-->
                            <div class="text"> TOTAL</div>
                            <div class="number" >  ₦{{ this.$shared.suffixNotation((metrics.bank)) }}
                                <span class="text"> Total In The Bank</span>
                            </div>

                            <div class="text"> </div>
                            <div class="number" > ₦{{ this.$shared.suffixNotation((metrics.total_generated)) }}
                                <span class="text"> Total Generated</span>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Filter Result </div>
                <div class="panel-body">
                    <div class="row clearfix">
                        <form   v-on:submit.prevent="searchResult">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="button" title="Toggle" data-toggle>
                                                <i class="fa fa-calendar">
                                                    <span aria-hidden="true" class="sr-only">Toggle</span>
                                                </i>
                                            </button>
                                        </div>
                                        <flat-pickr
                                                v-model="fromDate"
                                                :config="config"
                                                class="form-control"
                                                placeholder="FROM DATE"
                                                name="date">
                                        </flat-pickr>

                                        <label class="error" v-if="errors['fromDate']">{{errors['fromDate'][0]}}</label>
                                    </div>


                                </div>

                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">


                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="button" title="Toggle" data-toggle>
                                                <i class="fa fa-calendar">
                                                    <span aria-hidden="true" class="sr-only">Toggle</span>
                                                </i>
                                            </button>
                                        </div>
                                        <flat-pickr
                                                v-model="toDate"
                                                :config="config"
                                                class="form-control"
                                                placeholder="TO DATE"
                                                name="date">
                                        </flat-pickr>
                                        <label class="error" v-if="errors['toDate']">{{errors['toDate'][0]}}</label>
                                    </div>

                                </div>


                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <select  id="status"  v-model="status" class="form-control">
                                    <option value=""  >Select Payment Status</option>
                                    <option value="paid">Paid</option>
                                    <option value="unpaid">Unpaid</option>
                                    <!--<option v-for="paymenttype in paymenttypes" v-bind:key="paymenttype.value"  v-bind:value="paymenttype.value">-->
                                        <!--{{ paymenttype.name }}-->
                                    <!--</option>-->
                                </select>
                                <label class="error" v-if="errors['status']">{{errors['status'][0]}}</label>

                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <button  @click="initPreLoader"  class="m-t-8 btn btn-primary btn-md" type="submit">
                                        Search
                                        <i class="fa fa-search"> </i>
                                    </button>

                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>







            <!-- #END# Infobox -->

            <div id="table" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Cash Receipt </div>
                        <div class="panel-body">


                            <!--<v-spacer>-->
                            <!--<div><h4>{{this.totalLabel}} </h4> <span><h3>{{  new Intl.NumberFormat('en-NG', {-->
                            <!--style: 'currency',-->
                            <!--currency: 'NGN'-->
                            <!--}).format(metrics.grand_total) }} </h3></span></div>-->

                            <!--</v-spacer>-->

                            <v-card-title>
                                <v-spacer  >
                                    &nbsp;&nbsp;&nbsp;
                                    <vue-excel-xlsx
                                            class = ""
                                            :data="this.receipts"
                                            :columns="this.receiptColumns"
                                            :filename="'Cash Receipts'"
                                            :sheetname="'Cash receipt'"
                                    >
                                        <v-btn  color="white" >Excel</v-btn>
                                    </vue-excel-xlsx>
                                </v-spacer>
                                <v-col cols="12" md="4" sm="4"> <v-text-field
                                        v-model="search"
                                        append-icon="mdi-magnify"
                                        label="Search"
                                        single-line
                                        hide-details
                                        solo
                                ></v-text-field></v-col>

                                <v-overlay
                                        :absolute="absolute"
                                        :value="table_1"
                                > <v-progress-circular indeterminate size="60"></v-progress-circular>
                                </v-overlay>
                            </v-card-title>

                            <v-data-table
                                    :headers="this.headers"
                                    :items="this.receipts"
                                    :search="search"
                                    class="elevation-1"
                                    :items-per-page="10"


                            >


                                <template v-slot:item.amount="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.amount) }}</span>
                                </template>
                                <template v-slot:item.date="{ item }">
                                    <span>{{  item.date | moment("MMM Do YYYY, h:mm:ss a") }}</span>
                                </template>
                                <template v-slot:item.status="{ item }">
                                    <span> <label class="label" v-bind:class="{'label-success':item.status == 'success', 'label-warning':item.status == 'pending', 'label-info':item.status == 'uncleared'}">{{item.status}}</label></span>
                                </template>



                            </v-data-table>

                            <v-spacer>
                                <div><h6>{{this.totalLabel}} </h6> <span><h5>{{  new Intl.NumberFormat('en-NG', {
                                    style: 'currency',
                                    currency: 'NGN'
                                }).format(metrics.grand_total) }} </h5></span></div>

                            </v-spacer>
                        </div>
                    </div>
                </div>
            </div>

            <div id="table1" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Remittance </div>
                        <div class="panel-body">


                            <!--<v-spacer>-->
                            <!--<div><h4>{{this.totalLabel}} </h4> <span><h3>{{  new Intl.NumberFormat('en-NG', {-->
                            <!--style: 'currency',-->
                            <!--currency: 'NGN'-->
                            <!--}).format(metrics.grand_total) }} </h3></span></div>-->

                            <!--</v-spacer>-->

                            <v-card-title>
                                <v-spacer  >
                                    &nbsp;&nbsp;&nbsp;
                                    <vue-excel-xlsx
                                            class = ""
                                            :data="this.remittances"
                                            :columns="rcolumns"
                                            :filename="'Remittance'"
                                            :sheetname="'invoices'"
                                    >
                                        <v-btn  color="white" >Excel</v-btn>
                                    </vue-excel-xlsx>
                                </v-spacer>
                                <v-col cols="12" md="4" sm="4"> <v-text-field
                                        v-model="search"
                                        append-icon="mdi-magnify"
                                        label="Search"
                                        single-line
                                        hide-details
                                        solo
                                ></v-text-field></v-col>

                                <v-overlay
                                        :absolute="absolute"
                                        :value="table_2"
                                > <v-progress-circular indeterminate size="60"></v-progress-circular>
                                </v-overlay>
                            </v-card-title>

                            <v-data-table
                                    :headers="this.rheaders"
                                    :items="this.remittances"
                                    :search="search"
                                    class="elevation-1"
                                    :items-per-page="10"


                            >
                                <!--<template v-slot:top>-->
                                <!--<v-toolbar flat color="white">-->
                                <!--<v-toolbar-title>Invoice List </v-toolbar-title>-->
                                <!--<v-spacer>-->
                                <!--&nbsp;&nbsp;&nbsp;-->
                                <!--<vue-excel-xlsx-->
                                <!--class = "btn btn-default"-->
                                <!--:data="invoices"-->
                                <!--:columns="columns"-->
                                <!--:filename="'invoice_listing'"-->
                                <!--:sheetname="'sheetname'"-->
                                <!--&gt;-->
                                <!--Excel-->
                                <!--</vue-excel-xlsx>-->

                                <!--</v-spacer>-->
                                <!--</v-toolbar>-->
                                <!--</template>-->

                                <template v-slot:item.amount="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.amount) }}</span>
                                </template>
                                <template v-slot:item.date="{ item }">
                                    <span>{{  item.date | moment("dddd, MMMM Do YYYY") }}</span>
                                </template>
                                <template v-slot:item.status="{ item }">
                                    <span> <label class="label" v-bind:class="{'label-success':item.status == 'success', 'label-warning':item.status == 'pending', 'label-info':item.status == 'uncleared'}">{{item.status}}</label></span>
                                </template>



                            </v-data-table>


                        </div>
                    </div>
                </div>
            </div>







        </div>
    </div>

</template>

<script>

    //  import 'bootstrap/dist/css/bootstrap.css';
    // import this component
    import flatPickr from 'vue-flatpickr-component';
    import 'flatpickr/dist/flatpickr.css';
    import 'flatpickr/dist/themes/material_blue.css';
    // import '../assets/plugins/wait-me/src/waitMe.css';


    export default {
        name: "CashInvoices",

        created(){

        },
        components: {
            flatPickr,


        },



        data(){

            return {

                card_1: true,
                card_2: true,
                card_3: true,
                table_1: true,
                table_2: true,
                absolute: true,


//                page: 1,
//                pageCount: 0,
//                itemsPerPage: 10,
                search: '',
                headers: [

                    {text: '#', value: 'sn'},
                    {text: 'Payer', value: 'payer'},
                    {text: 'Txn Ref', value: 'txn_ref'},
                    {text: 'Description', value: 'description'},
                    {text: 'LGA', value: 'lgaName'},
                    {text: 'Rev. Point', value: 'revPtsName'},
                    {text: 'Amount', value: 'amount'},
                    {text: 'Payment Date', value: 'date'},
                    {text: 'Payment Channel', value: 'payment_type'},
                    {text: 'Created by', value: 'agent'},
                    {text: 'Status', value: 'status'},
                ],


                rsearch: '',
                rheaders: [

                    {text: '#', value: 'sn'},
                    {text: 'Payer', value: 'payer'},
                    {text: 'Txn Ref', value: 'txn_ref'},
                    {text: 'LGA', value: 'lgaName'},
                    {text: 'Bank', value: 'bank'},
                    {text: 'Amount', value: 'amount'},
                    {text: 'Payment Date', value: 'date'},
                    {text: 'Payment Channel', value: 'payment_type'},
                    {text: 'Status', value: 'status'},
                ],

                roleName: '',
                fromDate: '', //  new Date(),
                toDate: '', //  new Date(),
                status: '',

                getFrom: '',
                getTo: '',
                getStatus: '',
                getStatusText :'',
                totalLabel:'',

                config: {
                    wrap: true, // set wrap to true only when using 'input-group'
                    altFormat: 'M j, Y',
                    altInput: true,
                    dateFormat: 'Y-m-d',

                },

                metrics: {
                    cash_receipt: '',
                    total: '',
                    bank:'',
                    total_generated:'',
                    total_remittance: '',
                    unremitted_cash: '',
                    grand_total :'',

                },
                remittances: [],
                receipts: [],

               // paymenttypes: [],
                dataTable: '',
                errors: [],


                // excel format
                receiptColumns : [
                    {label: '#', field: 'sn'},
                    {label: 'Txn Ref', field: 'txn_ref'},
                    {label: 'Payer', field: 'payer'},
                    {label: 'Description', field: 'description'},
                    {label: 'LGA', field: 'lgaName'},
                    {label: 'Rev. Point', field: 'revPtsName'},
                    {label: 'Amount', field: 'amount',dataFormat:this.$shared.amountFormat},
                    {label: 'Payment Date', field: 'date',dataFormat:this.$shared.paymentDateFormat },
                    {label: 'Payment Channel', field: 'payment_type'},
                    {label: 'Created by', field: 'agent'},
                    {label: 'Status', field: 'status'},



                ],

                rcolumns : [
                    {label: '#', field: 'sn'},
                    {label: 'Txn Ref', field: 'txn_ref'},
                    {label: 'Payer', field: 'payer'},
                    {label: 'LGA', field: 'lgaName'},
                    {label: 'Amount', field: 'amount',dataFormat:this.$shared.amountFormat},
                    {label: 'Bank', field: 'bank'},
                    {label: 'Payment Date', field: 'date',dataFormat:this.$shared.paymentDateFormat },
                    {label: 'Payment Channel', field: 'payment_type'},
                    {label: 'Status', field: 'status'},

                ],


            }
        },

        methods:{

//            getPaymentStatus : async function(){
//                try{
//                    await axios.get(`/paymentstatus`)
//                        .then( response => {
//                            this.paymenttypes = response.data
//                            // this.table_1 = false
//
//                        })
//                        .catch( (error) => {
//                            console.log(error)
//                        });
//                }catch(e){
//                    console.log(e);
//                }
//            },

            initPreLoader(){

                this.card_1 = this.card_2 = this.card_3 = this.table_1= this.table_2=  true;
            },
            hidePreLoader(){

                this.card_1 = this.card_2 = this.card_3 = this.table_1= this.table_2 = false;
            },


            searchResult: async function(){

                try{

                    //   this.initPreLoader();
                    // this.initPreLoader(1);
                    this.getFrom = this.fromDate;
                    this.getTo = this.toDate;
                    this.getStatus = this.status;
                    //this.dataTable = $('#agent-table').DataTable({});
                    await axios.post('/cash-invoice', {
                        'fromDate':this.fromDate,
                        'toDate':this.toDate,
                        'status':this.status,

                    })
                        .then( response => {
                            if(response.data.status == 'success'){

                                this.remittances = response.data.data.remittance;
                                this.metrics.grand_total = response.data.data.grand_total;
                                this.metrics.cash_receipt = response.data.data.grand_total;
                                this.receipts = response.data.data.cash_receipt;
                                this.metrics.unremitted_cash = response.data.data.unremitted_cash;
                                this.metrics.total_remittance = response.data.data.total_remittance;
                                this.metrics.total_generated = response.data.data.total_generated;
                                this.metrics.bank= response.data.data.bank;
                                this.roleName = response.data.data.role_name;



                            }

                            this.fromDate = this.getFrom;
                            this.toDate =this.getTo;
                           // this.status = this.getStatus;
                           // let stTxt =  this.setStatusName(this.getStatus);
                            this.totalLabel =   this.setTotalLabel(this.getFrom, this.getTo, '' );
                            this.hidePreLoader();

                        })
                        .catch( (error) => {
                            console.log(error.response.data.errors);

                            if(error.response.status == 422){
                                //console.log(error.response.data.errors['users.name'][0]);
                                this.errors = error.response.data.errors;


                            }else{
                                console.log('else2');
                            }
                        });

                }catch (e) {


                }


            },

            setTotalLabel(from, to, status){

                var date = new Date();
                if(from  && to )
                    return  'Total '+ status + ' From ' + from + ' To ' + to + ':';
                else if( !from && to)
                    return  'Total '+ status + ' From ' +  new Date(date.getFullYear(),date.getMonth(),2 ).toISOString().substr(0, 10).toString()  + ' To ' + to+':';
                else if( from && !to)
                    return  'Total '+ status + ' From ' +  from  + '  To' +
                        new Date().toISOString().substr(0, 10).toString()  +':';
                else
                    return  'Total :';

            },




        },
        mounted() {
            // $('#home-menu').addClass('active');
          //  this.getPaymentStatus();
            this.searchResult();






        }
    }
</script>
<style>

</style>