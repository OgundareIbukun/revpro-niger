<template>
    <div>
        <div>
            <form v-on:submit.prevent="Initialize" >

                <div class="form-group has-feedback">
                    <input type="text" class="form-control"  value="" placeholder="Registered Phone" name="phone"  v-model="phone" required   autocomplete="" />
                    <span class="glyphicon glyphicon-phone form-control-feedback"><strong></strong></span>
                    <span >
                   <strong class="text-danger" v-if="errors['phone']">{{errors.phone[0]}}</strong>
                </span>
                </div>

                <div class="row">
                    <div class="col-xs-8">
                        <!-- <div class="checkbox icheck">
                          <label>
                            <input type="checkbox"> Remember Me
                          </label>
                        </div>  -->
                    </div><!-- /.col -->
                    <div align="center" class="col-xs-4">
                        <input type="submit" style="background-color:#07B871" class="btn btn-primary btn-block btn-flat" value="Send OTP" />
                    </div><!-- /.col -->
                </div>
            </form>
        </div>
        <div class="modal fade" ref="Modal1" id="verifyModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Verify OTP</h4>
                    </div>
                    <form v-on:submit.prevent="verifyOTP">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>OTP</label>
                                <input type="text" id="otp" name="otp" v-model="otp" class="form-control" placeholder="OTP " />
                                <label class="error" v-if="errors['otp']">{{errors.otp[0]}}</label>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i>VERIFY</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" ref="Modal2" id="resetModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel1">Reset Password</h4>
                    </div>
                    <form v-on:submit.prevent="resetPassword">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="text" id="newPassword" name="newPassword" v-model="newPassword" class="form-control" placeholder="New Password " />
                                <label class="error" v-if="errors['new_password']">{{errors.new_password[0]}}</label>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="text" id="confirmPassword" name="confirmPassword" v-model="confirmPassword" class="form-control" placeholder="Confirm Password " />
                                <label class="error" v-if="errors['confirm_password']">{{errors.confirm_password[0]}}</label>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>RESET</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</template>

<script>

    // import this component
    // import flatPickr from 'vue-flatpickr-component';
    //import 'flatpickr/dist/flatpickr.css';
    //import 'flatpickr/dist/themes/material_blue.css';


    export default {
        name: "resetPassword",

        data(){
            return {
                dialog: false,
                dialog2: false,

                phone:'',
                otp:'',
                newPassword:'',
                confirmPassword:'',
                errors:[],
            }
        },

        methods:{

            Initialize:async function(){
                try {
                    jQuery.noConflict();
                    await axios.post('/resetpassword/initialize', {
                        phone: this.phone
                    })
                        .then( response => {

                            //console.log(response.data);
                            if(response.data.status == 'success'){
                                $('#verifyModal').modal('show');
                                   //display notification
                                this.flashMessage.success({
                                    title: '',
                                    message:response.data.data,
                                    time: 5000
                                });
                                //this.$refs.Modal1 = true;

                            }
                        })
                        .catch( (error) => {
                            console.log(error.response.data.errors);

                            if(error.response.status == 422){
                                this.errors = error.response.data.error;
                                console.log(error.response.data.error);
                                //this.dialog = true;
                                this.flashMessage.error({
                                    title: '',
                                    message:'Unprocessed Entity',
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
                        message: 'Error occured!',
                        time: 5000
                    });
                }

            },

            verifyOTP:async function(){
                try {
                    jQuery.noConflict();
                    await axios.post('/resetpassword/verify', {
                        phone: this.phone,
                        otp: this.otp
                    })
                        .then( response => {

                            //console.log(response.data);
                            if(response.data.status == 'success'){
                               // this.$refs.Modal1 = false;
                               // this.$refs.Modal2 = true;
                                $('#verifyModal').modal('hide');
                                $('#resetModal').modal('show');
                                //display notification
                                this.flashMessage.success({
                                    title: '',
                                    message:response.data.data,
                                    time: 5000
                                });
                            }
                        })
                        .catch( (error) => {
                            console.log(error.response.data.error);

                            if(error.response.status == 422){
                                this.errors = error.response.data.error;
                                //this.$refs.Modal1 = true;
                                  $('#verifyModal').modal('show');
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
                        message: 'Error occured!',
                        time: 5000
                    });
                }

            },

            resetPassword:async function(){

                //   alert(this.agent.dept);
                try {
                    jQuery.noConflict();
                    await axios.post('/resetpassword/store', {
                        phone: this.phone,
                        new_password: this.newPassword,
                        confirm_password: this.confirmPassword,
                    })
                        .then( response => {
                            //this.dialog = false
                            //console.log(response.data);
                            if(response.data.status == 'success'){
                                //hide modal
                                // $('#agentsModal').modal('hide');
                                //this.$refs.Modal2 = false;
                                $('#resetModal').modal('hide');
                                //display notification
                                this.flashMessage.success({
                                    title: '',
                                    message: 'Password Changed!',
                                    time: 5000
                                });
                                //  this.agents.unshift(response.data.data);

                                setTimeout(() => { this.$router.go(-1) }, 3000);
                               // setTimeout(() => { this.$router.push('/login') }, 3000);
                            }
                        })
                        .catch( (error) => {
                            console.log(error.response.data.error);

                            if(error.response.status == 422){
                                this.errors = error.response.data.message;
                                $('#resetModal').modal('show');
                                this.flashMessage.error({
                                    title: '',
                                    message: error.response.data.message,
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
                        message: 'Error occured!',
                        time: 5000
                    });
                }

            },

            gotoLogin:async function(){
                   // jQuery.noConflict();
                    await axios.get('/')
                        .then( response => {
                        })
                        .catch( (error) => {
                        });


            },

        },
        mounted() {

        }
    }
</script>
<style scope>
</style>