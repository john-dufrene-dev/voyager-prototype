Vue.component('post-component', require('../../default/components/Post.vue').default);

const posts = new Vue({
    el: '#post-component',
    i18n,
});