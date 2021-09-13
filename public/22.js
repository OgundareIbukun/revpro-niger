(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[22],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/remittance/CashReceiptListing.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/remittance/CashReceiptListing.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


var _name$created$compone;

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//    // import this component
//    import flatPickr from 'vue-flatpickr-component';
//    import 'flatpickr/dist/flatpickr.css';
//    import 'flatpickr/dist/themes/material_blue.css';
/* harmony default export */ __webpack_exports__["default"] = (_name$created$compone = {
  name: 'cashReceipt',
  created: function created() {},
  components: {// flatPickr
  },
  data: function data() {
    return {
      table_1: true,
      absolute: true,
      page: 1,
      pageCount: 0,
      itemsPerPage: 15,
      cash_receipts: [],
      search: '',
      headers: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'Description',
        value: 'serviceName'
      }, {
        text: 'LGA',
        value: 'lgaName'
      }, {
        text: 'Rev. Point',
        value: 'revPtName'
      }, {
        text: 'Invoice No',
        value: 'invoice'
      }, {
        text: 'Amount',
        value: 'amount'
      }, {
        text: 'Collector',
        value: 'collectorName'
      }, {
        text: 'Created Date',
        value: 'date'
      }],
      // excel format
      columns: [{
        label: '#',
        field: 'sn'
      }, {
        label: 'Description',
        field: 'serviceName'
      }, {
        label: 'LGA',
        field: 'lgaName'
      }, {
        label: 'Revenue Point',
        field: 'revPtName'
      }, {
        label: 'Invoice No',
        field: 'invoice'
      }, {
        label: 'Amount',
        field: 'amount'
      }, {
        label: 'Collector',
        field: 'collectorName'
      }, {
        label: 'Created Date',
        field: 'date'
      }]
    };
  }
}, _defineProperty(_name$created$compone, "created", function created() {
  this.getCashReceipt();
}), _defineProperty(_name$created$compone, "watch", {
  $route: 'getCashReceipt'
}), _defineProperty(_name$created$compone, "methods", {
  getCashReceipt: function () {
    var _getCashReceipt = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
      var _this = this;

      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              _context.prev = 0;
              _context.next = 3;
              return axios.get("/cashreceipt/".concat(this.$route.params.txn_ref)).then(function (response) {
                _this.cash_receipts = response.data.data;
                _this.table_1 = false;
              })["catch"](function (error) {
                console.log(error);
              });

            case 3:
              _context.next = 8;
              break;

            case 5:
              _context.prev = 5;
              _context.t0 = _context["catch"](0);
              console.log(_context.t0);

            case 8:
            case "end":
              return _context.stop();
          }
        }
      }, _callee, this, [[0, 5]]);
    }));

    function getCashReceipt() {
      return _getCashReceipt.apply(this, arguments);
    }

    return getCashReceipt;
  }()
}), _defineProperty(_name$created$compone, "mounted", function mounted() {//  this.getCashReceipt();
}), _name$created$compone);

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/remittance/CashReceiptListing.vue?vue&type=template&id=20e84735&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/remittance/CashReceiptListing.vue?vue&type=template&id=20e84735& ***!
  \********************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "page-heading" }, [
      _c("h1", [_vm._v(" CASH RECEIPT ")]),
      _vm._v(" "),
      _c("ol", { staticClass: "breadcrumb" }, [
        _c(
          "li",
          [
            _c("router-link", { attrs: { to: "/", exact: "" } }, [
              _c("i", { staticClass: "fa fa-dashboard" }),
              _vm._v(" "),
              _c("span", { staticClass: "nav-label" }, [_vm._v(" Home ")])
            ])
          ],
          1
        ),
        _vm._v(" "),
        _c("li", [_vm._v(" Remittance")]),
        _vm._v(" "),
        _c("li", { staticClass: "active" }, [_vm._v(" Cash Receipt")])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "page-body" }, [
      _c("div", { staticClass: "panel panel-default" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "panel-body" },
          [
            _c(
              "v-card-title",
              [
                _c(
                  "v-spacer",
                  [
                    _vm._v(
                      "\n                           \n                        "
                    ),
                    _c(
                      "vue-excel-xlsx",
                      {
                        attrs: {
                          data: this.cash_receipts,
                          columns: _vm.columns,
                          filename: "cash receipt",
                          sheetname: "cash receipt"
                        }
                      },
                      [_c("v-btn", [_vm._v("Excel")])],
                      1
                    )
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-col",
                  { attrs: { cols: "4", sm: "12", md: "4" } },
                  [
                    _c("v-text-field", {
                      attrs: {
                        "append-icon": "mdi-magnify",
                        label: "Search",
                        "single-line": "",
                        "hide-details": "",
                        solo: ""
                      },
                      model: {
                        value: _vm.search,
                        callback: function($$v) {
                          _vm.search = $$v
                        },
                        expression: "search"
                      }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-overlay",
                  { attrs: { value: _vm.table_1 } },
                  [
                    _c("v-progress-circular", {
                      attrs: { indeterminate: "", size: "60" }
                    })
                  ],
                  1
                )
              ],
              1
            ),
            _vm._v(" "),
            _c("v-data-table", {
              staticClass: "elevation-1",
              attrs: {
                headers: this.headers,
                items: this.cash_receipts,
                search: _vm.search,
                page: _vm.page,
                "items-per-page": _vm.itemsPerPage,
                "hide-default-footer": ""
              },
              on: {
                "update:page": function($event) {
                  _vm.page = $event
                },
                "page-count": function($event) {
                  _vm.pageCount = $event
                }
              },
              scopedSlots: _vm._u([
                {
                  key: "item.amount",
                  fn: function(ref) {
                    var item = ref.item
                    return [
                      _c("span", [
                        _vm._v(
                          _vm._s(
                            new Intl.NumberFormat("en-NG", {
                              style: "currency",
                              currency: "NGN"
                            }).format(item.amount)
                          )
                        )
                      ])
                    ]
                  }
                },
                {
                  key: "item.date",
                  fn: function(ref) {
                    var item = ref.item
                    return [
                      _c("span", [
                        _vm._v(
                          _vm._s(
                            _vm._f("moment")(item.date, "dddd, MMMM Do YYYY")
                          )
                        )
                      ])
                    ]
                  }
                }
              ])
            }),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "text-center pt-2 " },
              [
                _c("v-pagination", {
                  attrs: { color: "primary", dark: "", length: _vm.pageCount },
                  model: {
                    value: _vm.page,
                    callback: function($$v) {
                      _vm.page = $$v
                    },
                    expression: "page"
                  }
                }),
                _vm._v(" "),
                _c("v-text-field", {
                  attrs: {
                    value: _vm.itemsPerPage,
                    label: "Items per page",
                    type: "number",
                    min: "-1",
                    max: "15"
                  },
                  on: {
                    input: function($event) {
                      _vm.itemsPerPage = parseInt($event, 10)
                    }
                  }
                })
              ],
              1
            )
          ],
          1
        )
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "panel-heading d-flex" }, [
      _c("span", [_vm._v(" Cash Receipt ")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/remittance/CashReceiptListing.vue":
/*!*******************************************************************!*\
  !*** ./resources/js/components/remittance/CashReceiptListing.vue ***!
  \*******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _CashReceiptListing_vue_vue_type_template_id_20e84735___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./CashReceiptListing.vue?vue&type=template&id=20e84735& */ "./resources/js/components/remittance/CashReceiptListing.vue?vue&type=template&id=20e84735&");
/* harmony import */ var _CashReceiptListing_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./CashReceiptListing.vue?vue&type=script&lang=js& */ "./resources/js/components/remittance/CashReceiptListing.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _CashReceiptListing_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _CashReceiptListing_vue_vue_type_template_id_20e84735___WEBPACK_IMPORTED_MODULE_0__["render"],
  _CashReceiptListing_vue_vue_type_template_id_20e84735___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/remittance/CashReceiptListing.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/remittance/CashReceiptListing.vue?vue&type=script&lang=js&":
/*!********************************************************************************************!*\
  !*** ./resources/js/components/remittance/CashReceiptListing.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_CashReceiptListing_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./CashReceiptListing.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/remittance/CashReceiptListing.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_CashReceiptListing_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/remittance/CashReceiptListing.vue?vue&type=template&id=20e84735&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/components/remittance/CashReceiptListing.vue?vue&type=template&id=20e84735& ***!
  \**************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CashReceiptListing_vue_vue_type_template_id_20e84735___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./CashReceiptListing.vue?vue&type=template&id=20e84735& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/remittance/CashReceiptListing.vue?vue&type=template&id=20e84735&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CashReceiptListing_vue_vue_type_template_id_20e84735___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CashReceiptListing_vue_vue_type_template_id_20e84735___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);