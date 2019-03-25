<?php
?>
<link rel="stylesheet"
	href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel='stylesheet'
	href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'
	integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/'
	crossorigin='anonymous'>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- navBar dropdown hoverable-->
<div class="w3-bar"
	style="background: #002248; font-family: Arial, Helvetica, sans-serif; color: antiquewhite;">
	<div class="w3-bar-item w3-button w3-mobile">
		<a href="#"><h4>Servicios e Infraestructura Inform&aacute;tica</h4> </a>
	</div>

	<div class="w3-dropdown-hover w3-mobile">
		<button class="w3-button">
			Mistica <i class="fa fa-caret-down"></i>
		</button>
		<div class="w3-dropdown-content w3-bar-block w3-blue">
			<a href="#" class="w3-bar-item w3-button w3-mobile">Misi&oacute;n</a>
			<a href="#" class="w3-bar-item w3-button w3-mobile">Visi&oacute;n</a>
			<a href="#" class="w3-bar-item w3-button w3-mobile">Valores</a> <a
				href="#" class="w3-bar-item w3-button w3-mobile">WebMaster</a>
		</div>
	</div>

	<div class="w3-dropdown-hover w3-mobile">
		<button class="w3-button">
			Normatividad <i class="fa fa-caret-down"></i>
		</button>
		<div class="w3-dropdown-content w3-bar-block w3-blue">
			<a href="#" class="w3-bar-item w3-button w3-mobile">Aviso de
				privacidad</a> 
			
			<a href="#" class="w3-bar-item w3-button w3-mobile">T&eacute;rminos
				y Condiciones</a> 
			<a href="#"
				class="w3-bar-item w3-button w3-mobile">Normas y Est&aacute;ndares</a>
		</div>
	</div>

	<div class="w3-dropdown-hover w3-mobile">
		<button class="w3-button">
			Contacto <i class="fa fa-caret-down"></i>
		</button>
		<div class="w3-dropdown-content w3-bar-block w3-blue">
			<a href="https://www.facebook.com/Alfredbeem"
				class="w3-bar-item w3-button w3-mobile"> <i
				class="fa fa-facebook-square" style="font-size: 20px"></i> &nbsp;
				Facebook
			</a> <a
				href="https://plus.google.com/u/0/communities/103299867207875326585"
				class="w3-bar-item w3-button w3-mobile"> <i
				class="fa fa-google-plus-square" style="font-size: 20px"></i>&nbsp;
				Google Plus
			</a> <a href="https://twitter.com/al12506003"
				class="w3-bar-item w3-button w3-mobile"> <i
				class="fa fa-twitter-square" style="font-size: 20px"></i>&nbsp;
				Twitter
			</a>
		</div>
	</div>
	<div style="padding-top: 10px;">
		<input type="text" class="w3-bar-item w3-input" placeholder="Search..">
		<a href="#" class="w3-bar-item w3-button w3-blue">Go</a>
	</div>

	<div style="padding-top: 10px;">
		<a href="{{url('/vue')}}" class="w3-bar-item w3-button w3-mobile w3-hover-blue">
		<i class="fa fa-steam" style="font-size: 20px; color:blue"></i>&nbsp; Proyecto Vue
		</a> 
		
		<a href="#" class="w3-bar-item w3-button w3-mobile w3-hover-blue"
			onclick="document.getElementById('modalAudio').style.display='block'">
			Blog Colaborativo<i class="fas fa-atlas"
			style="font-size: 24px; color: green"></i>
		</a>

	</div>

</div>
