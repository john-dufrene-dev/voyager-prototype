<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>

                    <!-- <div class="card-body">
                        <ul v-for="post in posts">
                            <li> {{ post.excerpt }} </li>
                        </ul>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                posts: [],
                errored: false
            }
        },
        mounted() {
            if (process.env.MIX_ENV_MODE != 'production') {
                console.log('Component mounted.')
            }
            // axios.get('/api/v1/posts')
            //     .then(res => {
            //         this.posts = res.data.data;
            //     })
            //     .catch(err => {
            //         console.log(err)
            //         this.errored = true
            // })
        }
    }
</script>
