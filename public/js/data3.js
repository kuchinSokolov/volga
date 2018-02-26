

var data=[];
var model=[];



ReactDOM.render(


<div className="form-group">
   
    <select className="form-control" id="exampleSelect1">
    
    
    </select>
  </div>

,
  document.getElementById("select")
);

function dell_modell(){
  
}


function add_modell(){
 document.getElementById("dialog").title="New tooltip";
 
  $( function() {
 $( "#dialog" ).dialog( "open" );


} );


ReactDOM.render(
  <div>
 <input type="text" className="form-control" id="modell_name" placeholder="Введите модель" ></input><br></br>
<button type="submit" className="btn btn-default" onClick={save_modell}>Сохранить</button>
</div>
,
  document.getElementById("btn_add")
);

}


function save_modell(){

var err=document.getElementById("err");
 var model_name=document.getElementById("modell_name");
 if(model_name.value.length<1){
err.innerHTML="*Введите модель";
 }
else{
   $( function() {
 $( "#dialog" ).dialog( "close" );


} );
 var obj = {
       name:model_name.value
    };
 var obj= JSON.stringify(obj);
     

 axios.get('add_model', {
         params: {
          obj:obj
        }
      })
      .then(function (response) {
data=response.data;

 
 model=data.map(function(text,index) {
  return <option key={index} >{text.name}</option >
  
  ;
});


 ReactDOM.render(
<div className="row">

  <div className="col-xs-6">
  
   
    <select className="form-control" id="exampleSelect1">
      {model}
   
    </select>
   


  </div>
  <div className="col-xs-1">
     <img src="image/db_add.png" onClick={add_modell}></img>
  </div>
  <div className="col-xs4">

  </div>
</div>


,
  document.getElementById("select")
);


      })
      .catch(function (error) {
        console.log("Ошибка");
      });
err.innerHTML="";
model_name.value="";
}









}




function  sel_avt(){
   
 axios.get('select_avto', {
      
      })
      .then(function (response) { 
    

 data=response.data;

 
 model=data.map(function(text,index) {
  return <option key={index} >{text.name}</option >
  
  ;
});


 ReactDOM.render(
<div className="row">

  <div className="col-xs-6">
  
   
    <select className="form-control" id="exampleSelect1">
      {model}
   
    </select>
   


  </div>
  <div className="col-xs-1">
     <img src="image/db_add.png" onClick={add_modell}></img>
  </div>
   <div className="col-xs-1">
     <img src="image/delete_property.png"  onClick={dell_modell}></img>
  </div>
  <div className="col-xs3">

  </div>
</div>


,
  document.getElementById("select")
);






       })
      .catch(function (error) {
        console.log("Ошибка");
      });
    
   
}

sel_avt();

 