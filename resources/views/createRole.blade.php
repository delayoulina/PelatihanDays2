<!DOCTYPE html>
<html>
<head>
	<title>Create Role</title>
</head>
<body>
<form action="createNewRole" method="post">
{{csrf_field()}}
	Nama Role : <br>
	<input type="text" name="descRole" id="descRole">
	<input type="submit" name="btnSubmit" value="Submit">
</form>
<a href="roleList">Tampil Role</a>
</body>
</html>