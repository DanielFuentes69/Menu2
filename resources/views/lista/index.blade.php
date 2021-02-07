@extends('layouts.plantilla')
@section('content')

<script type="text/javascript">
    
function addPro(code) {
    $("#trVacio").remove();
    var cant = 1;
    var url = "../../../moon2/process/processform.php";

    var parametros = {
        idp: code,
        can: cant,
        SECURITY_ID: "tienda",
        action: 'index',
        controller: 'outside/OutsideController'
    };
    $.ajax({
        url: url,
        data: parametros,
        type: "POST",
        dataType: "json"
    })
            .done(function (data) {
                if (data.exist === true) {
                    $("#tr" + data.cod)
                            .replaceWith('<tr id="tr' + data.id + '">\n\
                        <td style="color: #000; width: 15%;"><small>' + data.name + '</small></td>\n\
                        <td style="color: #000; width: 55%;"><small>' + data.precio + '</small></td>\n\
                        <td style="width: 10%;"><a onclick="javascript:delPro(\'' + data.cod + '\');"><i class="fa fa-trash" style="color: #e57d20; font-size: 15px;"></i></a></td>\n\
                        </tr>');
                } else {
                    $("#shopTbody")
                            .append('<tr id="tr' + data.cod + '">\n\
                        <td style="color: #000; width: 15%;"><small>' + data.cant + '</small></td>\n\
                        <td style="color: #000; width: 55%;"><small>' + data.nom + '</small></td>\n\
                        <td class=\"text-right\" style="color: #000; width: 20%;"><small>' + data.valor + '</small></td>\n\
                        <td style="width: 10%;"><a onclick="javascript:delPro(\'' + data.cod + '\');"><i class="fa fa-trash" style="color: #e57d20; font-size: 15px; cursor: pointer;" ></i></a></td>\n\
                        </tr>');
                }
                $("#valArtUp").html(data.total);
                $("#valArtDown").html(data.total);
                $("#cantArt").html(data.cantTotal);
                var $showDuration = 400;
                var $hideDuration = 1000;
                var $timeOut = 7000;
                var $extendedTimeOut = 1000;
                var $extendedTimeOut = 1000;
                var $showEasing = "swing";
                var $hideEasing = "linear";
                var $showMethod = "fadeIn";
                var $hideMethod = "fadeOut";
                toastr.options = {
                    closeButton: 'checked',
                    progressBar: 'false',
                    positionClass: 'toast-bottom-center',
                    onclick: null
                };
                toastr.info('El producto fue agregado correctamente al carrito de compras', 'Operación Exitosa:');
            })

            .fail(function (msg) {
                alert("Error:" + msg);
            });
}

</script>


    <div class="main-panel" >
        <div class="content">
            <div class="page-inner">
                <div class="container">
                    <br>
                    <div class="row">
                        <div class="col-md-11">
                            <h1>Menú</h1>
                        </div>
                        <div class="col-md-1">
                            <i class="fas fa-shopping-cart fa-2x"></i>
                        </div>
                    </div>
                    <br>
                    <h2>Hamburguesas</h2>
                    <div class="row">
                        @foreach ($menus->productos as $p)
                            <div class="col-sm-6 col-md-4">
                                <div class="card card-stats card-round">
                                    <div class="card-body ">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <div class="icon-big text-center bubble-shadow-small">
                                                    <img src="senasoft/img/{{ $p->foto }}" width="120">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h2 class="card-category" style="color: black">{{ $p->name }}</p>
                                                    <h4 class="card-title">$ {{ $p->precio }}</h4>
                                                    <input type="number" name="" placeholder="Digite la cantidad"
                                                        style="width: 60px;" min="1" max="9999" value="1"><br>
                                                    <button type="submit" onclick="addPro('1');" class="btn btn-warning ">Añadir al
                                                        carrito</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
