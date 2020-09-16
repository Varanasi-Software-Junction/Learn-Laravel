<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Loop</title>
    </head>
    <body>
	{{$arr[0]}}
	<br>
	<table border="1">
	
	@foreach($arr as $a)
	<tr><td>{{$a}}</td></tr>
	@endforeach
	</table>
	@php ($n = count($arr))
	
		<table border="1">
	 @for ($i = 0; $i <= $n-1; $i++)
        <tr> <td>{{ $i }}</td><td>{{ $arr[$i] }}</td></tr>
    @endfor
	
	</table>
    </body>
</html>
