<template>

    <div>
        <div class="panel panel-default">
                <div class="panel-heading">FILTER RESULT </div>
                <div class="panel-body">
                    <div class="row clearfix">
                        <form   v-on:submit.prevent="getSettlement">

                            <div v-if="isAdmin" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
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
                                    <button  class="m-t-8 btn btn-primary btn-md" type="submit">
                                        Filter
                                        <i class="fa fa-search"> </i>
                                    </button>

                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        <div class="page-heading">
            <h1><small> Settlement Details</small><br>SETTLEMENT MANAGEMENT</h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
                        <i class="fa fa-dashboard"> </i>
                        <span class="nav-label">Revops</span>
                    </router-link>
                </li>
                <li class="active">Settlement Details</li>
                <li class="active">Overview</li>
            </ol>
        </div>

        <div class="page-body">

            <div id="table" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">

                    <div class="panel panel-default">


                        <div class="panel-heading">Settlement </div>
                        <div class="panel-body">

                            <v-card-title> Settlement Summary
                                <v-spacer>
                                    &nbsp;&nbsp;
                                    <vue-excel-xlsx
                                            class = ""
                                            :data="this.settlement"
                                            :columns="columns"
                                            :filename="'settlement'"
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
                                    :headers="this.Headers"
                                    :items="this.settlement"
                                    :search="search"
                                    class="elevation-1"
                                    :page.sync="page"
                                    :items-per-page="itemsPerPage"
                                    hide-default-footer
                                    @page-count="pageCount = $event"
                            >
                                <template v-slot:item.cardTxn="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.cardTxn) }}</span>
                                </template>
                                <template v-slot:item.bankTxn="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.bankTxn) }}</span>
                                </template>
                                <template v-slot:item.cardTxnFee="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.cardTxnFee) }}</span>
                                </template>

                                <template v-slot:item.bankTxnFee="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.bankTxnFee) }}</span>
                                </template>
                                <template v-slot:item.totalTxnFee="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.totalTxnFee) }}</span>
                                </template>
                                <template v-slot:item.cardSettlement="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.cardSettlement) }}</span>
                                </template>
                                <template v-slot:item.bankSettlement="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.bankSettlement) }}</span>
                                </template>
                                <template v-slot:item.totalSettlement="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.totalSettlement) }}</span>
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
        name: "Settlement",

         components:{
            flatPickr,

        },

        data(){
            return {

                table_1:true,
                absolute: true,
                isAdmin:false,

                page: 1,
                pageCount: 0,
                itemsPerPage: 10,
                search:'',
                Headers: [

                    { text: '#', value: 'sn' },
                    { text: 'MONTH', value: 'month' },
                    { text: 'CARD TRANSACTIONS', value: 'cardTxn' },
                    { text: 'BANK TRANSACTIONS', value: 'bankTxn' },
                    { text: 'TRANSACTION FEES(CARD)', value: 'cardTxnFee' },
                    { text: 'TRANSACTION FEES(BANK)', value: 'bankTxnFee' },
                    { text: 'TRANSACTION FEES(TOTAL)', value: 'totalTxnFee' },
                    { text: 'SETTLEMENT AMOUNT(CARD)', value: 'cardSettlement' },
                    { text: 'SETTLEMENT AMOUNT(BANK)', value: 'bankSettlement' },
                    { text: 'TOTAL SETTLEMENT', value: 'totalSettlement' },

                ],

                columns: [

                    { label: '#', field: 'sn' },
                    { label: 'MONTH', field: 'month' },
                    { label: 'CARD TRANSACTIONS', field: 'cardTxn' },
                    { label: 'BANK TRANSACTIONS', field: 'bankTxn' },
                    { label: 'TRANSACTION FEES(CARD)', field: 'cardTxnFee' },
                    { label: 'TRANSACTION FEES(BANK)', field: 'bankTxnFee' },
                    { label: 'TRANSACTION FEES(TOTAL)', field: 'totalTxnFee' },
                    { label: 'SETTLEMENT AMOUNT(CARD)', field: 'cardSettlement' },
                    { label: 'SETTLEMENT AMOUNT(BANK)', field: 'bankSettlement' },
                    { label: 'TOTAL SETTLEMENT', field: 'totalSettlement' },

                ],

                settlement:[],
                errors:[],


            }
        },
        methods:{


            getSettlement: async function(){

                try{
                    await axios.get('/settlement?lga_id='+this.lga_id)
                        .then( response => {
                            if(response.data.status == 'success'){
                                // this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                                this.settlement = response.data.data.settlement;
                            }
                            this.table_1 = false;
                        })
                        .catch( (error) => {
                            console.log(error.response.data.errors);

                            if(error.response.status == 422){
                                this.errors = error.response.data.errors;


                            }else{
                                console.log('else2');
                            }
                        });

                }catch (e) {


                }

            },
             getLgas: async function(){
                try{
                    await axios.get(`/state/${this.$state_id}/lgas`)
                        .then( response => {
                            this.lgas = response.data.data
                            if(this.lgas.length == 1){
                                this.lga_id = this.lgas[0];
                                // console.log(this.lgas[0]['id'])
                            }else{
                                this.isAdmin = true;
                            }
                            // console.log(this.lgas);
                            this.getSettlement();

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
            this.getLgas();

        }
    }
</script>
