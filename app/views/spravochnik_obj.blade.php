@extends('layouts.master')

@section('scrypt')
 <script type="text/babel"  src="../public/js/spravochnik_obj.js"></script>
 <script type="text/babel"  src="../public/js/exit.js"></script>
 
 
@stop

@section('menu')
@include('menu')
@stop



@section('breadcrumb')
 
 <ol class="breadcrumb">
 
  <li class="breadcrumb-item active">Справочник обьектов</li>
</ol>
@stop
@section('panel')
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading" ></div>


<div class="container"><h2>Справочник</h2>

<div class="row">
  
  <div class="col-xs-6 alert_err"  hidden="true" ><div class="alert alert-danger">
  <strong>Внимание!</strong> Вы не ввели текст запроса, больше трех символов!
</div>  </div></div>



<div class="row">
  
  <div class="col-xs-2">    <label>
  <input type="radio" name="optionsRadios" id="optionsRadios1" value="name" checked>
По названию
</label>
<label>
<input type="radio" name="optionsRadios" id="optionsRadios1" value="adress" checked>
По адресу
</label>
      </div>
      
  <div class="col-xs-2">
  
  <input type="text" class="form-control text-uppercase" id="search" placeholder="">
 
  <br>
  
  </div>
  <div class="col-xs-1 ">  <button type="button" class="btn btn-default btn-xs search"><img  src="image/next.png" width="15"></img> </button>   <button type="button" class="btn btn-default btn-xs otmen ">  <img  src="image/otmen.jpg" width="15"></img> </button></div>
</div>
<div class="col-xs-7">
</div>
</div>






<div class="row container" >
 
  <div id='table'>
  <div class="col-md-10" id='table'>
  
 
  </div>
   <div>
</div>




 
 
</div>


</div>
  @stop
@section('dialog')
<script>
  $( function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
       modal: true,
        width: 600,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#opener" ).on( "click", function() {
      $( "#dialog" ).dialog( "open" );
    });
  } );
  </script>
<div id="dialog" title="">

<div id="data_form"></div>
  
   
   
  </div>
</div>
 
  @stop
 