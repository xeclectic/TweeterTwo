<template>
    <div>
        <Header />
        <mainContent />
        <Footer />
    </div>
</template>

<script>
import Header from "./Header.vue";
import mainContent from "./mainContent.vue";
import Footer from "./Footer.vue";

    export default {
        name: 'Root',
        components: {
            Header,
            mainContent,
            Footer
        }
    }
</script>
