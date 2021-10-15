<template>
    <div>
        <div class="page-heading">
            <h1> REVENUE POINTS </h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
                        <i class="fa fa-dashboard"> </i>
                        <span class="nav-label"> Home </span>
                    </router-link>
                </li>
                <li class="active"> Revenue Point </li>
            </ol>
        </div>

        <div class="page-body">
            <div class="panel panel-default">
                <div class="panel-heading d-flex">
                    <span> Revenue Point Table </span>
                  </div>

                <div class="panel-body">

                    <v-card-title> Revenue Point
                        <v-spacer>
                            &nbsp;&nbsp;
                            <vue-excel-xlsx
                                    class = ""
                                    :data="this.revenuepoints"
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
                            :headers="this.headers"
                            :items="this.revenuepoints"
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
                                    <template v-slot:activator="{ on }">
                                        <v-btn style="background-color: #3c8dbc" color="info" class=" mb-2" v-on="on">New Revenue Point</v-btn>

                                    </template>
                                    <v-card>
                                        <v-card-title>
                                            <span class="headline">{{ formTitle }}</span>
                                        </v-card-title>

                                        <v-card-text>
                                            <v-container>
                                                <v-row>
                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field v-model="revenuepoint.name" label="Revenue Point`s Name" :rules="[v => !!v || 'Name is required']"     :error-messages="errors['users.name']"    ></v-text-field>
                                                        <label  style="color:red" class="error" v-if="errors['name']">Revenue point`s name is required</label>
                                                    </v-col>
                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-select :rules="[v => !!v || 'Rebvenue type is required']"
                                                                  v-model="revenuepoint.type"
                                                                  :items="revPoint_types"
                                                                  :menu-props="{ maxHeight: '400' }"
                                                                  label="Select Revenue type"
                                                                  multiple
                                                                  hint="Multiple selection allowed"
                                                                  persistent-hint
                                                        ></v-select>
                                                        <label style="color:red"  class=" error" v-if="errors['type']">Revenue type is required</label>
                                                    </v-col>


                                                    <v-col id="lga_col"  cols="12" sm="12" md="12">
                                                        <v-select  id="lga"  :rules="[v => !!v || 'LGA is required']"
                                                                   v-model="revenuepoint.lga_id"
                                                                   :items="lgas"
                                                                   item-text='name'
                                                                   item-value='id'
                                                                   label="Select LGA"

                                                        ></v-select>
                                                        <label style="color:red" class="error" v-if="errors['lga_id']">LGA is required</label>
                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-select :rules="[v => !!v || 'Rebvenue type is required']"
                                                                  v-model="revenuepoint.service_types"
                                                                  :items="qprint_services"

                                                                  :menu-props="{ maxHeight: '400' }"
                                                                  label="Select quick print services"
                                                                  multiple
                                                                  hint="Multiple selection allowed"
                                                                  persistent-hint
                                                        ></v-select>
                                                        <label style="color:red"  class=" error" v-if="errors['type']">Revenue type is required</label>
                                                    </v-col>

                                                </v-row>
                                            </v-container>
                                        </v-card-text>

                                        <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-btn  style="color: orangered" color="blue darken-1" text @click="close">Cancel</v-btn>
                                            <v-btn  style="color: #3c8dbc" color="blue darken-1" text @click="save">Save</v-btn>
                                        </v-card-actions>
                                    </v-card>
                                </v-dialog>
                            </v-toolbar>
                        </template>

                        <template v-slot:item.actions="{ item }">
                            <v-icon style="color: #3c8dbc" small class="mr-2" @click="editRevPoint(item)"  >edit</v-icon>
                            <v-icon style="color: red;" small @click="deleteRevPoint(item)" > delete  </v-icon>
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

    export default {
        name: 'RevenuePoints',

        data() {
            return {

                table_1:true,
                absolute: true,
                page: 1,
                pageCount: 0,
                itemsPerPage: 10,

                dialog: false,
                search:'',
                headers: [
                    { text: '#', value: 'sn' },
                    { text: 'Name', value: 'name' },
                    { text: 'Type', value: 'type' },
                    { text: 'LGA', value: 'lga_name' },
                    { text: 'Action', value:'actions' , sortable: false },
                ],

                columns: [
                    { label: '#', field: 'sn' },
                    { label: 'Name', field: 'name' },
                    { label: 'Type', field: 'type' },
                    { label: 'LGA', field: 'lga_name' }
                ],

                //  summary:[],
                agents:[],
                revPointIndex: -1,
                revenuepoints: [],
                qprint_services:[],
                service_types:[],
                revenuepoint: {
                    'id' : '',
                    'name' : '',
                    'type' : '',
                    'state_id' : '',
                    'lga_id' : '',
                    'lga_name' : '',
                    'service_types':[]
                },

                revenuepointDefault: {
                    'id' : '',
                    'name' : '',
                    'type' : '',
                    'state_id' : '',
                    'lga_id' : '',
                    'lga_name' : ''
                },
                errors: [],
                types: [],
                states: [],
                lgas: [],
                lga:{
                    'id':''
                },

                revPoint_types:[],
              //  revpt:[],


            }
        },
        computed: {
            formTitle () {
                return this.revPointIndex === -1 ? 'New Revenue Point' : 'Edit Revenue Point'
            },
        },

        watch: {
            dialog (val) {
                val || this.close()
            },
        },
        methods: {

            editRevPoint (item) {
                this.revPointIndex = this.revenuepoints.indexOf(item)
                // this.agent = Object.assign({   }, item),
                this.revenuepoint.name = item.name;
                this.revenuepoint.lga_id = item.lga_id;
             //   this.revenuepoint.state_id = item.state_id;
                this.revenuepoint.type =  item.type.split(',');
                this.revenuepoint.id = item.id;
                this.revenuepoint.service_types = item.services;
                this.dialog = true;

                   this.getRevenuePoints();
                    this.getLgas();
                    this.getServices();
                    $('#lga_col').addClass('hide');
            },
            deleteRevPoint (item) {
                const index = this.agents.indexOf(item)
                // confirm('Are you sure you want to delete ?'+item.name ) && this.agents.splice(index, 1)
                this.deleteRevenuePoint(item);



            },
            close () {

                   this.dialog = false;
                this.$nextTick(() => {
                    $('#lga_col').removeClass('hide');
                    this.revenuepoint = Object.assign({}, this.revenuepointDefault),
                    this.service_types = [],
                        this.revPointIndex = -1


                })
            },

            save () {
                if (this.revPointIndex > -1) {   // edit
                    Object.assign(this.revenuepoints[this.revPointIndex], this.revenuepoint)
                    this.updateRevenuePoints();

                } else {  // new
                    //  this.agents.push(this.agent)
                    this.addNewRevenuePoint()
                }
                this.close()
            },


            addNewRevenuePoint: async function(){
                try {
                     // alert(this.multi.value);

                    await axios.post('/revenuepoint', {
                        'name' :  this.revenuepoint.name,
                        'type' :  this.revenuepoint.type,
                        state_id :  5,            // this.revenuepoint.state_id,
                        lga_id :  this.revenuepoint.lga_id,
                        services: this.revenuepoint.service_types
                    })
                        .then(response => {
                            if(response.data.status == 'success'){
                                  this.dialog = false;

                                this.flashMessage.success({
                                    title: '',
                                    message: 'Revenue Point added succesfully!',
                                    time: 5000
                                });
                               this.revenuepoints.unshift(response.data.data);
                            }
                        })
                        .catch( (error) => {
                            console.log(error.response.data.errors);

                            if(error.response.status == 422) {
                                this.errros = error.response.data.errors;
                                this.dialog = true;
                                this.flashMessage.error({
                                    title: '',
                                    message: 'Unprocessable entity',
                                    time: 5000
                                });
                            }else{
                                console.log('else1')
                            }
                        });
                }catch(e) {
                    this.flashMessage.error({
                        title: '',
                        message: 'Error in adding Revenue Point',
                        time: 5000
                    });
                }
            },
            editRevenuePoint(revenuepoint){
                jQuery.noConflict();

                this.revenuepoint.id = revenuepoint.id;
                this.revenuepoint.name = revenuepoint.name;
                this.revenuepoint.type = revenuepoint.type.split(',');
                this.revenuepoint.state_id = this.$state_id,    //revenuepoint.state_id;
                this.revenuepoint.lga_id = revenuepoint.lga_id;
                this.revenuepoint.service_types = revenuepoint.services;


              //  $('#editRevenuePointsModal').modal('show');
            },
            updateRevenuePoints : async function(){
                try {
                    await axios.put(`/revenuepoint/${this.revenuepoint.id}`, {
                        'name': this.revenuepoint.name,
                        'type': this.revenuepoint.type,
                        state_id :  this.$state_id,    // this.revenuepoint.state_id,
                        lga_id: this.revenuepoint.lga_id,
                        services: this.revenuepoint.service_types
                    })
                        .then(response => {
                            if(response.data.status == 'success'){
                          //      $('#editRevenuePointsModal').modal('hide');
                                   // this.modal = false;
                                this.dialog = false;
                                this.revenuepoints.map(revenuepoint => {
                                    if(revenuepoint.id == response.data.data.id){
                                        for(let key in response.data.data){
                                            revenuepoint[key] = response.data.data[key];
                                        }
                                    }
                                });
                                this.flashMessage.success({
                                    title: '',
                                    message: 'Revenue Point Updated Successfully',
                                    time: 5000
                                })
                            }
                        })
                        .catch( (error) => {
                            console.log(error.response.data.errors);
                            this.dialog = true;
                            if(errors.response.status == 422) {
                                this.errors = error.response.data.errors;
                                this.flashMessage.error({
                                    title: '',
                                    message: 'unprocessable entity',
                                    time: 5000
                                });
                            }else {
                                console.log('else2');
                            }
                        });
                }catch (e) {

                }
            },
            deleteRevenuePoint: async function(revenuepoint){
                if(!window.confirm(`Are you sure you want to delete ${revenuepoint.name}`)){
                    return;
                }
                try{
                    await axios.delete(`/revenuepoint/${revenuepoint.id}`)
                        .then(response=> {
                            console.log(response);
                            if(response.status == 204){
                                //remove from table
                                this.revenuepoints = this.revenuepoints.filter(obj => {
                                    return obj.id != revenuepoint.id;
                                });
                                //show notification
                                this.flashMessage.success({
                                    title: '',
                                    message: 'Revenue Point deleted successfully!',
                                    time: 5000
                                });
                            }
                        })
                        .catch( (error) => {
                            console.log(error.response.data.errors);
                            if(error.response.status == 404){
                                this.errors = error.response.data.errors;
                                this.flashMessage.error({
                                    title: '',
                                    message: 'Revenue Point not found!',
                                    time: 5000
                                });
                            }else{
                                console.log('else');
                            }
                        });
                }catch (e) {
                    this.flashMessage.error({
                        title: '',
                        message: 'Error in deleting Revenue point!',
                        time: 5000
                    });
                }
            },
            getRevenuePoints: async function(){
                try{
                    await axios.get('/revenuepoint')
                        .then( response => {
                            this.revenuepoints = response.data.data;
                             this.table_1 = false;
                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e) {
                    console.log(e);
                }
            },
           /* getStates: async function(){
                try{
                    await axios.get('/state')
                        .then(response => {
                            this.states = response.data.data;
                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e){
                    console.log(e);
                }
            },  */

            getRevPointTypes: async function(){
                try{
                    await axios.get('/revenuepoint_type')
                        .then(response => {
                            this.revPoint_types = response.data.data;

                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e){
                    console.log(e);
                }
            },
            getServices: async function(){
                try{
                    await axios.get('/services/all')
                        .then(response => {
                             const data = response.data.data;
                             //const service_types = [];

                            //  data.forEach(({name}) => {
                            //      service_types.push(name);
                            //  });
                             this.qprint_services = data;
                            //  this.service_types = service_types;
                            //console.log(this.service_types);


                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e){
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
            /*SelectState(state){
             this.state_id = 'App\\State';
             },
             SelectLgas(lga){
             this.lga.id = getLgas(this.state_id);
             },*/
        },
        mounted(){
            this.getLgas();
            this.getRevenuePoints();
          //  this.getStates();
            this.getRevPointTypes();
            this.getServices();
        },
    }

</script>
