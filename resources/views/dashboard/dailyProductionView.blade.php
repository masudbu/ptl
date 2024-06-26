@extends('dashboard.layouts.main')

@section('main')
<div class="col-md-3">
  <a href="{{route('dailyProductionEntryForm')}}" class="btn btn-success">Add Daily Production</a>
</div>
<div class="col-md-6">
  <form action="{{ route('production_adv_search')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="start_date">Select Start Date</label>
      <input type="date" name="start_date" id="start_date" class="form-control" value="{{old('start_date')}}" >
    </div>
    @error('start_date')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
    <div class="form-group">
      <label for="end_date">Select End Date</label>
      <input type="date" name="end_date" id="end_date" class="form-control" value="{{old('end_date')}}" >
    </div>
     @error('end_date')
      <div class="alert alert-danger">
          {{$message}}
      </div>
      @enderror
    
      <button type="submit" class="btn btn-primary">Search</button>
  </form>
</div>
<div class="col-md-3"></div>

  <div class="row">
    <table class="table table-striped table-hover table-bordered">
      <thead>
        <tr class="table-danger">
          <th>#</th>
          <th> Date</th>
          <th style="width: 5%">F KG</th>
          <th style="width: 5%">F MTR</th>
          <th style="width: 15%">F YDS</th>
          <th style="width: 5%">Warping</th>
          <th style="width: 5%">Sizing</th>
          <th style="width: 5%">Loom</th>
      <!--      <th style="width: 15%">R YDS</th>
          <th style="width: 5%">D KG</th>
          <th style="width: 5%">D MTR</th>
          <th style="width: 15%">D YDS</th> -->
          <th>Updated by</th>
          <th>Action</th> 
          
        </tr>
      </thead>
      <tbody>
        @if(isset($dailyProductionView))
        @foreach($dailyProductionView as $dailyProduction)

        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $dailyProduction->production_date }}</td>

          <td>{{ $dailyProduction->aop_flatbed_print_knit +$dailyProduction->aop_rotary_print_knit + $dailyProduction->aop_digital_print_knit}}</td>
          <td>{{ $dailyProduction->aop_flatbed_print_woven + $dailyProduction->aop_rotary_print_woven + $dailyProduction->aop_digital_print_woven}}</td>
          <td>{{ $dailyProduction->aop_flatbed_print_outsite_woven + $dailyProduction->aop_rotary_print_outsite_woven + $dailyProduction->aop_digital_print_outsite_woven}}</td>

        <td>{{ $dailyProduction->warping }}</td>
        <td>{{ $dailyProduction->sizing }}</td>
        <td>{{ $dailyProduction->weaving }}</td>
      <!--<td>{{ $dailyProduction->aop_rotary_print_outsite_woven }}</td>

          <td>{{ $dailyProduction->aop_digital_print_knit }}</td>
          <td>{{ $dailyProduction->aop_digital_print_woven }}</td>
          <td>{{ $dailyProduction->aop_digital_print_outsite_woven }}</td> -->
          <td>{{ $dailyProduction->updated_by }}</td>
          <td>
            <a href="{{ route('showProductionview',['id'=>$dailyProduction->id]) }}" class="btn btn-xs btn-info">View
            </a>
            <a href="{{ route('showProductionSlip',['id'=>$dailyProduction->id]) }}" class="btn btn-xs btn-success" target="_blank">Pdf
            </a>
            <a href="{{ route('showDailyProduction',['id'=>$dailyProduction->id]) }}" class="btn btn-xs btn-warning">Edit</a>
          </td> 
        </tr>
        @endforeach
        @endif
      </tbody>
    </table>
  </div>
</div>
@endsection
