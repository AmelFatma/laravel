@extends('layouts.app')
@section('content')
<form action= "{{url('medicaments/'. $medicament->id)}}" method="POST">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field()}}
	<table>
		<tr><td>nom</td><td><input type="text" name="nom" value="{{$medicament->nom}}"></td></tr>
		<tr><td>dosage</td><td><textarea name="dosage">
                                                                        {{$medicament->dosage}}</textarea></td></tr>
        <tr><td>forme</td><td><textarea name="forme">
                                                                         {{$medicament->forme}}</textarea></td></tr>
        <tr><td>t</td>famille<td><textarea name="famille">
                                                                        {{$medicament->famille}}</textarea></td></tr>
        <tr><td>sock_min</td><td><textarea name="stock_min">
                                                                         {{$medicament->stock_min}}</textarea></td></tr>
        }</textarea></td></tr>
        <tr><td>remboursable</td><td><textarea name="remboursable">
                                                                         {{$medicament->remboursable}}</textarea></td></tr>                                                                 
	</table>
	<input type="submit" name="" value="Modifier">
</form>
@endsection
