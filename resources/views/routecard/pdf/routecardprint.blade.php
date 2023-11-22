<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Routecard Pdf</title>
</head>
<body>
  <style>
  	 * {
      margin: 1;
      padding: 2;
    }
    table {
      border-collapse: collapse;
      width: 100%;
    }

    tr, td {
      text-align: left;
      border: 1px solid;
    }

    tr, th {
      text-align: center;
      border: 1px solid;
    }
    .text-center{
      text-align: center;
      text-transform: uppercase;
    }
    .signatory{
      width: 20%;
      float:left;
    }
    .signatory p{
      text-align: center;
    }
</style>
<div class="row">
  <div class="col-md-12">
      <h4 class="text-center">{{$title}}</h4>
      <p class="text-center">Process Route Card - Solid Dyeing</p>
      <table class="table table-bordered table-hover border-dark">
        <tr>
          <td>Dispo No</td>
          <td id="dispo_no">{{$routecardArr['Dispo_No']}}</td>
          <td rowspan="3">Batch No</td>
          <td>Construction</td>
          <td id="construction">{{$routecardArr['construction']}}</td>
        </tr>
        <tr>
          <td>Dispo Qty</td>
          <td id="dispo_qty">{{$routecardArr['dispo_grey_qty']}}</td>
          <td>Finish Type</td>
          <td id="finish_type">{{$routecardArr['finish_type']}}</td>
        </tr>
        <tr>  
          <td>Customer</td>
          <td id="customer">{{$routecardArr['garments_name']}}</td>
          <td>Match To</td>
          <td></td>
        </tr>
        <tr>
          <td>Buyer</td>
          <td id="buyer_name">{{$routecardArr['End_Buyer']}}</td>
          <td rowspan="3">Quantity</td>
          <td>Finish Width</td>
          <td id="finish_width">{{$routecardArr['finish_width']}}</td>
        </tr>
        <tr>
          <td>Composition</td>
          <td id="composition">{{$routecardArr['composition']}}</td>
          <td>Shade</td>
          <td id="shade"></td>
        </tr>
        <tr>
          <td>Fabric Type</td>
          <td id="fabric_type">{{$routecardArr['fabric_type']}}</td>
          <td>Delivery Date</td>
          <td></td>
        </tr>
        <tr>
          <td>Special Instruction:</td>
          <td colspan="4"></td>
        </tr>
      </table>
      <table class="table table-bordered table-hover border-dark">
        <tr>
          <th width="5%">Process Name</th>
          <th width="2%">Recipe No</th>
          <th width="5%">Date & Time(In)</th>
          <th width="5%">Date & Time(Out)</th>
          <th width="2%">Shift</th>
          <th width="2%">Before Width</th>
          <th width="2%">After Width</th>
          <th width="5%">QTY</th>
          <th width="2%">Batcher Before</th>
          <th width="2%">Batcher After</th>
          <th width="5%">Re-Process</th>
          <th width="5%">Remarks</th>
          <th width="5%">Machine</th>
          <th width="2%">Shift</th>
          <th width="20%">QC Comments</th>
          <th width="10%">Name</th>
        </tr>
        <tr>
          <td>SINGEING & DESIZING</td>
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
      <div class="signatory">
        <p>Prepared By</p>
      </div>
      <div class="signatory">
        <p>Pretreatment</p>
        <p>MR.HAFIZ/SAIFUL</p>
      </div>
      <div class="signatory">
        <p>SOLID DYEING</p>
        <p>MR SALIM</p>
      </div>
      <div class="signatory">
        <p>FINISHING</p>
        <p>MR BABUL/RIPON</p>
      </div>
      <div class="signatory">
        <p>QA</p>
        <p>MR NANTU/NAHID</p>
      </div>
    </div>
  </body>
</html>