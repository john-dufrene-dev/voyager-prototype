!function(t){var e={};function n(o){if(e[o])return e[o].exports;var r=e[o]={i:o,l:!1,exports:{}};return t[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=t,n.c=e,n.d=function(t,e,o){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:o})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)n.d(o,r,function(e){return t[e]}.bind(null,r));return o},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="/",n(n.s=5)}({"3+QE":function(t,e,n){Vue.component("post-component",n("NUNC").default);new Vue({el:"#post-component",i18n:i18n})},"3Qwt":function(t,e,n){"use strict";n.r(e);n("3+QE");function o(t){$.get({url:"?page="+t,type:"get",datatype:"html"}).done((function(e){$("#posts_container").empty().html(e),location.hash=t})).fail((function(t,e,n){console.log("No response from server")}))}$(window).on("hashchange",(function(){if(window.location.hash){var t=window.location.hash.replace("#","");if(t==Number.NaN||t<=0)return!1;o(t)}})),$(document).ready((function(){$(document).on("click",".pagination a",(function(t){t.preventDefault(),$("li").removeClass("active"),$(this).parent("li").addClass("active"),o($(this).attr("href").split("page=")[1])}))}))},5:function(t,e,n){t.exports=n("3Qwt")},"KHd+":function(t,e,n){"use strict";function o(t,e,n,o,r,a,i,s){var c,l="function"==typeof t?t.options:t;if(e&&(l.render=e,l.staticRenderFns=n,l._compiled=!0),o&&(l.functional=!0),a&&(l._scopeId="data-v-"+a),i?(c=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),r&&r.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(i)},l._ssrRegister=c):r&&(c=s?function(){r.call(this,this.$root.$options.shadowRoot)}:r),c)if(l.functional){l._injectStyles=c;var u=l.render;l.render=function(t,e){return c.call(e),u(t,e)}}else{var d=l.beforeCreate;l.beforeCreate=d?[].concat(d,c):[c]}return{exports:t,options:l}}n.d(e,"a",(function(){return o}))},NUNC:function(t,e,n){"use strict";n.r(e);var o={data:function(){return{post:[],category:[],translations:[],is_translatable:!1,errored:!1}},props:{link:String},mounted:function(){var t=this;axios.get("/api/posts/"+this.link.trim()).then((function(e){t.post=e.data.data,t.category=e.data.data.category,t.is_translatable=e.data.data.model.is_translatable,1==t.is_translatable&&(t.translations=e.data.data.translations)})).catch((function(e){console.log(e),t.errored=!0}))}},r=n("KHd+"),a=Object(r.a)(o,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return 1==t.is_translatable?n("div",[n("a",{attrs:{href:t.post.link_to_category}},[t._v(t._s(t.translations.category.name))]),t._v(" "),n("div",{domProps:{innerHTML:t._s(t.translations.description)}}),t._v(" "),n("img",{attrs:{src:t.post.image_medium}})]):n("div",[n("a",{attrs:{href:t.post.link_to_category}},[t._v(t._s(t.category.name))]),t._v(" "),n("div",{domProps:{innerHTML:t._s(t.post.description)}}),t._v(" "),n("img",{attrs:{src:t.post.image_medium}})])}),[],!1,null,null,null);e.default=a.exports}});