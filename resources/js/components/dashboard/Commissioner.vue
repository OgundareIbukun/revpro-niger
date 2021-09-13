<template>

    <div>
        <div class="page-heading">
            <h1><small> MINISTRY OF LOCAL GOVT. AFFAIR </small><br>DASHBOARD</h1>
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

            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box infobox-type-5 hover-expand-effect blue-mix" >
                        <v-overlay
                                :absolute="absolute"
                                :value="card_1"
                        > <v-progress-circular indeterminate size="60"></v-progress-circular>
                        </v-overlay>
                        <div class="content">
                            <i class="number fa fa-user"></i>
                            <div class="text-header">TAX PAYER</div>
                            <div class="number" >{{metrics.total_business_reg}}</div>
                            <div class="text">Businesses</div>
                            <div class="number" >{{metrics.monthly_business_reg}}</div>
                            <div class="text">This Month</div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box infobox-type-5 hover-expand-effect orange-mix">

                        <v-overlay
                                :absolute="absolute"
                                :value="card_2"
                        > <v-progress-circular indeterminate size="60"></v-progress-circular>
                        </v-overlay>
                        <!--<div class="icon">-->

                        <!--<i class="material-icons">equalizer</i>-->
                        <!--</div>-->
                        <div class="content">
                            <i class="number fa fa-tag"></i>
                            <div class="text-header">REVENUE</div>
                            <div class="number" >₦{{this.$suffix.suffixNotation(metrics.monthly_revenue) }} </div>
                            <div class="text">This Month</div>
                            <div class="number" > ₦{{this.$suffix.suffixNotation(metrics.yearly_revenue) }}
                            </div>
                            <div class="text">This Year</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box infobox-type-5 hover-expand-effect aqua-mix" >
                        <v-overlay
                                :absolute="absolute"
                                :value="card_3"
                        > <v-progress-circular indeterminate size="60"></v-progress-circular>
                        </v-overlay>
                        <!--<div class="icon">-->
                        <!--<i class="material-icons">credit_card</i>-->
                        <!--</div>-->
                        <div class="content">
                            <i class="number fa fa-tags"></i>
                            <div class="text-header">PAYMENT</div>
                            <div class="number" >₦{{this.$suffix.suffixNotation(metrics.monthly_paid_inv) }}
                                <span class="text"> ({{metrics.no_paid_inv}})</span>
                            </div>
                             <div class="text"> Paid invoices</div>

                            <div class="number" >₦{{this.$suffix.suffixNotation(metrics.monthly_unpaid_inv) }}
                                <span class="text">( {{metrics.no_unpaid_inv}}) </span>
                            </div> <div class="text">unpaid invoices</div>
                            <div class="number" >₦{{this.$suffix.suffixNotation(metrics.unclear_cheque) }}
                                <span class="text"> ({{metrics.no_unclear_cheque}}) </span>
                                <div class="text">Unclear cheque(s)</div>
                            </div>
                            <!--<div class="number" >₦{{this.$suffix.suffixNotation(metrics.unremitted_fund) }}-->
                                <!--<span class="text">  Unremitted funds</span>-->

                            <!--</div>-->
                                                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box infobox-type-5 hover-expand-effect purple-mix">

                        <v-overlay
                                :absolute="absolute"
                                :value="card_4"
                        > <v-progress-circular indeterminate size="60"></v-progress-circular>
                        </v-overlay>
                        <!--<div class="icon">-->
                        <!--<i class="material-icons">person_outline</i>-->
                        <!--</div>-->
                        <div class="content">
                            <i class="number fa fa-users"></i>
                            <div class="text-header">AGENTS</div>
                            <div class="number">{{ metrics.agent }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Infobox -->
            <div class="panel panel-default">
                <div class="panel-heading">FILTER RESULT </div>
                <div class="panel-body">
                    <div class="row clearfix">
                        <form   v-on:submit.prevent="searchResult">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <select    v-model="lgvt" class="form-control">
                                    <option value=""  >Select LGA</option>
                                    <option value="all">All</option>
                                    <option v-for="lga in lgas" v-bind:key="lga.id" v-bind:value="lga.id">
                                        {{ lga.name }}
                                    </option>
                                </select>
                                <label class="error" v-if="errors['lga']">{{errors['lga'][0]}}</label>

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
                                    <button class="btn btn-primary" type="submit">
                                        Search
                                        <i class="fa fa-search"> </i>
                                    </button>

                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

            <div id="lastSixRev" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
                    <v-overlay
                            :absolute="absolute"
                            :value="chart1"
                    > <v-progress-circular indeterminate size="60"></v-progress-circular>
                    </v-overlay>
                    <div class="panel panel-default">
                        <div class="panel-heading"> LAST SIX MONTHS REVENUE COLLECTION </div>
                        <div class="panel-body">
                            <!--<div id="chart_1"></div>-->
                            <canvas id="chart_1" height="100"></canvas>
                        </div>
                    </div>
                </div>


            </div>


            <div id="lgaRev" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <v-overlay
                            :absolute="absolute"
                            :value="chart2"
                    > <v-progress-circular indeterminate size="60"></v-progress-circular>
                    </v-overlay>
                    <div class="panel panel-default">
                        <div class="panel-heading"> LOCAL GOVERNMENT PERFORMANCE </div>
                        <div class="panel-body">
                            <!--<div id="chart_2"></div>-->
                            <canvas id="chart_2" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>


            <div id="summary" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
                    <v-overlay
                            :absolute="absolute"
                            :value="table1"
                    > <v-progress-circular indeterminate size="60"></v-progress-circular>
                    </v-overlay>
                    <div class="panel panel-default">
                        <div class="panel-heading"> SUMMARY </div>
                        <div class="panel-body">
                            <v-skeleton-loader
                                    class="mx-auto"
                                    type="card" >
                                <v-card-title>
                                    <v-spacer> Summary of LGA Collections</v-spacer>
                                    <v-text-field
                                            v-model="search"
                                            append-icon="magnify"
                                            label="Search"
                                            single-line
                                            hide-details
                                    ></v-text-field>
                                </v-card-title>
                                <v-data-table
                                        :headers="this.headers"
                                        :items="this.summary"
                                        :search="search"
                                        :page.sync="page"
                                        :items-per-page="itemsPerPage"
                                        hide-default-footer
                                        @page-count="pageCount = $event"
                                >
                                    <template v-slot:item.invoice="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.invoice) }}</span>
                                    </template>
                                    <template v-slot:item.receipt="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.receipt) }}</span>
                                    </template>
                                    <template v-slot:item.unremitted="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.unremitted) }}</span>
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
                            </v-skeleton-loader>

                        </div>
                    </div>
                </div>

            </div>

            <div id="component" class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <v-overlay
                            :absolute="absolute"
                            :value="chart3"
                    > <v-progress-circular indeterminate size="60"></v-progress-circular>
                    </v-overlay>
                    <div class="panel panel-default">
                        <div class="panel-heading"> REVENUE BY COMPONENT  </div>
                        <div class="panel-body">
                            <!--<div id="chart_3"></div>-->
                            <canvas id="chart_3" height="150"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <v-overlay
                            :absolute="absolute"
                            :value="chart4"
                    > <v-progress-circular indeterminate size="60"></v-progress-circular>
                    </v-overlay>
                <div class="panel panel-default">
                <div class="panel-heading">REMITTANCE </div>
                <div class="panel-body">
                <!--<div id="chart_4"></div>-->
                    <canvas id="chart_4" height="150"></canvas>
                </div>
                </div>
                </div>


            </div>

        </div>
    </div>

</template>

<script>

    import flatPickr from 'vue-flatpickr-component';
    import 'flatpickr/dist/flatpickr.css';
    import 'flatpickr/dist/themes/material_blue.css';

    export default {
        name: "Commisioner",

        components: {
            flatPickr,
        },

        data(){
            return {

                card_1:true,
                card_2:true,
                card_3:true,
                card_4:true,
                chart1:true,
                chart2:true,
                chart3:true,
                chart4:true,
                table1:true,
                absolute: true,
                chartInit:'',
                chartInit1:'',
                chartInit3:'',
                page: 1,
                pageCount: 0,
                itemsPerPage: 10,
                search:'',
                headers: [
                    { text: '#', value: 'sn' },
                    { text: 'LGA', value: 'lga_name' },
                    { text: 'Potential Revenue', value: 'invoice' },
                    { text: 'Total Generated', value: 'receipt' },
//                    { text: 'Unremitted', value: 'unremitted' },
                ],

                 summary:[],
                lgas:[],
                lgvt:'',
                fromDate: '', //  new Date(),
                toDate: '', //  new Date(),
                status:'',

                getFrom:'',
                getTo:'',
                getLga:'',
                config: {
                    wrap: true, // set wrap to true only when using 'input-group'
                    altFormat: 'M j, Y',
                    altInput: true,
                    dateFormat: 'Y-m-d',

                },
                metrics:{
                    total_business_reg: '',
                    monthly_business_reg: '',
                    monthly_revenue : '',
                    yearly_revenue: '',
                    monthly_paid_inv : '',
                    no_paid_inv : '',
                    monthly_unpaid_inv : '',
                    no_unpaid_inv : '',
                    no_unclear_cheque: '',
                    unclear_cheque : '',
                    unremitted_fund: '',
                    agent: '',
                },
                errors:[]


            }
        },
        methods:{

            getMetricsData(){
                axios.post('/dashboard/commissioner/metrics', {
                    'fromDate':this.fromDate,
                    'toDate':this.toDate,
                    'lga':this.lgvt,

                })
                    .then(response => {
                        if(response.data.status === 'success'){

                            this.metrics.total_business_reg = response.data.data.TotalBusinessReg;
                            this.metrics.monthly_business_reg = response.data.data.MonthlyBusinessReg;
                            this.metrics.monthly_revenue = response.data.data.MonthlyRevenue;
                            this.metrics.yearly_revenue = response.data.data.YearlyRevenue;
                            this.metrics.monthly_paid_inv = response.data.data.PaidInvoice;
                            this.metrics.no_paid_inv = response.data.data.CountPaidInv;
                            this.metrics.monthly_unpaid_inv = response.data.data.UnpaidInvoice;
                            this.metrics.no_unpaid_inv = response.data.data.CountUnpaidInv;
                            this.metrics.no_unclear_cheque = response.data.data.CountUnclearCheque;
                            this.metrics.unclear_cheque = response.data.data.UnclearCheque;
                            this.metrics.agent = response.data.data.Agent;
                          //  this.LgaName = response.data.data.LgaName;


                            this.card_1 = this.card_2 = this.card_3 = this.card_4=false;


                        }
                    })
                    .catch((error) => {
                        console.log('there was an error. '+error);
                    });
            },

            getRevenueChart(){
                 // last six month revenue
                axios.post('/dashboard/commissioner/revenue', {
                    'lga':this.lgvt,

                })
                    .then(response => {

                        if(response.data.status === 'success'){



                            var config = {
                                type: 'line',
                                data: {
                                    labels: response.data.data.monthName,
                                    datasets: [{
                                        label: 'Revenues',
                                        borderColor: "#f7c598",
                                        backgroundColor:"#fbe2cd",
                                        fillOpacity: .9,
                                        data: response.data.data.lastSixMonthRev,


                                                                           }


                                    ]
                                },
                                options: {
                                    // responsive: true,
                                    scales: {
                                        xAxes: [{

                                            ticks: {
                                                beginAtZero: true,
                                                autoSkip: false,
                                                maxRotation: 45,
                                                minRotation: 45
                                            }
                                        }],
                                        yAxes: [{
                                            // stacked: true,
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
                             this.chart1=false;


                        }

                    }).catch((error) => {
                    console.log('there was an error. '+error);
                })

            },

            getRevComponentRemittanceChart(){

                axios.post('/dashboard/commissioner/component', {
                    'fromDate':this.fromDate,
                    'toDate':this.toDate,
                    'lga':this.lgvt,

                })
                    .then(response => {

                        if(response.data.status === 'success'){



                            var config = {
                                type: 'doughnut',
                                data: {
                                    labels: response.data.data.ComponentLabel,
                                    datasets: [{
                                        // label: "Paid Invoice(Month)",
                                        data: response.data.data.ComponentValue,
                                        backgroundColor: ['#009efd','#2af598','#00FF00','yellow','#CC00FF','#3366CC','orange','#6c5b7c']
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    cutoutPercentage: 75,

                                    tooltips: {
                                        callbacks: {
                                            label: function(tooltipItem, data) {

                                                var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                                                return  data.labels[tooltipItem.index] +': ' + value.toLocaleString("en-NG",{style:"currency", currency:"NGN"});
                                            }
                                        }
                                    }

                                },

                            }

                            if(this.chartInit1) this.chartInit1.destroy();

                             this.chartInit1 = new Chart(document.getElementById("chart_3").getContext("2d"), config);
                            this.chart3=false;





                            var config = {
                                type: 'pie',
                                data: {
                                    labels: response.data.data.RemittanceLabel,
                                    datasets: [{
                                        // label: "Paid Invoice(Month)",
                                        data: response.data.data.RemittanceValue,
                                        backgroundColor: ['#FFFF00','#20b2aa','#32a7f5']
                                    }]
                                },
                                options: {
                                    responsive: true,
                                   // cutoutPercentage: 90

                                    tooltips: {
                                        callbacks: {
                                            label: function(tooltipItem, data) {

                                            //   var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                                             //   return value.toLocaleString("en-NG",{style:"currency", currency:"NGN"});

                                                var indice = tooltipItem.index;
                                               // return  data.labels[indice] +': '+  data.datasets[tooltipItem.datasetIndex].data[indice].toLocaleString("en-NG",{style:"currency", currency:"NGN"}) + '';
                                              //  var naira = value => currency(value, { symbol: '₦', decimal: '.', separator: ',' });
                                                return  data.labels[indice] +': ₦'+ data.datasets[tooltipItem.datasetIndex].data[indice].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

                                            }


                                        }
                                    }

                                },

                            }

                            if(this.chartInit2) this.chartInit2.destroy();
                            this.chartInit2 = new Chart(document.getElementById("chart_4").getContext("2d"), config);
                            this.chart4=false;

                        }

                    }).catch((error) => {
                    console.log('there was an error. '+error);
                })



            },
            getLgvts: async function(){
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

            getSummary: async function(){
                try{
                    await axios.post('/dashboard/commissioner/summary', {
                        'fromDate':this.fromDate,
                        'toDate':this.toDate,
                        'lga':this.lgvt,

                    })
                        .then( response => {
                            this.summary= response.data.data.summary
                             //   console.log(this.summary);
                            this.table1=false;
                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e){
                    console.log(e);
                }
            },
            getLgaChart(){
              // Lga Performance
                axios.post('/dashboard/commissioner/lga', {
                    'fromDate':this.fromDate,
                    'toDate':this.toDate,
                    'lga':this.lgvt,

                })
                    .then(response => {

                        if(response.data.status === 'success'){
                            // comparison of lga revenue

                            var config = {
                                type: 'bar',
                                data: {
                                    labels: response.data.data.LgaName,
                                    datasets: [{
                                        label: "Revenue",
                                        data: response.data.data.ThisMonthRev,
                                        backgroundColor: '#20b2aa'
                                    }
                                    ]
                                },
                                options: {
                                    responsive: true,
                                    //  function(label){return  '$' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");}
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
                            if(this.chartInit3) this.chartInit3.destroy();
                            this.chartInit3 = new Chart(document.getElementById("chart_2").getContext("2d"), config);
                             this.chart2 =false;


                        }

                    }).catch((error) => {
                    console.log('there was an error. '+error);
                })

            },

            searchResult: async function(){


             //   $('#table').show();
             //   try{
                    this.getFrom = this.fromDate;
                    this.getTo = this.toDate;
                    this.getLga = this.lgvt;

                this.card_1 = this.card_2 = this.card_3 = this.card_4 = this.table1= true;
                    this.chart1 = this.chart2 = this.chart3 = this.chart4=  true;

                this.getMetricsData();
                this. getRevenueChart();
                this.getLgaChart();
                this. getRevComponentRemittanceChart();
                this.getSummary();



            },



        },
        mounted() {
            this.getLgvts();

            this.getMetricsData();
            this. getRevenueChart();
            this.getLgaChart();
             this. getRevComponentRemittanceChart();
            this.getSummary();



        }
    }
</script>
