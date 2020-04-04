<template>
    <div>
        <Header />
        <parallax :speed-factor="1.3">
            <img class="head-bg-img" width="100%" height="100%" src="https://fei-fan-production.s3.amazonaws.com/s3fs-public/FEI-Reining-Givrins-Review-22-CROPPED.jpg" alt="image">
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
