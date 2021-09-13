<template>
    <div>
        <div class="page-heading">
            <h1>  SERVICES </h1>
                <ol class="breadcrumb">
                    <li>
                        <router-link to="/" exact>
                            <i class="fa fa-dashboard"> </i>
                            <span class="nav-label"> Home </span>
                        </router-link>
                    </li>
                    <li class='active'> Services </li>
                </ol>
        </div>

        <div class="page-body">

            <div class="panel panel-default">
                <div class="panel-heading d-flex">
                    <span> Services </span>
                </div>

                <div class="panel-body">

                    <v-card-title>
                        <v-spacer>
                            &nbsp;&nbsp;
                            <vue-excel-xlsx
                                    class = ""
                                    :data="this.services"
                                    :columns="columns"
                                    :filename="'services'"
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
                            :items="this.services"
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
                                        <v-btn style="background-color: #3c8dbc" color="info" class=" mb-2" v-on="on">New Service</v-btn>

                                    </template>
                                    <v-card>
                                        <v-card-title>
                                            <span class="headline">{{ formTitle }}</span>
                                        </v-card-title>

                                        <v-card-text>
                                            <v-container>
                                                <v-row>
                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field v-model="service.name" label="Name of Service" :rules="[v => !!v || 'Name is required']"     :error-messages="errors['users.name']"    ></v-text-field>
                                                        <label  style="color:red" class="error" v-if="errors['name']">{{errors['name'][0] }}</label>
                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field v-model="service.price" label="Price of Service (i.e 200, 5000) " :rules="[v => !!v || 'Price is required']"     :error-messages="errors['users.name']"    ></v-text-field>
                                                        <label  style="color:red" class="error" v-if="errors['price']">{{errors['price'][0] }}</label>
                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field v-model="service.frequency" label="Frequency of Service (i.e Daily, Weekly,  Monthly, )"        ></v-text-field>
                                                        <label  style="color:red" class="error" v-if="errors['frequency']">{{errors['frequency'][0] }}</label>
                                                    </v-col>

                                                    <v-col cols="12" sm="12" md="12">
                                                        <v-text-field v-model="service.sub_category" label="Sub Category of Service  (i.e Market )  "      ></v-text-field>
                                                        <label  style="color:red" class="error" v-if="errors['sub_category']">{{errors['sub_category'][0] }}</label>
                                                    </v-col>



                                                    <v-col  cols="12" sm="12" md="12">
                                                        <v-select  id="state"  :rules="[v => !!v || 'other category  is required']"
                                                                   v-model="service.other_category"
                                                                   :items="othercategories"
                                                                   item-text='name'
                                                                   item-value='id'
                                                                   label="Select other category"
                                                        ></v-select>
                                                        <label style="color:red" class="error" v-if="errors['other_category']">{{errors['other_category'][0] }}</label>

                                                    </v-col>

                                                    <v-col  cols="12" sm="12" md="12">
                                                        <v-select  id="lga"  :rules="[v => !!v || 'Dept is required']"
                                                                   v-model="service.category_id"
                                                                   :items="depts"
                                                                   item-text='name'
                                                                   item-value='id'
                                                                   label="Select Dept"

                                                        ></v-select>
                                                        <label style="color:red" class="error" v-if="errors['lga_id']">{{errors['lga_id'][0] }}</label>

                                                    </v-col>

                                                </v-row>
                                            </v-container>
                                        </v-card-text>

                                        <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-btn  style="color: orangered" olor="blue darken-1" text @click="close">Cancel</v-btn>
                                            <v-btn  style="color: #3c8dbc" color="blue darken-1" text @click="save">Save</v-btn>
                                        </v-card-actions>
                                    </v-card>
                                </v-dialog>
                            </v-toolbar>
                        </template>

                        <template v-slot:item.range="{ item }">
                            <span  v-if="item.range.length>0">
                            <v-btn class="btn btn-success btn-sm" @click="viewRange(item)">Range</v-btn>
                            </span>

                        </template>

                        <template v-slot:item.actions="{ item }">
                            <v-icon style="color: #3c8dbc" small class="mr-2" @click="editSvce(item)"  >edit</v-icon>
                            <v-icon style="color: red;" small @click="deleteSvce(item)" > delete  </v-icon>
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

        <div class="modal fade" ref="rangeModal" id="rangeModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel2"> VIEW RANGES IN A SERVICE </h4>
                    </div>
                        <div class="modal-body">
                            <table class="table table-striped table-hover js-basic-example dataTable" id="ranges_table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Frequency</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="range in ranges" v-bind:key="range.id">
                                    <td> {{ range.id }} </td>
                                    <td> {{ range.name}} </td>
                                    <td>  {{ (new Intl.NumberFormat('en-NG', {
                                        style: 'currency',
                                        currency: 'NGN'
                                    })).format(range.price) }} </td>
                                    <td> {{ range.frequency}} </td>
                                    <td>
                                        <button class="btn btn-success btn-sm" v-on:click="editRange(range)"><i class="fa-1x fa fa-edit"></i> </button>
                                        <button class="btn btn-danger btn-sm" v-on:click="deleteRange(range)"><i class="fa-1x fa fa-trash"></i> </button>

                                    </td>

                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Frequency</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                        </div>
                </div>
            </div>
        </div>

        <div class="modal fade" ref="addRangeModal" id="addRangeModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel3"> ADD NEW RANGE FOR A SERVICE </h4>
                    </div>
                        <form v-on:submit.prevent="addNewRange">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="text"  v-model="range.name" class="form-control" placeholder="Range Name" />
                                    <label class="error" v-if="errors['name']">{{errors['name'][0]}}</label>
                                </div>
                                <div class="form-group">
                                    <label>Amount *</label>
                                    <input type="text"   v-model="range.price" class="form-control" placeholder="Amount" />
                                    <label class="error" v-if="errors['price']">{{errors['price'][0]}}</label>
                                </div>

                                <div class="form-group">
                                    <label>Frequency </label>
                                    <input type="text"  v-model="range.frequency" class="form-control" placeholder="Frequency" />
                                    <label class="error" v-if="errors['frequency']">{{errors['frequency'][0]}}</label>
                                </div>

                                <div class="form-group">
                                    <label>Service</label>
                                    <select   v-model="range.service_id" class="form-control" >
                                        <option v-for="service in services"   v-bind:value="service.id">
                                            {{ service.name }}
                                        </option>

                                    </select>
                                    <label class="error" v-if="errors['service_id']">{{errors['service_id'][0]}}</label>
                                </div>

                               </div>
                                
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>ADD</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>

        <div class="modal fade" ref="editRangeModal" id="editRangeModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel4"> EDIT A RANGE IN A SERVICE </h4>
                    </div>
                    <form v-on:submit.prevent="updateRange">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text"  v-model="range.name" class="form-control" placeholder="Range Name" />
                                <label class="error" v-if="errors['name']">{{errors['name'][0]}}</label>
                            </div>
                            <div class="form-group">
                                <label>Amount *</label>
                                <input type="text"   v-model="range.price" class="form-control" placeholder="Amount" />
                                <label class="error" v-if="errors['price']">{{errors['price'][0]}}</label>
                            </div>

                            <div class="form-group">
                                <label>Frequency </label>
                                <input type="text"  v-model="range.frequency" class="form-control" placeholder="Frequency" />
                                <label class="error" v-if="errors['frequency']">{{errors['frequency'][0]}}</label>
                            </div>

                            <div class="form-group">
                                <label>Service</label>
                                <select   v-model="range.service_id" class="form-control" >
                                    <option v-for="service in services"   v-bind:value="service.id">
                                        {{ service.name }}
                                    </option>

                                </select>
                                <label class="error" v-if="errors['service_id']">{{errors['service_id'][0]}}</label>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>UPDATE</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" ref="servicesModal" id="servicesModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel2"> ADD NEW SERVICE </h4>
                    </div>
                    <form v-on:submit.prevent="addNewService">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text"  name="name" v-model="service.name" class="form-control" placeholder="Service Name" />
                                <label class="error" v-if="errors['name']">{{errors['name'][0]}}</label>
                            </div>
                            <div class="form-group">
                                <label>Amount *</label>
                                <input type="text"  name="price" v-model="service.price" class="form-control" placeholder="Amount" />
                                <label class="error" v-if="errors['price']">{{errors['price'][0]}}</label>
                            </div>

                            <div class="form-group">
                                <label>Frequency </label>
                                <input type="text" name="frequency" v-model="service.frequency" class="form-control" placeholder="Frequency" />
                                <label class="error" v-if="errors['frequency']">{{errors['frequency'][0]}}</label>
                            </div>

                            <div class="form-group">
                                <label>Sub category</label>
                                <input type="text"  name="sub_category" v-model="service.sub_category" class="form-control" placeholder="Sub category" />
                                <label class="error" v-if="errors['sub_category']">{{errors['sub_category'][0]}}</label>
                            </div>
                            <div class="form-group">
                                <label>Other category</label>
                                <select  name="other_category" v-model="service.other_category" class="form-control" >
                                    <option v-for="othercategory in othercategories" v-bind:key="othercategory" v-bind:value="othercategory">
                                        {{ othercategory }}
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Department</label>
                                <select  name="category_id" v-model="service.category_id" class="form-control" >
                                    <option v-for="dept in depts"   v-bind:value="dept.id">
                                        <!--<option v-for="dept in depts"  v-bind:key="dept.id"  v-bind:value="dept.id" >-->
                                        {{ dept.name }}
                                    </option>
                                    <label class="error" v-if="errors['category_id']">{{errors['category_id'][0]}}</label>
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>ADD</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        

        <div class="modal fade" ref="editServicesModal" id="editServicesModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">EDIT SERVICE</h4>
                    </div>
                    <form v-on:submit.prevent="updateServices">
                        <div class="modal-body">
                            <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" id="name" name="name" v-model="service.name" class="form-control" placeholder="Service Name" />
                                    <label class="error" v-if="errors['name']">{{errors['name'][0]}}</label>
                            </div>
                             <div class="form-group">
                                    <label>Amount</label>
                                    <input type="text" id="name" name="name" v-model="service.price" class="form-control" placeholder="Amount" />
                                    <label class="error" v-if="errors['price']">{{errors['price'][0]}}</label>
                            </div>

                            <div class="form-group">
                                <label>Frequency</label>
                                <input type="text" name="price2" v-model="service.frequency" class="form-control" placeholder="Frequency" />
                                <label class="error" v-if="errors['frequency']">{{errors['frequency'][0]}}</label>
                            </div>

                            <div class="form-group">
                                <label>Sub category</label>
                                <input type="text"  name="subcategory2" v-model="service.sub_category" class="form-control" placeholder="Sub category" />
                                <label class="error" v-if="errors['sub_category']">{{errors['sub_category'][0]}}</label>
                            </div>
                            <div class="form-group">
                                <label>Other category</label>
                                <select  name="other_category" v-model="service.other_category" class="form-control" >
                                    <option v-for="othercategory in othercategories" v-bind:key="othercategory" v-bind:value="othercategory">
                                         {{ othercategory }}
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Department</label>
                                <select  name="category_id" v-model="service.category_id" class="form-control" >
                                    <option v-for="dept in depts"   v-bind:value="dept.id">
                                    <!--<option v-for="dept in depts"  v-bind:key="dept.id"  v-bind:value="dept.id" >-->
                                        {{ dept.name }}
                                    </option>
                                    <label class="error" v-if="errors['category_id']">{{errors['category_id'][0]}}</label>
                                </select>
                            </div>

                        </div>
                             <div class="modal-footer">
                                <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> EDIT</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                             </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Services",
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
                    { text: 'Amount', value: 'price' },
                    { text: 'Frequency', value: 'frequency' },
                    { text: 'Sub Category', value: 'sub_category' },
                    { text: 'Other Category', value: 'other_category' },
                    { text: 'Dept', value: 'dept' },
                    { text: 'Has Range ? ', value: 'range' },
                    { text: 'Action', value:'actions' , sortable: false },
                ],

                columns: [
                    { label: '#', field: 'sn' },
                    { label: 'Name', field: 'name' },
                    { label: 'Amount', field: 'price' , dataFormat: this.$shared.amountFormat},
                    { label: 'Frequency', field: 'frequency' },
                    { label: 'Sub Category', field: 'sub_category' },
                    { label: 'Other Category', field: 'other_category' },
                    { label: 'Dept', field: 'dept' }
                ],

               serviceIndex: -1,


                services: [],
                service: {
                    'id' : '',
                    'name' : '',
                    'price' : '',
                    'frequency' : '',
                    'sub_category' : '',
                    'other_category' : '',
                    'category_id' : '',
                    'category' : '',
                    'ranges' : '',
                },

                serviceDefault: {
                    'id' : '',
                    'name' : '',
                    'price' : '',
                    'frequency' : '',
                    'sub_category' : '',
                    'other_category' : '',
                    'category_id' : '',
                    'category' : '',
                    'ranges' : '',
                },
                errors:[],
                ranges:[],
                range: {
                    'id' : '',
                    'name' : '',
                    'price' : '',
                    'frequency' : '',
                    'service_id' : '',
                },

                othercategories:[],
                depts:[],
                range:{
                    'id' : '',
                    'name' : '',
                    'price' : '',
                    'frequency' : '',
                }
        }
    },

        computed: {
            formTitle () {
                return this.serviceIndex === -1 ? 'New Service' : 'Edit Service'
            },
        },

        watch: {
            dialog (val) {
                val || this.close()
            },
        },

        methods:{



            editSvce (item) {
                this.serviceIndex = this.services.indexOf(item)
                // this.agent = Object.assign({   }, item),
                this.service.name = item.name;
                this.service.price = item.price;
                this.service.frequency = item.frequency;
                this.service.sub_category = item.sub_category;
                this.service.other_category = item.other_category;
                this.getCategory();
                this.service.category_id =  item.category_id;
                this.service.id = item.id;

                this.getOtherCategory();
                this.dialog = true

            },
            deleteSvce (item) {
                const index = this.services.indexOf(item)
                // confirm('Are you sure you want to delete ?'+item.name ) && this.agents.splice(index, 1)
                this.deleteService(item);



            },
            close () {

                this.dialog = false;
                this.$nextTick(() => {
                    this.service = Object.assign({}, this.serviceDefault),
                        this.serviceIndex = -1

                })
            },

            save () {
                if (this.serviceIndex > -1) {   // edit
                    Object.assign(this.services[this.serviceIndex], this.service)
                    this.updateServices();

                } else {  // new
                    //  this.agents.push(this.agent)
                    this.addNewService()
                }
                this.close()
            },



        viewRange: async function(service){
             jQuery.noConflict();
            try{

                await axios.get(`/service/${service.id}/ranges`)
                    .then( response => {
                        this.ranges = response.data.data;

                    })
                    .catch( (error) => {
                        console.log(error)
                    });
            }catch(e) {
                console.log(e);
            }

            $('#rangeModal').modal('show');

        },


        addNewRange: async function(){

            try {
                await axios.post('/range', {
                    'name': this.range.name,
                    'price': this.range.price,
                    'frequency': this.range.frequency,
                    'service_id': this.range.service_id,
                })
                    .then(response => {

                        if(response.data.status == 'success'){
                            $('#addRangeModal').modal('hide');
                            this.flashMessage.success({
                                title: '',
                                message: 'Range added successfully!',
                                time: 5000
                            });
                            this.services.unshift(response.data.data);
                        }
                    })
                    .catch( (error) => {
                        console.log(error.response.data.errors);

                        if(error.response.status == 422){
                            this.errors = error.response.data.errors;
                            this.flashMessage.error({
                                title: '',
                                message: 'Unprocessable entity!',
                                time: 5000
                            });
                        }else{
                            console.log('else1');
                        }
                    });
            }catch(e) {
                this.flashMessage.error({
                    title: '',
                    messsage: 'Error in adding Range',
                    time: 5000
                });
            }
        },

        editRange(range){
            jQuery.noConflict();//to clear multiple jquery import error
            this.range.id= range.id,
            this.range.name= range.name,
                this.range.price= range.price,
                this.range.frequency= range.frequency,
                this.range.service_id= range.service_id,

                $('#editRangeModal').modal('show');
        },

        updateRange: async function(){

            try{
                await axios.put(`/range`, {
                    'id': this.range.id,
                    'name': this.range.name,
                    'price': this.range.price,
                    'frequency': this.range.frequency,
                    'service_id': this.range.service_id,
                })
                    .then(response => {
                        if(response.data.status == 'success'){
                            //hide modal
                            $('#editRangeModal').modal('hide');
                            $('#rangeModal').modal('hide');
                            //update table
                            this.ranges.map(range => {
                                if(range.id == response.data.data.id){
                                    for(let key in response.data.data){
                                        range[key] = response.data.data[key];
                                    }
                                }
                            });
                            //show notification
                            this.flashMessage.success({
                                title: '',
                                message: 'Range updated succesfully',
                                time:5000
                            });
                        }
                    })
                    .catch( (error) => {
                        console.log(error.response.data.errors);

                        if(error.response.status == 422) {
                            this.errors = error.response.data.errors;
                            this.flashMessage.error({
                                title: '',
                                message: 'unprocessable entity!',
                                time: 5000
                            });
                        }else {
                            console.log('else2');
                        }
                    });
            }catch (e) {

            }
        },
        deleteRange: async function(range){
            if(!window.confirm(`Are you sure you want to delete ${range.name}`)){
                return;
            }
            try{
                await axios.delete(`/range/${range.id}`)
                    .then( response => {
                        console.log(response);
                        if(response.status == 204){
                            //remove from table
                            this.ranges = this.ranges.filter(obj => {
                                return obj.id != range.id;
                            });
                            //show notification
                            this.flashMessage.success({
                                title: 'Response Message',
                                message: 'Range deleted successfully!',
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
                                message: 'Range not found!',
                                time: 5000
                            });
                        }else{
                            console.log('else');
                        }
                    });
            }catch (e) {
                this.flashMessage.error({
                    title: '',
                    message: 'Error in deleting Service!',
                    time: 5000
                });
            }
        },
        addNewService: async function(){

            try {
                await axios.post('/service', {
                    'name': this.service.name,
                    'price': this.service.price,
                    'frequency': this.service.frequency,
                    'sub_category': this.service.sub_category,
                    'other_category': this.service.other_category,
                    'category_id': this.service.category_id,
                })
                .then(response => {
            
                        if(response.data.status == 'success'){
                           // $('#servicesModal').modal('hide');
                             this.dialog = false;
                            this.flashMessage.success({
                                title: '',
                                message: 'Service added successfully!',
                                time: 5000
                            });
                            this.services.unshift(response.data.data);
                        }
                })
                .catch( (error) => {
                    console.log(error.response.data.errors);

                    if(error.response.status == 422){
                                this.errors = error.response.data.errors;
                                this.flashMessage.error({
                                    title: '',
                                    message: 'Unprocessable entity!',
                                    time: 5000
                                });
                            }else{
                                console.log('else1');
                            }
                });
            }catch(e) {
                this.flashMessage.error({
                    title: '',
                    messsage: 'Error in adding Services',
                    time: 5000
                });
            }
        },
        editService(service){
            jQuery.noConflict();

            this.service.id = service.id;
            this.service.name = service.name;
            this.service.price = service.price;
            this.service.frequency = service.frequency;
            this.service.sub_category = service.sub_category;
            this.service.other_category = service.other_category;
            this.service.category_id = service.category.id;

          //  $('#editServicesModal').modal('show');
            this.dialog = false
        },
        updateServices: async function(){

            try{
                await axios.put(`/service/${this.service.id}`, {
                    'name': this.service.name,
                    'price': this.service.price,
                    'frequency': this.service.frequency,
                    'sub_category': this.service.sub_category,
                    'other_category': this.service.other_category,
                    'category_id': this.service.category_id,
                })
                .then(response => {
                    if(response.data.status == 'success'){
                        //hide modal
                       // $('#editServicesModal').modal('hide');
                        this.dialog = false
                        //update table
                        this.services.map(service => {
                            if(service.id == response.data.data.id){
                                for(let key in response.data.data){
                                    service[key] = response.data.data[key];
                                }
                            }
                        });
                        //show notification
                        this.flashMessage.success({
                            title: '',
                            message: 'Services updated succesfully',
                            time:5000
                        });
                    }
                })
                .catch( (error) => {
                    console.log(error.response.data.errors);

                    if(error.response.status == 422) {
                        this.errors = error.response.data.errors;
                        this.flashMessage.error({
                            title: '',
                            message: 'unprocessable entity!',
                            time: 5000
                        });
                    }else {
                        console.log('else2');
                    }
                });
            }catch (e) {

            }
        },

        deleteService: async function(service){
             if(!window.confirm(`Are you sure you want to delete ${service.name}`)){
                    return;
                }
            try{
                    await axios.delete(`/service/${service.id}`)
                        .then( response => {
                            console.log(response);
                            if(response.status == 204){
                                //remove from table
                                this.services = this.services.filter(obj => {
                                    return obj.id != service.id;
                                });
                                //show notification
                                this.flashMessage.success({
                                    title: '',
                                    message: 'Service deleted successfully!',
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
                                    message: 'Service not found!',
                                    time: 5000
                                });
                            }else{
                                console.log('else');
                            }
                        });
                         }catch (e) {
                        this.flashMessage.error({
                            title: '',
                            message: 'Error in deleting Service!',
                            time: 5000
                        });
                    }
            },
            getServices: async function(){
                try{
                    await axios.get('/service')
                        .then( response => {
                            this.services = response.data.data;
                            this.table_1 = false;
                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e) {
                    console.log(e);
                }
            },

        getCategory: async function(){
            try{
                await axios.get('/getcategory/all')
                    .then( response => {
                        this.depts = response.data.data;
                    })
                    .catch( (error) => {
                        console.log(error)
                    });
            }catch(e) {
                console.log(e);
            }
        },
        getOtherCategory: async function(){
            try{
                await axios.get('/revenuepoint_type')
                    .then(response => {
                        this.othercategories = response.data.data;

                    })
                    .catch( (error) => {
                        console.log(error)
                    });
            }catch(e){
                console.log(e);
            }
        }
    },
            mounted(){
                this.getServices();
               this.getOtherCategory();
               this.getCategory();
               // this.loadDataTable;


            },

        }
        
</script>

<style scope>
</style>