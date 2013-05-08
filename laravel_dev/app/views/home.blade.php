<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel Guestbook</title>
</head>
<body>
	@foreach($entries as $entry)
	<p>{{ $entry->comment }}</p>
	<p>Posted on {{ $entry->created_at }} by
	<a href="mailto:{{ $entry->email }}">{{ $entry->username }}</a>
	</p>
	@endforeach

	<form action="new" method="POST">
		<table>
			<tr>
				<td>Name</td>
                <td><input type="text" name="frmName" value="" size="30" maxlength="50"></td>
			</tr>
			<tr>
				<td>Email</td>
                <td><input type="text" name="frmEmail" value="" size="30" maxlength="100"></td>
			</tr>
			<tr>
				<td>Comment</td>
                <td><textarea name="frmComment" rows="5" cols="30"></textarea></td>
			</tr>
			<tr>
				<td></td>
                <td>
                	<input type="submit" name="submit" value="submit">
                    <input type="reset" name="reset" value="reset">
                </td>
			</tr>
		</table>
	</form>
</body>
</html>