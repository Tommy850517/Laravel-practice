<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FirstController extends Controller
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	

	#public function cv(){
	#	return view('mycv');
	#}	

}
