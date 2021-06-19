<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
<body>
	
	<a href="/home"> Back</a> |
	<a href="/logout"> Logout </a> 

	<h2>User Details</h2>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{$user['user_id']}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>{{$user['username']}}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>{{$user['password']}}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>{{$user['name']}}</td>
		</tr>
		<tr>
			<td>Dept</td>
			<td>{{$user['dept']}}</td>
		</tr>
		<tr>
			<td>CGPA</td>
			<td>{{$user['cgpa']}}</td>
		</tr>
		<tr>
			<td>Type</td>
			<td>{{$user['type']}}</td>
		</tr>
	</table>
	
</body>
</html>