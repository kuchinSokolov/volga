@extends('layouts.master')

@section('scrypt')
 <script type="text/babel"  src="../public/js/exit.js"></script>
 
 
@stop

@section('menu')
@include('menu2')
@stop



@section('breadcrumb')
 
 <ol class="breadcrumb">
 
  <li class="breadcrumb-item active">Панель управления охранного предприятия</li>
</ol>
@stop
@section('panel')
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"></div>

<div id="select">

<div class="container-fluid">
  <div class="row">
  <div class="col-md-4">
  <h2 class="text-left"> <small>Договорной отдел</small></h2>
  <br>
  <a href="справочник_обьектов"> <img  class="img-thumbnail" src="image/dogovor.png" width="200"></img></a>
   <br>
  
  </div>
  
  <div class="col-md-4">
  
   <h2 class="text-left"> <small>Технический отдел</small></h2>
  <br>
   <img  class="img-thumbnail" src="image/technik.png" width="150"></img>
   <br>
  
  </div>
  <div class="col-md-4"> <h2 class="text-left"> <small>Инженерный отдел</small></h2>
  <br>
   <img  class="img-thumbnail" src="image/ingener.png" width="150"></img>
   <br></div>


  </div>


<div class="row">
  <div class="col-md-4">
  <h2 class="text-left"> <small>Пультовая охрана</small></h2>
  <br>
   <img  class="img-thumbnail" src="image/operator.png" width="150"></img>
   <br>
  
  </div>
  
  <div class="col-md-4">
  
   <h2 class="text-left"> <small>ГБР</small></h2>
  <br>
   <img  class="img-thumbnail" src="image/gbr.png" width="150"></img>
   <br>
  
  </div>
  <div class="col-md-4"> <h2 class="text-left"> <small>Склад</small></h2>
  <br>
   <img  class="img-thumbnail" src="image/sklad.png" width="150"></img>
   <br></div>

   
  </div>








</div>
</div>
</div>
  @stop
