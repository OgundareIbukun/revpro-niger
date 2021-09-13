(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[8],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/invoiceListing/invoice.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/invoiceListing/invoice.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var vue_flatpickr_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vue-flatpickr-component */ "./node_modules/vue-flatpickr-component/dist/vue-flatpickr.min.js");
/* harmony import */ var vue_flatpickr_component__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(vue_flatpickr_component__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var flatpickr_dist_flatpickr_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! flatpickr/dist/flatpickr.css */ "./node_modules/flatpickr/dist/flatpickr.css");
/* harmony import */ var flatpickr_dist_flatpickr_css__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(flatpickr_dist_flatpickr_css__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var flatpickr_dist_themes_material_blue_css__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! flatpickr/dist/themes/material_blue.css */ "./node_modules/flatpickr/dist/themes/material_blue.css");
/* harmony import */ var flatpickr_dist_themes_material_blue_css__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(flatpickr_dist_themes_material_blue_css__WEBPACK_IMPORTED_MODULE_3__);


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
// import this component



/* harmony default export */ __webpack_exports__["default"] = ({
  name: "Receipt",
  components: {
    flatPickr: vue_flatpickr_component__WEBPACK_IMPORTED_MODULE_1___default.a
  },
  data: function data() {
    return {
      image: 'https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=' + this.$shared.app_url + '/%23/invoice/' + this.$route.params.ref,
      preloader: true,
      src: '',
      //  user:{
      name: '',
      ref: '',
      invoice: '',
      amount: '',
      description: '',
      paid_at: '',
      payment_channel: '',
      status: '' //  }

    };
  },
  created: function created() {
    this.getInvoiceDetails();
  },
  watch: {
    $route: 'getInvoiceDetails'
  },
  methods: {
    getInvoiceDetails: function () {
      var _getInvoiceDetails = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        var _this = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.prev = 0;
                jQuery.noConflict();
                _context.next = 4;
                return axios.get("/invoice/".concat(this.$route.params.ref)).then(function (response) {
                  _this.name = response.data.data.name;
                  _this.ref = response.data.data.ref;
                  _this.invoice = response.data.data.invoice;
                  _this.paid_at = response.data.data.paid_at;
                  _this.description = response.data.data.description;
                  _this.payment_channel = response.data.data.payment_channel;
                  _this.amount = response.data.data.amount;
                  _this.status = response.data.data.status; // Object.assign(this.user, response.data.data);

                  $('#contents').removeClass('hide');
                  _this.preloader = false;
                })["catch"](function (error) {
                  console.log(error);
                });

              case 4:
                _context.next = 9;
                break;

              case 6:
                _context.prev = 6;
                _context.t0 = _context["catch"](0);
                console.log(_context.t0);

              case 9:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this, [[0, 6]]);
      }));

      function getInvoiceDetails() {
        return _getInvoiceDetails.apply(this, arguments);
      }

      return getInvoiceDetails;
    }(),
    print: function print() {
      return window.print();
    }
  },
  mounted: function mounted() {//this.getQR();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/invoiceListing/invoice.vue?vue&type=template&id=08319580&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/invoiceListing/invoice.vue?vue&type=template&id=08319580& ***!
  \*************************************************************************************************************************************************************************************************************************/
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
    _c(
      "div",
      { staticClass: "container hide", attrs: { id: "contents" } },
      [
        _c(
          "v-overlay",
          { attrs: { value: _vm.preloader } },
          [
            _c("v-progress-circular", {
              attrs: { indeterminate: "", size: "80" }
            })
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "no-print" },
          [
            _c(
              "v-btn",
              {
                staticClass: "btn btn-info",
                attrs: { name: "btn" },
                on: { click: _vm.print }
              },
              [_vm._v("Print")]
            )
          ],
          1
        ),
        _vm._v(" "),
        _c("div", { staticClass: "watermark" }, [
          _c("div", { attrs: { id: "invoice" } }, [
            _vm._m(0),
            _vm._v(" "),
            this.status == "success"
              ? _c("div", { attrs: { id: "bigi" } }, [_vm._v("RECEIPT")])
              : _c("div", { attrs: { id: "bigi" } }, [_vm._v("INVOICE")]),
            _vm._v(" "),
            _c("br"),
            _c("br"),
            _vm._v(" "),
            _c(
              "div",
              { staticStyle: { float: "right", "margin-top": "-60px" } },
              [_c("img", { attrs: { src: this.image, alt: "QRCODE" } })]
            ),
            _vm._v(" "),
            _c(
              "table",
              {
                staticClass: "table table-borderless",
                attrs: { id: "billship" }
              },
              [
                _c("tr", [
                  _c("td", [
                    _c("strong", [_vm._v("BILL TO")]),
                    _c("br"),
                    _vm._v(_vm._s(_vm.name) + "  "),
                    _c("br")
                  ]),
                  _vm._v(" "),
                  _c("td", { staticStyle: { "text-align": "right" } }, [
                    _c("strong", [_vm._v("BILL BY :")]),
                    _vm._v(" Bauchi Internal Revenue Service"),
                    _c("br"),
                    _vm._m(1),
                    _c("br"),
                    _vm._v(" "),
                    _c("strong", [_vm._v("Invoice No:")]),
                    _vm._v(" " + _vm._s(_vm.invoice)),
                    _c("br"),
                    _vm._v(" "),
                    _c("strong", [_vm._v("Txn Ref:")]),
                    _vm._v(" " + _vm._s(_vm.ref)),
                    _c("br"),
                    _vm._v(" "),
                    _c("strong", [_vm._v("Paid At :")]),
                    _vm._v(
                      "  " +
                        _vm._s(
                          _vm._f("moment")(_vm.paid_at, "dddd, MMMM Do YYYY")
                        )
                    )
                  ])
                ])
              ]
            ),
            _vm._v(" "),
            _c(
              "table",
              { staticClass: "table table-borderless", attrs: { id: "items" } },
              [
                _vm._m(2),
                _vm._v(" "),
                _c("tr", [
                  _c("td", [_c("div", [_vm._v(_vm._s(_vm.description))])]),
                  _vm._v(" "),
                  _c("td", [_vm._v("1")]),
                  _vm._v(" "),
                  _c("td", [
                    _vm._v(
                      _vm._s(
                        new Intl.NumberFormat("en-NG", {
                          style: "currency",
                          currency: "NGN"
                        }).format(_vm.amount)
                      )
                    )
                  ]),
                  _vm._v(" "),
                  _c("td", [
                    _vm._v(
                      _vm._s(
                        new Intl.NumberFormat("en-NG", {
                          style: "currency",
                          currency: "NGN"
                        }).format(_vm.amount)
                      )
                    )
                  ])
                ]),
                _vm._v(" "),
                _c("tr", { staticClass: "ttl" }, [
                  _c("td", { staticClass: "right", attrs: { colspan: "3" } }, [
                    _vm._v("GRAND TOTAL")
                  ]),
                  _c("td", [
                    _vm._v(
                      _vm._s(
                        new Intl.NumberFormat("en-NG", {
                          style: "currency",
                          currency: "NGN"
                        }).format(_vm.amount)
                      )
                    )
                  ])
                ])
              ]
            ),
            _vm._v(" "),
            this.status == "success"
              ? _c("div", [
                  _c("div", { attrs: { id: "bigi" } }, [_vm._v("PAID")]),
                  _vm._v(" "),
                  _c(
                    "div",
                    {
                      staticStyle: {
                        "margin-top": "-5px",
                        "font-size": "12px"
                      },
                      attrs: { id: "notes" }
                    },
                    [
                      _vm._v("\n                        Payment Info"),
                      _c("br"),
                      _vm._v(
                        "Transaction Reference: " +
                          _vm._s(_vm.ref) +
                          "\n                        "
                      ),
                      _c("br"),
                      _vm._v("Paid With Moneta"),
                      _c("br")
                    ]
                  )
                ])
              : _c("div", [
                  _c("div", { attrs: { id: "bigi" } }, [_vm._v("NOT PAID")]),
                  _vm._v(" "),
                  _vm._m(3)
                ])
          ])
        ])
      ],
      1
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "table",
      { staticClass: "table table-borderless", attrs: { id: "company" } },
      [
        _c("tr", [
          _c("td", [
            _c("img", {
              attrs: {
                src: "assets/images/bauchi.png",
                width: "125",
                height: "125"
              }
            })
          ]),
          _vm._v(" "),
          _c(
            "td",
            { staticClass: "text-right", staticStyle: { float: "right" } },
            [
              _c("div", [_vm._v("Ahmadu Bello Way, Bauchi")]),
              _vm._v(" "),
              _c("div", [_vm._v("PMB: 0029")]),
              _vm._v(" "),
              _c("div", [_vm._v("https://birs.bu.gov.ng")]),
              _vm._v(" "),
              _c("div", [_vm._v("info@birs.bu.gov.ng")])
            ]
          )
        ])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("strong", { staticClass: "text-center" }, [
      _c("i", [_vm._v("Bauchi State")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("tr", [
      _c("th", [_vm._v("Item")]),
      _c("th", [_vm._v("Quantity")]),
      _c("th", [_vm._v("Unit Price")]),
      _c("th", [_vm._v("Amount")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticStyle: { "margin-top": "-5px", "font-size": "12px" },
        attrs: { id: "notes" }
      },
      [
        _vm._v("DISCLAIMER"),
        _c("br"),
        _vm._v("\n                         THIS IS NOT A RECEIPT"),
        _c("br"),
        _vm._v(
          "\n                         PAYMENT INSTRUCTIONS: For Bank Payment, please proceed to any bank with a printout of your invoice and request to make a Moneta payment using your transaction reference"
        ),
        _c("br")
      ]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/invoiceListing/invoice.vue":
/*!************************************************************!*\
  !*** ./resources/js/components/invoiceListing/invoice.vue ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _invoice_vue_vue_type_template_id_08319580___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./invoice.vue?vue&type=template&id=08319580& */ "./resources/js/components/invoiceListing/invoice.vue?vue&type=template&id=08319580&");
/* harmony import */ var _invoice_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./invoice.vue?vue&type=script&lang=js& */ "./resources/js/components/invoiceListing/invoice.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _invoice_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _invoice_vue_vue_type_template_id_08319580___WEBPACK_IMPORTED_MODULE_0__["render"],
  _invoice_vue_vue_type_template_id_08319580___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/invoiceListing/invoice.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/invoiceListing/invoice.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/invoiceListing/invoice.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_invoice_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./invoice.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/invoiceListing/invoice.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_invoice_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/invoiceListing/invoice.vue?vue&type=template&id=08319580&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/components/invoiceListing/invoice.vue?vue&type=template&id=08319580& ***!
  \*******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_invoice_vue_vue_type_template_id_08319580___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./invoice.vue?vue&type=template&id=08319580& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/invoiceListing/invoice.vue?vue&type=template&id=08319580&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_invoice_vue_vue_type_template_id_08319580___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_invoice_vue_vue_type_template_id_08319580___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);