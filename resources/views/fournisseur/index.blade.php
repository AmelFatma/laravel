@extends('layouts.app')
@section('content')
<div class="container-fluid"> 
<div class="row"> 
	<a href="{{url('fournisseurs/create')}}">
	<input type="submit"
					 class="form-control btn btn-primary" value="Ajouter" ></a>
					</div>
<div class="row">					
	<div class="col-md-12">
<table class="table table-striped table-bordered table-hover">
<tr><th>nom</th><th>adresse</th><th>telephone</th><th>email</th><th>modifier</th><th>supprimer</th></tr>
@foreach($fournisseurs as $fournisseur)
		<tr>   <th>{{$fournisseur->nom}}</th>
			<th>{{$fournisseur->adresse}}</th>
			<th>{{$fournisseur->tel}}</th>
			<th>{{$fournisseur->email}}</th>
			<th><a href="{{url('fournisseurs/'.$fournisseur->id.'/edit')}}"><input type="submit"
					 class="form-control btn btn-warning" value="Modifier" ></a></th>
			<th><form action ="{{url('fournisseurs/'.$fournisseur->id)}}" method="post">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<input type="submit"
					 class="form-control btn btn-danger" value="Supprimer" >

		@endforeach
	</table>
@endsection
