!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=74)}({74:function(e,t,n){e.exports=n(75)},75:function(e,t,n){"use strict";n.r(t);n(76)},76:function(e,t){function n(e){$.get({url:"?page="+e,type:"get",datatype:"html"}).done((function(t){$("#posts_container").empty().html(t),location.hash=e})).fail((function(e,t,n){console.log("No response from server")}))}$(window).on("hashchange",(function(){if(window.location.hash){var e=window.location.hash.replace("#","");if(e==Number.NaN||e<=0)return!1;n(e)}})),$(document).ready((function(){$(document).on("click",".pagination a",(function(e){e.preventDefault(),$("li").removeClass("active"),$(this).parent("li").addClass("active"),n($(this).attr("href").split("page=")[1])}))}))}});