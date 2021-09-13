<template>

    <div>
        <div class="page-heading">
            <h1><small> HEAD OF REVENUE</small><br>DASHBOARD</h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
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
                        <!--<div class="icon">-->
                            <!--<i class="material-icons">supervisor_account</i>-->
                        <!--</div>-->
                        <div class="content">

                            <i class="number fa fa-user"></i>
                            <div class="text-header">TAX PAYER</div>
                             <div class="number" >{{metrics.total_business_reg}}</div>
                            <div class="text">Businesses</div>
                            <div class="number" >{{ metrics.monthly_business_reg}}</div>
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
                            <i class="number fa fa-tags"></i>
                            <div class="text-header">REVENUE</div>
                            <div class="number" >₦{{ $suffix.suffixNotation(metrics.monthly_revenue)}} </div>
                            <div class="text">This Month</div>
                            <div class="number" > ₦{{$suffix.suffixNotation(metrics.yearly_revenue) }}
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
                        <!--</div>    new Intl.NumberFormat('en-NG', {
                                    style: 'currency',
                                    currency: 'NGN'
                                })).format(metrics.monthly_paid_inv)-->
                        <div class="content">
                            <i class="number fa fa-tag"></i>
                            <div class="text-header">PAYMENT</div>
                            <div class="number" > ₦{{ this.$suffix.suffixNotation(metrics.monthly_paid_inv)}}   <span class="text">     {{metrics.no_paid_inv}} paid invoices</span>  </div>

                            <div class="number" > ₦{{ this.$suffix.suffixNotation(metrics.monthly_unpaid_inv) }}  <span class="text">     {{metrics.no_unpaid_inv}} unpaid invoices</span></div>


                            <div class="number" > ₦{{ this.$suffix.suffixNotation(metrics.unclear_cheque) }}   <span class="text">{{metrics.no_unclear_cheque}} unclear cheque(s)</span>
                            </div>

                            <!--<div class="number" >₦{{this.$suffix.suffixNotation(metrics.unremitted_fund) }}    <span class="text">  Unremitted funds</span>-->
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
                            <i class="number fa fa-user"></i>
                            <div class="text-header">AGENTS</div>
                            <div class="number">{{ metrics.agent }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Infobox -->

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <v-overlay
                            :absolute="absolute"
                            :value="chart1"
                    > <v-progress-circular indeterminate size="60"></v-progress-circular>
                    </v-overlay>
                    <div class="panel panel-default">
                        <div class="panel-heading">REVENUE POINTS </div>
                        <div class="panel-body">
                            <!--<div id="chart_1"></div>-->
                            <canvas id="chart_1" height="100"></canvas>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <v-overlay
                            :absolute="absolute"
                            :value="chart2"
                    > <v-progress-circular indeterminate size="60"></v-progress-circular>
                    </v-overlay>
                    <div class="panel panel-default">
                        <div class="panel-heading">PERCENTAGE CHANGE IN REVENUE </div>
                        <div class="panel-body">
                            <!--<div id="chart_2"></div>-->
                            <canvas id="chart_2" height="100"></canvas>
                        </div>
                    </div>
                </div>




            </div>

            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <v-overlay
                            :absolute="absolute"
                            :value="chart3"
                    > <v-progress-circular indeterminate size="60"></v-progress-circular>
                    </v-overlay>
                    <div class="panel panel-default">
                        <div class="panel-heading"> AGENTS </div>
                        <div class="panel-body">
                            <!--<div id="chart_3"></div>-->
                            <canvas id="agent_chart" height="210"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <v-overlay
                            :absolute="absolute"
                            :value="chart4"
                    > <v-progress-circular indeterminate size="60"></v-progress-circular>
                    </v-overlay>
                    <div class="panel panel-default">
                        <div class="panel-heading">TOP PERFORMERS </div>
                        <div class="panel-body">
                            <table class="table table-striped table-hover js-basic-example dataTable" id="users_table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>AGENT NAME</th>
                                    <th>REVENUE GNERATED</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="topper in toppers" v-bind:key="topper.agent_id">
                                    <td>{{topper.id }}</td>
                                    <td>{{ topper.agentName }}</td>
                                    <td>{{ (new Intl.NumberFormat('en-NG', {
                                        style: 'currency',
                                        currency: 'NGN'
                                    })).format(topper.paidInvoice) }}</td>



                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>



            </div>




        </div>
    </div>

</template>

<script>
    export default {
        name: "Director-Revenue",
        created(){

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
                absolute:true,

                chartInit:'',
                chartInit1:'',
                chartInit2:'',

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
              revenue_point:{

                    thisMonthRev:'',
                    prevMonthRev:'',
                    revenuepoints:'',
                    group: ''
              },

                agent:{
                    thisMonthRev:'',
                    agentName: ''
                },

                 chart2_prevMnthRev:[],
                chart2_thisMnthRev:[],
                chart2_plabel:'',
                chart2_clabel:'',
                chart2_revpt:[],

                toppers:[],
                  topper:{
                     id:'',
                      agentName: '',
                       paidInvoice:'',
                      revenue:''

                  },
                locale:'',

            }
        },
        methods:{


            getRevenuePointBarChart(){

                 axios.get('/dashboard/dir-revenue/revenuepoint')
                         .then(response => {

                             if(response.data.status === 'success'){

//                                    this.chart2_plabel = response.data.data.prevMnthLabel;
//                                 this.chart2_clabel = response.data.data.thisMnthLabel;
//                                    this.chart2_prevMnthRev = response.data.data.PrevMonthRev;
//                                 this.chart2_thisMnthRev = response.data.data.ThisMonthRev;
//                                 this.chart2_revpt = response.data.data.RevenuePoints;

                                 var config = {
                                     type: 'bar',
                                     data: {
                                         labels: response.data.data.RevenuePoints ,
                                         datasets: [
                                             {
                                             label:response.data.data.prevMnthLabel+' Revenue',
                                             type: "bar",
                                             backgroundColor: "#32a7f5",
                                             data:response.data.data.PrevMonthRevenue
                                         },{
                                             label:response.data.data.thisMnthLabel+' Revenue',
                                             type: "bar",
                                             backgroundColor: "#6c5b7c",
                                             data:response.data.data.ThisMonthRevenue,
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

                                 if(this.chartInit1) this.chartInit.destroy();
                                 this.chartInit1 = new Chart(document.getElementById("chart_1").getContext("2d"), config);

                                   this.chart1 = false;


                                 var config = {
                                     type: 'line',
                                     data: {
                                         labels: response.data.data.RevenuePoints,
                                         datasets: [
                                             {
                                            label: '% change in Revenue',
                                            borderColor:"#f8981f",
                                             fillOpacity: .2,
                                             data: response.data.data.PercChangeInRevenue    //      [30, 50, 45, 25, 85, 30, 90]
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
                                                // stacked: true,
                                                 ticks: {
                                                     callback: function(value, index, values) {
                                                         return value+'%';
                                                     },
                                                 }
                                             }]
                                         },

                                         tooltips: {
                                             callbacks: {
                                                 label: function(tooltipItem, data) {
                                                     return tooltipItem.yLabel.toLocaleString()+'%';
                                                 }
                                             }
                                         }
                                     }
                                 }

                                if(this.chartInit2) this.chartInit.destroy();
                                 this.chartInit2 = new Chart(document.getElementById("chart_2").getContext("2d"), config);
                              this.chart2 = false;

                         }

            }).catch((error) => {
            console.log('there was an error. '+error);
        })

            },

            getAgentBarChart(){

                axios.get('/dashboard/dir-revenue/agent')
                    .then(response => {


                        if(response.data.status === 'success'){




                            var config = {
                                type: 'bar',
                                data: {
                                    labels: response.data.data.AgentName,
                                    datasets: [
                                        {
                                        label: "Revenue",
                                        data: response.data.data.ThisMonthPaidInvoice,
                                        backgroundColor: '#32a7f5'
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    scales:{
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
                                            callback: function (value, index, values) {
                                                return value.toLocaleString("en-NG", {
                                                    style: "currency",
                                                    currency: "NGN"
                                                });
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
                            var chartInit = new Chart(document.getElementById("agent_chart").getContext("2d"), config);
                            this.chart3 = false;

                            this.toppers = response.data.data.Topper
                            this.chart4 = false;
                        }

                    }).catch((error) => {
                    console.log('there was an error. '+error);
                })



            },

        },
        mounted() {

            axios.get('/dashboard/dir-revenue/metrics')
                .then(response => {
                    if(response.data.status === 'success'){
                        this.metrics.total_business_reg = response.data.data.TotalBusinessReg;
                        this.metrics.monthly_business_reg = response.data.data.MonthlyBusinessReg;
                        this.metrics.monthly_revenue = response.data.data.MonthlyRevenue;
                        this.metrics.yearly_revenue = response.data.data.YearlyRevenue;
                        this.metrics.monthly_paid_inv = response.data.data.PaidInvoice;
                        this.metrics.no_paid_inv = response.data.data.CountPaidInv;
                        this.metrics.monthly_unpaid_inv =response.data.data.UnpaidInvoice;
                        this.metrics.no_unpaid_inv = response.data.data.CountUnpaidInv;
                        this.metrics.no_unclear_cheque = response.data.data.CountUnclearCheque;
                        this.metrics.unclear_cheque = response.data.data.UnclearCheque;
                        this.metrics.unremitted_fund = response.data.data.UnremittedFund ;
                        this.metrics.agent = response.data.data.Agent;
                        this.card_1 = this.card_2 = this.card_3 = this.card_4=false;


                    }
                })
                .catch((error) => {
                    console.log('there was an error. '+error);
                });
            this.getRevenuePointBarChart();
               this.getAgentBarChart();

//                        let externalScript = document.createElement('script')
//            externalScript.setAttribute('src', 'https://d3js.org/d3.v4.min.js')
//            document.head.appendChild(externalScript)


        }
    }
</script>
