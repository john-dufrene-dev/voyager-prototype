<template>

    <div class="container">
        <div id="page-title" class="mt-4 text-center">
            <h1> {{ title }} </h1>
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
            }
        }
    }
</script>

<style lang="scss" scoped>

@import '~@@/components/default/_settings.scss';

#page-title {
    font-family: $nunito-bold;
    margin-bottom:50px;
    position: relative;
    letter-spacing: 2px;
    text-transform: uppercase;
    &:after {
        content: '';
        position: absolute;
        display: block;
        width: 150px;
        height: 2px;
        background: $primarycolor;
        left: 0;
        right:0;
        top: 72px;
        margin: auto;
    }
    h1 {
        font-size: 45px;
    }
}

////////////////////////////////////////////////////////////
// Media Query Navbar header //////////////////////////////
//////////////////////////////////////////////////////////

@media all and (max-width: 760px) {

    #page-title {
        margin-bottom: 40px;
        &:after {
            content: '';
            width: 100px;
            top: 40px;
        }
        h1 {
            font-size: 22px;
        }
    }
    
}

</style>