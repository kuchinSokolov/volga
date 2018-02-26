
var value2 =[];

var data=[];
var serarch=document.getElementById("search");
var err=document.getElementById("err");


 function search(){

  if(serarch.value.trim().length<3){
    $(".alert_err").show();
setTimeout(function() {
  $(".alert_err").hide();
   
}, 3000); 
   
  
  }else{  $(".alert_err").hide();
  var text=serarch.value.trim().toUpperCase();
var pole=$( "input:checked" ).val();
var obj={
pole:pole.trim(),
text:text,
};
   obj= JSON.stringify(obj);


   var data_min=[];
  var value2_min =[];
value2 =[];
data=[];
  axios.get('search_data', {
    params: {
      obj:obj
    }    
  })
  .then(function (response) {
    //console.log(response.data);

    value2.push(response.data);
    //console.log(value2_min[0]);
    
     data = value2[0].map(function(text,index){
        var url ="редактирование_обьекта?id="+text.id;
      if(text.kvartir!=0){var kvartir ='№квр.'+ text.kvartir;}else{kvartir="";}; 
       return < tr  key={index}> 
     <td  className="col-md-2" >{text.name}</td>
          <td  className="col-md-2" >{text.gorod}</td>
          <td  className="col-md-4">{text.selo}  Ул. {text.street} дом.{text.dom} {kvartir}</td>
           
           <td  className="col-md-1"> 
               <img  src="image/podrobno.png"onClick={() =>up_model(text.id)}  width="20"></img>&nbsp;
              <a href={url}>  <img  src="image/edit.png"  width="20"></img></a>&nbsp;
                 <img  src="image/dell.png"onClick={() =>dell_model(text.id,text.name)} width="20"></img>&nbsp;
               </td>
     
          </tr> }
     );
    if(data.length>0){
    
    ReactDOM.render(
     <div className="table-responsive"> 
    
    <table className="table table-bordered table-hover table-condensed" >
      <thead>
        <tr>
          <th>Название</th>
          <th>Город/район</th>
          <th>Адрес</th>
          <th>Служебные</th>
           
        </tr>
      </thead>
      <tbody>
      {data}
       
      </tbody>
    </table>
    
          </div>,
      document.getElementById("table")
    );
     
    }else{
    ReactDOM.render(
      
       <div className="alert alert-warning">
       <strong>Нет данных!</strong>
    </div>
      
      
      ,
      document.getElementById("table")
    );
    }
    

  })

  .catch(function (error) {
   console.log("Ошибка");
 });


    }
 } 

 $( ".search" ).click(function() {
  search();
                  });
 
 

function updeel_tabl (){
var data_min=[];
  var value2_min =[];
value2 =[];
data=[];
axios.get('spravochnik_data', {
        
      })
      .then(function (response) {
     value2.push(response.data);
//console.log(value2_min[0]);

 data = value2[0].map(function(text,index){
    var url ="редактирование_обьекта?id="+text.id;
  if(text.kvartir!=0){var kvartir ='№квр.'+ text.kvartir;}else{kvartir="";}; 
   return < tr  key={index}> 
 <td  className="col-md-2" >{text.name}</td>
      <td  className="col-md-2" >{text.gorod}</td>
      <td  className="col-md-4">{text.selo}  Ул. {text.street} дом.{text.dom} {kvartir}</td>
       
       <td  className="col-md-1"> 
           <img  src="image/podrobno.png"onClick={() =>up_model(text.id)}  width="20"></img>&nbsp;
          <a href={url}>  <img  src="image/edit.png"  width="20"></img></a>&nbsp;
             <img  src="image/dell.png"onClick={() =>dell_model(text.id,text.name)} width="20"></img>&nbsp;
           </td>
 
      </tr> }
 );
if(data.length>0){

ReactDOM.render(
 <div className="table-responsive"> 

<table className="table table-bordered table-hover table-condensed" >
  <thead>
    <tr>
      <th>Название</th>
      <th>Город/район</th>
      <th>Адрес</th>
      <th>Служебные</th>
       
    </tr>
  </thead>
  <tbody>
  {data}
   
  </tbody>
</table>

      </div>,
  document.getElementById("table")
);
 
}else{
ReactDOM.render(
  
   <div className="alert alert-warning">
   <strong>Нет данных!</strong>
</div>
  
  
  ,
  document.getElementById("table")
);
}

 })

       .catch(function (error) {
        console.log("Ошибка");
      });

}


function data_obj ()
{ 
 

 

  axios.get('spravochnik_data', {
        
      })
      .then(function (response) {
     value2.push(response.data);


 data = value2[0].map(function(text,index){
  if(text.kvartir!=0){var kvartir ='№квр.'+ text.kvartir;}else{kvartir="";}; 
  //var fio=text.fam +' '+text.name_dir+' '+text.otch;
  var url ="редактирование_обьекта?id="+text.id;
return < tr  key={index}> 
 <td  className="col-md-2" >{text.name}</td>
      <td  className="col-md-2" >{text.gorod}</td>
      <td  className="col-md-4">{text.selo}  Ул. {text.street} дом.{text.dom} {kvartir}</td>
       
       <td  className="col-md-1"> 
           <img  src="image/podrobno.png"onClick={() =>up_model(text.id)}  width="20"></img>&nbsp;
           <a href={url}>  <img  src="image/edit.png"  width="20"></img></a>&nbsp;
             <img  src="image/dell.png"onClick={() =>dell_model(text.id,text.name)} width="20"></img>&nbsp;
           </td>
 

   
      </tr> }
 );

if(data.length>0){

ReactDOM.render(
 <div className="table-responsive"> 

<table className="table table-bordered table-hover table-condensed" >
  <thead>
    <tr>
      <th>Название</th>
      <th>Город/район</th>
      <th>Адрес</th>
      <th>Служебные</th>
       
    </tr>
  </thead>
  <tbody>
  {data}
   
  </tbody>
</table>




      </div>,
   document.getElementById("table")
);
}
else{
ReactDOM.render(
  
   <div className="alert alert-warning">
   <strong>Нет данных!</strong>
</div>
  
  
  ,
  document.getElementById("table")
);
}







  })

      
      .catch(function (error) {
        console.log("Ошибка");
      });



}


function data_form(n){
    var fio="";
    var dolg="";
    var tel;
    var num_dog="";
    var date;
for(var i=0;i<value2[0].length;i++){
    var id=value2[0][i].id;
if(value2[0][i].id==n){
 fio=value2[0][i].fam+' '+value2[0][i].name_dir+' '+value2[0][i].otch;
 dolg=value2[0][i].dolg;
 tel=value2[0][i].tel;
 num_dog=value2[0][i].num_dog;
 date=value2[0][i].date;
}
}
 


ReactDOM.render(
      <div>
  
<div className="col-md-12">  <label >ФИО</label>
   <p4 className="form-control  text-uppercase">{fio}</p4>
                                                                   </div>
 <div className="col-md-6">  <label >Должность</label>
   <p4 className="form-control  text-uppercase">{dolg}</p4>
                                                                   </div>
<div className="col-md-6">  <label >Телефон</label>
   <p4 className="form-control  text-uppercase">{tel}</p4>
                                                                   </div>
<div className="col-md-6">  <label >Номер договора</label>
   <p4 className="form-control  text-uppercase">{num_dog}</p4>
                                                                   </div>
 <div className="col-md-6">  <label >Дата заключения договора</label>
   <p4 className="form-control  text-uppercase">{date}</p4>
                                                                   </div>


</div>
  ,
  document.getElementById("data_form")
);


}


function yesDell_model(n){
  var obj={id:n} ; 
 // console.log(obj);
var str= JSON.stringify(obj);
axios.get('dell_object', {
        params: {
          obj:str
        }
      })
      .then(function (response) {
if(response.data==="yes"){
  //  console.log(response.data);

   updeel_tabl();


}else{
  //  console.log(response.data);
}
      })
      .catch(function (error) {
        console.log("Ошибка");
      });


  $( function() {
 $( "#dialog" ).dialog( "close" );


} );


}




function exit_model(){
    
  $( function() {
 $( "#dialog" ).dialog( "close" );


} );
}



function dell_model(n,p){
 

ReactDOM.render(
    <div>
      <div className="alert alert-warning">
   ВЫ хотите удалить обьект <strong>{p}</strong>
</div>
 <button type="button" className="btn btn-default btn-xs"onClick={() =>yesDell_model(n)}>да</button>&nbsp;
<button type="button" className="btn btn-default btn-xs" onClick={() =>exit_model()}>нет</button>
</div>
  ,
  document.getElementById("data_form")
);


   $( function() {
 $( "#dialog" ).dialog( "open" );
$( "#dialog" ).dialog({
  title: "Удаление обьекта"
});
 
} );

}

function up_model(n,p){
   
 data_form(n,p);

   $( function() {
 $( "#dialog" ).dialog( "open" );
$( "#dialog" ).dialog({
  title: "Контактная информация"
});
 
} );

  
}

$( ".otmen" ).click(function() {
 
  serarch.value="";   
  updeel_tabl ();
                  
     });


data_obj ();




