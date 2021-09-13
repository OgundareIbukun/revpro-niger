(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[10],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/lga/index.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/lga/index.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


var _methods;

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
/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'LGAs',
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
      }],
      //  summary:[],
      agents: [],
      lgaIndex: -1,
      lgas: [],
      lga: {
        'id': '',
        'name': '',
        'state_id': ''
      },
      lgaDefault: {
        'id': '',
        'name': '',
        'state_id': ''
      },
      errors: [],
      //types: [],
      states: []
    }, "lgas", []);
  },
  computed: {
    formTitle: function formTitle() {
      return this.lgaIndex === -1 ? 'New LGA' : 'Edit LGA';
    }
  },
  watch: {
    dialog: function dialog(val) {
      val || this.close();
    }
  },
  methods: (_methods = {
    editLga: function editLga(item) {
      this.lgaIndex = this.lgas.indexOf(item); // this.revPointIndex = this.revenuepoints.indexOf(item)

      this.lga.name = item.name;
      this.lga.state_id = item.state_id;
      this.lga.id = item.id;
      this.dialog = true;
    },
    deleteLga: function deleteLga(item) {
      var index = this.lgas.indexOf(item); // confirm('Are you sure you want to delete ?'+item.name ) && this.agents.splice(index, 1)

      this.deleteLga(item);
    },
    close: function close() {
      var _this = this;

      this.dialog = false;
      this.$nextTick(function () {
        //  $('#lga_col').removeClass('hide');
        _this.lga = Object.assign({}, _this.lgaDefault), _this.lgaIndex = -1;
      });
    },
    save: function save() {
      if (this.lgaIndex > -1) {
        // edit
        Object.assign(this.lgas[this.lgaIndex], this.lga);
        this.updateLga();
      } else {
        // new
        alert('am here'); //  this.agents.push(this.agent)

        this.addNewLga();
      }

      this.close();
    },
    addNewLga: function () {
      var _addNewLga = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        var _this2 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.prev = 0;
                _context.next = 3;
                return axios.post('/lgas', {
                  'name': this.lga.name,
                  'state_id': this.$state_id
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    _this2.dialog = false;

                    _this2.flashMessage.success({
                      title: '',
                      message: 'LGA added succesfully!',
                      time: 5000
                    });

                    _this2.lgas.unshift(response.data.data);
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this2.errros = error.response.data.errors;
                    _this2.dialog = true;

                    _this2.flashMessage.error({
                      title: '',
                      message: 'Unprocessable entity',
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
                this.flashMessage.error({
                  title: '',
                  message: 'Error in adding   LGA',
                  time: 5000
                });

              case 8:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this, [[0, 5]]);
      }));

      function addNewLga() {
        return _addNewLga.apply(this, arguments);
      }

      return addNewLga;
    }(),
    updateLga: function () {
      var _updateLga = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        var _this3 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                _context2.next = 3;
                return axios.put("/lgas/".concat(this.lga.id), {
                  'name': this.lga.name,
                  'state_id': this.$state_id
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    //      $('#editRevenuePointsModal').modal('hide');
                    // this.modal = false;
                    _this3.dialog = false;

                    _this3.lgas.map(function (lga) {
                      if (lga.id == response.data.data.id) {
                        for (var key in response.data.data) {
                          lga[key] = response.data.data[key];
                        }
                      }
                    });

                    _this3.flashMessage.success({
                      title: '',
                      message: 'LGA Updated Successfully',
                      time: 5000
                    });
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);
                  _this3.dialog = true;

                  if (errors.response.status == 422) {
                    _this3.errors = error.response.data.errors;

                    _this3.flashMessage.error({
                      title: '',
                      message: 'unprocessable entity',
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

      function updateLga() {
        return _updateLga.apply(this, arguments);
      }

      return updateLga;
    }()
  }, _defineProperty(_methods, "deleteLga", function () {
    var _deleteLga = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee3(lga) {
      var _this4 = this;

      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee3$(_context3) {
        while (1) {
          switch (_context3.prev = _context3.next) {
            case 0:
              if (window.confirm("Are you sure you want to delete ".concat(lga.name))) {
                _context3.next = 2;
                break;
              }

              return _context3.abrupt("return");

            case 2:
              _context3.prev = 2;
              _context3.next = 5;
              return axios["delete"]("/lgas/".concat(lga.id)).then(function (response) {
                console.log(response);

                if (response.status == 204) {
                  //remove from table
                  _this4.lgas = _this4.lgas.filter(function (obj) {
                    return obj.id != lga.id;
                  }); //show notification

                  _this4.flashMessage.success({
                    title: '',
                    message: 'Lga  deleted successfully!',
                    time: 5000
                  });
                }
              })["catch"](function (error) {
                console.log(error.response.data.errors);

                if (error.response.status == 404) {
                  _this4.errors = error.response.data.errors;

                  _this4.flashMessage.error({
                    title: '',
                    message: 'LGA not found!',
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
                message: 'Error in deleting LGA!',
                time: 5000
              });

            case 10:
            case "end":
              return _context3.stop();
          }
        }
      }, _callee3, this, [[2, 7]]);
    }));

    function deleteLga(_x) {
      return _deleteLga.apply(this, arguments);
    }

    return deleteLga;
  }()), _defineProperty(_methods, "getLgas", function () {
    var _getLgas = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee4() {
      var _this5 = this;

      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee4$(_context4) {
        while (1) {
          switch (_context4.prev = _context4.next) {
            case 0:
              _context4.prev = 0;
              _context4.next = 3;
              return axios.get('/lgas').then(function (response) {
                _this5.lgas = response.data.data;
                _this5.table_1 = false;
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
  }()), _methods),
  mounted: function mounted() {
    this.getLgas();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/lga/index.vue?vue&type=template&id=6c449ce4&":
/*!************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/lga/index.vue?vue&type=template&id=6c449ce4& ***!
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
      _c("h1", [_vm._v(" LGA ")]),
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
        _c("li", { staticClass: "active" }, [_vm._v(" LGA ")])
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
                _vm._v(" LGA\n                    "),
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
                          data: this.lgas,
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
                headers: this.headers,
                items: this.lgas,
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
                                        [_vm._v("New LGA")]
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
                                                      label: "LGA Name",
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
                                                      value: _vm.lga.name,
                                                      callback: function($$v) {
                                                        _vm.$set(
                                                          _vm.lga,
                                                          "name",
                                                          $$v
                                                        )
                                                      },
                                                      expression: "lga.name"
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
                                            color: "blue darken-1",
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
                              return _vm.editLga(item)
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
                              return _vm.deleteLga(item)
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
      _c("span", [_vm._v(" Lga  Table ")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/lga/index.vue":
/*!***********************************************!*\
  !*** ./resources/js/components/lga/index.vue ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _index_vue_vue_type_template_id_6c449ce4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./index.vue?vue&type=template&id=6c449ce4& */ "./resources/js/components/lga/index.vue?vue&type=template&id=6c449ce4&");
/* harmony import */ var _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index.vue?vue&type=script&lang=js& */ "./resources/js/components/lga/index.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _index_vue_vue_type_template_id_6c449ce4___WEBPACK_IMPORTED_MODULE_0__["render"],
  _index_vue_vue_type_template_id_6c449ce4___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/lga/index.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/lga/index.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./resources/js/components/lga/index.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./index.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/lga/index.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/lga/index.vue?vue&type=template&id=6c449ce4&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/lga/index.vue?vue&type=template&id=6c449ce4& ***!
  \******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_6c449ce4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./index.vue?vue&type=template&id=6c449ce4& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/lga/index.vue?vue&type=template&id=6c449ce4&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_6c449ce4___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_6c449ce4___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);