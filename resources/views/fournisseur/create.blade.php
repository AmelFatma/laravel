@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="{{url('fournisseurs')}}" method="POST">

				{{ csrf_field()}}

				<div class="form-group">
					<label for="">nom</label>
					<input type="text" name="nom" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="">adresse</label>
					<input type="text" name="adresse" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="">telephone</label>
					<input type="text" name="tel" class="form-control">
				</div>
				<div class="form-group">
					<label for="">email</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit"
					 class="form-control btn btn-primary" value="Enregistrer" >
				</div>
				
				
			</form>
@endsection