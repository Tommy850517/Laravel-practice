@extends('layouts.navbar')
@section('title', 'book-keeping')
@section('content')
<!DOCTYPE html>

<script src="jquery-3.6.3.min.js"></script>
<script src="DataTables-1.13.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="datatables.min.css"/>
<script type="text/javascript" src="datatables.min.js"></script>
<script src="DataTables-1.13.2/js/jquery.dataTables.min.js"></script>
<div class="title m-b-md">
	<h1 style="font-size:25px"> 查詢項目 </h1>
	<p> </p>
	<form method="post" action={{route('querytable')}}>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    	    名字:
	    <input required="required" type="text" name = "f_name" maxlength="15" size="15"/>
	    <button type="submit" id="btn-update">送出</button> 
	</form>
    </div>
<br></br>
<br></br>

<div>

@endsection('content')
