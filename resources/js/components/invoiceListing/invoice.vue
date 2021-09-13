<template>
    <div>



        <div id="contents" class="container hide">
            <v-overlay
                    :value="preloader"
            > <v-progress-circular indeterminate size="80"></v-progress-circular>
            </v-overlay>
            <!--<a href="https://bauchi.revenue.ng/invoiceListing"><div style="float:left" class="no-print ">-->
            <!--<img src="assets/images/back.png" style="width:200px" alt="Back"/></div></a>-->
            <div  class="no-print"><v-btn name='btn' class="btn btn-info" @click="print">Print</v-btn>  </div>
            <!--&nbsp;&nbsp;<div  class="no-print"><a name='hom' class="btn btn-success"  href="/">Home</a>  </div>-->


            <div class='watermark'>
                <div id='invoice' >
                    <table id='company' class="table table-borderless" >
                        <tr>
                            <td><img src='assets/images/bauchi.png' width='125' height='125' /></td>
                            <td class='text-right' style="float:right" >
                                <div>Ahmadu Bello Way, Bauchi</div>
                                <div>PMB: 0029</div>
                                <div>https://birs.bu.gov.ng</div>
                                <div>info@birs.bu.gov.ng</div>
                            </td>
                        </tr>
                    </table>
                    <div  v-if="this.status == 'success'" id='bigi'>RECEIPT</div>
                    <div  v-else  id='bigi'>INVOICE</div>

                    <br/><br/>

                    <div style='float:right;margin-top:-60px'>
                        <img    :src="this.image"     alt='QRCODE'/>
                    </div>
                    <table id='billship' class="table table-borderless">
                        <tr>
                            <td><strong>BILL TO</strong><br>{{name}}  <br> </td>
                            <td style='text-align:right'><strong>BILL BY :</strong> Bauchi Internal Revenue Service<br><strong class='text-center'><i>Bauchi State</i></strong><br>
                                <strong>Invoice No:</strong> {{invoice}}<br>
                                <strong>Txn Ref:</strong> {{ref}}<br>
                                <strong>Paid At :</strong>  {{ paid_at | moment("dddd, MMMM Do YYYY") }}</td>
                        </tr></table>
                    <table id='items'  class="table table-borderless" >
                        <tr>
                           <th>Item</th><th>Quantity</th><th>Unit Price</th><th>Amount</th>
                        </tr>
                        <tr>
                            <td >
                                <div>{{description}}</div></td>
                            <td>1</td>
                            <td>{{  (new Intl.NumberFormat('en-NG', {
                                style: 'currency',
                                currency: 'NGN'
                            })).format(amount) }}</td>
                            <td>{{  (new Intl.NumberFormat('en-NG', {
                                style: 'currency',
                                currency: 'NGN'
                            })).format(amount) }}</td>

                        </tr>
                        <tr class='ttl'>
                            <td class='right' colspan='3'>GRAND TOTAL</td><td>{{  (new Intl.NumberFormat('en-NG', {
                            style: 'currency',
                            currency: 'NGN'
                        })).format(amount) }}</td>
                        </tr>
                    </table >

                    <div  v-if="this.status == 'success'" >
                     <div  id="bigi">PAID</div>
                        <div id="notes" style="margin-top:-5px;font-size:12px">
                            Payment Info<br>Transaction Reference: {{ref}}
                            <br>Paid With Moneta<br></div>

                    </div>
                     <div v-else >
                         <div id="bigi">NOT PAID</div>
                         <div id="notes" style="margin-top:-5px;font-size:12px">DISCLAIMER<br>
                             THIS IS NOT A RECEIPT<br>
                             PAYMENT INSTRUCTIONS: For Bank Payment, please proceed to any bank with a printout of your invoice and request to make a Moneta payment using your transaction reference<br></div>
                     </div>


                </div>
            </div>






            <!--<div class="card o-hidden border-0 shadow-lg my-5" >-->
            <!--<div class="card-body p-0">-->
            <!--<div class="row ">-->
            <!--&lt;!&ndash;<div class="col-lg-5 d-none d-lg-block"></div>&ndash;&gt;-->
            <!--<div class="col-lg">-->
            <!--<div class="p-5">-->
            <!--<div class="text-center">-->

            <!--&lt;!&ndash;<h4 class="h4 text-gray-900 mb-5">Payment Verification</h4>&ndash;&gt;-->

            <!--</div>-->
            <!--<div class="row">-->
            <!--<div  id="message-alert" class="col-lg-12"> </div>-->
            <!--<div  id="ref" class="col-lg-12"></div>-->
            <!--<div id="content" class="col-lg-12"></div>-->


            <!---->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->

            <!--</div>-->

        </div>
    </div>



</template>

<script>

    // import this component
    import flatPickr from 'vue-flatpickr-component';
    import 'flatpickr/dist/flatpickr.css';
    import 'flatpickr/dist/themes/material_blue.css';



    export default {
        name: "Receipt",

        components: {
            flatPickr,


        },

        data(){
            return {

                image: 'https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl='+this.$shared.app_url+'/%23/invoice/'+this.$route.params.ref,

                preloader:true,
                src:'',
              //  user:{
                    name:'',
                    ref:'',
                    invoice:'',
                    amount:'',
                     description:'',
                    paid_at:'',
              payment_channel:'',
               status:''




              //  }
            }
        },

        created(){
            this.getInvoiceDetails();
        },
        watch: {

            $route:'getInvoiceDetails'
        },

        methods:{

            getInvoiceDetails: async function () {
                try {
                    jQuery.noConflict();

                        await axios.get(`/invoice/${this.$route.params.ref}`  )
                            .then(response => {
                                this.name = response.data.data.name;
                                this.ref = response.data.data.ref;
                                this.invoice = response.data.data.invoice;
                                this.paid_at = response.data.data.paid_at;
                                this.description = response.data.data.description;
                                this.payment_channel = response.data.data.payment_channel;
                                this.amount = response.data.data.amount;
                                this.status = response.data.data.status;
                               // Object.assign(this.user, response.data.data);
                                $('#contents').removeClass('hide');

                                this.preloader = false;
                            })
                            .catch((error) => {
                                console.log(error)
                            });

//



                } catch (e) {
                    console.log(e);
                }


            },

            print(){
                return window.print();
            }



        },
        mounted() {
            //this.getQR();
        }
    }
</script>
<style scope>

</style>