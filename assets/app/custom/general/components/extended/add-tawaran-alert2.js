

// Class definition
var Alert = function() {

	var initDemos = function() {
		$("#submit-tawaran").click( function(e) {
			e.preventDefault();
			$.ajax({
				url: "https://localhost/simchecker/Dosection/proc_add_tawaran",
				type: 'POST',
				data: $('#fadd-tawaran').serialize(),

				success:function(response){
					console.log(response);
					if (response == "success") {
						
	                  	swal.fire({
		                    type: 'success',
		                    title: 'Success!',
		                    text: 'Your Research Offer Had Been Succesfully Sent Into Database.. Please Wait!',
		                    timer: 2000,
		                    showCancelButton: false,
		                    showConfirmButton: false
	                  	})
	                  	.then (function() {
	                    	window.location.href = "https://localhost/simchecker/Dosection/add_tawaran";
	                  	});
	                } else {

	                  	swal.fire({
	                   		type: 'error',
		                    title: 'Error Occured!',
		                    text: "There's Something Wrong, Please re-check what you have typed before!",
	                  	});
	                }
				}
			});
		});
	};
	return {
        // Init
        init: function() {
            initDemos();
        },
    };
}();


// Class Initialization
jQuery(document).ready(function() {
    Alert.init();
});

