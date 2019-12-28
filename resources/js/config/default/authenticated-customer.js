var CryptoJS = require("crypto-js");
import { Base64 } from 'js-base64';

/**
 * 
 * Auth the user authenticated
 * Decrypt: You can decrypt Object, Plain text
 *
 */

let base64key = process.env.MIX_APP_KEY
window.app_key = base64key.replace('base64:', '')

// how to use : console.log(decrypter(auth_customer_infos.name, app_key))
window.decrypter = (value, key) => {

    let encrypted = value
    let encrypted_json = JSON.parse(Base64.decode(encrypted));
    let decrypted = CryptoJS.AES.decrypt(encrypted_json.value, CryptoJS.enc.Base64.parse(key), {
        iv : CryptoJS.enc.Base64.parse(encrypted_json.iv),
    });
    
    let str = decrypted.toString(CryptoJS.enc.Utf8)

    return str
}

let customer_auth = document.head.querySelector('meta[name="auth-customer-authenticated"]');

if(customer_auth != undefined) {
    window.auth_customer = true
    window.auth_customer_infos = {
        id: document.head.querySelector('meta[name="auth-customer-id"]').content,
        name: document.head.querySelector('meta[name="auth-customer-name"]').content,
        email: document.head.querySelector('meta[name="auth-customer-email"]').content,
    }
    axios.defaults.headers.common['AUTH-CUSTOMER-ID'] = auth_customer_infos.id
    axios.defaults.headers.common['AUTH-CUSTOMER-NAME'] = auth_customer_infos.name
    axios.defaults.headers.common['AUTH-CUSTOMER-EMAIL'] = auth_customer_infos.email
} else {
    window.auth_customer = false
}

axios.defaults.headers.common['AUTH-CUSTOMER-AUTHENTICATED'] = auth_customer


