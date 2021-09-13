(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[11],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/forgotpassword.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/main/forgotpassword.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************/
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
// import this component
// import flatPickr from 'vue-flatpickr-component';
//import 'flatpickr/dist/flatpickr.css';
//import 'flatpickr/dist/themes/material_blue.css';
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "resetPassword",
  data: function data() {
    return {
      dialog: false,
      dialog2: false,
      phone: '',
      otp: '',
      newPassword: '',
      confirmPassword: '',
      errors: []
    };
  },
  methods: {
    Initialize: function () {
      var _Initialize = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        var _this = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.prev = 0;
                jQuery.noConflict();
                _context.next = 4;
                return axios.post('/resetpassword/initialize', {
                  phone: this.phone
                }).then(function (response) {
                  //console.log(response.data);
                  if (response.data.status == 'success') {
                    $('#verifyModal').modal('show'); //display notification

                    _this.flashMessage.success({
                      title: '',
                      message: response.data.data,
                      time: 5000
                    }); //this.$refs.Modal1 = true;

                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this.errors = error.response.data.error;
                    console.log(error.response.data.error); //this.dialog = true;

                    _this.flashMessage.error({
                      title: '',
                      message: 'Unprocessed Entity',
                      time: 5000
                    });
                  } else {
                    console.log('else1');
                  }
                });

              case 4:
                _context.next = 9;
                break;

              case 6:
                _context.prev = 6;
                _context.t0 = _context["catch"](0);
                //console.log('df '+e);
                this.flashMessage.error({
                  title: '',
                  message: 'Error occured!',
                  time: 5000
                });

              case 9:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this, [[0, 6]]);
      }));

      function Initialize() {
        return _Initialize.apply(this, arguments);
      }

      return Initialize;
    }(),
    verifyOTP: function () {
      var _verifyOTP = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        var _this2 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                jQuery.noConflict();
                _context2.next = 4;
                return axios.post('/resetpassword/verify', {
                  phone: this.phone,
                  otp: this.otp
                }).then(function (response) {
                  //console.log(response.data);
                  if (response.data.status == 'success') {
                    // this.$refs.Modal1 = false;
                    // this.$refs.Modal2 = true;
                    $('#verifyModal').modal('hide');
                    $('#resetModal').modal('show'); //display notification

                    _this2.flashMessage.success({
                      title: '',
                      message: response.data.data,
                      time: 5000
                    });
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.error);

                  if (error.response.status == 422) {
                    _this2.errors = error.response.data.error; //this.$refs.Modal1 = true;

                    $('#verifyModal').modal('show');

                    _this2.flashMessage.error({
                      title: '',
                      message: 'Unprocessable entity!',
                      time: 5000
                    });
                  } else {
                    console.log('else1');
                  }
                });

              case 4:
                _context2.next = 9;
                break;

              case 6:
                _context2.prev = 6;
                _context2.t0 = _context2["catch"](0);
                //console.log('df '+e);
                this.flashMessage.error({
                  title: '',
                  message: 'Error occured!',
                  time: 5000
                });

              case 9:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this, [[0, 6]]);
      }));

      function verifyOTP() {
        return _verifyOTP.apply(this, arguments);
      }

      return verifyOTP;
    }(),
    resetPassword: function () {
      var _resetPassword = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee3() {
        var _this3 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                _context3.prev = 0;
                jQuery.noConflict();
                _context3.next = 4;
                return axios.post('/resetpassword/store', {
                  phone: this.phone,
                  new_password: this.newPassword,
                  confirm_password: this.confirmPassword
                }).then(function (response) {
                  //this.dialog = false
                  //console.log(response.data);
                  if (response.data.status == 'success') {
                    //hide modal
                    // $('#agentsModal').modal('hide');
                    //this.$refs.Modal2 = false;
                    $('#resetModal').modal('hide'); //display notification

                    _this3.flashMessage.success({
                      title: '',
                      message: 'Password Changed!',
                      time: 5000
                    }); //  this.agents.unshift(response.data.data);


                    setTimeout(function () {
                      _this3.$router.go(-1);
                    }, 3000); // setTimeout(() => { this.$router.push('/login') }, 3000);
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.error);

                  if (error.response.status == 422) {
                    _this3.errors = error.response.data.message;
                    $('#resetModal').modal('show');

                    _this3.flashMessage.error({
                      title: '',
                      message: error.response.data.message,
                      time: 5000
                    });
                  } else {
                    console.log('else1');
                  }
                });

              case 4:
                _context3.next = 9;
                break;

              case 6:
                _context3.prev = 6;
                _context3.t0 = _context3["catch"](0);
                //console.log('df '+e);
                this.flashMessage.error({
                  title: '',
                  message: 'Error occured!',
                  time: 5000
                });

              case 9:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, this, [[0, 6]]);
      }));

      function resetPassword() {
        return _resetPassword.apply(this, arguments);
      }

      return resetPassword;
    }(),
    gotoLogin: function () {
      var _gotoLogin = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee4() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee4$(_context4) {
          while (1) {
            switch (_context4.prev = _context4.next) {
              case 0:
                _context4.next = 2;
                return axios.get('/').then(function (response) {})["catch"](function (error) {});

              case 2:
              case "end":
                return _context4.stop();
            }
          }
        }, _callee4);
      }));

      function gotoLogin() {
        return _gotoLogin.apply(this, arguments);
      }

      return gotoLogin;
    }()
  },
  mounted: function mounted() {}
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/forgotpassword.vue?vue&type=template&id=a9630c4e&":
/*!**********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/main/forgotpassword.vue?vue&type=template&id=a9630c4e& ***!
  \**********************************************************************************************************************************************************************************************************************/
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
    _c("div", [
      _c(
        "form",
        {
          on: {
            submit: function($event) {
              $event.preventDefault()
              return _vm.Initialize($event)
            }
          }
        },
        [
          _c("div", { staticClass: "form-group has-feedback" }, [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.phone,
                  expression: "phone"
                }
              ],
              staticClass: "form-control",
              attrs: {
                type: "text",
                value: "",
                placeholder: "Registered Phone",
                name: "phone",
                required: "",
                autocomplete: ""
              },
              domProps: { value: _vm.phone },
              on: {
                input: function($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.phone = $event.target.value
                }
              }
            }),
            _vm._v(" "),
            _vm._m(0),
            _vm._v(" "),
            _c("span", [
              _vm.errors["phone"]
                ? _c("strong", { staticClass: "text-danger" }, [
                    _vm._v(_vm._s(_vm.errors.phone[0]))
                  ])
                : _vm._e()
            ])
          ]),
          _vm._v(" "),
          _vm._m(1)
        ]
      )
    ]),
    _vm._v(" "),
    _c(
      "div",
      {
        ref: "Modal1",
        staticClass: "modal fade",
        attrs: { id: "verifyModal", tabindex: "-1", role: "dialog" }
      },
      [
        _c(
          "div",
          { staticClass: "modal-dialog", attrs: { role: "document" } },
          [
            _c("div", { staticClass: "modal-content" }, [
              _vm._m(2),
              _vm._v(" "),
              _c(
                "form",
                {
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      return _vm.verifyOTP($event)
                    }
                  }
                },
                [
                  _c("div", { staticClass: "modal-body" }, [
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("OTP")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.otp,
                            expression: "otp"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: {
                          type: "text",
                          id: "otp",
                          name: "otp",
                          placeholder: "OTP "
                        },
                        domProps: { value: _vm.otp },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.otp = $event.target.value
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["otp"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors.otp[0]))
                          ])
                        : _vm._e()
                    ])
                  ]),
                  _vm._v(" "),
                  _vm._m(3)
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
        ref: "Modal2",
        staticClass: "modal fade",
        attrs: { id: "resetModal", tabindex: "-1", role: "dialog" }
      },
      [
        _c(
          "div",
          { staticClass: "modal-dialog", attrs: { role: "document" } },
          [
            _c("div", { staticClass: "modal-content" }, [
              _vm._m(4),
              _vm._v(" "),
              _c(
                "form",
                {
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      return _vm.resetPassword($event)
                    }
                  }
                },
                [
                  _c("div", { staticClass: "modal-body" }, [
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("New Password")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.newPassword,
                            expression: "newPassword"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: {
                          type: "text",
                          id: "newPassword",
                          name: "newPassword",
                          placeholder: "New Password "
                        },
                        domProps: { value: _vm.newPassword },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.newPassword = $event.target.value
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["new_password"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors.new_password[0]))
                          ])
                        : _vm._e()
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "form-group" }, [
                      _c("label", [_vm._v("Confirm Password")]),
                      _vm._v(" "),
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.confirmPassword,
                            expression: "confirmPassword"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: {
                          type: "text",
                          id: "confirmPassword",
                          name: "confirmPassword",
                          placeholder: "Confirm Password "
                        },
                        domProps: { value: _vm.confirmPassword },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.confirmPassword = $event.target.value
                          }
                        }
                      }),
                      _vm._v(" "),
                      _vm.errors["confirm_password"]
                        ? _c("label", { staticClass: "error" }, [
                            _vm._v(_vm._s(_vm.errors.confirm_password[0]))
                          ])
                        : _vm._e()
                    ])
                  ]),
                  _vm._v(" "),
                  _vm._m(5)
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
    return _c(
      "span",
      { staticClass: "glyphicon glyphicon-phone form-control-feedback" },
      [_c("strong")]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-xs-8" }),
      _vm._v(" "),
      _c("div", { staticClass: "col-xs-4", attrs: { align: "center" } }, [
        _c("input", {
          staticClass: "btn btn-primary btn-block btn-flat",
          staticStyle: { "background-color": "#07B871" },
          attrs: { type: "submit", value: "Send OTP" }
        })
      ])
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
        [_vm._v("Verify OTP")]
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
        [_c("i", { staticClass: "fa fa-edit" }), _vm._v("VERIFY")]
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
        { staticClass: "modal-title", attrs: { id: "defaultModalLabel1" } },
        [_vm._v("Reset Password")]
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
        [_c("i", { staticClass: "fa fa-save" }), _vm._v("RESET")]
      ),
      _vm._v(" "),
      _c(
        "button",
        {
          staticClass: "btn btn-danger",
          attrs: { type: "button", "data-dismiss": "modal" }
        },
        [_vm._v("CLOSE")]
      )
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/main/forgotpassword.vue":
/*!*********************************************************!*\
  !*** ./resources/js/components/main/forgotpassword.vue ***!
  \*********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _forgotpassword_vue_vue_type_template_id_a9630c4e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./forgotpassword.vue?vue&type=template&id=a9630c4e& */ "./resources/js/components/main/forgotpassword.vue?vue&type=template&id=a9630c4e&");
/* harmony import */ var _forgotpassword_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./forgotpassword.vue?vue&type=script&lang=js& */ "./resources/js/components/main/forgotpassword.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _forgotpassword_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _forgotpassword_vue_vue_type_template_id_a9630c4e___WEBPACK_IMPORTED_MODULE_0__["render"],
  _forgotpassword_vue_vue_type_template_id_a9630c4e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/main/forgotpassword.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/main/forgotpassword.vue?vue&type=script&lang=js&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/main/forgotpassword.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_forgotpassword_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./forgotpassword.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/forgotpassword.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_forgotpassword_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/main/forgotpassword.vue?vue&type=template&id=a9630c4e&":
/*!****************************************************************************************!*\
  !*** ./resources/js/components/main/forgotpassword.vue?vue&type=template&id=a9630c4e& ***!
  \****************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_forgotpassword_vue_vue_type_template_id_a9630c4e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./forgotpassword.vue?vue&type=template&id=a9630c4e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/main/forgotpassword.vue?vue&type=template&id=a9630c4e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_forgotpassword_vue_vue_type_template_id_a9630c4e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_forgotpassword_vue_vue_type_template_id_a9630c4e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);