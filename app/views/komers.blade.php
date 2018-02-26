@extends('layouts.master')

@section('scrypt')
 <script type="text/babel"  src="../public/js/kom_add.js"></script>
 <script type="text/babel"  src="../public/js/exit.js"></script>
 
 
@stop

@section('menu')
@include('menu')
@stop



@section('breadcrumb')
 
 <ol class="breadcrumb">
 
  <li class="breadcrumb-item active">Создание обьекта</li>
</ol>
@stop
@section('panel')
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"></div>


<div class="container"><h2>Запись об обьекте</h2></div>
<div id="err"></div>
<div id="mess"></div>
<div id="exTab2" class="container">	
<ul class="nav nav-tabs">
			<li class="active">
        <a  href="#1" data-toggle="tab">Название/Адрес</a>
			</li>
			<li><a href="#2" data-toggle="tab">Контактная информация</a>
			</li>
			<li><a href="#3" data-toggle="tab">Договор</a>
			</li>
		</ul>

			<div class="tab-content ">
			  <div class="tab-pane active" id="1">
      
<div class="row">
  <div class="col-sm-6">
  <label class="text-danger">*Название обьекта</label>
   <input type="text" class="form-control  text-uppercase" id="name_obg"  placeholder="Название обьекта">
  
  
  <div class="row">
  <div class="col-sm-6"><label class="text-danger ">*Город/район</label>
 <select class="form-control" id="gorod">
  <option  value="Астрахань">Астрахань</option>
  <option value="Астраханская область">Астраханская область</option>
  <option value="Волгоград">Волгоград</option>
  <option value="Ахтубинск">Ахтубинск</option>
  <option  value="Наримановский район">Наримановский район</option>
  <option value="Харабалинский район">Харабалинский район</option>
   <option value="Лиманский район">Лиманский район</option>
</select></div>
  <div class="col-sm-6"></div>
  
</div>
  
   
 <div class="row">
  <div class="col-sm-6">
<label >Село/деревня </label>
   <input type="text" class="form-control text-uppercase" id="selo" placeholder=" (село/деревня)">
  
  </div>
  <div class="col-sm-6">
   <label class="text-danger">*Улица </label>
   <input type="text" class="form-control text-uppercase" id="street"  placeholder="Улица">
  
  </div>
   <div class="col-sm-2">
  </div>
</div>
<div class="row">
  <div class="col-sm-3"><label class="text-danger">*№ дом/корпус </label>
   <input type="text" class="form-control" id="dom"  placeholder="№дом/корпус"></div>
  <div class="col-sm-3"><label >№ квартиры </label>
   <input type="text" class="form-control" id="kvartir"  placeholder="№ квр. "></div>
</div>
  
 <label>Адрес</label>
   <input type="text" class="form-control" id="adress" placeholder="Адрес обьекта" disabled>
  
  </div>
  <div class="col-sm-4"></div>
  <div class="col-sm-2"></div>
</div>
      <br>





				</div>
				<div class="tab-pane" id="2">
         
<div class="row">
  <div class="col-sm-8">
  <div class="row">
  <div class="col-sm-4"><label class="text-danger">*Фамилия</label>
   <input type="text" class="form-control text-uppercase"  placeholder="Фамилия"  id="fam"></div>
  <div class="col-sm-4"><label class="text-danger">*Имя</label>
   <input type="text" class="form-control text-uppercase"  placeholder="Имя" id="name_dir"></div>
  <div class="col-sm-4"><label class="text-danger">*Отчество</label>
   <input type="text" class="form-control text-uppercase"  placeholder="Отчество" id ="otch">
   </div>
</div>
 
 <div class="row">
  <div class="col-xs-8"><label >ФИО</label>
   <input type="text" class="form-control" placeholder="ФИО" id="fio" disabled ></div>
  <div class="col-xs-4"></div></div>


 <div class="row">
  <div class="col-xs-6"><label>Должность</label>
   <input type="text" class="form-control text-uppercase"  placeholder="Должность" id="dolgn" ></div>
  <div class="col-xs-6"></div>
</div>

  <div class="row">
  <div class="col-xs-6"><label class="text-danger">*Телефон</label>
   <input type="text" class="form-control"  placeholder="Телефон" id="tel"></div>
  <div class="col-xs-6"></div>
</div>
  
  
  </div>
  <div class="col-sm-4"></div>
 
</div>
<br>


				</div>
        <div class="tab-pane" id="3">
        
 <div class="row">
  <div class="col-xs-4"><label>Номер договора</label>
   <input type="text" class="form-control"  placeholder="№ договора" id="num_dog"></div>
     <div class="col-xs-8"></div></div>
        
 <div class="row">
  <div class="col-xs-4">
  
  <div class="form-group">
    <label for="inputDate">Дата заключения договора:</label>
    <input type="date" class="form-control" id="date" >
  </div>
  </div>
     <div class="col-xs-8"></div></div>


				</div>
			</div>
  </div>



 <div class="row">
  <div class="col-xs-5">
 </div>
     <div class="col-xs-4" id="btn_save"></div>

 <div class="col-xs-3"></div></div>


 
 
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
 