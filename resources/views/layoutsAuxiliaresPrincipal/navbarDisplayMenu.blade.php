<?php
?>
<!--!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barra de navegación</title>
    <link rel="stylesheet" href="css/navBarMenuStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <header-->
<style>
/* *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
} */
#barraNav {
	font-family: Arial, Helvetica, sans-serif;
	color: antiquewhite;
}

a:link {
	color: rgb(247, 244, 244);
}

/* visited link */
a:visited {
	color: rgb(187, 194, 187);
}

/* mouse over link */
a:hover {
	color: rgb(105, 245, 255);
}

/* selected link */
a:active {
	color: rgb(183, 183, 240);
}

header {
	width: 100%;
	height: 50px;
	background: #002248;
}

#btnMenu {
	display: none;
}

header label {
	display: none;
	width: 20px;
	height: 20px;
	padding: 5px;
	border-right: #ffffff;
	cursor: pointer;
	/* background: rgba(0, 0, 0, 3); */
}

.mimenu ul {
	margin: 0;
	list-style: none;
	padding: 0;
	display: flex;
	/* justify-content: flex-end; border-right: #ffffff;*/
}

.mimenu ul ul {
	display: none;
}

/* .mimenu li {
    border: 1px solid #fff;
	border-right: 1px solid #ffffff;
} */

.mimenu li:hover {
	background: rgba(0, 0, 0, 0.3)
}

.mimenu li a {
	display: block;
	padding: 15px 20px;
	color: #ffffff;
	text-decoration: none;
}

.mimenu a:hover {
	background: rgba(0, 0, 0, 0.3);
}

.mimenu a span {
	margin-left: 10px;
}

.mimenu ul li:hover ul {
	display: block;
	position: absolute;
	background: #366499;
}

@media ( max-width :768px) {
	header label {
		display: block;
	}
	.mimenu {
		position: absolute;
		top: 50px;
		left: 0;
		background: #002248;
		width: 50%;
		/* margin-left: -50%; */
		transform: translateX(-100%);
		transition: all 0.3s;
	}
	.mimenu ul {
		display: block;
		background: #002248;
	}
	.mimenu li {
		border-top: 1px solid #fff;
	}
	.mimenu ul li:hover ul {
		display: none;
		position: static;
	}
	.mimenu a span {
		position: relative;
		right: 5px;
	}
	#btnMenu:checked ~ .mimenu {
		transform: translateX(0%);
	}
}

.navBar-head{
font-family: sans-serif;
font-size: 20px;
}
</style>
<input type="checkbox" name="btnMenu" id="btnMenu">
<label for="btnMenu"> <img src="https://www.pcentaury.com/recursos/images/menu-512.png" alt="menu"
	height="42" width="42">
</label>
<nav class="mimenu" id="barraNav">
	<ul>
		<li class="navBar-head"><a href="#">Servicios e Infraestructura
				inform&aacute;tica
				</a>
		</li>
		<li class="submenu"><a href="#">Mistica<span class="caret"></span></a>
			<ul>
				<li><a href="#">Misi&oacute;n</a></li>
				<li><a href="#">Visi&oacute;n</a></li>
				<li><a href="#">Valores</a></li>
				<li><a href="#">WebMaster</a></li>
			</ul></li>

		<li class="submenu"><a href="#">Marco Jur&iacute;dico<span
				class="caret"></span></a>
			<ul>
				<li><a href="#">Aviso de privacidad</a></li>
				<li><a href="#">T&eacute;rminos y Condiciones</a></li>
				<li><a href="#">Normativa</a></li>
			</ul></li>

		<li class="submenu"><a href="#">Contacto</a>
			<ul>
				<li><a href="https://www.facebook.com/Alfredbeem"> <img alt="face"
						src="https://www.pcentaury.com/recursos/images/facebook.png" width="20vw"
						height="25vh"> Facebook
				</a></li>
				<li><a href="https://twitter.com/al12506003"> <img alt="twitterfred"
						src="https://www.pcentaury.com/recursos/images/twitter.png" width="20vw"
						height="25vh"> Twitter
				</a></li>
				<li><a
					href="https://plus.google.com/u/0/communities/103299867207875326585">
						<img alt="gplusfred"
						src="https://www.pcentaury.com/recursos/images/googleplus.png" width="20vw"
						height="25vh"> Google
				</a></li>
			</ul></li>
		<li><a href="#"><span class="glyphicon glyphicon-user"></span>
				Registrarse</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>
				Acceso</a></li>
		<li>
			<form class="navbar-form navbar-left" action="/action_page.php">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</li>
	</ul>
</nav>
<script>
		$('#btnMenu').prop('checked', false); 

        $('.submenu').click(function(){
            $(this).children("ul").slideToggle();
        });

        $("ul").click(function(p){
            p.stopPropagation();
        });
</script>