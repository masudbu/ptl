@extends('dashboard.layouts.main')
@section('main')
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<h3 class="text-center"> Daily Dispo Upload</h3>
		<form action="{{route('dispo_upload')}}" method="post" enctype="multipart/form-data">
			@csrf
	      	<div class="form-group">
		        <label for="dispo_upload">Upload</label>
		        <input type="file" name="dispo_upload" id="dispo_upload" class="form-control" value="{{old('dispo_upload')}}">
	      	</div>
	      	<br/>
			<button type="submit" class="btn btn-success">Add</button>
		</form>
	</div>
	<div class="col-md-2">
		
	</div>
</div>
@endsection
