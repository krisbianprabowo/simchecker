"use strict";

// Class definition
var KTToastrDemo = function() {

    // Private functions

    // basic demo
    var demo = function() {
        var i = -1;
        var toastCount = 0;
        var $toastlast;


        $("#btn-submit").click( function(e) {
            e.preventDefault();
            var shortCutFunction = "success";
            var msg = $('#message').val();
            var title = $('#title').val() || '';
            var formData = new FormData($("form")[0]);
            console.log(formData);
            $.ajax({
                url: "https://localhost/simchecker/SimCheck/proc_olah_akun",
                type: 'POST',
                enctype: 'multipart/form-data',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response){
                    console.log(response);
                    if (response == "success") {
                        toastr.success('Account Succesfully Updated!');
                    }else{
                        toastr.error('Failed to Update Your Account!<br> Password might be wrong or Photo Size is too big');
                    }

                }
            });
            

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "400",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

        });

        function getLastToast(){
            return $toastlast;
        }
        $('#clearlasttoast').click(function () {
            toastr.clear(getLastToast());
        });
        $('#cleartoasts').click(function () {
            toastr.clear();
        });
    }

    return {
        // public functions
        init: function() {
            demo();
        }
    };
}();

jQuery(document).ready(function() {
    KTToastrDemo.init();
});