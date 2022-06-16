/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./asset_src/js/index.js":
/*!*******************************!*\
  !*** ./asset_src/js/index.js ***!
  \*******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _modules_mainvisual__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/mainvisual */ \"./asset_src/js/modules/mainvisual.js\");\n/* harmony import */ var _modules_mainvisual__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_modules_mainvisual__WEBPACK_IMPORTED_MODULE_0__);\n // import './modules/scrolltrigger';\n// import './modules/smoothscroll';\n// import './modules/console';\n\n//# sourceURL=webpack://portfolio/./asset_src/js/index.js?");

/***/ }),

/***/ "./asset_src/js/modules/mainvisual.js":
/*!********************************************!*\
  !*** ./asset_src/js/modules/mainvisual.js ***!
  \********************************************/
/***/ (function() {

eval("function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, \"prototype\", { writable: false }); return Constructor; }\n\nvar ParallaxEffect = /*#__PURE__*/function () {\n  function ParallaxEffect() {\n    _classCallCheck(this, ParallaxEffect);\n\n    this.devided = 5;\n    this.target = '.js-paralax';\n    this.setBackgroundPosition();\n  }\n\n  _createClass(ParallaxEffect, [{\n    key: \"getScrollTop\",\n    value: function getScrollTop() {\n      return Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop, window.scrollY);\n    }\n  }, {\n    key: \"setBackgroundPosition\",\n    value: function setBackgroundPosition() {\n      var _this = this;\n\n      document.addEventListener('scroll', function (e) {\n        var scrollTop = _this.getScrollTop();\n\n        var position = scrollTop / _this.devided;\n\n        if (position) {\n          document.querySelectorAll(_this.target).forEach(function (element) {\n            element.style.top = '-' + position + 'px';\n          });\n        }\n      });\n    }\n  }]);\n\n  return ParallaxEffect;\n}();\n\ndocument.addEventListener('DOMContentLoaded', function (event) {\n  new ParallaxEffect();\n});\n\n//# sourceURL=webpack://portfolio/./asset_src/js/modules/mainvisual.js?");

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
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./asset_src/js/index.js");
/******/ 	
/******/ })()
;