@extends('dashboard.layouts.main')

@section('main')
<form action="{{route('dailyProductionUpdate')}}" method="POST">
    @csrf
    <div class="row">
        <h5 class="text-center"> 
            Production Edit Date - {{ $productionShow->production_date }}
        </h5> 
            <div class="col-md-3">
              <div class="form-group">
                <label for="yarndyeing" class="form-label">Yarn Dyeing</label>
                <input type="number" class="form-control" id="yarndyeing" name="yarndyeing" value="{{ $productionShow->yarndyeing }}">
              </div>
              <div class="form-group">
                <label for="warping" class="form-label">Warping</label>
                <input type="number" class="form-control" id="warping" name="warping" value="{{ $productionShow->warping }}">
              </div>
              <div class="form-group">
                <label for="sizing" class="form-label">Sizing</label>
                <input type="number" class="form-control" id="sizing" name="sizing" value="{{ $productionShow->sizing }}">
              </div>
              <div class="form-group">
                <label for="weaving" class="form-label">Weaving</label>
                <input type="number" class="form-control" id="weaving" name="weaving" value="{{ $productionShow->weaving }}">
              </div>
              <div class="form-group">
                <label for="Pretreatment" class="form-label">Pretreatment</label>
                <input type="number" class="form-control" id="Pretreatment" name="pretreatment" value="{{ $productionShow->pretreatment }}">
              </div>
              <div class="form-group">
                <label for="pretreatment_others" class="form-label">Pretreatment(Others)</label>
                <input type="number" class="form-control" id="pretreatment_others" name="pretreatment_others" value="{{ $productionShow->pretreatment_others }}">
              </div>
              <div class="form-group">
                <label for="bleaching" class="form-label">Bleaching</label>
                <input type="number" class="form-control" id="bleaching" name="bleaching" value="{{$productionShow->bleaching}}">
              </div>
              <div class="form-group">
                <label for="bleaching_others" class="form-label">Bleaching(Others)</label>
                <input type="number" class="form-control" id="bleaching_others" name="bleaching_others"  value="{{$productionShow->bleaching_others}}">
              </div>
              <div class="form-group">
                <label for="mercerize" class="form-label">Mercerize</label>
                <input type="number" class="form-control" id="mercerize" name="mercerize" value="{{$productionShow->mercerize}}">
              </div>
              <div class="form-group">
                <label for="mercerize_others" class="form-label">Mercerize(Others)</label>
                <input type="number" class="form-control" id="mercerize_others" name="mercerize_others" value="{{$productionShow->mercerize_others}}">
              </div>
              <div class="form-group">
                <label for="padsteam_pretreatment" class="form-label">PadSteam(PT)</label>
                <input type="number" class="form-control" id="padsteam_pretreatment" name="padsteam_pretreatment" value="{{$productionShow->padsteam_pretreatment}}">
              </div>
              <div class="form-group">
                <label for="padsteam_pretreatment_others" class="form-label">PadSteam(PT-Others)</label>
                <input type="number" class="form-control" id="padsteam_pretreatment_others" name="padsteam_pretreatment_others" placeholder="Enter Pad Others" value="{{$productionShow->padsteam_pretreatment_others}}">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="thermosol" class="form-label">Thermosol</label>
                <input type="number" class="form-control" id="thermosol" name="thermosol" value="{{ $productionShow->thermosol }}">
              </div>
              <div class="form-group">
                <label for="thermosol_others" class="form-label">Thermosol(Others)</label>
                <input type="number" class="form-control" id="thermosol_others" name="thermosol_others" value="{{ $productionShow->thermosol_others }}">
              </div>
              <div class="form-group">
                <label for="cpb" class="form-label">CPB</label>
                <input type="number" class="form-control" id="cpb" name="cpb" value="{{ $productionShow->cpb }}">
              </div>
              <div class="form-group">
                <label for="cpb_others" class="form-label">CPB(Others)</label>
                <input type="number" class="form-control" id="cpb_others" name="cpb_others" value="{{ $productionShow->cpb_others }}">
              </div>
              <div class="form-group">
                <label for="custic_padding" class="form-label">Custic Padding</label>
                <input type="number" class="form-control" id="custic_padding" name="custic_padding" value="{{ $productionShow->custic_padding }}">
              </div>
              <div class="form-group">
                <label for="yd_correction" class="form-label"> YD Correction </label>
                <input type="number" class="form-control" id="yd_correction" name="yd_correction" value="{{ $productionShow->yd_correction }}">
              </div>
                <div class="form-group">
                    <label for="jigger" class="form-label"> Jigger </label>
                    <input type="number" class="form-control" id="jigger" name="jigger" value="{{ $productionShow->jigger }}">
                </div>
                 <div class="form-group">
                    <label for="jigger_others" class="form-label"> Jigger(Others) </label>
                    <input type="number" class="form-control" id="jigger_others" name="jigger_others" value="{{ $productionShow->jigger_others }}">
                </div>
                <div class="form-group">
                    <label for="padsteam_sd" class="form-label"> PadSteam(SD) </label>
                    <input type="number" class="form-control" id="padsteam_sd" name="padsteam_sd" value="{{ $productionShow->padsteam_sd }}">
                </div>
                <div class="form-group">
                    <label for="padsteam_sd_others" class="form-label"> PadSteam(Others) </label>
                    <input type="number" class="form-control" id="padsteam_sd_others" name="padsteam_sd_others" value="{{$productionShow->padsteam_sd_others}}">
                </div>
                <div class="form-group">
                    <label for="washing3_goller_sd" class="form-label"> Washing 3</label>
                    <input type="number" class="form-control" id="washing3_goller_sd" name="washing3_goller_sd" value="{{$productionShow->washing3_goller_sd}}">
                </div>
                <div class="form-group">
                    <label for="washing3_goller_sd_others" class="form-label"> Washing 3</label>
                    <input type="number" class="form-control" id="washing3_goller_sd_others" name="washing3_goller_sd_others" value="{{$productionShow->washing3_goller_sd_others}}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="softflow_woven" class="form-label"> SoftFlow(
                    Woven) </label>
                    <input type="number" class="form-control" id="softflow_woven" name="softflow_woven" value="{{$productionShow->softflow_woven}}">
                </div>
                <div class="form-group">
                    <label for="softflow_woven_others" class="form-label"> SoftFlow(
                    Woven) </label>
                    <input type="number" class="form-control" id="softflow_woven_others" name="softflow_woven_others" value="{{$productionShow->softflow_woven_others}}">
                </div>
                 <div class="form-group">
                    <label for="softflow_knit" class="form-label"> SoftFlow(
                    Knit) </label>
                    <input type="number" class="form-control" id="softflow_knit" name="softflow_knit" value="{{$productionShow->softflow_knit}}">
                </div>
                <div class="form-group">
                    <label for="softflow_knit_others" class="form-label"> SoftFlow(
                    Knit) </label>
                    <input type="number" class="form-control" id="softflow_knit_others" name="softflow_knit_others" value="{{$productionShow->softflow_knit_others}}">
                </div>

                <!--This section start for finishing-->

                <div class="form-group">
                    <label for="stenter" class="form-label"> Stenter </label>
                    <input type="number" class="form-control" id="stenter" name="stenter" value="{{$productionShow->stenter}}">
                </div>
                <div class="form-group">
                    <label for="stenter_others" class="form-label"> Stenter(others) </label>
                    <input type="number" class="form-control" id="stenter_others" name="stenter_others" value="{{$productionShow->stenter_others}}">
                </div>
                <div class="form-group">
                    <label for="sanforizing" class="form-label"> CSR </label>
                    <input type="number" class="form-control" id="sanforizing" name="sanforizing" value="{{$productionShow->sanforizing}}">
                </div>
                <div class="form-group">
                    <label for="sanforizing_others" class="form-label"> CSR(Others) </label>
                    <input type="number" class="form-control" id="sanforizing_others" name="sanforizing_others" value="{{$productionShow->sanforizing_others}}">
                </div>
                <div class="form-group">
                    <label for="peach" class="form-label"> Peach </label>
                    <input type="number" class="form-control" id="peach" name="peach" value="{{$productionShow->peach}}">
                </div>
                <div class="form-group">
                    <label for="peach_others" class="form-label"> Peach(others) </label>
                    <input type="number" class="form-control" id="peach_others" name="peach_others" value="{{$productionShow->peach_others}}">
                </div>
                <div class="form-group">
                    <label for="airo" class="form-label"> Airo </label>
                    <input type="number" class="form-control" id="airo" name="airo" value="{{$productionShow->airo}}">
                </div>

                <div class="form-group">
                    <label for="greige_inspection" class="form-label"> Greige Inspection</label>
                    <input type="number" class="form-control" id="greige_inspection" name="greige_inspection" value="{{$productionShow->greige_inspection}}">
                </div>
                <div class="form-group">
                    <label for="greige_inspection_outparty" class="form-label">Ins Outparty</label>
                    <input type="number" class="form-control" id="greige_inspection_outparty" name="greige_inspection_outparty" value="{{$productionShow->greige_inspection_outparty}}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="final_inspection" class="form-label"> Final Inspection</label>
                    <input type="number" class="form-control" id="final_inspection" name="final_inspection" value="{{$productionShow->final_inspection}}">
                </div>
               <div class="form-group">
                    <label for="final_inspection_others" class="form-label"> Final Inspection</label>
                    <input type="number" class="form-control" id="final_inspection_others" name="final_inspection_others" value="{{$productionShow->final_inspection_others}}">
                </div>
                <div class="form-group">
                    <label for="yd_outparty_mm" class="form-label">YD Outparty</label>
                    <input type="number" class="form-control" id="yd_outparty_mm" name="yd_outparty_mm" value="{{$productionShow->yd_outparty_mm}}">
                </div>
                <div class="form-group">
                    <label for="yd_outparty_mm_total_month" class="form-label">Total(Month)</label>
                    <input type="number" class="form-control" id="yd_outparty_mm_total_month" name="yd_outparty_mm_total_month" value="{{$productionShow->yd_outparty_mm_total_month}}">
                </div>
                <div class="form-group">
                    <label for="printing_knit_mm" class="form-label">AOP(KNIT)</label>
                    <input type="number" class="form-control" id="printing_knit_mm" name="printing_knit_mm" value="{{$productionShow->printing_knit_mm}}">
                </div>
                <div class="form-group">
                    <label for="printing_knit_mm_total_month" class="form-label">Total(KNIT)</label>
                    <input type="number" class="form-control" id="printing_knit_mm_total_month" name="printing_knit_mm_total_month" value="{{$productionShow->printing_knit_mm_total_month}}">
                </div>
                <div class="form-group">
                    <label for="printing_woven_mm" class="form-label">AOP(Woven)</label>
                    <input type="number" class="form-control" id="printing_woven_mm" name="printing_woven_mm" value="{{$productionShow->printing_woven_mm}}">
                </div>
                <div class="form-group">
                    <label for="printing_woven_mm_total_month" class="form-label">Total(Woven)</label>
                    <input type="number" class="form-control" id="printing_woven_mm_total_month" name="printing_woven_mm_total_month" value="{{$productionShow->printing_woven_mm_total_month}}">
                </div>
                <div class="form-group">
                    <label for="fabric_delivery_mm" class="form-label">Fabric Delivery</label>
                    <input type="number" class="form-control" id="fabric_delivery_mm" name="fabric_delivery_mm" value="{{$productionShow->fabric_delivery_mm}}">
                </div>
                <div class="form-group">
                    <label for="fabric_delivery_mm_total_month" class="form-label">Total Delivery</label>
                    <input type="number" class="form-control" id="fabric_delivery_mm_total_month" name="fabric_delivery_mm_total_month" value="{{$productionShow->fabric_delivery_mm_total_month}}">
                </div>
            </div>
            <div class="col-md-2">
                
            </div>
            <div class="col-md-12 text-center">
                <br/>
                <input type="hidden" name="hidden_id" value="{{ $productionShow->id }}">
                <button type="submit" class="btn btn-primary">Update Production</button>

            </div>
        </div>
</form>
@endsection
