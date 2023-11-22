@extends('dashboard.layouts.main')
@section('main')
<div class="row">
  <div class="col-md-2">
    
  </div>
  <div class="col-md-8">
    <h2 class="text-center">Finishing To Final Inspection</h2>
    <form action="{{route('finishToFinalSave')}}" method="post">
        @csrf
      <div class="row">
        <div class="col-md-9">
          <div class="form-group">
            <label>Transfer Type</label>
            <input type="text" placeholder="Finishing To Final Inspection" class="form-control" disabled>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="buyer_name">Buyer</label>
            <input type="text" name="buyer_name" id="buyer_name" class="form-control">
        </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="order_qty">Required Greige(Meter)</label>
            <input type="number" name="order_qty" id="dispo_grey_qty" class="form-control">
        </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="construction">Construction</label>
            <input type="text" name="construction_name" id="construction" class="form-control">
        </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="order_type">Order Type</label>
            <input type="text" name="order_type" id="order_type" class="form-control" value="Genral">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="transfer_type">Transfer Type</label>
            <select name="transfer_type" class="form-control">
              <option selected>Fresh</option>
              <option value="InsBack">Inspection Back</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="transfer_date">Date & Time</label>
           <!--  <input type="datetime-local" name="transfer_date" class="form-control"> -->
            <input type="date" name="transfer_date" class="form-control" value="{{old('transfer_date')}}">
        </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="order_no">Dispo</label>
            <input type="text" name="order_no" id="search" class="form-control" onkeyup="myFunction()">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="batch_no">Batch No</label>
            <input type="text" name="batch_no" class="form-control" value="B">
        </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="transfer_qty">Qty</label>
            <input type="text" name="transfer_qty" class="form-control">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="book_no">Book No</label>
            <input type="text" name="book_no" class="form-control" value="Test">
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
        <div class="col-md-3">
          <div class="form-group">
            <label for="last_machine">Machine</label>
            <select class="form-control" required name="last_machine" id="last_machine">
                <option value="">Select one</option>
                @if(isset($machines))
                @foreach($machines as $value)
                <option value="{{$value->id}}">{{$value->machine_name}}</option>
                @endforeach
                @endif
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <br/>
            <button type="submit" class="btn btn-primary btn-block">Save</button>
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
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <table class="table table-bordered">
      <thead>
        <th>SL</th>
        <th>Dispo</th>
        <th>Buyer</th>
        <th>Transfer Date</th>
        <th>Transfer Qty</th>
      </thead>
      @foreach($finish_to_final as $data)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data->order_no}}</td>
        <td>{{$data->buyer_name}}</td>
        <td>{{$data->transfer_date}}</td>
        <td>{{$data->transfer_qty}}</td>
      </tr>
      @endforeach
    </table>
  </div>
  <div class="col-md-2"></div>
</div>
<script type="text/javascript">

 function myFunction() {
  var x = document.getElementById("search").value;
  $.ajax({
    type : 'get',
      url : '{{URL::to('search')}}',
      data:{'search':x},
      success:function(data){
      $('#buyer_name').val(data.End_Buyer);
      $('#construction').val(data.Construction);
      $('#order_type').val("General");
      $('#dispo_grey_qty').val(data.dispo_grey_qty);
      }
    });
}
</script>
@endsection