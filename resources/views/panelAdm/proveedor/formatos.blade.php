@extends('plantilla.plantilla')
@section('pageTitle')
<div class="content-header pb-0 pt-2" style="display: none;">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"><h1 class="m-0"></h1></div>
            <div class="col-sm-6">
                <a href="{{url('panelAdm/paProveedor/datos')}}" class="btn btn-success float-right"><i class="fa fa-cogs"></i> Mis datos</a>
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
@if(is_null(Session::get('proveedor')->tipoPersona)
    || is_null(Session::get('proveedor')->numeroDocumento)
    || is_null(Session::get('proveedor')->direccion)
    || is_null(Session::get('proveedor')->correo)
    || is_null(Session::get('proveedor')->celular)
    || is_null(Session::get('proveedor')->usuario)
)
<script>
    $(document).ready( function () {
        $('.overlayPagina').css("display","none");
        console.log("{{Session::get('proveedor')->idPro}}")
        console.log("{{Session::get('proveedor')->tipoPersona}}")
        console.log("{{Session::get('proveedor')->numeroDocumento}}")
        console.log("{{Session::get('proveedor')->tipoPersona}}")
        console.log("{{Session::get('proveedor')->tipoPersona}}")
        Swal.fire({
            title: "COTIZACION",
            text: "Es necesario que complete sus datos personales.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK",
            allowOutsideClick: false, 
            allowEscapeKey: false, 
            showCancelButton: false,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{url('panelAdm/paProveedor/datos')}}";
            }
        });
    });
</script>
@else
<div class="container-fluid mt-3">
    <div class="card">
        
    	<div class="card-body">
    		<h3 class="text-center font-weight-bold font-italic">Formatos de cotizacion</h3>
            <div class="row">
                <div class="col-lg-2">
                    <!-- <button class="btn btn-success shadow" onclick="showCci()">cci</button> -->
                    <div class="card bg-teal shadow" style="cursor: pointer;" onclick="showDj()">
                        <div class="card-body p-2">
                            <p class="m-0 text-center"><i class="fa fa-file-pdf"></i> Declaracion Jurada</p>
                        </div>
                    </div>
                    <div class="card bg-olive shadow" style="cursor: pointer;" onclick="showCci()">
                        <div class="card-body p-2">
                            <p class="m-0 text-center"><i class="fa fa-file-pdf"></i> CCI</p>
                        </div>
                    </div>
                    <div class="card bg-lightblue shadow" style="cursor: pointer;" onclick="showAnexo5()">
                        <div class="card-body p-2">
                            <p class="m-0 text-center"><i class="fa fa-file-pdf"></i> Anexo 5</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 contentPdf">
                    <!-- <img src="https://img.freepik.com/vector-premium/icono-documento-icono-perfecto-pixel-profesional-optimizado-resoluciones-grandes-pequenas_775815-282.jpg" class="w-100"> -->
                    <div class="card bg-secondary">
                        <div class="overlay overlayRegistros">
                            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                        </div>
                        <div class="card-body p-1">
                            <div class="row banerPdf justify-content-center">
                                <img src="{{asset('img/panelAdm/formatos.png')}}" class="w-50">
                            </div>
                            <div class="contentPreview" style="display: none;">
                                <embed src="" id="pdfViewer" class="w-100" style="height: 100vh;">
                            </div>
                        </div>
                    </div>
                    <!-- <embed src="" id="pdfViewer" class="w-100" style="height: 100vh;"> -->
                </div>
            </div>
    	</div>

        <!-- <div class="card-footer py-1 border-transparent">
            <button type="button" class="btn btn-success float-right save"><i class="fa fa-lock"></i> Cambiar contraseña</button>
        </div> -->
    </div>
    <div class="card" style="display: none;">
        <div class="card-body">
            <!-- <embed src="" id="pdfViewer" class="w-75" style="height: 500px;"> -->
        </div>
    </div>
</div>
<script>
    localStorage.setItem("sba",6);
    var flip=0;
    $(document).ready( function () {
        $('.overlayPagina').css("display","none");
        showDj();
        // $('.overlayRegistros').css("display","none");
    });
    function showCci()
    {
        $('.banerPdf').css('display','flex');
        $('.contentPreview').css('display','none');
        $('.overlayRegistros').css("display","flex");
        $.ajax({
            url: "{{route('saveCciDel')}}",
            method: 'get',
            success: function(r) {
                console.log(r);
                var dir = "{{route('formatos-file')}}/"+r.pdf;
                $('#pdfViewer').attr('src',dir);
                // $('.banerPdf').remove();
                $('.banerPdf').css('display','none');
                $('.contentPreview').css('display','block');
                $('.overlayRegistros').css("display","none");
            },
            error: function(xhr, status, error) {
                console.error('Error al obtener el PDF:', status, error);
            }
        });
    }
    function showDj()
    {
        $('.banerPdf').css('display','flex');
        $('.contentPreview').css('display','none');
        $('.overlayRegistros').css("display","flex");
        $.ajax({
            url: "{{route('saveDjDel')}}",
            method: 'get',
            success: function(r) {
                console.log(r);
                var dir = "{{route('formatos-file')}}/"+r.pdf;
                $('#pdfViewer').attr('src',dir);
                // $('.banerPdf').remove();
                $('.banerPdf').css('display','none');
                $('.contentPreview').css('display','block');
                $('.overlayRegistros').css("display","none");
            },
            error: function(xhr, status, error) {
                console.error('Error al obtener el PDF:', status, error);
            }
        });
    }
    function showAnexo5()
    {
        $('.banerPdf').css('display','flex');
        $('.contentPreview').css('display','none');
        $('.overlayRegistros').css("display","flex");
        $.ajax({
            url: "{{route('saveAnexo5Del')}}",
            method: 'get',
            success: function(r) {
                console.log(r);
                var dir = "{{route('formatos-file')}}/"+r.pdf;
                $('#pdfViewer').attr('src',dir);
                // $('.banerPdf').remove();
                $('.banerPdf').css('display','none');
                $('.contentPreview').css('display','block');
                $('.overlayRegistros').css("display","none");
            },
            error: function(xhr, status, error) {
                console.error('Error al obtener el PDF:', status, error);
            }
        });
    }
</script>
@endif
@endsection