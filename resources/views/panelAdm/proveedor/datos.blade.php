@extends('plantilla.plantilla')
@section('pageTitle')
<div class="content-header pb-0 pt-2">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"><h1 class="m-0"></h1></div>
            <div class="col-sm-6">
                <!-- <a href="{{url('panelAdm/paProveedor/changePassword')}}" class="btn btn-success float-right"><i class="fa fa-lock"></i> Cambiar contraseña</a> -->
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#modalChangePassword">
                    <i class="fa fa-lock"></i> Cambiar contraseña
                </button>
                <ol class="breadcrumb float-sm-right" style="display: none;">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v3</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
@section('contentPanelAdmin')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body p-0">
            <h3 class="text-center font-weight-bold font-italic m-0">MIS DATOS</h3>
        </div>
    </div>
</div>
@if(is_null(Session::get('proveedor')->tipoPersona)
    || is_null(Session::get('proveedor')->numeroDocumento)
    || is_null(Session::get('proveedor')->direccion)
    || is_null(Session::get('proveedor')->correo)
    || is_null(Session::get('proveedor')->celular)
    || is_null(Session::get('proveedor')->usuario)
)
<div class="col-lg-12">
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
        Tienes que completar todos tus datos para poder realizar tus cotizaciones.!
    </div>
</div>
@endif
<!-- <section class="content"> -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="https://adminlte.io/themes/v3/dist/img/user4-128x128.jpg" alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center nombreProveedor">Jhonatan, Bautista Quispe</h3>
                    <p class="text-muted text-center rucProveedor">RUC: 10746041620</p>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Usuario.</b> <a class="float-right usuarioProveedor">10746041620</a>
                        </li>
                        <li class="list-group-item">
                            <b>Password.</b> <a class="float-right">***************</a>
                        </li>
                        <li class="list-group-item">
                            <p class="text-muted text-center">Cabe señalar que su usuario sera su RUC</p>
                        </li>
                    </ul>
                    <!-- <a href="#" class="btn btn-primary btn-block"><b>Cambiar Contraseña</b></a> -->
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalChangePassword">
                        <i class="fa fa-lock"></i> Cambiar Contraseña
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="invoice p-3 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h4>
                            <i class="fas fa-lg fa-building"></i> Mis datos Personales.
                            <small class="float-right fechaRegistro">Fecha Registro: 2/10/2023</small>
                        </h4>
                    </div>
                </div>
                <div class="row invoice-info">
                    <div class="col-sm-3 invoice-col">
                        Datos Personales
                        <address>
                            <strong>Dni.</strong>
                            <br>
                            <span class="dniPersona">7460416</span>
                            <br>
                            <b>Nombres</b> 
                            <br>
                            <span class="nombrePersona">Jhonatan</span>
                            <br>
                        </address>
                    </div>
                    <div class="col-sm-3 invoice-col">
                        <br>
                        <address>
                            <strong>Dirección.</strong>
                            <br>
                            <span class="direccionPersona">
                                <!-- <span class="badge badge-warning direccionPersona">Incompleto</span> -->
                            </span>
                            <br>
                            <b>Apellido Paterno</b><br>
                            <span class="apPersona"></span>
                            <br>
                        </address>
                    </div>
                    <div class="col-sm-4 invoice-col">
                    <br>
                        <address>
                            <strong>Correo Electronico.</strong>
                            <br>
                            <span class="correoPersona">Jhonatan.01ba@gmail.com </span>
                            <br>
                            <b>Apellido Materno</b>
                            <br>
                            <span class="amPersona">Quispe</span>
                            <br>
                        </address>
                    </div>
                    <div class="col-sm-2 invoice-col">
                    <br>
                        <address>
                            <strong>SUNAT.</strong>
                            <br>
                            <span class="estadoSunat">
                            </span> 
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p class="lead">Metodo de Pago:</p>
                        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                            En esta sección se mostrara la cuenta bancaria relacionada a su persona y/o empresa, 
                            para lo cual se sugiere siempre tenerlo actualizado en caso de cambios.
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="lead">Datos Bancarios</p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th style="width:50%">Banco</th>
                                        <td><span class="bancoPersona">Incompleto</span></td>
                                    </tr>
                                    <tr>
                                        <th>CCI</th>
                                        <td><span class="cciPersona">Incompleto</span></td>
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Mensaje text -->
                <div class="col-12">
                    <hr>
                </div>
                <div class="row no-print">
                    <div class="col-12">
                        <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Imprimir</a>
                        <button type="button" class="btn btn-success float-right"><i class="fa fa-edit"></i> Actualizar Datos
                        </button>
                        <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                            <i class="fas fa-download"></i> Generate PDF
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </section> -->
<!-- ---------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------- -->
<div class="container-fluid">
        <form id="fvproveedor">
    <div class="row">
        <!-- <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-0">
                    <h3 class="text-center font-weight-bold font-italic m-0">MIS DATOS</h3>
                </div>
            </div>
        </div> -->
        <div class="col-lg-12">
            <div class="card card-info">
                <div class="card-header py-1"><h3 class="card-title font-weight-bold font-italic"><i class="fa fa-user-tie"></i> Datos de proveedor</h3></div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label class="m-0">Tipo de persona: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <select name="tipoPersona" id="tipoPersona" class="form-control tipoPersona" disabled>
                                    <option disabled value="0"> Seleccione una opcion</option>
                                    <option value="PERSONA NATURAL">PERSONA NATURAL</option>
                                    <option value="PERSONA JURIDICA" selected>PERSONA JURIDICA</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label class="m-0">Numero de documento: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control input numeroDocumento soloNumeros" id="numeroDocumento" name="numeroDocumento" maxlength="11">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="m-0">Razon social: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control pj razonSocial input" id="razonSocial" name="razonSocial">
                            </div>
                        </div>
                        <div class="form-group col-lg-3" style="display: none;">
                            <label class="m-0">Nombre: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control pn nombre input" id="nombre" name="nombre">
                            </div>
                        </div>
                        <div class="form-group col-lg-3" style="display: none;">
                            <label class="m-0">Apellido paterno: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control pn apellidoPaterno input" id="apellidoPaterno" name="apellidoPaterno">
                            </div>
                        </div>
                        <div class="form-group col-lg-4" style="display: none;">
                            <label class="m-0">Apellido materno: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control pn apellidoMaterno input" id="apellidoMaterno" name="apellidoMaterno">
                            </div>
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="m-0">Direccion: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control input" id="direccion" name="direccion">
                            </div>
                        </div>
                        <div class="form-group col-lg-2">
                            <label class="m-0">Activo (SUNAT): <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <select name="activo" id="activo" class="form-control activo">
                                    <option disabled value="0">Seleccione opcion</option>
                                    <option value="1" selected>Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-2">
                            <label class="m-0">Habido (SUNAT): <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <select name="habido" id="habido" class="form-control habido">
                                    <option disabled value="0">Seleccione opcion</option>
                                    <option value="1" selected>Habido</option>
                                    <option value="0">No habido</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group col-lg-4">
                            <label class="m-0">Usuario: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control input" id="usuario" name="usuario" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 dataRepresentante" style="display: none;">
            <div class="card card-info">
                <div class="card-header py-1"><h3 class="card-title font-weight-bold font-italic"><i class="fa fa-id-card"></i> Datos del representante</h3></div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label class="m-0">DNI: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control pj soloNumeros input" id="dniRep" name="dniRep" maxlength="8">
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label class="m-0">Nombre: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control pj input" id="nombreRep" name="nombreRep">
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label class="m-0">Apellido paterno: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control pj input" id="apellidoPaternoRep" name="apellidoPaternoRep">
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label class="m-0">Apellido materno: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control pj input" id="apellidoMaternoRep" name="apellidoMaternoRep">
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <label class="m-0">Direccion: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control pj input" id="direccionRep" name="direccionRep">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-info">
                <div class="card-header py-1"><h3 class="card-title font-weight-bold font-italic"><i class="fa fa-university"></i> Datos del banco</h3></div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="m-0">Banco: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <!-- <input type="text" class="form-control input" id="banco" name="banco"> -->
                                <select class="form-control input" id="banco" name="banco">
                                    <option disabled selected>Seleccione el banco</option>
                                    <option value="BCP">Banco de Crédito del Perú (BCP)</option>
                                    <option value="banco de la nacion">Banco de la Nacion</option>
                                    <option value="INTERBAK">Interbank</option>
                                    <option value="SCOTIABANK">Scotiabank Perú</option>
                                    <option value="BBVA">BBVA Continental</option>
                                    <option value="BANCO PICHINCHA">Banco Pichincha</option>
                                    <option value="Banco Financiero">Banco Financiero</option>
                                    <option value="Banco Falabella">Banco Falabella</option>
                                    <option value="Citibank Peru">Citibank Perú</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="m-0">CCI: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control input soloNumeros" id="cci" name="cci" maxlength="20">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-info">
                <div class="card-header py-1"><h3 class="card-title font-weight-bold font-italic"><i class="fa fa-address-book"></i> Datos de contacto</h3></div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="m-0">Correo: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control input" id="correo" name="correo">
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="m-0">Celular: <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                                </div>
                                <input type="text" class="form-control soloNumeros input" id="celular" name="celular" maxlength="9">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <div class="col-lg-12">
            <button type="button" class="btn btn-success float-right save"><i class="fa fa-save"></i> Guardar datos</button>
        </div>
    </div>
    <!-- <div class="card" style="display: none;">
        <div class="overlay overlayRegistros">
            <div class="spinner"></div>
        </div>
    	<div class="card-body">
    		<h3 class="text-center font-weight-bold font-italic">MIS DATOS</h3>
    		<form id="fvproveedorr">
    		<div class="row" style="display: none;">
                <div class="form-group col-lg-4">
                    <label class="m-0">Tipo de persona: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <select name="tipoPersona" id="tipoPersona" class="form-control tipoPersona">
                            <option disabled value="0"> Seleccione una opcion</option>
                            <option value="PERSONA NATURAL">PERSONA NATURAL</option>
                            <option value="PERSONA JURIDICA" selected>PERSONA JURIDICA</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">Numero de documento: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control input numeroDocumento soloNumeros" id="numeroDocumento" name="numeroDocumento" maxlength="11">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">Razon social: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control pj razonSocial input" id="razonSocial" name="razonSocial">
                    </div>
                </div>
                <div class="form-group col-lg-4" style="display: none;">
                    <label class="m-0">Nombre: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control pn nombre input" id="nombre" name="nombre">
                    </div>
                </div>
                <div class="form-group col-lg-4" style="display: none;">
                    <label class="m-0">Apellido paterno: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control pn apellidoPaterno input" id="apellidoPaterno" name="apellidoPaterno">
                    </div>
                </div>
                <div class="form-group col-lg-4" style="display: none;">
                    <label class="m-0">Apellido materno: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control pn apellidoMaterno input" id="apellidoMaterno" name="apellidoMaterno">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">Direccion: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control input" id="direccion" name="direccion">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">Activo (SUNAT): <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <select name="activo" id="activo" class="form-control activo">
                            <option disabled value="0">Seleccione opcion</option>
                            <option value="1" selected>Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">Habido (SUNAT): <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <select name="habido" id="habido" class="form-control habido">
                            <option disabled value="0">Seleccione opcion</option>
                            <option value="1" selected>Habido</option>
                            <option value="0">No habido</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">DNI del representante: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control pj soloNumeros input" id="dniRep" name="dniRep" maxlength="8">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">Nombre del representante: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control pj input" id="nombreRep" name="nombreRep">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">Apellido paterno del representante: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control pj input" id="apellidoPaternoRep" name="apellidoPaternoRep">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">Apellido materno del representante: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control pj input" id="apellidoMaternoRep" name="apellidoMaternoRep">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">Direccion del representante: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control pj input" id="direccionRep" name="direccionRep">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">Banco: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <select class="form-control input" id="banco" name="banco">
                            <option disabled selected>Seleccione el banco</option>
                            <option value="BCP">Banco de Crédito del Perú (BCP)</option>
                            <option value="banco de la nacion">Banco de la Nacion</option>
                            <option value="INTERBAK">Interbank</option>
                            <option value="SCOTIABANK">Scotiabank Perú</option>
                            <option value="BBVA">BBVA Continental</option>
                            <option value="BANCO PICHINCHA">Banco Pichincha</option>
                            <option value="Banco Financiero">Banco Financiero</option>
                            <option value="Banco Falabella">Banco Falabella</option>
                            <option value="Citibank Peru">Citibank Perú</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">CCI: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control input soloNumeros" id="cci" name="cci" maxlength="20">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">Correo: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control input" id="correo" name="correo">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">Celular: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control soloNumeros input" id="celular" name="celular" maxlength="9">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">Usuario: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control input" id="usuario" name="usuario">
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    <label class="m-0">Contraseña: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text font-weight-bold"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <input type="text" class="form-control input" id="password" name="password">
                    </div>
                </div>
    		</div>
            </form>
    	</div>
        <div class="card-footer py-1 border-transparent" style="display: none;">
            <button type="button" class="btn btn-success float-right save"><i class="fa fa-save"></i> Guardar datos</button>
        </div>
    </div> -->

</div>
@include('panelAdm.proveedor.mChangePassword')
<script>
    localStorage.setItem("sba",3);
    
    var flip=0;
    $(document).ready( function () {
        $.validator.addMethod("lettersOnly", function(value, element) {
            return this.optional(element) || /^[A-Za-z]+$/.test(value);
        }, "Este campo debe contener solo letras.");
        fillProveedor();
        initFv('fvproveedor',rules());
        // $('.overlayPagina').css("display","none");
        // $('.overlayRegistros').css("display","none");
    });
    $('.tipoPersona').on('change',function(){
        changeTipoPersona($(this).val());
    });
    $('.save').on('click',function(){
        save();
    });
    function fillProveedor()
    {
        // {{Session::get('proveedor')->idPro}}
        jQuery.ajax(
        { 
            url: "{{ url('proveedor/editar') }}",
            data: {id:{{Session::get('proveedor')->idPro}}},
            method: 'post',
            headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
            success: function(r){
                console.log(r);
                cleanFv('fvproveedor');
                idPro = r.data.idPro;
                $('#fvproveedor #tipoPersona').val(r.data.tipoPersona===null?'0':r.data.tipoPersona);
                $('#fvproveedor #numeroDocumento').val(r.data.numeroDocumento);
                $('#fvproveedor #direccion').val(r.data.direccion);
                $('#fvproveedor #activo').val(r.data.activo===null?'0':r.data.activo);
                $('#fvproveedor #habido').val(r.data.habido===null?'0':r.data.habido);
                $('#fvproveedor #correo').val(r.data.correo);
                $('#fvproveedor #celular').val(r.data.celular);
                $('#fvproveedor #usuario').val(r.data.usuario);
                $('#fvproveedor #banco').val(r.data.banco);
                $('#fvproveedor #cci').val(r.data.cci);
                // --------------------

                
                $('.rucProveedor').html('RUC: '+r.data.numeroDocumento);
                $('.usuarioProveedor').html(r.data.numeroDocumento);
                
                $('.correoPersona').html(dataIncompleta(novDato(r.data.correo)));
                $('.estadoSunat').html(novDato(r.data.activo)=='--'?
                    '<span class="badge badge-warning">Incompleto</span>':
                    r.data.activo=='1'?'<span class="badge badge-success">Activo</span>':
                    '<span class="badge badge-danger">Inactivo</span>'
                );
                $('.bancoPersona').html(dataIncompleta(novDato(r.data.banco)));
                $('.cciPersona').html(dataIncompleta(novDato(r.data.cci)));

                fecha = new Date(r.data.fr);
                fechaFormat = `${fecha.getDate()} de ${obtenerNombreMes(fecha.getMonth() + 1)} de ${fecha.getFullYear()}`;
                console.log(fechaFormat);
                $('.fechaRegistro').html('Fecha Registro: '+fechaFormat);
                // amPersona
                // estadoSunat
                // --------------------

                if(r.data.tipoPersona=='PERSONA JURIDICA')
                {
                    // --------------
                    
                    $('.nombreProveedor').html(r.data.razonSocial);
                    $('.dniPersona').html(dataIncompleta(novDato(r.data.dniRep)));
                    $('.nombrePersona').html(dataIncompleta(novDato(r.data.nombreRep)));
                    $('.direccionPersona').html(dataIncompleta(novDato(r.data.direccionRep)));
                    $('.apPersona').html(dataIncompleta(novDato(r.data.apellidoPaternoRep)));
                    $('.amPersona').html(dataIncompleta(novDato(r.data.apellidoMaternoRep)));
                    
                    // --------------
                    $('#fvproveedor .razonSocial').rules('add', {required: true});
                    $('#fvproveedor .nombre').rules('remove', 'required');
                    $('#fvproveedor .apellidoPaterno').rules('remove', 'required');
                    $('#fvproveedor .apellidoMaterno').rules('remove', 'required');
                    $('#fvproveedor .pn').val('');
                    // --
                    $('#fvproveedor .razonSocial').val(r.data.razonSocial);
                    $('#fvproveedor #dniRep').val(r.data.dniRep);
                    $('#fvproveedor #nombreRep').val(r.data.nombreRep);
                    $('#fvproveedor #apellidoPaternoRep').val(r.data.apellidoPaternoRep);
                    $('#fvproveedor #apellidoMaternoRep').val(r.data.apellidoMaternoRep);
                    $('#fvproveedor #direccionRep').val(r.data.direccionRep);
                    $('#fvproveedor .pj').parent().parent().css('display','block');
                    $('#fvproveedor .pn').parent().parent().css('display','none');
                    $('.dataRepresentante').css('display','block');
                }
                else
                {
                    // --------------
                    
                    $('.nombreProveedor').html(
                        r.data.nombre+' '+
                        r.data.apellidoPaterno+' '+
                        r.data.apellidoMaterno
                    );
                    $('.dniPersona').html(r.data.numeroDocumento.slice(2, 10));
                    $('.nombrePersona').html(r.data.nombre);
                    $('.direccionPersona').html(dataIncompleta(novDato(r.data.direccion)));
                    $('.apPersona').html(dataIncompleta(novDato(r.data.apellidoPaterno)));
                    $('.amPersona').html(dataIncompleta(novDato(r.data.apellidoMaterno)));
                    // -------------
                    $('#fvproveedor .nombre').rules('add', {required: true});
                    $('#fvproveedor .apellidoPaterno').rules('add', {required: true});
                    $('#fvproveedor .apellidoMaterno').rules('add', {required: true});
                    $('#fvproveedor .razonSocial').rules('remove', 'required');
                    $('#fvproveedor .pj').val('');
                    // --
                    $('#fvproveedor .nombre').val(r.data.nombre);
                    $('#fvproveedor .apellidoPaterno').val(r.data.apellidoPaterno);
                    $('#fvproveedor .apellidoMaterno').val(r.data.apellidoMaterno);
                    $('#fvproveedor .pj').parent().parent().css('display','none');
                    $('#fvproveedor .pn').parent().parent().css('display','block');
                    $('.dataRepresentante').css('display','none');
                }
                $('.overlayPagina').css("display","none");
                // $('.overlayRegistros').css("display","none");
            }
        });
    }
    function dataIncompleta(data)
    {
        return data == '--'?'<span class="badge badge-warning">Incompleto</span>':data;
    }
    function rules()
    {
        return {
            tipoPersona: {required: true,},
            numeroDocumento: {required: true,digits: true,minlength: 11},
            razonSocial: {required: true,},
            direccion: {required: true,},
            activo: {required: true,},
            habido: {required: true,},
            dniRep: {digits: true,minlength: 8},
            nombreRep: {lettersOnly: true},
            apellidoPaternoRep: {lettersOnly: true},
            apellidoMaternoRep: {lettersOnly: true},
            banco: {required: true,},
            cci: {required: true,minlength: 20},
            correo: {required: true,},
            celular: {required: true,minlength: 9}
        };
    }
    function save()
    {
        // alert('cascs')
        if($('#fvproveedor').valid()==false)
        {return;}
        var formData = new FormData($("#fvproveedor")[0]);
        // alert('paso la val')
        $('.save').prop('disabled',true);
        $( ".overlayRegistros" ).toggle( flip++ % 2 === 0 );
        jQuery.ajax(
        { 
            url: "{{ url('panelAdm/paProveedor/guardar') }}",
            data: formData,
            method: 'post',
            dataType: 'json',
            processData: false, 
            contentType: false, 
            headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
            success: function(r){
                console.log(r);
                $( ".overlayRegistros" ).toggle( flip++ % 2 === 0 );
                // limpiarForm();
                $('.save').prop('disabled',false);
                msjRee(r);
            }
        });
    }
    function changeTipoPersona()
    {
        if($('.tipoPersona').val()=='PERSONA NATURAL')
        {
            $('.nombre').rules('add', {required: true});
            $('.apellidoPaterno').rules('add', {required: true});
            $('.apellidoMaterno').rules('add', {required: true});
            $('.razonSocial').rules('remove', 'required');
            $('.pj').val('');
            cleanFv('fvproveedor');
            $('.pj').parent().parent().css('display','none');
            $('.pn').parent().parent().css('display','block');
            $('.dataRepresentante').css('display','none');
        }
        else
        {
            $('.razonSocial').rules('add', {required: true});
            $('.nombre').rules('remove', 'required');
            $('.apellidoPaterno').rules('remove', 'required');
            $('.apellidoMaterno').rules('remove', 'required');
            $('.pn').val('');
            cleanFv('fvproveedor');
            $('.pn').parent().parent().css('display','none');
            $('.pj').parent().parent().css('display','block');
            $('.dataRepresentante').css('display','block');
        }

    }
</script>
@endsection