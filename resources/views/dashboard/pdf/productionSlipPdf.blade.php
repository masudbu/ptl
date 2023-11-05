<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Production Slip Pdf</title>
</head>
<body>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: center;
      padding: 5px;
       border: 1px solid;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}
    .text-center{
      text-align: center;
      text-transform: uppercase;
    }
</style>
<div class="container">
	<div class="row">
    <h2 class="text-center">Paramount Textile PLC</h2>
    <h3 class="text-center">Production Date: {{$productionSlip->production_date}}</h3>
    <div style="overflow-x: auto;">
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
        <td colspan="2">{{ $productionSlip->yarndyeing / 1000}}</td>
        <td>{{ $productionSlip->yarndyeing / 1000}}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th rowspan="2">Preparatory</th>
        <td>Warping</td>
        <td rowspan="2">MTR</td>
        <td>1,80,000</td>
        <td>{{ number_format($productionSlip->warping) }}</td>
        <td>-</td>
        <td>{{ number_format($productionSlip->warping) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Sizing</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionSlip->sizing) }}</td>
        <td>-</td>
        <td>{{ number_format($productionSlip->sizing) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th>Weaving</th>
        <td>Loom</td>
        <td>MTR</td>
        <td>1,18,000</td>
        <td colspan="2">{{ number_format($productionSlip->weaving) }}</td>
        <td>{{ number_format($productionSlip->weaving) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th colspan="2">Greige Inspection</th>
        <td>MTR</td>
        <td>1,00,000</td>
        <td>{{ number_format($productionSlip->greige_inspection) }}</td>
        <td>{{ number_format($productionSlip->greige_inspection_outparty) }}</td>
        <td>{{ number_format($productionSlip->greige_inspection + $productionSlip->greige_inspection_outparty) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th rowspan="4">Pretreatment</th>
        <td>Singeing</td>
        <td rowspan="4">MTR</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionSlip->pretreatment) }}</td>
        <td>{{ number_format($productionSlip->pretreatment_others) }}</td>
        <td>{{ number_format($productionSlip->pretreatment + $productionSlip->pretreatment_others)}}</td>
        <td rowspan="4">ERP</td>
      </tr>
      <tr>
        <td>Bleaching</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionSlip->bleaching) }}</td>
        <td>{{ number_format($productionSlip->bleaching_others) }}</td>
        <td>{{ number_format($productionSlip->bleaching + $productionSlip->bleaching_others) }}</td>
      </tr>
      <tr>
        <td>Mercerize</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionSlip->mercerize) }}</td>
        <td>{{ number_format($productionSlip->mercerize_others ) }}</td>
        <td>{{ number_format($productionSlip->mercerize + $productionSlip->mercerize_others) }}</td>
      </tr>
      <tr> 
        <td>PadSteam</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionSlip->padsteam_pretreatment) }}</td>
        <td>{{ number_format($productionSlip->padsteam_pretreatment_others ) }}</td>
        <td>{{ number_format($productionSlip->padsteam_pretreatment + $productionSlip->padsteam_pretreatment_others) }}</td>
      </tr>
      <tr>
        <th rowspan="7">Solid Dyeing</th>
        <td>CPB</td>
        <td rowspan="7">MTR</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionSlip->cpb) }}</td>
        <td>{{ number_format($productionSlip->cpb_others) }}</td>
        <td>{{ number_format($productionSlip->cpb + $productionSlip->cpb_others) }}</td>
        <td rowspan="7">ERP</td>
      </tr>
      <tr>
        <td>Thermosol</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionSlip->thermosol) }}</td>
        <td>{{ number_format($productionSlip->thermosol_others) }}</td>
        <td>{{ number_format($productionSlip->thermosol + $productionSlip->thermosol_others) }}</td>
      </tr>
      <tr>
        <td>Custic Pad</td>
        <td>2,00,000</td>
        <td colspan="2">{{ number_format($productionSlip->custic_padding) }}</td>
        <td>{{ number_format($productionSlip->custic_padding) }}</td>
      </tr> 
      <tr>
        <td>YD Correction</td>
        <td>2,00,000</td>
        <td colspan="2">{{ number_format($productionSlip->yd_correction) }}</td>
        <td>{{ number_format($productionSlip->yd_correction) }}</td>
      </tr>
      <tr>
        <td>Jigger</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionSlip->jigger) }}</td>
        <td>{{ number_format($productionSlip->jigger_others) }}</td>
        <td>{{ number_format($productionSlip->jigger + $productionSlip->jigger_others) }}</td>
      </tr>
      <tr>
        <td>PadSteam(SD)</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionSlip->padsteam_sd) }}</td>
        <td>{{ number_format($productionSlip->padsteam_sd_others) }}</td>
        <td>{{ number_format($productionSlip->padsteam_sd + $productionSlip->padsteam_sd_others) }}</td>
      </tr>
      <tr>
        <td>Washing 3(Goller)</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionSlip->washing3_goller_sd) }}</td>
        <td>{{ number_format($productionSlip->washing3_goller_sd_others) }}</td>
        <td>{{ number_format($productionSlip->washing3_goller_sd + $productionSlip->washing3_goller_sd_others) }}</td>
      </tr>
      <tr>
        <th rowspan="2">Soft Flow</th>
        <td>Woven</td>
        <td>MTR</td>
        <td>30,000</td>
        <td>{{ number_format($productionSlip->softflow_woven) }}</td>
        <td>{{ number_format($productionSlip->softflow_woven_others) }}</td>
        <td>{{ number_format($productionSlip->softflow_woven + $productionSlip->softflow_woven_others) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Knit</td>
        <td>TON</td>
        <td>3</td>
        <td>{{ $productionSlip->softflow_knit / 1000}}</td>
        <td>{{ $productionSlip->softflow_knit_others / 1000 }}</td>
        @php ($softFlowKnitTotal = $productionSlip->softflow_knit + $productionSlip->softflow_knit_others)
        <td>{{ number_format($softFlowKnitTotal/1000) }}</td>
        <td>Manual</td>
      </tr>
      <tr>
        <td rowspan="4">Finishing</td>
        <td>Stenter</td>
        <td rowspan="4">MTR</td>
        <td>470,000</td>
        <td>{{ number_format($productionSlip->stenter) }}</td>
        <td>{{ number_format($productionSlip->stenter_others) }}</td>
        @php ($stenterTotal = $productionSlip->stenter + $productionSlip->stenter_others)
        <td>{{ number_format($stenterTotal) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Sanforizing</td>
        <td>290,000</td>
        <td>{{ number_format($productionSlip->sanforizing) }}</td>
        <td>{{ number_format($productionSlip->sanforizing_others) }}</td>
        @php ($csrTotal = $productionSlip->sanforizing + $productionSlip->sanforizing_others)
        <td>{{ number_format($csrTotal) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Peach</td>
        <td>110,000</td>
        <td>{{ number_format($productionSlip->peach) }}</td>
        <td>{{ number_format($productionSlip->peach_others) }}</td>
        @php ($peachTotal = $productionSlip->peach + $productionSlip->peach_others)
        <td>{{ number_format($peachTotal) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Airo</td>
        <td>20,000</td>
        <td colspan="2">{{ number_format($productionSlip->airo) }}</td>
        <td>{{ number_format($productionSlip->airo) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th colspan="2">Final Inspection</th>
        <td>YDS</td>
        <td>1,80,000</td>
        <td>{{ number_format($productionSlip->final_inspection)}}</td>
        <td>{{ number_format($productionSlip->final_inspection_others)}}</td>
        <td>{{ number_format($productionSlip->final_inspection + $productionSlip->final_inspection_others)}}</td>
        <td>ERP</td>
      </tr> 
      <tr>
        <td rowspan="4">MM</td>
        <td>YD(Delivery)</td>
        <td>TON</td>
        <td>10</td>
        <td colspan="2">{{ $productionSlip->yd_outparty_mm / 1000 }}</td>
        <td>{{ $productionSlip->yd_outparty_mm_total_month / 1000}}</td>            
        <td>ERP</td>
      </tr>
      <tr>
        <td>AOP(Knit)</td>
        <td>TON</td>
        <td>10</td>
        <td colspan="2">{{ $productionSlip->printing_knit_mm / 1000 }}</td>
        <td>{{ $productionSlip->printing_knit_mm_total_month / 1000 }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>AOP(Woven)</td>
        <td>YDS</td>
        <td>30,000</td>
        <td colspan="2">{{ number_format($productionSlip->printing_woven_mm) }}</td>
        <td>{{ number_format($productionSlip->printing_woven_mm_total_month) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Delivery(Woven)</td>
        <td>YDS</td>
        <td>60,00000</td>
        <td colspan="2">{{ number_format($productionSlip->fabric_delivery_mm) }}</td>
        <td>{{ number_format($productionSlip->fabric_delivery_mm_total_month) }}</td>
        <td>ERP+Manual</td>
      </tr>
    </table>
  </div>
	</div>
</div>
</body>
</html>