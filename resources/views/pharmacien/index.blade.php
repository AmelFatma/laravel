@extends('layouts.app')
@section('content')
<div class="container-fluid"> 
<div class="row"> 
	<a href="{{url('pharmaciens/create')}}">
	<input type="submit"
					 class="form-control btn btn-primary" value="Ajouter" ></a>
					</div>
<div class="row">					
	<div class="col-md-12">
<table class="table table-striped table-bordered table-hover">
<tr><th>nom</th><th>prenom</th><th>date de naissance</th><th>telephone</th><th>email</th><th>login</th><th>mot de passe</th><th>photo</th><th>modifier</th><th>supprimer</th></tr>
@foreach($pharmaciens as $pharmacien)
		<tr>   <th>{{$pharmacien->nom}}</th>
			<th>{{$pharmacien->prenom}}</th>
			<th>{{$pharmacien->date_nai}}</th>
			<th>{{$pharmacien->tel}}</th>
			<th>{{$pharmacien->email}}</th>
			<th>{{$pharmacien->login}}</th>
			<th>{{$pharmacien->passwrd}}</th>
			<th><img src="{{$pharmacien->photo}}" height="50" width="50%"  class="img-circle"/></th>
			<th><a href="{{url('pharmaciens/'.$pharmacien->id.'/edit')}}"><input type="submit"
					 class="form-control btn btn-warning" value="Modifier" ></a></th>
			<th><form action ="{{url('pharmaciens/'.$pharmacien->id)}}" method="post">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<input type="submit"
					 class="form-control btn btn-danger" value="Supprimer" >

		@endforeach
	</table>
@endsection
