@extends('layouts.master')

@section('scrypt')
 <script type="text/babel"  src="../public/js/exit.js"></script>
 
 
@stop

@section('menu')
@include('menu')
@stop



@section('breadcrumb')
 
 <ol class="breadcrumb">
 
  <li class="breadcrumb-item active">Главная</li>
</ol>
@stop
@section('panel')
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"></div>

<div id="select"></div>
</div>
  @stop
@section('dialog')
<script>
  $( function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
       modal: true,
        width: 400,
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
<div id="dialog" title="www">
<p class="text-primary "id="err"></p>
 
   
     <div id="btn_add"></div>
  </div>
</div>
 
  @stop
 