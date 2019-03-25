@extends('layoutsPrincipal.appMaster')

@section('title', 'Estructura Principal')

@section('sidebar')
    @parent
@endsection

@section ('content1')
<canvas id="cmpFirma" style="width:100%; height:200; border: 1px solid #f00;">
Si estas viendo esto tu navegador no sporta el objeto Canvas
</canvas>
@endsection

@section('content')
<div id="lienzo" style="width: 200px; height: 200px; background: #fff; border: 2px solid #000000;"></div>
<!--iframe src="/pinta.html" height="220" width="220"></iframe-->
@endsection

@section('scriptsAdicionales')
<script>
  var movimientos = new Array();
  var pulsado;
    function initCanvas() {
        var canvasDiv = document.getElementById('lienzo');
        canvas = document.createElement('canvas');
        canvas.setAttribute('width', 200);
        canvas.setAttribute('height', 200);
        canvas.setAttribute('id', 'canvas');
        canvasDiv.appendChild(canvas);
        if(typeof G_vmlCanvasManager != 'undefined') {
            canvas = G_vmlCanvasManager.initElement(canvas);
        }
        context = canvas.getContext("2d");

        $('#canvas').mousedown(function(e){
          pulsado = true;
          movimientos.push([e.pageX - this.offsetLeft,
              e.pageY - this.offsetTop,
              false]);
          repinta();
        });
        
        $('#canvas').mousemove(function(e){
          if(pulsado){
              movimientos.push([e.pageX - this.offsetLeft,
                e.pageY - this.offsetTop,
                true]);
        repinta();
        }
    });
    
    $('#canvas').mouseup(function(e){
        pulsado = false;
    });

    $('#canvas').mouseleave(function(e){
        pulsado = false;
    });
    repinta();
}

function repinta(){
  canvas.width = canvas.width; // Limpia el lienzo
  
  context.strokeStyle = "#0000a0";
  context.lineJoin = "round";
  context.lineWidth = 6;
            
  for(var i=0; i < movimientos.length; i++)
  {     
    context.beginPath();
    if(movimientos[i][2] && i){
      context.moveTo(movimientos[i-1][0], movimientos[i-1][1]);
      }else{
      context.moveTo(movimientos[i][0], movimientos[i][1]);
      }
      context.lineTo(movimientos[i][0], movimientos[i][1]);
      context.closePath();
      context.stroke();
  }
}

$(document).ready(function() {
    /*Creacion de CANVAS */
    initCanvas();
});
</script>
@endsection