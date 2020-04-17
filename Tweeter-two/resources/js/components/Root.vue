<template>
  <div>
    <Header id="header" />
    <parallax :speed-factor="1.5">
      <img
        id="head-bg-img"
        class="responsive-img"
        width="100%"
        height="50%"
        src="https://i.imgur.com/cl8DavV.jpg"
        alt="backpacking"
      />
    </parallax>
    <mainContent />
    <Footer id="footer" />
  </div>
</template>

<script>
import Header from "./Header.vue";
import mainContent from "./mainContent.vue";
import Footer from "./Footer.vue";
import Parallax from "vue-parallaxy";

export default {
  name: "Root",
  components: {
    Header,
    mainContent,
    Footer,
    Parallax
  }
};
</script>


<style scoped>
* {
  margin: 0;
  padding: 0;
}
#head-bg-img {
  position: relative;
}

#header {
  position: relative;
}

#middle-img {
  position: relative;
  bottom: 10vh;
}

</style>
