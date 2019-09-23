@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="{{url('users')}}" method="POST">

				{{ csrf_field()}}

				<div class="form-group">
					<label for="">nom</label>
					<input type="text" name="nom" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="">prenom</label>
					<input type="text" name="prenom" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="">date de naissance</label>
					<input type="text" name="date_nai" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="">telephone</label>
					<input type="text" name="tel" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="">email</label>
					<input type="email" name="email" class="form-control"required>
				</div>
				<div class="form-group">
					<label for="">login</label>
					<input type="text" name="login" class="form-control"required>
				</div>
				<div class="form-group">
					<label for="">password</label>
					<input type="" name="passwrd" class="form-control" required>
				</div>
			 
<div class="form-group row">
    <label for="isAdmin" class="col-md-4 col-form-label text-md-right">Role</label>
 
    <div class="col-md-6">
        <select name="isAdmin" class="form-control" >
            <option value="admin">Admin</option>
            <option value="agent">Agent</option>
        </select> 
    </div>
</div>
				<div class="col-md-2">
            <input type="file" name="photo">    
         </div>
				<div class="form-group">
					<input type="submit"
					 class="form-control btn btn-primary" value="Enregistrer" >
				</div>
				
				
			</form>
@endsection