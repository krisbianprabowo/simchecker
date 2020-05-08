$(document).ready(function(){
	$('#kt_modal_4').on('show.bs.modal', function (e) {
	  // get information to update quickly to modal view as loading begins
		var opener=e.relatedTarget;//this holds the element who called the modal
		   
		   //we get details from attributes
		var id_user =$(opener).attr('id_user-target');
		var nama=$(opener).attr('nama-target');
		var role=$(opener).attr('role-target');
		var ket =$(opener).attr('ket-target');
		//set what we got to our form
		$('#fedit-user').find('#mdl-tid_user').val(id_user);
		$('#fedit-user').find('#mdl-id_user').val(id_user);
		$('#fedit-user').find('#mdl-nama').val(nama);
		$('#fedit-user').find('#mdl-role').val(role).change();
		$('#fedit-user').find('#mdl-keterangan').val(ket);
		$('#fchange-password').find('#mdl2-id_user').val(id_user);
	   
	});

	$('#kt_modal_6').on('show.bs.modal', function (e) {
	  // get information to update quickly to modal view as loading begins
		var opener=e.relatedTarget;//this holds the element who called the modal
		   
		   //we get details from attributes
		var id_user =$(opener).attr('id_user-target');
		var role=$(opener).attr('role-target');
		$('#fchange-role').find('#mdl3-id_user').val(id_user);
		$('#fchange-role').find('#mdl3-role').val(role).change();
	   
	});

	$('#kt_modal_7').on('show.bs.modal', function (e) {
	  // get information to update quickly to modal view as loading begins
		var opener=e.relatedTarget;//this holds the element who called the modal
		   
		   //we get details from attributes
		var id_user =$(opener).attr('id_user-target');
		var nama=$(opener).attr('nama-target');
        var role =$(opener).attr('role-target');

		$('#fdelete-user').find('#mdl4-id_user').val(id_user);
        $('#fdelete-user').find('#mdl4-role').val(role);
		$('#mdl4-tid_user').text(id_user);
		$('#mdl4-nama').text(nama);
	   
	});

    $('#mdl5-role').change(function(){
        if($('#mdl5-role option:selected').attr('name')=='select-dsn'){
            $("#form-dsn").slideDown("slow");
            $("#form-mhs").slideUp("slow");
        }else if($('#mdl5-role option:selected').attr('name')=='select-mhs'){
            $("#form-dsn").slideUp("slow");
            $("#form-mhs").slideDown("slow");
        }else{
            $("#form-dsn").slideUp("slow");
            $("#form-mhs").slideUp("slow");
        }
    });

	$("#btn-role").click( function() {
		$('#mdl-role').prop('disabled', ! $("#mdl-role").prop('disabled') );

	});
});

// Class definition
var AlertAdd = function() {

    // Private functions

    // basic demo
    var demo = function() {
        var i = -1;
        var toastCount = 0;
        var $toastlast;


        $("#btn-adduser").click( function(e) {
            e.preventDefault();
            var shortCutFunction = "success";
            var msg = $('#message').val();
            var title = $('#title').val() || '';
            var formData = new FormData($("#fadd-user")[0]);
            $.ajax({
                url: "https://localhost/simchecker/Dosection/proc_add_user",
                type: 'POST',
                enctype: 'multipart/form-data',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response){
                    console.log(response);
                    if (response == "success") {
                        toastr.success('Account Succesfully Updated!');
                        setTimeout(function() {
                            $("#btn-aclose")[0].click();
                        }, 1100);
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
    }

    return {
        // public functions
        init: function() {
            demo();
        }
    };
}();

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
            $('#mdl-role').prop('disabled',false);
            var shortCutFunction = "success";
            var msg = $('#message').val();
            var title = $('#title').val() || '';
            $.ajax({
                url: "https://localhost/simchecker/Dosection/proc_edit_user",
                type: 'POST',
                data: $('#fedit-user').serialize(),
                success: function(response){
                    console.log(response);
                    if (response == "success") {
                        toastr.success('Account Succesfully Updated!');
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
    }

    return {
        // public functions
        init: function() {
            demo();
        }
    };
}();

var Alert = function() {

	var initDemos = function() {
		$("#btn-cpassword").click( function(e) {
			e.preventDefault();
			$.ajax({
				url: "https://localhost/simchecker/Dosection/proc_change_password",
				type: 'POST',
				data: $('#fchange-password').serialize(),

				success: function(response){
                    console.log(response);
                    if (response == "success") {
                        toastr.success('Account Succesfully Updated!');
                        setTimeout(function() {
						    $("#btn-pclose")[0].click();
						}, 1100);

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

var AlertDelete = function() {

	var initDemos = function() {
		$("#btn-duser").click( function(e) {
			e.preventDefault();
			$.ajax({
				url: "https://localhost/simchecker/Dosection/proc_delete_user",
				type: 'POST',
				data: $('#fdelete-user').serialize(),

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

var AlertRole = function() {

	var initDemos = function() {
		$("#btn-crole").click( function(e) {
			e.preventDefault();
			$.ajax({
				url: "https://localhost/simchecker/Dosection/proc_change_role",
				type: 'POST',
				data: $('#fchange-role').serialize(),

				success: function(response){
                    console.log(response);
                    if (response == "success") {
                        toastr.success('Account Succesfully Updated!');
                        setTimeout(function() {
						    location.reload();
						}, 1100);
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
    AlertAdd.init();
    KTToastrDemo.init();
    Alert.init();
    AlertDelete.init();
    AlertRole.init();
});

