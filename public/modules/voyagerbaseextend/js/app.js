/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./Modules/VoyagerBaseExtend/Resources/assets/js/app.js":
/*!**************************************************************!*\
  !*** ./Modules/VoyagerBaseExtend/Resources/assets/js/app.js ***!
  \**************************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var tinymce_plugins_preview__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tinymce/plugins/preview */ "./node_modules/tinymce/plugins/preview/index.js");
/* harmony import */ var tinymce_plugins_preview__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(tinymce_plugins_preview__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var tinymce_plugins_media__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! tinymce/plugins/media */ "./node_modules/tinymce/plugins/media/index.js");
/* harmony import */ var tinymce_plugins_media__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(tinymce_plugins_media__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var tinymce_plugins_autolink__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! tinymce/plugins/autolink */ "./node_modules/tinymce/plugins/autolink/index.js");
/* harmony import */ var tinymce_plugins_autolink__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(tinymce_plugins_autolink__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var tinymce_plugins_searchreplace__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! tinymce/plugins/searchreplace */ "./node_modules/tinymce/plugins/searchreplace/index.js");
/* harmony import */ var tinymce_plugins_searchreplace__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(tinymce_plugins_searchreplace__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var tinymce_plugins_wordcount__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! tinymce/plugins/wordcount */ "./node_modules/tinymce/plugins/wordcount/index.js");
/* harmony import */ var tinymce_plugins_wordcount__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(tinymce_plugins_wordcount__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var tinymce_plugins_advlist__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! tinymce/plugins/advlist */ "./node_modules/tinymce/plugins/advlist/index.js");
/* harmony import */ var tinymce_plugins_advlist__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(tinymce_plugins_advlist__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var tinymce_plugins_insertdatetime__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! tinymce/plugins/insertdatetime */ "./node_modules/tinymce/plugins/insertdatetime/index.js");
/* harmony import */ var tinymce_plugins_insertdatetime__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(tinymce_plugins_insertdatetime__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var tinymce_plugins_imagetools__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! tinymce/plugins/imagetools */ "./node_modules/tinymce/plugins/imagetools/index.js");
/* harmony import */ var tinymce_plugins_imagetools__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(tinymce_plugins_imagetools__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var tinymce_plugins_charmap__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! tinymce/plugins/charmap */ "./node_modules/tinymce/plugins/charmap/index.js");
/* harmony import */ var tinymce_plugins_charmap__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(tinymce_plugins_charmap__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var tinymce_plugins_hr__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! tinymce/plugins/hr */ "./node_modules/tinymce/plugins/hr/index.js");
/* harmony import */ var tinymce_plugins_hr__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(tinymce_plugins_hr__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var _tinymce_tinymce_custom__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./tinymce/tinymce_custom */ "./Modules/VoyagerBaseExtend/Resources/assets/js/tinymce/tinymce_custom.js");
/* harmony import */ var _tinymce_tinymce_custom__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(_tinymce_tinymce_custom__WEBPACK_IMPORTED_MODULE_10__);
// Plugins









 // .js



/***/ }),

/***/ "./Modules/VoyagerBaseExtend/Resources/assets/js/tinymce/tinymce_custom.js":
/*!*********************************************************************************!*\
  !*** ./Modules/VoyagerBaseExtend/Resources/assets/js/tinymce/tinymce_custom.js ***!
  \*********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function tinymce_init_callback(editor) {
  editor.remove();
  editor = null;
  var editor_config = {
    path_absolute: "/",
    menubar: false,
    selector: 'textarea.richTextBox',
    min_height: 300,
    skin_url: $('meta[name="assets-path"]').attr('content') + '?path=js/skins/voyager',
    plugins: 'insertdatetime, advlist, wordcount, imagetools, searchreplace, autolink, hr, charmap, preview, link, image, code, table, textcolor, lists, media',
    toolbar: 'preview searchreplace | styleselect bold italic underline charmap hr | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image media table | insertdatetime code',
    relative_urls: false,
    file_browser_callback: function file_browser_callback(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
      var cmsURL = editor_config.path_absolute + 'admin/filemanager?field_name=' + field_name;

      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file: cmsURL,
        title: 'Filemanager',
        width: x * 0.8,
        height: y * 0.8,
        resizable: "yes",
        close_previous: "no"
      });
    },
    convert_urls: false,
    image_caption: true,
    image_title: true
  };
  tinymce.init(editor_config);
}

tinymce_init_callback(tinymce);

/***/ }),

/***/ "./node_modules/tinymce/plugins/advlist/index.js":
/*!*******************************************************!*\
  !*** ./node_modules/tinymce/plugins/advlist/index.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// Exports the "advlist" plugin for usage with module loaders
// Usage:
//   CommonJS:
//     require('tinymce/plugins/advlist')
//   ES2015:
//     import 'tinymce/plugins/advlist'
__webpack_require__(/*! ./plugin.js */ "./node_modules/tinymce/plugins/advlist/plugin.js");

/***/ }),

/***/ "./node_modules/tinymce/plugins/advlist/plugin.js":
/*!********************************************************!*\
  !*** ./node_modules/tinymce/plugins/advlist/plugin.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
var advlist = (function () {
    'use strict';

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global$1 = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var applyListFormat = function (editor, listName, styleValue) {
      var cmd = listName === 'UL' ? 'InsertUnorderedList' : 'InsertOrderedList';
      editor.execCommand(cmd, false, styleValue === false ? null : { 'list-style-type': styleValue });
    };
    var Actions = { applyListFormat: applyListFormat };

    var register = function (editor) {
      editor.addCommand('ApplyUnorderedListStyle', function (ui, value) {
        Actions.applyListFormat(editor, 'UL', value['list-style-type']);
      });
      editor.addCommand('ApplyOrderedListStyle', function (ui, value) {
        Actions.applyListFormat(editor, 'OL', value['list-style-type']);
      });
    };
    var Commands = { register: register };

    var getNumberStyles = function (editor) {
      var styles = editor.getParam('advlist_number_styles', 'default,lower-alpha,lower-greek,lower-roman,upper-alpha,upper-roman');
      return styles ? styles.split(/[ ,]/) : [];
    };
    var getBulletStyles = function (editor) {
      var styles = editor.getParam('advlist_bullet_styles', 'default,circle,disc,square');
      return styles ? styles.split(/[ ,]/) : [];
    };
    var Settings = {
      getNumberStyles: getNumberStyles,
      getBulletStyles: getBulletStyles
    };

    var isChildOfBody = function (editor, elm) {
      return editor.$.contains(editor.getBody(), elm);
    };
    var isTableCellNode = function (node) {
      return node && /^(TH|TD)$/.test(node.nodeName);
    };
    var isListNode = function (editor) {
      return function (node) {
        return node && /^(OL|UL|DL)$/.test(node.nodeName) && isChildOfBody(editor, node);
      };
    };
    var getSelectedStyleType = function (editor) {
      var listElm = editor.dom.getParent(editor.selection.getNode(), 'ol,ul');
      return editor.dom.getStyle(listElm, 'listStyleType') || '';
    };
    var ListUtils = {
      isTableCellNode: isTableCellNode,
      isListNode: isListNode,
      getSelectedStyleType: getSelectedStyleType
    };

    var styleValueToText = function (styleValue) {
      return styleValue.replace(/\-/g, ' ').replace(/\b\w/g, function (chr) {
        return chr.toUpperCase();
      });
    };
    var toMenuItems = function (styles) {
      return global$1.map(styles, function (styleValue) {
        var text = styleValueToText(styleValue);
        var data = styleValue === 'default' ? '' : styleValue;
        return {
          text: text,
          data: data
        };
      });
    };
    var ListStyles = { toMenuItems: toMenuItems };

    var findIndex = function (list, predicate) {
      for (var index = 0; index < list.length; index++) {
        var element = list[index];
        if (predicate(element)) {
          return index;
        }
      }
      return -1;
    };
    var listState = function (editor, listName) {
      return function (e) {
        var ctrl = e.control;
        editor.on('NodeChange', function (e) {
          var tableCellIndex = findIndex(e.parents, ListUtils.isTableCellNode);
          var parents = tableCellIndex !== -1 ? e.parents.slice(0, tableCellIndex) : e.parents;
          var lists = global$1.grep(parents, ListUtils.isListNode(editor));
          ctrl.active(lists.length > 0 && lists[0].nodeName === listName);
        });
      };
    };
    var updateSelection = function (editor) {
      return function (e) {
        var listStyleType = ListUtils.getSelectedStyleType(editor);
        e.control.items().each(function (ctrl) {
          ctrl.active(ctrl.settings.data === listStyleType);
        });
      };
    };
    var addSplitButton = function (editor, id, tooltip, cmd, nodeName, styles) {
      editor.addButton(id, {
        active: false,
        type: 'splitbutton',
        tooltip: tooltip,
        menu: ListStyles.toMenuItems(styles),
        onPostRender: listState(editor, nodeName),
        onshow: updateSelection(editor),
        onselect: function (e) {
          Actions.applyListFormat(editor, nodeName, e.control.settings.data);
        },
        onclick: function () {
          editor.execCommand(cmd);
        }
      });
    };
    var addButton = function (editor, id, tooltip, cmd, nodeName, styles) {
      editor.addButton(id, {
        active: false,
        type: 'button',
        tooltip: tooltip,
        onPostRender: listState(editor, nodeName),
        onclick: function () {
          editor.execCommand(cmd);
        }
      });
    };
    var addControl = function (editor, id, tooltip, cmd, nodeName, styles) {
      if (styles.length > 0) {
        addSplitButton(editor, id, tooltip, cmd, nodeName, styles);
      } else {
        addButton(editor, id, tooltip, cmd, nodeName, styles);
      }
    };
    var register$1 = function (editor) {
      addControl(editor, 'numlist', 'Numbered list', 'InsertOrderedList', 'OL', Settings.getNumberStyles(editor));
      addControl(editor, 'bullist', 'Bullet list', 'InsertUnorderedList', 'UL', Settings.getBulletStyles(editor));
    };
    var Buttons = { register: register$1 };

    global.add('advlist', function (editor) {
      var hasPlugin = function (editor, plugin) {
        var plugins = editor.settings.plugins ? editor.settings.plugins : '';
        return global$1.inArray(plugins.split(/[ ,]/), plugin) !== -1;
      };
      if (hasPlugin(editor, 'lists')) {
        Buttons.register(editor);
        Commands.register(editor);
      }
    });
    function Plugin () {
    }

    return Plugin;

}());
})();


/***/ }),

/***/ "./node_modules/tinymce/plugins/autolink/index.js":
/*!********************************************************!*\
  !*** ./node_modules/tinymce/plugins/autolink/index.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// Exports the "autolink" plugin for usage with module loaders
// Usage:
//   CommonJS:
//     require('tinymce/plugins/autolink')
//   ES2015:
//     import 'tinymce/plugins/autolink'
__webpack_require__(/*! ./plugin.js */ "./node_modules/tinymce/plugins/autolink/plugin.js");

/***/ }),

/***/ "./node_modules/tinymce/plugins/autolink/plugin.js":
/*!*********************************************************!*\
  !*** ./node_modules/tinymce/plugins/autolink/plugin.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
var autolink = (function () {
    'use strict';

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global$1 = tinymce.util.Tools.resolve('tinymce.Env');

    var getAutoLinkPattern = function (editor) {
      return editor.getParam('autolink_pattern', /^(https?:\/\/|ssh:\/\/|ftp:\/\/|file:\/|www\.|(?:mailto:)?[A-Z0-9._%+\-]+@)(.+)$/i);
    };
    var getDefaultLinkTarget = function (editor) {
      return editor.getParam('default_link_target', '');
    };
    var Settings = {
      getAutoLinkPattern: getAutoLinkPattern,
      getDefaultLinkTarget: getDefaultLinkTarget
    };

    var rangeEqualsDelimiterOrSpace = function (rangeString, delimiter) {
      return rangeString === delimiter || rangeString === ' ' || rangeString.charCodeAt(0) === 160;
    };
    var handleEclipse = function (editor) {
      parseCurrentLine(editor, -1, '(');
    };
    var handleSpacebar = function (editor) {
      parseCurrentLine(editor, 0, '');
    };
    var handleEnter = function (editor) {
      parseCurrentLine(editor, -1, '');
    };
    var scopeIndex = function (container, index) {
      if (index < 0) {
        index = 0;
      }
      if (container.nodeType === 3) {
        var len = container.data.length;
        if (index > len) {
          index = len;
        }
      }
      return index;
    };
    var setStart = function (rng, container, offset) {
      if (container.nodeType !== 1 || container.hasChildNodes()) {
        rng.setStart(container, scopeIndex(container, offset));
      } else {
        rng.setStartBefore(container);
      }
    };
    var setEnd = function (rng, container, offset) {
      if (container.nodeType !== 1 || container.hasChildNodes()) {
        rng.setEnd(container, scopeIndex(container, offset));
      } else {
        rng.setEndAfter(container);
      }
    };
    var parseCurrentLine = function (editor, endOffset, delimiter) {
      var rng, end, start, endContainer, bookmark, text, matches, prev, len, rngText;
      var autoLinkPattern = Settings.getAutoLinkPattern(editor);
      var defaultLinkTarget = Settings.getDefaultLinkTarget(editor);
      if (editor.selection.getNode().tagName === 'A') {
        return;
      }
      rng = editor.selection.getRng(true).cloneRange();
      if (rng.startOffset < 5) {
        prev = rng.endContainer.previousSibling;
        if (!prev) {
          if (!rng.endContainer.firstChild || !rng.endContainer.firstChild.nextSibling) {
            return;
          }
          prev = rng.endContainer.firstChild.nextSibling;
        }
        len = prev.length;
        setStart(rng, prev, len);
        setEnd(rng, prev, len);
        if (rng.endOffset < 5) {
          return;
        }
        end = rng.endOffset;
        endContainer = prev;
      } else {
        endContainer = rng.endContainer;
        if (endContainer.nodeType !== 3 && endContainer.firstChild) {
          while (endContainer.nodeType !== 3 && endContainer.firstChild) {
            endContainer = endContainer.firstChild;
          }
          if (endContainer.nodeType === 3) {
            setStart(rng, endContainer, 0);
            setEnd(rng, endContainer, endContainer.nodeValue.length);
          }
        }
        if (rng.endOffset === 1) {
          end = 2;
        } else {
          end = rng.endOffset - 1 - endOffset;
        }
      }
      start = end;
      do {
        setStart(rng, endContainer, end >= 2 ? end - 2 : 0);
        setEnd(rng, endContainer, end >= 1 ? end - 1 : 0);
        end -= 1;
        rngText = rng.toString();
      } while (rngText !== ' ' && rngText !== '' && rngText.charCodeAt(0) !== 160 && end - 2 >= 0 && rngText !== delimiter);
      if (rangeEqualsDelimiterOrSpace(rng.toString(), delimiter)) {
        setStart(rng, endContainer, end);
        setEnd(rng, endContainer, start);
        end += 1;
      } else if (rng.startOffset === 0) {
        setStart(rng, endContainer, 0);
        setEnd(rng, endContainer, start);
      } else {
        setStart(rng, endContainer, end);
        setEnd(rng, endContainer, start);
      }
      text = rng.toString();
      if (text.charAt(text.length - 1) === '.') {
        setEnd(rng, endContainer, start - 1);
      }
      text = rng.toString().trim();
      matches = text.match(autoLinkPattern);
      if (matches) {
        if (matches[1] === 'www.') {
          matches[1] = 'http://www.';
        } else if (/@$/.test(matches[1]) && !/^mailto:/.test(matches[1])) {
          matches[1] = 'mailto:' + matches[1];
        }
        bookmark = editor.selection.getBookmark();
        editor.selection.setRng(rng);
        editor.execCommand('createlink', false, matches[1] + matches[2]);
        if (defaultLinkTarget) {
          editor.dom.setAttrib(editor.selection.getNode(), 'target', defaultLinkTarget);
        }
        editor.selection.moveToBookmark(bookmark);
        editor.nodeChanged();
      }
    };
    var setup = function (editor) {
      var autoUrlDetectState;
      editor.on('keydown', function (e) {
        if (e.keyCode === 13) {
          return handleEnter(editor);
        }
      });
      if (global$1.ie) {
        editor.on('focus', function () {
          if (!autoUrlDetectState) {
            autoUrlDetectState = true;
            try {
              editor.execCommand('AutoUrlDetect', false, true);
            } catch (ex) {
            }
          }
        });
        return;
      }
      editor.on('keypress', function (e) {
        if (e.keyCode === 41) {
          return handleEclipse(editor);
        }
      });
      editor.on('keyup', function (e) {
        if (e.keyCode === 32) {
          return handleSpacebar(editor);
        }
      });
    };
    var Keys = { setup: setup };

    global.add('autolink', function (editor) {
      Keys.setup(editor);
    });
    function Plugin () {
    }

    return Plugin;

}());
})();


/***/ }),

/***/ "./node_modules/tinymce/plugins/charmap/index.js":
/*!*******************************************************!*\
  !*** ./node_modules/tinymce/plugins/charmap/index.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// Exports the "charmap" plugin for usage with module loaders
// Usage:
//   CommonJS:
//     require('tinymce/plugins/charmap')
//   ES2015:
//     import 'tinymce/plugins/charmap'
__webpack_require__(/*! ./plugin.js */ "./node_modules/tinymce/plugins/charmap/plugin.js");

/***/ }),

/***/ "./node_modules/tinymce/plugins/charmap/plugin.js":
/*!********************************************************!*\
  !*** ./node_modules/tinymce/plugins/charmap/plugin.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
var charmap = (function () {
    'use strict';

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var fireInsertCustomChar = function (editor, chr) {
      return editor.fire('insertCustomChar', { chr: chr });
    };
    var Events = { fireInsertCustomChar: fireInsertCustomChar };

    var insertChar = function (editor, chr) {
      var evtChr = Events.fireInsertCustomChar(editor, chr).chr;
      editor.execCommand('mceInsertContent', false, evtChr);
    };
    var Actions = { insertChar: insertChar };

    var global$1 = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var getCharMap = function (editor) {
      return editor.settings.charmap;
    };
    var getCharMapAppend = function (editor) {
      return editor.settings.charmap_append;
    };
    var Settings = {
      getCharMap: getCharMap,
      getCharMapAppend: getCharMapAppend
    };

    var isArray = global$1.isArray;
    var getDefaultCharMap = function () {
      return [
        [
          '160',
          'no-break space'
        ],
        [
          '173',
          'soft hyphen'
        ],
        [
          '34',
          'quotation mark'
        ],
        [
          '162',
          'cent sign'
        ],
        [
          '8364',
          'euro sign'
        ],
        [
          '163',
          'pound sign'
        ],
        [
          '165',
          'yen sign'
        ],
        [
          '169',
          'copyright sign'
        ],
        [
          '174',
          'registered sign'
        ],
        [
          '8482',
          'trade mark sign'
        ],
        [
          '8240',
          'per mille sign'
        ],
        [
          '181',
          'micro sign'
        ],
        [
          '183',
          'middle dot'
        ],
        [
          '8226',
          'bullet'
        ],
        [
          '8230',
          'three dot leader'
        ],
        [
          '8242',
          'minutes / feet'
        ],
        [
          '8243',
          'seconds / inches'
        ],
        [
          '167',
          'section sign'
        ],
        [
          '182',
          'paragraph sign'
        ],
        [
          '223',
          'sharp s / ess-zed'
        ],
        [
          '8249',
          'single left-pointing angle quotation mark'
        ],
        [
          '8250',
          'single right-pointing angle quotation mark'
        ],
        [
          '171',
          'left pointing guillemet'
        ],
        [
          '187',
          'right pointing guillemet'
        ],
        [
          '8216',
          'left single quotation mark'
        ],
        [
          '8217',
          'right single quotation mark'
        ],
        [
          '8220',
          'left double quotation mark'
        ],
        [
          '8221',
          'right double quotation mark'
        ],
        [
          '8218',
          'single low-9 quotation mark'
        ],
        [
          '8222',
          'double low-9 quotation mark'
        ],
        [
          '60',
          'less-than sign'
        ],
        [
          '62',
          'greater-than sign'
        ],
        [
          '8804',
          'less-than or equal to'
        ],
        [
          '8805',
          'greater-than or equal to'
        ],
        [
          '8211',
          'en dash'
        ],
        [
          '8212',
          'em dash'
        ],
        [
          '175',
          'macron'
        ],
        [
          '8254',
          'overline'
        ],
        [
          '164',
          'currency sign'
        ],
        [
          '166',
          'broken bar'
        ],
        [
          '168',
          'diaeresis'
        ],
        [
          '161',
          'inverted exclamation mark'
        ],
        [
          '191',
          'turned question mark'
        ],
        [
          '710',
          'circumflex accent'
        ],
        [
          '732',
          'small tilde'
        ],
        [
          '176',
          'degree sign'
        ],
        [
          '8722',
          'minus sign'
        ],
        [
          '177',
          'plus-minus sign'
        ],
        [
          '247',
          'division sign'
        ],
        [
          '8260',
          'fraction slash'
        ],
        [
          '215',
          'multiplication sign'
        ],
        [
          '185',
          'superscript one'
        ],
        [
          '178',
          'superscript two'
        ],
        [
          '179',
          'superscript three'
        ],
        [
          '188',
          'fraction one quarter'
        ],
        [
          '189',
          'fraction one half'
        ],
        [
          '190',
          'fraction three quarters'
        ],
        [
          '402',
          'function / florin'
        ],
        [
          '8747',
          'integral'
        ],
        [
          '8721',
          'n-ary sumation'
        ],
        [
          '8734',
          'infinity'
        ],
        [
          '8730',
          'square root'
        ],
        [
          '8764',
          'similar to'
        ],
        [
          '8773',
          'approximately equal to'
        ],
        [
          '8776',
          'almost equal to'
        ],
        [
          '8800',
          'not equal to'
        ],
        [
          '8801',
          'identical to'
        ],
        [
          '8712',
          'element of'
        ],
        [
          '8713',
          'not an element of'
        ],
        [
          '8715',
          'contains as member'
        ],
        [
          '8719',
          'n-ary product'
        ],
        [
          '8743',
          'logical and'
        ],
        [
          '8744',
          'logical or'
        ],
        [
          '172',
          'not sign'
        ],
        [
          '8745',
          'intersection'
        ],
        [
          '8746',
          'union'
        ],
        [
          '8706',
          'partial differential'
        ],
        [
          '8704',
          'for all'
        ],
        [
          '8707',
          'there exists'
        ],
        [
          '8709',
          'diameter'
        ],
        [
          '8711',
          'backward difference'
        ],
        [
          '8727',
          'asterisk operator'
        ],
        [
          '8733',
          'proportional to'
        ],
        [
          '8736',
          'angle'
        ],
        [
          '180',
          'acute accent'
        ],
        [
          '184',
          'cedilla'
        ],
        [
          '170',
          'feminine ordinal indicator'
        ],
        [
          '186',
          'masculine ordinal indicator'
        ],
        [
          '8224',
          'dagger'
        ],
        [
          '8225',
          'double dagger'
        ],
        [
          '192',
          'A - grave'
        ],
        [
          '193',
          'A - acute'
        ],
        [
          '194',
          'A - circumflex'
        ],
        [
          '195',
          'A - tilde'
        ],
        [
          '196',
          'A - diaeresis'
        ],
        [
          '197',
          'A - ring above'
        ],
        [
          '256',
          'A - macron'
        ],
        [
          '198',
          'ligature AE'
        ],
        [
          '199',
          'C - cedilla'
        ],
        [
          '200',
          'E - grave'
        ],
        [
          '201',
          'E - acute'
        ],
        [
          '202',
          'E - circumflex'
        ],
        [
          '203',
          'E - diaeresis'
        ],
        [
          '274',
          'E - macron'
        ],
        [
          '204',
          'I - grave'
        ],
        [
          '205',
          'I - acute'
        ],
        [
          '206',
          'I - circumflex'
        ],
        [
          '207',
          'I - diaeresis'
        ],
        [
          '298',
          'I - macron'
        ],
        [
          '208',
          'ETH'
        ],
        [
          '209',
          'N - tilde'
        ],
        [
          '210',
          'O - grave'
        ],
        [
          '211',
          'O - acute'
        ],
        [
          '212',
          'O - circumflex'
        ],
        [
          '213',
          'O - tilde'
        ],
        [
          '214',
          'O - diaeresis'
        ],
        [
          '216',
          'O - slash'
        ],
        [
          '332',
          'O - macron'
        ],
        [
          '338',
          'ligature OE'
        ],
        [
          '352',
          'S - caron'
        ],
        [
          '217',
          'U - grave'
        ],
        [
          '218',
          'U - acute'
        ],
        [
          '219',
          'U - circumflex'
        ],
        [
          '220',
          'U - diaeresis'
        ],
        [
          '362',
          'U - macron'
        ],
        [
          '221',
          'Y - acute'
        ],
        [
          '376',
          'Y - diaeresis'
        ],
        [
          '562',
          'Y - macron'
        ],
        [
          '222',
          'THORN'
        ],
        [
          '224',
          'a - grave'
        ],
        [
          '225',
          'a - acute'
        ],
        [
          '226',
          'a - circumflex'
        ],
        [
          '227',
          'a - tilde'
        ],
        [
          '228',
          'a - diaeresis'
        ],
        [
          '229',
          'a - ring above'
        ],
        [
          '257',
          'a - macron'
        ],
        [
          '230',
          'ligature ae'
        ],
        [
          '231',
          'c - cedilla'
        ],
        [
          '232',
          'e - grave'
        ],
        [
          '233',
          'e - acute'
        ],
        [
          '234',
          'e - circumflex'
        ],
        [
          '235',
          'e - diaeresis'
        ],
        [
          '275',
          'e - macron'
        ],
        [
          '236',
          'i - grave'
        ],
        [
          '237',
          'i - acute'
        ],
        [
          '238',
          'i - circumflex'
        ],
        [
          '239',
          'i - diaeresis'
        ],
        [
          '299',
          'i - macron'
        ],
        [
          '240',
          'eth'
        ],
        [
          '241',
          'n - tilde'
        ],
        [
          '242',
          'o - grave'
        ],
        [
          '243',
          'o - acute'
        ],
        [
          '244',
          'o - circumflex'
        ],
        [
          '245',
          'o - tilde'
        ],
        [
          '246',
          'o - diaeresis'
        ],
        [
          '248',
          'o slash'
        ],
        [
          '333',
          'o macron'
        ],
        [
          '339',
          'ligature oe'
        ],
        [
          '353',
          's - caron'
        ],
        [
          '249',
          'u - grave'
        ],
        [
          '250',
          'u - acute'
        ],
        [
          '251',
          'u - circumflex'
        ],
        [
          '252',
          'u - diaeresis'
        ],
        [
          '363',
          'u - macron'
        ],
        [
          '253',
          'y - acute'
        ],
        [
          '254',
          'thorn'
        ],
        [
          '255',
          'y - diaeresis'
        ],
        [
          '563',
          'y - macron'
        ],
        [
          '913',
          'Alpha'
        ],
        [
          '914',
          'Beta'
        ],
        [
          '915',
          'Gamma'
        ],
        [
          '916',
          'Delta'
        ],
        [
          '917',
          'Epsilon'
        ],
        [
          '918',
          'Zeta'
        ],
        [
          '919',
          'Eta'
        ],
        [
          '920',
          'Theta'
        ],
        [
          '921',
          'Iota'
        ],
        [
          '922',
          'Kappa'
        ],
        [
          '923',
          'Lambda'
        ],
        [
          '924',
          'Mu'
        ],
        [
          '925',
          'Nu'
        ],
        [
          '926',
          'Xi'
        ],
        [
          '927',
          'Omicron'
        ],
        [
          '928',
          'Pi'
        ],
        [
          '929',
          'Rho'
        ],
        [
          '931',
          'Sigma'
        ],
        [
          '932',
          'Tau'
        ],
        [
          '933',
          'Upsilon'
        ],
        [
          '934',
          'Phi'
        ],
        [
          '935',
          'Chi'
        ],
        [
          '936',
          'Psi'
        ],
        [
          '937',
          'Omega'
        ],
        [
          '945',
          'alpha'
        ],
        [
          '946',
          'beta'
        ],
        [
          '947',
          'gamma'
        ],
        [
          '948',
          'delta'
        ],
        [
          '949',
          'epsilon'
        ],
        [
          '950',
          'zeta'
        ],
        [
          '951',
          'eta'
        ],
        [
          '952',
          'theta'
        ],
        [
          '953',
          'iota'
        ],
        [
          '954',
          'kappa'
        ],
        [
          '955',
          'lambda'
        ],
        [
          '956',
          'mu'
        ],
        [
          '957',
          'nu'
        ],
        [
          '958',
          'xi'
        ],
        [
          '959',
          'omicron'
        ],
        [
          '960',
          'pi'
        ],
        [
          '961',
          'rho'
        ],
        [
          '962',
          'final sigma'
        ],
        [
          '963',
          'sigma'
        ],
        [
          '964',
          'tau'
        ],
        [
          '965',
          'upsilon'
        ],
        [
          '966',
          'phi'
        ],
        [
          '967',
          'chi'
        ],
        [
          '968',
          'psi'
        ],
        [
          '969',
          'omega'
        ],
        [
          '8501',
          'alef symbol'
        ],
        [
          '982',
          'pi symbol'
        ],
        [
          '8476',
          'real part symbol'
        ],
        [
          '978',
          'upsilon - hook symbol'
        ],
        [
          '8472',
          'Weierstrass p'
        ],
        [
          '8465',
          'imaginary part'
        ],
        [
          '8592',
          'leftwards arrow'
        ],
        [
          '8593',
          'upwards arrow'
        ],
        [
          '8594',
          'rightwards arrow'
        ],
        [
          '8595',
          'downwards arrow'
        ],
        [
          '8596',
          'left right arrow'
        ],
        [
          '8629',
          'carriage return'
        ],
        [
          '8656',
          'leftwards double arrow'
        ],
        [
          '8657',
          'upwards double arrow'
        ],
        [
          '8658',
          'rightwards double arrow'
        ],
        [
          '8659',
          'downwards double arrow'
        ],
        [
          '8660',
          'left right double arrow'
        ],
        [
          '8756',
          'therefore'
        ],
        [
          '8834',
          'subset of'
        ],
        [
          '8835',
          'superset of'
        ],
        [
          '8836',
          'not a subset of'
        ],
        [
          '8838',
          'subset of or equal to'
        ],
        [
          '8839',
          'superset of or equal to'
        ],
        [
          '8853',
          'circled plus'
        ],
        [
          '8855',
          'circled times'
        ],
        [
          '8869',
          'perpendicular'
        ],
        [
          '8901',
          'dot operator'
        ],
        [
          '8968',
          'left ceiling'
        ],
        [
          '8969',
          'right ceiling'
        ],
        [
          '8970',
          'left floor'
        ],
        [
          '8971',
          'right floor'
        ],
        [
          '9001',
          'left-pointing angle bracket'
        ],
        [
          '9002',
          'right-pointing angle bracket'
        ],
        [
          '9674',
          'lozenge'
        ],
        [
          '9824',
          'black spade suit'
        ],
        [
          '9827',
          'black club suit'
        ],
        [
          '9829',
          'black heart suit'
        ],
        [
          '9830',
          'black diamond suit'
        ],
        [
          '8194',
          'en space'
        ],
        [
          '8195',
          'em space'
        ],
        [
          '8201',
          'thin space'
        ],
        [
          '8204',
          'zero width non-joiner'
        ],
        [
          '8205',
          'zero width joiner'
        ],
        [
          '8206',
          'left-to-right mark'
        ],
        [
          '8207',
          'right-to-left mark'
        ]
      ];
    };
    var charmapFilter = function (charmap) {
      return global$1.grep(charmap, function (item) {
        return isArray(item) && item.length === 2;
      });
    };
    var getCharsFromSetting = function (settingValue) {
      if (isArray(settingValue)) {
        return [].concat(charmapFilter(settingValue));
      }
      if (typeof settingValue === 'function') {
        return settingValue();
      }
      return [];
    };
    var extendCharMap = function (editor, charmap) {
      var userCharMap = Settings.getCharMap(editor);
      if (userCharMap) {
        charmap = getCharsFromSetting(userCharMap);
      }
      var userCharMapAppend = Settings.getCharMapAppend(editor);
      if (userCharMapAppend) {
        return [].concat(charmap).concat(getCharsFromSetting(userCharMapAppend));
      }
      return charmap;
    };
    var getCharMap$1 = function (editor) {
      return extendCharMap(editor, getDefaultCharMap());
    };
    var CharMap = { getCharMap: getCharMap$1 };

    var get = function (editor) {
      var getCharMap = function () {
        return CharMap.getCharMap(editor);
      };
      var insertChar = function (chr) {
        Actions.insertChar(editor, chr);
      };
      return {
        getCharMap: getCharMap,
        insertChar: insertChar
      };
    };
    var Api = { get: get };

    var getHtml = function (charmap) {
      var gridHtml, x, y;
      var width = Math.min(charmap.length, 25);
      var height = Math.ceil(charmap.length / width);
      gridHtml = '<table role="presentation" cellspacing="0" class="mce-charmap"><tbody>';
      for (y = 0; y < height; y++) {
        gridHtml += '<tr>';
        for (x = 0; x < width; x++) {
          var index = y * width + x;
          if (index < charmap.length) {
            var chr = charmap[index];
            var charCode = parseInt(chr[0], 10);
            var chrText = chr ? String.fromCharCode(charCode) : '&nbsp;';
            gridHtml += '<td title="' + chr[1] + '">' + '<div tabindex="-1" title="' + chr[1] + '" role="button" data-chr="' + charCode + '">' + chrText + '</div>' + '</td>';
          } else {
            gridHtml += '<td />';
          }
        }
        gridHtml += '</tr>';
      }
      gridHtml += '</tbody></table>';
      return gridHtml;
    };
    var GridHtml = { getHtml: getHtml };

    var getParentTd = function (elm) {
      while (elm) {
        if (elm.nodeName === 'TD') {
          return elm;
        }
        elm = elm.parentNode;
      }
    };
    var open = function (editor) {
      var win;
      var charMapPanel = {
        type: 'container',
        html: GridHtml.getHtml(CharMap.getCharMap(editor)),
        onclick: function (e) {
          var target = e.target;
          if (/^(TD|DIV)$/.test(target.nodeName)) {
            var charDiv = getParentTd(target).firstChild;
            if (charDiv && charDiv.hasAttribute('data-chr')) {
              var charCodeString = charDiv.getAttribute('data-chr');
              var charCode = parseInt(charCodeString, 10);
              if (!isNaN(charCode)) {
                Actions.insertChar(editor, String.fromCharCode(charCode));
              }
              if (!e.ctrlKey) {
                win.close();
              }
            }
          }
        },
        onmouseover: function (e) {
          var td = getParentTd(e.target);
          if (td && td.firstChild) {
            win.find('#preview').text(td.firstChild.firstChild.data);
            win.find('#previewTitle').text(td.title);
          } else {
            win.find('#preview').text(' ');
            win.find('#previewTitle').text(' ');
          }
        }
      };
      win = editor.windowManager.open({
        title: 'Special character',
        spacing: 10,
        padding: 10,
        items: [
          charMapPanel,
          {
            type: 'container',
            layout: 'flex',
            direction: 'column',
            align: 'center',
            spacing: 5,
            minWidth: 160,
            minHeight: 160,
            items: [
              {
                type: 'label',
                name: 'preview',
                text: ' ',
                style: 'font-size: 40px; text-align: center',
                border: 1,
                minWidth: 140,
                minHeight: 80
              },
              {
                type: 'spacer',
                minHeight: 20
              },
              {
                type: 'label',
                name: 'previewTitle',
                text: ' ',
                style: 'white-space: pre-wrap;',
                border: 1,
                minWidth: 140
              }
            ]
          }
        ],
        buttons: [{
            text: 'Close',
            onclick: function () {
              win.close();
            }
          }]
      });
    };
    var Dialog = { open: open };

    var register = function (editor) {
      editor.addCommand('mceShowCharmap', function () {
        Dialog.open(editor);
      });
    };
    var Commands = { register: register };

    var register$1 = function (editor) {
      editor.addButton('charmap', {
        icon: 'charmap',
        tooltip: 'Special character',
        cmd: 'mceShowCharmap'
      });
      editor.addMenuItem('charmap', {
        icon: 'charmap',
        text: 'Special character',
        cmd: 'mceShowCharmap',
        context: 'insert'
      });
    };
    var Buttons = { register: register$1 };

    global.add('charmap', function (editor) {
      Commands.register(editor);
      Buttons.register(editor);
      return Api.get(editor);
    });
    function Plugin () {
    }

    return Plugin;

}());
})();


/***/ }),

/***/ "./node_modules/tinymce/plugins/hr/index.js":
/*!**************************************************!*\
  !*** ./node_modules/tinymce/plugins/hr/index.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// Exports the "hr" plugin for usage with module loaders
// Usage:
//   CommonJS:
//     require('tinymce/plugins/hr')
//   ES2015:
//     import 'tinymce/plugins/hr'
__webpack_require__(/*! ./plugin.js */ "./node_modules/tinymce/plugins/hr/plugin.js");

/***/ }),

/***/ "./node_modules/tinymce/plugins/hr/plugin.js":
/*!***************************************************!*\
  !*** ./node_modules/tinymce/plugins/hr/plugin.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
var hr = (function () {
    'use strict';

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var register = function (editor) {
      editor.addCommand('InsertHorizontalRule', function () {
        editor.execCommand('mceInsertContent', false, '<hr />');
      });
    };
    var Commands = { register: register };

    var register$1 = function (editor) {
      editor.addButton('hr', {
        icon: 'hr',
        tooltip: 'Horizontal line',
        cmd: 'InsertHorizontalRule'
      });
      editor.addMenuItem('hr', {
        icon: 'hr',
        text: 'Horizontal line',
        cmd: 'InsertHorizontalRule',
        context: 'insert'
      });
    };
    var Buttons = { register: register$1 };

    global.add('hr', function (editor) {
      Commands.register(editor);
      Buttons.register(editor);
    });
    function Plugin () {
    }

    return Plugin;

}());
})();


/***/ }),

/***/ "./node_modules/tinymce/plugins/imagetools/index.js":
/*!**********************************************************!*\
  !*** ./node_modules/tinymce/plugins/imagetools/index.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// Exports the "imagetools" plugin for usage with module loaders
// Usage:
//   CommonJS:
//     require('tinymce/plugins/imagetools')
//   ES2015:
//     import 'tinymce/plugins/imagetools'
__webpack_require__(/*! ./plugin.js */ "./node_modules/tinymce/plugins/imagetools/plugin.js");

/***/ }),

/***/ "./node_modules/tinymce/plugins/imagetools/plugin.js":
/*!***********************************************************!*\
  !*** ./node_modules/tinymce/plugins/imagetools/plugin.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
var imagetools = (function (domGlobals) {
    'use strict';

    var Cell = function (initial) {
      var value = initial;
      var get = function () {
        return value;
      };
      var set = function (v) {
        value = v;
      };
      var clone = function () {
        return Cell(get());
      };
      return {
        get: get,
        set: set,
        clone: clone
      };
    };

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global$1 = tinymce.util.Tools.resolve('tinymce.util.Tools');

    function create(width, height) {
      return resize(domGlobals.document.createElement('canvas'), width, height);
    }
    function clone(canvas) {
      var tCanvas, ctx;
      tCanvas = create(canvas.width, canvas.height);
      ctx = get2dContext(tCanvas);
      ctx.drawImage(canvas, 0, 0);
      return tCanvas;
    }
    function get2dContext(canvas) {
      return canvas.getContext('2d');
    }
    function get3dContext(canvas) {
      var gl = null;
      try {
        gl = canvas.getContext('webgl') || canvas.getContext('experimental-webgl');
      } catch (e) {
      }
      if (!gl) {
        gl = null;
      }
      return gl;
    }
    function resize(canvas, width, height) {
      canvas.width = width;
      canvas.height = height;
      return canvas;
    }
    var Canvas = {
      create: create,
      clone: clone,
      resize: resize,
      get2dContext: get2dContext,
      get3dContext: get3dContext
    };

    function getWidth(image) {
      return image.naturalWidth || image.width;
    }
    function getHeight(image) {
      return image.naturalHeight || image.height;
    }
    var ImageSize = {
      getWidth: getWidth,
      getHeight: getHeight
    };

    var promise = function () {
      var Promise = function (fn) {
        if (typeof this !== 'object')
          throw new TypeError('Promises must be constructed via new');
        if (typeof fn !== 'function')
          throw new TypeError('not a function');
        this._state = null;
        this._value = null;
        this._deferreds = [];
        doResolve(fn, bind(resolve, this), bind(reject, this));
      };
      var asap = Promise.immediateFn || typeof window.setImmediate === 'function' && window.setImmediate || function (fn) {
        domGlobals.setTimeout(fn, 1);
      };
      function bind(fn, thisArg) {
        return function () {
          fn.apply(thisArg, arguments);
        };
      }
      var isArray = Array.isArray || function (value) {
        return Object.prototype.toString.call(value) === '[object Array]';
      };
      function handle(deferred) {
        var me = this;
        if (this._state === null) {
          this._deferreds.push(deferred);
          return;
        }
        asap(function () {
          var cb = me._state ? deferred.onFulfilled : deferred.onRejected;
          if (cb === null) {
            (me._state ? deferred.resolve : deferred.reject)(me._value);
            return;
          }
          var ret;
          try {
            ret = cb(me._value);
          } catch (e) {
            deferred.reject(e);
            return;
          }
          deferred.resolve(ret);
        });
      }
      function resolve(newValue) {
        try {
          if (newValue === this)
            throw new TypeError('A promise cannot be resolved with itself.');
          if (newValue && (typeof newValue === 'object' || typeof newValue === 'function')) {
            var then = newValue.then;
            if (typeof then === 'function') {
              doResolve(bind(then, newValue), bind(resolve, this), bind(reject, this));
              return;
            }
          }
          this._state = true;
          this._value = newValue;
          finale.call(this);
        } catch (e) {
          reject.call(this, e);
        }
      }
      function reject(newValue) {
        this._state = false;
        this._value = newValue;
        finale.call(this);
      }
      function finale() {
        for (var i = 0, len = this._deferreds.length; i < len; i++) {
          handle.call(this, this._deferreds[i]);
        }
        this._deferreds = null;
      }
      function Handler(onFulfilled, onRejected, resolve, reject) {
        this.onFulfilled = typeof onFulfilled === 'function' ? onFulfilled : null;
        this.onRejected = typeof onRejected === 'function' ? onRejected : null;
        this.resolve = resolve;
        this.reject = reject;
      }
      function doResolve(fn, onFulfilled, onRejected) {
        var done = false;
        try {
          fn(function (value) {
            if (done)
              return;
            done = true;
            onFulfilled(value);
          }, function (reason) {
            if (done)
              return;
            done = true;
            onRejected(reason);
          });
        } catch (ex) {
          if (done)
            return;
          done = true;
          onRejected(ex);
        }
      }
      Promise.prototype['catch'] = function (onRejected) {
        return this.then(null, onRejected);
      };
      Promise.prototype.then = function (onFulfilled, onRejected) {
        var me = this;
        return new Promise(function (resolve, reject) {
          handle.call(me, new Handler(onFulfilled, onRejected, resolve, reject));
        });
      };
      Promise.all = function () {
        var args = Array.prototype.slice.call(arguments.length === 1 && isArray(arguments[0]) ? arguments[0] : arguments);
        return new Promise(function (resolve, reject) {
          if (args.length === 0)
            return resolve([]);
          var remaining = args.length;
          function res(i, val) {
            try {
              if (val && (typeof val === 'object' || typeof val === 'function')) {
                var then = val.then;
                if (typeof then === 'function') {
                  then.call(val, function (val) {
                    res(i, val);
                  }, reject);
                  return;
                }
              }
              args[i] = val;
              if (--remaining === 0) {
                resolve(args);
              }
            } catch (ex) {
              reject(ex);
            }
          }
          for (var i = 0; i < args.length; i++) {
            res(i, args[i]);
          }
        });
      };
      Promise.resolve = function (value) {
        if (value && typeof value === 'object' && value.constructor === Promise) {
          return value;
        }
        return new Promise(function (resolve) {
          resolve(value);
        });
      };
      Promise.reject = function (value) {
        return new Promise(function (resolve, reject) {
          reject(value);
        });
      };
      Promise.race = function (values) {
        return new Promise(function (resolve, reject) {
          for (var i = 0, len = values.length; i < len; i++) {
            values[i].then(resolve, reject);
          }
        });
      };
      return Promise;
    };
    var Promise = window.Promise ? window.Promise : promise();

    var constant = function (value) {
      return function () {
        return value;
      };
    };
    function curry(fn) {
      var initialArgs = [];
      for (var _i = 1; _i < arguments.length; _i++) {
        initialArgs[_i - 1] = arguments[_i];
      }
      return function () {
        var restArgs = [];
        for (var _i = 0; _i < arguments.length; _i++) {
          restArgs[_i] = arguments[_i];
        }
        var all = initialArgs.concat(restArgs);
        return fn.apply(null, all);
      };
    }
    var never = constant(false);
    var always = constant(true);

    var never$1 = never;
    var always$1 = always;
    var none = function () {
      return NONE;
    };
    var NONE = function () {
      var eq = function (o) {
        return o.isNone();
      };
      var call = function (thunk) {
        return thunk();
      };
      var id = function (n) {
        return n;
      };
      var noop = function () {
      };
      var nul = function () {
        return null;
      };
      var undef = function () {
        return undefined;
      };
      var me = {
        fold: function (n, s) {
          return n();
        },
        is: never$1,
        isSome: never$1,
        isNone: always$1,
        getOr: id,
        getOrThunk: call,
        getOrDie: function (msg) {
          throw new Error(msg || 'error: getOrDie called on none.');
        },
        getOrNull: nul,
        getOrUndefined: undef,
        or: id,
        orThunk: call,
        map: none,
        ap: none,
        each: noop,
        bind: none,
        flatten: none,
        exists: never$1,
        forall: always$1,
        filter: none,
        equals: eq,
        equals_: eq,
        toArray: function () {
          return [];
        },
        toString: constant('none()')
      };
      if (Object.freeze)
        Object.freeze(me);
      return me;
    }();
    var some = function (a) {
      var constant_a = function () {
        return a;
      };
      var self = function () {
        return me;
      };
      var map = function (f) {
        return some(f(a));
      };
      var bind = function (f) {
        return f(a);
      };
      var me = {
        fold: function (n, s) {
          return s(a);
        },
        is: function (v) {
          return a === v;
        },
        isSome: always$1,
        isNone: never$1,
        getOr: constant_a,
        getOrThunk: constant_a,
        getOrDie: constant_a,
        getOrNull: constant_a,
        getOrUndefined: constant_a,
        or: self,
        orThunk: self,
        map: map,
        ap: function (optfab) {
          return optfab.fold(none, function (fab) {
            return some(fab(a));
          });
        },
        each: function (f) {
          f(a);
        },
        bind: bind,
        flatten: constant_a,
        exists: bind,
        forall: bind,
        filter: function (f) {
          return f(a) ? me : NONE;
        },
        equals: function (o) {
          return o.is(a);
        },
        equals_: function (o, elementEq) {
          return o.fold(never$1, function (b) {
            return elementEq(a, b);
          });
        },
        toArray: function () {
          return [a];
        },
        toString: function () {
          return 'some(' + a + ')';
        }
      };
      return me;
    };
    var from = function (value) {
      return value === null || value === undefined ? NONE : some(value);
    };
    var Option = {
      some: some,
      none: none,
      from: from
    };

    var Global = typeof domGlobals.window !== 'undefined' ? domGlobals.window : Function('return this;')();

    var path = function (parts, scope) {
      var o = scope !== undefined && scope !== null ? scope : Global;
      for (var i = 0; i < parts.length && o !== undefined && o !== null; ++i)
        o = o[parts[i]];
      return o;
    };
    var resolve = function (p, scope) {
      var parts = p.split('.');
      return path(parts, scope);
    };

    var unsafe = function (name, scope) {
      return resolve(name, scope);
    };
    var getOrDie = function (name, scope) {
      var actual = unsafe(name, scope);
      if (actual === undefined || actual === null)
        throw name + ' not available on this browser';
      return actual;
    };
    var Global$1 = { getOrDie: getOrDie };

    function Blob (parts, properties) {
      var f = Global$1.getOrDie('Blob');
      return new f(parts, properties);
    }

    function FileReader () {
      var f = Global$1.getOrDie('FileReader');
      return new f();
    }

    function Uint8Array (arr) {
      var f = Global$1.getOrDie('Uint8Array');
      return new f(arr);
    }

    var requestAnimationFrame = function (callback) {
      var f = Global$1.getOrDie('requestAnimationFrame');
      f(callback);
    };
    var atob = function (base64) {
      var f = Global$1.getOrDie('atob');
      return f(base64);
    };
    var Window = {
      atob: atob,
      requestAnimationFrame: requestAnimationFrame
    };

    function imageToBlob(image) {
      var src = image.src;
      if (src.indexOf('data:') === 0) {
        return dataUriToBlob(src);
      }
      return anyUriToBlob(src);
    }
    function blobToImage(blob) {
      return new Promise(function (resolve, reject) {
        var blobUrl = domGlobals.URL.createObjectURL(blob);
        var image = new domGlobals.Image();
        var removeListeners = function () {
          image.removeEventListener('load', loaded);
          image.removeEventListener('error', error);
        };
        function loaded() {
          removeListeners();
          resolve(image);
        }
        function error() {
          removeListeners();
          reject('Unable to load data of type ' + blob.type + ': ' + blobUrl);
        }
        image.addEventListener('load', loaded);
        image.addEventListener('error', error);
        image.src = blobUrl;
        if (image.complete) {
          loaded();
        }
      });
    }
    function anyUriToBlob(url) {
      return new Promise(function (resolve, reject) {
        var xhr = new domGlobals.XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.responseType = 'blob';
        xhr.onload = function () {
          if (this.status == 200) {
            resolve(this.response);
          }
        };
        xhr.onerror = function () {
          var _this = this;
          var corsError = function () {
            var obj = new Error('No access to download image');
            obj.code = 18;
            obj.name = 'SecurityError';
            return obj;
          };
          var genericError = function () {
            return new Error('Error ' + _this.status + ' downloading image');
          };
          reject(this.status === 0 ? corsError() : genericError());
        };
        xhr.send();
      });
    }
    function dataUriToBlobSync(uri) {
      var data = uri.split(',');
      var matches = /data:([^;]+)/.exec(data[0]);
      if (!matches)
        return Option.none();
      var mimetype = matches[1];
      var base64 = data[1];
      var sliceSize = 1024;
      var byteCharacters = Window.atob(base64);
      var bytesLength = byteCharacters.length;
      var slicesCount = Math.ceil(bytesLength / sliceSize);
      var byteArrays = new Array(slicesCount);
      for (var sliceIndex = 0; sliceIndex < slicesCount; ++sliceIndex) {
        var begin = sliceIndex * sliceSize;
        var end = Math.min(begin + sliceSize, bytesLength);
        var bytes = new Array(end - begin);
        for (var offset = begin, i = 0; offset < end; ++i, ++offset) {
          bytes[i] = byteCharacters[offset].charCodeAt(0);
        }
        byteArrays[sliceIndex] = Uint8Array(bytes);
      }
      return Option.some(Blob(byteArrays, { type: mimetype }));
    }
    function dataUriToBlob(uri) {
      return new Promise(function (resolve, reject) {
        dataUriToBlobSync(uri).fold(function () {
          reject('uri is not base64: ' + uri);
        }, resolve);
      });
    }
    function uriToBlob(url) {
      if (url.indexOf('blob:') === 0) {
        return anyUriToBlob(url);
      }
      if (url.indexOf('data:') === 0) {
        return dataUriToBlob(url);
      }
      return null;
    }
    function canvasToBlob(canvas, type, quality) {
      type = type || 'image/png';
      if (domGlobals.HTMLCanvasElement.prototype.toBlob) {
        return new Promise(function (resolve) {
          canvas.toBlob(function (blob) {
            resolve(blob);
          }, type, quality);
        });
      } else {
        return dataUriToBlob(canvas.toDataURL(type, quality));
      }
    }
    function canvasToDataURL(getCanvas, type, quality) {
      type = type || 'image/png';
      return getCanvas.then(function (canvas) {
        return canvas.toDataURL(type, quality);
      });
    }
    function blobToCanvas(blob) {
      return blobToImage(blob).then(function (image) {
        revokeImageUrl(image);
        var context, canvas;
        canvas = Canvas.create(ImageSize.getWidth(image), ImageSize.getHeight(image));
        context = Canvas.get2dContext(canvas);
        context.drawImage(image, 0, 0);
        return canvas;
      });
    }
    function blobToDataUri(blob) {
      return new Promise(function (resolve) {
        var reader = FileReader();
        reader.onloadend = function () {
          resolve(reader.result);
        };
        reader.readAsDataURL(blob);
      });
    }
    function blobToArrayBuffer(blob) {
      return new Promise(function (resolve) {
        var reader = FileReader();
        reader.onloadend = function () {
          resolve(reader.result);
        };
        reader.readAsArrayBuffer(blob);
      });
    }
    function blobToBase64(blob) {
      return blobToDataUri(blob).then(function (dataUri) {
        return dataUri.split(',')[1];
      });
    }
    function revokeImageUrl(image) {
      domGlobals.URL.revokeObjectURL(image.src);
    }
    var Conversions = {
      blobToImage: blobToImage,
      imageToBlob: imageToBlob,
      blobToArrayBuffer: blobToArrayBuffer,
      blobToDataUri: blobToDataUri,
      blobToBase64: blobToBase64,
      dataUriToBlobSync: dataUriToBlobSync,
      canvasToBlob: canvasToBlob,
      canvasToDataURL: canvasToDataURL,
      blobToCanvas: blobToCanvas,
      uriToBlob: uriToBlob
    };

    var blobToImage$1 = function (image) {
      return Conversions.blobToImage(image);
    };
    var imageToBlob$1 = function (blob) {
      return Conversions.imageToBlob(blob);
    };
    var blobToDataUri$1 = function (blob) {
      return Conversions.blobToDataUri(blob);
    };
    var blobToBase64$1 = function (blob) {
      return Conversions.blobToBase64(blob);
    };
    var dataUriToBlobSync$1 = function (uri) {
      return Conversions.dataUriToBlobSync(uri);
    };
    var uriToBlob$1 = function (uri) {
      return Option.from(Conversions.uriToBlob(uri));
    };
    var BlobConversions = {
      blobToImage: blobToImage$1,
      imageToBlob: imageToBlob$1,
      blobToDataUri: blobToDataUri$1,
      blobToBase64: blobToBase64$1,
      dataUriToBlobSync: dataUriToBlobSync$1,
      uriToBlob: uriToBlob$1
    };

    function create$1(getCanvas, blob, uri) {
      var initialType = blob.type;
      var getType = constant(initialType);
      function toBlob() {
        return Promise.resolve(blob);
      }
      function toDataURL() {
        return uri;
      }
      function toBase64() {
        return uri.split(',')[1];
      }
      function toAdjustedBlob(type, quality) {
        return getCanvas.then(function (canvas) {
          return Conversions.canvasToBlob(canvas, type, quality);
        });
      }
      function toAdjustedDataURL(type, quality) {
        return getCanvas.then(function (canvas) {
          return Conversions.canvasToDataURL(canvas, type, quality);
        });
      }
      function toAdjustedBase64(type, quality) {
        return toAdjustedDataURL(type, quality).then(function (dataurl) {
          return dataurl.split(',')[1];
        });
      }
      function toCanvas() {
        return getCanvas.then(Canvas.clone);
      }
      return {
        getType: getType,
        toBlob: toBlob,
        toDataURL: toDataURL,
        toBase64: toBase64,
        toAdjustedBlob: toAdjustedBlob,
        toAdjustedDataURL: toAdjustedDataURL,
        toAdjustedBase64: toAdjustedBase64,
        toCanvas: toCanvas
      };
    }
    function fromBlob(blob) {
      return Conversions.blobToDataUri(blob).then(function (uri) {
        return create$1(Conversions.blobToCanvas(blob), blob, uri);
      });
    }
    function fromCanvas(canvas, type) {
      return Conversions.canvasToBlob(canvas, type).then(function (blob) {
        return create$1(Promise.resolve(canvas), blob, canvas.toDataURL());
      });
    }
    function fromImage(image) {
      return Conversions.imageToBlob(image).then(function (blob) {
        return fromBlob(blob);
      });
    }
    var fromBlobAndUrlSync = function (blob, url) {
      return create$1(Conversions.blobToCanvas(blob), blob, url);
    };
    var ImageResult = {
      fromBlob: fromBlob,
      fromCanvas: fromCanvas,
      fromImage: fromImage,
      fromBlobAndUrlSync: fromBlobAndUrlSync
    };

    function clamp(value, min, max) {
      value = parseFloat(value);
      if (value > max) {
        value = max;
      } else if (value < min) {
        value = min;
      }
      return value;
    }
    function identity() {
      return [
        1,
        0,
        0,
        0,
        0,
        0,
        1,
        0,
        0,
        0,
        0,
        0,
        1,
        0,
        0,
        0,
        0,
        0,
        1,
        0,
        0,
        0,
        0,
        0,
        1
      ];
    }
    var DELTA_INDEX = [
      0,
      0.01,
      0.02,
      0.04,
      0.05,
      0.06,
      0.07,
      0.08,
      0.1,
      0.11,
      0.12,
      0.14,
      0.15,
      0.16,
      0.17,
      0.18,
      0.2,
      0.21,
      0.22,
      0.24,
      0.25,
      0.27,
      0.28,
      0.3,
      0.32,
      0.34,
      0.36,
      0.38,
      0.4,
      0.42,
      0.44,
      0.46,
      0.48,
      0.5,
      0.53,
      0.56,
      0.59,
      0.62,
      0.65,
      0.68,
      0.71,
      0.74,
      0.77,
      0.8,
      0.83,
      0.86,
      0.89,
      0.92,
      0.95,
      0.98,
      1,
      1.06,
      1.12,
      1.18,
      1.24,
      1.3,
      1.36,
      1.42,
      1.48,
      1.54,
      1.6,
      1.66,
      1.72,
      1.78,
      1.84,
      1.9,
      1.96,
      2,
      2.12,
      2.25,
      2.37,
      2.5,
      2.62,
      2.75,
      2.87,
      3,
      3.2,
      3.4,
      3.6,
      3.8,
      4,
      4.3,
      4.7,
      4.9,
      5,
      5.5,
      6,
      6.5,
      6.8,
      7,
      7.3,
      7.5,
      7.8,
      8,
      8.4,
      8.7,
      9,
      9.4,
      9.6,
      9.8,
      10
    ];
    function multiply(matrix1, matrix2) {
      var i, j, k, val, col = [], out = new Array(10);
      for (i = 0; i < 5; i++) {
        for (j = 0; j < 5; j++) {
          col[j] = matrix2[j + i * 5];
        }
        for (j = 0; j < 5; j++) {
          val = 0;
          for (k = 0; k < 5; k++) {
            val += matrix1[j + k * 5] * col[k];
          }
          out[j + i * 5] = val;
        }
      }
      return out;
    }
    function adjust(matrix, adjustValue) {
      adjustValue = clamp(adjustValue, 0, 1);
      return matrix.map(function (value, index) {
        if (index % 6 === 0) {
          value = 1 - (1 - value) * adjustValue;
        } else {
          value *= adjustValue;
        }
        return clamp(value, 0, 1);
      });
    }
    function adjustContrast(matrix, value) {
      var x;
      value = clamp(value, -1, 1);
      value *= 100;
      if (value < 0) {
        x = 127 + value / 100 * 127;
      } else {
        x = value % 1;
        if (x === 0) {
          x = DELTA_INDEX[value];
        } else {
          x = DELTA_INDEX[Math.floor(value)] * (1 - x) + DELTA_INDEX[Math.floor(value) + 1] * x;
        }
        x = x * 127 + 127;
      }
      return multiply(matrix, [
        x / 127,
        0,
        0,
        0,
        0.5 * (127 - x),
        0,
        x / 127,
        0,
        0,
        0.5 * (127 - x),
        0,
        0,
        x / 127,
        0,
        0.5 * (127 - x),
        0,
        0,
        0,
        1,
        0,
        0,
        0,
        0,
        0,
        1
      ]);
    }
    function adjustSaturation(matrix, value) {
      var x, lumR, lumG, lumB;
      value = clamp(value, -1, 1);
      x = 1 + (value > 0 ? 3 * value : value);
      lumR = 0.3086;
      lumG = 0.6094;
      lumB = 0.082;
      return multiply(matrix, [
        lumR * (1 - x) + x,
        lumG * (1 - x),
        lumB * (1 - x),
        0,
        0,
        lumR * (1 - x),
        lumG * (1 - x) + x,
        lumB * (1 - x),
        0,
        0,
        lumR * (1 - x),
        lumG * (1 - x),
        lumB * (1 - x) + x,
        0,
        0,
        0,
        0,
        0,
        1,
        0,
        0,
        0,
        0,
        0,
        1
      ]);
    }
    function adjustHue(matrix, angle) {
      var cosVal, sinVal, lumR, lumG, lumB;
      angle = clamp(angle, -180, 180) / 180 * Math.PI;
      cosVal = Math.cos(angle);
      sinVal = Math.sin(angle);
      lumR = 0.213;
      lumG = 0.715;
      lumB = 0.072;
      return multiply(matrix, [
        lumR + cosVal * (1 - lumR) + sinVal * -lumR,
        lumG + cosVal * -lumG + sinVal * -lumG,
        lumB + cosVal * -lumB + sinVal * (1 - lumB),
        0,
        0,
        lumR + cosVal * -lumR + sinVal * 0.143,
        lumG + cosVal * (1 - lumG) + sinVal * 0.14,
        lumB + cosVal * -lumB + sinVal * -0.283,
        0,
        0,
        lumR + cosVal * -lumR + sinVal * -(1 - lumR),
        lumG + cosVal * -lumG + sinVal * lumG,
        lumB + cosVal * (1 - lumB) + sinVal * lumB,
        0,
        0,
        0,
        0,
        0,
        1,
        0,
        0,
        0,
        0,
        0,
        1
      ]);
    }
    function adjustBrightness(matrix, value) {
      value = clamp(255 * value, -255, 255);
      return multiply(matrix, [
        1,
        0,
        0,
        0,
        value,
        0,
        1,
        0,
        0,
        value,
        0,
        0,
        1,
        0,
        value,
        0,
        0,
        0,
        1,
        0,
        0,
        0,
        0,
        0,
        1
      ]);
    }
    function adjustColors(matrix, adjustR, adjustG, adjustB) {
      adjustR = clamp(adjustR, 0, 2);
      adjustG = clamp(adjustG, 0, 2);
      adjustB = clamp(adjustB, 0, 2);
      return multiply(matrix, [
        adjustR,
        0,
        0,
        0,
        0,
        0,
        adjustG,
        0,
        0,
        0,
        0,
        0,
        adjustB,
        0,
        0,
        0,
        0,
        0,
        1,
        0,
        0,
        0,
        0,
        0,
        1
      ]);
    }
    function adjustSepia(matrix, value) {
      value = clamp(value, 0, 1);
      return multiply(matrix, adjust([
        0.393,
        0.769,
        0.189,
        0,
        0,
        0.349,
        0.686,
        0.168,
        0,
        0,
        0.272,
        0.534,
        0.131,
        0,
        0,
        0,
        0,
        0,
        1,
        0,
        0,
        0,
        0,
        0,
        1
      ], value));
    }
    function adjustGrayscale(matrix, value) {
      value = clamp(value, 0, 1);
      return multiply(matrix, adjust([
        0.33,
        0.34,
        0.33,
        0,
        0,
        0.33,
        0.34,
        0.33,
        0,
        0,
        0.33,
        0.34,
        0.33,
        0,
        0,
        0,
        0,
        0,
        1,
        0,
        0,
        0,
        0,
        0,
        1
      ], value));
    }
    var ColorMatrix = {
      identity: identity,
      adjust: adjust,
      multiply: multiply,
      adjustContrast: adjustContrast,
      adjustBrightness: adjustBrightness,
      adjustSaturation: adjustSaturation,
      adjustHue: adjustHue,
      adjustColors: adjustColors,
      adjustSepia: adjustSepia,
      adjustGrayscale: adjustGrayscale
    };

    function colorFilter(ir, matrix) {
      return ir.toCanvas().then(function (canvas) {
        return applyColorFilter(canvas, ir.getType(), matrix);
      });
    }
    function applyColorFilter(canvas, type, matrix) {
      var context = Canvas.get2dContext(canvas);
      var pixels;
      function applyMatrix(pixels, m) {
        var d = pixels.data, r, g, b, a, i, m0 = m[0], m1 = m[1], m2 = m[2], m3 = m[3], m4 = m[4], m5 = m[5], m6 = m[6], m7 = m[7], m8 = m[8], m9 = m[9], m10 = m[10], m11 = m[11], m12 = m[12], m13 = m[13], m14 = m[14], m15 = m[15], m16 = m[16], m17 = m[17], m18 = m[18], m19 = m[19];
        for (i = 0; i < d.length; i += 4) {
          r = d[i];
          g = d[i + 1];
          b = d[i + 2];
          a = d[i + 3];
          d[i] = r * m0 + g * m1 + b * m2 + a * m3 + m4;
          d[i + 1] = r * m5 + g * m6 + b * m7 + a * m8 + m9;
          d[i + 2] = r * m10 + g * m11 + b * m12 + a * m13 + m14;
          d[i + 3] = r * m15 + g * m16 + b * m17 + a * m18 + m19;
        }
        return pixels;
      }
      pixels = applyMatrix(context.getImageData(0, 0, canvas.width, canvas.height), matrix);
      context.putImageData(pixels, 0, 0);
      return ImageResult.fromCanvas(canvas, type);
    }
    function convoluteFilter(ir, matrix) {
      return ir.toCanvas().then(function (canvas) {
        return applyConvoluteFilter(canvas, ir.getType(), matrix);
      });
    }
    function applyConvoluteFilter(canvas, type, matrix) {
      var context = Canvas.get2dContext(canvas);
      var pixelsIn, pixelsOut;
      function applyMatrix(pixelsIn, pixelsOut, matrix) {
        var rgba, drgba, side, halfSide, x, y, r, g, b, cx, cy, scx, scy, offset, wt, w, h;
        function clamp(value, min, max) {
          if (value > max) {
            value = max;
          } else if (value < min) {
            value = min;
          }
          return value;
        }
        side = Math.round(Math.sqrt(matrix.length));
        halfSide = Math.floor(side / 2);
        rgba = pixelsIn.data;
        drgba = pixelsOut.data;
        w = pixelsIn.width;
        h = pixelsIn.height;
        for (y = 0; y < h; y++) {
          for (x = 0; x < w; x++) {
            r = g = b = 0;
            for (cy = 0; cy < side; cy++) {
              for (cx = 0; cx < side; cx++) {
                scx = clamp(x + cx - halfSide, 0, w - 1);
                scy = clamp(y + cy - halfSide, 0, h - 1);
                offset = (scy * w + scx) * 4;
                wt = matrix[cy * side + cx];
                r += rgba[offset] * wt;
                g += rgba[offset + 1] * wt;
                b += rgba[offset + 2] * wt;
              }
            }
            offset = (y * w + x) * 4;
            drgba[offset] = clamp(r, 0, 255);
            drgba[offset + 1] = clamp(g, 0, 255);
            drgba[offset + 2] = clamp(b, 0, 255);
          }
        }
        return pixelsOut;
      }
      pixelsIn = context.getImageData(0, 0, canvas.width, canvas.height);
      pixelsOut = context.getImageData(0, 0, canvas.width, canvas.height);
      pixelsOut = applyMatrix(pixelsIn, pixelsOut, matrix);
      context.putImageData(pixelsOut, 0, 0);
      return ImageResult.fromCanvas(canvas, type);
    }
    function functionColorFilter(colorFn) {
      var filterImpl = function (canvas, type, value) {
        var context = Canvas.get2dContext(canvas);
        var pixels, i, lookup = new Array(256);
        function applyLookup(pixels, lookup) {
          var d = pixels.data, i;
          for (i = 0; i < d.length; i += 4) {
            d[i] = lookup[d[i]];
            d[i + 1] = lookup[d[i + 1]];
            d[i + 2] = lookup[d[i + 2]];
          }
          return pixels;
        }
        for (i = 0; i < lookup.length; i++) {
          lookup[i] = colorFn(i, value);
        }
        pixels = applyLookup(context.getImageData(0, 0, canvas.width, canvas.height), lookup);
        context.putImageData(pixels, 0, 0);
        return ImageResult.fromCanvas(canvas, type);
      };
      return function (ir, value) {
        return ir.toCanvas().then(function (canvas) {
          return filterImpl(canvas, ir.getType(), value);
        });
      };
    }
    function complexAdjustableColorFilter(matrixAdjustFn) {
      return function (ir, adjust) {
        return colorFilter(ir, matrixAdjustFn(ColorMatrix.identity(), adjust));
      };
    }
    function basicColorFilter(matrix) {
      return function (ir) {
        return colorFilter(ir, matrix);
      };
    }
    function basicConvolutionFilter(kernel) {
      return function (ir) {
        return convoluteFilter(ir, kernel);
      };
    }
    var Filters = {
      invert: basicColorFilter([
        -1,
        0,
        0,
        0,
        255,
        0,
        -1,
        0,
        0,
        255,
        0,
        0,
        -1,
        0,
        255,
        0,
        0,
        0,
        1,
        0
      ]),
      brightness: complexAdjustableColorFilter(ColorMatrix.adjustBrightness),
      hue: complexAdjustableColorFilter(ColorMatrix.adjustHue),
      saturate: complexAdjustableColorFilter(ColorMatrix.adjustSaturation),
      contrast: complexAdjustableColorFilter(ColorMatrix.adjustContrast),
      grayscale: complexAdjustableColorFilter(ColorMatrix.adjustGrayscale),
      sepia: complexAdjustableColorFilter(ColorMatrix.adjustSepia),
      colorize: function (ir, adjustR, adjustG, adjustB) {
        return colorFilter(ir, ColorMatrix.adjustColors(ColorMatrix.identity(), adjustR, adjustG, adjustB));
      },
      sharpen: basicConvolutionFilter([
        0,
        -1,
        0,
        -1,
        5,
        -1,
        0,
        -1,
        0
      ]),
      emboss: basicConvolutionFilter([
        -2,
        -1,
        0,
        -1,
        1,
        1,
        0,
        1,
        2
      ]),
      gamma: functionColorFilter(function (color, value) {
        return Math.pow(color / 255, 1 - value) * 255;
      }),
      exposure: functionColorFilter(function (color, value) {
        return 255 * (1 - Math.exp(-(color / 255) * value));
      }),
      colorFilter: colorFilter,
      convoluteFilter: convoluteFilter
    };

    function scale(image, dW, dH) {
      var sW = ImageSize.getWidth(image);
      var sH = ImageSize.getHeight(image);
      var wRatio = dW / sW;
      var hRatio = dH / sH;
      var scaleCapped = false;
      if (wRatio < 0.5 || wRatio > 2) {
        wRatio = wRatio < 0.5 ? 0.5 : 2;
        scaleCapped = true;
      }
      if (hRatio < 0.5 || hRatio > 2) {
        hRatio = hRatio < 0.5 ? 0.5 : 2;
        scaleCapped = true;
      }
      var scaled = _scale(image, wRatio, hRatio);
      return !scaleCapped ? scaled : scaled.then(function (tCanvas) {
        return scale(tCanvas, dW, dH);
      });
    }
    function _scale(image, wRatio, hRatio) {
      return new Promise(function (resolve) {
        var sW = ImageSize.getWidth(image);
        var sH = ImageSize.getHeight(image);
        var dW = Math.floor(sW * wRatio);
        var dH = Math.floor(sH * hRatio);
        var canvas = Canvas.create(dW, dH);
        var context = Canvas.get2dContext(canvas);
        context.drawImage(image, 0, 0, sW, sH, 0, 0, dW, dH);
        resolve(canvas);
      });
    }
    var ImageResizerCanvas = { scale: scale };

    function rotate(ir, angle) {
      return ir.toCanvas().then(function (canvas) {
        return applyRotate(canvas, ir.getType(), angle);
      });
    }
    function applyRotate(image, type, angle) {
      var canvas = Canvas.create(image.width, image.height);
      var context = Canvas.get2dContext(canvas);
      var translateX = 0, translateY = 0;
      angle = angle < 0 ? 360 + angle : angle;
      if (angle == 90 || angle == 270) {
        Canvas.resize(canvas, canvas.height, canvas.width);
      }
      if (angle == 90 || angle == 180) {
        translateX = canvas.width;
      }
      if (angle == 270 || angle == 180) {
        translateY = canvas.height;
      }
      context.translate(translateX, translateY);
      context.rotate(angle * Math.PI / 180);
      context.drawImage(image, 0, 0);
      return ImageResult.fromCanvas(canvas, type);
    }
    function flip(ir, axis) {
      return ir.toCanvas().then(function (canvas) {
        return applyFlip(canvas, ir.getType(), axis);
      });
    }
    function applyFlip(image, type, axis) {
      var canvas = Canvas.create(image.width, image.height);
      var context = Canvas.get2dContext(canvas);
      if (axis == 'v') {
        context.scale(1, -1);
        context.drawImage(image, 0, -canvas.height);
      } else {
        context.scale(-1, 1);
        context.drawImage(image, -canvas.width, 0);
      }
      return ImageResult.fromCanvas(canvas, type);
    }
    function crop(ir, x, y, w, h) {
      return ir.toCanvas().then(function (canvas) {
        return applyCrop(canvas, ir.getType(), x, y, w, h);
      });
    }
    function applyCrop(image, type, x, y, w, h) {
      var canvas = Canvas.create(w, h);
      var context = Canvas.get2dContext(canvas);
      context.drawImage(image, -x, -y);
      return ImageResult.fromCanvas(canvas, type);
    }
    function resize$1(ir, w, h) {
      return ir.toCanvas().then(function (canvas) {
        return ImageResizerCanvas.scale(canvas, w, h).then(function (newCanvas) {
          return ImageResult.fromCanvas(newCanvas, ir.getType());
        });
      });
    }
    var ImageTools = {
      rotate: rotate,
      flip: flip,
      crop: crop,
      resize: resize$1
    };

    var BinaryReader = function () {
      function BinaryReader(ar) {
        this.littleEndian = false;
        this._dv = new DataView(ar);
      }
      BinaryReader.prototype.readByteAt = function (idx) {
        return this._dv.getUint8(idx);
      };
      BinaryReader.prototype.read = function (idx, size) {
        if (idx + size > this.length()) {
          return null;
        }
        var mv = this.littleEndian ? 0 : -8 * (size - 1);
        for (var i = 0, sum = 0; i < size; i++) {
          sum |= this.readByteAt(idx + i) << Math.abs(mv + i * 8);
        }
        return sum;
      };
      BinaryReader.prototype.BYTE = function (idx) {
        return this.read(idx, 1);
      };
      BinaryReader.prototype.SHORT = function (idx) {
        return this.read(idx, 2);
      };
      BinaryReader.prototype.LONG = function (idx) {
        return this.read(idx, 4);
      };
      BinaryReader.prototype.SLONG = function (idx) {
        var num = this.read(idx, 4);
        return num > 2147483647 ? num - 4294967296 : num;
      };
      BinaryReader.prototype.CHAR = function (idx) {
        return String.fromCharCode(this.read(idx, 1));
      };
      BinaryReader.prototype.STRING = function (idx, count) {
        return this.asArray('CHAR', idx, count).join('');
      };
      BinaryReader.prototype.SEGMENT = function (idx, size) {
        var ar = this._dv.buffer;
        switch (arguments.length) {
        case 2:
          return ar.slice(idx, idx + size);
        case 1:
          return ar.slice(idx);
        default:
          return ar;
        }
      };
      BinaryReader.prototype.asArray = function (type, idx, count) {
        var values = [];
        for (var i = 0; i < count; i++) {
          values[i] = this[type](idx + i);
        }
        return values;
      };
      BinaryReader.prototype.length = function () {
        return this._dv ? this._dv.byteLength : 0;
      };
      return BinaryReader;
    }();

    var tags = {
      tiff: {
        274: 'Orientation',
        270: 'ImageDescription',
        271: 'Make',
        272: 'Model',
        305: 'Software',
        34665: 'ExifIFDPointer',
        34853: 'GPSInfoIFDPointer'
      },
      exif: {
        36864: 'ExifVersion',
        40961: 'ColorSpace',
        40962: 'PixelXDimension',
        40963: 'PixelYDimension',
        36867: 'DateTimeOriginal',
        33434: 'ExposureTime',
        33437: 'FNumber',
        34855: 'ISOSpeedRatings',
        37377: 'ShutterSpeedValue',
        37378: 'ApertureValue',
        37383: 'MeteringMode',
        37384: 'LightSource',
        37385: 'Flash',
        37386: 'FocalLength',
        41986: 'ExposureMode',
        41987: 'WhiteBalance',
        41990: 'SceneCaptureType',
        41988: 'DigitalZoomRatio',
        41992: 'Contrast',
        41993: 'Saturation',
        41994: 'Sharpness'
      },
      gps: {
        0: 'GPSVersionID',
        1: 'GPSLatitudeRef',
        2: 'GPSLatitude',
        3: 'GPSLongitudeRef',
        4: 'GPSLongitude'
      },
      thumb: {
        513: 'JPEGInterchangeFormat',
        514: 'JPEGInterchangeFormatLength'
      }
    };
    var tagDescs = {
      'ColorSpace': {
        1: 'sRGB',
        0: 'Uncalibrated'
      },
      'MeteringMode': {
        0: 'Unknown',
        1: 'Average',
        2: 'CenterWeightedAverage',
        3: 'Spot',
        4: 'MultiSpot',
        5: 'Pattern',
        6: 'Partial',
        255: 'Other'
      },
      'LightSource': {
        1: 'Daylight',
        2: 'Fliorescent',
        3: 'Tungsten',
        4: 'Flash',
        9: 'Fine weather',
        10: 'Cloudy weather',
        11: 'Shade',
        12: 'Daylight fluorescent (D 5700 - 7100K)',
        13: 'Day white fluorescent (N 4600 -5400K)',
        14: 'Cool white fluorescent (W 3900 - 4500K)',
        15: 'White fluorescent (WW 3200 - 3700K)',
        17: 'Standard light A',
        18: 'Standard light B',
        19: 'Standard light C',
        20: 'D55',
        21: 'D65',
        22: 'D75',
        23: 'D50',
        24: 'ISO studio tungsten',
        255: 'Other'
      },
      'Flash': {
        0: 'Flash did not fire',
        1: 'Flash fired',
        5: 'Strobe return light not detected',
        7: 'Strobe return light detected',
        9: 'Flash fired, compulsory flash mode',
        13: 'Flash fired, compulsory flash mode, return light not detected',
        15: 'Flash fired, compulsory flash mode, return light detected',
        16: 'Flash did not fire, compulsory flash mode',
        24: 'Flash did not fire, auto mode',
        25: 'Flash fired, auto mode',
        29: 'Flash fired, auto mode, return light not detected',
        31: 'Flash fired, auto mode, return light detected',
        32: 'No flash function',
        65: 'Flash fired, red-eye reduction mode',
        69: 'Flash fired, red-eye reduction mode, return light not detected',
        71: 'Flash fired, red-eye reduction mode, return light detected',
        73: 'Flash fired, compulsory flash mode, red-eye reduction mode',
        77: 'Flash fired, compulsory flash mode, red-eye reduction mode, return light not detected',
        79: 'Flash fired, compulsory flash mode, red-eye reduction mode, return light detected',
        89: 'Flash fired, auto mode, red-eye reduction mode',
        93: 'Flash fired, auto mode, return light not detected, red-eye reduction mode',
        95: 'Flash fired, auto mode, return light detected, red-eye reduction mode'
      },
      'ExposureMode': {
        0: 'Auto exposure',
        1: 'Manual exposure',
        2: 'Auto bracket'
      },
      'WhiteBalance': {
        0: 'Auto white balance',
        1: 'Manual white balance'
      },
      'SceneCaptureType': {
        0: 'Standard',
        1: 'Landscape',
        2: 'Portrait',
        3: 'Night scene'
      },
      'Contrast': {
        0: 'Normal',
        1: 'Soft',
        2: 'Hard'
      },
      'Saturation': {
        0: 'Normal',
        1: 'Low saturation',
        2: 'High saturation'
      },
      'Sharpness': {
        0: 'Normal',
        1: 'Soft',
        2: 'Hard'
      },
      'GPSLatitudeRef': {
        N: 'North latitude',
        S: 'South latitude'
      },
      'GPSLongitudeRef': {
        E: 'East longitude',
        W: 'West longitude'
      }
    };
    var ExifReader = function () {
      function ExifReader(ar) {
        this._offsets = {
          tiffHeader: 10,
          IFD0: null,
          IFD1: null,
          exifIFD: null,
          gpsIFD: null
        };
        this._tiffTags = {};
        var self = this;
        self._reader = new BinaryReader(ar);
        self._idx = self._offsets.tiffHeader;
        if (self.SHORT(0) !== 65505 || self.STRING(4, 5).toUpperCase() !== 'EXIF\0') {
          throw new Error('Exif data cannot be read or not available.');
        }
        self._reader.littleEndian = self.SHORT(self._idx) == 18761;
        if (self.SHORT(self._idx += 2) !== 42) {
          throw new Error('Invalid Exif data.');
        }
        self._offsets.IFD0 = self._offsets.tiffHeader + self.LONG(self._idx += 2);
        self._tiffTags = self.extractTags(self._offsets.IFD0, tags.tiff);
        if ('ExifIFDPointer' in self._tiffTags) {
          self._offsets.exifIFD = self._offsets.tiffHeader + self._tiffTags.ExifIFDPointer;
          delete self._tiffTags.ExifIFDPointer;
        }
        if ('GPSInfoIFDPointer' in self._tiffTags) {
          self._offsets.gpsIFD = self._offsets.tiffHeader + self._tiffTags.GPSInfoIFDPointer;
          delete self._tiffTags.GPSInfoIFDPointer;
        }
        var IFD1Offset = self.LONG(self._offsets.IFD0 + self.SHORT(self._offsets.IFD0) * 12 + 2);
        if (IFD1Offset) {
          self._offsets.IFD1 = self._offsets.tiffHeader + IFD1Offset;
        }
      }
      ExifReader.prototype.BYTE = function (idx) {
        return this._reader.BYTE(idx);
      };
      ExifReader.prototype.SHORT = function (idx) {
        return this._reader.SHORT(idx);
      };
      ExifReader.prototype.LONG = function (idx) {
        return this._reader.LONG(idx);
      };
      ExifReader.prototype.SLONG = function (idx) {
        return this._reader.SLONG(idx);
      };
      ExifReader.prototype.CHAR = function (idx) {
        return this._reader.CHAR(idx);
      };
      ExifReader.prototype.STRING = function (idx, count) {
        return this._reader.STRING(idx, count);
      };
      ExifReader.prototype.SEGMENT = function (idx, size) {
        return this._reader.SEGMENT(idx, size);
      };
      ExifReader.prototype.asArray = function (type, idx, count) {
        var values = [];
        for (var i = 0; i < count; i++) {
          values[i] = this[type](idx + i);
        }
        return values;
      };
      ExifReader.prototype.length = function () {
        return this._reader.length();
      };
      ExifReader.prototype.UNDEFINED = function () {
        return this.BYTE.apply(this, arguments);
      };
      ExifReader.prototype.RATIONAL = function (idx) {
        return this.LONG(idx) / this.LONG(idx + 4);
      };
      ExifReader.prototype.SRATIONAL = function (idx) {
        return this.SLONG(idx) / this.SLONG(idx + 4);
      };
      ExifReader.prototype.ASCII = function (idx) {
        return this.CHAR(idx);
      };
      ExifReader.prototype.TIFF = function () {
        return this._tiffTags;
      };
      ExifReader.prototype.EXIF = function () {
        var self = this;
        var Exif = null;
        if (self._offsets.exifIFD) {
          try {
            Exif = self.extractTags(self._offsets.exifIFD, tags.exif);
          } catch (ex) {
            return null;
          }
          if (Exif.ExifVersion && Array.isArray(Exif.ExifVersion)) {
            for (var i = 0, exifVersion = ''; i < Exif.ExifVersion.length; i++) {
              exifVersion += String.fromCharCode(Exif.ExifVersion[i]);
            }
            Exif.ExifVersion = exifVersion;
          }
        }
        return Exif;
      };
      ExifReader.prototype.GPS = function () {
        var self = this;
        var GPS = null;
        if (self._offsets.gpsIFD) {
          try {
            GPS = self.extractTags(self._offsets.gpsIFD, tags.gps);
          } catch (ex) {
            return null;
          }
          if (GPS.GPSVersionID && Array.isArray(GPS.GPSVersionID)) {
            GPS.GPSVersionID = GPS.GPSVersionID.join('.');
          }
        }
        return GPS;
      };
      ExifReader.prototype.thumb = function () {
        var self = this;
        if (self._offsets.IFD1) {
          try {
            var IFD1Tags = self.extractTags(self._offsets.IFD1, tags.thumb);
            if ('JPEGInterchangeFormat' in IFD1Tags) {
              return self.SEGMENT(self._offsets.tiffHeader + IFD1Tags.JPEGInterchangeFormat, IFD1Tags.JPEGInterchangeFormatLength);
            }
          } catch (ex) {
          }
        }
        return null;
      };
      ExifReader.prototype.extractTags = function (IFD_offset, tags2extract) {
        var self = this;
        var length, i, tag, type, count, size, offset, value, values = [], hash = {};
        var types = {
          1: 'BYTE',
          7: 'UNDEFINED',
          2: 'ASCII',
          3: 'SHORT',
          4: 'LONG',
          5: 'RATIONAL',
          9: 'SLONG',
          10: 'SRATIONAL'
        };
        var sizes = {
          'BYTE': 1,
          'UNDEFINED': 1,
          'ASCII': 1,
          'SHORT': 2,
          'LONG': 4,
          'RATIONAL': 8,
          'SLONG': 4,
          'SRATIONAL': 8
        };
        length = self.SHORT(IFD_offset);
        for (i = 0; i < length; i++) {
          values = [];
          offset = IFD_offset + 2 + i * 12;
          tag = tags2extract[self.SHORT(offset)];
          if (tag === undefined) {
            continue;
          }
          type = types[self.SHORT(offset += 2)];
          count = self.LONG(offset += 2);
          size = sizes[type];
          if (!size) {
            throw new Error('Invalid Exif data.');
          }
          offset += 4;
          if (size * count > 4) {
            offset = self.LONG(offset) + self._offsets.tiffHeader;
          }
          if (offset + size * count >= self.length()) {
            throw new Error('Invalid Exif data.');
          }
          if (type === 'ASCII') {
            hash[tag] = self.STRING(offset, count).replace(/\0$/, '').trim();
            continue;
          } else {
            values = self.asArray(type, offset, count);
            value = count == 1 ? values[0] : values;
            if (tagDescs.hasOwnProperty(tag) && typeof value != 'object') {
              hash[tag] = tagDescs[tag][value];
            } else {
              hash[tag] = value;
            }
          }
        }
        return hash;
      };
      return ExifReader;
    }();

    var extractFrom = function (blob) {
      return Conversions.blobToArrayBuffer(blob).then(function (ar) {
        try {
          var br = new BinaryReader(ar);
          if (br.SHORT(0) === 65496) {
            var headers = extractHeaders(br);
            var app1 = headers.filter(function (header) {
              return header.name === 'APP1';
            });
            var meta = {};
            if (app1.length) {
              var exifReader = new ExifReader(app1[0].segment);
              meta = {
                tiff: exifReader.TIFF(),
                exif: exifReader.EXIF(),
                gps: exifReader.GPS(),
                thumb: exifReader.thumb()
              };
            } else {
              return Promise.reject('Headers did not include required information');
            }
            meta.rawHeaders = headers;
            return meta;
          }
          return Promise.reject('Image was not a jpeg');
        } catch (ex) {
          return Promise.reject('Unsupported format or not an image: ' + blob.type + ' (Exception: ' + ex.message + ')');
        }
      });
    };
    var extractHeaders = function (br) {
      var headers = [], idx, marker, length = 0;
      idx = 2;
      while (idx <= br.length()) {
        marker = br.SHORT(idx);
        if (marker >= 65488 && marker <= 65495) {
          idx += 2;
          continue;
        }
        if (marker === 65498 || marker === 65497) {
          break;
        }
        length = br.SHORT(idx + 2) + 2;
        if (marker >= 65505 && marker <= 65519) {
          headers.push({
            hex: marker,
            name: 'APP' + (marker & 15),
            start: idx,
            length: length,
            segment: br.SEGMENT(idx, length)
          });
        }
        idx += length;
      }
      return headers;
    };
    var JPEGMeta = { extractFrom: extractFrom };

    var invert = function (ir) {
      return Filters.invert(ir);
    };
    var sharpen = function (ir) {
      return Filters.sharpen(ir);
    };
    var emboss = function (ir) {
      return Filters.emboss(ir);
    };
    var gamma = function (ir, value) {
      return Filters.gamma(ir, value);
    };
    var exposure = function (ir, value) {
      return Filters.exposure(ir, value);
    };
    var colorize = function (ir, adjustR, adjustG, adjustB) {
      return Filters.colorize(ir, adjustR, adjustG, adjustB);
    };
    var brightness = function (ir, adjust) {
      return Filters.brightness(ir, adjust);
    };
    var hue = function (ir, adjust) {
      return Filters.hue(ir, adjust);
    };
    var saturate = function (ir, adjust) {
      return Filters.saturate(ir, adjust);
    };
    var contrast = function (ir, adjust) {
      return Filters.contrast(ir, adjust);
    };
    var grayscale = function (ir, adjust) {
      return Filters.grayscale(ir, adjust);
    };
    var sepia = function (ir, adjust) {
      return Filters.sepia(ir, adjust);
    };
    var flip$1 = function (ir, axis) {
      return ImageTools.flip(ir, axis);
    };
    var crop$1 = function (ir, x, y, w, h) {
      return ImageTools.crop(ir, x, y, w, h);
    };
    var resize$2 = function (ir, w, h) {
      return ImageTools.resize(ir, w, h);
    };
    var rotate$1 = function (ir, angle) {
      return ImageTools.rotate(ir, angle);
    };
    var exifRotate = function (ir) {
      var ROTATE_90 = 6;
      var ROTATE_180 = 3;
      var ROTATE_270 = 8;
      var checkRotation = function (data) {
        var orientation = data.tiff.Orientation;
        switch (orientation) {
        case ROTATE_90:
          return rotate$1(ir, 90);
        case ROTATE_180:
          return rotate$1(ir, 180);
        case ROTATE_270:
          return rotate$1(ir, 270);
        default:
          return ir;
        }
      };
      var notJpeg = function () {
        return ir;
      };
      return ir.toBlob().then(JPEGMeta.extractFrom).then(checkRotation, notJpeg);
    };
    var ImageTransformations = {
      invert: invert,
      sharpen: sharpen,
      emboss: emboss,
      brightness: brightness,
      hue: hue,
      saturate: saturate,
      contrast: contrast,
      grayscale: grayscale,
      sepia: sepia,
      colorize: colorize,
      gamma: gamma,
      exposure: exposure,
      flip: flip$1,
      crop: crop$1,
      resize: resize$2,
      rotate: rotate$1,
      exifRotate: exifRotate
    };

    var blobToImageResult = function (blob) {
      return ImageResult.fromBlob(blob);
    };
    var fromBlobAndUrlSync$1 = function (blob, uri) {
      return ImageResult.fromBlobAndUrlSync(blob, uri);
    };
    var imageToImageResult = function (image) {
      return ImageResult.fromImage(image);
    };
    var imageResultToBlob = function (ir, type, quality) {
      if (type === undefined && quality === undefined) {
        return imageResultToOriginalBlob(ir);
      } else {
        return ir.toAdjustedBlob(type, quality);
      }
    };
    var imageResultToOriginalBlob = function (ir) {
      return ir.toBlob();
    };
    var imageResultToDataURL = function (ir) {
      return ir.toDataURL();
    };
    var ResultConversions = {
      blobToImageResult: blobToImageResult,
      fromBlobAndUrlSync: fromBlobAndUrlSync$1,
      imageToImageResult: imageToImageResult,
      imageResultToBlob: imageResultToBlob,
      imageResultToOriginalBlob: imageResultToOriginalBlob,
      imageResultToDataURL: imageResultToDataURL
    };

    var url = function () {
      return Global$1.getOrDie('URL');
    };
    var createObjectURL = function (blob) {
      return url().createObjectURL(blob);
    };
    var revokeObjectURL = function (u) {
      url().revokeObjectURL(u);
    };
    var URL = {
      createObjectURL: createObjectURL,
      revokeObjectURL: revokeObjectURL
    };

    var global$2 = tinymce.util.Tools.resolve('tinymce.util.Delay');

    var global$3 = tinymce.util.Tools.resolve('tinymce.util.Promise');

    var global$4 = tinymce.util.Tools.resolve('tinymce.util.URI');

    var getToolbarItems = function (editor) {
      return editor.getParam('imagetools_toolbar', 'rotateleft rotateright | flipv fliph | crop editimage imageoptions');
    };
    var getProxyUrl = function (editor) {
      return editor.getParam('imagetools_proxy');
    };
    var getCorsHosts = function (editor) {
      return editor.getParam('imagetools_cors_hosts', [], 'string[]');
    };
    var getCredentialsHosts = function (editor) {
      return editor.getParam('imagetools_credentials_hosts', [], 'string[]');
    };
    var getApiKey = function (editor) {
      return editor.getParam('api_key', editor.getParam('imagetools_api_key', '', 'string'), 'string');
    };
    var getUploadTimeout = function (editor) {
      return editor.getParam('images_upload_timeout', 30000, 'number');
    };
    var shouldReuseFilename = function (editor) {
      return editor.getParam('images_reuse_filename', false, 'boolean');
    };

    var global$5 = tinymce.util.Tools.resolve('tinymce.dom.DOMUtils');

    var global$6 = tinymce.util.Tools.resolve('tinymce.ui.Factory');

    function UndoStack () {
      var data = [];
      var index = -1;
      function add(state) {
        var removed;
        removed = data.splice(++index);
        data.push(state);
        return {
          state: state,
          removed: removed
        };
      }
      function undo() {
        if (canUndo()) {
          return data[--index];
        }
      }
      function redo() {
        if (canRedo()) {
          return data[++index];
        }
      }
      function canUndo() {
        return index > 0;
      }
      function canRedo() {
        return index !== -1 && index < data.length - 1;
      }
      return {
        data: data,
        add: add,
        undo: undo,
        redo: redo,
        canUndo: canUndo,
        canRedo: canRedo
      };
    }

    var global$7 = tinymce.util.Tools.resolve('tinymce.geom.Rect');

    var loadImage = function (image) {
      return new global$3(function (resolve) {
        var loaded = function () {
          image.removeEventListener('load', loaded);
          resolve(image);
        };
        if (image.complete) {
          resolve(image);
        } else {
          image.addEventListener('load', loaded);
        }
      });
    };
    var LoadImage = { loadImage: loadImage };

    var global$8 = tinymce.util.Tools.resolve('tinymce.dom.DomQuery');

    var global$9 = tinymce.util.Tools.resolve('tinymce.util.Observable');

    var global$a = tinymce.util.Tools.resolve('tinymce.util.VK');

    var count = 0;
    function CropRect (currentRect, viewPortRect, clampRect, containerElm, action) {
      var instance;
      var handles;
      var dragHelpers;
      var blockers;
      var prefix = 'mce-';
      var id = prefix + 'crid-' + count++;
      handles = [
        {
          name: 'move',
          xMul: 0,
          yMul: 0,
          deltaX: 1,
          deltaY: 1,
          deltaW: 0,
          deltaH: 0,
          label: 'Crop Mask'
        },
        {
          name: 'nw',
          xMul: 0,
          yMul: 0,
          deltaX: 1,
          deltaY: 1,
          deltaW: -1,
          deltaH: -1,
          label: 'Top Left Crop Handle'
        },
        {
          name: 'ne',
          xMul: 1,
          yMul: 0,
          deltaX: 0,
          deltaY: 1,
          deltaW: 1,
          deltaH: -1,
          label: 'Top Right Crop Handle'
        },
        {
          name: 'sw',
          xMul: 0,
          yMul: 1,
          deltaX: 1,
          deltaY: 0,
          deltaW: -1,
          deltaH: 1,
          label: 'Bottom Left Crop Handle'
        },
        {
          name: 'se',
          xMul: 1,
          yMul: 1,
          deltaX: 0,
          deltaY: 0,
          deltaW: 1,
          deltaH: 1,
          label: 'Bottom Right Crop Handle'
        }
      ];
      blockers = [
        'top',
        'right',
        'bottom',
        'left'
      ];
      function getAbsoluteRect(outerRect, relativeRect) {
        return {
          x: relativeRect.x + outerRect.x,
          y: relativeRect.y + outerRect.y,
          w: relativeRect.w,
          h: relativeRect.h
        };
      }
      function getRelativeRect(outerRect, innerRect) {
        return {
          x: innerRect.x - outerRect.x,
          y: innerRect.y - outerRect.y,
          w: innerRect.w,
          h: innerRect.h
        };
      }
      function getInnerRect() {
        return getRelativeRect(clampRect, currentRect);
      }
      function moveRect(handle, startRect, deltaX, deltaY) {
        var x, y, w, h, rect;
        x = startRect.x;
        y = startRect.y;
        w = startRect.w;
        h = startRect.h;
        x += deltaX * handle.deltaX;
        y += deltaY * handle.deltaY;
        w += deltaX * handle.deltaW;
        h += deltaY * handle.deltaH;
        if (w < 20) {
          w = 20;
        }
        if (h < 20) {
          h = 20;
        }
        rect = currentRect = global$7.clamp({
          x: x,
          y: y,
          w: w,
          h: h
        }, clampRect, handle.name === 'move');
        rect = getRelativeRect(clampRect, rect);
        instance.fire('updateRect', { rect: rect });
        setInnerRect(rect);
      }
      function render() {
        function createDragHelper(handle) {
          var startRect;
          var DragHelper = global$6.get('DragHelper');
          return new DragHelper(id, {
            document: containerElm.ownerDocument,
            handle: id + '-' + handle.name,
            start: function () {
              startRect = currentRect;
            },
            drag: function (e) {
              moveRect(handle, startRect, e.deltaX, e.deltaY);
            }
          });
        }
        global$8('<div id="' + id + '" class="' + prefix + 'croprect-container"' + ' role="grid" aria-dropeffect="execute">').appendTo(containerElm);
        global$1.each(blockers, function (blocker) {
          global$8('#' + id, containerElm).append('<div id="' + id + '-' + blocker + '"class="' + prefix + 'croprect-block" style="display: none" data-mce-bogus="all">');
        });
        global$1.each(handles, function (handle) {
          global$8('#' + id, containerElm).append('<div id="' + id + '-' + handle.name + '" class="' + prefix + 'croprect-handle ' + prefix + 'croprect-handle-' + handle.name + '"' + 'style="display: none" data-mce-bogus="all" role="gridcell" tabindex="-1"' + ' aria-label="' + handle.label + '" aria-grabbed="false">');
        });
        dragHelpers = global$1.map(handles, createDragHelper);
        repaint(currentRect);
        global$8(containerElm).on('focusin focusout', function (e) {
          global$8(e.target).attr('aria-grabbed', e.type === 'focus');
        });
        global$8(containerElm).on('keydown', function (e) {
          var activeHandle;
          global$1.each(handles, function (handle) {
            if (e.target.id === id + '-' + handle.name) {
              activeHandle = handle;
              return false;
            }
          });
          function moveAndBlock(evt, handle, startRect, deltaX, deltaY) {
            evt.stopPropagation();
            evt.preventDefault();
            moveRect(activeHandle, startRect, deltaX, deltaY);
          }
          switch (e.keyCode) {
          case global$a.LEFT:
            moveAndBlock(e, activeHandle, currentRect, -10, 0);
            break;
          case global$a.RIGHT:
            moveAndBlock(e, activeHandle, currentRect, 10, 0);
            break;
          case global$a.UP:
            moveAndBlock(e, activeHandle, currentRect, 0, -10);
            break;
          case global$a.DOWN:
            moveAndBlock(e, activeHandle, currentRect, 0, 10);
            break;
          case global$a.ENTER:
          case global$a.SPACEBAR:
            e.preventDefault();
            action();
            break;
          }
        });
      }
      function toggleVisibility(state) {
        var selectors;
        selectors = global$1.map(handles, function (handle) {
          return '#' + id + '-' + handle.name;
        }).concat(global$1.map(blockers, function (blocker) {
          return '#' + id + '-' + blocker;
        })).join(',');
        if (state) {
          global$8(selectors, containerElm).show();
        } else {
          global$8(selectors, containerElm).hide();
        }
      }
      function repaint(rect) {
        function updateElementRect(name, rect) {
          if (rect.h < 0) {
            rect.h = 0;
          }
          if (rect.w < 0) {
            rect.w = 0;
          }
          global$8('#' + id + '-' + name, containerElm).css({
            left: rect.x,
            top: rect.y,
            width: rect.w,
            height: rect.h
          });
        }
        global$1.each(handles, function (handle) {
          global$8('#' + id + '-' + handle.name, containerElm).css({
            left: rect.w * handle.xMul + rect.x,
            top: rect.h * handle.yMul + rect.y
          });
        });
        updateElementRect('top', {
          x: viewPortRect.x,
          y: viewPortRect.y,
          w: viewPortRect.w,
          h: rect.y - viewPortRect.y
        });
        updateElementRect('right', {
          x: rect.x + rect.w,
          y: rect.y,
          w: viewPortRect.w - rect.x - rect.w + viewPortRect.x,
          h: rect.h
        });
        updateElementRect('bottom', {
          x: viewPortRect.x,
          y: rect.y + rect.h,
          w: viewPortRect.w,
          h: viewPortRect.h - rect.y - rect.h + viewPortRect.y
        });
        updateElementRect('left', {
          x: viewPortRect.x,
          y: rect.y,
          w: rect.x - viewPortRect.x,
          h: rect.h
        });
        updateElementRect('move', rect);
      }
      function setRect(rect) {
        currentRect = rect;
        repaint(currentRect);
      }
      function setViewPortRect(rect) {
        viewPortRect = rect;
        repaint(currentRect);
      }
      function setInnerRect(rect) {
        setRect(getAbsoluteRect(clampRect, rect));
      }
      function setClampRect(rect) {
        clampRect = rect;
        repaint(currentRect);
      }
      function destroy() {
        global$1.each(dragHelpers, function (helper) {
          helper.destroy();
        });
        dragHelpers = [];
      }
      render();
      instance = global$1.extend({
        toggleVisibility: toggleVisibility,
        setClampRect: setClampRect,
        setRect: setRect,
        getInnerRect: getInnerRect,
        setInnerRect: setInnerRect,
        setViewPortRect: setViewPortRect,
        destroy: destroy
      }, global$9);
      return instance;
    }

    var create$2 = function (settings) {
      var Control = global$6.get('Control');
      var ImagePanel = Control.extend({
        Defaults: { classes: 'imagepanel' },
        selection: function (rect) {
          if (arguments.length) {
            this.state.set('rect', rect);
            return this;
          }
          return this.state.get('rect');
        },
        imageSize: function () {
          var viewRect = this.state.get('viewRect');
          return {
            w: viewRect.w,
            h: viewRect.h
          };
        },
        toggleCropRect: function (state) {
          this.state.set('cropEnabled', state);
        },
        imageSrc: function (url) {
          var self = this, img = new domGlobals.Image();
          img.src = url;
          LoadImage.loadImage(img).then(function () {
            var rect, $img;
            var lastRect = self.state.get('viewRect');
            $img = self.$el.find('img');
            if ($img[0]) {
              $img.replaceWith(img);
            } else {
              var bg = domGlobals.document.createElement('div');
              bg.className = 'mce-imagepanel-bg';
              self.getEl().appendChild(bg);
              self.getEl().appendChild(img);
            }
            rect = {
              x: 0,
              y: 0,
              w: img.naturalWidth,
              h: img.naturalHeight
            };
            self.state.set('viewRect', rect);
            self.state.set('rect', global$7.inflate(rect, -20, -20));
            if (!lastRect || lastRect.w !== rect.w || lastRect.h !== rect.h) {
              self.zoomFit();
            }
            self.repaintImage();
            self.fire('load');
          });
        },
        zoom: function (value) {
          if (arguments.length) {
            this.state.set('zoom', value);
            return this;
          }
          return this.state.get('zoom');
        },
        postRender: function () {
          this.imageSrc(this.settings.imageSrc);
          return this._super();
        },
        zoomFit: function () {
          var self = this;
          var $img, pw, ph, w, h, zoom, padding;
          padding = 10;
          $img = self.$el.find('img');
          pw = self.getEl().clientWidth;
          ph = self.getEl().clientHeight;
          w = $img[0].naturalWidth;
          h = $img[0].naturalHeight;
          zoom = Math.min((pw - padding) / w, (ph - padding) / h);
          if (zoom >= 1) {
            zoom = 1;
          }
          self.zoom(zoom);
        },
        repaintImage: function () {
          var x, y, w, h, pw, ph, $img, $bg, zoom, rect, elm;
          elm = this.getEl();
          zoom = this.zoom();
          rect = this.state.get('rect');
          $img = this.$el.find('img');
          $bg = this.$el.find('.mce-imagepanel-bg');
          pw = elm.offsetWidth;
          ph = elm.offsetHeight;
          w = $img[0].naturalWidth * zoom;
          h = $img[0].naturalHeight * zoom;
          x = Math.max(0, pw / 2 - w / 2);
          y = Math.max(0, ph / 2 - h / 2);
          $img.css({
            left: x,
            top: y,
            width: w,
            height: h
          });
          $bg.css({
            left: x,
            top: y,
            width: w,
            height: h
          });
          if (this.cropRect) {
            this.cropRect.setRect({
              x: rect.x * zoom + x,
              y: rect.y * zoom + y,
              w: rect.w * zoom,
              h: rect.h * zoom
            });
            this.cropRect.setClampRect({
              x: x,
              y: y,
              w: w,
              h: h
            });
            this.cropRect.setViewPortRect({
              x: 0,
              y: 0,
              w: pw,
              h: ph
            });
          }
        },
        bindStates: function () {
          var self = this;
          function setupCropRect(rect) {
            self.cropRect = CropRect(rect, self.state.get('viewRect'), self.state.get('viewRect'), self.getEl(), function () {
              self.fire('crop');
            });
            self.cropRect.on('updateRect', function (e) {
              var rect = e.rect;
              var zoom = self.zoom();
              rect = {
                x: Math.round(rect.x / zoom),
                y: Math.round(rect.y / zoom),
                w: Math.round(rect.w / zoom),
                h: Math.round(rect.h / zoom)
              };
              self.state.set('rect', rect);
            });
            self.on('remove', self.cropRect.destroy);
          }
          self.state.on('change:cropEnabled', function (e) {
            self.cropRect.toggleVisibility(e.value);
            self.repaintImage();
          });
          self.state.on('change:zoom', function () {
            self.repaintImage();
          });
          self.state.on('change:rect', function (e) {
            var rect = e.value;
            if (!self.cropRect) {
              setupCropRect(rect);
            }
            self.cropRect.setRect(rect);
          });
        }
      });
      return new ImagePanel(settings);
    };
    var ImagePanel = { create: create$2 };

    function createState(blob) {
      return {
        blob: blob,
        url: URL.createObjectURL(blob)
      };
    }
    function destroyState(state) {
      if (state) {
        URL.revokeObjectURL(state.url);
      }
    }
    function destroyStates(states) {
      global$1.each(states, destroyState);
    }
    function open(editor, currentState, resolve, reject) {
      var win, undoStack = UndoStack(), mainPanel, filtersPanel, tempState, cropPanel, resizePanel, flipRotatePanel, imagePanel, sidePanel, mainViewContainer, invertPanel, brightnessPanel, huePanel, saturatePanel, contrastPanel, grayscalePanel, sepiaPanel, colorizePanel, sharpenPanel, embossPanel, gammaPanel, exposurePanel, panels, width, height, ratioW, ratioH;
      var reverseIfRtl = function (items) {
        return editor.rtl ? items.reverse() : items;
      };
      function recalcSize(e) {
        var widthCtrl, heightCtrl, newWidth, newHeight;
        widthCtrl = win.find('#w')[0];
        heightCtrl = win.find('#h')[0];
        newWidth = parseInt(widthCtrl.value(), 10);
        newHeight = parseInt(heightCtrl.value(), 10);
        if (win.find('#constrain')[0].checked() && width && height && newWidth && newHeight) {
          if (e.control.settings.name === 'w') {
            newHeight = Math.round(newWidth * ratioW);
            heightCtrl.value(newHeight);
          } else {
            newWidth = Math.round(newHeight * ratioH);
            widthCtrl.value(newWidth);
          }
        }
        width = newWidth;
        height = newHeight;
      }
      function floatToPercent(value) {
        return Math.round(value * 100) + '%';
      }
      function updateButtonUndoStates() {
        win.find('#undo').disabled(!undoStack.canUndo());
        win.find('#redo').disabled(!undoStack.canRedo());
        win.statusbar.find('#save').disabled(!undoStack.canUndo());
      }
      function disableUndoRedo() {
        win.find('#undo').disabled(true);
        win.find('#redo').disabled(true);
      }
      function displayState(state) {
        if (state) {
          imagePanel.imageSrc(state.url);
        }
      }
      function switchPanel(targetPanel) {
        return function () {
          var hidePanels = global$1.grep(panels, function (panel) {
            return panel.settings.name !== targetPanel;
          });
          global$1.each(hidePanels, function (panel) {
            panel.hide();
          });
          targetPanel.show();
          targetPanel.focus();
        };
      }
      function addTempState(blob) {
        tempState = createState(blob);
        displayState(tempState);
      }
      function addBlobState(blob) {
        currentState = createState(blob);
        displayState(currentState);
        destroyStates(undoStack.add(currentState).removed);
        updateButtonUndoStates();
      }
      function crop() {
        var rect = imagePanel.selection();
        ResultConversions.blobToImageResult(currentState.blob).then(function (ir) {
          ImageTransformations.crop(ir, rect.x, rect.y, rect.w, rect.h).then(imageResultToBlob).then(function (blob) {
            addBlobState(blob);
            cancel();
          });
        });
      }
      var tempAction = function (fn) {
        var args = [].slice.call(arguments, 1);
        return function () {
          var state = tempState || currentState;
          ResultConversions.blobToImageResult(state.blob).then(function (ir) {
            fn.apply(this, [ir].concat(args)).then(imageResultToBlob).then(addTempState);
          });
        };
      };
      function action(fn) {
        var arg = [];
        for (var _i = 1; _i < arguments.length; _i++) {
          arg[_i - 1] = arguments[_i];
        }
        var args = [].slice.call(arguments, 1);
        return function () {
          ResultConversions.blobToImageResult(currentState.blob).then(function (ir) {
            fn.apply(this, [ir].concat(args)).then(imageResultToBlob).then(addBlobState);
          });
        };
      }
      function cancel() {
        displayState(currentState);
        destroyState(tempState);
        switchPanel(mainPanel)();
        updateButtonUndoStates();
      }
      function waitForTempState(times, applyCall) {
        if (tempState) {
          applyCall();
        } else {
          setTimeout(function () {
            if (times-- > 0) {
              waitForTempState(times, applyCall);
            } else {
              editor.windowManager.alert('Error: failed to apply image operation.');
            }
          }, 10);
        }
      }
      function applyTempState() {
        if (tempState) {
          addBlobState(tempState.blob);
          cancel();
        } else {
          waitForTempState(100, applyTempState);
        }
      }
      function zoomIn() {
        var zoom = imagePanel.zoom();
        if (zoom < 2) {
          zoom += 0.1;
        }
        imagePanel.zoom(zoom);
      }
      function zoomOut() {
        var zoom = imagePanel.zoom();
        if (zoom > 0.1) {
          zoom -= 0.1;
        }
        imagePanel.zoom(zoom);
      }
      function undo() {
        currentState = undoStack.undo();
        displayState(currentState);
        updateButtonUndoStates();
      }
      function redo() {
        currentState = undoStack.redo();
        displayState(currentState);
        updateButtonUndoStates();
      }
      function save() {
        resolve(currentState.blob);
        win.close();
      }
      function createPanel(items) {
        return global$6.create('Form', {
          layout: 'flex',
          direction: 'row',
          labelGap: 5,
          border: '0 0 1 0',
          align: 'center',
          pack: 'center',
          padding: '0 10 0 10',
          spacing: 5,
          flex: 0,
          minHeight: 60,
          defaults: {
            classes: 'imagetool',
            type: 'button'
          },
          items: items
        });
      }
      var imageResultToBlob = function (ir) {
        return ir.toBlob();
      };
      function createFilterPanel(title, filter) {
        return createPanel(reverseIfRtl([
          {
            text: 'Back',
            onclick: cancel
          },
          {
            type: 'spacer',
            flex: 1
          },
          {
            text: 'Apply',
            subtype: 'primary',
            onclick: applyTempState
          }
        ])).hide().on('show', function () {
          disableUndoRedo();
          ResultConversions.blobToImageResult(currentState.blob).then(function (ir) {
            return filter(ir);
          }).then(imageResultToBlob).then(function (blob) {
            var newTempState = createState(blob);
            displayState(newTempState);
            destroyState(tempState);
            tempState = newTempState;
          });
        });
      }
      function createVariableFilterPanel(title, filter, value, min, max) {
        function update(value) {
          ResultConversions.blobToImageResult(currentState.blob).then(function (ir) {
            return filter(ir, value);
          }).then(imageResultToBlob).then(function (blob) {
            var newTempState = createState(blob);
            displayState(newTempState);
            destroyState(tempState);
            tempState = newTempState;
          });
        }
        return createPanel(reverseIfRtl([
          {
            text: 'Back',
            onclick: cancel
          },
          {
            type: 'spacer',
            flex: 1
          },
          {
            type: 'slider',
            flex: 1,
            ondragend: function (e) {
              update(e.value);
            },
            minValue: editor.rtl ? max : min,
            maxValue: editor.rtl ? min : max,
            value: value,
            previewFilter: floatToPercent
          },
          {
            type: 'spacer',
            flex: 1
          },
          {
            text: 'Apply',
            subtype: 'primary',
            onclick: applyTempState
          }
        ])).hide().on('show', function () {
          this.find('slider').value(value);
          disableUndoRedo();
        });
      }
      function createRgbFilterPanel(title, filter) {
        function update() {
          var r, g, b;
          r = win.find('#r')[0].value();
          g = win.find('#g')[0].value();
          b = win.find('#b')[0].value();
          ResultConversions.blobToImageResult(currentState.blob).then(function (ir) {
            return filter(ir, r, g, b);
          }).then(imageResultToBlob).then(function (blob) {
            var newTempState = createState(blob);
            displayState(newTempState);
            destroyState(tempState);
            tempState = newTempState;
          });
        }
        var min = editor.rtl ? 2 : 0;
        var max = editor.rtl ? 0 : 2;
        return createPanel(reverseIfRtl([
          {
            text: 'Back',
            onclick: cancel
          },
          {
            type: 'spacer',
            flex: 1
          },
          {
            type: 'slider',
            label: 'R',
            name: 'r',
            minValue: min,
            value: 1,
            maxValue: max,
            ondragend: update,
            previewFilter: floatToPercent
          },
          {
            type: 'slider',
            label: 'G',
            name: 'g',
            minValue: min,
            value: 1,
            maxValue: max,
            ondragend: update,
            previewFilter: floatToPercent
          },
          {
            type: 'slider',
            label: 'B',
            name: 'b',
            minValue: min,
            value: 1,
            maxValue: max,
            ondragend: update,
            previewFilter: floatToPercent
          },
          {
            type: 'spacer',
            flex: 1
          },
          {
            text: 'Apply',
            subtype: 'primary',
            onclick: applyTempState
          }
        ])).hide().on('show', function () {
          win.find('#r,#g,#b').value(1);
          disableUndoRedo();
        });
      }
      cropPanel = createPanel(reverseIfRtl([
        {
          text: 'Back',
          onclick: cancel
        },
        {
          type: 'spacer',
          flex: 1
        },
        {
          text: 'Apply',
          subtype: 'primary',
          onclick: crop
        }
      ])).hide().on('show hide', function (e) {
        imagePanel.toggleCropRect(e.type === 'show');
      }).on('show', disableUndoRedo);
      function toggleConstrain(e) {
        if (e.control.value() === true) {
          ratioW = height / width;
          ratioH = width / height;
        }
      }
      resizePanel = createPanel(reverseIfRtl([
        {
          text: 'Back',
          onclick: cancel
        },
        {
          type: 'spacer',
          flex: 1
        },
        {
          type: 'textbox',
          name: 'w',
          label: 'Width',
          size: 4,
          onkeyup: recalcSize
        },
        {
          type: 'textbox',
          name: 'h',
          label: 'Height',
          size: 4,
          onkeyup: recalcSize
        },
        {
          type: 'checkbox',
          name: 'constrain',
          text: 'Constrain proportions',
          checked: true,
          onchange: toggleConstrain
        },
        {
          type: 'spacer',
          flex: 1
        },
        {
          text: 'Apply',
          subtype: 'primary',
          onclick: 'submit'
        }
      ])).hide().on('submit', function (e) {
        var width = parseInt(win.find('#w').value(), 10), height = parseInt(win.find('#h').value(), 10);
        e.preventDefault();
        action(ImageTransformations.resize, width, height)();
        cancel();
      }).on('show', disableUndoRedo);
      flipRotatePanel = createPanel(reverseIfRtl([
        {
          text: 'Back',
          onclick: cancel
        },
        {
          type: 'spacer',
          flex: 1
        },
        {
          icon: 'fliph',
          tooltip: 'Flip horizontally',
          onclick: tempAction(ImageTransformations.flip, 'h')
        },
        {
          icon: 'flipv',
          tooltip: 'Flip vertically',
          onclick: tempAction(ImageTransformations.flip, 'v')
        },
        {
          icon: 'rotateleft',
          tooltip: 'Rotate counterclockwise',
          onclick: tempAction(ImageTransformations.rotate, -90)
        },
        {
          icon: 'rotateright',
          tooltip: 'Rotate clockwise',
          onclick: tempAction(ImageTransformations.rotate, 90)
        },
        {
          type: 'spacer',
          flex: 1
        },
        {
          text: 'Apply',
          subtype: 'primary',
          onclick: applyTempState
        }
      ])).hide().on('show', disableUndoRedo);
      invertPanel = createFilterPanel('Invert', ImageTransformations.invert);
      sharpenPanel = createFilterPanel('Sharpen', ImageTransformations.sharpen);
      embossPanel = createFilterPanel('Emboss', ImageTransformations.emboss);
      brightnessPanel = createVariableFilterPanel('Brightness', ImageTransformations.brightness, 0, -1, 1);
      huePanel = createVariableFilterPanel('Hue', ImageTransformations.hue, 180, 0, 360);
      saturatePanel = createVariableFilterPanel('Saturate', ImageTransformations.saturate, 0, -1, 1);
      contrastPanel = createVariableFilterPanel('Contrast', ImageTransformations.contrast, 0, -1, 1);
      grayscalePanel = createVariableFilterPanel('Grayscale', ImageTransformations.grayscale, 0, 0, 1);
      sepiaPanel = createVariableFilterPanel('Sepia', ImageTransformations.sepia, 0, 0, 1);
      colorizePanel = createRgbFilterPanel('Colorize', ImageTransformations.colorize);
      gammaPanel = createVariableFilterPanel('Gamma', ImageTransformations.gamma, 0, -1, 1);
      exposurePanel = createVariableFilterPanel('Exposure', ImageTransformations.exposure, 1, 0, 2);
      filtersPanel = createPanel(reverseIfRtl([
        {
          text: 'Back',
          onclick: cancel
        },
        {
          type: 'spacer',
          flex: 1
        },
        {
          text: 'hue',
          icon: 'hue',
          onclick: switchPanel(huePanel)
        },
        {
          text: 'saturate',
          icon: 'saturate',
          onclick: switchPanel(saturatePanel)
        },
        {
          text: 'sepia',
          icon: 'sepia',
          onclick: switchPanel(sepiaPanel)
        },
        {
          text: 'emboss',
          icon: 'emboss',
          onclick: switchPanel(embossPanel)
        },
        {
          text: 'exposure',
          icon: 'exposure',
          onclick: switchPanel(exposurePanel)
        },
        {
          type: 'spacer',
          flex: 1
        }
      ])).hide();
      mainPanel = createPanel(reverseIfRtl([
        {
          tooltip: 'Crop',
          icon: 'crop',
          onclick: switchPanel(cropPanel)
        },
        {
          tooltip: 'Resize',
          icon: 'resize2',
          onclick: switchPanel(resizePanel)
        },
        {
          tooltip: 'Orientation',
          icon: 'orientation',
          onclick: switchPanel(flipRotatePanel)
        },
        {
          tooltip: 'Brightness',
          icon: 'sun',
          onclick: switchPanel(brightnessPanel)
        },
        {
          tooltip: 'Sharpen',
          icon: 'sharpen',
          onclick: switchPanel(sharpenPanel)
        },
        {
          tooltip: 'Contrast',
          icon: 'contrast',
          onclick: switchPanel(contrastPanel)
        },
        {
          tooltip: 'Color levels',
          icon: 'drop',
          onclick: switchPanel(colorizePanel)
        },
        {
          tooltip: 'Gamma',
          icon: 'gamma',
          onclick: switchPanel(gammaPanel)
        },
        {
          tooltip: 'Invert',
          icon: 'invert',
          onclick: switchPanel(invertPanel)
        }
      ]));
      imagePanel = ImagePanel.create({
        flex: 1,
        imageSrc: currentState.url
      });
      sidePanel = global$6.create('Container', {
        layout: 'flex',
        direction: 'column',
        pack: 'start',
        border: '0 1 0 0',
        padding: 5,
        spacing: 5,
        items: [
          {
            type: 'button',
            icon: 'undo',
            tooltip: 'Undo',
            name: 'undo',
            onclick: undo
          },
          {
            type: 'button',
            icon: 'redo',
            tooltip: 'Redo',
            name: 'redo',
            onclick: redo
          },
          {
            type: 'button',
            icon: 'zoomin',
            tooltip: 'Zoom in',
            onclick: zoomIn
          },
          {
            type: 'button',
            icon: 'zoomout',
            tooltip: 'Zoom out',
            onclick: zoomOut
          }
        ]
      });
      mainViewContainer = global$6.create('Container', {
        type: 'container',
        layout: 'flex',
        direction: 'row',
        align: 'stretch',
        flex: 1,
        items: reverseIfRtl([
          sidePanel,
          imagePanel
        ])
      });
      panels = [
        mainPanel,
        cropPanel,
        resizePanel,
        flipRotatePanel,
        filtersPanel,
        invertPanel,
        brightnessPanel,
        huePanel,
        saturatePanel,
        contrastPanel,
        grayscalePanel,
        sepiaPanel,
        colorizePanel,
        sharpenPanel,
        embossPanel,
        gammaPanel,
        exposurePanel
      ];
      win = editor.windowManager.open({
        layout: 'flex',
        direction: 'column',
        align: 'stretch',
        minWidth: Math.min(global$5.DOM.getViewPort().w, 800),
        minHeight: Math.min(global$5.DOM.getViewPort().h, 650),
        title: 'Edit image',
        items: panels.concat([mainViewContainer]),
        buttons: reverseIfRtl([
          {
            text: 'Save',
            name: 'save',
            subtype: 'primary',
            onclick: save
          },
          {
            text: 'Cancel',
            onclick: 'close'
          }
        ])
      });
      win.on('close', function () {
        reject();
        destroyStates(undoStack.data);
        undoStack = null;
        tempState = null;
      });
      undoStack.add(currentState);
      updateButtonUndoStates();
      imagePanel.on('load', function () {
        width = imagePanel.imageSize().w;
        height = imagePanel.imageSize().h;
        ratioW = height / width;
        ratioH = width / height;
        win.find('#w').value(width);
        win.find('#h').value(height);
      });
      imagePanel.on('crop', crop);
    }
    function edit(editor, imageResult) {
      return new global$3(function (resolve, reject) {
        return imageResult.toBlob().then(function (blob) {
          open(editor, createState(blob), resolve, reject);
        });
      });
    }
    var Dialog = { edit: edit };

    function getImageSize(img) {
      var width, height;
      function isPxValue(value) {
        return /^[0-9\.]+px$/.test(value);
      }
      width = img.style.width;
      height = img.style.height;
      if (width || height) {
        if (isPxValue(width) && isPxValue(height)) {
          return {
            w: parseInt(width, 10),
            h: parseInt(height, 10)
          };
        }
        return null;
      }
      width = img.width;
      height = img.height;
      if (width && height) {
        return {
          w: parseInt(width, 10),
          h: parseInt(height, 10)
        };
      }
      return null;
    }
    function setImageSize(img, size) {
      var width, height;
      if (size) {
        width = img.style.width;
        height = img.style.height;
        if (width || height) {
          img.style.width = size.w + 'px';
          img.style.height = size.h + 'px';
          img.removeAttribute('data-mce-style');
        }
        width = img.width;
        height = img.height;
        if (width || height) {
          img.setAttribute('width', size.w);
          img.setAttribute('height', size.h);
        }
      }
    }
    function getNaturalImageSize(img) {
      return {
        w: img.naturalWidth,
        h: img.naturalHeight
      };
    }
    var ImageSize$1 = {
      getImageSize: getImageSize,
      setImageSize: setImageSize,
      getNaturalImageSize: getNaturalImageSize
    };

    var typeOf = function (x) {
      if (x === null)
        return 'null';
      var t = typeof x;
      if (t === 'object' && Array.prototype.isPrototypeOf(x))
        return 'array';
      if (t === 'object' && String.prototype.isPrototypeOf(x))
        return 'string';
      return t;
    };
    var isType = function (type) {
      return function (value) {
        return typeOf(value) === type;
      };
    };
    var isFunction = isType('function');

    var find = function (xs, pred) {
      for (var i = 0, len = xs.length; i < len; i++) {
        var x = xs[i];
        if (pred(x, i, xs)) {
          return Option.some(x);
        }
      }
      return Option.none();
    };
    var slice = Array.prototype.slice;
    var from$1 = isFunction(Array.from) ? Array.from : function (x) {
      return slice.call(x);
    };

    function XMLHttpRequest () {
      var f = Global$1.getOrDie('XMLHttpRequest');
      return new f();
    }

    var isValue = function (obj) {
      return obj !== null && obj !== undefined;
    };
    var traverse = function (json, path) {
      var value;
      value = path.reduce(function (result, key) {
        return isValue(result) ? result[key] : undefined;
      }, json);
      return isValue(value) ? value : null;
    };
    var requestUrlAsBlob = function (url, headers, withCredentials) {
      return new global$3(function (resolve) {
        var xhr;
        xhr = XMLHttpRequest();
        xhr.onreadystatechange = function () {
          if (xhr.readyState === 4) {
            resolve({
              status: xhr.status,
              blob: this.response
            });
          }
        };
        xhr.open('GET', url, true);
        xhr.withCredentials = withCredentials;
        global$1.each(headers, function (value, key) {
          xhr.setRequestHeader(key, value);
        });
        xhr.responseType = 'blob';
        xhr.send();
      });
    };
    var readBlob = function (blob) {
      return new global$3(function (resolve) {
        var fr = FileReader();
        fr.onload = function (e) {
          var data = e.target;
          resolve(data.result);
        };
        fr.readAsText(blob);
      });
    };
    var parseJson = function (text) {
      var json;
      try {
        json = JSON.parse(text);
      } catch (ex) {
      }
      return json;
    };
    var Utils = {
      traverse: traverse,
      readBlob: readBlob,
      requestUrlAsBlob: requestUrlAsBlob,
      parseJson: parseJson
    };

    var friendlyHttpErrors = [
      {
        code: 404,
        message: 'Could not find Image Proxy'
      },
      {
        code: 403,
        message: 'Rejected request'
      },
      {
        code: 0,
        message: 'Incorrect Image Proxy URL'
      }
    ];
    var friendlyServiceErrors = [
      {
        type: 'key_missing',
        message: 'The request did not include an api key.'
      },
      {
        type: 'key_not_found',
        message: 'The provided api key could not be found.'
      },
      {
        type: 'domain_not_trusted',
        message: 'The api key is not valid for the request origins.'
      }
    ];
    var isServiceErrorCode = function (code) {
      return code === 400 || code === 403 || code === 500;
    };
    var getHttpErrorMsg = function (status) {
      var message = find(friendlyHttpErrors, function (error) {
        return status === error.code;
      }).fold(constant('Unknown ImageProxy error'), function (error) {
        return error.message;
      });
      return 'ImageProxy HTTP error: ' + message;
    };
    var handleHttpError = function (status) {
      var message = getHttpErrorMsg(status);
      return global$3.reject(message);
    };
    var getServiceErrorMsg = function (type) {
      return find(friendlyServiceErrors, function (error) {
        return error.type === type;
      }).fold(constant('Unknown service error'), function (error) {
        return error.message;
      });
    };
    var getServiceError = function (text) {
      var serviceError = Utils.parseJson(text);
      var errorType = Utils.traverse(serviceError, [
        'error',
        'type'
      ]);
      var errorMsg = errorType ? getServiceErrorMsg(errorType) : 'Invalid JSON in service error message';
      return 'ImageProxy Service error: ' + errorMsg;
    };
    var handleServiceError = function (status, blob) {
      return Utils.readBlob(blob).then(function (text) {
        var serviceError = getServiceError(text);
        return global$3.reject(serviceError);
      });
    };
    var handleServiceErrorResponse = function (status, blob) {
      return isServiceErrorCode(status) ? handleServiceError(status, blob) : handleHttpError(status);
    };
    var Errors = {
      handleServiceErrorResponse: handleServiceErrorResponse,
      handleHttpError: handleHttpError,
      getHttpErrorMsg: getHttpErrorMsg,
      getServiceErrorMsg: getServiceErrorMsg
    };

    var appendApiKey = function (url, apiKey) {
      var separator = url.indexOf('?') === -1 ? '?' : '&';
      if (/[?&]apiKey=/.test(url) || !apiKey) {
        return url;
      } else {
        return url + separator + 'apiKey=' + encodeURIComponent(apiKey);
      }
    };
    var requestServiceBlob = function (url, apiKey) {
      var headers = {
        'Content-Type': 'application/json;charset=UTF-8',
        'tiny-api-key': apiKey
      };
      return Utils.requestUrlAsBlob(appendApiKey(url, apiKey), headers, false).then(function (result) {
        return result.status < 200 || result.status >= 300 ? Errors.handleServiceErrorResponse(result.status, result.blob) : global$3.resolve(result.blob);
      });
    };
    function requestBlob(url, withCredentials) {
      return Utils.requestUrlAsBlob(url, {}, withCredentials).then(function (result) {
        return result.status < 200 || result.status >= 300 ? Errors.handleHttpError(result.status) : global$3.resolve(result.blob);
      });
    }
    var getUrl = function (url, apiKey, withCredentials) {
      return apiKey ? requestServiceBlob(url, apiKey) : requestBlob(url, withCredentials);
    };
    var Proxy = { getUrl: getUrl };

    var count$1 = 0;
    var isEditableImage = function (editor, img) {
      var selectorMatched = editor.dom.is(img, 'img:not([data-mce-object],[data-mce-placeholder])');
      return selectorMatched && (isLocalImage(editor, img) || isCorsImage(editor, img) || editor.settings.imagetools_proxy);
    };
    var displayError = function (editor, error) {
      editor.notificationManager.open({
        text: error,
        type: 'error'
      });
    };
    var getSelectedImage = function (editor) {
      return editor.selection.getNode();
    };
    var extractFilename = function (editor, url) {
      var m = url.match(/\/([^\/\?]+)?\.(?:jpeg|jpg|png|gif)(?:\?|$)/i);
      if (m) {
        return editor.dom.encode(m[1]);
      }
      return null;
    };
    var createId = function () {
      return 'imagetools' + count$1++;
    };
    var isLocalImage = function (editor, img) {
      var url = img.src;
      return url.indexOf('data:') === 0 || url.indexOf('blob:') === 0 || new global$4(url).host === editor.documentBaseURI.host;
    };
    var isCorsImage = function (editor, img) {
      return global$1.inArray(getCorsHosts(editor), new global$4(img.src).host) !== -1;
    };
    var isCorsWithCredentialsImage = function (editor, img) {
      return global$1.inArray(getCredentialsHosts(editor), new global$4(img.src).host) !== -1;
    };
    var imageToBlob$2 = function (editor, img) {
      var src = img.src, apiKey;
      if (isCorsImage(editor, img)) {
        return Proxy.getUrl(img.src, null, isCorsWithCredentialsImage(editor, img));
      }
      if (!isLocalImage(editor, img)) {
        src = getProxyUrl(editor);
        src += (src.indexOf('?') === -1 ? '?' : '&') + 'url=' + encodeURIComponent(img.src);
        apiKey = getApiKey(editor);
        return Proxy.getUrl(src, apiKey, false);
      }
      return BlobConversions.imageToBlob(img);
    };
    var findSelectedBlob = function (editor) {
      var blobInfo;
      blobInfo = editor.editorUpload.blobCache.getByUri(getSelectedImage(editor).src);
      if (blobInfo) {
        return global$3.resolve(blobInfo.blob());
      }
      return imageToBlob$2(editor, getSelectedImage(editor));
    };
    var startTimedUpload = function (editor, imageUploadTimerState) {
      var imageUploadTimer = global$2.setEditorTimeout(editor, function () {
        editor.editorUpload.uploadImagesAuto();
      }, getUploadTimeout(editor));
      imageUploadTimerState.set(imageUploadTimer);
    };
    var cancelTimedUpload = function (imageUploadTimerState) {
      clearTimeout(imageUploadTimerState.get());
    };
    var updateSelectedImage = function (editor, ir, uploadImmediately, imageUploadTimerState, size) {
      return ir.toBlob().then(function (blob) {
        var uri, name, blobCache, blobInfo, selectedImage;
        blobCache = editor.editorUpload.blobCache;
        selectedImage = getSelectedImage(editor);
        uri = selectedImage.src;
        if (shouldReuseFilename(editor)) {
          blobInfo = blobCache.getByUri(uri);
          if (blobInfo) {
            uri = blobInfo.uri();
            name = blobInfo.name();
          } else {
            name = extractFilename(editor, uri);
          }
        }
        blobInfo = blobCache.create({
          id: createId(),
          blob: blob,
          base64: ir.toBase64(),
          uri: uri,
          name: name
        });
        blobCache.add(blobInfo);
        editor.undoManager.transact(function () {
          function imageLoadedHandler() {
            editor.$(selectedImage).off('load', imageLoadedHandler);
            editor.nodeChanged();
            if (uploadImmediately) {
              editor.editorUpload.uploadImagesAuto();
            } else {
              cancelTimedUpload(imageUploadTimerState);
              startTimedUpload(editor, imageUploadTimerState);
            }
          }
          editor.$(selectedImage).on('load', imageLoadedHandler);
          if (size) {
            editor.$(selectedImage).attr({
              width: size.w,
              height: size.h
            });
          }
          editor.$(selectedImage).attr({ src: blobInfo.blobUri() }).removeAttr('data-mce-src');
        });
        return blobInfo;
      });
    };
    var selectedImageOperation = function (editor, imageUploadTimerState, fn, size) {
      return function () {
        return editor._scanForImages().then(curry(findSelectedBlob, editor)).then(ResultConversions.blobToImageResult).then(fn).then(function (imageResult) {
          return updateSelectedImage(editor, imageResult, false, imageUploadTimerState, size);
        }, function (error) {
          displayError(editor, error);
        });
      };
    };
    var rotate$2 = function (editor, imageUploadTimerState, angle) {
      return function () {
        var size = ImageSize$1.getImageSize(getSelectedImage(editor));
        var flippedSize = size ? {
          w: size.h,
          h: size.w
        } : null;
        return selectedImageOperation(editor, imageUploadTimerState, function (imageResult) {
          return ImageTransformations.rotate(imageResult, angle);
        }, flippedSize)();
      };
    };
    var flip$2 = function (editor, imageUploadTimerState, axis) {
      return function () {
        return selectedImageOperation(editor, imageUploadTimerState, function (imageResult) {
          return ImageTransformations.flip(imageResult, axis);
        })();
      };
    };
    var editImageDialog = function (editor, imageUploadTimerState) {
      return function () {
        var img = getSelectedImage(editor), originalSize = ImageSize$1.getNaturalImageSize(img);
        var handleDialogBlob = function (blob) {
          return new global$3(function (resolve) {
            BlobConversions.blobToImage(blob).then(function (newImage) {
              var newSize = ImageSize$1.getNaturalImageSize(newImage);
              if (originalSize.w !== newSize.w || originalSize.h !== newSize.h) {
                if (ImageSize$1.getImageSize(img)) {
                  ImageSize$1.setImageSize(img, newSize);
                }
              }
              URL.revokeObjectURL(newImage.src);
              resolve(blob);
            });
          });
        };
        var openDialog = function (editor, imageResult) {
          return Dialog.edit(editor, imageResult).then(handleDialogBlob).then(ResultConversions.blobToImageResult).then(function (imageResult) {
            return updateSelectedImage(editor, imageResult, true, imageUploadTimerState);
          }, function () {
          });
        };
        findSelectedBlob(editor).then(ResultConversions.blobToImageResult).then(curry(openDialog, editor), function (error) {
          displayError(editor, error);
        });
      };
    };
    var Actions = {
      rotate: rotate$2,
      flip: flip$2,
      editImageDialog: editImageDialog,
      isEditableImage: isEditableImage,
      cancelTimedUpload: cancelTimedUpload
    };

    var register = function (editor, imageUploadTimerState) {
      global$1.each({
        mceImageRotateLeft: Actions.rotate(editor, imageUploadTimerState, -90),
        mceImageRotateRight: Actions.rotate(editor, imageUploadTimerState, 90),
        mceImageFlipVertical: Actions.flip(editor, imageUploadTimerState, 'v'),
        mceImageFlipHorizontal: Actions.flip(editor, imageUploadTimerState, 'h'),
        mceEditImage: Actions.editImageDialog(editor, imageUploadTimerState)
      }, function (fn, cmd) {
        editor.addCommand(cmd, fn);
      });
    };
    var Commands = { register: register };

    var setup = function (editor, imageUploadTimerState, lastSelectedImageState) {
      editor.on('NodeChange', function (e) {
        var lastSelectedImage = lastSelectedImageState.get();
        if (lastSelectedImage && lastSelectedImage.src !== e.element.src) {
          Actions.cancelTimedUpload(imageUploadTimerState);
          editor.editorUpload.uploadImagesAuto();
          lastSelectedImageState.set(null);
        }
        if (Actions.isEditableImage(editor, e.element)) {
          lastSelectedImageState.set(e.element);
        }
      });
    };
    var UploadSelectedImage = { setup: setup };

    var register$1 = function (editor) {
      editor.addButton('rotateleft', {
        title: 'Rotate counterclockwise',
        cmd: 'mceImageRotateLeft'
      });
      editor.addButton('rotateright', {
        title: 'Rotate clockwise',
        cmd: 'mceImageRotateRight'
      });
      editor.addButton('flipv', {
        title: 'Flip vertically',
        cmd: 'mceImageFlipVertical'
      });
      editor.addButton('fliph', {
        title: 'Flip horizontally',
        cmd: 'mceImageFlipHorizontal'
      });
      editor.addButton('editimage', {
        title: 'Edit image',
        cmd: 'mceEditImage'
      });
      editor.addButton('imageoptions', {
        title: 'Image options',
        icon: 'options',
        cmd: 'mceImage'
      });
    };
    var Buttons = { register: register$1 };

    var register$2 = function (editor) {
      editor.addContextToolbar(curry(Actions.isEditableImage, editor), getToolbarItems(editor));
    };
    var ContextToolbar = { register: register$2 };

    global.add('imagetools', function (editor) {
      var imageUploadTimerState = Cell(0);
      var lastSelectedImageState = Cell(null);
      Commands.register(editor, imageUploadTimerState);
      Buttons.register(editor);
      ContextToolbar.register(editor);
      UploadSelectedImage.setup(editor, imageUploadTimerState, lastSelectedImageState);
    });
    function Plugin () {
    }

    return Plugin;

}(window));
})();


/***/ }),

/***/ "./node_modules/tinymce/plugins/insertdatetime/index.js":
/*!**************************************************************!*\
  !*** ./node_modules/tinymce/plugins/insertdatetime/index.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// Exports the "insertdatetime" plugin for usage with module loaders
// Usage:
//   CommonJS:
//     require('tinymce/plugins/insertdatetime')
//   ES2015:
//     import 'tinymce/plugins/insertdatetime'
__webpack_require__(/*! ./plugin.js */ "./node_modules/tinymce/plugins/insertdatetime/plugin.js");

/***/ }),

/***/ "./node_modules/tinymce/plugins/insertdatetime/plugin.js":
/*!***************************************************************!*\
  !*** ./node_modules/tinymce/plugins/insertdatetime/plugin.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
var insertdatetime = (function () {
    'use strict';

    var Cell = function (initial) {
      var value = initial;
      var get = function () {
        return value;
      };
      var set = function (v) {
        value = v;
      };
      var clone = function () {
        return Cell(get());
      };
      return {
        get: get,
        set: set,
        clone: clone
      };
    };

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var getDateFormat = function (editor) {
      return editor.getParam('insertdatetime_dateformat', editor.translate('%Y-%m-%d'));
    };
    var getTimeFormat = function (editor) {
      return editor.getParam('insertdatetime_timeformat', editor.translate('%H:%M:%S'));
    };
    var getFormats = function (editor) {
      return editor.getParam('insertdatetime_formats', [
        '%H:%M:%S',
        '%Y-%m-%d',
        '%I:%M:%S %p',
        '%D'
      ]);
    };
    var getDefaultDateTime = function (editor) {
      var formats = getFormats(editor);
      return formats.length > 0 ? formats[0] : getTimeFormat(editor);
    };
    var shouldInsertTimeElement = function (editor) {
      return editor.getParam('insertdatetime_element', false);
    };
    var Settings = {
      getDateFormat: getDateFormat,
      getTimeFormat: getTimeFormat,
      getFormats: getFormats,
      getDefaultDateTime: getDefaultDateTime,
      shouldInsertTimeElement: shouldInsertTimeElement
    };

    var daysShort = 'Sun Mon Tue Wed Thu Fri Sat Sun'.split(' ');
    var daysLong = 'Sunday Monday Tuesday Wednesday Thursday Friday Saturday Sunday'.split(' ');
    var monthsShort = 'Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec'.split(' ');
    var monthsLong = 'January February March April May June July August September October November December'.split(' ');
    var addZeros = function (value, len) {
      value = '' + value;
      if (value.length < len) {
        for (var i = 0; i < len - value.length; i++) {
          value = '0' + value;
        }
      }
      return value;
    };
    var getDateTime = function (editor, fmt, date) {
      date = date || new Date();
      fmt = fmt.replace('%D', '%m/%d/%Y');
      fmt = fmt.replace('%r', '%I:%M:%S %p');
      fmt = fmt.replace('%Y', '' + date.getFullYear());
      fmt = fmt.replace('%y', '' + date.getYear());
      fmt = fmt.replace('%m', addZeros(date.getMonth() + 1, 2));
      fmt = fmt.replace('%d', addZeros(date.getDate(), 2));
      fmt = fmt.replace('%H', '' + addZeros(date.getHours(), 2));
      fmt = fmt.replace('%M', '' + addZeros(date.getMinutes(), 2));
      fmt = fmt.replace('%S', '' + addZeros(date.getSeconds(), 2));
      fmt = fmt.replace('%I', '' + ((date.getHours() + 11) % 12 + 1));
      fmt = fmt.replace('%p', '' + (date.getHours() < 12 ? 'AM' : 'PM'));
      fmt = fmt.replace('%B', '' + editor.translate(monthsLong[date.getMonth()]));
      fmt = fmt.replace('%b', '' + editor.translate(monthsShort[date.getMonth()]));
      fmt = fmt.replace('%A', '' + editor.translate(daysLong[date.getDay()]));
      fmt = fmt.replace('%a', '' + editor.translate(daysShort[date.getDay()]));
      fmt = fmt.replace('%%', '%');
      return fmt;
    };
    var updateElement = function (editor, timeElm, computerTime, userTime) {
      var newTimeElm = editor.dom.create('time', { datetime: computerTime }, userTime);
      timeElm.parentNode.insertBefore(newTimeElm, timeElm);
      editor.dom.remove(timeElm);
      editor.selection.select(newTimeElm, true);
      editor.selection.collapse(false);
    };
    var insertDateTime = function (editor, format) {
      if (Settings.shouldInsertTimeElement(editor)) {
        var userTime = getDateTime(editor, format);
        var computerTime = void 0;
        if (/%[HMSIp]/.test(format)) {
          computerTime = getDateTime(editor, '%Y-%m-%dT%H:%M');
        } else {
          computerTime = getDateTime(editor, '%Y-%m-%d');
        }
        var timeElm = editor.dom.getParent(editor.selection.getStart(), 'time');
        if (timeElm) {
          updateElement(editor, timeElm, computerTime, userTime);
        } else {
          editor.insertContent('<time datetime="' + computerTime + '">' + userTime + '</time>');
        }
      } else {
        editor.insertContent(getDateTime(editor, format));
      }
    };
    var Actions = {
      insertDateTime: insertDateTime,
      getDateTime: getDateTime
    };

    var register = function (editor) {
      editor.addCommand('mceInsertDate', function () {
        Actions.insertDateTime(editor, Settings.getDateFormat(editor));
      });
      editor.addCommand('mceInsertTime', function () {
        Actions.insertDateTime(editor, Settings.getTimeFormat(editor));
      });
    };
    var Commands = { register: register };

    var global$1 = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var createMenuItems = function (editor, lastFormatState) {
      var formats = Settings.getFormats(editor);
      return global$1.map(formats, function (fmt) {
        return {
          text: Actions.getDateTime(editor, fmt),
          onclick: function () {
            lastFormatState.set(fmt);
            Actions.insertDateTime(editor, fmt);
          }
        };
      });
    };
    var register$1 = function (editor, lastFormatState) {
      var menuItems = createMenuItems(editor, lastFormatState);
      editor.addButton('insertdatetime', {
        type: 'splitbutton',
        title: 'Insert date/time',
        menu: menuItems,
        onclick: function () {
          var lastFormat = lastFormatState.get();
          Actions.insertDateTime(editor, lastFormat ? lastFormat : Settings.getDefaultDateTime(editor));
        }
      });
      editor.addMenuItem('insertdatetime', {
        icon: 'date',
        text: 'Date/time',
        menu: menuItems,
        context: 'insert'
      });
    };
    var Buttons = { register: register$1 };

    global.add('insertdatetime', function (editor) {
      var lastFormatState = Cell(null);
      Commands.register(editor);
      Buttons.register(editor, lastFormatState);
    });
    function Plugin () {
    }

    return Plugin;

}());
})();


/***/ }),

/***/ "./node_modules/tinymce/plugins/media/index.js":
/*!*****************************************************!*\
  !*** ./node_modules/tinymce/plugins/media/index.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// Exports the "media" plugin for usage with module loaders
// Usage:
//   CommonJS:
//     require('tinymce/plugins/media')
//   ES2015:
//     import 'tinymce/plugins/media'
__webpack_require__(/*! ./plugin.js */ "./node_modules/tinymce/plugins/media/plugin.js");

/***/ }),

/***/ "./node_modules/tinymce/plugins/media/plugin.js":
/*!******************************************************!*\
  !*** ./node_modules/tinymce/plugins/media/plugin.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
var media = (function () {
    'use strict';

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global$1 = tinymce.util.Tools.resolve('tinymce.Env');

    var global$2 = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var getScripts = function (editor) {
      return editor.getParam('media_scripts');
    };
    var getAudioTemplateCallback = function (editor) {
      return editor.getParam('audio_template_callback');
    };
    var getVideoTemplateCallback = function (editor) {
      return editor.getParam('video_template_callback');
    };
    var hasLiveEmbeds = function (editor) {
      return editor.getParam('media_live_embeds', true);
    };
    var shouldFilterHtml = function (editor) {
      return editor.getParam('media_filter_html', true);
    };
    var getUrlResolver = function (editor) {
      return editor.getParam('media_url_resolver');
    };
    var hasAltSource = function (editor) {
      return editor.getParam('media_alt_source', true);
    };
    var hasPoster = function (editor) {
      return editor.getParam('media_poster', true);
    };
    var hasDimensions = function (editor) {
      return editor.getParam('media_dimensions', true);
    };
    var Settings = {
      getScripts: getScripts,
      getAudioTemplateCallback: getAudioTemplateCallback,
      getVideoTemplateCallback: getVideoTemplateCallback,
      hasLiveEmbeds: hasLiveEmbeds,
      shouldFilterHtml: shouldFilterHtml,
      getUrlResolver: getUrlResolver,
      hasAltSource: hasAltSource,
      hasPoster: hasPoster,
      hasDimensions: hasDimensions
    };

    var global$3 = tinymce.util.Tools.resolve('tinymce.html.SaxParser');

    var global$4 = tinymce.util.Tools.resolve('tinymce.dom.DOMUtils');

    var getVideoScriptMatch = function (prefixes, src) {
      if (prefixes) {
        for (var i = 0; i < prefixes.length; i++) {
          if (src.indexOf(prefixes[i].filter) !== -1) {
            return prefixes[i];
          }
        }
      }
    };
    var VideoScript = { getVideoScriptMatch: getVideoScriptMatch };

    var trimPx = function (value) {
      return value.replace(/px$/, '');
    };
    var addPx = function (value) {
      return /^[0-9.]+$/.test(value) ? value + 'px' : value;
    };
    var getSize = function (name) {
      return function (elm) {
        return elm ? trimPx(elm.style[name]) : '';
      };
    };
    var setSize = function (name) {
      return function (elm, value) {
        if (elm) {
          elm.style[name] = addPx(value);
        }
      };
    };
    var Size = {
      getMaxWidth: getSize('maxWidth'),
      getMaxHeight: getSize('maxHeight'),
      setMaxWidth: setSize('maxWidth'),
      setMaxHeight: setSize('maxHeight')
    };

    var DOM = global$4.DOM;
    var getEphoxEmbedIri = function (elm) {
      return DOM.getAttrib(elm, 'data-ephox-embed-iri');
    };
    var isEphoxEmbed = function (html) {
      var fragment = DOM.createFragment(html);
      return getEphoxEmbedIri(fragment.firstChild) !== '';
    };
    var htmlToDataSax = function (prefixes, html) {
      var data = {};
      global$3({
        validate: false,
        allow_conditional_comments: true,
        special: 'script,noscript',
        start: function (name, attrs) {
          if (!data.source1 && name === 'param') {
            data.source1 = attrs.map.movie;
          }
          if (name === 'iframe' || name === 'object' || name === 'embed' || name === 'video' || name === 'audio') {
            if (!data.type) {
              data.type = name;
            }
            data = global$2.extend(attrs.map, data);
          }
          if (name === 'script') {
            var videoScript = VideoScript.getVideoScriptMatch(prefixes, attrs.map.src);
            if (!videoScript) {
              return;
            }
            data = {
              type: 'script',
              source1: attrs.map.src,
              width: videoScript.width,
              height: videoScript.height
            };
          }
          if (name === 'source') {
            if (!data.source1) {
              data.source1 = attrs.map.src;
            } else if (!data.source2) {
              data.source2 = attrs.map.src;
            }
          }
          if (name === 'img' && !data.poster) {
            data.poster = attrs.map.src;
          }
        }
      }).parse(html);
      data.source1 = data.source1 || data.src || data.data;
      data.source2 = data.source2 || '';
      data.poster = data.poster || '';
      return data;
    };
    var ephoxEmbedHtmlToData = function (html) {
      var fragment = DOM.createFragment(html);
      var div = fragment.firstChild;
      return {
        type: 'ephox-embed-iri',
        source1: getEphoxEmbedIri(div),
        source2: '',
        poster: '',
        width: Size.getMaxWidth(div),
        height: Size.getMaxHeight(div)
      };
    };
    var htmlToData = function (prefixes, html) {
      return isEphoxEmbed(html) ? ephoxEmbedHtmlToData(html) : htmlToDataSax(prefixes, html);
    };
    var HtmlToData = { htmlToData: htmlToData };

    var global$5 = tinymce.util.Tools.resolve('tinymce.util.Promise');

    var guess = function (url) {
      var mimes = {
        mp3: 'audio/mpeg',
        wav: 'audio/wav',
        mp4: 'video/mp4',
        webm: 'video/webm',
        ogg: 'video/ogg',
        swf: 'application/x-shockwave-flash'
      };
      var fileEnd = url.toLowerCase().split('.').pop();
      var mime = mimes[fileEnd];
      return mime ? mime : '';
    };
    var Mime = { guess: guess };

    var global$6 = tinymce.util.Tools.resolve('tinymce.html.Writer');

    var global$7 = tinymce.util.Tools.resolve('tinymce.html.Schema');

    var DOM$1 = global$4.DOM;
    var setAttributes = function (attrs, updatedAttrs) {
      var name;
      var i;
      var value;
      var attr;
      for (name in updatedAttrs) {
        value = '' + updatedAttrs[name];
        if (attrs.map[name]) {
          i = attrs.length;
          while (i--) {
            attr = attrs[i];
            if (attr.name === name) {
              if (value) {
                attrs.map[name] = value;
                attr.value = value;
              } else {
                delete attrs.map[name];
                attrs.splice(i, 1);
              }
            }
          }
        } else if (value) {
          attrs.push({
            name: name,
            value: value
          });
          attrs.map[name] = value;
        }
      }
    };
    var normalizeHtml = function (html) {
      var writer = global$6();
      var parser = global$3(writer);
      parser.parse(html);
      return writer.getContent();
    };
    var updateHtmlSax = function (html, data, updateAll) {
      var writer = global$6();
      var sourceCount = 0;
      var hasImage;
      global$3({
        validate: false,
        allow_conditional_comments: true,
        special: 'script,noscript',
        comment: function (text) {
          writer.comment(text);
        },
        cdata: function (text) {
          writer.cdata(text);
        },
        text: function (text, raw) {
          writer.text(text, raw);
        },
        start: function (name, attrs, empty) {
          switch (name) {
          case 'video':
          case 'object':
          case 'embed':
          case 'img':
          case 'iframe':
            if (data.height !== undefined && data.width !== undefined) {
              setAttributes(attrs, {
                width: data.width,
                height: data.height
              });
            }
            break;
          }
          if (updateAll) {
            switch (name) {
            case 'video':
              setAttributes(attrs, {
                poster: data.poster,
                src: ''
              });
              if (data.source2) {
                setAttributes(attrs, { src: '' });
              }
              break;
            case 'iframe':
              setAttributes(attrs, { src: data.source1 });
              break;
            case 'source':
              sourceCount++;
              if (sourceCount <= 2) {
                setAttributes(attrs, {
                  src: data['source' + sourceCount],
                  type: data['source' + sourceCount + 'mime']
                });
                if (!data['source' + sourceCount]) {
                  return;
                }
              }
              break;
            case 'img':
              if (!data.poster) {
                return;
              }
              hasImage = true;
              break;
            }
          }
          writer.start(name, attrs, empty);
        },
        end: function (name) {
          if (name === 'video' && updateAll) {
            for (var index = 1; index <= 2; index++) {
              if (data['source' + index]) {
                var attrs = [];
                attrs.map = {};
                if (sourceCount < index) {
                  setAttributes(attrs, {
                    src: data['source' + index],
                    type: data['source' + index + 'mime']
                  });
                  writer.start('source', attrs, true);
                }
              }
            }
          }
          if (data.poster && name === 'object' && updateAll && !hasImage) {
            var imgAttrs = [];
            imgAttrs.map = {};
            setAttributes(imgAttrs, {
              src: data.poster,
              width: data.width,
              height: data.height
            });
            writer.start('img', imgAttrs, true);
          }
          writer.end(name);
        }
      }, global$7({})).parse(html);
      return writer.getContent();
    };
    var isEphoxEmbed$1 = function (html) {
      var fragment = DOM$1.createFragment(html);
      return DOM$1.getAttrib(fragment.firstChild, 'data-ephox-embed-iri') !== '';
    };
    var updateEphoxEmbed = function (html, data) {
      var fragment = DOM$1.createFragment(html);
      var div = fragment.firstChild;
      Size.setMaxWidth(div, data.width);
      Size.setMaxHeight(div, data.height);
      return normalizeHtml(div.outerHTML);
    };
    var updateHtml = function (html, data, updateAll) {
      return isEphoxEmbed$1(html) ? updateEphoxEmbed(html, data) : updateHtmlSax(html, data, updateAll);
    };
    var UpdateHtml = { updateHtml: updateHtml };

    var urlPatterns = [
      {
        regex: /youtu\.be\/([\w\-_\?&=.]+)/i,
        type: 'iframe',
        w: 560,
        h: 314,
        url: '//www.youtube.com/embed/$1',
        allowFullscreen: true
      },
      {
        regex: /youtube\.com(.+)v=([^&]+)(&([a-z0-9&=\-_]+))?/i,
        type: 'iframe',
        w: 560,
        h: 314,
        url: '//www.youtube.com/embed/$2?$4',
        allowFullscreen: true
      },
      {
        regex: /youtube.com\/embed\/([a-z0-9\?&=\-_]+)/i,
        type: 'iframe',
        w: 560,
        h: 314,
        url: '//www.youtube.com/embed/$1',
        allowFullscreen: true
      },
      {
        regex: /vimeo\.com\/([0-9]+)/,
        type: 'iframe',
        w: 425,
        h: 350,
        url: '//player.vimeo.com/video/$1?title=0&byline=0&portrait=0&color=8dc7dc',
        allowFullscreen: true
      },
      {
        regex: /vimeo\.com\/(.*)\/([0-9]+)/,
        type: 'iframe',
        w: 425,
        h: 350,
        url: '//player.vimeo.com/video/$2?title=0&amp;byline=0',
        allowFullscreen: true
      },
      {
        regex: /maps\.google\.([a-z]{2,3})\/maps\/(.+)msid=(.+)/,
        type: 'iframe',
        w: 425,
        h: 350,
        url: '//maps.google.com/maps/ms?msid=$2&output=embed"',
        allowFullscreen: false
      },
      {
        regex: /dailymotion\.com\/video\/([^_]+)/,
        type: 'iframe',
        w: 480,
        h: 270,
        url: '//www.dailymotion.com/embed/video/$1',
        allowFullscreen: true
      },
      {
        regex: /dai\.ly\/([^_]+)/,
        type: 'iframe',
        w: 480,
        h: 270,
        url: '//www.dailymotion.com/embed/video/$1',
        allowFullscreen: true
      }
    ];
    var getUrl = function (pattern, url) {
      var match = pattern.regex.exec(url);
      var newUrl = pattern.url;
      var _loop_1 = function (i) {
        newUrl = newUrl.replace('$' + i, function () {
          return match[i] ? match[i] : '';
        });
      };
      for (var i = 0; i < match.length; i++) {
        _loop_1(i);
      }
      return newUrl.replace(/\?$/, '');
    };
    var matchPattern = function (url) {
      var pattern = urlPatterns.filter(function (pattern) {
        return pattern.regex.test(url);
      });
      if (pattern.length > 0) {
        return global$2.extend({}, pattern[0], { url: getUrl(pattern[0], url) });
      } else {
        return null;
      }
    };

    var getIframeHtml = function (data) {
      var allowFullscreen = data.allowFullscreen ? ' allowFullscreen="1"' : '';
      return '<iframe src="' + data.source1 + '" width="' + data.width + '" height="' + data.height + '"' + allowFullscreen + '></iframe>';
    };
    var getFlashHtml = function (data) {
      var html = '<object data="' + data.source1 + '" width="' + data.width + '" height="' + data.height + '" type="application/x-shockwave-flash">';
      if (data.poster) {
        html += '<img src="' + data.poster + '" width="' + data.width + '" height="' + data.height + '" />';
      }
      html += '</object>';
      return html;
    };
    var getAudioHtml = function (data, audioTemplateCallback) {
      if (audioTemplateCallback) {
        return audioTemplateCallback(data);
      } else {
        return '<audio controls="controls" src="' + data.source1 + '">' + (data.source2 ? '\n<source src="' + data.source2 + '"' + (data.source2mime ? ' type="' + data.source2mime + '"' : '') + ' />\n' : '') + '</audio>';
      }
    };
    var getVideoHtml = function (data, videoTemplateCallback) {
      if (videoTemplateCallback) {
        return videoTemplateCallback(data);
      } else {
        return '<video width="' + data.width + '" height="' + data.height + '"' + (data.poster ? ' poster="' + data.poster + '"' : '') + ' controls="controls">\n' + '<source src="' + data.source1 + '"' + (data.source1mime ? ' type="' + data.source1mime + '"' : '') + ' />\n' + (data.source2 ? '<source src="' + data.source2 + '"' + (data.source2mime ? ' type="' + data.source2mime + '"' : '') + ' />\n' : '') + '</video>';
      }
    };
    var getScriptHtml = function (data) {
      return '<script src="' + data.source1 + '"></script>';
    };
    var dataToHtml = function (editor, dataIn) {
      var data = global$2.extend({}, dataIn);
      if (!data.source1) {
        global$2.extend(data, HtmlToData.htmlToData(Settings.getScripts(editor), data.embed));
        if (!data.source1) {
          return '';
        }
      }
      if (!data.source2) {
        data.source2 = '';
      }
      if (!data.poster) {
        data.poster = '';
      }
      data.source1 = editor.convertURL(data.source1, 'source');
      data.source2 = editor.convertURL(data.source2, 'source');
      data.source1mime = Mime.guess(data.source1);
      data.source2mime = Mime.guess(data.source2);
      data.poster = editor.convertURL(data.poster, 'poster');
      var pattern = matchPattern(data.source1);
      if (pattern) {
        data.source1 = pattern.url;
        data.type = pattern.type;
        data.allowFullscreen = pattern.allowFullscreen;
        data.width = data.width || pattern.w;
        data.height = data.height || pattern.h;
      }
      if (data.embed) {
        return UpdateHtml.updateHtml(data.embed, data, true);
      } else {
        var videoScript = VideoScript.getVideoScriptMatch(Settings.getScripts(editor), data.source1);
        if (videoScript) {
          data.type = 'script';
          data.width = videoScript.width;
          data.height = videoScript.height;
        }
        var audioTemplateCallback = Settings.getAudioTemplateCallback(editor);
        var videoTemplateCallback = Settings.getVideoTemplateCallback(editor);
        data.width = data.width || 300;
        data.height = data.height || 150;
        global$2.each(data, function (value, key) {
          data[key] = editor.dom.encode(value);
        });
        if (data.type === 'iframe') {
          return getIframeHtml(data);
        } else if (data.source1mime === 'application/x-shockwave-flash') {
          return getFlashHtml(data);
        } else if (data.source1mime.indexOf('audio') !== -1) {
          return getAudioHtml(data, audioTemplateCallback);
        } else if (data.type === 'script') {
          return getScriptHtml(data);
        } else {
          return getVideoHtml(data, videoTemplateCallback);
        }
      }
    };
    var DataToHtml = { dataToHtml: dataToHtml };

    var cache = {};
    var embedPromise = function (data, dataToHtml, handler) {
      return new global$5(function (res, rej) {
        var wrappedResolve = function (response) {
          if (response.html) {
            cache[data.source1] = response;
          }
          return res({
            url: data.source1,
            html: response.html ? response.html : dataToHtml(data)
          });
        };
        if (cache[data.source1]) {
          wrappedResolve(cache[data.source1]);
        } else {
          handler({ url: data.source1 }, wrappedResolve, rej);
        }
      });
    };
    var defaultPromise = function (data, dataToHtml) {
      return new global$5(function (res) {
        res({
          html: dataToHtml(data),
          url: data.source1
        });
      });
    };
    var loadedData = function (editor) {
      return function (data) {
        return DataToHtml.dataToHtml(editor, data);
      };
    };
    var getEmbedHtml = function (editor, data) {
      var embedHandler = Settings.getUrlResolver(editor);
      return embedHandler ? embedPromise(data, loadedData(editor), embedHandler) : defaultPromise(data, loadedData(editor));
    };
    var isCached = function (url) {
      return cache.hasOwnProperty(url);
    };
    var Service = {
      getEmbedHtml: getEmbedHtml,
      isCached: isCached
    };

    var doSyncSize = function (widthCtrl, heightCtrl) {
      widthCtrl.state.set('oldVal', widthCtrl.value());
      heightCtrl.state.set('oldVal', heightCtrl.value());
    };
    var doSizeControls = function (win, f) {
      var widthCtrl = win.find('#width')[0];
      var heightCtrl = win.find('#height')[0];
      var constrained = win.find('#constrain')[0];
      if (widthCtrl && heightCtrl && constrained) {
        f(widthCtrl, heightCtrl, constrained.checked());
      }
    };
    var doUpdateSize = function (widthCtrl, heightCtrl, isContrained) {
      var oldWidth = widthCtrl.state.get('oldVal');
      var oldHeight = heightCtrl.state.get('oldVal');
      var newWidth = widthCtrl.value();
      var newHeight = heightCtrl.value();
      if (isContrained && oldWidth && oldHeight && newWidth && newHeight) {
        if (newWidth !== oldWidth) {
          newHeight = Math.round(newWidth / oldWidth * newHeight);
          if (!isNaN(newHeight)) {
            heightCtrl.value(newHeight);
          }
        } else {
          newWidth = Math.round(newHeight / oldHeight * newWidth);
          if (!isNaN(newWidth)) {
            widthCtrl.value(newWidth);
          }
        }
      }
      doSyncSize(widthCtrl, heightCtrl);
    };
    var syncSize = function (win) {
      doSizeControls(win, doSyncSize);
    };
    var updateSize = function (win) {
      doSizeControls(win, doUpdateSize);
    };
    var createUi = function (onChange) {
      var recalcSize = function () {
        onChange(function (win) {
          updateSize(win);
        });
      };
      return {
        type: 'container',
        label: 'Dimensions',
        layout: 'flex',
        align: 'center',
        spacing: 5,
        items: [
          {
            name: 'width',
            type: 'textbox',
            maxLength: 5,
            size: 5,
            onchange: recalcSize,
            ariaLabel: 'Width'
          },
          {
            type: 'label',
            text: 'x'
          },
          {
            name: 'height',
            type: 'textbox',
            maxLength: 5,
            size: 5,
            onchange: recalcSize,
            ariaLabel: 'Height'
          },
          {
            name: 'constrain',
            type: 'checkbox',
            checked: true,
            text: 'Constrain proportions'
          }
        ]
      };
    };
    var SizeManager = {
      createUi: createUi,
      syncSize: syncSize,
      updateSize: updateSize
    };

    var embedChange = global$1.ie && global$1.ie <= 8 ? 'onChange' : 'onInput';
    var handleError = function (editor) {
      return function (error) {
        var errorMessage = error && error.msg ? 'Media embed handler error: ' + error.msg : 'Media embed handler threw unknown error.';
        editor.notificationManager.open({
          type: 'error',
          text: errorMessage
        });
      };
    };
    var getData = function (editor) {
      var element = editor.selection.getNode();
      var dataEmbed = element.getAttribute('data-ephox-embed-iri');
      if (dataEmbed) {
        return {
          'source1': dataEmbed,
          'data-ephox-embed-iri': dataEmbed,
          'width': Size.getMaxWidth(element),
          'height': Size.getMaxHeight(element)
        };
      }
      return element.getAttribute('data-mce-object') ? HtmlToData.htmlToData(Settings.getScripts(editor), editor.serializer.serialize(element, { selection: true })) : {};
    };
    var getSource = function (editor) {
      var elm = editor.selection.getNode();
      if (elm.getAttribute('data-mce-object') || elm.getAttribute('data-ephox-embed-iri')) {
        return editor.selection.getContent();
      }
    };
    var addEmbedHtml = function (win, editor) {
      return function (response) {
        var html = response.html;
        var embed = win.find('#embed')[0];
        var data = global$2.extend(HtmlToData.htmlToData(Settings.getScripts(editor), html), { source1: response.url });
        win.fromJSON(data);
        if (embed) {
          embed.value(html);
          SizeManager.updateSize(win);
        }
      };
    };
    var selectPlaceholder = function (editor, beforeObjects) {
      var i;
      var y;
      var afterObjects = editor.dom.select('img[data-mce-object]');
      for (i = 0; i < beforeObjects.length; i++) {
        for (y = afterObjects.length - 1; y >= 0; y--) {
          if (beforeObjects[i] === afterObjects[y]) {
            afterObjects.splice(y, 1);
          }
        }
      }
      editor.selection.select(afterObjects[0]);
    };
    var handleInsert = function (editor, html) {
      var beforeObjects = editor.dom.select('img[data-mce-object]');
      editor.insertContent(html);
      selectPlaceholder(editor, beforeObjects);
      editor.nodeChanged();
    };
    var submitForm = function (win, editor) {
      var data = win.toJSON();
      data.embed = UpdateHtml.updateHtml(data.embed, data);
      if (data.embed && Service.isCached(data.source1)) {
        handleInsert(editor, data.embed);
      } else {
        Service.getEmbedHtml(editor, data).then(function (response) {
          handleInsert(editor, response.html);
        }).catch(handleError(editor));
      }
    };
    var populateMeta = function (win, meta) {
      global$2.each(meta, function (value, key) {
        win.find('#' + key).value(value);
      });
    };
    var showDialog = function (editor) {
      var win;
      var data;
      var generalFormItems = [{
          name: 'source1',
          type: 'filepicker',
          filetype: 'media',
          size: 40,
          autofocus: true,
          label: 'Source',
          onpaste: function () {
            setTimeout(function () {
              Service.getEmbedHtml(editor, win.toJSON()).then(addEmbedHtml(win, editor)).catch(handleError(editor));
            }, 1);
          },
          onchange: function (e) {
            Service.getEmbedHtml(editor, win.toJSON()).then(addEmbedHtml(win, editor)).catch(handleError(editor));
            populateMeta(win, e.meta);
          },
          onbeforecall: function (e) {
            e.meta = win.toJSON();
          }
        }];
      var advancedFormItems = [];
      var reserialise = function (update) {
        update(win);
        data = win.toJSON();
        win.find('#embed').value(UpdateHtml.updateHtml(data.embed, data));
      };
      if (Settings.hasAltSource(editor)) {
        advancedFormItems.push({
          name: 'source2',
          type: 'filepicker',
          filetype: 'media',
          size: 40,
          label: 'Alternative source'
        });
      }
      if (Settings.hasPoster(editor)) {
        advancedFormItems.push({
          name: 'poster',
          type: 'filepicker',
          filetype: 'image',
          size: 40,
          label: 'Poster'
        });
      }
      if (Settings.hasDimensions(editor)) {
        var control = SizeManager.createUi(reserialise);
        generalFormItems.push(control);
      }
      data = getData(editor);
      var embedTextBox = {
        id: 'mcemediasource',
        type: 'textbox',
        flex: 1,
        name: 'embed',
        value: getSource(editor),
        multiline: true,
        rows: 5,
        label: 'Source'
      };
      var updateValueOnChange = function () {
        data = global$2.extend({}, HtmlToData.htmlToData(Settings.getScripts(editor), this.value()));
        this.parent().parent().fromJSON(data);
      };
      embedTextBox[embedChange] = updateValueOnChange;
      var body = [
        {
          title: 'General',
          type: 'form',
          items: generalFormItems
        },
        {
          title: 'Embed',
          type: 'container',
          layout: 'flex',
          direction: 'column',
          align: 'stretch',
          padding: 10,
          spacing: 10,
          items: [
            {
              type: 'label',
              text: 'Paste your embed code below:',
              forId: 'mcemediasource'
            },
            embedTextBox
          ]
        }
      ];
      if (advancedFormItems.length > 0) {
        body.push({
          title: 'Advanced',
          type: 'form',
          items: advancedFormItems
        });
      }
      win = editor.windowManager.open({
        title: 'Insert/edit media',
        data: data,
        bodyType: 'tabpanel',
        body: body,
        onSubmit: function () {
          SizeManager.updateSize(win);
          submitForm(win, editor);
        }
      });
      SizeManager.syncSize(win);
    };
    var Dialog = { showDialog: showDialog };

    var get = function (editor) {
      var showDialog = function () {
        Dialog.showDialog(editor);
      };
      return { showDialog: showDialog };
    };
    var Api = { get: get };

    var register = function (editor) {
      var showDialog = function () {
        Dialog.showDialog(editor);
      };
      editor.addCommand('mceMedia', showDialog);
    };
    var Commands = { register: register };

    var global$8 = tinymce.util.Tools.resolve('tinymce.html.Node');

    var sanitize = function (editor, html) {
      if (Settings.shouldFilterHtml(editor) === false) {
        return html;
      }
      var writer = global$6();
      var blocked;
      global$3({
        validate: false,
        allow_conditional_comments: false,
        special: 'script,noscript',
        comment: function (text) {
          writer.comment(text);
        },
        cdata: function (text) {
          writer.cdata(text);
        },
        text: function (text, raw) {
          writer.text(text, raw);
        },
        start: function (name, attrs, empty) {
          blocked = true;
          if (name === 'script' || name === 'noscript') {
            return;
          }
          for (var i = 0; i < attrs.length; i++) {
            if (attrs[i].name.indexOf('on') === 0) {
              return;
            }
            if (attrs[i].name === 'style') {
              attrs[i].value = editor.dom.serializeStyle(editor.dom.parseStyle(attrs[i].value), name);
            }
          }
          writer.start(name, attrs, empty);
          blocked = false;
        },
        end: function (name) {
          if (blocked) {
            return;
          }
          writer.end(name);
        }
      }, global$7({})).parse(html);
      return writer.getContent();
    };
    var Sanitize = { sanitize: sanitize };

    var createPlaceholderNode = function (editor, node) {
      var placeHolder;
      var name = node.name;
      placeHolder = new global$8('img', 1);
      placeHolder.shortEnded = true;
      retainAttributesAndInnerHtml(editor, node, placeHolder);
      placeHolder.attr({
        'width': node.attr('width') || '300',
        'height': node.attr('height') || (name === 'audio' ? '30' : '150'),
        'style': node.attr('style'),
        'src': global$1.transparentSrc,
        'data-mce-object': name,
        'class': 'mce-object mce-object-' + name
      });
      return placeHolder;
    };
    var createPreviewIframeNode = function (editor, node) {
      var previewWrapper;
      var previewNode;
      var shimNode;
      var name = node.name;
      previewWrapper = new global$8('span', 1);
      previewWrapper.attr({
        'contentEditable': 'false',
        'style': node.attr('style'),
        'data-mce-object': name,
        'class': 'mce-preview-object mce-object-' + name
      });
      retainAttributesAndInnerHtml(editor, node, previewWrapper);
      previewNode = new global$8(name, 1);
      previewNode.attr({
        src: node.attr('src'),
        allowfullscreen: node.attr('allowfullscreen'),
        style: node.attr('style'),
        class: node.attr('class'),
        width: node.attr('width'),
        height: node.attr('height'),
        frameborder: '0'
      });
      shimNode = new global$8('span', 1);
      shimNode.attr('class', 'mce-shim');
      previewWrapper.append(previewNode);
      previewWrapper.append(shimNode);
      return previewWrapper;
    };
    var retainAttributesAndInnerHtml = function (editor, sourceNode, targetNode) {
      var attrName;
      var attrValue;
      var attribs;
      var ai;
      var innerHtml;
      attribs = sourceNode.attributes;
      ai = attribs.length;
      while (ai--) {
        attrName = attribs[ai].name;
        attrValue = attribs[ai].value;
        if (attrName !== 'width' && attrName !== 'height' && attrName !== 'style') {
          if (attrName === 'data' || attrName === 'src') {
            attrValue = editor.convertURL(attrValue, attrName);
          }
          targetNode.attr('data-mce-p-' + attrName, attrValue);
        }
      }
      innerHtml = sourceNode.firstChild && sourceNode.firstChild.value;
      if (innerHtml) {
        targetNode.attr('data-mce-html', escape(Sanitize.sanitize(editor, innerHtml)));
        targetNode.firstChild = null;
      }
    };
    var isWithinEphoxEmbed = function (node) {
      while (node = node.parent) {
        if (node.attr('data-ephox-embed-iri')) {
          return true;
        }
      }
      return false;
    };
    var placeHolderConverter = function (editor) {
      return function (nodes) {
        var i = nodes.length;
        var node;
        var videoScript;
        while (i--) {
          node = nodes[i];
          if (!node.parent) {
            continue;
          }
          if (node.parent.attr('data-mce-object')) {
            continue;
          }
          if (node.name === 'script') {
            videoScript = VideoScript.getVideoScriptMatch(Settings.getScripts(editor), node.attr('src'));
            if (!videoScript) {
              continue;
            }
          }
          if (videoScript) {
            if (videoScript.width) {
              node.attr('width', videoScript.width.toString());
            }
            if (videoScript.height) {
              node.attr('height', videoScript.height.toString());
            }
          }
          if (node.name === 'iframe' && Settings.hasLiveEmbeds(editor) && global$1.ceFalse) {
            if (!isWithinEphoxEmbed(node)) {
              node.replace(createPreviewIframeNode(editor, node));
            }
          } else {
            if (!isWithinEphoxEmbed(node)) {
              node.replace(createPlaceholderNode(editor, node));
            }
          }
        }
      };
    };
    var Nodes = {
      createPreviewIframeNode: createPreviewIframeNode,
      createPlaceholderNode: createPlaceholderNode,
      placeHolderConverter: placeHolderConverter
    };

    var setup = function (editor) {
      editor.on('preInit', function () {
        var specialElements = editor.schema.getSpecialElements();
        global$2.each('video audio iframe object'.split(' '), function (name) {
          specialElements[name] = new RegExp('</' + name + '[^>]*>', 'gi');
        });
        var boolAttrs = editor.schema.getBoolAttrs();
        global$2.each('webkitallowfullscreen mozallowfullscreen allowfullscreen'.split(' '), function (name) {
          boolAttrs[name] = {};
        });
        editor.parser.addNodeFilter('iframe,video,audio,object,embed,script', Nodes.placeHolderConverter(editor));
        editor.serializer.addAttributeFilter('data-mce-object', function (nodes, name) {
          var i = nodes.length;
          var node;
          var realElm;
          var ai;
          var attribs;
          var innerHtml;
          var innerNode;
          var realElmName;
          var className;
          while (i--) {
            node = nodes[i];
            if (!node.parent) {
              continue;
            }
            realElmName = node.attr(name);
            realElm = new global$8(realElmName, 1);
            if (realElmName !== 'audio' && realElmName !== 'script') {
              className = node.attr('class');
              if (className && className.indexOf('mce-preview-object') !== -1) {
                realElm.attr({
                  width: node.firstChild.attr('width'),
                  height: node.firstChild.attr('height')
                });
              } else {
                realElm.attr({
                  width: node.attr('width'),
                  height: node.attr('height')
                });
              }
            }
            realElm.attr({ style: node.attr('style') });
            attribs = node.attributes;
            ai = attribs.length;
            while (ai--) {
              var attrName = attribs[ai].name;
              if (attrName.indexOf('data-mce-p-') === 0) {
                realElm.attr(attrName.substr(11), attribs[ai].value);
              }
            }
            if (realElmName === 'script') {
              realElm.attr('type', 'text/javascript');
            }
            innerHtml = node.attr('data-mce-html');
            if (innerHtml) {
              innerNode = new global$8('#text', 3);
              innerNode.raw = true;
              innerNode.value = Sanitize.sanitize(editor, unescape(innerHtml));
              realElm.append(innerNode);
            }
            node.replace(realElm);
          }
        });
      });
      editor.on('setContent', function () {
        editor.$('span.mce-preview-object').each(function (index, elm) {
          var $elm = editor.$(elm);
          if ($elm.find('span.mce-shim', elm).length === 0) {
            $elm.append('<span class="mce-shim"></span>');
          }
        });
      });
    };
    var FilterContent = { setup: setup };

    var setup$1 = function (editor) {
      editor.on('ResolveName', function (e) {
        var name;
        if (e.target.nodeType === 1 && (name = e.target.getAttribute('data-mce-object'))) {
          e.name = name;
        }
      });
    };
    var ResolveName = { setup: setup$1 };

    var setup$2 = function (editor) {
      editor.on('click keyup', function () {
        var selectedNode = editor.selection.getNode();
        if (selectedNode && editor.dom.hasClass(selectedNode, 'mce-preview-object')) {
          if (editor.dom.getAttrib(selectedNode, 'data-mce-selected')) {
            selectedNode.setAttribute('data-mce-selected', '2');
          }
        }
      });
      editor.on('ObjectSelected', function (e) {
        var objectType = e.target.getAttribute('data-mce-object');
        if (objectType === 'audio' || objectType === 'script') {
          e.preventDefault();
        }
      });
      editor.on('objectResized', function (e) {
        var target = e.target;
        var html;
        if (target.getAttribute('data-mce-object')) {
          html = target.getAttribute('data-mce-html');
          if (html) {
            html = unescape(html);
            target.setAttribute('data-mce-html', escape(UpdateHtml.updateHtml(html, {
              width: e.width,
              height: e.height
            })));
          }
        }
      });
    };
    var Selection = { setup: setup$2 };

    var register$1 = function (editor) {
      editor.addButton('media', {
        tooltip: 'Insert/edit media',
        cmd: 'mceMedia',
        stateSelector: [
          'img[data-mce-object]',
          'span[data-mce-object]',
          'div[data-ephox-embed-iri]'
        ]
      });
      editor.addMenuItem('media', {
        icon: 'media',
        text: 'Media',
        cmd: 'mceMedia',
        context: 'insert',
        prependToContext: true
      });
    };
    var Buttons = { register: register$1 };

    global.add('media', function (editor) {
      Commands.register(editor);
      Buttons.register(editor);
      ResolveName.setup(editor);
      FilterContent.setup(editor);
      Selection.setup(editor);
      return Api.get(editor);
    });
    function Plugin () {
    }

    return Plugin;

}());
})();


/***/ }),

/***/ "./node_modules/tinymce/plugins/preview/index.js":
/*!*******************************************************!*\
  !*** ./node_modules/tinymce/plugins/preview/index.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// Exports the "preview" plugin for usage with module loaders
// Usage:
//   CommonJS:
//     require('tinymce/plugins/preview')
//   ES2015:
//     import 'tinymce/plugins/preview'
__webpack_require__(/*! ./plugin.js */ "./node_modules/tinymce/plugins/preview/plugin.js");

/***/ }),

/***/ "./node_modules/tinymce/plugins/preview/plugin.js":
/*!********************************************************!*\
  !*** ./node_modules/tinymce/plugins/preview/plugin.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
var preview = (function () {
    'use strict';

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global$1 = tinymce.util.Tools.resolve('tinymce.Env');

    var getPreviewDialogWidth = function (editor) {
      return parseInt(editor.getParam('plugin_preview_width', '650'), 10);
    };
    var getPreviewDialogHeight = function (editor) {
      return parseInt(editor.getParam('plugin_preview_height', '500'), 10);
    };
    var getContentStyle = function (editor) {
      return editor.getParam('content_style', '');
    };
    var Settings = {
      getPreviewDialogWidth: getPreviewDialogWidth,
      getPreviewDialogHeight: getPreviewDialogHeight,
      getContentStyle: getContentStyle
    };

    var global$2 = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var getPreviewHtml = function (editor) {
      var previewHtml;
      var headHtml = '';
      var encode = editor.dom.encode;
      var contentStyle = Settings.getContentStyle(editor);
      headHtml += '<base href="' + encode(editor.documentBaseURI.getURI()) + '">';
      if (contentStyle) {
        headHtml += '<style type="text/css">' + contentStyle + '</style>';
      }
      global$2.each(editor.contentCSS, function (url) {
        headHtml += '<link type="text/css" rel="stylesheet" href="' + encode(editor.documentBaseURI.toAbsolute(url)) + '">';
      });
      var bodyId = editor.settings.body_id || 'tinymce';
      if (bodyId.indexOf('=') !== -1) {
        bodyId = editor.getParam('body_id', '', 'hash');
        bodyId = bodyId[editor.id] || bodyId;
      }
      var bodyClass = editor.settings.body_class || '';
      if (bodyClass.indexOf('=') !== -1) {
        bodyClass = editor.getParam('body_class', '', 'hash');
        bodyClass = bodyClass[editor.id] || '';
      }
      var preventClicksOnLinksScript = '<script>' + 'document.addEventListener && document.addEventListener("click", function(e) {' + 'for (var elm = e.target; elm; elm = elm.parentNode) {' + 'if (elm.nodeName === "A") {' + 'e.preventDefault();' + '}' + '}' + '}, false);' + '</script> ';
      var dirAttr = editor.settings.directionality ? ' dir="' + editor.settings.directionality + '"' : '';
      previewHtml = '<!DOCTYPE html>' + '<html>' + '<head>' + headHtml + '</head>' + '<body id="' + encode(bodyId) + '" class="mce-content-body ' + encode(bodyClass) + '"' + encode(dirAttr) + '>' + editor.getContent() + preventClicksOnLinksScript + '</body>' + '</html>';
      return previewHtml;
    };
    var injectIframeContent = function (editor, iframe, sandbox) {
      var previewHtml = getPreviewHtml(editor);
      if (!sandbox) {
        var doc = iframe.contentWindow.document;
        doc.open();
        doc.write(previewHtml);
        doc.close();
      } else {
        iframe.src = 'data:text/html;charset=utf-8,' + encodeURIComponent(previewHtml);
      }
    };
    var IframeContent = {
      getPreviewHtml: getPreviewHtml,
      injectIframeContent: injectIframeContent
    };

    var open = function (editor) {
      var sandbox = !global$1.ie;
      var dialogHtml = '<iframe src="" frameborder="0"' + (sandbox ? ' sandbox="allow-scripts"' : '') + '></iframe>';
      var dialogWidth = Settings.getPreviewDialogWidth(editor);
      var dialogHeight = Settings.getPreviewDialogHeight(editor);
      editor.windowManager.open({
        title: 'Preview',
        width: dialogWidth,
        height: dialogHeight,
        html: dialogHtml,
        buttons: {
          text: 'Close',
          onclick: function (e) {
            e.control.parent().parent().close();
          }
        },
        onPostRender: function (e) {
          var iframeElm = e.control.getEl('body').firstChild;
          IframeContent.injectIframeContent(editor, iframeElm, sandbox);
        }
      });
    };
    var Dialog = { open: open };

    var register = function (editor) {
      editor.addCommand('mcePreview', function () {
        Dialog.open(editor);
      });
    };
    var Commands = { register: register };

    var register$1 = function (editor) {
      editor.addButton('preview', {
        title: 'Preview',
        cmd: 'mcePreview'
      });
      editor.addMenuItem('preview', {
        text: 'Preview',
        cmd: 'mcePreview',
        context: 'view'
      });
    };
    var Buttons = { register: register$1 };

    global.add('preview', function (editor) {
      Commands.register(editor);
      Buttons.register(editor);
    });
    function Plugin () {
    }

    return Plugin;

}());
})();


/***/ }),

/***/ "./node_modules/tinymce/plugins/searchreplace/index.js":
/*!*************************************************************!*\
  !*** ./node_modules/tinymce/plugins/searchreplace/index.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// Exports the "searchreplace" plugin for usage with module loaders
// Usage:
//   CommonJS:
//     require('tinymce/plugins/searchreplace')
//   ES2015:
//     import 'tinymce/plugins/searchreplace'
__webpack_require__(/*! ./plugin.js */ "./node_modules/tinymce/plugins/searchreplace/plugin.js");

/***/ }),

/***/ "./node_modules/tinymce/plugins/searchreplace/plugin.js":
/*!**************************************************************!*\
  !*** ./node_modules/tinymce/plugins/searchreplace/plugin.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
var searchreplace = (function () {
    'use strict';

    var Cell = function (initial) {
      var value = initial;
      var get = function () {
        return value;
      };
      var set = function (v) {
        value = v;
      };
      var clone = function () {
        return Cell(get());
      };
      return {
        get: get,
        set: set,
        clone: clone
      };
    };

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global$1 = tinymce.util.Tools.resolve('tinymce.util.Tools');

    function isContentEditableFalse(node) {
      return node && node.nodeType === 1 && node.contentEditable === 'false';
    }
    function findAndReplaceDOMText(regex, node, replacementNode, captureGroup, schema) {
      var m;
      var matches = [];
      var text, count = 0, doc;
      var blockElementsMap, hiddenTextElementsMap, shortEndedElementsMap;
      doc = node.ownerDocument;
      blockElementsMap = schema.getBlockElements();
      hiddenTextElementsMap = schema.getWhiteSpaceElements();
      shortEndedElementsMap = schema.getShortEndedElements();
      function getMatchIndexes(m, captureGroup) {
        captureGroup = captureGroup || 0;
        if (!m[0]) {
          throw new Error('findAndReplaceDOMText cannot handle zero-length matches');
        }
        var index = m.index;
        if (captureGroup > 0) {
          var cg = m[captureGroup];
          if (!cg) {
            throw new Error('Invalid capture group');
          }
          index += m[0].indexOf(cg);
          m[0] = cg;
        }
        return [
          index,
          index + m[0].length,
          [m[0]]
        ];
      }
      function getText(node) {
        var txt;
        if (node.nodeType === 3) {
          return node.data;
        }
        if (hiddenTextElementsMap[node.nodeName] && !blockElementsMap[node.nodeName]) {
          return '';
        }
        txt = '';
        if (isContentEditableFalse(node)) {
          return '\n';
        }
        if (blockElementsMap[node.nodeName] || shortEndedElementsMap[node.nodeName]) {
          txt += '\n';
        }
        if (node = node.firstChild) {
          do {
            txt += getText(node);
          } while (node = node.nextSibling);
        }
        return txt;
      }
      function stepThroughMatches(node, matches, replaceFn) {
        var startNode, endNode, startNodeIndex, endNodeIndex, innerNodes = [], atIndex = 0, curNode = node, matchLocation = matches.shift(), matchIndex = 0;
        out:
          while (true) {
            if (blockElementsMap[curNode.nodeName] || shortEndedElementsMap[curNode.nodeName] || isContentEditableFalse(curNode)) {
              atIndex++;
            }
            if (curNode.nodeType === 3) {
              if (!endNode && curNode.length + atIndex >= matchLocation[1]) {
                endNode = curNode;
                endNodeIndex = matchLocation[1] - atIndex;
              } else if (startNode) {
                innerNodes.push(curNode);
              }
              if (!startNode && curNode.length + atIndex > matchLocation[0]) {
                startNode = curNode;
                startNodeIndex = matchLocation[0] - atIndex;
              }
              atIndex += curNode.length;
            }
            if (startNode && endNode) {
              curNode = replaceFn({
                startNode: startNode,
                startNodeIndex: startNodeIndex,
                endNode: endNode,
                endNodeIndex: endNodeIndex,
                innerNodes: innerNodes,
                match: matchLocation[2],
                matchIndex: matchIndex
              });
              atIndex -= endNode.length - endNodeIndex;
              startNode = null;
              endNode = null;
              innerNodes = [];
              matchLocation = matches.shift();
              matchIndex++;
              if (!matchLocation) {
                break;
              }
            } else if ((!hiddenTextElementsMap[curNode.nodeName] || blockElementsMap[curNode.nodeName]) && curNode.firstChild) {
              if (!isContentEditableFalse(curNode)) {
                curNode = curNode.firstChild;
                continue;
              }
            } else if (curNode.nextSibling) {
              curNode = curNode.nextSibling;
              continue;
            }
            while (true) {
              if (curNode.nextSibling) {
                curNode = curNode.nextSibling;
                break;
              } else if (curNode.parentNode !== node) {
                curNode = curNode.parentNode;
              } else {
                break out;
              }
            }
          }
      }
      function genReplacer(nodeName) {
        var makeReplacementNode;
        if (typeof nodeName !== 'function') {
          var stencilNode_1 = nodeName.nodeType ? nodeName : doc.createElement(nodeName);
          makeReplacementNode = function (fill, matchIndex) {
            var clone = stencilNode_1.cloneNode(false);
            clone.setAttribute('data-mce-index', matchIndex);
            if (fill) {
              clone.appendChild(doc.createTextNode(fill));
            }
            return clone;
          };
        } else {
          makeReplacementNode = nodeName;
        }
        return function (range) {
          var before;
          var after;
          var parentNode;
          var startNode = range.startNode;
          var endNode = range.endNode;
          var matchIndex = range.matchIndex;
          if (startNode === endNode) {
            var node_1 = startNode;
            parentNode = node_1.parentNode;
            if (range.startNodeIndex > 0) {
              before = doc.createTextNode(node_1.data.substring(0, range.startNodeIndex));
              parentNode.insertBefore(before, node_1);
            }
            var el = makeReplacementNode(range.match[0], matchIndex);
            parentNode.insertBefore(el, node_1);
            if (range.endNodeIndex < node_1.length) {
              after = doc.createTextNode(node_1.data.substring(range.endNodeIndex));
              parentNode.insertBefore(after, node_1);
            }
            node_1.parentNode.removeChild(node_1);
            return el;
          }
          before = doc.createTextNode(startNode.data.substring(0, range.startNodeIndex));
          after = doc.createTextNode(endNode.data.substring(range.endNodeIndex));
          var elA = makeReplacementNode(startNode.data.substring(range.startNodeIndex), matchIndex);
          for (var i = 0, l = range.innerNodes.length; i < l; ++i) {
            var innerNode = range.innerNodes[i];
            var innerEl = makeReplacementNode(innerNode.data, matchIndex);
            innerNode.parentNode.replaceChild(innerEl, innerNode);
          }
          var elB = makeReplacementNode(endNode.data.substring(0, range.endNodeIndex), matchIndex);
          parentNode = startNode.parentNode;
          parentNode.insertBefore(before, startNode);
          parentNode.insertBefore(elA, startNode);
          parentNode.removeChild(startNode);
          parentNode = endNode.parentNode;
          parentNode.insertBefore(elB, endNode);
          parentNode.insertBefore(after, endNode);
          parentNode.removeChild(endNode);
          return elB;
        };
      }
      text = getText(node);
      if (!text) {
        return;
      }
      if (regex.global) {
        while (m = regex.exec(text)) {
          matches.push(getMatchIndexes(m, captureGroup));
        }
      } else {
        m = text.match(regex);
        matches.push(getMatchIndexes(m, captureGroup));
      }
      if (matches.length) {
        count = matches.length;
        stepThroughMatches(node, matches, genReplacer(replacementNode));
      }
      return count;
    }
    var FindReplaceText = { findAndReplaceDOMText: findAndReplaceDOMText };

    var getElmIndex = function (elm) {
      var value = elm.getAttribute('data-mce-index');
      if (typeof value === 'number') {
        return '' + value;
      }
      return value;
    };
    var markAllMatches = function (editor, currentIndexState, regex) {
      var node, marker;
      marker = editor.dom.create('span', { 'data-mce-bogus': 1 });
      marker.className = 'mce-match-marker';
      node = editor.getBody();
      done(editor, currentIndexState, false);
      return FindReplaceText.findAndReplaceDOMText(regex, node, marker, false, editor.schema);
    };
    var unwrap = function (node) {
      var parentNode = node.parentNode;
      if (node.firstChild) {
        parentNode.insertBefore(node.firstChild, node);
      }
      node.parentNode.removeChild(node);
    };
    var findSpansByIndex = function (editor, index) {
      var nodes;
      var spans = [];
      nodes = global$1.toArray(editor.getBody().getElementsByTagName('span'));
      if (nodes.length) {
        for (var i = 0; i < nodes.length; i++) {
          var nodeIndex = getElmIndex(nodes[i]);
          if (nodeIndex === null || !nodeIndex.length) {
            continue;
          }
          if (nodeIndex === index.toString()) {
            spans.push(nodes[i]);
          }
        }
      }
      return spans;
    };
    var moveSelection = function (editor, currentIndexState, forward) {
      var testIndex = currentIndexState.get();
      var dom = editor.dom;
      forward = forward !== false;
      if (forward) {
        testIndex++;
      } else {
        testIndex--;
      }
      dom.removeClass(findSpansByIndex(editor, currentIndexState.get()), 'mce-match-marker-selected');
      var spans = findSpansByIndex(editor, testIndex);
      if (spans.length) {
        dom.addClass(findSpansByIndex(editor, testIndex), 'mce-match-marker-selected');
        editor.selection.scrollIntoView(spans[0]);
        return testIndex;
      }
      return -1;
    };
    var removeNode = function (dom, node) {
      var parent = node.parentNode;
      dom.remove(node);
      if (dom.isEmpty(parent)) {
        dom.remove(parent);
      }
    };
    var find = function (editor, currentIndexState, text, matchCase, wholeWord) {
      text = text.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, '\\$&');
      text = text.replace(/\s/g, '[^\\S\\r\\n]');
      text = wholeWord ? '\\b' + text + '\\b' : text;
      var count = markAllMatches(editor, currentIndexState, new RegExp(text, matchCase ? 'g' : 'gi'));
      if (count) {
        currentIndexState.set(-1);
        currentIndexState.set(moveSelection(editor, currentIndexState, true));
      }
      return count;
    };
    var next = function (editor, currentIndexState) {
      var index = moveSelection(editor, currentIndexState, true);
      if (index !== -1) {
        currentIndexState.set(index);
      }
    };
    var prev = function (editor, currentIndexState) {
      var index = moveSelection(editor, currentIndexState, false);
      if (index !== -1) {
        currentIndexState.set(index);
      }
    };
    var isMatchSpan = function (node) {
      var matchIndex = getElmIndex(node);
      return matchIndex !== null && matchIndex.length > 0;
    };
    var replace = function (editor, currentIndexState, text, forward, all) {
      var i, nodes, node, matchIndex, currentMatchIndex, nextIndex = currentIndexState.get(), hasMore;
      forward = forward !== false;
      node = editor.getBody();
      nodes = global$1.grep(global$1.toArray(node.getElementsByTagName('span')), isMatchSpan);
      for (i = 0; i < nodes.length; i++) {
        var nodeIndex = getElmIndex(nodes[i]);
        matchIndex = currentMatchIndex = parseInt(nodeIndex, 10);
        if (all || matchIndex === currentIndexState.get()) {
          if (text.length) {
            nodes[i].firstChild.nodeValue = text;
            unwrap(nodes[i]);
          } else {
            removeNode(editor.dom, nodes[i]);
          }
          while (nodes[++i]) {
            matchIndex = parseInt(getElmIndex(nodes[i]), 10);
            if (matchIndex === currentMatchIndex) {
              removeNode(editor.dom, nodes[i]);
            } else {
              i--;
              break;
            }
          }
          if (forward) {
            nextIndex--;
          }
        } else if (currentMatchIndex > currentIndexState.get()) {
          nodes[i].setAttribute('data-mce-index', currentMatchIndex - 1);
        }
      }
      currentIndexState.set(nextIndex);
      if (forward) {
        hasMore = hasNext(editor, currentIndexState);
        next(editor, currentIndexState);
      } else {
        hasMore = hasPrev(editor, currentIndexState);
        prev(editor, currentIndexState);
      }
      return !all && hasMore;
    };
    var done = function (editor, currentIndexState, keepEditorSelection) {
      var i, nodes, startContainer, endContainer;
      nodes = global$1.toArray(editor.getBody().getElementsByTagName('span'));
      for (i = 0; i < nodes.length; i++) {
        var nodeIndex = getElmIndex(nodes[i]);
        if (nodeIndex !== null && nodeIndex.length) {
          if (nodeIndex === currentIndexState.get().toString()) {
            if (!startContainer) {
              startContainer = nodes[i].firstChild;
            }
            endContainer = nodes[i].firstChild;
          }
          unwrap(nodes[i]);
        }
      }
      if (startContainer && endContainer) {
        var rng = editor.dom.createRng();
        rng.setStart(startContainer, 0);
        rng.setEnd(endContainer, endContainer.data.length);
        if (keepEditorSelection !== false) {
          editor.selection.setRng(rng);
        }
        return rng;
      }
    };
    var hasNext = function (editor, currentIndexState) {
      return findSpansByIndex(editor, currentIndexState.get() + 1).length > 0;
    };
    var hasPrev = function (editor, currentIndexState) {
      return findSpansByIndex(editor, currentIndexState.get() - 1).length > 0;
    };
    var Actions = {
      done: done,
      find: find,
      next: next,
      prev: prev,
      replace: replace,
      hasNext: hasNext,
      hasPrev: hasPrev
    };

    var get = function (editor, currentIndexState) {
      var done = function (keepEditorSelection) {
        return Actions.done(editor, currentIndexState, keepEditorSelection);
      };
      var find = function (text, matchCase, wholeWord) {
        return Actions.find(editor, currentIndexState, text, matchCase, wholeWord);
      };
      var next = function () {
        return Actions.next(editor, currentIndexState);
      };
      var prev = function () {
        return Actions.prev(editor, currentIndexState);
      };
      var replace = function (text, forward, all) {
        return Actions.replace(editor, currentIndexState, text, forward, all);
      };
      return {
        done: done,
        find: find,
        next: next,
        prev: prev,
        replace: replace
      };
    };
    var Api = { get: get };

    var open = function (editor, currentIndexState) {
      var last = {}, selectedText;
      editor.undoManager.add();
      selectedText = global$1.trim(editor.selection.getContent({ format: 'text' }));
      function updateButtonStates() {
        win.statusbar.find('#next').disabled(Actions.hasNext(editor, currentIndexState) === false);
        win.statusbar.find('#prev').disabled(Actions.hasPrev(editor, currentIndexState) === false);
      }
      function notFoundAlert() {
        editor.windowManager.alert('Could not find the specified string.', function () {
          win.find('#find')[0].focus();
        });
      }
      var win = editor.windowManager.open({
        layout: 'flex',
        pack: 'center',
        align: 'center',
        onClose: function () {
          editor.focus();
          Actions.done(editor, currentIndexState);
          editor.undoManager.add();
        },
        onSubmit: function (e) {
          var count, caseState, text, wholeWord;
          e.preventDefault();
          caseState = win.find('#case').checked();
          wholeWord = win.find('#words').checked();
          text = win.find('#find').value();
          if (!text.length) {
            Actions.done(editor, currentIndexState, false);
            win.statusbar.items().slice(1).disabled(true);
            return;
          }
          if (last.text === text && last.caseState === caseState && last.wholeWord === wholeWord) {
            if (!Actions.hasNext(editor, currentIndexState)) {
              notFoundAlert();
              return;
            }
            Actions.next(editor, currentIndexState);
            updateButtonStates();
            return;
          }
          count = Actions.find(editor, currentIndexState, text, caseState, wholeWord);
          if (!count) {
            notFoundAlert();
          }
          win.statusbar.items().slice(1).disabled(count === 0);
          updateButtonStates();
          last = {
            text: text,
            caseState: caseState,
            wholeWord: wholeWord
          };
        },
        buttons: [
          {
            text: 'Find',
            subtype: 'primary',
            onclick: function () {
              win.submit();
            }
          },
          {
            text: 'Replace',
            disabled: true,
            onclick: function () {
              if (!Actions.replace(editor, currentIndexState, win.find('#replace').value())) {
                win.statusbar.items().slice(1).disabled(true);
                currentIndexState.set(-1);
                last = {};
              }
            }
          },
          {
            text: 'Replace all',
            disabled: true,
            onclick: function () {
              Actions.replace(editor, currentIndexState, win.find('#replace').value(), true, true);
              win.statusbar.items().slice(1).disabled(true);
              last = {};
            }
          },
          {
            type: 'spacer',
            flex: 1
          },
          {
            text: 'Prev',
            name: 'prev',
            disabled: true,
            onclick: function () {
              Actions.prev(editor, currentIndexState);
              updateButtonStates();
            }
          },
          {
            text: 'Next',
            name: 'next',
            disabled: true,
            onclick: function () {
              Actions.next(editor, currentIndexState);
              updateButtonStates();
            }
          }
        ],
        title: 'Find and replace',
        items: {
          type: 'form',
          padding: 20,
          labelGap: 30,
          spacing: 10,
          items: [
            {
              type: 'textbox',
              name: 'find',
              size: 40,
              label: 'Find',
              value: selectedText
            },
            {
              type: 'textbox',
              name: 'replace',
              size: 40,
              label: 'Replace with'
            },
            {
              type: 'checkbox',
              name: 'case',
              text: 'Match case',
              label: ' '
            },
            {
              type: 'checkbox',
              name: 'words',
              text: 'Whole words',
              label: ' '
            }
          ]
        }
      });
    };
    var Dialog = { open: open };

    var register = function (editor, currentIndexState) {
      editor.addCommand('SearchReplace', function () {
        Dialog.open(editor, currentIndexState);
      });
    };
    var Commands = { register: register };

    var showDialog = function (editor, currentIndexState) {
      return function () {
        Dialog.open(editor, currentIndexState);
      };
    };
    var register$1 = function (editor, currentIndexState) {
      editor.addMenuItem('searchreplace', {
        text: 'Find and replace',
        shortcut: 'Meta+F',
        onclick: showDialog(editor, currentIndexState),
        separator: 'before',
        context: 'edit'
      });
      editor.addButton('searchreplace', {
        tooltip: 'Find and replace',
        onclick: showDialog(editor, currentIndexState)
      });
      editor.shortcuts.add('Meta+F', '', showDialog(editor, currentIndexState));
    };
    var Buttons = { register: register$1 };

    global.add('searchreplace', function (editor) {
      var currentIndexState = Cell(-1);
      Commands.register(editor, currentIndexState);
      Buttons.register(editor, currentIndexState);
      return Api.get(editor, currentIndexState);
    });
    function Plugin () {
    }

    return Plugin;

}());
})();


/***/ }),

/***/ "./node_modules/tinymce/plugins/wordcount/index.js":
/*!*********************************************************!*\
  !*** ./node_modules/tinymce/plugins/wordcount/index.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// Exports the "wordcount" plugin for usage with module loaders
// Usage:
//   CommonJS:
//     require('tinymce/plugins/wordcount')
//   ES2015:
//     import 'tinymce/plugins/wordcount'
__webpack_require__(/*! ./plugin.js */ "./node_modules/tinymce/plugins/wordcount/plugin.js");

/***/ }),

/***/ "./node_modules/tinymce/plugins/wordcount/plugin.js":
/*!**********************************************************!*\
  !*** ./node_modules/tinymce/plugins/wordcount/plugin.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
var wordcount = (function () {
    'use strict';

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global$1 = tinymce.util.Tools.resolve('tinymce.dom.TreeWalker');

    var global$2 = tinymce.util.Tools.resolve('tinymce.Env');

    var regExps = {
      aletter: '[A-Za-z\xaa\xb5\xba\xc0-\xd6\xd8-\xf6\xf8-\u02c1\u02c6-\u02d1\u02e0-\u02e4\u02ec\u02ee\u0370-\u0374\u0376\u0377\u037a-\u037d\u0386\u0388-\u038a\u038c\u038e-\u03a1\u03a3-\u03f5\u03f7-\u0481\u048a-\u0527\u0531-\u0556\u0559\u0561-\u0587\u05d0-\u05ea\u05f0-\u05F3\u0620-\u064a\u066e\u066f\u0671-\u06d3\u06d5\u06e5\u06e6\u06ee\u06ef\u06fa-\u06fc\u06ff\u0710\u0712-\u072f\u074d-\u07a5\u07b1\u07ca-\u07ea\u07f4\u07f5\u07fa\u0800-\u0815\u081a\u0824\u0828\u0840-\u0858\u0904-\u0939\u093d\u0950\u0958-\u0961\u0971-\u0977\u0979-\u097f\u0985-\u098c\u098f\u0990\u0993-\u09a8\u09aa-\u09b0\u09b2\u09b6-\u09b9\u09bd\u09ce\u09dc\u09dd\u09df-\u09e1\u09f0\u09f1\u0a05-\u0a0a\u0a0f\u0a10\u0a13-\u0a28\u0a2a-\u0a30\u0a32\u0a33\u0a35\u0a36\u0a38\u0a39\u0a59-\u0a5c\u0a5e\u0a72-\u0a74\u0a85-\u0a8d\u0a8f-\u0a91\u0a93-\u0aa8\u0aaa-\u0ab0\u0ab2\u0ab3\u0ab5-\u0ab9\u0abd\u0ad0\u0ae0\u0ae1\u0b05-\u0b0c\u0b0f\u0b10\u0b13-\u0b28\u0b2a-\u0b30\u0b32\u0b33\u0b35-\u0b39\u0b3d\u0b5c\u0b5d\u0b5f-\u0b61\u0b71\u0b83\u0b85-\u0b8a\u0b8e-\u0b90\u0b92-\u0b95\u0b99\u0b9a\u0b9c\u0b9e\u0b9f\u0ba3\u0ba4\u0ba8-\u0baa\u0bae-\u0bb9\u0bd0\u0c05-\u0c0c\u0c0e-\u0c10\u0c12-\u0c28\u0c2a-\u0c33\u0c35-\u0c39\u0c3d\u0c58\u0c59\u0c60\u0c61\u0c85-\u0c8c\u0c8e-\u0c90\u0c92-\u0ca8\u0caa-\u0cb3\u0cb5-\u0cb9\u0cbd\u0cde\u0ce0\u0ce1\u0cf1\u0cf2\u0d05-\u0d0c\u0d0e-\u0d10\u0d12-\u0d3a\u0d3d\u0d4e\u0d60\u0d61\u0d7a-\u0d7f\u0d85-\u0d96\u0d9a-\u0db1\u0db3-\u0dbb\u0dbd\u0dc0-\u0dc6\u0f00\u0f40-\u0f47\u0f49-\u0f6c\u0f88-\u0f8c\u10a0-\u10c5\u10d0-\u10fa\u10fc\u1100-\u1248\u124a-\u124d\u1250-\u1256\u1258\u125a-\u125d\u1260-\u1288\u128a-\u128d\u1290-\u12b0\u12b2-\u12b5\u12b8-\u12be\u12c0\u12c2-\u12c5\u12c8-\u12d6\u12d8-\u1310\u1312-\u1315\u1318-\u135a\u1380-\u138f\u13a0-\u13f4\u1401-\u166c\u166f-\u167f\u1681-\u169a\u16a0-\u16ea\u16ee-\u16f0\u1700-\u170c\u170e-\u1711\u1720-\u1731\u1740-\u1751\u1760-\u176c\u176e-\u1770\u1820-\u1877\u1880-\u18a8\u18aa\u18b0-\u18f5\u1900-\u191c\u1a00-\u1a16\u1b05-\u1b33\u1b45-\u1b4b\u1b83-\u1ba0\u1bae\u1baf\u1bc0-\u1be5\u1c00-\u1c23\u1c4d-\u1c4f\u1c5a-\u1c7d\u1ce9-\u1cec\u1cee-\u1cf1\u1d00-\u1dbf\u1e00-\u1f15\u1f18-\u1f1d\u1f20-\u1f45\u1f48-\u1f4d\u1f50-\u1f57\u1f59\u1f5b\u1f5d\u1f5f-\u1f7d\u1f80-\u1fb4\u1fb6-\u1fbc\u1fbe\u1fc2-\u1fc4\u1fc6-\u1fcc\u1fd0-\u1fd3\u1fd6-\u1fdb\u1fe0-\u1fec\u1ff2-\u1ff4\u1ff6-\u1ffc\u2071\u207f\u2090-\u209c\u2102\u2107\u210a-\u2113\u2115\u2119-\u211d\u2124\u2126\u2128\u212a-\u212d\u212f-\u2139\u213c-\u213f\u2145-\u2149\u214e\u2160-\u2188\u24B6-\u24E9\u2c00-\u2c2e\u2c30-\u2c5e\u2c60-\u2ce4\u2ceb-\u2cee\u2d00-\u2d25\u2d30-\u2d65\u2d6f\u2d80-\u2d96\u2da0-\u2da6\u2da8-\u2dae\u2db0-\u2db6\u2db8-\u2dbe\u2dc0-\u2dc6\u2dc8-\u2dce\u2dd0-\u2dd6\u2dd8-\u2dde\u2e2f\u3005\u303b\u303c\u3105-\u312d\u3131-\u318e\u31a0-\u31ba\ua000-\ua48c\ua4d0-\ua4fd\ua500-\ua60c\ua610-\ua61f\ua62a\ua62b\ua640-\ua66e\ua67f-\ua697\ua6a0-\ua6ef\ua717-\ua71f\ua722-\ua788\ua78b-\ua78e\ua790\ua791\ua7a0-\ua7a9\ua7fa-\ua801\ua803-\ua805\ua807-\ua80a\ua80c-\ua822\ua840-\ua873\ua882-\ua8b3\ua8f2-\ua8f7\ua8fb\ua90a-\ua925\ua930-\ua946\ua960-\ua97c\ua984-\ua9b2\ua9cf\uaa00-\uaa28\uaa40-\uaa42\uaa44-\uaa4b\uab01-\uab06\uab09-\uab0e\uab11-\uab16\uab20-\uab26\uab28-\uab2e\uabc0-\uabe2\uac00-\ud7a3\ud7b0-\ud7c6\ud7cb-\ud7fb\ufb00-\ufb06\ufb13-\ufb17\ufb1d\ufb1f-\ufb28\ufb2a-\ufb36\ufb38-\ufb3c\ufb3e\ufb40\ufb41\ufb43\ufb44\ufb46-\ufbb1\ufbd3-\ufd3d\ufd50-\ufd8f\ufd92-\ufdc7\ufdf0-\ufdfb\ufe70-\ufe74\ufe76-\ufefc\uff21-\uff3a\uff41-\uff5a\uffa0-\uffbe\uffc2-\uffc7\uffca-\uffcf\uffd2-\uffd7\uffda-\uffdc]',
      midnumlet: '[-\'\\.\u2018\u2019\u2024\uFE52\uFF07\uFF0E]',
      midletter: '[:\xB7\xB7\u05F4\u2027\uFE13\uFE55\uFF1A]',
      midnum: '[\xB1+*/,;;\u0589\u060C\u060D\u066C\u07F8\u2044\uFE10\uFE14\uFE50\uFE54\uFF0C\uFF1B]',
      numeric: '[0-9\u0660-\u0669\u066B\u06f0-\u06f9\u07c0-\u07c9\u0966-\u096f\u09e6-\u09ef\u0a66-\u0a6f\u0ae6-\u0aef\u0b66-\u0b6f\u0be6-\u0bef\u0c66-\u0c6f\u0ce6-\u0cef\u0d66-\u0d6f\u0e50-\u0e59\u0ed0-\u0ed9\u0f20-\u0f29\u1040-\u1049\u1090-\u1099\u17e0-\u17e9\u1810-\u1819\u1946-\u194f\u19d0-\u19d9\u1a80-\u1a89\u1a90-\u1a99\u1b50-\u1b59\u1bb0-\u1bb9\u1c40-\u1c49\u1c50-\u1c59\ua620-\ua629\ua8d0-\ua8d9\ua900-\ua909\ua9d0-\ua9d9\uaa50-\uaa59\uabf0-\uabf9]',
      cr: '\\r',
      lf: '\\n',
      newline: '[\x0B\f\x85\u2028\u2029]',
      extend: '[\u0300-\u036f\u0483-\u0489\u0591-\u05bd\u05bf\u05c1\u05c2\u05c4\u05c5\u05c7\u0610-\u061a\u064b-\u065f\u0670\u06d6-\u06dc\u06df-\u06e4\u06e7\u06e8\u06ea-\u06ed\u0711\u0730-\u074a\u07a6-\u07b0\u07eb-\u07f3\u0816-\u0819\u081b-\u0823\u0825-\u0827\u0829-\u082d\u0859-\u085b\u0900-\u0903\u093a-\u093c\u093e-\u094f\u0951-\u0957\u0962\u0963\u0981-\u0983\u09bc\u09be-\u09c4\u09c7\u09c8\u09cb-\u09cd\u09d7\u09e2\u09e3\u0a01-\u0a03\u0a3c\u0a3e-\u0a42\u0a47\u0a48\u0a4b-\u0a4d\u0a51\u0a70\u0a71\u0a75\u0a81-\u0a83\u0abc\u0abe-\u0ac5\u0ac7-\u0ac9\u0acb-\u0acd\u0ae2\u0ae3\u0b01-\u0b03\u0b3c\u0b3e-\u0b44\u0b47\u0b48\u0b4b-\u0b4d\u0b56\u0b57\u0b62\u0b63\u0b82\u0bbe-\u0bc2\u0bc6-\u0bc8\u0bca-\u0bcd\u0bd7\u0c01-\u0c03\u0c3e-\u0c44\u0c46-\u0c48\u0c4a-\u0c4d\u0c55\u0c56\u0c62\u0c63\u0c82\u0c83\u0cbc\u0cbe-\u0cc4\u0cc6-\u0cc8\u0cca-\u0ccd\u0cd5\u0cd6\u0ce2\u0ce3\u0d02\u0d03\u0d3e-\u0d44\u0d46-\u0d48\u0d4a-\u0d4d\u0d57\u0d62\u0d63\u0d82\u0d83\u0dca\u0dcf-\u0dd4\u0dd6\u0dd8-\u0ddf\u0df2\u0df3\u0e31\u0e34-\u0e3a\u0e47-\u0e4e\u0eb1\u0eb4-\u0eb9\u0ebb\u0ebc\u0ec8-\u0ecd\u0f18\u0f19\u0f35\u0f37\u0f39\u0f3e\u0f3f\u0f71-\u0f84\u0f86\u0f87\u0f8d-\u0f97\u0f99-\u0fbc\u0fc6\u102b-\u103e\u1056-\u1059\u105e-\u1060\u1062-\u1064\u1067-\u106d\u1071-\u1074\u1082-\u108d\u108f\u109a-\u109d\u135d-\u135f\u1712-\u1714\u1732-\u1734\u1752\u1753\u1772\u1773\u17b6-\u17d3\u17dd\u180b-\u180d\u18a9\u1920-\u192b\u1930-\u193b\u19b0-\u19c0\u19c8\u19c9\u1a17-\u1a1b\u1a55-\u1a5e\u1a60-\u1a7c\u1a7f\u1b00-\u1b04\u1b34-\u1b44\u1b6b-\u1b73\u1b80-\u1b82\u1ba1-\u1baa\u1be6-\u1bf3\u1c24-\u1c37\u1cd0-\u1cd2\u1cd4-\u1ce8\u1ced\u1cf2\u1dc0-\u1de6\u1dfc-\u1dff\u200c\u200d\u20d0-\u20f0\u2cef-\u2cf1\u2d7f\u2de0-\u2dff\u302a-\u302f\u3099\u309a\ua66f-\uA672\ua67c\ua67d\ua6f0\ua6f1\ua802\ua806\ua80b\ua823-\ua827\ua880\ua881\ua8b4-\ua8c4\ua8e0-\ua8f1\ua926-\ua92d\ua947-\ua953\ua980-\ua983\ua9b3-\ua9c0\uaa29-\uaa36\uaa43\uaa4c\uaa4d\uaa7b\uaab0\uaab2-\uaab4\uaab7\uaab8\uaabe\uaabf\uaac1\uabe3-\uabea\uabec\uabed\ufb1e\ufe00-\ufe0f\ufe20-\ufe26\uff9e\uff9f]',
      format: '[\xAD\u0600-\u0603\u06DD\u070F\u17b4\u17b5\u200E\u200F\u202A-\u202E\u2060-\u2064\u206A-\u206F\uFEFF\uFFF9-\uFFFB]',
      katakana: '[\u3031-\u3035\u309B\u309C\u30A0-\u30fa\u30fc-\u30ff\u31f0-\u31ff\u32D0-\u32FE\u3300-\u3357\uff66-\uff9d]',
      extendnumlet: '[=_\u203f\u2040\u2054\ufe33\ufe34\ufe4d-\ufe4f\uff3f\u2200-\u22FF<>]',
      punctuation: '[!-#%-*,-\\/:;?@\\[-\\]_{}\xA1\xAB\xB7\xBB\xBF;\xB7\u055A-\u055F\u0589\u058A\u05BE\u05C0\u05C3\u05C6\u05F3\u05F4\u0609\u060A\u060C\u060D\u061B\u061E\u061F\u066A-\u066D\u06D4\u0700-\u070D\u07F7-\u07F9\u0830-\u083E\u085E\u0964\u0965\u0970\u0DF4\u0E4F\u0E5A\u0E5B\u0F04-\u0F12\u0F3A-\u0F3D\u0F85\u0FD0-\u0FD4\u0FD9\u0FDA\u104A-\u104F\u10FB\u1361-\u1368\u1400\u166D\u166E\u169B\u169C\u16EB-\u16ED\u1735\u1736\u17D4-\u17D6\u17D8-\u17DA\u1800-\u180A\u1944\u1945\u1A1E\u1A1F\u1AA0-\u1AA6\u1AA8-\u1AAD\u1B5A-\u1B60\u1BFC-\u1BFF\u1C3B-\u1C3F\u1C7E\u1C7F\u1CD3\u2010-\u2027\u2030-\u2043\u2045-\u2051\u2053-\u205E\u207D\u207E\u208D\u208E\u3008\u3009\u2768-\u2775\u27C5\u27C6\u27E6-\u27EF\u2983-\u2998\u29D8-\u29DB\u29FC\u29FD\u2CF9-\u2CFC\u2CFE\u2CFF\u2D70\u2E00-\u2E2E\u2E30\u2E31\u3001-\u3003\u3008-\u3011\u3014-\u301F\u3030\u303D\u30A0\u30FB\uA4FE\uA4FF\uA60D-\uA60F\uA673\uA67E\uA6F2-\uA6F7\uA874-\uA877\uA8CE\uA8CF\uA8F8-\uA8FA\uA92E\uA92F\uA95F\uA9C1-\uA9CD\uA9DE\uA9DF\uAA5C-\uAA5F\uAADE\uAADF\uABEB\uFD3E\uFD3F\uFE10-\uFE19\uFE30-\uFE52\uFE54-\uFE61\uFE63\uFE68\uFE6A\uFE6B\uFF01-\uFF03\uFF05-\uFF0A\uFF0C-\uFF0F\uFF1A\uFF1B\uFF1F\uFF20\uFF3B-\uFF3D\uff3f\uFF5B\uFF5D\uFF5F-\uFF65]'
    };
    var characterIndices = {
      ALETTER: 0,
      MIDNUMLET: 1,
      MIDLETTER: 2,
      MIDNUM: 3,
      NUMERIC: 4,
      CR: 5,
      LF: 6,
      NEWLINE: 7,
      EXTEND: 8,
      FORMAT: 9,
      KATAKANA: 10,
      EXTENDNUMLET: 11,
      AT: 12,
      OTHER: 13
    };
    var SETS = [
      new RegExp(regExps.aletter),
      new RegExp(regExps.midnumlet),
      new RegExp(regExps.midletter),
      new RegExp(regExps.midnum),
      new RegExp(regExps.numeric),
      new RegExp(regExps.cr),
      new RegExp(regExps.lf),
      new RegExp(regExps.newline),
      new RegExp(regExps.extend),
      new RegExp(regExps.format),
      new RegExp(regExps.katakana),
      new RegExp(regExps.extendnumlet),
      new RegExp('@')
    ];
    var EMPTY_STRING = '';
    var PUNCTUATION = new RegExp('^' + regExps.punctuation + '$');
    var WHITESPACE = /^\s+$/;
    var UnicodeData = {
      characterIndices: characterIndices,
      SETS: SETS,
      EMPTY_STRING: EMPTY_STRING,
      PUNCTUATION: PUNCTUATION,
      WHITESPACE: WHITESPACE
    };

    var constant = function (value) {
      return function () {
        return value;
      };
    };
    var never = constant(false);
    var always = constant(true);

    var never$1 = never;
    var always$1 = always;
    var none = function () {
      return NONE;
    };
    var NONE = function () {
      var eq = function (o) {
        return o.isNone();
      };
      var call = function (thunk) {
        return thunk();
      };
      var id = function (n) {
        return n;
      };
      var noop = function () {
      };
      var nul = function () {
        return null;
      };
      var undef = function () {
        return undefined;
      };
      var me = {
        fold: function (n, s) {
          return n();
        },
        is: never$1,
        isSome: never$1,
        isNone: always$1,
        getOr: id,
        getOrThunk: call,
        getOrDie: function (msg) {
          throw new Error(msg || 'error: getOrDie called on none.');
        },
        getOrNull: nul,
        getOrUndefined: undef,
        or: id,
        orThunk: call,
        map: none,
        ap: none,
        each: noop,
        bind: none,
        flatten: none,
        exists: never$1,
        forall: always$1,
        filter: none,
        equals: eq,
        equals_: eq,
        toArray: function () {
          return [];
        },
        toString: constant('none()')
      };
      if (Object.freeze)
        Object.freeze(me);
      return me;
    }();

    var typeOf = function (x) {
      if (x === null)
        return 'null';
      var t = typeof x;
      if (t === 'object' && Array.prototype.isPrototypeOf(x))
        return 'array';
      if (t === 'object' && String.prototype.isPrototypeOf(x))
        return 'string';
      return t;
    };
    var isType = function (type) {
      return function (value) {
        return typeOf(value) === type;
      };
    };
    var isFunction = isType('function');

    var map = function (xs, f) {
      var len = xs.length;
      var r = new Array(len);
      for (var i = 0; i < len; i++) {
        var x = xs[i];
        r[i] = f(x, i, xs);
      }
      return r;
    };
    var slice = Array.prototype.slice;
    var from = isFunction(Array.from) ? Array.from : function (x) {
      return slice.call(x);
    };

    var SETS$1 = UnicodeData.SETS;
    var OTHER = UnicodeData.characterIndices.OTHER;
    var getType = function (char) {
      var j, set, type = OTHER;
      var setsLength = SETS$1.length;
      for (j = 0; j < setsLength; ++j) {
        set = SETS$1[j];
        if (set && set.test(char)) {
          type = j;
          break;
        }
      }
      return type;
    };
    var memoize = function (func) {
      var cache = {};
      return function (char) {
        if (cache[char]) {
          return cache[char];
        } else {
          var result = func(char);
          cache[char] = result;
          return result;
        }
      };
    };
    var classify = function (string) {
      var memoized = memoize(getType);
      return map(string.split(''), memoized);
    };
    var StringMapper = { classify: classify };

    var ci = UnicodeData.characterIndices;
    var isWordBoundary = function (map, index) {
      var prevType;
      var type = map[index];
      var nextType = map[index + 1];
      var nextNextType;
      if (index < 0 || index > map.length - 1 && index !== 0) {
        return false;
      }
      if (type === ci.ALETTER && nextType === ci.ALETTER) {
        return false;
      }
      nextNextType = map[index + 2];
      if (type === ci.ALETTER && (nextType === ci.MIDLETTER || nextType === ci.MIDNUMLET || nextType === ci.AT) && nextNextType === ci.ALETTER) {
        return false;
      }
      prevType = map[index - 1];
      if ((type === ci.MIDLETTER || type === ci.MIDNUMLET || nextType === ci.AT) && nextType === ci.ALETTER && prevType === ci.ALETTER) {
        return false;
      }
      if ((type === ci.NUMERIC || type === ci.ALETTER) && (nextType === ci.NUMERIC || nextType === ci.ALETTER)) {
        return false;
      }
      if ((type === ci.MIDNUM || type === ci.MIDNUMLET) && nextType === ci.NUMERIC && prevType === ci.NUMERIC) {
        return false;
      }
      if (type === ci.NUMERIC && (nextType === ci.MIDNUM || nextType === ci.MIDNUMLET) && nextNextType === ci.NUMERIC) {
        return false;
      }
      if (type === ci.EXTEND || type === ci.FORMAT || prevType === ci.EXTEND || prevType === ci.FORMAT || nextType === ci.EXTEND || nextType === ci.FORMAT) {
        return false;
      }
      if (type === ci.CR && nextType === ci.LF) {
        return false;
      }
      if (type === ci.NEWLINE || type === ci.CR || type === ci.LF) {
        return true;
      }
      if (nextType === ci.NEWLINE || nextType === ci.CR || nextType === ci.LF) {
        return true;
      }
      if (type === ci.KATAKANA && nextType === ci.KATAKANA) {
        return false;
      }
      if (nextType === ci.EXTENDNUMLET && (type === ci.ALETTER || type === ci.NUMERIC || type === ci.KATAKANA || type === ci.EXTENDNUMLET)) {
        return false;
      }
      if (type === ci.EXTENDNUMLET && (nextType === ci.ALETTER || nextType === ci.NUMERIC || nextType === ci.KATAKANA)) {
        return false;
      }
      if (type === ci.AT) {
        return false;
      }
      return true;
    };
    var WordBoundary = { isWordBoundary: isWordBoundary };

    var EMPTY_STRING$1 = UnicodeData.EMPTY_STRING;
    var WHITESPACE$1 = UnicodeData.WHITESPACE;
    var PUNCTUATION$1 = UnicodeData.PUNCTUATION;
    var isProtocol = function (word) {
      return word === 'http' || word === 'https';
    };
    var findWordEnd = function (str, index) {
      var i;
      for (i = index; i < str.length; ++i) {
        var chr = str.charAt(i);
        if (WHITESPACE$1.test(chr)) {
          break;
        }
      }
      return i;
    };
    var extractUrl = function (word, str, index) {
      var endIndex = findWordEnd(str, index + 1);
      var peakedWord = str.substring(index + 1, endIndex);
      if (peakedWord.substr(0, 3) === '://') {
        return {
          word: word + peakedWord,
          index: endIndex
        };
      }
      return {
        word: word,
        index: index
      };
    };
    var doGetWords = function (str, options) {
      var i = 0;
      var map = StringMapper.classify(str);
      var len = map.length;
      var word = [];
      var words = [];
      var chr;
      var includePunctuation;
      var includeWhitespace;
      if (!options) {
        options = {};
      }
      if (options.ignoreCase) {
        str = str.toLowerCase();
      }
      includePunctuation = options.includePunctuation;
      includeWhitespace = options.includeWhitespace;
      for (; i < len; ++i) {
        chr = str.charAt(i);
        word.push(chr);
        if (WordBoundary.isWordBoundary(map, i)) {
          word = word.join(EMPTY_STRING$1);
          if (word && (includeWhitespace || !WHITESPACE$1.test(word)) && (includePunctuation || !PUNCTUATION$1.test(word))) {
            if (isProtocol(word)) {
              var obj = extractUrl(word, str, i);
              words.push(obj.word);
              i = obj.index;
            } else {
              words.push(word);
            }
          }
          word = [];
        }
      }
      return words;
    };
    var getWords = function (str, options) {
      return doGetWords(str.replace(/\ufeff/g, ''), options);
    };
    var WordGetter = { getWords: getWords };

    var getText = function (node, schema) {
      var blockElements = schema.getBlockElements();
      var shortEndedElements = schema.getShortEndedElements();
      var whiteSpaceElements = schema.getWhiteSpaceElements();
      var isSeparator = function (node) {
        return blockElements[node.nodeName] || shortEndedElements[node.nodeName] || whiteSpaceElements[node.nodeName];
      };
      var txt = '';
      var treeWalker = new global$1(node, node);
      while (node = treeWalker.next()) {
        if (node.nodeType === 3) {
          txt += node.data;
        } else if (isSeparator(node)) {
          txt += ' ';
        }
      }
      return txt;
    };
    var innerText = function (node, schema) {
      return global$2.ie ? getText(node, schema) : node.innerText;
    };
    var getTextContent = function (editor) {
      return editor.removed ? '' : innerText(editor.getBody(), editor.schema);
    };
    var getCount = function (editor) {
      return WordGetter.getWords(getTextContent(editor)).length;
    };
    var WordCount = { getCount: getCount };

    var get = function (editor) {
      var getCount = function () {
        return WordCount.getCount(editor);
      };
      return { getCount: getCount };
    };
    var Api = { get: get };

    var global$3 = tinymce.util.Tools.resolve('tinymce.util.Delay');

    var global$4 = tinymce.util.Tools.resolve('tinymce.util.I18n');

    var setup = function (editor) {
      var wordsToText = function (editor) {
        return global$4.translate([
          '{0} words',
          WordCount.getCount(editor)
        ]);
      };
      var update = function () {
        editor.theme.panel.find('#wordcount').text(wordsToText(editor));
      };
      editor.on('init', function () {
        var statusbar = editor.theme.panel && editor.theme.panel.find('#statusbar')[0];
        var debouncedUpdate = global$3.debounce(update, 300);
        if (statusbar) {
          global$3.setEditorTimeout(editor, function () {
            statusbar.insert({
              type: 'label',
              name: 'wordcount',
              text: wordsToText(editor),
              classes: 'wordcount',
              disabled: editor.settings.readonly
            }, 0);
            editor.on('setcontent beforeaddundo undo redo keyup', debouncedUpdate);
          }, 0);
        }
      });
    };
    var Statusbar = { setup: setup };

    global.add('wordcount', function (editor) {
      Statusbar.setup(editor);
      return Api.get(editor);
    });
    function Plugin () {
    }

    return Plugin;

}());
})();


/***/ }),

/***/ 1:
/*!********************************************************************!*\
  !*** multi ./Modules/VoyagerBaseExtend/Resources/assets/js/app.js ***!
  \********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\wamp64\www\projets\laravel\voyager-prototype\Modules\VoyagerBaseExtend\Resources\assets\js\app.js */"./Modules/VoyagerBaseExtend/Resources/assets/js/app.js");


/***/ })

/******/ });