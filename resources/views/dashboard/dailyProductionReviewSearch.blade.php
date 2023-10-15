@extends('dashboard.layouts.main')

@section('main')
<div class="row">
 
</div>
<div class="row">
  <h3 class="text-center">Production Date: {{$startDate}} To {{$endDate}}</h3>
  <div class="table-responsive-sm">
    <table class="table table-bordered table-hover border-primary">
      <tr class="table-info border-success">
        <th style="width: 10%">Dept</th>
        <th style="width: 20%">Sections/Machine</th>
        <th style="width: 5%">UOM</th>
        <th style="width: 10%">Target</th>
        <th style="width: 15%">Actual Production</th>
        <th style="width: 15%">Remarks</th>
      </tr>
      <tr>
        <th>Yarn Dyeing</th>
        <th>InHouse/Outparty</th>
        <td>TON</td>
        <td>36</td>
        <td>{{ $yarndyeing / 1000}}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th rowspan="2">Preparatory</th>
        <td>Warping</td>
        <td rowspan="2">MTR</td>
        <td>1,80,000</td>
        <td>{{ number_format($warping) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Sizing</td>
        <td>1,80,000</td>
        <td>{{ number_format($sizing) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th>Weaving</th>
        <td>Loom</td>
        <td>MTR</td>
        <td>1,18,000</td>
        <td>{{ number_format($weaving) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th>Pretreatment</th>
        <td>Singeing</td>
        <td>MTR</td>
        <td>2,00,000</td>
        <td>{{ number_format($pretreatment) }}</td>
        <td>ERP</td>
      </tr>

       <tr>
        <th>Solid Dyeing</th>
        <td>Thermosol</td>
        <td>MTR</td>
        <td>2,00,000</td>
        <td>{{ number_format($thermosol) }}</td>
        <td>ERP</td>
      </tr>

    </table>
  </div>
</div>
</div>
@endsection
