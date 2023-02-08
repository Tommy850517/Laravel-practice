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
		return view('mycv', compact('select'));
	}

	public function about(){
	    return view('About');
	}
}
