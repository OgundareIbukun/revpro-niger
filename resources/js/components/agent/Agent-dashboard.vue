<template>

    <div>
        <div class="page-heading">
            <h1><small> Agent Management</small><br>AGENT DASHBOARD</h1>
            <h1><small> {{lga_name}}</small><br>{{agent_name}}</h1>
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
                <div id="metrics" class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >

                    <div  style="height:200px"  class="info-box infobox-type-5 hover-expand-effect aqua-mix">

                        <v-overlay
                                :absolute="absolute"
                                :value="card_1"
                        > <v-progress-circular indeterminate size="60"></v-progress-circular>
                        </v-overlay>
                        <div   class="content"  style="padding-left:15%;padding-top: 12% " >
                            <i class="number fa fa-tag"></i>
                            <!--<div class="text-head">ANALYSIS</div>-->
                            <div class="text"> Potential Revenue</div>
                            <div class="number" > ₦{{ this.$shared.suffixNotation(metrics.total_invoice) }}
                            </div>

                        </div>
                    </div>
                </div>
                <div  class="col-lg-3 col-md-3 col-sm-6 col-xs-12"  >

                    <div   style="height:200px" class="info-box infobox-type-5 hover-expand-effect blue-mix">

                        <v-overlay
                                :absolute="absolute"
                                :value="card_2"
                        > <v-progress-circular indeterminate size="60"></v-progress-circular>
                        </v-overlay>

                        <div class="content" style="padding-left:15%;padding-top: 12% ">
                            <i class="number fa fa-tags"></i>
                            <!--<div class="text-head">ANALYSIS</div>-->
                            <div class="text"> Total Generated</div>
                            <div class="number" > ₦{{ this.$shared.suffixNotation(metrics.paid_invoice) }}
                            </div>

                        </div>
                    </div>
                </div>

                <div  class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div style="height:200px" class="info-box infobox-type-5 hover-expand-effect orange-mix">
                        <v-overlay
                                :absolute="absolute"
                                :value="card_3"
                        > <v-progress-circular indeterminate size="60"></v-progress-circular>
                        </v-overlay>
                        <div class="content" style="padding-left:15%;padding-top: 12% ">
                            <i class="number fa fa-gg"></i>
                            <!--<div class="text-head">ANALYSIS</div>-->
                            <div class="text ">Unremitted Cash</div>
                            <div class="number" > ₦{{ this.$shared.suffixNotation( metrics.unremitted_fund) }}
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- #END# Infobox -->




            <div class="panel panel-default">
                <div class="panel-heading">Filter Result </div>
                <div class="panel-body">
                    <div class="row clearfix">
                        <form   v-on:submit.prevent="searchResult">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <select    v-model="lga_id" class="form-control" @change="getFilteredAgents" >
                                    <option value=""  >Select LGA</option>
                                    <option v-for="lga in  lgas" v-bind:key="lga.id" v-bind:value="lga.id">
                                        {{ lga.name }}
                                    </option>
                                </select>
                                <label class="error" v-if="errors['lga_id']">{{errors['lga_id'][0]}}</label>

                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <select    v-model="agent_id" class="form-control">
                                    <option value=""  >Select Agent</option>
                                    <option v-for="agent in  agents" v-bind:key="agent.id" v-bind:value="agent.id">
                                        {{ agent.name }}
                                    </option>
                                </select>
                                <label class="error" v-if="errors['agent_id']">{{errors['agent_id'][0]}}</label>

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

            <div id="agentChart" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <v-overlay
                            :absolute="absolute"
                            :value="chart1"
                    > <v-progress-circular indeterminate size="60"></v-progress-circular>
                    </v-overlay>
                    <div class="panel panel-default">
                        <div class="panel-heading"> Last Six Months Revenue </div>
                        <div class="panel-body">
                            <!--<div id="chart_2"></div>-->
                            <canvas id="chart_1" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>



            <div id="table" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">Collection Summary Per Service </div>
                        <div class="panel-body">

                                <v-card-title>
                                    <v-spacer>

                                        &nbsp;&nbsp;&nbsp;
                                        <vue-excel-xlsx
                                                class = ""
                                                :data="this.summary"
                                                :columns="summaryColumns"
                                                :filename="'Summary'"
                                                :sheetname="'sheetname'"
                                        >
                                            <v-btn> Excel </v-btn>
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
                                    <template v-slot:item.bulkSingle="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.bulkSingle) }}</span>
                                    </template>
                                    <template v-slot:item.quickPrint="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.quickPrint ) }}</span>
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


            <div id="table2" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Single & Bulk Payments </div>
                        <div class="panel-body">
                            <v-overlay
                                    :absolute="absolute"
                                    :value="table_2"
                            > <v-progress-circular indeterminate size="60"></v-progress-circular>
                            </v-overlay>

                                <v-card-title>
                                    <v-spacer>

                                        &nbsp;&nbsp;&nbsp;
                                        <vue-excel-xlsx
                                                class = ""
                                                :data="this.identifiedPayer"
                                                :columns="BSColumns"
                                                :filename="'BulkAndSinglePayment'"
                                                :sheetname="'BulkAndSingleSheet'"
                                        >
                                            <v-btn> Excel</v-btn>
                                        </vue-excel-xlsx>
                                    </v-spacer>
                                    <v-text-field
                                            v-model="searchPayer"
                                            append-icon="mdi-magnify"
                                            label="Search"
                                            single-line
                                            hide-details
                                            solo
                                    ></v-text-field>
                                </v-card-title>
                                <v-data-table
                                        :headers="this.idPayerHeaders"
                                        :items="this.identifiedPayer"
                                        :search="searchPayer"
                                        class="elevation-1"
                                        :page.sync="pagePayer"
                                        :items-per-page="itemsPerPagePayer"
                                        hide-default-footer
                                        @page-count="pageCountPayer = $event"
                                >
                                    <template v-slot:item.amount="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.amount) }}</span>
                                    </template>
                                    <template v-slot:item.status="{ item }">
                                        <span> <label class="label" v-bind:class="{'label-success':item.status == 'success', 'label-warning':item.status == 'pending', 'label-info':item.status == 'uncleared'}">{{item.status}}</label></span>
                                    </template>

                                </v-data-table>
                                <div class="text-center pt-2 "  >
                                    <v-pagination color="primary"  dark v-model="pagePayer" :length="pageCountPayer"></v-pagination>
                                    <v-text-field
                                            :value="itemsPerPagePayer"
                                            label="Items per page"
                                            type="number"
                                            min="-1"
                                            max="15"
                                            @input="itemsPerPagePayer = parseInt($event, 10)"
                                    ></v-text-field>
                                </div>


                        </div>
                    </div>
                </div>
            </div>

            <div id="collection" class="row clearfix hide">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Agent Collections </div>
                        <div class="panel-body">

                            <v-overlay
                                    :absolute="absolute"
                                    :value="table_3"
                            > <v-progress-circular indeterminate size="60"></v-progress-circular>
                            </v-overlay>
                                <v-card-title>
                                    <v-spacer> &nbsp;&nbsp;
                                        <vue-excel-xlsx
                                                class = ""
                                                :data="this.collection"
                                                :columns="collectionColumns"
                                                :filename="'collection'"
                                                :sheetname="'collection'"
                                        >
                                            <v-btn>Excel </v-btn>
                                        </vue-excel-xlsx>
                                    </v-spacer>
                                    <v-text-field
                                            v-model="searchCollection"
                                            append-icon="mdi-magnify"
                                            label="Search"
                                            single-line
                                            hide-details
                                            solo
                                    ></v-text-field>
                                </v-card-title>
                                <v-data-table
                                        :headers="this.collectionHeaders"
                                        :items="this.collection"
                                        :search="searchCollection"
                                        class="elevation-1"
                                        :page.sync="pageCollection"
                                        :items-per-page="itemsPerPageCollection"
                                        hide-default-footer
                                        @page-count="pageCountCollection = $event"
                                >
                                    <template v-slot:item.totalReceipt="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.totalReceipt) }}</span>
                                    </template>

                                    <template v-slot:item.totalInvoice="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.totalInvoice) }}</span>
                                    </template>
                                    <template   v-slot:item.unremitted="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.unremitted) }}</span>
                                    </template>
                                    <template v-slot:item.remitted="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.remitted) }}</span>
                                    </template>
                                </v-data-table>
                                <div class="text-center pt-2 "  >
                                    <v-pagination color="primary"  dark v-model="pageCollection" :length="pageCountCollection"></v-pagination>
                                    <v-text-field
                                            :value="itemsPerPageCollection"
                                            label="Items per page"
                                            type="number"
                                            min="-1"
                                            max="15"
                                            @input="itemsPerPageCollection = parseInt($event, 10)"
                                    ></v-text-field>
                                </div>


                        </div>
                    </div>
                </div>
            </div>

            <div id="remits" class="row clearfix hide">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Remittance Summary </div>
                        <div class="panel-body">

                            <v-overlay
                                    :absolute="absolute"
                                    :value="table_4"
                            > <v-progress-circular indeterminate size="60"></v-progress-circular>
                            </v-overlay>
                            <v-card-title>
                                <v-spacer> &nbsp;&nbsp;
                                    <vue-excel-xlsx
                                            class = ""
                                            :data="this.remits"
                                            :columns="remitColumns"
                                            :filename="'remits'"
                                            :sheetname="'remits'"
                                    >
                                        <v-btn>Excel </v-btn>
                                    </vue-excel-xlsx>
                                </v-spacer>

                                <v-text-field
                                        v-model="searchRemit"
                                        append-icon="mdi-magnify"
                                        label="Search"
                                        single-line
                                        hide-details
                                        solo
                                ></v-text-field>
                            </v-card-title>
                            <v-data-table
                                    :headers="this.remitHeaders"
                                    :items="this.remits"
                                    :search="searchRemit"
                                    class="elevation-1"
                                    :page.sync="pageRemit"
                                    :items-per-page="itemsPerPageRemit"
                                    hide-default-footer
                                    @page-count="pageCountRemit = $event"
                            >
                                <template v-slot:item.amount="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.amount) }}</span>
                                </template>

                                <template v-slot:item.created_date="{ item }">
                                    <span>{{  item.created_date | moment("dddd, MMMM Do YYYY") }}</span>
                                </template>
                                <template v-slot:item.payment_date="{ item }">
                                    <span v-if="item.payment_date != '' ">{{  item.payment_date | moment("dddd, MMMM Do YYYY") }}</span>
                                </template>
                                <template v-slot:item.status="{ item }">
                                    <span> <label class="label" v-bind:class="{'label-success':item.status == 'success', 'label-warning':item.status == 'pending', 'label-info':item.status == 'uncleared'}">{{item.status}}</label></span>
                                </template>
                            </v-data-table>
                            <div class="text-center pt-2 "  >
                                <v-pagination color="primary"  dark v-model="pageRemit" :length="pageCountRemit"></v-pagination>
                                <v-text-field
                                        :value="itemsPerPageRemit"
                                        label="Items per page"
                                        type="number"
                                        min="-1"
                                        max="15"
                                        @input="itemsPerPageRemit = parseInt($event, 10)"
                                ></v-text-field>
                            </div>


                        </div>
                    </div>
                </div>
            </div>



            <div id="allremits" class="row clearfix ">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Remittance Summary </div>
                        <div class="panel-body">

                            <v-overlay
                                    :absolute="absolute"
                                    :value="table_5"
                            > <v-progress-circular indeterminate size="60"></v-progress-circular>
                            </v-overlay>
                            <v-card-title>

                                <v-spacer> &nbsp;&nbsp;
                                    <vue-excel-xlsx
                                            class = ""
                                            :data="this.allremits"
                                            :columns="remitColumns"
                                            :filename="'remit'"
                                            :sheetname="'remit'"
                                    >
                                        <v-btn> Excel  </v-btn>
                                    </vue-excel-xlsx>
                                </v-spacer>
                                <v-spacer>

                                </v-spacer>
                                <v-text-field
                                        v-model="searchRemit1"
                                        append-icon="mdi-magnify"
                                        label="Search"
                                        single-line
                                        hide-details
                                        solo
                                ></v-text-field>
                            </v-card-title>
                            <v-data-table
                                    :headers="this.remit1Headers"
                                    :items="this.allremits"
                                    :search="searchRemit1"
                                    class="elevation-1"
                                    :page.sync="pageRemit1"
                                    :items-per-page="itemsPerPageRemit1"
                                    hide-default-footer
                                    @page-count="pageCountRemit1 = $event"
                            >
                                <template v-slot:item.amount="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.amount) }}</span>
                                </template>

                                <template v-slot:item.created_date="{ item }">
                                    <span>{{  item.created_date | moment("dddd, MMMM Do YYYY") }}</span>
                                </template>
                                <template v-slot:item.payment_date="{ item }">
                                    <span v-if="item.payment_date != '' ">{{  item.payment_date | moment("dddd, MMMM Do YYYY") }}</span>
                                </template>
                                <template v-slot:item.status="{ item }">
                                    <span> <label class="label" v-bind:class="{'label-success':item.status == 'success', 'label-warning':item.status == 'pending', 'label-info':item.status == 'uncleared'}">{{item.status}}</label></span>
                                </template>
                            </v-data-table>
                            <div class="text-center pt-2 "  >
                                <v-pagination color="primary"  dark v-model="pageRemit1" :length="pageCountRemit1"></v-pagination>
                                <v-text-field
                                        :value="itemsPerPageRemit1"
                                        label="Items per page"
                                        type="number"
                                        min="-1"
                                        max="15"
                                        @input="itemsPerPageRemit1 = parseInt($event, 10)"
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
        name: "Agent-dashboard",


        created(){

        },
        components: {
            flatPickr,


        },

        data(){
            return {

                chart1:true,
                card_1:true,
                card_2:true,
                card_3:true,
                table_1:true,   table_2:true,
                table_3:true,
                table_4:false,
                table_5:true,
                absolute: true,

                page: 1,
                pageCount: 0,
                itemsPerPage: 10,
                search:'',
                summaryHeaders: [

                    { text: '#', value: 'sn' },
                    { text: 'Service Name', value: 'serviceName' },
                    { text: 'Revenue Generated', value: 'total' },
                    { text: 'Single & Bulk Payment', value: 'bulkSingle' },
                    { text: 'Quick Print', value: 'quickPrint' },

                ],

                  // excel
                summaryColumns:[
            { label: '#', field: 'sn' },
            { label: 'Service Name',field: 'serviceName' },
            {label: 'Potential Revenue', field: 'total',dataFormat:this.$shared.amountFormat },
            { label: 'Single & Bulk Payment', field: 'bulkSingle',dataFormat:this.$shared.amountFormat },
            { label: 'Quick Print', field: 'quickPrint',dataFormat:this.$shared.amountFormat },
                ],

                pagePayer: 1,
                pageCountPayer: 0,
                itemsPerPagePayer: 10,
                searchPayer:'',
                idPayerHeaders: [

                    { text: '#', value: 'sn' },
                    { text: 'Payer Name', value: 'name' },
                    { text: 'Service Name', value: 'serviceName' },
                    { text:  this.$shared.irs+' ID', value: 'birsId' },
                    { text: 'Txn Ref', value: 'txnRef' },
                    { text: 'Amount', value: 'amount' },
                    { text: 'LGA', value: 'lgaName' },
                    { text: 'Revenue Point', value: 'revPointName' },
                    { text: 'Status', value: 'status' },

                ],

                BSColumns: [

                    { label: '#', field: 'sn' },
                    { label: 'PAYERS NAME', field: 'name' },
                    { label: 'SERVICE NAME', field: 'serviceName' },
                    { label: this.$shared.irs+' ID', field: 'birsId' },
                    { label: 'TXN REF', field: 'txnRef' },
                    { label: 'AMOUNT', field: 'amount',dataFormat:this.$shared.amountFormat },
                    { label: 'LGA', field: 'lgaName' },
                    { label: 'REVENUE POINT', field: 'revPointName' },
                    { label: 'STATUS', field: 'status' },

                ],


                pageCollection: 1,
                pageCountCollection: 0,
                itemsPerPageCollection: 10,
                searchCollection:'',

//                  if( this.$roles.user_role === this.$roles.super_admin ||  this.$roles.user_role === this.$roles.admin){
//
//                  }
//                   else {
//
//
//            }

                collectionHeaders: [

                    { text: '#', value: 'sn', show:true },
                    { text: 'Agent Name', value: 'agentName', show:true},
                    { text: 'LGA', value: 'lgaName' , show:true},
                    { text: 'Potential Revenue', value: 'totalInvoice', show:true },
                    { text: 'Revenue Generated', value: 'totalReceipt' , show:true},
                    { text: 'Remitted', value: 'remitted', show:true },
                 //   v-can($roles.user_role ===  $roles.super_admin || $roles.user_role === $roles.admin)
//                 { text: 'Unremitted Cash', value: 'unremitted', show:false },




                ],

                collectionColumns: [

                    { label: '#', field: 'sn' },
                    { label: 'AGENTS NAME', field: 'agentName' },
                    { label: 'LGA', field: 'lgaName' },
                    { label: 'POTENTIAL REVENUE', field: 'totalInvoice',dataFormat:this.$shared.amountFormat },
                    { label: 'REVENUE GENERATED', field: 'totalReceipt',dataFormat:this.$shared.amountFormat },
                    { label: 'REMITTED', field: 'remitted',dataFormat:this.$shared.amountFormat },
                    { label: 'PRESENTLY UNREMITTED CASH', field: 'unremitted',dataFormat:this.$shared.amountFormat },

                ],

                pageRemit: 1,
                pageCountRemit: 0,
                itemsPerPageRemit: 50,
                searchRemit:'',
                remitHeaders: [

                    { text: '#', value: 'sn' },
                    { text: 'Amount', value: 'amount' },
                    { text: 'Txn Ref', value: 'txn_ref' },
                    { text: 'Payment Channel', value: 'payment_type' },
                    { text: 'Created Date', value: 'created_date' },
                    { text: 'Payment Date', value: 'payment_date' },
                    { text: 'Payment Status', value: 'status' },

                ],

                pageRemit1: 1,
                pageCountRemit1: 0,
                itemsPerPageRemit1: 10,
                searchRemit1:'',
                remit1Headers: [

                    { text: '#', value: 'sn' },
                    { text: 'Agent Name', value: 'agent_name' },
                    { text: 'Amount', value: 'amount' },
                    { text: 'Txn Ref', value: 'txn_ref' },
                    { text: 'Payment Channel', value: 'payment_type' },
                    { text: 'Created Date', value: 'created_date' },
                    { text: 'Payment Date', value: 'payment_date' },
                    { text: 'Payment Status', value: 'status' },

                ],


                remitColumns: [

                    { label: '#', field: 'sn' },
                    { label: 'AGENT NAME', field: 'agent_name' },
                    { label: 'AMOUNT', field: 'amount' ,dataFormat:this.$shared.amountFormat },
                    { label: 'TXN REF', field: 'txn_ref' },
                    { label: 'PAYMENT CHANNEL', field: 'payment_type' },
                    { label: 'CREATED DATE', field: 'created_date',dataFormat:this.$shared.createdDateFormat },
                    { label: 'PAYMENT DATE', field: 'payment_date' ,dataFormat:this.$shared.paymentDateFormat },
                    { label: 'PAYMENT STATUS', field: 'status' },

                ],







                fromDate: '', //  new Date(),
                toDate: '', //  new Date(),
                agent_id:'',

                 agent_name: '',
                 lga_name: '',

                getFrom:'',
                getTo:'',
                getAgent:'',

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
                 lga_id:'',
                  agents:[],
                  summary:[],
                    identifiedPayer:[],
                   collection:[],
                   remits:[],
                allremits:[],
                 lgas:[],
                errors:[],
                chartInit:'',
                lastSixMonthRev:'',
                monthName:'',


            }
        },
        methods:{
            initPreLoader(){

                this.card_1 = this.card_2 = this.card_3 = this.table_1= this.table_2 = this.table_3 = this.table_4 =  true;
            },
            hidePreLoader(){

                this.card_1 = this.card_2 = this.card_3 = this.table_1= this.table_2 = this.table_3 =  false;
            },

                searchResult: async function() {

                    this.chart1 = true;
                this.getMetrics();
                    this.getSummary();
                    this.getBulkSinglePayment();


                    if (this.agent_id == 'all' || this.agent_id == '' || this.lga_id == ''){
                        this.table_4 = false;
                        $('#remits').addClass('hide');
                        this.getCollection();

                          this.agent_name ='';
                          this.lga_name ='';

                        this.table_5 = true;
                        $('#allremits').removeClass('hide');

                        this.getAllAgentRemittance();
                        this.getLastSixMonthRev();
                }
                    else  {

                        this.table_3 =  false;
                        $('#collection').addClass('hide');

                        this.table_4 = true;
                        $('#remits').removeClass('hide');
                        this.getRemittance();

                        $('#allremits').addClass('hide');

                        this.getLastSixMonthRev();

                        }
                        //  this.hidePreLoader();
                },
            getMetrics: async function(){

                try{
                    this.getFrom = this.fromDate;
                    this.getTo = this.toDate;
                    this.getAgent = this.agent_id;
                    await axios.post('/agent-dashboard/metrics', {
                        'fromDate':this.fromDate,
                        'toDate':this.toDate,
                        'agent_id':this.agent_id,
                        'lga_id':this.lga_id,

                    })
                        .then( response => {
                            if(response.data.status == 'success'){


                               // this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                                this.metrics.paid_invoice = response.data.data.paid_invoice;
                                this.metrics.total_invoice = response.data.data.total_invoice;
                                this.metrics.unremitted_fund = response.data.data.unremitted_fund;
                               //  this.invoices = response.data.data.invoice;


                            }

                               this.card_1 = this.card_2 = this.card_3 = false;

                            this.fromDate = this.getFrom;
                            this.toDate =this.getTo;
                            this.agent_id = this.getAgent;
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

            getSummary: async function(){

                try{
                    this.getFrom = this.fromDate;
                    this.getTo = this.toDate;
                    this.getAgent = this.agent_id;
                    await axios.post('/agent-dashboard/summary', {
                        'fromDate':this.fromDate,
                        'toDate':this.toDate,
                        'agent_id':this.agent_id,
                        'lga_id':this.lga_id

                    })
                        .then( response => {
                            if(response.data.status == 'success'){
                                // this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                                this.summary = response.data.data.summary;

                            }
                                this.table_1 = false;

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

            getBulkSinglePayment: async function(){

                try{
                    this.getFrom = this.fromDate;
                    this.getTo = this.toDate;
                    this.getAgent = this.agent_id;
                    await axios.post('/agent-dashboard/bulkSinglePayment', {
                        'fromDate':this.fromDate,
                        'toDate':this.toDate,
                        'agent_id':this.agent_id,
                        'lga_id':this.lga_id

                    })
                        .then( response => {
                            if(response.data.status == 'success'){
                                // this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                                this.identifiedPayer = response.data.data.identifiedPayer;

                            }

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
            getCollection: async function(){

                try{
                    this.getFrom = this.fromDate;
                    this.getTo = this.toDate;
                    this.getAgent = this.agent_id;
                    await axios.post('/agent-dashboard/collection', {
                        'fromDate':this.fromDate,
                        'toDate':this.toDate,
                        'agent_id':this.agent_id,
                        'lga_id':this.lga_id

                    })
                        .then( response => {
                            if(response.data.status == 'success'){
                                this.collection = response.data.data.collection;

                            }
                            this.table_3 = false;
                           $('#collection').removeClass('hide');

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
            getRemittance: async function(){

                try{
                    this.getFrom = this.fromDate;
                    this.getTo = this.toDate;
                    this.getAgent = this.agent_id;

                    this.agent_name= '';
                    this.lga_name ='';
                    await axios.post('/agent-dashboard/remittance', {
                        'fromDate':this.fromDate,
                        'toDate':this.toDate,
                        'agent_id':this.agent_id,
                        'lga_id':this.lga_id

                    })
                        .then( response => {
                            if(response.data.status == 'success'){
                                // this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                                this.remits = response.data.data.remit;
                                this.agent_name = response.data.data.agent_data.agent_name;
                                this.lga_name = response.data.data.agent_data.lga_name;

                            }

                            this.table_4 = false;

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
            getAllAgentRemittance: async function() {

                try {
                    this.getFrom = this.fromDate;
                    this.getTo = this.toDate;
                    this.getAgent = this.agent_id;
                    await axios.post('/agent-dashboard/allremittance', {
                        'fromDate': this.fromDate,
                        'toDate': this.toDate,
                        //  'agent_id':this.agent_id,
                        'lga_id': this.lga_id

                    })
                        .then(response => {
                            if (response.data.status == 'success') {
                                // this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                                this.allremits = response.data.data.remit;

                            }

                            this.table_5 = false;

//                            this.fromDate = this.getFrom;
//                            this.toDate =this.getTo;
//                            this.agent_id = this.getAgent;
                        })
                        .catch((error) => {
                            console.log(error.response.data.errors);

                            if (error.response.status == 422) {
                                //console.log(error.response.data.errors['users.name'][0]);
                                this.errors = error.response.data.errors;


                            } else {
                                console.log('else2');
                            }
                        });

                } catch (e) {


                }
            },



            getAgents: async function(){
                try{
                    await axios.get('/agent')
                        .then( response => {
                            //console.log(response.data.data);
                            this.agents = response.data.data;
                        })
                        .catch( (error) => { console.log(error) });
                }catch (e) {
                    console.log(e);
                }
            },

            getFilteredAgents: async function(){
                try{
                    await axios.post('/agents/lga',{
                        'lga_id':this.lga_id,
                    })
                        .then( response => {
                            //console.log(response.data.data);
                            this.agents = response.data.data;
                        })
                        .catch( (error) => { console.log(error) });
                }
                catch (e) {
                    console.log(e);
                }

            },

            getLgas: async function(){
                try{
                    await axios.get(`/state/${this.$state_id}/lgas` )
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

            getLastSixMonthRev: async function(){
                try{
                    await axios.post('/agent-dashboard/lastSixMonthRev', {
                        'agent_id':this.agent_id,
                        'lga_id':this.lga_id,

                    })
                        .then( response => {

                            this.monthName = response.data.data.monthName;
                            this.lastSixMonthRev = response.data.data.lastSixMonthRev;

                            var config = {
                                type: 'line',
                                data: {
                                    labels: this.monthName,
                                    datasets: [ {
                                        label: 'Revenue',
                                        type: "line",
                                        borderline: "#32a7f5",
                                        backgroundColor: "#32a7f5",
                                        data: this.lastSixMonthRev,
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

        },
        mounted() {

               this.getLgas();
              this.getMetrics();
              this.getSummary();
              this.getBulkSinglePayment();
              this.getCollection();
              this.getAllAgentRemittance();
            this.getLastSixMonthRev();
             //   this.hidePreLoader();

        }
    }
</script>
