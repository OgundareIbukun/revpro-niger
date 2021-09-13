<template>
    <div>
        <div class="page-heading">
            <h1>USERS MANAGEMENT</h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
                        <i class="fa fa-dashboard"> </i>
                        <span class="nav-label">Home</span>
                    </router-link>
                </li>
                <li class="active">Users</li>
            </ol>
        </div>

        <div class="page-body">

            <div class="panel panel-default">
                <div class="panel-heading d-flex">
                    <span>USERS TABLE</span>
                </div>

                <div class="panel-body">

                    <v-card-title> User Management
                        <v-spacer>
                            &nbsp;&nbsp;
                            <vue-excel-xlsx
                                    class = ""
                                    :data="this.users"
                                    :columns="columns"
                                    :filename="'users'"
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
                            :items="this.users"
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
                                        <v-btn style="background-color: #3c8dbc" color="info" class=" mb-2" v-on="on">New User</v-btn>

                                    </template>
                                    <v-card>
                                        <v-card-title>
                                            <span class="headline">{{ formTitle }}</span>
                                        </v-card-title>

                                        <v-card-text>
                                            <v-container>
                                                <v-row>
                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field v-model="user.name" label="Name" :rules="[v => !!v || 'Name is required']"       ></v-text-field>
                                                        <label  style="color:red" class="error" v-if="errors['name']">Name of user is required</label>
                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field v-model="user.email" label="Email" :rules="[v => !!v || 'Email is required']"        ></v-text-field>
                                                        <label  style="color:red" class="error" v-if="errors['email']">Email is required</label>
                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field v-model="user.phone" label="Phone" :rules="[v => !!v || 'Phone is required']"        ></v-text-field>
                                                        <label  style="color:red" class="error" v-if="errors['email']">Phone number  is required</label>
                                                    </v-col>

                                                    <v-col id='password' cols="12" sm="12" md="12">
                                                        <v-text-field v-model="user.password" label="Password" :rules="[v => !!v || 'Password is required']"
                                                                      :append-icon="show2 ? 'mdi-eye' : 'mdi-eye-off'"
                                                                      :type="show2 ? 'text' : 'password'"
                                                                      hint="At least 4 characters"
                                                                      counter
                                                                      @click:append="show2 = !show2"


                                                        ></v-text-field>
                                                        <label  style="color:red" class="error" v-if="errors['password']">Confirm Password is required</label>
                                                    </v-col>

                                                    <v-col id='cpassword' cols="12" sm="12" md="12">
                                                        <v-text-field v-model="user.password_confirmation" label="Confirm Password" :rules="[v => !!v || 'Confirm Password is required']"
                                                                      :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                                                                      :type="show1 ? 'text' : 'password'"
                                                                      hint="At least 4 characters"
                                                                      counter
                                                                      @click:append="show1 = !show1"


                                                        ></v-text-field>
                                                        <label  style="color:red" class="error" v-if="errors['cpassword']">confirm Password is required</label>
                                                    </v-col>

                                                    <v-col id=""  cols="12" sm="12" md="12">
                                                        <v-select
                                                                   v-model="user.category_id"
                                                                   :items="depts"
                                                                   item-text='name'
                                                                   item-value='id'
                                                                   label="Select Department"

                                                        ></v-select>

                                                    </v-col>

                                                    <v-col id=""  cols="12" sm="12" md="12">
                                                        <v-select
                                                                   v-model="user.lga_id"
                                                                   :items="lgas"
                                                                   item-text='name'
                                                                   item-value='id'
                                                                   label="Select LGA"

                                                        ></v-select>

                                                    </v-col>

                                                    <v-col id=""  cols="12" sm="12" md="12">
                                                        <v-select  id=""
                                                                   v-model="user.role_id"
                                                                   :items="roles"
                                                                   item-text='name'
                                                                   item-value='id'
                                                                   label="Select User Role"

                                                        ></v-select>

                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-select  :rules="[v => !!v || 'Permission is required']"
                                                                   v-model="user.permission"
                                                                   :items="permissions"
                                                                   :menu-props="{ maxHeight: '400' }"
                                                                   label="Select Permission"
                                                                   multiple
                                                                   hint="Select Permission"
                                                                   persistent-hint



                                                        >  </v-select>
                                                        <label style="color:red" class="error" v-if="errors['permission_id']">{{errors['permission_id'][0]}}</label>
                                                    </v-col>

                                                </v-row>
                                            </v-container>
                                        </v-card-text>

                                        <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-btn c style="color: orangered" olor="blue darken-1" text @click="close">Cancel</v-btn>
                                            <v-btn  style="color: #3c8dbc" color="blue darken-1" text @click="save">Save</v-btn>
                                        </v-card-actions>
                                    </v-card>
                                </v-dialog>
                            </v-toolbar>
                        </template>

                        <template v-slot:item.actions="{ item }">
                            <v-icon style="color: #3c8dbc" small class="mr-2" @click="editUser(item)"  >edit</v-icon>
                            <v-icon style="color: red;" small @click="deleteUsr(item)" > delete  </v-icon>
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
        name: "User",
        data(){
            return {
                show1: false,
                show2: false,

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
                    { text: 'Phone #', value: 'phone' },
                    { text: 'Role', value: 'role_name' },
                    { text: 'Permission', value: 'permission' },
                    { text: 'Dept', value: 'category_name' },
                    { text: 'LGA', value: 'lga_name' },
                    { text: 'Action', value:'actions' , sortable: false },
                ],

                columns: [
                    { label: '#', field: 'sn' },
                    { label: 'Name', field: 'name' },
                    { label: 'Phone #', field: 'phone' },
                    { label: 'Role', field: 'role_name' },
                    { label: 'Permission', field: 'permission' },
                    { label: 'Dept', field: 'category_name' },
                    { label: 'LGA', field: 'lga_name' }
                ],



                userIndex: -1,
                users:[],
                user:{
                    'id':'',
                    'name':'',
                    'email':'',
                    'phone':'',
                    'password': '',
                    'password_confirmation':'',
                    'lga_id':'',
                    'permission':'',
                    'role_id':'',
                    'category_id':'',
                },

                userDefault:{
                    'id':'',
                    'name':'',
                    'email':'',
                    'phone':'',
                    'password': '',
                    'password_confirmation':'',
                    'lga_id':'',
                    'permission':'',
                    'role_id':'',
                    'category_id':'',
                },
                errors:[],
                depts: [],
                lgas: [],
                roles: [],
                'permissions':[]
            }


        },

        computed: {
            formTitle () {
                return this.userIndex === -1 ? 'New User' : 'Edit User'
            },
        },

        watch: {
            dialog (val) {
                val || this.close()
            },
        },
        methods:{

            editUsr (item) {
                this.userIndex = this.users.indexOf(item)
                this.user = Object.assign({}, item),

              //  this.getLgas();
                $('#password').addClass('hide');
                $('#cpassword').addClass('hide');
                this.dialog = true;
            },
            deleteUsr (item) {
                const index = this.users.indexOf(item)
                // confirm('Are you sure you want to delete ?'+item.name ) && this.agents.splice(index, 1)
                this.deleteUser(item);
            },
            close () {
                $('#password').removeClass('hide');
                $('#cpassword').removeClass('hide');
                this.dialog = false;
                this.$nextTick(() => {
                   // $('#lga_col').removeClass('hide');
                    this.user = Object.assign({}, this.userDefault),
                        this.userIndex = -1

                })
            },

            save () {
                if (this.userIndex > -1) {   // edit
                    Object.assign(this.users[this.userIndex], this.users)
                    this.updateUser();

                } else {  // new
                    this.users.push(this.user)
                    this.addNewUser()
                }
                this.close()
            },



            addNewUser: async function(){

                try {

                    await axios.post('/user', {
                        'name': this.user.name,
                        'email': this.user.email,
                        'phone': this.user.phone,
                        'password': this.user.password,
                        'cpassword': this.user.password_confirmation,
                        'category_id': this.user.category_id,
                        'role_id': this.user.role_id,
                        'lga_id': this.user.lga_id,
                        'permission':this.user.permission
                    })
                        .then( response => {
                            //console.log(response.data);
                            if(response.data.status == 'success'){
                                //hide modal
                                $('#usersModal').modal('hide');
                                //display notification
                                this.flashMessage.success({
                                    title: '',
                                    message: 'User added successfully!',
                                    time: 5000
                                });
                              //  this.users.unshift(response.data.data);
                            }
                        })
                        .catch( (error) => {
                            console.log(error.response.data.errors);

                            if(error.response.status == 422){
                                this.errors = error.response.data.errors;




                                   this.dialog = 'true';
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
                        message: 'Error in adding User!',
                        time: 5000
                    });
                }

            },
            editUser(user){

                jQuery.noConflict();//to clear multiple jquery import error
                this.userIndex = this.users.indexOf(user),
                this.user.id = user.id,
                 this.user.name = user.name,
                    this.user.email = user.email,
                    this.user.phone= user.phone,
                    this.user.category_id = user.category_id,
                    this.user.role_id = user.role_id,
                    this.user.permission = user.permission.split(','),
                    this.user.lga_id = user.lga_id
                  this.getPermissions();
                 this.dialog = true;

               // $('#editUsersModal').modal('show');
            },
            updateUser: async function(){

                try{

                    await axios.put(`/user/${this.user.id}`, {
                        'name': this.user.name,
                        'email': this.user.email,
                        'phone': this.user.phone,
                        'category_id': this.user.category_id,
                        'role_id': this.user.role_id,
                        'lga_id': this.user.lga_id,
                        'permission': this.user.permission,
                    })
                        .then( response => {
                            if(response.data.status == 'success'){

                                //update table
                                this.users.map(user =>{
                                    if(user.id == response.data.data.id) {
                                        //agent = response.data.data;
                                        for(let key in response.data.data){
                                            user[key] = response.data.data[key];
                                        }
                                    }
                                });
                                //show notification
                                this.flashMessage.success({
                                    title: '',
                                    message: 'User updated successfully!',
                                    time: 5000
                                });
                            }
                        })
                        .catch( (error) => {
                            console.log(error.response.data.errors);

                            if(error.response.status == 422){
                                //console.log(error.response.data.errors['users.name'][0]);
                                this.errors = error.response.data.errors;
                                  this.dialog = 'true';
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
            deleteUser: async function(user){
                if(!window.confirm(`Are you sure you want to delete ${user.name}`)){
                    return;
                }

                try{
                    await axios.delete(`/user/${user.id}`)
                        .then( response => {
                            console.log(response);
                            if(response.status == 204){
                                //remove from table
                                this.users = this.users.filter(obj => {
                                    return obj.id != user.id;
                                });
                                //show notification
                                this.flashMessage.success({
                                    title: '',
                                    message: 'User deleted successfully!',
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
                                    message: 'User not found!',
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
            getUsers: async function(){
                try{
                    await axios.get('/user')
                        .then( response => {
                            //console.log(response.data.data);
                            this.users = response.data.data;

                            this.table_1 = false;
                        })
                        .catch( (error) => { console.log(error) });
                }catch (e) {
                    console.log(e);
                }
            },
            getCategories: async function(){
                try{
                    await axios.get('/getcategory/all')
                        .then( response => {
                            //console.log(response.data.data);
                            this.depts = response.data.data;
                        })
                        .catch( (error) => { console.log(error) });
                }catch (e) {
                    console.log(e);
                }
            },
            getRoles: async function(){
                try{
                    await axios.get('/role')
                        .then( response => {
                            //console.log(response.data.data);
                            this.roles = response.data.data;
                        })
                        .catch( (error) => { console.log(error) });
                }catch (e) {
                    console.log(e);
                }
            },
            getPermissions: async function(){
                try{
                    await axios.get('/permission_name')
                        .then( response => {
                            //console.log(response.data.data);
                            this.permissions = response.data.data;

                            this.table_1 = false;
                        })
                        .catch( (error) => { console.log(error) });
                }catch (e) {
                    console.log(e);
                }
            },

        },
        mounted() {
           // this.getAuth();
            this.getLgas();
            this.getUsers();
            this.getRoles();
            this.getCategories();
            this.getPermissions();

        },
    }
</script>
