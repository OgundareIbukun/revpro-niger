(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[21],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/user/User.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/user/User.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************/
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
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "User",
  data: function data() {
    return {
      show1: false,
      show2: false,
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
        text: 'Phone #',
        value: 'phone'
      }, {
        text: 'Role',
        value: 'role_name'
      }, {
        text: 'Permission',
        value: 'permission'
      }, {
        text: 'Dept',
        value: 'category_name'
      }, {
        text: 'LGA',
        value: 'lga_name'
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
        label: 'Phone #',
        field: 'phone'
      }, {
        label: 'Role',
        field: 'role_name'
      }, {
        label: 'Permission',
        field: 'permission'
      }, {
        label: 'Dept',
        field: 'category_name'
      }, {
        label: 'LGA',
        field: 'lga_name'
      }],
      userIndex: -1,
      users: [],
      user: {
        'id': '',
        'name': '',
        'email': '',
        'phone': '',
        'password': '',
        'password_confirmation': '',
        'lga_id': '',
        'permission': '',
        'role_id': '',
        'category_id': ''
      },
      userDefault: {
        'id': '',
        'name': '',
        'email': '',
        'phone': '',
        'password': '',
        'password_confirmation': '',
        'lga_id': '',
        'permission': '',
        'role_id': '',
        'category_id': ''
      },
      errors: [],
      depts: [],
      lgas: [],
      roles: [],
      'permissions': []
    };
  },
  computed: {
    formTitle: function formTitle() {
      return this.userIndex === -1 ? 'New User' : 'Edit User';
    }
  },
  watch: {
    dialog: function dialog(val) {
      val || this.close();
    }
  },
  methods: {
    editUsr: function editUsr(item) {
      this.userIndex = this.users.indexOf(item);
      this.user = Object.assign({}, item), //  this.getLgas();
      $('#password').addClass('hide');
      $('#cpassword').addClass('hide');
      this.dialog = true;
    },
    deleteUsr: function deleteUsr(item) {
      var index = this.users.indexOf(item); // confirm('Are you sure you want to delete ?'+item.name ) && this.agents.splice(index, 1)

      this.deleteUser(item);
    },
    close: function close() {
      var _this = this;

      $('#password').removeClass('hide');
      $('#cpassword').removeClass('hide');
      this.dialog = false;
      this.$nextTick(function () {
        // $('#lga_col').removeClass('hide');
        _this.user = Object.assign({}, _this.userDefault), _this.userIndex = -1;
      });
    },
    save: function save() {
      if (this.userIndex > -1) {
        // edit
        Object.assign(this.users[this.userIndex], this.users);
        this.updateUser();
      } else {
        // new
        this.users.push(this.user);
        this.addNewUser();
      }

      this.close();
    },
    addNewUser: function () {
      var _addNewUser = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        var _this2 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.prev = 0;
                _context.next = 3;
                return axios.post('/user', {
                  'name': this.user.name,
                  'email': this.user.email,
                  'phone': this.user.phone,
                  'password': this.user.password,
                  'cpassword': this.user.password_confirmation,
                  'category_id': this.user.category_id,
                  'role_id': this.user.role_id,
                  'lga_id': this.user.lga_id,
                  'permission': this.user.permission
                }).then(function (response) {
                  //console.log(response.data);
                  if (response.data.status == 'success') {
                    //hide modal
                    $('#usersModal').modal('hide'); //display notification

                    _this2.flashMessage.success({
                      title: '',
                      message: 'User added successfully!',
                      time: 5000
                    }); //  this.users.unshift(response.data.data);

                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this2.errors = error.response.data.errors;
                    _this2.dialog = 'true';

                    _this2.flashMessage.error({
                      title: '',
                      message: 'Unprocessable entity!',
                      time: 5000
                    });
                  } else {
                    console.log('else1');
                  }
                });

              case 3:
                _context.next = 8;
                break;

              case 5:
                _context.prev = 5;
                _context.t0 = _context["catch"](0);
                //console.log('df '+e);
                this.flashMessage.error({
                  title: '',
                  message: 'Error in adding User!',
                  time: 5000
                });

              case 8:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this, [[0, 5]]);
      }));

      function addNewUser() {
        return _addNewUser.apply(this, arguments);
      }

      return addNewUser;
    }(),
    editUser: function editUser(user) {
      jQuery.noConflict(); //to clear multiple jquery import error

      this.userIndex = this.users.indexOf(user), this.user.id = user.id, this.user.name = user.name, this.user.email = user.email, this.user.phone = user.phone, this.user.category_id = user.category_id, this.user.role_id = user.role_id, this.user.permission = user.permission.split(','), this.user.lga_id = user.lga_id;
      this.getPermissions();
      this.dialog = true; // $('#editUsersModal').modal('show');
    },
    updateUser: function () {
      var _updateUser = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        var _this3 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                _context2.next = 3;
                return axios.put("/user/".concat(this.user.id), {
                  'name': this.user.name,
                  'email': this.user.email,
                  'phone': this.user.phone,
                  'category_id': this.user.category_id,
                  'role_id': this.user.role_id,
                  'lga_id': this.user.lga_id,
                  'permission': this.user.permission
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    //update table
                    _this3.users.map(function (user) {
                      if (user.id == response.data.data.id) {
                        //agent = response.data.data;
                        for (var key in response.data.data) {
                          user[key] = response.data.data[key];
                        }
                      }
                    }); //show notification


                    _this3.flashMessage.success({
                      title: '',
                      message: 'User updated successfully!',
                      time: 5000
                    });
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    //console.log(error.response.data.errors['users.name'][0]);
                    _this3.errors = error.response.data.errors;
                    _this3.dialog = 'true';

                    _this3.flashMessage.error({
                      title: '',
                      message: 'Unprocessable entity!',
                      time: 5000
                    });
                  } else {
                    console.log('else2');
                  }
                });

              case 3:
                _context2.next = 7;
                break;

              case 5:
                _context2.prev = 5;
                _context2.t0 = _context2["catch"](0);

              case 7:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this, [[0, 5]]);
      }));

      function updateUser() {
        return _updateUser.apply(this, arguments);
      }

      return updateUser;
    }(),
    deleteUser: function () {
      var _deleteUser = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee3(user) {
        var _this4 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                if (window.confirm("Are you sure you want to delete ".concat(user.name))) {
                  _context3.next = 2;
                  break;
                }

                return _context3.abrupt("return");

              case 2:
                _context3.prev = 2;
                _context3.next = 5;
                return axios["delete"]("/user/".concat(user.id)).then(function (response) {
                  console.log(response);

                  if (response.status == 204) {
                    //remove from table
                    _this4.users = _this4.users.filter(function (obj) {
                      return obj.id != user.id;
                    }); //show notification

                    _this4.flashMessage.success({
                      title: '',
                      message: 'User deleted successfully!',
                      time: 5000
                    });
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 404) {
                    //console.log(error.response.data.errors['users.name'][0]);
                    _this4.errors = error.response.data.errors;

                    _this4.flashMessage.error({
                      title: '',
                      message: 'User not found!',
                      time: 5000
                    });
                  } else {
                    console.log('else');
                  }
                });

              case 5:
                _context3.next = 10;
                break;

              case 7:
                _context3.prev = 7;
                _context3.t0 = _context3["catch"](2);
                this.flashMessage.error({
                  title: '',
                  message: 'Error in deleting Agent!',
                  time: 5000
                });

              case 10:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, this, [[2, 7]]);
      }));

      function deleteUser(_x) {
        return _deleteUser.apply(this, arguments);
      }

      return deleteUser;
    }(),
    getLgas: function () {
      var _getLgas = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee4() {
        var _this5 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee4$(_context4) {
          while (1) {
            switch (_context4.prev = _context4.next) {
              case 0:
                _context4.prev = 0;
                _context4.next = 3;
                return axios.get("/state/".concat(this.$state_id, "/lgas")).then(function (response) {
                  _this5.lgas = response.data.data;
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
        }, _callee4, this, [[0, 5]]);
      }));

      function getLgas() {
        return _getLgas.apply(this, arguments);
      }

      return getLgas;
    }(),
    getUsers: function () {
      var _getUsers = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee5() {
        var _this6 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee5$(_context5) {
          while (1) {
            switch (_context5.prev = _context5.next) {
              case 0:
                _context5.prev = 0;
                _context5.next = 3;
                return axios.get('/user').then(function (response) {
                  //console.log(response.data.data);
                  _this6.users = response.data.data;
                  _this6.table_1 = false;
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
        }, _callee5, null, [[0, 5]]);
      }));

      function getUsers() {
        return _getUsers.apply(this, arguments);
      }

      return getUsers;
    }(),
    getCategories: function () {
      var _getCategories = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee6() {
        var _this7 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee6$(_context6) {
          while (1) {
            switch (_context6.prev = _context6.next) {
              case 0:
                _context6.prev = 0;
                _context6.next = 3;
                return axios.get('/getcategory/all').then(function (response) {
                  //console.log(response.data.data);
                  _this7.depts = response.data.data;
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

      function getCategories() {
        return _getCategories.apply(this, arguments);
      }

      return getCategories;
    }(),
    getRoles: function () {
      var _getRoles = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee7() {
        var _this8 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee7$(_context7) {
          while (1) {
            switch (_context7.prev = _context7.next) {
              case 0:
                _context7.prev = 0;
                _context7.next = 3;
                return axios.get('/role').then(function (response) {
                  //console.log(response.data.data);
                  _this8.roles = response.data.data;
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

      function getRoles() {
        return _getRoles.apply(this, arguments);
      }

      return getRoles;
    }(),
    getPermissions: function () {
      var _getPermissions = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee8() {
        var _this9 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee8$(_context8) {
          while (1) {
            switch (_context8.prev = _context8.next) {
              case 0:
                _context8.prev = 0;
                _context8.next = 3;
                return axios.get('/permission_name').then(function (response) {
                  //console.log(response.data.data);
                  _this9.permissions = response.data.data;
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

      function getPermissions() {
        return _getPermissions.apply(this, arguments);
      }

      return getPermissions;
    }()
  },
  mounted: function mounted() {
    // this.getAuth();
    this.getLgas();
    this.getUsers();
    this.getRoles();
    this.getCategories();
    this.getPermissions();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/user/User.vue?vue&type=template&id=28427674&":
/*!************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/user/User.vue?vue&type=template&id=28427674& ***!
  \************************************************************************************************************************************************************************************************************/
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
      _c("h1", [_vm._v("USERS MANAGEMENT")]),
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
        _c("li", { staticClass: "active" }, [_vm._v("Users")])
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
                _vm._v(" User Management\n                    "),
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
                          data: this.users,
                          columns: _vm.columns,
                          filename: "users",
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
                items: this.users,
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
                                        [_vm._v("New User")]
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
                                                      label: "Name",
                                                      rules: [
                                                        function(v) {
                                                          return (
                                                            !!v ||
                                                            "Name is required"
                                                          )
                                                        }
                                                      ]
                                                    },
                                                    model: {
                                                      value: _vm.user.name,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.user,
                                                          "name",
                                                          $$v
                                                        )
                                                      },
                                                      expression: "user.name"
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
                                                            "Name of user is required"
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
                                                      label: "Email",
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
                                                      value: _vm.user.email,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.user,
                                                          "email",
                                                          $$v
                                                        )
                                                      },
                                                      expression: "user.email"
                                                    }
                                                  }),
                                                  _vm._v(" "),
                                                  _vm.errors["email"]
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
                                                  _c("v-text-field", {
                                                    attrs: {
                                                      label: "Phone",
                                                      rules: [
                                                        function(v) {
                                                          return (
                                                            !!v ||
                                                            "Phone is required"
                                                          )
                                                        }
                                                      ]
                                                    },
                                                    model: {
                                                      value: _vm.user.phone,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.user,
                                                          "phone",
                                                          $$v
                                                        )
                                                      },
                                                      expression: "user.phone"
                                                    }
                                                  }),
                                                  _vm._v(" "),
                                                  _vm.errors["email"]
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
                                                            "Phone number  is required"
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
                                                    id: "password",
                                                    cols: "12",
                                                    sm: "12",
                                                    md: "12"
                                                  }
                                                },
                                                [
                                                  _c("v-text-field", {
                                                    attrs: {
                                                      label: "Password",
                                                      rules: [
                                                        function(v) {
                                                          return (
                                                            !!v ||
                                                            "Password is required"
                                                          )
                                                        }
                                                      ],
                                                      "append-icon": _vm.show2
                                                        ? "mdi-eye"
                                                        : "mdi-eye-off",
                                                      type: _vm.show2
                                                        ? "text"
                                                        : "password",
                                                      hint:
                                                        "At least 4 characters",
                                                      counter: ""
                                                    },
                                                    on: {
                                                      "click:append": function(
                                                        $event
                                                      ) {
                                                        _vm.show2 = !_vm.show2
                                                      }
                                                    },
                                                    model: {
                                                      value: _vm.user.password,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.user,
                                                          "password",
                                                          $$v
                                                        )
                                                      },
                                                      expression:
                                                        "user.password"
                                                    }
                                                  }),
                                                  _vm._v(" "),
                                                  _vm.errors["password"]
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
                                                            "Confirm Password is required"
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
                                                    id: "cpassword",
                                                    cols: "12",
                                                    sm: "12",
                                                    md: "12"
                                                  }
                                                },
                                                [
                                                  _c("v-text-field", {
                                                    attrs: {
                                                      label: "Confirm Password",
                                                      rules: [
                                                        function(v) {
                                                          return (
                                                            !!v ||
                                                            "Confirm Password is required"
                                                          )
                                                        }
                                                      ],
                                                      "append-icon": _vm.show1
                                                        ? "mdi-eye"
                                                        : "mdi-eye-off",
                                                      type: _vm.show1
                                                        ? "text"
                                                        : "password",
                                                      hint:
                                                        "At least 4 characters",
                                                      counter: ""
                                                    },
                                                    on: {
                                                      "click:append": function(
                                                        $event
                                                      ) {
                                                        _vm.show1 = !_vm.show1
                                                      }
                                                    },
                                                    model: {
                                                      value:
                                                        _vm.user
                                                          .password_confirmation,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.user,
                                                          "password_confirmation",
                                                          $$v
                                                        )
                                                      },
                                                      expression:
                                                        "user.password_confirmation"
                                                    }
                                                  }),
                                                  _vm._v(" "),
                                                  _vm.errors["cpassword"]
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
                                                            "confirm Password is required"
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
                                                    id: "",
                                                    cols: "12",
                                                    sm: "12",
                                                    md: "12"
                                                  }
                                                },
                                                [
                                                  _c("v-select", {
                                                    attrs: {
                                                      items: _vm.depts,
                                                      "item-text": "name",
                                                      "item-value": "id",
                                                      label: "Select Department"
                                                    },
                                                    model: {
                                                      value:
                                                        _vm.user.category_id,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.user,
                                                          "category_id",
                                                          $$v
                                                        )
                                                      },
                                                      expression:
                                                        "user.category_id"
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
                                                    id: "",
                                                    cols: "12",
                                                    sm: "12",
                                                    md: "12"
                                                  }
                                                },
                                                [
                                                  _c("v-select", {
                                                    attrs: {
                                                      items: _vm.lgas,
                                                      "item-text": "name",
                                                      "item-value": "id",
                                                      label: "Select LGA"
                                                    },
                                                    model: {
                                                      value: _vm.user.lga_id,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.user,
                                                          "lga_id",
                                                          $$v
                                                        )
                                                      },
                                                      expression: "user.lga_id"
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
                                                    id: "",
                                                    cols: "12",
                                                    sm: "12",
                                                    md: "12"
                                                  }
                                                },
                                                [
                                                  _c("v-select", {
                                                    attrs: {
                                                      id: "",
                                                      items: _vm.roles,
                                                      "item-text": "name",
                                                      "item-value": "id",
                                                      label: "Select User Role"
                                                    },
                                                    model: {
                                                      value: _vm.user.role_id,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.user,
                                                          "role_id",
                                                          $$v
                                                        )
                                                      },
                                                      expression: "user.role_id"
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
                                                            "Permission is required"
                                                          )
                                                        }
                                                      ],
                                                      items: _vm.permissions,
                                                      "menu-props": {
                                                        maxHeight: "400"
                                                      },
                                                      label:
                                                        "Select Permission",
                                                      multiple: "",
                                                      hint: "Select Permission",
                                                      "persistent-hint": ""
                                                    },
                                                    model: {
                                                      value:
                                                        _vm.user.permission,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.user,
                                                          "permission",
                                                          $$v
                                                        )
                                                      },
                                                      expression:
                                                        "user.permission"
                                                    }
                                                  }),
                                                  _vm._v(" "),
                                                  _vm.errors["permission_id"]
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
                                                                "permission_id"
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
                                            c: "",
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
                              return _vm.editUser(item)
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
                              return _vm.deleteUsr(item)
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
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "panel-heading d-flex" }, [
      _c("span", [_vm._v("USERS TABLE")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/user/User.vue":
/*!***********************************************!*\
  !*** ./resources/js/components/user/User.vue ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _User_vue_vue_type_template_id_28427674___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./User.vue?vue&type=template&id=28427674& */ "./resources/js/components/user/User.vue?vue&type=template&id=28427674&");
/* harmony import */ var _User_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./User.vue?vue&type=script&lang=js& */ "./resources/js/components/user/User.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _User_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _User_vue_vue_type_template_id_28427674___WEBPACK_IMPORTED_MODULE_0__["render"],
  _User_vue_vue_type_template_id_28427674___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/user/User.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/user/User.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./resources/js/components/user/User.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_User_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./User.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/user/User.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_User_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/user/User.vue?vue&type=template&id=28427674&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/user/User.vue?vue&type=template&id=28427674& ***!
  \******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_User_vue_vue_type_template_id_28427674___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./User.vue?vue&type=template&id=28427674& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/user/User.vue?vue&type=template&id=28427674&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_User_vue_vue_type_template_id_28427674___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_User_vue_vue_type_template_id_28427674___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);