(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[6],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/dashboard/Dir-revenue.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/dashboard/Dir-revenue.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************/
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
      absolute: true,
      chartInit: '',
      chartInit1: '',
      chartInit2: '',
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
      revenue_point: {
        thisMonthRev: '',
        prevMonthRev: '',
        revenuepoints: '',
        group: ''
      },
      agent: {
        thisMonthRev: '',
        agentName: ''
      },
      chart2_prevMnthRev: [],
      chart2_thisMnthRev: [],
      chart2_plabel: '',
      chart2_clabel: '',
      chart2_revpt: [],
      toppers: [],
      topper: {
        id: '',
        agentName: '',
        paidInvoice: '',
        revenue: ''
      },
      locale: ''
    };
  },
  methods: {
    getRevenuePointBarChart: function getRevenuePointBarChart() {
      var _this = this;

      axios.get('/dashboard/dir-revenue/revenuepoint').then(function (response) {
        if (response.data.status === 'success') {
          //                                    this.chart2_plabel = response.data.data.prevMnthLabel;
          //                                 this.chart2_clabel = response.data.data.thisMnthLabel;
          //                                    this.chart2_prevMnthRev = response.data.data.PrevMonthRev;
          //                                 this.chart2_thisMnthRev = response.data.data.ThisMonthRev;
          //                                 this.chart2_revpt = response.data.data.RevenuePoints;
          var config = {
            type: 'bar',
            data: {
              labels: response.data.data.RevenuePoints,
              datasets: [{
                label: response.data.data.prevMnthLabel + ' Revenue',
                type: "bar",
                backgroundColor: "#32a7f5",
                data: response.data.data.PrevMonthRevenue
              }, {
                label: response.data.data.thisMnthLabel + ' Revenue',
                type: "bar",
                backgroundColor: "#6c5b7c",
                data: response.data.data.ThisMonthRevenue
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
          if (_this.chartInit1) _this.chartInit.destroy();
          _this.chartInit1 = new Chart(document.getElementById("chart_1").getContext("2d"), config);
          _this.chart1 = false;
          var config = {
            type: 'line',
            data: {
              labels: response.data.data.RevenuePoints,
              datasets: [{
                label: '% change in Revenue',
                borderColor: "#f8981f",
                fillOpacity: .2,
                data: response.data.data.PercChangeInRevenue //      [30, 50, 45, 25, 85, 30, 90]

              }]
            },
            options: {
              // responsive: true,
              scales: {
                xAxes: [{
                  //stacked: true,
                  // stacked: true,
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
                      return value + '%';
                    }
                  }
                }]
              },
              tooltips: {
                callbacks: {
                  label: function label(tooltipItem, data) {
                    return tooltipItem.yLabel.toLocaleString() + '%';
                  }
                }
              }
            }
          };
          if (_this.chartInit2) _this.chartInit.destroy();
          _this.chartInit2 = new Chart(document.getElementById("chart_2").getContext("2d"), config);
          _this.chart2 = false;
        }
      })["catch"](function (error) {
        console.log('there was an error. ' + error);
      });
    },
    getAgentBarChart: function getAgentBarChart() {
      var _this2 = this;

      axios.get('/dashboard/dir-revenue/agent').then(function (response) {
        if (response.data.status === 'success') {
          var config = {
            type: 'bar',
            data: {
              labels: response.data.data.AgentName,
              datasets: [{
                label: "Revenue",
                data: response.data.data.ThisMonthPaidInvoice,
                backgroundColor: '#32a7f5'
              }]
            },
            options: {
              responsive: true,
              scales: {
                xAxes: [{
                  //stacked: true,
                  // stacked: true,
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
          if (_this2.chartInit) _this2.chartInit.destroy();
          var chartInit = new Chart(document.getElementById("agent_chart").getContext("2d"), config);
          _this2.chart3 = false;
          _this2.toppers = response.data.data.Topper;
          _this2.chart4 = false;
        }
      })["catch"](function (error) {
        console.log('there was an error. ' + error);
      });
    }
  },
  mounted: function mounted() {
    var _this3 = this;

    axios.get('/dashboard/dir-revenue/metrics').then(function (response) {
      if (response.data.status === 'success') {
        _this3.metrics.total_business_reg = response.data.data.TotalBusinessReg;
        _this3.metrics.monthly_business_reg = response.data.data.MonthlyBusinessReg;
        _this3.metrics.monthly_revenue = response.data.data.MonthlyRevenue;
        _this3.metrics.yearly_revenue = response.data.data.YearlyRevenue;
        _this3.metrics.monthly_paid_inv = response.data.data.PaidInvoice;
        _this3.metrics.no_paid_inv = response.data.data.CountPaidInv;
        _this3.metrics.monthly_unpaid_inv = response.data.data.UnpaidInvoice;
        _this3.metrics.no_unpaid_inv = response.data.data.CountUnpaidInv;
        _this3.metrics.no_unclear_cheque = response.data.data.CountUnclearCheque;
        _this3.metrics.unclear_cheque = response.data.data.UnclearCheque;
        _this3.metrics.unremitted_fund = response.data.data.UnremittedFund;
        _this3.metrics.agent = response.data.data.Agent;
        _this3.card_1 = _this3.card_2 = _this3.card_3 = _this3.card_4 = false;
      }
    })["catch"](function (error) {
      console.log('there was an error. ' + error);
    });
    this.getRevenuePointBarChart();
    this.getAgentBarChart(); //                        let externalScript = document.createElement('script')
    //            externalScript.setAttribute('src', 'https://d3js.org/d3.v4.min.js')
    //            document.head.appendChild(externalScript)
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/dashboard/Dir-revenue.vue?vue&type=template&id=ff0dd3f4&":
/*!************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/dashboard/Dir-revenue.vue?vue&type=template&id=ff0dd3f4& ***!
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
                _c("i", { staticClass: "number fa fa-tags" }),
                _vm._v(" "),
                _c("div", { staticClass: "text-header" }, [_vm._v("REVENUE")]),
                _vm._v(" "),
                _c("div", { staticClass: "number" }, [
                  _vm._v(
                    "₦" +
                      _vm._s(
                        _vm.$suffix.suffixNotation(_vm.metrics.monthly_revenue)
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
                        _vm.$suffix.suffixNotation(_vm.metrics.yearly_revenue)
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
                _c("i", { staticClass: "number fa fa-tag" }),
                _vm._v(" "),
                _c("div", { staticClass: "text-header" }, [_vm._v("PAYMENT")]),
                _vm._v(" "),
                _c("div", { staticClass: "number" }, [
                  _vm._v(
                    " ₦" +
                      _vm._s(
                        this.$suffix.suffixNotation(
                          _vm.metrics.monthly_paid_inv
                        )
                      ) +
                      "   "
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
                      "  "
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
                    " ₦" +
                      _vm._s(
                        this.$suffix.suffixNotation(_vm.metrics.unclear_cheque)
                      ) +
                      "   "
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
                _c("i", { staticClass: "number fa fa-user" }),
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
          { staticClass: "col-lg-12 col-md-12 col-sm-12 col-xs-12" },
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
            _vm._m(1)
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
              { attrs: { absolute: _vm.absolute, value: _vm.chart2 } },
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
        )
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row clearfix" }, [
        _c(
          "div",
          { staticClass: "col-lg-6 col-md-6 col-sm-12 col-xs-12" },
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
            _vm._m(3)
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "col-lg-6 col-md-6 col-sm-12 col-xs-12" },
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
                _vm._v("TOP PERFORMERS ")
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
                    _vm._m(4),
                    _vm._v(" "),
                    _c(
                      "tbody",
                      _vm._l(_vm.toppers, function(topper) {
                        return _c("tr", { key: topper.agent_id }, [
                          _c("td", [_vm._v(_vm._s(topper.id))]),
                          _vm._v(" "),
                          _c("td", [_vm._v(_vm._s(topper.agentName))]),
                          _vm._v(" "),
                          _c("td", [
                            _vm._v(
                              _vm._s(
                                new Intl.NumberFormat("en-NG", {
                                  style: "currency",
                                  currency: "NGN"
                                }).format(topper.paidInvoice)
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
      _c("small", [_vm._v(" HEAD OF REVENUE")]),
      _c("br"),
      _vm._v("DASHBOARD")
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "panel panel-default" }, [
      _c("div", { staticClass: "panel-heading" }, [_vm._v("REVENUE POINTS ")]),
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
        _vm._v("PERCENTAGE CHANGE IN REVENUE ")
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
      _c("div", { staticClass: "panel-heading" }, [_vm._v(" AGENTS ")]),
      _vm._v(" "),
      _c("div", { staticClass: "panel-body" }, [
        _c("canvas", { attrs: { id: "agent_chart", height: "210" } })
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
        _c("th", [_vm._v("AGENT NAME")]),
        _vm._v(" "),
        _c("th", [_vm._v("REVENUE GNERATED")])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/dashboard/Dir-revenue.vue":
/*!***********************************************************!*\
  !*** ./resources/js/components/dashboard/Dir-revenue.vue ***!
  \***********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Dir_revenue_vue_vue_type_template_id_ff0dd3f4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Dir-revenue.vue?vue&type=template&id=ff0dd3f4& */ "./resources/js/components/dashboard/Dir-revenue.vue?vue&type=template&id=ff0dd3f4&");
/* harmony import */ var _Dir_revenue_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Dir-revenue.vue?vue&type=script&lang=js& */ "./resources/js/components/dashboard/Dir-revenue.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Dir_revenue_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Dir_revenue_vue_vue_type_template_id_ff0dd3f4___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Dir_revenue_vue_vue_type_template_id_ff0dd3f4___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/dashboard/Dir-revenue.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/dashboard/Dir-revenue.vue?vue&type=script&lang=js&":
/*!************************************************************************************!*\
  !*** ./resources/js/components/dashboard/Dir-revenue.vue?vue&type=script&lang=js& ***!
  \************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Dir_revenue_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Dir-revenue.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/dashboard/Dir-revenue.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Dir_revenue_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/dashboard/Dir-revenue.vue?vue&type=template&id=ff0dd3f4&":
/*!******************************************************************************************!*\
  !*** ./resources/js/components/dashboard/Dir-revenue.vue?vue&type=template&id=ff0dd3f4& ***!
  \******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Dir_revenue_vue_vue_type_template_id_ff0dd3f4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Dir-revenue.vue?vue&type=template&id=ff0dd3f4& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/dashboard/Dir-revenue.vue?vue&type=template&id=ff0dd3f4&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Dir_revenue_vue_vue_type_template_id_ff0dd3f4___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Dir_revenue_vue_vue_type_template_id_ff0dd3f4___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);