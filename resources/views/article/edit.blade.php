@extends('layouts.app')
@section('content')
<form action= "{{url('articles/'. $article->id)}}" method="POST">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field()}}
	<table>
		<tr><td>name</td><td><input type="text" name="name" value="{{$article->name}}"></td></tr>
		<tr><td>color</td><td><textarea name="c">
                                                                         {{$article->color}}</textarea></td></tr>
         <tr><td>type</td><td><textarea name="t">
                                                                         {{$article->type}}</textarea></td></tr>                                                               
	</table>
	<input type="submit" name="" value="Modifier">
</form>
@endsection
