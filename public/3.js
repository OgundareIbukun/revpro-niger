(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[3],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/agent/Agents.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/agent/Agents.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


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
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "Agents",
  //        components: {
  //        },
  data: function data() {
    //() =>({
    return {
      lgaComp: true,
      passwordComp: true,
      cpasswordComp: true,
      table_1: true,
      absolute: true,
      dialog2: false,
      page: 1,
      pageCount: 0,
      itemsPerPage: 10,
      reloader_status: false,
      index: '',
      device: '',
      dialog: false,
      search: '',
      headers: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'Name',
        value: 'name'
      }, {
        text: 'Email',
        value: 'email'
      }, {
        text: 'Phone Number',
        value: 'phone'
      }, {
        text: 'Dept',
        value: 'dept'
      }, {
        text: 'LGA',
        value: 'lga_name'
      }, {
        text: 'Revenue Point',
        value: 'revenue_point'
      }, {
        text: 'Unremitted Cash',
        value: 'unremitted_cash'
      }, {
        text: 'Action',
        value: 'actions',
        sortable: false
      }],
      columns: [{
        label: '#',
        field: 'sn'
      }, {
        label: 'Name',
        field: 'name'
      }, {
        label: 'Email',
        field: 'email'
      }, {
        label: 'Phone Number',
        field: 'phone'
      }, {
        label: 'Dept',
        field: 'dept'
      }, {
        label: 'LGA',
        field: 'lga_name'
      }, {
        label: 'Revenue Point',
        field: 'revenue_point'
      }, {
        label: 'Unremitted Cash',
        field: 'unremitted_cash',
        dataFormat: this.$shared.amountFormat
      }],
      //  summary:[],
      agents: [],
      agentIndex: -1,
      agent: {
        'sn': '',
        'id': '',
        'name': '',
        'email': '',
        'phone': '',
        'password': '',
        'password_confirmation': '',
        'revenue_point': '',
        'revPoint_id': '',
        'lga_id': '',
        'dept': '',
        'cash_remittance': ''
      },
      agentDefault: {
        'sn': '',
        'id': '',
        'name': '',
        'email': '',
        'phone': '',
        'password': '',
        'password_confirmation': '',
        'revenue_point': '',
        'lga_id': '',
        'dept': '',
        'cash_remittance': ''
      },
      errors: [],
      errors2: [],
      lgas: {
        name: '',
        id: ''
      },
      revenuepoints: [],
      dpts: [],
      lga_disabled: false,
      dpt: [],
      category: {
        value: [],
        options: []
      },
      revpts_agent: [],
      services: [],
      txn: {
        agent: '',
        revpoint: '',
        amount: '',
        service: ''
      }
    };
  },
  //  }),
  computed: {
    formTitle: function formTitle() {
      if (this.agentIndex === -1) {
        this.passwordComp = true;
        this.cpasswordComp = true;
      } else {
        this.passwordComp = false;
        this.cpasswordComp = false;
      }

      return this.agentIndex === -1 ? 'New Agent' : 'Edit Agent';
    },
    hide_it: function hide_it() {
      return this.agentIndex === -1 ? false : true;
    }
  },
  watch: {
    dialog: function dialog(val) {
      val || this.close();
    }
  },
  methods: {
    addNewTxn: function addNewTxn(item) {
      this.txn.agent = item.id;
      this.getAgentRevpt();
      this.getServices();
      this.dialog2 = true;
    },
    editAgent: function editAgent(item) {
      this.agentIndex = this.agents.indexOf(item); // this.agent = Object.assign({   }, item),

      this.agent.name = item.name;
      this.agent.email = item.email;
      this.agent.phone = item.phone;
      this.agent.lga_id = item.lga_id;
      this.agent.revPoint_id = item.revenue_point.split(','); // this.agent.revPoint_id = item.revenue_point_id.split(',');

      this.agent.dept = item.dept.split(',');
      this.agent.id = item.id;
      this.lgaComp = true;
      this.getRevPoints();

      if (item.unremitted_cash > 0) {
        this.lgaComp = false;
      } //  this.passwordComp=false;
      //  this.cpasswordComp=false;


      this.dialog = true;
    },
    deleteItem: function deleteItem(item) {
      var index = this.agents.indexOf(item); // confirm('Are you sure you want to delete ?'+item.name ) && this.agents.splice(index, 1)

      this.deleteAgent(item);
    },
    close: function close() {
      var _this = this;

      this.dialog = false; //  this.passwordComp=false;
      // this.cpasswordComp=false;

      this.$nextTick(function () {
        _this.agent = Object.assign({}, _this.agentDefault), //    $('#select_col').removeClass('hide');
        _this.agentIndex = -1;
      });
    },
    save: function save() {
      if (this.agentIndex > -1) {
        // edit
        Object.assign(this.agents[this.agentIndex], this.agent);
        this.updateAgent(); // this.passwordComp=true;
        // this.cpasswordComp=true;
        // console.log(this.agent.dept);
        // console.log(this.agent.revPoint_id);
      } else {
        // new
        //  this.agents.push(this.agent)
        //  console.log(this.agent.dept);
        // console.log(this.agent.revPoint_id);
        this.addNewAgent();
      }

      this.close();
    },
    addNewAgent: function () {
      var _addNewAgent = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        var _this2 = this;

        var userdata, agentdata;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                // let formData = new FormData();
                // formData.append('name', this.agent.name);
                userdata = {
                  'name': this.agent.name,
                  'email': this.agent.email,
                  'phone': this.agent.phone,
                  'lga_id': this.agent.lga_id,
                  'password': this.agent.password
                };
                agentdata = {
                  'dept': this.agent.dept //this.category.value,

                }; //   alert(this.agent.dept);

                _context.prev = 2;
                _context.next = 5;
                return axios.post('/agent', {
                  users: userdata,
                  agents: agentdata,
                  cpassword: this.agent.password_confirmation,
                  revenue_point_id: this.agent.revPoint_id
                }).then(function (response) {
                  _this2.dialog = false; //console.log(response.data);

                  if (response.data.status == 'success') {
                    //hide modal
                    // $('#agentsModal').modal('hide');
                    //display notification
                    _this2.flashMessage.success({
                      title: '',
                      message: 'Agent added successfully!',
                      time: 5000
                    }); //  this.agents.unshift(response.data.data);

                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this2.errors = error.response.data.errors;
                    _this2.dialog = true;

                    _this2.flashMessage.error({
                      title: '',
                      message: 'Unprocessable entity!',
                      time: 5000
                    });
                  } else {
                    console.log('else1');
                  }
                });

              case 5:
                _context.next = 10;
                break;

              case 7:
                _context.prev = 7;
                _context.t0 = _context["catch"](2);
                //console.log('df '+e);
                this.flashMessage.error({
                  title: '',
                  message: 'Error in adding Agent!',
                  time: 5000
                });

              case 10:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this, [[2, 7]]);
      }));

      function addNewAgent() {
        return _addNewAgent.apply(this, arguments);
      }

      return addNewAgent;
    }(),
    // TODO: TEMPORARY USED FOR PARTIAL UPLOADING OF QP FROM MOBILE APP
    addSupplementaryTxn: function () {
      var _addSupplementaryTxn = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        var _this3 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                _context2.next = 3;
                return axios.post('/revenue/quickprint', {
                  'agent_id': this.txn.agent,
                  'revenue_point_id': this.txn.revpoint,
                  'service_id': this.txn.service,
                  'amount': this.txn.amount
                }).then(function (response) {
                  _this3.dialog2 = false; //console.log(response.data);

                  if (response.data.status == 'success') {
                    //display notification
                    _this3.flashMessage.success({
                      title: '',
                      message: 'Transaction has added successfully!',
                      time: 5000
                    }); //  this.agents.unshift(response.data.data);

                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this3.errors2 = error.response.data.errors;
                    _this3.dialog2 = true;

                    _this3.flashMessage.error({
                      title: '',
                      message: 'Unprocessable entity!',
                      time: 5000
                    });
                  } else {
                    console.log('else1');
                  }
                });

              case 3:
                _context2.next = 8;
                break;

              case 5:
                _context2.prev = 5;
                _context2.t0 = _context2["catch"](0);
                //console.log('df '+e);
                this.flashMessage.error({
                  title: '',
                  message: 'Error in adding Agent!',
                  time: 5000
                });

              case 8:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this, [[0, 5]]);
      }));

      function addSupplementaryTxn() {
        return _addSupplementaryTxn.apply(this, arguments);
      }

      return addSupplementaryTxn;
    }(),
    updateAgent: function () {
      var _updateAgent = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee3() {
        var _this4 = this;

        var userdata, agentdata2;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                userdata = {
                  'name': this.agent.name,
                  'email': this.agent.email,
                  'phone': this.agent.phone,
                  'lga_id': this.agent.lga_id
                };
                agentdata2 = {
                  'dept': this.agent.dept
                };
                _context3.prev = 2;
                _context3.next = 5;
                return axios.put('/agent/' + this.agent.id, {
                  user: userdata,
                  agent: agentdata2,
                  revenue_point_id: this.agent.revPoint_id
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    _this4.dialog = false; //update table
                    //                                this.agents.map(agent =>{
                    //                                    if(agent.id == response.data.data.id) {
                    //                                        //agent = response.data.data;
                    //                                        for(let key in response.data.data){
                    //                                            agent[key] = response.data.data[key];
                    //                                        }
                    //                                    }
                    //                                });
                    //show notification

                    _this4.flashMessage.success({
                      title: '',
                      message: 'Agent updated successfully!',
                      time: 5000
                    });
                  }
                })["catch"](function (error) {
                  // console.log(error.response.data.errors);
                  if (error.response.status == 422) {
                    //console.log(error.response.data.errors['users.name'][0]);
                    _this4.errors = error.response.data.errors;

                    _this4.flashMessage.error({
                      title: '',
                      message: 'Unprocessable entity!',
                      time: 5000
                    });
                  } else {
                    console.log('else2');
                  }
                });

              case 5:
                _context3.next = 9;
                break;

              case 7:
                _context3.prev = 7;
                _context3.t0 = _context3["catch"](2);

              case 9:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, this, [[2, 7]]);
      }));

      function updateAgent() {
        return _updateAgent.apply(this, arguments);
      }

      return updateAgent;
    }(),
    deleteAgent: function () {
      var _deleteAgent = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee4(agent) {
        var _this5 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee4$(_context4) {
          while (1) {
            switch (_context4.prev = _context4.next) {
              case 0:
                if (window.confirm("Are you sure you want to delete ".concat(agent.name))) {
                  _context4.next = 2;
                  break;
                }

                return _context4.abrupt("return");

              case 2:
                _context4.prev = 2;
                _context4.next = 5;
                return axios["delete"]('/agent/' + agent.id).then(function (response) {
                  // console.log(response);
                  if (response.status == 204) {
                    //remove from table
                    _this5.agents = _this5.agents.filter(function (obj) {
                      return obj.id != agent.id;
                    }); //show notification

                    _this5.flashMessage.success({
                      title: '',
                      message: 'Agent deleted successfully!',
                      time: 5000
                    });
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 404) {
                    //console.log(error.response.data.errors['users.name'][0]);
                    _this5.errors = error.response.data.errors;

                    _this5.flashMessage.error({
                      title: '',
                      message: 'Agent not found!',
                      time: 5000
                    });
                  } else {
                    console.log('else');
                  }
                });

              case 5:
                _context4.next = 10;
                break;

              case 7:
                _context4.prev = 7;
                _context4.t0 = _context4["catch"](2);
                this.flashMessage.error({
                  title: '',
                  message: 'Error in deleting Agent!',
                  time: 5000
                });

              case 10:
              case "end":
                return _context4.stop();
            }
          }
        }, _callee4, this, [[2, 7]]);
      }));

      function deleteAgent(_x) {
        return _deleteAgent.apply(this, arguments);
      }

      return deleteAgent;
    }(),
    getRevPoints: function () {
      var _getRevPoints = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee5() {
        var _this6 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee5$(_context5) {
          while (1) {
            switch (_context5.prev = _context5.next) {
              case 0:
                _context5.prev = 0;
                _context5.next = 3;
                return axios.post('/revenuepoints/lga', {
                  'lga_id': this.agent.lga_id
                }).then(function (response) {
                  _this6.revenuepoints = response.data.data;
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
    }(),
    getAgents: function () {
      var _getAgents = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee6() {
        var _this7 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee6$(_context6) {
          while (1) {
            switch (_context6.prev = _context6.next) {
              case 0:
                _context6.prev = 0;
                _context6.next = 3;
                return axios.get('/agent').then(function (response) {
                  //console.log(response.data.data);
                  _this7.agents = response.data.data;
                  _this7.table_1 = false;
                })["catch"](function (error) {
                  console.log(error);
                });

              case 3:
                _context6.next = 8;
                break;

              case 5:
                _context6.prev = 5;
                _context6.t0 = _context6["catch"](0);
                console.log(_context6.t0);

              case 8:
              case "end":
                return _context6.stop();
            }
          }
        }, _callee6, null, [[0, 5]]);
      }));

      function getAgents() {
        return _getAgents.apply(this, arguments);
      }

      return getAgents;
    }(),
    getCategories: function () {
      var _getCategories = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee7() {
        var _this8 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee7$(_context7) {
          while (1) {
            switch (_context7.prev = _context7.next) {
              case 0:
                _context7.prev = 0;
                _context7.next = 3;
                return axios.get('/getcategory').then(function (response) {
                  //console.log(response.data.data);
                  _this8.dpts = response.data.data; //this.dpts = ['kolade','tunde'];
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
        }, _callee7, null, [[0, 5]]);
      }));

      function getCategories() {
        return _getCategories.apply(this, arguments);
      }

      return getCategories;
    }(),
    getLgas: function () {
      var _getLgas = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee8() {
        var _this9 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee8$(_context8) {
          while (1) {
            switch (_context8.prev = _context8.next) {
              case 0:
                _context8.prev = 0;
                _context8.next = 3;
                return axios.get("/state/".concat(this.$state_id, "/lgas")).then(function (response) {
                  _this9.lgas = response.data.data;
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

      function getLgas() {
        return _getLgas.apply(this, arguments);
      }

      return getLgas;
    }(),
    deviceStatus: function deviceStatus(item) {
      this.device = item.device;
      this.agent.id = item.id;
      this.agent.name = item.name;
      this.index = this.agents.indexOf(item);
      this.changeDevice();
    },
    changeDevice: function () {
      var _changeDevice = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee9() {
        var _this10 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee9$(_context9) {
          while (1) {
            switch (_context9.prev = _context9.next) {
              case 0:
                if (window.confirm("Are you sure you want to unlock  device for ".concat(this.agent.name, ". NOTE: This action will allow agent to access his account via another device."))) {
                  _context9.next = 2;
                  break;
                }

                return _context9.abrupt("return");

              case 2:
                _context9.prev = 2;
                // alert(this.ref);
                this.reloader_status = true;
                _context9.next = 6;
                return axios.post("/agent/device", {
                  'agent_id': this.agent.id
                }).then(function (response) {
                  // this.remit.status = response.data.data;
                  Object.assign(_this10.agents[_this10.index], response.data.data);
                  _this10.reloader_status = false;
                })["catch"](function (error) {
                  console.log(error);
                });

              case 6:
                _context9.next = 11;
                break;

              case 8:
                _context9.prev = 8;
                _context9.t0 = _context9["catch"](2);
                console.log(_context9.t0);

              case 11:
              case "end":
                return _context9.stop();
            }
          }
        }, _callee9, this, [[2, 8]]);
      }));

      function changeDevice() {
        return _changeDevice.apply(this, arguments);
      }

      return changeDevice;
    }(),
    getAgentRevpt: function () {
      var _getAgentRevpt = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee10() {
        var _this11 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee10$(_context10) {
          while (1) {
            switch (_context10.prev = _context10.next) {
              case 0:
                _context10.prev = 0;
                _context10.next = 3;
                return axios.get('/agent_revpoints/' + this.txn.agent).then(function (response) {
                  //console.log(response.data.data);
                  _this11.revpts_agent = response.data.data; //this.table_1 = false;
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

      function getAgentRevpt() {
        return _getAgentRevpt.apply(this, arguments);
      }

      return getAgentRevpt;
    }(),
    getServices: function () {
      var _getServices = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee11() {
        var _this12 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee11$(_context11) {
          while (1) {
            switch (_context11.prev = _context11.next) {
              case 0:
                _context11.prev = 0;
                _context11.next = 3;
                return axios.get('/service').then(function (response) {
                  //console.log(response.data.data);
                  _this12.services = response.data.data; //this.table_1 = false;
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
        }, _callee11, null, [[0, 5]]);
      }));

      function getServices() {
        return _getServices.apply(this, arguments);
      }

      return getServices;
    }()
  },
  mounted: function mounted() {
    //   document.body.setAttribute('data-app', true)
    $('#agt-manage-submenu').addClass('active');
    $('#agt-manage-submenu').parent().parent().find('#agent-menu').addClass('active');
    this.getCategories();
    this.getRevPoints();
    this.getAgents();
    this.getLgas();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/agent/Agents.vue?vue&type=template&id=4d83477a&":
/*!***************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/agent/Agents.vue?vue&type=template&id=4d83477a& ***!
  \***************************************************************************************************************************************************************************************************************/
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
      _c("h1", [_vm._v("AGENTS")]),
      _vm._v(" "),
      _c("ol", { staticClass: "breadcrumb" }, [
        _c(
          "li",
          [
            _c("router-link", { attrs: { to: "/", exact: "" } }, [
              _c("i", { staticClass: "fa fa-dashboard" }),
              _vm._v(" "),
              _c("span", { staticClass: "nav-label" }, [_vm._v("Home")])
            ])
          ],
          1
        ),
        _vm._v(" "),
        _c("li", { staticClass: "active" }, [_vm._v("Agents")])
      ])
    ]),
    _vm._v(" "),
    _c(
      "div",
      { staticClass: "page-body" },
      [
        _c("div", { staticClass: "panel panel-default" }, [
          _vm._m(0),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "panel-body" },
            [
              _c(
                "v-overlay",
                { attrs: { absolute: _vm.absolute, value: _vm.table_1 } },
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
                      _vm._v("   \n                        "),
                      _c(
                        "vue-excel-xlsx",
                        {
                          attrs: {
                            data: this.agents,
                            columns: _vm.columns,
                            filename: "agent",
                            sheetname: "agent"
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
                staticClass: "elevation-1",
                attrs: {
                  headers: this.headers,
                  items: this.agents,
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
                                        _c(
                                          "v-col",
                                          {
                                            attrs: {
                                              cols: "12",
                                              md: "4",
                                              sm: "4"
                                            }
                                          },
                                          [
                                            _c(
                                              "v-btn",
                                              _vm._g(
                                                {
                                                  staticClass: " mb-2",
                                                  staticStyle: {
                                                    "background-color":
                                                      "#3c8dbc",
                                                    float: "left"
                                                  },
                                                  attrs: { color: "info" }
                                                },
                                                on
                                              ),
                                              [_vm._v("New Agent")]
                                            )
                                          ],
                                          1
                                        )
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
                                  "v-card",
                                  [
                                    _c("v-card-title", [
                                      _c("span", { staticClass: "headline" }, [
                                        _vm._v(_vm._s(_vm.formTitle))
                                      ])
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
                                                    _c("v-text-field", {
                                                      attrs: {
                                                        label: "Agent`s Name",
                                                        rules: [
                                                          function(v) {
                                                            return (
                                                              !!v ||
                                                              "Name is required"
                                                            )
                                                          }
                                                        ],
                                                        "error-messages":
                                                          _vm.errors[
                                                            "users.name"
                                                          ]
                                                      },
                                                      model: {
                                                        value: _vm.agent.name,
                                                        callback: function(
                                                          $$v
                                                        ) {
                                                          _vm.$set(
                                                            _vm.agent,
                                                            "name",
                                                            $$v
                                                          )
                                                        },
                                                        expression: "agent.name"
                                                      }
                                                    }),
                                                    _vm._v(" "),
                                                    _vm.errors["users.name"]
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
                                                              "agent`s name is required"
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
                                                    _c("v-text-field", {
                                                      attrs: {
                                                        label: "Phone number",
                                                        rules: [
                                                          function(v) {
                                                            return (
                                                              !!v ||
                                                              "Phone number is required"
                                                            )
                                                          }
                                                        ]
                                                      },
                                                      model: {
                                                        value: _vm.agent.phone,
                                                        callback: function(
                                                          $$v
                                                        ) {
                                                          _vm.$set(
                                                            _vm.agent,
                                                            "phone",
                                                            $$v
                                                          )
                                                        },
                                                        expression:
                                                          "agent.phone"
                                                      }
                                                    }),
                                                    _vm._v(" "),
                                                    _vm.errors["users.phone"]
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
                                                              "phone number is required"
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
                                                    _c("v-text-field", {
                                                      attrs: {
                                                        label: "Email Address",
                                                        rules: [
                                                          function(v) {
                                                            return (
                                                              !!v ||
                                                              "Email is required"
                                                            )
                                                          }
                                                        ]
                                                      },
                                                      model: {
                                                        value: _vm.agent.email,
                                                        callback: function(
                                                          $$v
                                                        ) {
                                                          _vm.$set(
                                                            _vm.agent,
                                                            "email",
                                                            $$v
                                                          )
                                                        },
                                                        expression:
                                                          "agent.email"
                                                      }
                                                    }),
                                                    _vm._v(" "),
                                                    _vm.errors["users.email"]
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
                                                              "Email is required"
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
                                                    _c("v-select", {
                                                      attrs: {
                                                        rules: [
                                                          function(v) {
                                                            return (
                                                              !!v ||
                                                              "Departement is required"
                                                            )
                                                          }
                                                        ],
                                                        items: _vm.dpts,
                                                        "menu-props": {
                                                          maxHeight: "400"
                                                        },
                                                        label:
                                                          "Select department",
                                                        multiple: "",
                                                        hint:
                                                          "Select department",
                                                        "persistent-hint": ""
                                                      },
                                                      model: {
                                                        value: _vm.agent.dept,
                                                        callback: function(
                                                          $$v
                                                        ) {
                                                          _vm.$set(
                                                            _vm.agent,
                                                            "dept",
                                                            $$v
                                                          )
                                                        },
                                                        expression: "agent.dept"
                                                      }
                                                    }),
                                                    _vm._v(" "),
                                                    _vm.errors["agent.dept"]
                                                      ? _c(
                                                          "label",
                                                          {
                                                            staticClass:
                                                              " error",
                                                            staticStyle: {
                                                              color: "red"
                                                            }
                                                          },
                                                          [
                                                            _vm._v(
                                                              "dept is required"
                                                            )
                                                          ]
                                                        )
                                                      : _vm._e()
                                                  ],
                                                  1
                                                ),
                                                _vm._v(" "),
                                                _vm.lgaComp
                                                  ? _c(
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
                                                          ref: "algvt",
                                                          attrs: {
                                                            id: "algvt",
                                                            rules: [
                                                              function(v) {
                                                                return (
                                                                  !!v ||
                                                                  "LGA is required"
                                                                )
                                                              }
                                                            ],
                                                            items: _vm.lgas,
                                                            "item-text": "name",
                                                            "item-value": "id",
                                                            label: "Select LGA"
                                                          },
                                                          on: {
                                                            change: function(
                                                              $event
                                                            ) {
                                                              return _vm.getRevPoints()
                                                            }
                                                          },
                                                          model: {
                                                            value:
                                                              _vm.agent.lga_id,
                                                            callback: function(
                                                              $$v
                                                            ) {
                                                              _vm.$set(
                                                                _vm.agent,
                                                                "lga_id",
                                                                $$v
                                                              )
                                                            },
                                                            expression:
                                                              "agent.lga_id"
                                                          }
                                                        }),
                                                        _vm._v(" "),
                                                        _vm.errors[
                                                          "users.lga_id"
                                                        ]
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
                                                                  "LGA is required"
                                                                )
                                                              ]
                                                            )
                                                          : _vm._e()
                                                      ],
                                                      1
                                                    )
                                                  : _vm._e(),
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
                                                    _c("v-select", {
                                                      attrs: {
                                                        rules: [
                                                          function(v) {
                                                            return (
                                                              !!v ||
                                                              "Revenue point is required"
                                                            )
                                                          }
                                                        ],
                                                        items:
                                                          _vm.revenuepoints,
                                                        "menu-props": {
                                                          maxHeight: "400"
                                                        },
                                                        label:
                                                          "Select Revenue point",
                                                        multiple: "",
                                                        hint:
                                                          "Select Revenue point",
                                                        "persistent-hint": ""
                                                      },
                                                      model: {
                                                        value:
                                                          _vm.agent.revPoint_id,
                                                        callback: function(
                                                          $$v
                                                        ) {
                                                          _vm.$set(
                                                            _vm.agent,
                                                            "revPoint_id",
                                                            $$v
                                                          )
                                                        },
                                                        expression:
                                                          "agent.revPoint_id"
                                                      }
                                                    }),
                                                    _vm._v(" "),
                                                    _vm.errors[
                                                      "agents.revenue_point_id"
                                                    ]
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
                                                              "revenue point is required"
                                                            )
                                                          ]
                                                        )
                                                      : _vm._e()
                                                  ],
                                                  1
                                                ),
                                                _vm._v(" "),
                                                _vm.passwordComp
                                                  ? _c(
                                                      "v-col",
                                                      {
                                                        attrs: {
                                                          cols: "12",
                                                          sm: "12",
                                                          md: "12"
                                                        }
                                                      },
                                                      [
                                                        _c("v-text-field", {
                                                          attrs: {
                                                            rules: [
                                                              function(v) {
                                                                return (
                                                                  !!v ||
                                                                  "Password is required"
                                                                )
                                                              }
                                                            ],
                                                            label: "Password"
                                                          },
                                                          model: {
                                                            value:
                                                              _vm.agent
                                                                .password,
                                                            callback: function(
                                                              $$v
                                                            ) {
                                                              _vm.$set(
                                                                _vm.agent,
                                                                "password",
                                                                $$v
                                                              )
                                                            },
                                                            expression:
                                                              "agent.password"
                                                          }
                                                        }),
                                                        _vm._v(" "),
                                                        _vm.errors[
                                                          "users.password"
                                                        ]
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
                                                                  "Password required"
                                                                )
                                                              ]
                                                            )
                                                          : _vm._e()
                                                      ],
                                                      1
                                                    )
                                                  : _vm._e(),
                                                _vm._v(" "),
                                                _vm.cpasswordComp
                                                  ? _c(
                                                      "v-col",
                                                      {
                                                        attrs: {
                                                          cols: "12",
                                                          sm: "12",
                                                          md: "12"
                                                        }
                                                      },
                                                      [
                                                        _c("v-text-field", {
                                                          attrs: {
                                                            rules: [
                                                              function(v) {
                                                                return (
                                                                  !!v ||
                                                                  "Confirm password is required"
                                                                )
                                                              }
                                                            ],
                                                            label:
                                                              "Confirm Password"
                                                          },
                                                          model: {
                                                            value:
                                                              _vm.agent
                                                                .password_confirmation,
                                                            callback: function(
                                                              $$v
                                                            ) {
                                                              _vm.$set(
                                                                _vm.agent,
                                                                "password_confirmation",
                                                                $$v
                                                              )
                                                            },
                                                            expression:
                                                              "agent.password_confirmation"
                                                          }
                                                        }),
                                                        _vm._v(" "),
                                                        _vm.errors["cpassword"]
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
                                                                  "confirmed password must match password."
                                                                )
                                                              ]
                                                            )
                                                          : _vm._e()
                                                      ],
                                                      1
                                                    )
                                                  : _vm._e()
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
                                        _c(
                                          "v-btn",
                                          {
                                            staticStyle: { color: "orangered" },
                                            attrs: {
                                              olor: "blue darken-1",
                                              text: ""
                                            },
                                            on: { click: _vm.close }
                                          },
                                          [_vm._v("Cancel")]
                                        ),
                                        _vm._v(" "),
                                        _c(
                                          "v-btn",
                                          {
                                            staticStyle: { color: "#3c8dbc" },
                                            attrs: {
                                              color: "blue darken-1",
                                              text: ""
                                            },
                                            on: { click: _vm.save }
                                          },
                                          [_vm._v("Save")]
                                        )
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
                        )
                      ]
                    },
                    proxy: true
                  },
                  {
                    key: "item.unremitted_cash",
                    fn: function(ref) {
                      var item = ref.item
                      return [
                        _c("span", [
                          _vm._v(
                            _vm._s(
                              new Intl.NumberFormat("en-NG", {
                                style: "currency",
                                currency: "NGN"
                              }).format(item.unremitted_cash)
                            )
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
                                        "v-icon",
                                        _vm._g(
                                          _vm._b(
                                            {
                                              staticClass: "mr-2",
                                              staticStyle: { color: "#3c8dbc" },
                                              attrs: { small: "" },
                                              on: {
                                                click: function($event) {
                                                  return _vm.editAgent(item)
                                                }
                                              }
                                            },
                                            "v-icon",
                                            attrs,
                                            false
                                          ),
                                          on
                                        ),
                                        [_vm._v("edit")]
                                      )
                                    ]
                                  }
                                }
                              ],
                              null,
                              true
                            )
                          },
                          [_vm._v(" "), _c("span", [_vm._v("Edit Action")])]
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
                                            {
                                              staticStyle: { color: "red" },
                                              attrs: { small: "" },
                                              on: {
                                                click: function($event) {
                                                  return _vm.deleteAgent(item)
                                                }
                                              }
                                            },
                                            "v-icon",
                                            attrs,
                                            false
                                          ),
                                          on
                                        ),
                                        [_vm._v(" delete  ")]
                                      )
                                    ]
                                  }
                                }
                              ],
                              null,
                              true
                            )
                          },
                          [_vm._v(" "), _c("span", [_vm._v("Delete Action")])]
                        ),
                        _vm._v(" "),
                        item.device == "locked"
                          ? _c(
                              "div",
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
                                                    {
                                                      staticClass: "mr-2 ",
                                                      staticStyle: {
                                                        color: "deeppink"
                                                      },
                                                      attrs: { small: "" },
                                                      on: {
                                                        click: function(
                                                          $event
                                                        ) {
                                                          return _vm.deviceStatus(
                                                            item
                                                          )
                                                        }
                                                      }
                                                    },
                                                    "v-icon",
                                                    attrs,
                                                    false
                                                  ),
                                                  on
                                                ),
                                                [
                                                  _vm._v(
                                                    "\n                                mdi-lock\n                                "
                                                  )
                                                ]
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
                                    _c("span", [_vm._v("Locked device mode")])
                                  ]
                                )
                              ],
                              1
                            )
                          : _c(
                              "div",
                              { staticStyle: { color: "green" } },
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
                                                "v-icon",
                                                _vm._g(
                                                  _vm._b(
                                                    {
                                                      staticClass: "mr-2",
                                                      attrs: { small: "" }
                                                    },
                                                    "v-icon",
                                                    attrs,
                                                    false
                                                  ),
                                                  on
                                                ),
                                                [_vm._v("mdi-lock-open")]
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
                                    _c("span", [_vm._v("Unlock device mode")])
                                  ]
                                )
                              ],
                              1
                            ),
                        _vm._v(" "),
                        _vm.$roles.user_role == _vm.$roles.super_admin
                          ? _c(
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
                                                {
                                                  staticClass: "mr-2",
                                                  staticStyle: {
                                                    color: "#3c8dbc"
                                                  },
                                                  attrs: { small: "" },
                                                  on: {
                                                    click: function($event) {
                                                      return _vm.addNewTxn(item)
                                                    }
                                                  }
                                                },
                                                "v-icon",
                                                attrs,
                                                false
                                              ),
                                              on
                                            ),
                                            [_vm._v("addchart")]
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
                                _c("span", [
                                  _vm._v("Transaction Supplementary")
                                ])
                              ]
                            )
                          : _vm._e()
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
        ]),
        _vm._v(" "),
        _c(
          "v-dialog",
          {
            attrs: { "max-width": "500px" },
            model: {
              value: _vm.dialog2,
              callback: function($$v) {
                _vm.dialog2 = $$v
              },
              expression: "dialog2"
            }
          },
          [
            _c(
              "v-card",
              [
                _c("v-card-title", [
                  _vm._v(
                    "\n                    Supplementary Transaction\n                "
                  )
                ]),
                _vm._v(" "),
                _c(
                  "v-card-text",
                  [
                    _c("v-select", {
                      attrs: {
                        items: _vm.revpts_agent,
                        label: "Select RevenuePoint",
                        "item-value": "id",
                        "item-text": "name"
                      },
                      model: {
                        value: _vm.txn.revpoint,
                        callback: function($$v) {
                          _vm.$set(_vm.txn, "revpoint", $$v)
                        },
                        expression: "txn.revpoint"
                      }
                    }),
                    _vm._v(" "),
                    _vm.errors2["revenue_point_id"]
                      ? _c(
                          "label",
                          {
                            staticClass: " error",
                            staticStyle: { color: "red" }
                          },
                          [_vm._v(_vm._s(_vm.errors2["revenue_point_id"][0]))]
                        )
                      : _vm._e(),
                    _vm._v(" "),
                    _c("v-select", {
                      attrs: {
                        items: _vm.services,
                        label: "Select Service",
                        "item-value": "id",
                        "item-text": "name"
                      },
                      model: {
                        value: _vm.txn.service,
                        callback: function($$v) {
                          _vm.$set(_vm.txn, "service", $$v)
                        },
                        expression: "txn.service"
                      }
                    }),
                    _vm._v(" "),
                    _vm.errors2["service_id"]
                      ? _c(
                          "label",
                          {
                            staticClass: " error",
                            staticStyle: { color: "red" }
                          },
                          [_vm._v(_vm._s(_vm.errors2["service_id"][0]))]
                        )
                      : _vm._e(),
                    _vm._v(" "),
                    _c(
                      "v-col",
                      { attrs: { cols: "12", sm: "12", md: "12" } },
                      [
                        _c("v-text-field", {
                          attrs: { label: "Amount", placeholder: "3000" },
                          model: {
                            value: _vm.txn.amount,
                            callback: function($$v) {
                              _vm.$set(_vm.txn, "amount", $$v)
                            },
                            expression: "txn.amount"
                          }
                        }),
                        _vm._v(" "),
                        _vm.errors2["amount"]
                          ? _c(
                              "label",
                              {
                                staticClass: " error",
                                staticStyle: { color: "red" }
                              },
                              [_vm._v(_vm._s(_vm.errors2["amount"][0]))]
                            )
                          : _vm._e()
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
                    _c(
                      "v-btn",
                      {
                        staticStyle: {
                          "background-color": "steelblue",
                          color: "white"
                        },
                        attrs: { color: "primary", text: "" },
                        on: {
                          click: function($event) {
                            return _vm.addSupplementaryTxn()
                          }
                        }
                      },
                      [
                        _vm._v(
                          "\n                        Add\n                    "
                        )
                      ]
                    ),
                    _vm._v("  \n                    "),
                    _c(
                      "v-btn",
                      {
                        staticStyle: {
                          background: "orangered",
                          color: "white",
                          float: "right"
                        },
                        attrs: { color: "red", text: "" },
                        on: {
                          click: function($event) {
                            _vm.dialog2 = false
                          }
                        }
                      },
                      [
                        _vm._v(
                          "\n                        Close\n                    "
                        )
                      ]
                    )
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
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "panel-heading d-flex" }, [
      _c("span", [_vm._v("MANAGE AGENTS ")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/agent/Agents.vue":
/*!**************************************************!*\
  !*** ./resources/js/components/agent/Agents.vue ***!
  \**************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Agents_vue_vue_type_template_id_4d83477a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Agents.vue?vue&type=template&id=4d83477a& */ "./resources/js/components/agent/Agents.vue?vue&type=template&id=4d83477a&");
/* harmony import */ var _Agents_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Agents.vue?vue&type=script&lang=js& */ "./resources/js/components/agent/Agents.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Agents_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Agents_vue_vue_type_template_id_4d83477a___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Agents_vue_vue_type_template_id_4d83477a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/agent/Agents.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/agent/Agents.vue?vue&type=script&lang=js&":
/*!***************************************************************************!*\
  !*** ./resources/js/components/agent/Agents.vue?vue&type=script&lang=js& ***!
  \***************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Agents_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Agents.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/agent/Agents.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Agents_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/agent/Agents.vue?vue&type=template&id=4d83477a&":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/agent/Agents.vue?vue&type=template&id=4d83477a& ***!
  \*********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Agents_vue_vue_type_template_id_4d83477a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Agents.vue?vue&type=template&id=4d83477a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/agent/Agents.vue?vue&type=template&id=4d83477a&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Agents_vue_vue_type_template_id_4d83477a___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Agents_vue_vue_type_template_id_4d83477a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);