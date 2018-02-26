<?php

//use Illuminate\Support\Facades\DB;
class KomersController extends BaseController {

  public function search_data(){
    if (Session::has('user'))
    {
      if($_GET["obj"]){
        $obj=json_decode($_GET["obj"]);
        $pole=trim($obj->pole);
        $text=trim($obj->text);
     if($pole==="name"){
       $results= DB::table('data_obj')->where('name', 'LIKE', '%' . $text . '%')->get();;
        return json_encode($results);}
      
        if($pole==="adress"){
          $results= DB::table('data_obj')->where('street', 'LIKE', '%' . $text . '%')
          ->orWhere('selo', 'LIKE', '%' . $text . '%')
          ->orWhere('gorod', 'LIKE', '%' . $text . '%')
          ->get();;
           return json_encode($results);}
      
      }


    }
  
  else {return Redirect::to('avtoriz');}

  }




public function spravochnik_data(){
	if (Session::has('user'))
{
  
 //$results = DB::select('select * from data_obj'); 
 $today = new DateTime('-6 days');
 $results= DB::table('data_obj') ->where('date_init', '>',$today)->groupBy('id')->limit(50)
 ->get();
  return json_encode($results);
  
  }
  	else {return Redirect::to('avtoriz');
}

}


public function spravochnik_obj()
	{
		if (Session::has('user'))
{
  $dol = DB::select('select * from data_obj'); 
  

  // return View::make('spravochnik_obj')->with('data', $dol); 
return View::make('spravochnik_obj');

}
	else {return Redirect::to('avtoriz');

	}	
		
		
}	

	public function redactor_obj()
	{
		if (Session::has('user'))
{
if (Request::has('id'))
{
   $id = Request::input('id');
$data = DB::select('select * from data_obj  where id = ? ',[$id]); 
//$data= json_encode($data);
 return View::make('redactor')->with('data', $data); 
//return var_dump($data);
}
  
 
}
	else {return Redirect::to('avtoriz');

	}	
		
		
}	


	public function index()
	{
		if (Session::has('user'))
{
  return View::make('komers');
}
	else {return Redirect::to('avtoriz');

	}	
		
		
}	


public function dell_object(){

if (Session::has('user'))
{
  if($_GET["obj"]){
			$obj=json_decode($_GET["obj"]);
      $id=trim($obj->id);
     DB::beginTransaction();{
        $n1 = DB::table('data_obj')->count();
        $dol = DB::select('delete from data_obj where id = ?', [$id]); 
        $n2 = DB::table('data_obj')->count();
        if($n1>$n2){
DB::commit();
 return "yes" ;
        }else
        {
          DB::rollback();
           return "no" ;
        }
     
      
     }
     
      }
}
	else {return Redirect::to('avtoriz');	}	

}


public function  udate_object(){
if (Session::has('user'))
{

if($_GET["obj"]){
			$obj=json_decode($_GET["obj"]);
      $id=trim($obj->id);
  $name=trim($obj->name);
  $gorod=trim($obj->gorod);
  $selo=trim($obj->selo);
  $street=trim($obj->street);
  $dom=trim($obj->dom);
  $kvartir=trim($obj->kvartir);	 
  $fam=trim($obj->fam);
  $name_dir=trim($obj->name_dir);
  $otch=trim($obj->otch);
  $dolg=trim($obj->dolg);
  $tel=trim($obj->tel);
  $num_dog=trim($obj->num_dog);  
  $date=trim($obj->date); 
  $date_init= date("Y-m-d");   
$results = DB::table('data_obj')
            ->where('id',$id)
            ->update(array('name' => $name,'gorod' => $gorod,'selo' => $selo,'street' => $street,'dom'=>$dom,
            'kvartir'=>$kvartir,'fam'=>$fam,'name_dir'=>$name_dir,'otch'=>$otch,'dolg'=>$dolg,'tel'=>$tel,
            'num_dog'=>$num_dog,'date'=>$date,'date_init'=>$date_init));

return "yes";
}


}
	else {return Redirect::to('avtoriz');

	}	

}




public function  add_object(){
if (Session::has('user'))
{

if($_GET["obj"]){
			$obj=json_decode($_GET["obj"]);
  $name=trim($obj->name);
  $gorod=trim($obj->gorod);
  $selo=trim($obj->selo);
  $street=trim($obj->street);
  $dom=trim($obj->dom);
  $kvartir=trim($obj->kvartir);	 
  $fam=trim($obj->fam);
  $name_dir=trim($obj->name_dir);
  $otch=trim($obj->otch);
  $dolg=trim($obj->dolg);
  $tel=trim($obj->tel);
  $num_dog=trim($obj->num_dog);  
  $date=trim($obj->date);   
  $date_init= date("Y-m-d");   
DB::insert('insert into data_obj (name,gorod,selo,street,dom,kvartir,fam,name_dir,otch,dolg,tel,num_dog,date,date_init) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
 [$name,$gorod,$selo,$street,$dom,$kvartir,$fam,$name_dir,$otch,$dolg,$tel,$num_dog,$date,$date_init]);

return "yes";
}


}
	else {return Redirect::to('avtoriz');

	}	

}

	
	public function avtoriz()
	{
		if (Session::has('user'))
{
  return Redirect::to('home');
}

return View::make('test');

	}


}





	


