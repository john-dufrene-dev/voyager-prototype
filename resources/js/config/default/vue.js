window.Vue = require('vue');

import VueInternationalization from 'vue-i18n';

/*
 |--------------------------------------------------------------------------
 | Active bootstrap-vue
 |--------------------------------------------------------------------------
 |
 | In progress
 |
 */

// import BootstrapVue  from 'bootstrap-vue'
// Vue.use(BootstrapVue)

window.Locale = require('../../vue-i18n-locales.generated.js');
window.lang = document.documentElement.lang.substr(0, 2);

window.i18n = new VueInternationalization({
    locale: lang,
    messages: Locale
});

Vue.config.lang = lang

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

if (process.env.MIX_ENV_MODE === 'production') {
    Vue.config.devtools = false;
    Vue.config.debug = false;
    Vue.config.silent = true; 
}