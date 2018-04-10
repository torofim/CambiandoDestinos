<!DOCTYPE Html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/newstyle.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Hind" rel="stylesheet">

</head>
<body>
	@include('layouts.nav')

		</ul>
	</div>
	<div class="lefted" style="background-image:url()">
		@yield('principal')
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
	<script src="{{ URL::asset('js/Chart.bundle.min.js') }}"></script>
	@yield('scripts')
</body>
</html>