<!DOCTYPE html>
<html>
    <head>
        <title>PTL Production MGT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<!--   <script src="//code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <style>
            table th,td{
                text-align: center;
            }
        </style>
    </head>
    <body>
       
        <div class="container-fluid flex-nowrap">
            <div class="row flex-nowrap">
               <!--  @include('dashboard.layouts.left') -->
                @include('dashboard.layouts.left1') 
                @yield('main')
                @include('dashboard.layouts.right')
            </div>
        </div>
       @include('dashboard.layouts.footer')
    </body>
</html>
