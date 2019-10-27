<template>

    <div v-if="is_translatable == true">
        <a :href="post.link_to_category">{{ translations.category.name }}</a> 
        <div v-html="translations.description"></div> 
        <img :src="post.image_medium"/>
    </div>
    <div v-else>
        <a :href="post.link_to_category">{{ category.name }}</a> 
        <div v-html="post.description"></div> 
        <img :src="post.image_medium"/>
    </div>

</template>

<script>
    export default {
        data () {
            return {
                post: [],
                category: [],
                translations: [],
                is_translatable: false,
                errored: false,
            }
        },
        props: {
            link: String,
        },
        mounted() {
            axios.get('/api/posts/' + this.link.trim())
                .then(res => {
                    this.post = res.data.data;
                    this.category = res.data.data.category;
                    this.is_translatable = res.data.data.model.is_translatable;
                    if(true == this.is_translatable) {
                        this.translations = res.data.data.translations;
                    }

                    console.log(this.post)
                })
                .catch(err => {
                    console.log(err)
                    this.errored = true
            })
        }
    }
</script>