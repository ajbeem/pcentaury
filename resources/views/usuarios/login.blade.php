<?php
?>
@extends('layoutsPrincipal.app')
@section('title', 'Acceso')

@section('content')
<button onclick="document.getElementById('id01').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>                   
@endsection
       


@section('scripts')
 
    <!-- Page-Level Scripts -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        
       
        $(document).ready(function() {

            

            function registrosFilaHtml(fila) {
                 var rowNode = table
                   .row.add( {
                     reg : fila,
                       0 : fila.id,
                       1 : fila.concepto,
                       2 : fila.monto,
                       3 : fila.tipo_beneficiario,
                       4 : fila.id_Beneficiario,
                       5 : '<button data-toggle="modal" data-target="#modal-principal" class="edit-modal btn btn-info btn-xs">  <span class="glyphicon glyphicon-edit"></span> </button> <button data-toggle="modal" data-target="#modal-principal" class="delete-modal btn btn-danger btn-xs"> <span class="glyphicon glyphicon-trash"></span> </button>', 
                        })
                        .draw()
                        .node();
                 
            }

            function setData() {
                var data  = row.data();
                
                $('#id').val(data.reg.id);
                //$('#fecha_creacion').val(data.reg.fecha_creacion);
                //$('#fechaCreacionGroupAlta').hide();
                $('#fecha_creacionInfo').val(data.reg.fecha_creacion);
                $('#id_sucursal').val(data.reg.id_sucursal);
                $('#id_cuentaBancaria').val(data.reg.id_cuentaBancaria);
                $('#tOperacionInfo').val(data.reg.operacion);
                if($('#tOperacionInfo').val()=='cheque'){
                	$("#operacionCheque").attr('checked', true);                   
                }else{
                	$("#operacionTransferencia").attr('checked', true);
                };
                
                $('#numero_cheque').val(data.reg.numero_cheque);
                
                //$('#tBenefInfo').val(data.reg.tipo_beneficiario); 
                if($('#tBenefInfo').val()=='persona'){
                	$("#tipo_beneficiarioPersona").attr('checked', true);                   
                }else{
                	$("#tipo_beneficiarioNegocio").attr('checked', true);
                };
                $('#id_Beneficiario').val(data.reg.id_Beneficiario);
                $('#monto').val(data.reg.monto);
                $('#concepto').val(data.reg.concepto);                    
            }

            $('#dtPrincipal').DataTable({
                pageLength: 10,
                responsive: true,   
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [ 
                    {extend: 'excel', title: 'Conceptos Gastos'}, 
                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                        }
                    }
                ]

            });

            $("div.html5buttons").append('&nbsp;<button id="filtrar" type="button" class="btn btn-success">Filtrar</button>&nbsp;');
            $("div.html5buttons").append('<button id="nuevo" type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-principal">Nuevo</button>');

            var table = $('#dtPrincipal').DataTable();
            var row;
            
            $('#cmpSucursal').select2({
            placeholder: "{{ __('messages.sucursal') }}",
            minimumInputLength: 2,
                width: '100%',
            ajax: {
            url: '/lov/grupo/sucursales',
            dataType: 'json',
            type: 'get',
            data: function (params) {
                return {    
                    q: $.trim(params.term)
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        },
         templateResult: select2ResultFormat
    });
            
            $('#cmpBeneficiario').select2({
        placeholder: "{{ __('messages.beneficiario') }}",
        minimumInputLength: 2,
        width: '100%',
         ajax: {
            url: '/lov/personas',
            dataType: 'json',
            type: 'get',
            data: function (params) {
                return {    
                    q: $.trim(params.term)

                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
           
            cache: true
        },
         templateResult: select2ResultFormat
    });
                        
 
            $('#agregar').click( function () { 
                 $.ajax({
                        type: 'post',
                        url: '/gastosAcomprobar',
                        data: {
                            'FfechaCreacion'	 : $('#fecha_creacion').val(),
                            'Fid_sucursal'       : Number($('#id_sucursal').val()),
                            'Fid_cuentaBancaria' : Number($('#id_cuentaBancaria').val()),
                            'Foperacion'		 : $('input:radio[name=operacion]:checked').val(),
                            'Fnumero_cheque'     : Number($('#numero_cheque').val()),
                            'Ftipo_beneficiario' : $('input:radio[name=tipo_beneficiario]:checked').val(),
                            'Fid_Beneficiario'   : Number($('#id_Beneficiario').val()),
                            'Fmonto'             : Number($('#monto').val()),
                            'Fconcepto'          : $('#concepto').val()
                        },
                        success: function(data) {
                            if ((data.errors)) { 
                                toastr.error(JSON.stringify(data.errors)); 
                            } else {
                            	//row.remove().draw();
                                registrosFilaHtml(data);
                                toastr.success("Registro Guardado!!"); 
                                $('#modal-principal').modal('hide');
                            }
                        }
                });                
            } );
 
            $('#actualizar').click( function () { 
                 $.ajax({
                        type: 'put',
                        url: '/gastosAcomprobar/' + $("#id").val(),
                        data: {
                            'FfechaCreacion'	 : $('#fecha_creacion').val(),
                            'Fid_sucursal'       : Number($('#id_sucursal').val()),
                            'Fid_cuentaBancaria' : Number($('#id_cuentaBancaria').val()),
                            'Foperacion'		 : $('input:radio[name=operacion]:checked').val(),
                            'Fnumero_cheque'     : Number($('#numero_cheque').val()),
                            'Ftipo_beneficiario' : $('input:radio[name=tipo_beneficiario]:checked').val(),
                            'Fid_Beneficiario'   : Number($('#id_Beneficiario').val()),
                            'Fmonto'             : Number($('#monto').val()),
                            'Fconcepto'          : $('#concepto').val()
                        },
                        success: function(data) {
                            if ((data.errors)) { 
                                toastr.error(JSON.stringify(data.errors)); 
                            } else {
                                row.remove().draw();
                                registrosFilaHtml(data);
                                toastr.success("Registro Actualizado!!"); 
                                $('#modal-principal').modal('hide');
                            }
                        }
                });                
            } );
            

            $('#nuevo').click( function () {
                $('#id').val('0');
                $('#fechaCreacionGroupInfo').hide();
                $('#tBenefInfo').hide();
                $('#tOperacionInfo').hide();
                $('#operacion').attr('placeholder','Max 500 caracteres');
                $('.modal-title').text('Nuevo'); 
                $('.agregar-div').show();
                $('.actualiza-div').hide();
                $('.eliminar-div').hide();
            });
            
            $('#filtrar').click( function () { 
            var dat=$('#type_search').val();
            var valorBuscar=$('#value').val();
            table.clear().draw(); 
            if(valorBuscar==""){
                valorBuscar=0;
            }
            switch(dat){
                case "0":
                    alert('Seleccione una opcion de Busqueda');
                break;
                case "1":
                    $.ajax({
                        type: 'get',
                        url: 'gastosAcomprobar/0', 
                        success: function(data) {
                            if ((data.errors)) { 
                                toastr.error(JSON.stringify(data.errors)); 
                            } else {
                                table.clear().draw(); 
                                for (var i = 0; i <= data.length; i++) {   
                                    registrosFilaHtml(data[i]);  
                                };               
                            }
                        }
                }); 
                break;
                case "2":
                    var tipoC;
                    tipoC="persona";
                    $.ajax({
                        type: 'get',
                        url: 'gastosAcomprobar/0', 
                        success: function(data) {
                            if ((data.errors)) { 
                                toastr.error(JSON.stringify(data.errors)); 
                            } else {
                                    //TODO
                                for (var i = 0; i < data.length; i++) {   
                                        if(data[i].tipo_beneficiario==tipoC){
                                            registrosFilaHtml(data[i]); 
                                        }
                                    
                                    }; 
                            }
                        }
                    });  
                break;
                case "3":
                    var tipoN;
                    tipoN="negocio";
                    $.ajax({
                        type: 'get',
                        url: 'gastosAcomprobar/0', 
                        success: function(data) {
                            if ((data.errors)) { 
                                toastr.error(JSON.stringify(data.errors)); 
                            } else {
                                    //TODO
                                for (var i = 0; i < data.length; i++) {   
                                        if(data[i].tipo_beneficiario==tipoN){
                                            registrosFilaHtml(data[i]); 
                                        }
                                    
                                    }; 
                            }
                        }
                    });   
                break;
            }    
        });

            $('#eliminar').click( function () {
                $.ajax({
                    //dataType: 'json',
                    type:'delete', 
                    url: '/gastosAcomprobar/' + $("#id").val()
                }).done(function(data) {
                     if ((data.errors)) { 
                        toastr.error(JSON.stringify(data.errors)); 
                      } else {
                        row.remove().draw();
                        toastr.success('Registro eliminado!!'); 
                        $('#modal-principal').modal('hide');
                      }
                });
                
            } );


           
            $('#dtPrincipal tbody').on('click', '.delete-modal', function() {
                row  = table.row( $(this).parents('tr') );
                setData();
                $('#fechaCreacionGroupAlta').hide();
                $('#tBenefInfo').hide();
                $('#tOperacionInfo').hide();
                $('.modal-title').text('Eliminar'); 
                $('.agregar-div').hide();
                $('.eliminar-div').show();
                $('.actualiza-div').hide();
                
            });

            $('#dtPrincipal tbody').on( 'click', '.edit-modal', function() {
                row = table.row( $(this).parents('tr') )
                setData();
                $('.modal-title').text('Editar'); 
                $('.agregar-div').hide();
                $('.eliminar-div').hide();
                $('.actualiza-div').show(); 
            });
        
         
        });
 
    </script>
@endsection