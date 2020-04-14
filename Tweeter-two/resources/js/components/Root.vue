<template>
    <div>
        <Header id="header" />
        <parallax :speed-factor="1.3">
            <img class="head-bg-img" width="100%" height="50%" src="https://thisisrange.com/wp-content/uploads/2019/03/RM10-blog-posts2.jpg" alt="image">
        </parallax>
        <mainContent />
        <Footer />
    </div>
</template>

<script>
import Header from "./Header.vue";
import mainContent from "./mainContent.vue";
import Footer from "./Footer.vue";
import Parallax from "vue-parallaxy";

    export default {
        name: 'Root',
        components: {
            Header,
            mainContent,
            Footer,
            Parallax
        }
    }
</script>

<style scoped>
#header{
    background:darkgray;
}
</style>
