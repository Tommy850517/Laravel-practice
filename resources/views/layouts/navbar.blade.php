<!DOCTYPE html>
<html>
    <head>
	<title> @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
	    margin: 0;
	    font-family: Arial, Helvetica, sans-serif;
	}
	.topnav {
	    overflow: hidden;
	    background-color: #333;
	}
    	.topnav a {
	    float: left;
	    color: #f2f2f2;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
    	    font-size: 17px;
	}
	.topnav a:hover {
	    background-color: #ddd;
	    color: black;
	}
	.topnav a.active {
	    background-color: #04AA6D;
	    color: white;
	}
    </style>

    </head>
<body>
    <div class="topnav">
	<a class="#Home" href="{{ ('/') }}">Home</a>
	<a href="{{ ('book_index') }}">記帳</a>
  	<a href="https://github.com/Tommy850517">GitHub</a>
  	<a href="{{ ('about') }}">About</a>
    </div>

     @yield('content')

</body>
</html>
