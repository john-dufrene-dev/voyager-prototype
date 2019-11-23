Vue.component('example-component', require('./default/components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    i18n,
});