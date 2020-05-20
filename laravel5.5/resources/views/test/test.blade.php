<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<form action="{{url('/test6')}}" method="post">
	{{csrf_field()}}
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	 <p>姓名：<input type="text" name="name"></p>
	 <p>年纪：<input type="number" name="age"></p>
	 <p>性别：<input type="text" name="sex"></p>
	 <p>学历：<input type="text" name="edu"></p>
	 <p>工资：<input type="number" name="salary"></p>
	 <p>奖金：<input type="number" name="bonus"></p>
	 <p>城市：<input type="text" name="city"></p>
	<input type="submit">
</form>
</body>
</html>