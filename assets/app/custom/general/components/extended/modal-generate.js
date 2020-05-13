$(document).ready(function(){

	$("#btn-generate").click( function() {
		$('#idprogress-bar').removeClass('d-none');
        $('#error-msg').addClass('d-none');
        setTimeout(function() {
            $("#progress-bar-step").css('width', "1%");
        }, 0);
        setTimeout(function() {
            $("#progress-bar-step").css('width', "10%");
        }, 2000);
        $('#idprogress-bar').removeClass('d-none');
        setTimeout(function() {
            $("#progress-bar-step").css('width', "30%");
        }, 4000);
	});
});


var Alert = function() {

	var initDemos = function() {
		$("#btn-generate").click( function(e) {
			e.preventDefault();
            $("#btn-generate").attr("disabled", true);
            $('#btn-generate').addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light');
            var url= ["https://localhost/simchecker/SimCheck/term_process","https://localhost/simchecker/SimCheck/vector_process"];
            var step1 = 'pending';
            var step2 = 'pending';
            for(var i=0 ; i<=1; i++){
    			$.ajax({
    				url: url[i],
    				success: function(response){
                        console.log(response);
                        
                        if (response == "success1") {
                            step1 = 'completed';

                            if(step2 =='pending'){
                                $("#progress-bar-step").css('width', "50%");
                                setTimeout(function() {
                                    $("#progress-bar-step").css('width', "65%");
                                }, 2000);
                                setTimeout(function() {
                                    $("#progress-bar-step").css('width', "77%");
                                }, 4000);
                            }else {
                                toastr.success('Account Succesfully Updated!');
                                
                                $("#progress-bar-step").css('width', "100%");
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);

                            }
                        }else if(response == "success2"){
                            step2 = 'completed';
                            if(step1 =='pending'){
                                $("#progress-bar-step").css('width', "50%");
                                setTimeout(function() {
                                    $("#progress-bar-step").css('width', "65%");
                                }, 2000);
                                setTimeout(function() {
                                    $("#progress-bar-step").css('width', "77%");
                                }, 4000);
                            }else {
                                toastr.success('Account Succesfully Updated!');
                                
                                $("#progress-bar-step").css('width', "100%");
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);

                            }
                        }
                        else{
                            setTimeout(function() {
                                $('#error-msg').removeClass('d-none');
                            }, 0);
                            toastr.error("Error Occured!<br>Please Try Again By Clicking 'Confirm' Button Or Refresh The Page");
                            $("#btn-generate").attr("disabled", false);
                            $('#btn-generate').removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light');
                        }

                    }
                });
            }
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
    Alert.init();
});

