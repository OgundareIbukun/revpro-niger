(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[20],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/settlement/Settlement.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/settlement/Settlement.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************/
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
//  import 'bootstrap/dist/css/bootstrap.css';
// import this component



/* harmony default export */ __webpack_exports__["default"] = ({
  name: "Settlement",
  components: {
    flatPickr: vue_flatpickr_component__WEBPACK_IMPORTED_MODULE_1___default.a
  },
  data: function data() {
    return {
      table_1: true,
      absolute: true,
      isAdmin: false,
      fromDate: '',
      toDate: '',
      lga_id: '',
      page: 1,
      pageCount: 0,
      itemsPerPage: 10,
      search: '',
      config: {
        wrap: true,
        // set wrap to true only when using 'input-group'
        altFormat: 'M j, Y',
        altInput: true,
        dateFormat: 'Y-m-d'
      },
      Headers: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'MONTH',
        value: 'month'
      }, {
        text: 'CARD TRANSACTIONS',
        value: 'cardTxn'
      }, {
        text: 'BANK TRANSACTIONS',
        value: 'bankTxn'
      }, {
        text: 'TRANSACTION FEES(CARD)',
        value: 'cardTxnFee'
      }, {
        text: 'TRANSACTION FEES(BANK)',
        value: 'bankTxnFee'
      }, {
        text: 'TRANSACTION FEES(TOTAL)',
        value: 'totalTxnFee'
      }, {
        text: 'SETTLEMENT AMOUNT(CARD)',
        value: 'cardSettlement'
      }, {
        text: 'SETTLEMENT AMOUNT(BANK)',
        value: 'bankSettlement'
      }, {
        text: 'TOTAL SETTLEMENT',
        value: 'totalSettlement'
      }],
      columns: [{
        label: '#',
        field: 'sn'
      }, {
        label: 'MONTH',
        field: 'month'
      }, {
        label: 'CARD TRANSACTIONS',
        field: 'cardTxn'
      }, {
        label: 'BANK TRANSACTIONS',
        field: 'bankTxn'
      }, {
        label: 'TRANSACTION FEES(CARD)',
        field: 'cardTxnFee'
      }, {
        label: 'TRANSACTION FEES(BANK)',
        field: 'bankTxnFee'
      }, {
        label: 'TRANSACTION FEES(TOTAL)',
        field: 'totalTxnFee'
      }, {
        label: 'SETTLEMENT AMOUNT(CARD)',
        field: 'cardSettlement'
      }, {
        label: 'SETTLEMENT AMOUNT(BANK)',
        field: 'bankSettlement'
      }, {
        label: 'TOTAL SETTLEMENT',
        field: 'totalSettlement'
      }],
      settlement: [],
      errors: []
    };
  },
  methods: {
    getSettlement: function () {
      var _getSettlement = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        var _this = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.prev = 0;
                _context.next = 3;
                return axios.get('/settlement?lga_id=' + this.lga_id + '&fromDate=' + this.fromDate + '&toDate=' + this.toDate).then(function (response) {
                  if (response.data.status == 'success') {
                    // this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                    _this.settlement = response.data.data.settlement;
                  }

                  _this.table_1 = false;
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this.errors = error.response.data.errors;
                  } else {
                    console.log('else2');
                  }
                });

              case 3:
                _context.next = 7;
                break;

              case 5:
                _context.prev = 5;
                _context.t0 = _context["catch"](0);

              case 7:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this, [[0, 5]]);
      }));

      function getSettlement() {
        return _getSettlement.apply(this, arguments);
      }

      return getSettlement;
    }(),
    getLgas: function () {
      var _getLgas = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        var _this2 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                _context2.next = 3;
                return axios.get("/state/".concat(this.$state_id, "/lgas")).then(function (response) {
                  _this2.lgas = response.data.data;

                  if (_this2.lgas.length == 1) {
                    _this2.lga_id = _this2.lgas[0]; // console.log(this.lgas[0]['id'])
                  } else {
                    _this2.isAdmin = true;
                  } // console.log(this.lgas);


                  _this2.getSettlement();
                })["catch"](function (error) {
                  console.log(error);
                });

              case 3:
                _context2.next = 8;
                break;

              case 5:
                _context2.prev = 5;
                _context2.t0 = _context2["catch"](0);
                console.log(_context2.t0);

              case 8:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this, [[0, 5]]);
      }));

      function getLgas() {
        return _getLgas.apply(this, arguments);
      }

      return getLgas;
    }()
  },
  mounted: function mounted() {
    this.getLgas();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/settlement/Settlement.vue?vue&type=template&id=699a5934&":
/*!************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/settlement/Settlement.vue?vue&type=template&id=699a5934& ***!
  \************************************************************************************************************************************************************************************************************************/
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
      _vm._m(0),
      _vm._v(" "),
      _c("ol", { staticClass: "breadcrumb" }, [
        _c(
          "li",
          [
            _c("router-link", { attrs: { to: "/", exact: "" } }, [
              _c("i", { staticClass: "fa fa-dashboard" }),
              _vm._v(" "),
              _c("span", { staticClass: "nav-label" }, [_vm._v("Revops")])
            ])
          ],
          1
        ),
        _vm._v(" "),
        _c("li", { staticClass: "active" }, [_vm._v("Settlement Details")]),
        _vm._v(" "),
        _c("li", { staticClass: "active" }, [_vm._v("Overview")])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "panel panel-default" }, [
      _c("div", { staticClass: "panel-heading" }, [_vm._v("FILTER RESULT ")]),
      _vm._v(" "),
      _c("div", { staticClass: "panel-body" }, [
        _c("div", { staticClass: "row clearfix" }, [
          _c(
            "form",
            {
              on: {
                submit: function($event) {
                  $event.preventDefault()
                  return _vm.getSettlement($event)
                }
              }
            },
            [
              _vm.isAdmin
                ? _c(
                    "div",
                    { staticClass: "col-lg-3 col-md-3 col-sm-6 col-xs-12" },
                    [
                      _c(
                        "select",
                        {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.lga_id,
                              expression: "lga_id"
                            }
                          ],
                          staticClass: "form-control",
                          on: {
                            change: function($event) {
                              var $$selectedVal = Array.prototype.filter
                                .call($event.target.options, function(o) {
                                  return o.selected
                                })
                                .map(function(o) {
                                  var val = "_value" in o ? o._value : o.value
                                  return val
                                })
                              _vm.lga_id = $event.target.multiple
                                ? $$selectedVal
                                : $$selectedVal[0]
                            }
                          }
                        },
                        [
                          _c("option", { attrs: { value: "" } }, [
                            _vm._v("Select LGA")
                          ]),
                          _vm._v(" "),
                          _vm._l(_vm.lgas, function(lga) {
                            return _c(
                              "option",
                              { key: lga.id, domProps: { value: lga.id } },
                              [
                                _vm._v(
                                  "\n                                    " +
                                    _vm._s(lga.name) +
                                    "\n                                "
                                )
                              ]
                            )
                          })
                        ],
                        2
                      )
                    ]
                  )
                : _vm._e(),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-lg-3 col-md-3 col-sm-6 col-xs-12" },
                [
                  _c("div", { staticClass: "form-group" }, [
                    _c(
                      "div",
                      { staticClass: "input-group" },
                      [
                        _vm._m(1),
                        _vm._v(" "),
                        _c("flat-pickr", {
                          staticClass: "form-control",
                          attrs: {
                            config: _vm.config,
                            placeholder: "FROM DATE",
                            name: "date"
                          },
                          model: {
                            value: _vm.fromDate,
                            callback: function($$v) {
                              _vm.fromDate = $$v
                            },
                            expression: "fromDate"
                          }
                        })
                      ],
                      1
                    )
                  ])
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "col-lg-3 col-md-3 col-sm-6 col-xs-12" },
                [
                  _c("div", { staticClass: "form-group" }, [
                    _c(
                      "div",
                      { staticClass: "input-group" },
                      [
                        _vm._m(2),
                        _vm._v(" "),
                        _c("flat-pickr", {
                          staticClass: "form-control",
                          attrs: {
                            config: _vm.config,
                            placeholder: "TO DATE",
                            name: "date"
                          },
                          model: {
                            value: _vm.toDate,
                            callback: function($$v) {
                              _vm.toDate = $$v
                            },
                            expression: "toDate"
                          }
                        })
                      ],
                      1
                    )
                  ])
                ]
              ),
              _vm._v(" "),
              _vm._m(3)
            ]
          )
        ])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "page-body" }, [
      _c("div", { staticClass: "row clearfix", attrs: { id: "table" } }, [
        _c("div", { staticClass: "col-lg-12 col-md-12 col-sm-6 col-xs-12" }, [
          _c("div", { staticClass: "panel panel-default" }, [
            _c("div", { staticClass: "panel-heading" }, [
              _vm._v("Settlement ")
            ]),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "panel-body" },
              [
                _c(
                  "v-card-title",
                  [
                    _vm._v(" Settlement Summary\n                            "),
                    _c(
                      "v-spacer",
                      [
                        _vm._v(
                          "\n                                  \n                                "
                        ),
                        _c(
                          "vue-excel-xlsx",
                          {
                            attrs: {
                              data: this.settlement,
                              columns: _vm.columns,
                              filename: "settlement",
                              sheetname: "sheet"
                            }
                          },
                          [_c("v-btn", [_vm._v(" Excel  ")])],
                          1
                        )
                      ],
                      1
                    ),
                    _vm._v(" "),
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
                    }),
                    _vm._v(" "),
                    _c(
                      "v-overlay",
                      { attrs: { absolute: _vm.absolute, value: _vm.table_1 } },
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
                    headers: this.Headers,
                    items: this.settlement,
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
                      key: "item.cardTxn",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                new Intl.NumberFormat("en-NG", {
                                  style: "currency",
                                  currency: "NGN"
                                }).format(item.cardTxn)
                              )
                            )
                          ])
                        ]
                      }
                    },
                    {
                      key: "item.bankTxn",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                new Intl.NumberFormat("en-NG", {
                                  style: "currency",
                                  currency: "NGN"
                                }).format(item.bankTxn)
                              )
                            )
                          ])
                        ]
                      }
                    },
                    {
                      key: "item.cardTxnFee",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                new Intl.NumberFormat("en-NG", {
                                  style: "currency",
                                  currency: "NGN"
                                }).format(item.cardTxnFee)
                              )
                            )
                          ])
                        ]
                      }
                    },
                    {
                      key: "item.bankTxnFee",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                new Intl.NumberFormat("en-NG", {
                                  style: "currency",
                                  currency: "NGN"
                                }).format(item.bankTxnFee)
                              )
                            )
                          ])
                        ]
                      }
                    },
                    {
                      key: "item.totalTxnFee",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                new Intl.NumberFormat("en-NG", {
                                  style: "currency",
                                  currency: "NGN"
                                }).format(item.totalTxnFee)
                              )
                            )
                          ])
                        ]
                      }
                    },
                    {
                      key: "item.cardSettlement",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                new Intl.NumberFormat("en-NG", {
                                  style: "currency",
                                  currency: "NGN"
                                }).format(item.cardSettlement)
                              )
                            )
                          ])
                        ]
                      }
                    },
                    {
                      key: "item.bankSettlement",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                new Intl.NumberFormat("en-NG", {
                                  style: "currency",
                                  currency: "NGN"
                                }).format(item.bankSettlement)
                              )
                            )
                          ])
                        ]
                      }
                    },
                    {
                      key: "item.totalSettlement",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                new Intl.NumberFormat("en-NG", {
                                  style: "currency",
                                  currency: "NGN"
                                }).format(item.totalSettlement)
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
                      attrs: {
                        color: "primary",
                        dark: "",
                        length: _vm.pageCount
                      },
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
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h1", [
      _c("small", [_vm._v(" Settlement Details")]),
      _c("br"),
      _vm._v("SETTLEMENT MANAGEMENT")
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "input-group-btn" }, [
      _c(
        "button",
        {
          staticClass: "btn btn-default",
          attrs: { type: "button", title: "Toggle", "data-toggle": "" }
        },
        [
          _c("i", { staticClass: "fa fa-calendar" }, [
            _c(
              "span",
              { staticClass: "sr-only", attrs: { "aria-hidden": "true" } },
              [_vm._v("Toggle")]
            )
          ])
        ]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "input-group-btn" }, [
      _c(
        "button",
        {
          staticClass: "btn btn-default",
          attrs: { type: "button", title: "Toggle", "data-toggle": "" }
        },
        [
          _c("i", { staticClass: "fa fa-calendar" }, [
            _c(
              "span",
              { staticClass: "sr-only", attrs: { "aria-hidden": "true" } },
              [_vm._v("Toggle")]
            )
          ])
        ]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-lg-2 col-md-2 col-sm-6 col-xs-12" }, [
      _c("div", { staticClass: "form-group" }, [
        _c(
          "button",
          {
            staticClass: "m-t-8 btn btn-primary btn-md",
            attrs: { type: "submit" }
          },
          [
            _vm._v(
              "\n                                    Filter\n                                    "
            ),
            _c("i", { staticClass: "fa fa-search" })
          ]
        )
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/settlement/Settlement.vue":
/*!***********************************************************!*\
  !*** ./resources/js/components/settlement/Settlement.vue ***!
  \***********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Settlement_vue_vue_type_template_id_699a5934___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Settlement.vue?vue&type=template&id=699a5934& */ "./resources/js/components/settlement/Settlement.vue?vue&type=template&id=699a5934&");
/* harmony import */ var _Settlement_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Settlement.vue?vue&type=script&lang=js& */ "./resources/js/components/settlement/Settlement.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Settlement_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Settlement_vue_vue_type_template_id_699a5934___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Settlement_vue_vue_type_template_id_699a5934___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/settlement/Settlement.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/settlement/Settlement.vue?vue&type=script&lang=js&":
/*!************************************************************************************!*\
  !*** ./resources/js/components/settlement/Settlement.vue?vue&type=script&lang=js& ***!
  \************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Settlement_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Settlement.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/settlement/Settlement.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Settlement_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/settlement/Settlement.vue?vue&type=template&id=699a5934&":
/*!******************************************************************************************!*\
  !*** ./resources/js/components/settlement/Settlement.vue?vue&type=template&id=699a5934& ***!
  \******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Settlement_vue_vue_type_template_id_699a5934___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Settlement.vue?vue&type=template&id=699a5934& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/settlement/Settlement.vue?vue&type=template&id=699a5934&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Settlement_vue_vue_type_template_id_699a5934___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Settlement_vue_vue_type_template_id_699a5934___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);