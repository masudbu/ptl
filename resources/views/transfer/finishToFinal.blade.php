@extends('dashboard.layouts.main')
@section('main')
<div class="row">
  <div class="col-md-2">
    
  </div>
  <div class="col-md-8">
    <h2 class="text-center">Finishing To Final Inspection</h2>
    <form action="" method="psot">
        @csrf
      <div class="row">
        <div class="col-md-9">
          <div class="form-group">
            <label>Transfer Type</label>
            <input type="text" name="dispo_no" placeholder="Finishing To Final Inspection" class="form-control" disabled>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="buyer_name">Buyer</label>
            <input type="text" name="buyer_name" id="buyer_name" class="form-control" disabled>
        </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="dispo_grey_qty">Required Greige(Meter)</label>
            <input type="number" name="dispo_grey_qty" id="dispo_grey_qty" class="form-control" disabled>
        </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="construction">Construction</label>
            <input type="text" name="construction" id="construction" class="form-control" disabled>
        </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="order_type">Order Type</label>
            <input type="text" name="order_type" id="order_type" class="form-control" disabled>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="order_type">Transfer Type</label>
            <select name="" class="form-control">
              <option selected>Fresh</option>
              <option =InsBack>Inspection Back</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="transfer_date">Date & Time</label>
           <!--  <input type="datetime-local" name="transfer_date" class="form-control"> -->
            <input type="date" name="transfer_date" class="form-control">
        </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="dispo_no">Dispo</label>
            <input type="text" name="dispo_no" id="search" class="form-control" onkeyup="myFunction()">
        </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="batch_no">Batch No</label>
            <input type="text" name="batch_no" class="form-control">
        </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="fabric_qty">Qty</label>
            <input type="text" name="fabric_qty" class="form-control">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="book_no">Book No</label>
            <input type="text" name="book_no" class="form-control" placeholder="Enter Book No">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="batcher_no">Batcher/Trolly</label>
            <input type="text" name="batcher_no" class="form-control">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="last_process">Last Process</label>
            <select class="form-control" required name="last_process" id="">
                <option value="">Select one</option>
                @if(isset($processes))
                @foreach($processes as $value)
                <option value="{{$value->id}}">{{$value->process_name}}</option>
                @endforeach
                @endif
            </select>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="remarks">Remarks</label>
            <input type="text" name="remarks" class="form-control">
          </div>
        </div>
      </div>
    </form>
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
        //var obj = JSON.parse(data);
        //console.log(data);
      $('#buyer_name').val(data.buyer);
      $('#construction').val(data.construction);
      $('#order_type').val(data.order_type);
      $('#dispo_grey_qty').val(data.dispo_grey_qty);
      }
    });
}
</script>
@endsection
