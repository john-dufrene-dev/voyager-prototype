window.Vue = require('vue');
import VueInternationalization from 'vue-i18n';

window.Locale = require('../../vue-i18n-locales.generated.js');

window.lang = document.documentElement.lang.substr(0, 2);
// or however you determine your current app locale

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

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

if (process.env.MIX_ENV_MODE === 'production') {
    Vue.config.devtools = false;
    Vue.config.debug = false;
    Vue.config.silent = true; 
}