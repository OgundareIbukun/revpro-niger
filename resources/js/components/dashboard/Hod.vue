<template>

    <div>
        <div class="page-heading">
            <h1><small> HEAD OF DEPARTMENT/DESK OFFICER</small><br>INVOICE LISTING</h1>
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
                <div class="panel-heading">FILTER RESULT </div>
                <div class="panel-body">
                    <div class="row clearfix">
                        <form   v-on:submit.prevent="searchResult">
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
                                            <!--<button class="btn btn-default" type="button" title="Clear" data-clear>-->
                                                <!--<i class="fa fa-times">-->
                                                    <!--<span aria-hidden="true" class="sr-only">Clear</span>-->
                                                <!--</i>-->
                                            <!--</button>-->
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
                                            <!--<button class="btn btn-default" type="button" title="Clear" data-clear>-->
                                                <!--<i class="fa fa-times">-->
                                                    <!--<span aria-hidden="true" class="sr-only">Clear</span>-->
                                                <!--</i>-->
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
                                <select  v-model="status" class="form-control">
                                    <option value=""  >Select invoice status</option>
                                    <option value="pending">pending</option>
                                    <option value="success">success</option>
                                    <option value="uncleared">uncleared</option>
                                </select>
                                <label class="error" v-if="errors['status']">{{errors['status'][0]}}</label>

                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">

                                <div class="input-group-btn">
                                    <button class="btn btn-primary btn-sm" type="submit">
                                        Search
                                        <i class="fa fa-search"> </i>
                                    </button>

                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>





            <div class="row clearfix">
                <div id="metrics" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                    <div class="info-box infobox-type-5 hover-expand-effect blue-mix">
                        <!--<div class="icon">-->
                            <!--<i class="material-icons">payment</i>-->
                        <!--</div>-->
                        <div class="content">
                            <!--<div class="text-head">ANALYSIS</div>-->
                            <div class="text"> Unpaid invoice</div>
                            <div class="number" > {{(new Intl.NumberFormat('en-NG', {
                                style: 'currency',
                                currency: 'NGN'
                            })).format(metrics.unpaid_invoice) }}
                            </div>

                            <div class="text"> Paid invoice</div>
                            <div class="number" > {{(new Intl.NumberFormat('en-NG', {
                                style: 'currency',
                                currency: 'NGN'
                            })).format(metrics.paid_invoice) }}
                            </div>
                            <div class="text"> Uncleared cheque</div>
                            <div class="number" > {{(new Intl.NumberFormat('en-NG', {
                                style: 'currency',
                                currency: 'NGN'
                            })).format(metrics.unclear_cheque) }}
                            </div>

                            <div class="text"> Total</div>
                            <div class="number" > {{(new Intl.NumberFormat('en-NG', {
                                style: 'currency',
                                currency: 'NGN'
                            })).format(metrics.total) }}
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- #END# Infobox -->

              <div id="table" class="row clearfix">
                  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">TABLE </div>
                          <div class="panel-body">



                              <v-skeleton-loader
                                      class="mx-auto"
                                      type="card" >
                                  <v-card-title>
                                      <v-spacer></v-spacer>
                                      <v-text-field
                                              v-model="search"
                                              append-icon="mdi-magnify"
                                              label="Search"
                                              single-line
                                              hide-details
                                      ></v-text-field>
                                  </v-card-title>
                                  <v-data-table
                                          :headers="this.headers"
                                          :items="this.invoices"
                                          :search="search"
                                          class="elevation-1"
                                          :page.sync="page"
                                          :items-per-page="itemsPerPage"
                                          hide-default-footer
                                          @page-count="pageCount = $event"
                                  >
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
                              <!--<v-row justify="space-around">-->
                                  <!--<v-date-picker v-model="picker" color="green lighten-1"></v-date-picker>-->

                              <!--</v-row>-->
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
        name: "Hod",
     //   inject: ['theme'],

        created(){

        },
        components: {
            flatPickr,


        },

        data(){
            return {

                page: 1,
                pageCount: 0,
                itemsPerPage: 10,
               // picker: new Date().toISOString().substr(0, 10),
            search:'',
                headers: [

                    { text: '#', value: 'sn' },
                    { text: 'Payer`s Name', value: 'payer' },
                    { text: 'Amount', value: 'amount' },
                    { text: 'Description', value: 'description' },
                    { text: 'Name', value: 'agent' },
                    { text: 'Date', value: 'date' },
                    { text: 'Status', value: 'status' },
                ],

                fromDate: '', //  new Date(),
                toDate: '', //  new Date(),
                status:'',

                getFrom:'',
                getTo:'',
                getStatus:'',

                config: {
                    wrap: true, // set wrap to true only when using 'input-group'
                    altFormat: 'M j, Y',
                    altInput: true,
                    dateFormat: 'Y-m-d',

                },

                metrics:{
                    unpaid_invoice:'',
                    paid_invoice:'',
                    unclear_cheque:'',
                    total:'',
                },
                invoices:[],
//                invoices:[
//                    { agentName: 'Adekola', amount:'2000', description:'Tax', date:'23/09/2020' }
//                ],
                invoice:{
                     sn:'',
                  agentName:'',
                    amount:'',
                    description:'',
                     date:'',
                     payer:'',
                     status:'',

                },
                 dataTable:'',
                errors:[],


            }
        },
        methods:{
            searchResult: async function(){

                try{
                      this.getFrom = this.fromDate;
                      this.getTo = this.toDate;
                      this.getStatus = this.status;
                    //this.dataTable = $('#agent-table').DataTable({});
                    await axios.post('/dashboard/hod', {
                        'fromDate':this.fromDate,
                        'toDate':this.toDate,
                        'status':this.status,

                    })
                        .then( response => {
                            if(response.data.status == 'success'){


                                this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                                this.metrics.paid_invoice = response.data.data.paid_invoice;
                                this.metrics.unclear_cheque = response.data.data.unclear_cheque;
                                this.metrics.total = response.data.data.total;
                                this.invoices = response.data.data.invoice;


                            }

                             this.fromDate = this.getFrom;
                            this.toDate =this.getTo;
                            this.status = this.getStatus;
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


        },
       mounted() {

         //   $('#metrics').hide();
         //   $('#table').hide();
          axios.post('/dashboard/hod/index')
                .then(response => {
                    if(response.data.status === 'success'){
                        this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                        this.metrics.paid_invoice = response.data.data.paid_invoice;
                        this.metrics.unclear_cheque = response.data.data.unclear_cheque;
                        this.metrics.total = response.data.data.total;
                        this.invoices = response.data.data.invoice;

                                     }
                })
                .catch((error) => {
                    console.log('there was an error. '+error);
                });

        }
    }
</script>
