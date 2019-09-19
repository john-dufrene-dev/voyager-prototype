<template>

    <div>
        <a :href="link">{{ category }}</a> 
        <p v-html="body"></p> 
        <img :src="image"/> 
    </div>

</template>

<script>
    export default {
        props: {
            link: String,
            category: String,
            body: String,
            image: String
        },
        mounted() {
            if (process.env.MIX_ENV_MODE != 'production') {
                console.log('Component mounted.')
            }
        }
    }
</script>