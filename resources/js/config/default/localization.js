import VueInternationalization from 'vue-i18n';

/*
 |--------------------------------------------------------------------------
 | Active Localization
 |--------------------------------------------------------------------------
 |
 | In progress
 |
 */

window.Locale = require('../../vue-i18n-locales.generated.js');
window.lang = document.documentElement.lang.substr(0, 2);

window.i18n = new VueInternationalization({
    locale: lang,
    messages: Locale
});

// Define the current lang for Vuejs
Vue.config.lang = lang