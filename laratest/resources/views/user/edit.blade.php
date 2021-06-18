<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>

	<a href="/home"> Back</a> |
	<a href="/logout"> Logout </a> 

	<h2>Edit User</h2>

	<form method="post">
		@csrf
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="{{$user['username']}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" value="{{$user['password']}}" ></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="name" name="name" value="{{$user['name']}}"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" value="{{$user['type']}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="update" value="Update"></td>
		</tr>
	</table>
	</form>
</body>
</html>