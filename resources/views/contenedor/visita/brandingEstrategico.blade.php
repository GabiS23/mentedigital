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
                    <h2><b style="color:#EB5D1C;">BRANDING</b> ESTRATÉGICO</h2>
                    <!-- <p style="color:#fff"></p> -->
                    <br><br>
                    <div class="card">
                        <img src="./visita/imagen_empresa/slider/branding.estrategico.svg" class=" card-img-top" alt="branding bolivia" style="width:310px;height:310px;">
                        <br><br>
                    </div>
                    <p style="color:#000 !important;">"Quien piense que el precio barato es lo más importante para vender, no conoce el valor simbólico de las cosas"<br>Jurgen Klaric</p>
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
                <h3 class="titulo-seccion" style="color:#fff !important;">¿QUÉ ES BRANDING Y POR QUÉ USARLO?</h3>
                <p class="titulo-seccion" style="color:#fff !important;">Aquí te lo explicamos</p>
               <br>
            </div>
            <div class="col-md-4" >
            </div>
            <div class="col-md-4">
                <div class="cuadrado">
                    <h3 style="color:#fff !important;">QUÉ ES</h3>
                    <p style="color:#fff !important;">
                    Branding es el proceso de creación, diseño y construcción de marca, es lo que el cliente percibe, piensa, siente y dice sobre un producto o servicio, es lo que la marca representa para consumidores.
                    </p>
                </div>
                <br>
                <div class="cuadrado">
                    <h3 style="color:#fff !important;">POR QUÉ USARLO</h3>
                    
                    <p style="color:#fff !important;">
                    Mediante publicación en redes sociales de contenido de valor persuasivo y emocional,  se proyectará el valor simbólico, promesa de valor y la ventaja competitiva de tu marca, proporcionando una experiencia satisfactoria a tu cliente. 
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
                <h3 class="titulo-seccion" style="color:#fff !important;">PROCESOS QUE SEGUIMOS PARA REALIZAR TU ANIMACIÓN 2D Y 3D</h3>
                <p class="titulo-seccion" style="color:#fff !important;">Aquí te lo explicamos</p>
               <br>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="cuadrado">
                    <h4 style="color:#fff !important;">Paso 1</h4>
                    <p>Comenzamos con un diagnóstico de tu marca</p>
                </div>
                <br>
                <div class="cuadrado">
                    <h4 style="color:#fff !important;">Paso 2</h4>
                    <p>Desarrollamos 1 Plan  de branding</p>
                </div> 
                <br>
                <div class="cuadrado">
                    <h4 style="color:#fff !important;">Paso 4</h4>
                    <p>Creamos el contenido gráfico</p>
                </div> 
                <br>
                <div class="cuadrado">
                    <h4 style="color:#fff !important;">Paso 3</h4>
                    <p>Desarrollamos 1 manual de marca</p>
                </div> 
                <br>
                <div class="cuadrado">
                    <h4 style="color:#fff !important;">Paso 5</h4>
                    <p>Realizamos una reunión de satisfacción con el cliente</p>
                </div> 
                <br><br>
            </div>
            <div class="col-md-4">
            </div>
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
                            <img src="./visita/imagen_empresa/logos/perfilFace.png" alt="logo mentedigital">

                                <form action="mailto:mentedigitalbolivia@gmail.com" method="post" enctype="text/plain">
                                    <div class="form-group">
                                        <input type="text" name="Nombre" class="form-input form-control" placeholder="Nombre">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="Celular" class="form-input form-control" placeholder="Celular">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Mensaje" class="form-input form-control" placeholder="Mensaje">
                                    </div>
                                    <input type="submit" value="Enviar"  class="btn btn-primary" style="border-radius: 40px;background-color:#482359;border-color:#482359;padding: 10px 10px 10px 10px;border-radius: 50px;margin: 10px 0px 0px 0px;width:100%">
                                    <input type="reset" value="Reset" class="btn btn-primary" style="border-radius: 40px;background-color:#482359;border-color:#482359;padding: 10px 10px 10px 10px;border-radius: 50px;margin: 10px 0px 0px 0px;width:100%">
                                </form>
                                    <br><br><br><br>
                                <div class="card">
                                    <p style="color:#000;">Te pordría interezar</p>
                                    <br>
                                    <img src="./visita/imagen_empresa/servicios/tiktok-comercio.svg" class="card-img-top" alt="tiktok comercial bolivia">
                                    
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