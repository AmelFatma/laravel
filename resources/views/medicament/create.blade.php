@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="{{url('medicaments')}}" method="POST">

				{{ csrf_field()}}

				<div class="form-group">
					<label for="">nom</label>
					<input type="text" name="nom" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="">dosage</label>
					<input type="text" name="dosage" class="form-control">
				</div>
				<div class="form-group">
					<label for="">forme</label>
					<input type="text" name="forme" class="form-control">
				</div>
				<div class="form-group">
					<label for="">famille</label>
					<input type="text" name="famille" class="form-control">
				</div>
				<div class="form-group">
					<label for="">stock_min</label>
					<input type="text" name="stock_min" class="form-control">
				</div>
				 <div class="form-group">
            <label for="">remboursable</label><br/>
            <label class="radio-inline"><input type="radio" name="remboursable" value="1"> OUI</label>
            <label class="radio-inline"><input type="radio" name="non-remboursable" value="0"> NON</label>
        </div>
				<div class="form-group">
					<input type="submit"
					 class="form-control btn btn-primary" value="Enregistrer" >
				</div>
				
				
			</form>
@endsection