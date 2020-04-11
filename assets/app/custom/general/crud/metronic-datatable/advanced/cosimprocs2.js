"use strict";
// Class definition

var KTDatatableAutoColumnHideDemo = function() {
	// Private functions

	// basic demo
	var demo = function() {

		var datatable = $('.kt-datatable').KTDatatable({

			
			// datasource definition
			data: {
				pageSize: 10,
			},

			layout: {
				scroll: true,
				height: 550,
			},

			// column sorting
			sortable: true,

			responsive: true,

			pagination: true,

			search: {
				input: $('#generalSearch'),
			},

			// columns definition
			columns: [
				{
					field: 'ID',
					title: 'ID',
					width: 40,
				}, {
					field: 'Name',
					width: 'auto'
				}, {
					field: 'NIM',
					width: 90,
				}, {
					field: 'Title',
					width: 280,
				}, {
					field: 'Result',
					width: 90,

				}, {
					field: 'Status',
					title: 'Status',
					autoHide: false,
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {'title': 'Comply Diff', 'class': 'kt-badge--info'},
							2: {'title': 'Low', 'class': ' kt-badge--success'},
							3: {'title': 'Medium', 'class': ' kt-badge--warning'},
							4: {'title': 'High', 'class': ' kt-badge--danger'},
							/*5: {'title': 'Info', 'class': ' kt-badge--info'},
							6: {'title': 'Danger', 'class': ' kt-badge--danger'},
							7: {'title': 'Warning', 'class': ' kt-badge--warning'},*/
						};
						return '<span class="kt-badge ' + status[row.Status].class + ' kt-badge--inline kt-badge--pill">' + status[row.Status].title + '</span>';
					},
				}, /*{
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
				}, */{
					field: 'Aksi',
					title: 'Aksi',
					sortable: false,
					width: 110,
					overflow: 'visible',
					autoHide: false,
					template: function() {
						return '\
							<div class="dropdown">\
							</div>\
							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
								<i class="la la-edit"></i>\
							</a>\
							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">\
								<i class="la la-trash"></i>\
							</a>\
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