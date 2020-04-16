<template>
    <div>
        <Header id="header" />
        <parallax class="head-bg-img" :speed-factor="1.3">
            <img width="100%" height="50%" src="https://i.imgur.com/cl8DavV.jpg" alt="backpacking">
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
.head-bg-img{
    position: relative;
    margin-bottom: 100px;
}
#header{
    position: relative;
}
</style>
