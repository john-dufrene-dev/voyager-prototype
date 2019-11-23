<template>
    <div>
        
        <pulse-loader class="post-loading" :loading="loading" :color="color" :size="size"></pulse-loader>

        <transition name="fade">

            <div v-if="loading == false">

                <b-container>
                    <b-row>

                        <b-col md="7">

                            <p>
                                <a :href="post.link_to_category" v-if=is_translatable>
                                {{ translations.category.name }}</a>
                                <a :href="post.link_to_category" v-else>{{ category.name }}</a>
                            </p>
                            
                            <p v-if=is_translatable> {{ $t("post.published_date") }} : {{ translations.published_date }} </p>
                            <p v-else> {{ $t("post.published_date") }} : {{ post.published_date }} </p>

                            <p v-if=is_translatable>{{ translations.short_description }}</p>
                            <p v-else>{{ post.short_description }}</p>
                        </b-col>

                        <b-col md="5">
                            <b-img-lazy v-bind="imgProps" :src="post.image_medium"></b-img-lazy>
                        </b-col>

                    </b-row>
                </b-container>

                <b-container class="mt-4">
                    <b-row>

                        <b-col md="12">
                            <div v-html="translations.description" v-if="is_translatable == true"></div>
                            <div v-html="post.description" v-else></div>
                        </b-col>
                        
                    </b-row>
                </b-container>

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
                imgProps: {
                    fluidGrow: true,
                    class: 'rounded'
                },
            }
        },
        props: {
            link: String,
        },
        components: {
            PulseLoader,
        },
        created() {
            this.getPost()
        },
        methods: {
            getPost () {
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
            },
        },
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