!function(e){var t={};function r(o){if(t[o])return t[o].exports;var n=t[o]={i:o,l:!1,exports:{}};return e[o].call(n.exports,n,n.exports,r),n.l=!0,n.exports}r.m=e,r.c=t,r.d=function(e,t,o){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(r.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)r.d(o,n,function(t){return e[t]}.bind(null,n));return o},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="/",r(r.s=3)}({3:function(e,t,r){e.exports=r("VXHV")},VXHV:function(e,t,r){"use strict";r.r(t);var o=r("i/JO");window.routes=function(){var e=Array.prototype.slice.call(arguments),t=e.shift();if(void 0!==o[t])return"/"+o[t].split("/").map((function(t){return"{"==t[0]?e.shift():t})).join("/");console.error("Unknown route ",t)}},"i/JO":function(e){e.exports=JSON.parse('{"login":"login","login.post":"login","logout":"logout","register":"register","password.request":"password/reset","pages.account":"account","home.index":"/","articles.index":"articles","articles.category":"articles/{category}","articles.show":"articles/{category}/{post}","api.v1.posts.index":"api/posts","api.v1.posts.show":"api/posts/{slug}"}')}});