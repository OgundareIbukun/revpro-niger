(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[9],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/invoiceListing/noncash-invoices.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/invoiceListing/noncash-invoices.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************/
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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


 // import '../assets/plugins/wait-me/src/waitMe.css';

/* harmony default export */ __webpack_exports__["default"] = ({
  name: "InvoiceListing",
  created: function created() {},
  components: {
    flatPickr: vue_flatpickr_component__WEBPACK_IMPORTED_MODULE_1___default.a
  },
  data: function data() {
    return {
      card_1: true,
      card_2: true,
      card_3: true,
      table_1: true,
      absolute: true,
      //                page: 1,
      //                pageCount: 0,
      //                itemsPerPage: 10,
      search: '',
      headers: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'Txn Ref',
        value: 'txn_ref'
      }, {
        text: 'Payer',
        value: 'payer'
      }, {
        text: 'Description',
        value: 'description'
      }, {
        text: 'LGA',
        value: 'lgaName'
      }, {
        text: 'Rev. Point',
        value: 'revPtsName'
      }, {
        text: 'Amount',
        value: 'amount'
      }, {
        text: 'Created Date',
        value: 'create_date'
      }, {
        text: 'Payment Date',
        value: 'payment_date'
      }, {
        text: 'Payment Channel',
        value: 'payment_type'
      }, {
        text: 'Bank',
        value: 'bank'
      }, {
        text: 'Created by',
        value: 'agent'
      }, {
        text: 'Status',
        value: 'status'
      }, {
        text: 'Action',
        value: 'actions',
        sortable: false
      }],
      roleName: '',
      fromDate: '',
      //  new Date(),
      toDate: '',
      //  new Date(),
      status: '',
      getFrom: '',
      getTo: '',
      getStatus: '',
      // getStatusText :'',
      totalLabel: '',
      config: {
        wrap: true,
        // set wrap to true only when using 'input-group'
        altFormat: 'M j, Y',
        altInput: true,
        dateFormat: 'Y-m-d'
      },
      metrics: {
        unpaid_invoice: '',
        paid_invoice: '',
        unclear_cheque: '',
        total: '',
        total_remittance: '',
        unremitted_cash: '',
        agents: '',
        users: '',
        grand_total: '',
        total_generated: '',
        bank: ''
      },
      invoices: [],
      //                invoices:[
      //                    { agentName: 'Adekola', amount:'2000', description:'Tax', date:'23/09/2020' }
      //                ],
      invoice: {
        sn: '',
        agentName: '',
        amount: '',
        description: '',
        date: '',
        payer: '',
        status: '',
        txn_ref: '',
        payment_type: ''
      },
      paymenttypes: [],
      dataTable: '',
      errors: [],
      // excel format
      columns: [{
        label: '#',
        field: 'sn'
      }, {
        label: 'Txn Ref',
        field: 'txn_ref'
      }, {
        label: 'Payer',
        field: 'payer'
      }, {
        label: 'Description',
        field: 'description'
      }, {
        label: 'LGA',
        field: 'lgaName'
      }, {
        label: 'Rev. Point',
        field: 'revPtsName'
      }, {
        label: 'Amount',
        field: 'amount',
        dataFormat: this.$shared.amountFormat
      }, {
        label: 'Created Date',
        field: 'create_date',
        dataFormat: this.$shared.paymentDateFormat
      }, {
        label: 'Payment Date',
        field: 'payment_date',
        dataFormat: this.$shared.paymentDateFormat
      }, {
        label: 'Payment Channel',
        field: 'payment_type'
      }, {
        label: 'Bank',
        field: 'bank'
      }, {
        label: 'Created by',
        field: 'agent'
      }, {
        label: 'Status',
        field: 'status'
      }]
    };
  },
  methods: {
    getPaymentStatus: function () {
      var _getPaymentStatus = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        var _this = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.prev = 0;
                _context.next = 3;
                return axios.get("/paymentstatus").then(function (response) {
                  _this.paymenttypes = response.data; // this.table_1 = false
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
        }, _callee, null, [[0, 5]]);
      }));

      function getPaymentStatus() {
        return _getPaymentStatus.apply(this, arguments);
      }

      return getPaymentStatus;
    }(),
    initPreLoader: function initPreLoader() {
      this.card_1 = this.card_2 = this.card_3 = this.table_1 = true;
    },
    hidePreLoader: function hidePreLoader() {
      this.card_1 = this.card_2 = this.card_3 = this.table_1 = false;
    },
    searchResult: function () {
      var _searchResult = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        var _this2 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                //   this.initPreLoader();
                // this.initPreLoader(1);
                this.getFrom = this.fromDate;
                this.getTo = this.toDate;
                this.getStatus = this.status; //this.dataTable = $('#agent-table').DataTable({});

                _context2.next = 6;
                return axios.post('/noncash-invoice', {
                  'fromDate': this.fromDate,
                  'toDate': this.toDate,
                  'status': this.status
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    _this2.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                    _this2.metrics.paid_invoice = response.data.data.paid_invoice;
                    _this2.metrics.unclear_cheque = response.data.data.unclear_cheque;
                    _this2.metrics.total = response.data.data.total;
                    _this2.metrics.grand_total = response.data.data.grand_total;
                    _this2.invoices = response.data.data.invoice;
                    _this2.metrics.unremitted_cash = response.data.data.unremitted_cash;
                    _this2.metrics.total_remittance = response.data.data.total_remittance; //   this.metrics.agents = response.data.data.agents;
                    // this.metrics.users = response.data.data.users;

                    _this2.roleName = response.data.data.role_name;
                    _this2.metrics.total_generated = response.data.data.total_generated;
                    _this2.metrics.bank = response.data.data.bank;
                  }

                  _this2.fromDate = _this2.getFrom;
                  _this2.toDate = _this2.getTo;
                  _this2.status = _this2.getStatus;

                  var stTxt = _this2.setStatusName(_this2.getStatus);

                  _this2.totalLabel = _this2.setTotalLabel(_this2.getFrom, _this2.getTo, stTxt);

                  _this2.hidePreLoader();
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    //console.log(error.response.data.errors['users.name'][0]);
                    _this2.errors = error.response.data.errors;
                  } else {
                    console.log('else2');
                  }
                });

              case 6:
                _context2.next = 10;
                break;

              case 8:
                _context2.prev = 8;
                _context2.t0 = _context2["catch"](0);

              case 10:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this, [[0, 8]]);
      }));

      function searchResult() {
        return _searchResult.apply(this, arguments);
      }

      return searchResult;
    }(),
    setTotalLabel: function setTotalLabel(from, to, status) {
      var date = new Date();
      if (from && to) return 'Total ' + status + ' From ' + from + ' To ' + to + ':';else if (!from && to) return 'Total ' + status + ' From ' + new Date(date.getFullYear(), date.getMonth(), 2).toISOString().substr(0, 10).toString() + ' To ' + to + ':';else if (from && !to) return 'Total ' + status + ' From ' + from + '  To' + new Date().toISOString().substr(0, 10).toString() + ':';else return 'Total :';
    },
    setStatusName: function setStatusName(text) {
      if (text == 'cash') return 'Cash';else if (text == 'card') return 'Card';else if (text == 'paid_bank') return 'Paid (Bank)';else if (text == 'unpaid') return 'UnPaid';else if (text == 'paid_cheque') return 'Paid (Cheque)';else if (text == 'paid') return 'Paid';else if (text == 'uncleared_cheque') return 'Uncleared (Cheque)';else if (text == 'unpaid_bank') return 'UnPaid (Bank)';else return '';
    }
  },
  mounted: function mounted() {
    // $('#home-menu').addClass('active');
    this.getPaymentStatus();
    this.searchResult();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/invoiceListing/noncash-invoices.vue?vue&type=template&id=3dbc3c10&":
/*!**********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/invoiceListing/noncash-invoices.vue?vue&type=template&id=3dbc3c10& ***!
  \**********************************************************************************************************************************************************************************************************************************/
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
      _c("h1", [
        _c("small", [_vm._v(_vm._s(_vm.roleName) + " ")]),
        _c("br"),
        _vm._v("PAYMENT REPORTS")
      ]),
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
        _c("li", { staticClass: "active" }, [_vm._v("Payment Reports")]),
        _vm._v(" "),
        _c("li", { staticClass: "active" }, [_vm._v("Non-Cash Invoices")]),
        _vm._v(" "),
        _c("li", { staticClass: "active" }, [_vm._v("Overview")])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "page-body" }, [
      _c("div", { staticClass: "row clearfix" }, [
        _c(
          "div",
          {
            staticClass: "col-lg-3 col-md-3 col-sm-6 col-xs-12",
            attrs: { id: "" }
          },
          [
            _c(
              "div",
              {
                staticClass:
                  "card waitme info-box infobox-type-5 hover-expand-effect blue-mix",
                attrs: { id: "metrics" }
              },
              [
                _c(
                  "v-overlay",
                  { attrs: { absolute: _vm.absolute, value: _vm.card_1 } },
                  [
                    _c("v-progress-circular", {
                      attrs: { indeterminate: "", size: "60" }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c("div", { staticClass: "content" }, [
                  _c("i", { staticClass: "number fa fa-tag" }),
                  _vm._v(" "),
                  _vm._m(0),
                  _vm._v(" "),
                  _c("div", { staticClass: "number" }, [
                    _vm._v(
                      " ₦" +
                        _vm._s(
                          this.$shared.suffixNotation(
                            _vm.metrics.unpaid_invoice
                          )
                        ) +
                        "\n                            "
                    ),
                    _c("span", { staticClass: "text" }, [_vm._v(" Unpaid")])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "number" }, [
                    _vm._v(
                      " ₦" +
                        _vm._s(
                          this.$shared.suffixNotation(_vm.metrics.paid_invoice)
                        ) +
                        "\n                            "
                    ),
                    _c("span", { staticClass: "text" }, [_vm._v(" Paid ")])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "number" }, [
                    _vm._v(
                      " ₦" +
                        _vm._s(
                          this.$shared.suffixNotation(
                            _vm.metrics.unclear_cheque
                          )
                        ) +
                        "\n                            "
                    ),
                    _c("span", { staticClass: "text" }, [
                      _vm._v(" Uncleared cheque")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "number" }, [
                    _vm._v(
                      " ₦" +
                        _vm._s(this.$shared.suffixNotation(_vm.metrics.total)) +
                        "\n                            "
                    ),
                    _c("span", { staticClass: "text" }, [_vm._v(" Total")])
                  ])
                ])
              ],
              1
            )
          ]
        ),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: " col-lg-3 col-md-3 col-sm-6 col-xs-12",
            attrs: { id: "metrics2" }
          },
          [
            _c(
              "div",
              {
                staticClass:
                  "card info-box infobox-type-5 hover-expand-effect orange-mix"
              },
              [
                _c(
                  "v-overlay",
                  { attrs: { absolute: _vm.absolute, value: _vm.card_2 } },
                  [
                    _c("v-progress-circular", {
                      attrs: { indeterminate: "", size: "60" }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c("div", { staticClass: "content" }, [
                  _c("i", { staticClass: "number fa fa-tags" }),
                  _vm._v(" "),
                  _vm._m(1),
                  _vm._v(" "),
                  _c("div", { staticClass: "number" }, [
                    _vm._v(
                      " ₦" +
                        _vm._s(
                          this.$shared.suffixNotation(
                            _vm.metrics.total_remittance
                          )
                        ) +
                        "\n                            "
                    ),
                    _c("span", { staticClass: "text" }, [_vm._v(" Remitted")])
                  ]),
                  _vm._v(" "),
                  _vm.$roles.user_role == _vm.$roles.admin ||
                  _vm.$roles.user_role == _vm.$roles.super_admin
                    ? _c("div", { staticClass: "number" }, [
                        _vm._v(
                          " ₦" +
                            _vm._s(
                              this.$shared.suffixNotation(
                                _vm.metrics.unremitted_cash
                              )
                            ) +
                            "\n                            "
                        ),
                        _c("span", { staticClass: "text" }, [
                          _vm._v(" Unremitted")
                        ])
                      ])
                    : _vm._e()
                ])
              ],
              1
            )
          ]
        ),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: " col-lg-3 col-md-3 col-sm-6 col-xs-12",
            attrs: { id: "metrics3" }
          },
          [
            _c(
              "div",
              {
                staticClass:
                  "waitme card info-box infobox-type-5 hover-expand-effect aqua-mix"
              },
              [
                _c(
                  "v-overlay",
                  { attrs: { absolute: _vm.absolute, value: _vm.card_3 } },
                  [
                    _c("v-progress-circular", {
                      attrs: { indeterminate: "", size: "60" }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c("div", { staticClass: "content" }, [
                  _c("i", { staticClass: "number fa fa-tags" }),
                  _vm._v(" "),
                  _c("div", { staticClass: "text" }, [_vm._v(" TOTAL")]),
                  _vm._v(" "),
                  _c("div", { staticClass: "number" }, [
                    _vm._v(
                      "  ₦" +
                        _vm._s(this.$shared.suffixNotation(_vm.metrics.bank)) +
                        "\n                            "
                    ),
                    _c("span", { staticClass: "text" }, [
                      _vm._v(" Total In The Bank")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "text" }),
                  _vm._v(" "),
                  _c("div", { staticClass: "number" }, [
                    _vm._v(
                      " ₦" +
                        _vm._s(
                          this.$shared.suffixNotation(
                            _vm.metrics.total_generated
                          )
                        ) +
                        "\n                            "
                    ),
                    _c("span", { staticClass: "text" }, [
                      _vm._v(" Total Generated")
                    ])
                  ])
                ])
              ],
              1
            )
          ]
        )
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
                    return _vm.searchResult($event)
                  }
                }
              },
              [
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
                          }),
                          _vm._v(" "),
                          _vm.errors["fromDate"]
                            ? _c("label", { staticClass: "error" }, [
                                _vm._v(_vm._s(_vm.errors["fromDate"][0]))
                              ])
                            : _vm._e()
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
                          _vm._m(3),
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
                          }),
                          _vm._v(" "),
                          _vm.errors["toDate"]
                            ? _c("label", { staticClass: "error" }, [
                                _vm._v(_vm._s(_vm.errors["toDate"][0]))
                              ])
                            : _vm._e()
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
                    _c(
                      "select",
                      {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.status,
                            expression: "status"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { id: "status" },
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
                            _vm.status = $event.target.multiple
                              ? $$selectedVal
                              : $$selectedVal[0]
                          }
                        }
                      },
                      [
                        _c("option", { attrs: { value: "" } }, [
                          _vm._v("Select Payment Status")
                        ]),
                        _vm._v(" "),
                        _vm._l(_vm.paymenttypes, function(paymenttype) {
                          return _c(
                            "option",
                            {
                              key: paymenttype.value,
                              domProps: { value: paymenttype.value }
                            },
                            [
                              _vm._v(
                                "\n                                    " +
                                  _vm._s(paymenttype.name) +
                                  "\n                                "
                              )
                            ]
                          )
                        })
                      ],
                      2
                    ),
                    _vm._v(" "),
                    _vm.errors["status"]
                      ? _c("label", { staticClass: "error" }, [
                          _vm._v(_vm._s(_vm.errors["status"][0]))
                        ])
                      : _vm._e()
                  ]
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "col-lg-3 col-md-3 col-sm-6 col-xs-12" },
                  [
                    _c("div", { staticClass: "form-group" }, [
                      _c(
                        "button",
                        {
                          staticClass: "m-t-8 btn btn-primary btn-md",
                          attrs: { type: "submit" },
                          on: { click: _vm.initPreLoader }
                        },
                        [
                          _vm._v(
                            "\n                                    Search\n                                    "
                          ),
                          _c("i", { staticClass: "fa fa-search" })
                        ]
                      )
                    ])
                  ]
                )
              ]
            )
          ])
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row clearfix", attrs: { id: "table" } }, [
        _c("div", { staticClass: "col-lg-12 col-md-12 col-sm-6 col-xs-12" }, [
          _c("div", { staticClass: "panel panel-default" }, [
            _c("div", { staticClass: "panel-heading" }, [
              _vm._v("Non-Cash Invoices ")
            ]),
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
                          "\n                                   \n                                 "
                        ),
                        _c(
                          "vue-excel-xlsx",
                          {
                            attrs: {
                              data: this.invoices,
                              columns: _vm.columns,
                              filename: "Invoice_listing",
                              sheetname: "invoices"
                            }
                          },
                          [
                            _c("v-btn", { attrs: { color: "white" } }, [
                              _vm._v("Excel")
                            ])
                          ],
                          1
                        )
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-col",
                      { attrs: { cols: "12", md: "4", sm: "4" } },
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
                    headers: this.headers,
                    items: this.invoices,
                    search: _vm.search,
                    "items-per-page": 10
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
                      key: "item.create_date",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                _vm._f("moment")(
                                  item.create_date,
                                  "MMM Do YYYY, h:mm:ss a"
                                )
                              )
                            )
                          ])
                        ]
                      }
                    },
                    {
                      key: "item.payment_date",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                _vm._f("moment")(
                                  item.payment_date,
                                  "MMM Do YYYY, h:mm:ss a"
                                )
                              )
                            )
                          ])
                        ]
                      }
                    },
                    {
                      key: "item.status",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _c(
                              "label",
                              {
                                staticClass: "label",
                                class: {
                                  "label-success": item.status == "success",
                                  "label-warning": item.status == "pending",
                                  "label-info": item.status == "uncleared"
                                }
                              },
                              [_vm._v(_vm._s(item.status))]
                            )
                          ])
                        ]
                      }
                    },
                    {
                      key: "item.actions",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c(
                            "v-tooltip",
                            {
                              attrs: { bottom: "" },
                              scopedSlots: _vm._u(
                                [
                                  {
                                    key: "activator",
                                    fn: function(ref) {
                                      var on = ref.on
                                      var attrs = ref.attrs
                                      return [
                                        _c(
                                          "router-link",
                                          {
                                            attrs: {
                                              to: {
                                                path: "/invoice/" + item.txn_ref
                                              },
                                              exact: "",
                                              target: "_blank"
                                            }
                                          },
                                          [
                                            _c(
                                              "v-icon",
                                              _vm._g(
                                                _vm._b(
                                                  { staticClass: "mr-2" },
                                                  "v-icon",
                                                  attrs,
                                                  false
                                                ),
                                                on
                                              ),
                                              [_vm._v("mdi-printer")]
                                            )
                                          ],
                                          1
                                        )
                                      ]
                                    }
                                  }
                                ],
                                null,
                                true
                              )
                            },
                            [_vm._v(" "), _c("span", [_vm._v("view invoice")])]
                          )
                        ]
                      }
                    }
                  ])
                }),
                _vm._v(" "),
                _c("v-spacer", [
                  _c("div", [
                    _c("h6", [_vm._v(_vm._s(this.totalLabel) + " ")]),
                    _vm._v(" "),
                    _c("span", [
                      _c("h5", [
                        _vm._v(
                          _vm._s(
                            new Intl.NumberFormat("en-NG", {
                              style: "currency",
                              currency: "NGN"
                            }).format(_vm.metrics.grand_total)
                          ) + " "
                        )
                      ])
                    ])
                  ])
                ])
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
    return _c("div", { staticClass: "text" }, [
      _c("b", [_vm._v("NON-CASH INVOICES")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "text" }, [
      _c("b", [_vm._v("TOTAL REMITTANCE")])
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
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/invoiceListing/noncash-invoices.vue":
/*!*********************************************************************!*\
  !*** ./resources/js/components/invoiceListing/noncash-invoices.vue ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _noncash_invoices_vue_vue_type_template_id_3dbc3c10___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./noncash-invoices.vue?vue&type=template&id=3dbc3c10& */ "./resources/js/components/invoiceListing/noncash-invoices.vue?vue&type=template&id=3dbc3c10&");
/* harmony import */ var _noncash_invoices_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./noncash-invoices.vue?vue&type=script&lang=js& */ "./resources/js/components/invoiceListing/noncash-invoices.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _noncash_invoices_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _noncash_invoices_vue_vue_type_template_id_3dbc3c10___WEBPACK_IMPORTED_MODULE_0__["render"],
  _noncash_invoices_vue_vue_type_template_id_3dbc3c10___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/invoiceListing/noncash-invoices.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/invoiceListing/noncash-invoices.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************!*\
  !*** ./resources/js/components/invoiceListing/noncash-invoices.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_noncash_invoices_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./noncash-invoices.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/invoiceListing/noncash-invoices.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_noncash_invoices_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/invoiceListing/noncash-invoices.vue?vue&type=template&id=3dbc3c10&":
/*!****************************************************************************************************!*\
  !*** ./resources/js/components/invoiceListing/noncash-invoices.vue?vue&type=template&id=3dbc3c10& ***!
  \****************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_noncash_invoices_vue_vue_type_template_id_3dbc3c10___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./noncash-invoices.vue?vue&type=template&id=3dbc3c10& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/invoiceListing/noncash-invoices.vue?vue&type=template&id=3dbc3c10&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_noncash_invoices_vue_vue_type_template_id_3dbc3c10___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_noncash_invoices_vue_vue_type_template_id_3dbc3c10___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);