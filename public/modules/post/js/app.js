!function(t){var n={};function e(r){if(n[r])return n[r].exports;var o=n[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,e),o.l=!0,o.exports}e.m=t,e.c=n,e.d=function(t,n,r){e.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:r})},e.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},e.t=function(t,n){if(1&n&&(t=e(t)),8&n)return t;if(4&n&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(e.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&n&&"string"!=typeof t)for(var o in t)e.d(r,o,function(n){return t[n]}.bind(null,o));return r},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},e.p="/",e(e.s=10)}({"/JxD":function(t,n,e){(t.exports=e("I1BE")(!1)).push([t.i,"\n.post-loading {\n    text-align:center;\n    padding: 20px;\n    margin-top:50px;\n}\n.fade-enter-active, .fade-leave-active {\n    -webkit-transition: opacity 2s;\n    transition: opacity 2s;\n}\n.fade-enter, .fade-leave-to {\n    opacity: 0;\n}\n\n",""])},"0NHw":function(t,n,e){var r=e("/JxD");"string"==typeof r&&(r=[[t.i,r,""]]);var o={hmr:!0,transform:void 0,insertInto:void 0};e("aET+")(r,o);r.locals&&(t.exports=r.locals)},10:function(t,n,e){t.exports=e("3Qwt")},"3+QE":function(t,n,e){Vue.component("post-component",e("NUNC").default);new Vue({el:"#app",i18n:i18n})},"3Qwt":function(t,n,e){"use strict";e.r(n);e("3+QE");function r(t){axios.get("?page="+t).then((function(n){$("#posts_container").empty().html(n.data),location.hash=t})).catch((function(t){console.log(t),console.log("No response from server")}))}window.addEventListener("hashchange",(function(){if(window.location.hash){var t=window.location.hash.replace("#","");if(t==Number.NaN||t<=0)return!1;r(t)}})),$(document).ready((function(){$(document).on("click",".pagination a",(function(t){t.preventDefault(),$("li").removeClass("active"),$(this).parent("li").addClass("active"),r($(this).attr("href").split("page=")[1])}))}))},"6B+b":function(t,n,e){(t.exports=e("I1BE")(!1)).push([t.i,"\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n/*.v-spinner\n{\n    margin: 100px auto;\n    text-align: center;\n}\n*/\n@-webkit-keyframes v-pulseStretchDelay\n{\n0%,\n    80%\n    {\n        -webkit-transform: scale(1);\n                transform: scale(1);\n        -webkit-opacity: 1;             \n                opacity: 1;\n}\n45%\n    {\n        -webkit-transform: scale(0.1);\n                transform: scale(0.1);\n        -webkit-opacity: 0.7;             \n                opacity: 0.7;\n}\n}\n@keyframes v-pulseStretchDelay\n{\n0%,\n    80%\n    {\n        -webkit-transform: scale(1);\n                transform: scale(1);\n        -webkit-opacity: 1;             \n                opacity: 1;\n}\n45%\n    {\n        -webkit-transform: scale(0.1);\n                transform: scale(0.1);\n        -webkit-opacity: 0.7;             \n                opacity: 0.7;\n}\n}\n",""])},"9tPo":function(t,n){t.exports=function(t){var n="undefined"!=typeof window&&window.location;if(!n)throw new Error("fixUrls requires window.location");if(!t||"string"!=typeof t)return t;var e=n.protocol+"//"+n.host,r=e+n.pathname.replace(/\/[^\/]*$/,"/");return t.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi,(function(t,n){var o,i=n.trim().replace(/^"(.*)"$/,(function(t,n){return n})).replace(/^'(.*)'$/,(function(t,n){return n}));return/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(i)?t:(o=0===i.indexOf("//")?i:0===i.indexOf("/")?e+i:r+i.replace(/^\.\//,""),"url("+JSON.stringify(o)+")")}))}},I1BE:function(t,n){t.exports=function(t){var n=[];return n.toString=function(){return this.map((function(n){var e=function(t,n){var e=t[1]||"",r=t[3];if(!r)return e;if(n&&"function"==typeof btoa){var o=(a=r,"/*# sourceMappingURL=data:application/json;charset=utf-8;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(a))))+" */"),i=r.sources.map((function(t){return"/*# sourceURL="+r.sourceRoot+t+" */"}));return[e].concat(i).concat([o]).join("\n")}var a;return[e].join("\n")}(n,t);return n[2]?"@media "+n[2]+"{"+e+"}":e})).join("")},n.i=function(t,e){"string"==typeof t&&(t=[[null,t,""]]);for(var r={},o=0;o<this.length;o++){var i=this[o][0];"number"==typeof i&&(r[i]=!0)}for(o=0;o<t.length;o++){var a=t[o];"number"==typeof a[0]&&r[a[0]]||(e&&!a[2]?a[2]=e:e&&(a[2]="("+a[2]+") and ("+e+")"),n.push(a))}},n}},I8fD:function(t,n,e){"use strict";var r=e("0NHw");e.n(r).a},"KHd+":function(t,n,e){"use strict";function r(t,n,e,r,o,i,a,s){var l,c="function"==typeof t?t.options:t;if(n&&(c.render=n,c.staticRenderFns=e,c._compiled=!0),r&&(c.functional=!0),i&&(c._scopeId="data-v-"+i),a?(l=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),o&&o.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(a)},c._ssrRegister=l):o&&(l=s?function(){o.call(this,this.$root.$options.shadowRoot)}:o),l)if(c.functional){c._injectStyles=l;var u=c.render;c.render=function(t,n){return l.call(n),u(t,n)}}else{var f=c.beforeCreate;c.beforeCreate=f?[].concat(f,l):[l]}return{exports:t,options:c}}e.d(n,"a",(function(){return r}))},NUNC:function(t,n,e){"use strict";e.r(n);var r={name:"PulseLoader",props:{loading:{type:Boolean,default:!0},color:{type:String,default:"#5dc596"},size:{type:String,default:"15px"},margin:{type:String,default:"2px"},radius:{type:String,default:"100%"}},data(){return{spinnerStyle:{backgroundColor:this.color,width:this.size,height:this.size,margin:this.margin,borderRadius:this.radius,display:"inline-block",animationName:"v-pulseStretchDelay",animationDuration:"0.75s",animationIterationCount:"infinite",animationTimingFunction:"cubic-bezier(.2,.68,.18,1.08)",animationFillMode:"both"},spinnerDelay1:{animationDelay:"0.12s"},spinnerDelay2:{animationDelay:"0.24s"},spinnerDelay3:{animationDelay:"0.36s"}}}},o=(e("Zxsk"),e("KHd+")),i=Object(o.a)(r,(function(){var t=this.$createElement,n=this._self._c||t;return n("div",{directives:[{name:"show",rawName:"v-show",value:this.loading,expression:"loading"}],staticClass:"v-spinner"},[n("div",{staticClass:"v-pulse v-pulse1",style:[this.spinnerStyle,this.spinnerDelay1]}),n("div",{staticClass:"v-pulse v-pulse2",style:[this.spinnerStyle,this.spinnerDelay2]}),n("div",{staticClass:"v-pulse v-pulse3",style:[this.spinnerStyle,this.spinnerDelay3]})])}),[],!1,null,null,null).exports,a={data:function(){return{post:[],category:[],translations:[],is_translatable:!1,errored:!1,color:"#00bc88",size:"37px",loading:!0,imgProps:{fluidGrow:!0,class:"rounded"}}},props:{link:String},components:{PulseLoader:i},created:function(){this.getPost()},methods:{getPost:function(){var t=this;axios.get("/api/posts/"+this.link.trim()).then((function(n){t.post=n.data.data,t.category=n.data.data.category,t.is_translatable=n.data.data.model.is_translatable,1==t.is_translatable&&(t.translations=n.data.data.translations),t.loading=!1})).catch((function(n){console.log(n),t.errored=!0,t.loading=!1}))}}},s=(e("I8fD"),Object(o.a)(a,(function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("div",[e("pulse-loader",{staticClass:"post-loading",attrs:{loading:t.loading,color:t.color,size:t.size}}),t._v(" "),e("transition",{attrs:{name:"fade"}},[0==t.loading?e("div",[e("b-container",[e("b-row",[e("b-col",{attrs:{md:"7"}},[e("p",[t.is_translatable?e("a",{attrs:{href:t.post.link_to_category}},[t._v("\n                            "+t._s(t.translations.category.name))]):e("a",{attrs:{href:t.post.link_to_category}},[t._v(t._s(t.category.name))])]),t._v(" "),t.is_translatable?e("p",[t._v(" "+t._s(t.$t("post.published_date"))+" : "+t._s(t.translations.published_date)+" ")]):e("p",[t._v(" "+t._s(t.$t("post.published_date"))+" : "+t._s(t.post.published_date)+" ")]),t._v(" "),t.is_translatable?e("p",[t._v(t._s(t.translations.short_description))]):e("p",[t._v(t._s(t.post.short_description))])]),t._v(" "),e("b-col",{attrs:{md:"5"}},[e("b-img-lazy",t._b({attrs:{src:t.post.image_medium}},"b-img-lazy",t.imgProps,!1))],1)],1)],1),t._v(" "),e("b-container",{staticClass:"mt-4"},[e("b-row",[e("b-col",{attrs:{md:"12"}},[1==t.is_translatable?e("div",{domProps:{innerHTML:t._s(t.translations.description)}}):e("div",{domProps:{innerHTML:t._s(t.post.description)}})])],1)],1)],1):t._e()])],1)}),[],!1,null,null,null));n.default=s.exports},Zxsk:function(t,n,e){"use strict";var r=e("oAmP");e.n(r).a},"aET+":function(t,n,e){var r,o,i={},a=(r=function(){return window&&document&&document.all&&!window.atob},function(){return void 0===o&&(o=r.apply(this,arguments)),o}),s=function(t,n){return n?n.querySelector(t):document.querySelector(t)},l=function(t){var n={};return function(t,e){if("function"==typeof t)return t();if(void 0===n[t]){var r=s.call(this,t,e);if(window.HTMLIFrameElement&&r instanceof window.HTMLIFrameElement)try{r=r.contentDocument.head}catch(t){r=null}n[t]=r}return n[t]}}(),c=null,u=0,f=[],p=e("9tPo");function d(t,n){for(var e=0;e<t.length;e++){var r=t[e],o=i[r.id];if(o){o.refs++;for(var a=0;a<o.parts.length;a++)o.parts[a](r.parts[a]);for(;a<r.parts.length;a++)o.parts.push(g(r.parts[a],n))}else{var s=[];for(a=0;a<r.parts.length;a++)s.push(g(r.parts[a],n));i[r.id]={id:r.id,refs:1,parts:s}}}}function v(t,n){for(var e=[],r={},o=0;o<t.length;o++){var i=t[o],a=n.base?i[0]+n.base:i[0],s={css:i[1],media:i[2],sourceMap:i[3]};r[a]?r[a].parts.push(s):e.push(r[a]={id:a,parts:[s]})}return e}function h(t,n){var e=l(t.insertInto);if(!e)throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");var r=f[f.length-1];if("top"===t.insertAt)r?r.nextSibling?e.insertBefore(n,r.nextSibling):e.appendChild(n):e.insertBefore(n,e.firstChild),f.push(n);else if("bottom"===t.insertAt)e.appendChild(n);else{if("object"!=typeof t.insertAt||!t.insertAt.before)throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");var o=l(t.insertAt.before,e);e.insertBefore(n,o)}}function m(t){if(null===t.parentNode)return!1;t.parentNode.removeChild(t);var n=f.indexOf(t);n>=0&&f.splice(n,1)}function y(t){var n=document.createElement("style");if(void 0===t.attrs.type&&(t.attrs.type="text/css"),void 0===t.attrs.nonce){var r=function(){0;return e.nc}();r&&(t.attrs.nonce=r)}return b(n,t.attrs),h(t,n),n}function b(t,n){Object.keys(n).forEach((function(e){t.setAttribute(e,n[e])}))}function g(t,n){var e,r,o,i;if(n.transform&&t.css){if(!(i="function"==typeof n.transform?n.transform(t.css):n.transform.default(t.css)))return function(){};t.css=i}if(n.singleton){var a=u++;e=c||(c=y(n)),r=x.bind(null,e,a,!1),o=x.bind(null,e,a,!0)}else t.sourceMap&&"function"==typeof URL&&"function"==typeof URL.createObjectURL&&"function"==typeof URL.revokeObjectURL&&"function"==typeof Blob&&"function"==typeof btoa?(e=function(t){var n=document.createElement("link");return void 0===t.attrs.type&&(t.attrs.type="text/css"),t.attrs.rel="stylesheet",b(n,t.attrs),h(t,n),n}(n),r=C.bind(null,e,n),o=function(){m(e),e.href&&URL.revokeObjectURL(e.href)}):(e=y(n),r=S.bind(null,e),o=function(){m(e)});return r(t),function(n){if(n){if(n.css===t.css&&n.media===t.media&&n.sourceMap===t.sourceMap)return;r(t=n)}else o()}}t.exports=function(t,n){if("undefined"!=typeof DEBUG&&DEBUG&&"object"!=typeof document)throw new Error("The style-loader cannot be used in a non-browser environment");(n=n||{}).attrs="object"==typeof n.attrs?n.attrs:{},n.singleton||"boolean"==typeof n.singleton||(n.singleton=a()),n.insertInto||(n.insertInto="head"),n.insertAt||(n.insertAt="bottom");var e=v(t,n);return d(e,n),function(t){for(var r=[],o=0;o<e.length;o++){var a=e[o];(s=i[a.id]).refs--,r.push(s)}t&&d(v(t,n),n);for(o=0;o<r.length;o++){var s;if(0===(s=r[o]).refs){for(var l=0;l<s.parts.length;l++)s.parts[l]();delete i[s.id]}}}};var _,w=(_=[],function(t,n){return _[t]=n,_.filter(Boolean).join("\n")});function x(t,n,e,r){var o=e?"":r.css;if(t.styleSheet)t.styleSheet.cssText=w(n,o);else{var i=document.createTextNode(o),a=t.childNodes;a[n]&&t.removeChild(a[n]),a.length?t.insertBefore(i,a[n]):t.appendChild(i)}}function S(t,n){var e=n.css,r=n.media;if(r&&t.setAttribute("media",r),t.styleSheet)t.styleSheet.cssText=e;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(e))}}function C(t,n,e){var r=e.css,o=e.sourceMap,i=void 0===n.convertToAbsoluteUrls&&o;(n.convertToAbsoluteUrls||i)&&(r=p(r)),o&&(r+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(o))))+" */");var a=new Blob([r],{type:"text/css"}),s=t.href;t.href=URL.createObjectURL(a),s&&URL.revokeObjectURL(s)}},oAmP:function(t,n,e){var r=e("6B+b");"string"==typeof r&&(r=[[t.i,r,""]]);var o={hmr:!0,transform:void 0,insertInto:void 0};e("aET+")(r,o);r.locals&&(t.exports=r.locals)}});