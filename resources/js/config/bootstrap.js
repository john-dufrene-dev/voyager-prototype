import { AES, enc } from "crypto-js";

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

////////////////////////////////////////////////////////////////////////////////////////////////////

/**
 * 
 * Encrypt: You can encrypt Object, Plain text
 * Decrypt: You can decrypt Object, Plain text
 *
 */

// EX 1 : Normal encryption Object

// let data = [{id: 1}, {id: 2}]
// let ciphertext = AES.encrypt(JSON.stringify(data), process.env.MIX_APP_KEY);
// let bytes  = AES.decrypt(ciphertext.toString(), process.env.MIX_APP_KEY);
// let decryptedData = JSON.parse(bytes.toString(enc.Utf8));
// console.log(decryptedData);

//  EX 2 : With base64 encryption

// var encrypted = 'your_encrypted_value'
// var key = 'your APP_KEY without base64:'
// var encrypted_json = JSON.parse(Base64.decode(encrypted));
// var decrypted = CryptoJS.AES.decrypt(encrypted_json.value, CryptoJS.enc.Base64.parse(key), {
//     iv : CryptoJS.enc.Base64.parse(encrypted_json.iv),
// });
// var str = decrypted.toString(CryptoJS.enc.Utf8)
// console.log(str)

////////////////////////////////////////////////////////////////////////////////////////////////////

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
