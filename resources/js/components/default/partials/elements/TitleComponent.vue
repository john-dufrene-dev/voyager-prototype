<template>
    <div class="container">
        <div id="page-title" class="mt-4 h1-page-title">
            <h1 class="text-center"> {{ title }} </h1>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            title: String,
        },
        mounted() {
            if(this.title == undefined) {
                console.log('ERROR : property title is undefined')
                console.log(this.title)
            }
        }
    }
</script>

<style lang="scss">

@import '~@/components/default/_settings.scss';

#page-title {
    margin-bottom:50px;
}

.h1-page-title {
    position: relative;
    font-size: 35px;
    font-weight: 500;
    letter-spacing: 2px;
    text-transform: uppercase;
    &:after {
        content: '';
        position: absolute;
        display: block;
        width: 150px;
        height: 2px;
        background: $primarycolor;
        background-repeat: no-repeat;
        left: 0;
        right:0;
        top: 52px;
        margin: auto;
    }
}

////////////////////////////////////////////////////////////
// Media Query Navbar header //////////////////////////////
//////////////////////////////////////////////////////////

@media all and (max-width: 760px) {

    #page-title {
        margin-bottom:20px; 
    }

    .h1-page-title {
        font-size: 22px;
        margin-bottom: 40px;
        &:after {
            content: '';
            width: 100px;
            top: 40px;
        }
    }
}

</style>