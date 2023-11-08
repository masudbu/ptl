@extends('dashboard.layouts.main')

@section('main')
<div class="row">
  <div class="col-md-3">
    
  </div>
  <div class="col-md-6">
    <form action="{{ route('productionReviewSearch')}}" method="POST">
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
  <div class="col-md-3">
  </div>
</div>
<div class="row">
  <h3 class="text-center">Production Date: {{$productionReview->production_date}}</h3>
  <div class="col-md-3">
    <div class="btn-group" role="group" aria-label="Basic example">
      <a href="{{ route('previousProductionRecord',['id'=>$productionReview->production_date]) }}" class="btn btn-xs btn-secondary">Previous</a>
      <a href="{{ route('nextProductionRecord',['id'=>$productionReview->production_date]) }}" class="btn btn-xs btn-secondary text-end">Next</a>
    </div>
  </div>
  <div class="col-md-6">
    
  </div>
  <div class="col-md-3">
    <div class="btn-group" role="group" aria-label="Basic example">
      <a href="{{ route('showProductionSlip',['id'=>$productionReview->id]) }}" class="btn btn-xs btn-danger" target="_blank">PDF</a>
      <!-- <a href="" class="btn btn-xs btn-success">XL</a> -->
    </div>
  </div>
  <div class="table-responsive-sm">
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
        <td colspan="2">{{ $productionReview->yarndyeing / 1000}}</td>
        <td>{{ $productionReview->yarndyeing / 1000}}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th rowspan="2">Preparatory</th>
        <td>Warping</td>
        <td rowspan="2">MTR</td>
        <td>1,80,000</td>
        <td colspan="2">{{ number_format($productionReview->warping) }}</td>
        <td>{{ number_format($productionReview->warping) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Sizing</td>
        <td>2,00,000</td>
        <td colspan="2">{{ number_format($productionReview->sizing) }}</td>
        <td>{{ number_format($productionReview->sizing) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th>Weaving</th>
        <td>Loom</td>
        <td>MTR</td>
        <td>1,18,000</td>
        <td colspan="2">{{ number_format($productionReview->weaving) }}</td>
        <td>{{ number_format($productionReview->weaving) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th colspan="2">Greige Inspection</th>
        <td>MTR</td>
        <td>1,00,000</td>
        <td>{{ number_format($productionReview->greige_inspection) }}</td>
        <td>{{ number_format($productionReview->greige_inspection_outparty) }}</td>
        <td>{{ number_format($productionReview->greige_inspection + $productionReview->greige_inspection_outparty) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th rowspan="4">Pretreatment</th>
        <td>Singeing</td>
        <td rowspan="4">MTR</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionReview->pretreatment) }}</td>
        <td>{{ number_format($productionReview->pretreatment_others) }}</td>
        <td>{{ number_format($productionReview->pretreatment + $productionReview->pretreatment_others)}}</td>
        <td rowspan="4">ERP</td>
      </tr>
      <tr>
        <td>Bleaching</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionReview->bleaching) }}</td>
        <td>{{ number_format($productionReview->bleaching_others) }}</td>
        <td>{{ number_format($productionReview->bleaching + $productionReview->bleaching_others) }}</td>
      </tr>
      <tr>
        <td>Mercerize</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionReview->mercerize) }}</td>
        <td>{{ number_format($productionReview->mercerize_others ) }}</td>
        <td>{{ number_format($productionReview->mercerize + $productionReview->mercerize_others) }}</td>
      </tr>
      <tr> 
        <td>PadSteam</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionReview->padsteam_pretreatment) }}</td>
        <td>{{ number_format($productionReview->padsteam_pretreatment_others ) }}</td>
        <td>{{ number_format($productionReview->padsteam_pretreatment + $productionReview->padsteam_pretreatment_others) }}</td>
      </tr>
      <tr>
        <th rowspan="7">Solid Dyeing</th>
        <td>CPB</td>
        <td rowspan="7">MTR</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionReview->cpb) }}</td>
        <td>{{ number_format($productionReview->cpb_others) }}</td>
        <td>{{ number_format($productionReview->cpb + $productionReview->cpb_others) }}</td>
        <td rowspan="7">ERP</td>
      </tr>
      <tr>
        <td>Thermosol</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionReview->thermosol) }}</td>
        <td>{{ number_format($productionReview->thermosol_others) }}</td>
        <td>{{ number_format($productionReview->thermosol + $productionReview->thermosol_others) }}</td>
      </tr>
      <tr>
        <td>Custic Pad</td>
        <td>2,00,000</td>
        <td colspan="2">{{ number_format($productionReview->custic_padding) }}</td>
        <td>{{ number_format($productionReview->custic_padding) }}</td>
      </tr> 
      <tr>
        <td>YD Correction</td>
        <td>2,00,000</td>
        <td colspan="2">{{ number_format($productionReview->yd_correction) }}</td>
        <td>{{ number_format($productionReview->yd_correction) }}</td>
      </tr>
      <tr>
        <td>Jigger</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionReview->jigger) }}</td>
        <td>{{ number_format($productionReview->jigger_others) }}</td>
        <td>{{ number_format($productionReview->jigger + $productionReview->jigger_others) }}</td>
      </tr>
      <tr>
        <td>PadSteam(SD)</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionReview->padsteam_sd) }}</td>
        <td>{{ number_format($productionReview->padsteam_sd_others) }}</td>
        <td>{{ number_format($productionReview->padsteam_sd + $productionReview->padsteam_sd_others) }}</td>
      </tr>
      <tr>
        <td>Washing 3(Goller)</td>
        <td>2,00,000</td>
        <td>{{ number_format($productionReview->washing3_goller_sd) }}</td>
        <td>{{ number_format($productionReview->washing3_goller_sd_others) }}</td>
        <td>{{ number_format($productionReview->washing3_goller_sd + $productionReview->washing3_goller_sd_others) }}</td>
      </tr>
      <tr>
        <th rowspan="2">Soft Flow</th>
        <td>Woven</td>
        <td>MTR</td>
        <td>30,000</td>
        <td>{{ number_format($productionReview->softflow_woven) }}</td>
        <td>{{ number_format($productionReview->softflow_woven_others) }}</td>
        <td>{{ number_format($productionReview->softflow_woven + $productionReview->softflow_woven_others) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Knit</td>
        <td>TON</td>
        <td>3</td>
        <td>{{ number_format($productionReview->softflow_knit)}}</td>
        <td>{{ number_format($productionReview->softflow_knit_others) }}</td>
        @php ($softFlowKnitTotal = $productionReview->softflow_knit + $productionReview->softflow_knit_others)
        <td>{{ number_format($softFlowKnitTotal/1000) }}</td>
        <td>Manual</td>
      </tr>
      <tr>
        <td rowspan="4">Finishing</td>
        <td>Stenter</td>
        <td rowspan="4">MTR</td>
        <td>470,000</td>
        <td>{{ number_format($productionReview->stenter) }}</td>
        <td>{{ number_format($productionReview->stenter_others) }}</td>
        @php ($stenterTotal = $productionReview->stenter + $productionReview->stenter_others)
        <td>{{ number_format($stenterTotal) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Sanforizing</td>
        <td>290,000</td>
        <td>{{ number_format($productionReview->sanforizing) }}</td>
        <td>{{ number_format($productionReview->sanforizing_others) }}</td>
        @php ($csrTotal = $productionReview->sanforizing + $productionReview->sanforizing_others)
        <td>{{ number_format($csrTotal) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Peach</td>
        <td>110,000</td>
        <td>{{ number_format($productionReview->peach) }}</td>
        <td>{{ number_format($productionReview->peach_others) }}</td>
        @php ($peachTotal = $productionReview->peach + $productionReview->peach_others)
        <td>{{ number_format($peachTotal) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Airo</td>
        <td>20,000</td>
        <td colspan="2">{{ number_format($productionReview->airo) }}</td>
        <td>{{ number_format($productionReview->airo) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <th colspan="2">Final Inspection</th>
        <td>YDS</td>
        <td>1,80,000</td>
        <td>{{ number_format($productionReview->final_inspection)}}</td>
        <td>{{ number_format($productionReview->final_inspection_others)}}</td>
        <td>{{ number_format($productionReview->final_inspection + $productionReview->final_inspection_others)}}</td>
        <td>ERP</td>
      </tr> 
      <tr>
        <td rowspan="4">MM</td>
        <td>YD(Delivery)</td>
        <td>TON</td>
        <td>10</td>
        <td colspan="2">{{ $productionReview->yd_outparty_mm / 1000 }}</td>
        <td>{{ $productionReview->yd_outparty_mm_total_month / 1000}}</td>            
        <td>ERP</td>
      </tr>
      <tr>
        <td>AOP(Knit)</td>
        <td>TON</td>
        <td>10</td>
        <td colspan="2">{{ $productionReview->printing_knit_mm / 1000 }}</td>
        <td>{{ $productionReview->printing_knit_mm_total_month / 1000 }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>AOP(Woven)</td>
        <td>YDS</td>
        <td>30,000</td>
        <td colspan="2">{{ number_format($productionReview->printing_woven_mm) }}</td>
        <td>{{ number_format($productionReview->printing_woven_mm_total_month) }}</td>
        <td>ERP</td>
      </tr>
      <tr>
        <td>Delivery(Woven)</td>
        <td>YDS</td>
        <td>60,00000</td>
        <td colspan="2">{{ number_format($productionReview->fabric_delivery_mm) }}</td>
        <td>{{ number_format($productionReview->fabric_delivery_mm_total_month) }}</td>
        <td>ERP+Manual</td>
      </tr>
    </table>
  </div>
</div>
</div>
@endsection
