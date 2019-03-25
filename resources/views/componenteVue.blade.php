<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Proxima Centaury</title>

<!-- Fonts-->

<!-- Styles-->
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>
	<div class="container">
          <div class="well">
               <div id="app">
                    <h2 class="text-center">Captura tus ideas</h2>
                        <div class="well">
                            <h4>Envianos tus comentarios</h4>
                            <form>
                               	<div class="form-group">
                               	    <label for="emailaddress">E-mail</label> 
                                         <input type="email" name="emailaddress" class="form-control" id="email" required>
                               	        <!--select placeholder="{{ __('messages.cuenta') }}" id="cuentaOrigenCcM0"
							                class="form-control" title="Cuenta donde se tomar&aacute;n los recursos" required>
							                    
							            </select-->
                                </div>
                                <div class="form-group">
                                    <label for="comentario">Tu comentario</label>
                                    <input type="text" class="form-control" name="comentario" id="comentario" maxlength="256" required>
                                </div>
                                <div class="form-group">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Agregar
                                        </button>
                                    </span>
                                </div>
                            </form>
                            <hr>
                            <ul class="list-unstyled">
                                <li>
                                    <p>
                                        <small class="text-muted">Hace un minuto</small>
                                    </p>
                                </li>
                            </ul>
                        </div>
                </div>
          </div>
    </div>
    <!-- 
?php
echo phpinfo();
?>
    -->
    
        
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html-->