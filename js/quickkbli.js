$(document).ready(function () {
	$("#quickKBLI").DataTable({
		bInfo: false,
		columnDefs: [
			{
				targets: 2,
				orderable: false,
			},
		],

		language: {
			paginate: {
				next: "&gt",
				previous: "&lt",
			},
		},
	});
});
