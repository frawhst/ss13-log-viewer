<!doctype html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script type="text/javascript">

		$(document).ready( function () {

			$("#filter-button").removeAttr('disabled');
			$("#filters input[type=checkbox]").removeAttr('disabled');
			$("#filters").removeClass('faded');
			$("#show-ckeys > input").removeAttr('disabled');
			$("#show-ckeys").removeClass('faded');

			$("#show-ckeys > input").change( function () {
				var e = $(this);
				if (e.prop('checked')) {
					$('.ckey').show();
				} else {
					$('.ckey').hide();
				}

			});

			var on = 0

			$("#filters #filter-all").change( function (event) {
				var e = $(this);
				var n = e.attr('name');
				var c = e.prop('checked')
				$("#filters input[type=checkbox]").not("#filter-all").prop('checked', c).change()
			});

			$("#filters input[type=checkbox]").change( function (event) {
				var e = $(this);
				var n = e.attr('name');
				if (e.prop('checked')) {
					$('.log-' + n).show();
					$('.opt-' + n).removeClass('faded');
				} else {
					$('.log-' + n).hide();
					$('.opt-' + n).addClass('faded');
				}
			});


			$("#filter-button").click(function () {
				$("#filters").toggle(100);
			});

		});
	</script>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
