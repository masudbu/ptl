@extends('dashboard.layouts.main')
@section('main')
<div class="row">
  <div class="col-md-3">
    
  </div>
  <div class="col-md-6">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Add
    </button>
    <!-- Modal -->
    <div class="modal fade modal-dialog modal-dialog-scrollable" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Finishing To Final</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
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
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="transfer_date">Date & Time</label>
                    <input type="datetime-local" name="transfer_date" class="form-control">
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
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
  </div>
</div>
<script type="text/javascript">

 function myFunction() {
  let x = document.getElementById("search").value;
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
