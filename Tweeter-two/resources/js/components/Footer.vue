<template>
    <div>
        <div id="top-divider"></div>
        <img id="hikers" alt="hikers" src="https://she-explores.com/wp-content/uploads/2017/08/day-1-CaitBourgaultPhotography-2.jpg">
        <div id="association-bg">
            <p data-aos="fade-down"
          data-aos-duration="500" id="association-text">In Association With</p>
        </div>
        <img data-aos="fade-up"
          data-aos-duration="400" alt="Pacific-Crest-Trail" id="trail-pct" src="https://photos.thetrek.co/wp-content/uploads/2017/06/PCTTree.jpg">
        <img data-aos="fade-up"
          data-aos-duration="600" alt="Condinental-Divide-Trail" id="trail-cdt" src="https://beaverheadenduranceruns.com/wp/wp-content/uploads/2016/02/cd-trail-run-september-2013-138.jpg">
        <img data-aos="fade-up"
          data-aos-duration="800" alt="Appalachian-Trail" id="trail-at" src="https://hikershostel.org/images/featured/a-trail-featured.jpg">
        <div id="association-bg2"></div>
        <img id="footer-img" alt="Horse-Packing" src="https://horsej-intellectsolutio.netdna-ssl.com/cdn/farfuture/78gD1r6uwKT0OgKI1V4MN1pHbaFp8PLIuU5gRUAR4ac/mtime:1543626992/files/2018/trest-img_8137_0.jpg">
        <p id="footer-border">this is the footer</p>
    </div>
</template>

<script>

export default {
    
}
</script>

<style scoped>
*{
    margin: 0;
    padding: 0;
}

#footer-img{
    position: absolute;
    top: 630vh;
    width: 100%;
    height: 1000px;
}

#association-text{
     position: relative;
  background: white;
  text-align: center;
  font-size: 50px;
  bottom: 50vh;
  opacity: 0.5;
}

#association-bg{
    position: relative;
    background: #2b2d2f;
    height: 500px;
    bottom: 90vh;

}

#association-bg2{
    position: relative;
    background: #50c878;
    height: 350px;
    bottom: 100vh;
    transform-origin: bottom left;
   transform: skewY(3deg);
}

#top-divider{
    position: relative;
    background: #50c878;
    height: 150px;
    bottom: 200vh;
}
#hikers{
    position: absolute;
    top: 440vh;
    height: 1000px;
}

#trail-pct{
    position: absolute;
    width: 350px;
    height: 250px;
     top: 565vh;
     left: 50px;
    
}

#trail-cdt{
    position: absolute;
    width: 350px;
    height: 250px;
     top: 565vh;
     left: 500px;
}

#trail-at{
    position: absolute;
    width: 350px;
    height: 250px;
     top: 565vh;
     left: 1000px;
}

#footer-border{
    background: #2b2d2f;
    width:100%;
    height: 150px;
    color: white;
}

</style>