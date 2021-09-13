<template>
    <div>
        <div class="page-heading">
            <h1> Permission  </h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
                        <i class="fa fa-dashboard"> </i>
                        <span class="nav-label"> Home </span>
                    </router-link>
                </li>
                <li class="active"> View Permission </li>
            </ol>
        </div>

        <div class="page-body">
            <div class="panel panel-default">
                <div class="panel-heading d-flex">
                    <span> Permission </span>
                </div>

                <div class="panel-body">

                    <v-card-title> Permission
                        <v-spacer>
                            &nbsp;&nbsp;
                            <vue-excel-xlsx
                                    class = ""
                                    :data="this.permissions"
                                    :columns="columns"
                                    :filename="'permission'"
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
                            :items="this.permissions"
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
                                        <v-btn style="background-color: #3c8dbc" color="info" class=" mb-2" v-on="on">New Permission</v-btn>

                                    </template>
                                    <v-card>
                                        <v-card-title>
                                            <span class="headline">{{ formTitle }}</span>
                                        </v-card-title>

                                        <v-card-text>
                                            <v-container>
                                                <v-row>
                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field v-model="permission.name" label="Permission Name" :rules="[v => !!v || 'Name is required']"     :error-messages="errors['name']"    ></v-text-field>
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
                            <v-icon style="color: #3c8dbc" small class="mr-2" @click="editPermission(item)"  >edit</v-icon>
                            <!--<v-icon style="color: red;" small @click="deletePermission(item)" > delete  </v-icon>-->
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
        name: 'Permission',

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
               // agents:[],
                permissionIndex: -1,
          permissions: [],
                permission: {
                    'id' : '',
                    'name' : '',
                },

                permissionDefault: {
                    'id' : '',
                    'name' : '',
                },
                errors: [],


            }
        },
        computed: {
            formTitle () {
                return this.lgaIndex === -1 ? 'New Permission' : 'Edit Permission'
            },
        },

        watch: {
            dialog (val) {
                val || this.close()
            },
        },
        methods: {

            editPermission (item) {
                this.permissionIndex = this.permissions.indexOf(item);
                this.permission.name = item.name;
                this.permission.id = item.id;
                this.dialog = true;

            },
            deletePermission (item) {
                const index = this.permissions.indexOf(item)
                // confirm('Are you sure you want to delete ?'+item.name ) && this.agents.splice(index, 1)
                this.deletePermission(item);



            },
            close () {

                this.dialog = false;
                this.$nextTick(() => {
                        this.permissionIndex = -1

                })
            },

            save () {
                if (this.permissionIndex > -1) {   //
                    Object.assign(this.permissions[this.permissionIndex], this.permission);
                    this.updatePermission();
                } else {  // new
                    //alert(1);
                    this.addNewPermission()
                }
                this.close()
            },


            addNewPermission: async function(){
                try {
                    // alert(this.multi.value);

                    await axios.post('/permissions', {
                        'name' :  this.permission.name,
                    })
                        .then(response => {
                            //if(response.data.status == 'success'){
                                this.dialog = false;

                                this.flashMessage.success({
                                    title: '',
                                    message: 'Permission added successfully!',
                                    time: 5000
                                });

                           // }
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
            updatePermission : async function(){
                try {
                    await axios.put(`/permission/${this.permission.id}`, {
                        'name': this.permission.name
                    })
                        .then(response => {
                            if(response.data.status == 'success'){

                                this.dialog = false;
                                this.permissions.map(permission => {
                                    if(permission.id == response.data.data.id){
                                        for(let key in response.data.data){
                                            permission[key] = response.data.data[key];
                                        }
                                    }
                                });
                                this.flashMessage.success({
                                    title: '',
                                    message: 'Permission Updated Successfully',
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
            deletePermission: async function(permission){
                if(!window.confirm(`Are you sure you want to delete ${permission.name}`)){
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
                                    message: 'Permission  deleted successfully!',
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
                                    message: 'Permission not found!',
                                    time: 5000
                                });
                            }else{
                                console.log('else');
                            }
                        });
                }catch (e) {
                    this.flashMessage.error({
                        title: '',
                        message: 'Error in deleting Permission!',
                        time: 5000
                    });
                }
            },
            getPermissions: async function(){
                try{
                    await axios.get('/permissions')
                        .then( response => {
                            this.permissions = response.data.data;
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
            this.getPermissions();
        },
    }

</script>
