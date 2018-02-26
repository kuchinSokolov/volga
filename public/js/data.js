function add(data){
  
     ReactDOM.render(

<ul>
{data}
</ul>
,
  document.getElementById("err")
);
};


function err(){
  
     ReactDOM.render(

<div className="alert alert-danger">
  <strong>Ошибка!</strong> Неверная пара (логин, пароль)
</div>
,
  document.getElementById("err")
);
};
   
   class Form extends React.Component {
        constructor(props) {
        super(props);
      this.state = {err: []};
    
        this.handleSubmit = this.handleSubmit.bind(this);
      }
     
      handleSubmit(e) {
        e.preventDefault();
        var data;
       
       var name = this.refs.name.value; 
       var pass = this.refs.pass.value; 
     
       if(name.length<=2)
       { this.state.err.push("Вы не ввели имя(больше двух символов)");
        
                                                                      }
                                                                                        
            if(pass.length<6)
                         {  
                          this.state.err.push("Вы не ввели пароль (больше шести символов)");
                                                                                                 }
         
      
     // if(  !pass.match(/^\d+$/)){
 //this.state.err=this.state.err+"Пароль содержит толькочисла";

     // }

         if (this.state.err.length>0)
         {


 data =this.state.err.map(function(name,index) {
  return <li key={index} className="text-danger">{name}</li>
  
  ;
});

add(data);

this.state.err=[];
     }else{
      var obj = {
       name: this.refs.name.value,
       pass:  this.refs.pass.value
       
      };
   var str= JSON.stringify(obj);
      this.refs.name.value="";
      this.refs.pass.value="";

      axios.get('validate', {
        params: {
          obj:str
        }
      })
      .then(function (response) {
if(response.data==="yes"){
//console.log(response.data);
window.location.href ='home';
}if(response.data==="no"){
    
err();
 ///console.log(response.data);



}
      })
      .catch(function (error) {
        console.log("Ошибка");
      });



 add(data);

 }
           }
   
        render() {
        return (
            <div className="container-fluid ">
  
           
            <div id="err">
            </div>
  <div className="panel panel-default">
    <div className="panel-body">
    <img   className="center-img" src="image/office.jpg"></img>
      
    <div className="form-group">
  <label >Name:</label>
  <input type="text" className="form-control"  ref="name"   ></input>
</div>
<div className="form-group">
  <label>Password:</label>
  <input type="password" className="form-control"   ref="pass"    ></input>
</div> 
<div className="form-group">
<button type="button" className="btn btn-primary"  onClick={this.handleSubmit}>Войти</button>
</div> 


</div>    
    
    
    </div>
  </div>




          
        );
      }
    }
    ReactDOM.render(
        <Form />,
        document.getElementById("app_menu")
    )