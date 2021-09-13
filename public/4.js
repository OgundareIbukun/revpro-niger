(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[4],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/dashboard/Chairman.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/dashboard/Chairman.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  name: "Director-Revenue",
  created: function created() {},
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
      chart5: true,
      absolute: true,
      chartInit: '',
      chartInit2: '',
      chartInit3: '',
      chartInit4: '',
      chartInit5: '',
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
      toppers: [],
      topper: {
        id: '',
        name: '',
        revenue: '',
        'paid_invoice': ''
      },
      LgaName: ''
    };
  },
  methods: {
    getMetricsData: function getMetricsData() {
      var _this = this;

      axios.get('/dashboard/lg-chairman/metrics').then(function (response) {
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
          _this.metrics.unremitted_fund = response.data.data.UnremittedFund;
          _this.metrics.agent = response.data.data.Agent;
          _this.LgaName = response.data.data.LgaName;
          _this.card_1 = _this.card_2 = _this.card_3 = _this.card_4 = false;
        }
      })["catch"](function (error) {
        console.log('there was an error. ' + error);
      });
    },
    getRevenueChart: function getRevenueChart() {
      var _this2 = this;

      axios.get('/dashboard/lg-chairman/revenue').then(function (response) {
        //     const naira = value => currency(value, { symbol: '₦', decimal: '.', separator: ',' });
        if (response.data.status === 'success') {
          // last six month chart
          //
          var config = {
            type: 'bar',
            data: {
              labels: response.data.data.monthName,
              datasets: [{
                label: "Revenue",
                data: response.data.data.lastSixMonthRev,
                backgroundColor: '#7873CE'
              }]
            },
            options: {
              responsive: true,
              //  function(label){return  '$' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");}
              scales: {
                xAxes: [{
                  //stacked: true,
                  //stacked: true,
                  ticks: {
                    beginAtZero: true,
                    autoSkip: false,
                    maxRotation: 45,
                    minRotation: 45
                  }
                }],
                yAxes: [{
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
          if (_this2.chartInit2) _this2.chartInit2.destroy();
          _this2.chartInit2 = new Chart(document.getElementById("chart_1").getContext("2d"), config);
          _this2.chart1 = false;
          var config = {
            type: 'doughnut',
            data: {
              labels: response.data.data.deptName,
              datasets: [{
                // label: "Paid Invoice(Month)",
                data: response.data.data.revenueDept,
                backgroundColor: ['#ff851b', '#0073b7', '#40bcf9', '#A97fff', '#f19dbc', '#c37bce', '#44dec5', '#F9B4bd']
              }]
            },
            options: {
              responsive: true,
              cutoutPercentage: 90,
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
          if (_this2.chartInit3) _this2.chartInit3.destroy();
          _this2.chartInit3 = new Chart(document.getElementById("chart_2").getContext("2d"), config);
          _this2.chart2 = false;
        }
      })["catch"](function (error) {
        console.log('there was an error. ' + error);
      });
    },
    getRevenuePointChart: function getRevenuePointChart() {
      var _this3 = this;

      axios.get('/dashboard/lg-chairman/revenuepoint').then(function (response) {
        if (response.data.status === 'success') {
          var config = {
            type: 'bar',
            data: {
              labels: response.data.data.RevenuePoints,
              datasets: [{
                label: response.data.data.Label[1] + ' Revenue',
                type: "bar",
                backgroundColor: "#32a7f5",
                data: response.data.data.PrevMonthRev //      [30, 50, 45, 25, 85, 30, 90]

              }, {
                label: response.data.data.Label[0] + ' Revenue',
                type: "bar",
                backgroundColor: "#6c5b7c",
                data: response.data.data.ThisMonthRev //    [75, 69, 90, 80, 65, 75, 50]

              }]
            },
            options: {
              // responsive: true,
              scales: {
                xAxes: [{
                  //stacked: true,
                  //stacked: true,
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
          if (_this3.chartInit4) _this3.chartInit4.destroy();
          _this3.chartInit4 = new Chart(document.getElementById("bar_chart").getContext("2d"), config);
          _this3.chart3 = false; // top 10 performance

          _this3.toppers = response.data.data.Topper;
          _this3.chart4 = false;
        }
      })["catch"](function (error) {
        console.log('there was an error. ' + error);
      });
    },
    getLgaChart: function getLgaChart() {
      var _this4 = this;

      axios.get('/dashboard/lg-chairman/lga').then(function (response) {
        if (response.data.status === 'success') {
          var config = {
            type: 'bar',
            data: {
              labels: response.data.data.LgaName,
              datasets: [{
                label: "Revenue",
                data: response.data.data.ThisMonthRev,
                backgroundColor: '#7873CE'
              }]
            },
            options: {
              responsive: true,
              //  function(label){return  '$' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");}
              scales: {
                xAxes: [{
                  //stacked: true,
                  stacked: true,
                  ticks: {
                    beginAtZero: true,
                    autoSkip: false,
                    maxRotation: 45,
                    minRotation: 45
                  }
                }],
                yAxes: [{
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
          if (_this4.chartInit5) _this4.chartInit5.destroy();
          _this4.chartInit5 = new Chart(document.getElementById("chart_4").getContext("2d"), config);
          _this4.chart5 = false;
        }
      })["catch"](function (error) {
        console.log('there was an error. ' + error);
      });
    }
  },
  mounted: function mounted() {
    this.getMetricsData();
    this.getRevenueChart();
    this.getRevenuePointChart();
    this.getLgaChart();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/dashboard/Chairman.vue?vue&type=template&id=5b71033b&":
/*!*********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/dashboard/Chairman.vue?vue&type=template&id=5b71033b& ***!
  \*********************************************************************************************************************************************************************************************************************/
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
        _c("small", [_vm._v(" " + _vm._s(_vm.LgaName) + " LOCAL GOVT. ")]),
        _c("br"),
        _vm._v(" DASHBOARD")
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
                    "₦" +
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
                    _vm._v(
                      "     " +
                        _vm._s(_vm.metrics.no_paid_inv) +
                        " paid invoices"
                    )
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "number" }, [
                  _vm._v(
                    " ₦" +
                      _vm._s(
                        this.$suffix.suffixNotation(
                          _vm.metrics.monthly_unpaid_inv
                        )
                      ) +
                      "\n                            "
                  ),
                  _c("span", { staticClass: "text" }, [
                    _vm._v(
                      "     " +
                        _vm._s(_vm.metrics.no_unpaid_inv) +
                        " unpaid invoices"
                    )
                  ])
                ]),
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
                    _vm._v(
                      _vm._s(_vm.metrics.no_unclear_cheque) +
                        " unclear cheque(s)"
                    )
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
      _c("div", { staticClass: "row clearfix" }, [
        _c(
          "div",
          { staticClass: "col-lg-6 col-md-6 col-sm-6 col-xs-12" },
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
            _vm._m(0)
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
              { attrs: { absolute: _vm.absolute, value: _vm.chart2 } },
              [
                _c("v-progress-circular", {
                  attrs: { indeterminate: "", size: "60" }
                })
              ],
              1
            ),
            _vm._v(" "),
            _vm._m(1)
          ],
          1
        )
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row clearfix" }, [
        _c(
          "div",
          { staticClass: "col-lg-8 col-md-8 col-sm-12 col-xs-12" },
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
            _vm._m(2)
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "col-lg-4 col-md-4 col-sm-12 col-xs-12" },
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
            _c("div", { staticClass: "panel panel-default" }, [
              _c("div", { staticClass: "panel-heading" }, [
                _vm._v("TOP PERFORMERS  ")
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "panel-body" }, [
                _c(
                  "table",
                  {
                    staticClass:
                      "table table-striped table-hover js-basic-example dataTable",
                    attrs: { id: "users_table" }
                  },
                  [
                    _vm._m(3),
                    _vm._v(" "),
                    _c(
                      "tbody",
                      _vm._l(_vm.toppers, function(topper) {
                        return _c("tr", [
                          _c("td", [_vm._v(_vm._s(topper.id))]),
                          _vm._v(" "),
                          _c("td", [_vm._v(_vm._s(topper.name))]),
                          _vm._v(" "),
                          _c("td", [
                            _vm._v(
                              _vm._s(
                                new Intl.NumberFormat("en-NG", {
                                  style: "currency",
                                  currency: "NGN"
                                }).format(topper.paid_invoice)
                              )
                            )
                          ])
                        ])
                      }),
                      0
                    )
                  ]
                )
              ])
            ])
          ],
          1
        )
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row clearfix" }, [
        _c(
          "div",
          { staticClass: "col-lg-12 col-md-12 col-sm-12 col-xs-12" },
          [
            _c(
              "v-overlay",
              { attrs: { absolute: _vm.absolute, value: _vm.chart5 } },
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
      ])
    ])
  ])
}
var staticRenderFns = [
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
        _c("canvas", { attrs: { id: "chart_1", height: "210" } })
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "panel panel-default" }, [
      _c("div", { staticClass: "panel-heading" }, [
        _vm._v("DEPARTMENTAL REVENUE ")
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "panel-body" }, [
        _c("canvas", { attrs: { id: "chart_2", height: "210" } })
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "panel panel-default" }, [
      _c("div", { staticClass: "panel-heading" }, [_vm._v(" REVENUE POINTS ")]),
      _vm._v(" "),
      _c("div", { staticClass: "panel-body" }, [
        _c("canvas", { attrs: { id: "bar_chart", height: "170" } })
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [
        _c("th", [_vm._v("#")]),
        _vm._v(" "),
        _c("th", [_vm._v("REVENUE POINT")]),
        _vm._v(" "),
        _c("th", [_vm._v("REVENUE GENERATED")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "panel panel-default" }, [
      _c("div", { staticClass: "panel-heading" }, [
        _vm._v(" COMPARISON OF LOCAL GOVERNMENT ")
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "panel-body" }, [
        _c("canvas", { attrs: { id: "chart_4", height: "110" } })
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/dashboard/Chairman.vue":
/*!********************************************************!*\
  !*** ./resources/js/components/dashboard/Chairman.vue ***!
  \********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Chairman_vue_vue_type_template_id_5b71033b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Chairman.vue?vue&type=template&id=5b71033b& */ "./resources/js/components/dashboard/Chairman.vue?vue&type=template&id=5b71033b&");
/* harmony import */ var _Chairman_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Chairman.vue?vue&type=script&lang=js& */ "./resources/js/components/dashboard/Chairman.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Chairman_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Chairman_vue_vue_type_template_id_5b71033b___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Chairman_vue_vue_type_template_id_5b71033b___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/dashboard/Chairman.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/dashboard/Chairman.vue?vue&type=script&lang=js&":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/dashboard/Chairman.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Chairman_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Chairman.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/dashboard/Chairman.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Chairman_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/dashboard/Chairman.vue?vue&type=template&id=5b71033b&":
/*!***************************************************************************************!*\
  !*** ./resources/js/components/dashboard/Chairman.vue?vue&type=template&id=5b71033b& ***!
  \***************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Chairman_vue_vue_type_template_id_5b71033b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Chairman.vue?vue&type=template&id=5b71033b& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/dashboard/Chairman.vue?vue&type=template&id=5b71033b&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Chairman_vue_vue_type_template_id_5b71033b___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Chairman_vue_vue_type_template_id_5b71033b___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);