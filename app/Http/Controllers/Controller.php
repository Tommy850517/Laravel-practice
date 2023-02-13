<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function hello(){

	    return view('welcome');
	
	}

	public function cv(){
		$name = 'tommy';
		$select = DB::select('SELECT * FROM new_table WHERE name = ?',[$name] );
		#$result = json_decode($select, true);
		#print_r( $select);
		#echo $select[0]->date;
		return view('bookkeeping', compact('select'));
	}

	public function about(){
	    return view('About');
	}

	public function bookkeeping(){
	    return view('book_index');
	}
	
	public function bookkeeping_update(){
	    return view('book_update');
	}
	
	public function update(){
		$type = $_POST["type"];
		$my_name = $_POST["f_name"];
		$my_title = $_POST["f_title"];
		$my_amount = $_POST["f_amount"];
		$my_date = $_POST["f_date"];
		DB::insert('INSERT INTO new_table (type, name, title, amount, date) VALUES (?,?,?,?,?
		)', [$type,$my_name, $my_title, $my_amount, $my_date]);
		echo "<script>alert('新增成功');</script>"; 
		return view('book_update');
	}

	public function bookkeeping_delete(){
	    return view('book_delete');
	}
	
	public function delete(){
		$type = $_POST["type"];
		$my_name = $_POST["f_name"];
		$my_title = $_POST["f_title"];
		$my_amount = $_POST["f_amount"];
		$my_date = $_POST["f_date"];
		$result = DB::delete('DELETE FROM new_table WHERE type=? AND name=? AND title=? AND amount=? AND date=?'
		,[$type,$my_name, $my_title, $my_amount, $my_date]);
		
		if($result){
		    echo "<script>alert('刪除.$result.筆資料');</script>";
		    return view('book_delete');
		}else{	
		    echo "<script>alert('查無資料');</script>";
		    return view('book_delete');   
		}	    
	}

	public function bookkeeping_query(){
	    return view('book_query');
	}
	
	public function query(){
		//$type = $_POST["type"];
		$my_name = $_POST["f_name"];
		//$my_title = $_POST["f_title"];
		//$my_amount = $_POST["f_amount"];
		//$my_date = $_POST["f_date"];
		$result = DB::SELECT ('SELECT * FROM new_table WHERE name=?'
		,[$my_name]);
	
		if($result){
		    //print_r($result[0]->name);
		    return view('book_query_result', compact('result', 'my_name'));
		}else{	
		    echo "<script>alert('查無資料');</script>";
		    return view('book_query');   
		}	    
	}

}
