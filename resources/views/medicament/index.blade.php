@extends('layouts.app')
@section('content')
<div class="container-fluid"> 
<div class="row"> 
	<a href="{{url('medicaments/create')}}">
	<input type="submit"
					 class="form-control btn btn-primary" value="Ajouter" ></a>
					</div>
<div class="row">					
	<div class="col-md-12">
<table class="table table-striped table-bordered table-hover">
<tr><th>nom</th><th>dosage</th><th>forme</th><th>famille</th><th>stock minimum</th><th>remboursable</th><th>modifier</th><th>supprimer</th></tr>
@foreach($medicaments as $medicament)
		<tr>   <th>{{$medicament->nom}}</th>
			<th>{{$medicament->dosage}}</th>
			<th>{{$medicament->forme}}</th>
			<th>{{$medicament->famille}}</th>
			<th>{{$medicament->stock_min}}</th>
			<th>{{$medicament->remboursable}}</th>
			<th><a href="{{url('medicaments/'.$medicament->id.'/edit')}}"><input type="submit"
					 class="form-control btn btn-warning" value="Modifier" ></a></th>
			<th><form action ="{{url('medicaments/'.$medicament->id)}}" method="post">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<input type="submit"
					 class="form-control btn btn-danger" value="Supprimer" >

		@endforeach
	</table>
@endsection
