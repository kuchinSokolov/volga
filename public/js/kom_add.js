
var name_obg=document.getElementById('name_obg');
var gorod=document.getElementById('gorod');
var selo=document.getElementById('selo');
var street=document.getElementById('street');
var dom=document.getElementById('dom');
var adress=document.getElementById('adress');
var kvartir=document.getElementById('kvartir');
var street_num="";
var dom_num="";
var kvartir_num="";
var err=[];
var data;
var fam=document.getElementById('fam');
var name_dir=document.getElementById('name_dir');
var otch=document.getElementById('otch');
var dolg=document.getElementById('dolgn');
var fio=document.getElementById('fio');
var tel=document.getElementById('tel');
var num_dog=document.getElementById('num_dog');
var date=document.getElementById('date');
var obj={};

function add(data,n){
  if(n==1) {
 ReactDOM.render(
       <div>
     <h5 className='text-danger'>&nbsp;Заполните обязательные поля *</h5>
     <ul>
      {data}
    </ul></div>
  ,
  document.getElementById("err")
);


  }
  else 
   ReactDOM.render(
      
     <ul>
      {data}
    </ul>
  ,
  document.getElementById("err")
);

    
};


function mess(){
  
     ReactDOM.render(

<div className="alert alert-danger">
 Данные успешно сохранены!
</div>
,
  document.getElementById("mess")
);
};
function mess_out(){
  
     ReactDOM.render(

<div></div>
,
  document.getElementById("mess")
);
};





function data_form(){
ReactDOM.render(
      <div>
  <div className="col-md-6">  <label >Название обьекта</label>
   <p4 className="form-control  text-uppercase">{obj.name}</p4>
                                                                   </div>
 <div className="col-md-6">  <label >Город/район</label>
   <p4 className="form-control  text-uppercase">{obj.gorod}</p4>
                                                                   </div>
<div className="col-md-6">  <label >Село/деревня</label>
   <p4 className="form-control  text-uppercase">{obj.selo}</p4>
                                                                   </div>
 <div className="col-md-6">  <label >Улица</label>
   <p4 className="form-control  text-uppercase">{obj.street}</p4>
                                                                   </div>
<div className="col-md-6">  <label >№ дом/корпус</label>
   <p4 className="form-control  text-uppercase">{obj.dom}</p4>
                                                                   </div>
 <div className="col-md-6">  <label >№ квартиры</label>
   <p4 className="form-control  text-uppercase">{obj.kvartir}</p4>
                                                                   </div>
<div className="col-md-6">  <label >Фамилия контакта</label>
   <p4 className="form-control  text-uppercase">{obj.fam}</p4>
                                                                   </div>
 <div className="col-md-6">  <label >Имя контакта</label>
   <p4 className="form-control  text-uppercase">{obj.name_dir}</p4>
                                                                   </div>
<div className="col-md-6">  <label >Отчество контакта</label>
   <p4 className="form-control  text-uppercase">{obj.otch}</p4>
                                                                   </div>
 <div className="col-md-6">  <label >Должность</label>
   <p4 className="form-control  text-uppercase">{obj.dolg}</p4>
                                                                   </div>
<div className="col-md-6">  <label >Телефон</label>
   <p4 className="form-control  text-uppercase">{obj.tel}</p4>
                                                                   </div>
<div className="col-md-6">  <label >Номер договора</label>
   <p4 className="form-control  text-uppercase">{obj.num_dog}</p4>
                                                                   </div>
 <div className="col-md-6">  <label >Дата создания договора</label>
   <p4 className="form-control  text-uppercase">{obj.date}</p4>
                                                                   </div>





 <div className="col-md-3">  
   <br></br>
   <button type="button" className="form-control btn btn-linc"  onClick={save_obj}><img  src="image/save.png" ></img>
сохранить</button>
                                                                   </div>

</div>
  ,
  document.getElementById("data_form")
);


}
function dell_dForm(){
 
 $( function() {
 $( "#dialog" ).dialog( "close" );


} );

  ReactDOM.render(
      <div>
        </div>
  ,
  document.getElementById("data_form")
);

obj={};

name_obg.value="";
 gorod.value="";
 selo.value="";
  street.value="";
 dom.value="";
 kvartir.value="";
  fam.value="";
  name_dir.value="";
  otch.value="";
 dolg.value="";
tel.value="";
 num_dog.value="";
 date.value="";
fio.value="";
adress.value="";


add(data="",2);
}

function save_obj()
{
 var str= JSON.stringify(obj);
//console.log(str);

    axios.get('add_object', {
        params: {
          obj:str
        }
      })
      .then(function (response) {
if(response.data==="yes"){
dell_dForm();

 mess();
 setTimeout(function() {
   mess_out();
   
}, 4000); 
   


//console.log(response.data);

}
      })
      .catch(function (error) {
        console.log("Ошибка");
      });

 
}

function otprav(){



 obj={
  name:name_obg.value.toUpperCase(),
  gorod:gorod.value.toUpperCase(),
  selo:selo.value.toUpperCase(),
  street:street.value.toUpperCase(),
  dom:dom.value.toUpperCase(),
  kvartir:kvartir.value,
  fam:fam.value.toUpperCase(),
  name_dir:name_dir.value.toUpperCase(),
  otch:otch.value.toUpperCase(),
  dolg:dolg.value.toUpperCase(),
  tel:tel.value,
  num_dog:num_dog.value.toUpperCase(),
  date:date.value
};

  

data_form();

 $( function() {
 $( "#dialog" ).dialog( "open" );


} );
   

}

function valid(){
   if(gorod.value=="")err.push("Город/ район");
  if(name_obg.value=="")err.push("Название обьекта");
  if(dom.value=="")err.push("Номер дома");
  if(street.value!=""){street_num="ул."+street.value;}else{err.push("Улица");}
    if(kvartir.value!=""){kvartir_num="кв."+kvartir.value;}else{kvartir_num="";}
    if(kvartir.value.match(/[^0-9]/)){err.push("Номер квартиры должен содержать только цифры");}
 if(fam.value=="")err.push("Фамилия конт. лица");
if(name_dir.value=="")err.push("Имя конт. лица");
if(otch.value=="")err.push("Отчество конт. лица");
 if(tel.value=="")err.push("Телефон конт. лица");else{
if(tel.value.match(/[^0-9]/)){err.push("Телефон должен содержать только цифры");}
if(tel.value.length<6){err.push("Телефон должен быть не менее 6 символов");}
 }



if(err.length>0){
 data =err.map(function(name,index) {
  return <li key={index} className="text-danger">{name}</li>
  
  ;
});

add(data,1);
err=[];
} else{
add(data="",2);
otprav();


}
}

ReactDOM.render(
<div>
<div className="col-md-6">  
  <button type="button" className=" btn btn-link"  onClick={btn_save}><img  src="image/proverca.jpg" ></img>
данные</button>                                                  </div>
 <div className="col-md-6">  <button type="button" className=" btn btn-link"  onClick={dell_dForm}><img  src="image/otmen.jpg" ></img>
сброс</button>
                                                                   </div>

</div>


 ,
  document.getElementById("btn_save")
);

function btn_save(){

 valid();
   var adress2=gorod.value+" "+selo.value+" "+street_num+" "+dom.value +" "+kvartir_num;
 adress.value=adress2;
  adress.value=adress.value.toUpperCase();
adress2="";

fio.value=fam.value+" "+name_dir.value+" "+otch.value;
fio.value=fio.value.toUpperCase();



}