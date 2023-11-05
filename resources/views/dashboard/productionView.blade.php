@extends('dashboard.layouts.main')

@section('main')
<div class="row">
      <div class="col-md-6">
        <a href="{{ route('dailyProductionList') }}" class="btn btn-info">Back To List</a>
      </div>
       
      <div class="col-md-6">
      </div>
</div>
<div class="row">    
    <h3 class="text-center">Production Date: {{$productionView->production_date}}</h3>
    <table class="table table-bordered table-hover border-primary">
      <tr class="table-info border-success">
        <th style="width: 10%">Dept</th>
        <th style="width: 20%">Machine</th>
        <th style="width: 5%">UOM</th>
        <th style="width: 10%">Target</th>
        <th style="width: 15%">Actual</th>
        <th style="width: 5%">Re-Process<br/>Back/Others</th>
        <th style="width: 15%">Total</th>
        <th style="width: 15%">Remarks</th>
      </tr>
      <tr>
        <th>Yarn Dyeing</th>
        <th>InHouse/Outparty</th>
        <td>TON</td>
        <td>36</td>
        <td colspan="2">{{ $productionView->yarndyeing / 1000}}</td>
        <td>{{ $productionView->yarndyeing / 1000}}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th rowspan="2">Preparatory</th>
        <td>Warping</td>
        <td rowspan="2">MTR</td>
        <td>1,80,000</td>
        <td>{{ number_format($productionView->warping) }}</td>
        <td>-</td>
        <td>{{ number_format($productionView->warping) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Sizing</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionView->sizing) }}</td>
        <td>-</td>
        <td>{{ number_format($productionView->sizing) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th>Weaving</th>
        <td>Loom</td>
        <td>MTR</td>
        <td>1,18,000</td>
        <td colspan="2">{{ number_format($productionView->weaving) }}</td>
        <td>{{ number_format($productionView->weaving) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th colspan="2">Greige Inspection</th>
        <td>MTR</td>
        <td>1,00,000</td>
        <td>{{ number_format($productionView->greige_inspection) }}</td>
        <td>{{ number_format($productionView->greige_inspection_outparty) }}</td>
        <td>{{ number_format($productionView->greige_inspection + $productionView->greige_inspection_outparty) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th rowspan="4">Pretreatment</th>
        <td>Singeing</td>
        <td rowspan="4">MTR</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionView->pretreatment) }}</td>
        <td>{{ number_format($productionView->pretreatment_others) }}</td>
        <td>{{ number_format($productionView->pretreatment + $productionView->pretreatment_others)}}</td>
        <td rowspan="4">ERP</td>
      </tr>
      <tr>
        <td>Bleaching</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionView->bleaching) }}</td>
        <td>{{ number_format($productionView->bleaching_others) }}</td>
        <td>{{ number_format($productionView->bleaching + $productionView->bleaching_others) }}</td>
      </tr>
      <tr>
        <td>Mercerize</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionView->mercerize) }}</td>
        <td>{{ number_format($productionView->mercerize_others ) }}</td>
        <td>{{ number_format($productionView->mercerize + $productionView->mercerize_others) }}</td>
      </tr>
      <tr> 
        <td>PadSteam</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionView->padsteam_pretreatment) }}</td>
        <td>{{ number_format($productionView->padsteam_pretreatment_others ) }}</td>
        <td>{{ number_format($productionView->padsteam_pretreatment + $productionView->padsteam_pretreatment_others) }}</td>
      </tr>
      <tr>
        <th rowspan="7">Solid Dyeing</th>
        <td>CPB</td>
        <td rowspan="7">MTR</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionView->cpb) }}</td>
        <td>{{ number_format($productionView->cpb_others) }}</td>
        <td>{{ number_format($productionView->cpb + $productionView->cpb_others) }}</td>
        <td rowspan="7">ERP</td>
      </tr>
      <tr>
        <td>Thermosol</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionView->thermosol) }}</td>
        <td>{{ number_format($productionView->thermosol_others) }}</td>
        <td>{{ number_format($productionView->thermosol + $productionView->thermosol_others) }}</td>
      </tr>
      <tr>
        <td>Custic Pad</td>
        <td>2,00,000</td>
        <td colspan="2">{{ number_format($productionView->custic_padding) }}</td>
        <td>{{ number_format($productionView->custic_padding) }}</td>
      </tr> 
      <tr>
        <td>YD Correction</td>
        <td>2,00,000</td>
        <td colspan="2">{{ number_format($productionView->yd_correction) }}</td>
        <td>{{ number_format($productionView->yd_correction) }}</td>
      </tr>
      <tr>
        <td>Jigger</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionView->jigger) }}</td>
        <td>{{ number_format($productionView->jigger_others) }}</td>
        <td>{{ number_format($productionView->jigger + $productionView->jigger_others) }}</td>
      </tr>
      <tr>
        <td>PadSteam(SD)</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionView->padsteam_sd) }}</td>
        <td>{{ number_format($productionView->padsteam_sd_others) }}</td>
        <td>{{ number_format($productionView->padsteam_sd + $productionView->padsteam_sd_others) }}</td>
      </tr>
      <tr>
        <td>Washing 3(Goller)</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionView->washing3_goller_sd) }}</td>
        <td>{{ number_format($productionView->washing3_goller_sd_others) }}</td>
        <td>{{ number_format($productionView->washing3_goller_sd + $productionView->washing3_goller_sd_others) }}</td>
      </tr>
      <tr>
        <th rowspan="2">Soft Flow</th>
        <td>Woven</td>
        <td>MTR</td>
        <td>30,000</td>
        <td>{{ number_format($productionView->softflow_woven) }}</td>
        <td>{{ number_format($productionView->softflow_woven_others) }}</td>
        <td>{{ number_format($productionView->softflow_woven + $productionView->softflow_woven_others) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Knit</td>
        <td>TON</td>
        <td>3</td>
        <td>{{ number_format($productionView->softflow_knit)}}</td>
        <td>{{ number_format($productionView->softflow_knit_others) }}</td>
        @php ($softFlowKnitTotal = $productionView->softflow_knit + $productionView->softflow_knit_others)
        <td>{{ number_format($softFlowKnitTotal/1000) }}</td>
        <td>Manual</td>
      </tr>
      <tr>
        <td rowspan="4">Finishing</td>
        <td>Stenter</td>
        <td rowspan="4">MTR</td>
        <td>470,000</td>
        <td>{{ number_format($productionView->stenter) }}</td>
        <td>{{ number_format($productionView->stenter_others) }}</td>
        @php ($stenterTotal = $productionView->stenter + $productionView->stenter_others)
        <td>{{ number_format($stenterTotal) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Sanforizing</td>
        <td>290,000</td>
        <td>{{ number_format($productionView->sanforizing) }}</td>
        <td>{{ number_format($productionView->sanforizing_others) }}</td>
        @php ($csrTotal = $productionView->sanforizing + $productionView->sanforizing_others)
        <td>{{ number_format($csrTotal) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Peach</td>
        <td>110,000</td>
        <td>{{ number_format($productionView->peach) }}</td>
        <td>{{ number_format($productionView->peach_others) }}</td>
        @php ($peachTotal = $productionView->peach + $productionView->peach_others)
        <td>{{ number_format($peachTotal) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Airo</td>
        <td>20,000</td>
        <td colspan="2">{{ number_format($productionView->airo) }}</td>
        <td>{{ number_format($productionView->airo) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th colspan="2">Final Inspection</th>
        <td>YDS</td>
        <td>1,80,000</td>
        <td>{{ number_format($productionView->final_inspection)}}</td>
        <td>{{ number_format($productionView->final_inspection_others)}}</td>
        <td>{{ number_format($productionView->final_inspection + $productionView->final_inspection_others)}}</td>
        <td>ERP</td>
      </tr> 
      <tr>
        <td rowspan="4">MM</td>
        <td>YD(Delivery)</td>
        <td>TON</td>
        <td>10</td>
        <td colspan="2">{{ $productionView->yd_outparty_mm / 1000 }}</td>
        <td>{{ $productionView->yd_outparty_mm_total_month / 1000}}</td>            
        <td>ERP</td>
      </tr>
      <tr>
        <td>AOP(Knit)</td>
        <td>TON</td>
        <td>10</td>
        <td colspan="2">{{ $productionView->printing_knit_mm / 1000 }}</td>
        <td>{{ $productionView->printing_knit_mm_total_month / 1000 }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>AOP(Woven)</td>
        <td>YDS</td>
        <td>30,000</td>
        <td colspan="2">{{ number_format($productionView->printing_woven_mm) }}</td>
        <td>{{ number_format($productionView->printing_woven_mm_total_month) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Delivery(Woven)</td>
        <td>YDS</td>
        <td>60,00000</td>
        <td colspan="2">{{ number_format($productionView->fabric_delivery_mm) }}</td>
        <td>{{ number_format($productionView->fabric_delivery_mm_total_month) }}</td>
        <td>ERP+Manual</td>
      </tr>
    </table>     
</div>
@endsection
