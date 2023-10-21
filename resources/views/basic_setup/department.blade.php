@extends('dashboard.layouts.main')
@section('main')
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<h3 class="text-center">Add Department</h3>
		<form action="{{route('departmentAdd')}}" method="post">
			 @csrf
		  	<div class="form-group">
		        <label for="dept_name">Dept Name</label>
		        <input type="text" name="dept_name" id="dept_name" class="form-control" value="{{old('dept_name')}}" required>
		        @error('dept_name')
		          <div class="alert alert-danger">
		              {{$message}}
		          </div>
		        @enderror
	      	</div>
	      	<div class="form-group">
		        <label for="dept_code">Dept Code</label>
		        <input type="text" name="dept_code" id="dept_name" class="form-control" value="{{old('dept_code')}}" required>
		        @error('dept_code')
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
		<h3 class="text-center"> Departments </h3>
		<table class="table table-bordered">
			<tr>
				<th>Sl</th>
				<th>Name</th>
				<th>Code</th>
				<th>Date</th>
				<th>Remark</th>
				<th>Action</th>
			</tr>
			@if(isset($departments))
			@foreach($departments as $value)
			<tr>
				<td>{{$value->id}}</td>
				<td>{{$value->dept_name}}</td>
				<td>{{$value->dept_code}}</td>
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
