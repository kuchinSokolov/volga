  function handleSubmit() {
      
      axios.get('exit', {
        
      })
      .then(function (response) {
window.location.href='home';

      })
      .catch(function (error) {
        console.log("Ошибка");
      });

}
    ReactDOM.render(
        
<button type="button" className="btn btn-link "   onClick={handleSubmit} > <img  src="image/exit2.png" ></img></button>

,
  
   
        document.getElementById("exit_btn")
  );