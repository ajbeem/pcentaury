<?php
?>
<style>
* {
  box-sizing: border-box;
}

#videobg {  
right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}
#cajavideo{
margin: 0%;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

video {
  width: 100%;
  height: auto;
}

.mediaContenedor{
  height: 0;
  overflow: hidden;
  padding-bottom: 56.25%;
  padding-top: 30px;
  position:relative;
}

.mediaContenedor iframe,
.mediaContenedor object,
.mediaContenedor video{
  width: 100%;
  height: 100%;
  left:0;
  top:0;
  position:absolute;
}

</style>
	<!--video src="https://www.pcentaury.com/recursos/videos/divining.mp4" loop autoplay muted id="videobg">
  </video>
  <video src="https://www.pcentaury.com/recursos/videos/get_set.mp4" loop autoplay muted id="videobg">
	</video>
<div class="mediaContenedor">
  <video muted loop autoplay  id="videobg" poster="https://www.pcentaury.com/recursos/images/logoPC.png">
   <source src="https://www.pcentaury.com/recursos/videos/pt2.mp4"  type="video/mp4">
  Your browser does not support the video tag.
  </video>
</div--> 
	
	<div class="mediaContenedor">
  <video muted loop autoplay  id="videobg" poster="https://www.pcentaury.com/recursos/images/logoPC.png">
   <source src="https://www.pcentaury.com/recursos/videos/divining.mp4"  type="video/mp4">
  Your browser does not support the video tag.
  </video>
</div> 
<!-- //banner -->