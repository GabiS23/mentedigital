@extends('principal.visita.layout_visita')

@section('content')

<style>
.titulo-seccion{
    text-align:center;
}
.card{
  border: 0px solid !important;
  align-items: center;
  /* border: 1px solid rgba(0,0,0,.125); */
}
.servicio-contenido{
    background-color:#482359; 
    padding-top:80px;
}
.servicio-contenido2{
    background-color:#EB5D1C; 
    padding-top:50px;
}
.cuadrado{
    /* border-radius: 20px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    padding: 40px;
    text-align: center;
    background-color: #ffffff;
    border-botom: 6px solid #85c0ff; */
    outline: 1px solid #ffffff;
    padding:15px;
}
</style>
<section class="servicio-principal">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br><br><br><br><br><br>
                <div class="titulo-seccion">
                    <h2><b style="color:#EB5D1C;">PRODUCCIÓN </b>FOTOGRÁFICA COMERCIAL</h2>
                    <!-- <p style="color:#fff"></p> -->
                    <br><br>
                    <div class="card">
                        <img src="./visita/imagen_empresa/services/sfotografia.jpg" class=" card-img-top" alt="..." style="width:310px;height:310px;">
                        <br><br>
                    </div>
                    <p style="color:#000 !important;">"Lo importante es ver aquello que resulta invisible para los demás” 
                   <br>Robert Frank</p>
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="servicio-contenido">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="titulo-seccion" style="color:#fff !important;">FOTOGRAFÍA PRODUCTO</h3>
                <p class="titulo-seccion" style="color:#fff !important;">Aquí te lo explicamos</p>
               <br>
            </div>
            <div class="col-md-4" >
            </div>
            <div class="col-md-4">
                <div class="cuadrado">
                    <h3 style="color:#fff !important;">QUÉ ES?</h3>
                    <!-- <br> -->
                    <p style="color:#fff !important;">
                        Es una técnica fotográfica que se tomada desde 
                        un plano cercano o macro, para reflejar de 
                        manera clara el producto y su envase o 
                        empaque sin priorizar el fondo o el contexto
                        y su finalidad es informar al cliente 
                    </p>
                </div>
                <br>
                <div class="cuadrado">
                    <h3 style="color:#fff !important;">POR QUÉ USARLO</h3>
                    
                    <p style="color:#fff !important;">
                    Porque usarlo: 
                    esta técnica te permite resaltar características y 
                    detalles de su producto, provocando el deseo 
                    del cliente, que logra atraerlo a la acción, a través 
                    del uso de imágenes impactantes.
                    </p>
                </div>
                <br> <br>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</section>
<section class="servicio-contenido2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="titulo-seccion" style="color:#fff !important;">FOTOGRAFÍA PUBLICITARIA</h3>
                <p class="titulo-seccion" style="color:#fff !important;">Aquí te lo explicamos</p>
               <br>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="cuadrado">
                    <h4 style="color:#fff !important;">QUÉ ES</h4>
                    <p>
                    Que es: 
                    Es una técnica fotográfica permite jugar con 
                    la realidad y la fantasía en una sola imagen, 
                    busca crear una escena en la que el producto sea 
                    la prioridad y todo su entorno gire en torno a eso, 
                    necesita de un proceso de postproducción complejo
                    y su misión es contar una historia con un mensaje
                    publicitario. 
                    </p>
                </div>
                <br>
                <div class="cuadrado">
                    <h4 style="color:#fff !important;">POR QUÉ USARLO</h4>
                    <p>
                    Está técnica permite persuadir e invitar al cliente 
                    a que desee influyendo en su comportamiento de 
                    compra,  la visualización  de la imagen genera el 
                    deseo de compra en el consumidor final. 
                    Para incrementar el éxito en tus ventas se debe 
                    acompañar cada producto de una buena 
                    fotografía que refleje la esencia y el valor simbólico 
                    y ventaja competitiva de su marca.

                    </p>
                </div> 
                <br>
                <br>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</section>
<br><br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="titulo-seccion">
                    <br><br>
                    <h2>NUESTROS SERVICIOS</h2>
                </div>
                <br>
                <img src="./visita/imagen_empresa/foto-servicios/tres.svg" class="card-img-top" alt="...">
                <br><br>
                <img src="./visita/imagen_empresa/foto-servicios/uno.svg" class="card-img-top" alt="...">
                <br><br>
                <!-- <img src="./visita/imagen_empresa/foto-servicios/tres.svg" class="card-img-top" alt="...">
                <br><br> -->
                <img src="./visita/imagen_empresa/foto-servicios/cuatro.svg" class="card-img-top" alt="...">
                <br><br>
                <!-- <div class="titulo-seccion">
                    <br><br>
                    <h2>ALGUNOS DE NUESTROS TRABAJOS</h2>
                </div> -->
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>
<br><br>
<section class="servicio-contenido3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="formulario-cotizar titulo-seccion">
                    <button type="button" class="btn btn-default boton_personalizado" style="font-family: 'Open Sans', sans-serif;font-size: 13px !important;" >Mira nuestros servicios y planes</button>
                    <br><br><br>
                    <!-- formulario contacto -->
                    <div class="">
                        <div class="cuadrado">
                            <h2>COTIZAR</h2>
                            <img src="./visita/imagen_empresa/logos/perfilFace.png" class="" alt="logo mente digital">

                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-input form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Numero de celular" style="font-family: 'Open Sans', sans-serif;font-size: 13px !important;font-weight: normal !important;">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-input form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Mensaje" style="font-family: 'Open Sans', sans-serif;font-size: 13px !important;font-weight: normal !important;">
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="button" style="border-radius: 40px;background-color:#482359;border-color:#482359;padding: 10px 10px 10px 10px;
                                    border-radius: 50px;
                                    margin: 10px 0px 0px 0px;">Enviar</button>
                                </div>
                            </form>
                            <br><br><br><br>
                            <div class="card">
                                <p style="color:#000;">Te pordría interezar</p>
                                <br>
                                <img src="./visita/imagen_empresa/servicios/tiktok-comercio.svg" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- fin formulario contacto -->
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</section>
<br><br>

@stop
