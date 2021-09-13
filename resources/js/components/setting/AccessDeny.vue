<template>
    <div>

        <div class="text-center"><img  src="assets/images/access_deny.png" alt="Access Deny "></img> </div>

    </div>


    </div>

</template>

<script>

    export default {
        name: 'Password',

        data() {
            return {
            }
        },

        methods: {

        },
        mounted(){

            this.flashMessage.error({
                title: '',
                message: 'You are not authorized to view this page',
                time: 60000
            });

        },
    }

</script>
