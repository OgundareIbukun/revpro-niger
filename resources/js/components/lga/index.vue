<template>
    <div>
        <div class="page-heading">
            <h1> LGA </h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
                        <i class="fa fa-dashboard"> </i>
                        <span class="nav-label"> Home </span>
                    </router-link>
                </li>
                <li class="active"> LGA </li>
            </ol>
        </div>

        <div class="page-body">
            <div class="panel panel-default">
                <div class="panel-heading d-flex">
                    <span> Lga  Table </span>
                </div>

                <div class="panel-body">

                    <v-card-title> LGA
                        <v-spacer>
                            &nbsp;&nbsp;
                            <vue-excel-xlsx
                                    class = ""
                                    :data="this.lgas"
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
                            :items="this.lgas"
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
                                        <v-btn style="background-color: #3c8dbc" color="info" class=" mb-2" v-on="on">New LGA</v-btn>

                                    </template>
                                    <v-card>
                                        <v-card-title>
                                            <span class="headline">{{ formTitle }}</span>
                                        </v-card-title>

                                        <v-card-text>
                                            <v-container>
                                                <v-row>
                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field v-model="lga.name" label="LGA Name" :rules="[v => !!v || 'Name is required']"     :error-messages="errors['users.name']"    ></v-text-field>
                                                        <label  style="color:red" class="error" v-if="errors['name']">{{errors['name'][0]}}</label>
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
                            <v-icon style="color: #3c8dbc" small class="mr-2" @click="editLga(item)"  >edit</v-icon>
                            <v-icon style="color: red;" small @click="deleteLga(item)" > delete  </v-icon>
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
        name: 'LGAs',

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
                    { text: 'Action', value:'actions' , sortable: false },
                ],

                columns: [
                    { label: '#', field: 'sn' },
                    { label: 'Name', field: 'name' },
                ],

                //  summary:[],
                agents:[],
                  lgaIndex: -1,
                lgas: [],
                lga: {
                    'id' : '',
                    'name' : '',
                    'state_id' : ''
                },

                lgaDefault: {
                    'id' : '',
                    'name' : '',
                    'state_id' : '',
                },
                errors: [],
                //types: [],
                states: [],
                lgas: [],

                //  revpt:[],


            }
        },
        computed: {
            formTitle () {
                return this.lgaIndex === -1 ? 'New LGA' : 'Edit LGA'
            },
        },

        watch: {
            dialog (val) {
                val || this.close()
            },
        },
        methods: {

            editLga (item) {
                this.lgaIndex = this.lgas.indexOf(item);
               // this.revPointIndex = this.revenuepoints.indexOf(item)
                this.lga.name = item.name;
                   this.lga.state_id = item.state_id;
                this.lga.id = item.id;
                this.dialog = true;

            },
            deleteLga (item) {
                const index = this.lgas.indexOf(item)
                // confirm('Are you sure you want to delete ?'+item.name ) && this.agents.splice(index, 1)
                this.deleteLga(item);



            },
            close () {

                this.dialog = false;
                this.$nextTick(() => {
                  //  $('#lga_col').removeClass('hide');
                    this.lga = Object.assign({}, this.lgaDefault),
                        this.lgaIndex = -1


                })
            },

            save () {
                if (this.lgaIndex > -1) {   // edit
                    Object.assign(this.lgas[this.lgaIndex], this.lga);
                    this.updateLga();


                } else {  // new
                      alert('am here');
                    //  this.agents.push(this.agent)
                    this.addNewLga()
                }
                this.close()
            },


            addNewLga: async function(){
                try {
                    // alert(this.multi.value);

                    await axios.post('/lgas', {
                        'name' :  this.lga.name,
                        'state_id' :  this.$state_id,
                    })
                        .then(response => {
                            if(response.data.status == 'success'){
                                this.dialog = false;

                                this.flashMessage.success({
                                    title: '',
                                    message: 'LGA added succesfully!',
                                    time: 5000
                                });
                                this.lgas.unshift(response.data.data);
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
                        message: 'Error in adding   LGA',
                        time: 5000
                    });
                }
            },
            updateLga : async function(){
                try {
                    await axios.put(`/lgas/${this.lga.id}`, {
                        'name': this.lga.name,
                        'state_id' :  this.$state_id,
                    })
                        .then(response => {
                            if(response.data.status == 'success'){
                                //      $('#editRevenuePointsModal').modal('hide');
                                // this.modal = false;
                                this.dialog = false;
                                this.lgas.map(lga => {
                                    if(lga.id == response.data.data.id){
                                        for(let key in response.data.data){
                                            lga[key] = response.data.data[key];
                                        }
                                    }
                                });
                                this.flashMessage.success({
                                    title: '',
                                    message: 'LGA Updated Successfully',
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
            deleteLga: async function(lga){
                if(!window.confirm(`Are you sure you want to delete ${lga.name}`)){
                    return;
                }
                try{
                    await axios.delete(`/lgas/${lga.id}`)
                        .then(response=> {
                            console.log(response);
                            if(response.status == 204){
                                //remove from table
                                this.lgas = this.lgas.filter(obj => {
                                    return obj.id != lga.id;
                                });
                                //show notification
                                this.flashMessage.success({
                                    title: '',
                                    message: 'Lga  deleted successfully!',
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
                                    message: 'LGA not found!',
                                    time: 5000
                                });
                            }else{
                                console.log('else');
                            }
                        });
                }catch (e) {
                    this.flashMessage.error({
                        title: '',
                        message: 'Error in deleting LGA!',
                        time: 5000
                    });
                }
            },
            getLgas: async function(){
                try{
                    await axios.get('/lgas')
                        .then( response => {
                            this.lgas = response.data.data;
                            this.table_1 = false;
                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e) {
                    console.log(e);
                }
            },

        },
        mounted(){
            this.getLgas();
        },
    }

</script>
