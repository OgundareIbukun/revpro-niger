// $('.js-select2').select2();
// $('.js-select2-placeholder').select2({
//     placeholder: 'Please select a car',
//     allowClear: true
// });

(function ($) {
    'use strict';
    $(document).ready(function () {

        //Multi-select
       // $('.selectpicker').multiSelect();


        //Select 2
        $('.js-select2').select2({width: '100%'});

        //Chosen
     // $('.chosen-select').chosen();

    });
}(jQuery));