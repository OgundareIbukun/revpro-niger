<template>

    <div>
        <div class="page-heading">
            <h1><small> Revenue Point Management</small><br>REVENUE POINT DASHBOARD</h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
                        <i class="fa fa-dashboard"> </i>
                        <span class="nav-label">Revops</span>
                    </router-link>
                </li>
                <li class="active">Dashboard</li>
                <li class="active">Overview</li>
            </ol>
        </div>

        <div class="page-body">


            <div class="panel panel-default">
                <div class="panel-heading">Filter Result </div>
                <div class="panel-body">
                    <div class="row clearfix">
                        <form   v-on:submit.prevent="searchResult">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <select    v-model="lga_id" class="form-control"  @change="getRevPoints"  >
                                    <option value=""  >Select LGA</option>
                                    <option v-for="lga in  lgas" v-bind:key="lga.id" v-bind:value="lga.id">
                                        {{ lga.name }}
                                    </option>
                                </select>
                                <label class="error" v-if="errors['lga_id']">{{errors['agent_id'][0]}}</label>

                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <select    v-model="revpoint_id" class="form-control"  >
                                    <option value=""  >Select Rev Points</option>
                                    <option v-for="revpoint in  revpoints" v-bind:key="revpoint.id" v-bind:value="revpoint.id">
                                        {{ revpoint.name }}
                                    </option>
                                </select>
                                <label class="error" v-if="errors['revpoint_id']">{{errors['agent_id'][0]}}</label>

                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <!--<label>Select a date</label>-->
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
                                    <!--<label>Select a date</label>-->
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

                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">

                                <div class="input-group-btn">
                                    <button  @click="initPreLoader" class="btn btn-primary btn-md" type="submit">
                                        Search
                                        <i class="fa fa-search"> </i>
                                    </button>

                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

            <div id="Chart" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <v-overlay
                            :absolute="absolute"
                            :value="chart1"
                    > <v-progress-circular indeterminate size="60"></v-progress-circular>
                    </v-overlay>
                    <div class="panel panel-default">
                        <div class="panel-heading">{{this.chartName}}</div>
                        <div class="panel-body">
                            <canvas id="chart_1" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>


            <div id="table" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">

                    <div class="panel panel-default">


                        <div class="panel-heading">Collection Summary </div>
                        <div class="panel-body">
                            <!--<v-spacer>-->
                                <!--<div><h4>{{this.labelInvoice}} </h4> <span><h3>{{  new Intl.NumberFormat('en-NG', {-->
                                    <!--style: 'currency',-->
                                    <!--currency: 'NGN'-->
                                <!--}).format(this.invoice) }} </h3></span></div>-->

                            <!--</v-spacer>-->

                            <!--<v-spacer>-->
                                <!--<div><h4>{{this.labelReceipt}} </h4> <span><h3>{{  new Intl.NumberFormat('en-NG', {-->
                                    <!--style: 'currency',-->
                                    <!--currency: 'NGN'-->
                                <!--}).format(this.receipt) }} </h3></span></div>-->

                            <!--</v-spacer>-->

                            <v-card-title>
                                <v-spacer>
                                    &nbsp;&nbsp;
                                    <vue-excel-xlsx
                                            class = ""
                                            :data="this.summary"
                                            :columns="columns"
                                            :filename="'revenuepoint'"
                                            :sheetname="'sheet'"
                                    >
                                        <v-btn> Excel  </v-btn>
                                    </vue-excel-xlsx>


                                </v-spacer>
                                <v-text-field
                                        v-model="search"
                                        append-icon="mdi-magnify"
                                        label="Search"
                                        single-line
                                        hide-details
                                        solo
                                ></v-text-field>


                                <v-overlay
                                        :absolute="absolute"
                                        :value="table_1"
                                > <v-progress-circular indeterminate size="60"></v-progress-circular>
                                </v-overlay>
                            </v-card-title>
                            <v-data-table
                                    :headers="this.summaryHeaders"
                                    :items="this.summary"
                                    :search="search"
                                    class="elevation-1"
                                    :page.sync="page"
                                    :items-per-page="itemsPerPage"
                                    hide-default-footer
                                    @page-count="pageCount = $event"
                            >
                                <template v-slot:item.total="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.total) }}</span>
                                </template>
                                <template v-slot:item.receipt="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.receipt) }}</span>
                                </template>

                            </v-data-table>
                            <div class="text-center pt-2 "  >
                                <v-pagination color="primary"  dark v-model="page" :length="pageCount"></v-pagination>
                                <v-text-field
                                        :value="itemsPerPage"
                                        label="Items per page"
                                        type="number"
                                        min="-1"
                                        max="15"
                                        @input="itemsPerPage = parseInt($event, 10)"
                                ></v-text-field>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <div id="table3" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"> Collection per service per revenue point</div>
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
                                        :value="table_2"
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

<script>

    //  import 'bootstrap/dist/css/bootstrap.css';
    // import this component
    import flatPickr from 'vue-flatpickr-component';
    import 'flatpickr/dist/flatpickr.css';
    import 'flatpickr/dist/themes/material_blue.css';


    export default {
        name: "RevPts-dashboard",

        components: {
            flatPickr,


        },

        data(){
            return {

                chart1:true,
                card_1:true,
                card_2:true,
                card_3:true,
                table_1:true,
                table_2:true,
                absolute: true,
                labelInvoice:'',
                invoice:'',
                labelReceipt:'',
                receipt:'',


                page: 1,
                pageCount: 0,
                itemsPerPage: 10,
                search:'',
                summaryHeaders: [

                    { text: '#', value: 'sn' },
                    { text: 'REVENUE POINT', value: 'revptName' },
                    { text: 'LGA', value: 'lga' },
               //     { text: 'Potential Revenue', value: 'total' },
                    { text: 'Revenue Generated', value: 'receipt' },

                ],

                columns: [

                    { label: '#', field: 'sn' },
                    { label: 'REVENUE POINT', field: 'revptName' },
                    { label: 'LGA', field: 'lga' },
                  //  { label: 'POTENTIAL REVENUE', field: 'total',dataFormat:this.$shared.amountFormat },
                    { label: 'REVENUE GENERATED', field: 'receipt',dataFormat:this.$shared.amountFormat },

                ],


                ssearch:'',
                sheaders : [
                    {text: '#', value: 'sn'},
                    {text: 'Service Name', value: 'serviceName'},
                    {text: 'Total Generated', value: 'receipt'},

                ],


                scolumns : [
                    {label: '#', field: 'sn'},
                    {label: 'Service Name', field: 'serviceName'},
                    {label: 'Total Generated', field: 'receipt'},

                ],

                fromDate: '', //  new Date(),
                toDate: '', //  new Date(),
                //agent_id:'',

              chartName:'',
                getFrom:'',
                getTo:'',
                getLga:'',
                getRevPt:'',
                 $labelInvoice:'',
                $labelReceipt:'',
                 $receipt:'',
                 $invoice: '',
                  $lgaName:'',

                config: {
                    wrap: true, // set wrap to true only when using 'input-group'
                    altFormat: 'M j, Y',
                    altInput: true,
                    dateFormat: 'Y-m-d',



                },

                metrics:{
                    unremitted_fund:'',
                    paid_invoice:'',
                    total_invoice:'',
                },

                 lgaChart_name:'',
                lgaChart_data:'',

                lga_id:'',
                 revpoint_id:'',
                   services:[],
               revpoints:[],
                summary:[],
                lgas:[],
                errors:[],


            }
        },
        methods:{
            initPreLoader(){

                this.card_1 = this.card_2 = this.card_3 = this.table_1 =  true;
            },
            hidePreLoader(){

                this.card_1 = this.card_2 = this.card_3 = this.table_1=  false;
            },

            searchResult: async function() {

              //  this.getMetrics();
                this.chart1 = true;
                this.getSummary();

                   if((this.lga_id && this.revpoint_id) || (!this.lga_id && !this.revpoint_id)  )
                   this.getLastSixMonthRev();
//                   else
//                       this.getOnlyLga();

                //  this.hidePreLoader();
            },


            getSummary: async function(){

                try{
                    this.getFrom = this.fromDate;
                    this.getTo = this.toDate;
                    this.getLga = this.lga_id;
                     this.getRevPt = this.revpoint_id,

                    await axios.post('/revpoint-dashboard/summary', {
                        'fromDate':this.fromDate,
                        'toDate':this.toDate,
                        'revpoint_id':this.revpoint_id,
                        'lga_id':this.lga_id

                    })
                        .then( response => {
                            if(response.data.status == 'success'){
                                // this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                                this.summary = response.data.data.summary;
                               // this.receipt = response.data.data.receipt;
                                 this.services = response.data.data.service;
                                this.lga_name = response.data.data.lgaName;

                             //   this.labelInvoice =   this.setTotalLabel( 'Total Invoice ', this.getFrom, this.getTo, this.lga_name );
                              //  this.labelReceipt =   this.setTotalLabel( 'Total Receipt ', this.getFrom, this.getTo, this.lga_name );


                                if(this.getLga && !this.getRevPt ){

                                    this.chartName = 'Revenue Point Performance';

                                    this.lgaChart_name= response.data.data.crevName;
                                    this.lgaChart_data= response.data.data.creceipt;


                                    var config = {
                                        type: 'bar',
                                        data: {
                                            labels: this.lgaChart_name,
                                            datasets: [ {
                                                label: 'Receipt',
                                                type: "bar",
                                                backgroundColor: "#32a7f5",
                                                data: this.lgaChart_data
                                            } ]
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
                                    this.chart1 =  false;
                                }









                            }
                            this.table_1 = false;
                            this.table_2 = false;

//                            this.fromDate = this.getFrom;
//                            this.toDate =this.getTo;
//                            this.agent_id = this.getAgent;
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

            getLastSixMonthRev: async function(){
                try{
                    await axios.post('/revpoint-dashboard/lastSixMonthRev', {

                        'revpoint_id':this.revpoint_id

                    })
                        .then( response => {
//                            this.lgas = response.data.data

                            this.chartName = 'Last Six Months Revenue';
                            var config = {
                                type: 'bar',
                                data: {
                                    labels: response.data.data.monthName,
                                    datasets: [ {
                                        label: 'Receipt',
                                        type: "bar",
                                        backgroundColor: "#32a7f5",
                                        data: response.data.data.lastSixMonthRev
                                    } ]
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
                            this.chart1 =  false;
//                            $('#table2').addClass('hide');
//                            $('#table1').removeClass('hide');

                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e){
                    console.log(e);
                }
            },
//
//            getOnlyLga: async function(){
//                try{
//                    this.getFrom = this.fromDate;
//                    await axios.post('/revpoint-dashboard/onlyLga', {
//                        'fromDate':this.fromDate,
//                        'toDate':this.toDate,
//                        'lga_id':this.lga_id
//                    })
//                        .then( response => {
//
//
//                              this.lgaChart_name= response.data.data.revName;
//                                  this.lgaChart_data= response.data.data.receipt;
//
//
//                            var config = {
//                                type: 'bar',
//                                data: {
//                                    labels: this.lgaChart_name,
//                                    datasets: [ {
//                                        label: 'Receipt',
//                                        type: "bar",
//                                        backgroundColor: "#32a7f5",
//                                        data: this.lgaChart_data
//                                    } ]
//                                },
//                                options: {
//                                    // responsive: true,
//                                    scales: {
//                                        xAxes: [{
//                                            //stacked: true,
//                                            // stacked: true,
//                                            ticks: {
//                                                beginAtZero: true,
//                                                autoSkip: false,
//                                                maxRotation: 45,
//                                                minRotation: 45
//                                            }
//                                        }],
//                                        yAxes: [{
//                                            ticks: {
//                                                callback: function(value, index, values) {
//                                                    return value.toLocaleString("en-NG",{style:"currency", currency:"NGN"});
//                                                },
//                                            }
//                                        }]
//                                    },
//                                    tooltips: {
//                                        callbacks: {
//                                            label: function(tooltipItem, data) {
//                                                return tooltipItem.yLabel.toLocaleString("en-NG",{style:"currency", currency:"NGN"});
//                                            }
//                                        }
//                                    }
//                                }
//                            }
//
//                            if(this.chartInit) this.chartInit.destroy();
//
//                            this.chartInit = new Chart(document.getElementById("chart_1").getContext("2d"), config);
//                            this.chart1 =  false;
////                            $('#table2').addClass('hide');
////                            $('#table1').removeClass('hide');
//
//                        })
//                        .catch( (error) => {
//                            console.log(error)
//                        });
//                }catch(e){
//                    console.log(e);
//                }
//            },


//            setTotalLabel(total,from, to, lga){
//
//                let date = new Date();
//
//
//                if(lga)
//                    var lgaLbl = ' for '+lga+ ' LGA';
//                else   var lgaLbl='';
//
//                if(from  && to )
//                    var  rangeLbl =  ' From ' + from + ' To ' + to + ':';
//                else if( !from && to)
//                    var rangeLbl = ' From ' +  new Date(date.getFullYear(),date.getMonth(),2 ).toISOString().substr(0, 10).toString()  + ' To ' + to+':';
//                else if( from && !to)
//                    var rangeLbl =  ' From ' +  from  + '  To ' +
//                        new Date().toISOString().substr(0, 10).toString()  +':';
//                else   var rangeLbl=' :';
//
//
//                var label = total+lgaLbl+rangeLbl;
//
//                return label;


          //  },


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
            getRevPoints: async function(){
                try{
                    await axios.post('/revpoint/lga',{
                        'lga_id':this.lga_id,
                    })
                        .then( response => {
                            //console.log(response.data.data);
                            this.revpoints = response.data.data;
                        })
                        .catch( (error) => { console.log(error) });
                }catch (e) {
                    console.log(e);
                }

            },

        },
        mounted() {

            this.getLgas();
            //this.getMetrics();
            this.getSummary();
            this.getLastSixMonthRev();
        }
    }
</script>
