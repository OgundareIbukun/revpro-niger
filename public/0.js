(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/remittance/Remittance.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/remittance/Remittance.vue?vue&type=script&lang=js& ***!
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
/* harmony import */ var v_offline__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! v-offline */ "./node_modules/v-offline/dist/v-offline.esm.js");


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
// import this component




/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'Remittance',
  created: function created() {},
  components: {
    flatPickr: vue_flatpickr_component__WEBPACK_IMPORTED_MODULE_1___default.a,
    offline: v_offline__WEBPACK_IMPORTED_MODULE_4__["default"]
  },
  data: function data() {
    return {
      absolute: true,
      table_1: true,
      reloader_status: false,
      loader: null,
      loading: false,
      // menu: false,
      modal: false,
      menu2: false,
      amountCard: '',
      page: 1,
      pageCount: 0,
      itemsPerPage: 15,
      dialog: false,
      fromDate: '',
      //  new Date(),
      toDate: '',
      //  new Date(),
      status: '',
      type: '',
      bank: '',
      grand_total: '',
      grand_total_lga: '',
      lga_name: '',
      getFrom: '',
      getTo: '',
      getStatus: '',
      getType: '',
      getLg: '',
      getBank: '',
      totalLabel: '',
      config: {
        wrap: true,
        // set wrap to true only when using 'input-group'
        altFormat: 'M j, Y',
        altInput: true,
        dateFormat: 'Y-m-d'
      },
      search: '',
      headers: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'AGENT NAME',
        value: 'agent_name'
      }, {
        text: 'LGA NAME',
        value: 'lga_name'
      }, {
        text: 'AMOUNT',
        value: 'amount'
      }, {
        text: 'TXN REF',
        value: 'txn_ref'
      }, {
        text: 'PAYMENT CHANNEL',
        value: 'payment_type'
      }, {
        text: 'BANK',
        value: 'bank'
      }, {
        text: 'CREATED DATE',
        value: 'created_date'
      }, {
        text: 'PAYMENT DATE',
        value: 'payment_date'
      }, {
        text: 'PAYMENT STATUS',
        value: 'status'
      }, {
        text: 'ACTION',
        value: 'actions',
        sortable: false
      }],
      //  summary:[],
      remitIndex: -1,
      remits: [],
      banks: [],
      remit: {
        'id': '',
        'lga_id': '',
        'agent_id': '',
        'payment_type': '',
        'amount': '',
        'month': new Date().toISOString().substr(0, 7),
        'amt': '',
        'bank': '',
        'transaction_reference': '',
        'created_at': '',
        'status': '',
        'amountCard': ''
      },
      //   amountDue:'',
      getAgent: '',
      remitDefault: {
        'id': '',
        'agent_id': '',
        'payment_type': '',
        'amount': '',
        'month': '',
        'amt': '',
        'bank': '',
        'transaction_reference': '',
        'created_at': '',
        'status': ''
      },
      ref: '',
      index: '',
      lg_id: '',
      errors: [],
      types: [],
      lgas: [],
      lgs: [],
      agents: [],
      payment_types: [],
      // types:[],
      statuses: [],
      months: [{
        name: 'Jan.',
        id: '01'
      }, {
        name: 'Feb.',
        id: '02'
      }, {
        name: 'March',
        id: '03'
      }, {
        name: 'April',
        id: '04'
      }, {
        name: 'May',
        id: '05'
      }, {
        name: 'June',
        id: '06'
      }, {
        name: 'July',
        id: '07'
      }, {
        name: 'Aug.',
        id: '08'
      }, {
        name: 'Sept.',
        id: '09'
      }, {
        name: 'Oct.',
        id: '10'
      }, {
        name: 'Nov.',
        id: '11'
      }, {
        name: 'Dec.',
        id: '12'
      }],
      // excel format
      columns: [{
        label: "#",
        field: "sn"
      }, {
        label: "Agent Name",
        field: "agent_name"
      }, {
        label: "Lga Name",
        field: "lga_name"
      }, {
        label: 'Amount',
        field: 'amount',
        dataFormat: this.$shared.amountFormat
      }, {
        label: "Tnx Ref",
        field: "txn_ref"
      }, {
        label: "Payment Type",
        field: "payment_type"
      }, {
        label: "Bank",
        field: "bank"
      }, {
        label: "Created Date",
        field: "created_date",
        dataFormat: this.$shared.createdDateFormat
      }, {
        label: "Payment Date",
        field: "payment_date",
        dataFormat: this.$shared.paymentDateFormat
      }, {
        label: "Status",
        field: "status"
      }]
    };
  },
  watch: {
    dialog: function dialog(val) {
      val || this.close();
    },
    loader: function loader() {
      var _this = this;

      var l = this.loader;
      this[l] = !this[l];
      setTimeout(function () {
        return _this[l] = false;
      }, 3000);
      this.loader = null;
    }
  },
  methods: {
    close: function close() {
      var _this2 = this;

      this.dialog = false;
      this.$nextTick(function () {
        _this2.remit = Object.assign({}, _this2.remitDefault); //   this.revPointIndex = -1
      });
    },
    pendingTxn: function pendingTxn(item) {
      this.reloader_status = true;
      this.ref = item.txn_ref;
      this.index = this.remits.indexOf(item);
      this.reVerify();
    },
    initPreLoader: function initPreLoader() {
      this.table_1 = true;
    },
    // modal
    getPaymentTypes: function () {
      var _getPaymentTypes = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                this.payment_types = ['card', 'bank'];

              case 1:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this);
      }));

      function getPaymentTypes() {
        return _getPaymentTypes.apply(this, arguments);
      }

      return getPaymentTypes;
    }(),
    // search
    getTypes: function () {
      var _getTypes = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                this.types = ['bank', 'card'];

              case 1:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this);
      }));

      function getTypes() {
        return _getTypes.apply(this, arguments);
      }

      return getTypes;
    }(),
    getStatuses: function () {
      var _getStatuses = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee3() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                this.statuses = ['success', 'pending'];

              case 1:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, this);
      }));

      function getStatuses() {
        return _getStatuses.apply(this, arguments);
      }

      return getStatuses;
    }(),
    searchResult: function () {
      var _searchResult = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee4() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee4$(_context4) {
          while (1) {
            switch (_context4.prev = _context4.next) {
              case 0:
                this.getRemittances();

              case 1:
              case "end":
                return _context4.stop();
            }
          }
        }, _callee4, this);
      }));

      function searchResult() {
        return _searchResult.apply(this, arguments);
      }

      return searchResult;
    }(),
    setTotalLabel: function setTotalLabel(type, status, lga) {
      var date = new Date();
      if (!type && !status) var totalLbl = 'Total';else if (type && !status) var totalLbl = 'Total';else var totalLbl = 'Total Remitted';
      if (lga) var lgaLbl = ' for ' + lga + ' LGA';else var lgaLbl = '';
      if (type) var typeLbl = ' via ' + type;else var typeLbl = '';
      if (status && status == 'pending') var statusLbl = ' Pending ';else var statusLbl = ''; //                if(from  && to )
      //                    var  rangeLbl =  ' From ' + from + ' To ' + to + ':';
      //                else if( !from && to)
      //                    var rangeLbl = ' From ' +  new Date(date.getFullYear(),date.getMonth(),2 ).toISOString().substr(0, 10).toString()  + ' To ' + to+':';
      //                else if( from && !to)
      //                    var rangeLbl =  ' From ' +  from  + '  To ' +
      //                        new Date().toISOString().substr(0, 10).toString()  +':';
      //                else   var rangeLbl='';

      var label = totalLbl + typeLbl + lgaLbl + statusLbl;
      return label;
    },
    getLgas: function () {
      var _getLgas = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee5() {
        var _this3 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee5$(_context5) {
          while (1) {
            switch (_context5.prev = _context5.next) {
              case 0:
                _context5.prev = 0;
                _context5.next = 3;
                return axios.get("/state/".concat(this.$state_id, "/lgas")).then(function (response) {
                  _this3.lgas = response.data.data;
                  _this3.lgs = response.data.data;
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

      function getLgas() {
        return _getLgas.apply(this, arguments);
      }

      return getLgas;
    }(),
    getRemittances: function () {
      var _getRemittances = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee6() {
        var _this4 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee6$(_context6) {
          while (1) {
            switch (_context6.prev = _context6.next) {
              case 0:
                _context6.prev = 0;
                this.getFrom = this.fromDate;
                this.getTo = this.toDate;
                this.getStatus = this.status;
                this.getType = this.type;
                this.getLg = this.lg_id;
                this.getBank = this.bank;
                _context6.next = 9;
                return axios.post('/remittance', {
                  'fromDate': this.fromDate,
                  'toDate': this.toDate,
                  'status': this.status,
                  'type': this.type,
                  'lga_id': this.lg_id,
                  'bank': this.bank
                }).then(function (response) {
                  _this4.remits = response.data.data, _this4.grand_total = response.data.total, _this4.lga_name = response.data.lgaName, _this4.fromDate = _this4.getFrom;
                  _this4.toDate = _this4.getTo;
                  _this4.status = _this4.getStatus;
                  _this4.type = _this4.getType;
                  _this4.lg_id = _this4.getLg;
                  _this4.bank = _this4.getBank;
                  _this4.totalLabel = 'Total:'; //this.setTotalLabel( this.getType,  this.getStatus, this.lga_name );

                  _this4.table_1 = false;
                })["catch"](function (error) {
                  console.log(error);
                });

              case 9:
                _context6.next = 14;
                break;

              case 11:
                _context6.prev = 11;
                _context6.t0 = _context6["catch"](0);
                console.log(_context6.t0);

              case 14:
              case "end":
                return _context6.stop();
            }
          }
        }, _callee6, this, [[0, 11]]);
      }));

      function getRemittances() {
        return _getRemittances.apply(this, arguments);
      }

      return getRemittances;
    }(),
    getAgents: function () {
      var _getAgents = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee7() {
        var _this5 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee7$(_context7) {
          while (1) {
            switch (_context7.prev = _context7.next) {
              case 0:
                _context7.prev = 0;
                _context7.next = 3;
                return axios.post('/agents/lga', {
                  'lga_id': this.remit.lga_id
                }).then(function (response) {
                  //console.log(response.data.data);
                  _this5.agents = response.data.data;
                })["catch"](function (error) {
                  console.log(error);
                });

              case 3:
                _context7.next = 8;
                break;

              case 5:
                _context7.prev = 5;
                _context7.t0 = _context7["catch"](0);
                console.log(_context7.t0);

              case 8:
              case "end":
                return _context7.stop();
            }
          }
        }, _callee7, this, [[0, 5]]);
      }));

      function getAgents() {
        return _getAgents.apply(this, arguments);
      }

      return getAgents;
    }(),
    getAmount: function () {
      var _getAmount = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee8() {
        var _this6 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee8$(_context8) {
          while (1) {
            switch (_context8.prev = _context8.next) {
              case 0:
                _context8.prev = 0;
                _context8.next = 3;
                return axios.post("/remittance/amountDue", {
                  'agent_id': this.remit.agent_id,
                  'month': this.remit.month
                }).then(function (response) {
                  _this6.remit.amount = response.data.data; // $('#amount').val(response.data.data);   // = response.data.data;
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
        }, _callee8, this, [[0, 5]]);
      }));

      function getAmount() {
        return _getAmount.apply(this, arguments);
      }

      return getAmount;
    }(),
    reVerify: function () {
      var _reVerify = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee9() {
        var _this7 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee9$(_context9) {
          while (1) {
            switch (_context9.prev = _context9.next) {
              case 0:
                _context9.prev = 0;
                _context9.next = 3;
                return axios.post("/remittance/reVerify", {
                  'reference': this.ref
                }).then(function (response) {
                  // this.remit.status = response.data.data;
                  Object.assign(_this7.remits[_this7.index], response.data.data);
                  _this7.reloader_status = false;
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

      function reVerify() {
        return _reVerify.apply(this, arguments);
      }

      return reVerify;
    }(),
    getBanks: function () {
      var _getBanks = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee10() {
        var _this8 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee10$(_context10) {
          while (1) {
            switch (_context10.prev = _context10.next) {
              case 0:
                _context10.prev = 0;
                _context10.next = 3;
                return axios.get('/banks').then(function (response) {
                  //console.log(response.data.data);
                  _this8.banks = response.data.data;
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
        }, _callee10, null, [[0, 5]]);
      }));

      function getBanks() {
        return _getBanks.apply(this, arguments);
      }

      return getBanks;
    }(),
    handleConnectivityChange: function handleConnectivityChange(status) {
      console.log(status);

      if (status) {
        this.flashMessage.success({
          title: '',
          message: 'Internet Connected!',
          time: 8000
        });
      } else {
        this.flashMessage.error({
          title: '',
          message: 'Internet not Connected!',
          time: 8000
        });
      }
    },
    calculateCardFee: function calculateCardFee(channel, realAmount) {
      // alert (channel);
      if (channel == 'card') {
        var fee = finalFee = 0;

        if (realAmount < 2500) {
          //just 1.5%
          fee = 0.015 * realAmount;
        } else {
          //1.5% + 100
          fee = 0.015 * realAmount + 100;
        }

        var finalFee = fee > 2000 ? 2000 : fee;
        var amount = parseInt(realAmount) + parseInt(finalFee);
        $('#amountDue').removeClass('hide');
        $('#amount').addClass('hide'); // alert (amount );

        this.amountCard = amount;
      } else {
        $('#amountDue').addClass('hide');
        $('#amount').removeClass('hide');
      }
    }
  },
  mounted: function mounted() {
    //             $('#remittance-menu').onclick(function(){
    //                $(this).addClass('active');
    //             });
    //  $('#amountDue').addClass('hide');
    this.getTypes();
    this.getStatuses();
    this.getLgas();
    this.getBanks();
    this.getPaymentTypes();
    this.getRemittances();
  }
});

/***/ }),

/***/ "./node_modules/v-offline/dist/v-offline.esm.js":
/*!******************************************************!*\
  !*** ./node_modules/v-offline/dist/v-offline.esm.js ***!
  \******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function createCommonjsModule(fn, basedir, module) {
	return module = {
	  path: basedir,
	  exports: {},
	  require: function (path, base) {
      return commonjsRequire(path, (base === undefined || base === null) ? module.path : base);
    }
	}, fn(module, module.exports), module.exports;
}

function commonjsRequire () {
	throw new Error('Dynamic requires are not currently supported by @rollup/plugin-commonjs');
}

var ping = createCommonjsModule(function (module, exports) {
/**
 * Creates a Ping instance.
 * @returns {Ping}
 * @constructor
 */
var Ping = function(opt) {
    this.opt = opt || {};
    this.favicon = this.opt.favicon || "/favicon.ico";
    this.timeout = this.opt.timeout || 0;
    this.logError = this.opt.logError || false;
};

/**
 * Pings source and triggers a callback when completed.
 * @param source Source of the website or server, including protocol and port.
 * @param callback Callback function to trigger when completed. Returns error and ping value.
 * @param timeout Optional number of milliseconds to wait before aborting.
 */
Ping.prototype.ping = function(source, callback) {
    var self = this;
    self.wasSuccess = false;
    self.img = new Image();
    self.img.onload = onload;
    self.img.onerror = onerror;

    var timer;
    var start = new Date();

    function onload(e) {
        self.wasSuccess = true;
        pingCheck.call(self, e);
    }

    function onerror(e) {
        self.wasSuccess = false;
        pingCheck.call(self, e);
    }

    if (self.timeout) {
        timer = setTimeout(function() {
            pingCheck.call(self, undefined);
    }, self.timeout); }


    /**
     * Times ping and triggers callback.
     */
    function pingCheck() {
        if (timer) { clearTimeout(timer); }
        var pong = new Date() - start;

        if (typeof callback === "function") {
            // When operating in timeout mode, the timeout callback doesn't pass [event] as e.
            // Notice [this] instead of [self], since .call() was used with context
            if (!this.wasSuccess) {
                if (self.logError) { console.error("error loading resource"); }
                return callback("error", pong);
            }
            return callback(null, pong);
        }
    }

    self.img.src = source + self.favicon + "?" + (+new Date()); // Trigger image load with cache buster
};

{
    if ( module.exports) {
        module.exports = Ping;
    }
}
});

var ping_js = ping;

var EVENTS = ['online', 'offline', 'load'];
var script = {
  name: 'VOffline',
  props: {
    slotName: {
      type: String,
      required: false,
      "default": 'online'
    },
    onlineClass: {
      type: String,
      required: false,
      "default": ''
    },
    offlineClass: {
      type: String,
      required: false,
      "default": ''
    },
    pingUrl: {
      type: String,
      required: false,
      "default": 'https://google.com'
    }
  },
  data: function data() {
    return {
      isOnline: navigator.onLine || false
    };
  },
  computed: {
    computedClass: function computedClass() {
      return this.isOnline ? this.onlineClass : this.offlineClass;
    }
  },
  created: function created() {
    var _this = this;

    EVENTS.forEach(function (event) {
      return window.addEventListener(event, _this.updateOnlineStatus);
    });
  },
  beforeDestroy: function beforeDestroy() {
    var _this2 = this;

    EVENTS.forEach(function (event) {
      return window.removeEventListener(event, _this2.updateOnlineStatus);
    });
  },
  methods: {
    updateOnlineStatus: function updateOnlineStatus() {
      var t = this;
      var p = new ping_js();
      p.ping(t.pingUrl, function (err) {
        if (err || !navigator.onLine) {
          t.isOnline = false;
          t.$emit('detected-condition', t.isOnline);
        } else {
          t.isOnline = true;
          t.$emit('detected-condition', t.isOnline);
        }
      });
    }
  }
};

function normalizeComponent(template, style, script, scopeId, isFunctionalTemplate, moduleIdentifier /* server only */, shadowMode, createInjector, createInjectorSSR, createInjectorShadow) {
    if (typeof shadowMode !== 'boolean') {
        createInjectorSSR = createInjector;
        createInjector = shadowMode;
        shadowMode = false;
    }
    // Vue.extend constructor export interop.
    const options = typeof script === 'function' ? script.options : script;
    // render functions
    if (template && template.render) {
        options.render = template.render;
        options.staticRenderFns = template.staticRenderFns;
        options._compiled = true;
        // functional template
        if (isFunctionalTemplate) {
            options.functional = true;
        }
    }
    // scopedId
    if (scopeId) {
        options._scopeId = scopeId;
    }
    let hook;
    if (moduleIdentifier) {
        // server build
        hook = function (context) {
            // 2.3 injection
            context =
                context || // cached call
                    (this.$vnode && this.$vnode.ssrContext) || // stateful
                    (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext); // functional
            // 2.2 with runInNewContext: true
            if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
                context = __VUE_SSR_CONTEXT__;
            }
            // inject component styles
            if (style) {
                style.call(this, createInjectorSSR(context));
            }
            // register component module identifier for async chunk inference
            if (context && context._registeredComponents) {
                context._registeredComponents.add(moduleIdentifier);
            }
        };
        // used by ssr in case component is cached and beforeCreate
        // never gets called
        options._ssrRegister = hook;
    }
    else if (style) {
        hook = shadowMode
            ? function (context) {
                style.call(this, createInjectorShadow(context, this.$root.$options.shadowRoot));
            }
            : function (context) {
                style.call(this, createInjector(context));
            };
    }
    if (hook) {
        if (options.functional) {
            // register for functional component in vue file
            const originalRender = options.render;
            options.render = function renderWithStyleInjection(h, context) {
                hook.call(context);
                return originalRender(h, context);
            };
        }
        else {
            // inject component registration as beforeCreate hook
            const existing = options.beforeCreate;
            options.beforeCreate = existing ? [].concat(existing, hook) : [hook];
        }
    }
    return script;
}

/* script */
const __vue_script__ = script;

/* template */
var __vue_render__ = function() {
  var _vm = this;
  var _h = _vm.$createElement;
  var _c = _vm._self._c || _h;
  return _c("div", { class: _vm.computedClass }, [_vm._t(_vm.slotName)], 2)
};
var __vue_staticRenderFns__ = [];
__vue_render__._withStripped = true;

  /* style */
  const __vue_inject_styles__ = undefined;
  /* scoped */
  const __vue_scope_id__ = undefined;
  /* module identifier */
  const __vue_module_identifier__ = undefined;
  /* functional template */
  const __vue_is_functional_template__ = false;
  /* style inject */
  
  /* style inject SSR */
  
  /* style inject shadow dom */
  

  
  const __vue_component__ = /*#__PURE__*/normalizeComponent(
    { render: __vue_render__, staticRenderFns: __vue_staticRenderFns__ },
    __vue_inject_styles__,
    __vue_script__,
    __vue_scope_id__,
    __vue_is_functional_template__,
    __vue_module_identifier__,
    false,
    undefined,
    undefined,
    undefined
  );

/* harmony default export */ __webpack_exports__["default"] = (__vue_component__);


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/remittance/Remittance.vue?vue&type=template&id=62913e14&":
/*!************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/remittance/Remittance.vue?vue&type=template&id=62913e14& ***!
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
      _c("h1", [_vm._v(" REMITTANCES ")]),
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
        _c("li", { staticClass: "active" }, [_vm._v(" Remittance ")])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "page-body" }, [
      _c("div", { staticClass: "panel panel-default" }, [
        _c("div", { staticClass: "panel-heading" }, [_vm._v("Filter Result ")]),
        _vm._v(" "),
        _c("div", { staticClass: "panel-body" }, [
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
              _c("div", { staticClass: "row clearfix" }, [
                _c(
                  "div",
                  { staticClass: "col-lg-3 col-md-3 col-sm-6 col-xs-12" },
                  [
                    _c("div", { staticClass: "form-group" }, [
                      _c(
                        "div",
                        { staticClass: "input-group" },
                        [
                          _vm._m(0),
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
                          _vm._m(1),
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
                            value: _vm.type,
                            expression: "type"
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
                            _vm.type = $event.target.multiple
                              ? $$selectedVal
                              : $$selectedVal[0]
                          }
                        }
                      },
                      [
                        _c("option", { attrs: { value: "" } }, [
                          _vm._v("Select Payment Method")
                        ]),
                        _vm._v(" "),
                        _vm._l(_vm.types, function(type) {
                          return _c(
                            "option",
                            { key: type, domProps: { value: type } },
                            [
                              _vm._v(
                                "\n                                    " +
                                  _vm._s(type) +
                                  "\n                                "
                              )
                            ]
                          )
                        })
                      ],
                      2
                    ),
                    _vm._v(" "),
                    _vm.errors["type"]
                      ? _c("label", { staticClass: "error" }, [
                          _vm._v(_vm._s(_vm.errors["type"][0]))
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
                            value: _vm.status,
                            expression: "status"
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
                            _vm.status = $event.target.multiple
                              ? $$selectedVal
                              : $$selectedVal[0]
                          }
                        }
                      },
                      [
                        _c("option", { attrs: { value: "" } }, [
                          _vm._v("Select Status")
                        ]),
                        _vm._v(" "),
                        _vm._l(_vm.statuses, function(status) {
                          return _c(
                            "option",
                            { key: status, domProps: { value: status } },
                            [
                              _vm._v(
                                "\n                                    " +
                                  _vm._s(status) +
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
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "row clearfix" }, [
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
                            value: _vm.lg_id,
                            expression: "lg_id"
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
                            _vm.lg_id = $event.target.multiple
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
                        _vm._l(_vm.lgs, function(lg) {
                          return _c(
                            "option",
                            { key: lg.id, domProps: { value: lg.id } },
                            [
                              _vm._v(
                                "\n                                        " +
                                  _vm._s(lg.name) +
                                  "\n                                    "
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
                            value: _vm.bank,
                            expression: "bank"
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
                            _vm.bank = $event.target.multiple
                              ? $$selectedVal
                              : $$selectedVal[0]
                          }
                        }
                      },
                      [
                        _c("option", { attrs: { value: "" } }, [
                          _vm._v("Select Branch")
                        ]),
                        _vm._v(" "),
                        _vm._l(_vm.banks, function(bank) {
                          return _c(
                            "option",
                            { key: bank, domProps: { value: bank } },
                            [
                              _vm._v(
                                "\n                                        " +
                                  _vm._s(bank) +
                                  "\n                                    "
                              )
                            ]
                          )
                        })
                      ],
                      2
                    )
                  ]
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "col-lg-2 col-md-2 col-sm-6 col-xs-12" },
                  [
                    _c("div", { staticClass: "form-group" }, [
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
              ])
            ]
          )
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "panel panel-default" }, [
        _vm._m(2),
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
                          data: this.remits,
                          columns: _vm.columns,
                          filename: "remittances",
                          sheetname: "remittances"
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
                items: this.remits,
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
                  key: "top",
                  fn: function() {
                    return [
                      _c(
                        "v-toolbar",
                        { attrs: { flat: "", color: "white" } },
                        [
                          _c(
                            "v-dialog",
                            {
                              attrs: { "max-width": "600px" },
                              scopedSlots: _vm._u([
                                {
                                  key: "activator",
                                  fn: function(ref) {
                                    var on = ref.on
                                    return [
                                      _vm.$roles.user_role ==
                                      _vm.$roles.super_admin
                                        ? _c(
                                            "v-btn",
                                            _vm._g(
                                              {
                                                staticClass: " mb-2",
                                                staticStyle: {
                                                  "background-color": "#3c8dbc"
                                                },
                                                attrs: { color: "info" }
                                              },
                                              on
                                            ),
                                            [_vm._v("New Remittance")]
                                          )
                                        : _vm._e()
                                    ]
                                  }
                                }
                              ]),
                              model: {
                                value: _vm.dialog,
                                callback: function($$v) {
                                  _vm.dialog = $$v
                                },
                                expression: "dialog"
                              }
                            },
                            [
                              _vm._v(" "),
                              _c(
                                "form",
                                {
                                  attrs: {
                                    method: "GET",
                                    action: "remittance/initialize"
                                  }
                                },
                                [
                                  _c(
                                    "v-card",
                                    [
                                      _c("v-card-title", [
                                        _c(
                                          "span",
                                          { staticClass: "headline" },
                                          [_vm._v(" New Remittance")]
                                        )
                                      ]),
                                      _vm._v(" "),
                                      _c(
                                        "v-card-text",
                                        [
                                          _c(
                                            "v-container",
                                            [
                                              _c(
                                                "v-row",
                                                [
                                                  _c(
                                                    "v-col",
                                                    {
                                                      attrs: {
                                                        cols: "12",
                                                        sm: "12",
                                                        md: "12"
                                                      }
                                                    },
                                                    [
                                                      _c("v-select", {
                                                        attrs: {
                                                          rules: [
                                                            function(v) {
                                                              return (
                                                                !!v ||
                                                                "LGA is required"
                                                              )
                                                            }
                                                          ],
                                                          items: _vm.lgas,
                                                          "menu-props": {
                                                            maxHeight: "400"
                                                          },
                                                          "item-text": "name",
                                                          "item-value": "id",
                                                          label: "Select LGA ",
                                                          hint: "Select LGA",
                                                          "persistent-hint": ""
                                                        },
                                                        on: {
                                                          change: function(
                                                            $event
                                                          ) {
                                                            return _vm.getAgents()
                                                          }
                                                        },
                                                        model: {
                                                          value:
                                                            _vm.remit.lga_id,
                                                          callback: function(
                                                            $$v
                                                          ) {
                                                            _vm.$set(
                                                              _vm.remit,
                                                              "lga_id",
                                                              $$v
                                                            )
                                                          },
                                                          expression:
                                                            "remit.lga_id"
                                                        }
                                                      })
                                                    ],
                                                    1
                                                  ),
                                                  _vm._v(" "),
                                                  _c(
                                                    "v-col",
                                                    {
                                                      attrs: {
                                                        id: "lga_col",
                                                        cols: "12",
                                                        sm: "12",
                                                        md: "12"
                                                      }
                                                    },
                                                    [
                                                      _c("v-select", {
                                                        attrs: {
                                                          required:
                                                            "agent name is required",
                                                          name: "agent_id",
                                                          rules: [
                                                            function(v) {
                                                              return (
                                                                !!v ||
                                                                "Agent is required"
                                                              )
                                                            }
                                                          ],
                                                          items: _vm.agents,
                                                          "item-text": "name",
                                                          "item-value": "id",
                                                          label: "Select Agent"
                                                        },
                                                        model: {
                                                          value:
                                                            _vm.remit.agent_id,
                                                          callback: function(
                                                            $$v
                                                          ) {
                                                            _vm.$set(
                                                              _vm.remit,
                                                              "agent_id",
                                                              $$v
                                                            )
                                                          },
                                                          expression:
                                                            "remit.agent_id"
                                                        }
                                                      }),
                                                      _vm._v(" "),
                                                      _vm.errors["agent_id"]
                                                        ? _c(
                                                            "label",
                                                            {
                                                              staticClass:
                                                                "error",
                                                              staticStyle: {
                                                                color: "red"
                                                              }
                                                            },
                                                            [
                                                              _vm._v(
                                                                "Agent is required"
                                                              )
                                                            ]
                                                          )
                                                        : _vm._e()
                                                    ],
                                                    1
                                                  ),
                                                  _vm._v(" "),
                                                  _c(
                                                    "v-col",
                                                    {
                                                      attrs: {
                                                        cols: "12",
                                                        sm: "12",
                                                        md: "12"
                                                      }
                                                    },
                                                    [
                                                      _c(
                                                        "v-menu",
                                                        {
                                                          attrs: {
                                                            "close-on-content-click": false,
                                                            "nudge-right": 40,
                                                            transition:
                                                              "scale-transition",
                                                            "offset-y": "",
                                                            "min-width": "290px"
                                                          },
                                                          scopedSlots: _vm._u([
                                                            {
                                                              key: "activator",
                                                              fn: function(
                                                                ref
                                                              ) {
                                                                var on = ref.on
                                                                var attrs =
                                                                  ref.attrs
                                                                return [
                                                                  _c(
                                                                    "v-text-field",
                                                                    _vm._g(
                                                                      _vm._b(
                                                                        {
                                                                          attrs: {
                                                                            name:
                                                                              "month",
                                                                            label:
                                                                              "Select Month",
                                                                            "prepend-icon":
                                                                              "mdi-calendar"
                                                                          },
                                                                          model: {
                                                                            value:
                                                                              _vm
                                                                                .remit
                                                                                .month,
                                                                            callback: function(
                                                                              $$v
                                                                            ) {
                                                                              _vm.$set(
                                                                                _vm.remit,
                                                                                "month",
                                                                                $$v
                                                                              )
                                                                            },
                                                                            expression:
                                                                              "remit.month"
                                                                          }
                                                                        },
                                                                        "v-text-field",
                                                                        attrs,
                                                                        false
                                                                      ),
                                                                      on
                                                                    )
                                                                  )
                                                                ]
                                                              }
                                                            }
                                                          ]),
                                                          model: {
                                                            value: _vm.menu2,
                                                            callback: function(
                                                              $$v
                                                            ) {
                                                              _vm.menu2 = $$v
                                                            },
                                                            expression: "menu2"
                                                          }
                                                        },
                                                        [
                                                          _vm._v(" "),
                                                          _c("v-date-picker", {
                                                            attrs: {
                                                              type: "month"
                                                            },
                                                            on: {
                                                              input: function(
                                                                $event
                                                              ) {
                                                                _vm.menu2 = false
                                                                _vm.getAmount()
                                                              }
                                                            },
                                                            model: {
                                                              value:
                                                                _vm.remit.month,
                                                              callback: function(
                                                                $$v
                                                              ) {
                                                                _vm.$set(
                                                                  _vm.remit,
                                                                  "month",
                                                                  $$v
                                                                )
                                                              },
                                                              expression:
                                                                "remit.month"
                                                            }
                                                          })
                                                        ],
                                                        1
                                                      )
                                                    ],
                                                    1
                                                  ),
                                                  _vm._v(" "),
                                                  _c(
                                                    "v-col",
                                                    {
                                                      attrs: {
                                                        id: "amount",
                                                        cols: "12",
                                                        sm: "12",
                                                        md: "12"
                                                      }
                                                    },
                                                    [
                                                      _c("v-text-field", {
                                                        attrs: {
                                                          readonly: "",
                                                          required:
                                                            "Amount is required",
                                                          name: "amount",
                                                          label: "Amount",
                                                          rules: [
                                                            function(v) {
                                                              return (
                                                                !!v ||
                                                                "Amount is required"
                                                              )
                                                            }
                                                          ]
                                                        },
                                                        model: {
                                                          value:
                                                            _vm.remit.amount,
                                                          callback: function(
                                                            $$v
                                                          ) {
                                                            _vm.$set(
                                                              _vm.remit,
                                                              "amount",
                                                              $$v
                                                            )
                                                          },
                                                          expression:
                                                            "remit.amount"
                                                        }
                                                      })
                                                    ],
                                                    1
                                                  ),
                                                  _vm._v(" "),
                                                  _c(
                                                    "v-col",
                                                    {
                                                      staticClass: "hide",
                                                      attrs: {
                                                        id: "amountDue",
                                                        cols: "12",
                                                        sm: "12",
                                                        md: "12"
                                                      }
                                                    },
                                                    [
                                                      _c("v-text-field", {
                                                        attrs: {
                                                          readonly: "",
                                                          required:
                                                            "Amount is required",
                                                          name: "amountCard",
                                                          label: "Amount Due "
                                                        },
                                                        model: {
                                                          value: _vm.amountCard,
                                                          callback: function(
                                                            $$v
                                                          ) {
                                                            _vm.amountCard = $$v
                                                          },
                                                          expression:
                                                            "amountCard"
                                                        }
                                                      })
                                                    ],
                                                    1
                                                  ),
                                                  _vm._v(" "),
                                                  _c(
                                                    "v-col",
                                                    {
                                                      attrs: {
                                                        id: "lga_col",
                                                        cols: "12",
                                                        sm: "12",
                                                        md: "12"
                                                      }
                                                    },
                                                    [
                                                      _c("v-select", {
                                                        attrs: {
                                                          name: "payment_type",
                                                          required:
                                                            "Select Payment Channel",
                                                          rules: [
                                                            function(v) {
                                                              return (
                                                                !!v ||
                                                                "Payment Type is required"
                                                              )
                                                            }
                                                          ],
                                                          items:
                                                            _vm.payment_types,
                                                          "item-text": "name",
                                                          "item-value": "id",
                                                          label:
                                                            "Select Payment Channel"
                                                        },
                                                        on: {
                                                          change: function(
                                                            $event
                                                          ) {
                                                            return _vm.calculateCardFee(
                                                              _vm.remit
                                                                .payment_type,
                                                              _vm.remit.amount
                                                            )
                                                          }
                                                        },
                                                        model: {
                                                          value:
                                                            _vm.remit
                                                              .payment_type,
                                                          callback: function(
                                                            $$v
                                                          ) {
                                                            _vm.$set(
                                                              _vm.remit,
                                                              "payment_type",
                                                              $$v
                                                            )
                                                          },
                                                          expression:
                                                            "remit.payment_type"
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
                                        ],
                                        1
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "v-card-actions",
                                        [
                                          _c("v-spacer"),
                                          _vm._v(" "),
                                          _c("input", {
                                            staticClass: "btn btn-lg",
                                            staticStyle: {
                                              "background-color": "green",
                                              color: "whitesmoke"
                                            },
                                            attrs: {
                                              type: "submit",
                                              color: "blue darken-1",
                                              value: "Initialize"
                                            }
                                          }),
                                          _vm._v(
                                            "  \n                                        "
                                          ),
                                          _c("input", {
                                            staticClass: "btn btn-lg",
                                            staticStyle: {
                                              "background-color": "red",
                                              color: "whitesmoke"
                                            },
                                            attrs: {
                                              type: "button",
                                              color: "blue darken-1",
                                              value: "Cancel"
                                            },
                                            on: { click: _vm.close }
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
                            ]
                          )
                        ],
                        1
                      )
                    ]
                  },
                  proxy: true
                },
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
                      item.payment_date != ""
                        ? _c("span", [
                            _vm._v(
                              _vm._s(
                                _vm._f("moment")(
                                  item.payment_date,
                                  "MMM Do YYYY, h:mm:ss a"
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
                },
                {
                  key: "item.actions",
                  fn: function(ref) {
                    var item = ref.item
                    return [
                      item.status == "success"
                        ? _c(
                            "div",
                            { staticStyle: { color: "blue" } },
                            [
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
                                                    path:
                                                      "/remittance/cashreceipt/" +
                                                      item.txn_ref
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
                                                  [_vm._v("mdi-eye")]
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
                                [
                                  _vm._v(" "),
                                  _c("span", [_vm._v("Cash receipt")])
                                ]
                              )
                            ],
                            1
                          )
                        : _c(
                            "div",
                            {
                              staticStyle: { color: "deeppink" },
                              on: {
                                click: function($event) {
                                  return _vm.pendingTxn(item)
                                }
                              }
                            },
                            [
                              _c(
                                "v-overlay",
                                { attrs: { value: _vm.reloader_status } },
                                [
                                  _c("v-progress-circular", {
                                    attrs: { indeterminate: "", size: "30" }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
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
                                              [_vm._v("mdi-refresh")]
                                            )
                                          ]
                                        }
                                      }
                                    ],
                                    null,
                                    true
                                  )
                                },
                                [_vm._v(" "), _c("span", [_vm._v("Re-verify")])]
                              )
                            ],
                            1
                          )
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
            ),
            _vm._v(" "),
            _c("div", [
              _c("span", [
                _c("h5", [_vm._v(_vm._s(this.totalLabel) + " ")]),
                _vm._v(" "),
                _c("h6", [
                  _c("b", [
                    _vm._v(
                      _vm._s(
                        new Intl.NumberFormat("en-NG", {
                          style: "currency",
                          currency: "NGN"
                        }).format(this.grand_total)
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
}
var staticRenderFns = [
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
    return _c("div", { staticClass: "panel-heading d-flex" }, [
      _c("span", [_vm._v(" Cash Remittance ")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/remittance/Remittance.vue":
/*!***********************************************************!*\
  !*** ./resources/js/components/remittance/Remittance.vue ***!
  \***********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Remittance_vue_vue_type_template_id_62913e14___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Remittance.vue?vue&type=template&id=62913e14& */ "./resources/js/components/remittance/Remittance.vue?vue&type=template&id=62913e14&");
/* harmony import */ var _Remittance_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Remittance.vue?vue&type=script&lang=js& */ "./resources/js/components/remittance/Remittance.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Remittance_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Remittance_vue_vue_type_template_id_62913e14___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Remittance_vue_vue_type_template_id_62913e14___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/remittance/Remittance.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/remittance/Remittance.vue?vue&type=script&lang=js&":
/*!************************************************************************************!*\
  !*** ./resources/js/components/remittance/Remittance.vue?vue&type=script&lang=js& ***!
  \************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Remittance_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Remittance.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/remittance/Remittance.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Remittance_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/remittance/Remittance.vue?vue&type=template&id=62913e14&":
/*!******************************************************************************************!*\
  !*** ./resources/js/components/remittance/Remittance.vue?vue&type=template&id=62913e14& ***!
  \******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Remittance_vue_vue_type_template_id_62913e14___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Remittance.vue?vue&type=template&id=62913e14& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/remittance/Remittance.vue?vue&type=template&id=62913e14&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Remittance_vue_vue_type_template_id_62913e14___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Remittance_vue_vue_type_template_id_62913e14___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);