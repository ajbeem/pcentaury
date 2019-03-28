<?php?>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-animate-left"
	style="display: none; z-index: 5" id="mySidebar">
	<button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close
		&times;</button>
	<a href="#" class="w3-bar-item w3-button">Link 1</a> <a href="#"
		class="w3-bar-item w3-button">Link 2</a> <a href="#"
		class="w3-bar-item w3-button">Link 3</a>
</div>

<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()"
	style="cursor: pointer" id="myOverlay"></div>

<!-- <div>
	<button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
	<div class="w3-container">
		<h1>Sidebar Overlay</h1>
		<p>The w3-overlay class can be used to create an overlay effect, when
			opening the sidebar. The w3-overlay class adds a black background
			with a 50% opacity to the "page content" - this effect will
			"highlight" the side navigation</p>
		<p>Click on the "hamburger menu" to see the effect.</p>
	</div>
</div> -->

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>