@extends('layouts.app')
@section('content')
<a href="{{url('articles/create')}}">Nouvel article</a>
	<table border=1>
		<tr><td>nom</td><td>color</td><td>type</td><td>modifier</td><td>supprimer</td></tr>
		@foreach($articles as $article)
		<tr>   <td>{{$article->name}}</td>
			<td>{{$article->color}}</td>
			<td>{{$article->type}}</td>
			<td><a href="{{url('articles/'.$article->id.'/edit')}}">modifier</a></td>
			<td><form action ="{{url('articles/'.$article->id)}}" method="post">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<button type="submit" >supprimer</button></form></td>
	</tr>
		@endforeach
	</table>
@endsection