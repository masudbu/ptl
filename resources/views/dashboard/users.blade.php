@extends('dashboard.layouts.main')

@section('main')
<div class="row">
    <div class="col-md-3">
        <a href="{{ route('exportExcel') }}" class="btn btn-primary">Export</a>
    </div>
    <div class="col-md-9">
        <form action="{{ route('importExcel') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group">
                        <input type="file" name="excel_file" class="form-control">
                    </div>
                
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </div>
        </form>
    </div>
    <br/>
    <br/>
    <br/>
    <table class="table table-striped table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>Update</td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
