@extends('dashboard.layouts.main')
@section('main')
<div class="row">
	<div class="col-sm-12">
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
	<div class="col-sm-6">
		<h3 class="text-center border border-primary">
			Yarn Dyeing Table - 2024
		</h3>
		<hr>
		<div class="table-responsive">
			<table class="table table-bordered table-hover border-danger">
				<tr>
					<th>Month</th>
					<th>Dyeing Inhouse(KG)</th>
					<th>Dyeing Outparty(KG)</th>
					<th>Dyeing(Ton)</th>
					<th>Delivery Party(KG)</th>
					<th>Delivery Party(Ton)</th>
				</tr>
				@foreach($monthlyYDProduction as $data)
				<tr>
					<td>{{$data->month_name}}</td>
					<td>{{number_format($data->yarndyeingMonthTotal)}}</td>
					<td>{{number_format($data->yarndyeing_outpartyMonthTotal)}}</td>
					<td>{{number_format(($data->yarndyeingMonthTotal + $data->yarndyeing_outpartyMonthTotal)/1000)}}</td>

					<td>{{number_format($data->dyedYarnMonthTotal)}}</td>
					<td>{{round($data->dyedYarnMonthTotal/1000)}}</td>
				</tr>
				@endforeach
				<tr>
					<td>Total</td>
					<td>{{number_format($monthlyYDProduction->sum('yarndyeingMonthTotal')/1000)}}</td>
					<td>
						{{number_format($monthlyYDProduction->sum('yarndyeing_outpartyMonthTotal')/1000)}}
					</td>
					@php 
						$totalInhouse = $monthlyYDProduction->sum('dyedYarnMonthTotal');
						$totalOutsite = $monthlyYDProduction->sum('yarndyeing_outpartyMonthTotal');
					@endphp
					<td>{{number_format($totalInhouse + $totalOutsite)}}</td>
					<td colspan="2">
						{{number_format($monthlyYDProduction->sum('dyedYarnMonthTotal')/1000)}}
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="col-md-6">
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="chart-container">
			<div class="chart has-fixed-height" id="chart"></div>
		</div>
	</div>
</div>
<hr/>
<div class="row">
	<div class="col-md-6">
		<h4 class="text-center border border-primary">
			AOP Delivery(Outparty) Table - 2024
		</h4>
		<div class="table-responsive">
			<table class="table table-bordered table-hover border-danger">
				<tr>
					<th>Month</th>
					<th>AOP(Yds)</th>
					<th>Total(Lac)</th>
					<th>AOP (Kg)</th>
					<th>Total(Ton)</th>
				</tr>
				@foreach($monthlyAOPDelivery as $data)
				<tr>
					<td>{{$data->month_name}}</td>
					<td>{{number_format($data->printingWovenMonthTotal)}}</td>
					<td>{{round($data->printingWovenMonthTotal/100000, 2)}}</td>
					<td>{{number_format($data->AopKnitMonthTotal)}}</td>
					<td>{{round($data->AopKnitMonthTotal/1000, 2)}}</td>
				</tr>
				@endforeach
				<tr>
					<td>Total</td>
					<td>{{number_format($monthlyAOPDelivery->sum('printingWovenMonthTotal'))}}</td>
					<td>{{round($monthlyAOPDelivery->sum('printingWovenMonthTotal')/100000, 2)}}</td>
					<td>{{number_format($monthlyAOPDelivery->sum('AopKnitMonthTotal'))}}</td>
					<td>{{round($monthlyAOPDelivery->sum('AopKnitMonthTotal')/1000, 2)}}</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="col-md-12">
		<h4 class="text-center border border-primary">
			Woven Fabric Delivery(LC + Commission + Excess + APO(Woven))
		</h4>
		<div class="table-responsive">
			<table class="table table-bordered table-hover border-danger">
			<tr>
				<th>Month</th>
				<th>LC Qty(Yds)</th>
				<th>Commission Qty(Yds)</th>
				<th>PO Excess Qty(Yds)</th>
				<th>AOP(Yds)</th>
				<th>Total Qty(Lac)</th>
			</tr>
			@foreach($monthlyFabricDelivery as $data)
			<tr>
				<td>{{$data->month_name}}</td>
				<td>{{number_format($data->fabricMonthTotal)}}</td>
				<td>{{number_format($data->fabricMonthTotalCommission)}}</td>
				<td>{{number_format($data->fabricMonthTotalOthers)}}</td>
				<td>{{number_format($data->printingWovenMonthTotal)}}</td>
				@php 
					$alltotal=$data->fabricMonthTotal + $data->fabricMonthTotalCommission + $data->fabricMonthTotalOthers+$data->printingWovenMonthTotal;
				@endphp
				<td>{{round($alltotal/100000, 2)}}</td>
			</tr>
			@endforeach
			<tr>
				<td>Total</td>
				<td>{{round($monthlyFabricDelivery->sum('fabricMonthTotal')/100000, 2)}}</td>
				<td>{{round($monthlyFabricDelivery->sum('fabricMonthTotalCommission')/100000, 2)}}</td>
				<td>{{round($monthlyFabricDelivery->sum('fabricMonthTotalOthers')/100000, 2)}}</td>
				<td>{{round($monthlyFabricDelivery->sum('printingWovenMonthTotal')/100000, 2)}}</td>
				<td></td>
			</tr>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h4 class="text-center border border-primary">
			 Greige Inspection Production Table-24
			</h4>
			<table class="table table-bordered table-hover border-danger">
				<tr>
					<th>Month</th>
					<th>Inhouse(mtr)</th>
					<th>OutSite</th>
					<th>Total(Lac)</th>
				</tr>
				@foreach($monthlyGreigeInspection as $data)
				<tr>
					<td>{{$data->month_name}}</td>
					<td>{{number_format($data->greigeInspectionMonthTotal)}}</td>
					<td>{{number_format($data->greigeOutpartyMonthTotal)}}</td> 
					@php

					$total_greigeIns = $data->greigeInspectionMonthTotal + $data->greigeOutpartyMonthTotal;

					@endphp
					<td>{{round($total_greigeIns/100000)}}</td>
				</tr>
				@endforeach
				<tr>
					<td>Total</td>
					<td>
						{{number_format($monthlyGreigeInspection->sum('greigeInspectionMonthTotal'))}}
					</td>
					<td>
						{{number_format($monthlyGreigeInspection->sum('greigeOutpartyMonthTotal'))}}
					</td> 
					@php
						$totalmonthlyIns=$monthlyGreigeInspection->sum('greigeInspectionMonthTotal') + $monthlyGreigeInspection->sum('greigeOutpartyMonthTotal');
					@endphp
					<td>
						{{round($totalmonthlyIns/100000)}}
					</td>
				</tr>
			</table>
		</div>
		<div class="col-md-6">
			<h4 class="text-center border border-primary">
			 Weaving Production Table-24
			</h4>
			<table class="table table-bordered table-hover border-danger">
				<tr>
					<th>Month(M)</th>
					<th>Warping(M)</th>
					<th>Sizing(M)</th>
					<th>Weaving(M)</th>
				</tr>
				@foreach($monthlyWeaving as $data)
				<tr>
					<td>{{$data->month_name}}</td>
					<td>{{number_format($data->warpingMonthTotal)}}</td>
					<td>{{number_format($data->sizingMonthTotal)}}</td>
					<td>{{number_format($data->weavingMonthTotal)}}</td>
				</tr>
				@endforeach
				 <tr>
					<td>Total</td>
					<td>{{number_format($monthlyWeaving->sum('warpingMonthTotal')/100000)}} Lac</td>
					<td>{{number_format($monthlyWeaving->sum('sizingMonthTotal')/100000)}} Lac</td>
					<td>{{number_format($monthlyWeaving->sum('weavingMonthTotal')/100000)}} Lac</td>
				</tr>
			</table>
		</div>
		<div class="col-md-6">
			<h4 class="text-center border border-primary">
			 Pretreatment Production Table-24
			</h4>
			<table class="table table-bordered table-hover border-danger">
				<tr>
					<th>Month</th>
					<th>Pretreatment</th>
					<th>Others</th>
					<th>Mercerize</th>
				</tr>
				@foreach($monthlyPretreatment as $data)
				<tr>
					<td>{{$data->month_name}}</td>
					<td>{{number_format($data->pretreatmentMonthTotal)}}</td>
					<td>{{number_format($data->pretreatmentOthersgMonthTotal)}}</td>
					<td>{{number_format($data->mercerizeMonthTotal)}}</td>
				</tr>
				@endforeach
				 <tr>
					<td>Total</td>
					<td>{{number_format($monthlyPretreatment->sum('pretreatmentMonthTotal'))}}</td>
					<td>{{number_format($monthlyPretreatment->sum('pretreatmentOthersgMonthTotal'))}}</td>
					<td>{{number_format($monthlyPretreatment->sum('mercerizeMonthTotal'))}}</td>
				</tr>
			</table>
		</div>
		<div class="col-md-6">
			<h4 class="text-center border border-primary">
			 Solid Dyeing Production Table-24
			</h4>
			<table class="table table-bordered table-hover border-danger">
				<tr>
					<th>Month</th>
					<th>Cpb</th>
					<th>Others</th>
					<th>Thermosol</th>
					<th>Others</th>
				</tr>
				@foreach($monthlySolidDyeing as $data)
				<tr>
					<td>{{$data->month_name}}</td>
					<td>{{number_format($data->cpbMonthTotal)}}</td>
					<td>{{number_format($data->cpbOthersgMonthTotal)}}</td>
					<td>{{number_format($data->thermosolMonthTotal)}}</td>
					<td>{{number_format($data->thermosolOthersMonthTotal)}}</td>
				</tr>
				@endforeach
				 <!-- <tr>
					<td>Total</td>
					<td>{{number_format($monthlyPretreatment->sum('pretreatmentMonthTotal'))}}</td>
					<td>{{number_format($monthlyPretreatment->sum('pretreatmentOthersgMonthTotal'))}}</td>
					<td>{{number_format($monthlyPretreatment->sum('mercerizeMonthTotal'))}}</td>
				</tr> -->
			</table>
		</div>
		<div class="col-md-6">
			<h4 class="text-center border border-primary">
			 Finishing Production Table-24
			</h4>
			<table class="table table-bordered table-hover border-danger">
				<tr>
					<th>Month</th>
					<th>CSR</th>
					<th>Others</th>
					
				</tr>
				@foreach($monthlySanforizing as $data)
				<tr>
					<td>{{$data->month_name}}</td>
					<td>{{number_format($data->sanforizingMonthTotal)}}</td>
					<td>{{number_format($data->sanforizingOthersgMonthTotal)}}</td>
				</tr>
				@endforeach
				 <!-- <tr>
					<td>Total</td>
					<td>{{number_format($monthlyPretreatment->sum('pretreatmentMonthTotal'))}}</td>
					<td>{{number_format($monthlyPretreatment->sum('pretreatmentOthersgMonthTotal'))}}</td>
					<td>{{number_format($monthlyPretreatment->sum('mercerizeMonthTotal'))}}</td>
				</tr> -->
			</table>
		</div>
		<div class="col-md-6">
			<h4 class="text-center border border-primary">
			 SoftFlow Production Table-24
			</h4>
			<table class="table table-bordered table-hover border-danger">
				<tr>
					<th>Month</th>
					<th>Woven</th>
					<th>Others</th>
					<th>Knit</th>
					<th>Others</th>
				</tr>
				@foreach($monthlySoftFlow as $data)
				<tr>
					<td>{{$data->month_name}}</td>
					<td>{{number_format($data->softflow_wovenMonthTotal)}}</td>
					<td>{{number_format($data->softflow_wovenOthersgMonthTotal)}}</td>
					<td>{{number_format($data->softflow_knitMonthTotal)}}</td>
					<td>{{number_format($data->softflow_knitOthersgMonthTotal)}}</td>
				</tr>
				@endforeach
				 <!-- <tr>
					<td>Total</td>
					<td>{{number_format($monthlyPretreatment->sum('pretreatmentMonthTotal'))}}</td>
					<td>{{number_format($monthlyPretreatment->sum('pretreatmentOthersgMonthTotal'))}}</td>
					<td>{{number_format($monthlyPretreatment->sum('mercerizeMonthTotal'))}}</td>
				</tr> -->
			</table>
		</div>
		<div class="col-md-12">
			<h4 class="text-center border border-primary">
			 AOP Production Table-24
			</h4>
			<table class="table table-bordered table-hover border-danger">
				<tr>
					<th>Month</th>
					<th>Rotary KG</th>
					<th>Rotary M</th>
					<th>Rotary YDS</th>
					<th>Flatbed KG</th>
					<th>Flatbed M</th>
					<th>Flatbed YDS</th>
					<th>Digital KG</th>
					<th>Digital M</th>
					<th>Digital YDS</th>
					
				</tr>
				@foreach($monthlyAOP as $data)
				<tr>
					<td>{{$data->month_name}}</td>
					<td>{{number_format($data->aop_rotary_print_knitMonthTotal)}}</td>
					<td>{{number_format($data->aop_rotary_print_wovenMonthTotal)}}</td>
					<td>{{number_format($data->aop_rotary_print_outsite_wovenMonthTotal)}}</td>
					<td>{{number_format($data->aop_flatbed_print_knitMonthTotal)}}</td>
					<td>{{number_format($data->aop_flatbed_print_wovenMonthTotal)}}</td>
					<td>{{number_format($data->aop_flatbed_print_outsite_wovenMonthTotal)}}</td>
					<td>{{number_format($data->aop_digital_print_knitMonthTotal)}}</td>
					<td>{{number_format($data->aop_digital_print_wovenMonthTotal)}}</td>
					<td>{{number_format($data->aop_digital_print_outsite_wovenMonthTotal)}}</td>
				</tr>
				@endforeach
				 <!-- <tr>
					<td>Total</td>
					<td>{{number_format($monthlyPretreatment->sum('pretreatmentMonthTotal'))}}</td>
					<td>{{number_format($monthlyPretreatment->sum('pretreatmentOthersgMonthTotal'))}}</td>
					<td>{{number_format($monthlyPretreatment->sum('mercerizeMonthTotal'))}}</td>
				</tr> -->
			</table>
		</div>
		<div class="col-md-6">
			<h4 class="text-center border border-primary">
			 Final Inspection Production Table-24
			</h4>
			<table class="table table-bordered table-hover border-danger">
				<tr>
					<th>Month</th>
					<th>Pretreatment</th>
					<th>Others</th>
				</tr>
				@foreach($monthlyFinalInspection as $data)
				<tr>
					<td>{{$data->month_name}}</td>
					<td>{{number_format($data->finalInspectionMonthTotal)}}</td>
					<td>{{number_format($data->finaltOthersgMonthTotal)}}</td>
				</tr>
				@endforeach
				 <tr>
					<td>Total</td>
					<td>{{number_format($monthlyFinalInspection->sum('finalInspectionMonthTotal'))}}</td>
					<td>{{number_format($monthlyFinalInspection->sum('finaltOthersgMonthTotal'))}}</td>
				</tr>
			</table>
		</div>
	</div>
</div>
@endsection