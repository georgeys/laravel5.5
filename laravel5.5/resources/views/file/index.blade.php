<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件上传</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<form action="#" method="post" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<p>姓名：<input type="text" name="name"></p>
	<p>年纪：<input type="number" name="age"></p>
	<p>性别：<input type="text" name="sex"></p>
	<p>学历：<input type="text" name="edu"></p>
	<p>工资：<input type="number" name="salary"></p>
	<p>奖金：<input type="number" name="bonus"></p>
	<p>城市：<input type="text" name="city"></p>
	<p>城市：<input type="file" name="avatar"></p>
	<p>验证码：<input type="text" name="captcha"> <img src="{{captcha_src()}}"
	     onclick="this.src='{{captcha_src()}}?'+Math.random()"></p>
	<input type="submit">
</form>
</body>
</html>