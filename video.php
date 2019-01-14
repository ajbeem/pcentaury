<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
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

</style>
</head>
<body>


	<video src="/videos/divining.mp4" loop autoplay muted id="videobg">
	</video>

    
</body>
</html>