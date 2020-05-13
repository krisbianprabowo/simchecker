$(document).ready(function(){
	$('#kt_modal_5').on('show.bs.modal', function (e) {
	  // get information to update quickly to modal view as loading begins
		var opener=e.relatedTarget;//this holds the element who called the modal
		   
		   //we get details from attributes
		var id_user =$(opener).attr('1-target');
		var judul=$(opener).attr('2-target');
		var nama=$(opener).attr('3-target');
		var interest =$(opener).attr('4-target');
		var notes =$(opener).attr('5-target');
		//set what we got to our form
		$('#fedit-tawaran').find('#mdl-id_tawaran').val(id_user);
		$('#fedit-tawaran').find('#mdl-judul').val(judul);
		$('#fedit-tawaran').find('#mdl-interest').val(interest).change();
		$('#fedit-tawaran').find('#mdl-notes').val(notes);
	   
	});

	$('#kt_modal_6').on('show.bs.modal', function (e) {
	  // get information to update quickly to modal view as loading begins
		var opener=e.relatedTarget;//this holds the element who called the modal
		   
		   //we get details from attributes
		var id_user =$(opener).attr('1-target');
		var judul=$(opener).attr('2-target');
		//set what we got to our form
		$('#fdelete-tawaran').find('#mdl2-id_tawaran').val(id_user);
		$('#fdelete-tawaran').find('#mdl2-judul').val(judul);
	});
});

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
		                    text: "There iss Something Wrong, Please check what you have typed before!",
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

// Class definition
var AlertEdit = function() {

	var initDemos = function() {
		$("#btn-etawaran").click( function(e) {
			e.preventDefault();
			$.ajax({
				url: "https://localhost/simchecker/Dosection/proc_edit_tawaran",
				type: 'POST',
				data: $('#fedit-tawaran').serialize(),

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
		                    text: "There's Something Wrong, Please check what you have typed before!",
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

// Class definition
var AlertDelete = function() {

	var initDemos = function() {
		$("#btn-dtawaran").click( function(e) {
			e.preventDefault();
			$.ajax({
				url: "https://localhost/simchecker/Dosection/proc_delete_tawaran",
				type: 'POST',
				data: $('#fdelete-tawaran').serialize(),

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
		                    text: "There's Something Wrong, Please check what you have typed before!",
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
    AlertEdit.init();
    AlertDelete.init();
});

