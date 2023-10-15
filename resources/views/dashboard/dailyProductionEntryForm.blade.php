@extends('dashboard.layouts.main')

@section('main')
<form action="{{route('dailyProductionStore')}}" method="POST">
    @csrf
    <div class="row">
        <h5 class="text-center">Daily Production Entry</h5> 
        <div class="col-md-3">
            <div class="form-group">
                <label for="production_date" class="form-label">Production Date</label>
                <input type="date" class="form-control" id="production_date" name="production_date">
            </div>
            <div class="form-group">
                <label for="yarndyeing" class="form-label">Yarn Dyeing</label>
                <input type="number" class="form-control" id="yarndyeing" name="yarndyeing" placeholder="Enter Yarn Dyeing Production" value="{{old('yarndyeing')}}">
                @error('yarndyeing')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
              </div>
          <div class="form-group">
            <label for="warping" class="form-label">Warping</label>
            <input type="number" class="form-control" id="warping" name="warping" placeholder="Enter Warping Production" value="{{old('warping')}}">
            @error('warping')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="sizing" class="form-label">Sizing</label>
            <input type="number" class="form-control" id="sizing" name="sizing" placeholder="Enter Sizing Production" value="{{old('sizing')}}">
            @error('sizing')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="weaving" class="form-label">Weaving</label>
            <input type="number" class="form-control" id="weaving" name="weaving" placeholder="Enter Weaving Production" value="{{old('weaving')}}">
            @error('weaving')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="Pretreatment" class="form-label">Sing/Desize</label>
            <input type="number" class="form-control" id="Pretreatment" name="pretreatment" placeholder="Enter Pretreatment Production" value="{{old('pretreatment')}}">
          </div>
          <div class="form-group">
            <label for="pretreatment_others" class="form-label">Sing/Desize(Others)</label>
            <input type="number" class="form-control" id="pretreatment_others" name="pretreatment_others" placeholder="Enter Pretreatment Others" value="{{old('pretreatment_others')}}">
          </div>
          <div class="form-group">
            <label for="bleaching" class="form-label">Bleaching</label>
            <input type="number" class="form-control" id="bleaching" name="bleaching" placeholder="Enter bleaching" value="{{old('bleaching')}}">
          </div>
          <div class="form-group">
            <label for="bleaching_others" class="form-label">Bleaching(Others)</label>
            <input type="number" class="form-control" id="bleaching_others" name="bleaching_others" placeholder="Enter bleaching_others" value="{{old('bleaching_others')}}">
          </div>
          <div class="form-group">
            <label for="mercerize" class="form-label">Mercerize</label>
            <input type="number" class="form-control" id="mercerize" name="mercerize" placeholder="Enter mercerize" value="{{old('mercerize')}}">
          </div>
          <div class="form-group">
            <label for="mercerize_others" class="form-label">Mercerize(Others)</label>
            <input type="number" class="form-control" id="mercerize_others" name="mercerize_others" placeholder="Enter mercerize others" value="{{old('mercerize_others')}}">
          </div>
          <div class="form-group">
            <label for="padsteam_pretreatment" class="form-label">PadSteam(PT)</label>
            <input type="number" class="form-control" id="padsteam_pretreatment" name="padsteam_pretreatment" placeholder="Enter padsteam" value="{{old('padsteam_pretreatment')}}">
          </div>
          <div class="form-group">
            <label for="padsteam_pretreatment_others" class="form-label">PadSteam(PT-Others)</label>
            <input type="number" class="form-control" id="padsteam_pretreatment_others" name="padsteam_pretreatment_others" placeholder="Enter Pad Others" value="{{old('padsteam_pretreatment_others')}}">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="thermosol" class="form-label">Thermosol</label>
            <input type="number" class="form-control" id="thermosol" name="thermosol" placeholder="Enter Thermosol Production" value="{{old('thermosol')}}">
          </div>
          <div class="form-group">
            <label for="thermosol_others" class="form-label">Thermosol(Others)</label>
            <input type="number" class="form-control" id="thermosol_others" name="thermosol_others" placeholder="Enter Thermosol Others" value="{{old('thermosol_others')}}">
          </div>
          <div class="form-group">
            <label for="cpb" class="form-label">CPB</label>
            <input type="number" class="form-control" id="cpb" name="cpb" placeholder="Enter cpb" value="{{old('cpb')}}">
          </div>
          <div class="form-group">
            <label for="cpb_others" class="form-label">CPB(Others)</label>
            <input type="number" class="form-control" id="cpb_others" name="cpb_others" placeholder="Enter Others" value="{{old('cpb_others')}}">
          </div>
          <div class="form-group">
            <label for="custic_padding" class="form-label">Custic Padding</label>
            <input type="number" class="form-control" id="custic_padding" name="custic_padding" placeholder="Enter Custic Padding" value="{{old('custic_padding')}}">
          </div>
          <div class="form-group">
            <label for="yd_correction" class="form-label"> YD Correction </label>
            <input type="number" class="form-control" id="yd_correction" name="yd_correction" placeholder="Enter YD Correction" value="{{old('yd_correction')}}">
          </div>
            <div class="form-group">
                <label for="jigger" class="form-label"> Jigger </label>
                <input type="number" class="form-control" id="jigger" name="jigger" placeholder="Enter Jigger Dyeing" value="{{old('jigger')}}">
            </div>
            <div class="form-group">
                <label for="jigger_others" class="form-label"> Jigger(Others) </label>
                <input type="number" class="form-control" id="jigger_others" name="jigger_others" placeholder="Enter Others" value="{{old('jigger_others')}}">
            </div>
            <div class="form-group">
                <label for="padsteam_sd" class="form-label"> PadSteam(SD) </label>
                <input type="number" class="form-control" id="padsteam_sd" name="padsteam_sd" placeholder="Enter Padsteam" value="{{old('padsteam_sd')}}">
            </div>
            <div class="form-group">
                <label for="padsteam_sd_others" class="form-label"> PadSteam(Others) </label>
                <input type="number" class="form-control" id="padsteam_sd_others" name="padsteam_sd_others" placeholder="Enter Others" value="{{old('padsteam_sd_others')}}">
            </div>
            <div class="form-group">
                <label for="washing3_goller_sd" class="form-label"> Washing 3</label>
                <input type="number" class="form-control" id="washing3_goller_sd" name="washing3_goller_sd" placeholder="Enter Wash" value="{{old('washing3_goller_sd')}}">
            </div>
            <div class="form-group">
                <label for="washing3_goller_sd_others" class="form-label"> Washing 3</label>
                <input type="number" class="form-control" id="washing3_goller_sd_others" name="washing3_goller_sd_others" placeholder="Enter Others" value="{{old('washing3_goller_sd_others')}}">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="softflow_woven" class="form-label"> SoftFlow(
                Woven) </label>
                <input type="number" class="form-control" id="softflow_woven" name="softflow_woven" placeholder="SoftFlow Woven" value="{{old('softflow_woven')}}">
            </div>
            <div class="form-group">
                <label for="softflow_woven_others" class="form-label"> SoftFlow(
                Woven) </label>
                <input type="number" class="form-control" id="softflow_woven_others" name="softflow_woven_others" placeholder="SoftFlow Others" value="{{old('softflow_woven_others')}}">
            </div>
            <div class="form-group">
                <label for="softflow_knit" class="form-label"> SoftFlow(
                Knit) </label>
                <input type="number" class="form-control" id="softflow_knit" name="softflow_knit" placeholder="SoftFlow Knit" value="{{old('softflow_knit')}}">
            </div>
            <div class="form-group">
                <label for="softflow_knit_others" class="form-label"> SoftFlow(
                Knit) </label>
                <input type="number" class="form-control" id="softflow_knit_others" name="softflow_knit_others" placeholder="SoftFlow Others" value="{{old('softflow_knit_others')}}">
            </div>
            
            <div class="form-group">
                <label for="greige_inspection" class="form-label"> Greige Inspection</label>
                <input type="number" class="form-control" id="greige_inspection" name="greige_inspection" placeholder="Greige Ins" value="{{old('greige_inspection')}}">
            </div>
            <div class="form-group">
                <label for="greige_inspection_outparty" class="form-label">Ins Outparty</label>
                <input type="number" class="form-control" id="greige_inspection_outparty" name="greige_inspection_outparty" placeholder="Greige Outparty" value="{{old('greige_inspection_outparty')}}">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="final_inspection" class="form-label"> Final Inspection</label>
                <input type="number" class="form-control" id="final_inspection" name="final_inspection" placeholder="Final Ins" value="{{old('final_inspection')}}">
            </div>
            <div class="form-group">
                <label for="final_inspection_others" class="form-label"> Final Inspection</label>
                <input type="number" class="form-control" id="final_inspection_others" name="final_inspection_others" placeholder="Final Others" value="{{old('final_inspection_others')}}">
            </div>
            
            <div class="form-group">
                <label for="yd_outparty_mm" class="form-label">YD Outparty</label>
                <input type="number" class="form-control" id="yd_outparty_mm" name="yd_outparty_mm" placeholder="Outparty Delivery" value="{{old('yd_outparty_mm')}}">
            </div>
            <div class="form-group">
                <label for="yd_outparty_mm_total_month" class="form-label">Total(Month)</label>
                <input type="number" class="form-control" id="yd_outparty_mm_total_month" name="yd_outparty_mm_total_month" placeholder="Delivery Total" value="{{old('yd_outparty_mm_total_month')}}">
            </div>
            <div class="form-group">
                <label for="printing_knit_mm" class="form-label">AOP(KNIT)</label>
                <input type="number" class="form-control" id="printing_knit_mm" name="printing_knit_mm" placeholder="Delivery Knit" value="{{old('printing_knit_mm')}}">
            </div>
            <div class="form-group">
                <label for="printing_knit_mm_total_month" class="form-label">Total(KNIT)</label>
                <input type="number" class="form-control" id="printing_knit_mm_total_month" name="printing_knit_mm_total_month" placeholder="Delivery Knit" value="{{old('printing_knit_mm_total_month')}}">
            </div>
            <div class="form-group">
                <label for="printing_woven_mm" class="form-label">AOP(Woven)</label>
                <input type="number" class="form-control" id="printing_woven_mm" name="printing_woven_mm" placeholder="Delivery Woven" value="{{old('printing_woven_mm')}}">
            </div>
            <div class="form-group">
                <label for="printing_woven_mm_total_month" class="form-label">Total(Woven)</label>
                <input type="number" class="form-control" id="printing_woven_mm_total_month" name="printing_woven_mm_total_month" placeholder="Delivery Woven" value="{{old('printing_woven_mm_total_month')}}">
            </div>
            <div class="form-group">
                <label for="fabric_delivery_mm" class="form-label">Fabric Delivery</label>
                <input type="number" class="form-control" id="fabric_delivery_mm" name="fabric_delivery_mm" placeholder="Fabric Delivery" value="{{old('fabric_delivery_mm')}}">
            </div>
            <div class="form-group">
                <label for="fabric_delivery_mm_total_month" class="form-label">Total Delivery</label>
                <input type="number" class="form-control" id="fabric_delivery_mm_total_month" name="fabric_delivery_mm_total_month" placeholder="Total Delivery" value="{{old('fabric_delivery_mm_total_month')}}">
            </div>
        </div>
        <div class="col-md-12 text-center">
            <br/>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
