<?php

//use Illuminate\Support\Facades\DB;
class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

public function exit2()
	{
Session::flush();

	}

	public function index()
	{
		if (Session::has('user'))
{
  return View::make('home');
}
	else {return Redirect::to('avtoriz');

	                                                }	
		
		// return $value = Session::get('user');
		
		
		//DB::transaction(function () {
 // DB::insert('insert into test (name, fame,id_kot) values (?, ?,?)', ["Вася", 'Иванов','1']);
  //DB::insert('insert into kotalog (nazvan) values (?)', ['кровать']);
//  DB::update('update test set name = "Миша" where name = ?', ["Вася"]);
// return 'Вам больше 200 лет!';
 

//	});	
		
	//$results = DB::select('select * from test');	
	//$results = DB::table('test')
       // ->leftJoin('kotalog', 'kotalog.id', '=', 'test.id_kot')
		// ->where('test.id_kot', '=',3)
		//->select('test.name', 'test.fame', 'kotalog.nazvan')
       // ->get();
		//$results =[]
		//return View::make('hello')->with('rezult', $results);;
	//return $results;
	//var_dump(json_encode($results));
	}


public function avtoriz()
	{
		if (Session::has('user'))
{
  return Redirect::to('home');
}

return View::make('test');

	}

public function select_avto()
	{
		if (Session::has('user'))
{

$results = DB::select('select name from model ' );

return json_encode($results);
}

return View::make('test');

	}

public function add_model()
	{
		if (Session::has('user'))
{
if($_GET["obj"]){
			$obj=json_decode($_GET["obj"]);
		    $name=trim($obj->name);
			$name = strtoupper($name);
DB::insert('insert into model (name) values (?)', [$name]);


$results = DB::select('select name from model ' );

return json_encode($results);
}
}

return View::make('test');

	}






	public function validate()
	{
		
		if($_GET["obj"]){
			$obj=json_decode($_GET["obj"]);
		    $name=trim($obj->name);
			$pass=trim($obj->pass);
			$validate = DB::select('select * from users where name = ? and pass=? ' , [$name,$pass]);
		

if ($validate)
		{	//return Redirect::to('home');
		Session::put('user', '$name');
		return "yes";
		
		}else{return "no";}

		}

	
	
	}





	

}
