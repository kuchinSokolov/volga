<!DOCTYPE html>
<head>
  <!-- Latest compiled and minified CSS -->
  <!--  <meta http-equiv="Cache-Control" content="no-cache"> -->

  <!-- Optional theme -->
 
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.0.2/react.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.0.2/react-dom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.min.js"></script>
    
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="../public/bootstrap/css/main.css">
<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     @section('menu')
          
        @show
    </div>
</nav>
<div class="container">
 

 @section('breadcrumb')
          
        @show
 @section('panel')
          
        @show


  <div class="row" id="app">
  @section('menu_avt')
          
        @show


    </div>
     @section('dialog')
          
        @show
  @section('scrypt')
          
        @show
         @section('exit')
          
        @show

</body>