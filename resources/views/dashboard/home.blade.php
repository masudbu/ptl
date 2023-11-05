@extends('dashboard.layouts.main')
@section('main')
<div class="row">
	<div class="col-sm-7">
		<h3 class="text-center border border-primary">
			Production Summary of : {{$productionShortReview->production_date}}
		</h3>
		<hr>
		<div class="table-responsive" id="homeDashboard">
		    <table class="table table-bordered table-hover border-primary">
		      <thead class="table-info border-success">
		        <th>Name</th>
		        <th>MUnit</th>
		        <th>Target</th>
		        <th>Production</th>
		        <th>Reprocess/Others</th>
		      </thead>
		      <tr>
		        <th>Yarn Dyeing</th>
		        <td>TON</td>
		        <td>36</td>
		        <td>{{ $productionShortReview->yarndyeing / 1000}}</td>
		        <td>{{ $productionShortReview->yarndyeing }}</td>
		      </tr>
		      <tr>
		        <td>Warping</td>
		        <td>MTR</td>
		        <td>1,80,000</td>
		        <td colspan="2">{{ number_format($productionShortReview->warping) }}</td>
		      </tr>
		      <tr>
		        <td>Sizing</td>
		        <td>MTR</td>
		        <td>2,00,000</td>
		        <td colspan="2">{{ number_format($productionShortReview->sizing) }}</td>
		      </tr>
		      <tr>
		        <td>Weaving</td>
		        <td>MTR</td>
		        <td>1,18,000</td>
		        <td colspan="2">{{ number_format($productionShortReview->weaving) }}</td>
		      </tr>
		      <!-- <tr>
		        <th>Greige Inspection</th>
		        <td>MTR</td>
		        <td>1,00,000</td>
		        <td>{{ number_format($productionShortReview->greige_inspection) }}</td>
		      </tr> -->
		      <tr>
		        <td>Singeing</td>
		        <td>MTR</td>
		        <td>2,20,000</td>
		        <td>{{ number_format($productionShortReview->pretreatment) }}</td>
		        <td>{{ number_format($productionShortReview->pretreatment_others) }}</td>
		      </tr>
		      <tr>
		        <td>Mercerize</td>
		        <td>MTR</td>
		        <td>1,30,000</td>
		        <td>{{ number_format($productionShortReview->mercerize) }}</td>
		        <td>{{ number_format($productionShortReview->mercerize_others) }}</td>
		      </tr>
		      <tr>
		        <td>CPB</td>
		        <td>MTR</td>
		        <td>30,000</td>
		        <td>{{ number_format($productionShortReview->cpb) }}</td>
		        <td>{{ number_format($productionShortReview->cpb_others) }}</td>
		      </tr>
		      <tr>
		        <td>Thermosol</td>
		        <td>MTR</td>
		        <td>30,000</td>
		        <td>{{ number_format($productionShortReview->thermosol) }}</td>
		        <td>{{ number_format($productionShortReview->thermosol_others) }}</td>
		      </tr>
		      <tr>
		        <td>Custic Pad</td>
		        <td>MTR</td>
		        <td>00000</td>
		        <td colspan="2">{{ number_format($productionShortReview->custic_padding) }}</td>
		      </tr> 
		      <!-- <tr>
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
		      </tr> -->
		      <tr>
		        <td>SoftFlow(Woven)</td>
		        <td>MTR</td>
		        <td>30,000</td>
		        <td>{{ number_format($productionShortReview->softflow_woven) }}</td>
		        <td>{{ number_format($productionShortReview->softflow_woven_others) }}</td>
		      </tr>
		      <tr>
		        <td>SoftFlow(Knit)</td>
		        <td>TON</td>
		        <td>3</td>
		        <td>{{ number_format($productionShortReview->softflow_knit / 1000)}}</td>
		        <td>{{ number_format($productionShortReview->softflow_knit_others / 1000)}}</td>
		      </tr>
		      <tr>
		        <td>Stenter</td>
		        <td>MTR</td>
		        <td>470,000</td>
		        <td>{{ number_format($productionShortReview->stenter) }}</td>
		        <td>{{ number_format($productionShortReview->stenter_others) }}</td>
		      </tr>
		      <tr>
		        <td>Sanforizing</td>
		        <td>MTR</td>
		        <td>290,000</td>
		        <td>{{ number_format($productionShortReview->sanforizing) }}</td>
		        <td>{{ number_format($productionShortReview->sanforizing_others) }}</td>
		      </tr>
		      <tr>
		        <td>Peach</td>
		        <td>MTR</td>
		        <td>110,000</td>
		        <td>{{ number_format($productionShortReview->peach) }}</td>
		        <td>{{ number_format($productionShortReview->peach_others) }}</td>
		      </tr>
		      <tr>
		        <th>Final Inspection</th>
		        <td>YDS</td>
		        <td>1,80,000</td>
		        <td>{{ number_format($productionShortReview->final_inspection)}}</td>
		        <td>{{ number_format($productionShortReview->final_inspection_others)}}</td>
		      </tr> 
		      <tr>
		        <td>YD(Delivery)</td>
		        <td>TON</td>
		        <td>10</td>
		        <td colspan="2">{{ $productionShortReview->yd_outparty_mm / 1000 }}</td>
		      </tr>
		      <tr>
		        <td>AOP(Knit)</td>
		        <td>TON</td>
		        <td>10</td>
		        <td colspan="2">{{ $productionShortReview->printing_knit_mm / 1000 }}</td>
		      </tr>
		      <tr>
		        <td>AOP(Woven)</td>
		        <td>YDS</td>
		        <td>30,000</td>
		        <td colspan="2">{{ number_format($productionShortReview->printing_woven_mm) }}</td>
		      </tr>
		      <tr>
		        <td>Delivery(Woven)</td>
		        <td>YDS</td>
		        <td>2,00,000</td>
		        <td colspan="2">{{ number_format($productionShortReview->fabric_delivery_mm) }}</td>
		      </tr>
		      <tr>
		      	<td>Fabric Del.(Month)</td>
		        <td>YDS</td>
		        <td>60,00000</td>
		        <td colspan="2">{{ number_format($productionShortReview->fabric_delivery_mm_total_month) }}</td>
		      </tr>
		    </table> 
		</div>
	</div>
	<div class="col-sm-5">
		<h3 class="text-center border border-primary">
			Yarn Dyeing Production Table - 2023
		</h3>
		<hr>
		<div class="table-responsive">
			<table class="table table-bordered table-hover border-danger">
			<tr>
				<th>Month</th>
				<th>Total Qty(Kg)</th>
				<th>Total Qty(Ton)</th>
			</tr>
			@foreach($monthlyYDProduction as $data)
			<tr>
				<td>{{$data->month_name}}</td>
				<td>{{number_format($data->yarndyeingMonthTotal)}}</td>
				<td>{{number_format($data->yarndyeingMonthTotal/1000)}}</td>
			</tr>
			@endforeach
			<tr>
				<td colspan="2">Total</td>
				<td>{{number_format($monthlyYDProduction->sum('yarndyeingMonthTotal')/1000)}}</td>
			</tr>
			</table>
		</div>
	</div>
	<div class="col-md-12">
		<div class="chart-container">
			<div class="chart has-fixed-height" id="chart"></div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<h3 class="text-center border border-primary">
			Monthly Dyed Yarn Delivery(Outparty)
		</h3>
		<div class="table-responsive">
			<table class="table table-bordered table-hover border-danger">
			<tr>
				<th>Month</th>
				<th>Total Qty(Kg)</th>
				<th>Total Qty(Ton)</th>
			</tr>
			@foreach($monthlyDyedYarnDelivery as $data)
			<tr>
				<td>{{$data->month_name}}</td>
				<td>{{number_format($data->dyedYarnMonthTotal)}}</td>
				<td>{{number_format($data->dyedYarnMonthTotal/1000)}}</td>
			</tr>
			@endforeach
			<tr>
				<td colspan="2">Total</td>
				<td>{{number_format($monthlyDyedYarnDelivery->sum('dyedYarnMonthTotal')/1000)}}</td>
			</tr>
			</table>
		</div>
	</div>
	<div class="col-md-6">
		<h3 class="text-center border border-primary">
			Monthly Woven Fabric Delivery(LC + Commision)
		</h3>
		<div class="table-responsive">
			<table class="table table-bordered table-hover border-danger">
			<tr>
				<th>Month</th>
				<th>Total Qty(Yds)</th>
				<th>Total Qty(Lac)</th>
			</tr>
			@foreach($monthlyFabricDelivery as $data)
			<tr>
				<td>{{$data->month_name}}</td>
				<td>{{number_format($data->fabricMonthTotal)}}</td>
				<td>{{round($data->fabricMonthTotal/100000, 2)}}</td>
			</tr>
			@endforeach
			<tr>
				<td colspan="2">Total</td>
				<td>{{round($monthlyFabricDelivery->sum('fabricMonthTotal')/100000, 2)}}</td>
			</tr>
			</table>
		</div>
	</div>
</div>
@endsection

