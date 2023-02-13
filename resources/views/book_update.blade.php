@extends('layouts.navbar')
@section('title', 'book-keeping')
@section('content')
<!DOCTYPE html>

<div class="title m-b-md">
	<h1 style="font-size:25px"> 新增項目 </h1>
	<p> </p>
	<form action="{{ route('updatetable') }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <select name = "type" required="required" style="font-size:20px">
	    	<option value="" selected>請選擇功能 </option>
	    	<option value="0"> 收入 </option>
	    	<option value="1"> 支出 </option>
	    </select>
		名字:
		<input required="required" type="text" name = "f_name" maxlength="15" size="15"/>
		內容:
		<input required="required" type="text" name = "f_title" maxlength="20" size="20"/>
		金額:
		<input required="required" type="text" name = "f_amount" maxlength="5" size="3"/>
		選擇日期:
		<input type="date" name="f_date" value="2023-02-09" min="2000-01-01" max="2030-12-31" style="font-size=20" >
	    <button type="submit" id="btn-update">送出</button> 
	</form>
    </div>

@endsection('content')
