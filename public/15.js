(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[15],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/service/Services.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/service/Services.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  name: "Services",
  data: function data() {
    return _defineProperty({
      table_1: true,
      absolute: true,
      page: 1,
      pageCount: 0,
      itemsPerPage: 10,
      dialog: false,
      search: '',
      headers: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'Name',
        value: 'name'
      }, {
        text: 'Amount',
        value: 'price'
      }, {
        text: 'Frequency',
        value: 'frequency'
      }, {
        text: 'Sub Category',
        value: 'sub_category'
      }, {
        text: 'Other Category',
        value: 'other_category'
      }, {
        text: 'Dept',
        value: 'dept'
      }, {
        text: 'Has Range ? ',
        value: 'range'
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
        label: 'Amount',
        field: 'price',
        dataFormat: this.$shared.amountFormat
      }, {
        label: 'Frequency',
        field: 'frequency'
      }, {
        label: 'Sub Category',
        field: 'sub_category'
      }, {
        label: 'Other Category',
        field: 'other_category'
      }, {
        label: 'Dept',
        field: 'dept'
      }],
      serviceIndex: -1,
      services: [],
      service: {
        'id': '',
        'name': '',
        'price': '',
        'frequency': '',
        'sub_category': '',
        'other_category': '',
        'category_id': '',
        'category': '',
        'ranges': ''
      },
      serviceDefault: {
        'id': '',
        'name': '',
        'price': '',
        'frequency': '',
        'sub_category': '',
        'other_category': '',
        'category_id': '',
        'category': '',
        'ranges': ''
      },
      errors: [],
      ranges: [],
      range: {
        'id': '',
        'name': '',
        'price': '',
        'frequency': '',
        'service_id': ''
      },
      othercategories: [],
      depts: []
    }, "range", {
      'id': '',
      'name': '',
      'price': '',
      'frequency': ''
    });
  },
  computed: {
    formTitle: function formTitle() {
      return this.serviceIndex === -1 ? 'New Service' : 'Edit Service';
    }
  },
  watch: {
    dialog: function dialog(val) {
      val || this.close();
    }
  },
  methods: {
    editSvce: function editSvce(item) {
      this.serviceIndex = this.services.indexOf(item); // this.agent = Object.assign({   }, item),

      this.service.name = item.name;
      this.service.price = item.price;
      this.service.frequency = item.frequency;
      this.service.sub_category = item.sub_category;
      this.service.other_category = item.other_category;
      this.getCategory();
      this.service.category_id = item.category_id;
      this.service.id = item.id;
      this.getOtherCategory();
      this.dialog = true;
    },
    deleteSvce: function deleteSvce(item) {
      var index = this.services.indexOf(item); // confirm('Are you sure you want to delete ?'+item.name ) && this.agents.splice(index, 1)

      this.deleteService(item);
    },
    close: function close() {
      var _this = this;

      this.dialog = false;
      this.$nextTick(function () {
        _this.service = Object.assign({}, _this.serviceDefault), _this.serviceIndex = -1;
      });
    },
    save: function save() {
      if (this.serviceIndex > -1) {
        // edit
        Object.assign(this.services[this.serviceIndex], this.service);
        this.updateServices();
      } else {
        // new
        //  this.agents.push(this.agent)
        this.addNewService();
      }

      this.close();
    },
    viewRange: function () {
      var _viewRange = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee(service) {
        var _this2 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                jQuery.noConflict();
                _context.prev = 1;
                _context.next = 4;
                return axios.get("/service/".concat(service.id, "/ranges")).then(function (response) {
                  _this2.ranges = response.data.data;
                })["catch"](function (error) {
                  console.log(error);
                });

              case 4:
                _context.next = 9;
                break;

              case 6:
                _context.prev = 6;
                _context.t0 = _context["catch"](1);
                console.log(_context.t0);

              case 9:
                $('#rangeModal').modal('show');

              case 10:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, null, [[1, 6]]);
      }));

      function viewRange(_x) {
        return _viewRange.apply(this, arguments);
      }

      return viewRange;
    }(),
    addNewRange: function () {
      var _addNewRange = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        var _this3 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                _context2.next = 3;
                return axios.post('/range', {
                  'name': this.range.name,
                  'price': this.range.price,
                  'frequency': this.range.frequency,
                  'service_id': this.range.service_id
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    $('#addRangeModal').modal('hide');

                    _this3.flashMessage.success({
                      title: '',
                      message: 'Range added successfully!',
                      time: 5000
                    });

                    _this3.services.unshift(response.data.data);
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this3.errors = error.response.data.errors;

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
                this.flashMessage.error({
                  title: '',
                  messsage: 'Error in adding Range',
                  time: 5000
                });

              case 8:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this, [[0, 5]]);
      }));

      function addNewRange() {
        return _addNewRange.apply(this, arguments);
      }

      return addNewRange;
    }(),
    editRange: function editRange(range) {
      jQuery.noConflict(); //to clear multiple jquery import error

      this.range.id = range.id, this.range.name = range.name, this.range.price = range.price, this.range.frequency = range.frequency, this.range.service_id = range.service_id, $('#editRangeModal').modal('show');
    },
    updateRange: function () {
      var _updateRange = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee3() {
        var _this4 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                _context3.prev = 0;
                _context3.next = 3;
                return axios.put("/range", {
                  'id': this.range.id,
                  'name': this.range.name,
                  'price': this.range.price,
                  'frequency': this.range.frequency,
                  'service_id': this.range.service_id
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    //hide modal
                    $('#editRangeModal').modal('hide');
                    $('#rangeModal').modal('hide'); //update table

                    _this4.ranges.map(function (range) {
                      if (range.id == response.data.data.id) {
                        for (var key in response.data.data) {
                          range[key] = response.data.data[key];
                        }
                      }
                    }); //show notification


                    _this4.flashMessage.success({
                      title: '',
                      message: 'Range updated succesfully',
                      time: 5000
                    });
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this4.errors = error.response.data.errors;

                    _this4.flashMessage.error({
                      title: '',
                      message: 'unprocessable entity!',
                      time: 5000
                    });
                  } else {
                    console.log('else2');
                  }
                });

              case 3:
                _context3.next = 7;
                break;

              case 5:
                _context3.prev = 5;
                _context3.t0 = _context3["catch"](0);

              case 7:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, this, [[0, 5]]);
      }));

      function updateRange() {
        return _updateRange.apply(this, arguments);
      }

      return updateRange;
    }(),
    deleteRange: function () {
      var _deleteRange = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee4(range) {
        var _this5 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee4$(_context4) {
          while (1) {
            switch (_context4.prev = _context4.next) {
              case 0:
                if (window.confirm("Are you sure you want to delete ".concat(range.name))) {
                  _context4.next = 2;
                  break;
                }

                return _context4.abrupt("return");

              case 2:
                _context4.prev = 2;
                _context4.next = 5;
                return axios["delete"]("/range/".concat(range.id)).then(function (response) {
                  console.log(response);

                  if (response.status == 204) {
                    //remove from table
                    _this5.ranges = _this5.ranges.filter(function (obj) {
                      return obj.id != range.id;
                    }); //show notification

                    _this5.flashMessage.success({
                      title: 'Response Message',
                      message: 'Range deleted successfully!',
                      time: 5000
                    });
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 404) {
                    _this5.errors = error.response.data.errors;

                    _this5.flashMessage.error({
                      title: '',
                      message: 'Range not found!',
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
                  message: 'Error in deleting Service!',
                  time: 5000
                });

              case 10:
              case "end":
                return _context4.stop();
            }
          }
        }, _callee4, this, [[2, 7]]);
      }));

      function deleteRange(_x2) {
        return _deleteRange.apply(this, arguments);
      }

      return deleteRange;
    }(),
    addNewService: function () {
      var _addNewService = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee5() {
        var _this6 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee5$(_context5) {
          while (1) {
            switch (_context5.prev = _context5.next) {
              case 0:
                _context5.prev = 0;
                _context5.next = 3;
                return axios.post('/service', {
                  'name': this.service.name,
                  'price': this.service.price,
                  'frequency': this.service.frequency,
                  'sub_category': this.service.sub_category,
                  'other_category': this.service.other_category,
                  'category_id': this.service.category_id
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    // $('#servicesModal').modal('hide');
                    _this6.dialog = false;

                    _this6.flashMessage.success({
                      title: '',
                      message: 'Service added successfully!',
                      time: 5000
                    });

                    _this6.services.unshift(response.data.data);
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this6.errors = error.response.data.errors;

                    _this6.flashMessage.error({
                      title: '',
                      message: 'Unprocessable entity!',
                      time: 5000
                    });
                  } else {
                    console.log('else1');
                  }
                });

              case 3:
                _context5.next = 8;
                break;

              case 5:
                _context5.prev = 5;
                _context5.t0 = _context5["catch"](0);
                this.flashMessage.error({
                  title: '',
                  messsage: 'Error in adding Services',
                  time: 5000
                });

              case 8:
              case "end":
                return _context5.stop();
            }
          }
        }, _callee5, this, [[0, 5]]);
      }));

      function addNewService() {
        return _addNewService.apply(this, arguments);
      }

      return addNewService;
    }(),
    editService: function editService(service) {
      jQuery.noConflict();
      this.service.id = service.id;
      this.service.name = service.name;
      this.service.price = service.price;
      this.service.frequency = service.frequency;
      this.service.sub_category = service.sub_category;
      this.service.other_category = service.other_category;
      this.service.category_id = service.category.id; //  $('#editServicesModal').modal('show');

      this.dialog = false;
    },
    updateServices: function () {
      var _updateServices = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee6() {
        var _this7 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee6$(_context6) {
          while (1) {
            switch (_context6.prev = _context6.next) {
              case 0:
                _context6.prev = 0;
                _context6.next = 3;
                return axios.put("/service/".concat(this.service.id), {
                  'name': this.service.name,
                  'price': this.service.price,
                  'frequency': this.service.frequency,
                  'sub_category': this.service.sub_category,
                  'other_category': this.service.other_category,
                  'category_id': this.service.category_id
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    //hide modal
                    // $('#editServicesModal').modal('hide');
                    _this7.dialog = false; //update table

                    _this7.services.map(function (service) {
                      if (service.id == response.data.data.id) {
                        for (var key in response.data.data) {
                          service[key] = response.data.data[key];
                        }
                      }
                    }); //show notification


                    _this7.flashMessage.success({
                      title: '',
                      message: 'Services updated succesfully',
                      time: 5000
                    });
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this7.errors = error.response.data.errors;

                    _this7.flashMessage.error({
                      title: '',
                      message: 'unprocessable entity!',
                      time: 5000
                    });
                  } else {
                    console.log('else2');
                  }
                });

              case 3:
                _context6.next = 7;
                break;

              case 5:
                _context6.prev = 5;
                _context6.t0 = _context6["catch"](0);

              case 7:
              case "end":
                return _context6.stop();
            }
          }
        }, _callee6, this, [[0, 5]]);
      }));

      function updateServices() {
        return _updateServices.apply(this, arguments);
      }

      return updateServices;
    }(),
    deleteService: function () {
      var _deleteService = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee7(service) {
        var _this8 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee7$(_context7) {
          while (1) {
            switch (_context7.prev = _context7.next) {
              case 0:
                if (window.confirm("Are you sure you want to delete ".concat(service.name))) {
                  _context7.next = 2;
                  break;
                }

                return _context7.abrupt("return");

              case 2:
                _context7.prev = 2;
                _context7.next = 5;
                return axios["delete"]("/service/".concat(service.id)).then(function (response) {
                  console.log(response);

                  if (response.status == 204) {
                    //remove from table
                    _this8.services = _this8.services.filter(function (obj) {
                      return obj.id != service.id;
                    }); //show notification

                    _this8.flashMessage.success({
                      title: '',
                      message: 'Service deleted successfully!',
                      time: 5000
                    });
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 404) {
                    _this8.errors = error.response.data.errors;

                    _this8.flashMessage.error({
                      title: '',
                      message: 'Service not found!',
                      time: 5000
                    });
                  } else {
                    console.log('else');
                  }
                });

              case 5:
                _context7.next = 10;
                break;

              case 7:
                _context7.prev = 7;
                _context7.t0 = _context7["catch"](2);
                this.flashMessage.error({
                  title: '',
                  message: 'Error in deleting Service!',
                  time: 5000
                });

              case 10:
              case "end":
                return _context7.stop();
            }
          }
        }, _callee7, this, [[2, 7]]);
      }));

      function deleteService(_x3) {
        return _deleteService.apply(this, arguments);
      }

      return deleteService;
    }(),
    getServices: function () {
      var _getServices = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee8() {
        var _this9 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee8$(_context8) {
          while (1) {
            switch (_context8.prev = _context8.next) {
              case 0:
                _context8.prev = 0;
                _context8.next = 3;
                return axios.get('/service').then(function (response) {
                  _this9.services = response.data.data;
                  _this9.table_1 = false;
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

      function getServices() {
        return _getServices.apply(this, arguments);
      }

      return getServices;
    }(),
    getCategory: function () {
      var _getCategory = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee9() {
        var _this10 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee9$(_context9) {
          while (1) {
            switch (_context9.prev = _context9.next) {
              case 0:
                _context9.prev = 0;
                _context9.next = 3;
                return axios.get('/getcategory/all').then(function (response) {
                  _this10.depts = response.data.data;
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
        }, _callee9, null, [[0, 5]]);
      }));

      function getCategory() {
        return _getCategory.apply(this, arguments);
      }

      return getCategory;
    }(),
    getOtherCategory: function () {
      var _getOtherCategory = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee10() {
        var _this11 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee10$(_context10) {
          while (1) {
            switch (_context10.prev = _context10.next) {
              case 0:
                _context10.prev = 0;
                _context10.next = 3;
                return axios.get('/revenuepoint_type').then(function (response) {
                  _this11.othercategories = response.data.data;
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

      function getOtherCategory() {
        return _getOtherCategory.apply(this, arguments);
      }

      return getOtherCategory;
    }()
  },
  mounted: function mounted() {
    this.getServices();
    this.getOtherCategory();
    this.getCategory(); // this.loadDataTable;
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/service/Services.vue?vue&type=template&id=6a081ce3&":
/*!*******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/service/Services.vue?vue&type=template&id=6a081ce3& ***!
  \*******************************************************************************************************************************************************************************************************************/
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
      _c("h1", [_vm._v("  SERVICES ")]),
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
        _c("li", { staticClass: "active" }, [_vm._v(" Services ")])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "page-body" }, [
      _c("div", { staticClass: "panel panel-default" }, [
        _vm._m(0),
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
                      "\n                          \n                        "
                    ),
                    _c(
                      "vue-excel-xlsx",
                      {
                        attrs: {
                          data: this.services,
                          columns: _vm.columns,
                          filename: "services",
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
                headers: this.headers,
                items: this.services,
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
                                        [_vm._v("New Service")]
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
                                                      label: "Name of Service",
                                                      rules: [
                                                        function(v) {
                                                          return (
                                                            !!v ||
                                                            "Name is required"
                                                          )
                                                        }
                                                      ],
                                                      "error-messages":
                                                        _vm.errors["users.name"]
                                                    },
                                                    model: {
                                                      value: _vm.service.name,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.service,
                                                          "name",
                                                          $$v
                                                        )
                                                      },
                                                      expression: "service.name"
                                                    }
                                                  }),
                                                  _vm._v(" "),
                                                  _vm.errors["name"]
                                                    ? _c(
                                                        "label",
                                                        {
                                                          staticClass: "error",
                                                          staticStyle: {
                                                            color: "red"
                                                          }
                                                        },
                                                        [
                                                          _vm._v(
                                                            _vm._s(
                                                              _vm.errors[
                                                                "name"
                                                              ][0]
                                                            )
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
                                                      label:
                                                        "Price of Service (i.e 200, 5000) ",
                                                      rules: [
                                                        function(v) {
                                                          return (
                                                            !!v ||
                                                            "Price is required"
                                                          )
                                                        }
                                                      ],
                                                      "error-messages":
                                                        _vm.errors["users.name"]
                                                    },
                                                    model: {
                                                      value: _vm.service.price,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.service,
                                                          "price",
                                                          $$v
                                                        )
                                                      },
                                                      expression:
                                                        "service.price"
                                                    }
                                                  }),
                                                  _vm._v(" "),
                                                  _vm.errors["price"]
                                                    ? _c(
                                                        "label",
                                                        {
                                                          staticClass: "error",
                                                          staticStyle: {
                                                            color: "red"
                                                          }
                                                        },
                                                        [
                                                          _vm._v(
                                                            _vm._s(
                                                              _vm.errors[
                                                                "price"
                                                              ][0]
                                                            )
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
                                                      label:
                                                        "Frequency of Service (i.e Daily, Weekly,  Monthly, )"
                                                    },
                                                    model: {
                                                      value:
                                                        _vm.service.frequency,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.service,
                                                          "frequency",
                                                          $$v
                                                        )
                                                      },
                                                      expression:
                                                        "service.frequency"
                                                    }
                                                  }),
                                                  _vm._v(" "),
                                                  _vm.errors["frequency"]
                                                    ? _c(
                                                        "label",
                                                        {
                                                          staticClass: "error",
                                                          staticStyle: {
                                                            color: "red"
                                                          }
                                                        },
                                                        [
                                                          _vm._v(
                                                            _vm._s(
                                                              _vm.errors[
                                                                "frequency"
                                                              ][0]
                                                            )
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
                                                      label:
                                                        "Sub Category of Service  (i.e Market )  "
                                                    },
                                                    model: {
                                                      value:
                                                        _vm.service
                                                          .sub_category,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.service,
                                                          "sub_category",
                                                          $$v
                                                        )
                                                      },
                                                      expression:
                                                        "service.sub_category"
                                                    }
                                                  }),
                                                  _vm._v(" "),
                                                  _vm.errors["sub_category"]
                                                    ? _c(
                                                        "label",
                                                        {
                                                          staticClass: "error",
                                                          staticStyle: {
                                                            color: "red"
                                                          }
                                                        },
                                                        [
                                                          _vm._v(
                                                            _vm._s(
                                                              _vm.errors[
                                                                "sub_category"
                                                              ][0]
                                                            )
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
                                                      id: "state",
                                                      rules: [
                                                        function(v) {
                                                          return (
                                                            !!v ||
                                                            "other category  is required"
                                                          )
                                                        }
                                                      ],
                                                      items:
                                                        _vm.othercategories,
                                                      "item-text": "name",
                                                      "item-value": "id",
                                                      label:
                                                        "Select other category"
                                                    },
                                                    model: {
                                                      value:
                                                        _vm.service
                                                          .other_category,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.service,
                                                          "other_category",
                                                          $$v
                                                        )
                                                      },
                                                      expression:
                                                        "service.other_category"
                                                    }
                                                  }),
                                                  _vm._v(" "),
                                                  _vm.errors["other_category"]
                                                    ? _c(
                                                        "label",
                                                        {
                                                          staticClass: "error",
                                                          staticStyle: {
                                                            color: "red"
                                                          }
                                                        },
                                                        [
                                                          _vm._v(
                                                            _vm._s(
                                                              _vm.errors[
                                                                "other_category"
                                                              ][0]
                                                            )
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
                                                      id: "lga",
                                                      rules: [
                                                        function(v) {
                                                          return (
                                                            !!v ||
                                                            "Dept is required"
                                                          )
                                                        }
                                                      ],
                                                      items: _vm.depts,
                                                      "item-text": "name",
                                                      "item-value": "id",
                                                      label: "Select Dept"
                                                    },
                                                    model: {
                                                      value:
                                                        _vm.service.category_id,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.service,
                                                          "category_id",
                                                          $$v
                                                        )
                                                      },
                                                      expression:
                                                        "service.category_id"
                                                    }
                                                  }),
                                                  _vm._v(" "),
                                                  _vm.errors["lga_id"]
                                                    ? _c(
                                                        "label",
                                                        {
                                                          staticClass: "error",
                                                          staticStyle: {
                                                            color: "red"
                                                          }
                                                        },
                                                        [
                                                          _vm._v(
                                                            _vm._s(
                                                              _vm.errors[
                                                                "lga_id"
                                                              ][0]
                                                            )
                                                          )
                                                        ]
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
                  key: "item.range",
                  fn: function(ref) {
                    var item = ref.item
                    return [
                      item.range.length > 0
                        ? _c(
                            "span",
                            [
                              _c(
                                "v-btn",
                                {
                                  staticClass: "btn btn-success btn-sm",
                                  on: {
                                    click: function($event) {
                                      return _vm.viewRange(item)
                                    }
                                  }
                                },
                                [_vm._v("Range")]
                              )
                            ],
                            1
                          )
                        : _vm._e()
                    ]
                  }
                },
                {
                  key: "item.actions",
                  fn: function(ref) {
                    var item = ref.item
                    return [
                      _c(
                        "v-icon",
                        {
                          staticClass: "mr-2",
                          staticStyle: { color: "#3c8dbc" },
                          attrs: { small: "" },
                          on: {
                            click: function($event) {
                              return _vm.editSvce(item)
                            }
                          }
                        },
                        [_vm._v("edit")]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-icon",
                        {
                          staticStyle: { color: "red" },
                          attrs: { small: "" },
                          on: {
                            click: function($event) {
                              return _vm.deleteSvce(item)
                            }
                          }
                        },
                        [_vm._v(" delete  ")]
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
            )
          ],
          1
        )
      ])
    ]),
    _vm._v(" "),
    _c(
      "div",
      {
        ref: "rangeModal",
        staticClass: "modal fade",
        attrs: { id: "rangeModal", tabindex: "-1", role: "dialog" }
      },
      [
        _c(
          "div",
          { staticClass: "modal-dialog", attrs: { role: "document" } },
          [
            _c("div", { staticClass: "modal-content" }, [
              _vm._m(1),
              _vm._v(" "),
              _c("div", { staticClass: "modal-body" }, [
                _c(
                  "table",
                  {
                    staticClass:
                      "table table-striped table-hover js-basic-example dataTable",
                    attrs: { id: "ranges_table" }
                  },
                  [
                    _vm._m(2),
                    _vm._v(" "),
                    _c(
                      "tbody",
                      _vm._l(_vm.ranges, function(range) {
                        return _c("tr", { key: range.id }, [
                          _c("td", [_vm._v(" " + _vm._s(range.id) + " ")]),
                          _vm._v(" "),
                          _c("td", [_vm._v(" " + _vm._s(range.name) + " ")]),
                          _vm._v(" "),
                          _c("td", [
                            _vm._v(
                              "  " +
                                _vm._s(
                                  new Intl.NumberFormat("en-NG", {
                                    style: "currency",
                                    currency: "NGN"
                                  }).format(range.price)
                                ) +
                                " "
                            )
                          ]),
                          _vm._v(" "),
                          _c("td", [
                            _vm._v(" " + _vm._s(range.frequency) + " ")
                          ]),
                          _vm._v(" "),
                          _c("td", [
                            _c(
                              "button",
                              {
                                staticClass: "btn btn-success btn-sm",
                                on: {
                                  click: function($event) {
                                    return _vm.editRange(range)
                                  }
                                }
                              },
                              [_c("i", { staticClass: "fa-1x fa fa-edit" })]
                            ),
                            _vm._v(" "),
                            _c(
                              "button",
                              {
                                staticClass: "btn btn-danger btn-sm",
                                on: {
                                  click: function($event) {
                                    return _vm.deleteRange(range)
                                  }
                                }
                              },
                              [_c("i", { staticClass: "fa-1x fa fa-trash" })]
                            )
                          ])
                        ])
                      }),
                      0
                    ),
                    _vm._v(" "),
                    _vm._m(3)
                  ]
                )
              ]),
              _vm._v(" "),
              _vm._m(4)
            ])
          ]
        )
      ]
    ),
    _vm._v(" "),
    _c(
      "div",
      {
        ref: "addRangeModal",
        staticClass: "modal fade",
        attrs: { id: "addRangeModal", tabindex: "-1", role: "dialog" }
      },
      [
        _c(
          "div",
          { staticClass: "modal-dialog", attrs: { role: "document" } },
          [
            _c("div", { staticClass: "modal-content" }, [
              _vm._m(5),
              _vm._v(" "),
              _c(
                "form",
                {
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      return _vm.addNewRange($event)
                    }
                  }
                },
                [
                  _c("div", { staticClass: "modal-body" }, [
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Name *")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.range.name,
                            expression: "range.name"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { type: "text", placeholder: "Range Name" },
                        domProps: { value: _vm.range.name },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(_vm.range, "name", $event.target.value)
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["name"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["name"][0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Amount *")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.range.price,
                            expression: "range.price"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { type: "text", placeholder: "Amount" },
                        domProps: { value: _vm.range.price },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(_vm.range, "price", $event.target.value)
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["price"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["price"][0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Frequency ")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.range.frequency,
                            expression: "range.frequency"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { type: "text", placeholder: "Frequency" },
                        domProps: { value: _vm.range.frequency },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(
                              _vm.range,
                              "frequency",
                              $event.target.value
                            )
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["frequency"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["frequency"][0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Service")]),
                      _vm._v(" "),
                      _c(
                        "select",
                        {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.range.service_id,
                              expression: "range.service_id"
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
                              _vm.$set(
                                _vm.range,
                                "service_id",
                                $event.target.multiple
                                  ? $$selectedVal
                                  : $$selectedVal[0]
                              )
                            }
                          }
                        },
                        _vm._l(_vm.services, function(service) {
                          return _c(
                            "option",
                            { domProps: { value: service.id } },
                            [
                              _vm._v(
                                "\n                                        " +
                                  _vm._s(service.name) +
                                  "\n                                    "
                              )
                            ]
                          )
                        }),
                        0
                      ),
                      _vm._v(" "),
                      _vm.errors["service_id"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["service_id"][0]))
                          ])
                        : _vm._e()
                    ])
                  ]),
                  _vm._v(" "),
                  _vm._m(6)
                ]
              )
            ])
          ]
        )
      ]
    ),
    _vm._v(" "),
    _c(
      "div",
      {
        ref: "editRangeModal",
        staticClass: "modal fade",
        attrs: { id: "editRangeModal", tabindex: "-1", role: "dialog" }
      },
      [
        _c(
          "div",
          { staticClass: "modal-dialog", attrs: { role: "document" } },
          [
            _c("div", { staticClass: "modal-content" }, [
              _vm._m(7),
              _vm._v(" "),
              _c(
                "form",
                {
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      return _vm.updateRange($event)
                    }
                  }
                },
                [
                  _c("div", { staticClass: "modal-body" }, [
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Name *")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.range.name,
                            expression: "range.name"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { type: "text", placeholder: "Range Name" },
                        domProps: { value: _vm.range.name },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(_vm.range, "name", $event.target.value)
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["name"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["name"][0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Amount *")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.range.price,
                            expression: "range.price"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { type: "text", placeholder: "Amount" },
                        domProps: { value: _vm.range.price },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(_vm.range, "price", $event.target.value)
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["price"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["price"][0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Frequency ")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.range.frequency,
                            expression: "range.frequency"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { type: "text", placeholder: "Frequency" },
                        domProps: { value: _vm.range.frequency },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(
                              _vm.range,
                              "frequency",
                              $event.target.value
                            )
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["frequency"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["frequency"][0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Service")]),
                      _vm._v(" "),
                      _c(
                        "select",
                        {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.range.service_id,
                              expression: "range.service_id"
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
                              _vm.$set(
                                _vm.range,
                                "service_id",
                                $event.target.multiple
                                  ? $$selectedVal
                                  : $$selectedVal[0]
                              )
                            }
                          }
                        },
                        _vm._l(_vm.services, function(service) {
                          return _c(
                            "option",
                            { domProps: { value: service.id } },
                            [
                              _vm._v(
                                "\n                                    " +
                                  _vm._s(service.name) +
                                  "\n                                "
                              )
                            ]
                          )
                        }),
                        0
                      ),
                      _vm._v(" "),
                      _vm.errors["service_id"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["service_id"][0]))
                          ])
                        : _vm._e()
                    ])
                  ]),
                  _vm._v(" "),
                  _vm._m(8)
                ]
              )
            ])
          ]
        )
      ]
    ),
    _vm._v(" "),
    _c(
      "div",
      {
        ref: "servicesModal",
        staticClass: "modal fade",
        attrs: { id: "servicesModal", tabindex: "-1", role: "dialog" }
      },
      [
        _c(
          "div",
          { staticClass: "modal-dialog", attrs: { role: "document" } },
          [
            _c("div", { staticClass: "modal-content" }, [
              _vm._m(9),
              _vm._v(" "),
              _c(
                "form",
                {
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      return _vm.addNewService($event)
                    }
                  }
                },
                [
                  _c("div", { staticClass: "modal-body" }, [
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Name *")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.service.name,
                            expression: "service.name"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: {
                          type: "text",
                          name: "name",
                          placeholder: "Service Name"
                        },
                        domProps: { value: _vm.service.name },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(_vm.service, "name", $event.target.value)
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["name"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["name"][0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Amount *")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.service.price,
                            expression: "service.price"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: {
                          type: "text",
                          name: "price",
                          placeholder: "Amount"
                        },
                        domProps: { value: _vm.service.price },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(_vm.service, "price", $event.target.value)
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["price"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["price"][0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Frequency ")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.service.frequency,
                            expression: "service.frequency"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: {
                          type: "text",
                          name: "frequency",
                          placeholder: "Frequency"
                        },
                        domProps: { value: _vm.service.frequency },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(
                              _vm.service,
                              "frequency",
                              $event.target.value
                            )
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["frequency"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["frequency"][0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Sub category")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.service.sub_category,
                            expression: "service.sub_category"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: {
                          type: "text",
                          name: "sub_category",
                          placeholder: "Sub category"
                        },
                        domProps: { value: _vm.service.sub_category },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(
                              _vm.service,
                              "sub_category",
                              $event.target.value
                            )
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["sub_category"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["sub_category"][0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Other category")]),
                      _vm._v(" "),
                      _c(
                        "select",
                        {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.service.other_category,
                              expression: "service.other_category"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: { name: "other_category" },
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
                              _vm.$set(
                                _vm.service,
                                "other_category",
                                $event.target.multiple
                                  ? $$selectedVal
                                  : $$selectedVal[0]
                              )
                            }
                          }
                        },
                        _vm._l(_vm.othercategories, function(othercategory) {
                          return _c(
                            "option",
                            {
                              key: othercategory,
                              domProps: { value: othercategory }
                            },
                            [
                              _vm._v(
                                "\n                                    " +
                                  _vm._s(othercategory) +
                                  "\n                                "
                              )
                            ]
                          )
                        }),
                        0
                      )
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Department")]),
                      _vm._v(" "),
                      _c(
                        "select",
                        {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.service.category_id,
                              expression: "service.category_id"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: { name: "category_id" },
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
                              _vm.$set(
                                _vm.service,
                                "category_id",
                                $event.target.multiple
                                  ? $$selectedVal
                                  : $$selectedVal[0]
                              )
                            }
                          }
                        },
                        [
                          _vm._l(_vm.depts, function(dept) {
                            return _c(
                              "option",
                              { domProps: { value: dept.id } },
                              [
                                _vm._v(
                                  "\n                                    " +
                                    _vm._s(dept.name) +
                                    "\n                                "
                                )
                              ]
                            )
                          }),
                          _vm._v(" "),
                          _vm.errors["category_id"]
                            ? _c("label", { staticClass: "error" }, [
                                _vm._v(_vm._s(_vm.errors["category_id"][0]))
                              ])
                            : _vm._e()
                        ],
                        2
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _vm._m(10)
                ]
              )
            ])
          ]
        )
      ]
    ),
    _vm._v(" "),
    _c(
      "div",
      {
        ref: "editServicesModal",
        staticClass: "modal fade",
        attrs: { id: "editServicesModal", tabindex: "-1", role: "dialog" }
      },
      [
        _c(
          "div",
          { staticClass: "modal-dialog", attrs: { role: "document" } },
          [
            _c("div", { staticClass: "modal-content" }, [
              _vm._m(11),
              _vm._v(" "),
              _c(
                "form",
                {
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      return _vm.updateServices($event)
                    }
                  }
                },
                [
                  _c("div", { staticClass: "modal-body" }, [
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Name")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.service.name,
                            expression: "service.name"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: {
                          type: "text",
                          id: "name",
                          name: "name",
                          placeholder: "Service Name"
                        },
                        domProps: { value: _vm.service.name },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(_vm.service, "name", $event.target.value)
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["name"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["name"][0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Amount")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.service.price,
                            expression: "service.price"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: {
                          type: "text",
                          id: "name",
                          name: "name",
                          placeholder: "Amount"
                        },
                        domProps: { value: _vm.service.price },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(_vm.service, "price", $event.target.value)
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["price"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["price"][0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Frequency")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.service.frequency,
                            expression: "service.frequency"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: {
                          type: "text",
                          name: "price2",
                          placeholder: "Frequency"
                        },
                        domProps: { value: _vm.service.frequency },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(
                              _vm.service,
                              "frequency",
                              $event.target.value
                            )
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["frequency"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["frequency"][0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Sub category")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.service.sub_category,
                            expression: "service.sub_category"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: {
                          type: "text",
                          name: "subcategory2",
                          placeholder: "Sub category"
                        },
                        domProps: { value: _vm.service.sub_category },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(
                              _vm.service,
                              "sub_category",
                              $event.target.value
                            )
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["sub_category"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors["sub_category"][0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Other category")]),
                      _vm._v(" "),
                      _c(
                        "select",
                        {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.service.other_category,
                              expression: "service.other_category"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: { name: "other_category" },
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
                              _vm.$set(
                                _vm.service,
                                "other_category",
                                $event.target.multiple
                                  ? $$selectedVal
                                  : $$selectedVal[0]
                              )
                            }
                          }
                        },
                        _vm._l(_vm.othercategories, function(othercategory) {
                          return _c(
                            "option",
                            {
                              key: othercategory,
                              domProps: { value: othercategory }
                            },
                            [
                              _vm._v(
                                "\n                                     " +
                                  _vm._s(othercategory) +
                                  "\n                                "
                              )
                            ]
                          )
                        }),
                        0
                      )
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Department")]),
                      _vm._v(" "),
                      _c(
                        "select",
                        {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.service.category_id,
                              expression: "service.category_id"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: { name: "category_id" },
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
                              _vm.$set(
                                _vm.service,
                                "category_id",
                                $event.target.multiple
                                  ? $$selectedVal
                                  : $$selectedVal[0]
                              )
                            }
                          }
                        },
                        [
                          _vm._l(_vm.depts, function(dept) {
                            return _c(
                              "option",
                              { domProps: { value: dept.id } },
                              [
                                _vm._v(
                                  "\n                                    " +
                                    _vm._s(dept.name) +
                                    "\n                                "
                                )
                              ]
                            )
                          }),
                          _vm._v(" "),
                          _vm.errors["category_id"]
                            ? _c("label", { staticClass: "error" }, [
                                _vm._v(_vm._s(_vm.errors["category_id"][0]))
                              ])
                            : _vm._e()
                        ],
                        2
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _vm._m(12)
                ]
              )
            ])
          ]
        )
      ]
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "panel-heading d-flex" }, [
      _c("span", [_vm._v(" Services ")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-header" }, [
      _c(
        "h4",
        { staticClass: "modal-title", attrs: { id: "defaultModalLabel2" } },
        [_vm._v(" VIEW RANGES IN A SERVICE ")]
      )
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
        _c("th", [_vm._v("Name")]),
        _vm._v(" "),
        _c("th", [_vm._v("Amount")]),
        _vm._v(" "),
        _c("th", [_vm._v("Frequency")]),
        _vm._v(" "),
        _c("th", [_vm._v("Action")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("tfoot", [
      _c("tr", [
        _c("th", [_vm._v("#")]),
        _vm._v(" "),
        _c("th", [_vm._v("Name")]),
        _vm._v(" "),
        _c("th", [_vm._v("Amount")]),
        _vm._v(" "),
        _c("th", [_vm._v("Frequency")]),
        _vm._v(" "),
        _c("th", [_vm._v("Action")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-footer" }, [
      _c(
        "button",
        {
          staticClass: "btn btn-default",
          attrs: { type: "button", "data-dismiss": "modal" }
        },
        [_vm._v("CLOSE")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-header" }, [
      _c(
        "h4",
        { staticClass: "modal-title", attrs: { id: "defaultModalLabel3" } },
        [_vm._v(" ADD NEW RANGE FOR A SERVICE ")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-footer" }, [
      _c(
        "button",
        { staticClass: "btn btn-primary", attrs: { type: "submit" } },
        [_c("i", { staticClass: "fa fa-plus" }), _vm._v("ADD")]
      ),
      _vm._v(" "),
      _c(
        "button",
        {
          staticClass: "btn btn-default",
          attrs: { type: "button", "data-dismiss": "modal" }
        },
        [_vm._v("CLOSE")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-header" }, [
      _c(
        "h4",
        { staticClass: "modal-title", attrs: { id: "defaultModalLabel4" } },
        [_vm._v(" EDIT A RANGE IN A SERVICE ")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-footer" }, [
      _c(
        "button",
        { staticClass: "btn btn-primary", attrs: { type: "submit" } },
        [_c("i", { staticClass: "fa fa-plus" }), _vm._v("UPDATE")]
      ),
      _vm._v(" "),
      _c(
        "button",
        {
          staticClass: "btn btn-default",
          attrs: { type: "button", "data-dismiss": "modal" }
        },
        [_vm._v("CLOSE")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-header" }, [
      _c(
        "h4",
        { staticClass: "modal-title", attrs: { id: "defaultModalLabel2" } },
        [_vm._v(" ADD NEW SERVICE ")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-footer" }, [
      _c(
        "button",
        { staticClass: "btn btn-primary", attrs: { type: "submit" } },
        [_c("i", { staticClass: "fa fa-plus" }), _vm._v("ADD")]
      ),
      _vm._v(" "),
      _c(
        "button",
        {
          staticClass: "btn btn-default",
          attrs: { type: "button", "data-dismiss": "modal" }
        },
        [_vm._v("CLOSE")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-header" }, [
      _c(
        "h4",
        { staticClass: "modal-title", attrs: { id: "defaultModalLabel" } },
        [_vm._v("EDIT SERVICE")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-footer" }, [
      _c(
        "button",
        { staticClass: "btn btn-success", attrs: { type: "submit" } },
        [_c("i", { staticClass: "fa fa-edit" }), _vm._v(" EDIT")]
      ),
      _vm._v(" "),
      _c(
        "button",
        {
          staticClass: "btn btn-default",
          attrs: { type: "button", "data-dismiss": "modal" }
        },
        [_vm._v("CLOSE")]
      )
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/service/Services.vue":
/*!******************************************************!*\
  !*** ./resources/js/components/service/Services.vue ***!
  \******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Services_vue_vue_type_template_id_6a081ce3___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Services.vue?vue&type=template&id=6a081ce3& */ "./resources/js/components/service/Services.vue?vue&type=template&id=6a081ce3&");
/* harmony import */ var _Services_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Services.vue?vue&type=script&lang=js& */ "./resources/js/components/service/Services.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Services_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Services_vue_vue_type_template_id_6a081ce3___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Services_vue_vue_type_template_id_6a081ce3___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/service/Services.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/service/Services.vue?vue&type=script&lang=js&":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/service/Services.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Services_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Services.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/service/Services.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Services_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/service/Services.vue?vue&type=template&id=6a081ce3&":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/service/Services.vue?vue&type=template&id=6a081ce3& ***!
  \*************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Services_vue_vue_type_template_id_6a081ce3___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Services.vue?vue&type=template&id=6a081ce3& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/service/Services.vue?vue&type=template&id=6a081ce3&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Services_vue_vue_type_template_id_6a081ce3___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Services_vue_vue_type_template_id_6a081ce3___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);