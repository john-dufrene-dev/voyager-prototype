window.Vue = require('vue');

/*
 |--------------------------------------------------------------------------
 | Active bootstrap-vue
 |--------------------------------------------------------------------------
 |
 | In progress
 |
 */

// MIXINS FOR VUEJS
Vue.mixin({
    methods: {
        routes: (name, params) => routes(name, params),
        _path: () => window.location.pathname,
        _token: () => axios.defaults.headers.common['X-CSRF-TOKEN'],
        $_auth_autorize: () => auth_customer,
        $_auth_infos: () => {   
            let auth_valid = (true === auth_customer ) ? true : false;
            if ( true === auth_valid ) {
                let infos = {
                    id: decrypter(auth_customer_infos.id , app_key),
                    name: decrypter(auth_customer_infos.name , app_key),
                    email: decrypter(auth_customer_infos.email , app_key),
                }
                return infos;
            }
            return null
        }
    }
});

// import BootstrapVue  from 'bootstrap-vue'
// Vue.use(BootstrapVue)

import { LayoutPlugin, ImagePlugin, ButtonPlugin, ToastPlugin } from 'bootstrap-vue'

Vue.use(LayoutPlugin)
Vue.use(ImagePlugin)
Vue.use(ButtonPlugin)
Vue.use(ToastPlugin)

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