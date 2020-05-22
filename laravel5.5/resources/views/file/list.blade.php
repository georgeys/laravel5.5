<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成员列表</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
</head>
<body>
<input type="button" value="点我" id="btn">
</body>
<script type="text/javascript">
	$(function () {
		$('#btn').click(function () {
			$.get('/file/list1',function (data) {
				console.log(data)
            },'json');
        })
    });
</script>
</html>