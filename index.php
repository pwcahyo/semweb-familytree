<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Semantic Web Assignment &raquo; Family Example</title>
	<link rel="stylesheet" href="public/css/main.css">
</head>
<body>
	<div id="container">
		<h1>Semantic Web Assignment <small>Family Example</small></h1>
		<form role="form" method="POST" action="getFamilyInfo.php" id="sparql-form">
			<input type="text" placeholder="Type person name you wish to find" name="nama" id="nama">
			<button class="btn-block"><i class="fa fa-search"></i> Search</button>
		</form>
		<hr>
		<div id="result"></div>
	</div>
	<script src="public/js/jquery.js"></script>
	<script>
	$(function(){
		$('#sparql-form').submit(function(e){
			e.preventDefault();
			var ini = $(this);
			var url = ini.attr('action');
			var data = {
				nama: ini.find('#nama').val(),
			};

			$('#result').empty().html('Loading Results ...').load(url,data);
		});
	});
	</script>
</body>
</html>