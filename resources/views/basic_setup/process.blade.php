@extends('dashboard.layouts.main')
@section('main')
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<h3 class="text-center">Add Process</h3>
		<form action="{{route('processAdd')}}" method="post">
			 @csrf
			<div class="form-group">
				<label for="department_id">Department</label>
				<select id="department_id" name="department_id" class="form-control" required>
					<option value="">Select one</option>
					@if(isset($departments))
					@foreach($departments as $value)
					<option value="{{$value->id}}">{{$value->dept_name}}</option>
					@endforeach
					@endif
				</select>
			</div>
		  	<div class="form-group">
		        <label for="process_name">Process Name</label>
		        <input type="text" name="process_name" id="process_name" class="form-control" value="{{old('process_name')}}">
		        @error('process_name')
		          <div class="alert alert-danger">
		              {{$message}}
		          </div>
		        @enderror
	      	</div>
	      	<div class="form-group">
		        <label for="process_code">Process Code</label>
		        <input type="text" name="process_code" id="dept_name" class="form-control" value="{{old('process_code')}}">
		        @error('process_code')
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
		<h3 class="text-center"> All Process </h3>
		<table class="table table-bordered">
			<tr>
				<th>Sl</th>
				<th>Name</th>
				<th>Code</th>
				<th>Date</th>
				<th>Remark</th>
				<th>Action</th>
			</tr>
			@if(isset($processes))
			@foreach($processes as $value)
			<tr>
				<td>{{$value->id}}</td>
				<td>{{$value->process_name}}</td>
				<td>{{$value->process_code}}</td>
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
