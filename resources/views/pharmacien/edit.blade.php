@extends('layouts.app')
@section('content')
<form action= "{{url('pharmaciens/'. $pharmacien->id)}}" method="POST">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field()}}
	<table>
		<tr><td>nom</td><td><input type="text" name="nom" value="{{$pharmacien->nom}}"></td></tr>
		<tr><td>prenom</td><td><textarea name="prenom">
                                                                        {{$pharmacien->prenom}}</textarea></td></tr>
        <tr><td>date de naissance</td><td><textarea name="date_nai">
                                                                         {{$pharmacien->date_nai}}</textarea></td></tr>
        <tr><td>t</td>telephone<td><textarea name="tel">
                                                                        {{$pharmacien->tel}}</textarea></td></tr>
        <tr><td>email</td><td><textarea name="email">
                                                                         {{$pharmacien->email}}</textarea></td></tr>
        <tr><td>photo<input type="file" name="photo" value="{{$pharmacien->photo}}"></td></tr>                                                                  
	</table>
	<input type="submit" name="" value="Modifier">
</form>
@endsection
