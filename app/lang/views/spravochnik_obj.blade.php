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


<div class="container"><h2>Справочник</h2></div>

<div class="row">
  <div class="col-md-12">
  <table class="table table-bordered " >
  <thead>
    <tr>
      <th>Название</th>
      <th>Город/район</th>
      <th>Адрес</th>
      <th>ФИО.конт</th>
       <th>Подробно</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($data as $data) {
if($data->kvartir!=0){$data->kvartir='№квр.'.$data->kvartir;}else{$data->kvartir="";};
$fio=$data->fam.' '.$data->name_dir.' '.$data->otch;
    echo'
    <tr>
      <td  class="col-md-2" >'. $data->name.'</td>
      <td  class="col-md-2" >'. $data->gorod.'</td>
      <td  class="col-md-5">'. $data->selo.' Ул. '.$data->street.' дом. '.$data->dom.' '.$data->kvartir.' </td>
         <td  class="col-md-2" >'.$fio.'</td>
       <td  class="col-md-1"><div id="content"></div></td>
    </tr>
    <tr>
      
    ';
    } 
  ?>
   
  </tbody>
</table>
  </div>
  
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
<div id="dialog" title="Заполненые поля">

<div id="data_form"></div>
  
   
   
  </div>
</div>
 
  @stop
 