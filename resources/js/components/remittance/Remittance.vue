<template>
    <!--<offline @detected-condition="handleConnectivityChange">-->
    <!--<div slot="online" >-->
    <div>
        <div class="page-heading">
            <h1> REMITTANCES </h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
                        <i class="fa fa-dashboard"> </i>
                        <span class="nav-label"> Home </span>
                    </router-link>
                </li>
                <li class="active"> Remittance </li>
            </ol>
        </div>

        <div class="page-body">

            <div class="panel panel-default">
                <div class="panel-heading">Filter Result </div>
                <div class="panel-body">
                    <form   v-on:submit.prevent="searchResult">
                    <div class="row clearfix">

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
                                <select  v-model="type" class="form-control">
                                    <option value=""  >Select Payment Method</option>
                                    <option v-for="type in types" v-bind:key="type"  v-bind:value="type">
                                        {{type}}
                                    </option>
                                </select>
                                <label class="error" v-if="errors['type']">{{errors['type'][0]}}</label>

                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <select   v-model="status" class="form-control">
                                    <option value=""  >Select Status</option>
                                    <option v-for="status in statuses" v-bind:key="status"  v-bind:value="status">
                                        {{ status }}
                                    </option>
                                </select>
                                <label class="error" v-if="errors['status']">{{errors['status'][0]}}</label>

                            </div>
                    </div>

                            <div class="row clearfix">

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <select    v-model="lg_id" class="form-control"  >
                                        <option value=""  >Select LGA</option>
                                        <option v-for="lg in  lgs" v-bind:key="lg.id" v-bind:value="lg.id">
                                            {{ lg.name }}
                                        </option>
                                    </select>
                                    <label class="error" v-if="errors['lga_id']">{{errors['lga_id'][0]}}</label>

                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <select    v-model="bank" class="form-control"  >
                                        <option value=""  >Select Branch</option>
                                        <option v-for="bank in  banks" v-bind:key="bank" v-bind:value="bank">
                                            {{ bank }}
                                        </option>
                                    </select>


                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <button  @click="initPreLoader"  class="btn btn-primary btn-md" type="submit">
                                        Search
                                        <i class="fa fa-search"> </i>
                                    </button>

                                </div>
                            </div>
                           </div>

                        </form>


                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading d-flex">
                    <span> Cash Remittance </span>
                </div>

                <div class="panel-body">

                    <!--<v-spacer>-->
                        <!--<div><h5>{{this.totalLabel}} </h5> <span><h4><b>{{  new Intl.NumberFormat('en-NG', {-->
                            <!--style: 'currency',-->
                            <!--currency: 'NGN'-->
                        <!--}).format(this.grand_total) }} </b></h4></span></div>-->

                    <!--</v-spacer>-->

                    <v-card-title>
                        <v-spacer  >
                            &nbsp;&nbsp;&nbsp;
                            <vue-excel-xlsx
                                    class = ""
                                    :data="this.remits"
                                    :columns="columns"
                                    :filename="'remittances'"
                                    :sheetname="'remittances'"
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
                            :items="this.remits"
                            :search="search"
                            class="elevation-1"
                            :page.sync="page"
                            :items-per-page="itemsPerPage"
                            hide-default-footer
                            @page-count="pageCount = $event"
                    >

                        <template v-slot:top>
                            <v-toolbar flat color="white">

                                <!--</v-spacer>-->
                                <v-dialog v-model="dialog" max-width="600px">
                                    <template  v-slot:activator="{ on }">

                                        <v-btn  v-if="$roles.user_role == $roles.super_admin" style="background-color: #3c8dbc" color="info" class=" mb-2" v-on="on">New Remittance</v-btn>

                                    </template>

                                    <form method="GET" action="remittance/initialize" >
                                    <v-card>
                                        <v-card-title>
                                            <span class="headline"> New Remittance</span>
                                        </v-card-title>

                                        <v-card-text>
                                            <v-container>
                                                <v-row>
                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-select :rules="[v => !!v || 'LGA is required']"
                                                                  v-model="remit.lga_id"
                                                                  :items="lgas"
                                                                  :menu-props="{ maxHeight: '400' }"
                                                                  item-text='name'
                                                                  item-value='id'
                                                                  label="Select LGA "
                                                                  hint="Select LGA"
                                                                  persistent-hint
                                                                  @change="getAgents()"
                                                        ></v-select>




                                                    </v-col>

                                                    <v-col id="lga_col"  cols="12" sm="12" md="12">
                                                        <v-select   required="agent name is required" name="agent_id"  :rules="[v => !!v || 'Agent is required']"
                                                                   v-model="remit.agent_id"
                                                                   :items="agents"
                                                                   item-text='name'
                                                                   item-value='id'
                                                                   label="Select Agent"

                                                        ></v-select>
                                                        <label style="color:red" class="error" v-if="errors['agent_id']">Agent is required</label>
                                                    </v-col>

                                                        <v-col cols="12" sm="12" md="12">
                                                            <!--<v-select :rules="[v => !!v || 'Month is required']" name="month"-->
                                                                      <!--v-model="remit.month"-->
                                                                      <!--:items="months"-->
                                                                      <!--:menu-props="{ maxHeight: '400' }"-->
                                                                      <!--item-text='name'-->
                                                                      <!--item-value='id'-->
                                                                      <!--label="Select Month "-->
                                                                      <!--hint="Select Month"-->
                                                                      <!--persistent-hint-->
                                                                      <!--@change="getAmount()"-->
                                                            <!--&gt;</v-select>-->

                                                            <v-menu
                                                                    v-model="menu2"
                                                                    :close-on-content-click="false"
                                                                    :nudge-right="40"
                                                                    transition="scale-transition"
                                                                    offset-y
                                                                    min-width="290px"
                                                            >
                                                                <template v-slot:activator="{ on, attrs }">
                                                                    <v-text-field
                                                                            v-model="remit.month"
                                                                            name="month"
                                                                            label="Select Month"
                                                                            prepend-icon="mdi-calendar"
                                                                            v-bind="attrs"
                                                                            v-on="on"
                                                                    ></v-text-field>
                                                                </template>
                                                                <v-date-picker
                                                                        v-model="remit.month"
                                                                        type="month"
                                                                        @input="menu2 = false; getAmount()"
                                                                ></v-date-picker>
                                                            </v-menu>


                                                         </v-col>


                                                    <v-col id="amount" cols="12" sm="12" md="12">
                                                        <v-text-field  readonly required="Amount is required"  name="amount"   v-model="remit.amount" label="Amount" :rules="[v => !!v || 'Amount is required']"       ></v-text-field>
                                                        <!--<input id="amount" hidden name="amount" >-->
                                                    </v-col>

                                                    <v-col class="hide"  id="amountDue" cols="12" sm="12" md="12">
                                                        <v-text-field  readonly required="Amount is required"  name="amountCard"   v-model="amountCard" label="Amount Due "        ></v-text-field>
                                                        <!--<input id="amount" hidden name="amount" >-->
                                                    </v-col>

                                                        <v-col id="lga_col"  cols="12" sm="12" md="12">
                                                            <v-select name="payment_type"  required="Select Payment Channel" :rules="[v => !!v || 'Payment Type is required']"
                                                                        v-model="remit.payment_type"
                                                                        :items="payment_types"
                                                                        item-text='name'
                                                                        item-value='id'
                                                                        label="Select Payment Channel"
                                                                        @change="calculateCardFee(remit.payment_type,remit.amount)"


                                                            ></v-select>

                                                    </v-col>


                                                </v-row>
                                            </v-container>
                                        </v-card-text>

                                        <v-card-actions >
                                            <v-spacer></v-spacer>
                                            <input  class="btn btn-lg"  type="submit" style="background-color: green; color: whitesmoke" color="blue darken-1"   value="Initialize">&nbsp;&nbsp;
                                            <input class="btn btn-lg"  type="button" style="background-color: red; color: whitesmoke" color="blue darken-1" @click="close"   value="Cancel">
                                            <!--<v-btn  style="background-color:red; color:whitesmoke" color="whitesmoke" text @click="close">Cancel</v-btn>-->
                                            <!--<v-btn type="submit"   text >Save</v-btn>-->
                                        </v-card-actions>
                                    </v-card>
                                    </form>
                                </v-dialog>
                            </v-toolbar>
                        </template>
                        <template v-slot:item.amount="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.amount) }}</span>
                        </template>

                        <template v-slot:item.created_date="{ item }">
                            <span>{{  item.created_date | moment("MMM Do YYYY, h:mm:ss a") }}</span>
                        </template>
                        <template v-slot:item.payment_date="{ item }">
                            <span v-if="item.payment_date != '' ">{{  item.payment_date | moment("MMM Do YYYY, h:mm:ss a") }}</span>
                        </template>
                        <template v-slot:item.status="{ item }">
                            <span> <label class="label" v-bind:class="{'label-success':item.status == 'success', 'label-warning':item.status == 'pending', 'label-info':item.status == 'uncleared'}">{{item.status}}</label></span>
                        </template>
                        <template  v-slot:item.actions="{ item }">

                           <div v-if="item.status == 'success'" style="color:blue" >
                               <v-tooltip bottom>
                                   <template v-slot:activator="{ on, attrs }">
                               <router-link :to="{path: '/remittance/cashreceipt/' + item.txn_ref}" exact  target="_blank">
                                <v-icon   class="mr-2"  v-bind="attrs" v-on="on"  >mdi-eye</v-icon>
                           </router-link>   </template>  <span>Cash receipt</span> </v-tooltip>  </div>
                            <div v-else style="color:deeppink"  @click="pendingTxn(item) "

                            >
                                <v-overlay  :value="reloader_status"
                                > <v-progress-circular indeterminate size="30"></v-progress-circular>
                                </v-overlay>
                                <v-tooltip bottom>
                                    <template v-slot:activator="{ on, attrs }">
                                    <v-icon   class="mr-2"  v-bind="attrs" v-on="on"   >mdi-refresh</v-icon>     </template>  <span>Re-verify</span> </v-tooltip>
                                </div>


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
                    <div><span><h5>{{this.totalLabel}} </h5> <h6><b>{{  new Intl.NumberFormat('en-NG', {
                        style: 'currency',
                        currency: 'NGN'
                    }).format(this.grand_total) }} </b></h6></span></div>

                </div>


                   <!--<div v-if="message">-->
                       <!--<div class="alert alert-success">-->
                           <!--{{message }}-->
                       <!--</div>-->
                   <!--</div>-->


            </div>

        </div>


    </div>
    <!--</offline>-->
</template>

<script>


    // import this component
    import flatPickr from 'vue-flatpickr-component';
    import 'flatpickr/dist/flatpickr.css';
    import 'flatpickr/dist/themes/material_blue.css';
    import offline from 'v-offline';

    export default {
        name: 'Remittance',

        created(){

        },
        components: {
            flatPickr,
            offline


        },

        data() {
            return {
                absolute: true,
                   table_1:true,
                reloader_status:false,

                loader: null,
                loading: false,

               // menu: false,
                modal: false,
                menu2: false,

                page:1,
                pageCount: 0,
                itemsPerPage: 15,

                dialog: false,

                fromDate: '', //  new Date(),
                toDate: '', //  new Date(),
                status: '',
                type:'',
                 bank:'',

                grand_total:'',
                grand_total_lga:'',
                lga_name:'',

                getFrom: '',
                getTo: '',
                getStatus: '',
                getType:'',
                getLg:'',
                getBank:'',
                totalLabel:'',


                config: {
                    wrap: true, // set wrap to true only when using 'input-group'
                    altFormat: 'M j, Y',
                    altInput: true,
                    dateFormat: 'Y-m-d',

                },




                search:'',
                headers: [
                    { text: '#', value: 'sn' },
                    { text: 'AGENT NAME', value: 'agent_name' },
                    { text: 'LGA NAME', value: 'lga_name' },
                    { text: 'AMOUNT', value: 'amount' },
                    { text: 'TXN REF', value: 'txn_ref' },
                    { text: 'PAYMENT CHANNEL', value: 'payment_type' },
                    { text: 'BANK', value: 'bank' },
                    { text: 'CREATED DATE', value: 'created_date' },
                    { text: 'PAYMENT DATE', value: 'payment_date' },
                    { text: 'PAYMENT STATUS', value: 'status' },
                    { text: 'ACTION', value:'actions' , sortable: false },
                ],

                //  summary:[],

                remitIndex: -1,
                remits: [],
                 banks:[],
                remit: {
                    'id' : '',
                    'lga_id':'',
                    'agent_id' : '',
                    'payment_type' : '',
                    'amount' : '',
                    'month' : new Date().toISOString().substr(0, 7),
                     'amt':'',
                    'bank':'',
                    'transaction_reference':'',
                    'created_at':'',
                    'status':'',
                    'amountCard':''
                },

              //   amountDue:'',
                getAgent:'',

                remitDefault: {
                    'id' : '',
                    'agent_id' : '',
                    'payment_type' : '',
                    'amount' : '',
                    'month' : '',
                    'amt':'',
                     'bank':'',
                    'transaction_reference':'',
                    'created_at':'',
                    'status':''
                },

                 ref:'',
                 index:'',

                 lg_id:'',
                errors: [],
                types: [],
                lgas: [],
                lgs: [],
                agents:[],
                payment_types:[],
               // types:[],
                statuses:[],
               months:[
                    {name:'Jan.',id:'01'},{name:'Feb.',id:'02'},{name:'March',id:'03'},{name:'April',id:'04'},{name:'May',id:'05'},{name:'June',id:'06'},
                   {name:'July',id:'07'},{name:'Aug.',id:'08'},{name:'Sept.',id:'09'},{name:'Oct.',id:'10'},{name:'Nov.',id:'11'},{name:'Dec.',id:'12'},
               ],

             // excel format
                columns : [
                    {
                        label: "#",
                        field: "sn",
                    },
                    {
                        label: "Agent Name",
                        field: "agent_name",

                    },
                    {
                        label: "Lga Name",
                        field: "lga_name",

                    },
                    { label: 'Amount',  field: 'amount', dataFormat:this.$shared.amountFormat, },
                    {
                        label: "Tnx Ref",
                        field: "txn_ref",
                    },
                    {
                        label: "Payment Type",
                        field: "payment_type",
                    },
                    {
                        label: "Bank",
                        field: "bank",
                    },
                    {
                        label: "Created Date",
                        field: "created_date",
                        dataFormat:this.$shared.createdDateFormat,
                    },
                    {
                        label: "Payment Date",
                        field: "payment_date",
                        dataFormat:this.$shared.paymentDateFormat,
                    },
                    {
                        label: "Status",
                        field: "status",
                    },



                ],




            }







        },
           watch: {
            dialog (val) {
                val || this.close()
            },

               loader () {
                   const l = this.loader
                   this[l] = !this[l]

                   setTimeout(() => (this[l] = false), 3000)

                   this.loader = null
               },

        },
        methods: {

            close () {

                this.dialog = false;
                this.$nextTick(() => {
                    this.remit = Object.assign({}, this.remitDefault)
                     //   this.revPointIndex = -1


                })
            },

                pendingTxn(item){
                    this.reloader_status = true;
                 this.ref = item.txn_ref;
                    this.index  =   this.remits.indexOf(item);
                    this.reVerify();

                },
                          initPreLoader(){
                this.table_1=  true;
            },
                     // modal
            getPaymentTypes: async function() {
                    this.payment_types = ['card','bank'];
            },
                  // search
            getTypes: async function() {
                this.types = ['bank','card'];
            },

            getStatuses: async function() {
                this.statuses = ['success','pending'];
            },

            searchResult: async function(){
                    this.getRemittances();
            },

            setTotalLabel(type, status, lga){

                let date = new Date();

                if( !type && !status  )
                    var totalLbl = 'Total';
                else if( type && !status  )
                    var totalLbl = 'Total';
                 else
                      var  totalLbl = 'Total Remitted';

                  if(lga)
                      var lgaLbl = ' for '+lga+ ' LGA';
                    else   var lgaLbl='';

                   if(type)
                       var typeLbl = ' via '+ type;
                   else   var typeLbl='';

                  if(status && (status == 'pending'))
                     var  statusLbl = ' Pending ';
                  else   var statusLbl='';


//                if(from  && to )
//                    var  rangeLbl =  ' From ' + from + ' To ' + to + ':';
//                else if( !from && to)
//                    var rangeLbl = ' From ' +  new Date(date.getFullYear(),date.getMonth(),2 ).toISOString().substr(0, 10).toString()  + ' To ' + to+':';
//                else if( from && !to)
//                    var rangeLbl =  ' From ' +  from  + '  To ' +
//                        new Date().toISOString().substr(0, 10).toString()  +':';
//                else   var rangeLbl='';


                var label = totalLbl+typeLbl+lgaLbl+statusLbl;
                return label;


            },



            getLgas: async function(){
                try{
                    await axios.get(`/state/${this.$state_id}/lgas`)
                        .then( response => {
                            this.lgas = response.data.data;
                            this.lgs = response.data.data

                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e){
                    console.log(e);
                }
            },

            getRemittances: async function(){
                try{

                    this.getFrom = this.fromDate;
                    this.getTo = this.toDate;
                    this.getStatus = this.status;
                    this.getType = this.type;
                    this.getLg = this.lg_id;
                    this.getBank = this.bank;

                    await axios.post('/remittance',{
                        'fromDate':this.fromDate,
                        'toDate':this.toDate,
                        'status':this.status,
                         'type':this.type,
                        'lga_id':this.lg_id,
                        'bank':this.bank,
                    })
                        .then( response => {
                            this.remits = response.data.data,
                                this.grand_total = response.data.total,
                                this.lga_name = response.data.lgaName,

                                this.fromDate = this.getFrom;
                            this.toDate =this.getTo;
                            this.status = this.getStatus;
                            this.type = this.getType;
                            this.lg_id = this.getLg;
                            this.bank = this.getBank;

                            this.totalLabel = 'Total:';  //this.setTotalLabel( this.getType,  this.getStatus, this.lga_name );
                                this.table_1 = false

                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e){
                    console.log(e);
                }
            },


            getAgents: async function(){
                try{
                    await axios.post('/agents/lga',{
                        'lga_id':this.remit.lga_id,
                    })
                        .then( response => {
                            //console.log(response.data.data);
                            this.agents = response.data.data;
                        })
                        .catch( (error) => { console.log(error) });
                }catch (e) {
                    console.log(e);
                }

            },

            getAmount: async function(){
                try{
                    await axios.post(`/remittance/amountDue`,{
                        'agent_id':this.remit.agent_id,
                        'month':this.remit.month
                    })
                        .then( response => {
                            this.remit.amount = response.data.data;
                           // $('#amount').val(response.data.data);   // = response.data.data;

                        })
                        .catch( (error) => {
                            console.log(error)

                        });
                }catch(e){
                    console.log(e);
                }
            },

            reVerify: async function(){
                try{
                   // alert(this.ref);
                    await axios.post(`/remittance/reVerify`,{
                        'reference':this.ref
                    })
                        .then( response => {
                          // this.remit.status = response.data.data;

                            Object.assign(this.remits[this.index], response.data.data)
                            this.reloader_status = false;

                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e){
                    console.log(e);
                }

            },
            getBanks: async function(){
                try{
                    await axios.get('/banks')
                        .then( response => {
                            //console.log(response.data.data);
                            this.banks = response.data.data;
                        })
                        .catch( (error) => { console.log(error) });
                }catch (e) {
                    console.log(e);
                }

            },
            handleConnectivityChange(status) {
                console.log(status);
                   if(status){
                       this.flashMessage.success({
                           title: '',
                           message:'Internet Connected!',
                           time: 8000
                       });
                   }
                    else{
                       this.flashMessage.error({
                           title: '',
                           message:'Internet not Connected!',
                           time: 8000
                       });
                   }

            },

            calculateCardFee(channel,realAmount)
        {
             // alert (channel);
            if (channel == 'card'){
                let fee = finalFee =  0;
                if (realAmount < 2500) {
                    //just 1.5%
                    fee = 0.015 * realAmount;
                } else {
                    //1.5% + 100
                    fee = (0.015 * realAmount ) + 100;
                }
                let finalFee =   ( fee > 2000 ) ? 2000 :  fee;
                let amount = parseInt(realAmount) + parseInt(finalFee);
                $('#amountDue').removeClass('hide');
                $('#amount').addClass('hide');
                // alert (amount );
                this.amountCard  = amount ;
            }
            else {

                $('#amountDue').addClass('hide');
                $('#amount').removeClass('hide');
            }

    }



        },
        mounted(){
//             $('#remittance-menu').onclick(function(){
//                $(this).addClass('active');
//             });
          //  $('#amountDue').addClass('hide');
            this.getTypes();
            this.getStatuses();
            this.getLgas();
            this.getBanks();
            this.getPaymentTypes();
            this.getRemittances();
        },
    }

</script>
