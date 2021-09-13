<template>
    <!--<offline @detected-condition="handleConnectivityChange">-->
    <!--<div slot="online" >-->
    <div>

        <div class="page-heading">
            <h1> TRAINING </h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
                        <i class="fa fa-dashboard"> </i>
                        <span class="nav-label"> Home </span>
                    </router-link>
                </li>
                <li class="active"> Training </li>
            </ol>
        </div>

        <div class="page-body">


               <div id="table" class="row clearfix">
                   <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading d-flex">
                    <span> Video Management </span>
                </div>

                <div class="panel-body">

                    <v-card-title>
                        <v-spacer  >

                        </v-spacer>
                        <v-col cols="4" sm="12" md="4"> <v-text-field
                                v-model="vSearch"
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
                            :headers="this.vHeaders"
                            :items="this.videos"
                            :search="vSearch"
                            class="elevation-1"
                            :items-per-page="10"

                    >

                        <template v-slot:top>
                            <v-toolbar flat color="white">

                                <!--</v-spacer>-->
                                <v-dialog v-model="dialog" max-width="600px">
                                    <template  v-slot:activator="{ on }">

                                        <v-btn  v-if="$roles.user_role == $roles.super_admin" style="background-color: #3c8dbc" color="info" class=" mb-2" v-on="on">New Video</v-btn>

                                    </template>

                                    <form  >
                                        <v-card>
                                            <v-card-title>
                                                <span class="headline">{{ videoTitle }}</span>
                                            </v-card-title>

                                            <v-card-text>
                                                <v-container>
                                                    <v-row>

                                                        <v-col cols="12" sm="12" md="12">
                                                            <v-text-field   required="Title is required"    v-model="video.title" label="Title" :rules="[v => !!v || 'Title is required']"       ></v-text-field>
                                                            <label class="error" style="color:red;font-size: 12px;"  v-if="errors['data.title']">{{errors['data.title'][0]}}</label>

                                                        </v-col>
                                                        <v-col cols="12" sm="12" md="12">
                                                            <v-textarea
                                                                    v-model="video.description"
                                                                    label="Description"
                                                                    :rules="[v => !!v || 'Description is required']"
                                                                    rows="2"

                                                            ></v-textarea>
                                                            <label class="error" style="color:red;font-size: 12px;"  v-if="errors['data.description']">{{errors['data.description'][0]}}</label>
                                                        </v-col>

                                                        <v-col cols="12" sm="12" md="12">
                                                            <v-text-field   required="Tag is required"    v-model="video.tag" label="Tag" :rules="[v => !!v || 'Tag is required']"       ></v-text-field>
                                                            <label class="error" style="color:red;font-size: 12px;"  v-if="errors['data.tag']">{{errors['data.tag'][0]}}</label>
                                                        </v-col>

                                                        <v-col cols="12" sm="12" md="12">
                                                            <v-file-input
                                                                    accept="video/*"
                                                                    v-model="video.file_name"
                                                                    label="Upload Video"

                                                            > </v-file-input>
                                                            <label class="error" style="color:red;font-size: 12px;"  v-if="errors['file_name']">{{errors['file_name'][0]}}</label>
                                                        </v-col>

                                                        <v-col cols="12" sm="12" md="12">
                                                            <video width="100" height="100" controls>
                                                                <source  v-bind:src="video_url"  type="video/mp4" >
                                                            </video>
                                                        </v-col>



                                                    </v-row>
                                                </v-container>
                                            </v-card-text>

                                            <v-card-actions >
                                                <v-spacer></v-spacer>
                                                <v-btn  style="background-color:deepskyblue; color:whitesmoke" color="whitesmoke" text @click="saveVideo">Save</v-btn>&nbsp;&nbsp;
                                                <v-btn  style="background-color:red; color:whitesmoke" color="whitesmoke" text @click="closeVideo">Cancel</v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </form>
                                </v-dialog>
                            </v-toolbar>
                        </template>

                        <template v-slot:item.file_name="{ item }">
                             <div>

                                    <video width="100" height="100" controls>
                                        <source  v-bind:src="item.file_name"  type="video/mp4" >
                                    </video>

                                </div>
                        </template>

                        <template v-slot:item.title="{ item }">
                            <div>Title: {{item.title}}<br>
                                  Description: {{item.description}}<br>
                                  Tag: {{item.tag}}
                            </div>
                        </template>


                        <template v-slot:item.actions="{ item }">
                            <v-tooltip bottom>
                                <template v-slot:activator="{ on, attrs }">
                                    <v-icon style="color: #3c8dbc" small class="mr-2" @click="editVideo(item)"  v-bind="attrs" v-on="on"
                                    >edit</v-icon>
                                </template>  <span>Edit Action</span> </v-tooltip>

                            <v-tooltip bottom>
                                <template v-slot:activator="{ on, attrs }">
                                    <v-icon style="color: red;" small @click="deleteVideo(item)" v-bind="attrs" v-on="on"  > delete  </v-icon>
                                </template>  <span>Delete Action</span> </v-tooltip>

                            <div v-if="item.status == 1"  >
                                <v-overlay  :value="reloader_status"
                                > <v-progress-circular indeterminate size="60"></v-progress-circular>
                                </v-overlay>
                                <v-tooltip bottom>
                                    <template v-slot:activator="{ on, attrs }">
                                        <v-icon  class="mr-2 "  small   v-bind="attrs" v-on="on"  style="color:deeppink"  @click="statusVideo(item)"  >
                                            mdi-checkbox-marked-circle
                                        </v-icon> </template>  <span>Unpublish</span> </v-tooltip>
                            </div>
                            <div v-else   style="color:green;" >
                                <v-tooltip bottom>
                                    <template v-slot:activator="{ on, attrs }">
                                        <v-icon   class="mr-2"  small v-bind="attrs" v-on="on"    @click="statusVideo(item)"  >mdi-cancel</v-icon>   </template>
                                    <span>Publish</span> </v-tooltip>
                            </div>

                        </template>


                    </v-data-table>

                </div>



            </div>
                   </div>
               </div>


               <div id="table2" class="row clearfix">
                   <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
               <div class="panel panel-default">
                   <div class="panel-heading d-flex">
                       <span> Document Management </span>
                   </div>

                   <div class="panel-body">


                       <v-card-title>
                           <v-spacer  >

                           </v-spacer>
                           <v-col cols="4" sm="12" md="4"> <v-text-field
                                   v-model="dSearch"
                                   append-icon="mdi-magnify"
                                   label="Search"
                                   single-line
                                   hide-details
                                   solo
                           ></v-text-field></v-col>

                           <v-overlay
                                   :value="table_2"
                           > <v-progress-circular indeterminate size="60"></v-progress-circular>
                           </v-overlay>
                       </v-card-title>

                       <v-data-table
                               :headers="this.dHeaders"
                               :items="this.docs"
                               :search="dSearch"
                               class="elevation-1"
                               :items-per-page="10"

                       >

                           <template v-slot:top>
                               <v-toolbar flat color="white">

                                   <!--</v-spacer>-->
                                   <v-dialog v-model="dialogDoc" max-width="600px">
                                       <template  v-slot:activator="{ on }">

                                           <v-btn  v-if="$roles.user_role == $roles.super_admin" style="background-color: #3c8dbc" color="info" class=" mb-2" v-on="on">New Doc</v-btn>

                                       </template>

                                       <form  >
                                           <v-card>
                                               <v-card-title>
                                                   <span class="headline">{{ docTitle }}</span>
                                               </v-card-title>

                                               <v-card-text>
                                                   <v-container>
                                                       <v-row>

                                                           <v-col cols="12" sm="12" md="12">
                                                               <v-text-field   required="Title is required"    v-model="doc.title" label="Title" :rules="[v => !!v || 'Title is required']"       ></v-text-field>
                                                               <label class="error" style="color:red;font-size: 12px;"  v-if="errorsDoc['doc.title']">{{errorsDoc['doc.title'][0]}}</label>

                                                           </v-col>
                                                           <v-col cols="12" sm="12" md="12">
                                                               <v-textarea
                                                                       v-model="doc.description"
                                                                       label="Description"
                                                                       :rules="[v => !!v || 'Description is required']"
                                                                       rows="2"

                                                               ></v-textarea>
                                                               <label class="error" style="color:red;font-size: 12px;"  v-if="errorsDoc['doc.description']">{{errorsDoc['doc.description'][0]}}</label>
                                                           </v-col>

                                                           <v-col cols="12" sm="12" md="12">
                                                               <v-text-field   required="Tag is required"    v-model="doc.tag" label="Tag" :rules="[v => !!v || 'Tag is required']"       ></v-text-field>
                                                               <label class="error" style="color:red;font-size: 12px;"  v-if="errorsDoc['doc.tag']">{{errorsDoc['doc.tag'][0]}}</label>
                                                           </v-col>

                                                           <v-col cols="12" sm="12" md="12">
                                                               <v-file-input
                                                                       accept=".doc,.docx,.pdf,.xslx"
                                                                       v-model="doc.file_name"
                                                                       label="Upload Document"

                                                               > </v-file-input>
                                                               <label class="error" style="color:red;font-size: 12px;"  v-if="errorsDoc['file_name']">{{errorsDoc['file_name'][0]}}</label>
                                                           </v-col>

                                                           <!--<v-col cols="12" sm="12" md="12">-->
                                                           <!--<video width="100" height="100" controls>-->
                                                           <!--<source  v-bind:src="doc_url"  type=".doc,.docx,.pdf,.xslx" >-->
                                                           <!--</video>-->
                                                           <!--</v-col>-->



                                                       </v-row>
                                                   </v-container>
                                               </v-card-text>

                                               <v-card-actions >
                                                   <v-spacer></v-spacer>
                                                   <v-btn  style="background-color:deepskyblue; color:whitesmoke" color="whitesmoke" text @click="saveDoc">Save</v-btn>&nbsp;&nbsp;
                                                   <v-btn  style="background-color:red; color:whitesmoke" color="whitesmoke" text @click="closeDoc">Cancel</v-btn>
                                               </v-card-actions>
                                           </v-card>
                                       </form>
                                   </v-dialog>
                               </v-toolbar>
                           </template>

                           <template v-slot:item.file_name="{ item }">
                               <div>
                                   <a v-bind:href="item.file_name" width="100px" height="100px" download  target="_blank" >Download
                                   </a>

                               </div>
                           </template>

                           <template v-slot:item.title="{ item }">
                               <div>Title: {{item.title}}<br>
                                   Description: {{item.description}}<br>
                                   Tag: {{item.tag}}
                               </div>
                           </template>


                           <template v-slot:item.actions="{ item }">
                               <v-tooltip bottom>
                                   <template v-slot:activator="{ on, attrs }">
                                       <v-icon style="color: #3c8dbc" small class="mr-2" @click="editDoc(item)"  v-bind="attrs" v-on="on"
                                       >edit</v-icon>
                                   </template>  <span>Edit Action</span> </v-tooltip>

                               <v-tooltip bottom>
                                   <template v-slot:activator="{ on, attrs }">
                                       <v-icon style="color: red;" small @click="deleteDoc(item)" v-bind="attrs" v-on="on"  > delete  </v-icon>
                                   </template>  <span>Delete Action</span> </v-tooltip>

                               <div v-if="item.status == 1"  >
                                   <v-overlay  :value="reloader_status1"
                                   > <v-progress-circular indeterminate size="60"></v-progress-circular>
                                   </v-overlay>
                                   <v-tooltip bottom>
                                       <template v-slot:activator="{ on, attrs }">
                                           <v-icon  class="mr-2 "  small   v-bind="attrs" v-on="on"  style="color:deeppink"  @click="statusDoc(item)"  >
                                               mdi-checkbox-marked-circle
                                           </v-icon> </template>  <span>Unpublish</span> </v-tooltip>
                               </div>
                               <div v-else   style="color:green;" >
                                   <v-tooltip bottom>
                                       <template v-slot:activator="{ on, attrs }">
                                           <v-icon   class="mr-2"  small v-bind="attrs" v-on="on"    @click="statusDoc(item)"  >mdi-cancel</v-icon>   </template>
                                       <span>Publish</span> </v-tooltip>
                               </div>

                           </template>


                       </v-data-table>

                   </div>
               </div>
                   </div>



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
        name: 'Training',

        created(){

        },

           computed:{
          videoTitle() {
            return this.videoIndex === -1 ? 'New Video' : 'Edit Video'
        },
               docTitle() {
                   return this.docIndex === -1 ? 'New Document' : 'Edit Document'
               },


           },

        data() {
            return {
                absolute: true,
                reloader:false,
                reloader_1:false,
                reloader_status:false,
                table_1:false,
                table_2:false,
                reloader_status1:false,

                loader: null,
                loading: false,

                // menu: false,
                modal: false,
                menu2: false,

                dialog: false,
                videoIndex:-1,

                dialogDoc: false,
                docIndex:-1,

                 vStatusIndex:'',
                dStatusIndex:'',

                vSearch:'',
                vHeaders: [
                    { text: '#', value: 'sn' },
                    { text: 'VIDEOS', value: 'file_name', sortable: false },
                    { text: 'CONTENT', value: 'title' },
                    { text: 'ACTION', value:'actions' , sortable: false },
                ],


                dSearch:'',
                dHeaders: [
                    { text: '#', value: 'sn' },
                    { text: 'DOCUMENTS', value: 'file_name', sortable: false },
                    { text: 'CONTENT', value: 'title' },
                    { text: 'ACTION', value:'actions' , sortable: false },
                ],

                errors: [],
                errorsDoc: [],
                types: [],
                videos: [],
                 docs: [],

                   video:{
                       id:'',
                      title:'',
                       file_name:[],
                       description:'',
                       tag:'',
                       status:''

                   },

                doc:{
                    id:'',
                    title:'',
                    file_name:[],
                    description:'',
                    tag:'',
                    status:''

                },

                documentDefault:{
                    id:'',
                    title:'',
                    name:[],
                    description:'',
                    tag:'',
                    status:''

                },


                video_url:'',
                doc_url:'',
                videoDefault:{
                    id:'',
                    title:'',
                    file_name:[],
                    description:'',
                    tag:''

                },



            }







        },

        watch: {
            dialog (val) {
                val || this.closeVideo()
            },
            dialogDoc (val) {
                val || this.closeDoc()
            },



        },
        methods: {

            closeVideo () {

                this.dialog = false;
                this.$nextTick(() => {
                    this.video = Object.assign({}, this.videoDefault)
                    //   this.revPointIndex = -1
                })
            },

            closeDoc () {

                this.dialogDoc = false;
                this.$nextTick(() => {
                    this.doc = Object.assign({}, this.docDefault)
                    //   this.revPointIndex = -1
                })
            },

            previewPassport(e)
            {
                this.photo_url= URL.createObjectURL(e);
            },

            editVideo(item){

                this.videoIndex = this.videos.indexOf(item);
                this.video.id = item.id;
                this.video.title = item.title;
                this.video.description = item.description;
                this.video.tag = item.tag;
                this.video_url = item.file_name;

                this.dialog=true;

            },


            editDoc(item){

                this.docIndex = this.docs.indexOf(item);
                this.doc.id = item.id;
                this.doc.title = item.title;
                this.doc.description = item.description;
                this.doc.tag = item.tag;
                this.doc_url = item.file_name;
                this.dialogDoc=true;

            },
            saveVideo () {
                if (this.videoIndex > -1) {   // edit

                    Object.assign(this.videos[this.videoIndex], this.video);
                    this.updateVideo();

                } else {
                    this.addNewVideo()
                }
                this.closeVideo()
            },

            saveDoc () {
                if (this.docIndex > -1) {   // edit

                    Object.assign(this.docs[this.docIndex], this.doc);
                    this.updateDoc();

                } else {
                    this.addNewDoc()
                }
                this.closeDoc()
            },
              statusVideo(item){
               // alert(item.status);
                    this.reloader_status=true;
                this.video.status = (item.status === 1)?0:1;
               //   alert(this.video.status);
                  this.video.id = item.id;
                  this.video.title = item.title;
                  this.vStatusIndex =   this.videos.indexOf(item);
                  this.changeVideoStatus();
              },

            statusDoc(item){
                // alert(item.status);
                this.reloader_status1=true;
                this.doc.status = (item.status === 1)?0:1;
                this.doc.id = item.id;
                this.doc.title = item.title;
                this.dStatusIndex =   this.docs.indexOf(item);
                this.changeDocStatus();
            },



            addNewVideo: async function () {

                let formData = new FormData();

                let videodata = {
                    'title': this.video.title,
                    'description': this.video.description,
                    'tag': this.video.tag,
                };

                videodata =  JSON.stringify(videodata);
                formData.append('file_name', this.video.file_name);
                formData.append('data', videodata);
                formData.append('type', 1);


                try {
                    await axios.post('/training/videos',formData,
                        {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        }
                    ).then(response => {
                            this.dialog = false;
                            //console.log(response.data);
                            if (response.data.status == 'success') {
                                //hide modal
                                //this.$nextTick(() => {
                                   // this.video = Object.assign({}, this.videoDefault),
                                        //   $('#select_col').removeClass('hide');
                                        this.videoIndex = -1

                              //  });

                                 this.table_1 = false;


                                //display notification
                                this.flashMessage.success({
                                    title: '',
                                    message: 'Video has added successfully!',
                                    time: 5000
                                });
                                //  this.agents.unshift(response.data.data);
                            }
                        })
                        .catch((error) => {
                            console.log(error.response.data.errors);

                            if (error.response.status == 422) {
                                this.errors = error.response.data.errors;
                                this.dialog = true;
                                this.flashMessage.error({
                                    title: '',
                                    message: 'Unprocessable entity!',
                                    time: 5000
                                });
                            } else {
                                console.log('else1');
                            }
                        });
                } catch (e) {
                    //console.log('df '+e);
                    this.flashMessage.error({
                        title: '',
                        message: 'Error in uploading data!',
                        time: 5000
                    });
                }

            },


            addNewDoc: async function () {

                let formData = new FormData();

                let docdata = {
                    'title': this.doc.title,
                    'description': this.doc.description,
                    'tag': this.doc.tag,
                };

                docdata =  JSON.stringify(docdata);
                formData.append('file_name', this.doc.file_name);
                formData.append('doc', docdata);
                formData.append('type', 2);

                try {
                    await axios.post('/training/docs',formData,
                        {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        }
                    ).then(response => {
                        this.dialogDoc = false;
                        //console.log(response.data);
                        if (response.data.status == 'success') {
                            //hide modal

                            this.docIndex = -1;



                            this.table_2 = false;


                            //display notification
                            this.flashMessage.success({
                                title: '',
                                message: 'Documet has added successfully!',
                                time: 5000
                            });
                            //  this.agents.unshift(response.data.data);
                        }
                    })
                        .catch((error) => {
                            console.log(error.response.data.errors);

                            if (error.response.status == 422) {
                                this.errorsDoc = error.response.data.errors;
                                this.dialogDoc = true;
                                this.flashMessage.error({
                                    title: '',
                                    message: 'Unprocessable entity!',
                                    time: 5000
                                });
                            } else {
                                console.log('else1');
                            }
                        });
                } catch (e) {
                    //console.log('df '+e);
                    this.flashMessage.error({
                        title: '',
                        message: 'Error in uploading data!',
                        time: 5000
                    });
                }

            },





           updateVideo: async function () {

                let formData = new FormData();

                let videodata2 = {
                    'title': this.video.title,
                    'description': this.video.description,
                    'tag': this.video.tag,
                };

                videodata2 =  JSON.stringify(videodata2);
                formData.append('file_name', this.video.file_name);
                formData.append('data', videodata2);
               formData.append('type', 1);

                try {
                    await axios.post('/training/videos/update/'+this.video.id,formData,
                        {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        }
                    ).then(response => {
                        this.dialog = false;
                        //console.log(response.data);
                        if (response.data.status == 'success') {
                           // this.videoIndex = -1


                            //display notification
                            this.flashMessage.success({
                                title: '',
                                message: 'Video has added successfully!',
                                time: 5000
                            });
                            //  this.agents.unshift(response.data.data);
                        }
                    })
                        .catch((error) => {
                            console.log(error.response.data.errors);

                            if (error.response.status == 422) {
                                this.dialog = true;
                                this.errors = error.response.data.errors;

                                this.flashMessage.error({
                                    title: '',
                                    message: 'Unprocessable entity!',
                                    time: 5000
                                });
                            } else {
                                console.log('else1');
                            }
                        });
                } catch (e) {
                    //console.log('df '+e);
                    this.flashMessage.error({
                        title: '',
                        message: 'Error in uploading data!',
                        time: 5000
                    });
                }

            },

            updateDoc: async function () {

                let formData = new FormData();

                let docdata2 = {
                    'title': this.doc.title,
                    'description': this.doc.description,
                    'tag': this.doc.tag,
                };

                docdata2 =  JSON.stringify(docdata2);
                formData.append('file_name', this.doc.file_name);
                formData.append('doc', docdata2);
                formData.append('type', 2);

                try {
                    await axios.post('/training/docs/update/'+this.doc.id,formData,
                        {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        }
                    ).then(response => {
                        this.dialogDoc = false;
                        //console.log(response.data);
                        if (response.data.status == 'success') {
                            // this.videoIndex = -1


                            //display notification
                            this.flashMessage.success({
                                title: '',
                                message: 'Document has updated successfully!',
                                time: 5000
                            });
                            //  this.agents.unshift(response.data.data);
                        }
                    })
                        .catch((error) => {
                            console.log(error.response.data.errors);

                            if (error.response.status == 422) {
                                this.dialogDoc = true;
                                this.errorsDoc = error.response.data.errors;

                                this.flashMessage.error({
                                    title: '',
                                    message: 'Unprocessable entity!',
                                    time: 5000
                                });
                            } else {
                                console.log('else1');
                            }
                        });
                } catch (e) {
                    //console.log('df '+e);
                    this.flashMessage.error({
                        title: '',
                        message: 'Error in uploading data!',
                        time: 5000
                    });
                }

            },





            deleteVideo: async function(video){
                if(!window.confirm(`Are you sure you want to delete ${video.title}`)){
                    return;
                }

                try{
                    await axios.delete('/training/videos/'+video.id )
                        .then( response => {
                            // console.log(response);
                            if(response.status == 204){
                                //remove from table
                                this.videos = this.videos.filter(obj => {
                                    return obj.id != video.id;
                                });
                                //show notification
                                this.flashMessage.success({
                                    title: '',
                                    message: 'Video deleted successfully!',
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
                                    message: 'Video not found!',
                                    time: 5000
                                });
                            }else{
                                console.log('else');
                            }
                        });
                }catch (e) {
                    this.flashMessage.error({
                        title: '',
                        message: 'Error in deleting Video!',
                        time: 5000
                    });
                }
            },

            deleteDoc: async function(doc){
                if(!window.confirm(`Are you sure you want to delete ${doc.title}`)){
                    return;
                }

                try{
                    await axios.delete('/training/docs/'+doc.id )
                        .then( response => {
                            // console.log(response);
                            if(response.status == 204){
                                //remove from table
                                this.docs = this.docs.filter(obj => {
                                    return obj.id != doc.id;
                                });
                                //show notification
                                this.flashMessage.success({
                                    title: '',
                                    message: 'Document deleted successfully!',
                                    time: 5000
                                });
                            }
                        })
                        .catch( (error) => {
                            console.log(error.response.data.errors);
                            if(error.response.status == 404){
                                //console.log(error.response.data.errors['users.name'][0]);
                                this.errorsDocs = error.response.data.errors;
                                this.flashMessage.error({
                                    title: '',
                                    message: 'Document not found!',
                                    time: 5000
                                });
                            }else{
                                console.log('else');
                            }
                        });
                }catch (e) {
                    this.flashMessage.error({
                        title: '',
                        message: 'Error in deleting Document!',
                        time: 5000
                    });
                }
            },

            changeVideoStatus:async function(){
                try{
                    // alert(this.ref);
                    await axios.post('/training/status',{
                        'id': this.video.id,
                        'status': this.video.status,
                    })
                        .then( response => {

                             Object.assign(this.videos[this.vStatusIndex], response.data.data);
                            this.reloader_status = false;

                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e){
                    console.log(e);
                }

            },

            changeDocStatus:async function(){
                try{
                    // alert(this.ref);
                    await axios.post('/training/status',{
                        'id': this.doc.id,
                        'status': this.doc.status,
                    })
                        .then( response => {

                            Object.assign(this.docs[this.dStatusIndex], response.data.data);
                            this.reloader_status1 = false;

                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e){
                    console.log(e);
                }

            },


            getVideo: async function(){
                try{
                    // alert(this.ref);
                    await axios.get(`/training/videos`)
                        .then( response => {

                            this.videos = response.data.data;
                         //   Object.assign(this.remits[this.index], response.data.data)
                            //this.reloader_status = false;
                            this.table_1 = false;

                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e){
                    console.log(e);
                }

            },


            getDoc: async function(){
                try{
                    // alert(this.ref);
                    await axios.get(`/training/docs`)
                        .then( response => {

                            this.docs = response.data.data;

                        })
                        .catch( (error) => {
                            console.log(error)
                        });
                }catch(e){
                    console.log(e);
                }

            },






        },
        mounted(){

            this.getVideo();
           this.getDoc();
        },
    }

</script>
