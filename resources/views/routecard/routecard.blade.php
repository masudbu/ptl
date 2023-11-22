@extends('dashboard.layouts.main')
@section('main')
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="order_no">Dispo</label>
      <input type="text" name="order_no" id="search" class="form-control" onkeyup="myFunction()" placeholder="109288">
    </div>
    <h2 class="text-center">Paramount Textile PLC</h2>
    <h3 class="text-center">Process Route Card - Solid Dyeing</h3>
    <div class="table-responsive" id="homeDashboard">
        <table class="table table-bordered table-hover border-dark">
          <tr>
            <td>Dispo No</td>
            <td id="dispo_no"></td>
            <td rowspan="3">Batch No</td>
            <td>Construction</td>
            <td id="construction"></td>
          </tr>
          <tr>
            <td>Dispo Qty</td>
            <td id="dispo_qty"></td>
            <td>Finish Type</td>
            <td id="finish_type"></td>
          </tr>
          <tr>  
            <td>Customer</td>
            <td id="customer"></td>
            <td>Match To</td>
            <td></td>
          </tr>
          <tr>
            <td>Buyer</td>
            <td id="buyer_name"></td>
            <td rowspan="3">Quantity</td>
            <td>Finish Width</td>
            <td id="finish_width"></td>
          </tr>
          <tr>
            <td>Composition</td>
            <td id="composition"></td>
            <td>Shade</td>
            <td id="shade"></td>
          </tr>
          <tr>
            <td>Fabric Type</td>
            <td id="fabric_type"></td>
            <td>Delivery Date</td>
            <td></td>
          </tr>
          <tr>
            <td>Special Instruction:</td>
            <td colspan="4"></td>
          </tr>
        </table>
        <table class="table table-bordered table-hover border-dark">
          <thead>
            <th>Process Name</th>
            <th>Recipe No</th>
            <th>In</th>
            <th>Out</th>
            <th>Shift</th>
            <th>Before</th>
            <th>After</th>
            <th>QTY</th>
            <th>Before</th>
            <th>After</th>
            <th>Re-Process</th>
            <th>REMARKS</th>
            <th>Machine</th>
            <th>Shift</th>
            <th>Comments</th>
            <th>Name</th>
          </thead>
          <tr>
            <td>GREIGE ISSUE</td>
            <td colspan="15"></td>
          </tr>
           <tr>
            <td>Singeing & Desizing</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
           <tr>
            <td>ROTATION</td>
            <td colspan="2">START</td>
            <td colspan="13">END</td>
          </tr>
           <tr>
            <td>SCOURING & BLEACHING</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
           <tr>
            <td>MERCERIZING</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
           <tr>
            <td>QC CHECK</td>
            <td colspan="15"></td>
          </tr>
           <tr>
            <td>STENTERING</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
           <tr>
            <td>PEACH/SUEDING/BRUSHING</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
           <tr>
            <td>WASHING</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
           <tr>
            <td>STENTERING</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
           <tr>
            <td>THERMOSOL/CPB/PADSTEAM</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
           <tr>
            <td>QC CHECK</td>
            <td colspan="15"></td>
          </tr>
           <tr>
            <td>FINISHING</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
           <tr>
            <td>QC CHECK</td>
            <td colspan="15"></td>
          </tr>
           <tr>
            <td>SANFORIZING</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
           <tr>
            <td>QC CHECK</td>
            <td colspan="15"></td>
          </tr>
          <tr>
            <td>FINAL INSPECTION</td>
            <td colspan="15"></td>
          </tr>
          <tr>
            <td>SHADE BATCH</td>
            <td colspan="15"></td>
          </tr>
        </table>
  </div>
  <div class="col-md-2">
    
  </div>
  <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <th>SL</th>
          <th>Batch No</th>
          <th>#</th>
          <tr>
            <td>1</td>
            <td>105520</td>
            <td><a href="{{route('routecardprint',['id'=>'109288'])}}" target="__blank">Print</a></td>
          </tr>
        </thead>
      </table>
  </div>
  <div class="col-md-2">
    
  </div>
</div>
<script type="text/javascript">

 function myFunction() {
  var x = document.getElementById("search").value;
  $.ajax({
    type : 'get',
      url : '{{URL::to('search')}}',
      data:{'search':x},
      success:function(data){
      $('#buyer_name').html(data.End_Buyer);
      $('#construction').html(data.construction);
      $('#customer').html(data.garments_name);
      $('#dispo_no').html(data.Dispo_No);
      $('#dispo_qty').html(data.dispo_grey_qty);
      $('#finish_type').html(data.finish_type);
      $('#finish_width').html(data.finish_width);
      $('#composition').html(data.composition);
      $('#fabric_type').html(data.fabric_type);
      
      }
    });
}
</script>
@endsection