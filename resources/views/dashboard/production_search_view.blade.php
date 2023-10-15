@extends('dashboard.layouts.main')
@section('main')
<div class="row"> 
  <div class="col-md-3">
    <a href="{{route('dailyProductionEntryForm')}}" class="btn btn-success">Add Daily Production</a>
  </div>
  <div class="col-md-6">
    <form action="{{ route('production_adv_search')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="start_date">Select Start Date</label>
        <input type="date" name="start_date" id="start_date" class="form-control" value="{{old('start_date')}}" required>
        @error('start_date')
          <div class="alert alert-danger">
              {{$message}}
          </div>
          @enderror
      </div>
      <div class="form-group">
        <label for="end_date">Select End Date</label>
        <input type="date" name="end_date" id="end_date" class="form-control" value="{{old('end_date')}}" required>
      </div>
      @error('end_date')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
  </div>
  <div class="col-md-3">
    <a href="{{ route('dailyProductionList') }}" class="btn btn-link">Back To List</a>
  </div>
</div>
<div class="row">
    <table class="table table-striped table-hover table-bordered">
      <thead>
        <tr class="table-danger">
          <th scope="col">#</th>
          <th scope="col">Production Date</th>
          <th scope="col">Yarn Dyeing</th>
          <th scope="col">Warping</th>
         <!--  <th scope="col">Sizing</th>
          <th scope="col">Weaving</th>
          <th scope="col">Pretreatment</th>
          <th scope="col">Thermosol</th> -->
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
        @if(isset($productionInfo_sarch))
        @foreach($productionInfo_sarch as $dailyProduction)
        <tr>
          <th scope="row">{{ $dailyProduction->id }}</th>
          <td>{{ $dailyProduction->production_date }}</td>
          <td>{{ $dailyProduction->yarndyeing }}</td>
          <td>{{ $dailyProduction->warping }}</td>
          <!-- <td>{{ $dailyProduction->sizing }}</td>
          <td>{{ $dailyProduction->weaving }}</td>
          <td>{{ $dailyProduction->pretreatment }}</td>
          <td>{{ $dailyProduction->thermosol }}</td> -->
          <td>
            <a href="{{ route('showProductionview',['id'=>$dailyProduction->id]) }}" class="btn btn-xs btn-info">View</a>
            <a href="{{ route('showProductionSlip',['id'=>$dailyProduction->id]) }}" class="btn btn-xs btn-success">PDF</a>
          </td>
        </tr>
        @endforeach
        @endif
      </tbody>
    </table>
</div>
@endsection
