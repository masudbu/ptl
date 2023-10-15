<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pdf</title>
</head>
<body>
<div class="container">
	<div class="row">
		<table class="table table-striped table-hover table-bordered">
      <thead>
        <tr class="table-danger">
          <th scope="col">#</th>
          <th scope="col">Production Date</th>
          <th scope="col">Yarn Dyeing</th>
          <th scope="col">Warping</th>
          <th scope="col">Sizing</th>
          <th scope="col">Weaving</th>
          <th scope="col">Pretreatment</th>
          <th scope="col">Thermosol</th>
          
          
        </tr>
      </thead>
      <tbody>
        @if(isset($productionSlip))

        <tr>
          <th scope="row">{{ $productionSlip->id }}</th>
          <td>{{ $productionSlip->production_date }}</td>
          <td>{{ $productionSlip->yarndyeing }}</td>
          <td>{{ $productionSlip->warping }}</td>
          <td>{{ $productionSlip->sizing }}</td>
          <td>{{ $productionSlip->weaving }}</td>
          <td>{{ $productionSlip->pretreatment }}</td>
          <td>{{ $productionSlip->thermosol }}</td>
          
        </tr>
  
        @endif
      </tbody>
    </table>
	</div>
</div>
</body>
</html>