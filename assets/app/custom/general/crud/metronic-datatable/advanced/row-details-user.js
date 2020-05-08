
// Class definition

var KTDatatableAutoColumnHideDemo = function() {
	// Private functions

	// basic demo
	var demo = function() {

		var datatable = $('.user-tables').KTDatatable({
			// datasource definition
			data: {
				pageSize: 10,
			},

			layout: {
				scroll: true,
				height: 550,
			},

			// column sorting
			

			responsive: true,

			pagination: true,

			search: {
				input: $('#generalSearch'),
			},

			// columns definition
			columns: [
				{
					field: 'No',
					title: 'No',
					width: 40,
				}, {
					field: 'NIM',
					sortable: 'desc',
				}, {
					field: 'Name',
					autoHide: false
				}, {
					field: 'Title',
					autoHide: false
				}, {
					field: 'Dosen Penguji',
				}, {
					field: 'Finished on',
					type: 'date',
					format: 'DD-MM-YYYY',
					width: 100,
				}, {
					field: 'TotalPayment',
					title: 'Payment',
				}, {
					field: 'Aksi',
					sortable: false,
					width: 110,
					overflow: 'visible',
					autoHide: false,
				}, {
					field: 'Status',
					title: 'Status',
					sortable: 'asc',
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {'title': 'Ketua Program Studi', 'class': 'kt-badge--brand'},
							2: {'title': 'Koordinator TA', 'class': ' kt-badge--danger'},
							3: {'title': 'Dosen', 'class': ' kt-badge--success'},
							4: {'title': 'Mahasiswa', 'class': ' kt-badge--warning'},
						};
						return '<span class="kt-badge ' + status[row.Status].class + ' kt-badge--inline kt-badge--pill">' + status[row.Status].title + '</span>';
					},
				}, {
					field: 'Type',
					title: 'Type',
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {'title': 'Online', 'state': 'danger'},
							2: {'title': 'Retail', 'state': 'primary'},
							3: {'title': 'Direct', 'state': 'success'},
						};
						return '<span class="kt-badge kt-badge--' + status[row.Type].state + ' kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-' + status[row.Type].state + '">' +
								status[row.Type].title + '</span>';
					},
				}, {
					field: 'Aksis',
					title: 'Aksis',
					sortable: false,
					width: 110,
					overflow: 'visible',
					autoHide: false,
					template: function() {
						return '\
							<div class="dropdown">\
							</div>\
							<button class="btn btn-sm btn-clean btn-icon" id="btn-edit" title="Edit details" data-toggle="modal" data-target="#kt_modal_4">\
								<i class="la la-edit"></i>\
							</button>\
							<button href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">\
								<i class="la la-trash"></i>\
							</button>\
						';
					},
				}],

		});

    $('#kt_form_status').on('change', function() {
      datatable.search($(this).val().toLowerCase(), 'Status');
    });

    $('#kt_form_type').on('change', function() {
      datatable.search($(this).val().toLowerCase(), 'Type');
    });

    $('#kt_form_status,#kt_form_type').selectpicker();

	};

	return {
		// public functions
		init: function() {
			demo();
		},
	};
}();

jQuery(document).ready(function() {
    KTDatatableAutoColumnHideDemo.init();
});