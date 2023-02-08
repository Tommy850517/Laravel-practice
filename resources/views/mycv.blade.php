@extends('layouts.navbar')
@section('title', 'MyCV')
@section('content')
<!DOCTYPE html>

<title>Tommy's CV</title>
    <div class="title m-b-md">
	<h1> Tommy's CV </h1>
	<h1> <?php echo $select[0]->name; ?> </h1>
	<h1> <?php echo $select[0]->title; ?> </h1>
	<h1> <?php echo $select[0]->amount;?> </h1>
	<h1> <?php echo $select[0]->date;  ?> </h1>
    </div>

@endsection('content')
