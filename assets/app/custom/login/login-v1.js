

// Class definition
var Alert = function() {

	var initDemos = function() {
		$("#btn-login").click( function(e) {
			e.preventDefault();
			var username = $("#username").val();
	  		var password = $("#password").val();
			$.ajax({
				url: "https://localhost/simchecker/SimCheck/proses_login",
				type: 'POST',
				data: {
					"username": username,
	          		"password": password
				},

				success:function(response){
					console.log(response);
					if (response == "success") {
						
	                  	swal.fire({
		                    type: 'success',
		                    title: 'Login Successful!',
		                    text: 'You will be redirected shortly.. Please Wait!',
		                    timer: 2000,
		                    showCancelButton: false,
		                    showConfirmButton: false
	                  	})
	                  	.then (function() {
	                    	window.location.href = "https://localhost/simchecker/SimCheck";
	                  	});
	                } else {

	                  	swal.fire({
	                   		type: 'error',
		                    title: 'Login Gagal!',
		                    text: 'silahkan coba lagi!',
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

/*var proccess_url = window.location.origin +"/SimCheck/proses_login" ;
			var base_url 	 = window.location.origin +"/SimCheck"
			console.log(proccess_url);*/
			/*$(document).ready(function() {
				$("#btn-login").click( function(e) {
					e.preventDefault();
					var username = $("#username").val();
	          		var password = $("#password").val();
					$.ajax({
						url: "<?php echo base_url('SimCheck/proses_login')?>",
						type: 'POST',
						data: {
							"username": username,
	                  		"password": password
						},

						success:function(response){
							console.log(response);
							if (response == "success") {
								
			                  	swal.fire({
				                    type: 'success',
				                    title: 'Login Successful!',
				                    text: 'You will be redirected shortly.. Please Wait!',
				                    timer: 2000,
				                    showCancelButton: false,
				                    showConfirmButton: false
			                  	})
			                  	.then (function() {
			                    	window.location.href = '<?php echo base_url('SimCheck')?>';
			                  	});
			                } else {

			                  	swal.fire({
			                   		type: 'error',
				                    title: 'Login Gagal!',
				                    text: 'silahkan coba lagi!'
			                  	});
			                }
						}
					});
				});
			});*/