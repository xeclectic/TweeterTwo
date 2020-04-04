<template>
<div class="container">
    <div class="row">
        <div class="col s2 m2 l2 left-align">
            <!-- link to content container -->
            <a href='#'>About Us</a>
        </div>
        <div class="col s2 m6 l6">
            <a href='#'>Connections</a>
        </div>
        <div class="col s6 m1 l2 right-align">
            <a href='#'>Features</a>
        </div>
        <div class="col s2 m2 l2 right-align">
            <a href='#'>Our Team</a>
        </div>
    </div>
    <div>
        <img id="logo" class="responsive-img" src="https://webstockreview.net/images/clipart-mountain-transparent-background-1.png">
            <p class="col s2 m2 l2 center-align" >Love of Equine</p>
                <div class="z-depth-1" id="heading-divider-right"></div>
                <div class="z-depth-1" id="heading-divider-left"></div>
    </div>
    <div id="head-bg-img">
        <img class="responsive-img" src="https://fei-fan-production.s3.amazonaws.com/s3fs-public/FEI-Reining-Givrins-Review-22-CROPPED.jpg">
    </div>
</div>
</template>

<script>
export default {
    methods: {

    }

}
</script>

<style scoped>

.row{
    padding: 0px;
    margin-top: 40px;
}

#logo{
    position: absolute;
    top: 0vh;
    right: 46vw;
    width: 100px;
    height: 100px;
}

#heading-divider-right{
    position:relative;
    width: 30vw;
    height: 1px;
    bottom: 2vh;
    background-color: aliceblue;
}

#heading-divider-left{
    position:relative;
    left: 40vw;
    width: 30vw;
    height: 1px;
    bottom: 2vh;
    background-color: aliceblue;
}

#head-bg-img{
    position: relative;
    right: 15vw;
    width: 100vw;
}

@media screen and (max-width: 600px){
    .responsive-img{
        position: absolute;
        right: 40vw;
        top: 0vh;
    }
}

</style>
