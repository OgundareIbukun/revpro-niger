<template>
    <div>
        <div class="page-heading">
            <h1> CHANGE PASSWORD </h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
                        <i class="fa fa-dashboard"> </i>
                        <span class="nav-label"> Home </span>
                    </router-link>
                </li>
                <li class="active"> Change Password </li>
            </ol>
        </div>

        <div class="page-body">
            <div class="panel panel-default">
                <div class="panel-heading d-flex">
                    <span> Change Password </span>
                </div>

                <div class="panel-body">

                    <form v-on:submit.prevent="changePassword">
                        <div class="modal-body">
                            <div class="form-group">
                               <v-text-field
                                        v-model="old_password"
                                        :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                                        :rules="[rules.required, rules.min]"
                                        :type="show1 ? 'text' : 'password'"
                                        name="input-10-1"
                                        label="Old Password"
                                        hint="At least 8 characters"
                                        counter
                                        class="input-group--focused"
                                        @click:append="show1 = !show1"
                                ></v-text-field>
                                <label class="error" v-if="errors['old_password']">{{errors['old_password'][0]}}</label>
                            </div>
                            <div class="form-group">
                                <v-text-field
                                        v-model="new_password"
                                        :append-icon="show2 ? 'mdi-eye' : 'mdi-eye-off'"
                                        :rules="[rules.required, rules.min]"
                                        :type="show1 ? 'text' : 'password'"
                                        name="input-10-2"
                                        label="New Password"
                                        hint="At least 8 characters"
                                        class="input-group--focused"
                                        counter
                                        @click:append="show2 = !show2"
                                ></v-text-field>
                                <label class="error" v-if="errors['new_password']">{{errors['new_password'][0]}}</label>
                            </div>

                            <div class="form-group">
                               <v-text-field
                                        v-model="confirm_password"
                                        :append-icon="show3 ? 'mdi-eye' : 'mdi-eye-off'"
                                        :rules="[rules.required, rules.min]"
                                        :type="show3 ? 'text' : 'password'"
                                        name="input-10-2"
                                        label="Confirm Password"
                                        hint="At least 8 characters"
                                        class="input-group--focused"
                                        counter
                                        @click:append="show3 = !show3"
                                ></v-text-field>
                                <label class="error" v-if="errors['confirm_password']">{{errors['confirm_password'][0]}}</label>
                            </div>

                            <div class="form-group">
                                <v-btn  type="submit" style="background-color: #3c8d" color="info" class=" mb-2" >Change Password</v-btn>
                            </div>
                        </div>
                    </form>
                </div>
                </div>


            </div>

        </div>


    </div>

</template>

<script>

    export default {
        name: 'Password',

        data() {
            return {

                show1: false,
                show2: true,
                show3: false,

                password: 'Password',
                rules: {
                    required: value => !!value || 'Required.',
                    min: v => v.length >= 8 || 'Min 8 characters',
                },

                old_password:'',
                new_password:'',
                confirm_password:'',
                 errors:[],
            }
        },

        methods: {

               changePassword: async function(){

                  try {

                   const  response =  await axios.post('/changepassword', {
                             'old_password': this.old_password,
                             'new_password':this.new_password,
                             'confirm_password':this.confirm_password

                       })
                           .then(response => {
                               if(response.data.status == 'success'){

                                   this.flashMessage.success({
                                       title: '',
                                       message: 'Password Changed successfully!',
                                       time: 5000
                                   });
                               }
                                else {
                                   console.log(error.response.data.errors);
                                   this.errors = error.response.data.errors;
                                    alert(this.errors);

                               }
                           })
                           .catch( (error) => {
                               console.log(error.response.data.errors);

                               if(error.response.status == 422 ) {
                                   this.errors = error.response.data.errors;
                                 //  alert(this.errors);
                                   this.flashMessage.error({
                                       title: '',
                                       message: 'Unprocessable entity',
                                       time: 5000
                                   });
                               }
                                else {
                                   this.errors = error.request.data.errors;

                               }
                           });
                   }catch(e) {


                       // console.log(error.response.data.errors);

                       this.flashMessage.error({
                           title: '',
                           message: 'old password or new password incorrect',
                           time: 5000
                       });
                   }



            },

            addNewRevenuePoint: async function(){
                try {
                    // alert(this.multi.value);

                    await axios.post('/revenuepoint', {

                    })
                        .then(response => {
                            if(response.data.status == 'success'){
                                this.dialog = false;

                                this.flashMessage.success({
                                    title: '',
                                    message: 'Revenue Point added succesfully!',
                                    time: 5000
                                });
                               // this.revenuepoints.unshift(response.data.data);
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

        },
        mounted(){

        },
    }

</script>
