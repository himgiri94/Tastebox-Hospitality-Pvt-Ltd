<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class ="row">
	<div class = "col-xs-3">
		<form action="" method = "POST">
			<input class = "form-control" id="name" name="name" type ="text" placeholder = "Enter name" />
			<input type="submit" class="btn btn-primary" id="submit" name="submit" value ="Submit" /> 
		</form>
	</div>
</div>
</body>
</html>
<?php
//commented code for function
// function name($name){
	// return $name;
// }
if(isset($_POST['submit'])){
	echo name($_POST['name']).rand(6,15);
}
?>
