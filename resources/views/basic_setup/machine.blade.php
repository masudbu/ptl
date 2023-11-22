@extends('dashboard.layouts.main')
@section('main')
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<h3 class="text-center">Add Machine</h3>
		<form action="{{route('machineAdd')}}" method="post">
			 @csrf
		  	<div class="form-group">
		        <label for="machine_name">Machine Name</label>
		        <input type="text" name="machine_name" id="machine_name" class="form-control" value="{{old('machine_name')}}" required>
		        @error('machine_name')
		          <div class="alert alert-danger">
		              {{$message}}
		          </div>
		        @enderror
	      	</div>
	      	<div class="form-group">
		        <label for="machine_code">Machine Code</label>
		        <input type="text" name="machine_code" id="machine_code" class="form-control" value="{{old('machine_code')}}" required>
		        @error('machine_code')
		          <div class="alert alert-danger">
		              {{$message}}
		          </div>
		        @enderror
	      	</div>
	      	<div class="form-group">
		        <label for="remarks">Remark</label>
		        <input type="text" name="remarks" id="remarks" class="form-control" value="{{old('remarks')}}">
	      	</div>
	      	<br/>
			<button type="submit" class="btn btn-success">Add</button>
		</form>
	</div>
	<div class="col-md-2">
		
	</div>
</div>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<h3 class="text-center"> Machines </h3>
		<table class="table table-bordered">
			<tr>
				<th>Sl</th>
				<th>Name</th>
				<th>Code</th>
				<th>Date</th>
				<th>Remark</th>
				<th>Action</th>
			</tr>
			@if(isset($machines))
			@foreach($machines as $value)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$value->machine_name}}</td>
				<td>{{$value->machine_code}}</td>
				<td>{{$value->created_at}}</td>
				<td>{{$value->remarks}}</td>
				<td>Buttons</td>
			</tr>
			@endforeach
			@endif
		</table>
	</div>
	<div class="col-md-2"></div>
</div>
@endsection
