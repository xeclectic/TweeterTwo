<template>
<div>
    <div class="row">
        <div class="col s2 m2 l2 right-align">
            <!-- link to content container -->
            <a href='#'>About Us</a>
        </div>
        <div class="col s2 m2 l2 right-align">
            <a href='#'>Connections</a>
        </div>
        <div class="col s6 m4 l5 right-align">
            <a href='#'>Features</a>
        </div>
        <div class="col s2 m2 l2 right-align">
            <a href='#'>Our Team</a>
        </div>
    </div>
    <div>
        <img id="logo" class="responsive-img" src="https://webstockreview.net/images/clipart-mountain-transparent-background-1.png">
            <p id="header-text" class="col s2 m2 l2 center-align" >Pacific Crest - Appalachian - Continental Divide</p>
                <div class="z-depth-1" id="heading-divider-right"></div>
                <div class="z-depth-1" id="heading-divider-left"></div>
    </div>
</div>
</template>

<script>
export default {
}
</script>

<style scoped>
.row{
    padding: 0px;
    margin-top: 40px;
}

#logo{
    position: absolute;
    bottom: 4vh;
    right: 46vw;
    width: 100px;
    height: 100px;
}

#header-text{
    position: relative;
    bottom: 2vh;
}

#heading-divider-right{
    position:relative;
    left: 5vw;
    width: 30vw;
    height: 1px;
    bottom: 4vh;
    background-color: gray;
}

#heading-divider-left{
    position:relative;
    left: 65vw;
    width: 30vw;
    height: 1px;
    bottom: 4vh;
    background-color: gray;
}

#head-bg-img{
    position: relative;
    right: 15vw;
    width: 100vw;
}


</style>
