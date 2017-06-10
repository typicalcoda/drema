<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">

	<title>Drema</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
	<style>
		html,body{
			background:#fff;
			padding:0;margin:0;
			color:#757575;
		}

		.box{
			background: #f7f7f7;
			width: 350px;
			padding: 15px;
			margin: 0 auto;
			margin-top: 50px;
			font-family: 'Open Sans', sans-serif;
			padding-bottom: 100px;

			-webkit-box-shadow: 0px 0px 11px 0px rgba(0,0,0,0.15);
			-moz-box-shadow: 0px 0px 11px 0px rgba(0,0,0,0.15);
			box-shadow: 0px 0px 11px 0px rgba(0,0,0,0.15);
		}
		.title{
			font-size: 22px;
			padding-top:22px;
			margin-bottom:50px;
		}
		.input{
			padding:0 30px;
			margin-bottom: 30px;
		}
		input[type=text],input[type=password]{
			display: block;
			outline: 0;
			border: 0;
			background: #f1f1f1;
			height: 35px;
			width: 90%;
			font-family: 'Open Sans', sans-serif;
			padding: 0 5%;


		}

		label{
			text-transform: capitalize;
			font-size: 12px;
		}

		button{
			outline: 0;
			border: 1px solid #e8e8e8;
			padding: 7px 11px;
			border-radius: 20px;
			font-size: 12px;
			color: #7d7d7d;
			text-transform: uppercase;
			background: #f9f9f9;
			transition:.3s;
		}
		button:hover{
			cursor:pointer;
			background:#efefef
		}

		.logo{
			text-align:center;
			padding-top:65px;
		}
		.logo img{
			width: 115px;
		}

		.errors{
			background: #ffe6e6;
			padding:10px 30px;
			border: 1px solid #f3e0e0;
			margin: 13px 0;
			font-size: 13px;
			color: #ce8989;
		}

		ul {
			padding:0; margin:0;
		}
	</style>
</head>

<body>

	<div class="logo">
		<img src="http://vignette1.wikia.nocookie.net/logopedia/images/8/89/New_Doritos_Logo.png/revision/latest?cb=20130305015621" alt="">
	</div>
	<div class="box">

		<form action="/login" method="post">
			{{ csrf_field() }}
			<div class="input">
				<div class="title">Login</div>
			</div>

			<div class="input">
				<label for="username">Username</label>
				<input id="username" name="username" type="text">
			</div>

			<div class="input">
				<label for="password">Password</label>
				<input id="password" name="password" type="password">

				@if($errors->any())
				<div class="errors">
					<ul>
						@foreach($errors->all() as $err)
						<li>{{$err}}</li>
						@endforeach
					</ul>
				</div>	
				@endif

			</div>

			<div class="input">
				<button type="submit">
					Login
				</button>
			</div>
		</form>
	</div>
	

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>