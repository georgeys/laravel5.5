<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成员列表</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<table border="1">
    <thead>
    <tr>
        <th>头像</th>
        <th>姓名</th>
        <th>年纪</th>
        <th>工资</th>
        <th>城市</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $value)
    <tr>
        <td><img src="{{ltrim($value -> avatar,'.')}}" width="100" height="80" alt=""></td>
        <td>{{$value -> name}}</td>
        <td>{{$value -> age}}</td>
        <td>{{$value -> salary}}</td>
        <td>{{$value -> city}}</td>

    </tr>
    @endforeach
    </tbody>
</table>
{{$data->links()}}
</body>
</html>