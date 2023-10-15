@extends('dashboard.layouts.main')

@section('main')
<div class="row">
    <div class="col-md-3">
        <a href="{{ route('exportExcelYarnDyeing') }}" class="btn btn-primary">Export Yarn Dyeing</a>
    </div>
    <div class="col-md-9">
        <form action="{{ route('importExcelYarnDyeing') }}" method="POST" enctype="multipart/form-data">
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
        <tr class="table-danger">
          <th scope="col">#</th>
          <th scope="col">M/C No</th>
          <th scope="col">Unload Date</th>
          <th scope="col">Buyer</th>
          <th scope="col">Order No</th>
          <!-- <th scope="col">YP</th> -->
          <th scope="col">Batch No</th>
          <th scope="col">Yarn Type</th>
          <th scope="col">Color</th>
          <th scope="col">Batch Qty</th>
          <!-- <th scope="col">M/C Capacity</th>
          <th scope="col">Buffer Qty</th> -->
          <th scope="col">Remarks</th>
          
          
        </tr>
      </thead>
      <tbody>
        @if(isset($yarndyeings))
        @foreach($yarndyeings as $yarndyeing)
        <tr>
          <th scope="row">{{ $yarndyeing->id }}</th>
          <td>{{ $yarndyeing->machine_no }}</td>
          <td>{{ $yarndyeing->unload_date }}</td>
          <td>{{ $yarndyeing->buyer_name }}</td>
          <td>{{ $yarndyeing->order_no }}</td>
         <!--  <td>{{ $yarndyeing->yp }}</td> -->
          <td>{{ $yarndyeing->batch_no }}</td>
          <td>{{ $yarndyeing->yarn_type }}</td>
          <td>{{ $yarndyeing->color }}</td>
          <td>{{ $yarndyeing->batch_qty }}</td>
        <!--   <td>{{ $yarndyeing->machine_capacity }}</td>
          <td>{{ $yarndyeing->buffer_production }}</td> -->
          <td>{{ $yarndyeing->remarks }}</td>
          
        </tr>
        @endforeach
        @endif
      </tbody>
    </table>
    <div>
        {{$yarndyeings->links('vendor.pagination.bootstrap-5')}}
    </div>
</div>
@endsection
