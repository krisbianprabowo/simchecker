$(document).ready(function(){
    $('#kt_modal_5').on('show.bs.modal', function (e) {
      // get information to update quickly to modal view as loading begins
        var opener=e.relatedTarget;//this holds the element who called the modal
           
           //we get details from attributes
        var no =$(opener).attr('1-target');
        var NIM =$(opener).attr('2-target');
        var nama =$(opener).attr('3-target');
        var judul =$(opener).attr('4-target');
        var dosen_pembimbing=$(opener).attr('5-target');
        var tanggal_ujian =$(opener).attr('6-target');
        var nilai = $(opener).attr('7-target');
        var status_ta =$(opener).attr('8-target');
        var dosen_penguji =$(opener).attr('9-target');
        var tanggal_mulai =$(opener).attr('10-target');
        var semester_mulai =$(opener).attr('11-target');
        var semester_selesai =$(opener).attr('12-target');
        //set what we got to our form
        $('#fedit-title').find('#mdl-no').val(no);
        $('#fedit-title').find('#mdl-NIM').val(NIM);
        $('#fedit-title').find('#mdl-nama').val(nama);
        $('#fedit-title').find('#mdl-judul').val(judul);
        $('#fedit-title').find('#mdl-dosen_pembimbing').val(dosen_pembimbing);
        $('#fedit-title').find('#mdl-tanggal_ujian').val(tanggal_ujian);
        $('#fedit-title').find('#mdl-nilai').val(nilai).change();
        $('#fedit-title').find('#mdl-status_ta').val(status_ta).change();
        $('#fedit-title').find('#mdl-dosen_penguji').val(dosen_penguji);
        $('#fedit-title').find('#mdl-tanggal_mulai').val(tanggal_mulai);
        $('#fedit-title').find('#mdl-semester_mulai').val(semester_mulai);
        $('#fedit-title').find('#mdl-semester_selesai').val(semester_selesai);
       
    });

    $('#kt_modal_6').on('show.bs.modal', function (e) {
      // get information to update quickly to modal view as loading begins
        var opener=e.relatedTarget;//this holds the element who called the modal
           
           //we get details from attributes
        var no =$(opener).attr('1-target');
        var judul =$(opener).attr('2-target');

        $('#fdelete-title').find('#mdl2-no').val(no);
        $('#mdl2-tjudul').text(judul);
       
    });

    $("#btn-role").click( function() {
        $('#mdl-role').prop('disabled', ! $("#mdl-role").prop('disabled') );

    });
});


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
            $.ajax({
                url: "https://localhost/simchecker/Dosection/proc_add_penelitian",
                type: 'POST',
                data: $('#fadd-title').serialize(),
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

// Class definition
var AlertEdit = function() {

    // Private functions

    // basic demo
    var demo = function() {
        var i = -1;
        var toastCount = 0;
        var $toastlast;


        $("#btn-editTitle").click( function(e) {
            e.preventDefault();
           /* $('#mdl-role').prop('disabled',false);*/
            var shortCutFunction = "success";
            var msg = $('#message').val();
            var title = $('#title').val() || '';
            $.ajax({
                url: "https://localhost/simchecker/Dosection/proc_edit_penelitian",
                type: 'POST',
                data: $('#fedit-title').serialize(),
                success: function(response){
                    console.log(response);
                    if (response == "success") {
                        toastr.success('Title information Succesfully Updated!');
                        setTimeout(function() {
                            location.reload();
                        }, 1800);
                    }else{
                        toastr.error('Failed to Update!<br> Password might be wrong or Photo Size is too big');
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

var AlertDelete = function() {

    var initDemos = function() {
        $("#btn-dtitle").click( function(e) {
            e.preventDefault();
            $.ajax({
                url: "https://localhost/simchecker/Dosection/proc_delete_penelitian",
                type: 'POST',
                data: $('#fdelete-title').serialize(),

                success: function(response){
                    console.log(response);
                    if (response == "success") {
                        toastr.success('Account Succesfully Removed!');
                        setTimeout(function() {
                            location.reload();
                        }, 1800);
                    }else{
                        toastr.error('Failed to Update !<br> Password might be wrong or Photo Size is too big');
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

    };

    return {
        // Init
        init: function() {
            initDemos();
        },
    };
}();

jQuery(document).ready(function() {
    KTToastrDemo.init();
    AlertEdit.init();
    AlertDelete.init();
});