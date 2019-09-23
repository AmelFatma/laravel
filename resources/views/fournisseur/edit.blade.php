@extends('layouts.app')
@section('content')
<form action= "{{url('fournisseurs/'. $fournisseur->id)}}" method="POST">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field()}}
	<table>
		<tr><td>nom</td><td><input type="text" name="nom" value="{{$fournisseur->nom}}"></td></tr>
		<tr><td>adresse</td><td><textarea name="adresse">
                                                                        {{$fournisseur->prenom}}</textarea></td></tr>
        
        <tr><td>t</td>telephone<td><textarea name="tel">
                                                                        {{$fournisseur->tel}}</textarea></td></tr>
        <tr><td>email</td><td><textarea name="email">
                                                                         {{$fournisseur->email}}</textarea></td></tr>
                                                                         
	</table>
	<td><button type="submit" >smodifier</button></form></td>
</form>
@endsection
