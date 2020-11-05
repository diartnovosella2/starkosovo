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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/front/front.js":
/*!**********************************!*\
  !*** ./assets/js/front/front.js ***!
  \**********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _assets_js_front_parts_anchor_menu_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../assets/js/front/parts/anchor-menu.js */ "./assets/js/front/parts/anchor-menu.js");
/* harmony import */ var _assets_js_front_parts_anchor_menu_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_assets_js_front_parts_anchor_menu_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _assets_js_front_parts_navigation_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../assets/js/front/parts/navigation.js */ "./assets/js/front/parts/navigation.js");
/* harmony import */ var _assets_js_front_parts_navigation_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_assets_js_front_parts_navigation_js__WEBPACK_IMPORTED_MODULE_1__);
/* Imports for Webpack */



__webpack_require__(/*! ../../../assets/sass/style.scss */ "./assets/sass/style.scss");

/***/ }),

/***/ "./assets/js/front/parts/anchor-menu.js":
/*!**********************************************!*\
  !*** ./assets/js/front/parts/anchor-menu.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

jQuery(document).ready(function ($) {
  var anchor_swiper = null;
  var anchor_menu = $('.ancors-menu-module .module-container')[0];
  $(anchor_menu).addClass('wrapper');
  $(anchor_menu).find('.swiper-container').addClass('swiper-item');
  $(anchor_menu).find('.swiper-button-prev, .swiper-button-next').addClass('swiper-item');
  anchor_swiper = new Swiper('.ancors-menu-module .wrapper .swiper-container.swiper-item', {
    slidesPerView: 'auto',
    freeMode: true,
    navigation: {
      nextEl: '.ancors-menu-module .wrapper .swiper-button-next.swiper-item',
      prevEl: '.ancors-menu-module .wrapper .swiper-button-prev.swiper-item'
    },
    spaceBetween: 40
  });
  /* SCOLLSPY */

  var sections = [];
  var scrolled_id = false;
  var id = false;
  var $navbar = $('.ancors-menu-generated');
  var $navbar__links = $navbar.find('a');
  $navbar__links.each(function () {
    sections.push($($(this).attr('href')));
  });
  $navbar__links.click(function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top - 60
    });
  });
  $(window).scroll(function (e) {
    e.preventDefault();
    var scrollTop = $(this).scrollTop() + $(window).height() / 3;
    var scrolled_id = null;
    var scrolled_index = 0;

    for (var i in sections) {
      var section = sections[i];

      if (scrollTop > section.offset().top) {
        scrolled_id = section.attr('id');
        scrolled_index = i;
      }
    }

    if (scrolled_id !== id) {
      id = scrolled_id;

      if (id === null) {
        $navbar__links.parent().removeClass('ancor-selected');
      } else {
        $navbar__links.parent().removeClass('ancor-selected');
        $('a[href="#' + id + '"]', $navbar).parent().addClass('ancor-selected');
        anchor_swiper.slideTo(scrolled_index);
      }
    }
  });

  if ($navbar__links.length == 0) {
    $('.ancors-menu-module').hide();
  }

  $(window).trigger('scroll');
});

/***/ }),

/***/ "./assets/js/front/parts/navigation.js":
/*!*********************************************!*\
  !*** ./assets/js/front/parts/navigation.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

jQuery(document).ready(function ($) {
  var closable = false;
  $('#wsn-nav [data-toggle="dropdown"]').on({
    "click": function () {
      closable = true;
    }
  });
  $('#wsn-nav').on({
    "shown.bs.dropdown": function () {
      closable = false;
    },
    "hide.bs.dropdown": function () {
      return closable;
    }
  });
  $('#wsn-nav .dropdown-menu li.active').parent().siblings('.dropdown-toggle').click(); // Mobile: keep active nav items open

  $('.navbar-toggle').on('click', function () {//console.log($('.dropdown.active'));
    //$( this ).parent().find( '.dropdown.active' ).find( '.dropdown-toggle' ).dropdown( 'toggle' ); // Not working!
  }); // Click behaviour before reload

  $('.navbar-nav li, .dropdown-menu li').not('.menu-item-has-children').click(function () {
    $(this).parents('.navbar-nav').find('.active').removeClass('active'); // Find any currently active items and remove them

    $(this).addClass('active'); // Make the clicked item active
  }); // Stop dropdown from collapsing on click

  $('.dropdown-menu li').click(function (e) {
    e.stopPropagation();
  }); // Slide animation when expanding dropdown

  $('.dropdown').on('show.bs.dropdown', function () {
    $(this).find('.dropdown-menu').slideDown(300);
  }); // Slide animation when collapsing dropdown

  $('.dropdown').on('hide.bs.dropdown', function () {
    $(this).find('.dropdown-menu').slideUp(0);
  });
});

/***/ }),

/***/ "./assets/sass/style.scss":
/*!********************************!*\
  !*** ./assets/sass/style.scss ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ 0:
/*!****************************************!*\
  !*** multi ./assets/js/front/front.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! ./assets/js/front/front.js */"./assets/js/front/front.js");


/***/ })

/******/ });
//# sourceMappingURL=front.js.map