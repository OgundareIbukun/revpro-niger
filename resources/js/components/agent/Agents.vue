
<!--<link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">-->
<template>

    <div>
        <div class="page-heading">
            <h1>AGENTS</h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
                        <i class="fa fa-dashboard"> </i>
                        <span class="nav-label">Home</span>
                    </router-link>
                </li>
                <li class="active">Agents</li>
            </ol>
        </div>

        <div class="page-body">

            <div class="panel panel-default">
                <div class="panel-heading d-flex">
                    <span>MANAGE AGENTS </span>
                </div>
                <div class="panel-body">
                    <v-overlay
                            :absolute="absolute"
                            :value="table_1"
                    > <v-progress-circular indeterminate size="60"></v-progress-circular>
                    </v-overlay>
                    <v-card-title>

                        <v-spacer> &nbsp;&nbsp;
                            <vue-excel-xlsx
                                    class = ""
                                    :data="this.agents"
                                    :columns="columns"
                                    :filename="'agent'"
                                    :sheetname="'agent'"
                            >
                                <v-btn> Excel  </v-btn>
                            </vue-excel-xlsx>
                        </v-spacer>
                        <v-spacer>

                        </v-spacer>
                        <v-text-field
                                v-model="search"
                                append-icon="mdi-magnify"
                                label="Search"
                                single-line
                                hide-details
                                solo
                        ></v-text-field>
                    </v-card-title>

                    <v-data-table
                            :headers="this.headers"
                            :items="this.agents"
                            :search="search"
                            class="elevation-1"
                            :page.sync="page"
                            :items-per-page="itemsPerPage"
                            hide-default-footer
                            @page-count="pageCount = $event"
                    >



                        <template v-slot:top>
                            <v-toolbar flat color="white">

                                <v-dialog v-model="dialog" max-width="600px">
                                    <template v-slot:activator="{ on }" >
                                        <v-col cols="12" md="4" sm="4">  <v-btn style="background-color: #3c8dbc; float: left" color="info" class=" mb-2"  v-on="on">New Agent</v-btn> </v-col>
                                    </template>
                                    <v-card>
                                        <v-card-title>
                                            <span class="headline">{{ formTitle }}</span>
                                        </v-card-title>

                                        <v-card-text>
                                            <v-container>
                                                <v-row>
                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field v-model="agent.name" label="Agent`s Name" :rules="[v => !!v || 'Name is required']"     :error-messages="errors['users.name']"    ></v-text-field>
                                                        <label  style="color:red" class="error" v-if="errors['users.name']">agent`s name is required</label>
                                                    </v-col>
                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field v-model="agent.phone" label="Phone number"   :rules="[v => !!v || 'Phone number is required']" ></v-text-field>
                                                        <label  style="color:red" class="error" v-if="errors['users.phone']">phone number is required</label>
                                                    </v-col>
                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field v-model="agent.email" label="Email Address"   :rules="[v => !!v || 'Email is required']" ></v-text-field>
                                                        <label style="color:red" class="error" v-if="errors['users.email']">Email is required</label>
                                                    </v-col>
                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-select :rules="[v => !!v || 'Departement is required']"
                                                                v-model="agent.dept"
                                                                :items="dpts"
                                                                :menu-props="{ maxHeight: '400' }"
                                                                label="Select department"
                                                                multiple
                                                                hint="Select department"
                                                                persistent-hint
                                                        ></v-select>
                                                        <label style="color:red"  class=" error" v-if="errors['agent.dept']">dept is required</label>
                                                    </v-col>

                                                    <v-col   v-if="lgaComp" cols="12" sm="12" md="12">
                                                        <v-select  id="algvt" ref="algvt"  :rules="[v => !!v || 'LGA is required']"
                                                                  v-model="agent.lga_id"
                                                                  :items="lgas"
                                                                  item-text='name'
                                                                  item-value='id'
                                                                  label="Select LGA"
                                                                  @change="getRevPoints()"
                                                        ></v-select>
                                                        <label style="color:red" class="error" v-if="errors['users.lga_id']">LGA is required</label>

                                                    </v-col>
                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-select  :rules="[v => !!v || 'Revenue point is required']"
                                                                   v-model="agent.revPoint_id"
                                                                   :items="revenuepoints"
                                                                   :menu-props="{ maxHeight: '400' }"
                                                                   label="Select Revenue point"
                                                                   multiple
                                                                   hint="Select Revenue point"
                                                                   persistent-hint



                                                        >  </v-select>
                                                        <label style="color:red" class="error" v-if="errors['agents.revenue_point_id']">revenue point is required</label>
                                                    </v-col>



                                                    <v-col   v-if="passwordComp" cols="12" sm="12" md="12">
                                                        <v-text-field   v-model="agent.password" :rules="[v => !!v || 'Password is required']"  label="Password" ></v-text-field>
                                                        <label style="color:red"  class="error" v-if="errors['users.password']">Password required</label>
                                                    </v-col>

                                                    <v-col   v-if="cpasswordComp" cols="12" sm="12" md="12">
                                                        <v-text-field  v-model="agent.password_confirmation" :rules="[v => !!v || 'Confirm password is required'] " label="Confirm Password"  ></v-text-field>
                                                        <label  style="color:red" class="error" v-if="errors['cpassword']">confirmed password must match password.</label>
                                                    </v-col>



                                                </v-row>
                                            </v-container>
                                        </v-card-text>

                                        <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-btn style="color: orangered" olor="blue darken-1" text @click="close">Cancel</v-btn>
                                            <v-btn  style="color: #3c8dbc" color="blue darken-1" text @click="save">Save</v-btn>
                                        </v-card-actions>
                                    </v-card>
                                </v-dialog>
                            </v-toolbar>
                        </template>

                        <template v-slot:item.unremitted_cash="{ item }">
                                          <span>{{  (new Intl.NumberFormat('en-NG', {
                                              style: 'currency',
                                              currency: 'NGN'
                                          })).format(item.unremitted_cash) }}</span>
                        </template>

                        <template v-slot:item.actions="{ item }">
                            <v-tooltip bottom>
                                <template v-slot:activator="{ on, attrs }">
                            <v-icon style="color: #3c8dbc" small class="mr-2" @click="editAgent(item)"  v-bind="attrs" v-on="on"
                               >edit</v-icon>
                        </template>  <span>Edit Action</span> </v-tooltip>

                            <v-tooltip bottom>
                                <template v-slot:activator="{ on, attrs }">
                            <v-icon style="color: red;" small @click="deleteAgent(item)" v-bind="attrs" v-on="on"  > delete  </v-icon>
                                </template>  <span>Delete Action</span> </v-tooltip>

                            <div v-if="item.device == 'locked'"  >
                                 <v-overlay  :value="reloader_status"
                             > <v-progress-circular indeterminate size="30"></v-progress-circular>
                             </v-overlay>
                                <v-tooltip bottom>
                                    <template v-slot:activator="{ on, attrs }">
                                    <v-icon  class="mr-2 "  small   v-bind="attrs" v-on="on"  style="color:deeppink"  @click="deviceStatus(item)"  >
                                    mdi-lock
                                    </v-icon> </template>  <span>Locked device mode</span> </v-tooltip>
                            </div>
                            <div v-else   style="color:green;" >
                                <v-tooltip bottom>
                                    <template v-slot:activator="{ on, attrs }">
                                <v-icon   class="mr-2"  small v-bind="attrs" v-on="on"  >mdi-lock-open</v-icon>   </template>  <span>Unlock device mode</span> </v-tooltip>
                            </div>


                            <v-tooltip  v-if="$roles.user_role == $roles.super_admin"  bottom>
                                <template v-slot:activator="{ on, attrs }">
                                    <v-icon style="color: #3c8dbc" small class="mr-2" @click="addNewTxn(item)"  v-bind="attrs" v-on="on"
                                    >addchart</v-icon>
                                </template>  <span>Transaction Supplementary</span> </v-tooltip>

                        </template>
                        <!--<template v-slot:no-data>-->
                            <!--<v-btn color="primary" @click="initialize">Reset</v-btn>-->
                        <!--</template>-->
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



            <v-dialog
                    v-model="dialog2"
                    max-width="500px"
            >
                <v-card>
                    <v-card-title>
                        Supplementary Transaction
                    </v-card-title>
                    <v-card-text>

                        <v-select  v-model="txn.revpoint"
                                :items="revpts_agent"
                                label="Select RevenuePoint"
                                item-value="id"
                                   item-text="name"
                        ></v-select>
                        <label style="color:red"  class=" error" v-if="errors2['revenue_point_id']">{{errors2['revenue_point_id'][0]}}</label>

                        <v-select  v-model="txn.service"
                                   :items="services"
                                   label="Select Service"
                                   item-value="id"
                                   item-text="name"
                        ></v-select>
                        <label style="color:red"  class=" error" v-if="errors2['service_id']">{{errors2['service_id'][0]}}</label>


                        <v-col cols="12" sm="12" md="12">
                            <v-text-field v-model="txn.amount" label="Amount" placeholder="3000"     ></v-text-field>
                            <label style="color:red"  class=" error" v-if="errors2['amount']">{{errors2['amount'][0]}}</label>

                        </v-col>

                    </v-card-text>
                    <v-card-actions>

                        <v-btn
                                style="background-color: steelblue; color: white "
                                color="primary"
                                text
                                @click="addSupplementaryTxn()"
                        >
                            Add
                        </v-btn>&nbsp;&nbsp;
                        <v-btn
                                style="background: orangered ; color: white; float: right"
                                color="red"
                                text
                                @click="dialog2 = false"
                        >
                            Close
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>





        </div>

    </div>

</template>


<script>

   export default {
      name: "Agents",
//        components: {
//        },
   data() {

       //() =>({

       return {
           lgaComp:true,
           passwordComp:true,
           cpasswordComp:true,
           table_1: true,
            absolute: true,
           dialog2 : false,
           page: 1,
           pageCount: 0,
           itemsPerPage: 10,

           reloader_status:false,
           index:'',
           device:'',

           dialog: false,
           search: '',
           headers: [
               {text: '#', value: 'sn'},
               {text: 'Name', value: 'name'},
               {text: 'Email', value: 'email'},
               {text: 'Phone Number', value: 'phone'},
               {text: 'Dept', value: 'dept'},
               {text: 'LGA', value: 'lga_name'},
               {text: 'Revenue Point', value: 'revenue_point'},
               {text: 'Unremitted Cash', value: 'unremitted_cash'},
               {text: 'Action', value: 'actions', sortable: false},
           ],

           columns: [
               {label: '#', field: 'sn'},
               {label: 'Name', field: 'name'},
               {label: 'Email', field: 'email'},
               {label: 'Phone Number', field: 'phone'},
               {label: 'Dept', field: 'dept'},
               {label: 'LGA', field: 'lga_name'},
               {label: 'Revenue Point', field: 'revenue_point'},
               {label: 'Unremitted Cash', field: 'unremitted_cash', dataFormat: this.$shared.amountFormat}
           ],

           //  summary:[],
           agents: [],
           agentIndex: -1,
           agent: {
               'sn': '',
               'id': '',
               'name': '',
               'email': '',
               'phone': '',
               'password': '',
               'password_confirmation': '',
               'revenue_point': '',
               'revPoint_id': '',
               'lga_id': '',
               'dept': '',
               'cash_remittance': '',

           },

           agentDefault: {
               'sn': '',
               'id': '',
               'name': '',
               'email': '',
               'phone': '',
               'password': '',
               'password_confirmation': '',
               'revenue_point': '',
               'lga_id': '',
               'dept': '',
               'cash_remittance': '',

           },
           errors: [],
           errors2: [],
           lgas: {
               name: '',
               id: ''
           },
           revenuepoints: [],
           dpts: [],
           lga_disabled: false,
           dpt: [],
           category: {
               value: [],
               options: []
           },

           revpts_agent:[],
           services:[],
           txn: {
               agent:'',
               revpoint:'',
               amount:'',
               service:''
           }
       }

   },


      //  }),


       computed: {
           formTitle () {

                if( this.agentIndex === -1 )
                {
                    this.passwordComp=true;
                    this.cpasswordComp=true;
                }
                  else {
                    this.passwordComp=false;
                    this.cpasswordComp=false;
                }
               return this.agentIndex === -1 ? 'New Agent' : 'Edit Agent';
           },

             hide_it(){

                 return this.agentIndex === -1 ? false : true;
             }
       },

       watch: {
           dialog (val) {
               val || this.close();


           },

       },

       methods:{


           addNewTxn(item){
               this.txn.agent = item.id;
               this.getAgentRevpt();
               this.getServices();
              this.dialog2 = true;

           },






           editAgent (item) {
               this.agentIndex = this.agents.indexOf(item)
               // this.agent = Object.assign({   }, item),
               this.agent.name = item.name;
               this.agent.email = item.email;
               this.agent.phone = item.phone;
               this.agent.lga_id = item.lga_id;
               this.agent.revPoint_id = item.revenue_point.split(',');
              // this.agent.revPoint_id = item.revenue_point_id.split(',');
               this.agent.dept =  item.dept.split(',');
               this.agent.id = item.id;
               this.lgaComp=true;
               this.getRevPoints();
                if(item.unremitted_cash > 0){
                    this.lgaComp=false ;
                }

                //  this.passwordComp=false;
                 //  this.cpasswordComp=false;
                 this.dialog = true
           },
           deleteItem (item) {
               const index = this.agents.indexOf(item)
              // confirm('Are you sure you want to delete ?'+item.name ) && this.agents.splice(index, 1)
               this.deleteAgent(item);



           },
           close () {
               this.dialog = false
             //  this.passwordComp=false;
              // this.cpasswordComp=false;
                this.$nextTick(() => {
                   this.agent = Object.assign({}, this.agentDefault),
                   //    $('#select_col').removeClass('hide');
                   this.agentIndex = -1

               })
           },

           save () {
               if (this.agentIndex > -1) {   // edit
                  Object.assign(this.agents[this.agentIndex], this.agent);
                   this.updateAgent();
                   // this.passwordComp=true;
                   // this.cpasswordComp=true;

                   // console.log(this.agent.dept);
                   // console.log(this.agent.revPoint_id);

               } else {  // new
                 //  this.agents.push(this.agent)
                  //  console.log(this.agent.dept);
                   // console.log(this.agent.revPoint_id);

                   this.addNewAgent()
               }
               this.close()
           },

           addNewAgent: async function(){
               // let formData = new FormData();
               // formData.append('name', this.agent.name);

               let userdata = {
                   'name': this.agent.name,
                   'email': this.agent.email,
                   'phone': this.agent.phone,
                   'lga_id': this.agent.lga_id,
                   'password': this.agent.password,
               } ;

               let agentdata = {
                   'dept':this.agent.dept,  //this.category.value,
               } ;

               //   alert(this.agent.dept);
               try {
                   await axios.post('/agent', {
                       users: userdata,
                       agents: agentdata,
                       cpassword: this.agent.password_confirmation,
                       revenue_point_id: this.agent.revPoint_id,
                   })
                       .then( response => {
                           this.dialog = false
                           //console.log(response.data);
                           if(response.data.status == 'success'){
                               //hide modal
                               // $('#agentsModal').modal('hide');

                               //display notification
                               this.flashMessage.success({
                                   title: '',
                                   message: 'Agent added successfully!',
                                   time: 5000
                               });
                               //  this.agents.unshift(response.data.data);
                           }
                       })
                       .catch( (error) => {
                           console.log(error.response.data.errors);

                           if(error.response.status == 422){
                               this.errors = error.response.data.errors;
                               this.dialog = true;
                               this.flashMessage.error({
                                   title: '',
                                   message: 'Unprocessable entity!',
                                   time: 5000
                               });
                           }else{
                               console.log('else1');
                           }
                       } );
               }catch (e) {
                   //console.log('df '+e);
                   this.flashMessage.error({
                       title: '',
                       message: 'Error in adding Agent!',
                       time: 5000
                   });
               }

           },

            // TODO: TEMPORARY USED FOR PARTIAL UPLOADING OF QP FROM MOBILE APP
            addSupplementaryTxn: async function(){
                try {
                    await axios.post('/revenue/quickprint', {
                          'agent_id': this.txn.agent,
                           'revenue_point_id': this.txn.revpoint,
                        'service_id': this.txn.service,
                           'amount': this.txn.amount
                    })
                        .then( response => {
                            this.dialog2 = false;
                            //console.log(response.data);
                            if(response.data.status == 'success'){

                                //display notification
                                this.flashMessage.success({
                                    title: '',
                                    message: 'Transaction has added successfully!',
                                    time: 5000
                                });
                              //  this.agents.unshift(response.data.data);
                            }
                        })
                        .catch( (error) => {
                            console.log(error.response.data.errors);

                            if(error.response.status == 422){
                                this.errors2 = error.response.data.errors;
                                this.dialog2 = true;
                                this.flashMessage.error({
                                    title: '',
                                    message: 'Unprocessable entity!',
                                    time: 5000
                                });
                            }else{
                                console.log('else1');
                            }
                        } );
                }catch (e) {
                    //console.log('df '+e);
                    this.flashMessage.error({
                        title: '',
                        message: 'Error in adding Agent!',
                        time: 5000
                    });
                }

            },
            updateAgent: async function(){
                let userdata = {
                    'name': this.agent.name,
                    'email': this.agent.email,
                    'phone': this.agent.phone,
                    'lga_id': this.agent.lga_id,

                };

                let agentdata2 = {
                    'dept': this.agent.dept,
                }

                try{
                    await axios.put('/agent/'+this.agent.id, {
                        user: userdata,
                        agent: agentdata2,

                        revenue_point_id: this.agent.revPoint_id,
                    })
                        .then( response => {
                            if(response.data.status == 'success'){

                                this.dialog = false
                                //update table
//                                this.agents.map(agent =>{
//                                    if(agent.id == response.data.data.id) {
//                                        //agent = response.data.data;
//                                        for(let key in response.data.data){
//                                            agent[key] = response.data.data[key];
//                                        }
//                                    }
//                                });
                                //show notification
                                this.flashMessage.success({
                                    title: '',
                                    message: 'Agent updated successfully!',
                                    time: 5000
                                });
                            }
                        })
                        .catch( (error) => {
                           // console.log(error.response.data.errors);

                            if(error.response.status == 422){
                                //console.log(error.response.data.errors['users.name'][0]);
                                this.errors = error.response.data.errors;
                                this.flashMessage.error({
                                    title: '',
                                    message: 'Unprocessable entity!',
                                    time: 5000
                                });
                            }else{
                                console.log('else2');
                            }
                        });
                }catch (e) {

                }


            },
            deleteAgent: async function(agent){
                if(!window.confirm(`Are you sure you want to delete ${agent.name}`)){
                    return;
                }

                try{
                    await axios.delete('/agent/'+agent.id )
                        .then( response => {
                           // console.log(response);
                            if(response.status == 204){
                                //remove from table
                                this.agents = this.agents.filter(obj => {
                                    return obj.id != agent.id;
                                });
                                //show notification
                                this.flashMessage.success({
                                    title: '',
                                    message: 'Agent deleted successfully!',
                                    time: 5000
                                });
                            }
                        })
                        .catch( (error) => {
                            console.log(error.response.data.errors);
                            if(error.response.status == 404){
                                //console.log(error.response.data.errors['users.name'][0]);
                                this.errors = error.response.data.errors;
                                this.flashMessage.error({
                                    title: '',
                                    message: 'Agent not found!',
                                    time: 5000
                                });
                            }else{
                                console.log('else');
                            }
                        });
                }catch (e) {
                    this.flashMessage.error({
                        title: '',
                        message: 'Error in deleting Agent!',
                        time: 5000
                    });
                }
            },
            getRevPoints: async function(){
                try {
                    await axios.post('/revenuepoints/lga',{
                         'lga_id': this.agent.lga_id,
                    })
                        .then( response => {
                            this.revenuepoints = response.data.data;
                        })
                        .catch( error => {
                            console.log(error)
                        });
                }catch (e) {
                    console.log(e);
                }
            },
            getAgents: async function(){
                try{
                    await axios.get('/agent')
                        .then( response => {
                            //console.log(response.data.data);
                            this.agents = response.data.data;
                             this.table_1 = false;
                        })
                        .catch( (error) => { console.log(error) });
                }catch (e) {
                    console.log(e);
                }
            },
            getCategories: async function(){
                try{
                    await axios.get('/getcategory')
                        .then( response => {
                            //console.log(response.data.data);
                            this.dpts = response.data.data;
                            //this.dpts = ['kolade','tunde'];
                        })
                        .catch( (error) => { console.log(error) });
                }catch (e) {
                    console.log(e);
                }
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
            deviceStatus(item){

               this.device = item.device;
                this.agent.id = item.id;
                this.agent.name = item.name;
               this.index  =   this.agents.indexOf(item);
               this.changeDevice();

           },
           changeDevice: async function(){
               if(!window.confirm(`Are you sure you want to unlock  device for ${this.agent.name}. NOTE: This action will allow agent to access his account via another device.`, )){
                   return;
               }

                try{
                   // alert(this.ref);
                    this.reloader_status = true;
                   await axios.post(`/agent/device`,{
                       'agent_id':this.agent.id
                   })
                       .then( response => {
                           // this.remit.status = response.data.data;

                           Object.assign(this.agents[this.index], response.data.data)
                           this.reloader_status = false;

                       })
                       .catch( (error) => {
                           console.log(error)
                       });
               }catch(e){
                   console.log(e);
               }

           },
           getAgentRevpt: async function(){
               try{
                   await axios.get('/agent_revpoints/'+this.txn.agent )
                       .then( response => {
                           //console.log(response.data.data);
                           this.revpts_agent = response.data.data;
                           //this.table_1 = false;
                       })
                       .catch( (error) => { console.log(error) });
               }catch (e) {
                   console.log(e);
               }
           },

           getServices: async function(){
               try{
                    await axios.get('/service' )
                       .then( response => {
                           //console.log(response.data.data);
                           this.services = response.data.data;
                           //this.table_1 = false;
                       })
                       .catch( (error) => { console.log(error) });
               }catch (e) {
                   console.log(e);
               }
           },
        },
        mounted() {

         //   document.body.setAttribute('data-app', true)

            $('#agt-manage-submenu').addClass('active');
            $('#agt-manage-submenu').parent().parent().find('#agent-menu').addClass('active');

            this.getCategories();
            this.getRevPoints();
            this.getAgents();
            this.getLgas();



        },

    }
</script>


