(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[27],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/setting/ChangePassword.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/setting/ChangePassword.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************/
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
/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'Password',
  data: function data() {
    return {
      show1: false,
      show2: true,
      show3: false,
      password: 'Password',
      rules: {
        required: function required(value) {
          return !!value || 'Required.';
        },
        min: function min(v) {
          return v.length >= 8 || 'Min 8 characters';
        }
      },
      old_password: '',
      new_password: '',
      confirm_password: '',
      errors: []
    };
  },
  methods: {
    changePassword: function () {
      var _changePassword = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        var _this = this;

        var response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.prev = 0;
                _context.next = 3;
                return axios.post('/changepassword', {
                  'old_password': this.old_password,
                  'new_password': this.new_password,
                  'confirm_password': this.confirm_password
                }).then(function (response) {
                  if (response.data.status == 'success') {
                    _this.flashMessage.success({
                      title: '',
                      message: 'Password Changed successfully!',
                      time: 5000
                    });
                  } else {
                    console.log(error.response.data.errors);
                    _this.errors = error.response.data.errors;
                    alert(_this.errors);
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this.errors = error.response.data.errors; //  alert(this.errors);

                    _this.flashMessage.error({
                      title: '',
                      message: 'Unprocessable entity',
                      time: 5000
                    });
                  } else {
                    _this.errors = error.request.data.errors;
                  }
                });

              case 3:
                response = _context.sent;
                _context.next = 9;
                break;

              case 6:
                _context.prev = 6;
                _context.t0 = _context["catch"](0);
                // console.log(error.response.data.errors);
                this.flashMessage.error({
                  title: '',
                  message: 'old password or new password incorrect',
                  time: 5000
                });

              case 9:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this, [[0, 6]]);
      }));

      function changePassword() {
        return _changePassword.apply(this, arguments);
      }

      return changePassword;
    }(),
    addNewRevenuePoint: function () {
      var _addNewRevenuePoint = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        var _this2 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                _context2.next = 3;
                return axios.post('/revenuepoint', {}).then(function (response) {
                  if (response.data.status == 'success') {
                    _this2.dialog = false;

                    _this2.flashMessage.success({
                      title: '',
                      message: 'Revenue Point added succesfully!',
                      time: 5000
                    }); // this.revenuepoints.unshift(response.data.data);

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
                _context2.next = 8;
                break;

              case 5:
                _context2.prev = 5;
                _context2.t0 = _context2["catch"](0);
                this.flashMessage.error({
                  title: '',
                  message: 'Error in adding Revenue Point',
                  time: 5000
                });

              case 8:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this, [[0, 5]]);
      }));

      function addNewRevenuePoint() {
        return _addNewRevenuePoint.apply(this, arguments);
      }

      return addNewRevenuePoint;
    }()
  },
  mounted: function mounted() {}
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/setting/ChangePassword.vue?vue&type=template&id=3af6bf35&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/setting/ChangePassword.vue?vue&type=template&id=3af6bf35& ***!
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
      _c("h1", [_vm._v(" CHANGE PASSWORD ")]),
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
        _c("li", { staticClass: "active" }, [_vm._v(" Change Password ")])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "page-body" }, [
      _c("div", { staticClass: "panel panel-default" }, [
        _vm._m(0),
        _vm._v(" "),
        _c("div", { staticClass: "panel-body" }, [
          _c(
            "form",
            {
              on: {
                submit: function($event) {
                  $event.preventDefault()
                  return _vm.changePassword($event)
                }
              }
            },
            [
              _c("div", { staticClass: "modal-body" }, [
                _c(
                  "div",
                  { staticClass: "form-group" },
                  [
                    _c("v-text-field", {
                      staticClass: "input-group--focused",
                      attrs: {
                        "append-icon": _vm.show1 ? "mdi-eye" : "mdi-eye-off",
                        rules: [_vm.rules.required, _vm.rules.min],
                        type: _vm.show1 ? "text" : "password",
                        name: "input-10-1",
                        label: "Old Password",
                        hint: "At least 8 characters",
                        counter: ""
                      },
                      on: {
                        "click:append": function($event) {
                          _vm.show1 = !_vm.show1
                        }
                      },
                      model: {
                        value: _vm.old_password,
                        callback: function($$v) {
                          _vm.old_password = $$v
                        },
                        expression: "old_password"
                      }
                    }),
                    _vm._v(" "),
                    _vm.errors["old_password"]
                      ? _c("label", { staticClass: "error" }, [
                          _vm._v(_vm._s(_vm.errors["old_password"][0]))
                        ])
                      : _vm._e()
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "form-group" },
                  [
                    _c("v-text-field", {
                      staticClass: "input-group--focused",
                      attrs: {
                        "append-icon": _vm.show2 ? "mdi-eye" : "mdi-eye-off",
                        rules: [_vm.rules.required, _vm.rules.min],
                        type: _vm.show1 ? "text" : "password",
                        name: "input-10-2",
                        label: "New Password",
                        hint: "At least 8 characters",
                        counter: ""
                      },
                      on: {
                        "click:append": function($event) {
                          _vm.show2 = !_vm.show2
                        }
                      },
                      model: {
                        value: _vm.new_password,
                        callback: function($$v) {
                          _vm.new_password = $$v
                        },
                        expression: "new_password"
                      }
                    }),
                    _vm._v(" "),
                    _vm.errors["new_password"]
                      ? _c("label", { staticClass: "error" }, [
                          _vm._v(_vm._s(_vm.errors["new_password"][0]))
                        ])
                      : _vm._e()
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "form-group" },
                  [
                    _c("v-text-field", {
                      staticClass: "input-group--focused",
                      attrs: {
                        "append-icon": _vm.show3 ? "mdi-eye" : "mdi-eye-off",
                        rules: [_vm.rules.required, _vm.rules.min],
                        type: _vm.show3 ? "text" : "password",
                        name: "input-10-2",
                        label: "Confirm Password",
                        hint: "At least 8 characters",
                        counter: ""
                      },
                      on: {
                        "click:append": function($event) {
                          _vm.show3 = !_vm.show3
                        }
                      },
                      model: {
                        value: _vm.confirm_password,
                        callback: function($$v) {
                          _vm.confirm_password = $$v
                        },
                        expression: "confirm_password"
                      }
                    }),
                    _vm._v(" "),
                    _vm.errors["confirm_password"]
                      ? _c("label", { staticClass: "error" }, [
                          _vm._v(_vm._s(_vm.errors["confirm_password"][0]))
                        ])
                      : _vm._e()
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "form-group" },
                  [
                    _c(
                      "v-btn",
                      {
                        staticClass: " mb-2",
                        staticStyle: { "background-color": "#3c8d" },
                        attrs: { type: "submit", color: "info" }
                      },
                      [_vm._v("Change Password")]
                    )
                  ],
                  1
                )
              ])
            ]
          )
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
    return _c("div", { staticClass: "panel-heading d-flex" }, [
      _c("span", [_vm._v(" Change Password ")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/setting/ChangePassword.vue":
/*!************************************************************!*\
  !*** ./resources/js/components/setting/ChangePassword.vue ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ChangePassword_vue_vue_type_template_id_3af6bf35___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ChangePassword.vue?vue&type=template&id=3af6bf35& */ "./resources/js/components/setting/ChangePassword.vue?vue&type=template&id=3af6bf35&");
/* harmony import */ var _ChangePassword_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ChangePassword.vue?vue&type=script&lang=js& */ "./resources/js/components/setting/ChangePassword.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ChangePassword_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _ChangePassword_vue_vue_type_template_id_3af6bf35___WEBPACK_IMPORTED_MODULE_0__["render"],
  _ChangePassword_vue_vue_type_template_id_3af6bf35___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/setting/ChangePassword.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/setting/ChangePassword.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/setting/ChangePassword.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ChangePassword_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./ChangePassword.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/setting/ChangePassword.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ChangePassword_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/setting/ChangePassword.vue?vue&type=template&id=3af6bf35&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/components/setting/ChangePassword.vue?vue&type=template&id=3af6bf35& ***!
  \*******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ChangePassword_vue_vue_type_template_id_3af6bf35___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./ChangePassword.vue?vue&type=template&id=3af6bf35& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/setting/ChangePassword.vue?vue&type=template&id=3af6bf35&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ChangePassword_vue_vue_type_template_id_3af6bf35___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ChangePassword_vue_vue_type_template_id_3af6bf35___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);