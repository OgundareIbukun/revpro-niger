(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[2],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/agent/Agent-dashboard.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/agent/Agent-dashboard.vue?vue&type=script&lang=js& ***!
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  name: "Agent-dashboard",
  created: function created() {},
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
      table_3: true,
      table_4: false,
      table_5: true,
      absolute: true,
      page: 1,
      pageCount: 0,
      itemsPerPage: 10,
      search: '',
      summaryHeaders: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'Service Name',
        value: 'serviceName'
      }, {
        text: 'Revenue Generated',
        value: 'total'
      }, {
        text: 'Single & Bulk Payment',
        value: 'bulkSingle'
      }, {
        text: 'Quick Print',
        value: 'quickPrint'
      }],
      // excel
      summaryColumns: [{
        label: '#',
        field: 'sn'
      }, {
        label: 'Service Name',
        field: 'serviceName'
      }, {
        label: 'Potential Revenue',
        field: 'total',
        dataFormat: this.$shared.amountFormat
      }, {
        label: 'Single & Bulk Payment',
        field: 'bulkSingle',
        dataFormat: this.$shared.amountFormat
      }, {
        label: 'Quick Print',
        field: 'quickPrint',
        dataFormat: this.$shared.amountFormat
      }],
      pagePayer: 1,
      pageCountPayer: 0,
      itemsPerPagePayer: 10,
      searchPayer: '',
      idPayerHeaders: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'Payer Name',
        value: 'name'
      }, {
        text: 'Service Name',
        value: 'serviceName'
      }, {
        text: this.$shared.irs + ' ID',
        value: 'birsId'
      }, {
        text: 'Txn Ref',
        value: 'txnRef'
      }, {
        text: 'Amount',
        value: 'amount'
      }, {
        text: 'LGA',
        value: 'lgaName'
      }, {
        text: 'Revenue Point',
        value: 'revPointName'
      }, {
        text: 'Status',
        value: 'status'
      }],
      BSColumns: [{
        label: '#',
        field: 'sn'
      }, {
        label: 'PAYERS NAME',
        field: 'name'
      }, {
        label: 'SERVICE NAME',
        field: 'serviceName'
      }, {
        label: this.$shared.irs + ' ID',
        field: 'birsId'
      }, {
        label: 'TXN REF',
        field: 'txnRef'
      }, {
        label: 'AMOUNT',
        field: 'amount',
        dataFormat: this.$shared.amountFormat
      }, {
        label: 'LGA',
        field: 'lgaName'
      }, {
        label: 'REVENUE POINT',
        field: 'revPointName'
      }, {
        label: 'STATUS',
        field: 'status'
      }],
      pageCollection: 1,
      pageCountCollection: 0,
      itemsPerPageCollection: 10,
      searchCollection: '',
      //                  if( this.$roles.user_role === this.$roles.super_admin ||  this.$roles.user_role === this.$roles.admin){
      //
      //                  }
      //                   else {
      //
      //
      //            }
      collectionHeaders: [{
        text: '#',
        value: 'sn',
        show: true
      }, {
        text: 'Agent Name',
        value: 'agentName',
        show: true
      }, {
        text: 'LGA',
        value: 'lgaName',
        show: true
      }, {
        text: 'Potential Revenue',
        value: 'totalInvoice',
        show: true
      }, {
        text: 'Revenue Generated',
        value: 'totalReceipt',
        show: true
      }, {
        text: 'Remitted',
        value: 'remitted',
        show: true
      } //   v-can($roles.user_role ===  $roles.super_admin || $roles.user_role === $roles.admin)
      //                 { text: 'Unremitted Cash', value: 'unremitted', show:false },
      ],
      collectionColumns: [{
        label: '#',
        field: 'sn'
      }, {
        label: 'AGENTS NAME',
        field: 'agentName'
      }, {
        label: 'LGA',
        field: 'lgaName'
      }, {
        label: 'POTENTIAL REVENUE',
        field: 'totalInvoice',
        dataFormat: this.$shared.amountFormat
      }, {
        label: 'REVENUE GENERATED',
        field: 'totalReceipt',
        dataFormat: this.$shared.amountFormat
      }, {
        label: 'REMITTED',
        field: 'remitted',
        dataFormat: this.$shared.amountFormat
      }, {
        label: 'PRESENTLY UNREMITTED CASH',
        field: 'unremitted',
        dataFormat: this.$shared.amountFormat
      }],
      pageRemit: 1,
      pageCountRemit: 0,
      itemsPerPageRemit: 50,
      searchRemit: '',
      remitHeaders: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'Amount',
        value: 'amount'
      }, {
        text: 'Txn Ref',
        value: 'txn_ref'
      }, {
        text: 'Payment Channel',
        value: 'payment_type'
      }, {
        text: 'Created Date',
        value: 'created_date'
      }, {
        text: 'Payment Date',
        value: 'payment_date'
      }, {
        text: 'Payment Status',
        value: 'status'
      }],
      pageRemit1: 1,
      pageCountRemit1: 0,
      itemsPerPageRemit1: 10,
      searchRemit1: '',
      remit1Headers: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'Agent Name',
        value: 'agent_name'
      }, {
        text: 'Amount',
        value: 'amount'
      }, {
        text: 'Txn Ref',
        value: 'txn_ref'
      }, {
        text: 'Payment Channel',
        value: 'payment_type'
      }, {
        text: 'Created Date',
        value: 'created_date'
      }, {
        text: 'Payment Date',
        value: 'payment_date'
      }, {
        text: 'Payment Status',
        value: 'status'
      }],
      remitColumns: [{
        label: '#',
        field: 'sn'
      }, {
        label: 'AGENT NAME',
        field: 'agent_name'
      }, {
        label: 'AMOUNT',
        field: 'amount',
        dataFormat: this.$shared.amountFormat
      }, {
        label: 'TXN REF',
        field: 'txn_ref'
      }, {
        label: 'PAYMENT CHANNEL',
        field: 'payment_type'
      }, {
        label: 'CREATED DATE',
        field: 'created_date',
        dataFormat: this.$shared.createdDateFormat
      }, {
        label: 'PAYMENT DATE',
        field: 'payment_date',
        dataFormat: this.$shared.paymentDateFormat
      }, {
        label: 'PAYMENT STATUS',
        field: 'status'
      }],
      fromDate: '',
      //  new Date(),
      toDate: '',
      //  new Date(),
      agent_id: '',
      agent_name: '',
      lga_name: '',
      getFrom: '',
      getTo: '',
      getAgent: '',
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
      lga_id: '',
      agents: [],
      summary: [],
      identifiedPayer: [],
      collection: [],
      remits: [],
      allremits: [],
      lgas: [],
      errors: [],
      chartInit: '',
      lastSixMonthRev: '',
      monthName: ''
    };
  },
  methods: {
    initPreLoader: function initPreLoader() {
      this.card_1 = this.card_2 = this.card_3 = this.table_1 = this.table_2 = this.table_3 = this.table_4 = true;
    },
    hidePreLoader: function hidePreLoader() {
      this.card_1 = this.card_2 = this.card_3 = this.table_1 = this.table_2 = this.table_3 = false;
    },
    searchResult: function () {
      var _searchResult = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                this.chart1 = true;
                this.getMetrics();
                this.getSummary();
                this.getBulkSinglePayment();

                if (this.agent_id == 'all' || this.agent_id == '' || this.lga_id == '') {
                  this.table_4 = false;
                  $('#remits').addClass('hide');
                  this.getCollection();
                  this.agent_name = '';
                  this.lga_name = '';
                  this.table_5 = true;
                  $('#allremits').removeClass('hide');
                  this.getAllAgentRemittance();
                  this.getLastSixMonthRev();
                } else {
                  this.table_3 = false;
                  $('#collection').addClass('hide');
                  this.table_4 = true;
                  $('#remits').removeClass('hide');
                  this.getRemittance();
                  $('#allremits').addClass('hide');
                  this.getLastSixMonthRev();
                } //  this.hidePreLoader();


              case 5:
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
    getMetrics: function () {
      var _getMetrics = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        var _this = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                this.getFrom = this.fromDate;
                this.getTo = this.toDate;
                this.getAgent = this.agent_id;
                _context2.next = 6;
                return axios.post('/agent-dashboard/metrics', {
                  'fromDate': this.fromDate,
                  'toDate': this.toDate,
                  'agent_id': this.agent_id,
                  'lga_id': this.lga_id
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    // this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                    _this.metrics.paid_invoice = response.data.data.paid_invoice;
                    _this.metrics.total_invoice = response.data.data.total_invoice;
                    _this.metrics.unremitted_fund = response.data.data.unremitted_fund; //  this.invoices = response.data.data.invoice;
                  }

                  _this.card_1 = _this.card_2 = _this.card_3 = false;
                  _this.fromDate = _this.getFrom;
                  _this.toDate = _this.getTo;
                  _this.agent_id = _this.getAgent;
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    //console.log(error.response.data.errors['users.name'][0]);
                    _this.errors = error.response.data.errors;
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

      function getMetrics() {
        return _getMetrics.apply(this, arguments);
      }

      return getMetrics;
    }(),
    getSummary: function () {
      var _getSummary = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee3() {
        var _this2 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                _context3.prev = 0;
                this.getFrom = this.fromDate;
                this.getTo = this.toDate;
                this.getAgent = this.agent_id;
                _context3.next = 6;
                return axios.post('/agent-dashboard/summary', {
                  'fromDate': this.fromDate,
                  'toDate': this.toDate,
                  'agent_id': this.agent_id,
                  'lga_id': this.lga_id
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    // this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                    _this2.summary = response.data.data.summary;
                  }

                  _this2.table_1 = false; //                            this.fromDate = this.getFrom;
                  //                            this.toDate =this.getTo;
                  //                            this.agent_id = this.getAgent;
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
                _context3.next = 10;
                break;

              case 8:
                _context3.prev = 8;
                _context3.t0 = _context3["catch"](0);

              case 10:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, this, [[0, 8]]);
      }));

      function getSummary() {
        return _getSummary.apply(this, arguments);
      }

      return getSummary;
    }(),
    getBulkSinglePayment: function () {
      var _getBulkSinglePayment = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee4() {
        var _this3 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee4$(_context4) {
          while (1) {
            switch (_context4.prev = _context4.next) {
              case 0:
                _context4.prev = 0;
                this.getFrom = this.fromDate;
                this.getTo = this.toDate;
                this.getAgent = this.agent_id;
                _context4.next = 6;
                return axios.post('/agent-dashboard/bulkSinglePayment', {
                  'fromDate': this.fromDate,
                  'toDate': this.toDate,
                  'agent_id': this.agent_id,
                  'lga_id': this.lga_id
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    // this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                    _this3.identifiedPayer = response.data.data.identifiedPayer;
                  }

                  _this3.table_2 = false; //                            this.fromDate = this.getFrom;
                  //                            this.toDate =this.getTo;
                  //                            this.agent_id = this.getAgent;
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    //console.log(error.response.data.errors['users.name'][0]);
                    _this3.errors = error.response.data.errors;
                  } else {
                    console.log('else2');
                  }
                });

              case 6:
                _context4.next = 10;
                break;

              case 8:
                _context4.prev = 8;
                _context4.t0 = _context4["catch"](0);

              case 10:
              case "end":
                return _context4.stop();
            }
          }
        }, _callee4, this, [[0, 8]]);
      }));

      function getBulkSinglePayment() {
        return _getBulkSinglePayment.apply(this, arguments);
      }

      return getBulkSinglePayment;
    }(),
    getCollection: function () {
      var _getCollection = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee5() {
        var _this4 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee5$(_context5) {
          while (1) {
            switch (_context5.prev = _context5.next) {
              case 0:
                _context5.prev = 0;
                this.getFrom = this.fromDate;
                this.getTo = this.toDate;
                this.getAgent = this.agent_id;
                _context5.next = 6;
                return axios.post('/agent-dashboard/collection', {
                  'fromDate': this.fromDate,
                  'toDate': this.toDate,
                  'agent_id': this.agent_id,
                  'lga_id': this.lga_id
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    _this4.collection = response.data.data.collection;
                  }

                  _this4.table_3 = false;
                  $('#collection').removeClass('hide'); //                            this.fromDate = this.getFrom;
                  //                            this.toDate =this.getTo;
                  //                            this.agent_id = this.getAgent;
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    //console.log(error.response.data.errors['users.name'][0]);
                    _this4.errors = error.response.data.errors;
                  } else {
                    console.log('else2');
                  }
                });

              case 6:
                _context5.next = 10;
                break;

              case 8:
                _context5.prev = 8;
                _context5.t0 = _context5["catch"](0);

              case 10:
              case "end":
                return _context5.stop();
            }
          }
        }, _callee5, this, [[0, 8]]);
      }));

      function getCollection() {
        return _getCollection.apply(this, arguments);
      }

      return getCollection;
    }(),
    getRemittance: function () {
      var _getRemittance = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee6() {
        var _this5 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee6$(_context6) {
          while (1) {
            switch (_context6.prev = _context6.next) {
              case 0:
                _context6.prev = 0;
                this.getFrom = this.fromDate;
                this.getTo = this.toDate;
                this.getAgent = this.agent_id;
                this.agent_name = '';
                this.lga_name = '';
                _context6.next = 8;
                return axios.post('/agent-dashboard/remittance', {
                  'fromDate': this.fromDate,
                  'toDate': this.toDate,
                  'agent_id': this.agent_id,
                  'lga_id': this.lga_id
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    // this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                    _this5.remits = response.data.data.remit;
                    _this5.agent_name = response.data.data.agent_data.agent_name;
                    _this5.lga_name = response.data.data.agent_data.lga_name;
                  }

                  _this5.table_4 = false; //                            this.fromDate = this.getFrom;
                  //                            this.toDate =this.getTo;
                  //                            this.agent_id = this.getAgent;
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    //console.log(error.response.data.errors['users.name'][0]);
                    _this5.errors = error.response.data.errors;
                  } else {
                    console.log('else2');
                  }
                });

              case 8:
                _context6.next = 12;
                break;

              case 10:
                _context6.prev = 10;
                _context6.t0 = _context6["catch"](0);

              case 12:
              case "end":
                return _context6.stop();
            }
          }
        }, _callee6, this, [[0, 10]]);
      }));

      function getRemittance() {
        return _getRemittance.apply(this, arguments);
      }

      return getRemittance;
    }(),
    getAllAgentRemittance: function () {
      var _getAllAgentRemittance = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee7() {
        var _this6 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee7$(_context7) {
          while (1) {
            switch (_context7.prev = _context7.next) {
              case 0:
                _context7.prev = 0;
                this.getFrom = this.fromDate;
                this.getTo = this.toDate;
                this.getAgent = this.agent_id;
                _context7.next = 6;
                return axios.post('/agent-dashboard/allremittance', {
                  'fromDate': this.fromDate,
                  'toDate': this.toDate,
                  //  'agent_id':this.agent_id,
                  'lga_id': this.lga_id
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    // this.metrics.unpaid_invoice = response.data.data.unpaid_invoice;
                    _this6.allremits = response.data.data.remit;
                  }

                  _this6.table_5 = false; //                            this.fromDate = this.getFrom;
                  //                            this.toDate =this.getTo;
                  //                            this.agent_id = this.getAgent;
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    //console.log(error.response.data.errors['users.name'][0]);
                    _this6.errors = error.response.data.errors;
                  } else {
                    console.log('else2');
                  }
                });

              case 6:
                _context7.next = 10;
                break;

              case 8:
                _context7.prev = 8;
                _context7.t0 = _context7["catch"](0);

              case 10:
              case "end":
                return _context7.stop();
            }
          }
        }, _callee7, this, [[0, 8]]);
      }));

      function getAllAgentRemittance() {
        return _getAllAgentRemittance.apply(this, arguments);
      }

      return getAllAgentRemittance;
    }(),
    getAgents: function () {
      var _getAgents = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee8() {
        var _this7 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee8$(_context8) {
          while (1) {
            switch (_context8.prev = _context8.next) {
              case 0:
                _context8.prev = 0;
                _context8.next = 3;
                return axios.get('/agent').then(function (response) {
                  //console.log(response.data.data);
                  _this7.agents = response.data.data;
                })["catch"](function (error) {
                  console.log(error);
                });

              case 3:
                _context8.next = 8;
                break;

              case 5:
                _context8.prev = 5;
                _context8.t0 = _context8["catch"](0);
                console.log(_context8.t0);

              case 8:
              case "end":
                return _context8.stop();
            }
          }
        }, _callee8, null, [[0, 5]]);
      }));

      function getAgents() {
        return _getAgents.apply(this, arguments);
      }

      return getAgents;
    }(),
    getFilteredAgents: function () {
      var _getFilteredAgents = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee9() {
        var _this8 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee9$(_context9) {
          while (1) {
            switch (_context9.prev = _context9.next) {
              case 0:
                _context9.prev = 0;
                _context9.next = 3;
                return axios.post('/agents/lga', {
                  'lga_id': this.lga_id
                }).then(function (response) {
                  //console.log(response.data.data);
                  _this8.agents = response.data.data;
                })["catch"](function (error) {
                  console.log(error);
                });

              case 3:
                _context9.next = 8;
                break;

              case 5:
                _context9.prev = 5;
                _context9.t0 = _context9["catch"](0);
                console.log(_context9.t0);

              case 8:
              case "end":
                return _context9.stop();
            }
          }
        }, _callee9, this, [[0, 5]]);
      }));

      function getFilteredAgents() {
        return _getFilteredAgents.apply(this, arguments);
      }

      return getFilteredAgents;
    }(),
    getLgas: function () {
      var _getLgas = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee10() {
        var _this9 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee10$(_context10) {
          while (1) {
            switch (_context10.prev = _context10.next) {
              case 0:
                _context10.prev = 0;
                _context10.next = 3;
                return axios.get("/state/".concat(this.$state_id, "/lgas")).then(function (response) {
                  _this9.lgas = response.data.data;
                })["catch"](function (error) {
                  console.log(error);
                });

              case 3:
                _context10.next = 8;
                break;

              case 5:
                _context10.prev = 5;
                _context10.t0 = _context10["catch"](0);
                console.log(_context10.t0);

              case 8:
              case "end":
                return _context10.stop();
            }
          }
        }, _callee10, this, [[0, 5]]);
      }));

      function getLgas() {
        return _getLgas.apply(this, arguments);
      }

      return getLgas;
    }(),
    getLastSixMonthRev: function () {
      var _getLastSixMonthRev = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee11() {
        var _this10 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee11$(_context11) {
          while (1) {
            switch (_context11.prev = _context11.next) {
              case 0:
                _context11.prev = 0;
                _context11.next = 3;
                return axios.post('/agent-dashboard/lastSixMonthRev', {
                  'agent_id': this.agent_id,
                  'lga_id': this.lga_id
                }).then(function (response) {
                  _this10.monthName = response.data.data.monthName;
                  _this10.lastSixMonthRev = response.data.data.lastSixMonthRev;
                  var config = {
                    type: 'line',
                    data: {
                      labels: _this10.monthName,
                      datasets: [{
                        label: 'Revenue',
                        type: "line",
                        borderline: "#32a7f5",
                        backgroundColor: "#32a7f5",
                        data: _this10.lastSixMonthRev
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
                  if (_this10.chartInit) _this10.chartInit.destroy();
                  _this10.chartInit = new Chart(document.getElementById("chart_1").getContext("2d"), config);
                  _this10.chart1 = false; //                            $('#table2').addClass('hide');
                  //                            $('#table1').removeClass('hide');
                })["catch"](function (error) {
                  console.log(error);
                });

              case 3:
                _context11.next = 8;
                break;

              case 5:
                _context11.prev = 5;
                _context11.t0 = _context11["catch"](0);
                console.log(_context11.t0);

              case 8:
              case "end":
                return _context11.stop();
            }
          }
        }, _callee11, this, [[0, 5]]);
      }));

      function getLastSixMonthRev() {
        return _getLastSixMonthRev.apply(this, arguments);
      }

      return getLastSixMonthRev;
    }()
  },
  mounted: function mounted() {
    this.getLgas();
    this.getMetrics();
    this.getSummary();
    this.getBulkSinglePayment();
    this.getCollection();
    this.getAllAgentRemittance();
    this.getLastSixMonthRev(); //   this.hidePreLoader();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/agent/Agent-dashboard.vue?vue&type=template&id=3f121867&":
/*!************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/agent/Agent-dashboard.vue?vue&type=template&id=3f121867& ***!
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
      _c("h1", [
        _c("small", [_vm._v(" " + _vm._s(_vm.lga_name))]),
        _c("br"),
        _vm._v(_vm._s(_vm.agent_name))
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
        _c(
          "div",
          {
            staticClass: "col-lg-3 col-md-3 col-sm-6 col-xs-12",
            attrs: { id: "metrics" }
          },
          [
            _c(
              "div",
              {
                staticClass:
                  "info-box infobox-type-5 hover-expand-effect aqua-mix",
                staticStyle: { height: "200px" }
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
                _c(
                  "div",
                  {
                    staticClass: "content",
                    staticStyle: { "padding-left": "15%", "padding-top": "12%" }
                  },
                  [
                    _c("i", { staticClass: "number fa fa-tag" }),
                    _vm._v(" "),
                    _c("div", { staticClass: "text" }, [
                      _vm._v(" Potential Revenue")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "number" }, [
                      _vm._v(
                        " ₦" +
                          _vm._s(
                            this.$shared.suffixNotation(
                              _vm.metrics.total_invoice
                            )
                          ) +
                          "\n                        "
                      )
                    ])
                  ]
                )
              ],
              1
            )
          ]
        ),
        _vm._v(" "),
        _c("div", { staticClass: "col-lg-3 col-md-3 col-sm-6 col-xs-12" }, [
          _c(
            "div",
            {
              staticClass:
                "info-box infobox-type-5 hover-expand-effect blue-mix",
              staticStyle: { height: "200px" }
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
              _c(
                "div",
                {
                  staticClass: "content",
                  staticStyle: { "padding-left": "15%", "padding-top": "12%" }
                },
                [
                  _c("i", { staticClass: "number fa fa-tags" }),
                  _vm._v(" "),
                  _c("div", { staticClass: "text" }, [
                    _vm._v(" Total Generated")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "number" }, [
                    _vm._v(
                      " ₦" +
                        _vm._s(
                          this.$shared.suffixNotation(_vm.metrics.paid_invoice)
                        ) +
                        "\n                        "
                    )
                  ])
                ]
              )
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
                "info-box infobox-type-5 hover-expand-effect orange-mix",
              staticStyle: { height: "200px" }
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
              _c(
                "div",
                {
                  staticClass: "content",
                  staticStyle: { "padding-left": "15%", "padding-top": "12%" }
                },
                [
                  _c("i", { staticClass: "number fa fa-gg" }),
                  _vm._v(" "),
                  _c("div", { staticClass: "text " }, [
                    _vm._v("Unremitted Cash")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "number" }, [
                    _vm._v(
                      " ₦" +
                        _vm._s(
                          this.$shared.suffixNotation(
                            _vm.metrics.unremitted_fund
                          )
                        ) +
                        "\n                        "
                    )
                  ])
                ]
              )
            ],
            1
          )
        ])
      ]),
      _vm._v(" "),
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
                            _vm.getFilteredAgents
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
                          _vm._v(_vm._s(_vm.errors["lga_id"][0]))
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
                            value: _vm.agent_id,
                            expression: "agent_id"
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
                            _vm.agent_id = $event.target.multiple
                              ? $$selectedVal
                              : $$selectedVal[0]
                          }
                        }
                      },
                      [
                        _c("option", { attrs: { value: "" } }, [
                          _vm._v("Select Agent")
                        ]),
                        _vm._v(" "),
                        _vm._l(_vm.agents, function(agent) {
                          return _c(
                            "option",
                            { key: agent.id, domProps: { value: agent.id } },
                            [
                              _vm._v(
                                "\n                                    " +
                                  _vm._s(agent.name) +
                                  "\n                                "
                              )
                            ]
                          )
                        })
                      ],
                      2
                    ),
                    _vm._v(" "),
                    _vm.errors["agent_id"]
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
      _c("div", { staticClass: "row clearfix", attrs: { id: "agentChart" } }, [
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
            _vm._m(3)
          ],
          1
        )
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row clearfix", attrs: { id: "table" } }, [
        _c("div", { staticClass: "col-lg-12 col-md-12 col-sm-6 col-xs-12" }, [
          _c("div", { staticClass: "panel panel-default" }, [
            _c("div", { staticClass: "panel-heading" }, [
              _vm._v("Collection Summary Per Service ")
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
                          "\n\n                                       \n                                    "
                        ),
                        _c(
                          "vue-excel-xlsx",
                          {
                            attrs: {
                              data: this.summary,
                              columns: _vm.summaryColumns,
                              filename: "Summary",
                              sheetname: "sheetname"
                            }
                          },
                          [_c("v-btn", [_vm._v(" Excel ")])],
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
                      key: "item.bulkSingle",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                new Intl.NumberFormat("en-NG", {
                                  style: "currency",
                                  currency: "NGN"
                                }).format(item.bulkSingle)
                              )
                            )
                          ])
                        ]
                      }
                    },
                    {
                      key: "item.quickPrint",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                new Intl.NumberFormat("en-NG", {
                                  style: "currency",
                                  currency: "NGN"
                                }).format(item.quickPrint)
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
      _c("div", { staticClass: "row clearfix", attrs: { id: "table2" } }, [
        _c("div", { staticClass: "col-lg-12 col-md-12 col-sm-6 col-xs-12" }, [
          _c("div", { staticClass: "panel panel-default" }, [
            _c("div", { staticClass: "panel-heading" }, [
              _vm._v("Single & Bulk Payments ")
            ]),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "panel-body" },
              [
                _c(
                  "v-overlay",
                  { attrs: { absolute: _vm.absolute, value: _vm.table_2 } },
                  [
                    _c("v-progress-circular", {
                      attrs: { indeterminate: "", size: "60" }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-card-title",
                  [
                    _c(
                      "v-spacer",
                      [
                        _vm._v(
                          "\n\n                                       \n                                    "
                        ),
                        _c(
                          "vue-excel-xlsx",
                          {
                            attrs: {
                              data: this.identifiedPayer,
                              columns: _vm.BSColumns,
                              filename: "BulkAndSinglePayment",
                              sheetname: "BulkAndSingleSheet"
                            }
                          },
                          [_c("v-btn", [_vm._v(" Excel")])],
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
                        value: _vm.searchPayer,
                        callback: function($$v) {
                          _vm.searchPayer = $$v
                        },
                        expression: "searchPayer"
                      }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c("v-data-table", {
                  staticClass: "elevation-1",
                  attrs: {
                    headers: this.idPayerHeaders,
                    items: this.identifiedPayer,
                    search: _vm.searchPayer,
                    page: _vm.pagePayer,
                    "items-per-page": _vm.itemsPerPagePayer,
                    "hide-default-footer": ""
                  },
                  on: {
                    "update:page": function($event) {
                      _vm.pagePayer = $event
                    },
                    "page-count": function($event) {
                      _vm.pageCountPayer = $event
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
                        length: _vm.pageCountPayer
                      },
                      model: {
                        value: _vm.pagePayer,
                        callback: function($$v) {
                          _vm.pagePayer = $$v
                        },
                        expression: "pagePayer"
                      }
                    }),
                    _vm._v(" "),
                    _c("v-text-field", {
                      attrs: {
                        value: _vm.itemsPerPagePayer,
                        label: "Items per page",
                        type: "number",
                        min: "-1",
                        max: "15"
                      },
                      on: {
                        input: function($event) {
                          _vm.itemsPerPagePayer = parseInt($event, 10)
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
      _c(
        "div",
        { staticClass: "row clearfix hide", attrs: { id: "collection" } },
        [
          _c("div", { staticClass: "col-lg-12 col-md-12 col-sm-6 col-xs-12" }, [
            _c("div", { staticClass: "panel panel-default" }, [
              _c("div", { staticClass: "panel-heading" }, [
                _vm._v("Agent Collections ")
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "panel-body" },
                [
                  _c(
                    "v-overlay",
                    { attrs: { absolute: _vm.absolute, value: _vm.table_3 } },
                    [
                      _c("v-progress-circular", {
                        attrs: { indeterminate: "", size: "60" }
                      })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-card-title",
                    [
                      _c(
                        "v-spacer",
                        [
                          _vm._v("   \n                                    "),
                          _c(
                            "vue-excel-xlsx",
                            {
                              attrs: {
                                data: this.collection,
                                columns: _vm.collectionColumns,
                                filename: "collection",
                                sheetname: "collection"
                              }
                            },
                            [_c("v-btn", [_vm._v("Excel ")])],
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
                          value: _vm.searchCollection,
                          callback: function($$v) {
                            _vm.searchCollection = $$v
                          },
                          expression: "searchCollection"
                        }
                      })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c("v-data-table", {
                    staticClass: "elevation-1",
                    attrs: {
                      headers: this.collectionHeaders,
                      items: this.collection,
                      search: _vm.searchCollection,
                      page: _vm.pageCollection,
                      "items-per-page": _vm.itemsPerPageCollection,
                      "hide-default-footer": ""
                    },
                    on: {
                      "update:page": function($event) {
                        _vm.pageCollection = $event
                      },
                      "page-count": function($event) {
                        _vm.pageCountCollection = $event
                      }
                    },
                    scopedSlots: _vm._u([
                      {
                        key: "item.totalReceipt",
                        fn: function(ref) {
                          var item = ref.item
                          return [
                            _c("span", [
                              _vm._v(
                                _vm._s(
                                  new Intl.NumberFormat("en-NG", {
                                    style: "currency",
                                    currency: "NGN"
                                  }).format(item.totalReceipt)
                                )
                              )
                            ])
                          ]
                        }
                      },
                      {
                        key: "item.totalInvoice",
                        fn: function(ref) {
                          var item = ref.item
                          return [
                            _c("span", [
                              _vm._v(
                                _vm._s(
                                  new Intl.NumberFormat("en-NG", {
                                    style: "currency",
                                    currency: "NGN"
                                  }).format(item.totalInvoice)
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
                      },
                      {
                        key: "item.remitted",
                        fn: function(ref) {
                          var item = ref.item
                          return [
                            _c("span", [
                              _vm._v(
                                _vm._s(
                                  new Intl.NumberFormat("en-NG", {
                                    style: "currency",
                                    currency: "NGN"
                                  }).format(item.remitted)
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
                          length: _vm.pageCountCollection
                        },
                        model: {
                          value: _vm.pageCollection,
                          callback: function($$v) {
                            _vm.pageCollection = $$v
                          },
                          expression: "pageCollection"
                        }
                      }),
                      _vm._v(" "),
                      _c("v-text-field", {
                        attrs: {
                          value: _vm.itemsPerPageCollection,
                          label: "Items per page",
                          type: "number",
                          min: "-1",
                          max: "15"
                        },
                        on: {
                          input: function($event) {
                            _vm.itemsPerPageCollection = parseInt($event, 10)
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
        ]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "row clearfix hide", attrs: { id: "remits" } }, [
        _c("div", { staticClass: "col-lg-12 col-md-12 col-sm-6 col-xs-12" }, [
          _c("div", { staticClass: "panel panel-default" }, [
            _c("div", { staticClass: "panel-heading" }, [
              _vm._v("Remittance Summary ")
            ]),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "panel-body" },
              [
                _c(
                  "v-overlay",
                  { attrs: { absolute: _vm.absolute, value: _vm.table_4 } },
                  [
                    _c("v-progress-circular", {
                      attrs: { indeterminate: "", size: "60" }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-card-title",
                  [
                    _c(
                      "v-spacer",
                      [
                        _vm._v("   \n                                "),
                        _c(
                          "vue-excel-xlsx",
                          {
                            attrs: {
                              data: this.remits,
                              columns: _vm.remitColumns,
                              filename: "remits",
                              sheetname: "remits"
                            }
                          },
                          [_c("v-btn", [_vm._v("Excel ")])],
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
                        value: _vm.searchRemit,
                        callback: function($$v) {
                          _vm.searchRemit = $$v
                        },
                        expression: "searchRemit"
                      }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c("v-data-table", {
                  staticClass: "elevation-1",
                  attrs: {
                    headers: this.remitHeaders,
                    items: this.remits,
                    search: _vm.searchRemit,
                    page: _vm.pageRemit,
                    "items-per-page": _vm.itemsPerPageRemit,
                    "hide-default-footer": ""
                  },
                  on: {
                    "update:page": function($event) {
                      _vm.pageRemit = $event
                    },
                    "page-count": function($event) {
                      _vm.pageCountRemit = $event
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
                      key: "item.created_date",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                _vm._f("moment")(
                                  item.created_date,
                                  "dddd, MMMM Do YYYY"
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
                          item.payment_date != ""
                            ? _c("span", [
                                _vm._v(
                                  _vm._s(
                                    _vm._f("moment")(
                                      item.payment_date,
                                      "dddd, MMMM Do YYYY"
                                    )
                                  )
                                )
                              ])
                            : _vm._e()
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
                        length: _vm.pageCountRemit
                      },
                      model: {
                        value: _vm.pageRemit,
                        callback: function($$v) {
                          _vm.pageRemit = $$v
                        },
                        expression: "pageRemit"
                      }
                    }),
                    _vm._v(" "),
                    _c("v-text-field", {
                      attrs: {
                        value: _vm.itemsPerPageRemit,
                        label: "Items per page",
                        type: "number",
                        min: "-1",
                        max: "15"
                      },
                      on: {
                        input: function($event) {
                          _vm.itemsPerPageRemit = parseInt($event, 10)
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
      _c("div", { staticClass: "row clearfix ", attrs: { id: "allremits" } }, [
        _c("div", { staticClass: "col-lg-12 col-md-12 col-sm-6 col-xs-12" }, [
          _c("div", { staticClass: "panel panel-default" }, [
            _c("div", { staticClass: "panel-heading" }, [
              _vm._v("Remittance Summary ")
            ]),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "panel-body" },
              [
                _c(
                  "v-overlay",
                  { attrs: { absolute: _vm.absolute, value: _vm.table_5 } },
                  [
                    _c("v-progress-circular", {
                      attrs: { indeterminate: "", size: "60" }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-card-title",
                  [
                    _c(
                      "v-spacer",
                      [
                        _vm._v("   \n                                "),
                        _c(
                          "vue-excel-xlsx",
                          {
                            attrs: {
                              data: this.allremits,
                              columns: _vm.remitColumns,
                              filename: "remit",
                              sheetname: "remit"
                            }
                          },
                          [_c("v-btn", [_vm._v(" Excel  ")])],
                          1
                        )
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c("v-spacer"),
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
                        value: _vm.searchRemit1,
                        callback: function($$v) {
                          _vm.searchRemit1 = $$v
                        },
                        expression: "searchRemit1"
                      }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c("v-data-table", {
                  staticClass: "elevation-1",
                  attrs: {
                    headers: this.remit1Headers,
                    items: this.allremits,
                    search: _vm.searchRemit1,
                    page: _vm.pageRemit1,
                    "items-per-page": _vm.itemsPerPageRemit1,
                    "hide-default-footer": ""
                  },
                  on: {
                    "update:page": function($event) {
                      _vm.pageRemit1 = $event
                    },
                    "page-count": function($event) {
                      _vm.pageCountRemit1 = $event
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
                      key: "item.created_date",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("span", [
                            _vm._v(
                              _vm._s(
                                _vm._f("moment")(
                                  item.created_date,
                                  "dddd, MMMM Do YYYY"
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
                          item.payment_date != ""
                            ? _c("span", [
                                _vm._v(
                                  _vm._s(
                                    _vm._f("moment")(
                                      item.payment_date,
                                      "dddd, MMMM Do YYYY"
                                    )
                                  )
                                )
                              ])
                            : _vm._e()
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
                        length: _vm.pageCountRemit1
                      },
                      model: {
                        value: _vm.pageRemit1,
                        callback: function($$v) {
                          _vm.pageRemit1 = $$v
                        },
                        expression: "pageRemit1"
                      }
                    }),
                    _vm._v(" "),
                    _c("v-text-field", {
                      attrs: {
                        value: _vm.itemsPerPageRemit1,
                        label: "Items per page",
                        type: "number",
                        min: "-1",
                        max: "15"
                      },
                      on: {
                        input: function($event) {
                          _vm.itemsPerPageRemit1 = parseInt($event, 10)
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
      _c("small", [_vm._v(" Agent Management")]),
      _c("br"),
      _vm._v("AGENT DASHBOARD")
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
    return _c("div", { staticClass: "panel panel-default" }, [
      _c("div", { staticClass: "panel-heading" }, [
        _vm._v(" Last Six Months Revenue ")
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "panel-body" }, [
        _c("canvas", { attrs: { id: "chart_1", height: "100" } })
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/agent/Agent-dashboard.vue":
/*!***********************************************************!*\
  !*** ./resources/js/components/agent/Agent-dashboard.vue ***!
  \***********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Agent_dashboard_vue_vue_type_template_id_3f121867___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Agent-dashboard.vue?vue&type=template&id=3f121867& */ "./resources/js/components/agent/Agent-dashboard.vue?vue&type=template&id=3f121867&");
/* harmony import */ var _Agent_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Agent-dashboard.vue?vue&type=script&lang=js& */ "./resources/js/components/agent/Agent-dashboard.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Agent_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Agent_dashboard_vue_vue_type_template_id_3f121867___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Agent_dashboard_vue_vue_type_template_id_3f121867___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/agent/Agent-dashboard.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/agent/Agent-dashboard.vue?vue&type=script&lang=js&":
/*!************************************************************************************!*\
  !*** ./resources/js/components/agent/Agent-dashboard.vue?vue&type=script&lang=js& ***!
  \************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Agent_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Agent-dashboard.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/agent/Agent-dashboard.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Agent_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/agent/Agent-dashboard.vue?vue&type=template&id=3f121867&":
/*!******************************************************************************************!*\
  !*** ./resources/js/components/agent/Agent-dashboard.vue?vue&type=template&id=3f121867& ***!
  \******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Agent_dashboard_vue_vue_type_template_id_3f121867___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Agent-dashboard.vue?vue&type=template&id=3f121867& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/agent/Agent-dashboard.vue?vue&type=template&id=3f121867&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Agent_dashboard_vue_vue_type_template_id_3f121867___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Agent_dashboard_vue_vue_type_template_id_3f121867___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);