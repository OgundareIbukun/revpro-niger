(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[1],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/training/Training.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/training/Training.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************/
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
// import this component




/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'Training',
  created: function created() {},
  computed: {
    videoTitle: function videoTitle() {
      return this.videoIndex === -1 ? 'New Video' : 'Edit Video';
    },
    docTitle: function docTitle() {
      return this.docIndex === -1 ? 'New Document' : 'Edit Document';
    }
  },
  data: function data() {
    return {
      absolute: true,
      reloader: false,
      reloader_1: false,
      reloader_status: false,
      table_1: false,
      table_2: false,
      reloader_status1: false,
      loader: null,
      loading: false,
      // menu: false,
      modal: false,
      menu2: false,
      dialog: false,
      videoIndex: -1,
      dialogDoc: false,
      docIndex: -1,
      vStatusIndex: '',
      dStatusIndex: '',
      vSearch: '',
      vHeaders: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'VIDEOS',
        value: 'file_name',
        sortable: false
      }, {
        text: 'CONTENT',
        value: 'title'
      }, {
        text: 'ACTION',
        value: 'actions',
        sortable: false
      }],
      dSearch: '',
      dHeaders: [{
        text: '#',
        value: 'sn'
      }, {
        text: 'DOCUMENTS',
        value: 'file_name',
        sortable: false
      }, {
        text: 'CONTENT',
        value: 'title'
      }, {
        text: 'ACTION',
        value: 'actions',
        sortable: false
      }],
      errors: [],
      errorsDoc: [],
      types: [],
      videos: [],
      docs: [],
      video: {
        id: '',
        title: '',
        file_name: [],
        description: '',
        tag: '',
        status: ''
      },
      doc: {
        id: '',
        title: '',
        file_name: [],
        description: '',
        tag: '',
        status: ''
      },
      documentDefault: {
        id: '',
        title: '',
        name: [],
        description: '',
        tag: '',
        status: ''
      },
      video_url: '',
      doc_url: '',
      videoDefault: {
        id: '',
        title: '',
        file_name: [],
        description: '',
        tag: ''
      }
    };
  },
  watch: {
    dialog: function dialog(val) {
      val || this.closeVideo();
    },
    dialogDoc: function dialogDoc(val) {
      val || this.closeDoc();
    }
  },
  methods: {
    closeVideo: function closeVideo() {
      var _this = this;

      this.dialog = false;
      this.$nextTick(function () {
        _this.video = Object.assign({}, _this.videoDefault); //   this.revPointIndex = -1
      });
    },
    closeDoc: function closeDoc() {
      var _this2 = this;

      this.dialogDoc = false;
      this.$nextTick(function () {
        _this2.doc = Object.assign({}, _this2.docDefault); //   this.revPointIndex = -1
      });
    },
    previewPassport: function previewPassport(e) {
      this.photo_url = URL.createObjectURL(e);
    },
    editVideo: function editVideo(item) {
      this.videoIndex = this.videos.indexOf(item);
      this.video.id = item.id;
      this.video.title = item.title;
      this.video.description = item.description;
      this.video.tag = item.tag;
      this.video_url = item.file_name;
      this.dialog = true;
    },
    editDoc: function editDoc(item) {
      this.docIndex = this.docs.indexOf(item);
      this.doc.id = item.id;
      this.doc.title = item.title;
      this.doc.description = item.description;
      this.doc.tag = item.tag;
      this.doc_url = item.file_name;
      this.dialogDoc = true;
    },
    saveVideo: function saveVideo() {
      if (this.videoIndex > -1) {
        // edit
        Object.assign(this.videos[this.videoIndex], this.video);
        this.updateVideo();
      } else {
        this.addNewVideo();
      }

      this.closeVideo();
    },
    saveDoc: function saveDoc() {
      if (this.docIndex > -1) {
        // edit
        Object.assign(this.docs[this.docIndex], this.doc);
        this.updateDoc();
      } else {
        this.addNewDoc();
      }

      this.closeDoc();
    },
    statusVideo: function statusVideo(item) {
      // alert(item.status);
      this.reloader_status = true;
      this.video.status = item.status === 1 ? 0 : 1; //   alert(this.video.status);

      this.video.id = item.id;
      this.video.title = item.title;
      this.vStatusIndex = this.videos.indexOf(item);
      this.changeVideoStatus();
    },
    statusDoc: function statusDoc(item) {
      // alert(item.status);
      this.reloader_status1 = true;
      this.doc.status = item.status === 1 ? 0 : 1;
      this.doc.id = item.id;
      this.doc.title = item.title;
      this.dStatusIndex = this.docs.indexOf(item);
      this.changeDocStatus();
    },
    addNewVideo: function () {
      var _addNewVideo = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        var _this3 = this;

        var formData, videodata;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                formData = new FormData();
                videodata = {
                  'title': this.video.title,
                  'description': this.video.description,
                  'tag': this.video.tag
                };
                videodata = JSON.stringify(videodata);
                formData.append('file_name', this.video.file_name);
                formData.append('data', videodata);
                formData.append('type', 1);
                _context.prev = 6;
                _context.next = 9;
                return axios.post('/training/videos', formData, {
                  headers: {
                    'Content-Type': 'multipart/form-data'
                  }
                }).then(function (response) {
                  _this3.dialog = false; //console.log(response.data);

                  if (response.data.status == 'success') {
                    //hide modal
                    //this.$nextTick(() => {
                    // this.video = Object.assign({}, this.videoDefault),
                    //   $('#select_col').removeClass('hide');
                    _this3.videoIndex = -1; //  });

                    _this3.table_1 = false; //display notification

                    _this3.flashMessage.success({
                      title: '',
                      message: 'Video has added successfully!',
                      time: 5000
                    }); //  this.agents.unshift(response.data.data);

                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this3.errors = error.response.data.errors;
                    _this3.dialog = true;

                    _this3.flashMessage.error({
                      title: '',
                      message: 'Unprocessable entity!',
                      time: 5000
                    });
                  } else {
                    console.log('else1');
                  }
                });

              case 9:
                _context.next = 14;
                break;

              case 11:
                _context.prev = 11;
                _context.t0 = _context["catch"](6);
                //console.log('df '+e);
                this.flashMessage.error({
                  title: '',
                  message: 'Error in uploading data!',
                  time: 5000
                });

              case 14:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this, [[6, 11]]);
      }));

      function addNewVideo() {
        return _addNewVideo.apply(this, arguments);
      }

      return addNewVideo;
    }(),
    addNewDoc: function () {
      var _addNewDoc = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
        var _this4 = this;

        var formData, docdata;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                formData = new FormData();
                docdata = {
                  'title': this.doc.title,
                  'description': this.doc.description,
                  'tag': this.doc.tag
                };
                docdata = JSON.stringify(docdata);
                formData.append('file_name', this.doc.file_name);
                formData.append('doc', docdata);
                formData.append('type', 2);
                _context2.prev = 6;
                _context2.next = 9;
                return axios.post('/training/docs', formData, {
                  headers: {
                    'Content-Type': 'multipart/form-data'
                  }
                }).then(function (response) {
                  _this4.dialogDoc = false; //console.log(response.data);

                  if (response.data.status == 'success') {
                    //hide modal
                    _this4.docIndex = -1;
                    _this4.table_2 = false; //display notification

                    _this4.flashMessage.success({
                      title: '',
                      message: 'Documet has added successfully!',
                      time: 5000
                    }); //  this.agents.unshift(response.data.data);

                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this4.errorsDoc = error.response.data.errors;
                    _this4.dialogDoc = true;

                    _this4.flashMessage.error({
                      title: '',
                      message: 'Unprocessable entity!',
                      time: 5000
                    });
                  } else {
                    console.log('else1');
                  }
                });

              case 9:
                _context2.next = 14;
                break;

              case 11:
                _context2.prev = 11;
                _context2.t0 = _context2["catch"](6);
                //console.log('df '+e);
                this.flashMessage.error({
                  title: '',
                  message: 'Error in uploading data!',
                  time: 5000
                });

              case 14:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this, [[6, 11]]);
      }));

      function addNewDoc() {
        return _addNewDoc.apply(this, arguments);
      }

      return addNewDoc;
    }(),
    updateVideo: function () {
      var _updateVideo = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee3() {
        var _this5 = this;

        var formData, videodata2;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                formData = new FormData();
                videodata2 = {
                  'title': this.video.title,
                  'description': this.video.description,
                  'tag': this.video.tag
                };
                videodata2 = JSON.stringify(videodata2);
                formData.append('file_name', this.video.file_name);
                formData.append('data', videodata2);
                formData.append('type', 1);
                _context3.prev = 6;
                _context3.next = 9;
                return axios.post('/training/videos/update/' + this.video.id, formData, {
                  headers: {
                    'Content-Type': 'multipart/form-data'
                  }
                }).then(function (response) {
                  _this5.dialog = false; //console.log(response.data);

                  if (response.data.status == 'success') {
                    // this.videoIndex = -1
                    //display notification
                    _this5.flashMessage.success({
                      title: '',
                      message: 'Video has added successfully!',
                      time: 5000
                    }); //  this.agents.unshift(response.data.data);

                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this5.dialog = true;
                    _this5.errors = error.response.data.errors;

                    _this5.flashMessage.error({
                      title: '',
                      message: 'Unprocessable entity!',
                      time: 5000
                    });
                  } else {
                    console.log('else1');
                  }
                });

              case 9:
                _context3.next = 14;
                break;

              case 11:
                _context3.prev = 11;
                _context3.t0 = _context3["catch"](6);
                //console.log('df '+e);
                this.flashMessage.error({
                  title: '',
                  message: 'Error in uploading data!',
                  time: 5000
                });

              case 14:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, this, [[6, 11]]);
      }));

      function updateVideo() {
        return _updateVideo.apply(this, arguments);
      }

      return updateVideo;
    }(),
    updateDoc: function () {
      var _updateDoc = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee4() {
        var _this6 = this;

        var formData, docdata2;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee4$(_context4) {
          while (1) {
            switch (_context4.prev = _context4.next) {
              case 0:
                formData = new FormData();
                docdata2 = {
                  'title': this.doc.title,
                  'description': this.doc.description,
                  'tag': this.doc.tag
                };
                docdata2 = JSON.stringify(docdata2);
                formData.append('file_name', this.doc.file_name);
                formData.append('doc', docdata2);
                formData.append('type', 2);
                _context4.prev = 6;
                _context4.next = 9;
                return axios.post('/training/docs/update/' + this.doc.id, formData, {
                  headers: {
                    'Content-Type': 'multipart/form-data'
                  }
                }).then(function (response) {
                  _this6.dialogDoc = false; //console.log(response.data);

                  if (response.data.status == 'success') {
                    // this.videoIndex = -1
                    //display notification
                    _this6.flashMessage.success({
                      title: '',
                      message: 'Document has updated successfully!',
                      time: 5000
                    }); //  this.agents.unshift(response.data.data);

                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 422) {
                    _this6.dialogDoc = true;
                    _this6.errorsDoc = error.response.data.errors;

                    _this6.flashMessage.error({
                      title: '',
                      message: 'Unprocessable entity!',
                      time: 5000
                    });
                  } else {
                    console.log('else1');
                  }
                });

              case 9:
                _context4.next = 14;
                break;

              case 11:
                _context4.prev = 11;
                _context4.t0 = _context4["catch"](6);
                //console.log('df '+e);
                this.flashMessage.error({
                  title: '',
                  message: 'Error in uploading data!',
                  time: 5000
                });

              case 14:
              case "end":
                return _context4.stop();
            }
          }
        }, _callee4, this, [[6, 11]]);
      }));

      function updateDoc() {
        return _updateDoc.apply(this, arguments);
      }

      return updateDoc;
    }(),
    deleteVideo: function () {
      var _deleteVideo = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee5(video) {
        var _this7 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee5$(_context5) {
          while (1) {
            switch (_context5.prev = _context5.next) {
              case 0:
                if (window.confirm("Are you sure you want to delete ".concat(video.title))) {
                  _context5.next = 2;
                  break;
                }

                return _context5.abrupt("return");

              case 2:
                _context5.prev = 2;
                _context5.next = 5;
                return axios["delete"]('/training/videos/' + video.id).then(function (response) {
                  // console.log(response);
                  if (response.status == 204) {
                    //remove from table
                    _this7.videos = _this7.videos.filter(function (obj) {
                      return obj.id != video.id;
                    }); //show notification

                    _this7.flashMessage.success({
                      title: '',
                      message: 'Video deleted successfully!',
                      time: 5000
                    });
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 404) {
                    //console.log(error.response.data.errors['users.name'][0]);
                    _this7.errors = error.response.data.errors;

                    _this7.flashMessage.error({
                      title: '',
                      message: 'Video not found!',
                      time: 5000
                    });
                  } else {
                    console.log('else');
                  }
                });

              case 5:
                _context5.next = 10;
                break;

              case 7:
                _context5.prev = 7;
                _context5.t0 = _context5["catch"](2);
                this.flashMessage.error({
                  title: '',
                  message: 'Error in deleting Video!',
                  time: 5000
                });

              case 10:
              case "end":
                return _context5.stop();
            }
          }
        }, _callee5, this, [[2, 7]]);
      }));

      function deleteVideo(_x) {
        return _deleteVideo.apply(this, arguments);
      }

      return deleteVideo;
    }(),
    deleteDoc: function () {
      var _deleteDoc = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee6(doc) {
        var _this8 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee6$(_context6) {
          while (1) {
            switch (_context6.prev = _context6.next) {
              case 0:
                if (window.confirm("Are you sure you want to delete ".concat(doc.title))) {
                  _context6.next = 2;
                  break;
                }

                return _context6.abrupt("return");

              case 2:
                _context6.prev = 2;
                _context6.next = 5;
                return axios["delete"]('/training/docs/' + doc.id).then(function (response) {
                  // console.log(response);
                  if (response.status == 204) {
                    //remove from table
                    _this8.docs = _this8.docs.filter(function (obj) {
                      return obj.id != doc.id;
                    }); //show notification

                    _this8.flashMessage.success({
                      title: '',
                      message: 'Document deleted successfully!',
                      time: 5000
                    });
                  }
                })["catch"](function (error) {
                  console.log(error.response.data.errors);

                  if (error.response.status == 404) {
                    //console.log(error.response.data.errors['users.name'][0]);
                    _this8.errorsDocs = error.response.data.errors;

                    _this8.flashMessage.error({
                      title: '',
                      message: 'Document not found!',
                      time: 5000
                    });
                  } else {
                    console.log('else');
                  }
                });

              case 5:
                _context6.next = 10;
                break;

              case 7:
                _context6.prev = 7;
                _context6.t0 = _context6["catch"](2);
                this.flashMessage.error({
                  title: '',
                  message: 'Error in deleting Document!',
                  time: 5000
                });

              case 10:
              case "end":
                return _context6.stop();
            }
          }
        }, _callee6, this, [[2, 7]]);
      }));

      function deleteDoc(_x2) {
        return _deleteDoc.apply(this, arguments);
      }

      return deleteDoc;
    }(),
    changeVideoStatus: function () {
      var _changeVideoStatus = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee7() {
        var _this9 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee7$(_context7) {
          while (1) {
            switch (_context7.prev = _context7.next) {
              case 0:
                _context7.prev = 0;
                _context7.next = 3;
                return axios.post('/training/status', {
                  'id': this.video.id,
                  'status': this.video.status
                }).then(function (response) {
                  Object.assign(_this9.videos[_this9.vStatusIndex], response.data.data);
                  _this9.reloader_status = false;
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

      function changeVideoStatus() {
        return _changeVideoStatus.apply(this, arguments);
      }

      return changeVideoStatus;
    }(),
    changeDocStatus: function () {
      var _changeDocStatus = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee8() {
        var _this10 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee8$(_context8) {
          while (1) {
            switch (_context8.prev = _context8.next) {
              case 0:
                _context8.prev = 0;
                _context8.next = 3;
                return axios.post('/training/status', {
                  'id': this.doc.id,
                  'status': this.doc.status
                }).then(function (response) {
                  Object.assign(_this10.docs[_this10.dStatusIndex], response.data.data);
                  _this10.reloader_status1 = false;
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

      function changeDocStatus() {
        return _changeDocStatus.apply(this, arguments);
      }

      return changeDocStatus;
    }(),
    getVideo: function () {
      var _getVideo = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee9() {
        var _this11 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee9$(_context9) {
          while (1) {
            switch (_context9.prev = _context9.next) {
              case 0:
                _context9.prev = 0;
                _context9.next = 3;
                return axios.get("/training/videos").then(function (response) {
                  _this11.videos = response.data.data; //   Object.assign(this.remits[this.index], response.data.data)
                  //this.reloader_status = false;

                  _this11.table_1 = false;
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

      function getVideo() {
        return _getVideo.apply(this, arguments);
      }

      return getVideo;
    }(),
    getDoc: function () {
      var _getDoc = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee10() {
        var _this12 = this;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee10$(_context10) {
          while (1) {
            switch (_context10.prev = _context10.next) {
              case 0:
                _context10.prev = 0;
                _context10.next = 3;
                return axios.get("/training/docs").then(function (response) {
                  _this12.docs = response.data.data;
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

      function getDoc() {
        return _getDoc.apply(this, arguments);
      }

      return getDoc;
    }()
  },
  mounted: function mounted() {
    this.getVideo();
    this.getDoc();
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/training/Training.vue?vue&type=template&id=c2e88f58&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/training/Training.vue?vue&type=template&id=c2e88f58& ***!
  \********************************************************************************************************************************************************************************************************************/
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
      _c("h1", [_vm._v(" TRAINING ")]),
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
        _c("li", { staticClass: "active" }, [_vm._v(" Training ")])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "page-body" }, [
      _c("div", { staticClass: "row clearfix", attrs: { id: "table" } }, [
        _c("div", { staticClass: "col-lg-12 col-md-12 col-sm-6 col-xs-12" }, [
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
                    _c("v-spacer"),
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
                            value: _vm.vSearch,
                            callback: function($$v) {
                              _vm.vSearch = $$v
                            },
                            expression: "vSearch"
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
                    headers: this.vHeaders,
                    items: this.videos,
                    search: _vm.vSearch,
                    "items-per-page": 10
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
                                                      "background-color":
                                                        "#3c8dbc"
                                                    },
                                                    attrs: { color: "info" }
                                                  },
                                                  on
                                                ),
                                                [_vm._v("New Video")]
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
                                    [
                                      _c(
                                        "v-card",
                                        [
                                          _c("v-card-title", [
                                            _c(
                                              "span",
                                              { staticClass: "headline" },
                                              [_vm._v(_vm._s(_vm.videoTitle))]
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
                                                          _c("v-text-field", {
                                                            attrs: {
                                                              required:
                                                                "Title is required",
                                                              label: "Title",
                                                              rules: [
                                                                function(v) {
                                                                  return (
                                                                    !!v ||
                                                                    "Title is required"
                                                                  )
                                                                }
                                                              ]
                                                            },
                                                            model: {
                                                              value:
                                                                _vm.video.title,
                                                              callback: function(
                                                                $$v
                                                              ) {
                                                                _vm.$set(
                                                                  _vm.video,
                                                                  "title",
                                                                  $$v
                                                                )
                                                              },
                                                              expression:
                                                                "video.title"
                                                            }
                                                          }),
                                                          _vm._v(" "),
                                                          _vm.errors[
                                                            "data.title"
                                                          ]
                                                            ? _c(
                                                                "label",
                                                                {
                                                                  staticClass:
                                                                    "error",
                                                                  staticStyle: {
                                                                    color:
                                                                      "red",
                                                                    "font-size":
                                                                      "12px"
                                                                  }
                                                                },
                                                                [
                                                                  _vm._v(
                                                                    _vm._s(
                                                                      _vm
                                                                        .errors[
                                                                        "data.title"
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
                                                          _c("v-textarea", {
                                                            attrs: {
                                                              label:
                                                                "Description",
                                                              rules: [
                                                                function(v) {
                                                                  return (
                                                                    !!v ||
                                                                    "Description is required"
                                                                  )
                                                                }
                                                              ],
                                                              rows: "2"
                                                            },
                                                            model: {
                                                              value:
                                                                _vm.video
                                                                  .description,
                                                              callback: function(
                                                                $$v
                                                              ) {
                                                                _vm.$set(
                                                                  _vm.video,
                                                                  "description",
                                                                  $$v
                                                                )
                                                              },
                                                              expression:
                                                                "video.description"
                                                            }
                                                          }),
                                                          _vm._v(" "),
                                                          _vm.errors[
                                                            "data.description"
                                                          ]
                                                            ? _c(
                                                                "label",
                                                                {
                                                                  staticClass:
                                                                    "error",
                                                                  staticStyle: {
                                                                    color:
                                                                      "red",
                                                                    "font-size":
                                                                      "12px"
                                                                  }
                                                                },
                                                                [
                                                                  _vm._v(
                                                                    _vm._s(
                                                                      _vm
                                                                        .errors[
                                                                        "data.description"
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
                                                              required:
                                                                "Tag is required",
                                                              label: "Tag",
                                                              rules: [
                                                                function(v) {
                                                                  return (
                                                                    !!v ||
                                                                    "Tag is required"
                                                                  )
                                                                }
                                                              ]
                                                            },
                                                            model: {
                                                              value:
                                                                _vm.video.tag,
                                                              callback: function(
                                                                $$v
                                                              ) {
                                                                _vm.$set(
                                                                  _vm.video,
                                                                  "tag",
                                                                  $$v
                                                                )
                                                              },
                                                              expression:
                                                                "video.tag"
                                                            }
                                                          }),
                                                          _vm._v(" "),
                                                          _vm.errors["data.tag"]
                                                            ? _c(
                                                                "label",
                                                                {
                                                                  staticClass:
                                                                    "error",
                                                                  staticStyle: {
                                                                    color:
                                                                      "red",
                                                                    "font-size":
                                                                      "12px"
                                                                  }
                                                                },
                                                                [
                                                                  _vm._v(
                                                                    _vm._s(
                                                                      _vm
                                                                        .errors[
                                                                        "data.tag"
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
                                                          _c("v-file-input", {
                                                            attrs: {
                                                              accept: "video/*",
                                                              label:
                                                                "Upload Video"
                                                            },
                                                            model: {
                                                              value:
                                                                _vm.video
                                                                  .file_name,
                                                              callback: function(
                                                                $$v
                                                              ) {
                                                                _vm.$set(
                                                                  _vm.video,
                                                                  "file_name",
                                                                  $$v
                                                                )
                                                              },
                                                              expression:
                                                                "video.file_name"
                                                            }
                                                          }),
                                                          _vm._v(" "),
                                                          _vm.errors[
                                                            "file_name"
                                                          ]
                                                            ? _c(
                                                                "label",
                                                                {
                                                                  staticClass:
                                                                    "error",
                                                                  staticStyle: {
                                                                    color:
                                                                      "red",
                                                                    "font-size":
                                                                      "12px"
                                                                  }
                                                                },
                                                                [
                                                                  _vm._v(
                                                                    _vm._s(
                                                                      _vm
                                                                        .errors[
                                                                        "file_name"
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
                                                          _c(
                                                            "video",
                                                            {
                                                              attrs: {
                                                                width: "100",
                                                                height: "100",
                                                                controls: ""
                                                              }
                                                            },
                                                            [
                                                              _c("source", {
                                                                attrs: {
                                                                  src:
                                                                    _vm.video_url,
                                                                  type:
                                                                    "video/mp4"
                                                                }
                                                              })
                                                            ]
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
                                                  staticStyle: {
                                                    "background-color":
                                                      "deepskyblue",
                                                    color: "whitesmoke"
                                                  },
                                                  attrs: {
                                                    color: "whitesmoke",
                                                    text: ""
                                                  },
                                                  on: { click: _vm.saveVideo }
                                                },
                                                [_vm._v("Save")]
                                              ),
                                              _vm._v(
                                                "  \n                                            "
                                              ),
                                              _c(
                                                "v-btn",
                                                {
                                                  staticStyle: {
                                                    "background-color": "red",
                                                    color: "whitesmoke"
                                                  },
                                                  attrs: {
                                                    color: "whitesmoke",
                                                    text: ""
                                                  },
                                                  on: { click: _vm.closeVideo }
                                                },
                                                [_vm._v("Cancel")]
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
                              )
                            ],
                            1
                          )
                        ]
                      },
                      proxy: true
                    },
                    {
                      key: "item.file_name",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("div", [
                            _c(
                              "video",
                              {
                                attrs: {
                                  width: "100",
                                  height: "100",
                                  controls: ""
                                }
                              },
                              [
                                _c("source", {
                                  attrs: {
                                    src: item.file_name,
                                    type: "video/mp4"
                                  }
                                })
                              ]
                            )
                          ])
                        ]
                      }
                    },
                    {
                      key: "item.title",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("div", [
                            _vm._v("Title: " + _vm._s(item.title)),
                            _c("br"),
                            _vm._v(
                              "\n                              Description: " +
                                _vm._s(item.description)
                            ),
                            _c("br"),
                            _vm._v(
                              "\n                              Tag: " +
                                _vm._s(item.tag) +
                                "\n                        "
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
                                                staticStyle: {
                                                  color: "#3c8dbc"
                                                },
                                                attrs: { small: "" },
                                                on: {
                                                  click: function($event) {
                                                    return _vm.editVideo(item)
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
                                                    return _vm.deleteVideo(item)
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
                          item.status == 1
                            ? _c(
                                "div",
                                [
                                  _c(
                                    "v-overlay",
                                    { attrs: { value: _vm.reloader_status } },
                                    [
                                      _c("v-progress-circular", {
                                        attrs: { indeterminate: "", size: "60" }
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
                                                            return _vm.statusVideo(
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
                                                      "\n                                        mdi-checkbox-marked-circle\n                                    "
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
                                      _c("span", [_vm._v("Unpublish")])
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
                                                        attrs: { small: "" },
                                                        on: {
                                                          click: function(
                                                            $event
                                                          ) {
                                                            return _vm.statusVideo(
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
                                                  [_vm._v("mdi-cancel")]
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
                                      _c("span", [_vm._v("Publish")])
                                    ]
                                  )
                                ],
                                1
                              )
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
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row clearfix", attrs: { id: "table2" } }, [
        _c("div", { staticClass: "col-lg-12 col-md-12 col-sm-6 col-xs-12" }, [
          _c("div", { staticClass: "panel panel-default" }, [
            _vm._m(1),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "panel-body" },
              [
                _c(
                  "v-card-title",
                  [
                    _c("v-spacer"),
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
                            value: _vm.dSearch,
                            callback: function($$v) {
                              _vm.dSearch = $$v
                            },
                            expression: "dSearch"
                          }
                        })
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-overlay",
                      { attrs: { value: _vm.table_2 } },
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
                    headers: this.dHeaders,
                    items: this.docs,
                    search: _vm.dSearch,
                    "items-per-page": 10
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
                                                      "background-color":
                                                        "#3c8dbc"
                                                    },
                                                    attrs: { color: "info" }
                                                  },
                                                  on
                                                ),
                                                [_vm._v("New Doc")]
                                              )
                                            : _vm._e()
                                        ]
                                      }
                                    }
                                  ]),
                                  model: {
                                    value: _vm.dialogDoc,
                                    callback: function($$v) {
                                      _vm.dialogDoc = $$v
                                    },
                                    expression: "dialogDoc"
                                  }
                                },
                                [
                                  _vm._v(" "),
                                  _c(
                                    "form",
                                    [
                                      _c(
                                        "v-card",
                                        [
                                          _c("v-card-title", [
                                            _c(
                                              "span",
                                              { staticClass: "headline" },
                                              [_vm._v(_vm._s(_vm.docTitle))]
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
                                                          _c("v-text-field", {
                                                            attrs: {
                                                              required:
                                                                "Title is required",
                                                              label: "Title",
                                                              rules: [
                                                                function(v) {
                                                                  return (
                                                                    !!v ||
                                                                    "Title is required"
                                                                  )
                                                                }
                                                              ]
                                                            },
                                                            model: {
                                                              value:
                                                                _vm.doc.title,
                                                              callback: function(
                                                                $$v
                                                              ) {
                                                                _vm.$set(
                                                                  _vm.doc,
                                                                  "title",
                                                                  $$v
                                                                )
                                                              },
                                                              expression:
                                                                "doc.title"
                                                            }
                                                          }),
                                                          _vm._v(" "),
                                                          _vm.errorsDoc[
                                                            "doc.title"
                                                          ]
                                                            ? _c(
                                                                "label",
                                                                {
                                                                  staticClass:
                                                                    "error",
                                                                  staticStyle: {
                                                                    color:
                                                                      "red",
                                                                    "font-size":
                                                                      "12px"
                                                                  }
                                                                },
                                                                [
                                                                  _vm._v(
                                                                    _vm._s(
                                                                      _vm
                                                                        .errorsDoc[
                                                                        "doc.title"
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
                                                          _c("v-textarea", {
                                                            attrs: {
                                                              label:
                                                                "Description",
                                                              rules: [
                                                                function(v) {
                                                                  return (
                                                                    !!v ||
                                                                    "Description is required"
                                                                  )
                                                                }
                                                              ],
                                                              rows: "2"
                                                            },
                                                            model: {
                                                              value:
                                                                _vm.doc
                                                                  .description,
                                                              callback: function(
                                                                $$v
                                                              ) {
                                                                _vm.$set(
                                                                  _vm.doc,
                                                                  "description",
                                                                  $$v
                                                                )
                                                              },
                                                              expression:
                                                                "doc.description"
                                                            }
                                                          }),
                                                          _vm._v(" "),
                                                          _vm.errorsDoc[
                                                            "doc.description"
                                                          ]
                                                            ? _c(
                                                                "label",
                                                                {
                                                                  staticClass:
                                                                    "error",
                                                                  staticStyle: {
                                                                    color:
                                                                      "red",
                                                                    "font-size":
                                                                      "12px"
                                                                  }
                                                                },
                                                                [
                                                                  _vm._v(
                                                                    _vm._s(
                                                                      _vm
                                                                        .errorsDoc[
                                                                        "doc.description"
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
                                                              required:
                                                                "Tag is required",
                                                              label: "Tag",
                                                              rules: [
                                                                function(v) {
                                                                  return (
                                                                    !!v ||
                                                                    "Tag is required"
                                                                  )
                                                                }
                                                              ]
                                                            },
                                                            model: {
                                                              value:
                                                                _vm.doc.tag,
                                                              callback: function(
                                                                $$v
                                                              ) {
                                                                _vm.$set(
                                                                  _vm.doc,
                                                                  "tag",
                                                                  $$v
                                                                )
                                                              },
                                                              expression:
                                                                "doc.tag"
                                                            }
                                                          }),
                                                          _vm._v(" "),
                                                          _vm.errorsDoc[
                                                            "doc.tag"
                                                          ]
                                                            ? _c(
                                                                "label",
                                                                {
                                                                  staticClass:
                                                                    "error",
                                                                  staticStyle: {
                                                                    color:
                                                                      "red",
                                                                    "font-size":
                                                                      "12px"
                                                                  }
                                                                },
                                                                [
                                                                  _vm._v(
                                                                    _vm._s(
                                                                      _vm
                                                                        .errorsDoc[
                                                                        "doc.tag"
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
                                                          _c("v-file-input", {
                                                            attrs: {
                                                              accept:
                                                                ".doc,.docx,.pdf,.xslx",
                                                              label:
                                                                "Upload Document"
                                                            },
                                                            model: {
                                                              value:
                                                                _vm.doc
                                                                  .file_name,
                                                              callback: function(
                                                                $$v
                                                              ) {
                                                                _vm.$set(
                                                                  _vm.doc,
                                                                  "file_name",
                                                                  $$v
                                                                )
                                                              },
                                                              expression:
                                                                "doc.file_name"
                                                            }
                                                          }),
                                                          _vm._v(" "),
                                                          _vm.errorsDoc[
                                                            "file_name"
                                                          ]
                                                            ? _c(
                                                                "label",
                                                                {
                                                                  staticClass:
                                                                    "error",
                                                                  staticStyle: {
                                                                    color:
                                                                      "red",
                                                                    "font-size":
                                                                      "12px"
                                                                  }
                                                                },
                                                                [
                                                                  _vm._v(
                                                                    _vm._s(
                                                                      _vm
                                                                        .errorsDoc[
                                                                        "file_name"
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
                                                  staticStyle: {
                                                    "background-color":
                                                      "deepskyblue",
                                                    color: "whitesmoke"
                                                  },
                                                  attrs: {
                                                    color: "whitesmoke",
                                                    text: ""
                                                  },
                                                  on: { click: _vm.saveDoc }
                                                },
                                                [_vm._v("Save")]
                                              ),
                                              _vm._v(
                                                "  \n                                               "
                                              ),
                                              _c(
                                                "v-btn",
                                                {
                                                  staticStyle: {
                                                    "background-color": "red",
                                                    color: "whitesmoke"
                                                  },
                                                  attrs: {
                                                    color: "whitesmoke",
                                                    text: ""
                                                  },
                                                  on: { click: _vm.closeDoc }
                                                },
                                                [_vm._v("Cancel")]
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
                              )
                            ],
                            1
                          )
                        ]
                      },
                      proxy: true
                    },
                    {
                      key: "item.file_name",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("div", [
                            _c(
                              "a",
                              {
                                attrs: {
                                  href: item.file_name,
                                  width: "100px",
                                  height: "100px",
                                  download: "",
                                  target: "_blank"
                                }
                              },
                              [
                                _vm._v(
                                  "Download\n                               "
                                )
                              ]
                            )
                          ])
                        ]
                      }
                    },
                    {
                      key: "item.title",
                      fn: function(ref) {
                        var item = ref.item
                        return [
                          _c("div", [
                            _vm._v("Title: " + _vm._s(item.title)),
                            _c("br"),
                            _vm._v(
                              "\n                               Description: " +
                                _vm._s(item.description)
                            ),
                            _c("br"),
                            _vm._v(
                              "\n                               Tag: " +
                                _vm._s(item.tag) +
                                "\n                           "
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
                                                staticStyle: {
                                                  color: "#3c8dbc"
                                                },
                                                attrs: { small: "" },
                                                on: {
                                                  click: function($event) {
                                                    return _vm.editDoc(item)
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
                                                    return _vm.deleteDoc(item)
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
                          item.status == 1
                            ? _c(
                                "div",
                                [
                                  _c(
                                    "v-overlay",
                                    { attrs: { value: _vm.reloader_status1 } },
                                    [
                                      _c("v-progress-circular", {
                                        attrs: { indeterminate: "", size: "60" }
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
                                                            return _vm.statusDoc(
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
                                                      "\n                                           mdi-checkbox-marked-circle\n                                       "
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
                                      _c("span", [_vm._v("Unpublish")])
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
                                                        attrs: { small: "" },
                                                        on: {
                                                          click: function(
                                                            $event
                                                          ) {
                                                            return _vm.statusDoc(
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
                                                  [_vm._v("mdi-cancel")]
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
                                      _c("span", [_vm._v("Publish")])
                                    ]
                                  )
                                ],
                                1
                              )
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
    return _c("div", { staticClass: "panel-heading d-flex" }, [
      _c("span", [_vm._v(" Video Management ")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "panel-heading d-flex" }, [
      _c("span", [_vm._v(" Document Management ")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/training/Training.vue":
/*!*******************************************************!*\
  !*** ./resources/js/components/training/Training.vue ***!
  \*******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Training_vue_vue_type_template_id_c2e88f58___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Training.vue?vue&type=template&id=c2e88f58& */ "./resources/js/components/training/Training.vue?vue&type=template&id=c2e88f58&");
/* harmony import */ var _Training_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Training.vue?vue&type=script&lang=js& */ "./resources/js/components/training/Training.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Training_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Training_vue_vue_type_template_id_c2e88f58___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Training_vue_vue_type_template_id_c2e88f58___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/training/Training.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/training/Training.vue?vue&type=script&lang=js&":
/*!********************************************************************************!*\
  !*** ./resources/js/components/training/Training.vue?vue&type=script&lang=js& ***!
  \********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Training_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Training.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/training/Training.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Training_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/training/Training.vue?vue&type=template&id=c2e88f58&":
/*!**************************************************************************************!*\
  !*** ./resources/js/components/training/Training.vue?vue&type=template&id=c2e88f58& ***!
  \**************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Training_vue_vue_type_template_id_c2e88f58___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Training.vue?vue&type=template&id=c2e88f58& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/training/Training.vue?vue&type=template&id=c2e88f58&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Training_vue_vue_type_template_id_c2e88f58___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Training_vue_vue_type_template_id_c2e88f58___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);