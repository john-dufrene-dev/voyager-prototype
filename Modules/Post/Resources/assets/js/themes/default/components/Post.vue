<template>
    <div>
        
        <pulse-loader class="post-loading" :loading="loading" :color="color" :size="size"></pulse-loader>

        <transition name="fade">

            <div v-if="loading == false">

                <div v-if="is_translatable == true">
                    <div id="page-title" class="container mt-4 h1-page-title">
                        <h1 class="text-center">{{ translations.title }}</h1>
                    </div>
                    <a :href="post.link_to_category">{{ translations.category.name }}</a> 
                    <div v-html="translations.description"></div> 
                    <img :src="post.image_medium"/>
                </div>
                
                <div v-else>
                    <div id="page-title" class="container mt-4 h1-page-title">
                        <h1 class="text-center">{{ post.title }}</h1>
                    </div>
                    <a :href="post.link_to_category">{{ category.name }}</a> 
                    <div v-html="post.description"></div> 
                    <img :src="post.image_medium"/>
                </div>

            </div>

        </transition>

    </div>

</template>

<script>

    import PulseLoader from 'vue-spinner/src/PulseLoader.vue'

    export default {
        data () {
            return {
                post: [],
                category: [],
                translations: [],
                is_translatable: false,
                errored: false,
                color: '#00bc88',
                size: '37px',
                loading: true,
            }
        },
        props: {
            link: String,
        },
        components: {
            PulseLoader,
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

                    this.loading = false
                })
                .catch(err => {
                    console.log(err)
                    this.errored = true
                    this.loading = false
            })
        }
    }
</script>

<style>

    .post-loading {
        text-align:center;
        padding: 20px;
        margin-top:50px;
    }

    .fade-enter-active, .fade-leave-active {
        transition: opacity 2s;
    }
    .fade-enter, .fade-leave-to {
        opacity: 0;
    }

</style>