(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[25],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/revPoint/Revpoints-dashboard.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/revPoint/Revpoints-dashboard.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************/
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
//  import 'bootstrap/dist/css/bootstrap.css';
// import this component



/* harmony default export */ __webpack_exports__["default"] = ({
  name: "RevPts-dashboard",
  components: {
    flatPickr: vue_flatpickr_component__WEBPACK_IMPORTED_MODULE_1___default.a
  },
  data: function data() {
    return {
      chart1: true,
      card_1: true,
      card_2: true,
      card_3: true,
      table_1: true,
      table_2: true,
      absolute: true,
      labelInvoice: '',
      invoice: '',
      labelReceipt: '',
      receipt: '',
      page: 1,
      pageCount: 0,
      itemsPerPage: 10,
      search: '',
      summaryHeaders: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'REVENUE POINT',
        value: 'revptName'
      }, {
        text: 'LGA',
        value: 'lga'
      }, //     { text: 'Potential Revenue', value: 'total' },
      {
        text: 'Revenue Generated',
        value: 'receipt'
      }],
      columns: [{
        label: '#',
        field: 'sn'
      }, {
        label: 'REVENUE POINT',
        field: 'revptName'
      }, {
        label: 'LGA',
        field: 'lga'
      }, //  { label: 'POTENTIAL REVENUE', field: 'total',dataFormat:this.$shared.amountFormat },
      {
        label: 'REVENUE GENERATED',
        field: 'receipt',
        dataFormat: this.$shared.amountFormat
      }],
      ssearch: '',
      sheaders: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'Service Name',
        value: 'serviceName'
      }, {
        text: 'Total Generated',
        value: 'receipt'
      }],
      scolumns: [{
        label: '#',
        field: 'sn'
      }, {
        label: 'Service Name',
        field: 'serviceName'
      }, {
        label: 'Total Generated',
        field: 'receipt'
      }],
      fromDate: '',
      //  new Date(),
      toDate: '',
      //  new Date(),
      //agent_id:'',
      chartName: '',
      getFrom: '',
      getTo: '',
      getLga: '',
      getRevPt: '',
      $labelInvoice: '',
      $labelReceipt: '',
      $receipt: '',
      $invoice: '',
      $lgaName: '',
      config: {
        wrap: true,
        // set wrap to true only when using 'input-group'
        altFormat: 'M j, Y',
        altInput: true,
        dateFormat: 'Y-m-d'
      },
      metrics: {
        unremitted_fund: '',
        paid_invoice: '',
        total_invoice: ''
      },
      lgaChart_name: '',
      lgaChart_data: '',
      lga_id: '',
      revpoint_id: '',
      services: [],
      revpoints: [],
      summary: [],
      lgas: [],
      errors: []
    };
  },
  methods: {
    initPreLoader: function initPreLoader() {
      this.card_1 = this.card_2 = this.card_3 = this.table_1 = true;
    },
    hidePreLoader: function hidePreLoader() {
      this.card_1 = this.card_2 = this.card_3 = this.table_1 = false;
    },
    searchResult: function () {
      var _searchResult = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                //  this.getMetrics();
                this.chart1 = true;
                this.getSummary();
                if (this.lga_id && this.revpoint_id || !this.lga_id && !this.revpoint_id) this.getLastSixMonthRev(); //                   else
                //                       this.getOnlyLga();
                //  this.hidePreLoader();

              case 3:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this);
      }));

      function searchResult() {
        return _searchResult.apply(this, arguments);
      }

      return searchResult;
    }(),
    getSummary: function () {
      var _getSummary = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        var _this = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                this.getFrom = this.fromDate;
                this.getTo = this.toDate;
                this.getLga = this.lga_id;
                this.getRevPt = this.revpoint_id;
                _context2.next = 7;
                return axios.post('/revpoint-dashboard/summary', {
                  'fromDate': this.fromDate,
                  'toDate': this.toDate,
                  'revpoint_id': this.revpoint_id,
                  'lga_id': this.lga_id
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    // this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                    _this.summary = response.data.data.summary; // this.receipt = response.data.data.receipt;

                    _this.services = response.data.data.service;
                    _this.lga_name = response.data.data.lgaName; //   this.labelInvoice =   this.setTotalLabel( 'Total Invoice ', this.getFrom, this.getTo, this.lga_name );
                    //  this.labelReceipt =   this.setTotalLabel( 'Total Receipt ', this.getFrom, this.getTo, this.lga_name );

                    if (_this.getLga && !_this.getRevPt) {
                      _this.chartName = 'Revenue Point Performance';
                      _this.lgaChart_name = response.data.data.crevName;
                      _this.lgaChart_data = response.data.data.creceipt;
                      var config = {
                        type: 'bar',
                        data: {
                          labels: _this.lgaChart_name,
                          datasets: [{
                            label: 'Receipt',
                            type: "bar",
                            backgroundColor: "#32a7f5",
                            data: _this.lgaChart_data
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
                      if (_this.chartInit) _this.chartInit.destroy();
                      _this.chartInit = new Chart(document.getElementById("chart_1").getContext("2d"), config);
                      _this.chart1 = false;
                    }
                  }

                  _this.table_1 = false;
                  _this.table_2 = false; //                            this.fromDate = this.getFrom;
                  //                            this.toDate =this.getTo;
                  //                            this.agent_id = this.getAgent;
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    //console.log(error.response.data.errors['users.name'][0]);
                    _this.errors = error.response.data.errors;
                  } else {
                    console.log('else2');
                  }
                });

              case 7:
                _context2.next = 11;
                break;

              case 9:
                _context2.prev = 9;
                _context2.t0 = _context2["catch"](0);

              case 11:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this, [[0, 9]]);
      }));

      function getSummary() {
        return _getSummary.apply(this, arguments);
      }

      return getSummary;
    }(),
    getLastSixMonthRev: function () {
      var _getLastSixMonthRev = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee3() {
        var _this2 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                _context3.prev = 0;
                _context3.next = 3;
                return axios.post('/revpoint-dashboard/lastSixMonthRev', {
                  'revpoint_id': this.revpoint_id
                }).then(function (response) {
                  //                            this.lgas = response.data.data
                  _this2.chartName = 'Last Six Months Revenue';
                  var config = {
                    type: 'bar',
                    data: {
                      labels: response.data.data.monthName,
                      datasets: [{
                        label: 'Receipt',
                        type: "bar",
                        backgroundColor: "#32a7f5",
                        data: response.data.data.lastSixMonthRev
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
                  _this2.chart1 = false; //                            $('#table2').addClass('hide');
                  //                            $('#table1').removeClass('hide');
                })["catch"](function (error) {
                  console.log(error);
                });

              case 3:
                _context3.next = 8;
                break;

              case 5:
                _context3.prev = 5;
                _context3.t0 = _context3["catch"](0);
                console.log(_context3.t0);

              case 8:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, this, [[0, 5]]);
      }));

      function getLastSixMonthRev() {
        return _getLastSixMonthRev.apply(this, arguments);
      }

      return getLastSixMonthRev;
    }(),
    //
    //            getOnlyLga: async function(){
    //                try{
    //                    this.getFrom = this.fromDate;
    //                    await axios.post('/revpoint-dashboard/onlyLga', {
    //                        'fromDate':this.fromDate,
    //                        'toDate':this.toDate,
    //                        'lga_id':this.lga_id
    //                    })
    //                        .then( response => {
    //
    //
    //                              this.lgaChart_name= response.data.data.revName;
    //                                  this.lgaChart_data= response.data.data.receipt;
    //
    //
    //                            var config = {
    //                                type: 'bar',
    //                                data: {
    //                                    labels: this.lgaChart_name,
    //                                    datasets: [ {
    //                                        label: 'Receipt',
    //                                        type: "bar",
    //                                        backgroundColor: "#32a7f5",
    //                                        data: this.lgaChart_data
    //                                    } ]
    //                                },
    //                                options: {
    //                                    // responsive: true,
    //                                    scales: {
    //                                        xAxes: [{
    //                                            //stacked: true,
    //                                            // stacked: true,
    //                                            ticks: {
    //                                                beginAtZero: true,
    //                                                autoSkip: false,
    //                                                maxRotation: 45,
    //                                                minRotation: 45
    //                                            }
    //                                        }],
    //                                        yAxes: [{
    //                                            ticks: {
    //                                                callback: function(value, index, values) {
    //                                                    return value.toLocaleString("en-NG",{style:"currency", currency:"NGN"});
    //                                                },
    //                                            }
    //                                        }]
    //                                    },
    //                                    tooltips: {
    //                                        callbacks: {
    //                                            label: function(tooltipItem, data) {
    //                                                return tooltipItem.yLabel.toLocaleString("en-NG",{style:"currency", currency:"NGN"});
    //                                            }
    //                                        }
    //                                    }
    //                                }
    //                            }
    //
    //                            if(this.chartInit) this.chartInit.destroy();
    //
    //                            this.chartInit = new Chart(document.getElementById("chart_1").getContext("2d"), config);
    //                            this.chart1 =  false;
    ////                            $('#table2').addClass('hide');
    ////                            $('#table1').removeClass('hide');
    //
    //                        })
    //                        .catch( (error) => {
    //                            console.log(error)
    //                        });
    //                }catch(e){
    //                    console.log(e);
    //                }
    //            },
    //            setTotalLabel(total,from, to, lga){
    //
    //                let date = new Date();
    //
    //
    //                if(lga)
    //                    var lgaLbl = ' for '+lga+ ' LGA';
    //                else   var lgaLbl='';
    //
    //                if(from  && to )
    //                    var  rangeLbl =  ' From ' + from + ' To ' + to + ':';
    //                else if( !from && to)
    //                    var rangeLbl = ' From ' +  new Date(date.getFullYear(),date.getMonth(),2 ).toISOString().substr(0, 10).toString()  + ' To ' + to+':';
    //                else if( from && !to)
    //                    var rangeLbl =  ' From ' +  from  + '  To ' +
    //                        new Date().toISOString().substr(0, 10).toString()  +':';
    //                else   var rangeLbl=' :';
    //
    //
    //                var label = total+lgaLbl+rangeLbl;
    //
    //                return label;
    //  },
    getLgas: function () {
      var _getLgas = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee4() {
        var _this3 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee4$(_context4) {
          while (1) {
            switch (_context4.prev = _context4.next) {
              case 0:
                _context4.prev = 0;
                _context4.next = 3;
                return axios.get("/state/5/lgas").then(function (response) {
                  _this3.lgas = response.data.data;
                })["catch"](function (error) {
                  console.log(error);
                });

              case 3:
                _context4.next = 8;
                break;

              case 5:
                _context4.prev = 5;
                _context4.t0 = _context4["catch"](0);
                console.log(_context4.t0);

              case 8:
              case "end":
                return _context4.stop();
            }
          }
        }, _callee4, null, [[0, 5]]);
      }));

      function getLgas() {
        return _getLgas.apply(this, arguments);
      }

      return getLgas;
    }(),
    getRevPoints: function () {
      var _getRevPoints = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee5() {
        var _this4 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee5$(_context5) {
          while (1) {
            switch (_context5.prev = _context5.next) {
              case 0:
                _context5.prev = 0;
                _context5.next = 3;
                return axios.post('/revpoint/lga', {
                  'lga_id': this.lga_id
                }).then(function (response) {
                  //console.log(response.data.data);
                  _this4.revpoints = response.data.data;
                })["catch"](function (error) {
                  console.log(error);
                });

              case 3:
                _context5.next = 8;
                break;

              case 5:
                _context5.prev = 5;
                _context5.t0 = _context5["catch"](0);
                console.log(_context5.t0);

              case 8:
              case "end":
                return _context5.stop();
            }
          }
        }, _callee5, this, [[0, 5]]);
      }));

      function getRevPoints() {
        return _getRevPoints.apply(this, arguments);
      }

      return getRevPoints;
    }()
  },
  mounted: function mounted() {
    this.getLgas(); //this.getMetrics();

    this.getSummary();
    this.getLastSixMonthRev();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/revPoint/Revpoints-dashboard.vue?vue&type=template&id=0037ae96&":
/*!*******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/revPoint/Revpoints-dashboard.vue?vue&type=template&id=0037ae96& ***!
  \*******************************************************************************************************************************************************************************************************************************/
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
              _c("span", { staticClass: "nav-label" }, [_vm._v("Rev Pro")])
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
      _c("div", { staticClass: "panel panel-default" }, [
        _c("div", { staticClass: "panel-heading" }, [_vm._v("Filter Result ")]),
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
                            value: _vm.lga_id,
                            expression: "lga_id"
                          }
                        ],
                        staticClass: "form-control",
                        on: {
                          change: [
                            function($event) {
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
                            },
                            _vm.getRevPoints
                          ]
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
                    ),
                    _vm._v(" "),
                    _vm.errors["lga_id"]
                      ? _c("label", { staticClass: "error" }, [
                          _vm._v(_vm._s(_vm.errors["agent_id"][0]))
                        ])
                      : _vm._e()
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
                            value: _vm.revpoint_id,
                            expression: "revpoint_id"
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
                            _vm.revpoint_id = $event.target.multiple
                              ? $$selectedVal
                              : $$selectedVal[0]
                          }
                        }
                      },
                      [
                        _c("option", { attrs: { value: "" } }, [
                          _vm._v("Select Rev Points")
                        ]),
                        _vm._v(" "),
                        _vm._l(_vm.revpoints, function(revpoint) {
                          return _c(
                            "option",
                            {
                              key: revpoint.id,
                              domProps: { value: revpoint.id }
                            },
                            [
                              _vm._v(
                                "\n                                    " +
                                  _vm._s(revpoint.name) +
                                  "\n                                "
                              )
                            ]
                          )
                        })
                      ],
                      2
                    ),
                    _vm._v(" "),
                    _vm.errors["revpoint_id"]
                      ? _c("label", { staticClass: "error" }, [
                          _vm._v(_vm._s(_vm.errors["agent_id"][0]))
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
                _c(
                  "div",
                  { staticClass: "col-lg-2 col-md-2 col-sm-6 col-xs-12" },
                  [
                    _c("div", { staticClass: "input-group-btn" }, [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-primary btn-md",
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
      _c("div", { staticClass: "row clearfix", attrs: { id: "Chart" } }, [
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
            _c("div", { staticClass: "panel panel-default" }, [
              _c("div", { staticClass: "panel-heading" }, [
                _vm._v(_vm._s(this.chartName))
              ]),
              _vm._v(" "),
              _vm._m(3)
            ])
          ],
          1
        )
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row clearfix", attrs: { id: "table" } }, [
        _c("div", { staticClass: "col-lg-12 col-md-12 col-sm-6 col-xs-12" }, [
          _c("div", { staticClass: "panel panel-default" }, [
            _c("div", { staticClass: "panel-heading" }, [
              _vm._v("Collection Summary ")
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
                          "\n                                  \n                                "
                        ),
                        _c(
                          "vue-excel-xlsx",
                          {
                            attrs: {
                              data: this.summary,
                              columns: _vm.columns,
                              filename: "revenuepoint",
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
                    headers: this.summaryHeaders,
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
                      key: "item.total",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                new Intl.NumberFormat("en-NG", {
                                  style: "currency",
                                  currency: "NGN"
                                }).format(item.total)
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
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row clearfix", attrs: { id: "table3" } }, [
        _c("div", { staticClass: "col-lg-12 col-md-12 col-sm-6 col-xs-12" }, [
          _c("div", { staticClass: "panel panel-default" }, [
            _c("div", { staticClass: "panel-heading" }, [
              _vm._v(" Collection per service per revenue point")
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
                          "\n                                   \n                                "
                        ),
                        _c(
                          "vue-excel-xlsx",
                          {
                            attrs: {
                              data: this.services,
                              columns: _vm.scolumns,
                              filename: "ServiceData",
                              sheetname: "servicesData"
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
                      { attrs: { absolute: _vm.absolute, value: _vm.table_2 } },
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
                    headers: this.sheaders,
                    items: this.services,
                    search: _vm.ssearch,
                    "items-per-page": 10
                  },
                  scopedSlots: _vm._u([
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
                    }
                  ])
                })
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
      _c("small", [_vm._v(" Revenue Point Management")]),
      _c("br"),
      _vm._v("REVENUE POINT DASHBOARD")
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
    return _c("div", { staticClass: "panel-body" }, [
      _c("canvas", { attrs: { id: "chart_1", height: "100" } })
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/revPoint/Revpoints-dashboard.vue":
/*!******************************************************************!*\
  !*** ./resources/js/components/revPoint/Revpoints-dashboard.vue ***!
  \******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Revpoints_dashboard_vue_vue_type_template_id_0037ae96___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Revpoints-dashboard.vue?vue&type=template&id=0037ae96& */ "./resources/js/components/revPoint/Revpoints-dashboard.vue?vue&type=template&id=0037ae96&");
/* harmony import */ var _Revpoints_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Revpoints-dashboard.vue?vue&type=script&lang=js& */ "./resources/js/components/revPoint/Revpoints-dashboard.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Revpoints_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Revpoints_dashboard_vue_vue_type_template_id_0037ae96___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Revpoints_dashboard_vue_vue_type_template_id_0037ae96___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/revPoint/Revpoints-dashboard.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/revPoint/Revpoints-dashboard.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/components/revPoint/Revpoints-dashboard.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Revpoints_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Revpoints-dashboard.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/revPoint/Revpoints-dashboard.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Revpoints_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/revPoint/Revpoints-dashboard.vue?vue&type=template&id=0037ae96&":
/*!*************************************************************************************************!*\
  !*** ./resources/js/components/revPoint/Revpoints-dashboard.vue?vue&type=template&id=0037ae96& ***!
  \*************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Revpoints_dashboard_vue_vue_type_template_id_0037ae96___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Revpoints-dashboard.vue?vue&type=template&id=0037ae96& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/revPoint/Revpoints-dashboard.vue?vue&type=template&id=0037ae96&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Revpoints_dashboard_vue_vue_type_template_id_0037ae96___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Revpoints_dashboard_vue_vue_type_template_id_0037ae96___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);