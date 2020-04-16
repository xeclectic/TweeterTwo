<template>
    <div>
        <div class="slantedDivA"></div>
        <div class="test"></div>
    </div>
</template>

<script>
export default {
}
</script>

<style scoped>
.test{
    background: lightseagreen;
    margin: 0 auto;
    width: 100%;
    height: 300px;
    opacity: 0;
}

.slantedDivA{
    position: relative;
    bottom: 20vh;
    width: 100%;
    height: 500px;
    background: #2B2D2F;
    transform-origin: top right;
    transform: skewY(4deg)
}

.slantedDivA::after{
    position: absolute;
    width:100%;
    height: 100%;
    content: '';
    background: inherit;
    /* top: 0;
    right: 0;
    bottom: 0;
    left: 0; */
    /* transform-origin: top right;
    transform: skewY(-4deg); */
}

</style>
