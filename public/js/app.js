/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_add_remove_input__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/add-remove-input */ "./resources/js/components/add-remove-input.js");
//require('./bootstrap');


function main() {
  (0,_components_add_remove_input__WEBPACK_IMPORTED_MODULE_0__["default"])();
}

$(document).ready(main);

/***/ }),

/***/ "./resources/js/components/add-remove-input.js":
/*!*****************************************************!*\
  !*** ./resources/js/components/add-remove-input.js ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var jquery_add_input_area__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery.add-input-area */ "./node_modules/jquery.add-input-area/dist/jquery.add-input-area.min.js");
/* harmony import */ var jquery_add_input_area__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery_add_input_area__WEBPACK_IMPORTED_MODULE_0__);


var init = function init() {
  console.log('here');
  $('#list').addInputArea();
};

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (init);

/***/ }),

/***/ "./node_modules/jquery.add-input-area/dist/jquery.add-input-area.min.js":
/*!******************************************************************************!*\
  !*** ./node_modules/jquery.add-input-area/dist/jquery.add-input-area.min.js ***!
  \******************************************************************************/
/***/ (() => {

!function(t){var e={};function n(i){if(e[i])return e[i].exports;var a=e[i]={i:i,l:!1,exports:{}};return t[i].call(a.exports,a,a.exports,n),a.l=!0,a.exports}n.m=t,n.c=e,n.d=function(t,e,i){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:i})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var a in t)n.d(i,a,function(e){return t[e]}.bind(null,a));return i},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=0)}([function(t,e,n){"use strict";n.r(e);var i={_setOption:function(t,e){return(t=$.extend({btn_del:e?"."+e+"_del":".aia_del",btn_add:e?"."+e+"_add":".aia_add",area_var:e?"."+e+"_var":".aia_var",area_del:null,after_add:null,clone_event:!0,maximum:0,dont_clone:null,validate:null},t)).area_del||(t.area_del=t.btn_del),t},_setDelBtnVisibility:function(){1==$(this.elem).find(this.option.area_var).length&&$(this.elem).find(this.option.area_del).hide()},_ehAddBtn:function(){this.option.validate&&!this.option.validate()||(this._addNewArea(),$(this.elem).find(this.option.area_del).show(),this.option.maximum>0&&$(this.elem).find(this.option.area_var).length>=this.option.maximum&&$(this.option.btn_add).hide(),"function"==typeof this.option.after_add&&this.option.after_add())},_addNewArea:function(){var t=$(this.elem).find(this.option.area_var).length,e=$(this.option.original).clone(!0);this._renumberFieldEach(t,e);var n=this;$(e).find("[name]").each(function(){n._initFieldVal.call(n,this)}).end().appendTo(this.elem)},_initFieldVal:function(t){return"false"!=$(t).attr("empty_val")&&"false"!=$(t).attr("data-empty-val")&&("checkbox"==$(t).attr("type")||"radio"==$(t).attr("type")?t.checked=!1:"SELECT"!=$(t).prop("tagName")&&"submit"!=$(t).attr("type")&&"reset"!=$(t).attr("type")&&"image"!=$(t).attr("type")&&"button"!=$(t).attr("type")&&$(t).val(""),!0)},_ehDelBtn:function(t){t.preventDefault();var e=$(this.elem).find(this.option.btn_del).index(t.currentTarget);$(this.elem).find(this.option.area_var).eq(e).remove(),this._setDelBtnVisibility(),this._renumberFieldAll(),this.option.maximum>0&&$(this.elem).find(this.option.area_var).length<this.option.maximum&&$(this.option.btn_add).show()},_renumberFieldAll:function(){var t=this;$(this.elem).find(this.option.area_var).each(function(e,n){t._renumberFieldEach.call(t,e,n)})},_renumberFieldEach:function(t,e){var n=this;$(e).find("[name]").each(function(){$(this).attr("name",n._getValOfAttr(this,t,"name")),$(this).attr("id",n._getValOfAttr(this,t,"id"))}).end().find("[for]").each(function(){$(this).attr("for",n._getValOfAttr(this,t,"for"))})},_getValOfAttr:function(t,e,n){var i,a=!1;/^.+_\d+$/.test($(t).attr(n))?a=$(t).attr(n).replace(/^(.+_)\d+$/,"$1"+e):(i="name"==n?$(t).attr("name_format")||$(t).attr("data-name-format"):$(t).attr("id_format")||$(t).attr("data-id-format"))&&(a=i.replace("%d",e));return a}};
/**
 * @file jquery.add-input-area
 * @version 4.11.0
 * @author Yuusaku Miyazaki <toumin.m7@gmail.com>
 * @license MIT
 */
$.fn.addInputArea=function(t){return this.each(function(){new $.addInputArea(this,t)})},$.addInputArea=function(t,e){this.elem=t,this.option=this._setOption(e,$(this.elem).attr("id")),this._setDelBtnVisibility();var n=this;$(document).on("click",this.option.btn_add,function(){n._ehAddBtn.call(n)}),$(n.elem).on("click",n.option.btn_del,function(t){n._ehDelBtn.call(n,t)}),this._renumberFieldAll(),this.option.original=$(this.elem).find(this.option.area_var).eq(0).clone(this.option.clone_event),this.option.dont_clone&&$(this.option.original).find(this.option.dont_clone).detach()},$.extend($.addInputArea.prototype,i)}]);

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;