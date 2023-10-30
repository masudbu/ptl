@extends('dashboard.layouts.main')
@section('main')
<div class="row">
	<div class="col-md-6">
		<h3 class="text-center border border-primary">
			Production Summary of : {{$productionShortReview->production_date}}</h3>
		<hr>
		<div class="table-responsive-sm" id="homeDashboard">
		    <table class="table table-bordered table-hover border-primary">
		      <thead class="table-info border-success">
		        <th style="width: 20%">Name</th>
		        <th style="width: 5%">MUnit</th>
		        <th style="width: 10%">Target</th>
		        <th style="width: 15%">Production</th>
		      </thead>
		      <tr>
		        <th>Yarn Dyeing</th>
		        <td>TON</td>
		        <td>36</td>
		        <td>{{ $productionShortReview->yarndyeing / 1000}}</td>
		      </tr>
		      <tr>
		        <td>Warping</td>
		        <td>MTR</td>
		        <td>1,80,000</td>
		        <td>{{ number_format($productionShortReview->warping) }}</td>
		      </tr>
		      <tr>
		        <td>Sizing</td>
		        <td>MTR</td>
		        <td>2,00,000</td>
		        <td>{{ number_format($productionShortReview->sizing) }}</td>
		      </tr>
		      <tr>
		        <td>Weaving</td>
		        <td>MTR</td>
		        <td>1,18,000</td>
		        <td>{{ number_format($productionShortReview->weaving) }}</td>
		      </tr>
		      <tr>
		        <th>Greige Inspection</th>
		        <td>MTR</td>
		        <td>1,00,000</td>
		        <td>{{ number_format($productionShortReview->greige_inspection) }}</td>
		      </tr>
		      <tr>
		        <td>Singeing</td>
		        <td>MTR</td>
		        <td>2,20,000</td>
		        <td>{{ number_format($productionShortReview->pretreatment) }}</td>
		      </tr>
		      <tr>
		        <td>Bleaching</td>
		        <td>MTR</td>
		        <td>1,40,000</td>
		        <td>{{ number_format($productionShortReview->bleaching) }}</td>
		      </tr>
		      <tr>
		        <td>Mercerize</td>
		        <td>MTR</td>
		        <td>1,30,000</td>
		        <td>{{ number_format($productionShortReview->mercerize) }}</td>
		      </tr>
		      <tr>
		        <td>CPB</td>
		        <td>MTR</td>
		        <td>30,000</td>
		        <td>{{ number_format($productionShortReview->cpb) }}</td>
		      </tr>
		      <tr>
		        <td>Thermosol</td>
		        <td>MTR</td>
		        <td>30,000</td>
		        <td>{{ number_format($productionShortReview->thermosol) }}</td>
		      </tr>
		      <tr>
		        <td>Custic Pad</td>
		        <td>MTR</td>
		        <td>00000</td>
		        <td>{{ number_format($productionShortReview->custic_padding) }}</td>
		      </tr> 
		      <tr>
		        <td>YD Correction</td>
		        <td>MTR</td>
		        <td>00000</td>
		        <td>{{ number_format($productionShortReview->yd_correction) }}</td>
		      </tr>
		      <tr>
		        <td>Jigger</td>
		        <td>MTR</td>
		        <td>10,000</td>
		        <td>{{ number_format($productionShortReview->jigger) }}</td>
		      </tr>
		      <tr>
		        <td>SoftFlow(Woven)</td>
		        <td>MTR</td>
		        <td>30,000</td>
		        <td>{{ number_format($productionShortReview->softflow_woven) }}</td>
		      </tr>
		      <tr>
		        <td>SoftFlow(Knit)</td>
		        <td>TON</td>
		        <td>3</td>
		        <td>{{ $productionShortReview->softflow_knit / 1000}}</td>
		      </tr>
		      <tr>
		        <td>Stenter</td>
		        <td>MTR</td>
		        <td>470,000</td>
		        <td>{{ number_format($productionShortReview->stenter) }}</td>
		      </tr>
		      <tr>
		        <td>Sanforizing</td>
		        <td>MTR</td>
		        <td>290,000</td>
		        <td>{{ number_format($productionShortReview->sanforizing) }}</td>
		      </tr>
		      <tr>
		        <td>Peach</td>
		        <td>MTR</td>
		        <td>110,000</td>
		        <td>{{ number_format($productionShortReview->peach) }}</td>
		      </tr>
		      <tr>
		        <th>Final Inspection</th>
		        <td>YDS</td>
		        <td>1,80,000</td>
		        <td>{{ number_format($productionShortReview->final_inspection)}}</td>
		      </tr> 
		      <tr>
		        <td>YD(Delivery)</td>
		        <td>TON</td>
		        <td>10</td>
		        <td>{{ $productionShortReview->yd_outparty_mm / 1000 }}</td>
		      </tr>
		      <tr>
		        <td>AOP(Knit)</td>
		        <td>TON</td>
		        <td>10</td>
		        <td>{{ $productionShortReview->printing_knit_mm / 1000 }}</td>
		      </tr>
		      <tr>
		        <td>AOP(Woven)</td>
		        <td>YDS</td>
		        <td>30,000</td>
		        <td>{{ number_format($productionShortReview->printing_woven_mm) }}</td>
		      </tr>
		      <tr>
		        <td>Delivery(Woven)</td>
		        <td>YDS</td>
		        <td>2,00,000</td>
		        <td>{{ number_format($productionShortReview->fabric_delivery_mm) }}</td>
		      </tr>
		      <tr>
		      	<td>Fabric Delivery(Month)</td>
		        <td>YDS</td>
		        <td>60,00000</td>
		        <td>{{ number_format($productionShortReview->fabric_delivery_mm_total_month) }}</td>
		      </tr>
		    </table> 
		</div>
	</div>
	<div class="col-md-6">
		<div class="chart-container">
			<div class="chart has-fixed-height" id="chart"></div>
		</div>
		<table class="table table-bordered table-hover border-danger">
			<tr>
				<th>Month</th>
				<th>Total Qty(Kg)</th>
				<th>Total Qty(Ton)</th>
			</tr>
			@foreach($items as $data)
			<tr>
				<td>{{$data->month_name}}</td>
				<td>{{number_format($data->yarndyeingMonthTotal)}}</td>
				<td>{{number_format($data->yarndyeingMonthTotal/1000)}}</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>
@endsection

