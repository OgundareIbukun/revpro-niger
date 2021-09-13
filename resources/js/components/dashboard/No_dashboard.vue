<template>

    <div>
        <div class="page-heading">
            <h1><small></small><br>DASHBOARD</h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
                        <i class="fa fa-dashboard"> </i>
                        <span class="nav-label">Revops</span>
                    </router-link>
                </li>
                <li class="active">Dashbaord</li>
                <li class="active">Overview</li>
            </ol>
        </div>

        <div class="page-body">

            <div class="row clearfix">

                <div id="metrics1" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <!-- small box -->
                    <div class="small-box bg-green">

                        <v-overlay
                                :absolute="absolute"
                                :value="card_1"
                        > <v-progress-circular indeterminate size="30"></v-progress-circular>
                        </v-overlay>
                        <div class="inner">
                            <h4>{{ new Intl.NumberFormat('en-NG', {
                                style: 'currency',
                                currency: 'NGN'
                            }).format(metrics.totalGenerated) }} </h4>
                              <!--// <span style="font-size:15px">({{metrics.no_paid }})</span>-->

                            <p>Total Generated</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-tag"></i>
                        </div>
                        <a href="/home#/invoice-listing?status=status" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>

                </div>

                <div id="metrics2" class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <!-- small box -->
                    <div class="small-box bg-aqua">

                        <v-overlay
                                :absolute="absolute"
                                :value="card_2"
                        > <v-progress-circular indeterminate size="30"></v-progress-circular>
                        </v-overlay>
                        <div class="inner">
                            <h4>{{new Intl.NumberFormat('en-NG', {
                                style: 'currency',
                                currency: 'NGN'
                            }).format(metrics.totalBank)}} </h4>
                            <!--<span style="font-size:15px">({{metrics.no_unpaid}})</span>-->

                            <p>Total in the Bank</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-tags"></i>
                        </div>
                        <a href="/home#/invoice-listing?status=pending" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

                    </div>




                </div>

                <div  id="metrics3" class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">


                    <!-- small box -->
                    <div class="small-box bg-orange">
                        <v-overlay
                                :absolute="absolute"
                                :value="card_3"
                        > <v-progress-circular indeterminate size="30"></v-progress-circular>
                        </v-overlay>
                        <div class="inner">
                            <h4>{{metrics.agent}}</h4>

                            <p>Agents</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <a href="/home#/agents" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>

                </div>


            </div>

            <div class="panel panel-default">
                <div class="panel-heading">FILTER RESULT </div>
                <div class="panel-body">
                    <div class="row clearfix">
                        <form   v-on:submit.prevent="searchResult">

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <select    v-model="lga_id" class="form-control"  >
                                    <option value=""  >Select LGA</option>
                                    <option v-for="lga in  lgas" v-bind:key="lga.id" v-bind:value="lga.id">
                                        {{ lga.name }}
                                    </option>
                                </select>


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
                                                v-model="fromDate"
                                                :config="config"
                                                class="form-control"
                                                placeholder="FROM DATE"
                                                name="date">
                                        </flat-pickr>

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

                                </div>

                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <button  @click="initPreLoader"  class="m-t-8 btn btn-primary btn-md" type="submit">
                                        Filter
                                        <i class="fa fa-search"> </i>
                                    </button>

                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>


            <div id="lgaRev" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <v-overlay
                            :absolute="absolute"
                            :value="chart1"
                    > <v-progress-circular indeterminate size="60"></v-progress-circular>
                    </v-overlay>
                    <div class="panel panel-default">
                        <div class="panel-heading"> Revenue Performance </div>
                        <div class="panel-body">
                            <!--<div id="chart_2"></div>-->
                            <canvas id="chart_1" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>


            <!-- #END# Infobox -->

            <div id="table1" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Payment Summary </div>
                        <div class="panel-body">


                            <!--<v-spacer>-->
                                <!--<div><h5>{{this.totalReceiptLabel}} </h5> <span><h4><b>{{  new Intl.NumberFormat('en-NG', {-->
                                    <!--style: 'currency',-->
                                    <!--currency: 'NGN'-->
                                <!--}).format(this.total_receipt) }}</b> </h4></span></div>-->

                            <!--</v-spacer>-->

                            <!--<v-spacer>-->
                                <!--<div><h5>{{this.totalRemitLabel}} </h5> <span><h4><b>{{  new Intl.NumberFormat('en-NG', {-->
                                    <!--style: 'currency',-->
                                    <!--currency: 'NGN'-->
                                <!--}).format(this.total_remit) }}</b> </h4></span></div>-->

                            <!--</v-spacer>-->

                            <v-card-title>
                                <v-spacer  >
                                    &nbsp;&nbsp;&nbsp;
                                    <vue-excel-xlsx
                                            class = ""
                                            :data="this.lgaData"
                                            :columns="columns"
                                            :filename="'lgaData'"
                                            :sheetname="'lgaData'"
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
                                    :items="this.lgaData"
                                    :search="search"
                                    class="elevation-1"
                                    :items-per-page="10"


                            >

                                <template v-slot:item.cashReceipt="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.cashReceipt) }}</span>
                                </template>
                                <template v-slot:item.nonCashPaidInv="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.nonCashPaidInv) }}</span>
                                </template>
                                <template v-slot:item.remittance="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.remittance) }}</span>
                                </template>


                            </v-data-table>

                        </div>
                    </div>
                </div>
            </div>

            <!-- #END# Infobox -->

            <div id="table2" class="row clearfix hide">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Payment Summary Per Revenue Point</div>
                        <div class="panel-body">


                            <!--<v-spacer>-->
                                <!--<div><h5>{{this.rptotalReceiptLabel}} </h5> <span><h4><b>{{  new Intl.NumberFormat('en-NG', {-->
                                    <!--style: 'currency',-->
                                    <!--currency: 'NGN'-->
                                <!--}).format(this.rptotal_receipt) }} </b></h4></span></div>-->

                            <!--</v-spacer>-->

                            <!--<v-spacer>-->
                                <!--<div><h5>{{this.rptotalRemitLabel}} </h5> <span><h4><b>{{  new Intl.NumberFormat('en-NG', {-->
                                    <!--style: 'currency',-->
                                    <!--currency: 'NGN'-->
                                <!--}).format(this.rptotal_remit) }} </b></h4></span></div>-->

                            <!--</v-spacer>-->

                            <v-card-title>
                                <v-spacer  >
                                    &nbsp;&nbsp;&nbsp;
                                    <vue-excel-xlsx
                                            class = ""
                                            :data="this.rpData"
                                            :columns="rpcolumns"
                                            :filename="'revpt'"
                                            :sheetname="'sheet'"
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
                                    :headers="this.rpheaders"
                                    :items="this.rpData"
                                    :search="search"
                                    class="elevation-1"
                                    :items-per-page="10"

                            >

                                <template v-slot:item.cashReceipt="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.cashReceipt) }}</span>
                                </template>
                                <template v-slot:item.nonCashPaidInv="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.nonCashPaidInv) }}</span>
                                </template>
                            </v-data-table>

                        </div>
                    </div>
                </div>
            </div>


            <div id="table3" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Collection Summary Per Service</div>
                        <div class="panel-body">

                            <!--<v-spacer>-->
                                <!--<div><h5>{{this.totalReceiptLabel}} </h5> <span><h4><b>{{  new Intl.NumberFormat('en-NG', {-->
                                    <!--style: 'currency',-->
                                    <!--currency: 'NGN'-->
                                <!--}).format(this.total_receipt) }}</b> </h4></span></div>-->

                            <!--</v-spacer>-->

                            <v-card-title>
                                <v-spacer  >
                                    &nbsp;&nbsp;&nbsp;
                                    <vue-excel-xlsx
                                            class = ""
                                            :data="this.services"
                                            :columns="scolumns"
                                            :filename="'ServiceData'"
                                            :sheetname="'servicesData'"
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
                                        :value="table_3"
                                > <v-progress-circular indeterminate size="60"></v-progress-circular>
                                </v-overlay>
                            </v-card-title>

                            <v-data-table
                                    :headers="this.sheaders"
                                    :items="this.services"
                                    :search="ssearch"
                                    class="elevation-1"
                                    :items-per-page="10"


                            >

                                <template v-slot:item.receipt="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.receipt) }}</span>
                                </template>


                            </v-data-table>

                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>

</template>

1<script>

    //  import 'bootstrap/dist/css/bootstrap.css';
    // import this component
    import flatPickr from 'vue-flatpickr-component';
    import 'flatpickr/dist/flatpickr.css';
    import 'flatpickr/dist/themes/material_blue.css';
    // import '../assets/plugins/wait-me/src/waitMe.css';


    export default {
        name: "Dashboard",

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
                chart1: true,
                table_1: true,
                table_2: false,
                table_3: true,
                absolute: true,


//                page: 1,
//                pageCount: 0,
//                itemsPerPage: 10,
                search: '',
                ssearch:'',
                headers: [

                    {text: '#', value: 'sn'},
                    {text: 'LGA', value: 'lgaName'},
                    {text: 'Cash Receipt', value: 'cashReceipt'},
                    {text: 'Paid Non-Cash Invoice', value: 'nonCashPaidInv'},
                    {text: 'Cash Remittance',  value: 'remittance'},
                ],

                rpheaders: [

                    {text: '#', value: 'sn'},
                    {text: 'Revenue Point', value: 'revptName'},
                    {text: 'Cash Receipt', value: 'cashReceipt'},
                    {text: 'Paid Non-Cash Invoice', value: 'nonCashPaidInv'},
                ],

                sheaders : [
                    {text: '#', value: 'sn'},
                    {text: 'Service Name', value: 'serviceName'},
                    {text: 'Total Generated', value: 'receipt'},

                ],

                fromDate: '', //  new Date(),
                toDate: '', //  new Date(),
                status: '',
                lga_id:'',

                getFrom: '',
                getTo: '',
                getStatus: '',
                getLga :'',
                totalReceiptLabel:'',
                totalRemitLabel:'',
                 total_receipt:'',
                 total_remit:'',
                 chart1_data:'',
                prevChart1_data:[],
                prevChart2_data:[],
                chart1_label:'',
                thismonth_label:'',
                prevmonth_label:'',
                chartInit:'',
                 chartInit2:'',

                rptotalReceiptLabel:'',
                rptotalRemitLabel:'',
                rptotal_receipt:'',
                rptotal_remit:'',
                chart2_data:'',
                chart2_label:'',

                config: {
                    wrap: true, // set wrap to true only when using 'input-group'
                    altFormat: 'M j, Y',
                    altInput: true,
                    dateFormat: 'Y-m-d',

                },

                metrics: {
                    no_unpaid: '',
                    total_unpaid: '',
                    no_paid: '',
                    total_paid: '',
                      no_agent: '',
                    users: '',
                    grand_total :'',
                     totalGenerated:'',
                     agent:'',
                     totalBank:''

                },
                lgaData: [],
                rpData: [],
                  lga_data: {
                    sn: '',
                    lgaName: '',
                    receipt: '',
                     remittance: '',

                },
                 lgas:[],
                errors: [],

                services:[],


                // excel format
                columns : [
                    {label: '#', field: 'sn'},
                    {label: 'LGA', field: 'lgaName'},
                    {label: 'Cash Receipt', field: 'cashReceipt'},
                    {label: 'Paid Non-Cash Invoice', field: 'nonCashPaidInv'},
                    {label: 'Cash Remittance', field: 'remittance'},

                ],

                rpcolumns : [
                    {label: '#', field: 'sn'},
                    {label: 'Revenue Point', field: 'revptName'},
                    {label: 'Cash Receipt', field: 'cashReceipt'},
                    {label: 'Paid Non-Cash Invoice', field: 'nonCashPaidInv'},

                ],

                scolumns : [
                    {label: '#', field: 'sn'},
                    {label: 'Service Name', field: 'serviceName'},
                    {label: 'Total Generated', field: 'receipt'},

                ],





            }
        },

        methods:{

            initPreLoader(){

                this.chart1 = this.table_1=  true;
            },
            hidePreLoader(){

                this.card_1 = this.card_2 = this.card_3 = this.table_1=  false;
            },

//            getMetrics: async function(){
//
//                try{
//                    await axios.get('/dashboard/metrics' )
//                        .then( response => {
//                            if(response.data.status == 'success'){
//
//                                this.metrics.no_unpaid = response.data.data.count_unpaid;
//                                this.metrics.no_paid = response.data.data.count_paid;
//                                this.metrics.total_unpaid = response.data.data.unpaid;
//                                this.metrics.total_paid = response.data.data.paid;
//                                this.metrics.no_agent = response.data.data.count_agent;
//                            }
//
//                            this.card_1 = this.card_2 = this.card_3 =   false;
//
//                        })
//                        .catch( (error) => {
//                            console.log(error.response.data.errors);
//
//                            if(error.response.status == 422){
//                                //console.log(error.response.data.errors['users.name'][0]);
//                                this.errors = error.response.data.errors;
//
//
//                            }else{
//                                console.log('else2');
//                            }
//                        });
//
//                }catch (e) {
//
//
//                }
//
//
//            },
            getLgaChart(){
                // Lga Performance

                this.getFrom = this.fromDate;
                this.getTo = this.toDate;
                axios.post('/dashboard/lga', {
                    'fromDate':this.fromDate,
                    'toDate':this.toDate,

                })
                    .then(response => {



                        if(response.data.status === 'success'){

                            // metrics

                            this.metrics.totalGenerated = response.data.data.totalReceipt;   this.card_1 = false;
                            this.metrics.totalBank = response.data.data.bank;  this.card_2 = false;
                            this.metrics.agent = response.data.data.agent;    this.card_3 = false;


                              this.chart1_label = response.data.data.lgaName;
                            this.chart1_data = response.data.data.receipt;
                            this.prevChart1_data = response.data.data.prevReceipt;
                            this.thismonth_label = response.data.data.thisMonthName;
                            this.prevmonth_label = response.data.data.prevMonthName;
                             this.lgaData = response.data.data.lgaData;
                            // this.total_receipt = response.data.data.totalReceipt;
                            this.total_remit = response.data.data.totalRemit;




                            this.services = response.data.data.service;
                            this.table_3=false;

                            var config = {
                                type: 'bar',
                                data: {
                                    labels: this.chart1_label,
                                    datasets: [ {
                                        label: this.prevmonth_label+' Revenue',
                                        type: "bar",
                                        backgroundColor: "#32a7f5",
                                        data: this.prevChart1_data
                                    },{
                                        label:this.thismonth_label+' Revenue',
                                        type: "bar",
                                        backgroundColor: "#6c5b7c",
                                        data: this.chart1_data
                                    }
                                    ]
                                },
                                options: {
                                    // responsive: true,
                                    scales: {
                                        xAxes: [{
                                            //stacked: true,
                                           // stacked: true,
                                            ticks: {
                                                beginAtZero: true,
                                                autoSkip: false,
                                                maxRotation: 45,
                                                minRotation: 45
                                            }
                                        }],
                                        yAxes: [{
                                            ticks: {
                                                callback: function(value, index, values) {
                                                    return value.toLocaleString("en-NG",{style:"currency", currency:"NGN"});
                                                },
                                            }
                                        }]
                                    },
                                    tooltips: {
                                        callbacks: {
                                            label: function(tooltipItem, data) {
                                                return tooltipItem.yLabel.toLocaleString("en-NG",{style:"currency", currency:"NGN"});
                                            }
                                        }
                                    }
                                }
                            }

                            if(this.chartInit) this.chartInit.destroy();

                           this.chartInit = new Chart(document.getElementById("chart_1").getContext("2d"), config);
                            this.chart1 = this.table_1 = false;
                            $('#table2').addClass('hide');
                            $('#table1').removeClass('hide');

                            this.fromDate = this.getFrom;
                            this.toDate =this.getTo;
                            this.totalReceiptLabel =   this.setTotalLabel( 'Total Receipt' );
                            this.totalRemitLabel =   this.setTotalLabel( 'Total Cash Remittance' );




                        }

                    }).catch((error) => {
                    console.log('there was an error. '+error);
                })

            },

              searchResult: async function(){

                  if(this.lga_id.length <= 0 ){

                      this.card_1 =true;
                      this.card_2 =true;
                      this.card_3 =true;

                       this.table_1 = true;
                      this.table_2 = true;
                        this.getLgaChart();
                  }else {

                      this.card_1 =true;
                      this.card_2 =true;
                      this.card_3 =true;
                      this.table_2 = true;
                      this.table_3=true;
                      this.getRevPointsChart();
                 }

              },

            getRevPointsChart(){
                // RevPoint Performance

                this.getFrom = this.fromDate;
                this.getTo = this.toDate;
                this.getLga = this.lga_id;
                axios.post('/dashboard/revpoint', {
                    'fromDate':this.fromDate,
                    'toDate':this.toDate,
                    'lga_id':this.lga_id,

                })
                    .then(response => {

                        if(response.data.status === 'success'){


                            // metrics

                            this.metrics.totalGenerated = response.data.data.totalReceipt;   this.card_1 = false;
                            this.metrics.totalBank = response.data.data.bank;  this.card_2 = false;
                            this.metrics.agent = response.data.data.agent;    this.card_3 = false;

                            this.chart2_label = response.data.data.revptName;
                            this.chart2_data = response.data.data.receipt;
                            this.prevChart2_data = response.data.data.prevReceipt;
                            this.thismonth_label = response.data.data.thisMonthName;
                            this.prevmonth_label = response.data.data.prevMonthName;
                            this.rpData = response.data.data.revptData;
                           // this.rptotal_receipt = this.total_receipt = response.data.data.totalReceipt;
                            //this.rptotal_remit = response.data.data.totalRemit;
                            this.services = response.data.data.service;
                           // this.total_receipt = response.data.data.totalReceipt;
                              this.table_3=false;

                          //  if (chart2) chart2.destroy();

                            var config = {
                                type: 'bar',
                                data: {
                                    labels: this.chart2_label,
                                    datasets: [{
                                        label: this.prevmonth_label+' Revenue',
                                        data: this.prevChart2_data,
                                        backgroundColor: '#32a7f5'},
                                        {
                                            label:  this.thismonth_label+' Revenue',
                                            data: this.chart2_data,
                                            backgroundColor: '#7873CE'
                                        }
                                    ]
                                },
                                options: {
                                    // responsive: true,
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                callback: function(value, index, values) {
                                                    return value.toLocaleString("en-NG",{style:"currency", currency:"NGN"});
                                                }
                                            }
                                        }],
                                        xAxes: [{
                                            ticks: {
                                                beginAtZero: true,
                                                autoSkip: false,
                                                maxRotation: 45,
                                                minRotation: 45
                                            }
                                        }]
                                    },

                                    tooltips: {
                                        callbacks: {
                                            label: function(tooltipItem, data) {
                                                return tooltipItem.yLabel.toLocaleString("en-NG",{style:"currency", currency:"NGN"});
                                            }
                                        }
                                    }

                                },

                            }

//                            if(chart2) chart2.destroy();

                            if(this.chartInit) this.chartInit.destroy();
                            this.chartInit  = new Chart(document.getElementById("chart_1").getContext("2d"), config);
                            this.chart1 = this.table_2 = false;
                               $('#table1').addClass('hide');
                            $('#table2').removeClass('hide');

                            this.fromDate = this.getFrom;
                            this.toDate =this.getTo;
                      //      this.rptotalReceiptLabel =   this.setTotalLabel( 'Total Receipt' );
                        //    this.rptotalRemitLabel =   this.setTotalLabel( 'Total Cash Remittance' );



                        }

                    }).catch((error) => {
                    console.log('there was an error. '+error);
                })

            },

            setTotalLabel(total){

                    return  total +':';

            },
            getLgas: async function(){
                try{
                    await axios.get(`/state/${this.$state_id}/lgas`)
                        .then( response => {
                            this.lgas = response.data.data


                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e){
                    console.log(e);
                }
            },



        },
        mounted() {

            // this.getMetrics();
            this.getLgas();
            this.getLgaChart();
    ;






        }
    }
</script>
<style>

</style>