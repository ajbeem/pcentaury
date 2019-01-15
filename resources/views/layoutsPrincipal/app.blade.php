<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="keywords"
	content="Responsive web Design , Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Pr&oacute;xima Centaury</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<!-- font-awesome-icons -->
<link rel="stylesheet" href="https://www.pcentaury.com/recursos/css/icons.css" type="text/css" media="all" />
<link href="https://www.pcentaury.com/recursos/css/style-index.css" rel="stylesheet">
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    </script>
</head>
<body style="background-color: #002248;">
	<header>
		<!-- Nav Bar    @include('layoutsPrincipal.navBar')-->
		@include('layoutsAuxiliaresPrincipal.navbarDisplayMenu')
	</header>
	@csrf
	<!-- Aside -->
	@include('layoutsPrincipal.sideBar')
	<!-- video banner -->
	@include('layoutsPrincipal.bg-video1')

	<div class="container">
		<div class="row"></div>
		<div class="row">
			<div class="col-lg-12">@yield('content')</div>
		</div>
	</div>

	<!--Footer-->
	@include('layoutsPrincipal.footer')
	<!--Dev Vue Mode>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.js"></script-->
	<script src = "https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
	<!--Prod Vue Mode>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.min.js"></script-->
	<!--Dev Mode-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
	<!--Prod Mode>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script-->
</body>
</html>