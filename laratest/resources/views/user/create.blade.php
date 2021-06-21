@extends('../navbar')

	@section('navbar')
		<a href="/home"> Back</a> |
		<a href="/logout"> Logout </a> 
	@endsection

	@section('title')
	:: Create User ::
	@endsection

	@section('page_title')
	Create New User
	@endsection

	@section('main_content')
	<form method="post" enctype="multipart/form-data">
		<table>
			@csrf
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>DEPT</td>
				<td><input type="text" name="dept"></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
		</form>
	@endsection