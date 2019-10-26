Vue.component('example-component', require('./default/components/ExampleComponent.vue').default);

const homepage = new Vue({
    el: '#homepage',
    i18n,
});