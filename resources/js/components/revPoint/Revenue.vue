<template>
    <div>
        <div class="page-heading">
            <h1>REVENUE</h1>
            <ol class="breadcrumb">
                <li>
                    <router-link to="/" exact>
                        <i class="fa fa-dashboard"> </i>
                        <span class="nav-label">Home</span>
                    </router-link>
                </li>
                <li class="active">Revenue</li>
            </ol>
        </div>

        <div class="page-body">

            <div class="panel panel-default">
                <div class="panel-heading">REVENUE TABLE</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table" id="revenue_table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Service</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                                <th>Payment Category</th>
                                <th>Transaction Reference</th>
                                <th>Agent</th>
                                <th>Revenue point(lga)</th>
                                <th>Invoice</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr v-for="revenue in revenues" v-bind:key="revenue.id">
                                    <td>{{revenue.id}}</td>
                                    <td>{{revenue.service}}</td>
                                    <td>{{revenue.amount}}</td>
                                    <td>{{ payment_type(revenue.payment_type) }}</td>
                                    <td>{{revenue.payment_category}}</td>
                                    <td>{{revenue.transaction_reference}}</td>
                                    <td>{{revenue.agent}}</td>
                                    <td>{{revenue.revenue_point }} ({{revenue.lga}}) </td>
                                    <td>{{revenue.invoice}}</td>
                                    <td><label class="label" v-bind:class="{'label-success':revenue.status == 'success', 'label-warning':revenue.status == 'pending'}">{{revenue.status}}</label></td>
                                    <td>
                                        <!--<button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>-->
                                        <!--<button class="btn btn-danger btn-sm" v-on:click="deleteRevenue(revenue)"><i class="fa fa-trash"></i></button>-->
                                    <!---->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        name: "Revenue",
        data(){
            return {
                revenues: [],
                revenue:{
                    'service': '',
                   // 'user': '',
                    'amount': '',
                    'payment_type':'',
                    'payment_category':'',
                    'transaction_reference':'',
                    'revenue_point': '',  //{ 'name':'', 'lga':{ 'name':'' }   },
                    'agent': '', // { 'user':{ 'name':'' } },
                    'invoice': '',
                    'status': '',
                    'service':'' //{  'name':''  }
                },
                errors:[],
            }
        },
        methods:{
            deleteRevenue: async function(revenue){
                if(!window.confirm(`Are you sure you want to delete revenue transaction ${revenue.transaction_reference}`))
                    return ;

                try {
                    await axios.delete(`/revenue/${revenue.id}`)
                        .then( response => {
                            //console.log(response);
                            if(response.status == 204){
                                this.revenues = this.revenues.filter(obj => {
                                    return obj.id != revenue.id;
                                })
                                this.flashMessage.success({
                                   title: '',
                                   message: 'Revenue deleted successfully!',
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
                                   message: 'Revenue not found!',
                                   time: 5000
                                });
                            }else{
                                console.log('else');
                            }
                        });
                }catch (e) {
                    this.flashMessage.error({
                        title: '',
                        message: 'Error in deleting Revenue!',
                        time: 5000
                    });
                }
            },
            payment_type(revenue){
                if(revenue == 'cash') return 'Cash'
                else if (revenue == 'bank') return 'Bank'
                else if (revenue == 'card_bank') return 'Bank Transfer'
                else if (revenue == 'card_ussd') return 'Bank '

            }
        },
        mounted() {
            axios.get('/revenue')
                .then( response => {
                    //console.log(response);
                    this.revenues = response.data.data;
                })
                .catch( (error) => { console.log(error) });
        },
//        computed:{
//            payment_type(payment){
//                if(payment == 'cash') return 'Cash'
//                else if (payment == 'bank') return 'Bank'
//                else if (payment == 'bank_card') return 'Bank Transfer'
//                else return 'Bank USSD'
//
//            }
//
//        }

    }
</script>
