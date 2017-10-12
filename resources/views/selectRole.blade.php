<!DOCTYPE html>
<html>
<head>
	<title>Role List</title>
</head>
<body>
<table>
@foreach($roleList as $listRole)
	<tr>
		<td>ID</td>
		<td>:</td>
		<td>{{$listRole->id}}</td>
	</tr>
	<tr>
		<td>Desc</td>
		<td>:</td>
		<td>{{$listRole->desc}}</td>
	</tr>
@endforeach
</table>
</body>
</html>