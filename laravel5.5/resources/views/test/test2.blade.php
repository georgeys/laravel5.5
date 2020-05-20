<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<form action="{{url('/test3')}}" method="post">
	{{csrf_field()}}
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	姓名：<input type="text">
	<input type="submit">
</form>
</body>
</html>