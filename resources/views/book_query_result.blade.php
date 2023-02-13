@extends('layouts.navbar')
@section('title', 'book-keeping')
@section('content')
<!DOCTYPE html>

<script src="jquery-3.6.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="DataTables_jqueryUI/datatables.min.css"/>
<script type="text/javascript" charset="utf8" src="DataTables_jqueryUI/datatables.min.js"></script>

<div class="title m-b-md">
	<h1 style="font-size:25px"> 查詢項目 </h1>
	<p> </p>
	<h3>名字: <?php echo $my_name;?> </h3> 
</div>
<br></br>
<br></br>

<div class="container">

<table id="mytable" class="display" width="80%">
    <thead>
        <tr>
            <th>type</th>
            <th>name</th>
            <th>title</th>
	    <th>amount</th>
	    <th>date</th>
	</tr>
    </thead>
    <tbody>
	<?php $total = 0; ?>
	@for($i = 0; $i < count($result); $i++)
	
	    <tr>
		<td> <?php if($result[$i]->type == 0) echo "收入";
			   else	echo"支出"; ?></td>
		<td> <?php echo $result[$i]->name;?></td>
		<td> <?php echo $result[$i]->title;?></td>
		<td> <?php echo $result[$i]->amount;
			   if($result[$i]->type == 0) $total += $result[$i]->amount;
			   elseif($result[$i]->type == 1) $total -= $result[$i]->amount; ?></td>
		<td> <?php echo $result[$i]->date;?></td>
	    </tr>
	@endfor
    </tbody>
</table>
<h3><?php echo "總和為: ".$total; ?></h3>
<div>
<script>
	$(document).ready( function () {
	    $('#mytable').DataTable({
		"autoWidth":true,
	        "bAutoWidth":true,
		"bScrollCollapse": true,
		"sScrollY": "300px",
		"jQueryUI": true
	    });
	});
</script>
</div>
</div>
@endsection('content')
