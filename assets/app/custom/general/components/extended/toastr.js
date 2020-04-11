"use strict";

// Class definition
var KTToastrDemo = function() {

    // Private functions

    // basic demo
    var demo = function() {
        var i = -1;
        var toastCount = 0;
        var $toastlast;

        var getMessage = function () {
            var msgs = [
                'Perubahan Akun Telah Berhasil',
            ];
            i++;
            if (i === msgs.length) {
                i = 0;
            }

            return msgs[i];
        };

        var getMessageWithClearButton = function (msg) {
            msg = msg ? msg : 'Clear itself?';
            msg += '<br /><br /><button type="button" class="btn btn-outline-light btn-sm--air--wide clear">Yes</button>';
            return msg;
        };

        $('#showtoast').click(function () {
            var shortCutFunction = "success";
            var msg = $('#message').val();
            var title = $('#title').val() || '';

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

            if ($('#addBehaviorOnToastClick').prop('checked')) {
                toastr.options.onclick = function () {
                    alert('You can perform some custom action after a toast goes away');
                };
            }

            
            if (!msg) {
                msg = getMessage();
            }

            $('#toastrOptions').text(
                    'toastr.options = '
                    + JSON.stringify(toastr.options, null, 2)
                    + ';'
                    + '\n\ntoastr.'
                    + shortCutFunction
                    + '("'
                    + msg
                    + (title ? '", "' + title : '')
                    + '");'
            );

            var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
            $toastlast = $toast;

            if(typeof $toast === 'undefined'){
                return;
            }

            if ($toast.find('#okBtn').length) {
                $toast.delegate('#okBtn', 'click', function () {
                    alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                    $toast.remove();
                });
            }
            if ($toast.find('#surpriseBtn').length) {
                $toast.delegate('#surpriseBtn', 'click', function () {
                    alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
                });
            }
            if ($toast.find('.clear').length) {
                $toast.delegate('.clear', 'click', function () {
                    toastr.clear($toast, { force: true });
                });
            }
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