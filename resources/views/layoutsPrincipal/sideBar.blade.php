<?php
?>
<div class="mobile-nav-button">
									<div class="mobile-nav-button__line"></div>
									<div class="mobile-nav-button__line"></div>
									<div class="mobile-nav-button__line"></div>
								</div>
								<nav class="mobile-menu">
									<ul>
										<li><a href="#home" class="active scroll" >Desarrollo Web</a></li>
										<li><a href="#about" class="scroll" >Software a la Medida</a></li>
										<li><a href="#team" class="scroll" >Aplicaciones M&oacute;viles</a></li>
										<li><a href="#services" class="scroll" >VideoJuegos</a></li>
										<li><a href="#gallery" class="scroll" >Hardware</a></li>
										<li><a href="#contact" class="scroll" >Innovaci&oacute;n y Desarrollo</a></li>
									</ul>
								</nav>
<script>
	$(document).ready(function () {
	  $('.mobile-nav-button').on('click', function() {
	  $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
	  $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");  
	  $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");  
	  
	  $('.mobile-menu').toggleClass('mobile-menu--open');
	  return false;
	}); 
	});
</script>

