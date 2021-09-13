<template>

    <div>
        <div class="page-heading">
            <h1> CASH RECEIPT </h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
                        <i class="fa fa-dashboard"> </i>
                        <span class="nav-label"> Home </span>
                    </router-link>
                </li>
                <li > Remittance</li>
                <li class="active"> Cash Receipt</li>
            </ol>
        </div>

        <div class="page-body">

            <div class="panel panel-default">
                <div class="panel-heading d-flex">
                    <span> Cash Receipt </span>
                </div>

                <div class="panel-body">

                    <v-card-title>
                        <v-spacer  >
                            &nbsp;&nbsp;&nbsp;
                            <vue-excel-xlsx
                                    class = ""
                                    :data="this.cash_receipts"
                                    :columns="columns"
                                    :filename="'cash receipt'"
                                    :sheetname="'cash receipt'"
                            >
                                <v-btn  >Excel</v-btn>
                            </vue-excel-xlsx>
                        </v-spacer>
                        <v-col cols="4" sm="12" md="4"> <v-text-field
                                v-model="search"
                                append-icon="mdi-magnify"
                                label="Search"
                                single-line
                                hide-details
                                solo
                        ></v-text-field></v-col>

                        <v-overlay
                                :value="table_1"
                        > <v-progress-circular indeterminate size="60"></v-progress-circular>
                        </v-overlay>
                    </v-card-title>

                    <v-data-table
                            :headers="this.headers"
                            :items="this.cash_receipts"
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
                        <!--</div>-->

                    </div>
                </div>


            </div>

        </div>


    </div>

</template>

<script>


//    // import this component
//    import flatPickr from 'vue-flatpickr-component';
//    import 'flatpickr/dist/flatpickr.css';
//    import 'flatpickr/dist/themes/material_blue.css';

    export default {
        name: 'cashReceipt',

        created(){

        },
        components: {
           // flatPickr


        },

        data() {
            return {

                table_1:true,
                absolute: true,

                page:1,
                pageCount: 0,
                itemsPerPage: 15,

                cash_receipts:[],





                search:'',
                headers: [
                    { text: '#', value: 'sn' },
                    { text: 'Description', value: 'serviceName' },
                    { text: 'LGA', value: 'lgaName' },
                    { text: 'Rev. Point', value: 'revPtName' },
                    { text: 'Invoice No', value: 'invoice' },
                    { text: 'Amount', value: 'amount' },
                    { text: 'Collector', value: 'collectorName' },
                    { text: 'Created Date', value: 'date' },

                ],



                // excel format
                columns : [
                    { label: '#', field: 'sn' },
                    { label: 'Description', field: 'serviceName' },
                    { label: 'LGA', field: 'lgaName' },
                    { label: 'Revenue Point', field: 'revPtName' },
                    { label: 'Invoice No', field: 'invoice' },
                    { label: 'Amount', field: 'amount' },
                    { label: 'Collector', field: 'collectorName' },
                    { label: 'Created Date', field: 'date' },
                ],




            }







        },

          created(){
              this.getCashReceipt();
          },
        watch: {

            $route:'getCashReceipt'
        },
        methods: {

            getCashReceipt: async function(){
                try{
                    await axios.get( `/cashreceipt/${this.$route.params.txn_ref}`  )
                        .then( response => {
                            this.cash_receipts = response.data.data;
                          this.table_1=false;

                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                  } catch(e){
                    console.log(e);
                  }
             },
        },
        mounted(){

           //  this.getCashReceipt();

        },
    }

</script>
