<template>

<div class="container breadcrumbs-bg">

    <ul class="breadcrumb">

        <li class="breadcrumb-item">
            <span> <a href="/"><i class="fas fa-home"></i></a> </span>
        </li>

        <li class="breadcrumb-item" v-for="(value, key) in items" :key='key'>
            <span class="breadcrumb-item active" v-if="key+1 == items.length">{{ value[1] }}</span>
            <span class="breadcrumb-item" v-else><a :href=value[0]>{{ value[1] }}</a></span>
        </li>
        
    </ul>
    
</div>
    
</template>

<script>
    export default {
        props: {
            breadcrumb: {
                type: String,
                default: '',
            }
        },
        created() {
            this.items = JSON.parse(this.breadcrumb)
        }
    }
</script>

<style lang="scss" scoped>

@import '~@@/components/default/_settings.scss';

.breadcrumbs-bg {
    position:relative;
    ul {
        background-color: $body-bg;
        li {
            font-weight:bold;
            text-transform:uppercase;
            letter-spacing:1px;
            color: #000;
            a {
                color: $primarycolor;
                text-decoration: none;
                &:hover {
                    font-weight:500;

                }
            }
        }
    }
}

////////////////////////////////////////////////////////////
// Media Query Breadcrumbs header /////////////////////////
//////////////////////////////////////////////////////////

@media all and (max-width: 760px) {
    .breadcrumbs-bg {
        ul {
            li {
                font-size:0.7em;
            }
        }
    }
}

</style>