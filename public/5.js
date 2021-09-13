(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[5],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/dashboard/Commissioner.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/dashboard/Commissioner.vue?vue&type=script&lang=js& ***!
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//



/* harmony default export */ __webpack_exports__["default"] = ({
  name: "Commisioner",
  components: {
    flatPickr: vue_flatpickr_component__WEBPACK_IMPORTED_MODULE_1___default.a
  },
  data: function data() {
    return {
      card_1: true,
      card_2: true,
      card_3: true,
      card_4: true,
      chart1: true,
      chart2: true,
      chart3: true,
      chart4: true,
      table1: true,
      absolute: true,
      chartInit: '',
      chartInit1: '',
      chartInit3: '',
      page: 1,
      pageCount: 0,
      itemsPerPage: 10,
      search: '',
      headers: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'LGA',
        value: 'lga_name'
      }, {
        text: 'Potential Revenue',
        value: 'invoice'
      }, {
        text: 'Total Generated',
        value: 'receipt'
      } //                    { text: 'Unremitted', value: 'unremitted' },
      ],
      summary: [],
      lgas: [],
      lgvt: '',
      fromDate: '',
      //  new Date(),
      toDate: '',
      //  new Date(),
      status: '',
      getFrom: '',
      getTo: '',
      getLga: '',
      config: {
        wrap: true,
        // set wrap to true only when using 'input-group'
        altFormat: 'M j, Y',
        altInput: true,
        dateFormat: 'Y-m-d'
      },
      metrics: {
        total_business_reg: '',
        monthly_business_reg: '',
        monthly_revenue: '',
        yearly_revenue: '',
        monthly_paid_inv: '',
        no_paid_inv: '',
        monthly_unpaid_inv: '',
        no_unpaid_inv: '',
        no_unclear_cheque: '',
        unclear_cheque: '',
        unremitted_fund: '',
        agent: ''
      },
      errors: []
    };
  },
  methods: {
    getMetricsData: function getMetricsData() {
      var _this = this;

      axios.post('/dashboard/commissioner/metrics', {
        'fromDate': this.fromDate,
        'toDate': this.toDate,
        'lga': this.lgvt
      }).then(function (response) {
        if (response.data.status === 'success') {
          _this.metrics.total_business_reg = response.data.data.TotalBusinessReg;
          _this.metrics.monthly_business_reg = response.data.data.MonthlyBusinessReg;
          _this.metrics.monthly_revenue = response.data.data.MonthlyRevenue;
          _this.metrics.yearly_revenue = response.data.data.YearlyRevenue;
          _this.metrics.monthly_paid_inv = response.data.data.PaidInvoice;
          _this.metrics.no_paid_inv = response.data.data.CountPaidInv;
          _this.metrics.monthly_unpaid_inv = response.data.data.UnpaidInvoice;
          _this.metrics.no_unpaid_inv = response.data.data.CountUnpaidInv;
          _this.metrics.no_unclear_cheque = response.data.data.CountUnclearCheque;
          _this.metrics.unclear_cheque = response.data.data.UnclearCheque;
          _this.metrics.agent = response.data.data.Agent; //  this.LgaName = response.data.data.LgaName;

          _this.card_1 = _this.card_2 = _this.card_3 = _this.card_4 = false;
        }
      })["catch"](function (error) {
        console.log('there was an error. ' + error);
      });
    },
    getRevenueChart: function getRevenueChart() {
      var _this2 = this;

      // last six month revenue
      axios.post('/dashboard/commissioner/revenue', {
        'lga': this.lgvt
      }).then(function (response) {
        if (response.data.status === 'success') {
          var config = {
            type: 'line',
            data: {
              labels: response.data.data.monthName,
              datasets: [{
                label: 'Revenues',
                borderColor: "#f7c598",
                backgroundColor: "#fbe2cd",
                fillOpacity: .9,
                data: response.data.data.lastSixMonthRev
              }]
            },
            options: {
              // responsive: true,
              scales: {
                xAxes: [{
                  ticks: {
                    beginAtZero: true,
                    autoSkip: false,
                    maxRotation: 45,
                    minRotation: 45
                  }
                }],
                yAxes: [{
                  // stacked: true,
                  ticks: {
                    callback: function callback(value, index, values) {
                      return value.toLocaleString("en-NG", {
                        style: "currency",
                        currency: "NGN"
                      });
                    }
                  }
                }]
              },
              tooltips: {
                callbacks: {
                  label: function label(tooltipItem, data) {
                    return tooltipItem.yLabel.toLocaleString("en-NG", {
                      style: "currency",
                      currency: "NGN"
                    });
                  }
                }
              }
            }
          };
          if (_this2.chartInit) _this2.chartInit.destroy();
          _this2.chartInit = new Chart(document.getElementById("chart_1").getContext("2d"), config);
          _this2.chart1 = false;
        }
      })["catch"](function (error) {
        console.log('there was an error. ' + error);
      });
    },
    getRevComponentRemittanceChart: function getRevComponentRemittanceChart() {
      var _this3 = this;

      axios.post('/dashboard/commissioner/component', {
        'fromDate': this.fromDate,
        'toDate': this.toDate,
        'lga': this.lgvt
      }).then(function (response) {
        if (response.data.status === 'success') {
          var config = {
            type: 'doughnut',
            data: {
              labels: response.data.data.ComponentLabel,
              datasets: [{
                // label: "Paid Invoice(Month)",
                data: response.data.data.ComponentValue,
                backgroundColor: ['#009efd', '#2af598', '#00FF00', 'yellow', '#CC00FF', '#3366CC', 'orange', '#6c5b7c']
              }]
            },
            options: {
              responsive: true,
              cutoutPercentage: 75,
              tooltips: {
                callbacks: {
                  label: function label(tooltipItem, data) {
                    var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    return data.labels[tooltipItem.index] + ': ' + value.toLocaleString("en-NG", {
                      style: "currency",
                      currency: "NGN"
                    });
                  }
                }
              }
            }
          };
          if (_this3.chartInit1) _this3.chartInit1.destroy();
          _this3.chartInit1 = new Chart(document.getElementById("chart_3").getContext("2d"), config);
          _this3.chart3 = false;
          var config = {
            type: 'pie',
            data: {
              labels: response.data.data.RemittanceLabel,
              datasets: [{
                // label: "Paid Invoice(Month)",
                data: response.data.data.RemittanceValue,
                backgroundColor: ['#FFFF00', '#20b2aa', '#32a7f5']
              }]
            },
            options: {
              responsive: true,
              // cutoutPercentage: 90
              tooltips: {
                callbacks: {
                  label: function label(tooltipItem, data) {
                    //   var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    //   return value.toLocaleString("en-NG",{style:"currency", currency:"NGN"});
                    var indice = tooltipItem.index; // return  data.labels[indice] +': '+  data.datasets[tooltipItem.datasetIndex].data[indice].toLocaleString("en-NG",{style:"currency", currency:"NGN"}) + '';
                    //  var naira = value => currency(value, { symbol: '₦', decimal: '.', separator: ',' });

                    return data.labels[indice] + ': ₦' + data.datasets[tooltipItem.datasetIndex].data[indice].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                  }
                }
              }
            }
          };
          if (_this3.chartInit2) _this3.chartInit2.destroy();
          _this3.chartInit2 = new Chart(document.getElementById("chart_4").getContext("2d"), config);
          _this3.chart4 = false;
        }
      })["catch"](function (error) {
        console.log('there was an error. ' + error);
      });
    },
    getLgvts: function () {
      var _getLgvts = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        var _this4 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.prev = 0;
                _context.next = 3;
                return axios.get("/state/".concat(this.$state_id, "/lgas")).then(function (response) {
                  _this4.lgas = response.data.data;
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

      function getLgvts() {
        return _getLgvts.apply(this, arguments);
      }

      return getLgvts;
    }(),
    getSummary: function () {
      var _getSummary = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        var _this5 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                _context2.next = 3;
                return axios.post('/dashboard/commissioner/summary', {
                  'fromDate': this.fromDate,
                  'toDate': this.toDate,
                  'lga': this.lgvt
                }).then(function (response) {
                  _this5.summary = response.data.data.summary; //   console.log(this.summary);

                  _this5.table1 = false;
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

      function getSummary() {
        return _getSummary.apply(this, arguments);
      }

      return getSummary;
    }(),
    getLgaChart: function getLgaChart() {
      var _this6 = this;

      // Lga Performance
      axios.post('/dashboard/commissioner/lga', {
        'fromDate': this.fromDate,
        'toDate': this.toDate,
        'lga': this.lgvt
      }).then(function (response) {
        if (response.data.status === 'success') {
          // comparison of lga revenue
          var config = {
            type: 'bar',
            data: {
              labels: response.data.data.LgaName,
              datasets: [{
                label: "Revenue",
                data: response.data.data.ThisMonthRev,
                backgroundColor: '#20b2aa'
              }]
            },
            options: {
              responsive: true,
              //  function(label){return  '$' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");}
              scales: {
                yAxes: [{
                  ticks: {
                    callback: function callback(value, index, values) {
                      return value.toLocaleString("en-NG", {
                        style: "currency",
                        currency: "NGN"
                      });
                    }
                  }
                }],
                xAxes: [{
                  ticks: {
                    beginAtZero: true,
                    autoSkip: false,
                    maxRotation: 45,
                    minRotation: 45
                  }
                }]
              },
              tooltips: {
                callbacks: {
                  label: function label(tooltipItem, data) {
                    return tooltipItem.yLabel.toLocaleString("en-NG", {
                      style: "currency",
                      currency: "NGN"
                    });
                  }
                }
              }
            }
          };
          if (_this6.chartInit3) _this6.chartInit3.destroy();
          _this6.chartInit3 = new Chart(document.getElementById("chart_2").getContext("2d"), config);
          _this6.chart2 = false;
        }
      })["catch"](function (error) {
        console.log('there was an error. ' + error);
      });
    },
    searchResult: function () {
      var _searchResult = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee3() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                //   $('#table').show();
                //   try{
                this.getFrom = this.fromDate;
                this.getTo = this.toDate;
                this.getLga = this.lgvt;
                this.card_1 = this.card_2 = this.card_3 = this.card_4 = this.table1 = true;
                this.chart1 = this.chart2 = this.chart3 = this.chart4 = true;
                this.getMetricsData();
                this.getRevenueChart();
                this.getLgaChart();
                this.getRevComponentRemittanceChart();
                this.getSummary();

              case 10:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, this);
      }));

      function searchResult() {
        return _searchResult.apply(this, arguments);
      }

      return searchResult;
    }()
  },
  mounted: function mounted() {
    this.getLgvts();
    this.getMetricsData();
    this.getRevenueChart();
    this.getLgaChart();
    this.getRevComponentRemittanceChart();
    this.getSummary();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/dashboard/Commissioner.vue?vue&type=template&id=4c54711e&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/dashboard/Commissioner.vue?vue&type=template&id=4c54711e& ***!
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
        _c("li", { staticClass: "active" }, [_vm._v("Dashboard")]),
        _vm._v(" "),
        _c("li", { staticClass: "active" }, [_vm._v("Overview")])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "page-body" }, [
      _c("div", { staticClass: "row clearfix" }, [
        _c("div", { staticClass: "col-lg-3 col-md-3 col-sm-6 col-xs-12" }, [
          _c(
            "div",
            {
              staticClass:
                "info-box infobox-type-5 hover-expand-effect blue-mix"
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
                _c("i", { staticClass: "number fa fa-user" }),
                _vm._v(" "),
                _c("div", { staticClass: "text-header" }, [
                  _vm._v("TAX PAYER")
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "number" }, [
                  _vm._v(_vm._s(_vm.metrics.total_business_reg))
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "text" }, [_vm._v("Businesses")]),
                _vm._v(" "),
                _c("div", { staticClass: "number" }, [
                  _vm._v(_vm._s(_vm.metrics.monthly_business_reg))
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "text" }, [_vm._v("This Month")])
              ])
            ],
            1
          )
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "col-lg-3 col-md-3 col-sm-6 col-xs-12" }, [
          _c(
            "div",
            {
              staticClass:
                "info-box infobox-type-5 hover-expand-effect orange-mix"
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
                _c("i", { staticClass: "number fa fa-tag" }),
                _vm._v(" "),
                _c("div", { staticClass: "text-header" }, [_vm._v("REVENUE")]),
                _vm._v(" "),
                _c("div", { staticClass: "number" }, [
                  _vm._v(
                    "₦" +
                      _vm._s(
                        this.$suffix.suffixNotation(_vm.metrics.monthly_revenue)
                      ) +
                      " "
                  )
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "text" }, [_vm._v("This Month")]),
                _vm._v(" "),
                _c("div", { staticClass: "number" }, [
                  _vm._v(
                    " ₦" +
                      _vm._s(
                        this.$suffix.suffixNotation(_vm.metrics.yearly_revenue)
                      ) +
                      "\n                        "
                  )
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "text" }, [_vm._v("This Year")])
              ])
            ],
            1
          )
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "col-lg-3 col-md-3 col-sm-6 col-xs-12" }, [
          _c(
            "div",
            {
              staticClass:
                "info-box infobox-type-5 hover-expand-effect aqua-mix"
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
                _c("div", { staticClass: "text-header" }, [_vm._v("PAYMENT")]),
                _vm._v(" "),
                _c("div", { staticClass: "number" }, [
                  _vm._v(
                    "₦" +
                      _vm._s(
                        this.$suffix.suffixNotation(
                          _vm.metrics.monthly_paid_inv
                        )
                      ) +
                      "\n                            "
                  ),
                  _c("span", { staticClass: "text" }, [
                    _vm._v(" (" + _vm._s(_vm.metrics.no_paid_inv) + ")")
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "text" }, [_vm._v(" Paid invoices")]),
                _vm._v(" "),
                _c("div", { staticClass: "number" }, [
                  _vm._v(
                    "₦" +
                      _vm._s(
                        this.$suffix.suffixNotation(
                          _vm.metrics.monthly_unpaid_inv
                        )
                      ) +
                      "\n                            "
                  ),
                  _c("span", { staticClass: "text" }, [
                    _vm._v("( " + _vm._s(_vm.metrics.no_unpaid_inv) + ") ")
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "text" }, [_vm._v("unpaid invoices")]),
                _vm._v(" "),
                _c("div", { staticClass: "number" }, [
                  _vm._v(
                    "₦" +
                      _vm._s(
                        this.$suffix.suffixNotation(_vm.metrics.unclear_cheque)
                      ) +
                      "\n                            "
                  ),
                  _c("span", { staticClass: "text" }, [
                    _vm._v(" (" + _vm._s(_vm.metrics.no_unclear_cheque) + ") ")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "text" }, [
                    _vm._v("Unclear cheque(s)")
                  ])
                ])
              ])
            ],
            1
          )
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "col-lg-3 col-md-3 col-sm-6 col-xs-12" }, [
          _c(
            "div",
            {
              staticClass:
                "info-box infobox-type-5 hover-expand-effect purple-mix"
            },
            [
              _c(
                "v-overlay",
                { attrs: { absolute: _vm.absolute, value: _vm.card_4 } },
                [
                  _c("v-progress-circular", {
                    attrs: { indeterminate: "", size: "60" }
                  })
                ],
                1
              ),
              _vm._v(" "),
              _c("div", { staticClass: "content" }, [
                _c("i", { staticClass: "number fa fa-users" }),
                _vm._v(" "),
                _c("div", { staticClass: "text-header" }, [_vm._v("AGENTS")]),
                _vm._v(" "),
                _c("div", { staticClass: "number" }, [
                  _vm._v(_vm._s(_vm.metrics.agent))
                ])
              ])
            ],
            1
          )
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
                    return _vm.searchResult($event)
                  }
                }
              },
              [
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
                            value: _vm.lgvt,
                            expression: "lgvt"
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
                            _vm.lgvt = $event.target.multiple
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
                        _c("option", { attrs: { value: "all" } }, [
                          _vm._v("All")
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
                    ),
                    _vm._v(" "),
                    _vm.errors["lga"]
                      ? _c("label", { staticClass: "error" }, [
                          _vm._v(_vm._s(_vm.errors["lga"][0]))
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
                _vm._m(3)
              ]
            )
          ])
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row clearfix", attrs: { id: "lastSixRev" } }, [
        _c(
          "div",
          { staticClass: "col-lg-12 col-md-12 col-sm-12 col-xs-12  " },
          [
            _c(
              "v-overlay",
              { attrs: { absolute: _vm.absolute, value: _vm.chart1 } },
              [
                _c("v-progress-circular", {
                  attrs: { indeterminate: "", size: "60" }
                })
              ],
              1
            ),
            _vm._v(" "),
            _vm._m(4)
          ],
          1
        )
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row clearfix", attrs: { id: "lgaRev" } }, [
        _c(
          "div",
          { staticClass: "col-lg-12 col-md-12 col-sm-12 col-xs-12" },
          [
            _c(
              "v-overlay",
              { attrs: { absolute: _vm.absolute, value: _vm.chart2 } },
              [
                _c("v-progress-circular", {
                  attrs: { indeterminate: "", size: "60" }
                })
              ],
              1
            ),
            _vm._v(" "),
            _vm._m(5)
          ],
          1
        )
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row clearfix", attrs: { id: "summary" } }, [
        _c(
          "div",
          { staticClass: "col-lg-12 col-md-12 col-sm-12 col-xs-12  " },
          [
            _c(
              "v-overlay",
              { attrs: { absolute: _vm.absolute, value: _vm.table1 } },
              [
                _c("v-progress-circular", {
                  attrs: { indeterminate: "", size: "60" }
                })
              ],
              1
            ),
            _vm._v(" "),
            _c("div", { staticClass: "panel panel-default" }, [
              _c("div", { staticClass: "panel-heading" }, [
                _vm._v(" SUMMARY ")
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "panel-body" },
                [
                  _c(
                    "v-skeleton-loader",
                    { staticClass: "mx-auto", attrs: { type: "card" } },
                    [
                      _c(
                        "v-card-title",
                        [
                          _c("v-spacer", [
                            _vm._v(" Summary of LGA Collections")
                          ]),
                          _vm._v(" "),
                          _c("v-text-field", {
                            attrs: {
                              "append-icon": "magnify",
                              label: "Search",
                              "single-line": "",
                              "hide-details": ""
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
                      _c("v-data-table", {
                        attrs: {
                          headers: this.headers,
                          items: this.summary,
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
                            key: "item.invoice",
                            fn: function(ref) {
                              var item = ref.item
                              return [
                                _c("span", [
                                  _vm._v(
                                    _vm._s(
                                      new Intl.NumberFormat("en-NG", {
                                        style: "currency",
                                        currency: "NGN"
                                      }).format(item.invoice)
                                    )
                                  )
                                ])
                              ]
                            }
                          },
                          {
                            key: "item.receipt",
                            fn: function(ref) {
                              var item = ref.item
                              return [
                                _c("span", [
                                  _vm._v(
                                    _vm._s(
                                      new Intl.NumberFormat("en-NG", {
                                        style: "currency",
                                        currency: "NGN"
                                      }).format(item.receipt)
                                    )
                                  )
                                ])
                              ]
                            }
                          },
                          {
                            key: "item.unremitted",
                            fn: function(ref) {
                              var item = ref.item
                              return [
                                _c("span", [
                                  _vm._v(
                                    _vm._s(
                                      new Intl.NumberFormat("en-NG", {
                                        style: "currency",
                                        currency: "NGN"
                                      }).format(item.unremitted)
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
                ],
                1
              )
            ])
          ],
          1
        )
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row clearfix", attrs: { id: "component" } }, [
        _c(
          "div",
          { staticClass: "col-lg-6 col-md-6 col-sm-6 col-xs-12" },
          [
            _c(
              "v-overlay",
              { attrs: { absolute: _vm.absolute, value: _vm.chart3 } },
              [
                _c("v-progress-circular", {
                  attrs: { indeterminate: "", size: "60" }
                })
              ],
              1
            ),
            _vm._v(" "),
            _vm._m(6)
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "col-lg-6 col-md-6 col-sm-6 col-xs-12" },
          [
            _c(
              "v-overlay",
              { attrs: { absolute: _vm.absolute, value: _vm.chart4 } },
              [
                _c("v-progress-circular", {
                  attrs: { indeterminate: "", size: "60" }
                })
              ],
              1
            ),
            _vm._v(" "),
            _vm._m(7)
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
    return _c("h1", [
      _c("small", [_vm._v(" MINISTRY OF LOCAL GOVT. AFFAIR ")]),
      _c("br"),
      _vm._v("DASHBOARD")
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
      _c("div", { staticClass: "input-group-btn" }, [
        _c(
          "button",
          { staticClass: "btn btn-primary", attrs: { type: "submit" } },
          [
            _vm._v(
              "\n                                    Search\n                                    "
            ),
            _c("i", { staticClass: "fa fa-search" })
          ]
        )
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "panel panel-default" }, [
      _c("div", { staticClass: "panel-heading" }, [
        _vm._v(" LAST SIX MONTHS REVENUE COLLECTION ")
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "panel-body" }, [
        _c("canvas", { attrs: { id: "chart_1", height: "100" } })
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "panel panel-default" }, [
      _c("div", { staticClass: "panel-heading" }, [
        _vm._v(" LOCAL GOVERNMENT PERFORMANCE ")
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "panel-body" }, [
        _c("canvas", { attrs: { id: "chart_2", height: "100" } })
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "panel panel-default" }, [
      _c("div", { staticClass: "panel-heading" }, [
        _vm._v(" REVENUE BY COMPONENT  ")
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "panel-body" }, [
        _c("canvas", { attrs: { id: "chart_3", height: "150" } })
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "panel panel-default" }, [
      _c("div", { staticClass: "panel-heading" }, [_vm._v("REMITTANCE ")]),
      _vm._v(" "),
      _c("div", { staticClass: "panel-body" }, [
        _c("canvas", { attrs: { id: "chart_4", height: "150" } })
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/dashboard/Commissioner.vue":
/*!************************************************************!*\
  !*** ./resources/js/components/dashboard/Commissioner.vue ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Commissioner_vue_vue_type_template_id_4c54711e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Commissioner.vue?vue&type=template&id=4c54711e& */ "./resources/js/components/dashboard/Commissioner.vue?vue&type=template&id=4c54711e&");
/* harmony import */ var _Commissioner_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Commissioner.vue?vue&type=script&lang=js& */ "./resources/js/components/dashboard/Commissioner.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Commissioner_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Commissioner_vue_vue_type_template_id_4c54711e___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Commissioner_vue_vue_type_template_id_4c54711e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/dashboard/Commissioner.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/dashboard/Commissioner.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/dashboard/Commissioner.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Commissioner_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Commissioner.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/dashboard/Commissioner.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Commissioner_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/dashboard/Commissioner.vue?vue&type=template&id=4c54711e&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/components/dashboard/Commissioner.vue?vue&type=template&id=4c54711e& ***!
  \*******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Commissioner_vue_vue_type_template_id_4c54711e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Commissioner.vue?vue&type=template&id=4c54711e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/dashboard/Commissioner.vue?vue&type=template&id=4c54711e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Commissioner_vue_vue_type_template_id_4c54711e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Commissioner_vue_vue_type_template_id_4c54711e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);