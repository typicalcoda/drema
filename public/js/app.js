/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
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
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__views_menu_tabs_js__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__routes_js__ = __webpack_require__(2);



(function () {
	var app = angular.module('drema', ['ngRoute', 'ngSanitize', 'ngAnimate']);
	app.config(__WEBPACK_IMPORTED_MODULE_1__routes_js__["a" /* default */]);
	app.controller('MainController', ['$scope', "$sce", function ($scope, $sce) {
		$scope.menu = __WEBPACK_IMPORTED_MODULE_0__views_menu_tabs_js__["a" /* default */];

		$scope.selectedPage = $scope.menu[0]; // the text space thingi/block part of the nav
		$scope.activeMenuTab = 1; //selects first tab in menu by default

		$scope.selectTab = function (tab) {
			$scope.selectedPage = $scope.menu[tab - 1]; //because index starts from 0
			$scope.activeMenuTab = tab;
		};
		$scope.SkipValidation = function (val) {
			return $sce.trustAsHtml(val);
		};
	}]);
	app.controller('CollectionsController', ['$scope', '$sce', function ($scope, $sce) {

		$scope.noCollections = true;
		$scope.showCollectionCreationForm = function () {
			$scope.noCollections = false;
		};
	}]);
	app.directive('menu', function () {
		return {
			templateUrl: '/partials/menu',
			restrict: 'E'
		};
	});
})();

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
var Routes = ['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {

    $locationProvider.html5Mode(true);

    $routeProvider.when("/dashboard", {
        templateUrl: "views/dashboard"
    }).when('/search', {
        templateUrl: 'views/search'
    }).when('/collections', {
        templateUrl: 'views/collections',
        controller: 'CollectionsController'
    });
}];

/* harmony default export */ __webpack_exports__["a"] = (Routes);

/***/ }),
/* 3 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
var MenuTabs = [{ title: 'Dashboard', blob: 'This be the dashboard' }, { title: 'Search', blob: 'This be search', markup: '<div class="nav-search"><i class="fa fa-search"></i><input type="text"/></div>' }, { title: 'Collections', blob: 'These are the collections' }, { title: 'Records', blob: 'Here be the records' }, { title: 'Users', blob: 'Manage the application\'s users' }, { title: 'Settings', blob: 'Configure the application' }, { title: 'Plugins', blob: 'Enhance and utilise the platform' }, { title: 'Support & Feedback', blob: 'Need any assistance?' }];

/* harmony default export */ __webpack_exports__["a"] = (MenuTabs);

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(0);
module.exports = __webpack_require__(1);


/***/ })
/******/ ]);