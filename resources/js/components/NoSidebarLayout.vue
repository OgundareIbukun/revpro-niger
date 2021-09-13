<template>
    <div>

        <!--<Sidebar></Sidebar>-->

            <router-view></router-view>

        <FlashMessage position="right bottom"></FlashMessage>



    </div>
</template>

<script>


    export default {
        name: "NoSideLayout",
        components:{
            //dashboard
        //    Sidebar,

        },

    }
</script>

<style scoped>

</style>