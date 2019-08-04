@extends('layouts.app')
@Section('content')
<form action= "{{url('articles')}}" method="POST">
	{{ csrf_field()}}
	<table>
          <tr><td>nom</td><td><input type="text" name="name"></td></tr>
		<tr><td>couleur</td><td><textarea name="c"></textarea></td></tr>	
		<tr><td>type</td><td><textarea name="t"></textarea></td></tr>
	</table>
	<input type="submit" name="" value="Enregistrer">
</form>
@endsection
