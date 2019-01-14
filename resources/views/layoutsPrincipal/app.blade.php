<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="keywords"
	content="Responsive web Design Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pr&oacute;xima Centaury</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- font-awesome-icons -->
<link rel="stylesheet" href="css/icons.css" type="text/css" media="all"/>
<link href="css/style-index.css" rel="stylesheet"> 
    <script src="js/JQUERY/jquery-dev-3.1.1.js"></script>
    <script src="js/BOOTSTRAP/bootstrap.min.js"></script>
    <script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    </script>
</head>
<body style="background-color: #002248;">
    
    <!-- Nav Bar -->
    @include('layoutsPrincipal.navBar')
    <!-- Aside -->
    @include('layoutsPrincipal.sideBar')
    <!-- video banner -->
    @include('layoutsPrincipal.bg-video1')
    
    <div class="container">
        <div class="row">
                 
        </div>
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>
   
    <!--Footer-->
    @include('layoutsPrincipal.footer')
    <!--Dev Vue Mode>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.js"></script-->
    <script src="js/VUE/vue.dev.js"></script>
    <!--Prod Vue Mode>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.min.js"></script-->
    <!--Dev Mode>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script-->
    <script src="js/VUE/axios.dev.js"></script>
    <!--Prod Mode>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script-->
</body>
</html>