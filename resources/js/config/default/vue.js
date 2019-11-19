window.Vue = require('vue');

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

import { LayoutPlugin, ImagePlugin } from 'bootstrap-vue'

Vue.use(LayoutPlugin)
Vue.use(ImagePlugin)

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